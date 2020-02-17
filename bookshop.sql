-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 01:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookID` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(20) NOT NULL,
  `imgSrc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgAlt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceSite` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookID`, `name`, `description`, `price`, `imgSrc`, `imgAlt`, `priceSite`) VALUES
(1, 'Malavita', 'Roman koji je inspirisao Martina Skorsezea, Lika Besona i Roberta de Nira da snime najzabavniji film o Mafiji do sada!\r\n\r\nMožda čovek može napustiti Mafiju, ali Mafija nikada neće napustiti njega.\r\n\r\nAmerička porodica se nastanjuje u Šolonu na Avru, u Normandiji. Sve je naizgled uobičajeno. Fred, otac, tvrdi da je istoričar koji priprema knjigu o iskrcavanju. Megi, majka, volontira u jednom dobrotvornom udruženju i briljantno sprema roštilj. Bel, ćerka, časno nosi svoje ime. I najzad, bez Vorena, sina, ništa ne može da se obavi i svima je potrebna njegova pomoć. A ne smemo zaboraviti ni veoma diskretnog psa po imenu Malavita. Sve u svemu, porodica poput drugih. Osim što porodica Blejk ni u kom slučaju nije onakva kakvom želi da se prikaže jer otac nije pisac već bivši šef njujorškog mafijaškog klana koga prate agenti FBI-ja.\r\n\r\nŽivot Blejkovih, pod stalnom pretnjom odmazde, pretvoren je u niz bežanja, laži i besmislenih situacija. Sada će Fred, Megi, Bel i Voren pokušati, svako na svoj način, da pronađu smisao svog postojanja u ovom nezanimljivom malom gradu. Sve do dana kada im Don Mimino, vođa pet porodica u Njujorku, neočekivano ulazi u trag... Jedno je sigurno: ako se Blejkovi dosele u vaš kraj, bežite glavom bez obzira.', 750, 'public/images/knjige/1.jpg', 'malavita', 700),
(2, 'Jedan hitac', 'Roman po kojem je snimljen svetski filmski hit Džek Ričer.\r\n\r\n„Sjajno, neukrotivo… nestvarno, čisto zlato. Ova knjiga vas prosto naelektriše… A čitav serijal od vas napravi zavisnika.“ New York Times\r\n\r\nŠest hitaca. Petoro mrtvih. Teror je zavladao jednim provincijskim gradom. Ali policija je sve rešila u roku od nekoliko sati: sve je kristalno jasno i lako. Sve osim jednog. Optuženi izjavljuje: Uhvatili ste pogrešnog čoveka. A potom kaže: Dovedite mi Ričera.\r\n\r\nI zaista, bivši vojni istražitelj Džek Ričer dolazi. Kakav događaj iz prošlosti povezuje ovog očigledno psihopatu s bivšim vojnim policajcem koji sad luta zemljom? Ričer je uveren da nešto nije u redu – i kristalno jasan, lak slučaj puca i raspada se na komade.', 800, 'public/images/knjige/2.jpg', 'jedanhitac', 750),
(3, 'Divljaci', 'Knjiga godine po izboru Entertainment Weeklya, New York Timesa i Chichago Sun-Timesa.\r\n\r\nTriler koji ruši sva dosadašnja pravila i postavlja standarde za dvadeset prvi vek.\r\n\r\nBen – humanitarac i borac za zaštitu životne sredine i njegov drug Čon – bivši marinac i živa mašina za ubijanje, vode uspešan posao uzgajanja i prodaje hibridne marihuane bogatoj klijenteli. Njihovu sreću upotpunjuje O, opsesivna kupoholičarka i zajednička devojka.\r\n\r\nIdila traje sve dok meksički narkokartel, primoran da se širi, ne reši da preuzme svu trgovinu drogom u Kaliforniji. Ben i Čon su spremni da napuste igru, ali pod sopstvenim uslovima koji, naravno, nisu ono što im „nude“ ljudi iz kartela Baha.\r\nKada kartel bude oteo O da bi urazumeo momke potpaliće fitilj neočekivano razorne eksplozije.', 1000, 'public/images/knjige/3.jpg', 'divljaci', 850),
(4, 'Plamen na istoku', 'Godine 225. rimski Imperijum rastegnut je do pucanja, njegova vlast i moć dovode se u sumnju uzduž i popreko svih njegovih teritorija i duž svake njegove granice. No možda najsmrtonosnija pretnja vreba sa istoka, iz Persije, gde se zlokobno pomaljaju okupljene vojske sasanidskog carstva. Zabačena i odsečena utvrda Areta posmatra vojsku preko pustoline i iščekuje neizbežni napad. Jedan jedini čovek je poslat da pripremi odbranu ovog usamljenog grada – jedan jedini čovek da podupre ruševne zidove nekadašnjeg nesalomivog simbola rimske moći – čovek čije samo ime znači rat, Marko Klodije Balista. Potpuno sam, Balista je pozvan da okupi vojne snage i smogne hrabrosti da prvi nepokolebljivo stane pred najvećeg neprijatelja s kojim se Imperijum ikada suočio.    „Hari briljantno rekonstruiše život Starog sveta, a posebno njegovu vojnu tehnologiju, i uvija ga u snažnu priču čije su teme u više pogleda klasične.', 750, 'public/images/knjige/4.jpg', 'plamen', 700),
(5, 'Potraga za lasicom', 'Džefri Šejfer: čovek koji nikad ne gubi, spreman je da zaigra igru nad igrama s najvećim ulogom.\r\nAleks Kros: viši inspektor odeljenja za krvne delikte, rešen je da bez obzira na posledice raskrinka čoveka koga zove Lasica, prvoosumnjičenog za niz ubistava koja su mu zabranili da istražuje.\r\n\r\nDžejms Paterson je u Potrazi za Lasicom stvorio zastrašujućeg zlikovca kog će svaki čitalac videti u senkama kad ugasi svetlo, nežnu ljubavnu priču, zaplet koji bez prestanka izaziva vrhunsku napetost i uzbuđenje.', 900, 'public/images/knjige/5.jpg', 'lasica', 800),
(6, 'Hajduk sa druge strane', 'Peti nastavak legende o Hajduku.\r\n\r\nHajduk se vratio u svoju osnovnu školu, ali ovoga puta je sa druge strane katedre kao nastavnik, pardon profesor biologije! Gligorije je razredni starešina, a njegovo osmo pet je na zlom glasu među kolegama. I naizgled sve se ponavlja: sukobi, humor, želje, veze, razočaranja, pobede... i sve to protiče uz Unu, ali ona nije reka.\r\n\r\nMenjajući tačku sa koje se posmatra život mladića i devojaka, Gradimir Stojković nudi zabavnu i promišljenu, dinamičnu i neponovljivu priču o složenom odnosu između onih koji sazrevaju i onih sa iskustvom svih stepena odrastanja.', 630, 'public/images/knjige/6.jpg', 'hajduk', 600),
(7, 'Nož', 'Kultni roman o zločinu i praštanju, zabranjen pre 40 godina zbog „širenja nacionalne mržnje“.\r\n\r\nProgovarajući prvi put posle II svetskog rata bez ideoloških predznaka o zločinima četnika i muslimana i o paradoksima zajedničkog života pripadnika različitih nacija i vera u posleratnoj Jugoslaviji, Vuk Drašković izneće u svom romanu uzbudljivu priču o krizi identiteta, uz tezu, u vreme raspirivanja nacionalizama posle Titove smrti, da puko rođenje ne određuje čovekovu sudbinu i ne priprema ga za kasnija opredeljenja u životu, niti za pripadnost nekoj veri ili naciji, nego to zavisi od vaspitanja i okoline u kojoj se čovek formira.', 809, 'public/images/knjige/7.jpg', 'noz', 790),
(8, 'Svaštara', 'Pesme, crtice, odlomci, dokumenti\r\n\r\nŠTA SAM TO RADIO?\r\nProbijao sam led da bih mogao disati. Borio se protiv tuđe i svoje dosade. Pokušavao da se setim nečeg drugog. Izmišljao imena sopstvenim iskustvima i saznanjima. Igrao se, jer raditi ne volim. Bežao iz svog malog i siromašnog života. Udvarao se drugima. Grickao, bockao, kraduckao i živuckao.\r\nHteo sam da budem bolji pisac, ali nisam umeo.', 450, 'public/images/knjige/8.jpg', 'svastara', 430),
(9, 'Veliki pad', 'Veliki pad obuhvata jedan dan – od jutra do kasnih večernjih sati – u životu ostarelog glumca koji iz predgrađa metropole kreće u centar da mu predsednik države uruči prestižnu nagradu. Na tom putu sreće se sa beskućnicima i imigrantima, potom dolazi do napuštene pruge, gde ga policajci nakratko zaustavljaju zbog sumnje da je terorista. Ništa nije bolje ni kada kroči u samo srce grada u kojem su ljudi otuđeni i pod pogubnim uticajem savremene tehnologije.\r\n\r\nJunakova šetnja je delom hodočašće delom krstaški pohod ispunjen dubokim promišljanjem o svetu u kojem živimo.', 800, 'public/images/knjige/9.jpg', 'velikipad', 770),
(10, 'Čovek po imenu Uve', 'Upoznajte Uvea. On je džangrizalo – jedan od onih koji upiru prstom u ljude koji mu se ne dopadaju kao da su provalnici zatečeni pod njegovim prozorom. Svakog jutra Uve ide u inspekciju po naselju u kom živi. Premešta bicikle i proverava da li je đubre pravilno razvrstano – iako je već nekoliko godina prošlo otkako je razrešen dužnosti predsednika kućnog saveta. Ili otkako je „izvršen prevrat“, kako Uve govori o tome. Ljudi ga zovu „ogorčenim komšijom iz pakla“. Ali zar Uve mora da bude ogorčen samo zbog toga što ne šeta okolo sa osmehom zalepljenim na lice?', 1000, 'public/images/knjige/10.jpg', 'uve', 950),
(11, 'Svet po Garpu', 'Ovo je životopis T. S. Garpa – vanbračnog sina Dženi Filds – feministkinje koja je bila napredna za svoje vreme. Ovo je prikaz života i smrti čuvene majke i njenog zamalo čuvenog sina. Oni žive u svetu seksualnih ekstremnosti, pa čak i seksualnih ubistava. Ovo je roman pun „ludila i tuge“, a opet, mračni i nasilni događaji ove priče ne umanjuju osećaj katkad pomalo vulgarnog, a ponekad i robusnog humora.', 1300, 'public/images/knjige/11.jpg', 'garp', 1200),
(12, 'Lokijev ključ', 'Crvena Kraljica je postavila svoje figure na tablu...\r\n\r\nNakon mučne pustolovine i bezmalo pogibije, princa Džalana Kendeta surova zima primorala je da ostane daleko od raskoši svoje palate na jugu. A kako je Sever dom Džalanovog saputnika, ratnika Snorija ver Snagasona, i on je jednako željan da krenu što pre.\r\n\r\nJer viking je spreman da izazove sam Pakao kako bi vratio svoju ženu i decu u svet živih. Ima Lokijev ključ – sada još samo da pronađe prava vrata.', 1500, 'public/images/knjige/12.jpg', 'loki', 1400),
(13, 'Bajka nad Bajkama', 'Epska fantastika prema motivima bajki i pesama na kojima su odrastale generacije.\r\n\r\nSenka je slepa, ali ima nemušti jezik i razume životinje. Progone je mračne sile, ali se, slučajnošću ili voljom bogova, oko nje okuplja i mala družina heroja s moćima koje prevazilaze ljudska ograničenja. Drevna mapa izvezena magičnim nitima krije tajne koje ovu devojčicu mogu dovesti do oružja potrebnog da se pobedi prastaro zlo, pre no što junaci budu nevoljno uvučeni u ratni vihor koji se neumitno nadvija.', 630, 'public/images/knjige/13.jpg', 'bajka', 600),
(14, 'Pustinjsko koplje', 'Nastavak romana Noć demona.\r\n\r\n„Piter V. Bret spada među moje omiljene pisce.“ Patrik Rotfus\r\n\r\nZa ljudski rod sunce je na zalasku. Noć sada pripada proždrljivim demonima, koji vrebaju sve malobrojnije stanovništvo, prinuđeno da se skriva iza napola zaboravljenih simbola moći. Legende govore o Izbavitelju: generalu koji je nekada davno ujedinio čitavo čovečanstvo i porazio demone. Je li je povratak Izbavitelja samo još jedan mit? Možda i nije.', 1300, 'public/images/knjige/14.jpg', 'koplje', 1200),
(15, 'Filozofija', 'Kratko, jasno, sveobuhvatno.\r\n\r\nAutor daje širok pregled mnogih oblasti filozofije i upućuje čitaoca u filozofiju izlaganjem konkretnih primera kroz analizu Platonovih, Hjumovih, Dekartovih, Darvinovih dela i tekstova budističkih i indijskih mislilaca. Podučava nas kako da čitamo i tumačimo filozofiju, a da ne pristanemo na to da samo ovladamo nekim opštim činjenicama. Razmatra filozofiju Istoka, evropsku tradiciju mišljenja, kao i smisao i značaj bavljenja filozofijom. Raspravlja o tome kako se filozofija koristi u interesu određenih grupa – sveštenstva, žena i političkih aktivista. U knjizi se dotiču važne teme iz oblasti etike, teorije saznanja i problemi sopstva i identiteta. Objašnjava se na koji način su različite oblasti filozofije povezane, te se istražuje i kontekst u kojem su se ljudi bavili i bave se filozofijom.', 500, 'public/images/knjige/15.jpg', 'filozofija', 480),
(16, 'Sreća', 'Sve što morate da znate o njoj i zašto nije najvažnija u životu.\r\n\r\nOčigledno je da nam teško polazi za rukom da jednostavno budemo srećni. Filozof i pisac bestselera Vilhelm Šmid govori o raznim vrstama sreće i o tome šta treba da uradimo da bismo im se približili. Pritom nam pokazuje kako duboko promišljanje o važnim životnim pitanjima može da nam pomogne u boljem savladavanju izazova svakodnevice. Za nas nije najvažnija puka sreća, nego pre svega naš odnos prema životu, umeće da prihvatimo i uspone i padove i naučimo da umom i čulima pronađemo smisao u svim našim iskustvima.', 500, 'public/images/knjige/16.jpg', 'sreca', 490),
(17, 'Ipak se okreće', 'Svako je nekada čuo ili pročitao ove rečenice. Ali u kakvom su istorijskom kontekstu izrečene? I ko ih je izgovorio?\r\n\r\nOva knjiga vas vodi na jedno drugačije putovanje kroz svetsku istoriju. Na osnovu 80 poznatih citata iz perioda koji obuhvata 2600 godina, ona priča o ključnim istorijskim trenucima i oživljava pojedine epohe od antike do naših dana. Šta je za Rimsko carstvo značila kocka koju je bacio Cezar, šta je za reformaciju značila Luterova izreka, šta su Kantove reči govorile o prosvećenosti ili Kenedijeve o hladnom ratu...', 600, 'public/images/knjige/17.jpg', 'okrece', 590),
(18, 'Seobe', 'Beskrajan, plavi krug. U njemu, zvezda.\r\n\r\nNegde mora biti lakšeg života, vedrine događaja, što se slivaju kao čisti i hladni, prijatni, penušavi slapovi. Odseliti se treba zato, otići nekuda, smiriti se negde, na nečem čistom, bistrom, glatkom kao što je površina dubokih, gorskih jezera. Živeti po svojoj volji, bez ove strašne zbrke, idući za svojim životom, za koji se beše rodio. Idući nečem vanrednom, što je, kao i nebo, osećao da sve pokriva.', 450, 'public/images/knjige/18.jpg', 'seobe', 440),
(19, 'Despot i žrtva', 'Nagrade „Meša Selimović“ i „Zlatni bestseler“ i nagrada Narodne biblioteke Srbije za najčitaniju knjigu.\r\n\r\nSmešten u vreme vladavine despota Đurđa Brankovića i njegove žene Jerine, u burno doba zidanja smederevske tvrđave i osmanskog osvajanja Balkana, Despot i žrtva je istovremeno istorijski roman o zidanju Smedereva i alegorija o tvrđavi koja odoleva nadmoćnim osvajačima.', 720, 'public/images/knjige/19.jpg', 'despot', 700),
(20, 'Deobe', 'Jedno od najznačajnijih dela srpske književnosti posle Drugog svetskog rata, Ćosićeve Deobe su izazvale veliku pažnju i čitalaca i kritike zbog svoje tematskog i formalnog iskoraka u odnosu na tadašnje književne tokove. Naizgled istorijska epopeja o ravnogorskom pokretu u Srbiji, roman je zapravo metafora o podelama u istoriji i tradiciji srpskog naroda, o sudaru revolucije i zločina, nacionalnog mita i južnoslovenskih ideala, partizana i četnika, seljačkog i građanskog... Osim tematskog preokreta u dotadašnjoj književnosti socijalističkog realizma, Deobe su se izdvojile i osobenom kompozicijom, razgranatim unutrašnjim monologom, višeglasjem kao govorom društvenih masa u ulozi glavnog junaka, interpolacijom dokumentarnog materijala, stilskom raznovrsnošću i leksičkim bogatstvom. Ovim romanom Ćosić je 1961. godine postao dobitnik druge Ninove nagrade.', 1800, 'public/images/knjige/20.jpg', 'deobe', 1750),
(21, 'Nečista krv', 'Predvodnik epohe moderne srpske proze i psihološkog romana.\r\n\r\nU priči o stradanju čuvene vranjanske lepotice Sofke, prvi put u našoj književnosti, spoljašnji svet se uspostavlja kao suptilni odraz čulne uznemirenosti, intimnih doživljaja, slutnji i podsvesnih zbivanja jedne žene – izuzetne koliko lepotom toliko i snažnom samosvešću. Prvi put žensko i muško telo, erotske žudnje i seksualna htenja dobijaju prvorazredni književni značaj, a likovi žestokog temperamenta, orijentalno egzotični, određeni arhaičnim jezikom i kulturom, rastrzani između svojih nagona i društveno nametnutog postojanja, postaju tragične univerzalne figure u kojima prepoznajemo večne protivrečnosti postojanja.', 450, 'public/images/knjige/21.jpg', 'necista', 440),
(22, 'Proces', 'Jozef K., perspektivni prokurista jedne velike banke, uhapšen je na svoj 30. rođendan, rano ujutro, čim je otvorio oči. Optužba nije poznata, baš kao ni to pred kojim se sudom vodi postupak i kakav će biti njegov tok. Jozefu K. saopštavaju da sud ne želi da remeti njegov uobičajeni način života, te da se on, u skladu s tim, slobodno može vratiti svakodnevnim aktivnostima. Međutim, K. se narednih dana i meseci sve više zapliće u nevidljivu mrežu svog procesa i nedokučivog suda koji ga je pokrenuo. Korak po korak, Jozef K. saznaje da „sve pripada sudu“.', 700, 'public/images/knjige/22.jpg', 'proces', 680),
(23, 'Blago cara Radovana', 'Svi ljudi znaju da ima u životu još uvek jedno zakopano blago za svakog od njih. Svi ljudi kopaju: svi ljudi od akcije, od poleta, od sile, od vere u život i u cilj, i od vere u neverovatno i u nemogućno. Svi traže i vape za carem tog večnog nespokojstva i večnog traganja. Svet bi nestao da nema tog cara, i oslepio bi da ne sija u pomrčini njegovo naslućeno blago...', 720, 'public/images/knjige/23.jpg', 'radovan', 700),
(24, 'Andjeosko drvo', 'Očaravajuća priča o porodičnim tajnama i zaboravljenoj prošlosti\r\n\r\nProšlo je trideset godina otkad je Greta otišla iz Marčmont Hola, velelepne kuće u brdima ruralnog Monmautšira. Ali sada se uoči Božića vraća na poziv svog starog prijatelja Dejvida Marčmonta. Zbog posledica tragične nesreće koja joj je izbrisala iz sećanje dve decenije života, ona i ne sluti kakve su u prošlosti bile njene veze sa tom kućom. A onda, šetajući zimskim predelom, slučajno naiđe na grob u šumi, sa izbledelim natpisom koji joj govori da je tu sahranjen jedan dečak…', 1200, 'public/images/knjige/24.jpg', 'drvo', 1100),
(25, 'Zov kivija', 'Početak XX veka. Glorija Martin, praunuka Gvinajre Makenzi – junakinje romana U zemlji belog oblaka –  provela je idilično detinjstvo na Kivord stejšnu, porodičnoj farmi ovaca. Kada su joj roditelji javili da je došlo vreme da postane „dama“ i pohađa internat u dalekoj Engleskoj, ona je prinuđena da napusti sve što voli, pa i svog zaštitnika Džeka Makenzija. Glorija nikako ne uspeva da se prilagodi strogom životu u britanskom internatu i obuzima je neutešan osećaj samoće. Kada shvati da roditelji ne nameravaju da je vrate na Novi Zeland, ona uzima sudbinu u svoje ruke i kreće na pustolovinu koja će joj zauvek promeniti život.', 1700, 'public/images/knjige/25.jpg', 'kivija', 1650),
(26, 'Harfa za Eli', 'Upoznajte Eli: Ona je savršeno srećna u svom domu i sa svojim mužem vodi miran život. Ili bar misli da je dovoljno srećna. I zato se iskreno iznenadi kada je privuče neobični stranac koji će joj dati nesvakidašnji poklon – i otvoriti joj novi pogled na svet.\r\n\r\nUpoznajte Dena: On misli da mu je samo je potrebno da ima dovoljno mesta i vremena da pravi harfe. Ali nikako ne očekuje da Eli – u čarapama boje trešnje – uskovitla njegov život, unoseći gomilu iznenađenja i promena u njegovu uredno organizovanu svakodnevicu.', 900, 'public/images/knjige/26.jpg', 'harfa', 850),
(27, 'Ne nauditi', 'Kako se oseća čovek kada drži nečiji život u svojim rukama, kada skalpelom zaseče tamo gde se stvaraju misli, osećanja, gde se nalaze razum i svest? Kako da živite sa posledicama operacije koja je nekome trebalo da spasi život, a sve ide naopako?\r\n\r\nSa izuzetnim saosećanjem i iskrenošću vodeći britanski neurohirurg Henri Marš otkriva radost zbog uspeha, duboko emotivne trijumfe, zastrašujuće katastrofe, gorko žaljenje i trenutke crnog humora koji karakterišu život neurohirurga. Ne nauditi pruža nezaboravan uvid u bezbrojne ljudske drame koje se odvijaju u odnosu lekar – pacijent. Pre svega, to je lekcija o potrebi za nadom kada se suočavamo sa najtežim odlukama u životu', 800, 'public/images/knjige/27.jpg', 'nauditi', 780),
(28, 'Tajna uspešne dece', 'Zbog čega pojedina deca postižu uspeh, a druga doživljavaju neuspeh?\r\n\r\nSvaku priču o detinjstvu i uspehu uglavnom dovodimo u vezu s inteligencijom: uspevaju ona deca koja imaju dobar rezultat na testovima, od prijemnog za vrtić do testa SAT.\r\n\r\nAli u knjizi Tajna uspešne dece Pol Taf pokazuje da su za uspeh mnogo bitniji kvaliteti koji se odnose na karakter: istrajnost, radoznalost, savesnost, optimizam i samokontrola.', 700, 'public/images/knjige/28.jpg', 'tajna', 690),
(29, 'Jungova mapa duše', '„Jungova mapa duše iznedrila se iz kurseva koje sam godinama držao na Institutu K. G. Jung u Čikagu. Za mene je bio izazov da dam pregled najvažnijih aspekata Jungove teorije psihe, i to bez pojednostavljivanja, ali i bez dodatnog usložnjavanja. Knjiga je namenjena početnicima, da ih uvede u analitičku psihologiju, kao i onima koji su sa njom već upoznati, ali nemaju jasnu sliku. Danas se ova knjiga naširoko koristi kao priručnik. Nadam se da je ljudi mogu čitati i samo čistog zadovoljstva radi.', 850, 'public/images/knjige/29.jpg', 'jung', 840);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `quantity` int(100) NOT NULL,
  `amount` int(50) NOT NULL,
  `addedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL,
  `paymentID` int(11) DEFAULT NULL,
  `cbID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `quantity`, `amount`, `addedDate`, `userID`, `paymentID`, `cbID`) VALUES
