-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2017 at 01:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdip2016x068`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_from` datetime DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `title`, `description`, `date_from`) VALUES
(1, 'frizer', 'šišanje i ostale frizerske radosti', '2017-03-28 00:00:00'),
(2, 'masaža', 'masiranje od strane maserke ', '2017-03-28 00:00:00'),
(3, 'saunaa', 'vruća, vruća sauna sa kamenčićima i vodicom', '2017-03-28 00:00:00'),
(4, 'Toys', 'Inventore deleniti omnis fuga.', '1972-07-21 13:04:17'),
(5, 'Beauty', NULL, '1970-01-01 08:22:38'),
(6, 'Health', 'Et est temporibus qui.', '2000-06-22 11:29:17'),
(7, 'Audible', 'Voluptas eos ducimus placeat.', '1970-01-01 00:05:46'),
(8, 'Food', 'Sequi quia qui amet.', '1998-12-09 12:18:40'),
(9, 'Computers', 'Mollitia sapiente ut quis...', NULL),
(10, 'Crafts', NULL, '1970-01-01 09:44:10'),
(11, 'Clothing', 'Harum temporibus sed.', '1978-04-15 09:38:15'),
(12, NULL, 'Itaque veritatis consequatur.', '1990-06-02 14:49:23'),
(13, 'Movies', 'Dolor voluptas in perspiciatis.', NULL),
(14, 'Shoes', 'Aut ipsum sed cupiditate nulla.', '1981-03-20 23:04:35'),
(15, 'Automotive', NULL, '1987-07-25 23:11:07'),
(16, 'Furniture', 'Sit ducimus quis voluptatum.', '1998-01-10 13:19:12'),
(17, 'Gifts', 'Quibusdam nulla dolor cum.', '2011-09-04 02:35:13'),
(18, 'Food', 'Aut laborum non.', '1970-01-11 06:25:17'),
(19, 'Home', 'Velit animi quia consequatur.', '1982-02-03 10:14:43'),
(20, 'Audible', NULL, '2012-06-27 11:39:27'),
(21, 'Computers', 'Natus quisquam a delectus.', '1991-03-29 07:08:33'),
(22, 'Gifts', 'Illo voluptatibus facilis...', NULL),
(23, 'Clothing', 'Odio qui sint ducimus voluptas.', '1970-01-01 00:00:04'),
(24, 'Furniture', 'Praesentium quod similique.', '1975-12-22 16:25:27'),
(25, NULL, 'Est facere totam voluptas.', '1999-07-10 11:20:35'),
(26, 'Furniture', 'Magnam voluptas dolorum quis.', '1983-10-02 01:58:39'),
(27, 'Garden', 'Debitis voluptas nulla.', '2000-04-23 06:07:31'),
(28, 'Tools', 'Ab eaque qui quibusdam.', '1999-08-07 20:32:28'),
(29, 'Tools', 'Magnam quae dolor ipsum...', '2001-11-06 00:40:44'),
(30, 'Garden', NULL, '1985-11-30 05:50:27'),
(31, 'Clothing', 'Eum temporibus illum deleniti.', '2007-07-17 05:03:48'),
(32, NULL, 'Rerum et ducimus sit eum.', '1992-12-18 06:11:55'),
(33, 'Food', 'Ut rem assumenda id voluptates.', '1985-11-27 02:21:34'),
(34, 'Audible', 'Officia est odit velit.', '1970-01-01 00:06:36'),
(35, 'Movies', 'Earum velit iusto harum.', '1973-09-18 09:59:26'),
(36, 'Jewelry', 'Qui dolor vel optio sit omnis.', '1970-01-01 00:01:15'),
(37, 'Books', 'Et natus quaerat.', '1970-01-01 00:41:47'),
(38, 'Shoes', 'Voluptas ipsam quis ipsum eos.', '2007-10-20 22:02:23'),
(39, 'Office', 'Odit ex cum nulla distinctio.', '1970-01-01 00:00:07'),
(40, 'Jewelry', 'Et quis maxime reiciendis.', '1975-04-24 20:13:35'),
(41, NULL, 'Et magnam eius...', '1970-01-01 19:50:29'),
(42, 'Sports', 'Dolorem possimus tempora est.', '1991-04-15 08:02:36'),
(43, NULL, 'Fugiat omnis deleniti possimus.', '1970-01-01 00:06:26'),
(44, 'Shoes', 'Dolore non quis.', '1970-01-12 00:57:03'),
(45, 'Accessories', 'Praesentium autem in vero.', '2007-12-26 01:17:23'),
(46, 'Jewelry', 'Molestiae consequatur et rerum.', '1995-07-02 17:15:10'),
(47, 'Music', 'Consectetur ex illum unde amet.', '2004-03-06 04:05:45'),
(48, 'Toys', 'Mollitia quia enim quia.', '1970-01-01 00:10:16'),
(49, 'Sports', 'Dicta et necessitatibus est ea.', '2001-01-24 18:24:03'),
(50, 'Office', 'Atque doloremque accusantium.', '1977-11-03 06:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `img_url` text,
  `pdf_url` text,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `title`, `short_description`, `img_url`, `pdf_url`, `value`) VALUES
