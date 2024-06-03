INSERT INTO disciplinas (nome, professor_id) 
VALUES ('Fisica III', 1), 
('Programação Web', 1), 
('Química IV', 1);

-- Para física
INSERT INTO grupos (nome) 
VALUES ('Ondas'), 
('Partículas'), 
('Mecânica Newtoniana'), 
('Termodinâmica'),
('Físicos famosos');

INSERT INTO grupos_disciplinas (disciplina_id, grupo_id)
VALUES (1,1),
(1,2),
(1,3),
(1,4),
(1,5);

-- Para PW
INSERT INTO grupos (nome) 
VALUES ('Funções JS'), 
('Funções PHP'), 
('HTML'), 
('CSS');

INSERT INTO grupos_disciplinas (disciplina_id, grupo_id)
VALUES (2,6),
(2,7),
(2,8),
(2,9);

-- Para Química
INSERT INTO grupos (nome) 
VALUES ('Funções inorgânicas'), 
('Funções orgânicas'), 
('Cadeias acíclicas'), 
('Cadeias ramificadas');

INSERT INTO grupos_disciplinas (disciplina_id, grupo_id)
VALUES (3,10),
(3,11),
(3,12),
(3,13);

INSERT INTO palavras (nome) 
VALUES
-- Física --
-- Ondas --
('Luz'),('Do mar'),('De rádio'),('Som'),('Raio-x'),('Micro-ondas'),('Eletromagnéticas'),('Mecânicas'),
-- Particulas --
('Pó estelar'),('Areia'),('Dióxido de Carbono'),('Coloidais'),('Corpúsculos'),('Nitritos'),('Glúons'),
-- Mecânica Newtoniana --
('Massa'),('Atrito'),('Roldana'),('Lançamento oblíquo'),('Lançamento horizontal'),('Força'),('Energia'),
-- Termodinâmica --
('Ciclo de Carnot'),('Calor'),('Temperatura'),('Máquina Térmica'),('Geladeira'),('Trabalho'),
-- Físicos famosos --
('Newton'),('Einstein'),('Stephen Hawking'),('Planck'),('Heisenberg'),('Bohr'),('Fermi'),('Fahrenheit'),
-- PW --
-- F. JS
('strlen'),
('trim'),
('.split'),('.filter'),('.map'),('.join'),
-- F. PHP
('dd'),('rand'),('array_filter'),('count'),
-- HTML
('<div>'),('<p>'),('<span>'),('<b>'),
-- CSS
('background-color'),('color'),('width'),('height'),

-- Química --
-- Funções inorgânicas 
('Ácidos'),('Bases'),('Óxidos'),('Sais'),
-- Funções orgânicas 
('Álcool'),('Cetona'),('Eter'),('Fenol'),('Amina'),
-- Cadeias acíclicas 
('2-metil-pentano'),
('3-metil-pentano'),
('H3C–CH2–CH2–CH3'),('H3C–CH2–CH=CH–CH3'),('H2C=CH2'),('H3C–CH2–O–CH3'),
-- Cadeias ramificadas
('2-Metilbutano'),('2,2-Dimetilpropano'),('2,3-Dimetilpentano'),('3-Etil-2-metilhexano');

INSERT INTO grupos_palavras (grupo_id, palavra_id)
VALUES (1,1),(2,1),(3,1),
(1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),
(2,9),(2,10),(2,11),(2,12),
(2,13),(3,13),
(2,14),(2,15),
(3,16),(3,17),(3,18),(3,19),(3,20),(3,21),(3,22),
(4,22),(4,23),(4,24),(4,25),(4,26),(4,27),(4,28),
(5,29),(3,29),(5,30),(5,31),(5,32),(5,33),(5,34),(5,35),(5,36),
(6,37),(7,37),(6,38),(7,38),(6,39),(6,40),(6,41),(6,42),
(7,43),(7,44),(7,45),(7,46),
(8,47),(8,48),(8,49),(8,50),
(9,51),(9,52),(9,53),(9,54),
(10,55),(10,56),(10,57),(10,58),
(11,59),(11,60),(11,61),(11,62),(11,63),
(12,64),(13,64),(12,65),(13,65),(12,66),(12,67),(12,68),(12,69),
(13,70),(13,71),(13,72),(13,73);