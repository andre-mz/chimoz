-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2020 às 07:48
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chimoeventos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `corpo` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id`, `usuario_id`, `titulo`, `cat`, `data`, `img1`, `img2`, `corpo`, `data_criacao`) VALUES
(7, 4, 'dalton', '', '', '', '', 'dada', '2019-12-16 10:07:17'),
(8, 4, 'dalton 2.0', '', '', '', '', 'dalton 2.0 v 1.0', '2019-12-16 10:09:59'),
(9, 2, 'dercia 1', '', '', '', '', 'aumenta', '2019-12-16 11:08:59'),
(13, 4, 'O Senhor E perfeito', '', '', '', '', 'Quando', '2019-12-28 17:03:28'),
(14, 4, 'Escola', 'noticia', '2019-12-27', 'da', 'Insira o conteudo', 'dada', '2019-12-28 19:24:03'),
(15, 4, 'evento', 'evento', '2020-01-31', 'evento', 'evento', 'dadad', '2019-12-28 20:04:29'),
(16, 4, 'dsdj', 'dsdj', '2020-01-23', 'dsdj', 'dsdj', 'adada', '2019-12-28 20:05:28'),
(17, 4, 'dd', 'dd', '2019-12-18', 'dd', 'dd', 'The maximum file size for uploads in this demo is 5 MB (default file size is unlimited).mcmmc\r\n    Only image files (JPG, GIF, PNG) are allowed in this demo (by default there is no file type restriction).\r\n    Uploaded files will be deleted automatically after 5 minutes (demo setting).\r\n    You can drag & drop files from your desktop on this webpage (see Browser support).\r\n    Please refer to the project website and documentation for more information.\r\n    Built with Twitter&#39;s Bootstrap CSS framework and Icons from Glyphicons.', '2019-12-28 20:09:04'),
(18, 4, 'jsjsjj', 'jsjsjj', '2019-12-18', 'jsjsjj', 'jsjsjj', 'skkskksk  \r\n                        &#34;>\r\n                        \r\n                            \r\n                        \r\n                    \r\n  \r\n                        &#34;>\r\n                        \r\n                            \r\n                        \r\n                    \r\n  \r\n                        &#34;>\r\n                        \r\n                            \r\n                        \r\n                    \r\n  \r\n                        &#34;>\r\n                        \r\n                            \r\n                        \r\n                    \r\n  \r\n                        &#34;>\r\n                        \r\n                            \r\n                        \r\n                    \r\n  \r\n                        &#34;>', '2019-12-28 21:02:20'),
(19, 4, 'dada', 'dada', '2020-01-31', 'dada', 'dada', 'The maximum file size for uploads in this demo is 5 MB (default file size is unlimited).\r\n    Only image files (JPG, GIF, PNG) are allowed in this demo (by default there is no file type restriction).\r\n    Uploaded files will be deleted automatically after 5 minutes (demo setting).\r\n    You can drag & drop files from your desktop on this webpage (see Browser support).\r\n    Please refer to the project website and documentation for more information.\r\n    Built with Twitter&#39;s Bootstrap CSS framework and Icons from Glyphicons.', '2019-12-28 21:13:25'),
(20, 4, 'fkkf', 'fkkf', '2019-12-12', 'fkkf', 'fkkf', 'The maximum file size for uploads in this demo is 5 MB (default file size is unlimited).\r\n    Only image files (JPG, GIF, PNG) are allowed in this demo (by default there is no file type restriction).\r\n    Uploaded files will be deleted automatically after 5 minutes (demo setting).\r\n    You can drag & drop files from your desktop on this webpage (see Browser support).\r\n    Please refer to the project website and documentation for more information.\r\n    Built with Twitter&#39;s Bootstrap CSS framework and Icons from Glyphicons.', '2019-12-28 21:15:10'),
(22, 4, 'dalton 2.0', 'dalton 2.0', '2020-01-31', 'dalton 2.0', 'dalton 2.0', 'The maximum file size for uploads in this demo is 5 MB (default file size is unlimited).\r\n    Only image files (JPG, GIF, PNG) are allowed in this demo (by default there is no file type restriction).\r\n    Uploaded files will be deleted automatically after 5 minutes (demo setting).\r\n    You can drag & drop files from your desktop on this webpage (see Browser support).\r\n    Please refer to the project website and documentation for more information.\r\n    Built with Twitter&#39;s Bootstrap CSS framework and Icons from Glyphicons.', '2019-12-29 10:56:01'),
(23, 4, 'dalton 2.0', 'dalton 2.0', '2019-12-31', '3ebac34dc5e29c6bea69053b6d95b520.jpg', '4f65dfd388b82e4717c7f5ecf13cd2be.jpg', 'The maximum file size for uploads in this demo is 5 MB (default file size is unlimited).\r\n    Only image files (JPG, GIF, PNG) are allowed in this demo (by default there is no file type restriction).\r\n    Uploaded files will be deleted automatically after 5 minutes (demo setting).\r\n    You can drag & drop files from your desktop on this webpage (see Browser support).\r\n    Please refer to the project website and documentation for more information.\r\n    Built with Twitter&#39;s Bootstrap CSS framework and Icons from Glyphicons.', '2019-12-29 10:57:25'),
(24, 4, 'Jesus Sena Show', 'Jesus Sena Show', '2020-05-30', '2.jpg', 'showcase.jpg', 'We talk here about our dashboard. No support given Admin : Sam Soffes | Members : 98 | Last Activity : 2 min ago   We talk here about our dashboard. No support given.Admin : Sam Soffes | Members : 98 | Last Activity : 2 min ago  We talk here about our dashboard. No support given Admin : Sam Soffes | Members : 98 | Last Activity : 2 min ago  We talk here about our dashboard. No support given. Admin : Sam Soffes | Members : 98 | Last Activity : 2 min ago  We talk here about our dashboard. No support given.', '2020-01-06 21:03:48'),
(25, 2, 'Nova Ordem Mundial Actualizado 2.0', 'Seleciona uma categoria', '2020-01-16', '5f3f8f470d1f4747630b61e2dbcefb31.jpg', '14fba4086811320dbbcfe95c7138a15b.jpg', 'Ã‰ um facto estabelecido de que um leitor Ã© distraÃ­do pelo conteÃºdo legÃ­vel de uma pÃ¡gina quando analisa a sua mancha grÃ¡fica. Logo, o uso de Lorem Ipsum leva a uma distribuiÃ§Ã£o mais ou menos normal de letras, ao contrÃ¡rio do uso de &#34;ConteÃºdo aqui, conteÃºdo aqui&#34;, tornando-o texto legÃ­vel. Muitas ferramentas de publicaÃ§Ã£o electrÃ³nica e editores de pÃ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissÃ£o, e uma pesquisa por &#34;lorem ipsum&#34; irÃ¡ encontrar muitos websites ainda na sua infÃ¢ncia. VÃ¡rias versÃµes tÃªm evoluÃ­do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).\r\nÃ‰ um facto estabelecido de que um leitor Ã© distraÃ­do pelo conteÃºdo legÃ­vel de uma pÃ¡gina quando analisa a sua mancha grÃ¡fica. Logo, o uso de Lorem Ipsum leva a uma distribuiÃ§Ã£o mais ou menos normal de letras, ao contrÃ¡rio do uso de &#34;ConteÃºdo aqui, conteÃºdo aqui&#34;, tornando-o texto legÃ­vel. Muitas ferramentas de publicaÃ§Ã£o electrÃ³nica e editores de pÃ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissÃ£o, e uma pesquisa por &#34;lorem ipsum&#34; irÃ¡ encontrar muitos websites ainda na sua infÃ¢ncia. VÃ¡rias versÃµes tÃªm evoluÃ­do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).&#34;>&#34;>&#34;>&#34;>&#34;>&#34;>&#34;>', '2020-01-09 20:31:04'),
(26, 2, 'O Fim da Conflito no Norte do Pais', 'Noticia', '2020-01-30', '5f3f8f470d1f4747630b61e2dbcefb31.jpg', '5f05b52dbde9ff186593acc21a107f32.jpg', 'Ãƒâ€° um facto estabelecido de que um leitor ÃƒÂ© distraÃƒÂ­do pelo conteÃƒÂºdo legÃƒÂ­vel de uma pÃƒÂ¡gina quando analisa a sua mancha grÃƒÂ¡fica. Logo, o uso de Lorem Ipsum leva a uma distribuiÃƒÂ§ÃƒÂ£o mais ou menos normal de letras, ao contrÃƒÂ¡rio do uso de &#34;ConteÃƒÂºdo aqui, conteÃƒÂºdo aqui&#34;, tornando-o texto legÃƒÂ­vel. Muitas ferramentas de publicaÃƒÂ§ÃƒÂ£o electrÃƒÂ³nica e editores de pÃƒÂ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissÃƒÂ£o, e uma pesquisa por &#34;lorem ipsum&#34; irÃƒÂ¡ encontrar muitos websites ainda na sua infÃƒÂ¢ncia. VÃƒÂ¡rias versÃƒÂµes tÃƒÂªm evoluÃƒÂ­do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).\r\nÃƒâ€° um facto estabelecido de que um leitor ÃƒÂ© distraÃƒÂ­do pelo conteÃƒÂºdo legÃƒÂ­vel de uma pÃƒÂ¡gina quando analisa a sua mancha grÃƒÂ¡fica. Logo, o uso de Lorem Ipsum leva a uma distribuiÃƒÂ§ÃƒÂ£o mais ou menos normal de letras, ao contrÃƒÂ¡rio do uso de &#34;ConteÃƒÂºdo aqui, conteÃƒÂºdo aqui&#34;, tornando-o texto legÃƒÂ­vel. Muitas ferramentas de publicaÃƒÂ§ÃƒÂ£o electrÃƒÂ³nica e editores de pÃƒÂ¡ginas web usam actualmente o Lorem Ipsum como o modelo de texto usado por omissÃƒÂ£o, e uma pesquisa por &#34;lorem ipsum&#34; irÃƒÂ¡ encontrar muitos websites ainda na sua infÃƒÂ¢ncia. VÃƒÂ¡rias versÃƒÂµes tÃƒÂªm evoluÃƒÂ­do ao longo dos anos, por vezes por acidente, por vezes propositadamente (como no caso do humor).', '2020-01-10 21:52:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `geleria`
--

CREATE TABLE `geleria` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `data_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `geleria`
--

