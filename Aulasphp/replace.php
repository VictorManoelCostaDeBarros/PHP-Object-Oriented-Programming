<?php 
    $original = 'victor@gmail.com';

    $modificado = preg_replace('/(.*?)@(.*?)\.(.*?)$/', '$1@dankicode.$3', $original);

    echo $modificado;
?>