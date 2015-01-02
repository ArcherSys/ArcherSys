YiiTube = Ember.Application.create({});

YiiTube.Router.map(function() {
    this.resource('SearchYT');
    this.resource('Play');
});

YiiTube.IndexRoute = Ember.Route.extend({
    redirect : function() {
        this.transitionTo('SearchYT');
    }
});

YiiTube.SearchYTRoute = Ember.Route.extend({
    model : function() {
        return App.Video.all();
    }
});

YiiTube.Video = Ember.Object.extend({
    title : null,
    seconds : null,
    yid : null
});

YiiTube.Video.reopenClass({
    // there are no videos initially
    content : [],

    // Searching flag
    isSearching : false,

    actions : {
       makeSearch : function() {
        console.log('working1');

        // Start searching and remove existing results
        // keep a reference to the new array, then use `pushObject`
        var newResults = [],
            self = this;
        this.set('isSearching', true);
        this.set('content', newResults);

        var query = this.get('searchString');
        var c = $.getJSON("http://gdata.youtube.com/feeds/api/videos", {
            alt : 'json',
            'max-results' : 10,
            v : 2,
            q : query
        });
        c.success(function(data) {
            var entries = data.feed.entry, results = [];

            for (var i = 0; i < entries.length; i++) {
                var e = entries[i];
                newResults.pushObject(App.Video.create({
                    yid : e.id.$t.split(':')[3],
                    seconds : parseInt(e.media$group.yt$duration.seconds),
                    title : e.title.$t
                }));
            }
            //  this.set('content', results); <-- this here is not the this out of the success
        });

        c.complete(function() {
            self.set('isSearching', false); // <-- same here, this is different
        });
    }
        
    }
});