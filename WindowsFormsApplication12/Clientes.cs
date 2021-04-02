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
    public partial class Clientes : Form
    {
        public Clientes()
        {
            InitializeComponent();
        }

        private void clienteBindingNavigatorSaveItem_Click(object sender, EventArgs e)
        {
            this.Validate();
            this.clienteBindingSource.EndEdit();
            this.tableAdapterManager.UpdateAll(this.dataSet1);

        }

        private void Form3_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'dataSet1.Cliente' table. You can move, or remove it, as needed.
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);

        }

        private void button1_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            string nombre = Convert.ToString(nombreTextBox.Text);
            string ape = Convert.ToString(apellidoTextBox.Text);
            Int64 c = Convert.ToInt64(cedulaTextBox.Text);
            string sol = Convert.ToString(estadocivilComboBox.SelectedItem);
            string ciu = Convert.ToString(ciudadTextBox.Text);
            Int64 tel = Convert.ToInt64(telefonoTextBox.Text);
            this.clienteTableAdapter.InsertQuery(nombre, ape, c, sol, ciu, tel);
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);


            
            


        }

        private void button2_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            string nombre = Convert.ToString(nombreTextBox.Text);
            string ape = Convert.ToString(apellidoTextBox.Text);
            Int64 c = Convert.ToInt64(cedulaTextBox.Text);
            string sol = Convert.ToString(estadocivilComboBox.SelectedItem);
            string ciu = Convert.ToString(ciudadTextBox.Text);
            Int64 tel = Convert.ToInt64(telefonoTextBox.Text);
            this.clienteTableAdapter.UpdateQuery(nombre, ape, c, sol, ciu, tel,id);
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);

        }

        private void button3_Click(object sender, EventArgs e)
        {
            int id = Convert.ToInt32(idTextBox.Text);
            this.clienteTableAdapter.DeleteQuery(id);
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);
        }

        private void button4_Click(object sender, EventArgs e)
        {
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);
        }

        private void button5_Click(object sender, EventArgs e)
     
        {
            int id = Convert.ToInt32(idTextBox.Text);
            this.clienteTableAdapter.FillBy1(this.dataSet1.Cliente, id);
            this.clienteTableAdapter.Fill(this.dataSet1.Cliente);
        }
    }
}
