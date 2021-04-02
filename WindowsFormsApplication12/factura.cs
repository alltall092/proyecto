using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data;
using System.Data.SqlClient;

namespace WindowsFormsApplication12
{ 
   
    class factura
    {
        private Conexion con = new Conexion();
        private SqlCommand comando = new SqlCommand();
        private SqlDataReader read;
      
      
        public DataTable tabla()
        {
            DataTable tabla = new DataTable();
          comando.Connection= con.abrirConexion();
            comando.CommandText = "facturar";
            comando.CommandType = CommandType.StoredProcedure;
            read = comando.ExecuteReader();
            tabla.Load(read);
            read.Close();
            con.cerrar();
            return tabla;



        }
        public DataTable tablaCliente()
        {
            DataTable tabla = new DataTable();
            comando.Connection = con.abrirConexion();
            comando.CommandText = "NombreClientes";
            comando.CommandType = CommandType.StoredProcedure;
            read = comando.ExecuteReader();
            tabla.Load(read);
            read.Close();
            con.cerrar();
            return tabla;



        }
        public DataTable tablaProduct()
        {
            DataTable tabla = new DataTable();
            comando.Connection = con.abrirConexion();
            comando.CommandText = "product";
            comando.CommandType = CommandType.StoredProcedure;
            read = comando.ExecuteReader();
            tabla.Load(read);
            read.Close();
            con.cerrar();
            return tabla;



        }
        public DataTable Reporte(string nombre)
        {
            //SqlDataAdapter data=new SqlDataAdapter()
            DataTable tabla = new DataTable();
            comando.Connection = con.abrirConexion();
            comando.CommandText = "Resporte";
            comando.CommandType = CommandType.StoredProcedure;
            comando.Parameters.AddWithValue("@nombre", nombre);
            read = comando.ExecuteReader();
            tabla.Load(read);
            read.Close();
            con.cerrar();
            return tabla;



        }
        public void insertar(string descripcion,int cantidad,decimal precio,int idcliente,int idprodu)
        {
          
            comando.Connection = con.abrirConexion();
            comando.CommandText = "facturas";
            comando.CommandType = CommandType.StoredProcedure;

           
          
           comando.Parameters.AddWithValue("@descripcion",descripcion);
            comando.Parameters.AddWithValue("@cantidad", cantidad);
            comando.Parameters.AddWithValue("@precio", precio);
            
            
            comando.Parameters.AddWithValue("@idcliente", idcliente);
            comando.Parameters.AddWithValue("@idprodu",idprodu);
           
            comando.ExecuteNonQuery();
            comando.Parameters.Clear();


            con.cerrar();
           

        }
        

    }
}
