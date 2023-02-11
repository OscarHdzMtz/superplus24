-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: bdsuperplus24
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

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
-- Table structure for table `Instalacions`
--

DROP TABLE IF EXISTS `Instalacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Instalacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Instalacions`
--

LOCK TABLES `Instalacions` WRITE;
/*!40000 ALTER TABLE `Instalacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `Instalacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cardservicios`
--

DROP TABLE IF EXISTS `cardservicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cardservicios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imghover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `orden` int DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cardservicios`
--

LOCK TABLES `cardservicios` WRITE;
/*!40000 ALTER TABLE `cardservicios` DISABLE KEYS */;
INSERT INTO `cardservicios` VALUES (1,3,'RECARGAS',NULL,'recargas.png','recargas2.png',1,NULL,NULL,NULL,'2022-07-05 19:54:47','2022-07-05 19:54:47'),(2,3,'SERVICIOS',NULL,'servicios.png','servicios2.png',1,NULL,NULL,NULL,'2022-07-05 19:55:17','2022-07-05 19:55:17'),(3,3,'PINES',NULL,'pines.png','pines2.png',1,NULL,NULL,NULL,'2022-07-05 19:55:49','2022-07-05 19:55:49'),(4,3,'RETIRO DE EFECTIVO',NULL,'retiro de efectivo.png','retiro de efectivo2.png',1,NULL,NULL,NULL,'2022-07-05 19:56:25','2022-07-05 19:56:25');
/*!40000 ALTER TABLE `cardservicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'ABARROTES','abarrotes',NULL,'2022-07-05 18:38:46','2022-07-05 18:38:46'),(2,'BEBIDAS','bebidas','Jugos, refrescos, bebidas alcohólicas, energizantes','2022-07-09 10:53:29','2022-07-09 10:54:18'),(3,'BOTANA','botana',NULL,'2022-07-09 10:54:35','2022-07-09 10:54:35'),(4,'CONGELADOS','congelados',NULL,'2022-07-09 10:54:51','2022-07-09 10:54:51'),(5,'LACTEOS','lacteos',NULL,'2022-07-09 10:55:04','2022-07-09 10:55:04'),(6,'PANADERÍA','panaderia',NULL,'2022-07-09 10:55:16','2022-07-09 10:55:16'),(7,'SNACK','snack',NULL,'2022-07-09 10:55:36','2022-07-09 10:55:36'),(8,'VINOS Y LICORES','vinos-y-licores',NULL,'2022-07-09 10:56:40','2022-07-09 10:56:40'),(9,'FARMACIA','farmacia',NULL,'2022-07-09 11:45:27','2022-07-09 11:45:27'),(10,'HIGIENE','higiene',NULL,'2022-07-09 11:46:03','2022-07-09 11:46:03'),(11,'LIMPIEZA','limpieza',NULL,'2022-07-09 11:46:23','2022-07-09 11:46:23'),(12,'OTROS','otros',NULL,'2022-07-09 11:47:35','2022-07-09 11:47:35'),(13,'DULCES','dulces',NULL,'2022-07-09 11:47:53','2022-07-09 11:47:53'),(14,'MASCOTAS','mascotas',NULL,'2022-07-09 11:48:31','2022-07-09 11:48:31'),(15,'RECARGAS','recargas',NULL,'2022-07-09 11:49:00','2022-07-09 11:49:00'),(16,'COMBO','combo','PRODUCTOS DIFERENTES DE LA MISMA CATEGORÍA QUE SON PROMOCIÓN','2022-07-09 12:08:02','2022-07-09 12:08:02'),(17,'CERVEZA','cerveza',NULL,'2022-07-09 13:53:49','2022-07-09 13:53:49'),(18,'CARNES FRIAS','carnes-frias','JAMON, SALCHICHA, QUESILLO, QUESO AMARILLO','2022-12-29 12:11:58','2022-12-29 12:11:58'),(19,'DESECHABLES','desechables','PLATOS, VASOS, SERVILLETAS, CUCHARAS, TENEDORES','2022-12-29 12:12:37','2022-12-29 12:12:37'),(20,'BEBES','bebes','PAÑALES, GERBER,','2022-12-29 12:13:00','2022-12-29 12:13:00');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cupones`
--

DROP TABLE IF EXISTS `cupones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cupones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imghover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `deldia` tinyint(1) DEFAULT NULL,
  `categoria_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cupones_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `cupones_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cupones`
--

LOCK TABLES `cupones` WRITE;
/*!40000 ALTER TABLE `cupones` DISABLE KEYS */;
/*!40000 ALTER TABLE `cupones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleosettings`
--

DROP TABLE IF EXISTS `empleosettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleosettings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imghover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleosettings`
--

LOCK TABLES `empleosettings` WRITE;
/*!40000 ALTER TABLE `empleosettings` DISABLE KEYS */;
INSERT INTO `empleosettings` VALUES (1,1,'banner','<p>null</p>','0',NULL,'<p>null</p>','bolsa-de-trabajo.jpg','null',NULL,1,NULL,'2022-07-06 13:26:25','2022-07-06 13:26:40'),(2,8,'imagentexto','<p>null</p>','0',NULL,'<h1><small><big><strong>VEN Y FORMA&nbsp;PARTE DE UNA DE LAS EMPRESAS COMERCIALES MAS IMPORTANTES Y EN EXPANSION DE LA REGION MIXTECA.</strong></big></small></h1>','avatar.png','null',NULL,2,NULL,'2022-07-06 13:27:40','2022-07-07 17:18:25'),(3,1,'contadores','<p>Con presencia en la Mixteca con m&aacute;s de:</p>','40',NULL,'<p>Tiendas distrbuidas en la regi&oacute;n</p>',NULL,'fas fa-store',NULL,1,NULL,'2022-07-09 13:42:31','2022-07-09 14:54:00'),(4,1,'contadores','<p>Contando con un equipo de m&aacute;s de:</p>','150',NULL,'<p>Colaboradores</p>',NULL,'fas fa-users',NULL,2,NULL,'2022-07-09 13:44:53','2022-07-09 13:55:31'),(5,1,'contadores','<p>Presente en el mercado con m&aacute;s de:</p>','12',NULL,'<p>A&ntilde;os de experiencia</p>',NULL,'fas fa-medal',NULL,3,NULL,'2022-07-09 13:45:20','2022-07-09 14:53:40');
/*!40000 ALTER TABLE `empleosettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facturacion_pages`
--

DROP TABLE IF EXISTS `facturacion_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facturacion_pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgBanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imghover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facturacion_pages`
--

LOCK TABLES `facturacion_pages` WRITE;
/*!40000 ALTER TABLE `facturacion_pages` DISABLE KEYS */;
INSERT INTO `facturacion_pages` VALUES (1,1,'banner',NULL,NULL,NULL,NULL,'banner 4 portada facturacion .png',NULL,NULL,NULL,1,NULL,'2022-09-06 13:51:15','2022-09-07 16:33:52'),(2,1,'boton','Click para facturar',NULL,'http://picaroscomer.dyndns.org/WebflecHJ/facturacion_01.aspx',NULL,NULL,NULL,NULL,NULL,2,NULL,'2022-09-06 13:51:57','2022-09-06 13:51:57'),(3,1,'titulo','Instrucciones para facturación electrónica',NULL,NULL,NULL,NULL,NULL,NULL,NULL,3,NULL,'2022-09-06 13:52:14','2022-09-06 13:52:14'),(4,1,'subtitulo',NULL,NULL,'<p><big><strong>Una vez dentro de la p&aacute;gina, nos posicionamos en la pesta&ntilde;a Facturar Tiquet, rellenando los datos de la siguiente manera</strong></big></p>',NULL,NULL,NULL,NULL,NULL,4,NULL,'2022-09-06 13:52:31','2022-09-06 13:52:50'),(5,1,'textoImagen',NULL,NULL,NULL,'<ol>\r\n	<li><big>Ingrese el&nbsp;<strong>RFC</strong>&nbsp;de su empresa.</big></li>\r\n	<li><big>Introduzca la serie de su tiquet.</big></li>\r\n	<li><big>Ingrese el No. De su tiquet (Sin comas)</big></li>\r\n	<li><big>Ingrese el No. De&nbsp;<strong>TR#&nbsp;</strong>de su tiquet.</big></li>\r\n</ol>\r\n\r\n<p><big>Y procedemos a darle clic en continuar</big></p>','fact1.PNG',NULL,NULL,NULL,5,NULL,'2022-09-06 13:54:16','2022-09-06 13:54:16'),(6,1,'subtitulo',NULL,NULL,'<p><big><strong>Posteriormente nos redireccionar&aacute;&nbsp;a un&nbsp;apartado donde&nbsp;se rellenan los datos respectivos para su factura.</strong></big></p>',NULL,NULL,NULL,NULL,NULL,6,NULL,'2022-09-06 13:54:43','2022-09-07 16:56:34'),(7,1,'textoImagen',NULL,NULL,NULL,'<ol>\r\n	<li><big>Verifique que el&nbsp;<strong>RFC</strong>&nbsp;corresponde al de su empresa.</big></li>\r\n	<li><big>Ingrese el nombre de su&nbsp;<strong>Raz&oacute;n social sin su r&eacute;gimen capital</strong></big></li>\r\n	<li><big>Ingrese los datos de su direcci&oacute;n de acuerdo a su&nbsp;<strong>Constancia de situaci&oacute;n fiscal</strong></big></li>\r\n	<li><big>Ingrese la direcci&oacute;n&nbsp;del&nbsp;<strong>CORREO ELECTR&Oacute;NICO&nbsp;</strong>al cual se enviar&aacute; su factura en Formato&nbsp;<strong>PDF y XML</strong>.</big></li>\r\n	<li><big>Este campo se habilitar&aacute;&nbsp;<strong>si su m&eacute;todo de pago es con tarjeta</strong>&nbsp;y deber&aacute; ingresar los&nbsp;<strong>&uacute;ltimos 4 d&iacute;gitos</strong>&nbsp;de la tarjeta con la que realiz&oacute; su pago.</big></li>\r\n	<li><big><strong>Seleccione</strong>&nbsp;<strong>el</strong>&nbsp;<strong>R&eacute;gimen Fiscal</strong>&nbsp;seg&uacute;n su Constancia de Situaci&oacute;n Fiscal.</big></li>\r\n	<li><big>Seleccione el&nbsp;<strong>Uso que se le dara al&nbsp;CFDI.</strong></big></li>\r\n	<li><big>Antes de hacer clic en&nbsp;<strong>Facturar&nbsp;</strong>se le recomienda&nbsp;<strong>VERIFICAR SUS DATOS.</strong></big></li>\r\n</ol>','fact.PNG',NULL,NULL,NULL,7,NULL,'2022-09-06 13:55:13','2022-09-07 16:56:57'),(8,1,'boton','Click para Facturar',NULL,'http://picaroscomer.dyndns.org/WebflecHJ/facturacion_01.aspx',NULL,NULL,NULL,NULL,NULL,8,NULL,'2022-09-06 13:55:41','2022-09-06 13:55:41'),(9,1,'subtitulo',NULL,NULL,'<p><big><strong>Si presenta alg&uacute;n detalle durante el proceso, con gusto le atenderemos al tel&eacute;fono 953 530 00 87</strong></big></p>',NULL,NULL,NULL,NULL,NULL,20,NULL,'2022-09-06 13:56:09','2022-12-29 16:37:00'),(10,1,'titulo','Consultar factura',NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,NULL,'2022-09-07 14:35:17','2022-09-07 14:35:17'),(13,1,'subtitulo',NULL,NULL,'<p><big><strong>Puede&nbsp;consultar y descargar una copia de su factura en formato PDF y XML seleccionando&nbsp;una de estas dos opciones.</strong></big></p>',NULL,NULL,NULL,NULL,NULL,11,NULL,'2022-09-07 16:11:52','2022-09-07 16:11:52'),(14,1,'textoImagen',NULL,NULL,NULL,'<p><big><strong>Opcion 1 (Por tiquet de compra):&nbsp;</strong></big></p>\r\n\r\n<ul>\r\n	<li><big>Ingrese la serie&nbsp;de su tiquet.</big></li>\r\n	<li><big>Ingrese el No. De su tiquet (Sin comas).</big></li>\r\n	<li><big>Ingrese el No. De <strong>TR# </strong>de su tiquet.&nbsp;</big></li>\r\n</ul>\r\n\r\n<p><big><strong>Opcion 2 (Por factura emitida):</strong></big></p>\r\n\r\n<ul>\r\n	<li><big>Ingrese su&nbsp;RFC.</big></li>\r\n	<li><big>Ingrese su numero de factura.</big></li>\r\n</ul>\r\n\r\n<p><big>Y procedemos a darle clic en continuar.</big></p>','image.png',NULL,NULL,NULL,12,NULL,'2022-09-07 16:12:18','2022-09-07 16:57:51'),(15,1,'subtitulo',NULL,NULL,'<p><big><strong>Posteriormente nos aparece la pantalla donde podra descargar manualmente su PDF,&nbsp;XML o ambos segun se requiera.</strong></big></p>',NULL,NULL,NULL,NULL,NULL,13,NULL,'2022-09-07 16:12:33','2022-09-07 16:39:45'),(16,1,'textoImagen',NULL,NULL,NULL,'<ol>\r\n	<li><big>Mostrar&aacute; su factura en formato PDF.</big></li>\r\n	<li><big>Mostrar&aacute; su factura en formato&nbsp;</big><big>XML.</big></li>\r\n	<li><big>Aqui podr&aacute;&nbsp;colocar una direcci&oacute;n de correo electr&oacute;nico para el reenvio de la factura en formato&nbsp;PDF y XML.</big></li>\r\n</ol>','image (1).png',NULL,NULL,NULL,14,NULL,'2022-09-07 16:12:51','2022-09-07 16:12:51'),(17,1,'boton','Consultar factura',NULL,'http://picaroscomer.dyndns.org/WebflecHJ/cfdCons.aspx',NULL,NULL,NULL,NULL,NULL,14,NULL,'2022-09-07 16:13:50','2022-09-07 16:18:23');
/*!40000 ALTER TABLE `facturacion_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `indexsettings`
--

DROP TABLE IF EXISTS `indexsettings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `indexsettings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `redireccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulobtn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `modal` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indexsettings`
--

LOCK TABLES `indexsettings` WRITE;
/*!40000 ALTER TABLE `indexsettings` DISABLE KEYS */;
INSERT INTO `indexsettings` VALUES (2,1,'imagenfooter','Quienes somos',NULL,'Somos tiendas de conveniencia cuya finalidad es satisfacer las necesidades de nuestros clientes, con una amplia oferta de productos y servicios  de calidad, en espacios limpios y seguros,  para poder ofrecer al consumidor experiencias de compras  que sean útiles y prácticas para su vida diaria.','null','null','null',NULL,6,0,NULL,'fachada_footer.png','2022-07-05 18:13:38','2022-07-05 18:21:10'),(3,1,'tituloservicios','CONOCE',NULL,'NUESTROS SERVICIOS','null','null','null','estiloamarillo',NULL,0,NULL,NULL,'2022-07-05 18:15:11','2022-07-09 15:46:30'),(4,1,'tituloproductos','CADA DIA AGREGANDO',NULL,'NUEVOS PRODUCTOS','null','null','null','estiloamarillo',NULL,0,NULL,NULL,'2022-07-05 18:16:22','2022-07-05 18:47:26'),(5,1,'titulomarcas','TRABAJANDO',NULL,'CON LAS MEJORES MARCAS','null','null','null','estiloamarillo',NULL,0,NULL,NULL,'2022-07-05 18:18:12','2022-07-09 15:46:38'),(6,1,'tituloredes','SIGUENOS EN',NULL,'REDES SOCIALES','null','null','null','estiloamarillo',NULL,0,NULL,NULL,'2022-07-05 18:19:30','2022-07-09 15:46:46'),(7,1,'titulofooter','¿Quiénes somos?',NULL,'Somos tiendas de conveniencia cuya finalidad es satisfacer las necesidades de nuestros clientes, con una amplia oferta de productos y servicios  de calidad, en espacios limpios y seguros,  para poder ofrecer al consumidor experiencias de compras  que sean útiles y prácticas para su vida diaria.','null','null','null','estiloamarillo',NULL,0,NULL,NULL,'2022-07-05 18:20:49','2022-07-06 17:54:08'),(8,1,'tarjeta','PROMOCIONES',NULL,'Conoce nuestras promociones exclusivas','ofertaexclusiva','Ver mas','fas fa-percent',NULL,1,1,NULL,NULL,'2022-07-05 18:25:56','2022-07-09 13:28:01'),(9,1,'tarjeta','FACTURACION',NULL,'Genera y descarga su Factura Electrónica.','http://picaroscomer.dyndns.org/WebflecHJ/facturacion_01.aspx','Facturar','fas fa-file-alt',NULL,2,0,NULL,NULL,'2022-07-05 18:29:27','2022-07-05 19:52:37'),(10,1,'tarjeta','MAPA',NULL,'Ubique su tienda SUPERPLUS mas cercano','https://www.google.com.mx/maps/search/superplus/','Ubicar','fas fa-map-marker-alt',NULL,3,0,NULL,NULL,'2022-07-05 18:32:10','2022-07-05 19:53:33');
/*!40000 ALTER TABLE `indexsettings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miempresas`
--

DROP TABLE IF EXISTS `miempresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `miempresas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imghover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miempresas`
--

LOCK TABLES `miempresas` WRITE;
/*!40000 ALTER TABLE `miempresas` DISABLE KEYS */;
INSERT INTO `miempresas` VALUES (1,3,'banner','Banner','null','nosotros.jpg',NULL,1,NULL,'2022-07-05 19:35:19','2022-07-05 19:35:19'),(2,3,'historia','NUESTRA HISTORIA','Super Plus, fundada en el año 2010, en la ciudad de Huajuapan de León Oaxaca, respaldada por la experiencia de Cervezas Modelo en la Mixteca S.A. de C.V. empresa con liderazgo en el sector cervecero.\r\nActualmente contamos con 40 tiendas  distribuidas en la mixteca Oaxaqueña, brindado  servicio las 24 horas del día los 365 días del año,  con una experiencia de 12 años en el mercado, esmerándos en llevar a nuestros clientes productos y servicios  de calidad.','fachada_cb2[1].png','fachada.png',2,NULL,'2022-07-05 19:36:05','2022-07-05 19:36:22'),(3,1,'mision',NULL,'Satisfacer las necesidades de los clientes proporcionando un Plus a su Día.','mision.png','super plus palomita.png',4,NULL,'2022-07-05 19:38:53','2022-07-06 13:35:26'),(4,3,'vision',NULL,'Ser la mejor opción en tienda de conveniencia y posicionar la marca en diferentes mercados.','vision.png','super plus palomita.png',4,NULL,'2022-07-05 19:42:07','2022-07-05 19:43:20'),(5,1,'valores',NULL,'<strong>El cliente es el jefe:</strong> En Super Plus el cliente es lo más importante, trabajamos para su completa satisfacción. <br>\r\n<strong>Ser mejor cada día:</strong> Fijarse objetivos día a día, con una mentalidad innovadora basándose en hechos y datos para cumplir las expectativas de nuestros clientes y de la empresa. <br>\r\n<strong>Trabajo en equipo:</strong> En un gran equipo hay unión, cada integrante hace su aporte aprovechando la diversidad de ideas, habilidades y talentos. <br>\r\n<strong>Gente con la gente:</strong> Crear un ambiente de empata en colaboración, reconocimiento, diversidad y respeto.','valores.png','super plus palomita.png',5,NULL,'2022-07-05 19:42:41','2022-07-15 12:04:24'),(6,1,'titulo','ACERCA DE NOSOTROS','ACERCA DE NOSOTROS','super_plus.png',NULL,3,NULL,'2022-07-06 13:35:02','2022-07-06 13:35:16');
/*!40000 ALTER TABLE `miempresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2020_11_16_101800_create_roles_tables',1),(5,'2020_11_16_134223_create_categorias_table',1),(6,'2020_11_16_134411_create_productos_table',1),(7,'2020_11_26_000000_create_spammers_table',1),(8,'2021_09_09_141159_create_publicoferts_table',1),(9,'2021_09_09_141951_create_proveedores_table',1),(10,'2021_09_09_142729_create_instalacions_table',1),(11,'2021_10_01_080804_create_slidermains_table',1),(12,'2021_10_05_160510_create_cardservicios_table',1),(13,'2021_10_08_135852_create_textoproductos_table',1),(14,'2021_11_20_173522_create_miempresas_table',1),(15,'2021_11_26_141730_create_vacantes_table',1),(16,'2021_12_21_115027_create_indexsettings_table',1),(17,'2022_01_11_204246_create_empleosettings_table',1),(18,'2022_07_04_174438_create_politicaprivacidads_table',1),(19,'2022_07_04_174923_create_videos_table',1),(20,'2022_07_04_175027_create_cupones_table',1),(21,'2022_07_05_165333_create_responsabilidadsocials_table',1),(22,'2022_09_01_135430_create_facturacion_pages_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `politicaprivacidads`
--

DROP TABLE IF EXISTS `politicaprivacidads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `politicaprivacidads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subititulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `politicaprivacidads`
--

LOCK TABLES `politicaprivacidads` WRITE;
/*!40000 ALTER TABLE `politicaprivacidads` DISABLE KEYS */;
INSERT INTO `politicaprivacidads` VALUES (1,1,NULL,NULL,NULL,'<h1><small><strong>POL&Iacute;TICA DE PRIVACIDAD</strong></small></h1>\r\n\r\n<h2>Agradecemos su visita, este sitio <em><strong>superplus24horas.com</strong></em> es propiedad de Superplus. Con el objetivo de ofrecerle un sitio web seguro, se establecen&nbsp;TERMINOS Y CONDICIONES.<br />\r\nEste sitio es para mayores de 18 a&ntilde;os de edad. Si es menor de edad, puede usar el sitio solo con la participaci&oacute;n y aprobaci&oacute;n de un padre o tutor. Al acceder, consultar o utilizar nuestro sitio <strong><em>superplus24horas.com</em></strong>, aceptas todas y cada una de las condiciones que se establecen en estos t&eacute;rminos de uso, manifestando su voluntad, en t&eacute;rminos de la legislaci&oacute;n aplicable vigente.<br />\r\nCualquier modificaci&oacute;n a los presentes t&eacute;rminos y condiciones ser&aacute; realizada cuando Superplus lo considere apropiado, siendo exclusiva responsabilidad del usuario revisar las modificaciones.</h2>\r\n\r\n<h2><br />\r\n<strong>T&Eacute;RMINOS Y CONDICIONES DE USO SUPERPLUS</strong><br />\r\n<strong>I) Derechos de Propiedad.</strong><br />\r\nLos derechos de autor y/o de propiedad industrial sobre el contenido, nombres de dominio, logotipos, fotograf&iacute;as, im&aacute;genes, o en general cualquier informaci&oacute;n contenida o publicada en el sitio web, se encuentran debidamente protegidos a favor de &ldquo;Superplus&rdquo; o en su caso en favor de sus Afiliados, Proveedores y/o de sus respectivos propietarios, de conformidad con la legislaci&oacute;n aplicable en materia de derechos de autor. Por lo cual se proh&iacute;be expresamente a &ldquo;Los Clientes&rdquo; modificar, alterar o suprimir, ya sea en forma total o parcial, los avisos, marcas, nombres comerciales, anuncios, logotipos o en general cualquier indicaci&oacute;n que se refiera a la propiedad de informaci&oacute;n contenida en el sitio web.</h2>\r\n\r\n<h2><br />\r\n<strong>II) Modificaciones al sitio web</strong><br />\r\nSuperplus podr&aacute; en cualquier momento y a su conveniencia sin necesidad de dar aviso al usuario, realizar correcciones, adiciones, mejoras o modificaciones al contenido, presentaci&oacute;n, informaci&oacute;n, bases de datos y dem&aacute;s elementos del sitio <strong><em>superplus24horas.com</em></strong>, sin que ello de lugar ni derecho a ninguna reclamaci&oacute;n o indemnizaci&oacute;n, ni que lo mismo implique reconocimiento de responsabilidad alguna a favor del usuario.</h2>\r\n\r\n<h2><br />\r\n<strong>III) Marcas Comerciales.</strong><br />\r\nPor requerimientos y estrategia, en el sitio web se usan, adem&aacute;s de nuestra marca &ldquo;Superplus&rdquo;, otras marcas comerciales, logos, marcas de servicios, marcas registradas, por cuestiones de derechos de autor, esas marcas, van en &aacute;reas espec&iacute;ficas del sitio web para no causar confusi&oacute;n al p&uacute;blico que acceda el sitio web. Todas las marcas comerciales que no sean de &ldquo;Superplus&rdquo; que aparezcan en el sitio web o a trav&eacute;s de los servicios, son propiedad de sus respectivos representantes legales. El mal uso de las marcas comerciales expuestas o a trav&eacute;s de cualquiera de los servicios del sitio web est&aacute; estrictamente prohibido.</h2>\r\n\r\n<h2><br />\r\n<strong>IV) Precisi&oacute;n de los materiales.</strong><br />\r\nLos materiales que aparecen en este sitio web pueden incluir errores t&eacute;cnicos, tipogr&aacute;ficos o fotogr&aacute;ficos. Superplus no garantiza que ninguno de los materiales en su sitio web sea preciso, completo o actual y puede realizar cambios en los materiales contenidos en su sitio web en cualquier momento sin previo aviso.</h2>\r\n\r\n<h2><br />\r\n<strong>V) Licencia Limitada.</strong><br />\r\nUsted puede acceder y ver el contenido del sitio web desde su computadora o desde cualquier otro tipo de dispositivo, a menos de que se indique de otra manera en estos T&eacute;rminos y Condiciones. La reimpresi&oacute;n, publicaci&oacute;n, distribuci&oacute;n, asignaci&oacute;n, reproducci&oacute;n electr&oacute;nica o por cualquier otro medio de informaci&oacute;n donde aparezca en <strong><em>superplus24horas.com</em></strong>, para cualquier uso distinto al personal no comercial est&aacute; prohibido para el usuario. Cuando la conducta del usuario sea contraria a lo establecido en los presentes t&eacute;rminos y condiciones, &ldquo;Superplus&rdquo; se reserva el derecho de negar el acceso al sitio web a su consideraci&oacute;n.<br />\r\n&nbsp;</h2>',NULL,2,NULL,'2022-07-05 17:36:35','2022-07-06 17:07:15'),(2,3,NULL,NULL,NULL,'<h2><strong>VI) Datos personales.</strong><br />\r\nLos datos personales que puede llegar a recabar Superplus de forma directa o indirecta consisten en los siguientes: su nombre completo, direcci&oacute;n, tel&eacute;fonos de casa o trabajo o celular, correo electr&oacute;nico y ocupaci&oacute;n. Nos comprometemos a que todos los datos obtenidos ser&aacute;n tratados bajo las m&aacute;s estrictas medidas de seguridad que garanticen su confidencialidad con&nbsp;base a la ley de protecci&oacute;n de datos.</h2>\r\n\r\n<h2><br />\r\n<strong>VII) Violaciones del sistema o bases de datos.</strong><br />\r\nEs il&iacute;cita cualquier acci&oacute;n o uso de dispositivos, software, u otros instrumentos tendientes a interferir tanto en las actividades y operatoria del sitio, as&iacute; como en las bases de datos o en los diferentes apartados del sitio. Cualquier intromisi&oacute;n, tentativa o actividad violatoria o contraria a las leyes sobre derechos de propiedad intelectual, seguridad de los sistemas y/o a las prohibiciones estipuladas en este documento, har&aacute;n posible a su responsable de las acciones legales pertinentes y a las sanciones previstas por este acuerdo.</h2>\r\n\r\n<h2><br />\r\n<strong>VIII) Legislaci&oacute;n aplicable y jurisdicci&oacute;n.</strong><br />\r\nLos presentes t&eacute;rminos y condiciones est&aacute;n sujetos de acuerdo con la legislaci&oacute;n aplicable vigente en la Rep&uacute;blica Mexicana.</h2>',NULL,2,NULL,'2022-07-05 19:47:56','2022-07-06 17:09:03');
/*!40000 ALTER TABLE `politicaprivacidads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `categoria_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (21,'BARCARDI  LIMON, MANGO, FRAMBUESA','barcardi-limon-mango-frambuesa','<p>.</p>','750ML',0.00,'PLANTILLAS PAG WEB (4).png',1,NULL,NULL,NULL,NULL,6,'2022-11-07 09:58:34','2022-11-07 10:25:25'),(22,'PAKETAXO FLAMIN HOT','paketaxo-flamin-hot','<p>.</p>','.',0.00,'19.png',1,NULL,NULL,NULL,NULL,6,'2022-11-07 10:20:38','2022-11-07 10:26:32'),(23,'DANONE MIX HERSHEYS COOKIES','danone-mix-hersheys-cookies','<p>.</p>','110GR',0.00,'18.png',1,NULL,NULL,NULL,NULL,6,'2022-11-07 10:22:11','2022-11-07 10:25:05'),(24,'GELATINA MINIONS','gelatina-minions','<p>.</p>','1PIEZA',0.00,'17.png',1,NULL,NULL,NULL,NULL,13,'2022-11-07 10:23:03','2022-11-07 10:23:03'),(25,'DANONE DANUP CAFÉ','danone-danup-cafe','<p>.</p>','.',0.00,'21.png',1,NULL,NULL,NULL,NULL,5,'2022-11-14 10:12:23','2022-11-14 10:12:23'),(26,'PAY MINI MANZANA CANELA','pay-mini-manzana-canela','<p>.</p>','MARINELA',0.00,'20.png',1,NULL,NULL,NULL,NULL,6,'2022-11-14 10:13:27','2022-11-14 10:13:27');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` VALUES (1,1,'alpura','alpura.png',NULL,NULL,NULL,NULL,'2022-07-05 20:01:33','2022-07-05 20:01:33'),(2,1,'barcel','barcel.png',NULL,NULL,NULL,NULL,'2022-07-05 20:01:42','2022-07-05 20:01:42'),(3,1,'Corona2','corona.png',NULL,NULL,NULL,NULL,'2022-07-05 20:02:40','2022-07-09 15:30:38'),(4,1,'Brillante','brillante.png',NULL,NULL,NULL,NULL,'2022-07-05 20:04:25','2022-07-09 15:30:52'),(5,1,'Nestle','nestle agua.png',NULL,NULL,NULL,NULL,'2022-07-05 20:04:36','2022-07-09 15:31:09'),(6,1,'Bonafont','bonafont.png',NULL,NULL,NULL,NULL,'2022-07-05 20:04:45','2022-07-09 15:31:55'),(8,1,'cocacola','coca cola.png',NULL,NULL,NULL,NULL,'2022-07-05 20:06:46','2022-07-05 20:06:46'),(9,1,'Corona3','corona.png',NULL,NULL,NULL,NULL,'2022-07-05 20:07:03','2022-07-09 15:32:18');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicoferts`
--

DROP TABLE IF EXISTS `publicoferts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publicoferts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `deldia` tinyint(1) NOT NULL,
  `categoria_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publicoferts_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `publicoferts_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=424 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicoferts`
--

LOCK TABLES `publicoferts` WRITE;
/*!40000 ALTER TABLE `publicoferts` DISABLE KEYS */;
INSERT INTO `publicoferts` VALUES (4,6,'POUCH WISKAS 85 GR',NULL,'36.png','2022-07-09','2022-07-31',NULL,0,14,'2022-07-09 11:59:13','2022-07-09 11:59:13'),(5,6,'POUCH PEDIGREE',NULL,'37.png','2022-07-09','2022-07-31',NULL,0,14,'2022-07-09 12:00:28','2022-07-09 12:00:28'),(7,6,'ANTITRANSPIRANTE REXONA MEN V8',NULL,'44.png','2022-07-09','2022-07-31',NULL,0,10,'2022-07-09 12:03:24','2022-07-09 12:03:24'),(8,6,'PRESERVATIVOS MFORCE',NULL,'46.png','2022-07-09','2022-07-31',NULL,0,9,'2022-07-09 12:05:00','2022-07-09 12:05:00'),(10,6,'NUTRI LECHE 1 LITRO',NULL,'50.png','2022-07-09','2022-07-31',NULL,0,5,'2022-07-09 12:20:52','2022-07-09 12:20:52'),(11,6,'ACEITUNAS BUFALO 150GR',NULL,'45.png','2022-07-09','2022-07-31',NULL,0,1,'2022-07-09 12:22:39','2022-07-09 12:22:39'),(12,6,'SALSA BUFALO PICANTE 150GR',NULL,'42.png','2022-07-09','2022-07-31',NULL,0,13,'2022-07-09 12:29:54','2022-07-09 12:29:54'),(13,6,'YOGURTH LALA GO 170GR',NULL,'41.png','2022-07-09','2022-07-31',NULL,0,5,'2022-07-09 12:32:19','2022-07-09 12:32:19'),(14,6,'GALLETAS OREO 114GR',NULL,'40.png','2022-07-09','2022-07-31',NULL,0,6,'2022-07-09 12:37:07','2022-07-09 12:37:07'),(15,6,'HOLANDA CORNETTO',NULL,'39.png','2022-07-09','2022-07-31',NULL,0,4,'2022-07-09 12:42:25','2022-07-09 12:42:25'),(16,6,'CHICLE TRIDENT',NULL,'51.png','2022-07-09','2022-07-31',NULL,0,13,'2022-07-09 12:46:19','2022-07-09 12:46:19'),(17,6,'GANSITO MARINELA',NULL,'53.png','2022-07-09','2022-07-31',NULL,0,6,'2022-07-09 12:49:58','2022-07-09 12:49:58'),(18,6,'YOGURT LALA SABORES',NULL,'54.png','2022-07-09','2022-07-31',NULL,0,5,'2022-07-09 12:52:14','2022-07-09 12:52:14'),(19,6,'COCA COLA 2.5 L',NULL,'43.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:08:11','2022-07-09 13:08:11'),(20,6,'SUERO ELECTROLIT 625 ML',NULL,'47.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:15:04','2022-07-09 13:15:04'),(21,6,'CAFÉ OLÉ SABORES',NULL,'30.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:17:39','2022-07-09 13:17:39'),(22,6,'JUGO DEL VALLE 413 ML',NULL,'31.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:19:37','2022-07-09 13:19:37'),(23,6,'POWERADE SABORES',NULL,'33.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:22:13','2022-07-09 13:22:13'),(24,6,'JUMEX TETRAPACK 1 LT',NULL,'34.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:24:13','2022-07-09 13:24:13'),(26,6,'REFRESCO PEPSI/SANGRÍA 355ML LATA',NULL,'35.png','2022-07-09','2022-07-31',NULL,0,16,'2022-07-09 13:28:05','2022-07-09 13:28:05'),(27,6,'ICE SLUSH 20 OZ',NULL,'38.png','2022-07-09','2022-07-31',NULL,0,7,'2022-07-09 13:30:46','2022-07-09 13:30:46'),(28,6,'COCA COLA 600ML',NULL,'32.png','2022-07-09','2022-07-31',NULL,0,2,'2022-07-09 13:53:05','2022-07-09 13:53:05'),(30,6,'CERVEZA VICTORIA 210ML VIDRIO',NULL,'21.png','2022-07-09','2022-07-31',NULL,0,17,'2022-07-09 13:58:49','2022-07-09 13:58:49'),(31,6,'CERVEZA MODELO ESPECIAL LATA',NULL,'29.png','2022-07-09','2022-07-31',NULL,0,17,'2022-07-09 14:01:32','2022-07-09 14:01:44'),(40,6,'BEBIDA SKYY  275ML SABORES',NULL,'56.png','2022-07-11','2022-07-31',NULL,0,2,'2022-07-11 09:12:42','2022-07-11 09:14:20'),(41,6,'HELIX 355ML LATA SABORES',NULL,'55.png','2022-07-11','2022-07-31',NULL,0,2,'2022-07-11 09:13:51','2022-07-11 09:14:07'),(42,6,'RANCHO MIX 355ML',NULL,'57.png','2022-07-11','2022-07-31',NULL,0,2,'2022-07-11 09:15:47','2022-07-11 09:15:47'),(44,6,'SABRITAS PAPA 42/45GR',NULL,'52.png','2022-07-11','2022-07-31',NULL,0,3,'2022-07-11 09:18:46','2022-07-11 09:18:55'),(45,6,'WHISKY RED LABEL + BRILLANTE AGUA MINERAL + BOLSA DE HIELO',NULL,'60.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:20:20','2022-07-11 09:20:20'),(46,6,'BRANDY TORRES 5 700ML + BRILLANTE AGUA MINERAL 2L',NULL,'59.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:21:25','2022-07-11 09:21:25'),(47,6,'RON CAPITAN MORGAN 750ML + COCA COLA 2.5L',NULL,'58.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:23:27','2022-07-11 09:23:27'),(48,6,'CHILE TAJIN 142GR + JUGO KERMATO TOMATE',NULL,'63.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:25:40','2022-07-11 09:25:40'),(49,6,'PEPSI 600ML + DORITO FLAMMING HOT 52/62GR',NULL,'62.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:27:26','2022-07-11 09:27:26'),(50,6,'HARINA SAN BLAS HOT CAKES 500GR + LECHERITA 100GR',NULL,'64.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:30:28','2022-07-11 09:30:28'),(51,6,'NESTLE 16 OZ SABORES + GALLETAS POLVORONES 111/113',NULL,'65.png','2022-07-11','2022-07-31',NULL,0,16,'2022-07-11 09:42:56','2022-07-11 09:42:56'),(52,6,'HOT DOG + GRATIS JUGO BOING 250ML SABORES',NULL,'66.png','2022-07-11','2022-07-30',NULL,0,16,'2022-07-11 09:46:17','2022-08-01 15:37:55'),(57,6,'CORONA AGUA RIFADA','¡DALE UN PLUS A TU DIA!','35.png','2022-07-11','2022-07-31',NULL,1,2,'2022-07-11 13:52:06','2022-07-16 07:58:51'),(62,6,'JABÓN ESCUDO ANTIBACTERIAL','1 X $18.00','52 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,10,'2022-08-02 18:17:40','2022-08-02 18:21:33'),(63,6,'NUTRI LECHE 1 LITRO','1 X 16.50','51 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,5,'2022-08-02 18:30:54','2022-08-02 18:30:54'),(64,6,'SALSA BUFALO PICANTE 150GR','1 PIEZA SALSA BUFALO A SOLO $17.00','48 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,1,'2022-08-02 18:32:39','2022-08-02 18:32:39'),(65,6,'AVENA QUAKER 400GR','1 X $29.00','45 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,1,'2022-08-02 18:36:19','2022-08-02 18:36:19'),(66,6,'CORONA AGUA RIFADA 355 ML','1 X 21.00','44 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:44:48','2022-08-02 18:44:48'),(67,6,'SALSA VALENTINA 350/370 ML','1 X 16.00','47 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,1,'2022-08-02 18:46:07','2022-08-02 18:46:07'),(68,6,'CHICLE TRIDENT 30.6 GR SABORES','1 X $23.00','46 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,1,'2022-08-02 18:47:49','2022-08-02 18:47:49'),(69,6,'JUGO JUMEX 1L TETRAPACK SABORES','2 X $48.00','57 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:50:35','2022-08-02 18:50:35'),(70,6,'JUGO DEL VALLE 413 ML SABORES','2 X 32.00','56 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:51:22','2022-08-02 18:51:22'),(71,6,'COCA COLA 600ML','2 X $29.00','55 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:51:58','2022-08-02 18:51:58'),(72,6,'VIÑA REAL 330 ML SABORES','3 X $59.00','54 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:53:10','2022-08-02 18:53:10'),(73,6,'HELIX 355ML LATA SABORES','2 X $45.00','53 AGOATO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:53:38','2022-08-02 18:53:38'),(74,6,'ENERGETIZANTE MONSTER 473ML SABORES','1 X 39.00','50 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:54:44','2022-08-02 18:54:44'),(75,6,'ENERGETIZANTE VOLT 473ML SABORES','2 X 35.00','49 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,2,'2022-08-02 18:55:36','2022-08-02 18:55:36'),(76,6,'CERVEZA CORONA MEGA FAMILIAR 1.2 L','2 X $71.00','29 AGOSTO 22.png','2022-08-02','2022-08-21',NULL,0,17,'2022-08-02 18:56:45','2022-08-22 09:25:36'),(77,6,'CERVEZA VICTORIA MEGA FAMILIAR 1.2L','2 X 71.00','28 AGOSTO 22.png','2022-08-02','2022-08-21',NULL,0,17,'2022-08-02 18:57:19','2022-08-22 09:25:46'),(78,6,'CERVEZA CORONA EXTRA 355ML BOTE','6 X 102.00','41 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 18:58:37','2022-08-02 18:58:37'),(79,6,'CERVEZA MODELO ESPECIAL 355ML BOTE','6 X 102.00','40 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 18:59:38','2022-08-02 18:59:38'),(80,6,'CERVEZA CORONA LIGHT BOTE 355ML','6 X 102.00','39 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 19:00:41','2022-08-02 19:00:41'),(81,6,'CERVEZA CORONA LIGHT  473ML LATON','2 X 40.00','38 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 19:01:37','2022-08-02 19:01:37'),(82,6,'CERVEZA CORONA EXTRA 473ML LATON','2 X 40.00','37 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 19:02:45','2022-08-02 19:02:45'),(83,6,'CERVEZA MODELO ESPECIAL  473ML LATON','2X 40.00','36 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 19:03:30','2022-08-02 19:03:30'),(84,6,'CERVEZA VICTORIA 473ML LATON','2 X $40.00','35 AGOSTO 22.png','2022-08-02','2022-08-31',NULL,0,17,'2022-08-02 19:04:31','2022-08-02 19:04:31'),(85,6,'RANCHO MIX 355ML','3 X $49.00','58 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,2,'2022-08-03 09:56:00','2022-08-03 09:56:00'),(86,6,'POUCH PEDIGREE','3 X $35.00','64 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,14,'2022-08-03 09:57:57','2022-08-03 09:57:57'),(87,6,'POUCH WHISKAS 85 GR','3 X $35.00','63 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,14,'2022-08-03 09:59:23','2022-08-03 09:59:34'),(88,6,'LIMPIADOR FABULOSO 500ML','2 X $29.00','71 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,11,'2022-08-03 10:00:43','2022-08-03 10:00:43'),(89,6,'PASTE DENTAL COLGATE CALCIO 75ML','1 X $23.00','70 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,10,'2022-08-03 10:01:41','2022-08-03 10:01:41'),(90,6,'SUERO ELECTROLIT 625 ML','2 x $42.00','72 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,2,'2022-08-03 10:48:51','2022-08-03 10:48:51'),(91,6,'CARAMELO MENTOS 29 / 29.7 GR SABORES','2 x $20.00','67 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,13,'2022-08-03 10:50:14','2022-08-03 10:50:14'),(92,6,'KINDER DELICE 39/42 GR','1 X $13.50','66 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,13,'2022-08-03 10:51:23','2022-08-03 10:51:23'),(93,6,'GALLETAS OREO 114GR','1 X $15.00','68 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,6,'2022-08-03 10:52:33','2022-08-03 10:52:33'),(94,6,'MORDISKO HOLANDA','1 X $17.00','69 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,4,'2022-08-03 10:53:42','2022-08-03 10:53:42'),(95,6,'REBANADAS BIMBO','1 X $7.00','73 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,6,'2022-08-03 10:54:28','2022-08-03 10:54:28'),(96,6,'PALOMITAS KARAMELADAS  POP 120 GR','1 X $20.00','65 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,3,'2022-08-03 10:59:22','2022-08-03 10:59:22'),(97,6,'GALLETA CHOKIS 75/84/90 SABORES','2 X $29.00','62 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,6,'2022-08-03 11:01:27','2022-08-03 11:01:27'),(98,6,'TAKIS FUEGO BARCEL 56GR','2 X $29.00','61 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,3,'2022-08-03 11:02:20','2022-08-03 11:02:20'),(99,6,'CHEETOS SABORES 42/52 GR','2 X $25.00','60 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,3,'2022-08-03 11:03:12','2022-08-03 11:03:12'),(100,6,'REFRESCO JARRITO 600ML SABORES','2 x $29.00','59 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,2,'2022-08-03 11:05:09','2022-08-03 11:05:09'),(101,6,'WHISKY HIGHLAND CHIEF 750ML +  HIELO 5KG + BRILLANTE MINERAL 2LTS','COMBO $209.00','82 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:09:36','2022-08-03 11:09:36'),(102,6,'WHISKY BUCHAN\'S 750ML + BRILLANTE MINERAL 2LT  + BOLSA DE HIELO 5KG','COMBO $865.00','80 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:12:04','2022-08-03 11:12:04'),(103,6,'VODKA ABSOLUT AZUL 750ML + JUGO JUMEX 1LT TETRAPACK SABORES','COMBO $275.00','81 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:16:38','2022-08-03 11:16:38'),(104,6,'RON CAPITAN MORGAN 750ML + COCA COLA 2.5L','COMBO $209.00','79 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:17:22','2022-08-03 11:17:22'),(105,6,'REFRESCO PEPSI/SANGRIA 3LT','COMBO $75.00','75 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:18:43','2022-08-03 11:18:43'),(106,6,'TAJIN 142GR / JUGO KERMATO 445/470ML','COMBO $49.00','76 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:21:25','2022-08-03 11:21:25'),(107,6,'DORITOS SABORES  52/62 GR + REFRESCO PEPSI 600ML','COMBO $29.00','74 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:27:00','2022-08-03 11:27:00'),(108,6,'LECHE YOMI 190ML SABORES + NITO BIMBO','COMBO $23.00','77 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,0,16,'2022-08-03 11:28:32','2022-08-03 11:28:32'),(109,6,'NESTLE 16 ONZAS + BIMBUÑUELOS 6PZS','COMBO $39.00','78 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,1,16,'2022-08-03 11:31:54','2022-08-03 11:37:23'),(110,6,'ICEE SLUSH 20 ONZAS SABORES','2 X $55.00','84 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,1,16,'2022-08-03 11:35:40','2022-08-03 11:37:32'),(111,6,'HOT DOG + GRATIS JUGO BOING 250ML SABORES','COMBO $18.00','83 AGOSTO 22.png','2022-08-03','2022-08-31',NULL,1,16,'2022-08-03 11:36:25','2022-08-03 11:37:15'),(113,6,'POUCH WISKAS 85 GR','PROMOCIÓN\r\n3 X $35.00','56 SEP 22.png','2022-09-02','2022-09-30',NULL,0,14,'2022-09-02 12:36:20','2022-09-02 12:36:20'),(114,6,'POUCH PEDIGREE 100GR','PROMOCIOÓN\r\n3 X $35.00','55 SEP 22.png','2022-09-02','2022-09-30',NULL,0,14,'2022-09-02 12:38:18','2022-09-02 12:38:18'),(115,6,'DETERGENTE AXION LIMON 500 GR','¡OFERTA!\r\n1 X $20.00','66 SEP 22.png','2022-09-02','2022-09-30',NULL,0,11,'2022-09-02 12:42:55','2022-09-02 12:42:55'),(116,6,'LIMPIADOR CLORALEX 950ML','¡OFERTA!\r\n1 X $12.00','65 SEP 22.png','2022-09-02','2022-09-30',NULL,0,11,'2022-09-02 12:43:56','2022-09-02 12:43:56'),(117,6,'NIVEA PEARL & BEAUTY ROLL ON 50ML','1 X $36.00','60 SEP 22.png','2022-09-02','2022-09-30',NULL,0,10,'2022-09-02 12:46:47','2022-09-02 12:46:47'),(118,6,'LECHE NUTRI 1 LT','¡OFERTA!\r\n1 X $17.00','67 SEP 22.png','2022-09-02','2022-09-30',NULL,0,5,'2022-09-02 13:00:19','2022-09-02 13:00:19'),(119,6,'AVENA QUAKER 400GR','¡OFERTA! 1 X $29.00','62 SEP 22.png','2022-09-02','2022-09-30',NULL,0,1,'2022-09-02 13:01:49','2022-09-02 13:01:49'),(120,6,'LA LECHERA NESTLE SIRVE FACIL 335 GR','¡OFERTA!\r\n1 X $39.00','68 SEP 22.png','2022-09-02','2022-09-30',NULL,0,1,'2022-09-02 13:03:24','2022-09-02 13:03:24'),(121,6,'SALSA HABANERO NARANJA / VERDE','¡OFERTA!\r\n1 X $22.00','PROMOPLUS 59  SEP 22.png','2022-09-02','2022-09-30',NULL,0,1,'2022-09-02 13:12:58','2022-09-02 13:12:58'),(122,6,'SALSA VALENTINA 350/370 ML','¡OFERTA!\r\n1 X $16.00','61 SEP 22.png','2022-09-02','2022-09-30',NULL,0,1,'2022-09-02 13:14:52','2022-09-02 13:14:52'),(123,6,'CHILE MIGUELITO TARRO 250 ML','¡OFERTA! 1 X $25.00','63 SEP 22.png','2022-09-02','2022-09-30',NULL,0,1,'2022-09-02 13:15:55','2022-09-02 13:15:55'),(124,6,'PALETA LAPIZ COLOR NESTLE','¡OFERTA!\r\n1 X $10.00','58 SEP 22.png','2022-09-02','2022-09-30',NULL,0,4,'2022-09-02 13:28:24','2022-09-02 13:28:24'),(125,6,'REFRESCO COCA COLA 2.5 LT RETORNABLE','¡OFERTA!\r\n1 X $28.00','64 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 13:33:25','2022-09-02 13:33:25'),(126,6,'HOLANDA CHOCO CREM VAINILLA / ALMENDRAS 78ML','¡PROMO!\r\n2 X $35.00','57 SEP 22.png','2022-09-02','2022-09-30',NULL,0,4,'2022-09-02 15:44:52','2022-09-02 15:44:52'),(127,6,'SUERO ELECTROLIT 625ML SABORES','¡COMBO!\r\n3 X $59.00','75 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 15:46:53','2022-09-02 15:46:53'),(128,6,'CHOCOLATE KIT KAT CLASICO, DARK, WHITE 41.5 GR','¡OFERTA!\r\n2 X $34.00','71 SEP 22.png','2022-09-02','2022-09-30',NULL,0,13,'2022-09-02 15:47:59','2022-09-02 15:47:59'),(129,6,'GALLETAS CHOKIS 84/90 GR','¡PROMO!\r\n2 X $29.00','51 SEP 22.png','2022-09-02','2022-09-30',NULL,0,6,'2022-09-02 15:49:31','2022-09-02 15:49:31'),(130,6,'LICOR MEXGAVIA 440ML','¡OFERTA!\r\n1 X $23.00','76 SEP 22.png','2022-09-02','2022-09-30',NULL,0,8,'2022-09-02 16:00:50','2022-09-02 16:00:50'),(131,6,'JUGO DEL VALLE 413ML SABORES','¡PROMO!\r\n2 X $32.00','54 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 16:54:50','2022-09-02 16:54:50'),(132,6,'REFRESCO COCA COLA 355 ML','¡COMBO!\r\n2 X $32.00','74 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 16:56:44','2022-09-02 16:56:44'),(133,6,'BEBIDA NEW MIX JIMADOR 350 ML SABORES','¡COMBO!\r\n3 X $59.00','73 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 16:59:16','2022-09-02 16:59:16'),(134,6,'HELIX 355ML LATA SABORES','¡PROMO!\r\n2 X $45.00','72 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 17:01:36','2022-09-02 17:01:36'),(135,6,'REFRESCO PEPSI / SANGRIA CASERA 600 ML','¡PROMO! \r\n2 X $29.00','70 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 17:03:50','2022-09-02 17:03:50'),(136,6,'TAKIS FUEGO BARCEL 56GR','¡PROMO!\r\n2 X $29.00','69 SEP 22.png','2022-09-02','2022-09-30',NULL,0,3,'2022-09-02 17:04:48','2022-09-02 17:04:48'),(137,6,'ENERGETIZANTE VOLT 473ML SABORES','¡PROMO!\r\n2 X $35.00','53 SEP 22.png','2022-09-02','2022-09-30',NULL,0,2,'2022-09-02 17:05:54','2022-09-02 17:05:54'),(138,6,'CHEETOS SABORES 42/52 GR','¡PROMO!\r\n2 X $25.00','52 SEP 22.png','2022-09-02','2022-09-30',NULL,0,3,'2022-09-02 17:06:42','2022-09-02 17:06:42'),(139,6,'CHILE TAJIN 142GR + JUGO KERMATO TOMATE 445/470 ML','¡COMBO!\r\n$49.00','42 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:17:56','2022-09-02 17:17:56'),(140,6,'TEQUILA 100 AÑOS 750 ML + BRILLANTE 2 LT SABORES','¡COMBO!\r\n$229.00','43 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:32:10','2022-09-02 17:32:10'),(141,6,'TEQUILA CAZADORES 700/750 ML +BRILLANTE 2LT SABORES','¡COMBO!\r\n$299.00','45 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:40:10','2022-09-02 17:40:10'),(142,6,'CABRITO 750 ML + BRILLANTE SABORES 2 LT SABORES','¡COMBO!\r\n$180.00','44 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:42:40','2022-09-02 17:42:40'),(143,6,'RON CAPITAN MORGAN 750 ML + COCA COLA 2.75','¡COMBO!\r\n$209.00','46 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:48:09','2022-09-02 17:48:09'),(144,6,'LICOR RANCHO ESCONDIDO 750 ML + BRILLANTE 2 LT SABORES','¡COMBO!\r\n$89.00','47 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:51:05','2022-09-02 17:51:05'),(145,6,'SABRITOS 60 GR + REFRESCO COCA COLA 600 ML PET','¡COMBO!\r\n$30.00','49 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:54:58','2022-09-02 17:54:58'),(146,6,'FRIJOL LA SIERRA 580 GR + TOSTADAS MILPA REAL ONDULADAS 360 GR','¡COMBO!\r\n$42.00','41 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 17:58:01','2022-09-02 17:58:01'),(147,6,'NESTLE 16 OZ SABORES + SPONCH  PZA','¡COMBO!\r\n$40.00','40 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 18:00:18','2022-09-02 18:00:18'),(148,6,'ICEE SLUSH 20OZ SABORES','2 X $55.00','50 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 18:01:18','2022-09-02 18:01:18'),(149,6,'HOT DOG + JUGO BOING 250ML SABORES','¡COMBO!\r\n$18.00','48 SEP 22.png','2022-09-02','2022-09-30',NULL,0,16,'2022-09-02 18:02:14','2022-09-02 18:02:14'),(155,7,'CERVEZA VICTORIA CEMPASUCHIL','CERVEZA VICTORIA CEMPASUCHIL','PROMOPLUS  (18).png','2022-10-31','2022-10-30',NULL,0,17,'2022-10-01 18:34:15','2022-10-31 10:46:30'),(157,7,'CERVEZA CORONA LIGHT 355ML BOTE','CERVEZA CORONA LIGHT 355ML BOTE','79.png','2022-10-01','2022-10-01',NULL,0,17,'2022-10-01 18:36:16','2022-10-01 18:36:16'),(158,7,'CERVEZA CORONA EXTRA 355ML BOTE','SIX CERVEZA CORONA EXTRA 355ML BOTE','78.png','2022-10-01','2022-10-01',NULL,0,17,'2022-10-01 18:37:12','2022-10-01 18:37:12'),(159,7,'CERVEZA MODELO LATON 473ML','CERVEZA MODELO LATON 473ML','77.png','2022-10-01','2022-10-03',NULL,0,17,'2022-10-01 18:38:03','2022-10-04 15:54:33'),(160,7,'CERVEZA VICTORIA LATON 473ML','CERVEZA VICTORIA LATON 473ML','76.png','2022-10-01','2022-10-01',NULL,0,17,'2022-10-01 18:39:14','2022-10-01 18:39:14'),(161,7,'AGUA RIFADA CORONA SABORES 355ML','AGUA RIFADA CORONA SABORES 355ML','82.png','2022-10-01','2022-10-01',NULL,0,17,'2022-10-01 18:40:03','2022-10-01 18:40:03'),(162,6,'LIMPIADOR CLOROX  930 ML','1 X $14.00','OCTUBRE PROMO 22  (11).png','2022-10-04','2022-10-31',NULL,0,11,'2022-10-04 15:58:03','2022-10-04 15:58:03'),(163,6,'DETERGENTE ROMA 500GR','1 X $19.00','OCTUBRE PROMO 22  (10).png','2022-10-04','2022-10-31',NULL,0,11,'2022-10-04 15:59:03','2022-10-04 15:59:03'),(164,6,'DETERGENTE BLANCA NIEVES 500 GR  + LIMPIADOR CLARASOL 1LT','COMBO $29.00','OCTUBRE PROMO 22  (26).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 16:01:45','2022-10-04 16:01:45'),(165,6,'SUAVITEL 4580 ML','1 X $18.00','OCTUBRE PROMO 22  (17).png','2022-10-04','2022-10-31',NULL,0,11,'2022-10-04 16:03:36','2022-10-04 16:03:36'),(166,6,'MASCOTA FELIX SARDINA 85GR','2 X $22.00','OCTUBRE PROMO 22  (22).png','2022-10-04','2022-10-31',NULL,0,14,'2022-10-04 16:07:22','2022-10-04 16:07:22'),(167,6,'POUCH WISKAS 85 GR','4 X $45.00','OCTUBRE PROMO 22  (23).png','2022-10-04','2022-10-31',NULL,0,14,'2022-10-04 16:08:17','2022-10-04 16:08:17'),(168,6,'VINAGRE CLEMENTE BLANCO 500ML','1 X $13.00','OCTUBRE PROMO 22  (12).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:18:33','2022-10-04 16:18:33'),(169,6,'HARINA SAN BLAS 1KG','1 X $22.00','OCTUBRE PROMO 22  (13).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:26:48','2022-10-04 16:26:48'),(170,6,'NUTRI LECHE 1 LITRO','1 X $17.50','OCTUBRE PROMO 22  (18).png','2022-10-04','2022-10-31',NULL,0,5,'2022-10-04 16:40:57','2022-10-04 16:40:57'),(171,6,'SALSA CATSUP CLEMENTE 340G','1 X $19.00','OCTUBRE PROMO 22  (7).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:51:59','2022-10-04 16:51:59'),(172,6,'SALSA TAMPICO EXTRA PICANTE 60ML','1 X $39.00','OCTUBRE PROMO 22  (21).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:53:51','2022-10-04 16:53:51'),(173,6,'SALSA HABANERO 148ML SABORES','1 X $22.00','OCTUBRE PROMO 22  (20).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:54:55','2022-10-04 16:54:55'),(174,6,'ATUN DOLORES 133GR/140GR','2 X $38.00','OCTUBRE PROMO 22  (19).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 16:58:26','2022-10-04 16:58:26'),(175,6,'CHILE MIGUELITO TARRO 250 ML','1 X $25','OCTUBRE PROMO 22  (4).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 17:06:53','2022-10-04 17:06:53'),(176,6,'SUERO ELECTROLIT 625ML SABORES','2 X $40.00','OCTUBRE PROMO 22  (3).png','2022-10-04','2022-10-31',NULL,0,2,'2022-10-04 17:08:17','2022-10-04 17:08:17'),(177,6,'PALETA HOLANDA LIMÓN CITRUS','2 X $27.00','OCTUBRE PROMO 22  (16).png','2022-10-04','2022-10-31',NULL,0,4,'2022-10-04 17:10:10','2022-10-04 17:10:10'),(178,6,'LALA LECHE YOMI 960ML SABORES','1 X $27.00','OCTUBRE PROMO 22  (5).png','2022-10-04','2022-10-31',NULL,0,5,'2022-10-04 17:13:09','2022-10-04 17:13:09'),(179,6,'CHOCOLATE REESES 39.6GR','1 X $18.00','OCTUBRE PROMO 22  (6).png','2022-10-04','2022-10-31',NULL,0,13,'2022-10-04 17:17:27','2022-10-04 17:17:27'),(180,6,'BOCANIKA MAICITO  SABORES','1 X $16.00','OCTUBRE PROMO 22  (8).png','2022-10-04','2022-10-31',NULL,0,3,'2022-10-04 17:19:03','2022-10-04 17:19:03'),(181,6,'BOCANIKA CUBOS DE FRUTA ENCHILADA 50GR','1 X $18.50','OCTUBRE PROMO 22  (9).png','2022-10-04','2022-10-31',NULL,0,3,'2022-10-04 17:20:04','2022-10-04 17:20:20'),(182,6,'COCA COLA 2.5 L','1 X $29.00','OCTUBRE PROMO 22  (14).png','2022-10-04','2022-10-31',NULL,0,2,'2022-10-04 17:21:36','2022-10-04 17:21:36'),(183,6,'ENERGETIZANTE AMPER  473ML SABORES','2 X $35.00','OCTUBRE PROMO 22  (15).png','2022-10-04','2022-10-31',NULL,0,2,'2022-10-04 17:24:54','2022-10-04 17:24:54'),(184,6,'BEBIDA SKYY  275ML SABORES','2 X $49.00','OCTUBRE PROMO 22  (33).png','2022-10-04','2022-10-31',NULL,0,2,'2022-10-04 17:26:52','2022-10-04 17:26:52'),(185,6,'BRANDY TORRES 5 700ML + COCA -COLA 2.75 L NR','COMBO $249.00','OCTUBRE PROMO 22  (28).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:29:39','2022-10-04 17:29:39'),(186,6,'WISKY BLACK & WHITE 700ML + BRILLANTE MINERAL 2L','COMBO $235.00','OCTUBRE PROMO 22  (29).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:31:04','2022-10-04 17:31:04'),(187,6,'RON CAPITAN MORGAN 750ML + COCA COLA 2.75 LT','COMBO $ 199.00','OCTUBRE PROMO 22  (30).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:32:03','2022-10-04 17:32:03'),(188,6,'VODKA ABSOLUT AZUL 750ML + JUGO JUMEX 1LT TETRAPACK SABORES','COMBO $275.00','OCTUBRE PROMO 22  (31).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:32:51','2022-10-04 17:32:51'),(189,6,'CERVEZA CORONA LIGHT  355ML BOTE','6 X $102.00','OCTUBRE PROMO 22  (37).png','2022-10-04','2022-11-04',NULL,0,17,'2022-10-04 17:35:03','2022-10-31 10:21:35'),(190,6,'CERVEZA CORONA EXTRA 355ML BOTE','6 X $102.00','OCTUBRE PROMO 22  (36).png','2022-10-04','2022-10-31',NULL,0,17,'2022-10-04 17:36:09','2022-10-04 17:36:09'),(192,6,'CERVEZA MODELO LATON 473ML','2 X $42.00','OCTUBRE PROMO 22  (35).png','2022-10-04','2022-11-04',NULL,0,17,'2022-10-04 17:38:42','2022-10-31 10:21:23'),(193,6,'CERVEZA VICTORIA 473ML LATON','2 X $42.00','OCTUBRE PROMO 22  (34).png','2022-10-04','2022-11-04',NULL,0,17,'2022-10-04 17:39:22','2022-10-31 10:20:33'),(194,6,'HELIX 355ML LATA SABORES','3 X $58.00','OCTUBRE PROMO 22  (32).png','2022-10-04','2022-10-31',NULL,0,17,'2022-10-04 17:40:15','2022-10-04 17:41:21'),(195,6,'CORONA AGUA RIFADA 355 ML','1 X $21.00','OCTUBRE PROMO 22  (33).png','2022-10-04','2022-10-31',NULL,0,17,'2022-10-04 17:41:07','2022-10-04 17:41:07'),(196,6,'BARCEL TOREADAS HABANERO 55GR + PEPSI 600ML','COMBO $33.00','OCTUBRE PROMO 22  (25).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:42:41','2022-10-04 17:42:41'),(197,6,'NESTLE 16 OZ + REBANADAS BIMBO','COMBO $30.00','OCTUBRE PROMO 22  (24).png','2022-10-04','2022-10-31',NULL,0,16,'2022-10-04 17:43:54','2022-10-04 17:43:54'),(198,6,'ICEE SLUSH 20 ONZAS SABORES','2 X $55.00','OCTUBRE PROMO 22  (1).png','2022-10-04','2022-10-31',NULL,0,7,'2022-10-04 17:44:52','2022-10-04 17:44:52'),(199,6,'VELADORA LIMON FAMA CON AROMA','3 X$49.00','OCTUBRE PROMO 22  (2).png','2022-10-04','2022-10-31',NULL,0,1,'2022-10-04 17:45:51','2022-10-04 17:45:51'),(200,6,'HOT DOG + COCA COLA CHOBBY 355 ML','COMBO $25.00','OCTUBRE PROMO 22  (27).png','2022-10-04','2022-10-31',NULL,0,7,'2022-10-04 17:47:11','2022-10-04 17:47:11'),(201,6,'VICTORIA CEMPASUCHIL 473ML','2 X $35.00','OCTUBRE PROMO 22  (38).png','2022-10-04','2022-11-04',NULL,0,17,'2022-10-04 17:53:47','2022-10-31 10:20:06'),(202,6,'CERVEZA VICTORIA MEGA FAMILIAR 1.2L','1 x $41.00','68 oct 22 (1).png','2022-10-10','2022-11-04',NULL,0,17,'2022-10-10 16:47:32','2022-10-31 09:54:01'),(203,6,'CERVEZA CORONA MEGA FAMILIAR 1.2 L','1 x $41.00','68 oct 22 (2).png','2022-10-10','2022-11-04',NULL,0,17,'2022-10-10 17:07:45','2022-10-31 09:54:11'),(204,6,'CERVEZA NEGRA MODELO 1LT','1 X $42.00','68 oct 22 (3).png','2022-10-10','2022-11-04',NULL,0,17,'2022-10-10 17:09:25','2022-10-31 10:19:55'),(205,6,'DETERGENTE BLANCA NIEVES 500G + LIMPIADOR CLARASOL 1 LT','COMBO $30.00','NOV 2022 (40).png','2022-11-05','2022-11-30',NULL,0,11,'2022-11-05 09:58:38','2022-11-05 09:58:38'),(206,6,'SUAVITEL 450ML','1 X $18.00','NOV 2022  (28).png','2022-11-05','2022-11-30',NULL,0,11,'2022-11-05 10:05:01','2022-11-05 10:05:01'),(207,6,'DETERGENTE ROMA 500 GR','1 X $19.00','NOV 2022  (29).png','2022-11-05','2022-11-30',NULL,0,11,'2022-11-05 10:06:07','2022-11-05 10:06:07'),(208,6,'INSECTICIDA RAIDOLITO','2 X $35.00','NOV 2022  (30).png','2022-11-05','2022-11-30',NULL,0,12,'2022-11-05 10:08:08','2022-11-05 10:08:08'),(209,6,'POUCH PEDIGREE 100 GR PRESENTACIONES','4 X $45.00','NOV 2022  (19).png','2022-11-05','2022-11-30',NULL,0,14,'2022-11-05 10:10:00','2022-11-05 10:10:00'),(210,6,'POUCH WHISKAS 85GR PRESENTACIONES','4 X $45.00','NOV 2022  (18).png','2022-11-05','2022-11-30',NULL,0,14,'2022-11-05 10:11:12','2022-11-05 10:11:12'),(211,6,'PASTA DENTAL CREST 75 ML','1 X $20.00','NOV 2022  (26).png','2022-11-05','2022-11-30',NULL,0,10,'2022-11-05 10:16:50','2022-11-05 10:16:50'),(212,6,'HARINA DE TRIGO SAN BLAS 1 KG','1 X $22.00','NOV 2022  (31).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:20:37','2022-11-05 10:20:37'),(213,6,'ACEITE PURELA DE SOYA 800 ML','1 X $45.00','NOV 2022  (32).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:24:11','2022-11-05 10:24:11'),(214,6,'NUTRI LECHE 1LT','1 X 17.50','NOV 2022  (35).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:26:47','2022-11-05 10:26:47'),(215,6,'GRANOS DE ELOTES HERDEZ 220 GR','1 X $12.00','NOV 2022  (34).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:29:42','2022-11-05 10:29:42'),(216,6,'COCA COLA 2.5 LT RETORNABLE','1 X $29.00','NOV 2022  (36).png','2022-11-05','2022-11-30',NULL,0,2,'2022-11-05 10:30:47','2022-11-05 10:30:47'),(217,6,'SALSA CATSUP CLEMENTE 340 GR','1 X $19.00','NOV 2022  (25).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:35:41','2022-11-05 10:35:41'),(218,6,'CREMA CALAHUA COCO 480 GR','1 x $32.00','NOV 2022  (27).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:39:30','2022-11-05 10:39:30'),(219,6,'HARINA PRONTO HOT CAKES 500 GR','1 X $25.00','NOV 2022  (22).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:40:39','2022-11-05 10:40:39'),(220,6,'NESCAFE CAFE DE OLLA 46 GR','1 X $29.00','NOV 2022  (44).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:41:33','2022-11-05 10:41:33'),(221,6,'CREMA COFFE MATE 160 GR','1 X $29.00','NOV 2022  (23).png','2022-11-05','2022-11-30',NULL,0,1,'2022-11-05 10:43:52','2022-11-05 10:43:52'),(222,6,'CHOCOLATE CARLOS V 18 GR / 22 GR','1 X $10.00','NOV 2022  (33).png','2022-11-05','2022-11-30',NULL,0,13,'2022-11-05 10:47:26','2022-11-05 10:47:26'),(223,6,'CHOCOLATE KINDER DELICE 39/42 GR','1 X 16.00','NOV 2022  (24).png','2022-11-05','2022-11-30',NULL,0,13,'2022-11-05 10:50:17','2022-11-05 10:50:17'),(224,6,'ENERGETIZANTE VOLT 473ML SABORES','2 X $35.00','NOV 2022  (13).png','2022-11-05','2022-11-30',NULL,0,2,'2022-11-05 10:57:08','2022-11-05 10:57:08'),(225,6,'SUERO ELECTROLIT 625 ML','2 X $44.00','NOV 2022  (12).png','2022-11-05','2022-11-30',NULL,0,2,'2022-11-05 11:00:01','2022-11-05 11:00:01'),(226,6,'HELIX 355 ML LATA SABORES','2 X $29.00','NOV 2022  (11).png','2022-11-05','2022-11-30',NULL,0,2,'2022-11-05 11:00:51','2022-11-05 11:00:51'),(227,6,'VODKA ABSOLUT AZUL 750 ML + JUGO TETRAPACK 1LT','COMBO $287.00','NOV 2022  (43).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 11:03:27','2022-11-05 11:03:27'),(228,6,'WHISKY BLACK AND WHITE 700ML + BRILLANTE MINERAL 2LT','COMBO $235.00','NOV 2022  (42).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 11:04:55','2022-11-05 11:04:55'),(229,6,'CERVEZA VICTORIA MEGAFAMILIAR 1.2LT','2 X $72.00','NOV 2022  (10).png','2022-11-05','2022-11-30',NULL,0,17,'2022-11-05 11:06:04','2022-11-05 11:06:04'),(230,6,'CERVEZA CORONA MEGAFAMILAIR 1.2 LT','2 X $72.00','NOV 2022  (8).png','2022-11-05','2022-11-30',NULL,0,17,'2022-11-05 11:06:49','2022-11-05 11:06:49'),(231,6,'CERVEZA NEGRA MODELO CRISTAL 355ML','6 X $109.00','NOV 2022  (2).png','2022-11-05','2022-11-15',NULL,0,17,'2022-11-05 11:08:14','2022-11-05 11:08:14'),(232,6,'CERVEZA MODELO ESPECIAL CRISTAL 355 ML','6 X $109.00','NOV 2022  (3).png','2022-11-05','2022-11-30',NULL,0,17,'2022-11-05 11:09:32','2022-11-05 11:09:32'),(233,6,'CERVEZA CORONA LIGHT BOTE 355ML','6 x $102.00','NOV 2022  (4).png','2022-11-05','2022-11-13',NULL,0,17,'2022-11-05 11:11:38','2022-11-14 10:42:21'),(234,6,'CERVEZA CORONA  BOTE 355ML','6 X $102.00','NOV 2022  (5).png','2022-11-05','2022-11-13',NULL,0,17,'2022-11-05 11:12:13','2022-11-14 10:37:16'),(235,6,'CERVEZA MODELO ESPECIAL LATON 473 ML','2 X$42.00','NOV 2022  (7).png','2022-11-05','2022-11-13',NULL,0,17,'2022-11-05 11:14:00','2022-11-14 10:36:33'),(236,6,'CERVEZA VICTORIA LATON 473ML','2 X $42.00','NOV 2022  (6).png','2022-11-05','2022-11-13',NULL,0,17,'2022-11-05 11:15:16','2022-11-14 10:36:00'),(237,6,'CERVEZA MODELO NOCHE ESPECIAL 355ML','3 X $53.00','NOV 2022  (9).png','2022-11-05','2022-11-30',NULL,0,17,'2022-11-05 11:16:27','2022-11-05 11:16:27'),(238,6,'AGUA RIFADA CORONA SABORES 355ML','1 X $21.00','NOV 2022  (1).png','2022-11-05','2022-11-30',NULL,0,17,'2022-11-05 11:17:23','2022-11-05 11:17:23'),(239,6,'HOLANDA MAGNUM 90/ 100 ML  CLASICA/ ALMENDRA','1 X $30.00','NOV 2022  (21).png','2022-11-05','2022-11-30',NULL,0,4,'2022-11-05 11:19:17','2022-11-05 11:19:17'),(240,6,'SUAVICREMAS 102GR SABORES','1 X $15.00','NOV 2022  (17).png','2022-11-05','2022-11-30',NULL,0,6,'2022-11-05 11:20:31','2022-11-05 11:20:31'),(241,6,'YOGURT LALA 220/250 GR SABORES','2 X $27.00','NOV 2022  (16).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 11:34:44','2022-11-05 11:34:44'),(242,6,'PAN BIMBO TOSTADO 210GR + LECHERITA NESTLE 100GR','combo $40.00','NOV 2022  (41).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 11:37:40','2022-11-05 11:37:40'),(243,6,'LECHE YOMI LALA 190ML CHOCOLATE + BARRA BRAN FRUT 58GR','COMBO $23.00','NOV 2022  (40).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 11:54:41','2022-11-05 11:54:41'),(244,6,'CHIPS 60GR JALAPEÑO + COCA COLA 600ML','COMBO $35.00','NOV 2022  (39).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:01:21','2022-11-05 12:01:21'),(245,6,'SABRITAS PAPA 42/45GR SABORES','2 X $32.00','NOV 2022  (15).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:02:39','2022-11-05 12:02:39'),(246,6,'NESTLE 16 ONZAS SABORES + GALLETAS OREO 45.6GR','COMBO $31.00','NOV 2022  (38).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:05:08','2022-11-05 12:05:08'),(247,6,'HOT DOG + COCA COLA CHOBBY 355ML','COMBO $25.00','NOV 2022  (37).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:06:07','2022-11-05 12:06:07'),(248,6,'ICE SLUSH 20 OZ SABORES','2 X $55.00','NOV 2022  (20).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:07:34','2022-11-05 12:07:34'),(249,6,'NESCAFE 8 OZ SABORES','2 X $29.00','NOV 2022  (14).png','2022-11-05','2022-11-30',NULL,0,16,'2022-11-05 12:09:13','2022-11-05 12:09:13'),(250,6,'CERVEZA CORONA LIGHT BOTE 355ML','6 X $108.00','correcion nov 22 26 (1).png','2022-11-15','2022-11-30',NULL,0,17,'2022-11-15 13:53:41','2022-12-01 13:57:59'),(251,6,'CERVEZA CORONA  BOTE 355ML','6 X $108.00','correcion nov 22 26 (2).png','2022-11-15','2022-11-30',NULL,0,17,'2022-11-15 13:54:29','2022-12-01 13:57:48'),(252,6,'CERVEZA CORONA LATON 473 ML','2 X $44.00','correcion nov 22 26 (5).png','2022-11-15','2022-11-30',NULL,0,17,'2022-11-15 13:55:43','2022-12-01 13:57:34'),(253,6,'CERVEZA VICTORIA LATON 473ML','2 X $44.00','correcion nov 22 26 (3).png','2022-11-15','2022-11-30',NULL,0,17,'2022-11-15 13:57:55','2022-12-01 13:57:23'),(255,6,'DETERGENTE AXION LIMON 500 GR','$25.00','DIC 22  (4).png','2022-12-01','2022-12-31',NULL,0,11,'2022-12-01 14:08:31','2022-12-01 14:09:10'),(256,6,'PASTA DENTAL COLGATE TRIPLE ACCION 75ML','A SOLO $20.00','DIC 22  (13).png','2022-12-01','2022-12-31',NULL,0,10,'2022-12-01 14:11:40','2022-12-01 14:11:40'),(257,6,'SHAMPOO SAVILE SABILA 180ML','$17.00','DIC 22  (10).png','2022-12-01','2022-12-31',NULL,0,10,'2022-12-01 14:12:56','2022-12-01 14:12:56'),(258,6,'LECHE NUTRI 1 LITRO','$17.50','DIC 22  (2).png','2022-12-01','2022-12-31',NULL,0,1,'2022-12-01 14:15:35','2022-12-01 14:15:35'),(259,6,'SALSA VALENTINA 350/370 ML','$16.00','DIC 22  (3).png','2022-12-01','2022-12-31',NULL,0,1,'2022-12-01 14:17:12','2022-12-01 14:17:12'),(260,6,'TE MC CORMICK MANZANILLA O LIMÓN','$25.00','DIC 22  (14).png','2022-12-01','2022-12-31',NULL,0,1,'2022-12-01 14:19:40','2022-12-01 14:19:40'),(261,6,'CREMA COFFE MATE 160 GR','$39.00','DIC 22  (16).png','2022-12-01','2022-12-31',NULL,0,1,'2022-12-01 14:21:11','2022-12-01 14:21:11'),(262,6,'CAFÉ OLE 281 SABORES','$29.00','DIC 22  (1).png','2022-12-01','2022-12-31',NULL,0,2,'2022-12-01 14:23:32','2022-12-01 14:23:32'),(263,6,'HOLANDA PALETA CONEJO TURIN 70 ML','$38.00','DIC 22  (22).png','2022-12-01','2022-12-31',NULL,0,4,'2022-12-01 14:25:09','2022-12-01 14:25:09'),(264,6,'CHOCO MILK BOLSA 160 GR','$25.00','DIC 22  (11).png','2022-12-01','2022-12-31',NULL,0,1,'2022-12-01 14:26:42','2022-12-01 14:26:42'),(265,6,'GALLETA CHOKIS 84/90 GR','2 X $30.00','DIC 22  (5).png','2022-12-01','2022-12-31',NULL,0,6,'2022-12-01 14:28:14','2022-12-01 14:28:14'),(266,6,'KINDER DELICE 29/42 GR','$16.00','DIC 22  (15).png','2022-12-01','2022-12-31',NULL,0,13,'2022-12-01 14:32:13','2022-12-01 14:32:13'),(267,6,'PALETA XTREME BUBALOO 16.5/20.5 GR','$12.00','DIC 22  (19).png','2022-12-01','2022-12-31',NULL,0,13,'2022-12-01 14:33:53','2022-12-01 14:33:53'),(268,6,'REFRESCO COCA COLA 2.5 L RETORNABLE','A SOLO $29.00','DIC 22  (12).png','2022-12-01','2022-12-31',NULL,0,2,'2022-12-01 14:34:59','2022-12-01 14:34:59'),(269,6,'SUERO ELECTROLIT 625 ML','3 x $59.00','DIC 22  (20).png','2022-12-01','2022-12-31',NULL,0,2,'2022-12-01 16:52:21','2022-12-01 16:52:21'),(270,6,'SABRITAS PAPA 170/171GR SABORES','2 x $95.00','DIC 22  (21).png','2022-12-01','2022-12-31',NULL,0,3,'2022-12-01 17:10:33','2022-12-01 17:10:33'),(271,6,'CERVEZA NEGRA MODELO 355 ML','6 X $109.00','DIC 22  (39).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:17:38','2022-12-29 12:57:36'),(272,6,'CEVEZA MODELO ESPECIAL CRISTAL 355 ML','6 X $109.00','DIC 22  (38).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:18:44','2022-12-29 12:58:08'),(273,6,'CERVEZA CORONA LIGHT BOTE 355 ML','6 X $108.00','DIC 22  (37).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:19:44','2022-12-29 12:58:31'),(274,6,'CERVEZA CORONA EXTRA BOTE 355 ML','6 X $108.00','DIC 22  (36).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:21:00','2022-12-29 12:57:50'),(275,6,'WHISKY RED LABEL 700 ML + BRILLANTE MINERAL 2 LT + HIELO 5KG','COMBO $385.00','DIC 22  (28).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:23:21','2022-12-01 17:23:21'),(276,6,'WHISKY BLACK AND WHITE 700 ML + BRILLANTE MINERAL','$235.00','DIC 22  (27).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:24:35','2022-12-01 17:24:35'),(277,6,'VODKA ABSOLUT AZUL 750 ML + JUGO JUMEX TETRAPACK','1 X $287.00','DIC 22  (26).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:26:38','2022-12-01 17:26:38'),(278,6,'VODKA SMIRNOFF TAMARINDO 750 ML + JUGO JUMEX TETRAPACK','1 X $286.00','DIC 22  (25).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:27:49','2022-12-01 17:27:49'),(279,6,'RON BACARDI 750 ML','1 X $245.00','DIC 22  (42).png','2022-12-01','2022-12-31',NULL,0,8,'2022-12-01 17:29:35','2022-12-01 17:29:35'),(280,6,'CERVEZA CORONA MEGAFAMILIAR 1.2 LT','2 X $72.00','MEGA CORONA DIC 2022.png','2022-12-02','2022-12-16',NULL,0,17,'2022-12-01 17:33:37','2022-12-17 10:29:19'),(282,6,'CERVEZA CORONA EXTRA 355 ML VIDRIO','A SOLO $29.00','DIC 22  (40).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:36:23','2022-12-29 12:58:52'),(283,6,'CERVEZA CORONA EXTRA 473 ML','2 X $44.00','DIC 22  (33).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:40:18','2022-12-29 12:59:07'),(284,6,'CERVEZA VICTORIA LATON 473 ML','2 X $44.00','DIC 22  (32).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:41:54','2022-12-29 12:56:03'),(285,6,'CERVEZA MODELO ESPECIAL LATON 473ML','2 X $44.00','DIC 22  (31).png','2022-12-01','2022-12-30',NULL,0,17,'2022-12-01 17:43:03','2022-12-29 12:55:44'),(286,6,'BEBIDA CARIBE COOLER 300 ML','5 PIEZAS X $98.00','DIC 22  (24).png','2022-12-01','2022-12-31',NULL,0,2,'2022-12-01 17:49:24','2022-12-01 17:49:24'),(287,6,'ENERGETIZANTE VOLT 473 ML PRESENTACIONES','2 X $35.00','DIC 22  (18).png','2022-12-01','2022-12-31',NULL,0,2,'2022-12-01 17:51:05','2022-12-01 17:51:05'),(288,6,'VINO BOONES 750 ML','1 X $64.00','DIC 22  (29).png','2022-12-01','2022-12-14',NULL,0,8,'2022-12-01 17:52:00','2022-12-15 16:49:29'),(289,6,'VINO SINSET 750 ML','2 PIEZAS X $120.00','DIC 22  (41).png','2022-12-01','2022-12-31',NULL,0,8,'2022-12-01 17:52:50','2022-12-01 17:52:50'),(290,6,'CHIPS 60GR JALAPEÑO + COCA COLA 600ML','COMBO $35.00','DIC 22  (8).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:54:07','2022-12-01 17:54:07'),(291,6,'HOT DOG + COCA COLA CHOBBY 355ML','COMBO $25.00','DIC 22  (6).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:55:29','2022-12-01 17:55:29'),(292,6,'ICE SLUSH 20 OZ SABORES','2 X $55.00','DIC 22  (17).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:56:26','2022-12-01 17:56:26'),(293,6,'HOT DOG + BOING 250 ML','A SOLO $18.00','DIC 22  (7).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:58:06','2022-12-01 17:58:06'),(294,6,'TRIKI TRAKES 85G + NESTLE 16 OZ','A SOLO $39.00','dic 2022.png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 17:59:23','2022-12-15 19:40:17'),(295,6,'CERVEZA MODELO NOCHE ESPECIAL 355 ML NR','3 X $53.00','DIC 22  (30).png','2022-12-01','2022-12-31',NULL,0,17,'2022-12-01 18:01:58','2022-12-01 18:01:58'),(296,6,'SIDRA CAMPANARIO ROSADA 700ML + 2 CERVEZA MODELO NOCHE ESPECIAL CRISTAL 355 ML','COMBO $120.00','DIC 22  (23).png','2022-12-01','2022-12-31',NULL,0,16,'2022-12-01 18:03:36','2022-12-01 18:03:36'),(297,6,'POUCH WHISKAS 85GR PRESENTACIONES','Llévatelo por $45.00','DIC 2 2022 (3).png','2022-12-02','2022-12-31',NULL,0,14,'2022-12-02 13:46:37','2022-12-02 13:46:37'),(298,6,'POUCH PEDIGREE 100 GR PRESENTACIONES','1 x $45.00','DIC 2 2022 (2).png','2022-12-02','2022-12-31',NULL,0,14,'2022-12-02 13:47:25','2022-12-02 13:47:25'),(299,6,'CEREAL KELLOGS CORN FLAKES 150 GR','1 X $27.00','DIC 2 2022 (11).png','2022-12-02','2022-12-31',NULL,0,1,'2022-12-02 13:52:29','2022-12-02 13:52:29'),(300,6,'VINAGRE BLANCO 500 ML','A SOLO $13.00','DIC 2 2022 (9).png','2022-12-02','2022-12-31',NULL,0,1,'2022-12-02 13:54:06','2022-12-02 13:54:06'),(301,6,'CHOCOLATE ABUELITA 1 PZ','A SOLO $16.00','DIC 2 2022 (12).png','2022-12-02','2022-12-31',NULL,0,1,'2022-12-02 13:57:14','2022-12-02 13:57:14'),(302,6,'1 PZ MANTEQUILLA LALA 90 GR','LLEVATELA POR $17.00','DIC 2 2022 (4).png','2022-12-02','2022-12-31',NULL,0,1,'2022-12-02 13:58:18','2022-12-02 13:58:18'),(303,6,'GALLETAS MARIAS 170 / 177 GR','$15.00','DIC 2 2022 (5).png','2022-12-02','2022-12-31',NULL,0,6,'2022-12-02 13:59:35','2022-12-02 13:59:35'),(304,6,'VICK VAPORUB 12 GR','$33.00','DIC 2 2022 (8).png','2022-12-02','2022-12-31',NULL,0,9,'2022-12-02 14:00:36','2022-12-02 14:00:36'),(305,6,'ENERGETIZANTE VOLT 473ML SABORES','A SOLO $39.00','DIC 2 2022 (10).png','2022-12-02','2022-12-31',NULL,0,2,'2022-12-02 14:05:17','2022-12-02 14:05:17'),(306,6,'VICTORIA MEGAFAMILIAR 1.2 LT','$72.00','DIC 2 2022 (1).png','2022-12-02','2022-12-16',NULL,0,17,'2022-12-02 14:06:33','2022-12-17 10:29:33'),(307,6,'JUMEX UNICO FRESCO ARANDANO 1 LT','2 X $65.00','DIC 2 2022 (6).png','2022-12-02','2022-12-31',NULL,0,2,'2022-12-02 14:07:31','2022-12-02 14:07:31'),(308,6,'NACHOS PLUS PREPARADOS','2 X $25.00','DIC 2 2022 (7).png','2022-12-02','2022-12-31',NULL,0,7,'2022-12-02 14:08:48','2022-12-02 14:08:48'),(309,6,'DETERGENTE ARIEL ORIGINAL 250 GR','1 PIEZA X $10.00','ENERO 2023 5 (13).png','2023-01-01','2023-01-31',NULL,0,11,'2022-12-29 10:55:14','2023-01-09 10:55:36'),(310,6,'JABON ZOTE ROSA PASTA 200GR','1 X $12.00','ENERO 2023 5 (14).png','2023-01-01','2023-01-31',NULL,0,11,'2022-12-29 10:57:31','2023-01-09 10:56:20'),(311,6,'DETERGENTE AXION LIMON 500 GR','1 X $25.00','ENERO 2023 5 (17).png','2023-01-01','2023-01-31',NULL,0,11,'2022-12-29 11:03:55','2023-01-09 10:56:54'),(312,6,'SERVILLETA DELSEY 100 PIEZAS','1 X $11.00','ENERO 2023 5 (16).png','2023-01-01','2022-12-31',NULL,0,12,'2022-12-29 11:08:04','2023-01-09 10:57:22'),(313,6,'ENJUAGUE BUCAL LISTERINE 250 ML','FRESH MMINT/COOL\r\n1 X $49.00','ENERO 2023 5 (63).png','2023-01-01','2023-01-19',NULL,0,10,'2022-12-29 11:09:49','2023-01-20 13:48:28'),(314,6,'SHAMPOO SAVILE SABILA 180ML','1 X $17.00','ENERO 2023 5 (1).png','2023-01-01','2023-01-31',NULL,0,10,'2022-12-29 11:10:51','2023-01-09 10:58:59'),(315,6,'ACEITE MENEN 50ML','1 X $26.00','ENERO 2023 5 (3).png','2023-01-01','2023-01-31',NULL,0,12,'2022-12-29 11:12:49','2023-01-09 10:59:22'),(316,6,'CREMA CORPORAL HINDS 90 ML','1 X $18.00','ENERO 2023 5 (5).png','2023-01-01','2023-01-31',NULL,0,10,'2022-12-29 11:14:00','2023-01-09 10:59:50'),(317,6,'NESCAFE SOBRE 20/22GR CAPPUCCINO O MOKACCINO','1 X $10.00','ENERO 2023 5 (6).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-29 12:07:41','2023-01-09 11:00:09'),(318,6,'ATUN TUNY 140/170 GR','2 X $32.00\r\nAPLICA EN ACEITE Y AGUA','ENERO 2023 5 (10).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-29 12:09:03','2023-01-09 11:02:28'),(319,6,'SALCHICHA NUTRI PAVO 250GR','1 X $19.00','ENERO 2023 5 (15).png','2023-01-01','2023-01-31',NULL,0,18,'2022-12-29 12:14:21','2023-01-09 11:02:56'),(320,6,'MERMELADA MCCORNICK 270 GR','FRESA Y PIÑA  1 X $27.00','ENERO 2023 5 (12).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-29 12:18:56','2023-01-09 11:03:25'),(321,6,'COCA COLA 2.5 LT RETORNABLE','1 x $29.00','ENERO 2023 5 (2).png','2023-01-01','2023-01-31',NULL,0,2,'2022-12-29 12:22:23','2023-01-09 11:11:14'),(322,6,'MANTECADAS BIMBO  6 PZAS','VAINILLA, NUEZ, CHISPAS \r\n1 X $25.00','ENERO 2023 5 (11).png','2023-01-01','2023-01-31',NULL,0,6,'2022-12-29 12:28:32','2023-01-09 11:11:47'),(323,6,'GALLETA EMPERADOR SENZO 93GR','1 X $16.00','ENERO 2023 5 (4).png','2023-01-01','2023-01-19',NULL,0,6,'2022-12-29 12:32:22','2023-01-20 13:47:22'),(324,6,'JUGO BOING 1 LT','1 X $28.00','ENERO 2023 5 (7).png','2023-01-01','2023-01-31',NULL,0,2,'2022-12-29 12:36:14','2023-01-09 11:12:10'),(325,6,'HOLANDA PALETA CHOCO MILK 35 ML','2 X $22.00','ENERO 2023 5 (8).png','2023-01-01','2023-01-31',NULL,0,4,'2022-12-29 12:44:02','2023-01-09 11:12:57'),(326,6,'NACHOS PREPARADOS','2 X $25.00','ENERO 2023 5 (9).png','2023-01-01','2023-01-31',NULL,0,7,'2022-12-29 12:46:33','2023-01-09 11:13:20'),(327,6,'BEBIDA VIÑA REAL 330ML','DURAZNO, PIÑA COLADA, BLUE BERRY, MANGO Y MARACUYA\r\n3 X $68.00','ENERO 2023 5 (62).png','2023-01-01','2023-01-31',NULL,0,2,'2022-12-29 12:50:43','2023-01-09 12:05:17'),(328,6,'PILA DURACELL AA','LLEVA 2 X $39.00','ENERO 2023 5 (18).png','2023-01-01','2023-01-31',NULL,0,12,'2022-12-29 12:51:47','2023-01-09 12:23:10'),(329,6,'PILA DURACELL AAA','LLEVA 2 X $39.00','ENERO 2023 5 (19).png','2023-01-01','2023-01-31',NULL,0,12,'2022-12-29 12:53:09','2023-01-09 12:22:27'),(330,6,'PILA PANASONIC EVOLTA AA','LLEVA 2 X $29.00','ENERO 2023 5 (20).png','2023-01-01','2023-01-31',NULL,0,12,'2022-12-29 12:54:18','2023-01-09 12:19:50'),(331,6,'PILA PANASONIC EVOLTA AAA','2 X $29.00.','ENERO 2023 5 (21).png','2023-01-01','2023-01-31',NULL,0,12,'2022-12-30 10:08:45','2023-01-09 12:19:32'),(332,6,'LIMPIADOR CLARASOL 1LT','1 X $10.00','ENERO 2023 5 (23).png','2023-01-01','2023-01-31',NULL,0,11,'2022-12-30 10:10:39','2023-01-09 10:55:54'),(333,6,'ACIDO MURIATICO SULTAN LIMON 400ML','1 X $15.00','ENERO 2023 5 (24).png','2023-01-01','2023-01-31',NULL,0,11,'2022-12-30 10:11:57','2023-01-09 10:57:45'),(334,6,'POUCH WHISKAS 85GR PRESENTACIONES','4 X $45.00','ENERO 2023 5 (40).png','2023-01-01','2023-01-31',NULL,0,14,'2022-12-30 10:17:15','2023-01-09 11:01:36'),(335,6,'POUCH PEDIGREE 100 GR PRESENTACIONES','4 x $45.00','ENERO 2023 5 (39).png','2023-01-01','2023-01-31',NULL,0,14,'2022-12-30 10:18:20','2023-01-09 11:02:02'),(336,6,'PASTA DENTAL COLGATE TRIPLE ACCION 75ML','1 x $20.00','ENERO 2023 5 (26).png','2023-01-01','2023-01-31',NULL,0,10,'2022-12-30 10:20:51','2023-01-09 11:00:43'),(337,6,'GELATINA D GARI PRESENTACIÓN AGUA 120GR','2 X $20.00','ENERO 2023 5 (22).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-30 10:22:18','2023-01-09 11:03:52'),(338,6,'NUTRI LECHE 1LT','1 X $17.50','ENERO 2023 5 (34).png','2023-01-01','2023-01-31',NULL,0,5,'2022-12-30 10:23:04','2023-01-09 16:44:07'),(339,6,'CHOCO MILK BOLSA 160 GR','1 X $25.00','ENERO 2023 5 (27).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-30 10:26:59','2023-01-09 11:08:05'),(340,6,'SALSA VALENTINA 350/370 ML + SALSA CAPSUP CLEMENTE 340 GR','COMBO $32.00','ENERO 2023 5 (54).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 10:29:26','2023-01-09 16:44:45'),(341,6,'MANTEQUILLA LALA 90 GR','1 X $17.00','ENERO 2023 5 (25).png','2023-01-01','2023-01-31',NULL,0,1,'2022-12-30 10:30:48','2023-01-09 11:09:58'),(342,6,'VODKA ABSOLUT AZUL 750ML+ JUGO JUMEX 1 LT','COMBO $287.00','ENERO 2023 5 (60).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 10:36:37','2023-01-09 11:17:12'),(343,6,'WHISKY BLACK AND WHITE 700ML + BRILLANTE MINERAL 2LT','COMBO $235.00','ENERO 2023 5 (61).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 10:37:47','2023-01-09 11:17:42'),(344,6,'LICOR RANCHO ESCONDIDO 750 ML + BRILLANTE TORONJA 2LT','COMBO $95.00','ENERO 2023 5 (59).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 10:39:42','2023-01-09 11:18:29'),(345,6,'SUERO ELECTROLIT 625 ML','3 X $59.00','ENERO 2023 5 (29).png','2023-01-01','2023-01-31',NULL,0,2,'2022-12-30 10:41:34','2023-01-09 11:52:04'),(346,6,'ENERGETIZANTE VIVE 100 500ML','2 X $29.00','ENERO 2023 5 (30).png','2023-01-01','2023-01-31',NULL,0,2,'2022-12-30 10:48:00','2023-01-09 11:52:27'),(347,6,'HUEVO KINDER 20 GR','1 X $23.00','ENERO 2023 5 (28).png','2023-01-01','2023-01-31',NULL,0,13,'2022-12-30 10:54:50','2023-01-09 11:16:24'),(348,6,'DORITOS SABORES','NACHOS, DIABLO, PIZZEROLA, FLAMIN HOT, 3DS, INCOGNITA, DIANMITA\r\n2 X $32.00','ENERO 2023 5 (32).png','2023-01-01','2023-01-19',NULL,0,3,'2022-12-30 10:57:12','2023-01-20 13:46:52'),(349,6,'PALOMITAS ACT II','2 X $26.00','ENERO 2023 5 (31).png','2023-01-01','2023-01-31',NULL,0,3,'2022-12-30 10:58:08','2023-01-09 11:54:24'),(350,6,'RANCHERITOS 60 GR','1 X $12.00','ENERO 2023 5 (33).png','2023-01-01','2023-01-19',NULL,0,3,'2022-12-30 11:00:36','2023-01-20 13:46:33'),(351,6,'GALLETA CHOKIS 84/90 GR','2 X $30.00','ENERO 2023 5 (37).png','2023-01-01','2023-01-31',NULL,0,6,'2022-12-30 11:03:04','2023-01-09 11:57:32'),(352,6,'SUBMARINOS MARINELA 105 GR','2 X $34.00','ENERO 2023 5 (36).png','2023-01-01','2023-01-31',NULL,0,6,'2022-12-30 11:04:09','2023-01-09 11:58:01'),(353,6,'GALLETA CREMAX NIEVE 90GR','2 X $31.00','ENERO 2023 5 (38).png','2023-01-01','2023-01-31',NULL,0,6,'2022-12-30 11:05:40','2023-01-09 11:58:30'),(354,6,'YOGURT LALA GO','2 X $34.00','ENERO 2023 5 (35).png','2023-01-01','2023-01-31',NULL,0,5,'2022-12-30 11:27:33','2023-01-09 11:59:24'),(355,6,'ICEE SLUSH SABORES 20 ONZAS','2 X $55.00','ENERO 2023 5 (42).png','2023-01-01','2023-01-31',NULL,0,7,'2022-12-30 11:29:11','2023-01-09 12:00:05'),(356,6,'COCA COLA 600 + CHIPS JALAPEÑO / SAL','COMBO $35.00','ENERO 2023 5 (56).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 11:31:11','2023-01-09 12:02:27'),(357,6,'COCA COLA 355ML LATA + CHEETOS TORCIDITOS 52GR','COMBO $29.00','ENERO 2023 5 (55).png','2023-01-01','2023-01-19',NULL,0,16,'2022-12-30 11:33:25','2023-01-20 13:45:19'),(358,6,'COCA COLA CHOBBY 355ML PET + HOT DOG','COMBO A SOLO $25.00','ENERO 2023 5 (58).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 11:34:43','2023-01-09 12:04:51'),(359,6,'NESTLE SABORES 16 ONZAS + NEGRITO BIMBO','COMBO A SOLO  $37.00','ENERO 2023 5 (53).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 11:36:55','2023-01-09 12:04:18'),(360,6,'JUGO BOING 250ML +HOT DOG','1 X$18.00','ENERO 2023 5 (57).png','2023-01-01','2023-01-31',NULL,0,16,'2022-12-30 11:38:02','2023-01-09 12:03:46'),(361,6,'CERVEZA CORONA BOTE 355 ML','6 X $108.00','ENERO 2023 5 (45).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:15:56','2023-01-09 11:19:03'),(362,6,'CERVEZA CORONA LIGHT BOTE 355 ML','6 X $108.00','ENERO 2023 5 (46).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:22:12','2023-01-09 11:19:37'),(363,6,'CERVEZA CORONA VIDRIO 355ML','2 X  $29.00','ENERO 2023 5 (47).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:23:20','2023-01-09 11:19:59'),(364,6,'CERVEZA VICTORIA VIDRIO 355 ML','2 X $29.00','ENERO 2023 5 (48).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:26:22','2023-01-09 11:22:30'),(365,6,'CERVEZA VICTORIA MEGAFAMILIAR 1.2 LT','2 X $75.00','ENERO 2023 5 (49).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:28:09','2023-01-09 11:22:54'),(366,6,'CERVEZA CORONA MEGAFAMILIAR 1.2 LT','2 X $75.00','ENERO 2023 5 (50).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:28:52','2023-01-09 11:23:19'),(367,6,'CERVEZA MODELO LATON 473 ML','2 X $44.00','ENERO 2023 5 (43).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:29:51','2023-01-09 11:23:51'),(368,6,'CERVEZA VICTORIA LATON 473 ML','2 X $44.00','ENERO 2023 5 (44).png','2023-01-02','2023-01-15',NULL,0,17,'2023-01-02 17:30:43','2023-01-09 11:24:13'),(369,6,'DETERGENTE ARIEL ORIGINAL 250 GR','1 X $10.00','01 PROM FEB 2023 (55).png','2023-02-01','2023-02-28',NULL,0,11,'2023-01-30 10:51:54','2023-01-30 10:51:54'),(370,6,'LIMPIADOR PINOL 500ML','1 X $18.00','02 PROM FEB 2023 (54).png','2023-02-01','2023-02-28',NULL,0,11,'2023-01-30 10:53:08','2023-01-30 10:53:08'),(371,6,'LIMPIADOR CLARASOL 1LT','1 X $10.00','03 PROM FEB 2023 (53).png','2023-02-01','2023-02-28',NULL,0,11,'2023-01-30 12:31:12','2023-01-30 12:31:12'),(372,6,'ACIDO MURIATICO SULTAN LIMON 400ML','1 X $15.00','04 PROM FEB 2023 (1).png','2023-02-01','2023-02-28',NULL,0,11,'2023-01-30 12:31:58','2023-01-30 12:31:58'),(373,6,'ARROZ ITALRISO  1KG','1 PIEZA X $ 26.00','05 PROM FEB 2023 (28).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:34:31','2023-01-30 12:34:31'),(374,6,'ACEITE 123 500ML','1 X $28.00','06 PROM FEB 2023 (26).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:35:28','2023-01-30 12:35:28'),(375,6,'AVENA 3 MINUTOS 400GR','1 X $31.00','07 PROM FEB 2023 (31).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:36:38','2023-01-30 12:36:38'),(376,6,'SAL LA FINA 1KG','1 X $20.00','07 PROM FEB 2023 (51).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:37:35','2023-01-30 12:37:35'),(377,6,'GELATINA D\'GARI 120 GR','2 X $20.00','08 PROM FEB 2023 (47).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:39:05','2023-01-30 12:39:05'),(378,6,'ATUN TUNY 140/170 GR','2 X $32.00','09 PROM FEB 2023 (38).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:40:08','2023-01-30 12:40:08'),(379,6,'JAMON NUTRI DELI AMERICANO 250 GR','A SOLO $25.00','10 PROM FEB 2023 (25).png','2023-02-01','2023-02-28',NULL,0,18,'2023-01-30 12:45:53','2023-01-30 12:45:53'),(380,6,'NESCAFE SOBRE 20/22 GR','1 X $10.00','11 PROM FEB 2023 (27).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:48:20','2023-01-30 12:48:20'),(381,6,'SALSA VALENTINA 350/370 ML + SALSA CAPSUP CLEMENTE 340 GR','COMBO POR $32.00','12 PROM FEB 2023 (7).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:49:06','2023-01-30 12:49:06'),(382,6,'MERMELADA MCCORNICK 270 GR','1 X $27.00','13 PROM FEB 2023 (50).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:50:29','2023-01-30 12:50:29'),(383,6,'PURE DE TOMATE DEL FUERTE 210GR + SOPA ITALPASTA SPAGHETTI 200GR','COMBO A SOLO $15.00','14 PROM FEB 2023 (6).png','2023-02-01','2023-02-28',NULL,0,1,'2023-01-30 12:52:23','2023-01-30 12:52:23'),(384,6,'ALPURA LECHE 200 ML','1 X $19.00','15 PROM FEB 2023 (35).png','2023-02-01','2023-02-28',NULL,0,5,'2023-01-30 12:56:07','2023-01-30 12:56:07'),(385,6,'YOGURT LALA GO','2 X $34.00','16 PROM FEB 2023 (32).png','2023-02-01','2023-02-28',NULL,0,5,'2023-01-30 12:57:16','2023-01-30 12:57:16'),(386,6,'YOGURT NUTRI 450 GR','1 X $15.00','17 PROM FEB 2023 (29).png','2023-02-01','2023-02-28',NULL,0,5,'2023-01-30 12:58:32','2023-01-30 12:58:32'),(387,6,'POUCH PEDIGREE 100 GR SABORES','4 X $45.00','18 PROM FEB 2023 (39).png','2023-02-01','2023-02-28',NULL,0,14,'2023-01-30 12:59:55','2023-01-30 12:59:55'),(388,6,'POUCH WHISKAS 85GR PRESENTACIONES','4 X $45.00','19 PROM FEB 2023 (40).png','2023-02-01','2023-02-28',NULL,0,14,'2023-01-30 13:00:38','2023-01-30 13:00:38'),(389,6,'CHICLE HUBBA HUBBA 56.7 GR','1 X $27.00','20 PROM FEB 2023 (52).png','2023-02-01','2023-02-28',NULL,0,13,'2023-01-30 13:03:06','2023-01-30 13:03:06'),(390,6,'HUEVO KINDER 20 GR','1 X $23.00','21 PROM FEB 2023 (30).png','2023-02-01','2023-02-28',NULL,0,13,'2023-01-30 13:04:18','2023-01-30 13:04:18'),(391,6,'CORNETTO HOLANDA 120ML','2 X $59.00','22 PROM FEB 2023 (37).png','2023-02-01','2023-02-28',NULL,0,4,'2023-01-30 16:50:58','2023-01-30 16:50:58'),(392,6,'VODKA WYBOROWA 750 ML','1 X $165.00','23 PROM FEB 2023 (9).png','2023-02-01','2023-02-28',NULL,0,8,'2023-01-30 16:52:19','2023-01-30 16:52:19'),(393,6,'VINO TINTO EL CIRCO SEMIDULCE 750 ML','1 X $164','24 PROM FEB 2023 (10).png','2023-02-01','2023-02-28',NULL,0,8,'2023-01-30 16:53:42','2023-01-30 16:53:42'),(394,6,'LICOR RANCHO ESCONDIDO 750 ML + BRILLANTE TORONJA 2LT','A SOLO $95.00','25 PROM FEB 2023 (2).png','2023-02-01','2023-02-28',NULL,0,8,'2023-01-30 17:07:43','2023-01-30 17:07:43'),(395,6,'CERVEZA NEGRA MODELO CRISTAL 355ML','6 X $119.00','26 PROM FEB 2023 (12).png','2023-02-01','2023-02-15',NULL,0,17,'2023-01-30 17:09:16','2023-01-30 17:09:16'),(396,6,'CERVEZA MODELO ESPECIAL CRISTAL 355 ML','6 X $119.00','27 PROM FEB 2023 (13).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:12:45','2023-01-30 17:12:45'),(397,6,'CERVEZA CORONA BOTE 355 ML','6 X $108.00','28 PROM FEB 2023 (15).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:16:15','2023-01-30 17:16:15'),(398,6,'CERVEZA CORONA LIGHT BOTE 355ML','6 X $108.00','29 PROM FEB 2023 (16).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:16:50','2023-01-30 17:16:50'),(399,6,'CERVEZA CORONA LATON 473 ML','4 X $85.00','30 PROM FEB 2023 (19).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:17:47','2023-01-30 17:17:47'),(400,6,'CERVEZA MODELO ESPECIAL LATON 473 ML','4 X $85.00','31 PROM FEB 2023 (18).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:19:01','2023-01-30 17:19:01'),(401,6,'CERVEZA VICTORIA LATON 473 ML','4 X $85.00','32 PROM FEB 2023 (17).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:20:43','2023-01-30 17:20:43'),(402,6,'CERVEZA VICTORIA MEGAFAMILIAR 1.2 LT','2 X $75.00','33 PROM FEB 2023 (20).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:24:02','2023-01-30 17:24:02'),(403,6,'CERVEZA CORONA MEGAFAMILIAR 1.2 LT','2 X $75.00','34 PROM FEB 2023 (21).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:24:38','2023-01-30 17:24:38'),(404,6,'CERVEZA VICTORIA VIDRIO 355 ML','2 X $29.50','35 PROM FEB 2023 (11).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:25:19','2023-01-30 17:25:19'),(405,6,'CERVEZA CORONA 355 ML VIDRIO','2 X $29.50','36 PROM FEB 2023 (14).png','2023-02-01','2023-02-28',NULL,0,17,'2023-01-30 17:26:20','2023-01-30 17:26:20'),(406,6,'BEBIDA SKYY 275 ML','3 X $84.00','37 PROM FEB 2023 (36).png','2023-02-01','2023-02-28',NULL,0,2,'2023-01-30 17:28:48','2023-01-30 17:28:48'),(407,6,'ENERGETIZANTE VIVE 100 500ML','2 X 29.00','38 PROM FEB 2023 (48).png','2023-02-01','2023-02-28',NULL,0,2,'2023-01-30 17:30:07','2023-01-30 17:30:07'),(408,6,'SUERO ELECTROLIT 625 ML','3 X $59.00','39 PROM FEB 2023 (49).png','2023-02-01','2023-02-28',NULL,0,2,'2023-01-30 17:31:43','2023-01-30 17:31:43'),(409,6,'REFRESCOS 600ML SABORES','2 X $30.00','40 PROM FEB 2023 (34).png','2023-02-01','2023-02-28',NULL,0,2,'2023-01-30 17:32:44','2023-01-30 17:32:44'),(410,6,'GALLETA CREMAX NIEVE 90GR','2 X $31.00','41 PROM FEB 2023 (42).png','2023-02-01','2023-02-28',NULL,0,6,'2023-01-30 17:35:23','2023-01-30 17:35:23'),(411,6,'MANTECADAS BIMBO  6 PZAS','1 X $25.00','42 PROM FEB 2023 (22).png','2023-02-01','2023-02-28',NULL,0,6,'2023-01-30 17:36:02','2023-01-30 17:36:02'),(412,6,'SUBMARINOS MARINELA 105 GR','2 X $34.00','43 PROM FEB 2023 (43).png','2023-02-01','2023-02-28',NULL,0,6,'2023-01-30 17:37:22','2023-01-30 17:37:22'),(413,6,'GALLETA TRIKI TRAKES 8P 68GR','2 X $30','44 PROM FEB 2023 (44).png','2023-02-01','2023-02-28',NULL,0,6,'2023-01-30 17:38:28','2023-01-30 17:38:28'),(414,6,'GALLETA PRINCIPE CHOCOLATE 85GR','2 X $30.00','45 PROM FEB 2023 (45).png','2023-02-01','2023-02-28',NULL,0,6,'2023-01-30 17:39:37','2023-01-30 17:39:37'),(415,6,'ICEE SLUSH SABORES 20 ONZAS','2 X $59.00','46 PROM FEB 2023 (33).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:41:01','2023-01-30 17:41:01'),(416,6,'PALOMITAS ACT II','2 x $26.00','47 FEB 2023 (41).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:43:21','2023-01-30 17:43:21'),(417,6,'HOT DOG + COCA COLA CHOBBY 355ML','A SOLO $25.00','48 PROM FEB 2023  (4).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:45:12','2023-01-30 17:45:12'),(418,6,'HOT DOG + BOING 250 ML','A SOLO $18.00','49 PROM FEB 2023 (5).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:46:36','2023-01-30 17:46:36'),(419,6,'CAPUCCINO SABORES + BARRITAS MARINELA  67 GR','A SOLO $37.00','50 PROM FEB 2023 (3).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:49:02','2023-01-30 17:49:02'),(420,6,'COCA COLA 355 ML + PALOMITAS ACT II','PROMOCIÓN EN $30.00','51 PROM FEB 2023 (8).png','2023-02-01','2023-02-28',NULL,0,7,'2023-01-30 17:50:31','2023-01-30 17:50:31'),(421,6,'CHOCOLATE FERRERO ROCHER/ RAFAELLO COCO 3PZAS','1 PAQUETE A $30.00','52 PROM FEB 2023 (23).png','2023-02-01','2023-02-28',NULL,0,13,'2023-01-30 17:52:12','2023-01-30 17:52:12'),(422,6,'CHOCOLATE HERSHEY´S','2 X $30.00','53 PROM FEB 2023 (24).png','2023-02-01','2023-02-28',NULL,0,13,'2023-01-30 17:53:17','2023-01-30 17:53:17'),(423,6,'CHOCOLATE KIT KAT 41.5 GR','2 X $30.00','54 PROM FEB 2023 (46).png','2023-02-01','2023-02-28',NULL,0,13,'2023-01-30 17:53:57','2023-01-30 17:53:57');
/*!40000 ALTER TABLE `publicoferts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsabilidadsocials`
--

DROP TABLE IF EXISTS `responsabilidadsocials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responsabilidadsocials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsabilidadsocials`
--

LOCK TABLES `responsabilidadsocials` WRITE;
/*!40000 ALTER TABLE `responsabilidadsocials` DISABLE KEYS */;
/*!40000 ALTER TABLE `responsabilidadsocials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_user` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,2,'2022-07-05 17:33:52','2022-07-11 13:39:49'),(3,3,'2022-07-05 19:29:38','2022-07-05 19:33:21'),(4,3,'2022-07-07 16:42:01','2022-07-07 17:57:21'),(5,3,'2022-07-07 16:42:57','2022-07-07 19:52:58'),(6,3,'2022-07-07 16:45:58','2022-07-07 16:45:58'),(7,3,'2022-07-07 16:47:26','2022-07-07 16:47:26'),(8,1,'2022-07-07 17:05:30','2022-07-07 17:05:30');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'RecursosHumanos',NULL,'2022-07-05 17:24:47','2022-07-05 17:24:47'),(2,'Administrador',NULL,'2022-07-05 17:24:47','2022-07-05 17:24:47'),(3,'Marketing',NULL,NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slidermains`
--

DROP TABLE IF EXISTS `slidermains`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `slidermains` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaInicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaFin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pagina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slidermains`
--

LOCK TABLES `slidermains` WRITE;
/*!40000 ALTER TABLE `slidermains` DISABLE KEYS */;
INSERT INTO `slidermains` VALUES (1,1,'BannerPrincipal',NULL,'inicio.jpg','2022-07-01','2024-02-29','\"[\\\"index\\\"]\"',NULL,NULL,'2022-07-05 18:09:02','2023-01-02 18:45:21'),(3,6,'ANIVERSARIO PLUS',NULL,'PORTADAS FACEBOOK  (10).png','2022-08-02','2022-08-31','\"[\\\"index\\\",\\\"promociones\\\"]\"',NULL,NULL,'2022-08-02 18:06:46','2022-08-02 18:07:55'),(5,6,'OCTUBRE 22 PORTADA',NULL,'PORTADAS FACEBOOK  (12).png','2022-10-05','2022-11-03','\"null\"',NULL,NULL,'2022-10-05 08:45:31','2022-11-04 12:36:30'),(6,6,'PORTADA NOVIEMBRE',NULL,'39.png','2022-11-04','2022-11-30','\"[\\\"promociones\\\"]\"',NULL,NULL,'2022-11-04 12:36:17','2022-11-04 12:37:07'),(7,6,'NAVIDAD',NULL,'PORTADA 2  NAVIDAD 22.png','2022-12-02','2023-01-01','\"[\\\"promociones\\\"]\"',NULL,NULL,'2022-12-02 18:01:10','2022-12-06 12:13:59'),(8,6,'DIA DE REYES',NULL,'PORTADA ENERO 2023.png','2023-01-02','2023-01-06','\"[\\\"promociones\\\"]\"',NULL,NULL,'2023-01-02 18:10:13','2023-01-07 12:55:39'),(9,6,'ENERO 2023 1',NULL,'324352849_529172192610008_2437886884814285668_n.jpg','2023-01-09','2023-01-31','\"[\\\"promociones\\\"]\"',NULL,NULL,'2023-01-09 12:28:54','2023-01-09 12:29:16'),(10,6,'PORTADA FEBRERO 2023',NULL,'PORTADAS FEB 2023.png','2023-02-01','2023-02-28','\"[\\\"promociones\\\"]\"',NULL,NULL,'2023-01-28 14:20:01','2023-01-28 14:20:01');
/*!40000 ALTER TABLE `slidermains` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spammers`
--

DROP TABLE IF EXISTS `spammers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `spammers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` int NOT NULL,
  `blocked_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spammers`
--

LOCK TABLES `spammers` WRITE;
/*!40000 ALTER TABLE `spammers` DISABLE KEYS */;
/*!40000 ALTER TABLE `spammers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `textoproductos`
--

DROP TABLE IF EXISTS `textoproductos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `textoproductos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `textoproductos`
--

LOCK TABLES `textoproductos` WRITE;
/*!40000 ALTER TABLE `textoproductos` DISABLE KEYS */;
/*!40000 ALTER TABLE `textoproductos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_celular_unique` (`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','sistemas@superplus24horas.com','9531551502','2022-07-05 17:24:47','$2y$10$HE79mtasSlr9OHtfAKJWJeYwJCKA7bzG2A5bwSyFzc2AmnUJlmFWi','94YIxUh1FJGauiJDlmHEvwK6OlqW7fqmwKUfJIiH3WuLZaIM84S1PvhCWjME','2022-07-05 17:24:47','2022-07-11 13:39:49'),(3,'Marketing','marketing@gmail.com','95315515023',NULL,'$2y$10$OT54IdZdO6TIF4sTbroczOL2AFJ3JUcPigotRfh36RkhJ1nJCzCP6',NULL,'2022-07-05 19:29:38','2022-07-05 19:33:21'),(4,'Carlos Rojas Rosario','carlos.marketing@superplus24horas.com','9531438749',NULL,'$2y$10$.Nm9kOkXH0xERKAnyQNb6.vEYCUqZaCpKwzcx/VqE9IZFddUFZ9jS',NULL,'2022-07-07 16:42:01','2022-07-07 17:57:21'),(5,'Alma Gabriela Primo Somera','analista@superplus24horas.com','9531615971',NULL,'$2y$10$vh45l3UtDS9NrMVY3yqiZ.AyiXss3k4QTfr8gLOKrUHkejVlsZ4SG',NULL,'2022-07-07 16:42:57','2022-07-07 19:52:58'),(6,'Ana Lidia Ramírez','mercadotecnia@superplus24horas.com','2224074257',NULL,'$2y$10$H3SnFOlO0DaMNJ8zWqIcI.dHy.E7SHJ7iLDEKEEdw05Z7d8dUSPT6',NULL,'2022-07-07 16:45:58','2022-07-07 16:45:58'),(7,'Wendy Lizet Elías Ramírez','wendy.mercadotecnia@superplus24horas.com','9531035070',NULL,'$2y$10$mZk04lWfPbTm0f5YuqdvUueRDNOn8s5F6rJNkPRIoRwoB11SyKIwO',NULL,'2022-07-07 16:47:26','2022-07-07 16:47:26'),(8,'Azucena Reyes González','rh@superplus24horas.com','9532297422',NULL,'$2y$10$IkrJulOAilgES58EpvczKOIvlMoLUbSZMLM8WvHbQbVJwF88NHite',NULL,'2022-07-07 17:05:30','2022-07-07 17:05:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vacantes`
--

DROP TABLE IF EXISTS `vacantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vacantes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vacantes`
--

LOCK TABLES `vacantes` WRITE;
/*!40000 ALTER TABLE `vacantes` DISABLE KEYS */;
INSERT INTO `vacantes` VALUES (2,8,'AUXILIAR DE TIENDA',NULL,'VACANTE.jpg',1,'2022-07-07 17:24:32','2022-07-07 17:24:32');
/*!40000 ALTER TABLE `vacantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-11 20:48:36
