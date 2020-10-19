CREATE TABLE `tbl_disciplina` (
  `disciplina` text NOT NULL,
  `professor` text NOT NULL,
  `semestre` int(4) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_disciplina` (`disciplina`, `professor`, `semestre`) VALUES
('Programacao para Internet II', 'Adalto Selau', '3'),
('Organizacao de Computadores', 'Nelson Ferreira', '2'),
('Engenharia de Software II', 'Sirlei Sulzbach', '3');
