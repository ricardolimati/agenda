<?php
/**
 * Created by PhpStorm.
 * User: RicardoLima
 * Date: 11/03/2019
 * Time: 17:33
 */
?>
<html>
<head>

</head>
<body>
 @foreach($pessoas as $pessoa)
    Nome:{{$pessoa->nome}}<br>
    Telefone:
     @foreach($pessoa->telefone as $telefone)
         {{$telefone->telefone}}
     @endforeach
     <br><br>
 @endforeach
</body>
</html>
