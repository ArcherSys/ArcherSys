using UnityEngine;
using System.Collections;
namespace ArcherSysOS.DDG.CapitalPursuit.Nav
{
    public class SceneLoadr : MonoBehaviour
    {
        private int scene;
        // Use this for initialization
        void Start()
        {
            scene = 1;
        }

        // Update is called once per frame
        void Update()
        {

        }
        public void loadSingleplayerGame()
        {
            gameObject.SetActive(false);
            loadScenery(3);
        }
       public void loadScenery(string scene)
        {
            Application.LoadLevel(scene);
            gameObject.SetActive(false);
        }
        public void loadScenery(int index)
        {
            Application.LoadLevel(index);

        }
    }
}