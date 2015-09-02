YiiTube.Channel = DS.Model.extend({
   name: DS.attr('string'),
   description: DS.attr("string")
});
YiiTube.Channel.reopenClass({
    FIXTURES: [
      {id: 1, name: 'Chemistry', description: 'The Old Chemistry Channel'}
   ]});
      