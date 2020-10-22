create database FullStackEletro

use FullStackEletro

create table if not exists produto(
	idproduto INTEGER PRIMARY KEY AUTO_INCREMENT,
    categoria varchar(45) NOT NULL,
    descricao VARCHAR(150) NOT NULL,
    imagem VARCHAR(200) UNIQUE,
    precoantigo DECIMAL(8,2),
    precofinal DECIMAL(8,2)
);

insert INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('geladeira', 'Geladeira Fost Free Electrolux 540 litros', 'imagens/geladeira.electrolux.jpg', '3999.00', '2019.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('geladeira', 'Geladeira Brastemp Frost Free Evox - Inverse 540,6L Ative!', 'imagens/geladeira.brastemp.jpg', '5999.00', '4999.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('geladeira', 'Geladeira Fost Free Consul 400 litros', 'imagens/geladeira.consul.jpg', '899.00', '799.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('fogao', 'Fogão de Piso Electrolux 4 Bocas com Mesa de Vidro Temperado- BIVOLT ', 'imagens/fogão.eletrolux.jpg', '1200.00', '999.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('fogao', 'Fogão Consul 4 Bocas com Acendimento Automático - Branco', 'imagens/fogão.consul.jpg', '999.00', '899.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('microondas', 'Micro-ondas Consul Espelhado - 20L', 'imagens/microondas.consul.jpg', '499.00', '399.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('microondas', 'Microondas Electrolux 20 litros', 'imagens/microondas.electrolux.jpg', '549.00', '399.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('microondas', 'Microondas Philco Espelhado', 'imagens/microondas.philco.jpg', '614.00', '482.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('Lavadora de Roupas', 'Lavadora de Roupas Electrolux 11Kg LES11 Essencial Care – Branca', 'imagens/maquinaroupa.electrolux.jpg', '1500.00', '1399.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('Lavadora de Roupas', 'Lava e Seca Samsung WD4000 com Ecobubble™ e Lavagem a Seco', 'imagens/lavadorasamsung.jpg', '4899.00', '3833.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('Lavadora de Louças', 'Lavadora de louças Brastemp Compacta', 'imagens/maquinalouça.brastemp.jpg', '3100.00', '2000.00');
INSERT INTO fullstackeletro.produto (categoria, descricao, imagem, precoantigo, precofinal) VALUES ('Lavadoura de Louças', 'Lava-Louças Electrolux 8 Serviços Cinza', 'imagens/maquinalouça.electrolux.jpg', '5399.00', '4020.00')

create table if not exists pedidos(
	idpedidos INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome_cliente varchar(90) NOT NULL,
    endereço VARCHAR(200) NOT NULL,
	telefone VARCHAR(20) NOT NULL UNIQUE,
	nome_do_produto VARCHAR(200),
    valor_unitario DECIMAL(8,2),
    quantidade DECIMAL(30) NOT NULL,
    valortotal DECIMAL(8,2)
);