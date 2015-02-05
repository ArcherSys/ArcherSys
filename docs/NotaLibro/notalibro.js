/** @namespace
 * The Official NotaLibro Library for JS
 * @author Weldon Henson
 */
 $(function(){
 var NotaLibro = {
     ann: $("#content").annotator()
 };
 NotaLibro.ann.annotator("addPlugin","Filter",{
     
 });
 NotaLibro.ann.annotator("addPlugin","Permissions",{});
  NotaLibro.ann.annotator("addPlugin","Tags",{});

});