  // Create an ink manager.
        // InkManager is documented at http://go.microsoft.com/fwlink/?LinkID=260648.
        var inkManager = new Windows.UI.Input.Inking.InkManager();
// Obtain reference to the specified element.
function get(elementId)
{
    return window.document.getElementById(elementId);
}
inkCanvas = get("inkCanvas");
inkContext = inkCanvas.getContext("2d");
 function getPointerDeviceType(pId)
    {
        var pointerDeviceType;
        var pointerPoint = Windows.UI.Input.PointerPoint.getCurrentPoint(pId);
        switch (pointerPoint.pointerDevice.pointerDeviceType)
        {
            case Windows.Devices.Input.PointerDeviceType.touch:
                pointerDeviceType = "Touch";
                break;

            case Windows.Devices.Input.PointerDeviceType.pen:
                pointerDeviceType = "Pen";
                break;

            case Windows.Devices.Input.PointerDeviceType.mouse:
                pointerDeviceType = "Mouse";
                break;
            default:
                pointerDeviceType = "Undefined";
        }
        deviceMessage.innerText = pointerDeviceType;
        return pointerDeviceType;
    }
 // Mouse: Occurs when the pointer moves.
    // Pen/Touch: Occurs at a steady rate (approx. 100 messages/second) whether the pointer moves or not.
    function onPointerMove(evt)
    {
        // Process pen and mouse (with left button) only. Reserve touch for manipulations.
        if ((pointerDeviceType === "Pen") || ((pointerDeviceType === "Mouse") && (evt.button === -1)))
        {
            statusMessage.innerText = pointerDeviceType + " pointer move: Draw stroke as lines. "
            // The pointer Id is used to restrict input processing to the current stroke.
            // pointerId is updated in onPointerDown().
            if (evt.pointerId === pointerId)
            {
                var current = evt.currentPoint;

                // Draw stroke in real time.
                inkContext.lineTo(current.rawPosition.x, current.rawPosition.y);
                inkContext.stroke();

                // Add current pointer to the ink manager (update stroke).
                inkManager.processPointerUpdate(current);
            }
        }
        else
        {
            // Process touch input.
        }
    }
function onPointerUp(evt)
{
    // Process pen and mouse (with left button) only. Reserve touch for manipulations.
    if ((pointerDeviceType === "Pen") || ((pointerDeviceType === "Mouse") && (evt.button === 0)))
    {
        statusMessage.innerText = pointerDeviceType + " pointer up: Finish stroke. "
        if (evt.pointerId === pointerId) {
            // Add current pointer to the ink manager (end stroke).
            inkManager.processPointerUp(evt.currentPoint);

            // End live drawing.
            inkContext.closePath();

            // Render strokes using bezier curves.
            renderAllStrokes();

            // Reset pointer Id.
            pointerId = -1;
        }
    }
    else
    {
        // Process touch input.
    }
}
inkCanvas.addEventListener("pointerdown", onPointerDown, false);
inkCanvas.addEventListener("pointermove", onPointerMove, false);
inkCanvas.addEventListener("pointerup", onPointerUp, false);
