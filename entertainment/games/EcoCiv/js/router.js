EcoCiv.Router.map(function(){
  this.resource('civilization',{path: '/'}, function(){

});
});
EcoCiv.CivilizationRoute = Ember.Route.extend({
  model: function(){
    return this.store.find('civilization');
    }
});