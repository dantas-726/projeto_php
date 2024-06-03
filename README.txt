#CRIANDO TABELAS NO BANCO DE DADOS

$query = "CREATE TABLE ALUNOS_CURSOS(
  id_aluno_curso int not null auto_increment,
  id_aluno int not null,
  id_curso int not null,
  primary key(id_aluno_curso)
  )";

  // $executar =mysqli_query($con, $query);
  // if($executar){
  //   echo "Query executada com sucesso! (Create juncao)";

  // } else { 
  //   echo "Não foi possível executar a query (Create juncao)";
  // }



#INSERINDO ITENS NO BANCO DE DADOS
/* inserindo um curso 
$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('Curso PHP' , '40')";

  $executar = mysqli_query($con, $query);
  if($executar){
    echo "Query executada com sucesso! (Curso adicionado)";

  } else { 
    echo "Não foi possível executar a query (ERRO)";
  }
  **/
/*
#Inserindo aluno dentro de um curso 
$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES('1' , '1')";

  $executar = mysqli_query($con, $query);
  if($executar){
    echo "Query executada com sucesso! (juncao aluno / curso)";

  } else { 
    echo "Não foi possível executar a query (juncao aluno / curso)";
  } **/



  $query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso 
			FROM alunos, cursos, alunos_cursos
			WHERE alunos_cursos.id_aluno = alunos.id_aluno
			AND alunos_cursos.id_curso = cursos.id_curso";
			
  $consulta_matriculas = mysqli_query($con, $query);

  echo '<table border = 1><tr><th>Nome do Aluno</th><th>Nome do curso</th></tr>';
  while($linha = mysqli_fetch_array($consulta_matriculas)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso']. '</td></tr>';
}