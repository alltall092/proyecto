
	SELECT  c.nombre, p.producto, f.descripcion, f.cantidad, f.precio,(f.precio*f.cantidad)*0.21 AS iva, SUM(f.precio * f.cantidad) AS total,f.idcliente,f.idprodu
FROM factura as f inner join productos as p on f.idprodu=p.id  inner join Cliente as c on f.idcliente=c.id where c.nombre='rosa'
GROUP BY c.nombre, p.producto, f.descripcion, f.cantidad, f.precio,f.idcliente,f.idprodu