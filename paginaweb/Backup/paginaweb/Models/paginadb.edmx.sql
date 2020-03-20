
-- --------------------------------------------------
-- Entity Designer DDL Script for SQL Server 2005, 2008, and Azure
-- --------------------------------------------------
-- Date Created: 12/23/2018 06:29:22
-- Generated from EDMX file: C:\Users\JULIO\Documents\Visual Studio 2012\Projects\paginaweb\paginaweb\Models\paginadb.edmx
-- --------------------------------------------------

SET QUOTED_IDENTIFIER OFF;
GO
USE [paginaweb];
GO
IF SCHEMA_ID(N'dbo') IS NULL EXECUTE(N'CREATE SCHEMA [dbo]');
GO

-- --------------------------------------------------
-- Dropping existing FOREIGN KEY constraints
-- --------------------------------------------------


-- --------------------------------------------------
-- Dropping existing tables
-- --------------------------------------------------

IF OBJECT_ID(N'[paginawebModelStoreContainer].[comentarios]', 'U') IS NOT NULL
    DROP TABLE [paginawebModelStoreContainer].[comentarios];
GO
IF OBJECT_ID(N'[dbo].[pagina]', 'U') IS NOT NULL
    DROP TABLE [dbo].[pagina];
GO

-- --------------------------------------------------
-- Creating all tables
-- --------------------------------------------------

-- Creating table 'pagina'
CREATE TABLE [dbo].[pagina] (
    [id] int IDENTITY(1,1) NOT NULL,
    [inicio] varchar(max)  NULL,
    [noticias] varchar(max)  NULL,
    [imagenes] varchar(150)  NULL,
    [contacto] varchar(50)  NULL
);
GO

-- Creating table 'comentarios'
CREATE TABLE [dbo].[comentarios] (
    [id] int IDENTITY(1,1) NOT NULL,
    [usuario] varchar(100)  NULL,
    [email] varchar(100)  NULL,
    [comentario] varchar(max)  NULL
);
GO

-- --------------------------------------------------
-- Creating all PRIMARY KEY constraints
-- --------------------------------------------------

-- Creating primary key on [id] in table 'pagina'
ALTER TABLE [dbo].[pagina]
ADD CONSTRAINT [PK_pagina]
    PRIMARY KEY CLUSTERED ([id] ASC);
GO

-- Creating primary key on [id] in table 'comentarios'
ALTER TABLE [dbo].[comentarios]
ADD CONSTRAINT [PK_comentarios]
    PRIMARY KEY CLUSTERED ([id] ASC);
GO

-- --------------------------------------------------
-- Creating all FOREIGN KEY constraints
-- --------------------------------------------------

-- --------------------------------------------------
-- Script has ended
-- --------------------------------------------------