﻿//------------------------------------------------------------------------------
// <auto-generated>
//    This code was generated from a template.
//
//    Manual changes to this file may cause unexpected behavior in your application.
//    Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace paginaweb.Models
{
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Infrastructure;
    
    public partial class paginawebEntities8 : DbContext
    {
        public paginawebEntities8()
            : base("name=paginawebEntities8")
        {
        }
    
        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            throw new UnintentionalCodeFirstException();
        }
    
        public DbSet<comentarios> comentarios { get; set; }
        public DbSet<pagina> pagina { get; set; }
        public DbSet<registrarse> registrarse { get; set; }
        public DbSet<menusession> menusessionConjunto { get; set; }
    }
}