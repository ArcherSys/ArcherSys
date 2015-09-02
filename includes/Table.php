<?php
  namespace ArcherSys\Viewer\Layouts;
  class Table {
       public $id;
      function __construct($id,callable $thead,callable $tbody){
          $this->id = $id;
          echo "<table id='".$this->id."'>";
        echo "<thead>";
        $thead();
        echo "</thead>";
        echo "<tbody>";
        $tbody();
        echo "</tbody>";
        echo "</table>";

    }

}
class TableRow{
    public $id;
    public $datacells;
   function __construct($id){
        $this->id = $id;
        $this->datacells = array();
   }
  function __toString(){
        $trstr = "<tr id='".$this->id."'>";
        for($i = 0; $i < count($this->datacells); $i++){
$trstr .= $this->datacells[$i];
}
return $trstr;
}
function addDataCell(TableDataCell $tdc){
array_push($this->datacells,$tdc);
}

function addBodyDataCell(BodyTableDataCell $tdc){
array_push($this->datacells,$tdc);
}


}
          
class TableDataCell{
     function __toString(){
        return "<th id='".$this->id."'>".$this->text."</th>";
}
function __construct($text,$id){
   $this->id = $id;
   $this->text = $text;
}
}

class BodyTableDataCell extends TableDataCell{
  function __toString(){
        return "<td id='".$this->id."'>".$this->text."</td>";
}

}