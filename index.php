<?php 

require_once("config.php");

//Carrega um usuário
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

//Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search)

//Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("user", "12345");
// echo $usuario;

//Insere um usuário na tabela
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

//Atualiza um usuário na tabela
// $usuario = new Usuario();
// $usuario->loadById(1);
// $usuario->update("professor", "!@#$%");
// echo $usuario

//Deleta um usuário da tabela
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->delete();

echo $usuario;


 ?>