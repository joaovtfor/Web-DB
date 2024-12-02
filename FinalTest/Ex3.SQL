SELECT evento.Nome, evento.Data
FROM Evento
JOIN ArtistaBanda ON artistaBanda.CodArtistaBanda = evento.CodArtistaBanda
JOIN Tipo ON tipo.CodTipo = evento.CodTipo
WHERE artistaBanda.Nome = "TNT" AND tipo.Descricao = "show";