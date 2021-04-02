SET IDENTITY_INSERT [dbo].[Cliente] ON
INSERT INTO [dbo].[Cliente] ([Id], [nombre], [apellido], [cedula], [estadocivil], [ciudad], [telefono]) VALUES (1, N'julio', N'perez', 9300505923, N'soltero', N'san cristobal', 8298046401)
INSERT INTO [dbo].[Cliente] ([Id], [nombre], [apellido], [cedula], [estadocivil], [ciudad], [telefono]) VALUES (2, N'rosa', N'ramirez', 9300454724, N'casada', N'santo domingo', 8294561245)
INSERT INTO [dbo].[Cliente] ([Id], [nombre], [apellido], [cedula], [estadocivil], [ciudad], [telefono]) VALUES (3, N'miguel', N'martinez', 9300451256, N'viodo', N'santiago', 8094561245)
SET IDENTITY_INSERT [dbo].[Cliente] OFF
