SocioGap= Ember.Application.create({});

SocioGap.Router.map(function() {
    this.resource( 'accounts' );
   this.resource( 'profiles' );
   this.resource( 'gallery' );
});

SocioGap.IndexRoute = Ember.Route.extend({
  setupController: function(controller) {
    controller.set('content'red', 'yellow', 'blue']);
  }
});