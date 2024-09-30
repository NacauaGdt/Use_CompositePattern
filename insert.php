<?php
// arquivo para teste de funcionamento da classe TSqlInsert.class

/* função __autoload
* carrega uma classe quando ela é necessaria, ou seja, quando ela é instanciada 
*pela primiera vez.
*/

function __autoload($classe) {
    if (file_exists("{$classe}.class.php")) {
        include_once("${$classe}.class.php");
    }
}

    //define o LOCALE do sistema para perimitir ponto decimal

    setlocale(LC_NUMERIC,"english");

    // cria uma instrução de INSERT

    // cria uma instrução de Insert 
    $sql = new TSqlInsert;
    // define o nome da entidade
    $sql->setEntity('aluno');
    // atribui valor para cada coluna
    $sql->setRowData('id', 3);
    $sql->setRowData('nome', 'Pedro Cardoso');
    $sql->setRowData('fone', '(88)4444-7777');
    $sql->setRowData('nascimento','1985-12-06');
    $sql->setRowData('sexo','M');
    $sql->setRowData('serie','4');     
    $sql->setRowData('mensalidade',280.40);
    // processa a instrução SQL

    echo $sql->getInstruction();         
    echo "<br>\n";







?>