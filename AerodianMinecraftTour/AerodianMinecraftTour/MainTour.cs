using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using ArcherSysOS;

namespace AerodianMinecraftTour
{
    public partial class MainTour : Form
    {

        private int p_counter = 0;


        public MainTour()
        {
            InitializeComponent();
        }



        private void MainTour_Load(object sender, EventArgs e)
        {

        }

        private void timer1_Tick(Object sender, EventArgs e)
        {
            if (p_counter < 3)
            {
                p_counter++;
            }else
            {
                p_counter = 0;
            }
            pictureBox1.Image = imageList1.Images[p_counter];
            
        }

    }
}