(30, 3, 440, '2020-02-13 12:19:58', 55, 2, 18),
(31, 9, 440, '2020-02-13 12:21:33', 55, NULL, 18),
(32, 12, 440, '2020-02-13 12:37:32', 55, NULL, 18),
(33, 11, 440, '2020-02-13 12:51:34', 55, NULL, 18),
(55, 3, 840, '2020-02-13 14:15:00', 55, NULL, 29),
(56, 3, 840, '2020-02-13 14:28:50', 55, NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `name`) VALUES
(1, 'Akcioni'),
(2, 'Domaći autori'),
(3, 'Drama'),
(4, 'Epska fantastika'),
(5, 'Filozofija'),
(6, 'Istorijski'),
(7, 'Klasici'),
(8, 'Ljubavni'),
(9, 'Psihologija');

-- --------------------------------------------------------

--
-- Table structure for table `category_book`
--

CREATE TABLE `category_book` (
  `cbID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_book`
--

INSERT INTO `category_book` (`cbID`, `categoryID`, `bookID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 4, 12),
(13, 4, 13),
(14, 4, 14),
(15, 5, 15),
(16, 5, 16),
(17, 5, 17),
(18, 6, 18),
(19, 6, 19),
(20, 6, 20),
(21, 7, 21),
(22, 7, 22),
(23, 7, 23),
(24, 8, 24),
(25, 8, 25),
(26, 8, 26),
(27, 9, 27),
(28, 9, 28),
(29, 9, 29);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `fullName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `fullName`, `email`, `content`) VALUES
(7, 'Dusan Mijailovic', 'peraperic@gmail.com', 'dsdfsd'),
(17, 'Dusan Mijailovic', 'dusan.mij@gmail.com', 'hvfghfghfghfg'),
(18, 'Mika mikic', 'ledusrb@gmail.com', 'fasdasdfasdfsdafasdfdsafasdfsda'),
(19, 'Mika mikic', 'lupus.silva.lupus@gmail.com', 'Da da'),
(25, 'Ivana Ivanic', 'admin@admin.com', 'dfdsfsdf'),
(26, 'Marija Maric', 'marija@gmail.com', 'radi '),
(27, 'Jovana Jovic', 'jovana@gmail.com', 'hahahaha'),
(50, 'Isidora Lekic', 'djelita.perlas95@gmail.com', 'sdfdfssdfsdf'),
(52, 'Dusan Mijailovic', 'peraperic@gmail.com', 'rtryyttr'),
(53, 'Dusan Mijailovic', 'peraperic@gmail.com', 'sdddfssdf'),
(54, 'Ivana Ivanic', 'lupus.silva.lupus@gmail.com', 'ssdffds'),
(68, 'Dusan Mijailovic', 'peraperic@gmail.com', 'sdadassadsa'),
(69, 'Dusan Mijailovic', 'peraperic@gmail.com', 'sdfsdfdf'),
(70, 'Marija Maric', 'lupus.silva.lupus@gmail.com', 'ffffffff'),
(71, 'Ivana Ivanic', 'admin@admin.com', 'sasdasd'),
(72, 'Ivana Ivanic', 'admin@admin.com', 'sasdasd'),
(73, 'Ivana Ivanic', 'peraperic@gmail.com', 'dsfsfdsdfdsf'),
(74, 'Dusan Mijailovic', 'djelita.perlas95@gmail.com', 'sdasdsad'),
(75, 'Andjela Perlas', 'djelita.perlas95@gmail.com', 'ja sam car'),
(76, 'Andjela Perlas', 'djelita.perlas95@gmail.com', 'ja sam car'),
(77, 'Jovana Jovic', 'ledusrb@gmail.com', 'radi'),
(78, 'Milosava Miletic', 'milosava@gmail.com', 'milosava smara'),
(79, 'Dusan Mijailovic', 'peraperic@gmail.com', 'sdddffds');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderID` int(11) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderID`, `gender`) VALUES
(1, 'Muški'),
(2, 'Ženski');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuID`, `name`, `href`) VALUES
(1, 'Naslovna', 'home'),
(2, 'O autoru', 'about'),
(3, 'Kontakt', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

CREATE TABLE `paymenttype` (
  `paymentID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymenttype`
--

INSERT INTO `paymenttype` (`paymentID`, `name`) VALUES
(2, 'Keš'),
(1, 'Kreditna kartica');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `role`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `socialnetwork`
--

CREATE TABLE `socialnetwork` (
  `socialID` int(11) NOT NULL,
  `link` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialnetwork`
