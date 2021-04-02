SET IDENTITY_INSERT [dbo].[productos] ON
INSERT INTO [dbo].[productos] ([Id], [producto], [descripcion], [precio]) VALUES (1, N'arroz', N'es un cereal', CAST(50.0000 AS Money))
INSERT INTO [dbo].[productos] ([Id], [producto], [descripcion], [precio]) VALUES (2, N'aguacate', N'vegetales', CAST(35.0000 AS Money))
SET IDENTITY_INSERT [dbo].[productos] OFF