(1, '20% masaža', '20% popusta', 'url', 'url', 300),
(2, '10% sauna', '10% popusta', 'url', 'url', 200),
(3, '15% šišanje', '15% popusta', 'url', 'url', 180),
(6, 'Quia ex veritatis sit ut modi porro.', NULL, NULL, 'https://thourhadall.hk/hin/oreafor/verionletio.htm#1947', 9),
(7, NULL, 'Modi fugiat porro ullam eligendi iste.', NULL, 'https://butat.mx/nt/ened/veeastnt.html#0', 295),
(8, 'Qui deserunt adipisci voluptas.', 'Fugiat illum dolorem omnis.', 'http://reinallou.uk/leeain/hertioent/ingti.php', 'http://www.sthinshohen.net/is/allnehe/for/statin.php?t=71&p=9125', NULL),
(9, 'Qui soluta omnis et ipsum nesciunt.', 'Asperiores illum quam voluptatem.', 'http://herwashatwas.hk/tiwater/thveyou/meatvethi.php', 'https://www.shoreandve.il/allasse/handngoul.htm', 677),
(10, 'Minus in id veniam labore ratione.', NULL, 'http://wafor.au/sho/lerere/era/ateroulse.php?t=46&p=1556', 'https://www.wasome.se/ngter/leingere/ithis/hinoul.asp', 115),
(11, 'Illum eos culpa ad.', 'Voluptatum incidunt id consequatur.', 'http://aretisthi.cn/hieabut/butionou/thehent.asp', NULL, 61),
(12, 'Molestiae voluptates voluptas eius.', 'Perspiciatis et voluptatem ipsam.', 'http://www.toalerfor.no/tohaten/lengal/nguldteome.aspx', 'http://hadeve.hu/lendha/edwa/wanderaas.htm', 370),
(13, 'Ullam accusantium ut.', 'Non quisquam ut.', NULL, 'https://shoveruld.hk/eaar/tedeswa/relethe/sebutsho.php?t=15', 381),
(14, 'Tempora enim perferendis nemo omnis.', 'Sint a quibusdam.', 'https://ouedonver.it/haand/ti/leareiswa.php?t=74&p=9290', 'http://www.wayou.ae/thierant/youwitheere.htm', 634),
(15, 'Molestiae magnam et id ea et ut.', 'Vero omnis quisquam blanditiis.', 'https://touldingwit.ch/tiohatha/her/andtio/orst.php?t=67', 'http://www.anatated.au/ourterit/eawittoon.php?t=49&p=5996', 547),
(16, 'In fugit sed ipsa.', NULL, 'https://henhen.ch/oulenthis/onhinhen/it/neisto.php?t=49&p=5926', 'http://erater.za/ne/tha/alltiour/witenttheare.htm#22', NULL),
(17, 'Provident a voluptatum.', 'Et consectetur illum fugiat.', 'https://www.youentwawit.lu/tedinhe/leti.php', NULL, 229),
(18, 'Ratione voluptas autem tenetur.', 'Voluptatibus repellendus earum in aut.', 'https://www.hadlealling.se/haare/andnt.php', 'https://www.wituldhatio.ca/our/enstoul/nghin/tiwa.php?t=57', NULL),
(19, 'Voluptates neque blanditiis saepe qui.', 'Alias fuga nisi dignissimos.', 'http://www.notit.gr/hiseyou/almemend.php?t=88', 'https://www.lehileter.uk/edhaes/hatome/ar/wasalwaen.php?t=45&p=23', 822),
(20, 'Omnis dolorum et molestiae distinctio.', 'Autem eum voluptas et quis in.', 'https://orme.fr/hiner/seoule/ou/wasrebutwas.php', NULL, 911),
(21, NULL, NULL, NULL, 'http://arinheth.cz/rehat/was/wa/heneaonin.htm', 423),
(22, 'Vel mollitia sint quae ducimus sed.', 'Velit fuga sint corrupti est.', 'https://www.asisound.net/in/hihathad/arwa.php?t=91&p=6231', NULL, 37),
(23, NULL, 'Sunt eius placeat vitae.', 'http://theveforhis.br/his/iseveer/semever/entitalth.asp', 'http://www.haandtedtio.ge/waslebut/hin/you/thaedas.php', 723),
(24, 'Sed quo est quia.', 'Consequuntur asperiores eum enim.', 'http://www.ththieshad.be/ngthehat/reveing/oralhising.html#2', 'https://www.thahationeve.no/hame/onstwa/netehat/heringonng.php?t=55&p=73', 5),
(25, 'Beatae est voluptate tempora.', 'Eum commodi quis quidem officia neque.', 'https://www.notar.lu/en/wittha.aspx', 'https://www.aterahaoul.ae/ingti/uldanereall.htm#0927', NULL),
(26, 'Ex nulla iusto aut cum et.', 'Rerum obcaecati cupiditate.', 'http://www.ourre.hu/thainthe/asmeere/oralwit/lele.htm', 'http://www.ingalissho.kr/alwahat/anerithon.aspx', 451),
(27, 'Laudantium beatae molestias adipisci.', 'Perspiciatis inventore et molestiae.', 'https://www.thiti.nl/hethi/hattoto/entuldhad/ionareraeve.htm', 'http://www.inomehad.nz/all/sho/ormeall/harealare.htm#6312', 131),
(28, NULL, 'Et voluptatem eveniet suscipit.', 'http://www.eveeneveing.il/hi/itomeng/as/arwithinion.aspx', 'https://www.heou.com/orleion/edhaat/eravewites.aspx', 884),
(29, 'Autem quia nihil blanditiis ullam.', 'Aliquid rerum labore amet...', NULL, 'http://www.erarwitne.biz/arted/as/wittethi/orststere.asp', 649),
(30, 'Inventore exercitationem est.', 'Et itaque aliquid quaerat.', 'https://ngyouith.lv/oulome/anthithand.php?t=86&p=1337', 'http://www.arngan.es/sho/ingin/sethaour/esnotseve.htm', NULL),
(31, 'Eveniet omnis et in vitae sunt.', 'Nulla voluptate deleniti.', 'http://hadsene.fi/omeithto/witndne/inginst/youthierne.htm', 'http://www.verionwases.es/it/eraleng/notareis/eran.php?t=98&p=6950', 573),
(32, 'Qui sed dolor qui quaerat impedit.', 'Minima voluptate ut.', 'https://ntwititare.za/teterea/hi/orhenomeand.htm', 'https://eandouthi.ca/edwasyou/tier.asp', 197),
(33, 'Repellat optio voluptatibus cum minus.', 'Voluptate dolorem quis neque ratione.', 'http://thetedome.be/hining/for/ent/erehinthais.php', 'http://terhinionent.fi/asuldng/inallan/uldourtedere.htm', 4),
(34, 'Dolor voluptas accusamus mollitia ea.', 'Soluta eos similique voluptatibus.', 'https://www.eveor.cy/vering/enne/vernotneer.asp', 'https://ngallteron.gr/shover/thha.htm', 808),
(35, 'Temporibus inventore accusamus.', 'Exercitationem ut non rem in eos.', 'https://www.hinand.cy/erandre/omelehe/to/enoutend.aspx', 'http://alshoer.hk/st/waoulyou/ouuldwitnot.php?t=81', 396),
(36, 'Impedit est id in ad sit amet qui.', 'Sequi distinctio soluta modi quia.', 'https://haeraouve.ar/ereinoul/but/isbutwit.php?t=99&p=7151', 'http://www.tiedoulth.cz/ourshoent/orwaent/witere.php?t=25&p=506', 791),
(37, 'Sed consequatur placeat dicta quia.', 'Ex est eum id omnis numquam.', 'https://www.allhatthent.nl/thierthi/atntare.php?t=47&p=7158', 'http://youtedhahad.de/to/ulder/astohiner.htm', 776),
(38, 'Itaque saepe ratione at quod enim.', 'Ut voluptas possimus.', 'https://oule.ge/hen/meitoul/oratare/lesttein.asp', 'https://www.veerhand.cy/meandion/atndwa/an/entti.php?t=12', 756),
(39, 'Repudiandae labore modi dicta quia.', 'Et autem dolorem.', 'https://www.edtiouat.tr/uldleter/sthison/onhenhe/itwas.asp', 'http://istioherse.nz/es/all/on/erahenontio.php', 280),
(40, 'Sint accusamus et quo facilis vitae.', 'Qui autem culpa nulla.', 'http://alersehin.hu/ntthen/arentsho.htm#2449', 'https://www.wasthawitwit.se/heseor/intire/ion/theaouare.html#84', 831),
(41, 'Vel sed totam itaque voluptatem iste.', 'Et molestiae et voluptas quas id.', 'http://teherhin.ae/ent/oureatost.php', 'https://teinghad.hu/tioasou/erehatitsho.asp?id=28', 53),
(42, 'Repudiandae facere quibusdam.', 'Natus quisquam nam ex.', 'https://waouith.ua/arehisour/tiohete.html', 'http://tedingwitng.com/herhaour/terterenwit.html#0', 933),
(43, 'Ab qui adipisci animi.', 'Eum quia non iure maxime molestiae.', 'http://ereveroral.hk/en/our/ar/letioreng.html', 'https://www.hadinoulwas.eg/uldtertha/thato.php?t=62&p=70', 714),
(44, 'Asperiores beatae et adipisci.', 'Consectetur fugiat molestiae.', 'http://www.eraingoured.za/at/ingomethi/inghatareas.htm#7918', 'http://www.ouinhatbut.net/ver/esanhawit.asp', 314),
(45, 'Quibusdam deserunt excepturi.', 'A minus nihil.', 'http://www.tenotinyou.org/stoulti/ea/youhinouse.asp', 'http://www.tioener.dk/herereeve/reteding/herngntle.asp?id=537', 466),
(46, 'Molestiae consectetur at ab deserunt.', 'Excepturi sint quo consectetur quasi.', 'http://www.hadentaler.au/anerees/tioante/hemeth.aspx', 'http://onletedera.org/ha/terseoul/notuld/haneed.asp?id=115', 434),
(47, 'Dolor natus nisi eos odio id.', 'Eos consequuntur ut voluptatibus.', 'https://www.oulstthme.cn/witattio/time/ionneed/allouomethe.php', 'http://www.thiis.de/forng/setiteas.asp?id=77', 927),
(48, 'Omnis assumenda sed saepe in eum.', 'Iusto velit dignissimos nostrum.', 'http://meashadte.de/thitioen/andterse/neesng/hatiohatuld.aspx?id=34', 'https://www.orterandtha.no/ionteren/as/oulnot/erionleour.asp', 31),
(49, 'Distinctio vel voluptates non.', 'Alias eius modi sed.', 'https://uldorentou.be/notyou/henhiera/enle/veyoule.php', 'http://www.neounotth.com/onmeoul/eraeawa/te/waiononnd.aspx', 22),
(50, 'Omnis id ut illo velit quam rem aut.', 'Rerum reiciendis quis corrupti non id...', 'https://www.areingndle.jp/but/hinoueveng.htm', 'https://waionndsho.mx/haour/arerahistio.asp?id=320', 626);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_category`
--

CREATE TABLE `coupon_category` (
  `category_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `coupon_category`
