-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jul-2022 às 06:02
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `creathus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `sinopse` text NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 0 COMMENT '0 - Normal, 1 - Destaques',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id_filme`, `titulo`, `sinopse`, `imagem`, `tipo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A Cabana', 'O filme aborda a questão recorrente da existência do mal através da história de Mackenzie Allen Phillips, um homem que vive sob o peso da experiência de ter sua filha Missy, de seis anos, raptada durante um acampamento de fim de semana. A menina nunca foi encontrada, mas sinais de que ela teria sido violentada e assassinada são achados em uma cabana perdida nas montanhas.\r\n\r\nVivendo desde então sob a \"A Grande Tristeza\", Mack, posteriormente, recebe um misterioso bilhete supostamente escrito por Deus, convidando-o para uma visita a essa mesma cabana. Ali, Mack terá um encontro inusitado com Deus, de quem tentará obter resposta para a inevitável pergunta: \"Se Deus é tão poderoso, por que não faz nada para amenizar nosso sofrimento?\".', '1.jpg', 0, '2022-07-23 15:31:15', '2022-07-25 22:46:46', '0000-00-00 00:00:00'),
(2, 'Hotel Transilvânia', 'O Hotel Transilvânia é um resort cinco estrelas que serve de refúgio para que os monstros possam descansar do árduo trabalho de perseguir e assustar os humanos. O local é comandado pelo Conde Drácula (Adam Sandler), que resolve convidar os amigos para comemorar, ao longo de um fim de semana, o 118º aniversário de sua filha Mavis (Selena Gomez). O que ele não esperava era que Jonathan (Adam Samberg), um humano sem noção, fosse aparecer no local justo quando o hotel está repleto de convidados e, ainda por cima, se apaixonasse por Mavis.', '2.jpg', 0, '2022-07-23 15:37:58', '2022-07-25 22:00:33', '0000-00-00 00:00:00'),
(3, 'Homem de Ferro', 'Tony Stark (Robert Downey Jr.) é um industrial bilionário, que também é um brilhante inventor. Ao ser sequestrado ele é obrigado por terroristas a construir uma arma devastadora mas, ao invés disto, constrói uma armadura de alta tecnologia que permite que fuja de seu cativeiro. A partir de então ele passa a usá-la para combater o crime, sob o alter-ego do Homem de Ferro.', '', 0, '2022-07-23 15:40:22', '2022-07-23 19:09:39', '2022-07-23 19:09:39'),
(4, 'Homem de Ferro', 'Tony Stark (Robert Downey Jr.) é um industrial bilionário, que também é um brilhante inventor. Ao ser sequestrado ele é obrigado por terroristas a construir uma arma devastadora mas, ao invés disto, constrói uma armadura de alta tecnologia que permite que fuja de seu cativeiro. A partir de então ele passa a usá-la para combater o crime, sob o alter-ego do Homem de Ferro.', '', 0, '2022-07-23 15:42:24', '2022-07-23 19:09:31', '2022-07-23 19:09:31'),
(5, 'Batman', 'Batman (The Batman, no original) segue o segundo ano de Bruce Wayne (Robert Pattinson) como o herói de Gotham, causando medo nos corações dos criminosos da sombria cidade. Com apenas alguns aliados de confiança - Alfred Pennyworth (Andy Serkis) e o tenente James Gordon (Jeffrey Wright) - entre a rede corrupta de funcionários e figuras importantes do distrito, o vigilante solitário se estabeleceu como a única personificação da vingança entre seus concidadãos. Durante uma de suas investigações, Bruce acaba envolvendo a si mesmo e Gordon em um jogo de gato e rato, ao investigar uma série de maquinações sádicas em uma trilha de pistas enigmáticas estabelecida pelo vilão Charada. Quando o trabalho acaba o levando a descobrir uma onda de corrupção que envolve o nome de sua família, pondo em risco a própria integridade e as memórias que tinha sobre seu pai, Thomas Wayne, as evidências começam a chegar mais perto de casa, precisando, Batman, forjar novos relacionamentos, para assim desmascarar o culpado e fazer justiça ao abuso de poder e à corrupção que há muito tempo assola Gotham City.', '5.jpg', 0, '2022-07-23 18:26:21', '2022-07-25 19:32:58', '0000-00-00 00:00:00'),
(6, 'A Cabana 5', 'teste', '', 0, '2022-07-23 19:19:01', '2022-07-23 19:31:19', '2022-07-23 19:31:19'),
(7, 'Hotel Transilvânia', 'teste', '', 0, '2022-07-23 19:20:47', '2022-07-23 20:28:51', '2022-07-23 20:28:51'),
(8, 'Jurassic World Domínio', 'Em Jurassic World Domínio, sequência direta do longa de 2018 Jurassic World: Reino Ameaçado, quatro anos após a destruição da Ilha Nublar, os dinossauros agora vivem - e caçam - ao lado de humanos em todo o mundo. Contudo, nem todos répteis consegue viver em harmonia com a espécie humana, trazendo problemas graves. Esse frágil equilíbrio remodelará o futuro e determinará, de uma vez por todas, se os seres humanos continuarão sendo os principais predadores em um planeta que agora compartilham com as criaturas mais temíveis da história em uma nova era. Os ex-funcionários do parque dos dinossauros, Claire (Bryce Dallas Howard) e Owen (Chris Pratt) se envolvem nessa problemática e buscam uma solução, contando com a ajuda dos cientistas experientes em dinossauros, que retornam dos filmes antecessores. Capítulo final da trilogia iniciada por Jurassic World - O Mundo dos Dinossauros.', '8.jpg', 0, '2022-07-23 19:25:25', '2022-07-25 19:21:30', '0000-00-00 00:00:00'),
(9, 'Lightyear', 'Uma aventura de ação de ficção científica e a história de origem definitiva de Buzz Lightyear, o herói que inspirou o brinquedo em Toy Story (1995). Lightyear segue o lendário Patrulheiro Espacial depois que em um teste de voo da nave espacial faz com que ele vá para um planeta hostil e fique abandonado a 4,2 milhões de anos-luz da Terra ao lado de seu comandante e sua tripulação. Enquanto Buzz tenta encontrar um caminho de volta para casa através do espaço e do tempo, ele descobre que já se passaram muitos anos desde seu teste de voo e que os descendentes de seus amigos, um grupo de recrutas ambiciosos, e seu charmoso gato companheiro robô, Sox. Para complicar as coisas e ameaçar a missão está a chegada de Zurg, uma presença alienígena imponente com um exército de robôs implacáveis e uma agenda misteriosa.', '9.jpg', 0, '2022-07-23 22:14:32', '2022-07-25 19:22:45', '0000-00-00 00:00:00'),
(10, 'Crimes Of The Future', 'Em um futuro próximo, os humanos terão que aprender a conviver e se adaptar ao seu ambiente sintético. Isso faz com que a espécie tenha que ir mais além do que seu estado natural e ir para metamorfose, o que causa uma mudança em seu DNA. Enquanto alguns abraçam o potencial ilimitado do trans-humanismo, outros tentam policiá-lo. De qualquer modo, a Síndrome da Evolução Acelerada está se espalhando rapidamente. Saul Tenser é um artista mundialmente amado que abraçou esse novo estado de ser, resultando em alterações no seu corpo, como novos orgãos. Junto com Caprice, Tenser transformou a remoção desses órgãos em um espetáculo para seus fiéis seguidores se maravilharem no teatro em tempo real. Com uma subcultura e uma sociedade obcecada pelo artista, Timlin, uma investigadora do National Organ Registry, rastreia cautelosamente seus movimentos, e deseja usar a notoriedade de Saul para espalhar para o mundo as consequências desse experimento.', '10.jpg', 0, '2022-07-25 08:24:01', '2022-07-25 19:24:56', '0000-00-00 00:00:00'),
(11, 'John Wick 3 - Parabellum', 'Após assassinar o chefe da máfia Santino D\'Antonio (Riccardo Scamarcio) no Hotel Continental, John Wick (Keanu Reeves) passa a ser perseguido pelos membros da Alta Cúpula sob a recompensa de U$14 milhões. Agora, ele precisa unir forças com antigos parceiros que o ajudaram no passado enquanto luta por sua sobrevivência.', '11.jpg', 0, '2022-07-25 08:28:20', '2022-07-25 19:27:52', '0000-00-00 00:00:00'),
(12, 'Malévola - Dona do Mal', 'Em Malévola - Dona do Mal, cinco anos após Aurora (Elle Fanning) despertar do sono profundo, a agora rainha dos Moors é pedida em casamento pelo príncipe Phillip (Harris Dickinson). Ela aceita o pedido e, com isso, parte rumo ao reino de Ulstead ao lado de Malévola (Angelina Jolie), no intuito de conhecer seus futuros sogros, John (Robert Lindsay) e Ingrith (Michelle Pfeiffer). O jantar entre eles deveria ser de celebração entre os reinos, mas os interesses de Ingrith vêm à tona quando é criado um atrito com Malévola e os demais seres mágicos.', '12.jpg', 0, '2022-07-25 09:28:04', '2022-07-25 19:30:56', '0000-00-00 00:00:00'),
(13, 'Os Vingadores', 'Loki (Tom Hiddleston) retorna à Terra enviado pelos chitauri, uma raça alienígena que pretende dominar os humanos. Com a promessa de que será o soberano do planeta, ele rouba o cubo cósmico dentro de instalações da S.H.I.E.L.D. e, com isso, adquire grandes poderes. Loki os usa para controlar o dr. Erik Selvig (Stellan Skarsgard) e Clint Barton/Gavião Arqueiro (Jeremy Renner), que passam a trabalhar para ele. No intuito de contê-los, Nick Fury (Samuel L. Jackson) convoca um grupo de pessoas com grandes habilidades, mas que jamais haviam trabalhado juntas: Tony Stark/Homem de Ferro (Robert Downey Jr.), Steve Rogers/Capitão América (Chris Evans), Thor (Chris Hemsworth), Bruce Banner/Hulk (Mark Ruffalo) e Natasha Romanoff/Viúva Negra (Scarlett Johansson). Só que, apesar do grande perigo que a Terra corre, não é tão simples assim conter o ego e os interesses de cada um deles para que possam agir em grupo.', '13.jpg', 0, '2022-07-25 09:38:16', '2022-07-25 19:09:47', '0000-00-00 00:00:00'),
(14, 'Homem de Ferro', 'Tony Stark (Robert Downey Jr.) é um industrial bilionário, que também é um brilhante inventor. Ao ser sequestrado ele é obrigado por terroristas a construir uma arma devastadora mas, ao invés disto, constrói uma armadura de alta tecnologia que permite que fuja de seu cativeiro. A partir de então ele passa a usá-la para combater o crime, sob o alter-ego do Homem de Ferro.', '14.jpg', 0, '2022-07-25 09:45:06', '2022-07-25 19:11:12', '0000-00-00 00:00:00'),
(15, 'Thor: Amor e Trovão', 'Thor: Amor e Trovão é quarta aventura solo de Thor (Chris Hemsworth), personagem da Marvel, sendo a sequência direta de Thor: Ragnarok e o 29º filme do Universo Cinematográfico Marvel. Após os acontecimentos de Ultimato, Thor ansiando por um propósito, retorna a Nova Asgard e sua aposentadoria é interrompida por um assassino galáctico conhecido como Gorr (Christian Bale), o Carniceiro de Deus, que busca a extinção dos deuses. Para combater a ameaça, Thor pede a ajuda da Rainha Valquíria (Tessa Thompson), Korg (Taika Waititi) e Jane Foster (Natalie Portman), sua ex-namorada, que - para surpresa de Thor - inexplicavelmente consegue empunhar seu martelo mágico, Mjolnir, o que imbuiu Jane com o poder de Thor. Juntos, eles embarcam em uma aventura cósmica para descobrir o mistério da vingança do God Butcher e detê-lo antes que seja tarde demais.', '15.jpg', 0, '2022-07-25 09:46:05', '2022-07-25 19:15:14', '0000-00-00 00:00:00'),
(16, 'Minions 2', 'Minions 2:A Origem de Gru é a continuação das aventuras dos Minions, e desta vez, eles ajudam um Gru ainda criança, descobrindo como ser vilão. Na década de 1970, Gru está crescendo no subúrbio. Fã de um grupo de supervilões conhecido como Vicious 6, Gru traça um plano para se tornar malvado o suficiente para se juntar a eles. Felizmente, ele recebe apoio de seus leais seguidores, os Minions. Juntos, eles exercem suas habilidades enquanto constroem seu primeiro covil, experimentam suas primeiras armas e realizam as primeiras missões. Quando os Vicious 6 expulsam seu líder - o lendário lutador Wild Knuckles - Gru participa de uma entrevista para se tornar seu mais novo membro. A entrevista não vai bem, e só piora depois que Gru os supera e de repente, o garoto se vê como inimigo mortal do grupo do mal. Gru se voltará para uma fonte improvável de orientação, o próprio Wild Knuckles, e descobrirá que até os supervilões precisam de uma ajudinha de seus amigos.', '16.jpg', 0, '2022-07-25 10:33:31', '2022-07-25 19:13:24', '0000-00-00 00:00:00'),
(17, 'Top Gun: Maverick', 'Na sequência de Top Gun: Ases Indomáveis, acompanhamos a história de Pete “Maverick” Mitchell (Tom Cruise), um piloto à moda antiga da Marinha que coleciona muitas condecorações, medalhas de combate e grande reconhecimento pela quantidade de aviões inimigos abatidos nos últimos 30 anos. Entretanto, nada disso foi suficiente para sua carreira decolar, visto que ele deixou de ser um capitão e tornou-se um instrutor. A explicação para esse declínio é simples: Ele continua sendo o mesmo piloto rebelde de sempre, que não hesita em romper os limites e desafiar a morte. Nesta nova aventura, Maverick precisa provar que o fator humano ainda é fundamental no mundo contemporâneo das guerras tecnológicas. Após 34 anos do clássico, acompanhem o filme do premiado produtor Jerry Bruckheimer e de Joseph Kosinski, mesmo diretor de Tron: O Legado (2010) e Oblivion (2013).', '17.jpg', 0, '2022-07-25 19:17:12', '2022-07-25 19:17:25', '0000-00-00 00:00:00'),
(18, 'teste', 'teste', '18.jpg', 0, '2022-07-25 22:20:11', '2022-07-25 22:48:57', '0000-00-00 00:00:00'),
(19, 'teste 2', 'testte', '', 0, '2022-07-25 22:21:32', '2022-07-25 22:49:12', '2022-07-25 22:49:12'),
(20, 'teste 2', 'janls', '', 0, '2022-07-25 22:32:25', '2022-07-25 22:49:42', '2022-07-25 22:49:42'),
(21, 'teste 3', 'teste', '', 0, '2022-07-25 22:35:24', '2022-07-25 22:49:47', '2022-07-25 22:49:47'),
(22, 'teste 3', 'teste', '', 0, '2022-07-25 22:35:55', '2022-07-25 22:49:59', '2022-07-25 22:49:59'),
(23, 'teste 4', 'teste', '', 0, '2022-07-25 22:37:54', '2022-07-25 22:49:03', '2022-07-25 22:49:03'),
(24, 'teste 4', 'teste', '', 0, '2022-07-25 22:39:12', '2022-07-25 22:49:17', '2022-07-25 22:49:17'),
(25, 'teste 4', 'teste', '', 0, '2022-07-25 22:41:05', '2022-07-25 22:49:32', '2022-07-25 22:49:32'),
(26, 'teste 4', 'teste', '', 0, '2022-07-25 22:41:16', '2022-07-25 22:49:27', '2022-07-25 22:49:27'),
(27, 'teste 5', 'igsigss', '', 0, '2022-07-25 22:44:21', '2022-07-25 22:49:53', '2022-07-25 22:49:53'),
(28, 'teste 5', 'igsigss', '28.jpg', 0, '2022-07-25 22:46:10', '2022-07-25 22:48:08', '0000-00-00 00:00:00'),
(29, 'teste 5', 'igsigss', '29.jpg', 0, '2022-07-25 22:46:30', '2022-07-25 22:47:59', '2022-07-25 22:47:59'),
(30, 'teste final', 'reshs', '30.jpg', 0, '2022-07-25 22:47:52', '2022-07-25 22:47:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT 0 COMMENT '0 - ADM, 1 - Comum',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `tipo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', 'admin@gmail.com', '123456', 0, NULL, '2022-07-23 21:31:13', NULL),
(2, 'Teste', 'teste@algumacoisa.com', '', 0, '2022-07-23 21:08:01', '2022-07-23 21:08:19', '2022-07-23 21:08:19'),
(3, 'Cecília Dantas Lima Lins', 'cecilia@gmail.com', '', 0, '2022-07-23 21:40:24', '2022-07-23 21:40:42', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id_filme`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
