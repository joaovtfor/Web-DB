SELECT cliente.Nome, ingresso.Quantidade
FROM Cliente
JOIN Ingresso ON cliente.CodCliente = ingresso.CodCliente
WHERE ingresso.Quantidade > 4
ORDER BY ingresso.Quantidade DESC;