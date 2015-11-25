
var Module;
if (typeof Module === 'undefined') Module = eval('(function() { try { return Module || {} } catch(e) { return {} } })()');
if (!Module.expectedDataFileDownloads) {
  Module.expectedDataFileDownloads = 0;
  Module.finishedDataFileDownloads = 0;
}
Module.expectedDataFileDownloads++;
(function() {

    var decrunchWorker = new Worker('crunch-worker.js');
    var decrunchCallbacks = [];
    decrunchWorker.onmessage = function(msg) {
      decrunchCallbacks[msg.data.callbackID](msg.data.data);
      console.log('decrunched ' + msg.data.filename + ' in ' + msg.data.time + ' ms, ' + msg.data.data.length + ' bytes');
      decrunchCallbacks[msg.data.callbackID] = null;
    };
    function requestDecrunch(filename, data, callback) {
      decrunchWorker.postMessage({
        filename: filename,
        data: new Uint8Array(data),
        callbackID: decrunchCallbacks.length
      });
      decrunchCallbacks.push(callback);
    }

    var PACKAGE_PATH;
    if (typeof window === 'object') {
      PACKAGE_PATH = window['encodeURIComponent'](window.location.pathname.toString().substring(0, window.location.pathname.toString().lastIndexOf('/')) + '/');
    } else {
      // worker
      PACKAGE_PATH = encodeURIComponent(location.pathname.toString().substring(0, location.pathname.toString().lastIndexOf('/')) + '/');
    }
    var PACKAGE_NAME = 'four.data';
    var REMOTE_PACKAGE_BASE = 'four.data';
    if (typeof Module['locateFilePackage'] === 'function' && !Module['locateFile']) {
      Module['locateFile'] = Module['locateFilePackage'];
      Module.printErr('warning: you defined Module.locateFilePackage, that has been renamed to Module.locateFile (using your locateFilePackage for now)');
    }
    var REMOTE_PACKAGE_NAME = typeof Module['locateFile'] === 'function' ?
                              Module['locateFile'](REMOTE_PACKAGE_BASE) :
                              ((Module['filePackagePrefixURL'] || '') + REMOTE_PACKAGE_BASE);
    var REMOTE_PACKAGE_SIZE = 6469684;
    var PACKAGE_UUID = 'f6b57964-5014-46ae-a0df-8d3903d1bd74';
  
    function fetchRemotePackage(packageName, packageSize, callback, errback) {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', packageName, true);
      xhr.responseType = 'arraybuffer';
      xhr.onprogress = function(event) {
        var url = packageName;
        var size = packageSize;
        if (event.total) size = event.total;
        if (event.loaded) {
          if (!xhr.addedTotal) {
            xhr.addedTotal = true;
            if (!Module.dataFileDownloads) Module.dataFileDownloads = {};
            Module.dataFileDownloads[url] = {
              loaded: event.loaded,
              total: size
            };
          } else {
            Module.dataFileDownloads[url].loaded = event.loaded;
          }
          var total = 0;
          var loaded = 0;
          var num = 0;
          for (var download in Module.dataFileDownloads) {
          var data = Module.dataFileDownloads[download];
            total += data.total;
            loaded += data.loaded;
            num++;
          }
          total = Math.ceil(total * Module.expectedDataFileDownloads/num);
          if (Module['setStatus']) Module['setStatus']('Downloading data... (' + loaded + '/' + total + ')');
        } else if (!Module.dataFileDownloads) {
          if (Module['setStatus']) Module['setStatus']('Downloading data...');
        }
      };
      xhr.onload = function(event) {
        var packageData = xhr.response;
        callback(packageData);
      };
      xhr.send(null);
    };

    function handleError(error) {
      console.error('package error:', error);
    };
  
      var fetched = null, fetchedCallback = null;
      fetchRemotePackage(REMOTE_PACKAGE_NAME, REMOTE_PACKAGE_SIZE, function(data) {
        if (fetchedCallback) {
          fetchedCallback(data);
          fetchedCallback = null;
        } else {
          fetched = data;
        }
      }, handleError);
    
  function runWithFS() {

function assert(check, msg) {
  if (!check) throw msg + new Error().stack;
}
Module['FS_createPath']('/', 'packages', true, true);
Module['FS_createPath']('/packages', 'gk', true, true);
Module['FS_createPath']('/packages/gk', 'cyber', true, true);
Module['FS_createPath']('/packages/gk/cyber', 'glow_colors', true, true);
Module['FS_createPath']('/packages/gk/cyber', 'cyberskydark', true, true);
Module['FS_createPath']('/packages/gk/cyber', 'cybersky', true, true);
Module['FS_createPath']('/packages/gk/cyber', 'plain_colors', true, true);
Module['FS_createPath']('/packages', 'base', true, true);

    function DataRequest(start, end, crunched, audio) {
      this.start = start;
      this.end = end;
      this.crunched = crunched;
      this.audio = audio;
    }
    DataRequest.prototype = {
      requests: {},
      open: function(mode, name) {
        this.name = name;
        this.requests[name] = this;
        Module['addRunDependency']('fp ' + this.name);
      },
      send: function() {},
      onload: function() {
        var byteArray = this.byteArray.subarray(this.start, this.end);

        if (this.crunched) {
          var ddsHeader = byteArray.subarray(0, 128);
          var that = this;
          requestDecrunch(this.name, byteArray.subarray(128), function(ddsData) {
            byteArray = new Uint8Array(ddsHeader.length + ddsData.length);
            byteArray.set(ddsHeader, 0);
            byteArray.set(ddsData, 128);
            that.finish(byteArray);
          });
        } else {

          this.finish(byteArray);

        }

      },
      finish: function(byteArray) {
        var that = this;
        Module['FS_createPreloadedFile'](this.name, null, byteArray, true, true, function() {
          Module['removeRunDependency']('fp ' + that.name);
        }, function() {
          if (that.audio) {
            Module['removeRunDependency']('fp ' + that.name); // workaround for chromium bug 124926 (still no audio with this, but at least we don't hang)
          } else {
            Module.printErr('Preloading file ' + that.name + ' failed');
          }
        }, false, true); // canOwn this data in the filesystem, it is a slide into the heap that will never change
        this.requests[this.name] = null;
      },
    };
      new DataRequest(0, 7862, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_01_sc.png');
    new DataRequest(7862, 13235, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_box_01_gc.png');
    new DataRequest(13235, 22812, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_box_01_cc.png');
    new DataRequest(22812, 28956, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/Thumbs.db');
    new DataRequest(28956, 31814, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_05.png');
    new DataRequest(31814, 34673, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_04.png');
    new DataRequest(34673, 36426, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/package.cfg');
    new DataRequest(36426, 39285, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_03.png');
    new DataRequest(39285, 42142, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_nm.png');
    new DataRequest(42142, 45003, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_01.png');
    new DataRequest(45003, 47863, 0, 0).open('GET', '/packages/gk/cyber/glow_colors/glow_color_02.png');
    new DataRequest(47863, 878585, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_lf.png');
    new DataRequest(878585, 1716332, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_bk.png');
    new DataRequest(1716332, 2457308, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_up.png');
    new DataRequest(2457308, 3202857, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_dn.png');
    new DataRequest(3202857, 4019731, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_rt.png');
    new DataRequest(4019731, 4848946, 0, 0).open('GET', '/packages/gk/cyber/cyberskydark/gkskycyber_ft.png');
    new DataRequest(4848946, 5034628, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_rt.jpg');
    new DataRequest(5034628, 5221140, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_bk.jpg');
    new DataRequest(5221140, 5406791, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_lf.jpg');
    new DataRequest(5406791, 5590225, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_ft.jpg');
    new DataRequest(5590225, 5764639, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_up.jpg');
    new DataRequest(5764639, 5923216, 0, 0).open('GET', '/packages/gk/cyber/cybersky/gkskycyber_dn.jpg');
    new DataRequest(5923216, 5926076, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_02_cc.png');
    new DataRequest(5926076, 5928937, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_04_cc.png');
    new DataRequest(5928937, 5931797, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_03_cc.png');
    new DataRequest(5931797, 5939659, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_01_sc.png');
    new DataRequest(5939659, 5943243, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/Thumbs.db');
    new DataRequest(5943243, 5944794, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/package.cfg');
    new DataRequest(5944794, 5947653, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_01_cc.png');
    new DataRequest(5947653, 5950513, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_05_cc.png');
    new DataRequest(5950513, 5953370, 0, 0).open('GET', '/packages/gk/cyber/plain_colors/plain_color_nm.png');
    new DataRequest(5953370, 6451084, 0, 0).open('GET', '/packages/base/cyber1.ogz');
    new DataRequest(6451084, 6451388, 0, 0).open('GET', '/packages/base/cyber1.cfg');
    new DataRequest(6451388, 6469684, 0, 0).open('GET', '/packages/base/cyber1.wpt');

    function processPackageData(arrayBuffer) {
      Module.finishedDataFileDownloads++;
      assert(arrayBuffer, 'Loading data file failed.');
      var byteArray = new Uint8Array(arrayBuffer);
      var curr;
      
      // copy the entire loaded file into a spot in the heap. Files will refer to slices in that. They cannot be freed though.
      var ptr = Module['_malloc'](byteArray.length);
      Module['HEAPU8'].set(byteArray, ptr);
      DataRequest.prototype.byteArray = Module['HEAPU8'].subarray(ptr, ptr+byteArray.length);
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_01_sc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_box_01_gc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_box_01_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/Thumbs.db"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_05.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_04.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/package.cfg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_03.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_nm.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_01.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/glow_colors/glow_color_02.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_lf.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_bk.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_up.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_dn.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_rt.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cyberskydark/gkskycyber_ft.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_rt.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_bk.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_lf.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_ft.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_up.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/cybersky/gkskycyber_dn.jpg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_02_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_04_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_03_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_01_sc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/Thumbs.db"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/package.cfg"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_01_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_05_cc.png"].onload();
          DataRequest.prototype.requests["/packages/gk/cyber/plain_colors/plain_color_nm.png"].onload();
          DataRequest.prototype.requests["/packages/base/cyber1.ogz"].onload();
          DataRequest.prototype.requests["/packages/base/cyber1.cfg"].onload();
          DataRequest.prototype.requests["/packages/base/cyber1.wpt"].onload();
          Module['removeRunDependency']('datafile_four.data');

    };
    Module['addRunDependency']('datafile_four.data');
  
    if (!Module.preloadResults) Module.preloadResults = {};
  
      Module.preloadResults[PACKAGE_NAME] = {fromCache: false};
      if (fetched) {
        processPackageData(fetched);
        fetched = null;
      } else {
        fetchedCallback = processPackageData;
      }
    
  }
  if (Module['calledRun']) {
    runWithFS();
  } else {
    if (!Module['preRun']) Module['preRun'] = [];
    Module["preRun"].push(runWithFS); // FS is not initialized yet, wait for it
  }

  if (!Module['postRun']) Module['postRun'] = [];
  Module["postRun"].push(function() {
    decrunchWorker.terminate();
  });

})();

