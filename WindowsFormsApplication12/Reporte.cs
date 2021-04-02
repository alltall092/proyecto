using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Microsoft.Reporting.WinForms;

namespace WindowsFormsApplication12
{
    public partial class Reporte : Form
    {
        public string nombre { get; set; }
        
        public Reporte()
        {
            InitializeComponent();
        }

        private void Reporte_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'DataSet1.Resporte' table. You can move, or remove it, as needed.
            factura f = new factura();
            

            this.reportViewer1.LocalReport.DataSources.Clear();
            this.reportViewer1.LocalReport.DataSources.Add(new ReportDataSource("DataSet1", f.Reporte(nombre)));
           // ReportParameter p = new ReportParameter("@nombre", nombre);
            //this.reportViewer1.LocalReport.SetParameters(p);
            


            this.reportViewer1.RefreshReport();
        }
    }
}
