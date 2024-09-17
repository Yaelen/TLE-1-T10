-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 sep 2024 om 14:28
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaiapark`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gaia_animals`
--

CREATE TABLE `gaia_animals` (
  `id` int(10) UNSIGNED NOT NULL,
  `animal` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `animal_picture` varchar(1000) NOT NULL,
  `animal_information` varchar(500) NOT NULL,
  `park` varchar(50) NOT NULL,
  `dieet` varchar(50) NOT NULL,
  `population` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gaia_animals`
--

INSERT INTO `gaia_animals` (`id`, `animal`, `age`, `animal_picture`, `animal_information`, `park`, `dieet`, `population`) VALUES
(2, 'Woolly Mammoth', 16, 'https://images.newscientist.com/wp-content/uploads/2024/03/06151715/SEI_1947788691.jpg', 'The woolly mammoth is a massive, woolly-covered elephant species that once roamed the tundras of the Ice Age. With long, curved tusks and thick fur, this herbivore plays a crucial role in maintaining the health of grassland ecosystems by preventing forest encroachment.', 'Mount Denali', 'Herbivore — grasses, shrubs, and small plants.', 78),
(3, 'Saber-Toothed Tiger', 12, 'https://www.nps.gov/whsa/learn/nature/images/Saber_Tooth.jpg?maxwidth=1300&maxheight=1300&autorotate=false', 'The saber-toothed tiger, or Smilodon, is an iconic prehistoric predator. Its long canine teeth are ideal for bringing down large prey, and its muscular build allows it to ambush animals in dense forests and open plains.', 'Mount Denali, Mount Roraima', 'Carnivore — primarily large herbivores like deer a', 23),
(4, 'Dodo', 23, 'https://t4.ftcdn.net/jpg/05/80/32/95/360_F_580329568_IrQJTThVmYi3sZ978PjNzCQ7HjsmOxal.jpg', 'The dodo, a flightless bird from Mauritius, was famously driven to extinction by humans and invasive species. Revived to inhabit protected island sanctuaries, the dodo is thriving, with its distinctive round body, small wings, and unique beak.', 'Mangrove Forest, Plitivce Lake, Amazon Rainforest,', 'Omnivore — fruits, seeds, and small insects.', 21),
(5, 'Woolly Rhinoceros', 7, 'https://nypost.com/wp-content/uploads/sites/2/2021/01/woolly-rhino-2.jpg?quality=75&strip=all', 'The woolly rhinoceros is a large, shaggy-coated herbivore once found across the frozen tundras of Europe and Asia. Now reintroduced, it helps shape grassland environments by grazing and trampling vegetation.', 'Mount Denali', 'Herbivore — grasses, shrubs, and tundra plants.', 34),
(6, 'Glyptodon', 5, 'https://www.thoughtco.com/thmb/CQ1rn-6HFsB464brcWTVQolBU20=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/glyptodonPR-56a253a73df78cf77274766e.jpg', 'The glyptodon, an enormous armored mammal resembling a giant armadillo, lived in the Americas during the Pleistocene. With its huge, domed shell and strong legs, it serves as an environmental engineer, digging into soil and clearing out dense vegetation.', 'Mount Roraima', 'Herbivore — low-lying shrubs, plants, and grasses.', 1000),
(7, 'Quagga', 6, 'https://images.fineartamerica.com/images-medium-large/quagga-like-zebra-tony-camacho.jpg', 'The quagga, a subspecies of the plains zebra, was hunted to extinction in the 19th century. Recognizable by its unique half-striped, half-brown coat, it has now been successfully revived. This grazing animal plays a key role in maintaining grassland ecosystems in southern Africa by keeping vegetation balanced.', 'Plitivce Lake, Amazon Rainforest, Mount Roraima', 'Herbivore — grasses and shrubs.', 2200),
(8, 'Deinosuchus', 9, 'https://cdn.survivetheark.com/uploads/monthly_2024_07/ASA_Deinosuchus_CC_418_12_July_StA_Cover_1200x675.png.a2ce93dc37902ac3564b7ca2efaaeb85.png', 'Deinosuchus was a gigantic, ancient relative of the modern crocodile, living around 75 million years ago during the late Cretaceous period. Measuring up to 33 feet long, this massive predator dominated rivers and coastal environments. Now revived, it thrives in controlled wetlands and marshes, where it helps manage populations of large aquatic prey.', 'Mangrove Forest, Plitivce Lake, Amazon Rainforest', 'Carnivore — large fish, turtles, and even dinosaur', 35),
(9, 'Dunkleosteus', 5, 'https://cdn.survivetheark.com/uploads/monthly_2024_07/ASA_Deinosuchus_CC_418_12_July_StA_Cover_1200x675.png.a2ce93dc37902ac3564b7ca2efaaeb85.png', 'Dunkleosteus was a massive, armored fish that lived over 350 million years ago during the Devonian period. Known for its powerful jaws lined with bony plates rather than teeth, this prehistoric predator dominated ancient oceans. Now revived, it roams in protected marine environments, giving scientists insight into its behavior and ecosystem role.', 'Mount Denali, Mangrove Forest, Plitivce Lake, Amaz', 'Carnivore — fish, squid, and other marine animals.', 491);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gaia_animals`
--
ALTER TABLE `gaia_animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gaia_animals`
--
ALTER TABLE `gaia_animals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
