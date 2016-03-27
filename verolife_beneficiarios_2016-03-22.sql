# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: verolife_beneficiarios
# Generation Time: 2016-03-22 21:50:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table beneficiarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `beneficiarios`;

CREATE TABLE `beneficiarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cadastrado_em` datetime NOT NULL,
  `atualizado_em` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `beneficiarios` WRITE;
/*!40000 ALTER TABLE `beneficiarios` DISABLE KEYS */;

INSERT INTO `beneficiarios` (`id`, `email`, `cpf`, `matricula`, `senha`, `cadastrado_em`, `atualizado_em`)
VALUES
	(1,'israel.consoli@qualirede.com.br','066.969.749-46','0010002000009009','+bOZY4Y3aJYlvTcUGJZDSDyR1YEy2SKPh2r+AShITvcLXnVamunaiQOLaXAwJH+D4uZhwGEE/5H+ryGBKbrL+Q==','2016-01-05 11:29:31',NULL),
	(2,'michelir.martins@hotmail.com','007.546.219-28','0010024000347002','meXSFX5gEk+cItQSrUxbk1Tz3GwVLBy/36y5boU4gOWVheJeau5SkWQIDejjbz5dU/+bmf5haesfQJkeZsd7Xw==','2016-01-06 11:37:22',NULL),
	(3,'raphael@panamadesign.com.br','123.456.789-32','0010025000002003','x+fw44/N9efLWoHAVKyoLOdDDwVBoXKC/WHpHVuddUUR4NWrG0GC09Y76smcfDfICrisD6o4+uzhyQbWlBKGFA==','2016-01-06 05:17:41',NULL),
	(4,'fabiozelindra1396@gmail.com','004.613.999-03','0010011000092002','cAg2ptaJhUuVXDpIRlpq5wrb37SuKwC0tlj/XY4Fiyu2pWUVHZqZTaMucZpUmf7Qp3EA1skGCr64ZyyR8nRNBg==','2016-01-06 08:50:00',NULL),
	(5,'pietropaolo@gmail.com','060.104.629-32','0010015000195009','5s+SlKZs2gfQW1qtXRDfCyUWvpSOXhQQbHFUa4cIcLXNg37s+SL3d4Qly47VZVgKZazQI70vF9GDUmAUPs3bQQ==','2016-01-07 01:39:55',NULL),
	(6,'fernandamachado_25@hotmail.com','003.457.139-66','0010010000170005','u4XPs8QadTLgMN6mJDrG/BKn6GzCFZkDXoo/4rI/8Wp93qRJwXnLqtrXq6IGFKu1zcMB+jLgUp8c/0qMWX5XjQ==','2016-01-07 12:53:58',NULL),
	(7,'carol.tavares.itu@gmail.com','424.021.708-32','0010003000014000','nvQvhe3FhlbSHN2kaQttyD41AruHD6Mv8881jjvFKnz8LM6l+h6tHgBaL3FWxSRtJ5M7DK42KcrsXtNXgsVOCQ==','2016-01-07 01:03:45',NULL),
	(8,'artur.giovanella@qualirede.com.br','076.397.999-61','0010002000001008','LvCfD4genCY0OYeJ2BBo7guxVtrvH4iPJF4nxsIBHIGAUQ5j83ybHTpRzXuI8tZ0k5r1GqpmIW4YCY/RsClgLA==','2016-01-08 12:03:31',NULL),
	(9,'elison@clinicaimagem.com.br','031.146.459-92','0010015000148000','rbzD1XnAwTt98XwAfwnvuktMZkutj0A9QnAatzvb1DmjVIx8WhNSvrNKRzB1vZH4pZdDNvf9kcNmum6h06xNqQ==','2016-01-08 01:39:56',NULL),
	(10,'Graciele Belém Loureiro Santos','019.357.885-90','0010011000165000','p7geAGuS/LgKzZ4RCr0f4RTC6exQxmPdYhuXMrz44AiviXz1dUwJWPbnRB3MhWRHoROwoElPUxjG8lFCiz29sg==','2016-01-11 09:13:01',NULL),
	(11,'srg.goulart@gmail.com','315.992.948-50','0010011000156000','9gA+rXiStbQ67nz3bmqITe3gaAd+lKwdBVwEcwki0qzF9XusXxPLwHA+NI8jypCKSE1Zf49n1LW5Z1QY0reQ3w==','2016-01-11 10:40:51',NULL),
	(12,'thiago.schmitz@qualirede.com.br','073.686.729-52','0010003000073007','chRAwJSEWrPMsGLJpr7+kt13xnekmC0zS75a82BnUxTt7NfRASCClQO97B6qWDQLR8rlTqjWWWTVqFrdUjw+xw==','2016-01-12 12:36:09',NULL),
	(13,'santosanak@hotmail.com','','0010024000111106','bgPn8KXo9r7yfy9AqqpcEeHlFhLlIsOZ1fCDmoWG3t844bJar+JYPuhCDqIReuwuI9qdxB8+u+H9DP4RooZ1hQ==','2016-01-12 12:39:50',NULL),
	(14,'joaca1986@hotmail.com','070.946.359-66','0010011000177008','gkSR1lg1/2nXGomUr066oZIr+Zn9VmK3M3XSkr+uyA6ShI3DYZoGBi4GOJENBVdiHWxIttIGkgaZZxDLxbzaQg==','2016-01-13 03:37:16',NULL),
	(15,'danielfraribeiro@gmail.com','035.207.299-70','0010024000067000','B71o43azcAZyPr7YMJU09kexWKTyS4DfLY99rXXcfIe1Ef8XNi311bzJkv8t+iHRIOdTRseL2oqo60n/ZeSB4g==','2016-01-13 05:06:20',NULL),
	(16,'giselezr@gmail.com','061.219.479-50','0010015000160000','kTyZpFe79b/z8G0dnWOwBvvShCu01xAGTv5TntsVIk7ls/E2lIAvlMYT+1oiEuqOKInC5iaoTLIHs57yt0nrLw==','2016-01-15 07:27:00',NULL),
	(17,'larissasil5@hotmail.com','088.855.949-64','0010002000026000','SdRV/0hYeapwEX8XoD0g6rTOSkZrs9JKaFVveWl0TK11MJN+9mZQbaYIjhOE8vhuK+v9R8zrnyxNoJPTFL8otQ==','2016-01-15 08:13:19',NULL),
	(18,'gica4@hotmail.com','027.574.419-14','0010015000158006','vUjv3Z71otPb/Y+hp/9MEbfF+tPU/0aGnKICnHO2g0FrD2JZhth8M2sEFnjGXozWSIwU9zsXBlZ9MH62oVPgBg==','2016-01-15 07:28:31',NULL),
	(19,'sasa_nandi@yahoo.com.br','327.629.868-69','0010011000152005','HLLI6mUlGfSJ2B22o+JDTAwWFE5SN8uP1Ed2YA0aKJXK/6tGPJ4SdL6+JFCnhG0V9dGEQW79phOeL5MzLhzvRg==','2016-01-18 11:02:16',NULL),
	(20,'jucylene valiati beckhauser','057.215.959-57','0010010000122000','O+wD2YzLQRqziSO03nAzg4mNbRZCO4PsHwWRjRa6scTplmkFOE9YCvQH0ys/+S7pjWmqmVmdnR1nYlrk9wnnhw==','2016-01-19 02:11:32',NULL),
	(21,'scheilalima2000@yahoo.com.br','018.372.509-36','0010024000335004','OwnkrZaWLk0Gn+GYU3GECx0UbPsuZhMekrzLYKiGzfF7Hbh+uyuwYIsSlsbZiStS2cXozioocHqcCNInhP9QxA==','2016-01-20 04:43:12',NULL),
	(22,'vanessazanott@hotmail.com','005.635.310-37','0010024000172008','QRxM+0WKHeWbMGgnFuBC73n6Iao24pYFzLkV9ToG/anUKlZacWNGvSdVq61YepwUgkLbML6dEgPOPUShLbWVaw==','2016-01-21 03:31:46',NULL),
	(23,'lorena.goncalves@sluzia.com.br','051.642.939-60','0010024000077005','p2du+eL7WRqFXy9pqyH3mpvZAD+VYsCimpYtI/aueA8HOivjhNvhgi/GFHvmPXlkvIrk/6yQ6nqg1RwTaq6xlg==','2016-01-22 04:43:53',NULL),
	(24,'nandadesouza90@gmail.com','073.781.019-07','0010002000043002','NKX5GxSfYuVuFV3D8TDpUx3Pl599MAH16EFjoNQQonvGAJJRy/qny1Vl3DDqt61Y0b6MZQ+cOt1heJb0Bz7fZA==','2016-01-22 06:54:43',NULL),
	(25,'elisangelapolicarpo1@hotmail.com','893.563.300-34','0010024000236006','WWt/DmXllMHxu/yIwGTavsBbVGnBxkbDvNSzrLZoJK0vyyH7CGjAy0qb1raOXmyu0eKhtPvzGP2Bi0eKViOTLg==','2016-01-24 03:33:23',NULL),
	(26,'ripassos@gmail.com','057.918.519-28','0010010000165001','a+RRYRcXD2af1hmXVYlZTaHkXP92R6f+lmIgPLU5aWxpt2eJl8kmmoeVol+tXpow/HclsQV7mL+F/98UzuGw5w==','2016-01-25 06:56:18',NULL),
	(27,'luiza_ph8@hotmail.com','874.417.057-20','0010010000047009','ePi4cBNqgtWE6XBjarYZb3qMVwXiwVnQdaW0TYmd4GufkR7L7YuH+jAnRa06M2vA95TL+SxbRFa5XcMCPGC1vA==','2016-01-25 11:22:37',NULL),
	(28,'Gusjferreira@gmail.com','092.557.209-88','0010018000067005','LyU0Bf9uUvoPEI45I5y8RdrEWBha6f231hs5Iizo642yDv1hPu33VSN/MhE5Zy0z2y8Dg2lgt1BHRNx+NsRi9Q==','2016-01-26 08:36:21',NULL),
	(29,'souzaguga@live.com','084.577.339-90','0010024000226000','+EI6NyZgC2xgE42dfk9o2zz7fdT/xobGUZA2dLa51CKKgMZ5bey3QRbk4fWy9ekpbGfa2MURyEt2Q0NfZqSXyQ==','2016-01-26 01:12:56',NULL),
	(30,'andersonroso@hotmail.com','070.247.059-73','0010011000160008','05cVCfRzJ+vXHOnblAzh/VQyueMopUQHG2GOghxqpitq5X4jN9dDwA+K8uKjP7v/SWlz9GCc4uNBpFLMQS44aA==','2016-01-26 01:42:30',NULL),
	(31,'Vanessa Nunes Anselmo','054.600.999-94','0010003000090009','3mf5AWoQvJyMN65wU12lZIgNk+c/CJdwOT77640MoD45hlZeprI/TskDOjJ+Fhl3WR/ufBEswmhOgqTvrXRSvw==','2016-01-26 03:54:32',NULL),
	(32,'joyce_guimaraes7@hotmail.com','065.238.829-93','0010022000007000','ZNxqu8VXZXp56Au2YSkJaUmjnPRSkySlpbFzTJlrBgvD351JXT0StqysxNMzz/sFBHWbRl6vtPcohGdAuM20vw==','2016-01-31 08:11:40',NULL),
	(33,'julianofloripasc@hotmail.com','041.649.849-37','0010024000344003','tdP815Xj00Bn1pCDrn5DLxy5bu4xsAjjue13GxGVQT9kPojFXETgV72zoWF6ap9D/icHfTm504PsF+kze+Gh3g==','2016-01-31 10:13:26',NULL),
	(34,'Alex Wehrmeister','057.070.049-39','0010002000003000','QSaeQLIllxUe2vnwPevXWSVQ2OiaI/CU8qQ04kRLrWM1P+srjhIImcHFWrhobCShGvwjYbDLbWA/tLzys4TLSA==','2016-02-01 01:25:34',NULL),
	(35,'vanessaaapalma@gmail.com','071.419.739-40','0010003000076006','SmF6zJOsZjQjLCi4f1sAJtuhm1+4hetjLmubUCZtzeBhEuy0sD6mtvlfgzmBbA6i/7iuuPtgYkrZaQdISZbyeg==','2016-02-01 01:34:11',NULL),
	(36,'soniavfarias@hotmail.com','983.770.789-53','0010024000142001','7yID5ZCz3Hfc8oTD3/5qyIdFHTenwnR3aeto0I+CoWxf+Dy2D2TdeuE0xvtKYGpA0ycRGniDb8trmViHNyHkRQ==','2016-02-01 01:34:53',NULL),
	(37,'alanascatolin@yahoo.com.br','042.349.429-52','0010010000143016','yxLDtQmysnFH/YKNVwS14IP8i9bu6aLLI/cgEE2xzXlBcKoA30/n/otcYjN9EzbgCkhfYsH+0x1FFfaEHJiLMg==','2016-02-03 11:35:06',NULL),
	(38,'Jovelina Curcio Vieira','','0010024000271006','gGa55mmIB1mmxMIK9BDRqP1nC0iFBfcA4Dmc9NA70fwW2zT6ldhzVgAvGpQPdGdzEhXu7p6TAQgGPmLNoErggA==','2016-02-04 02:21:33',NULL),
	(39,'mariaclaudiabdl@gmail.com','094.162.409-90','0010002000040003','9B2SlSFcqvK9WEK3x26AXNg7TmV45CQUqVwytAtDKcEfffXJWnGHNlQqDOONOSWMJEFjP5zK8szGsbCOaq5MAQ==','2016-02-04 04:45:29',NULL),
	(40,'mariaejulia@gmail.com','','0010002000040305','dsZyeGNb3t9s+bnigeWpcfVL8J3AXZo53/GFDNXvtGF/Nhdyn3U8pCgWqOkqj+Nbo9GhT1sOUpol/8k5m7e/QA==','2016-02-04 04:48:52',NULL),
	(41,'cicimendesies@yahoo.com.br','036.505.499-21','0010011000076007','l0LfVIbDih84XD7uiOnAMN46EPOm45xY56YXA5RAsqW86bIGhcSudU10VXlnVrjnv4ZaXvgXFx4nPITXsQp2/Q==','2016-02-04 06:35:31',NULL),
	(42,'tmonteiro651@gmail.com','031.245.039-70','0010010000265006','vJnSbbDzgSn9RLMvAS3/pdut0J/Rnp9FJrG4lWvDObFxtJIVsW0OUZwjRbwmomqyx0g3xqx7nohoOgG1DDnaZQ==','2016-02-05 08:13:42',NULL),
	(43,'kacardoso23@gmail.com','079.157.439-37','0010024000122000','sN2HFI6r6UzpiZWvTU3fKtkv0wgDv5TIjptr+nb3BP10Z6uz1RFJlLwsr8CxmyEQY+SfKPVmsP9QQ78z6YlFDg==','2016-02-07 08:24:48',NULL),
	(44,'skamila259 @hotmail. com','077.362.329-97','0010024000329004','WKRWURJKVjxGpZUlWQCJmDR2l6dSYUL/DkBSdYFM3WoKUN62tPGqjVOFwWW9UNpb+HCCeGZzEqWbZ2Oyt+FCeA==','2016-02-08 12:22:35',NULL),
	(45,'rapha.cp@live.com','819.676.835-49','0010010000207006','zsRu+jLey5yLq4hurTBYK1vjo31hY+vsxN8WQS1kezXMYOqpBrSuX7wRS5933Gbnt1lGI0xlaf7aox9fNSMxag==','2016-02-10 08:31:31',NULL),
	(46,'ismaelbastian@hotmail.com','053.993.449-63','0010015000227008','JMGB5IelXAZ4CxpmQ9Q/V8xs1gWX2at0okygah1csaKT1ygeN7VBqmGz00kNY8im3YM/s4NAxnXwR/Upttwa/Q==','2016-02-10 12:06:24',NULL),
	(47,'hmkoller@italnet.com.br','055.773.774-55','0010013000171006','MSDl2Zksc0slbFrETQtKvZjqC9hfSf6UI4/3DU+irbtIs8iKRtDZDBPlwo6bJz7YjQ10Tk611BgKUcl1zsZICw==','2016-02-11 11:11:13',NULL),
	(48,'mvitoria@hotmail.com','027.891.460-80','0010013000171308','hmkviwI9ZTsmHpgWWkpDZ/khBYTKceKVhx2MubVDbF1bd8GkOtZ+mC2hYz/WHo/EYth7g0mwceZdwDrWM2MjBw==','2016-02-11 11:14:05',NULL),
	(49,'luiza.ocosta@hotmail.com','070.847.129-33','0010003000044007','6I/OfvpvfMM78cPXV3inGInYPnnuCEInbSwn6kClYcx/SaDAmO6Q6gcCzV1t4OY9xWohmNamp5i3WMQfthNQkg==','2016-02-12 10:00:57',NULL),
	(50,'luca.barbosa@hotmail.com ','026.269.129-99','0010025000008001','5UbAFcjqJCJgsxEKSpEJOvT8nVJwVsYj8y3hAoazYzF+BeVqxeXmME1vmzqL7bVlSMTrPZfz5wFYNqlzj24m0g==','2016-02-14 08:24:34',NULL),
	(51,'Ka_nilson@hotmail.com','005.664.289-03','0010013000174013','p66OyWylYTSIF8K0FZ8UNtf6zmUbBrAZbaB9PkvmaD9vDOfPz4ZC4WjywhYFDpDm+xFaXnm2GG5llzPvkVexpA==','2016-02-15 05:58:01',NULL),
	(52,'Jullynhaa_16@hotmail.com ','074.804.449-31','0010011000096008','TboBfLVern340l+GV3IQe/onWF7TBa8elOog35K4LTM3ClE7ue/3bcvcndQDHTcTWbFI3j5/rAOUQBatl1Ffsg==','2016-02-16 01:13:21',NULL),
	(53,'tata_berti@hotmail.com','076.124.139-65','0010010000304001','B4NSQOIdwIgDyIGBxsLM1zfvRvOWgkTVmX3dvdV6SSmVwnTKRgdP6hTQI+u2YenefxR2fKrePZ/mq6uQtz4U3Q==','2016-02-16 05:08:29',NULL),
	(54,'jennefer.jeje@gmail.com','065.774.279-17','0010015000169008','6UbloAm8pj5kYhs/EZDRLO4JjHWBmpiqdRiouhO6H6t4ebB77+0ovG3KzBk7amfrEYyn1avuQKhOzuOGoQDg4g==','2016-02-16 06:43:00',NULL),
	(55,'thiagokarini@gmail.com','048.366.519-30','0010024000244009','J/6J95Ce4oYKmyBd1nGbcsjBIfltTQAvmX2oyVzvXpJwuKI56KUFB8Rmet9nIBcaYpgVCeUSRXkcN8nYDqzQDQ==','2016-02-17 05:19:14',NULL),
	(56,'Ana Paula Ramos','045.666.829-27','0010013000148004','C3vXVnvNHpsd3CmB3FmBySdgRhf1XJ1Gll8306iK+RYCtX3aVZhYuDQr1fQdwFjVHlauNpby/3tps1n5UDdVtg==','2016-02-19 10:10:41',NULL),
	(57,'jaquelinecelia1982@hotmail.com','040.546.639-07','0010011000173002','RlYFRwpx7YuNnVJMSoegdvgEMxs03jHZk/F8K4AID2E2vxZY2dG11EjZZyPue9ixP82gAgbd5rkFlJ1yUA4XMA==','2016-02-27 01:54:15',NULL),
	(58,'rosedaignese@gmail.com','086.734.508-02','0010015000205004','dOjclCHDuLi9SNoq1iPuEIqBBRr4HglQOLstUpYDlUGZaXpIYIo6tGhtZSn+IAYXWj6cB+X6PoBvgbPCWllFFA==','2016-02-29 08:52:43',NULL),
	(59,'gianeserafim73@gmail.com','843.137.309-15','0010024000006000','i8sHcHYii4UUStRvldpMQXWPnK3w64neecPDNmkyWn6OMfFj9DxkGZ6E4kILW1EoG1/8CTabFiXZAeHYH620ew==','2016-02-29 02:03:46',NULL),
	(60,'karollynbento@hotmail.com','072.428.909-77','0010022000040008','eQrNVvM7uaDlCVYiaHkbSyQdVq5D7jKtfgYM/jRykIT12HMOZjgu01zpvtGrgOCCWEK69TPIHXOHJF5h5R6P+w==','2016-03-01 09:37:17',NULL),
	(61,'Tonmarcos@gmail.com','575.202.750-00','0010011000098094','/je2/JoZRlT1j0pyBpBuV0R1fSqHzJZ08lHj2gE5lGQa7C9aWTlna60y1x4CS+Esmzi4W+G9Wob9hDeweyDKVw==','2016-03-01 07:38:32',NULL),
	(62,'gengis_vivan@hotmail.com','034.660.459-16','0010003000107025','QHCBaFztPMoXR5gOEL2JR7/zpVA2lRrF31Q2euUchzrGrSkUAFVGx7cZ2wc5STMoKvAJdtxIVt+pOoupbLsG1w==','2016-03-01 09:21:30',NULL),
	(63,'fefeeschmidt19@gmail.com','088.955.539-77','0010015000127305','nxkpmLpBi57evAfCsFmFoSEFN1e0N/aMKSJFwn9HbWk7bMLmDnF6FEpdEjNkraNjR9ANb9i7/dVV/ZEZrL2o1g==','2016-03-02 10:57:34',NULL),
	(64,'suzy.teles@hotmail.com','007.392.719-89','0010024000183000','RJwgLcR52zkd6p+HLRypzimq7sX3DAf5Hj+3mvHZjHqxkJTnAts21nPi/DbX4FR+CMiy0/TOe14Lw616elNdoA==','2016-03-07 05:09:04',NULL),
	(65,'Evilinsantossilva@gmail.com','105.682.439-51','0010010000293000','DL+d1HTFr9URSlv2K+WEPGrRGX3Q7SFrlCelqhzUPJrb4a5bySC2hka/jP+VTxl6a/fNd7kK8Jt6n16Kt+h9Uw==','2016-03-07 10:24:03',NULL),
	(66,'amandinharochaaa@hotmail.com','074.047.499-56','0010002000038009','UIiroRMqLUDylRVMZGFDf+s+5xr6OQNAuz+c7dINqBLoA8ivbduhlEzLMNm7AdnBkRRiHC2/EljQl3f3m9MCpw==','2016-03-08 01:42:07',NULL),
	(67,'daia.angela@hotmail.com','001.165.430-94','0010010000056008','aqqsxM7nNfO2+pAu46+Y38qBdDtfZFz9MRKRP5Yn/whHkem1WP9bfHAKM/ZXAQkqANvhc6GIEmF+h+vzz/R0sw==','2016-03-08 07:59:57',NULL),
	(68,'leonamm@gmail.com','089.299.979-96','0010024000368000','6tPScVaFXZnF97bNbSkn4p/+fwZ4XN8kkfEX63etLtwhpGjVpDpL5jQ3PbpooIMPFJcRz5J62GQEl1KhQMpsnA==','2016-03-09 06:43:09',NULL),
	(69,'autorizacaofax@clinicaimagem.com.br','058.604.209-19','0010015000168001','1w/K7oWFEUUzd4HpLHgoGh6fOgvREUOS1PXRwMYiIUv39kXNVrilUu63QnHGJAGz+3dtR1XOH4BIfJztw1R0Hg==','2016-03-10 06:43:36',NULL);

/*!40000 ALTER TABLE `beneficiarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
