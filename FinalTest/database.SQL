-- modelo FÍSICO: EVENTOS

-- Criação da tabela Cidade
CREATE TABLE Cidade (
    CodCidade  INTEGER PRIMARY KEY,
    Nome       VARCHAR(35) NOT NULL,
    UF         CHAR(2) NOT NULL
);

-- Criação da tabela Tipo
CREATE TABLE Tipo (
    CodTipo     INTEGER PRIMARY KEY,
    Descricao   VARCHAR(30) NOT NULL
);

-- Criação da tabela ArtistaBanda
CREATE TABLE ArtistaBanda (
    CodArtistaBanda INTEGER PRIMARY KEY,
    Nome            VARCHAR(50) NOT NULL
);

-- Criação da tabela Evento
CREATE TABLE Evento (
    CodEvento   INTEGER PRIMARY KEY,
    Nome        VARCHAR(100) NOT NULL,
    CodTipo     INTEGER NOT NULL,
    Data        DATE NOT NULL,
    CodCidade   INTEGER NOT NULL,
    CodArtistaBanda INTEGER NOT NULL,
    FOREIGN KEY (CodTipo) REFERENCES Tipo (CodTipo),
    FOREIGN KEY (CodCidade) REFERENCES Cidade (CodCidade),
    FOREIGN KEY (CodArtistaBanda) REFERENCES ArtistaBanda (CodArtistaBanda)
);

-- Criação da tabela Cliente
CREATE TABLE Cliente (
    CodCliente  INTEGER PRIMARY KEY,
    Nome        VARCHAR(50) NOT NULL,
    DataNasc    DATE NOT NULL,
    CodCidade   INTEGER NOT NULL,
    FOREIGN KEY (CodCidade) REFERENCES Cidade (CodCidade)
);

-- Criação da tabela Ingresso
CREATE TABLE Ingresso (
    CodIngresso INTEGER PRIMARY KEY,
    CodEvento   INTEGER NOT NULL,
    CodCliente  INTEGER NOT NULL,
    Valor       DECIMAL(10, 2) NOT NULL,
    DataCompra  DATE NOT NULL,
    Quantidade  INTEGER NOT NULL,
    FOREIGN KEY (CodEvento) REFERENCES Evento (CodEvento),
    FOREIGN KEY (CodCliente) REFERENCES Cliente (CodCliente)
);

INSERT INTO Cidade (CodCidade, Nome, UF) VALUES (1, 'São Paulo', 'SP');
INSERT INTO Cidade (CodCidade, Nome, UF) VALUES (2, 'João Pessoa', 'PB');
INSERT INTO Cidade (CodCidade, Nome, UF) VALUES (3, 'Guarujá', 'SP');
INSERT INTO Cidade (CodCidade, Nome, UF) VALUES (4, 'Porto Alegre', 'RS');  
INSERT INTO Cidade (CodCidade, Nome, UF) VALUES (5, 'Passo Fundo', 'RS');  

INSERT INTO Tipo (CodTipo, Descricao) VALUES (1, 'Festa e Show');
INSERT INTO Tipo (CodTipo, Descricao) VALUES (2, 'Stand-Up Comedy');
INSERT INTO Tipo (CodTipo, Descricao) VALUES (3, 'Teatro');

INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (1, 'Indie Night');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (2, 'Timo Tolkki');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (3, 'Vinicius Lyra');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (4, 'KL Jay');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (5, 'Legião Urbana');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (6, 'O Terno');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (7, 'Titãs');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (8, 'Rosa Tattooada');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (9, 'TNT');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (10, 'Nando Reis');
INSERT INTO ArtistaBanda (CodArtistaBanda, Nome) VALUES (11, 'Cris Pereira');

INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (1, 'Indie Night', 1, '2024-12-06', 2, 1);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (2, 'Timo Tolkki - 40 Years Anniversary', 1, '2024-04-03', 2, 2);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (3, 'Vinicius Lyra e Convidados', 1, '2024-11-26', 3, 3);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (4, 'KL Jay - Caravela Cultural', 1, '2024-12-19', 2, 4);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (5, 'Legião Urbana - Show de Rock Nacional', 1, '2024-05-10', 4, 5);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (6, 'O Terno - Rock Alternativo', 1, '2024-06-15', 4, 6);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (7, 'Titãs - Show de Rock', 1, '2024-07-20', 4, 7);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (8, 'Rosa Tattooada - Show de Rock Nacional', 1, '2024-08-12', 4, 8);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (9, 'TNT - Rock Gaúcho', 1, '2024-09-15', 4, 9);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (10, 'Nando Reis - Show de Rock Nacional', 1, '2024-08-25', 5, 10);
INSERT INTO Evento (CodEvento, Nome, CodTipo, Data, CodCidade, CodArtistaBanda) VALUES (11, 'Gaudêncio - Stand-Up Comedy', 2, '2024-10-15', 4, 11);

INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (1, 'Ana Silva', '1990-05-12', 1);  -- São Paulo
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (2, 'Carlos Pereira', '1985-03-22', 2);  -- João Pessoa
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (3, 'Maria Souza', '1992-07-08', 3);  -- Guarujá
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (4, 'João Oliveira', '1988-11-15', 4);  -- Porto Alegre, RS
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (5, 'Fernanda Costa', '1995-09-30', 4);  -- Porto Alegre, RS
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (6, 'Ricardo Almeida', '1980-02-18', 5);  -- Passo Fundo, RS
INSERT INTO Cliente (CodCliente, Nome, DataNasc, CodCidade) VALUES (7, 'Camila Rocha', '1993-06-25', 1);  -- São Paulo

INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (1, 1, 1, 50.00, '2024-11-25', 2);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (2, 2, 2, 150.00, '2024-03-28', 1); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (3, 3, 3, 120.00, '2024-11-22', 3); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (4, 4, 1, 80.00, '2024-12-10', 4);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (5, 5, 4, 120.00, '2024-05-01', 2); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (6, 6, 5, 90.00, '2024-06-10', 3);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (7, 7, 4, 100.00, '2024-07-15', 1); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (8, 8, 6, 110.00, '2024-08-01', 2); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (9, 9, 7, 90.00, '2024-09-10', 3);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (10, 5, 4, 120.00, '2024-05-01', 2);
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (11, 5, 5, 120.00, '2024-05-02', 1);
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (12, 6, 4, 90.00, '2024-06-05', 3);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (13, 6, 5, 90.00, '2024-06-10', 2);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (14, 7, 4, 100.00, '2024-07-12', 1); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (15, 7, 5, 100.00, '2024-07-13', 2); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (16, 8, 6, 110.00, '2024-08-01', 2); 
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (17, 8, 7, 110.00, '2024-08-02', 1);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (18, 9, 6, 90.00, '2024-09-01', 3);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (19, 9, 7, 90.00, '2024-09-05', 2);  
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (20, 10, 1, 120.00, '2024-06-10', 2);
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (21, 10, 2, 120.00, '2024-06-12', 1);
INSERT INTO Ingresso (CodIngresso, CodEvento, CodCliente, Valor, DataCompra, Quantidade) VALUES (22, 10, 3, 120.00, '2024-06-15', 3);