<?php
session_start();
?>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    </head>
    
    <div class="registro">

        <p class="title">Cadastro</p>

        <form action="registro.php" method="POST" class="form">

            <input type="text" name="name" id="name" placeholder="Nome" require>
            <input type="email" name="emailreg" id="emailreg" placeholder="E-mail" require>
            <input type="password" name="senhareg" id="senhareg" placeholder="Senha" require>
            <input type="submit" value="Cadastrar" class="buttom">

        </form>

    </div>