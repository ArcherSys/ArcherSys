gdjs.The_32UniverseCode = {};


gdjs.The_32UniverseCode.GDGameOverObjects1= [];
gdjs.The_32UniverseCode.GDGameOverObjects2= [];
gdjs.The_32UniverseCode.GDGameOverObjects3= [];
gdjs.The_32UniverseCode.GDScoreObjects1= [];
gdjs.The_32UniverseCode.GDScoreObjects2= [];
gdjs.The_32UniverseCode.GDScoreObjects3= [];
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1= [];
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects2= [];
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects3= [];
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1= [];
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects2= [];
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects3= [];
gdjs.The_32UniverseCode.GDLaser8RedObjects1= [];
gdjs.The_32UniverseCode.GDLaser8RedObjects2= [];
gdjs.The_32UniverseCode.GDLaser8RedObjects3= [];
gdjs.The_32UniverseCode.GDNoerahdObjects1= [];
gdjs.The_32UniverseCode.GDNoerahdObjects2= [];
gdjs.The_32UniverseCode.GDNoerahdObjects3= [];
gdjs.The_32UniverseCode.GDLaser2BlueObjects1= [];
gdjs.The_32UniverseCode.GDLaser2BlueObjects2= [];
gdjs.The_32UniverseCode.GDLaser2BlueObjects3= [];
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1= [];
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2= [];
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3= [];

gdjs.The_32UniverseCode.conditionTrue_0 = {val:false};
gdjs.The_32UniverseCode.condition0IsTrue_0 = {val:false};
gdjs.The_32UniverseCode.condition1IsTrue_0 = {val:false};
gdjs.The_32UniverseCode.condition2IsTrue_0 = {val:false};

gdjs.The_32UniverseCode.func = function(runtimeScene, context) {
context.startNewFrame();
gdjs.The_32UniverseCode.GDGameOverObjects1.length = 0;
gdjs.The_32UniverseCode.GDGameOverObjects2.length = 0;
gdjs.The_32UniverseCode.GDGameOverObjects3.length = 0;
gdjs.The_32UniverseCode.GDScoreObjects1.length = 0;
gdjs.The_32UniverseCode.GDScoreObjects2.length = 0;
gdjs.The_32UniverseCode.GDScoreObjects3.length = 0;
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length = 0;
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects2.length = 0;
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects3.length = 0;
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length = 0;
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects2.length = 0;
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects3.length = 0;
gdjs.The_32UniverseCode.GDLaser8RedObjects1.length = 0;
gdjs.The_32UniverseCode.GDLaser8RedObjects2.length = 0;
gdjs.The_32UniverseCode.GDLaser8RedObjects3.length = 0;
gdjs.The_32UniverseCode.GDNoerahdObjects1.length = 0;
gdjs.The_32UniverseCode.GDNoerahdObjects2.length = 0;
gdjs.The_32UniverseCode.GDNoerahdObjects3.length = 0;
gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length = 0;
gdjs.The_32UniverseCode.GDLaser2BlueObjects2.length = 0;
gdjs.The_32UniverseCode.GDLaser2BlueObjects3.length = 0;
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length = 0;
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length = 0;
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length = 0;


{



}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.pickedObjectsCount(context.clearEventsObjectsMap().addObjectsToEventsMap("Spaceship1Blue", gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1).getEventsObjectsMap()) > 0;
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {

{ //Subevents

{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.createFrom(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1);
gdjs.The_32UniverseCode.GDLaser2BlueObjects2.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
gdjs.The_32UniverseCode.condition1IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if ( gdjs.The_32UniverseCode.condition0IsTrue_0.val ) {
{
gdjs.The_32UniverseCode.condition1IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, 0.25, "FireRate");
}}
if (gdjs.The_32UniverseCode.condition1IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "FireRate");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser2Blue", gdjs.The_32UniverseCode.GDLaser2BlueObjects2).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2[0].getPointX("Centre")), (( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2[0].getPointY("Centre")), "");
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser2BlueObjects2.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser2BlueObjects2[i].addPolarForce((( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2[0].getDirectionOrAngle()), 450, 1);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser2BlueObjects2.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser2BlueObjects2[i].setAngle((( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2[0].getAngle()));
}
}{gdjs.evtTools.sound.playSound(runtimeScene, "laser1.ogg", false, 100, 1);
}}

}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.createFrom(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1);

{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects2[i].rotateTowardPosition(gdjs.evtTools.input.getMouseX(runtimeScene, "", 0), gdjs.evtTools.input.getMouseY(runtimeScene, "", 0), 360, runtimeScene);
}
}
}


{



}


