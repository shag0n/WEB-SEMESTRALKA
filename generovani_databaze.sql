-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 15. pro 2014, 15:00
-- Verze serveru: 5.6.17
-- Verze PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `sp_web`
--
CREATE DATABASE IF NOT EXISTS `sp_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sp_web`;

-- --------------------------------------------------------

--
-- Struktura tabulky `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `idfilm` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(45) DEFAULT NULL,
  `rok` year(4) DEFAULT NULL,
  `delka` varchar(45) DEFAULT NULL,
  `popis` mediumtext,
  `hodnoceni` varchar(45) DEFAULT NULL,
  `zanr_idzanr` int(11) NOT NULL,
  `studio_idstudio` int(11) NOT NULL,
  PRIMARY KEY (`idfilm`),
  UNIQUE KEY `idfilm_UNIQUE` (`idfilm`),
  KEY `fk_film_zanr1_idx` (`zanr_idzanr`),
  KEY `fk_film_studio1_idx` (`studio_idstudio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `film`
--

INSERT INTO `film` (`idfilm`, `nazev`, `rok`, `delka`, `popis`, `hodnoceni`, `zanr_idzanr`, `studio_idstudio`) VALUES
(1, 'Piráti z Karibiku: Prokletí Černé perly', 2003, '143 min', 'Třpytivé vody Karibiku jsou pro darebáckého, ale šarmantního kapitána Jacka Sparrowa nevyčerpatelným zdrojem tajemných a vzrušujících dobrodružství. Jeho idylický život se však razantně změní ve chvíli, kdy se lstivý kapitán Barbossa zmocní jeho lodi Černá perla a napadne město Port Royal, odkud unese guvernérovu okouzlující dceru Elizabeth Swann. Její kamarád z dětství Will Turner se spolu s Jackem vydává na palubě nejrychlejší lodi britské flotily na odvážnou výpravu za záchranou Elizabeth a ukradené Černé perly. V patách je jim Elizabethin snoubenec, sympatický a ctižádostivý Commodore Norrington. Will ale netuší, že je Barbossa i s celou svou pirátskou posádkou pod vlivem prokletí, které jej odsuzuje k věčnému životu ve světě nemrtvých a každou noc jej proměňuje v živého kostlivce. Kletbu může zlomit pouze vrácení ukradené části prokletého pokladu na jeho původní místo. Posádky obou lodí se vydávají vstříc vzrušujícímu střetnutí s Barbossou na tajemný ostrov Isla de Muerta. Když pak pozvednou své meče k souboji s obávanými piráty Karibiku, je v sázce Jackova pomsta, Černá perla, zapomenutý poklad, zlomení kletby nad Barbossou a jeho posádkou, osud britské námořní flotily a v neposlední řadě také životy našich statečných hrdinů.(oficiální text distributora)\r\n', '83%', 1, 1),
(2, 'Piráti z Karibiku: Na vlnách podivna', 2011, '131 min', 'Johnny Depp se vrací ke své ikonické roli kapitána Jacka Sparrowa v akčním příběhu plném pravdy, zrady, mládí a odchodů. Když se Jack setká se ženou ze své minulosti (Penelope Cruz), není si jistý, zda jde o lásku - nebo zda tato žena jen „hraje na city“ a využívá ho, aby našla legendární Pramen mládí. Když ho donutí, aby vstoupil na palubu Queen Anne’s Revenge, lodi obávaného piráta Černovouse (Ian McShane), Jack se ocitá v nečekaném dobrodružství, kde neví, koho se obávat více: Černovouse nebo ženy ze své minulosti. Film bude uveden v českých kinech ve 3D s dabingem, ve 2D s dabingem i s titulky.(oficiální text distributora)', '63%', 1, 1),
(3, 'Piráti z Karibiku: Na konci světa', 2007, '161 min', 'V pokračování filmu PIRÁTI Z KARIBIKU: TRUHLA MRTVÉHO MUŽE, který v roce 2006 lámal rekordy, nacházíme naše hrdiny Willa Turnera (Orlando Bloom) a Elizabeth Swannovou (Keira Knightley) v okamžiku, kdy se přidali ke kapitánu Barbossovi (Geoffrey Rush) a zoufale pátrají po kapitánu Jacku Sparrowovi (Johnny Depp), aby ho osvobodili z pasti ve skříňce Davyho Jonese, která mu zatemňuje mysl – zatímco strašidelná loď duchů Bludný Holanďan a Davy Jones, pod kontrolou Východní indické obchodní společnosti rozsévají zkázu všude po sedmi mořích.\r\n\r\nObdobí pirátů se blíží ke svému konci, ale dosud nebyla vyřešena konečná rozepře. Will Turner se plaví na daleký východ, aby našel magické mapy, které mu pomohou najít skříňku Davyho Jonese a zachránit svého přítele Jacka Sparrowa. Jacka zachrání, ale… Davy Jones, lord Cutler Beckett, zuřivý asijský pirát Sao Feng a starší kapitán James Norrington zformovali nepřátelské spojenectví, které ohrožuje Jacka Sparrowa, Willa Turnera, Elizabeth Swann, jejich nového přítele kapitána Barbossu a všechny piráty na světě. Aby dosáhl vítězství, musí Jack se svou posádkou plout mimo okraj mapy, do nezmapovaného teritoria sedmi moří. Na Shipwreck Island (Ostrov vraků) až na konec světa.(oficiální text distributora)', '65%', 1, 1),
(4, 'Piráti z Karibiku: Truhla mrtvého muže', 2006, '150 min', 'Nový kapitán Černé perly, Jack Sparrow (Johnny Depp) zjišťuje, že jeho život má propadnout legendárnímu nemrtvému pirátovi Davey Jonesovi (Bill Nighy), jenž vládne mořským hlubinám z paluby své přízračné lodi Bludný Holanďan, kterému se upsal krví. Ve snaze vyhnout se věčnému zatracení vyhledá Jack pomoc starého známého Willa Turnera (Orlando Bloom) a jeho snoubenky Elizabeth (Keira Knightley), kteří musí opustit své svatební plány a vydat se na dobrodružnou výpravu napříč Karibikem.\r\n', '73%', 1, 1),
(5, 'Strážci Galaxie', 2014, '122 min', 'V tomto akcí nabitém, výpravném vesmírném dobrodružství se odvážný dobrodruh Peter Quill stává středem zájmu nájemných zabijáků poté, co Ronanovi, mocnému padouchovi s plány ohrožující celý vesmír, ukradne tajemnou kouli. Aby neúnavnému Ronanovi unikl, je Quill nucen spojit své síly se čtveřicí pozoruhodných hrdinů – Rocketem, po zuby ozbrojeným mývalem, Grootem, humanoidem, který připomíná strom, vražednou a tajemnou Gamorou a pomstychtivým Draxem Ničitelem. Když ale Quill objeví skutečnou moc koule a hrozbu, která se v ní ukrývá a ohrožuje celý vesmír, musí udělat vše pro to, aby nesourodá skupina táhla za jeden provaz a v posledním zoufalém souboji se pokusila zachránit osud celé galaxie.', '82%', 2, 2),
(6, 'Avengers', 2012, '143 min', 'Marvel Studios uvádí super hrdinský tým všech dob Avengers, ve kterém se přestaví ikoničtí super hrdinové – Iron Man, Neuvěřitelný Hulk, Thor, Captain America, Hawkeye a Black Widow. Když se objeví nečekaný nepřítel, který ohrožuje světovou bezpečnost, Nick Fury, ředitel mezinárodní mírové agentury, známé také jako S.H.I.E.L.D., zjistí, že potřebuje tým, aby odvrátil světovou katastrofu. Začíná provádět nábor po celém světě.(oficiální text distributora)\r\n', '83%', 0, 2);

