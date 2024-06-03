<?php 

# BASE DE DADOS 
include 'db.php';
# CABEÇALHO
include 'header.php';
# CONTEÚDO DA PÁGINA

@$pagina = $_GET['pagina'];

if($pagina == 'cursos'){
  include 'views/cursos.php';

} elseif($pagina == 'alunos'){
  include 'views/alunos.php';

} elseif($pagina == 'inserir_curso'){
  include 'views/inserir_curso.php';

} elseif($pagina == 'inserir_aluno'){
  include 'views/inserir_aluno.php';

} elseif($pagina == 'inserir_matricula'){
  include 'views/inserir_matricula.php';

} elseif($pagina == 'matriculas'){
  include 'views/matriculas.php';

} 
else {
  include 'views/home.php';
}


# RODAPÉ 
include 'footer.php';