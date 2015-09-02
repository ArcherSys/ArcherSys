#pragma strict

//The sound clips
var openSound : AudioClip;
var closeSound : AudioClip;
var equipSound : AudioClip;
var pickUpSound : AudioClip;
var dropItemSound : AudioClip;

@script RequireComponent(AudioSource)
@script AddComponentMenu ("Inventory/Other/Inv Audio")

function Awake ()
{
	//This is where we check if the script is attached to the Inventory.
	if (transform.name != "Inventory")
	{
		Debug.LogError("An InvAudio script is placed on " + transform.name + ". It should only be attached to an 'Inventory' object");
	}
	
	//This is where we assign the default sounds if nothing else has been put in.
	if (openSound == null)
	{
		openSound = Resources.Load("Sounds/InvOpenSound", AudioClip);
	}
	if (closeSound == null)
	{
		closeSound = Resources.Load("Sounds/InvCloseSound", AudioClip);
	}
	if (equipSound == null)
	{
		equipSound = Resources.Load("Sounds/InvEquipSound", AudioClip);
	}
	if (pickUpSound == null)
	{
		pickUpSound = Resources.Load("Sounds/InvPickUpSound", AudioClip);
	}
	if (dropItemSound == null)
	{
		dropItemSound = Resources.Load("Sounds/InvDropItemSound", AudioClip);
	}
}

//This is where we play the open and close sounds.
function ChangedState (open : boolean)
{
	if (open)
	{
		GetComponent.<AudioSource>().clip = openSound;
		GetComponent.<AudioSource>().pitch = Random.Range(0.85, 1.1);
		GetComponent.<AudioSource>().Play();
	}
	else
	{
		GetComponent.<AudioSource>().clip = closeSound;
		GetComponent.<AudioSource>().pitch = Random.Range(0.85, 1.1);
		GetComponent.<AudioSource>().Play();
	}
}

//The rest of the functions can easily be called to play different sounds using SendMessage("Play<NameOfSound>", SendMessageOptions.DontRequireReceiver);

function PlayEquipSound ()
{
	GetComponent.<AudioSource>().clip = equipSound;
	GetComponent.<AudioSource>().pitch = Random.Range(0.85, 1.1);
	GetComponent.<AudioSource>().Play();
}

function PlayPickUpSound ()
{
	GetComponent.<AudioSource>().clip = pickUpSound;
	GetComponent.<AudioSource>().pitch = Random.Range(0.85, 1.1);
	GetComponent.<AudioSource>().Play();
}

function PlayDropItemSound ()
{
	GetComponent.<AudioSource>().clip = dropItemSound;
	GetComponent.<AudioSource>().pitch = Random.Range(0.85, 1.1);
	GetComponent.<AudioSource>().Play();
}