INSERT INTO `geleria` (`id`, `name`, `imagem`, `data_add`) VALUES
(1, 'f0150517c0394ea4270c4d4696a56d88.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4RBmRXhpZgAATU0AKgAAAAgAAwESAAMAAAABAAgAAIdpAAQAAAABAAAIPuocAAcAAAgMAAAAMgAAAAAc6gAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', '0000-00-00 00:00:00'),
(2, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(3, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(4, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(5, 'daac6f2d4d76503c7d9810e808e59e63.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAHLAuADASI', '0000-00-00 00:00:00'),
(6, 'daac6f2d4d76503c7d9810e808e59e63.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAHLAuADASI', '0000-00-00 00:00:00'),
(7, 'daac6f2d4d76503c7d9810e808e59e63.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAHLAuADASI', '0000-00-00 00:00:00'),
(8, 'daac6f2d4d76503c7d9810e808e59e63.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAHLAuADASI', '0000-00-00 00:00:00'),
(9, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(10, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(11, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(12, 'showcase.jpg', 'data::image/jpg;base64,/9j/4Q4mRXhpZgAATU0AKgAAAAgADAEAAAMAAAABB4AAAAEBAAMAAAABBQAAAAECAAMAAAADAAAAngEGAAMAAAABAAIAAAESAAMAAAABAAEAAAEVAAMAAAABAAMAAAEaAAUAAAABAAAApAEbAAUAAAABAAAArAEoAAMAAAABAAIAAAExAAIAAAAeAAAAtAEyAAIAAAAUAAAA0odpAAQAAAABAAAA6AAAAVQ', '0000-00-00 00:00:00'),
(13, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(14, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(15, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(16, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(17, 'peekaboo.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAADwAAAAhwCAIAAAAf3FwlAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM', '0000-00-00 00:00:00'),
(18, 'next.png', 'data::image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAtCAYAAADsvzj/AAAFDUlEQVR4Ac2ZS0xcVRjHvTN3hisw0GIRZ3AeLWHQWqdVsRqgA86AUmpqoy20Whd2YYhprJq45BVAF7yJkQQTluDGiEhBF5qYRsIjYYMKQxNNMO4gQHgjZfxP8pF8ufEe0qQ5pyf5BTKcWfzyff/vnHt5xLQ0wgbsQCfswEY80BWPxx8I5sU', '0000-00-00 00:00:00'),
(19, 'bt.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4QA6RXhpZgAATU0AKgAAAAgAA1EQAAEAAAABAQAAAFERAAQAAAABAAAOxFESAAQAAAABAAAOxAAAAAD/2wBDAAIBAQIBAQICAgICAgICAwUDAwMDAwYEBAMFBwYHBwcGBwcICQsJCAgKCAcHCg0KCgsMDAwMBwkODw0MDgsMDAz/2wBDAQICAgMDAwYDAwYMCAcIDAw', '2020-01-10 12:20:46'),
(20, '5ce1a11ba255f302f8f654b83a2b0729.jpg', 'data::image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCAKvAkQDASI', '2020-01-10 20:47:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `apelido` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `apelido`, `email`, `password`, `data_criacao`) VALUES
(2, 'dercia', 'andre', 'dercia@gmail.com', '$2y$10$qwvy8Lnmy.NYuSHOiv8.ue5YmDfNa5DiryAZiDY5U8OZHI.kbUUge', '0000-00-00 00:00:00'),
(3, 'Plicopis', 'Ernesto', 'plicopis.florinda@gmail.com', '$2y$10$3FLBHQkpsDi8FOlW0/h.se5YleI.Lpaw.UmV5f1JTh8L3RnsUZN.C', '0000-00-00 00:00:00'),
(4, 'dalton bernardo', 'andre', 'dalton@gmail.com', '$2y$10$11PxIzIAoyh8EAbER5IMRuaNcqaWZHurqkduj/ax/NgHgaBejf9Aa', '2019-11-27 14:42:36'),
(5, 'dercia', 'andre', 'dalton1@gmail.com', '$2y$10$YO6dLkLw94Qw760nfn4FfeKHpN11MND9ojnmID5fq.rie9XzqyxrK', '2019-11-27 22:20:35'),
(6, 'dalton', 'andre', 'das@gmail.com', '$2y$10$IGzOartFC0.FK8iVKBAroOOa0T9FqMQM/16/4erhf5sCZJ3FhQeEu', '2019-12-06 12:53:50'),
(7, 'bernardo dalton', 'mandacadzua', 'ben@gmail.com', '$2y$10$py/dSAfFIhkSiw0vDV6H5eOsqYExkRxsSNybr6GH4IT3eBvp8Jybu', '2019-12-12 08:13:09'),
(8, 'egas domingo', 'castigo', 'egas@gnail.com', '$2y$10$Cy2SoaQcaGf.ifzwqtGUveiXe4UT8AuzWNPiG.ohR3omvoXv3Kxaq', '2019-12-28 10:13:19'),
(9, 'osvaldo hilario', 'daniel', 'osvaldo.h@gmail.com', '$2y$10$DND3HVjWw1EO2I/8TV9W2uWEQ8268TGU/BK0kSX4z8Qc3gUXIPShm', '2019-12-28 10:15:47');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `geleria`
--
ALTER TABLE `geleria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `geleria`
--
ALTER TABLE `geleria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
