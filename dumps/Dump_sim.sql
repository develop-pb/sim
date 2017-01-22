-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: db_sim
-- ------------------------------------------------------
-- Server version	5.6.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `flag`
--

DROP TABLE IF EXISTS `flag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flag` (
  `id_flag` varchar(45) NOT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  `texto` text,
  `som` varchar(150) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_flag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flag`
--

LOCK TABLES `flag` WRITE;
/*!40000 ALTER TABLE `flag` DISABLE KEYS */;
INSERT INTO `flag` VALUES ('B01','img/b01.png','Segundo a tradição, durante as primeiras lutas pela Independência de Portugal, D. Afonso Henriques teria usado um escudo branco com uma cruz azul, a exemplo de seu pai, o Conde D. Henrique, cujas armas eram simbolizadas pela cruz em campo de prata.','audio/b01.wav','D. Afonso Henriques'),('B02','img/b02.png','Nesta época, as armas reais eram representadas por cinco escudetes de azul em campo de prata, dispostos em cruz, os dos flancos deitados e apontados ao centro. Cada escudete era semeado com um número elevado e indeterminado de besantes de prata. Sobre a origem e simbolismo destes escudetes existem muitas teorias: as duas mais conhecidas, os escudetes aludem às cinco feridas recebidas por D. Afonso Henriques na Batalha de Ourique ou às cinco chagas de Cristo.','audio/b02.wav','D. Sancho I'),('B03','img/b03.png','Com D. Afonso III as armas do reino receberam uma bordadura de vermelho, semeada com um número indeterminado de castelos de ouro, escolhida em lembrança do avô, D. Afonso III de Castela. A tendência de fixação de números, frequente em heráldica, levou a uma estabilização do número de besantes dos escudetes em cinco, dispostos dois, um, dois.','audio/b03.wav','D. Afonso III - D. Fernando I'),('B04','img/b04.png','As armas reais, durante este período, eram de prata, com cinco escudetes de azul dispostos em cruz, os dos flancos deitados e apontados ao do centro. O semeado de besantes no escudo fixou-se definitivamente no número de cinco, dispostos em aspa. É desta época que se conhecem as primeiras referências designando os escudetes por «quinas». Tinha também uma bordadura de vermelho semeado de castelos de ouro e sobre ela as pontas da cruz verde floretada da Ordem de Avis.','audio/b04.wav','D. João I - D. Afonso V'),('B05','img/b05.png','D. João II mandou que fossem retirados das armas reais os remares de flor-de-lis e que se colocassem verticalmente as quinas laterais no escudo. A bordadura de vermelho manteve-se semeada de castelos de ouro, embora a tendência do seu número fosse de sete ou oito nas bandeiras usadas na época.','audio/b05.wav','D. João II'),('B06','img/b06.png','No reinado de D. Manuel I, as armas reais foram fixadas em fundo branco.','audio/b06.wav','D. Manuel I - D. João III'),('B07','img/b07.png','No final do reinado de D. Sebastião a coroa que figurava sobre o escudo foi substituída por uma coroa real fechada. Nas bandeiras desta época figuravam inicialmente coroas fechadas dispondo de um ou de três arcos à vista. Mais tarde passaram a ter os cinco arcos à vista, os quais se conservavam até ao fim da monarquia. O aparecimento da coroa fechada relacionava-se com o reforço de autoridade do poder real. Durante a Dinastia Filipina (que governava também a Monarquia Espanhola), o escudo português não sofreu alteração, uma vez que as armas das duas monarquias se mantiveram sempre separadas.','audio/b07.wav','D. Sebastião - D. Filipe III'),('B08','img/b08.png','Na aclamação de D. João IV, a bandeira branca com o escudo nacional, encimado pela coroa real fechada com os cinco arcos em vista, constituiu o símbolo da Restauração. Embora neste período a bandeira não tenha sofrido alterações significativas, no reinado de D. João V, o escudo foi modificado com uma fantasia ao gosto da época, terminando o bordo inferior em bico de arco contracurvado e a coroa passou a conter um barrete vermelho ou púrpura.','audio/b08.wav','D. João IV - D. Miguel I'),('B09','img/b09.png','No reinado de D. João VI foi colocada por detrás do escudo uma esfera armilar de ouro em campo azul, simbolizando o reino do Brasil, e sobre ela figurava uma coroa real fechada. Após a morte do Rei a esfera armilar foi retirada das armas, remetendo-se o símbolo real à expressão anterior, em que algumas das versões usaram um escudo elítico, com o eixo maior na vertical.','audio/b09.wav','D. João VI'),('B10','img/b10.png','O decreto da Regência em nome de D. Maria II, de 18 de outubro de 1830, determinou que a Bandeira Nacional passasse a ser bipartida verticalmente em branco e azul, ficando o azul junto da haste e as Armas Reais colocadas no centro, assentando metade sobre cada uma das cores.','audio/b10.wav','D. Maria II - D. Manuel II');
/*!40000 ALTER TABLE `flag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reis`
--

DROP TABLE IF EXISTS `reis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reis` (
  `id_rei` varchar(45) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `texto` text,
  `audio` varchar(150) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `id_flag` varchar(45) DEFAULT NULL,
  `imagem` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_rei`),
  KEY `fk_reis_1_idx` (`id_flag`),
  CONSTRAINT `fk_reis_1` FOREIGN KEY (`id_flag`) REFERENCES `flag` (`id_flag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reis`
--

LOCK TABLES `reis` WRITE;
/*!40000 ALTER TABLE `reis` DISABLE KEYS */;
INSERT INTO `reis` VALUES ('dA1','D. Afonso Henriques','\"O Conquistador\", Foi o primeiro rei de Portugal e conquistou território até Lisboa e Alentejo. Reinou entre 1143 e 1185.','audio/dA1.wav','','B01','reis/dA1.jpg'),('dA2','D. Afonso II','\"O Gordo\", Convoca as primeiras cortes portuguesas, em Coimbra (1211). Reinou entre 1211 e 1223.','audio/dA2.wav','','B02','reis/dA2.jpg'),('dA3','D. Afonso III','\"O Bolonhês\", Manda efectuar Inquirições Gerais (1258) - reduz abusos do clero e nobreza. Reinou entre 1248 e 1279.','audio/dA3.wav','','B03','reis/dA3.jpg'),('dA4','D. Afonso IV','\"O Bravo\", Tomou medidas muito polémicas e chamou toda a justiça do reino para as suas mãos. Reinou entre 1325 e 1357.','audio/dA4.wav','','B03','reis/dA4.jpg'),('dA5','D. Afonso V','\"O Africano\", Fez várias expedições em África, iniciando a exploração da Costa Ocidental Africana. Reinou entre 1438 e 1481.','audio/dA5.wav','','B04','reis/dA5.jpg'),('dA6','D. Afonso VI','\"O Vitorioso\", Travaram-se várias lutas contra Espanha para consolidar a independência portuguesa. Reinou entre 1656 e 1683.','audio/dA6.wav','','B08','reis/dA6.jpg'),('dAt','D. António I','\"O Prior do Crato\", Neto de D. Manuel.\nReinou apenas um mês em 1580. Portugal é invadido por D. Filipe II de Espanha.','audio/dAt.wav','','B07','reis/dAt.jpg'),('dC1','D. Carlos I','\"O Diplomata\", Durante o seu reinado o Partido Republicano ganha muita força.\nÉ assassinado ao mesmo tempo que o filho mais velho. Reinou entre 1889 e 1908.','audio/dC1.wav','','B10','reis/dC1.jpg'),('dd','D. Duarte I','\"O Eloquente\", Escreveu vários livros.\nIrmão do Infante D. Henrique, é consigo que se inicia o Período das Descobertas. Reinou entre 1433 e 1438.','audio/dd1.wav','','B04','reis/dd.jpg'),('dD1','D. Dinis I','\"O Lavrador\", Incentivou o comércio, a cultura, a agricultura e mandou plantar o pinhal de Leiria. Reinou entre 1279 e 1325.','audio/dD1.wav','','B03','reis/dD1.jpg'),('dF1','D. Fernando I','\"O Formoso\", Gerou conflitos com Castela que levaram à crise de 1383/1385. Reinou entre 1367 e 1383.','audio/dF1.wav','','B03','reis/dF1.jpg'),('dFl1','D. Filipe I','\"O Prudente\", Compromete-se a manter Portugal independente.\nOs territórios ultramarinos são deixados ao abandono. Reinou entre 1580 e 1598.','audio/dFl1.wav','','B07','reis/dFl1.jpg'),('dFl2','D. Filipe II','\"O Pio\", É durante o seu reinado que se estabelece o mito de que D. Sebastião voltaria um dia para reinar em Portugal. Reinou entre 1598 e 1621.','audio/dFl2.wav','','B07','reis/dFl2.jpg'),('dFl3','D. Filipe III','\"O Grande\", Toma várias medidas que causam a Restauração da Independência. Reinou entre 1621 e 1640.','audio/dFl3.wav','','B07','reis/dFl3.jpg'),('dH1','D. Henrique I','\"O Casto\", Filho de D. Manuel.\nTio-avô de D. Sebastião.\nSendo Cardeal e já muito velho, não deixou descendência. Reinou entre 1578 e 1580.','audio/dH1.wav','','B07','reis/dH1.jpg'),('dJ1','D. João I','\"O de Boa Memória\", Aos seus filhos é chamada a «Ínclita Geração» por todos serem muito cultos. Reinou entre 1385 e 1433.','audio/dJ1.wav','','B04','reis/dJ1.jpg'),('dJ2','D. João II','\"O Príncipe Perfeito\", Assina o Tratado de Tordesilhas que divide o Mundo em dois (1494).\nNão deixa descendência. Reinou entre 1481 e 1495.','audio/dJ2.wav','','B05','reis/dJ2.jpg'),('dJ3','D. João III','\"O Piedoso\", Herda do pai um imenso império espalhado pelos quatro cantos do mundo.\nTodos os seus filhos morreram. Reinou entre 1521 e 1557.','audio/dJ3.wav','','B06','reis/dJ3.jpg'),('dJ4','D. João IV','\"O Restaurador\", Trineto de D. Manuel I.\nVoltou a defender os interesses ultramarinos. Reinou entre 1640 e 1656.','audio/dJ4.wav','','B08','reis/dJ4.jpg'),('dJ5','D. João V','\"O magnânimo\", São descobertas minas de ouro e pedras preciosas no Brasil.\nManda construir o Aqueduto das Águas Livres e o Convento de Mafra. Reinou entre 1706 e 1750.','audio/dJ5.wav','','B08','reis/dJ5.jpg'),('dJ6','D. João VI','\"O Clemente\", Espanha conquista Olivença.\nTropas de Napoleão invadem Portugal, a corte foge para o Brasil e em 1825 reconhece a sua independência. Reinou entre 1816 e 1826.','audio/dJ6.wav','','B09','reis/dJ6.jpg'),('dJs1','D. José I','\"O Reformador\", Indicou como 1º Ministro o Marquês de Pombal, iniciando uma política de Absolutismo.\nÉ abolida a escravatura. Só teve filhas. Reinou entre 1750 e 1777.','audio/dJs1.wav','','B08','reis/dJs1.jpg'),('dL1','D. Luís I','\"O Popular\", Irmão de D. Pedro V.\nParticipa na delineação do Mapa Cor-de-Rosa em África.\nNascem vários partidos políticos diferentes. Reinou entre 1861 e 1889.','audio/dL1.wav','','B10','reis/dL1.jpg'),('dM1','D. Manuel I','\"O Venturoso\", Primo de D. João II.\nÉ durante o seu reinado que se atinge o auge dos Descobrimentos. Reinou entre 1495 e 1521.','audio/dM1.wav','','B06','reis/dM1.jpg'),('dM2','D. Manuel II','\"O Patriota\", Tenta manter a estabilidade com o Partido Republicano, mas não consegue.\nDá-se a Implantação da República. Reinou entre 1908 e 1910.','audio/dM2.wav','','B10','reis/dM2.jpg'),('dMg1','D. Miguel I','\"O Absoluto\", Filho de D. João VI e irmão de D. Pedro IV, consegue ser rei.\nDefende o regime absolutista. Reinou entre 1828 e 1834.','audio/dMg1.wav','','B09','reis/dMg1.jpg'),('dMr1','D. Maria I','\"A Piedosa / A Verdadeira\", 1ª rainha governante.\nDemite o Marquês de Pombal.\nEnlouquece em 1791 depois da morte do marido (D. Pedro III) e do filho mais velho. Reinou entre 1777 e 1816.','audio/dMr1.wav','','B08','reis/dMr1.jpg'),('dMr2','D. Maria II','\"A Educadora\", Teve 11 filhos.\nA instrução primária torna-se obrigatória e gratuita.\nO seu marido foi D. Fernando II. Reinou entre 1834 e 1853.','audio/dMr2.wav','','B10','reis/dMr2.jpg'),('dP1','D. Pedro I','\"O Justiceiro / O Cruel\", Vingou a morte de D. Inês de Castro.\nReinou entre 1357 e 1367 com uma enorme prosperidade económica.','audio/dP1.wav','','B03','reis/dP1.jpg'),('dP2','D. Pedro II','\"O Pacífico\", Assina um tratado de paz com Espanha pondo fim à Guerra da Restauração.\nAssina o Tratado de Methwen com Inglaterra. Reinou entre 1683 e 1706.','audio/dP2.wav','','B08','reis/dP2.jpg'),('dP4','D. Pedro IV','\"O Rei Soldado\", Proclama a Independência do Brasil (1822), tornando-se seu Imperador.\nNomeia o irmão D. Miguel como regente. Reinou entre 1826 e 1828.','audio/dP4.wav','','B09','reis/dP4.jpg'),('dP5','D. Pedro V','\"O Esperançoso\", Inaugurou o 1º caminho-de-ferro, entre Lisboa e o Carregado.\nIntroduziu o sistema métrico em Portugal.\nNão deixa descendência. Reinou entre 1853 e 1861.','audio/dP5.wav','','B10','reis/dP5.jpg'),('dS1','D. Sancho I','\"O Povoador\", Conquistou Silves e passou a chamar-se «Rei de Portugal e dos Algarves». Reinou entre 1185 e 1211.','audio/dS1.wav','','B02','reis/dS1.jpg'),('dS2','D. Sancho II','\"O Capelo\", Não teve descendência, pelo que o reino passou para o irmão. Reinou entre 1223 e 1248.','audio/dS2.wav','','B02','reis/dS2.jpg'),('dSb','D. Sebastião I','\"O Desejado\", Neto de D. João III (desejava-se o seu nascimento).\nDesapareceu na Batalha de Alcácer-Quibir. Reinou entre 1557 e 1578.','audio/dSb.wav','','B07','reis/dSb.jpg');
/*!40000 ALTER TABLE `reis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-15 18:24:51
