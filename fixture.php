<?php
ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

require_once 'Core/Fixture.php';

$fixture = new Fixture();

$fixture->dropTables();

$inTable['config'] = $fixture->setTabelas("CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_site` varchar(45) NOT NULL,
  `titulo_empresa` varchar(45) NOT NULL,
  `descricao_empresa` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

$inTable['produto'] = $fixture->setTabelas("CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `valor` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

if ($inTable['config'] == 1) {

    echo "Tabela 'config' inserida com sucesso!<br>";

    $inRegistros['config'] = $fixture->insertRegistros("INSERT INTO `config` (`id`, `titulo_site`, `titulo_empresa`, `descricao_empresa`) VALUES
    (1, 'SoftEmp', 'SoftEmp', 'A nossa empresa e destinada ao estudo e desenvolvimento de software para gerenciamento.');");

}

if ($inTable['produto'] == 1) {

    echo "Tabela 'produto' inserida com sucesso!<br>";

    $inRegistros['produto'] = $fixture->insertRegistros("INSERT INTO `produto` (`id`, `nome`, `valor`) VALUES
    (1, 'Banana', '10,50'),
    (2, 'Placa Mae', '130,77'),
    (3, 'Memoria', '87,12'),
    (4, 'Arroz', '9,90'),
    (5, 'cooler', '21,00'),
    (6, 'Camisa', '142,00'),
    (7, 'Tenis', '378,94'),
    (8, 'Gabinete', '99,00'),
    (9, 'sofa', '543,79'),
    (10, 'Bala', '0,10'),
    (11, 'Massa', '3,45'),
    (12, 'Cafe', '12,13');");

}

echo "<hr>";
if($inRegistros['config'] == 1)
{
    echo "Tabela 'config' populada com sucesso!<br>";
}


if($inRegistros['produto'] == 1)
{
    echo "Tabela 'produto' populada com sucesso!<br>";
}
