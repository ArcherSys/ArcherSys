/*   Copyright 2011 John Beaven
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 */

using UnityEngine;
using System.Collections;
using System.Text.RegularExpressions;
using System.IO;

public class VoxSprite : MonoBehaviour
{

	private Vector3 dims = new Vector3 (1, 1, 1);
	private bool showAll = false;

	public TextAsset voxData;
	public Transform voxPrototype;

	// Use this for initialization
	void Start ()
	{
		string strVox = "";
		
		if (voxData == null)
			throw new UnityException ("Voxel data required");
		
		if (voxPrototype == null)
			throw new UnityException ("Prototype Transform required");
		
		// read in voxel data, render in place of sprite..
		foreach (string line in voxData.text.Split ('\n')) {
			
			if (line.Contains (":")) {
				
				string[] lineComponents = line.Split (':');
				
				switch (lineComponents[0]) {
				
				case "Size":
					lineComponents = lineComponents[1].Split ('x');
					dims.x = System.Convert.ToSingle (lineComponents[0]);
					dims.y = System.Convert.ToSingle (lineComponents[1]);
					dims.z = System.Convert.ToSingle (lineComponents[2]);
					break;
				
				case "Show All":
					showAll = lineComponents[1].Contains ("yes");
					break;
				}
			
			} else {
				
				strVox += line;
			}
		}
		
		// convert the string of colour codes to an array for rendering..
		strVox = Regex.Replace (strVox, "[^0-9]", "");
		char[] voxCharArray = new char[strVox.Length];
		StringReader sr = new StringReader (strVox);
		sr.Read (voxCharArray, 0, strVox.Length);
		
		// error checking - make sure there are the correct number of chars in the array compared to the proposed dimensions..
		if (voxCharArray.Length != dims.x * dims.y * dims.z) {
			
			throw new UnityException ("Data error: the OldSkool voxel data is malformed");
		}
		
		int rawPos = 0;
		
		Quaternion originalRotation = transform.rotation;
		transform.rotation = new Quaternion (0, 0, 0, 0);
		
		for (int vx = 0; vx < dims.x; vx++) {
			for (int vy = 0; vy < dims.y; vy++) {
				for (int vz = 0; vz < dims.z; vz++) {
					
					// determine whether the vox is actually visible..
					// Address = ((depthindex*col_size+colindex) * row_size + rowindex)
					if (!(voxCharArray[rawPos] == '0' || !showAll && vx > 0 && vy > 0 && vz > 0 && vx < dims.x - 1 && vy < dims.y - 1 && vz < dims.z - 1 && voxCharArray[(int)((((vx + 1) * dims.z + vy) * dims.y + vz))] != '0' && voxCharArray[(int)((((vx - 1) * dims.z + vy) * dims.y + vz))] != '0' && voxCharArray[(int)(((vx * dims.z + (vy + 1)) * dims.y + vz))] != '0' && voxCharArray[(int)(((vx * dims.z + (vy - 1)) * dims.y + vz))] != '0' && voxCharArray[(int)(((vx * dims.z + vy) * dims.y + (vz + 1)))] != '0' && voxCharArray[(int)(((vx * dims.z + vy) * dims.y + (vz - 1)))] != '0')) {
						
						// create game object and colour appropriately..
						GameObject go = (GameObject)Instantiate (voxPrototype.gameObject);
						go.transform.parent = this.transform;
						go.transform.localPosition = new Vector3 (vx * voxPrototype.localScale.x, vy * voxPrototype.localScale.y, vz * voxPrototype.localScale.z);
						
						if (go.GetComponent<Renderer>() != null) {
							switch (voxCharArray[rawPos]) {
							
							case '1':
								go.GetComponent<Renderer>().material.color = Color.blue;
								break;
							case '2':
								go.GetComponent<Renderer>().material.color = Color.red;
								break;
							case '3':
								go.GetComponent<Renderer>().material.color = Color.green;
								break;
							case '4':
								go.GetComponent<Renderer>().material.color = Color.yellow;
								break;
							case '5':
								go.GetComponent<Renderer>().material.color = Color.cyan;
								break;
							case '6':
								go.GetComponent<Renderer>().material.color = Color.magenta;
								break;
							case '7':
								go.GetComponent<Renderer>().material.color = Color.grey;
								break;
							case '8':
								go.GetComponent<Renderer>().material.color = Color.black;
								break;
							case '9':
								go.GetComponent<Renderer>().material.color = Color.white;
								break;
							}
						}
					}
					
					rawPos++;
				}
			}
		}
		
		transform.rotation = originalRotation;
	}
}
