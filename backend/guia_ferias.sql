CREATE DATABASE guia_ferias
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
USE guia_ferias;
CREATE TABLE destinos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
tipo VARCHAR(50) NOT NULL,
descricao VARCHAR(255) NOT NULL
);
-- Dados utilizados pela atividade
INSERT INTO destinos (nome, tipo, descricao) VALUES
('Praia', 'Lazer',
'Passar alguns dias na praia com amigos ou família.'),
('Parque aquático', 'Diversão',
'Aproveitar piscinas, toboáguas e outras atrações aquáticas.'),
('Acampamento', 'Aventura',
'Passar alguns dias em contato com a natureza.'),
('Viagem para outra cidade', 'Turismo',
'Conhecer pontos turísticos, restaurantes e lugares diferentes.'),
('Parque temático', 'Diversão',
'Passar o dia em atrações, brinquedos e atividades temáticas.');