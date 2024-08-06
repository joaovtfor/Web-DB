insert into tipo values (1, 'Passeio', 'B', 80.00, 10000);
insert into tipo values (2, 'Luxo', 'B', 100.00, 1500);
insert into tipo values (3, 'Utilitário', 'C', 150.00, 30000);
insert into tipo values (4, 'Passageiro', 'D', 250.00, 50000);

insert into veiculo values ('IAA1111', 20000, 15000, 1);
insert into veiculo values ('IJA1112', 1000, 0, 2);
insert into veiculo values ('AAA1113', 50000, 40000, 3);
insert into veiculo values ('DAA1114', 200000, 180000, 4);
insert into veiculo values ('FJA8560', 57610, 50000, 2);
insert into veiculo values ('IOU8474', 23036, 18000, 1);
insert into veiculo values ('GAT2014', 187678, 180000, 4);
insert into veiculo values ('IJA8560', 65000, 53800, 1);

insert into motorista values (10, 'João', '2024/09/10', 'B');
insert into motorista values (11, 'Antônio', '2024/11/30', 'C');
insert into motorista values (12, 'Francisco', '2025/02/10', 'D');
insert into motorista values (13, 'Ana', '2025/06/11', 'E');
insert into motorista values (14, 'Joelma', '2024/08/12', 'E');
insert into motorista values (15, 'Mabel', '2024/08/12', 'A');
insert into motorista values (16, 'Ely Carlos', '2024/11/21', 'D');
insert into motorista values (17, 'Kadu', '2025/01/26', 'B');
insert into motorista values (18, 'Djair', '2025/03/07', 'C');

insert into locacao values (100,'2023/11/26','12675','2023/12/28','13200',1290.00,17,'FJA8560');
insert into locacao values (101,'2024/09/16','75890','2024/09/20','75989',789.00,11,'GAT2014');
insert into locacao values (102,'2024/05/13','120000','2024/05/28','124200',3200.00,14,'IOU8474');
insert into locacao values (103,'2024/01/16','75989','2024/01/17','76900',150.00,17,'GAT2014');
insert into locacao(codlocacao,dataRetirada,kmretirada,nroCNH,placa) values (104,'2024/07/29','19900',12,'FJA8560');
insert into locacao(codlocacao,dataRetirada,kmretirada,nroCNH,placa) values (105,'2024/08/03','60450',10,'IAA1111');
insert into locacao values (106,'2024/08/03','8992','2024/08/05','9800',289,14,'GAT2014');
