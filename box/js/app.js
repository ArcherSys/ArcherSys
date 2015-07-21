
MakShiftMail.Mailbox = Em.Object.extend();

MakShiftMail.Mailbox.reopenClass({
  find: function(id) {
    if (id) {
      return App.FIXTURES.findBy('id', id);
    } else {
      return App.FIXTURES;
    }
  }
});

// Routes

MakShiftMail.Router.map(function() {
  this.resource('mailbox', { path: '/:mailbox_id' }, function() {
    this.resource('mail', { path: '/:message_id' });
  });
});

MakShiftMail.ApplicationRoute = Em.Route.extend({
  model: function() {
    return App.Mailbox.find();
  }
});

MakShiftMail.MailRoute = Em.Route.extend({
  model: function(params) {
    return this.modelFor('mailbox').messages.findBy('id', params.message_id);
  }
});

// Handlebars helper

Ember.Handlebars.registerBoundHelper('date', function(date) {
  return moment(date).format('MMM Do');
});
