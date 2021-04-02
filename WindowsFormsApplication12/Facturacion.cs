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
    public partial class Facturacion : Form
    {
        factura f = new factura();
        public Facturacion()
        {
            InitializeComponent();
        }

        private void fillToolStripButton_Click(object sender, EventArgs e)
        {
            try
            {
                this.facturarTableAdapter.Fill(this.dataSet1.facturar, new System.Nullable<decimal>(((decimal)(System.Convert.ChangeType(ivaToolStripTextBox.Text, typeof(decimal))))));
            }
            catch (System.Exception ex)
            {
                System.Windows.Forms.MessageBox.Show(ex.Message);
            }

        }

        private void Facturacion_Load(object sender, EventArgs e)
        {
           
            facturarDataGridView.DataSource = f.tabla();
            nombreComboBox.DataSource = f.tablaCliente();
            nombreComboBox.DisplayMember = "nombre";
            nombreComboBox.ValueMember = "id";
           
            productoComboBox.DataSource = f.tablaProduct();
            productoComboBox.DisplayMember = "producto";
            productoComboBox.ValueMember = "id";
            

        }

        private void button1_Click(object sender, EventArgs e)
        {
            
            f.insertar(Convert.ToString(descripcionTextBox.Text),Convert.ToInt32(cantidadTextBox.Text),
                Convert.ToDecimal(precioTextBox.Text),
                 Convert.ToInt32(nombreComboBox.SelectedValue),
            Convert.ToInt32(productoComboBox.SelectedValue));

            facturarDataGridView.DataSource = f.tabla();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
           // textBox1.Text =(decimal.Parse(precioTextBox.Text) - decimal.Parse(textBox1.Text)).ToString();

           


        }

        private void button4_Click(object sender, EventArgs e)
        {
            
            Reporte r = new Reporte();
            r.nombre=facturarDataGridView.CurrentRow.Cells[0].Value.ToString();
            r.ShowDialog();
        }

        private void facturarDataGridView_CellClick(object sender, DataGridViewCellEventArgs e)
        {
           
        }

        private void facturarDataGridView_CellContentDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            Reporte r = new Reporte();
            r.nombre = facturarDataGridView.CurrentRow.Cells[0].Value.ToString();
            r.ShowDialog();
        }
    }
}
