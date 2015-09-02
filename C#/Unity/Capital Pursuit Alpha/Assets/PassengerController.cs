using UnityEngine;
using ArcherSysOS.DDG.CapitalPursuit.Nav;
using System.Collections;
public class PassengerController : MonoBehaviour {
    private float   speed = 10.0f;
    private Vector3 move;
    public Animation Humanus;
    public SceneLoadr sl;
    public Transform Enemy;

    // Use this for initialization
    void Start () {
       Humanus = GetComponent<Animation>();
        sl = GetComponent<SceneLoadr>();
	}
    public void Move()
    {
  


            move = new Vector3(Input.GetAxis("Horizontal"), 0, Input.GetAxis("Vertical"));
        
        transform.position += move * speed * Time.deltaTime;
        
    }
  public void Walk()
    {
        Humanus.Play("run");
    }
    public void Idleize()
    {
        Humanus.Play("idle");
    }
    // Update is called once per frame
    void Update () {
        if( transform.position.y <= -10.0f)
        {
            sl.loadScenery("Game Over");
        }
      if(Humanus.IsPlaying("death"))
        {
            sl.loadScenery("Game Over");
        }

	}
    void FixedUpdate()
    {
        Move();
        if (Input.GetKey(KeyCode.LeftArrow) || Input.GetKey(KeyCode.RightArrow) )
        {
            Walk();
        }else
            if(Input.GetKey(KeyCode.Space))
        {
            Humanus.Play("jump");
        }
       
        else { 
            Idleize();
        }
        
    }
    void onTriggerEnter(Collider other)
    {
        if (other.gameObject.CompareTag("Killer"))
        {
            Humanus.Play("death");
        }
    }
    void onPointerDown()
    {
        Move();
    }
    public float Speed
    {
        get
        {
            return speed;
        }
        set
        {
            speed = value;
        }
    }
}
