SELECT ingresso.codIngresso, (ingresso.Valor*ingresso.Quantidade) as Total, ingresso.DataCompra, evento.Nome, cliente.Nome
FROM Ingresso
JOIN Evento ON evento.CodEvento = ingresso.CodEvento
JOIN Cliente ON cliente.CodCliente = ingresso.CodCliente
WHERE DataCompra BETWEEN '2024-06-01' AND '2024-06-30'
ORDER BY ingresso.DataCompra DESC;