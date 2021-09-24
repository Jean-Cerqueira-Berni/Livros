-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Set-2021 às 20:50
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pwii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `ISBN` varchar(20) NOT NULL,
  `Autor` varchar(60) NOT NULL,
  `Nome` varchar(90) NOT NULL,
  `Paginas` varchar(50) NOT NULL,
  `Assunto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `ISBN`, `Autor`, `Nome`, `Paginas`, `Assunto`) VALUES
(1, '0-387-90109-4', 'Donald W. Barnes, John M. Mack', 'An Algebraic Introduction to Mathematical Logic', '121', 'Lógica'),
(2, '0-387-97498-X', 'Ieke Moerdijk, Gonzalo Reyes', 'Models for Smooth Infinitesimal Analysis', '399', 'Anéis \\( \\mathcal{C}^{\\infty}\\)'),
(3, '0-486-66348-5', 'William J. LeVeque', 'Elementary Theory of Numbers', '132', 'Teoria dos Números'),
(4, '0-387-97498-X', 'Richard S. Pierce', 'Modules over Commutative Regular Rings', '113', 'Álgebra'),
(5, '3-540-20072-X', 'Juan A. Navarro González, Juan B. Sancho de Salas', '\\( \\mathcal{C}^{\\infty}-\\)Differentiable Spaces', '188', 'Anéis \\( \\mathcal{C}^{\\infty}\\)'),
(7, '978-0-19-923718-0', 'Steve Awodey', 'Category Theory', '311', 'Teoria de Categorias'),
(8, '978-0-486-49073-1', 'George Takeuti', 'Proof Theory', '490', 'Lógica'),
(9, '978-03-879-0093-3', 'Paul R. Halmos', 'Finite Dimensional Vector Spaces', '199', 'Álgebra Linear'),
(10, '978-85-244-0142-8', 'José Plínio de Oliveira Santos', 'Introdução à Teoria dos Números', '198', 'Teoria dos Números'),
(11, '978-85-273-0155-8', 'Ernest Nagel, James R. Newman', 'A Prova de Gödel', '100', 'Lógica'),
(12, '978-85-393-0366-3', 'George S. Boolos, John P. Burgess, Richard C. Jeffrey', 'Computabilidade e Lógica', '435', 'Lógica'),
(13, '978-85-7608-801-1', 'Barry Burd', 'Java para Leigos', '401', 'Linguagem Java'),
(14, '978-8570567055', 'Hygino H. Domingues', 'Espaços Métricos e Introdução à Topologia', '184', 'Topologia'),
(15, '978-858-5818-68-5', 'Ivan Niven', 'Números Racionais e Irracionais', '216', 'Teoria dos Números'),
(16, '978-85-85818-47-0', 'Abdênago Barros Plácido Andrade', 'Introdução à Geometria Projetiva', '162', 'Geometria Projetiva'),
(18, '978-1-58488-876-5', 'Elliot Mendelson', 'Introduction to Mathematical Logic', '468', 'Lógica'),
(19, ' 978-1-4471-4557-8', 'Dirk van Dalen', 'Logic and Structure', '263', 'Lógica'),
(20, ' 978-85-314-1672-9', 'Rogério Augusto dos Santos Fajardo', 'Lógica Matemática', '203', 'Lógica'),
(21, '  978-1568811352', 'Joseph R. Shoenfield', 'Mathematical Logic', '344', 'Lógica'),
(22, ' 978-1-4419-7939-1', 'John M. Lee', 'Introduction to Topological Manifolds', '433', 'Topologia de Variedades'),
(23, ' 0-521-42480-1', 'John McCleary', 'Geometry from a Differentiable Viewpoint', '308', 'Geometria Diferencial'),
(24, ' 85-7139-605-1', 'Hércules de Araújo Feitosa, Leonardo Paulovish', 'Um Prelúdio à Lógica', '225', 'Lógica'),
(25, '978-0-486-44655-4', 'Dag Prawitz', 'Natural Deduction - A Proof Theoretical Study', '113', 'Teoria da Prova'),
(26, '978-0697068897', 'James Dugundji', 'Topology', '447', 'Topologia Geral'),
(27, '978-1124152837', 'Sze-Tsen Hu', 'Elements of General Topology', '214', 'Topologia Geral'),
(29, '0-387-90892-7', 'Klaus Jänich', 'Topology', '192', 'Topologia Geral'),
(30, '978-85-7139-795-8', 'Gilberto Francisco Loibel', 'Introdução à Topologia', '129', 'Topologia Geral'),
(31, '978-0-19-875891-4', 'Olivia Caramello', 'Theories, Sites, Toposes', '368', 'Teoria dos Toposes'),
(32, '3-540-08439-8', 'Michael Makkai, Gonzalo E. Reyes', 'First Order Categorical Logic', '301', 'Lógica Categorial'),
(34, '8570562977', 'Hydino H. Domingues, Carlos A. Callioli, Roberto C. F. Costa', 'Álgebra Linear e Aplicações', '332', 'Álgebra Linear'),
(35, '9788529402024', 'José Luís Boldrini', 'Álgebra Linear', '411', 'Álgebra Linear'),
(36, '978-3-030-08962-7', 'Yuri I. Manin', 'Introduction to the Theory of Schemes', '205', 'Geometria Algébrica'),
(37, '0-201-00361-9', 'M. F. Atiyah, I. G. MacDonald', 'Introduction to Commutative Algebra', '128', 'Álgebra Comutativa'),
(38, '0-521-45889-7', 'Miles Reid', 'Undergraduate Commutative Algebra', '153', 'Álgebra Comutativa'),
(39, '978-85-244-0398-9', 'Eduardo Tengan, Herivelto Borges', 'Álgebra Comutativa em Quatro Movimentos', '490', 'Álgebra Comutativa'),
(40, '978-0805366907', 'Ian G. MacDonald', 'Algebraic Geometry: Introduction to Schemes', '113', 'Álgebra Comutativa'),
(41, '978-0-486-80903-8', 'Emily Riehl', 'Category Theory in Context', '240', 'Teoria de Categorias'),
(42, '978-0-521-06124-7', 'Francis Borceux', 'Handbook of Categorical Algebra 3 - Categories of Sheaves', '522', 'Teoria de Categorias'),
(43, '978-0-521-06122-3', 'Francis Borceux', 'Handbook of Categorical Algebra 2 - Categories and Structures', '443', 'Teoria de Categorias'),
(44, '978-0-521-06119-3', 'Francis Borceux', 'Handbook of Categorical Algebra 1 - Basic Category Theory', '345', 'Teoria de Categorias'),
(45, '978-0-486-46286-8', 'John L. Bell', 'Toposes and Local Set Theories - An Introduction', '267', 'Teoria dos Toposes'),
(46, '978-0-486-48821-9', 'Chen Chung Chang, Jerome Keisler', 'Model Theory', '648', 'Teoria dos Modelos'),
(47, '0-12-059060-3', 'Michael A. Arbib, Ernest G. Manes', 'Arrows, Structures, and Functor - The Categorical Imperative', '185', 'Teoria de Categorias'),
(48, '3-540-20665-5', 'Alexandru Dimca', 'Sheaves in Topology', '236', 'Teoria de Categorias'),
(49, '978-3-642-06620-7', 'Masaki Kashiwara, Pierre Schapira', 'Categories and Sheaves', '497', 'Teoria de Categorias'),
(50, '978-0-486-46934-8', 'Jiri Adámek, Horst Herrlich, George E. Strecker', 'Abstract and Concrete Categories - The Joy of Cats', '517', 'Teoria de Categorias'),
(51, '3-540-05783-8', 'Horst Schubert', 'Categories', '385', 'Teoria de Categorias'),
(52, '0-521-42261-2', 'Jiri Adamek, Jiri Rosicky', 'Locally Presentable and Accessible Categories', '316', 'Teoria de Categorias'),
(53, '978-0-486-43279-3', 'Alain M. Robert', 'Nonstardad Analysis', '156', 'Análise Não-Standard');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
