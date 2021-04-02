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
    public partial class Productos : Form
    {
        public Productos()
        {
            InitializeComponent();
        }

        private void productosBindingNavigatorSaveItem_Click(object sender, EventArgs e)
        {
            this.Validate();
            this.productosBindingSource.EndEdit();
            this.tableAdapterManager.UpdateAll(this.dataSet1);

        }

        private void Productos_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'dataSet1.productos' table. You can move, or remove it, as needed.
            this.productosTableAdapter.Fill(this.dataSet1.productos);

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string p = Convert.ToString(productoTextBox.Text);
            string d = Convert.ToString(descripcionTextBox.Text);
            decimal precio = Convert.ToDecimal(precioTextBox.Text);
            this.productosTableAdapter.InsertQuery(p, d, precio);
            this.productosTableAdapter.Fill(this.dataSet1.productos);
        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.productosTableAdapter.Fill(this.dataSet1.productos);
        }

        private void button2_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            string p = Convert.ToString(productoTextBox.Text);
            string d = Convert.ToString(descripcionTextBox.Text);
            decimal precio = Convert.ToDecimal(precioTextBox.Text);
            this.productosTableAdapter.UpdateQuery(p, d, precio,id);
            this.productosTableAdapter.Fill(this.dataSet1.productos);
        }

        private void button3_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            this.productosTableAdapter.DeleteQuery(id);
            this.productosTableAdapter.Fill(this.dataSet1.productos);
        }

        private void button5_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            this.productosTableAdapter.FillBy1(this.dataSet1.productos,id);
            this.productosTableAdapter.Fill(this.dataSet1.productos);
        }
    }
}
