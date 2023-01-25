<!-- configuracao de conexao como banco de dados mysql-->

<?php
    define("HOST","localhost");
    define("USER","root");
    define("PASS","");
    define("BASE", "cadastro");

    $conn = new MySQLi(HOST,USER,PASS,BASE);