{


gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, 1, "Enemy");
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{runtimeScene.getVariables().get("EnemyPosition").setNumber(gdjs.random(1));
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "Enemy");
}
{ //Subevents

{

gdjs.The_32UniverseCode.GDNoerahdObjects3.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("EnemyPosition")) == 0;
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Noerahd", gdjs.The_32UniverseCode.GDNoerahdObjects3).getEventsObjectsMap(), gdjs.random(800), -150, "");
}}

}


{

gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects3.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("EnemyPosition")) == 1;
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorBig1Brown", gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects3).getEventsObjectsMap(), gdjs.random(800), +750, "");
}}

}

} //End of subevents
}

}

} //End of subevents
}

}


{

gdjs.The_32UniverseCode.GDNoerahdObjects1.createFrom(runtimeScene.getObjects("Noerahd"));
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

{for(var i = 0, len = gdjs.The_32UniverseCode.GDNoerahdObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDNoerahdObjects1[i].addForceTowardPosition((( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[0].getPointX("")), (( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[0].getPointY("")), 150, 0);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDNoerahdObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDNoerahdObjects1[i].rotateTowardPosition((( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[0].getPointX("")), (( gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[0].getPointY("")), 180, runtimeScene);
}
}
}


{

gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorBig1Brown"));

{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[i].addForce(gdjs.random(30)-gdjs.random(30), -150, 0);
}
}
}


{

gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorBig1Brown"));
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorMedium1Brown"));

{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[i].rotate(10, runtimeScene);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[i].rotate(7, runtimeScene);
}
}
}


{

gdjs.The_32UniverseCode.GDLaser2BlueObjects1.createFrom(runtimeScene.getObjects("Laser2Blue"));
gdjs.The_32UniverseCode.GDNoerahdObjects1.createFrom(runtimeScene.getObjects("Noerahd"));
gdjs.The_32UniverseCode.GDLaser8RedObjects1.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(context.clearEventsObjectsMap().addObjectsToEventsMap("Laser2Blue", gdjs.The_32UniverseCode.GDLaser2BlueObjects1).getEventsObjectsMap(), context.clearEventsObjectsMap().addObjectsToEventsMap("Noerahd", gdjs.The_32UniverseCode.GDNoerahdObjects1).getEventsObjectsMap(), false, runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDNoerahdObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDNoerahdObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDNoerahdObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDNoerahdObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDNoerahdObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDNoerahdObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDNoerahdObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDNoerahdObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointX("")), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointY("")), "");
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser8RedObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].addForce(gdjs.random(20)-gdjs.random(20), gdjs.random(20)-gdjs.random(20), 1);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDNoerahdObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDNoerahdObjects1[i].deleteFromScene(runtimeScene);
}
}{gdjs.evtTools.sound.playSound(runtimeScene, "spaceTrash1.ogg", false, 100, 1);
}{runtimeScene.getVariables().get("Score").add(100);
}}

}


{

gdjs.The_32UniverseCode.GDLaser2BlueObjects1.createFrom(runtimeScene.getObjects("Laser2Blue"));
gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorBig1Brown"));
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(context.clearEventsObjectsMap().addObjectsToEventsMap("Laser2Blue", gdjs.The_32UniverseCode.GDLaser2BlueObjects1).getEventsObjectsMap(), context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorBig1Brown", gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1).getEventsObjectsMap(), false, runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorMedium1Brown", gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorMedium1Brown", gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorMedium1Brown", gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointX("")), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointY("")), "");
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[i].addPolarForce(gdjs.random(360), 15+gdjs.random(15), 1);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1[i].deleteFromScene(runtimeScene);
}
}{gdjs.evtTools.sound.playSound(runtimeScene, "spaceTrash2.ogg", false, 100, 1);
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser2BlueObjects1[i].deleteFromScene(runtimeScene);
}
}{runtimeScene.getVariables().get("Score").add(50);
}}

}


{

gdjs.The_32UniverseCode.GDLaser2BlueObjects1.createFrom(runtimeScene.getObjects("Laser2Blue"));
gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorMedium1Brown"));
gdjs.The_32UniverseCode.GDLaser8RedObjects1.length = 0;

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(context.clearEventsObjectsMap().addObjectsToEventsMap("Laser2Blue", gdjs.The_32UniverseCode.GDLaser2BlueObjects1).getEventsObjectsMap(), context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorMedium1Brown", gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1).getEventsObjectsMap(), false, runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[0].getPointX(""))+gdjs.random(80), (( gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[0].getPointY(""))+gdjs.random(80), "");
}{gdjs.evtTools.object.createObjectOnScene(runtimeScene, context.clearEventsObjectsMap().addObjectsToEventsMap("Laser8Red", gdjs.The_32UniverseCode.GDLaser8RedObjects1).getEventsObjectsMap(), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointX("")), (( gdjs.The_32UniverseCode.GDLaser2BlueObjects1.length === 0 ) ? 0 :gdjs.The_32UniverseCode.GDLaser2BlueObjects1[0].getPointY("")), "");
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser8RedObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].addForce(gdjs.random(20)-gdjs.random(20), gdjs.random(20)-gdjs.random(20), 1);
}
}{for(var i = 0, len = gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDMeteorMedium1BrownObjects1[i].deleteFromScene(runtimeScene);
}
}{gdjs.evtTools.sound.playSound(runtimeScene, "spaceTrash1.ogg", false, 100, 1);
}{runtimeScene.getVariables().get("Score").add(25);
}}

}


