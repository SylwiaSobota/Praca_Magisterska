-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Wrz 2021, 16:54
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
-- Struktura tabeli dla tabeli `e13`
--

DROP TABLE IF EXISTS `e13`;
CREATE TABLE IF NOT EXISTS `e13` (
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
-- Zrzut danych tabeli `e13`
--

INSERT INTO `e13` (`nrPyt`, `pyt`, `odpA`, `odpB`, `odpC`, `odpD`, `obraz`, `poprawna`) VALUES
(1, 'Która warstwa modelu ISO/OSI jest związana z protokołem IP?', 'Sieciowa', 'Fizyczna', 'Transportowa', 'Łączy danych', NULL, 'A'),
(2, 'Jaką ilość rzeczywistych danych można przesłać w czasie 1s przez łącze synchroniczne o przepustowości 512 kbps, bez sprzętowej i programowej kompresji?', 'około 5kB', 'około 55kB', 'około 64kB', 'ponad 500kB', NULL, 'B'),
(3, 'Wskaż urządzenie, które należy wykorzystać, aby podłączyć dwa komputery do sieci Internet z dostępem przez sieć lokalną Ethernet, w której mamy do dyspozycji tylko jeden adres IP', 'router LAN', 'spliter ADSL', 'modem ISDN', 'przełącznik LAN', NULL, 'A'),
(4, 'W celu zdalnego i przy tym bezpiecznego administrowanie systemem Linux należy wykorzystać protokół:', 'FTP', 'Telnet', 'SMTP', 'SSH2', NULL, 'D'),
(5, 'Jakie połączenie z Internetem można udostępniać sieci lokalnej?', 'Wszystkie rodzaje połączeń', 'Połaczenie o szybkości transmisji co najmniej 56 kb/s', 'Jedynie twz. szybkie połączenia, tzn. powyżej 64kb/s', 'Wszystkie połączenia oprócz połaczęń modemem analogowym', NULL, 'A'),
(6, 'Aby użytkownicy sieci lokalnej mogli przeglądać strony WWW protokołami HTTP i HTTPS, brama internetowa musi przepuszczać ruch na portach', '80 i 434', '80 i 443', '90 i 434', '90 i 443', '', 'B'),
(7, 'Podczas montażu sieci komputerowej, przy wierceniu otworów w ścianach, NIE NALEŻY używać:', 'okularów ochronnych ', 'ubrania roboczego', 'obuwia roboczego', 'rękawic ochronnych', '', 'D'),
(8, 'Wybierz medium, które w sieciach komputerowych zapewnia najszybszą transmisję danych', 'mikrofale', 'fale radiowe', 'kabel śświatłowodowy', 'czteroparowy kabel kat. 5', '', 'C'),
(9, 'Karta sieciowa standardu FastEthernet pozwala na transfer danych z maksymalną prędkością:', '100 Mb/s', '100Mbps', '10 MB/s', '10 Mbps', '', 'B'),
(10, 'W celu uzyskania w sieci lokalnej prędkości przesyłania danych 100Mbpss zastosowano karty sieciowe pracujące w standardzie FastEthernet, kabel standardu UTP w odpowiedniej kategorii oraz przełącznik (switch) pracujący w standardzie FasstEthernet. Sieć taka jest wykonana w topologii:', 'IEEE', 'BUS', 'RING', 'STAR', '', 'D'),
(11, 'Który adres protokołu IP w wersji 4 ma prawidłową strukturę?', '192.21.140.16', '192.10.255.3A', '192.309.1.255', '192.0.FF.FF', '', 'A'),
(12, 'Przydzielaniem numerów IP w sieci zajmuje się serwer:', 'DHC', 'DNS', 'WINS', 'NMP', '', 'A'),
(13, 'Aby usunąć opisaną usterkę, należy:', 'sprawdzić włączenie PROXY i ewentualnie włączyć', 'zmienić konfigurację adresów IP i/lub masek podsieci im odpowiadających w taki sposób, aby oba komputery znalazły się w tej samej podsieci', 'wyłączyć system NetBIOS NWLink we właściwościach połączeń LAN komputerów', 'wyłączyć system NetBIOS przez TCP/IP w zaawansowanych ustawieniach TCP/IP kart sieciowych', 'e13/13.png', 'B'),
(14, 'Zrzut ekranu przedstawia efekt polecenia arp -a. Jak należy zinterpretować tę informcję?', 'adres fizyczny hosta jest błędny', 'komputerowi przypisano błędny adres IP', 'brak bieżących wpisów protokołu ARP', 'host nie ma połączenia z Internetem', 'e13/14.png', 'C'),
(15, 'Usługa Windows XP Professional \"Mostek sieciowy\" pozwala na łączenie ze sobą:', 'segmentów sieci LAN', 'dwóch komputerów', 'roboczych stacji bezdyskowych', 'klienta z serwerem', '', 'A'),
(16, 'Numer IP przypisany komputerowi umożliwia odbiorcy pakietu IP rozróżnienie identyfikatorów:', 'sieci i bramy', 'sieci i hosta', 'hosta i routera', 'hosta i bramy', '', 'B'),
(17, 'Polecenie tracert to narzędzie diagnostyczne, które ustala', 'ścieżkę do lokalizacji docelowej', 'sprawność połączenia przy użyciu protokołu IPX/SPX', 'poprawność konfiguracji protokołu TCP/IP', 'możliwość diagnozowania infrastruktury systemu DNS', 'e13/17.png', 'A'),
(18, 'Włączenie usługi Udostępnienie połączenia internetowego w systemie Windows uruchamia automatyczne nadawanie adresów IP dla komputerów (hostów) z niej korzystających. W tym celu wykorzystywana jest usługa:', 'WINS', 'NFS', 'DHCP', 'DNS', '', 'C'),
(19, 'Komputery przenośne są z reguły wyposażone w bezprzewodowe sieci LAN. Ograniczenia ich użytkowania dotyczą emisji fal radiowych mogących zakłócać działanie innych, ważnych dla bezpieczeństwa, urządzeń:', 'w pociągu', 'w samolocie', 'w biurze', 'w mieszkaniu', '', 'B'),
(20, 'Aby użytkownicy sieci lokalnej mogli przeglądać strony WWW protokołami HTTP i HTTPS, brama internetowa musi przepuszczać ruch na portach', '80 i 434', '80 i 443', '90 i 434', '90 i 443', '', 'B'),
(21, 'Na zdjęciu przedstawiono', 'terminator BNC', 'zastępczy wtyk RJ-45', 'zaślepkę gniazda RJ-45', 'zaślepkę kabla światłowodowego', 'e13/21.png', 'A'),
(22, 'Zdjęcie przedstawia ', 'wtyk audio', 'wtyk światłowodu', 'przedłużacz kabla UTP', 'wtyk kabla koncentrycznego', 'e13/22.png', 'B'),
(23, 'Które z wymienionych poleceń w systemie Windows XP służy do sprawdzenia bieżącej konfiguracji IP systemu Windows?', 'tcpconfig', 'ipconfig', 'configip', 'ipedit', '', 'B'),
(24, 'Urządzenie ADSL służy do uzyskania połączenia', 'radiowego', 'satelitarnego', 'cyfrowego symetrycznego', 'cyfrowego asymetrycznego', '', 'D'),
(25, 'Jednostką opisującą szybkość transmisji danych w sieciach komputerowych jest:', 'dpi', 'ips', 'bps', 'mips', '', 'C'),
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
(39, 'Przedstawiono wynik uzyskany po uruchomieniu w systemie Windows polecenie IPCONFIG/ALL. Jak zostały skonfigurowane właściwości protokołu TCP/IP dla karty sieciowej?', 'karta sieciowa nie ma ustawionego adresu bramy', 'karta sieciowa uzyskała adres IP automatycznie ', 'karta sieciowa ma przydzielony statyczny adres IP', 'karta sieciowa nie ma ustawionego adresu serwera DNS', 'e13/39.png', 'B'),
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
