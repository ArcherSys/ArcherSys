YiiTube.ChannelsController = Ember.ObjectController.extend({
    name: function(){
        return this.get('model.name');
      }.property('model.name');
});