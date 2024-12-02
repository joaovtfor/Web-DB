SELECT evento.nome, evento.data, tipo.descricao 
FROM Evento 
JOIN Tipo ON evento.CodTipo = tipo.CodTipo
JOIN Cidade ON evento.CodCidade = cidade.CodCidade
WHERE cidade.Nome = "Porto Alegre";