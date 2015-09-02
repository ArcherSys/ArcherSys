<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys/Viewer/Contrib/View;
use ArcherSys/Viewer/jQueryManager;
$view = new View("LearnerQuad",function(){
    ?>
    <style>
h1{
color: red;
font-family: Segoe UI;

}
body{
background-color: blue;
}

li{
border: 3px solid darkgrey;
background-color: skyblue;
}
ol {
color: black;
font-family: Segoe UI;
    counter-reset: i 0;
}
ol li:before {
 content: counter(i);
counter-increment: i;
background-color: purple;
color: yellow;
}
</style>
<meta charset="utf-8">
    <?php
    jQueryManager::addjQuery();
    AngularApplication::addAngularJS();
},function(){
    ?>
    <div ng-controller="MainController"> <h1>I want to learn...</h1>
        <form>
            <input type="text" id="learn" name="learningtopic">
            <button id="save">Save Topic</button>
        </form>
        <ol >
            <li>How to become a better web developer</li>
            <li> How to become a better learner</li>
            <li>How to become a better entrepreneur</li>
            <div ng-repeat="topic in topics"> <li>{{  topic.name }}</li></div>
           
        </ol></div>
       
         
         <script type="text/javascript">
             var app = angular.module("LearnerQuad",[]);
             app.controller("MainController",["$scope",function($scope){
                $scope.topics = [
                    {
                    name: "How to script a Player Controller"
                }
                ];
                $("#save").click(function(){
                    $scope.topics.push({
                        name: $("#learn").val()});
                });
             }
             ]
             );
             </script>
        <?php
},"LearnerQuad");
?>
 
 
    
    

