/** @namespace */
var GameStackIO = {};
/** @function
 * Connects to a game pad
 * @param {Event} event - The Event object to use for the gamepad
 * @param {Boolean} - Is this gamepad connecting to the internet?
 *
 */
 GameStack.gamepads = {};
GameStackIO.greetGamePad = function(event, connecting){
    var gamepad = event.gamepad;
    if (connecting) {
        window.console.info("[CafeSync-Archade]:The interfacer is connecting to this Virtual Machine");
        GameStackIO.gamepads[gamepad.index] = gamepad;
    }
    else {
        delete GameStackIO.gamepads[gamepad.index];
    }
};
window.addEventListener("gamepadconnected",function(e){
    GameStackIO.greetGamePad(e, true);
},false);