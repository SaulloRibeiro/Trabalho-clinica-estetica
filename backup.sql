-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: s_estetics
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `agendadisponibilidades`
--

DROP TABLE IF EXISTS `agendadisponibilidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendadisponibilidades` (
  `id_agendaDisponibilidade` int(11) NOT NULL AUTO_INCREMENT,
  `data_disponivel` date NOT NULL,
  `horario_disponivel` time NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  PRIMARY KEY (`id_agendaDisponibilidade`),
  KEY `add_procedimento_tabela_procedimento` (`procedimento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendadisponibilidades`
--

LOCK TABLES `agendadisponibilidades` WRITE;
/*!40000 ALTER TABLE `agendadisponibilidades` DISABLE KEYS */;
INSERT INTO `agendadisponibilidades` VALUES (8,'2025-06-17','08:00:00',1),(9,'2025-06-17','08:00:00',2),(10,'2025-06-17','09:00:00',3),(11,'2025-06-17','09:00:00',4),(12,'2025-06-17','15:00:00',4),(13,'2025-06-17','10:00:00',5),(14,'2025-06-17','11:00:00',6),(16,'2025-06-17','14:30:00',8),(17,'2025-06-17','16:30:00',8),(18,'2025-06-17','17:30:00',8),(19,'2025-06-17','10:30:00',9);
/*!40000 ALTER TABLE `agendadisponibilidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `agendadisponibilidades_view`
--

DROP TABLE IF EXISTS `agendadisponibilidades_view`;
/*!50001 DROP VIEW IF EXISTS `agendadisponibilidades_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `agendadisponibilidades_view` AS SELECT 
 1 AS `id_agendaDisponibilidade`,
 1 AS `data_disponivel`,
 1 AS `horario_disponivel`,
 1 AS `nome_procedimento`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `agendamentos` (
  `id_agendamento` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) NOT NULL,
  `procedimento_id` int(11) NOT NULL,
  `data_agendamento` date NOT NULL,
  `horario_agendado` time NOT NULL,
  PRIMARY KEY (`id_agendamento`),
  KEY `fk_agendamento_cliente1` (`cliente_id`),
  KEY `fk_agendamento_procedimento1` (`procedimento_id`),
  CONSTRAINT `fk_agendamento_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `fk_agendamento_procedimento1` FOREIGN KEY (`procedimento_id`) REFERENCES `procedimentos` (`id_procedimento`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agendamentos`
--

LOCK TABLES `agendamentos` WRITE;
/*!40000 ALTER TABLE `agendamentos` DISABLE KEYS */;
INSERT INTO `agendamentos` VALUES (53,27,2,'2025-06-13','08:00:00'),(54,28,1,'2025-06-13','08:00:00'),(55,29,3,'2025-06-13','08:20:00'),(56,30,4,'2025-06-13','08:40:00'),(57,31,5,'2025-06-13','09:00:00'),(58,32,5,'2025-06-13','09:30:00'),(59,33,6,'2025-06-13','09:45:00'),(60,34,1,'2025-06-13','10:00:00'),(61,35,8,'2025-06-13','11:00:00'),(62,36,8,'2025-06-13','11:30:00'),(63,37,9,'2025-06-13','12:30:00'),(64,38,1,'2025-06-13','15:00:00'),(65,39,2,'2025-06-13','16:30:00'),(66,40,2,'2025-06-14','08:00:00'),(67,41,1,'2025-06-14','08:00:00'),(68,42,3,'2025-06-14','08:20:00'),(69,43,4,'2025-06-14','08:40:00'),(70,44,5,'2025-06-14','09:00:00'),(71,45,5,'2025-06-14','09:30:00'),(72,46,6,'2025-06-14','09:45:00'),(73,47,1,'2025-06-14','10:00:00'),(74,48,8,'2025-06-14','11:00:00'),(75,49,8,'2025-06-14','11:30:00'),(76,50,9,'2025-06-14','12:30:00'),(77,51,1,'2025-06-14','15:00:00'),(92,53,2,'2025-06-15','08:00:00'),(93,54,1,'2025-06-15','08:00:00'),(94,55,3,'2025-06-15','08:20:00'),(95,56,4,'2025-06-15','08:40:00'),(96,57,5,'2025-06-15','09:00:00'),(97,58,5,'2025-06-15','09:30:00'),(98,59,7,'2025-06-15','09:45:00'),(99,60,1,'2025-06-15','10:00:00'),(100,61,8,'2025-06-15','11:00:00'),(101,62,8,'2025-06-15','11:30:00'),(102,63,9,'2025-06-15','12:30:00'),(103,64,7,'2025-06-15','15:00:00'),(104,65,2,'2025-06-15','16:30:00'),(127,30,3,'2025-06-20','14:30:00'),(128,77,8,'2025-06-17','13:30:00');
/*!40000 ALTER TABLE `agendamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `agendamentos_view`
--

DROP TABLE IF EXISTS `agendamentos_view`;
/*!50001 DROP VIEW IF EXISTS `agendamentos_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `agendamentos_view` AS SELECT 
 1 AS `id_agendamento`,
 1 AS `nome_cliente`,
 1 AS `telefone_cliente`,
 1 AS `email_cliente`,
 1 AS `nome_procedimento`,
 1 AS `horario_agendado`,
 1 AS `data_agendamento`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'procedimento capilar'),(2,'tratamento corporal'),(3,'tratamento facial');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `telefone_cliente` varchar(15) DEFAULT NULL,
  `email_cliente` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (27,'Maria Rodrigues Silva','(11)97777-7777','mariarodrigues@gmail.com'),(28,'Maria Pereira Pinote','(11)98888-8888','mariapinote@gmail.com'),(29,'Paola Ribeiro Santos','(12)99999-9999','paolaribeiro@gmail.com'),(30,'Pricilla Menezes Rodrigues','(11)95555-5555','pricillamenezesrodrigues@gmail.com'),(31,'Debora De Oliveira','(11)98797-8797','deboraoliveira@gmail.com'),(32,'Vitoria Cerejo Castellhanos','(11)92222-2222','vitoriacastellhanos@gmail.com'),(33,'Teresa Das Dores Barbosa Santos','(11)98877-9988','teresa1973@gmail.com'),(34,'Ana Karolina','(11)96666-4444','anakarolina@gmial.com'),(35,'Waleria Maça Diognese','(11)93333-3333','waleriamaca@gmail.com'),(36,'Fabiola Cerejo','(11)91111-2222','fabiolacerejo@gmail.com'),(37,'Elen Ramos de Oliveira','(13)90000-3333','elenramosoliveria@gmail.com'),(38,'Tifanny Marcrai hwamm','(11)97700-3321','hwammmarcrai@gmail.com'),(39,'Veronica Menezes Bitollar','(11)90921-6543','veronicamenezesbittolar@gmail.com'),(40,'Pollyana de Cassia','(21)00000-4444','pollyana@gmail.com'),(41,'Sophia Timoteo Silva','(11)98235-0011','sophiatimoteo@gmail.com'),(42,'Ana Paula','(11)98765-4321','ana.paula@email.com'),(43,'Juliana Souza','(21)99123-4567','juliana.souza@email.com'),(44,'Camila Rocha','(31)99988-7766','camila.rocha@email.com'),(45,'Fernanda Lima','(41)98877-6655','fernanda.lima@email.com'),(46,'Mariana Alves','(51)97766-5544','mariana.alves@email.com'),(47,'Beatriz Costa','(11)2364-9874','beatriz.costa@email.com'),(48,'Larissa Martins','(21)3471-2453','larissa.martins@email.com'),(49,'Patrícia Gomes','(31)4582-6731','patricia.gomes@email.com'),(50,'Renata Dias','(41)5693-1245','renata.dias@email.com'),(51,'Tatiane Barros','(51)2784-3628','tatiane.barros@email.com'),(52,'Gabriela Ferreira','(61)3895-4791','gabriela.ferreira@email.com'),(53,'Natália Ramos','(71)4962-1873','natalia.ramos@email.com'),(54,'Aline Pereira','(81)1853-9642','aline.pereira@email.com'),(55,'Jéssica Andrade','(91)7941-2754','jessica.andrade@email.com'),(56,'Carla Souza','(85)6538-4932','carla.souza@email.com'),(57,'Isabela Monteiro','(62)9154-3762','isabela.monteiro@email.com'),(58,'Rafaela Mendes','(27)3824-5193','rafaela.mendes@email.com'),(59,'Priscila Duarte','(13)5198-6241','priscila.duarte@email.com'),(60,'Vanessa Rocha','(47)7319-8524','vanessa.rocha@email.com'),(61,'Letícia Pires','(35)2486-1935','leticia.pires@email.com'),(62,'Amanda Teixeira','(44)1862-9375','amanda.teixeira@email.com'),(63,'Bianca Oliveira','(53)4921-7456','bianca.oliveira@email.com'),(64,'Débora Silva','(12)6743-5831','debora.silva@email.com'),(65,'Elaine Lima','(67)3459-7681','elaine.lima@email.com'),(66,'Fátima Campos','(82)8956-4317','fatima.campos@email.com'),(67,'Helena Nogueira','(24)5893-2167','helena.nogueira@email.com'),(68,'Ingrid Reis','(84)9831-7946','ingrid.reis@email.com'),(69,'Joana Cardoso','(95)6148-3259','joana.cardoso@email.com'),(70,'Karen Tavares','(98)4162-5839','karen.tavares@email.com'),(71,'Lívia Batista','(83)7289-1462','livia.batista@email.com'),(72,'Michele Ribeiro','(73)1573-9842','michele.ribeiro@email.com'),(73,'Nicole Santana','(79)3184-2753','nicole.santana@email.com'),(74,'Paula Figueiredo','(34)2941-8316','paula.figueiredo@email.com'),(75,'Sabrina Neves','(96)6417-3582','sabrina.neves@email.com'),(76,'Talita Borges','(92)8573-4126','talita.borges@email.com'),(77,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(78,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(79,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(80,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(81,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(82,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(83,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(84,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(85,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com'),(86,'Maria Rita Cassia','(11) 97700-0129','mr@gmail.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimentos`
--

DROP TABLE IF EXISTS `procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedimentos` (
  `id_procedimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_procedimento` varchar(100) NOT NULL,
  `preco_procedimento` double(5,2) NOT NULL,
  `descricao` text NOT NULL,
  `nome_img_correspondente` varchar(100) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_procedimento`),
  KEY `fk_categoria` (`categoria_id`),
  CONSTRAINT `fk_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimentos`
--

LOCK TABLES `procedimentos` WRITE;
/*!40000 ALTER TABLE `procedimentos` DISABLE KEYS */;
INSERT INTO `procedimentos` VALUES (1,'Hidratacao capilar',120.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','hidratacao-capilar.jpg',1),(2,'Corte de cabelo',30.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','mulher-cortando-cabelo.jpg',1),(3,'Pintura do cabelo',75.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','mulher-pintando-cabelo.jpg',1),(4,'Radiofrequencia',100.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','radiofrequencia.jpg',2),(5,'Depilacao',200.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','depilacao.jpg',2),(6,'Drenagem linfatica',250.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','dreanagem_linfatica.jpg',2),(7,'Botox',130.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','botox.jpg',3),(8,'Limpeza pele',100.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','limpeza-pele.jpg',3),(9,'Nutricao facial',80.00,' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ipsum maiores repellendus temporibus, tempore magnam a commodi qui officiis deserunt omnis ipsa. Eaque quam, id cum voluptatibus ipsa hic quasi. Et nesciunt perspiciatis magnam! Corrupti, quas atque fugiat impedit fugit animi labore ab, reiciendis pariatur numquam sit repellat est accusantium aliquid inventore earum eaque, doloremque ipsum consectetur soluta. Cum, optio!','nutricao-facial-tratamento.jpg',3);
/*!40000 ALTER TABLE `procedimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `procedimentos_view`
--

DROP TABLE IF EXISTS `procedimentos_view`;
/*!50001 DROP VIEW IF EXISTS `procedimentos_view`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `procedimentos_view` AS SELECT 
 1 AS `id_procedimento`,
 1 AS `nome_procedimento`,
 1 AS `preco_procedimento`,
 1 AS `descricao`,
 1 AS `nome_img_correspondente`,
 1 AS `descricao_categoria`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `senha` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'saulloribeiro@gmail.com','$2y$10$HWycOLcJ/fnb8GAwsT8dLeYZ1MGzvFHkaQT60KGWSJbrHiDbai9jS');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `agendadisponibilidades_view`
--

/*!50001 DROP VIEW IF EXISTS `agendadisponibilidades_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `agendadisponibilidades_view` AS select `ad`.`id_agendaDisponibilidade` AS `id_agendaDisponibilidade`,`ad`.`data_disponivel` AS `data_disponivel`,`ad`.`horario_disponivel` AS `horario_disponivel`,`p`.`nome_procedimento` AS `nome_procedimento` from (`agendadisponibilidades` `ad` join `procedimentos` `p` on(`ad`.`procedimento_id` = `p`.`id_procedimento`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `agendamentos_view`
--

/*!50001 DROP VIEW IF EXISTS `agendamentos_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `agendamentos_view` AS select `ag`.`id_agendamento` AS `id_agendamento`,`c`.`nome_cliente` AS `nome_cliente`,`c`.`telefone_cliente` AS `telefone_cliente`,`c`.`email_cliente` AS `email_cliente`,`p`.`nome_procedimento` AS `nome_procedimento`,`ag`.`horario_agendado` AS `horario_agendado`,`ag`.`data_agendamento` AS `data_agendamento` from ((`agendamentos` `ag` join `clientes` `c` on(`ag`.`cliente_id` = `c`.`id_cliente`)) join `procedimentos` `p` on(`ag`.`procedimento_id` = `p`.`id_procedimento`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `procedimentos_view`
--

/*!50001 DROP VIEW IF EXISTS `procedimentos_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `procedimentos_view` AS select `p`.`id_procedimento` AS `id_procedimento`,`p`.`nome_procedimento` AS `nome_procedimento`,`p`.`preco_procedimento` AS `preco_procedimento`,`p`.`descricao` AS `descricao`,`p`.`nome_img_correspondente` AS `nome_img_correspondente`,`c`.`descricao_categoria` AS `descricao_categoria` from (`procedimentos` `p` join `categorias` `c` on(`p`.`categoria_id` = `c`.`id_categoria`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-16 12:40:04