--

INSERT INTO `socialnetwork` (`socialID`, `link`, `icon`) VALUES
(1, 'https://www.facebook.com', 'fa-facebook-square'),
(2, 'https://www.youtube.com', 'fa-youtube'),
(3, 'https://www.instagram.com', 'fa-instagram'),
(4, 'https://www.twitter.com', 'fa-twitter');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registerDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) DEFAULT '0',
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullName`, `email`, `password`, `registerDate`, `active`, `token`, `roleID`) VALUES
(8, 'Pera Peric', 'peraperic@gmail.com', 'password1', '2020-02-06 22:02:12', 1, '', 2),
(9, 'Mika Mikic', 'mikamikic@gmail.com', 'lozinka123', '2020-02-08 12:24:18', 1, '', 2),
(11, 'Dusan Mijailovic', 'dusan.mijailovic.85.17@ict.edu.rs', '25d55ad283aa400af464c76d713c07ad', '2020-02-10 22:08:58', 0, 'ca018cafd33d965b3c79f270751968b5ebb2e801797beb4407c648d0d3211c07453e292d8f3658fa86278c740d3aa3fbe8b420195fc4c97c5368a9fd', 2),
(14, 'Ivana Ivanic', 'dusan.mij@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-02-10 22:24:15', 0, '70f1f66b1e99e090e3db5847be948c6268da457b30e107a534d3cb29278bd7e7cc1a54467e5a7b0364c117a00657fb1223ac16c96352bfae7fa09f62', 2),
(28, 'Jovana Jovic', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '2020-02-11 12:50:00', 0, 'b6fe6b2362ecae67265025c22b32fe9f4bdd7b131127a9398e0d058380391c54ab843189dbae10b3e1eae37f0af1d91289bd6334f51e1f4490aa3d69', 2),
(29, 'Isidora Lekic', 'isidoraleki@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-02-11 13:01:30', 0, 'c249605eb15408eb1059142bfab95dd8d205184f588be6c55419802649e708e29a8fbd257e3c617b3cc89a8c435880b7a36bca58e72a214ebe940e17', 2),
(33, 'Jovan Perisic', 'perisicjovan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-02-11 13:02:54', 0, '65e4a188522b477fe3042d87a5463eb6d2a76ac73dfd7b1e1e4decb362a1b099d9385df886e0d738a70ae1eabab87f3ddb9999a950f262c4fa5fb0b7', 2),
(35, 'Kriva Linija', 'krivalinija@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-02-11 13:14:06', 0, '5999091f1736bc973b694e259815b92985976c5b2b05e16a3498de1a4c38a47b72e65251b099a9e6617840b6c68fd695e27cdaaf9c505c60dad85165', 2),
(51, 'Jelena Jocic', 'jeca@gmail.com', '5116f16d3399fcb6571f571d79f35f41', '2020-02-11 14:07:29', 1, '4bce0ee72ca29f684fa854dae42e2a3695e5f4048281b929f6f04ca51543ae9cb4a5a690c5f556e1b30d0b277bf4b27d708e451a3ec4b6b971dfba9e', 2),
(54, 'Marko Markovic', 'mare@gmail.com', '5116f16d3399fcb6571f571d79f35f41', '2020-02-11 14:12:28', 0, '3e7cbd51edec903cf501e213daf90dd0fa49ad63fdb9f4d9125e49dc26bface798ef1d78b3d68a82897123104f3a35c6623e79dd06215d234b227238', 2),
(55, 'Ana Anic', 'ana@gmail.com', '5116f16d3399fcb6571f571d79f35f41', '2020-02-11 20:15:19', 1, '675917d54e8c02a4942b5ecf82807fb387cd6ec96d58c982f15ea36c76f4e87c7c52940c5486e26f9fa5a698a951c4dd90a7e53fd48c58d9d7d3e786', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `name_2` (`name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `paymentID` (`paymentID`),
  ADD KEY `cbID` (`cbID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category_book`
--
ALTER TABLE `category_book`
  ADD PRIMARY KEY (`cbID`),
  ADD KEY `categoryID` (`categoryID`),
  ADD KEY `bookID` (`bookID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`),
  ADD KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderID`),
  ADD KEY `gender` (`gender`) USING BTREE;

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `paymenttype`
--
ALTER TABLE `paymenttype`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleID`),
  ADD UNIQUE KEY `role` (`role`),
  ADD KEY `role_2` (`role`);

--
-- Indexes for table `socialnetwork`
--
ALTER TABLE `socialnetwork`
  ADD PRIMARY KEY (`socialID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_book`
--
ALTER TABLE `category_book`
  MODIFY `cbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `genderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paymenttype`
--
ALTER TABLE `paymenttype`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socialnetwork`
--
ALTER TABLE `socialnetwork`
  MODIFY `socialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`paymentID`) REFERENCES `paymenttype` (`paymentID`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cbID`) REFERENCES `category_book` (`cbID`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `category_book`
--
ALTER TABLE `category_book`
  ADD CONSTRAINT `category_book_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_book_ibfk_2` FOREIGN KEY (`bookID`) REFERENCES `book` (`bookID`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `role` (`roleID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
