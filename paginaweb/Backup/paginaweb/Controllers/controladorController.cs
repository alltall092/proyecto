using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions.Internal;
using System.Web;
using System.Web.Mvc;
using System.Web.Mvc.ExpressionUtil;
using paginaweb.Models;
using System.Data;
using System.Data.SqlClient;
using System.Data.EntityClient;
using System.Data.Entity;
using System.Data.Entity.Validation;
using System.Data.EntityModel;
using System.ComponentModel.DataAnnotations;

namespace paginaweb.Controllers
{
    public class controladorController : Controller
    {
        //
        // GET: /controlador/
        paginawebEntities8 db = new paginawebEntities8();

        public ActionResult pagina()
        {
            
        
          pagina c = new pagina();
           var p= from t in db.pagina select t;
           ViewBag.consulta = p;
            return View();
        }
        [HttpGet]
        public ActionResult insertar(comentarios c)
        {

            paginawebEntities8 db = new paginawebEntities8();
            db.comentarios.Add(c);
            db.SaveChanges();
            return View();

        }
        [HttpGet]
        public ActionResult registrarse()
        {

            
            return View();


        }
        [HttpPost]
        public ActionResult registrarse(registrarse r)
        {

            paginawebEntities8 db = new paginawebEntities8();
            db.registrarse.Add(r);
            db.SaveChanges();
            return RedirectToAction("pagina");


        }
        [HttpGet]
        public ActionResult iniciarsession(int?id)
        {
            db.registrarse.Find(id);


            return View();

        }
 
        [HttpPost]
        public ActionResult iniciarsession(registrarse r,string usuario,string clave1)
        { 
        var d=from t in db.registrarse where usuario==t.usuario && clave1==t.clave1 select t;

        if (ModelState.IsValid)
        {
            if (d.Count() == 1)
            {
                Session["usuario"] = usuario;

               return RedirectToAction("session");
            }
            else
            {


              ModelState.AddModelError("","el usuario o contrasena son incorrecto");

               // return RedirectToAction("iniciarsession");

            }
        }

        return View();


       

           
           
        }
        [HttpGet]
        public ActionResult session(int?id){



           
            var item = from b in db.registrarse where b.id==id select b;

            ViewBag.item = item;


            
                return View(item);
            
       
        
        
        
        
        }
        




        [HttpGet]
        public ActionResult subir()
        {

           // var t = from j in db.registrarse select j;

            return View();


        }
   [HttpPost]
  public ActionResult subir(HttpPostedFileBase foto, registrarse f){
            
      if (foto != null)
      {
          prueba();
         
          foto.SaveAs(Server.MapPath("~/Content/imagenes/" + foto.FileName));
          f.foto = foto.FileName;
         
          
        
         
      }

      return View();
    

  }
        [HttpGet]
        public JavaScriptResult prueba()
        {

            string r = @"function move() {
        var elem = document.getElementById('mybar');
        var width = 1;
        var id = setInterval(frame, 10);
        function frame() {

            if (width >= 100) {
                clearInterval(id);


            } else {

                width++;
                elem.style.width = width + '%';
                document.getElementById('label').innerHTML = width * 1 + '%';
            }


        }

    }";
          
            
            return new JavaScriptResult() { Script = r };


        }     
    
    
    }



}