-- --------------------------------------------------------

--
-- Struktura tabulky `hraje`
--

DROP TABLE IF EXISTS `hraje`;
CREATE TABLE IF NOT EXISTS `hraje` (
  `herec_idherec` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  `role` varchar(45) DEFAULT NULL,
  `plat` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`film_idfilm`,`herec_idherec`),
  KEY `fk_herec_has_film_film1_idx` (`film_idfilm`),
  KEY `fk_herec_has_film_herec_idx` (`herec_idherec`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `hraje`
--

INSERT INTO `hraje` (`herec_idherec`, `film_idfilm`, `role`, `plat`) VALUES
(1, 1, 'Jack Sparrow', NULL),
(2, 1, 'Will Turner', NULL),
(3, 1, 'Elizabeth Swann', NULL),
(1, 2, 'Jack Sparrow', NULL),
(1, 3, 'Jack Sparrow', NULL),
(2, 3, 'Will Turner', NULL),
(3, 3, 'Elizabeth Swann', NULL),
(1, 4, 'Jack Sparrow', NULL),
(2, 4, 'Will Turner', NULL),
(3, 4, 'Elizabeth Swann', NULL),
(6, 5, 'Peter Quill', NULL),
(7, 5, 'Gamora', NULL),
(20, 5, 'Groot', NULL),
(9, 6, 'Tony Stark', NULL),
(10, 6, 'Black Widow', NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `napsal`
--

DROP TABLE IF EXISTS `napsal`;
CREATE TABLE IF NOT EXISTS `napsal` (
  `osoba_idosoba` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`osoba_idosoba`,`film_idfilm`),
  KEY `fk_osoba_has_film_film2_idx` (`film_idfilm`),
  KEY `fk_osoba_has_film_osoba2_idx` (`osoba_idosoba`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `napsal`
--

INSERT INTO `napsal` (`osoba_idosoba`, `film_idfilm`) VALUES
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(8, 5),
(12, 6);

-- --------------------------------------------------------

--
-- Struktura tabulky `osoba`
--

DROP TABLE IF EXISTS `osoba`;
CREATE TABLE IF NOT EXISTS `osoba` (
  `idosoba` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(45) DEFAULT NULL,
  `prijmeni` varchar(45) DEFAULT NULL,
  `narozen` date DEFAULT NULL,
  `zemrel` date DEFAULT NULL,
  `pohlavi` varchar(45) DEFAULT NULL,
  `popisosoby` mediumtext,
  `hodnoceniosoby` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idosoba`),
  UNIQUE KEY `idherec_UNIQUE` (`idosoba`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Vypisuji data pro tabulku `osoba`
--

INSERT INTO `osoba` (`idosoba`, `jmeno`, `prijmeni`, `narozen`, `zemrel`, `pohlavi`, `popisosoby`, `hodnoceniosoby`) VALUES
(1, 'Johnny', 'Depp', '1963-06-09', NULL, 'muž', 'Celým jménem John Christopher Depp II se narodil 9. června 1963 v Owensboro ve státě Kentucky, jako nejmladší ze čtyř sourozenců. Jeho otec byl inženýr a matka v domácnosti. Následně se s rodinou přestěhovali na Floridu, kde chodil na střední školu. Jeho rodiče se rozvedli, když mu bylo 15 a on už v té době bral drogy a kradl. Jeho velkým koníčkem byla hra na kytaru. Dokonce si založil vlastní kapelu a jejich největším úspěchem bylo, když dělali předskokany Iggymu Popovi, se kterým se později Depp setkal i před kamerou v pár filmech a svěřil mu i malou roličku ve svém režijním počinu BOJOVNÍK (1997).', '100%'),
(2, 'Orlando', 'Bloom', '1997-01-13', NULL, 'muž', 'Do roku 2001 téměř neznámé jméno. Poté známe po celém světě. Jedna z hlavních postav trilogie PÁNA PRSTENŮ za sebou nemá příliš moc filmů, ale to se asi brzy vše změní. Je mladý a je teprve na začátku své cesty a už má za sebou nělikok trháků.', '100%'),
(3, 'Keira', 'Knightley', '1985-03-26', NULL, 'žena', 'Keira Knightleyová se narodila 26. března roku 1985 v Teddingtonu ve Velké Británii. Původně se jmenovala Kiera, ale Keira se přece jenom lépe čte a vyslovuje. Herecké předpoklady měla už od narození, protože její otec Will hrál v divadle a v televizi a matka Sharman hrála až těsně do jejího narození. Už od mala chtěla být herečkou a toužila mít vlastního agenta. Bohužel trpěla dyslexií, ale za pomoci své matky se jí tento handicap podařilo překonat. Její agent, kterého jí nakonec rodiče pořídili už v sedmi letech zařídil první setkání s kamerou. A to v televizním filmu ROYAL CELEBRATION. Podle nařízení rodičů však směla hrát pouze o prázdninách, aby neflákala školu. Ale i tak získavala další praxi v televizi.', '95%'),
(4, 'Gore', 'Verbinski', '1964-03-16', NULL, 'muž', 'Režijne debutoval celovečerákom, ktorý s PEACEMAKEROM a DRVIVÝM DOPADOM zahajoval kariéru DreamWorksu. HON NA MYŠ sa rozpútal po tom, čo sa zákerný hlodavec rozhodol zabrániť popleteným bratom (pripomínajúcich Laurela a Hardyho, inak ale Nathan Lane a Lee Evans) predať drahý dom. Ťažko povedať, či bol Verbinski skôr priemerným úspechom rodinnej komédie znechutený Hollywoodom, alebo si len potreboval oddýchnuť, ale rozhodol sa natočiť nezávislý filmík o rozhádanom páre, mafiánskom zabijakovi a prekliatej pištoli, ktorej sa hovorí MEXIČAN. Film v Amerike zarobil veľké peniaze, veď koľko krát sa pred kamerou stretne Brad Pitt s Juliou Robertsovou?\r\n', '80%'),
(5, 'Ted', 'Elliott', '1961-07-04', NULL, 'muž', 'Ted Elliott je známý americký scenárista, který se svým kolegou a také scenáristou Terrym Rossio napsali scénáře k jedněm z nejúspěšnějším americkým filmům za posledních 15 let. Patří mezi ně například PIRÁTI Z KARIBIKU, SHREK nebo ALLADIN. Ted patří mezi neuznávanější scenárista v USA, v roce 2004 byl do představenstva organizace: Writers Guild of America. Je také spoluzakladatel internetových stránek Wordplayer.com, jsou to stránky zaměřené na profesionální scenáristiku. V roce 2013 má vyjít film The Lone Ranger, ke kterému píše scénář ve spolupráci s Terrym Rosio.', '80%'),
(6, 'Chris', 'Pratt', '1979-06-21', NULL, 'muž', 'Americký herec Christopher Michael Pratt se narodil 21.06.1979 ve Virginii ve státě Minnesota. Poté, co úspěšně dokončil střední školu, tak se přestěhoval na Hawaii. Zde pracoval jako číšník v několika restauracích a v jedné z nich si ho všimla i herečka Rae Dawn Chong, kterou zaujal jeho smysl pro humor. Herečka chystala v roce 2000 svůj režijní debut a Chrisovi v něm svěřila hlavní roli. A i když se snímek CURSED PART 3 nakonec moc nepovedl, Chrisovi se herectví zalíbilo a o své budoucnosti měl jasno. \r\n', '92%'),
(7, 'Zoe', 'Saldana', '1978-06-19', NULL, 'žena', 'Zoe, plným jménem Zoe Yadira Zaldaňa Nazario, se narodila v 78. roce v New Jersey. Sedm let však strávila v Dominikánské republice, kde studovala balet, jazzové, moderní a latinskoamerické tance. Po studiích se znovu vrátila do Ameriky, aby svá studia ještě rozšířila o herectví.\r\n', '85%'),
(8, ' James', ' Gunn', '1970-08-05', NULL, 'muž', 'James Edwin Gunn se narodil 5. srpna 1970 v St Louis, Missouri. Má čtyři bratry, herce Seana Gunna, herce a politického spisovatele Matta Gunna, producenta Patricka Gunna  a spisovatele Briana Gunna a jednu sestru.\r\n', '84%'),
(9, 'Robert', 'Downey Jr.', '1965-04-04', NULL, 'muž', 'Robert Downey Jr. se narodil 4.4.1965 v New Yorku City ve Spojených Státech. Jako syn nezávislého filmaře Roberta Downeyho Sr. a herečky Elsie Ford se Robert dostal před kameru již ve svých pěti letech ve filmu Pound. Kvůli otcově práci se rodina často stěhovala, Robert krátce studoval balet v Londýně a po rozvodu svých rodičů zůstal s otcem v New Yorku. Později se však odstěhoval do Los Angeles a rok navštěvoval střední školu v Santa Monice, dokud do nevyhodili.\r\n', '93%'),
(10, 'Scarlett', 'Johansson', '1984-11-22', NULL, 'žena', 'Scarlett poprvé dosáhla světového uznání za své ztvárnění Grace McLean, dospívající dívku traumatizovanou po pádu z koně v The Horse Wisperer v režii Roberta Redforda. Později její ztvárnění Rebeccy v Ghost World režiséra Terry Zwiggoffa (spolu s Thorou Birch) ji vyneslo cenu The Toronto Film Critics Asociation za nejlepší výkon ve vedlejší roli.', '90%'),
(11, ' Joss', 'Whedon', '1964-06-23', NULL, 'muž', 'Joss Whedon, známy tiež ako Joseph Hill Whedon strávil svoje detstvo na Manhattane, predtým než nastúpil na strednú chlapčenskú školu v Anglicku. Potom sa vrátil do Štátov, kde úspešne absolvoval štúdium filmu. Po presťahovaní do slnečného Los Angeles sa po roku neúspešného hľadania práce uplatnil ako jeden zo scenáristov sitcomu Roseanne.', '86%'),
(12, 'Zak', 'Penn', '1968-12-03', NULL, 'muž', 'Zak Penn is an American screenwriter and director.[1] Penn wrote and directed Incident at Loch Ness, The Grand, and Atari: Game Over and co-wrote the script for X-Men: The Last Stand and the story for The Avengers. With Michael Karnow, Penn is the co-creator of the TV series Alphas on the Syfy network.[2]\r\n', '76%'),
(20, 'Vin', 'Diesel', '1967-07-18', NULL, 'muž', 'Vin Diesel patří k malé řadě hollywoodských tajnůstkářů, kteří na sebe nikdy moc neprozradí, ale přesto se už o něm řada věcí ví.Třeba to, že se narodil v roce 1967 (18.července) jako Mark Vincent a jeho matka byla rozvedená astroložka, která Marka (nebo Vina) vychovávala v New Yorku s jeho nevlastním otcem - černošským divadelním režisérem. V dětství byl Vin pěkný rebel. K hraní se dostal už v dětství v divadle Greenwich Village - to se svými kamarády původně přišli „lehce zdemolovat“, ale nakonec tam většina z nich za 20 dolarů na týden hrála.', '93%');

-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `pohled_1`
--
DROP VIEW IF EXISTS `pohled_1`;
CREATE TABLE IF NOT EXISTS `pohled_1` (
`idosoba` int(11)
,`jmeno` varchar(45)
,`prijmeni` varchar(45)
,`narozen` date
,`zemrel` date
,`pohlavi` varchar(45)
,`popisosoby` mediumtext
,`hodnoceniosoby` varchar(45)
);
-- --------------------------------------------------------

--
-- Zástupná struktura pro pohled `pohled_2`
--
DROP VIEW IF EXISTS `pohled_2`;
CREATE TABLE IF NOT EXISTS `pohled_2` (
`idosoba` int(11)
,`jmeno` varchar(45)
,`prijmeni` varchar(45)
,`narozen` date
,`zemrel` date
,`pohlavi` varchar(45)
,`popisosoby` mediumtext
,`hodnoceniosoby` varchar(45)
);
-- --------------------------------------------------------

--
-- Struktura tabulky `reziruje`
--

DROP TABLE IF EXISTS `reziruje`;
CREATE TABLE IF NOT EXISTS `reziruje` (
  `osoba_idosoba` int(11) NOT NULL,
  `film_idfilm` int(11) NOT NULL,
  PRIMARY KEY (`osoba_idosoba`,`film_idfilm`),
  KEY `fk_osoba_has_film_film1_idx` (`film_idfilm`),
  KEY `fk_osoba_has_film_osoba1_idx` (`osoba_idosoba`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `reziruje`
--

INSERT INTO `reziruje` (`osoba_idosoba`, `film_idfilm`) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(8, 5),
(11, 6);

-- --------------------------------------------------------

--
-- Struktura tabulky `studio`
--

DROP TABLE IF EXISTS `studio`;
CREATE TABLE IF NOT EXISTS `studio` (
  `idstudio` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(45) DEFAULT NULL,
  `adresa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idstudio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `studio`
--

INSERT INTO `studio` (`idstudio`, `nazev`, `adresa`) VALUES
(1, 'The Walt Disney Company', 'Los Angeles, California, USA'),
(2, 'Marvel', 'Long Island City, NY 11101');

-- --------------------------------------------------------

--
-- Struktura tabulky `zanr`
--

DROP TABLE IF EXISTS `zanr`;
CREATE TABLE IF NOT EXISTS `zanr` (
  `idzanr` int(11) NOT NULL,
  `popis` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idzanr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `zanr`
--

INSERT INTO `zanr` (`idzanr`, `popis`) VALUES
(0, 'Akční'),
(1, 'Dobrodružný'),
(2, 'Komedie'),
(3, 'Drama');

-- --------------------------------------------------------

--
-- Struktura pro pohled `pohled_1`
--
DROP TABLE IF EXISTS `pohled_1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pohled_1` AS select distinct `osoba`.`idosoba` AS `idosoba`,`osoba`.`jmeno` AS `jmeno`,`osoba`.`prijmeni` AS `prijmeni`,`osoba`.`narozen` AS `narozen`,`osoba`.`zemrel` AS `zemrel`,`osoba`.`pohlavi` AS `pohlavi`,`osoba`.`popisosoby` AS `popisosoby`,`osoba`.`hodnoceniosoby` AS `hodnoceniosoby` from (`osoba` join `hraje` on((`osoba`.`idosoba` = `hraje`.`herec_idherec`)));

-- --------------------------------------------------------

--
-- Struktura pro pohled `pohled_2`
--
DROP TABLE IF EXISTS `pohled_2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pohled_2` AS select `osoba`.`idosoba` AS `idosoba`,`osoba`.`jmeno` AS `jmeno`,`osoba`.`prijmeni` AS `prijmeni`,`osoba`.`narozen` AS `narozen`,`osoba`.`zemrel` AS `zemrel`,`osoba`.`pohlavi` AS `pohlavi`,`osoba`.`popisosoby` AS `popisosoby`,`osoba`.`hodnoceniosoby` AS `hodnoceniosoby` from ((`osoba` join `hraje` on((`osoba`.`idosoba` = `hraje`.`herec_idherec`))) join `film` on((`hraje`.`film_idfilm` = `film`.`idfilm`))) where (`hraje`.`film_idfilm` = 5);

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_studio1` FOREIGN KEY (`studio_idstudio`) REFERENCES `studio` (`idstudio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_film_zanr1` FOREIGN KEY (`zanr_idzanr`) REFERENCES `zanr` (`idzanr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `hraje`
--
ALTER TABLE `hraje`
  ADD CONSTRAINT `fk_herec_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_herec_has_film_herec` FOREIGN KEY (`herec_idherec`) REFERENCES `osoba` (`idosoba`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `napsal`
--
ALTER TABLE `napsal`
  ADD CONSTRAINT `fk_osoba_has_film_film2` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_osoba_has_film_osoba2` FOREIGN KEY (`osoba_idosoba`) REFERENCES `osoba` (`idosoba`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `reziruje`
--
ALTER TABLE `reziruje`
  ADD CONSTRAINT `fk_osoba_has_film_film1` FOREIGN KEY (`film_idfilm`) REFERENCES `film` (`idfilm`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_osoba_has_film_osoba1` FOREIGN KEY (`osoba_idosoba`) REFERENCES `osoba` (`idosoba`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
