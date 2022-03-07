-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Wrz 2021, 16:58
-- Wersja serwera: 5.7.31
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pytania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ee08`
--

DROP TABLE IF EXISTS `ee08`;
CREATE TABLE IF NOT EXISTS `ee08` (
  `nrPyt` int(11) NOT NULL AUTO_INCREMENT,
  `pyt` text,
  `odpA` text,
  `odpB` text,
  `odpC` text,
  `odpD` text,
  `obraz` text,
  `poprawna` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`nrPyt`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ee08`
--

INSERT INTO `ee08` (`nrPyt`, `pyt`, `odpA`, `odpB`, `odpC`, `odpD`, `obraz`, `poprawna`) VALUES
(1, 'Na rysunku procesor oznaczony jest numerem:', '2', '3', '5', '8', 'ee08/1.png', 'A'),
(2, 'Na rysunku karta rozszerzeń oznaczona jest numerem:', '1', '4', '6', '7', 'ee08/2.png', 'B'),
(3, 'Rysunek przedstawia pamięć: ', 'SIMM', 'DDR DIMM', 'SDRAM DIMM', 'Compact Flash', 'ee08/3.png', 'C'),
(4, 'W przedstawionej na schemacie płycie głównej zasilanie należy podłaczyć do złącza oznaczonego numerem: ', '3', '5', '6', '7', 'ee08/4.png', 'C'),
(5, 'Wprzedstawionej na schemacie płycie głównej złącze PCI oznaczone jest numerem: ', '1', '2', '3', '4', 'ee08/5.png', 'D'),
(6, 'Złącze AGP służy do podłączenia: ', 'szybkich pamięci dyskowych', 'urządzeń wejścia/wyjścia', 'kart graficznych', 'modemu', NULL, 'C'),
(7, 'Do którego wyprowadzenia należy podłączyć głośniki aktywne w karcie dźwiękowej, której schemat funkcjonalny przedstawia rysunek?', 'Mic in', 'Line in', 'Line out', 'Speaker out', 'ee08/7.png', 'C'),
(8, 'Który z elementów pokaznych na schemacie karty dźwięowej na ryunku służy do cyfrowego przetwarzania sygnałów?', 'Przetwornik A/D', 'Procesor DSP', 'Syntezator', 'Mikser', 'ee08/8.png', 'B'),
(9, 'Warunkiem niezbędnym przy archiwizacji danych jest: ', 'kompresja danych', 'kopiowanie danych', 'kompresja i kopiowanie danych', 'kompresja i kopiowanie danych z jednoczesnym ich szyfrowaniem', NULL, 'B'),
(10, 'Ile komórek pamięci można zaadresować bezpośrednio w 64-bitowym procesorze, który ma 32-bitową szynę adresową?', '2 do potęgi 32', '2 do potęgi 64', '32 do potęgi 2', '64 do potęgi 2', NULL, 'A'),
(11, 'Co oznacza zwrot \'wykonanie backupu systemu\'?', 'Zamknięcie systemu', 'Ponowne uruchomienie systemu', 'Wykonanie aktualizacji systemu', 'Wykonanie kopii zapasowej systemu', NULL, 'D'),
(12, 'Klaster komputerowy to: ', 'Komputer z macierzą dyskową', 'Komputer z wieloma procesorami', 'Grupa komputerów pracujących współbieżnie tak, jakby był to jeden komputer', 'Komputer zapasowy, na którym co pewien czas wykonywana jest kopia systemu głównego', NULL, 'C'),
(13, 'Pamięć oznaczona symbolem PC3200 nie może współpracować z magistralą:', '300 MHz', '333 MHz', '400 MHz', '533 MHz', '', 'D'),
(14, 'Co oznacza jednostka dpi podawana w parametrach katalogowych skanerów i drukarek?', 'punkty na cal', 'gęstość optyczną', 'punkty na milimetr', 'punkty na centymetr', '', 'A'),
(15, 'Jaka jest maksymalna prędkość odczytu płyt CD-R w napędzie oznaczonym x48?', '480 kB/s', '4800 kB/s', '7200 kB/s', '10000 kB/s', '', 'C'),
(16, 'Funkcje różnych kategorii (daty i czasu, finansowe, tekstowe, matematyczne, statystyczne) są elementem składowym:', 'edytora tekstu', 'przeglądarki internetowej', 'arkusza kalkulacyjnego', 'programów do tworzenia prezentacji multimedialnych', '', 'C'),
(17, 'Analizując rysunek zauważamy, że limit zadeklarowanej pamięci wynosi 620976KB. Widać jednocześnie, że zainstalowanej pamięci fizycznej w analizowanym systemie jest mniej niż pamięci zadeklarowanej. Jaki typ pamięci decyduje w tym wypadku o zwiększeniu limitu pamięci zadeklarowanej ponad wielkość zainstalowanej pamięci fizycznej?', 'pamięć cache procesora', 'pamięć pliku stron', 'pamięć RAM', 'pamięć jądra', 'ee08/17.png', 'B'),
(18, 'Urządzenie komputerowe, które bezwzględnie powinno być podłączone do sieci za pośrednictwem UPS, to:', 'dysk zewnetrzny', 'drukarka atramentowa', 'serwer sieciowy', 'ploter', '', 'C'),
(19, 'Z jakiego systemu plików należy skorzystać instalując Linuxa, by mieć możliwość definiowania uprawnień do plików i folderów?', 'EXT2', 'FAT32', 'NTFS', 'ISO9660', '', 'A'),
(20, 'W celu zdalnego i przy tym bezpiecznego administrowania system Linux należy wykorzystać protokół:', 'FTP', 'Telnet', 'SMTP', 'SSH2', '', 'D'),
(21, 'Cechą charakterystyczną wirusów polimorficznych jest to, że:', 'atakują tablicę FAT', 'atakują rekord startowy dysku', 'zarażają wszystkie komputery w sieci lokalnej', 'mają cechę polegającą na modyfikowaniu swojego kodu', '', 'D'),
(22, 'Na komputerze podłączonym do Internetu, w programie antywirusowym bazę wirusów należy aktualizować co najmniej:', 'raz dziennie', 'raz w tygodniu', 'raz w miesiącu', 'raz do roku', '', 'A'),
(23, 'Jeżeli podczas podłączenia stacji dysków elastycznych 1,44MB kabel danych zostanie podłączony odwrotnie to:', 'BIOS komputera zgłosi błąd podłączenia stacji dysków', 'BIOS komputera poprawnie wykryje stację dysków', 'BIOS komputera wykryje stację dysków jaki 2,88MB', 'stacja dysków ulegnie uszkodzeniu', '', 'A'),
(24, 'Jakie elementy znajdują się na przedstawionej płycie głównej?', '2 złącza ISA, 3 złącza PCI, 4 złącza pamięci DIMM', '2 złącza ISA, 4 złącza PCI, 3 złącza pamięci DIMM', '3 złącza ISA, 4 złącza PCI, 2 złącza pamięci DIMM', '4 złącza ISA, 2 złącza PCI, 3 złącza pamięci DIMM', 'ee08/24.png', 'B'),
(25, 'Na schemacie blokowym, przedstawiającym fragment systemu mikroprocesorowego, symbolem X oznaczono:', 'pamięci cache', 'kontroler DMA', 'kontroler przerwań', 'pamięć stałą ROM', 'ee08/25.png', 'C'),
(26, 'W systemie Windows XP na komputerze klienckim, plik hosts jest plikiem tekstowym, który służy do mapowania:', 'dysków twardych', 'nazw hostów na adresy IP', 'nazw hostów na adresy MAC', 'nazw hostów przez serwery DNS', '', 'B'),
(27, 'Do połączenia kilku komputerów w sieć lokalną można użyć', 'most', 'router', 'RAMDAC', 'modem', '', 'B'),
(28, 'Serwer DNS jest serwerem ', 'usług terminalowych', 'zdalnego i szyfrowanego dostęu', 'dynamicznie przydzielającym IP', 'dzięki któremu nazwy mnemoniczne (opisowe) mogą zostać zamienione na odpowiadające im adresy IP', '', 'D'),
(29, 'Numer IP zapisuje się w postaci czterech, oddzielonych od siebie kropkami:', 'oktetów ', 'dekad', 'helów', 'bitów', '', 'A'),
(30, 'Komputer ma dostęp do Internetu poprzez sieć lokalną. Wpisując w przeglądarce internetowej adres www.wp.pl użytkownik nie ma dostępu do strony WWW, natomiast wpisanie adresu IP np. 212.77.100.101 pozwala otworzyć tę stronę. Co może być tego przyczyną? ', 'brak serwera DNS', 'brak adresu bramu', 'brak serwera WINS', 'brak serwera PROXY', '', 'A'),
(31, 'Który z wymienionych adresów IP v.4 jest adresem klasy C?', '10.0.2.0', '233.0.10.1', '191.11.0.10', '126.110.10.0', '', 'B'),
(32, 'Adres IP v.4 ma długość', '2 bajty', '16 bitów', '32 bitów', '10 bajtów', '', 'C'),
(33, 'Jakie polecenie w systemach Windows/Linux jest zwyczajowo stosowane do śledzenia trasy pakietów w sieciach IP?', 'ping', 'router', 'tracert/traceroute', 'netstat', '', 'C'),
(34, 'Jaki przewód należy zastosować do instalacji sieci w pomieszczeniach, w których występują silne pola zakłócające?', 'ekranowany', 'typu skrętka ', 'koncentryczny z transmisją szerokopasmową', 'koncentryczny z transmisją w paśmie podstawowym', '', 'A'),
(35, 'W systemie Windows moduł odpowiedzialny za internetowe usługi informacyjne to:', 'IIS', 'ISA', 'IIU', 'OSI', '', 'A'),
(36, 'Jaka jest szybkość transferu danych w sieciach FDDI *ang. Fiber Distribuded Data Interface) opartych na technologii światłowodowej?', '100 Mb/s', '1024 Mb/s', '100 MB/s', '1024 MB/s', '', 'A'),
(37, 'Który z wtyków należy zamontować na przewodzie UTP Cat 5e, by podłączyć komputer do sieci?', 'BNC', 'RJ11', 'RJ45', 'MT-RJ', '', 'C'),
(38, 'Maska podsieci /23 oznacza, że na pierwszych 23 bitach 32-cyfrowej liczby binarnej znajdują się jedynki, a na pozostałych zera. Jak będzie zapisana ta maska w systemie dziesiętnym, jeżeli każdym kolejnym 8 bitom odpowiada jedna liczba dziesiętna?', '255.255.0.0', '255.255.254.0', '255.255.255.0', '255.255.255.128', '', 'B'),
(39, 'Przedstawiono wynik uzyskany po uruchomieniu w systemie Windows polecenie IPCONFIG/ALL. Jak zostały skonfigurowane właściwości protokołu TCP/IP dla karty sieciowej?', 'karta sieciowa nie ma ustawionego adresu bramy', 'karta sieciowa uzyskała adres IP automatycznie ', 'karta sieciowa ma przydzielony statyczny adres IP', 'karta sieciowa nie ma ustawionego adresu serwera DNS', 'ee08/39.png', 'B'),
(40, 'Który standard z grupy IEEE 802 jest związany z sieciami bezprzewodowymi, tzw. WIreless LAN?', 'IEEE 802.3', 'IEEE 802.5', 'IEEE 802.11', 'IEEE 802.15', '', 'C'),
(41, 'Jaki protokół służy do translacji pomiędzy publicznymi i prywatnymi adresami IP?', 'ARP', 'NAT', 'RARP', 'SNMP', '', 'B'),
(42, 'Stacja robocza ma należeć do tej samej podsieci co serwer o adresie IP 192.168.10.150 i masce 255.255.255.192. Który z adresów IP należy ustawić we właściwościach protokołu TCP/IP karty sieciowej stacji roboczej', '192.168.10.1', '192.168.11.130', '192.168.10.190', '192.168.10.220', '', 'C'),
(43, 'Urządzenie ADSL służy do uzyskania połączenia', 'radiowego', 'satelitarnego', 'cyfrowego symetrycznego', 'cyfrowego asymetrycznego', '', 'D'),
(44, 'Komputer ma dostęp do Internetu poprzez sieć lokalną. Wpisując w przeglądarce internetowej adres www.wp.pl użytkownik nie ma dostępu do strony WWW, natomiast wpisanie adresu IP np. 212.77.100.101 pozwala otworzyć tę stronę. Co może być tego przyczyną? ', 'brak serwera DNS', 'brak adresu bramu', 'brak serwera WINS', 'brak serwera PROXY', '', 'A'),
(45, 'Wybierz medium, które w sieciach komputerowych zapewnia najszybszą transmisję danych', 'mikrofale', 'fale radiowe', 'kabel śświatłowodowy', 'czteroparowy kabel kat. 5', '', 'C'),
(46, 'Jaką liczbę adresów urządzeń sieciowych zapewnia do dyspozycji stosowanie klasy adresowej C w sieciach opartych na rodzinie protokołów TCP/IP?', '100', '200', '254', '256', '', 'C'),
(47, 'Który adres protokołu IP w wersji 4 ma prawidłową strukturę?', '192.21.140.1', '192.10.255.3A', '192.309.1.255', '192.0.FF.FF', '', 'A'),
(48, 'Adres IP urządzenia umożliwiającego innym komputerom w sieci lokalnej dostęp do Internetu, to adres:', 'DNS', 'WINS', 'proxy', 'bramy (router)', '', 'D'),
(49, 'Skrót MAN oznacza sieć', 'miejską', 'lokalną', 'rozległą', 'bezprzewodową', '', 'A'),
(50, 'Architektura fizyczna sieci, zwana inaczej topologią fizyczną sieci komputerowych określa:', 'sposób połączenia ze sobą komputerów ', 'standardy komunikacyjne sieci komputerowych ', 'wzajemną komunikację komputerów pomiędzy sobą', 'przekaz informacji pomiędzy protokołami sieciowymi modelu OSI', '', 'A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
