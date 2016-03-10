<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" href="/drives/bootstrap/bootstrap.min.css">
<script src ="/drives/jquery.min.js"></script>
<script src='/drives/bootstrap/bootstrap.min.js'></script>
<style>.header {
  text-align:center;
}

.row {
  margin-bottom:2px;
  text-align:center;
}

.alert {
  text-align:left;
}

.btn {
  margin-top:5px;
}

h6 {
  margin-left:5px;
  margin-top:13px;
  font-family:sans-serif;
  text-align:left;
  line-height:5px;
}

.col-md-6 {
  padding-left:25px;
  padding-right:25px;
}

.col-xs-4, .col-xs-3, .col-xs-6 {
  padding-left:1px;
  padding-right:1px;
}

/* Research Bars */
.progress {
  width: 100%;
  height: 39px;
}
.progress-wrap-hostel {
  background: #D9534F;
  margin: 5px 0 0 0;
  overflow: hidden;
  position: relative;
}
.progress-bar-hostel {
  background: #ddd;
  left: 0;
  position: absolute;
  top: 0;
  border-radius:0;
}

.researchingComment {
  line-height:39px;
  color:white;
}

.info {
  overflow:hidden;
  max-height:200px;
}

.info p {
  text-align:left;
}

.well {
  padding-top:0;
}</style>

</head>
<body ng-app="SaberfrontMandaloreTowns">
<!--<div class="container"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#onLoadModal">
  Run Initial Modal (It is not automatic because it pops up every time I make a change to the document).
  </button></div>-->
<!-- Modal -->
<div ng-controller="ClanVillageMain">
<div class="modal fade" id="onLoadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Welcome to Incremental RPG!</h4>
      </div>
      <div class="modal-body">
        <p>This game was developed to teach myself Javascript. I will continue to build this game until I feel that it is finished. For now, have fun!</p>
        <p>Feel free to give me some feedback, suggestions or tips by hitting me up on Twitter <a href="https://twitter.com/_SamuelBeard">@_SamuelBeard</a>.</p>
        <h3>Name Your Town:</h3>
        <input class="form-control" id="town" type="text">
        <h3>Name Your Mayor:</h3>
        <input class="form-control" id="mayor" type="text">
      </div>
      <div class="modal-footer">
        <button type="button" id="modalClose" class="btn btn-success" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

<div class="row header">
  <div class="col-md-12">
    <h1>Incremental RPG<small> v0.6</small></h1>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <h2><span id="townName"></span></h2>
    <h3><small>Our Beloved Mayor: </small><span id="mayorName">{{names.mayor}}</span></h3>
  </div>
