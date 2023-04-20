<?php

include_once 'Crypt.php';

if (isset($_POST['msg'], $_POST['key'], $_POST['key'])) {
    $alert = '';
    $cp = new Crypt(strtolower($_POST['msg']), $_POST['key'], $_POST['button']);
    $stringCrypt = $cp->choose();
   if ($stringCrypt === null) {
        $alert = '<div class="alert alert-warning"> Mensagem com mais de 100 caracteres </div>';
    }
}

include __DIR__ . '/index.php';
