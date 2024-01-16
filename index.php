<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>CRUD</h1>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="?page=novo">Novo Usuário</a>
                </li>
                <li>
                    <a href="?page=listar">Listar Usuários</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        include('config.php');
        switch (@$_REQUEST['page']) {
            case "novo":
                include('novo-usuario.php');
                break;
            case "listar":
                include('listar-usuario.php');
                break;
            case "salvar":
                include('salvar-usuario.php');
                break;
            case "editar":
                include('editar-usuario.php');
                break;
            default:
                print "<h1>Bem vindo!</h1>";
        }
        ?>
    </main>
</body>

</html>