--

INSERT INTO `coupon_category` (`category_id`, `coupon_id`) VALUES
(1, 3),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `name`, `description`, `user`, `created`) VALUES
(1, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-12'),
(2, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-13'),
(3, 'Log_out', 'user loged out', 'unknown', '2017-06-13'),
(4, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-13'),
(5, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-14'),
(6, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-14'),
(7, 'Log_out', 'user loged out', 'unknown', '2017-06-14'),
(8, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-14'),
(9, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-15'),
(10, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-15'),
(11, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(12, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-16'),
(13, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(14, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-16'),
(15, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(16, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-16'),
(17, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(18, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-16'),
(19, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(20, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(21, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(22, 'Loged_in', 'user loged in with two step auth', 'matljesca', '2017-06-16'),
(23, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(24, 'Loged_in', 'user loged in', 'matljesca', '2017-06-16'),
(25, 'Log_out', 'user loged out', 'unknown', '2017-06-16'),
(26, 'Loged_in', 'user loged in', 'matljesca', '2017-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `ID` int(11) NOT NULL,
  `Naziv` varchar(50) NOT NULL,
  `Opis` text NOT NULL,
  `Datum` date NOT NULL,
  `Vrijeme` time NOT NULL,
  `Kolicina` int(11) NOT NULL,
  `Tezina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`ID`, `Naziv`, `Opis`, `Datum`, `Vrijeme`, `Kolicina`, `Tezina`) VALUES
(1, 'ssss', '', '0000-00-00', '00:00:00', 0, 0),
(3, 'Matija', 'Matija. Matija. Matija.', '0000-00-00', '20:00:00', 2, 2),
(6, 'Matija', 'Matija. Matija. Matija.', '2001-11-20', '20:00:00', 2, 3),
(7, 'Matija', 'Matija. Matija. Matija.', '2001-11-20', '20:00:00', 2, 3),
(8, '', '', '0000-00-00', '00:00:00', 0, 8),
(9, '', '', '0000-00-00', '00:00:00', 0, 8),
(10, 'Matasas', 'Msfafdss. Mdfdsfasf. Ssfdsfdsf.', '2001-11-20', '20:00:00', 2, 19),
(11, 'Matasas', 'Msfafdss. Mdfdsfasf. Ssfdsfdsf.', '2001-11-20', '20:00:00', 2, 19),
(12, 'Matasas', 'Msfafdss. Mdfdsfasf. Ssfdsfdsf.', '2001-11-20', '20:00:00', 2, 19),
(13, 'Msdasas', 'Masasa. Msmflkdsml. Mfdsfsdfds.', '2001-11-20', '20:00:00', 2, 5),
(14, 'Msdasas', 'Masasa. Msmflkdsml. Mfdsfsdfds.', '2001-11-20', '20:00:00', 2, 5),
(15, 'Msdasas', 'Masasa. Msmflkdsml. Mfdsfsdfds.', '2001-11-20', '20:00:00', 2, 5),
(16, 'Msdasas', 'Masasa. Msmflkdsml. Mfdsfsdfds.', '2001-11-20', '20:00:00', 2, 5),
(17, 'Matija', 'Matijas. Matijas. Matijas.', '2001-11-20', '00:00:02', 2, 3),
(18, 'Matija', 'Matija. Matija. Matija.', '2001-11-20', '20:00:00', 2, 26),
(19, 'WebDIP', 'Opis. Opis. Opis.', '2010-05-11', '00:00:10', 1, 25),
(20, 'WebDIP', 'Opis. Opis. Opis.', '2010-05-11', '00:00:10', 1, 25),
(21, 'WebDIP', 'Opis. Opis. Opis.', '2010-05-11', '00:00:10', 1, 25),
(22, '', '', '0000-00-00', '00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` text,
  `date_from` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '2'
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `service_id`, `user_id`, `description`, `date_from`, `date_to`, `status`) VALUES
(1, 8, 1, 'nema posebnih zahtjeva	', '2017-03-28 08:00:00', '2017-03-30 00:00:00', 1),
(2, 8, 1, NULL, '2017-04-15 04:05:00', NULL, 2),
(3, 8, 1, NULL, '2017-04-11 01:00:00', NULL, 2),
(4, 8, 1, NULL, '0000-00-00 00:00:00', NULL, 2),
(5, 8, 1, NULL, '2017-06-16 19:00:00', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `des` text,
  `rights` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `name`, `des`, `rights`) VALUES
(1, 'admin', 'glavni administrator sustava, ima potpunu kontrolu nad svim dijelovima', 'first level'),
(2, 'moderator', 'moderator, sa moguconostima unosa usluga, raspodjele kupona te odobravanja termina', 'second level'),
(3, 'korisnik', 'obični korisnik, koji rezervira usluge te ima mogućnost skupljanja bodova i zamjene istih za kupone', 'third level');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `img_url` text,
  `duration` time DEFAULT NULL,
  `sdate_from` date DEFAULT NULL,
  `sdate_to` date DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=1638 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `description`, `img_url`, `duration`, `sdate_from`, `sdate_to`, `category`) VALUES
(1, 'šišanje', 'sve vrste šišanja', 'url', '00:00:01', '2017-03-28', '2017-03-31', 1),
(2, 'farbanje', 'frabanje kose', 'url', '00:00:02', '2017-03-28', '2017-04-01', 1),
(3, 'pranje', 'pranje kose i masaža vlasišta', 'url', '00:00:00', '2017-03-28', '2017-04-01', 1),
(4, 'frizura', 'izrada ženskih frizura', 'url', '00:00:03', '2017-03-28', '2017-04-23', 1),
(5, 'aromamasža', 'aromatična masža', 'url', '00:00:02', '2017-03-28', '2017-06-11', 2),
(6, 'uljna', 'uljna masaža sa izborom toplog ulja', 'url', '00:00:01', '2017-03-03', '2017-08-11', 2),
(7, 'kineska', 'kineska masža, iz srca kineske tradicije', 'url', '00:00:01', '2017-03-01', '2023-03-01', 2),
(8, 'švedska', 'legendarna švedska masšža koja pomaže pri opravku mišića', 'url', '00:00:02', '2017-03-06', '2017-11-12', 2),
(9, 'visoka para', 'sauna sa visokom parom', 'url', '00:00:01', '2017-03-21', '2017-10-02', 3),
(10, 'slana para', 'sauna ispunjena slanom parom za opravak kože', 'url', '00:00:01', '2017-03-22', '2017-10-03', 3),
(11, 'sdasdsa', 'dsadas', NULL, '00:00:00', NULL, NULL, 1),
(16, 'Tabculupor', 'Quasi placeat est harum nemo rerum ut.', 'http://hatasndti.net/the/allionhad/althed/ithnothebut.asp', '05:12:42', '2001-05-08', '2017-08-03', -214521818),
(17, NULL, 'Quaerat possimus quae adipisci.', 'https://ourourhist.se/waarthi/arthe/tio/leted.php', '00:11:17', '2009-06-23', NULL, -1033180283),
(18, 'Monotinry', 'Eum similique ut dolor qui quibusdam...', 'http://iteveouted.biz/henitar/ome/oulforle/ithhadeveour.aspx?id=191', '05:44:52', NULL, '2019-01-31', -2147483648),
(19, 'Readjectommry', 'Esse aut non sit, doloremque ab a.', 'https://www.thaitwitve.nz/ndverit/tedioner/oralleyou.php', '01:08:46', '1972-09-07', '2017-09-10', -412),
(20, 'Speakmuton', NULL, 'https://www.orte.org/areeraher/haeron/but/ouraner.aspx?id=51', NULL, '2013-02-12', '2017-12-12', 27250),
(21, 'Monojectry', 'Dolores sit sint dolorem adipisci eum...', 'http://wasandherea.com/youatent/ornot/ithat/shoseshoand.php?t=43&p=96', '04:46:48', '2009-05-04', '2017-07-23', -1247652614),
(22, 'Tabcessentor', 'Voluptatem modi at nemo consequatur.', NULL, '01:54:31', '1970-03-10', '2018-05-02', 88534),
(23, 'Montinewry', NULL, 'http://www.ingent.it/alte/hinisha/edasin/tioenttedhat.aspx?id=24', '02:53:18', '2011-04-19', '2018-01-23', -65978),
(24, 'Recordridge', 'Eligendi quo eum reiciendis et ut aut.', 'https://www.hiswaoutio.lv/arthihe/itionit/arveisar.htm', '00:08:38', NULL, '2017-06-19', -92),
(25, NULL, 'Ratione ab, libero voluptate provident.', 'http://notntst.com/evemewas/hinuldeveat.htm#4', '03:32:04', '1974-02-22', '2017-08-01', -1289942158),
(26, 'Speaktinor', 'Sed et recusandae possimus quibusdam.', 'https://oungandith.lv/an/erwitwas/thi/ngal.php?t=29&p=179', '05:35:19', '1985-08-06', '2018-02-26', 3878),
(27, 'Antectar', 'Consequatur perferendis sint deleniti.', 'http://www.areseallan.kr/aliste/rewasing/ome/thaterwa.asp', '03:56:40', '1980-02-05', NULL, -1561582242),
(28, 'Comculer', 'Doloremque molestiae magni similique.', 'https://www.notthaisat.us/stasuld/intete.php?t=10&p=380', NULL, '2009-12-25', '2017-06-20', -783612558),
(29, 'Tweetceivor', 'Et neque quae ipsum, culpa illo qui.', 'http://enbutwitted.hu/asseing/andterheyou.php', '04:07:08', '1987-09-05', '2017-07-21', -2147483648),
(30, 'Ampceiver', 'Tempore quibusdam, consequatur cum ut.', 'https://verthaenbut.lv/ereyouuld/tioleing/seve/ngeraheng.php', '01:19:15', '1991-09-27', '2018-05-14', -261238),
(31, 'Comcordry', 'Ut eos quod quia necessitatibus aut id.', 'https://estheathi.de/alvehin/omehadher/wit/ionyouhatthe.php?t=70&p=622', '03:35:10', '2011-01-11', '2017-06-25', -31),
(32, 'Conjector', 'Similique odio sed veniam quas nemo.', 'https://fornot.net/eshaha/ve/arithhentio.php', '03:09:56', '1971-06-14', '2017-08-05', -976),
(33, 'Monniopentor', 'Voluptate sit fugit dignissimos non.', NULL, '01:48:54', '2008-11-21', '2018-01-16', -937324068),
(34, 'Cabpickonator', 'Et rerum incidunt non enim at.', 'https://www.hinteseeve.ae/ter/asterter/hisvertheted.php?t=77&p=9672', NULL, '2006-06-07', '2017-09-13', -729624571),
(35, 'Comculaqury', 'Aut ab voluptas facere vel aut rerum.', NULL, '05:30:51', '2017-01-01', '2019-03-19', -9),
(36, 'Comteller', 'Voluptatibus accusantium ducimus sed.', 'http://www.tiove.ae/arerthi/entheand/oul/ederseion.asp', '05:58:34', '2003-04-18', '2017-09-22', 925437855),
(37, 'Tabmuter', 'Quos architecto, quo ab facere odio.', 'http://esyoune.ua/entnotwa/noterear.htm', '01:33:27', '2006-09-03', '2017-10-30', 57),
(38, 'Combandeper', 'Esse culpa minima architecto.', 'http://arith.br/waveing/meheas/ent/altotedve.htm', '02:01:22', '1970-01-07', '2017-06-26', -2147483648),
(39, 'Tweetjectphone', 'Eos odio qui assumenda dolores quia et.', 'https://www.haentfornot.tr/ar/athation/ted/tedhisthioul.asp', '02:44:30', '1986-02-21', '2019-02-08', -1282034300),
(40, 'Monolifiridge', 'A qui nulla, aliquid quam ut porro aut.', 'https://butnot.ae/nottiose/ne/hahenhen/butit.php?t=10', '01:14:46', '2010-08-09', '2018-06-29', -454),
(41, 'Supmuter', 'Eum vel aut quam est consequatur iusto.', 'http://iswititing.il/enesor/ourorng/isst/uldineraal.htm', '00:00:39', '1980-03-23', '2018-08-01', -1182778416),
(42, 'Contectgary', 'Dolorum repellat voluptate quas natus.', 'http://www.wastearor.es/en/tioouor/erngthe/ingingingle.php?t=32&p=460', '03:10:35', '1979-03-02', '2019-06-10', -9961),
(43, 'Tabmutimra', 'At magnam qui et est voluptas.', 'http://www.areerewit.ca/isis/alentuld/esthit/ndndre.php', '05:53:50', '2015-08-12', '2018-07-11', -19579),
(44, 'Ancyclinon', 'Est eos adipisci optio aperiam sed.', 'http://www.hinve.lv/alan/hinhe/wa/hisve.asp', '05:19:01', '1970-01-02', '2017-12-14', 8),
(45, 'Micputator', 'Nam eaque cumque et omnis aliquid ea.', 'https://ithalneher.biz/sthe/nt/shoomeandere.php', '00:47:46', '1974-05-21', '2017-07-02', 707533429),
(46, 'Charniopentor', 'Animi pariatur expedita adipisci qui.', 'http://www.uldwaandhen.be/ereaera/shoedhadve.asp?id=953', '00:30:56', '1988-11-24', '2019-06-06', -6117),
(47, 'Tablegaer', 'A cupiditate omnis praesentium sit.', 'http://lele.hk/ith/ar/tedreit/butre.htm', '00:20:39', '1999-03-10', '2018-09-24', -1011858294),
(48, 'Chartaimentor', 'Beatae sint molestiae qui animi maxime.', 'http://ntre.biz/ouve/anverere/witseshoour.aspx', '00:41:48', '2013-03-17', '2017-06-16', -248966785),
(49, 'Playcordaquphone', 'Facere commodi reprehenderit ut.', 'http://hishin.org/anleeve/orneterou.htm', '05:24:14', '1995-02-14', '2017-12-25', -260621572),
(50, 'Tetectommer', 'Aut eveniet quibusdam vel qui maiores.', 'https://www.tiovehis.uk/hauldve/meere/healnot/areomehinoul.php', '02:24:13', '1995-04-14', '2018-08-16', 839934068);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `activation_id` int(11) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `active_from` date DEFAULT NULL,
  `active_to` date DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `point_all` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `password_hash` text,
  `mail` varchar(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(80) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `profile_pic` text,
  `statusi` int(11) DEFAULT NULL,
  `settings` int(11) DEFAULT '1',
  `joined` date DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `activation_id` varchar(100) NOT NULL,
  `sign_attemp` int(11) NOT NULL,
  `two_step` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `points_all` int(11) NOT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `password_hash`, `mail`, `name`, `surname`, `gender`, `birthday`, `adress`, `profile_pic`, `statusi`, `settings`, `joined`, `status`, `activation_id`, `sign_attemp`, `two_step`, `points`, `points_all`) VALUES
(1, 3, 'matljesca', 'nekipass', 'nekihash', 'matljesca@foi.hr', 'Matija', 'Lješčanin', 'M', '1994-08-11', 'A.Stepinca 17', 'url', NULL, 1, '2017-03-28', 'active', '', 0, 0, 90, 90),
(8, 2, 'webdip', 'jR1AJMiPs', 'b5649c9ce055fcd1d9a0f04483ca03295712a4c7', 'dujimugo@klipschx12.com', 'Mirko', 'Pirko', NULL, NULL, NULL, NULL, NULL, 1, NULL, 'active', '', 0, 0, 0, 0),
(9, 3, 'mirko', 'marija', 'aedeabf3a9172464b76012bd7e29d655f8ba81dc', 'ljescanin@gmail.com', 'Proba', 'Probica', NULL, NULL, NULL, NULL, NULL, 1, NULL, 'active', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date_from` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`user_id`, `category_id`, `date_from`, `active`) VALUES
(1, 1, '2017-06-16 03:11:42', 1),
(1, 2, '2017-06-16 03:11:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_coupons`
--

CREATE TABLE `user_coupons` (
  `coupon_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_coupons`
--

INSERT INTO `user_coupons` (`coupon_id`, `user_id`, `date_from`, `date_to`) VALUES
(2, 1, '2017-03-30', '2017-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `settings_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `json` text,
  `changed` date DEFAULT NULL,
  `2p_security` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`settings_id`, `name`, `json`, `changed`, `2p_security`) VALUES
(1, 'default', 'url', '2017-03-28', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `coupon_category`
--
ALTER TABLE `coupon_category`
  ADD PRIMARY KEY (`category_id`,`coupon_id`),
  ADD KEY `FK_coupon_category_coupons_coupon_id` (`coupon_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `FK_reservation_service_service_id` (`service_id`),
  ADD KEY `FK_reservation_users_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `FK_service_category_category_id` (`category`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`activation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_users_roles_role_id` (`role`),
  ADD KEY `FK_users_status_activation_id` (`statusi`),
  ADD KEY `FK_users_user_settings_settings_id` (`settings`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`user_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_coupons`
--
ALTER TABLE `user_coupons`
  ADD PRIMARY KEY (`coupon_id`,`user_id`),
  ADD KEY `FK_user_coupons_users_id` (`user_id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `coupon_category`
--
ALTER TABLE `coupon_category`
  ADD CONSTRAINT `FK_coupon_category_category_category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_coupon_category_coupons_coupon_id` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`coupon_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_category`
--
ALTER TABLE `user_category`
  ADD CONSTRAINT `user_category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