</div>
<div class="container" n>
  
	<div class="row">
		<div class="col-md-6">
      
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Welcome to Incremental RPG!</strong>
        <p>To start building your town, click 'Chop Wood', 'Mine Stone' and 'Gather Food' to gather the respective resources.</p>
      </div>
      
			<div class="row">
				<div class="col-xs-4">
					 <button type="button" id="chopWood" ng-click="WoodClick()" class="btn btn-primary btn-block">Chop Wood</button>
				</div>
				<div class="col-xs-4">
          <button class="btn btn-default btn-block disabled">
            <span id="woodAmount" >{{wood.amount}}</span>/<span id="maxWood">{{wood.max}}</span>
          </button>
				</div>
				<div class="col-xs-4">
          <span class="btn btn-default btn-block disabled">
            <span id="woodIncrement">{{wood.increment}}</span><span>/5s</span>
          </span>
				</div>
			</div><!--.row-->
      
			<div class="row">
				<div class="col-xs-4">
					 <button type="button" id="mineStone" ng-click="StoneClick()" class="btn btn-primary btn-block">Mine Stone</button>
				</div>
				<div class="col-xs-4">
					 <button class="btn btn-default btn-block disabled">
            <span id="stoneAmount" >{{stone.amount}}</span>/<span id="maxStone">{{stone.max}}</span>
          </button>
				</div>
				<div class="col-xs-4">
					 <span class="btn btn-default btn-block disabled">
            <span id="stoneIncrement">{{stone.increment}}</span><span>/5s</span>
          </span>
				</div>
			</div><!--.row-->
      
			<div class="row">
				<div class="col-xs-4">
					 <button type="button" id="gatherFood" class="btn btn-primary btn-block" ng-click="FoodClick()">Gather Food</button>
				</div>
				<div class="col-xs-4">
					 <button class="btn btn-default btn-block disabled">
            <span id="foodAmount" >{{food.amount}}</span>/<span id="maxFood">{{food.max}}</span>
          </button>
				</div>
				<div class="col-xs-4">
					 <span class="btn btn-default btn-block disabled">
            <span id="foodIncrement">{{food.increment}}</span><span>/5s</span>
          </span>
				</div>
      </div><!--.row-->
      
      <hr>
      
		</div><!---->
       
		<div class="col-md-6">
      
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Click the buttons below to create workers who will gather resources for you. You will need somewhere for them to live first though.</p>
      </div>
      
			<div class="row">
				<div class="col-xs-6">
          <div class="btn-group btn-group-justified">
            <span class="btn btn-default disabled">Population</span>
					  <span id="workerAmount" class="btn btn-default disabled">0</span>
          </div>
				</div>
        <div class="col-xs-6">
          <div class="btn-group btn-group-justified">
            <span class="btn btn-default disabled">Max</span>
					  <span id="maxPop" class="btn btn-default disabled">{{maxPop}}</span>
          </div>
				</div>
			</div><!--.row-->
      
      <div class="row">
				<div class="col-xs-4">
					 <button type="button" id="createLumberjack" ng-click="hireLumberjack()" class="btn btn-block btn-success">Create Lumberjack</button>
				</div>
        <div class="col-xs-4">
					 <button type="button" id="lumberjackAmount" class="btn btn-block btn-default disabled">{{worker.lumberjack.amount}}</button>
				</div>
        <div class="col-xs-4">
          <h6>-<span id="lumberjackCost">{{worker.lumberjack.cost}}</span> Food</h6>
          <h6>+1 Lumberjack</h6>
				</div>
			</div><!--.row-->
      <div class="row">
				<div class="col-xs-4">
					 <button type="button" id="createLightwarrior" class="btn btn-block btn-success">Create Lightwarrior</button>
				</div>
        <div class="col-xs-4">
					 <button type="button" id="lightwarriorAmount" class="btn btn-block btn-default disabled">0</button>
				</div>
        <div class="col-xs-4">
          <h6>-<span id="lumberjackCost">10</span> Food</h6>
          <h6>+1 Lumberjack</h6>
				</div>
			</div><!--.row-->
      <div class="row">
				<div class="col-xs-4">
					 <button type="button" id="createMiner"ng-click="hireMiner()" class="btn btn-block btn-success">Create Miner</button>
				</div>
        <div class="col-xs-4">
					 <button type="button" id="minerAmount" class="btn btn-block btn-default disabled">{{worker.miner.amount}}</button>
				</div>
        <div class="col-xs-4">
          <h6>-<span id="minerCost">{{worker.miner.cost}}</span> Food</h6>
          <h6>+1 Miner</h6>
				</div>
			</div><!--.row-->
      
      <div class="row">
				<div class="col-xs-4">
					 <button type="button" id="createHunter" ng-click="hireHunter()" class="btn btn-block btn-success">Create Hunter</button>
				</div>
        <div class="col-xs-4">
					 <button type="button" id="hunterAmount" class="btn btn-block btn-default disabled">{{worker.hunter.amount}}</button>
				</div>
        <div class="col-xs-4">
          <h6>-<span id="hunterCost">{{worker.hunter.cost}}</span> Food</h6>
          <h6>+1 Hunter</h6>
				</div>
			</div><!--.row-->
      
      <hr>
      
		</div><!--.col-md-6-->
     
	</div><!--.row-->
  
  <div class="row">
    <div class="col-md-6">
      
      <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Use the resources you have gathered to build some accommodation so that you can hire workers.</p>
        <p>Some buildings need to be researched before you are able to build them.</p>
      </div>
      
      <div class="row">
        <div class="col-xs-4">
          <button type="button" id="buildTent" class="btn btn-danger btn-block" ng-click="buildTent()">Build Tent</button>
        </div>
        
        <div class="col-xs-4">
          <button type="button" id="tentAmount" class="btn btn-default btn-block disabled">{{tent.amount}}</button>
        </div>
        
        <div class="col-xs-4">
          <h6>-<span id="tentCostWood">{{tent.cost.wood}}</span> Wood</h6>
          <h6>+<span id="tentResidents">{{tent.residents}}</span> Population</h6>
        </div>
      </div><!--.row-->
      
      <div class="row">
        <div class="col-xs-4">
          <button type="button" id="buildHouse" class="btn btn-danger btn-block">Build House</button>
        </div>
        <div class="col-xs-4">
          <button type="button" id="houseAmount" class="btn btn-default btn-block disabled">{{house.amount}}</button>
        </div>
        <div class="col-xs-4">
          <h6>-<span id="houseCostWood">0</span> Wood | -<span id="houseCostStone">{{house.cost.stone}}</span> Stone</h6>
          <h6>+<span id="houseResidents">0</span> Population</h6>
        </div>
      </div><!--.row-->
      
      <div class="row">
        
        <div class="col-xs-4">
          <button id="researchHostel" class="btn btn-danger btn-block">Consider Building Hostels</button>
          <div class="progress-wrap-hostel progress hidden" data-progress-percent-hostel="100">
            <span class="researchingComment">Thinking About It</span>
            <div class="progress-bar-hostel progress"></div>
          </div>
          <button id="buildHostel" class="btn btn-danger btn-block hidden">Build Hostel</button>
        </div>
        
        <div class="col-xs-4">
          <button type="button" id="hostelAmount" class="btn btn-default btn-block disabled">0</button>
        </div>
        <div class="col-xs-4">
          <h6 class="hostelInfo hidden">-<span id="hostelCostWood">0</span> Wood | -<span id="hostelCostStone">0</span> Stone</h6>
          <h6 class="hostelResearchInfo">-400 Wood | -150 Stone</h6>
          <h6>+<span id="hostelResidents">0</span> Population</h6>
        </div>
      </div><!--.row-->
      
      <div class="alert alert-info alert-dismissable" style="margin-top:15px;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>Build storage houses to store more resources.</p>
      </div>
      
      <div class="row">
        <div class="col-xs-4">
          <button type="button" id="buildWoodStorage" class="btn btn-danger btn-block">Build Wood Storage</button>
        </div>
        <div class="col-xs-4">
          <button type="button" id="woodStorageAmount" class="btn btn-default btn-block disabled">0</button>
        </div>
        <div class="col-xs-4">
          <h6>-<span id="woodStorageCostWood">0</span> Wood | -<span id="woodStorageCostStone">0</span> Stone</h6>
          <h6>+100 Wood Storage</h6>
        </div>
      </div><!--.row-->
      
      <div class="row">
        <div class="col-xs-4">
          <button type="button" id="buildStoneStorage" class="btn btn-danger btn-block">Build Stone Storage</button>
        </div>
        <div class="col-xs-4">
          <button type="button" id="stoneStorageAmount" class="btn btn-default btn-block disabled">0</button>
        </div>
        <div class="col-xs-4">
          <h6>-<span id="stoneStorageCostWood">0</span> Wood | -<span id="stoneStorageCostStone">0</span> Stone</h6>
          <h6>+100 Stone Storage</h6>
        </div>
      </div><!--.row-->
      
      <div class="row">
        <div class="col-xs-4">
          <button type="button" id="buildFoodStorage" class="btn btn-danger btn-block">Build Food Storage</button>
        </div>
        <div class="col-xs-4">
          <button type="button" id="foodStorageAmount" class="btn btn-default btn-block disabled">0</button>
        </div>
        <div class="col-xs-4">
          <h6>-<span id="foodStorageCostWood">0</span> Wood | -<span id="foodStorageCostStone">0</span> Stone</h6>
          <h6>+100 Food Storage</h6>
        </div>
      </div><!--.row-->
      
    <hr>
    </div><!--.col-md-6-->
    
    <div class="col-md-6">
      
      <div class="row upgradeTwoFingers">
        <div class="col-xs-4">
          <button type="button" id="upgradeTwoFingers" class="btn btn-warning btn-block">Two Fingers</button>
        </div>
        <div class="col-xs-8">
          <h6>-100 Wood | -100 Stone | -100 Food</h6>
          <h6>Two resources per click.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeFiveFingers hidden">
        <div class="col-xs-4">
          <button type="button" id="upgradeFiveFingers" class="btn btn-warning btn-block">Five Fingers</button>
        </div>
        <div class="col-xs-8">
          <h6>-450 Wood | -450 Stone | -120 Food</h6>
          <h6>Five resources per click.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeDoubleSleepingBags">
        <div class="col-xs-4">
          <button type="button" id="upgradeDoubleSleepingBags" class="btn btn-warning btn-block">Double Sleeping Bags</button>
        </div>
        <div class="col-xs-8">
          <h6>-100 Wood | -100 Stone | -100 Food</h6>
          <h6>Allow two people to live in one tent.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeBunkBeds">
        <div class="col-xs-4">
          <button type="button" id="upgradeBunkBeds" class="btn btn-warning btn-block">Bunk Beds</button>
        </div>
        <div class="col-xs-8">
          <h6>-100 Wood | -100 Stone | -100 Food</h6>
          <h6>Allow five people to live in one house.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeSharpenAxes">
        <div class="col-xs-4">
          <button type="button" id="upgradeSharpenAxes" class="btn btn-warning btn-block">Sharpen Axes</button>
        </div>
        <div class="col-xs-8">
          <h6>-50 Wood | -100 Stone | -50 Food</h6>
          <h6>Lumberjacks gather two wood every five seconds.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeSharpenPicks">
        <div class="col-xs-4">
          <button type="button" id="upgradeSharpenPicks" class="btn btn-warning btn-block">Sharpen Picks</button>
        </div>
        <div class="col-xs-8">
          <h6>-50 Wood | -100 Stone | -50 Food</h6>
          <h6>Miners gather two stone every five seconds.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeSharpenArrows">
        <div class="col-xs-4">
          <button type="button" id="upgradeSharpenArrows" class="btn btn-warning btn-block">Sharpen Arrows</button>
        </div>
        <div class="col-xs-8">
          <h6>-50 Wood | -100 Stone | -50 Food</h6>
          <h6>Hunters gather two food every five seconds.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeMatesRatesWood">
        <div class="col-xs-4">
          <button type="button" id="upgradeMatesRatesWood" class="btn btn-warning btn-block">Mates Rates - Wood</button>
        </div>
        <div class="col-xs-8">
          <h6>-150 Stone | -50 Food</h6>
          <h6>Befriend the lumberjacks so houses and tents cost less wood.</h6>
        </div>
      </div><!--.row-->
      
      <div class="row upgradeMatesRatesStone">
        <div class="col-xs-4">
          <button type="button" id="upgradeMatesRatesStone" class="btn btn-warning btn-block">Mates Rates - Stone</button>
        </div>
        <div class="col-xs-8">
          <h6>-150 Wood | -50 Food</h6>
          <h6>Befriend the miners so houses cost less stone.</h6>
        </div>
      </div><!--.row-->
      
    <hr>
    </div><!--.col-md-6-->
  </div><!--.row-->
  
  <div class="row">
    <div class="col-md-6">
      <div class="well">
        <h3>Information</h3>
        <div id="info" class="info"></div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="well">
        <h3>Upgrades</h3>
        <div id="upgrades" class="info"></div>
      </div>
    </div>
  </div><!--.row-->
  