{

gdjs.The_32UniverseCode.GDLaser8RedObjects1.createFrom(runtimeScene.getObjects("Laser8Red"));

{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser8RedObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].setOpacity(gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].getOpacity() - (255*gdjs.evtTools.runtimeScene.getElapsedTimeInSeconds(runtimeScene)));
}
}
}


{

gdjs.The_32UniverseCode.GDLaser8RedObjects1.createFrom(runtimeScene.getObjects("Laser8Red"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.The_32UniverseCode.GDLaser8RedObjects1.length;i<l;++i) {
    if ( gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].getOpacity() == 0 ) {
        gdjs.The_32UniverseCode.condition0IsTrue_0.val = true;
        gdjs.The_32UniverseCode.GDLaser8RedObjects1[k] = gdjs.The_32UniverseCode.GDLaser8RedObjects1[i];
        ++k;
    }
}
gdjs.The_32UniverseCode.GDLaser8RedObjects1.length = k;}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDLaser8RedObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDLaser8RedObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{



}


{

gdjs.The_32UniverseCode.GDScoreObjects1.createFrom(runtimeScene.getObjects("Score"));

{for(var i = 0, len = gdjs.The_32UniverseCode.GDScoreObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDScoreObjects1[i].setString("Score: "+gdjs.evtTools.common.toString(gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("Score"))));
}
}
}


{



}


{

gdjs.The_32UniverseCode.GDGameOverObjects1.createFrom(runtimeScene.getObjects("GameOver"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDGameOverObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDGameOverObjects1[i].hide();
}
}}

}


{

gdjs.The_32UniverseCode.GDGameOverObjects1.createFrom(runtimeScene.getObjects("GameOver"));
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.pickedObjectsCount(context.clearEventsObjectsMap().addObjectsToEventsMap("Spaceship1Blue", gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1).getEventsObjectsMap()) == 0;
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDGameOverObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDGameOverObjects1[i].hide(false);
}
}{gdjs.evtTools.runtimeScene.setTimeScale(runtimeScene, 0);
}}

}


{

gdjs.The_32UniverseCode.GDNoerahdObjects1.createFrom(runtimeScene.getObjects("Noerahd"));
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(context.clearEventsObjectsMap().addObjectsToEventsMap("Spaceship1Blue", gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1).getEventsObjectsMap(), context.clearEventsObjectsMap().addObjectsToEventsMap("Noerahd", gdjs.The_32UniverseCode.GDNoerahdObjects1).getEventsObjectsMap(), false, runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{

gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1.createFrom(runtimeScene.getObjects("MeteorBig1Brown"));
gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(context.clearEventsObjectsMap().addObjectsToEventsMap("MeteorBig1Brown", gdjs.The_32UniverseCode.GDMeteorBig1BrownObjects1).getEventsObjectsMap(), context.clearEventsObjectsMap().addObjectsToEventsMap("Spaceship1Blue", gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1).getEventsObjectsMap(), false, runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


{



{



{ //Subevents

{



}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].setVariableNumber(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getVariables().get("speed"), 100);
}
}}

}


{



}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Left");
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].addPolarForce((gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getDirectionOrAngle()) -90, (gdjs.RuntimeObject.getVariableNumber(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getVariables().get("speed"))), 0);
}
}}

}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Right");
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].addPolarForce((gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getDirectionOrAngle()) +90, (gdjs.RuntimeObject.getVariableNumber(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getVariables().get("speed"))), 0);
}
}}

}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Up");
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].addPolarForce((gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getDirectionOrAngle()), (gdjs.RuntimeObject.getVariableNumber(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getVariables().get("speed"))), 0);
}
}}

}


{

gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.createFrom(runtimeScene.getObjects("Spaceship1Blue"));

gdjs.The_32UniverseCode.condition0IsTrue_0.val = false;
{
gdjs.The_32UniverseCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Down");
}if (gdjs.The_32UniverseCode.condition0IsTrue_0.val) {
{for(var i = 0, len = gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3.length ;i < len;++i) {
    gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].addPolarForce((gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getDirectionOrAngle()), - (gdjs.RuntimeObject.getVariableNumber(gdjs.The_32UniverseCode.GDSpaceship1BlueObjects3[i].getVariables().get("speed"))), 0);
}
}}

}

} //End of subevents

}


}

return;
}
gdjs['The_32UniverseCode']= gdjs.The_32UniverseCode;
