
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `analize`
--

CREATE TABLE `analize` (
  `username` varchar(11) NOT NULL,
  `dataRecoltarii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rezultate` varchar(5000) NOT NULL,
  `idAnaliza` int(5) NOT NULL,
  `dataDisponibilitate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numeBeneficiar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `analize`
--

INSERT INTO `analize` (`username`, `dataRecoltarii`, `rezultate`, `idAnaliza`, `dataDisponibilitate`, `numeBeneficiar`) VALUES
('badbeldeanu', '2017-05-17 19:11:53', 'Nesatisfacator.', 12345, '2017-05-21 19:11:53', 'Ciunga Gumaru'),
('badbeldeanu', '2017-06-17 19:11:53', 'Nesatisfacator.', 23456, '2017-06-24 19:11:53', 'Ciunga Grosaru');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `cereri`
--

CREATE TABLE `cereri` (
  `idCerere` int(5) NOT NULL,
  `dataEfectuarii` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numeBeneficiar` varchar(30) NOT NULL,
  `grupaSangvinaBeneficiar` varchar(3) DEFAULT NULL,
  `locatie` varchar(100) NOT NULL,
  `idLocatie` int(3) NOT NULL,
  `usernameDoctor` varchar(50) NOT NULL,
  `gradUrgenta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `cereri`
--

INSERT INTO `cereri` (`idCerere`, `dataEfectuarii`, `numeBeneficiar`, grupaSangvinaBeneficiar`,`locatie`, `idLocatie`, `usernameDoctor`, `gradUrgenta`) VALUES
(12345, '2017-07-17 19:11:53', 'Ciunga Gumaru', 'ab4', 'Balaceanca', 9, 'baddoctor', '1'),
(12346, '2017-08-26 19:11:53', 'Ciunga Grosaru', '0I', 'Macarenco', 99, 'gooddoctor', '2');



--
-- Structura de tabel pentru tabelul `utilizator`
--

CREATE TABLE `utilizator` (
  `username` varchar(50) NOT NULL,
  `nume` varchar(30) DEFAULT NULL,
  `parola` varchar(30) DEFAULT NULL,
  `profil` varchar(30) DEFAULT NULL,
  `grupaSangvina` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `utilizator`
--

INSERT INTO `utilizator` (`username`, `nume`, `parola`, `profil`, `grupaSangvina`) VALUES
('badbeldeanu', 'Beldi', 'ionut', 'donator', 'ab4'),
('baddoctor', 'Ciomu', 'ciunga1234', 'doctor', NULL),
('gooddoctor', 'Gabi', 'gabi1234', 'doctor', NULL),
('badperson', 'Mihai', '12345678', 'pct', NULL);


ALTER TABLE `analize`
  ADD PRIMARY KEY (`idAnaliza`);

ALTER TABLE `utilizator`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `cereri`
  ADD PRIMARY KEY (`idCerere`);

ALTER TABLE `analize`
  ADD FOREIGN KEY (`username`) references utilizator(username);
  
ALTER TABLE `cereri`
  ADD FOREIGN KEY (`usernameDoctor`) references utilizator(username);
  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