</div><!--.container-->
</div>
  <script src="/core/js/angularjs/angular.min.js"></script>
  <script>
var app = angular.module("SaberfrontMandaloreTowns",[]);
app.controller("ClanVillageMain",function($scope,$interval){
    $scope.names = names = {
  town:"",
  mayor:"",
};
$scope.wood = {
  name:"wood",
  amount:100,
  increment:0,
  max:100,
  storage:0,
  storageCost: {
    wood:50,
    stone:50
  }
};
$scope.info = []
$scope.stone = {
  name:"stone",
  amount:0,
  increment:0,
  max:100,
  storage:0,
  storageCost: {
    wood:50,
    stone:50
  }
};
$scope.food = {
  name:"food",
  amount:0,
  increment:0,
  max:100,
  storage:0,
  storageCost: {
    wood:50,
    stone:50
  }
};
$scope.worker = {
  name:"worker",
  amount:0,
  lumberjack:{
    increment:1,
    amount:0,
    cost:10
  },
  lightwarrior:{
    increment:1,
    amount:0,
    cost:20
  },
  miner:{
    increment:1,
    amount:0,
    cost:10
  },
  hunter:{
    increment:1,
    amount:0,
    cost:10
  }
};
$scope.tent = {
  amount:0,
  residents:1,
  cost:{
    wood:30
  }
};
$scope.house = {
  amount:0,
  residents:4,
  cost:{
    wood:75,
    stone:25
  }
},
$scope.hostel = {
  amount:0,
  residents:10,
  cost:{
    wood:200,
    stone:215
  }
};
$scope.checkMaxWood = function(){
  if ($scope.wood.amount > $scope.wood.max){
    $scope.wood.amount = $scope.wood.max;
  }
};
$scope.WoodClick = function(){
      $scope.wood.amount = $scope.wood.amount + $scope.clickIncrement;
  $scope.checkMaxWood();
};
$scope.StoneClick = function(){
      $scope.stone.amount = $scope.stone.amount + $scope.clickIncrement;
  $scope.checkMaxStone();
};
$scope.FoodClick = function(){
     $scope.food.amount = $scope.food.amount + $scope.clickIncrement;
  $scope.checkMaxFood();
};
 $scope.gatherWood = function(){
  $scope.wood.increment = $scope.worker.lumberjack.increment * $scope.worker.lumberjack.amount;
  $scope.wood.amount = $scope.wood.amount + $scope.wood.increment;
  $scope.checkMaxWood();

};
$scope.gatherStone = function(){
  $scope.stone.increment = $scope.worker.miner.increment * $scope.worker.miner.amount;
  $scope.stone.amount = $scope.stone.amount + $scope.stone.increment;
  $scope.checkMaxStone();
  
};
$scope.gatherFood = function(){
  $scope.food.increment = $scope.worker.hunter.increment * $scope.worker.hunter.amount;
  $scope.food.amount = $scope.food.amount + $scope.food.increment;
  $scope.checkMaxFood();

};
$scope.checkMaxFood =  function(){
  if ($scope.food.amount > $scope.food.max){
    $scope.food.amount = $scope.food.max;
  }
};
$scope.buildTent = function(){
if($scope.wood.amount >= $scope.tent.cost.wood) {
    $scope.wood.amount = $scope.wood.amount - $scope.tent.cost.wood;
    $scope.tent.amount++;
    $scope.tent.cost.wood = $scope.tent.cost.wood * 1.2;
    $scope.tent.cost.wood = $scope.tent.cost.wood.toFixed(0);
    $scope.maxPop = $scope.maxPop + $scope.tent.residents;
    
  } else{$("#info").prepend($('<p>You need more wood.</p>').fadeIn('slow'));}
      
  };
  $scope.hireLumberjack = function(){
   if ($scope.worker.amount < $scope.maxPop) {
    if ($scope.food.amount >= $scope.worker.lumberjack.cost) {
      $scope.food.amount = $scope.food.amount - $scope.worker.lumberjack.cost;
      $scope.worker.amount++;
      $scope.worker.lumberjack.amount++;
      $scope.worker.lumberjack.cost++;
    } else {$("#info").prepend($('<p>You need more food.</p>').fadeIn('slow'));
        
    }
  } else {$("#info").prepend($('<p>You need to build more accommodation.</p>').fadeIn('slow'));
      
      
  }
  };
 $scope.checkMaxStone = function(){
  if ($scope.stone.amount > $scope.stone.max){
    $scope.stone.amount = $scope.stone.max;
  }
};
$scope.hireHunter = function(){
  if ($scope.worker.amount < $scope.maxPop) {
    if ($scope.food.amount >= $scope.worker.hunter.cost) {
      $scope.food.amount = $scope.food.amount - $scope.worker.hunter.cost;
      $scope.worker.amount++;
      $scope.worker.hunter.amount++;
      $scope.worker.hunter.cost++;
    } else {$("#info").prepend($('<p>You need more food.</p>').fadeIn('slow'));}
  } else {$("#info").prepend($('<p>You need to build more accommodation.</p>').fadeIn('slow'));}
};
$scope.hireMiner = function(){
    if ($scope.worker.amount < $scope.maxPop) {
    if ($scope.food.amount >= $scope.worker.miner.cost) {
      $scope.food.amount = $scope.food.amount - $scope.worker.miner.cost;
      $scope.worker.amount++;
     $scope.worker.miner.amount++;
      $scope.worker.miner.cost++;
    
    } else {$("#info").prepend($('<p>You need more food.</p>').fadeIn('slow'));}
  } else {$("#info").prepend($('<p>You need to build more accommodation.</p>').fadeIn('slow'));}
};
$scope.maxPop = ($scope.tent.residents *$scope.tent.amount) + ($scope.house.residents * $scope.house.amount);
$scope.clickIncrement = 1;
$scope.tick = function(){
  $scope.gatherWood();
  $scope.gatherStone();
 // gatherFood();
};
$scope.buildHouse = function(){
if ($scope.wood.amount >= $scope.house.cost.wood && $scope.stone.amount >= $scope.house.cost.stone) {
    $scope.wood.amount = $scope.wood.amount - $scope.house.cost.wood;
    $scope.stone.amount = $scope.stone.amount - $scope.house.cost.stone;
    $scope.house.amount++;
    $scope.house.cost.wood = $scope.house.cost.wood * 1.2;
    $scope.house.cost.stone = $scope.house.cost.stone * 1.2;
   $scope.house.cost.wood = $scope.house.cost.wood.toFixed(0);
    $scope.house.cost.stone = $scope.house.cost.stone.toFixed(0);
    $scope.maxPop = $scope.maxPop + $scope.house.residents;
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
};
$scope.beginTick = function(){
  nIntervId = $interval($scope.tick, 5000);
};
$(function(){
  $scope.beginTick();
 $('#onLoadModal').modal();
});
});



 // Buildings



  // Consider changing this to specific materials.


// Miner Gather Stone



// All OnLoad Functions




$('#createLightwarrior').click(function(){
  if (worker.amount < maxPop) {
    if (food.amount >= worker.lightwarrior.cost) {
      food.amount = food.amount - worker.lightwarrior.cost;
      worker.amount++;
      worker.lightwarrior.amount++;
      worker.lightwarrior.cost++;
      updateValues();
    } else {$("#info").prepend($('<p>You need more food.</p>').fadeIn('slow'));}
  } else {$("#info").prepend($('<p>You need to build more accommodation.</p>').fadeIn('slow'));}
});




// Lumberjacks Gather Wood


// Build a tent

// Build a house
$('#buildHouse').click(function(){
  
});

// Research Hostel
$('#researchHostel').click(function() {
  if (wood.amount >= 400 && stone.amount >= 150){
    wood.amount = wood.amount - 400;
    stone.amount = stone.amount - 150;
    
    $('#researchHostel').addClass('hidden');
    $('.progress-wrap-hostel').removeClass('hidden');

    var getPercent = ($('.progress-wrap-hostel').data('progress-percent-hostel') / 100);
    var getProgressWrapWidth = $('.progress-wrap-hostel').width();
    var progressTotal = getPercent * getProgressWrapWidth;
    var animationLength = 25000;

    $('.progress-bar-hostel').stop().animate({
         left: progressTotal
      },
      animationLength,
      function(){
        $('#buildHostel').removeClass('hidden');
        $('.progress-wrap-hostel').addClass('hidden');
        $('.hostelInfo').removeClass('hidden');
        $('.hostelResearchInfo').addClass('hidden');
      });
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
});

// Build a hostel
$('#buildHostel').click(function(){
  if (wood.amount >= hostel.cost.wood && stone.amount >= hostel.cost.stone) {
    wood.amount = wood.amount - hostel.cost.wood;
    stone.amount = stone.amount - hostel.cost.stone;
    hostel.amount++;
    hostel.cost.wood = hostel.cost.wood * 1.2;
    hostel.cost.stone = hostel.cost.stone * 1.2;
    hostel.cost.wood = hostel.cost.wood.toFixed(0);
    hostel.cost.stone = hostel.cost.stone.toFixed(0);
    maxPop = maxPop + hostel.residents;
    updateValues();
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
});

// Build wood storage
$('#buildWoodStorage').click(function(){
  if (wood.amount >= wood.storageCost.wood && stone.amount >= wood.storageCost.stone){
    wood.amount = wood.amount - wood.storageCost.wood;
    stone.amount = stone.amount - wood.storageCost.stone;
    wood.storage++;
    wood.max = wood.max + 100;
    updateValues();
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
});

// Build stone storage
$('#buildStoneStorage').click(function(){
  if (wood.amount >= stone.storageCost.wood && stone.amount >= stone.storageCost.stone){
    wood.amount = wood.amount - stone.storageCost.wood;
    stone.amount = stone.amount - stone.storageCost.stone;
    stone.storage++;
    stone.max = stone.max + 100;
    updateValues();
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
});

// Build food storage
$('#buildFoodStorage').click(function(){
  if (wood.amount >= food.storageCost.wood && stone.amount >= food.storageCost.stone){
    wood.amount = wood.amount - food.storageCost.wood;
    stone.amount = stone.amount - food.storageCost.stone;
    food.storage++;
    food.max = food.max + 100;
    updateValues();
  } else {$("#info").prepend($('<p>You need more building materials.</p>').fadeIn('slow'));}
});

// Upgrades
$('#upgradeTwoFingers').click(function(){
  if (wood.amount >= 100 && stone.amount >= 100 && food.amount >= 100) {
    wood.amount = wood.amount - 100;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 100;
    clickIncrement = clickIncrement + 1;
    $('.upgradeTwoFingers').addClass('hidden');
    $('.upgradeFiveFingers').removeClass('hidden');
    $("#upgrades").prepend($('<p>Two Fingers | Two Resources Per Click</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeFiveFingers').click(function(){
  if (wood.amount >= 450 && stone.amount >= 450 && food.amount >= 120) {
    wood.amount = wood.amount - 450;
    stone.amount = stone.amount - 450;
    food.amount = food.amount - 120;
    clickIncrement = clickIncrement + 3;
    $('.upgradeFiveFingers').addClass('hidden');
    $("#upgrades").prepend($('<p>Five Fingers | Five Resources Per Click</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeDoubleSleepingBags').click(function(){
  if (wood.amount >= 100 && stone.amount >= 100 && food.amount >= 100) {
    wood.amount = wood.amount - 100;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 100;
    tent.residents = 2;
    maxPop = maxPop + tent.amount;  //This only works because we are adding ONE resident.
    $('.upgradeDoubleSleepingBags').addClass('hidden');
    $("#upgrades").prepend($('<p>Double Sleeping Bags | Two People, One Tent</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeBunkBeds').click(function(){
  if (wood.amount >= 100 && stone.amount >= 100 && food.amount >= 100) {
    wood.amount = wood.amount - 100;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 100;
    house.residents = 5;
    maxPop = maxPop + house.amount; //This only works because we are adding ONE resident.
    $('.upgradeBunkBeds').addClass('hidden');
    $("#upgrades").prepend($('<p>Bunk Beds | Five People, One House</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeSharpenAxes').click(function(){
  if (wood.amount >= 50 && stone.amount >= 100 && food.amount >= 50) {
    wood.amount = wood.amount - 50;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 50;
    worker.lumberjack.increment = 2;
    $('.upgradeSharpenAxes').addClass('hidden');
    $("#upgrades").prepend($('<p>Sharpen Axes | Lumberjacks Chop Two Wood Each</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeSharpenPicks').click(function(){
  if (wood.amount >= 50 && stone.amount >= 100 && food.amount >= 50) {
    wood.amount = wood.amount - 50;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 50;
    worker.miner.increment = 2;
    $('.upgradeSharpenPicks').addClass('hidden');
    $("#upgrades").prepend($('<p>Sharpen Picks | Miners Mine Two Stone Each</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeSharpenArrows').click(function(){
  if (wood.amount >= 50 && stone.amount >= 100 && food.amount >= 50) {
    wood.amount = wood.amount - 50;
    stone.amount = stone.amount - 100;
    food.amount = food.amount - 50;
    worker.hunter.increment = 2;
    $('.upgradeSharpenArrows').addClass('hidden');
    $("#upgrades").prepend($('<p>Sharpen Arrows | Hunters Gather Two Food Each</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeMatesRatesWood').click(function(){
  if (stone.amount >= 150 && food.amount >= 50) {
    stone.amount = stone.amount - 150;
    food.amount = food.amount - 50;
    house.cost.wood = house.cost.wood - 20;
    tent.cost.wood = tent.cost.wood - 15;
    $('.upgradeMatesRatesWood').addClass('hidden');
    $("#upgrades").prepend($('<p>Mates Rates - Wood | Houses and Tents Cost Less Wood</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});

$('#upgradeMatesRatesStone').click(function(){
  if (wood.amount >= 150 && food.amount >= 50) {
    wood.amount = wood.amount - 150;
    food.amount = food.amount - 50;
    house.cost.stone = house.cost.stone - 20;
    $('.upgradeMatesRatesStone').addClass('hidden');
    $("#upgrades").prepend($('<p>Mates Rates - Stone | Houses Cost Less Stone</p>').fadeIn('slow'));
    updateValues();
  } else {$("#info").prepend($('<p>You need more resources.</p>').fadeIn('slow'));}
});


// Get town and moyor names and display them.
$('#modalClose').click(function(){
  names.town = document.getElementById('town').value;
  document.getElementById("townName").innerHTML = names.town;
  names.mayor = document.getElementById('mayor').value;
  document.getElementById("mayorName").innerHTML = names.mayor;
});



// Display the correct values.
function updateValues(){
  document.getElementById("woodAmount").innerHTML = wood.amount;
  document.getElementById("maxWood").innerHTML = wood.max;
  document.getElementById("woodIncrement").innerHTML = wood.increment;
  document.getElementById("stoneAmount").innerHTML = stone.amount;
  document.getElementById("maxStone").innerHTML = stone.max;
  document.getElementById("stoneIncrement").innerHTML = stone.increment;
  document.getElementById("foodAmount").innerHTML = food.amount;
  document.getElementById("maxFood").innerHTML = food.max;
  document.getElementById("foodIncrement").innerHTML = food.increment;
  
  document.getElementById("workerAmount").innerHTML = worker.amount;
  document.getElementById("maxPop").innerHTML = maxPop;
  document.getElementById("lumberjackAmount").innerHTML = worker.lumberjack.amount;
  document.getElementById("lumberjackCost").innerHTML = worker.lumberjack.cost;
  document.getElementById("minerAmount").innerHTML = worker.miner.amount;
  document.getElementById("minerCost").innerHTML = worker.miner.cost;
  document.getElementById("hunterAmount").innerHTML = worker.hunter.amount;
  document.getElementById("hunterCost").innerHTML = worker.hunter.cost;
  
  document.getElementById("tentAmount").innerHTML = tent.amount;
  document.getElementById("tentCostWood").innerHTML = tent.cost.wood;
  document.getElementById("tentResidents").innerHTML = tent.residents;
  document.getElementById("houseAmount").innerHTML = house.amount;
  document.getElementById("houseCostWood").innerHTML = house.cost.wood;
  document.getElementById("houseCostStone").innerHTML = house.cost.stone;
  document.getElementById("houseResidents").innerHTML = house.residents;
  document.getElementById("hostelAmount").innerHTML = hostel.amount;
  document.getElementById("hostelCostWood").innerHTML = hostel.cost.wood;
  document.getElementById("hostelCostStone").innerHTML = hostel.cost.stone;
  document.getElementById("hostelResidents").innerHTML = hostel.residents;
  document.getElementById("woodStorageAmount").innerHTML = wood.storage;
  document.getElementById("woodStorageCostWood").innerHTML = wood.storageCost.wood;
  document.getElementById("woodStorageCostStone").innerHTML = wood.storageCost.stone;
  document.getElementById("stoneStorageAmount").innerHTML = stone.storage;
  document.getElementById("stoneStorageCostWood").innerHTML = stone.storageCost.wood;
  document.getElementById("stoneStorageCostStone").innerHTML = stone.storageCost.stone;
  document.getElementById("foodStorageAmount").innerHTML = food.storage;
  document.getElementById("foodStorageCostWood").innerHTML = food.storageCost.wood;
  document.getElementById("foodStorageCostStone").innerHTML = food.storageCost.stone;
}

// Click to Chop, Mine, Gather

/* TESTING VALUES
wood.amount = 50;
stone.amount = 50;
food.amount = 50;*/



</script>
</body>
</html>