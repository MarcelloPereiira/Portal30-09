-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 29/09/2016 às 19h33min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `portal`
--
-- create schema `portal`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `COD_NOT` int(5) NOT NULL AUTO_INCREMENT,
  `MACHETE_NOT` varchar(30) NOT NULL,
  `RESUMO_NOT` varchar(50) NOT NULL,
  `TEXTO_NOT` longtext NOT NULL,
  PRIMARY KEY (`COD_NOT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `noticias` (`MACHETE_NOT`, `RESUMO_NOT`, `TEXTO_NOT`) VALUES
('Tudo Sobre Futebol', 'Fifa 2018', 'A Fifa escolheu Wilton Pereira Sampaio para representar a Conmebol no torneio. O árbitro terá a companhia dos auxiliares Bruno Boschilia e Rodrigo Figueiredo. O argentino Mauro Vigliano vai ser o responsável pelo árbitro de vídeo.');

INSERT INTO `noticias` (`MACHETE_NOT`, `RESUMO_NOT`, `TEXTO_NOT`) VALUES
('Mundial de Clubes', 'Palmeira não tem mundial', 'A Fifa escolheu Wilton Pereira Sampaio para representar a Conmebol no torneio. O árbitro terá a companhia dos auxiliares Bruno Boschilia e Rodrigo Figueiredo. O argentino Mauro Vigliano vai ser o responsável pelo árbitro de vídeo.');

INSERT INTO `noticias` (`MACHETE_NOT`, `RESUMO_NOT`, `TEXTO_NOT`) VALUES
('Palmeira não tem mundial', 'Mundial de Clubes', 'A Fifa escolheu Wilton Pereira Sampaio para representar a Conmebol no torneio. O árbitro terá a companhia dos auxiliares Bruno Boschilia e Rodrigo Figueiredo. O argentino Mauro Vigliano vai ser o responsável pelo árbitro de vídeo.');


-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `COD_USER` int(5) NOT NULL AUTO_INCREMENT,
  `NOME_USER` varchar(30) NOT NULL,
  `LOGIN_USER` varchar(10) NOT NULL,
  `SENHA_USER` varchar(10) NOT NULL,
  PRIMARY KEY (`COD_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`COD_USER`, `NOME_USER`, `LOGIN_USER`, `SENHA_USER`) VALUES
(1, 'Administrador do Portal', 'admin', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
