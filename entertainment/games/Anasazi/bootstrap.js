pc.extend(pc, function () {
    var CANVAS_ID = 'application-canvas';
    var CONTAINER_ID = 'application-container';
    var CONSOLE_ID = 'application-console';

    /**
    * @name pc.fw.Bootstrap
    * @class
    * @description Bootstrap class is used to start up the application from either an export or from the Designer via the API.
    * @param {Object} options
    * @param {String} options.username Username of the currently authenticated user
    * @param {String} options.depotName Name of the depot to load the application from
    * @param {Boolean} options.useApi If true then authenticate to the API and load content data from there.
    * @param {Boolean} options.displayLoader If true then show debug loading info
    * @param {Boolean} options.repository If true then override the prefix to script urls for the current repository
    * @param {scriptPrefix} options.scriptPrefix Prefix for script urls
    */
    var Bootstrap = function (options) {
        options = options || {};

        var url = new pc.URI(window.location.href);
        this.url = url.toString();
        this.query = url.getQuery();

        this.element = options['element'] || document.body;

        this.username = options.username;
        this.depotName = options.depotName;
        this.useApi = options.useApi;
        this.displayLoader = options.displayLoader;
        this.repository = options.repository;
        this.scriptPrefix = options.scriptPrefix;

        this.mouse = null;
        this.keyboard = null;
        this.gamepads = null;

        this.container = null;
        this.canvas = null;
        this.console = null;
        this.numLogs = 0;
        this.logTimestamp = null;
        this.stopLogs = false;

        this.libraries = [];

        this._createCanvas();
        this._createInputDevices();

        if (this.useApi) {
            this._createConsole();
        }

        pc.extend(this, pc.events);
    };

    Bootstrap.prototype = {
        /**
        * @function
        * @name pc.fw.Bootstrap#start
        * @description Start the application
        */
        start: function (packId) {
            if (this.useApi) {
                this._startFromDesigner(packId);
            } else {
                this._start(packId, pc.content);
            }
        },

        _createApplication: function (packId, content) {
            // create application object
            try {
                this.application = new pc.fw.Application(this.canvas, {
                    content: content,
                    depot: this.depot,
                    keyboard: this.keyboard,
                    mouse: this.mouse,
                    touch: this.touch,
                    gamepads: this.gamepads,
                    displayLoader: this.displayLoader,
                    libraries: content.appProperties['libraries'],
                    scriptPrefix: this.scriptPrefix,
                    cache: !this.useApi
                });
                // Configure resolution and resize event
                this.application.setCanvasResolution(this.appProperties['resolution_mode'], this.appProperties['width'], this.appProperties['height']);
                this.application.setCanvasFillMode(this.appProperties['fill_mode'], this.appProperties['width'], this.appProperties['height']);
                window.addEventListener('resize', this._onWindowResize.bind(this), false);
                this._onWindowResize();

                this.application.loadFromToc(packId, function () {
                    // show canvas
                    this.canvas.style.visibility = 'visible';
                    this.canvas.focus();

                    // start update loop
                    this.application.start();

                    this.fire('loaded');
                }.bind(this), function (errors) {
                    this.fire('error', errors);
                }.bind(this), function (value) {
                    this.fire('progress', value);
                }.bind(this));
            } catch (e) {
                if (e instanceof pc.gfx.UnsupportedBrowserError) {
                   this._displayError('This page requires a browser that supports WebGL.<br/>' +
                    '<a href="http://get.webgl.org">Click here to find out more.</a>');
                } else if (e instanceof pc.gfx.ContextCreationError) {
                    this._displayError("It doesn't appear your computer can support WebGL.<br/>" +
                    '<a href="http://get.webgl.org/troubleshooting/">Click here for more information.</a>');
                }
            }
        },

        _start: function (packId, content) {
            this.appProperties = content.appProperties;
            this._createApplication(packId, content);
        },

        _startFromDesigner: function (packId) {
            var self = this;
            self.server = new pc.common.Corazon(pc.config['api_url'], pc.config['corazon']);

            self.server.authorize(self.username, function () {
                self.server.users.getOne(self.username, function (user) {
                    user.depots.getOne(self.depotName, function (depot) {
                        self.depot = depot;

                        depot.getContent(packId, function (content) {
                            pc.content = new pc.fw.ContentFile(content);
                            self.appProperties = pc.content.appProperties;
                            depot.repositories.getOne('active', function (repository) {
                                // If there is a code repository enabled, replace localhost prefix with the code repository location
                                if (self.repository) {
                                    self.scriptPrefix = pc.path.join(self.server.baseUrl, repository.url);
                                }
                                self._createApplication(packId, pc.content);
                            }, function (errors) {
                                // No code repository
                                self._createApplication(packId, pc.content);
                            });
                        });

                    }, function (errors) {
                        logERROR(errors.join(";"));
                    });

                }, function (errors) {
                    logERROR(errors.join(";"));
                });
            });
        },

        /**
         * @private
         * @function
         * @name pc.Bootstrap#_setTitle
         * @description Set the title of the window
         * @param {String} value The value to include in the title in the for "value - PlayCanvas"
         */
        _setTitle: function (value) {
            document.title = pc.string.format('{0} - PlayCanvas', value);
        },

        /**
         * @private
         * @function
         * @name pc.Bootstrap#_displayError
         * @description Show error message if application fails to load
         */
        _displayError: function (html) {
            if (this.container) {
                var block =
                    '<table style="background-color: #8CE; width: 100%; height: 100%;"><tr>' +
                    '<td align="center">' +
                    '<div style="display: table-cell; vertical-align: middle;">' +
                    '<div style="">' + html + '</div>' +
                    '</div>' +
                    '</td></tr></table>';
                this.container.innerHTML = block;
            }
        },

        /**
         * @private
         * @function
         * @name pc.Bootstrap#_createCanvas
         * @description Create the container and canvas elements
         */
        _createCanvas: function () {
            this.container = document.createElement('div');
            this.container.setAttribute('id', CONTAINER_ID);
            this.container.style.position = 'relative';

            this.container.style.width = '100%';
            this.container.style.height = '100%';

            this.canvas = document.createElement('canvas');
            this.canvas.setAttribute('id', CANVAS_ID);
            this.canvas.setAttribute('tabindex', 0);
            this.canvas.style.visibility = 'hidden';
            this.canvas.style.width = '100%';
            this.canvas.style.height = '100%';

            // Disable I-bar cursor on click+drag
            this.canvas.onselectstart = function () { return false; };

            this.container.appendChild(this.canvas);
            this.element.insertBefore(this.container, this.element.firstChild);
        },

        _createInputDevices: function () {
            this.keyboard = new pc.input.Keyboard(this.container);
            this.mouse = new pc.input.Mouse(this.container);
            this.gamepads = new pc.input.GamePads();
            if ('ontouchstart' in window) {
                this.touch = new pc.input.TouchDevice(this.container);
            }
        },

        _createConsole: function () {
            var self = this;

            // create console DOM
            this.console = document.createElement('div');
            this.console.setAttribute('id', CONSOLE_ID);
            this.console.style.position = 'absolute';
            this.console.style.bottom = 0;
            this.console.style.left = 0;
            this.console.style.right = 0;
            this.console.style.zIndex = 100;
            this.console.style.maxHeight = '40%';
            this.console.style.backgroundColor = 'rgba(0,0,0,0.7)';
            this.console.style.fontSize = '12px';
            this.console.style.paddingLeft = '10px';
            this.console.style.overflowY = 'scroll';
            this.console.style.wordWrap = 'break-word';
            this.console.style.fontFamily = "monaco, consolas, courier, monospace";
            this.console.style.borderTop = "1px solid #333";

            this.element.insertBefore(this.console, this.element.firstChild);

            // create close button DOM
            var close = document.createElement('img');
            close.setAttribute('src', 'http://s3-eu-west-1.amazonaws.com/static.playcanvas.com/images/icons/fa/16x16/remove.png');
            close.style.cssFloat = 'right';
            close.style.padding = '5px';
            close.style.cursor = 'pointer';

            close.addEventListener('click', function (e) {
                this._clearConsole();
            }.bind(this));

            this.console.appendChild(close);

            this._clearConsole();

            // Show javascript errors
            window.onerror = function (msg, url, line, col, e) {
                self._logWindowError({
                    message: msg,
                    filename: url,
                    line: line,
                    col: col,
                    stack: e ? e.stack : null
                });
            }

            // Intercept console.error and show errors
            // in our console as well
            var consoleError = console.error;
            console.error = function (msg) {
                consoleError.call(this, msg);
                self._logError(msg);
            }
        },

        // Removes child elements that correspond to log messages
        // and hides the console
        _clearConsole: function () {
            this.console.style.visibility = 'hidden';
            var children = this.console.children;
            var i = children.length;
            while(i--) {
                if (children[i].tagName !== 'IMG') {
                    this.console.removeChild(children[i]);
                }
            }
        },

        _appendToConsole: function (innerHtml, elementClass) {
            // prevent too many log messages
            if (this.numLogs == 0) {
                this.logTimestamp = Date.now();
            }

            this.numLogs++;
            if (this.numLogs > 60) {
                this.numLogs = 0;
                if (Date.now() - this.logTimestamp < 2000) {
                    this.stopLogs = true;
                    innerHtml = "Too many logs. Open the browser console to see more details.";
                }
            }

            // create new DOM element with the specified inner HTML
            var element = document.createElement('p');
            element.innerHTML = innerHtml.replace(/\n/g, '<br/>');
            element.setAttribute('class', elementClass);
            this.console.appendChild(element);
            this.console.style.visibility = 'visible';
            return element;
        },

        _logWindowError: function (e) {
            var msg = e.message;

            if (this.stopLogs) {
                return;
            }

            if (e.filename) {
                var filename = e.filename;

                // check if this is a playcanvas script
                var codeEditorUrl = null;
                var target = null;
                var parts = filename.split('//')[1].split('/');
                if (parts.length > 9) {
                    // if this is a playcanvas script
                    // then create a URL that will open the code editor
                    // at that line and column
                    if (parts[1] == 'api' && parts[2] == 'code') {
                        target = pc.string.format("/{0}/{1}/editor/{2}",
                            parts[3],
                            parts[4],
                            parts.slice(9).join('/')
                        );

                        codeEditorUrl = pc.string.format("{0}?line={1}&col={2}",
                            target,
                            e.line,
                            e.col
                        );
                    }
                } else {
                    codeEditorUrl = e.filename;
                }

                var slash = filename.lastIndexOf('/');
                var relativeFilename = filename.slice(slash + 1);
                var innerHtml = pc.string.format('<a href="{0}" target="{1}" style="color:rgb(255, 143, 0)">[{2}:{3}]</a>: {4}', codeEditorUrl, target, relativeFilename, e.line, e.message);
                this._logError(innerHtml);

                // append stacktrace as well
                var stack = this._appendToConsole(e.stack.replace(/ /g, '&nbsp;'), 'application-console-stacktrace');
                stack.style.color = "#ddd";

            } else {
                // Chrome only shows 'Script error.' if the error comes from
                // a different domain.
                if (e.message && e.message !== 'Script error.') {
                    this._logError(e.message);
                } else {
                    this._logError('Error loading scripts. Open the browser console for details.');
                }
            }
        },


        _logError: function (msg) {
            if (this.stopLogs) {
                return;
            }

            var element = this._appendToConsole(msg, 'application-console-error');
            element.style.color = 'red';
        },

        /**
         * @function
         * @name pc.Bootstrap#onWindowResize
         * @description Called when a window resize event is fired if the application is set to fill the window
         */
        _onWindowResize: function () {
            var size = this.application.resizeCanvas(this.canvas.width, this.canvas.height);
            var fillMode = this.application.fillMode;
            if (fillMode === pc.fw.FillMode.KEEP_ASPECT ||  fillMode === pc.fw.FillMode.NONE) {
                var marginTop = (window.innerHeight - size.height) / 2;
                this.container.style.width  = this.canvas.style.width;
                this.container.style.height = this.canvas.style.height;
                this.container.style.margin = marginTop + "px auto";
            } else {
                this.container.style.margin = 'auto auto';
            }
        }
    };

    var ProgressBar = function (element, height) {
        this._element = element;
        this._height = height;
        this._container = null;
        this._bar = null;
        this._value = 0;
    };

    ProgressBar.prototype = {
        attach: function () {
            this._container = document.createElement('div');
            this._container.setAttribute('id', 'progress-container');
            this._container.setAttribute('class', 'pc-progress-container');
            this._container.style.width = '100%';
            this._container.style.height = this._height + 'px';
            this._container.style.position = 'absolute';
            this._container.style.backgroundColor = '#444';

            this._bar = document.createElement('div');
            this._bar.setAttribute('id', 'progress-bar');
            this._bar.setAttribute('class', 'pc-progress-bar');
            this._bar.style.width = '0%';
            this._bar.style.height = '100%';
            this._bar.style.backgroundColor = '#fff';

            this._container.appendChild(this._bar);
            this._element.appendChild(this._container);
        },

        get value() {
            return this._value;
        },

        set value(v) {
            this._value = v;
            this._value = Math.min(1, Math.max(0, this._value));

            this._bar.style.width = this._value * 100 + '%'
        }
    };

    return {
        Bootstrap: Bootstrap,
        ProgressBar: ProgressBar
    }
}());
