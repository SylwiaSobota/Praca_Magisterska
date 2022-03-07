-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 14 Wrz 2021, 20:43
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
-- Struktura tabeli dla tabeli `ee09`
--

DROP TABLE IF EXISTS `ee09`;
CREATE TABLE IF NOT EXISTS `ee09` (
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
-- Zrzut danych tabeli `ee09`
--

INSERT INTO `ee09` (`nrPyt`, `pyt`, `odpA`, `odpB`, `odpC`, `odpD`, `obraz`, `poprawna`) VALUES
(1, 'Którego polecenia należy użyć, aby wyraz TEKST został wyświetlony w kolorze czarnym w oknie przeglądarki internetowej?', '\'<body color=\"black\">TEKST</font>\'', '\'<font color=\"czarny\">TEKST</font>\'', '\'<font color=\"#000000\">TEKST</font>\'', '\'<body bgcolor=\"black\">TEKST</body>\'', '', 'C'),
(2, 'W poleceniach, których celem jest odtwarzanie na stronie internetowej dźwięku jako podkładu muzycznego nie wykorzystuje się atrybutu:', 'loop=\"10\"', 'balance=\"-10\"', 'volume=\"-100\"', 'href=\"C:/100.wav\"', '', 'D'),
(3, 'Jakiego znacznika należy użyć aby przejśc do kolejnej linii tekstu, nie tworząc akapitu na stronie internetowej?', '<p>', '</b>', '<br>', '</br>', '', 'C'),
(4, 'Kaskadowe arkusze stylów tworzy się w celu:', 'ułatwienia formatowania strony', 'nadpisywania wartości znaczników już ustawionych na stronie ', 'połączenia struktury dokumentu strony z właściwą formą jego prezentacji', 'blokowania jakichkolwiek zmian w wartościach znaczników już przypisanych w pliku CSS', '', 'A'),
(5, 'W podanej regule CSS: h1 {color:blue} h1 oznacza:', 'klasę ', 'wartość ', 'selektor', 'deklarację', '', 'C'),
(6, 'Edytor spełniający założenia WYSWIG musi umożliwiać ', 'tworzenie podstawowej grafiki wektorowej', 'publikację strony na serwerze poprzez  wbudowanego klienta FTP', 'obróbkę plików dźwiękowych przed umieszczeniem ich na stronie internetowej', 'uzyskanie zbliżonego wyniku tworzonej strony do jej obrazu w przeglądarce internetowej', '', 'D'),
(7, 'Do graficznego tworzenia stron internetowych należy wykorzystać:', 'edytor CSS ', 'przeglądarkę internetową', 'program typu WYSWIG', 'program MS Office Picture Manager', '', 'C'),
(8, 'W procesie walidacji stron internetowych nie bada się', 'działania linków', 'błędów składni kodu', 'zgodności z przeglądarkami', 'źródła pochodzenia narzędzi edytorskich', '', 'D'),
(9, 'Model opisu przestrzeni barw o parametrach: odcień, nasycenie i jasność to:', 'HSV', 'RGB', 'CMY', 'CMYK', '', 'A'),
(10, 'Wskaż model barw, który stosuje się do wyświetlania kolorów na ekranie monitora komputerowego', 'HLS', 'RGB', 'CMY', 'CMYK', '', 'B'),
(11, 'Który parametr obiektu graficznego ulegnie zmianie po modyfikacji wartości kanału alfa?', 'nasycenie barw', 'przeźroczystość ', 'ostrość krawędzi', 'kolejność wyświetlania pikseli', '', 'B'),
(12, 'Jakiego formatu należy użyć do zapisu obrazu z kompresją stratną?', 'GIF', 'PNG', 'PCX', 'JPEG', '', 'D'),
(13, 'Najprostszy sposób zamiany obiektu oznaczonego cyfrą 1 na obiekt oznaczony cyfra 2 polega na:', 'animowaniu obiektu', 'zmianie warstw obiektu', 'narysowaniu docelowego obiektu', 'geometrycznym transformowaniu obiektu', 'ee09/13.png', 'D'),
(14, 'Jak nazywa się proces przedstawienia, we właściwej dla danego środowiska formie informacji zawartej w dokumencie elektronicznym?', 'mapowanie', 'rasteryzacja', 'renderowanie', 'teksturowanie', '', 'C'),
(15, 'Proces filtracji sygnału wejściowego w dziedzinie czasu, obejmujący zasadę superpozycji, związany jest z filtrem:', 'liniowym', 'przyczynowym', 'niezmiennym w czasie ', 'o skończonej odpowiedzi impulsowej', '', 'A'),
(16, 'Jak nazywa się podzbiór strukturalnego języka zapytań, związany z formułowaniem zapytań do bazy danych za pomocą polecenia SELECT?', 'SQL DML (ang. Data Manipulation Language)', 'SQL DDL (ang. Data Definition Language)', 'SQL DCL (ang. Data Control Language)', 'SQL DQL (ang. Data Query Language)', '', 'D'),
(17, 'Jakie są nazwy typowych poleceń języka zapytań SQL, związane z wykonywaniem operacji na danych SQL DML (ang. umieszczanie danych w bazie, kasowanie, dokonywanie zmian w danych)?', 'SELECT, SELECT INTO', 'ALTER, CREATE, DROP', 'DENY, GRANT, REVOKE', 'DELETE, INSERT, UPDATE', '', 'D'),
(18, 'Jak posortowana będzie lista, utworzona ze wszystkich kolumna tabeli uczniowie i zawierająca uczniów ze średnią większą od 5, która zostanie zwrócona jako wynik przedstawionego zapytania?', 'rosnąca według parametru klasa', 'malejąco według parametru klasa', 'rosnąco według parametru średnia', 'malejąco według parametru średnia', 'ee09/18.png', 'B'),
(19, 'Według, którego parametru oraz dla ilu tabel zostaną zwrócone wiersze na liście w wyniku przedstawionego zapytania?', 'według parametru wyrob_id wyłącznie dla trzech tabel', 'według parametru wyrob_id dla wszystkich tabel', 'według parametru nr_id wyłącznie dla trzech tabel', 'według parametru nr_id dla wszystkich tabel', 'ee09/19.png', 'D'),
(20, 'Który z obiektów relacyjnej bazy danych, będący kodem języka SQL, może być wywoływany w zapytaniach modyfikujących kolumny danych widoczne jak tabela, bez względu na to czy jest tworzony programowo, czy dynamicznie?', 'reguła', 'wyzwalacz', 'procedura składowa', 'funkcja zdefiniowana', '', 'D'),
(21, 'Jak nazywa się element bazy danych, za pomocą którego można jedynie odczytać dane z bazy, prezentując je w postaci tekstu lub wykresu?', 'tabela', 'raport', 'zapytanie', 'formularz', '', 'B'),
(22, 'Jakiego typu specjalizowane oprogramowanie narzędziowe należy zainstalować, aby umożliwić wykonywanie jego użytkownikowi operacji na zgromadzonych danych?', 'klucz obcy', 'System Zarządzania Bazą Danych (SZBD)', 'obiektowy System Zarządzania Bazą Danych', 'otwarty mechanizm komunikacji bazy danych', '', 'B'),
(23, 'Co należy zastosować w organizacji danych, aby zapytania w bazie danych były wykonywane szybciej?', 'reguły', 'indeksy', 'wartości domyślne', 'klucze podstawowe', '', 'B'),
(24, 'W programie Microsoft Access formą zabezpieczeń dostępu do danych związana z tabelą i kwerendą jest', 'stosowanie makr', 'przypisanie uprawnień', 'określanie przestrzeni tabel', 'wprowadzanie limitów przestrzeni dyskowej', '', 'B'),
(25, 'Które z wymienionych osób odpowiadają za przygotowanie systemu bazy danych do pracy produkcyjnej w sposób ciągły, zarządzanie uzytkownikami i instalowanie nowych wersji systemu bazodanowego?', 'projektanci narzędzi deweloperskich', 'administratorzy systemu bazy danych', 'administratorzy serwerów i sieci komputerowych', 'projektanci i programiści Systemu Zarządzania Bazą Danych', '', 'B'),
(26, 'Z jakimi mechanizmami nadawania zabezpieczeń, dającymi możliwości wykonywania operacji na bazie danych, związane są zagadnienia zarządzania kontami, użytkownikami i uprawnieniami?', 'z regułami', 'z atrybutami', 'z przywilejami obiektowymi', 'z przywilejami systemowymi', '', 'D'),
(27, 'Metoda udostępniania bazy danych w programie Microsoft Access, dotycząca wszystkich obiektów bazy umieszczonych na dysku sieciowym i używanych jednocześnie przez różne osoby nosi nazwę\"', 'folderu sieciowego', 'serwera bazy danych', 'dzielonej bazy danych', 'witryny programu SharePoint', '', 'A'),
(28, 'Jakie należy posiadać uprawnienia, aby wykonać i odtworzyć kopię zapasową bazy danych Microsoft SQL Server 2005 Express?', 'users', 'security users', 'użytkownik lokalny', 'administrator systemu', '', 'D'),
(29, 'Typ zmiennej w języku JavaScript ', 'nie występuje ', 'jest tylko jeden', 'następuje poprzez przypisanie wartości', 'musi być zadeklarowany na początku skryptu', '', 'C'),
(30, 'Zmienne typu int odnoszą się do liczb', 'naturalnych', 'całkowitych ', 'w notacji stałoprzecinkowej', 'w notacji zmiennoprzecinkowej', '', 'B'),
(31, 'Co definiuje w języku C++ przedstawiony fragment kodu?', 'hierarchię zmiennych ', 'trzy zmienne niepowiązane ze sobą', 'typ strukturalny składający się z trzech pól', 'kontakt pomiędzy zmiennymi globalnymi i lokalnymi', 'ee09/31.png', 'C'),
(32, 'Sposób programowania, w którym ciąg poleceń (sekwencji instrukcji) przekazywanych komputerowi jest postrzegany jako program, nosi nazwę programowania', 'stanowego', 'logicznego', 'funkcyjnego', 'imperatywnego', '', 'D'),
(33, 'Które wartości będą kolejno wpisane w wyniku działania przedstawionego skryptu', '2 2 1', '2 1 1 ', '1 2 1', '1 2 2', 'ee09/33.png', 'A'),
(34, 'Fragment kodu prezentuje składnię języka', 'C', 'C#', 'PHP', 'JavaScript', 'ee09/34.png', 'C'),
(35, 'Jaki program komputerowy przekształca kod źródłowy napisany w konkretnym języku programowania, na język komputera?', 'debugger', 'kompilator', 'edytor kodu źródłowego', 'środowisko programistyczne', '', 'B'),
(36, 'Jak nazywa się program, który wykonuje instrukcje zawarte w kodzie źródłowym tworzonego programu bez uprzedniego generowania programu wynikowego?', 'interpretwr', 'kompilator', 'konwerter kodu', 'konwerter języka', '', 'A'),
(37, 'Który język skryptowy ogólnego przeznaczenia należy wykorzystać do tworzenia aplikacji WWW, zagnieżdżanych w języku HTML i uruchamianych po stronie serwera? ', 'C#', 'Perl', 'PHP', 'JavaScript', '', 'C'),
(38, 'Jak nazywa się technika umożliwiająca otwarcie połączenia klienta z serwerem i komunikacje bez przeładowywania całej strony WWW w sposób asynchroniczny?', 'PHP', 'XML', 'AJAX', 'VBScript', '', 'C'),
(39, 'Jak nazywa się element oznaczony znakiem zapytania w strukturze platformy .NET, który umożliwia tworzenie własnych aplikacji z użyciem frameworków i zamianę kompilowanego kodu pośredniego na kod maszynowy procesora zainstalowanego w komputerze?', 'infrastruktura językowa', 'biblioteka klas bazowych ', 'wspólne środowisko programistyczne', 'wspólne środowisko uruchomieniowe', 'ee09/39.png', 'D'),
(40, 'Jakiego rodzaju mechanizm kontroli bezpieczeństwa wykonywania aplikacji zawiera środowisko uruchomieniowe platformy .NET Framework?', 'mechanizm wykonywania aplikacji dla bibliotek klas', 'mechanizm wykonywania aplikacji realizowany przez frameworki aplikacji internetowych', 'mechanizm wykonywania aplikacji realizowany przez funkcję Windows API', 'mechanizm wykonywania aplikacji oparty na uprawnieniach kodu i rolach', '', 'D'),
(41, 'Co to jest DBMS?', 'strukturalny język zapytań kierowanych do bazy danych', 'System Zarządzania Bazą Danych ', 'obiektowy język programowania do generowania stron www', 'kaskadowy arkusz stylów do opisu wyglądu strony www', '', 'B'),
(42, 'Fragment kodu napisany w języku HTML zamieszczony w ramce przedstawia listę', 'wypunktowaną', 'numerowaną', 'odnośników', 'skrótów', 'ee09/42.png', 'B'),
(43, 'Polecenie colspan służy do łączenia komórek tabeli w poziomie, natomiast rowspan w pionie. Którą z tabel wyświetli fragment kodu napisany w języku HTML?', 'A', 'B', 'C', 'D', 'ee09/43.png', 'B'),
(44, 'W znaczniku <head> ( w części <meta ...> ) strony www NIE umieszcza się informacji dotyczącej:', 'autora', 'kodowania', 'typu dokumentu', 'automatycznego odświażania', '', 'C'),
(45, 'Wskaż stwierdzenie, które jest prawdziwe dla następującej definicji stylu ', 'jest to styl lokalny', 'zdefiniowano dwie klasy', 'akapit będzie transponowany na małe litery', 'odnośnik będzie pisanych czcionką 14 punktów', 'ee09/45.png', 'B'),
(46, 'W palecie kolorów RGB kolor żółty jest połączniem dwóch kolorów: zielonego i czerwonego. Który z kodów szesnastkowych oznacza kolor żółty?', '#FF00FF', '#00FFFF', '#FFFF00', '#F0F0F0', '', 'C'),
(47, 'Który z formatów NIE pozwala na zapis plików animowanych?', 'GIF', 'ACE', 'SWF', 'SVG', '', 'B'),
(48, 'Który z formatów graficznych pozwala na zapis przejrzystego tła?', 'GIF', 'RAW', 'BMP', 'JPEG', '', 'A'),
(49, 'Proces walidacji strony internetowej to:', 'zespół działań mających na celu zwiększenie ogllądalności', 'sprawdzenie jej w celu wyeliminowania błędów', 'publikowanie w sieci', 'promocja strony', '', 'B'),
(50, 'Które oprogramowanie NIE JEST systemem zarządzania treścią (CMS)? ', 'Joomla', 'Apache', 'Mambo', 'WordPress', '', 'B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
