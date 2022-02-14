-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 07:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(50) NOT NULL,
  `descricao` text NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `nome_prod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `descricao`, `tamanho`, `preco`, `imagem`, `nome_prod`) VALUES
(1, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'Vintage Quiksilver T Shirt'),
(2, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\n', 'P/M/G/XG', '135.90', 'casaco1.jpg', 'VINTAGE CAT SWEATSHIRT LARGE MENS'),
(3, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '135.90', 'banana2.jpg', 'Anime Banana Fish T-Shirt'),
(4, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'iguana alana grapic tshirt merch'),
(5, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\r\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\r\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\r\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'Kuromi cute nigth suit'),
(6, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\r\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\r\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\r\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'Brand New Black + Pink “Blessed”'),
(7, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\r\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\r\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\r\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'death note metal t-shirt'),
(8, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\r\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\r\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\r\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'fairy tail unissex t-shirt'),
(9, '              Donec vitae nibh eu quam maximus commodo. Mauris bibendum, erat non venenatis eleifend, odio neque pellentesque libero, vitae eleifend est leo ut urna. Aliquam eget facilisis ex. Praesent at lacinia ipsum. Vivamus nec est pulvinar, sollicitudin arcu eu, ultricies sem. Donec dictum ipsum eu luctus venenatis.\r\n              Aliquam fermentum urna lobortis vehicula placerat. Sed aliquet non neque tempus facilisis.\r\n              Curabitur ut elit ut metus imperdiet laoreet nec sit amet dui. Praesent enim nibh, fringilla a sapien non, condimentum tempus nisl.\r\n              Maecenas aliquet porta nulla nec venenatis. Praesent finibus et ligula sit amet rutrum. Sed urna urna, aliquet a purus vel, accumsan cursus libero. Nam luctus vitae sem a ullamcorper.', 'P/M/G/XG', '57.90', 'camisa354.jpg', 'cute cat hoodie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
