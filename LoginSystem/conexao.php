
<!-- conexão com banco de dados por metodo include -->
<?php
    define('HOST', '');
    define('USUARIO', '');
    define('SENHA', '');
    define('DB', '');

    $conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>
