using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication12
{
    public partial class Splash : MetroFramework.Forms.MetroForm
    {
        public Splash()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

            timer1.Start();



            
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            this.progressBar2.Increment(1);
            if (this.progressBar2.Value <= 100) {
                timer1.Start();

            }
        }
    }
}
