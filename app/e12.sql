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
-- Struktura tabeli dla tabeli `e12`
--

DROP TABLE IF EXISTS `e12`;
CREATE TABLE IF NOT EXISTS `e12` (
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
-- Zrzut danych tabeli `e12`
--

INSERT INTO `e12` (`nrPyt`, `pyt`, `odpA`, `odpB`, `odpC`, `odpD`, `obraz`, `poprawna`) VALUES
(1, 'Na rysunku procesor oznaczony jest numerem:', '2', '3', '5', '8', 'e12/1.png', 'A'),
(2, 'Na rysunku karta rozszerzeń oznaczona jest numerem:', '1', '4', '6', '7', 'e12/2.png', 'B'),
(3, 'Rysunek przedstawia pamięć: ', 'SIMM', 'DDR DIMM', 'SDRAM DIMM', 'Compact Flash', 'e12/3.png', 'C'),
(4, 'W przedstawionej na schemacie płycie głównej zasilanie należy podłaczyć do złącza oznaczonego numerem: ', '3', '5', '6', '7', 'e12/4.png', 'C'),
(5, 'Wprzedstawionej na schemacie płycie głównej złącze PCI oznaczone jest numerem: ', '1', '2', '3', '4', 'e12/5.png', 'D'),
(6, 'Złącze AGP służy do podłączenia: ', 'szybkich pamięci dyskowych', 'urządzeń wejścia/wyjścia', 'kart graficznych', 'modemu', NULL, 'C'),
(7, 'Do którego wyprowadzenia należy podłączyć głośniki aktywne w karcie dźwiękowej, której schemat funkcjonalny przedstawia rysunek?', 'Mic in', 'Line in', 'Line out', 'Speaker out', 'e12/7.png', 'C'),
(8, 'Który z elementów pokaznych na schemacie karty dźwięowej na ryunku służy do cyfrowego przetwarzania sygnałów?', 'Przetwornik A/D', 'Procesor DSP', 'Syntezator', 'Mikser', 'e12/8.png', 'B'),
(9, 'Warunkiem niezbędnym przy archiwizacji danych jest: ', 'kompresja danych', 'kopiowanie danych', 'kompresja i kopiowanie danych', 'kompresja i kopiowanie danych z jednoczesnym ich szyfrowaniem', NULL, 'B'),
(10, 'Ile komórek pamięci można zaadresować bezpośrednio w 64-bitowym procesorze, który ma 32-bitową szynę adresową?', '2 do potęgi 32', '2 do potęgi 64', '32 do potęgi 2', '64 do potęgi 2', NULL, 'A'),
(11, 'Co oznacza zwrot \'wykonanie backupu systemu\'?', 'Zamknięcie systemu', 'Ponowne uruchomienie systemu', 'Wykonanie aktualizacji systemu', 'Wykonanie kopii zapasowej systemu', NULL, 'D'),
(12, 'Klaster komputerowy to: ', 'Komputer z macierzą dyskową', 'Komputer z wieloma procesorami', 'Grupa komputerów pracujących współbieżnie tak, jakby był to jeden komputer', 'Komputer zapasowy, na którym co pewien czas wykonywana jest kopia systemu głównego', NULL, 'C'),
(13, 'Pamięć oznaczona symbolem PC3200 nie może współpracować z magistralą:', '300 MHz', '333 MHz', '400 MHz', '533 MHz', '', 'D'),
(14, 'Co oznacza jednostka dpi podawana w parametrach katalogowych skanerów i drukarek?', 'punkty na cal', 'gęstość optyczną', 'punkty na milimetr', 'punkty na centymetr', '', 'A'),
(15, 'Jaka jest maksymalna prędkość odczytu płyt CD-R w napędzie oznaczonym x48?', '480 kB/s', '4800 kB/s', '7200 kB/s', '10000 kB/s', '', 'C'),
(16, 'Funkcje różnych kategorii (daty i czasu, finansowe, tekstowe, matematyczne, statystyczne) są elementem składowym:', 'edytora tekstu', 'przeglądarki internetowej', 'arkusza kalkulacyjnego', 'programów do tworzenia prezentacji multimedialnych', '', 'C'),
(17, 'Analizując rysunek zauważamy, że limit zadeklarowanej pamięci wynosi 620976KB. Widać jednocześnie, że zainstalowanej pamięci fizycznej w analizowanym systemie jest mniej niż pamięci zadeklarowanej. Jaki typ pamięci decyduje w tym wypadku o zwiększeniu limitu pamięci zadeklarowanej ponad wielkość zainstalowanej pamięci fizycznej?', 'pamięć cache procesora', 'pamięć pliku stron', 'pamięć RAM', 'pamięć jądra', 'e12/17.png', 'B'),
(18, 'Urządzenie komputerowe, które bezwzględnie powinno być podłączone do sieci za pośrednictwem UPS, to:', 'dysk zewnetrzny', 'drukarka atramentowa', 'serwer sieciowy', 'ploter', '', 'C'),
(19, 'Z jakiego systemu plików należy skorzystać instalując Linuxa, by mieć możliwość definiowania uprawnień do plików i folderów?', 'EXT2', 'FAT32', 'NTFS', 'ISO9660', '', 'A'),
(20, 'W celu zdalnego i przy tym bezpiecznego administrowania system Linux należy wykorzystać protokół:', 'FTP', 'Telnet', 'SMTP', 'SSH2', '', 'D'),
(21, 'Cechą charakterystyczną wirusów polimorficznych jest to, że:', 'atakują tablicę FAT', 'atakują rekord startowy dysku', 'zarażają wszystkie komputery w sieci lokalnej', 'mają cechę polegającą na modyfikowaniu swojego kodu', '', 'D'),
(22, 'Na komputerze podłączonym do Internetu, w programie antywirusowym bazę wirusów należy aktualizować co najmniej:', 'raz dziennie', 'raz w tygodniu', 'raz w miesiącu', 'raz do roku', '', 'A'),
(23, 'Jeżeli podczas podłączenia stacji dysków elastycznych 1,44MB kabel danych zostanie podłączony odwrotnie to:', 'BIOS komputera zgłosi błąd podłączenia stacji dysków', 'BIOS komputera poprawnie wykryje stację dysków', 'BIOS komputera wykryje stację dysków jaki 2,88MB', 'stacja dysków ulegnie uszkodzeniu', '', 'A'),
(24, 'Jakie elementy znajdują się na przedstawionej płycie głównej?', '2 złącza ISA, 3 złącza PCI, 4 złącza pamięci DIMM', '2 złącza ISA, 4 złącza PCI, 3 złącza pamięci DIMM', '3 złącza ISA, 4 złącza PCI, 2 złącza pamięci DIMM', '4 złącza ISA, 2 złącza PCI, 3 złącza pamięci DIMM', 'e12/24.png', 'B'),
(25, 'Na schemacie blokowym, przedstawiającym fragment systemu mikroprocesorowego, symbolem X oznaczono:', 'pamięci cache', 'kontroler DMA', 'kontroler przerwań', 'pamięć stałą ROM', 'e12/25.png', 'C'),
(26, 'Na zdjęciu przedstawiono płytę główną komputera. Strzałką oznaczono:', 'procesor z umocowanym radiatorem', 'chip wbudowanej karty graficznej', 'kontroler mostka północnego z umocowanym radiatorem', 'kontroler mostka południowego', 'e12/26.png', 'C'),
(27, 'Zdjęcie przedstawia kartę:', 'sieciową ze złączem ISA', 'dźwiękową ze złączem PCI', 'telewizyjną ze złączem ISA', 'telewizyjną ze złączem PCI', 'e12/27.png', 'D'),
(28, 'Który z interfejsów jest interfejsem równoległym?', 'LPT', 'PS/2', 'RS232', 'USB', '', 'A'),
(29, 'Na schemacie blokowym procesora blok funkcyjny nazwany SIMD to:', 'zestaw 256 bitowych rejestrów znacznie przyspieszający obliczenia na liczbach stałopozycyjnych', 'zestaw 128 bitowych rejestrów niezbędny przy wykonywaniu instrukcji SSE procesora na liczbach stalo- i zmiennoprzecinkowych ', 'jednostka zmiennoprzecinkowa procesora (koprocesor)', 'moduł procesora realizujący wyłącznie operacje graficzne', 'e12/29.png', 'B'),
(30, 'Jaką funkcję pełnią elementy Tr1 i Tr2 widoczne na schemacie przedstawiającym kartę sieciową Ethernet?', 'sygnalizują za pomocą dźwięku aktywnośc karty sieciowej', 'zapewniają szyfrowanie i deszyfrowanie danych przesłanych przez sieć', 'sygnalizują za pomocą świecenia kolorem zielonym szybkość pracy karty sieciowej', 'zapewniają izolację obwodu elektrycznego sieci LAN od obwodu elektrycznego komputera', 'e12/30.png', 'D'),
(31, 'Schemat blokowy przedstawia:', 'streamer', 'dysk twardy', 'napęd dyskietek', 'napęd DVD-ROM', 'e12/31.png', 'B'),
(32, 'Systemy operacyjne z rodziny Linux rozprowadzane są na podstawie licencji:', 'GNU', 'MOLP', 'shareware', 'komercyjnej', '', 'A'),
(33, 'Zgodnie z przedstawionym w tabeli standardem opisu pamięci PC-100 wskaż pamięć, która ma maksymalny czas dostępu 6 nanosekund i minimalne opóźnienie między sygnałami CAS i RAS wynoszące 2 cykle zegara?', 'PC100-322-60', 'PC100-323-70', 'PC100-332-70', 'PC100-333-60', 'e12/33.png', 'A'),
(34, 'Zgodnie z dokumentacją karty graficznej jej zdolność do pracy z systemem AGP 2X/4X umożliwia:', 'przesyłanie danych z maksymalną prędkością 1066MB/s', 'przesyłanie danych z maksymalna prędkością 256 MB/s', 'pracę z maksymalną częstotliwością taktowania 55MHz', 'pracę z maksymalną częstotliwością taktowania 44MHz', '', 'A'),
(35, 'Jeżeli w konfiguracji karty graficznej zostanie wybrane odświeżanie obrazu większe od zalecanego, monitor CRT spełniający normy TCO 99:', 'ulegnie uszkodzeniu', 'nie włączy się, będzie wyświetlał czarny obraz', 'nie włączy się, będzie wyświetlał jedynie część obrazu', 'przejdzie w stan uśpienia, lub pojawi się okno informacyjne z komunikatem', '', 'D'),
(36, 'Jakie systemy operacyjne infekuje wirus MS Blaster?', 'MS Windows 2000/NT/XP', 'MS Windows 9x', 'Linux', 'DOS', '', 'A'),
(37, 'W dokumentacji opisano system plików:', 'FAT32', 'NTFS', 'EXT4', 'FAT', 'e12/37.png', 'B'),
(38, 'Liczba 356 zapisana w systemie dwójkowym to:', '100001100', '110011010', '101100100', '110011000', '', 'C'),
(39, 'Pewną liczbę naturalną w systemie szesnastkowym zapisano następująco: 41. Wskaż tę liczbę zapisaną w systemie dziesiętnym.', '65', '75', '81', '91', '', 'A'),
(40, 'Na płycie głównej wykorzystującej układ Intel 865G:', 'nie można zainstalować karty graficznej', 'można zainstalować kartę graficzna ze złączem AGP', 'można zainstalować kartę graficzną ze złączem ISA', 'można zainstalować kartę graficzną ze złączem PCI-Express', '', 'B'),
(41, 'Najlepsze zabezpieczenie komputera przed wirusami stanowi zainstalowanie', 'zapory FireWall', 'hasła dla BIOS-u', 'skanera intywirusowego', 'licencjowanego systemu operacyjnego', '', 'C'),
(42, 'W celu wymiany uszkodzonego modułu pamięci RAM w pierwszej kolejności należy:', 'zdemontować uszkodzony moduł pamięci', 'otworzyć obudowę komputera', 'odłączyć zasilanie komputera', 'wyłączyć monitor ekranowy', '', 'C'),
(43, 'Specyfikacja pracy firmy wymaga posługiwania się systemami plików charakteryzujących się dużym bezpieczeństwem i możliwością szyfrowania danych. W tym celu należy zastosować system operacyjny Windows:', '2000/7/XP', 'NC', 'NTSC', 'Server', '', 'A'),
(44, 'Oprogramowanie antywirusowe może skutecznie chronić komputer. Ważne jest, aby opcję uruchamiania programu wraz z komputerem opraz opcję:', 'skanowania ostatnio używanych programów', 'monitorowania w czasie rzeczywistym (skanowanie w tle)', 'automatycznego kasowania zainfekowanych plików', 'automatycznego odłączenia od sieci w przypadku infekcji', '', 'B'),
(45, 'Szerokość magistrali pamięci DDR SDRAM wynosi', '72 bity', '64 bity', '36 bitów', '32 bity', '', 'B'),
(46, 'Przy pomocy taśmy 34-pinowej przedstawionej na rysunku podłącza się do płyty głównej komputera:', 'dyski SCSI', 'dyski ATA', 'napędy dyskietek 3,5 lub 5,25 cala', 'napędy DVD', 'e12/46.png', 'C'),
(47, 'Niektóre systemy operacyjne są wielodostępne (multiuser). Systemy takie ', 'równocześnie wykonują wiele programów', 'sterują układem (klasterem) niezależnych komputerów', 'stosowane są głównie w przemyśle i systemach sterowania', 'oprócz wielozadaniowości z wywłaszczeniem realizują funkcję przydzielania czasu użytkownikom', '', 'D'),
(48, 'Jeżeli w systemie operacyjnym komputera zainstaluje się program nazywany Trojanem, to spowoduje on:', 'wykonywanie niepożądanych działań poza kontrolą użytkownika', 'ochronę systemu operacyjnego przed działaniem wirusów', 'optymalizację działania systemu operacyjnego', 'wspomaganie działania użytkownika', '', 'A'),
(49, 'Zdjęcie przedstawia płytę główną komputera. Strzałką oznaczono:', 'gniazdo zasilania do płyty ATX', 'gniazdo zasilania do płyty AT', 'połączenie do sysku IDE', 'połączenie do dysku SCSI', 'e12/49.png', 'A'),
(50, 'Przy pomocy taśmy 60-pinowej przedstawionej na rysunku podłącz się do płyty głównej komputera:', 'tylko dyski SCSI', 'tylko dyski EIDE', 'napędy ATAPI', 'wszystkie powyższe urządzenia', 'e12/50.png', 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
