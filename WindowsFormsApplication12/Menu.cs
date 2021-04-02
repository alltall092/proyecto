using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Threading;

namespace WindowsFormsApplication12
{
    public partial class Menu : MetroFramework.Forms.MetroForm
    {
         
        public Menu()
        {

            Thread d = new Thread(new ThreadStart(inicial));
            d.Start();
            Thread.Sleep(5000);
            InitializeComponent();
            d.Abort();
        }

        private void Form2_Load(object sender, EventArgs e)
        {




            label1.Text = DateTime.Now.Hour + ":" + DateTime.Now.Minute + ":" + DateTime.Now.Second;
        }
        public void inicial()
        {

            Application.Run(new Splash());

        }

        private void button1_Click(object sender, EventArgs e)
        {

        }
       public void abrir(Form f)
        {
            if (this.panel2.Controls.Count > 0)
            {
                this.panel2.Controls.RemoveAt(0);


            }
            f.TopLevel = false;

            panel2.Controls.Add(f);
            panel2.Tag = f;
            f.Dock = DockStyle.Fill;
            f.Show();
            f.BringToFront();
            f.FormBorderStyle = FormBorderStyle.None;


        }

        private void button2_Click(object sender, EventArgs e)
        {
            abrir(new Clientes());
        }

        private void button3_Click(object sender, EventArgs e)
        {
            abrir(new Productos());
        }

        private void button4_Click(object sender, EventArgs e)
        {
            abrir(new Facturacion());
        }

        private void panel2_Paint(object sender, PaintEventArgs e)
        {

        }

        private void panel1_Paint(object sender, PaintEventArgs e)
        {

        }
    }
}
