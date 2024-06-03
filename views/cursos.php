<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
        }
        .table-wrapper {
            overflow-x: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="?pagina=inserir_curso" class="btn">Inserir novo curso</a>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nome curso</th>
                        <th>Carga horária</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($linha = mysqli_fetch_array($consulta_cursos)){
                            echo '<tr><td>'.$linha['nome_curso'].'</td>';
                            echo '<td>'.$linha['carga_horaria'].'</td>';
                    ?>
                    <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
                    <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
