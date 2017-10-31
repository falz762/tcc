<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html. charset-utf8">
        <title> Cadastro</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>

<div id="cadastro">
    <form method="post" action="?go=cadastrar">
        <table id="cad_table">
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" id="nome" class="txt"/></td>
            </tr>
             <tr>
                <td>Email:</td>
                <td><input type="text" name="nome" id="nome" class="txt"/></td>
            </tr>
             <tr>
                <td>Usuário:</td>
                <td><input type="text" name="nome" id="nome" class="txt" maxlength="50"/></td>
            </tr>
             <tr>
                <td>Senha:</td>
                <td><input type="text" name="nome" id="nome" class="txt" maxlength="15"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="cadastrar"></td>
            </tr>
        </table>
    </form>
</div>
<?php

?>