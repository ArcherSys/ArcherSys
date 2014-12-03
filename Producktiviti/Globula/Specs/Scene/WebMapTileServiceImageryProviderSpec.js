/*global defineSuite*/
defineSuite([
        'Scene/WebMapTileServiceImageryProvider',
        'Core/Credit',
        'Core/DefaultProxy',
        'Core/defined',
        'Core/GeographicTilingScheme',
        'Core/loadImage',
        'Core/WebMercatorTilingScheme',
        'Scene/Imagery',
        'Scene/ImageryLayer',
        'Scene/ImageryProvider',
        'Scene/ImageryState',
        'Specs/waitsForPromise'
    ], function(
        WebMapTileServiceImageryProvider,
        Credit,
        DefaultProxy,
        defined,
        GeographicTilingScheme,
        loadImage,
        WebMercatorTilingScheme,
        Imagery,
        ImageryLayer,
        ImageryProvider,
        ImageryState,
        waitsForPromise) {
    "use strict";
    /*global jasmine,describe,xdescribe,it,xit,expect,beforeEach,afterEach,beforeAll,afterAll,spyOn,runs,waits,waitsFor*/

    afterEach(function() {
        loadImage.createImage = loadImage.defaultCreateImage;
    });

    it('conforms to ImageryProvider interface', function() {
        expect(WebMapTileServiceImageryProvider).toConformToInterface(ImageryProvider);
    });

    it('requires the url to be specified', function() {
        function createWithoutUrl() {
            return new WebMapTileServiceImageryProvider({
                layer : 'someLayer',
                style : 'someStyle',
                tileMatrixSetID : 'someTMS'
            });
        }
        expect(createWithoutUrl).toThrowDeveloperError();
    });

    it('requires the layer to be specified', function() {
        function createWithoutLayer() {
            return new WebMapTileServiceImageryProvider({
                url : 'made/up/wmts/server',
                style : 'someStyle',
                tileMatrixSetID : 'someTMS'
            });
        }
        expect(createWithoutLayer).toThrowDeveloperError();
    });

    it('requires the style to be specified', function() {
        function createWithoutStyle() {
            return new WebMapTileServiceImageryProvider({
                layer : 'someLayer',
                url : 'made/up/wmts/server',
                tileMatrixSetID : 'someTMS'
            });
        }
        expect(createWithoutStyle).toThrowDeveloperError();
    });

    it('requires the tileMatrixSetID to be specified', function() {
        function createWithoutTMS() {
            return new WebMapTileServiceImageryProvider({
                layer : 'someLayer',
                style : 'someStyle',
                url : 'made/up/wmts/server'
            });
        }
        expect(createWithoutTMS).toThrowDeveloperError();
    });

    // default parameters values
    it('uses default values for undefined parameters', function() {
        var provider = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS'
        });
        expect(provider.format).toEqual('image/jpeg');
        expect(provider.tileWidth).toEqual(256);
        expect(provider.tileHeight).toEqual(256);
        expect(provider.minimumLevel).toEqual(0);
        expect(provider.maximumLevel).toEqual(18);
        expect(provider.tilingScheme).toBeInstanceOf(WebMercatorTilingScheme);
        expect(provider.rectangle).toEqual(provider.tilingScheme.rectangle);
        expect(provider.credit).toBeUndefined();
        expect(provider.proxy).toBeUndefined();
    });

    // non default parameters values
    it('uses parameters passed to constructor', function() {
        var proxy = new DefaultProxy('/proxy/');
        var tilingScheme = new GeographicTilingScheme();
        var rectangle = new WebMercatorTilingScheme().rectangle;
        var provider = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS',
            format : 'someFormat',
            tileWidth : 512,
            tileHeight : 512,
            tilingScheme : tilingScheme,
            minimumLevel : 0,
            maximumLevel : 12,
            rectangle : rectangle,
            proxy : proxy,
            credit : "Thanks for using our WMTS server."
        });
        expect(provider.format).toEqual('someFormat');
        expect(provider.tileWidth).toEqual(512);
        expect(provider.tileHeight).toEqual(512);
        expect(provider.minimumLevel).toEqual(0);
        expect(provider.maximumLevel).toEqual(12);
        expect(provider.tilingScheme).toEqual(tilingScheme);
        expect(provider.credit).toBeDefined();
        expect(provider.credit).toBeInstanceOf(Credit);
        expect(provider.rectangle).toEqual(rectangle);
        expect(provider.proxy).toEqual(proxy);
    });

    it("doesn't care about trailing question mark at the end of URL", function() {
        var provider1 = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS'
        });
        var provider2 = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server?',
            tileMatrixSetID : 'someTMS'
        });

        waitsFor(function() {
            return provider1.ready && provider2.ready;
        }, 'imagery providers to become ready');

        runs(function() {
            spyOn(loadImage, 'createImage').andCallFake(function(url, crossOrigin, deferred) {
                // Just return any old image.
                loadImage.defaultCreateImage('Data/Images/Red16x16.png', crossOrigin, deferred);
            });

            waitsForPromise(provider1.requestImage(0, 0, 0), function(image) {
                waitsForPromise(provider2.requestImage(0, 0, 0), function(image) {
                    expect(loadImage.createImage.calls.length).toEqual(2);
                    //expect the two image URLs to be the same between the two providers
                    expect(loadImage.createImage.calls[1].args[0]).toEqual(loadImage.createImage.calls[0].args[0]);
                });
            });
        });
    });

    it('requestImage returns a promise for an image and loads it for cross-origin use', function() {
        var provider = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS'
        });

        waitsFor(function() {
            return provider.ready;
        }, 'imagery provider to become ready');

        runs(function() {
            spyOn(loadImage, 'createImage').andCallFake(function(url, crossOrigin, deferred) {
                // Just return any old image.
                loadImage.defaultCreateImage('Data/Images/Red16x16.png', crossOrigin, deferred);
            });

            waitsForPromise(provider.requestImage(0, 0, 0), function(image) {
                expect(loadImage.createImage).toHaveBeenCalled();
                expect(image).toBeInstanceOf(Image);
            });
        });
    });

    it('routes requests through a proxy if one is specified', function() {
        var proxy = new DefaultProxy('/proxy/');
        var provider = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS',
            proxy : proxy
        });

        waitsFor(function() {
            return provider.ready;
        }, 'imagery provider to become ready');

        runs(function() {
            spyOn(loadImage, 'createImage').andCallFake(function(url, crossOrigin, deferred) {
                expect(url.indexOf(proxy.getURL('made/up/wmts/server'))).toEqual(0);

                // Just return any old image.
                loadImage.defaultCreateImage('Data/Images/Red16x16.png', crossOrigin, deferred);
            });

            waitsForPromise(provider.requestImage(0, 0, 0), function(image) {
                expect(loadImage.createImage).toHaveBeenCalled();
                expect(image).toBeInstanceOf(Image);
            });
        });
    });

    it('raises error event when image cannot be loaded', function() {
        var provider = new WebMapTileServiceImageryProvider({
            layer : 'someLayer',
            style : 'someStyle',
            url : 'made/up/wmts/server',
            tileMatrixSetID : 'someTMS'
        });

        var layer = new ImageryLayer(provider);

        var tries = 0;
        provider.errorEvent.addEventListener(function(error) {
            expect(error.timesRetried).toEqual(tries);
            ++tries;
            if (tries < 3) {
                error.retry = true;
            }
        });

        loadImage.createImage = function(url, crossOrigin, deferred) {
            if (tries === 2) {
                // Succeed after 2 tries
                loadImage.defaultCreateImage('Data/Images/Red16x16.png', crossOrigin, deferred);
            } else {
                // fail
                setTimeout(function() {
                    deferred.reject();
                }, 1);
            }
        };

        waitsFor(function() {
            return provider.ready;
        }, 'imagery provider to become ready');

        var imagery;
        runs(function() {
            imagery = new Imagery(layer, 0, 0, 0);
            imagery.addReference();
            layer._requestImagery(imagery);
        });

        waitsFor(function() {
            return imagery.state === ImageryState.RECEIVED;
        }, 'image to load');

        runs(function() {
            expect(imagery.image).toBeInstanceOf(Image);
            expect(tries).toEqual(2);
            imagery.releaseReference();
        });
    });
});
