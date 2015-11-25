window.EcoCiv.Civilization = DS.Model.extend({
 name: DS.attr("string"), 
 gold: DS.attr("number"),
});
 EcoCiv.Civilization.FIXTURES = [
  { 
   id: 1,
   name: 'Egypt',
   gold: 200,
   },
{ 
  id: 1,
  name: 'Rome',
  gold: 400
}
];