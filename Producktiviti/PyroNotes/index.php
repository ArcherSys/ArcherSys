<!DOCTYPE html>
<html>

<head>
<script src=
"/core/js/angularjs/angular.min.js"></script>
<title>PyroNote</title>
</head>

<body ng-app="pyronote" ng-controller="pyronotectrl">

<h2>My Note</h2>


<textarea ng-model="message" cols="40" rows="10"></textarea>

<p>
<button ng-click="save()">Save</button>
<button ng-click="clear()">Clear</button>
</p>

<p>Number of characters left: <span ng-bind="left()"></span></p>

<script src="pyronoteapp.js"></script>


</body>
</html>
