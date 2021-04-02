using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;
namespace WindowsFormsApplication12
{
    class Conexion
    {
        static public string con = "Data Source=JULIO\\SQLEXPRESS;Integrated Security=True";
        public SqlConnection conexion = new SqlConnection(con);
        
        public SqlConnection abrirConexion()
        {
            if (conexion.State == ConnectionState.Closed)
            {
                conexion.Open();




            }
            return conexion;


        }
        public SqlConnection cerrar()
        {
            if (conexion.State == ConnectionState.Open)
            {
                conexion.Close();


            }
            return conexion;


        }
        
    }
}
