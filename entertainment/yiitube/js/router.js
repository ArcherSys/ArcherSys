
YiiTube.Router.map(YiiTube.stringVideoRoute);
YiiTube.stringVideo = function(){
   this.resource("channels");
};
YiiTube.ChannelsRoute = Ember.Route.extend({
   model: function() {
      return this.modelFor('channels');
   },
   setupController: function(controller, channel){
     controller.set('model',channel);
   }
});