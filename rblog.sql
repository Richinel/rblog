-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 jul 2017 om 00:01
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rblog`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `blogposts`
--

CREATE TABLE `blogposts` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `blogposts`
--

INSERT INTO `blogposts` (`id`, `type`, `title`, `image`, `content`, `posted_by`, `date`) VALUES
(1, 'guide', 'Pokki - Hoe te verwijderen?', 'banner8.jpg', '<p>Dus check.</p>\r\n<p>Je zoekt een programma waarmee je foto\'s heel simpel mee kan bewerken. Je vindt PhotoShop te duur en/of te uitgebreid, maar Paint is dan weer net t&eacute; simpel. Je vindt een leuk pakket ergens op een random website en je denkt \'H&eacute;, dit ziet er wel leuk uit\'. Aight, vervolgens download je het, installeer je het en klaar. Nadat je het hebt ge&iuml;nstalleerd open je het programma, maar tegelijkertijd merk je dat er rare dingen gebeuren. Opeens openen er random programma\'s, worden er 80.000 tabbladen geopend met porneaux, of wordt er opeens een random thema ge&iuml;nstalleerd waar je nooit en te never om gevraagd hebt. Newsflash: je bent het slachtoffer geworden van&nbsp;<strong>Malware.</strong></p>\r\n<h3>Malware/spyware</h3>\r\n<p>Malware (vaak ook bekend als spyware) is eigenlijk niets anders dan een programma of een ander stuk software dat (vaak onopgemerkt) wordt ge&iuml;nstalleerd tijdens de installatie van een programma die jij hebt gedownload. Dit gebeurd genoeg mensen (mij ook lol), dus je bent zeker niet de enige.&nbsp;</p>\r\n<h3>Installatie</h3>\r\n<p>Weet je wat het is? Tijdens het installatieproces van een programma klikken de meeste mensen te snel door. Je wilt dat programma immers asap gebruiken, toch? Da ken, maar velen letten niet op wat ze onbewust allemaal accepteren. <br />Zo een installatieproces heet trouwens een wizard. Dit is tot stand gebracht om de gebruiker ervan bewust te maken wat er wordt ge&iuml;nstalleerd.&nbsp;</p>\r\n<blockquote>\r\n<p>&nbsp;\"Dus check deze dan! Dit is gewoon een quote a mattie =0\"</p>\r\n</blockquote>\r\n<p><img src=\"assets/js/tinymce/filemanager/uploads/GitError.png\" alt=\"\" width=\"561\" height=\"337\" /></p>\r\n<p><img src=\"aventis/assets/js/tinymce/filemanager/uploads/untitled-68.png\" alt=\"\" width=\"800\" height=\"600\" /></p>\r\n<p><img src=\"aventis/assets/js/tinymce/filemanager/uploads/6NfmQ.jpg\" alt=\"\" width=\"480\" height=\"445\" /></p>', 'Richinel Jarbandhan', '2017-21-25'),
(3, 'tips', 'Tips om jouw een betere developer te maken', 'banner3.jpg', '<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>\r\n<p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.</p>\r\n<p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.</p>', 'Rohit Debidien', '21-04-2017'),
(4, 'tips', 'De valkuilen voor/van een beginnende webdeveloper', 'banner4.jpg', '<p><strong>Als webdeveloper gaat er echt een hele nieuwe wereld voor je open zodra je iets als bijvoorbeeld een nieuwe programmeertaal, functie of error ontdekt (errors maken de developer, bro). Omdat alles nog nieuw is ga je natuurlijk alles uitproberen. Dit is trouwens niets nieuws. Zowat elke ontwikkelaar begint zo. Uiteindelijk specialiseer je je in een bepaalde branche. Voor mij is dat de webdevelopment geworden. Wat vind ik leuker? Front-end of backend? Ik doe van beiden wat, maar daar zal ik in een andere post wat dieper op in gaan, bruurtjes.</strong></p>\r\n<p>Ik zit zelf ook al een tijdje in de game, dus ik heb genoeg dingen gezien en meegemaakt waarbij ik achteraf dacht&nbsp;van&nbsp;\"Kil, wtf dacht ik toen ik dat maakte..\".</p>\r\n<p>Dat je zulke gedachten hebt over projecten die je weken/maanden/jaren geleden hebt gemaakt is een zwaar goed teken. Dat noemen ze progress en dat moet je echt blijven volhouden. Hieronder 5 valkuilen die ik persoonlijk heb ervaren toen ik pas begon. Dus luister en huiver, kinders..</p>\r\n<h3>&nbsp;1. Concrete en duidelijke benamingen van je css-classes</h3>\r\n<p>Dit is iets waar ik in het begin echt geen rekening mee hield. Als ik bijvoorbeeld een div aanmaakte gaf ik het altijd een random naam. Vaak ook een naam die nooit wait met de betreffende div te maken had. Div class = front_header, voor een navigatie bijvoorbeeld.. Kil wtf..</p>\r\n<p>Als je een div maakt waarin je bijvoorbeeld je navigatiestructuur maakt, zorg en dan altijd voor dat de class een logische naam heeft. Noem het bijvoorbeeld&nbsp;<em>nav</em>, of&nbsp;<em>navigation</em>. Zo hou je het niet alleen overzichtelijk voor jezelf , maar ook als je met meerdere br&uuml;ders aan &eacute;&eacute;n project werkt =</p>', 'Richinel Jarbandhan', '17-03-2017');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Richinel Jarbandhan', 'rj_1993@live.nl', 'wachtwoord');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
