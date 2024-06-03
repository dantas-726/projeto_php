<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas</title>
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
        <a href="?pagina=inserir_matricula" class="btn">Inserir nova matricula</a>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Nome aluno</th>
                        <th>Nome curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($linha = mysqli_fetch_array($consulta_matriculas)){
                            echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                            echo '<td>'.$linha['nome_curso'].'</td>';
                    ?>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
