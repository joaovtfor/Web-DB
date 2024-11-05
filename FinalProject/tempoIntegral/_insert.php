<?php
include_once("_conexao.php");

if ($_POST["tabela"] == 'escola') {
  cadastraEscola($_POST["input_nome"]);
  header("Location: ./Escola/EscolaSelect.php");
}

if ($_POST["tabela"] == 'turma') {
  cadastraTurma($_POST["input_nome"], $_POST["input_turno"]);
  header("Location: ./Turma/TurmaSelect.php");
}

if ($_POST["tabela"] == 'aluno') {
  cadastraAluno($_POST["input_nome"], $_POST["input_matricula"], $_POST["input_observacoes"], $_POST["input_escola"]);
  header("Location: ./Aluno/AlunoSelect.php");
}

if ($_POST["tabela"] == 'turma_aluno') {
  cadastraTurma_aluno($_POST["input_aluno"], $_POST["input_turma"]);
  header("Location: ./Turma_aluno/Turma_alunoSelect.php");
}

if ($_POST["tabela"] == 'chamada_frequencia') {
  cadastraFrequencia($_POST["input_data"], $_POST["input_status"], $_POST["input_aluno"], $_POST["input_turma"]);
  header("Location: ./Frequencia/FrequenciaSelect.php");
}

# -----------------------------------------------------------------------

function cadastraEscola($Nome)
{
  $conexao = conectaBD();

  $dados = "INSERT INTO Escola(Nome) VALUES ('{$Nome}')";
  mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

  echo "Cadastrado com Sucesso!";

  desconectaBD($conexao);
}

function cadastraTurma($Nome, $Turno)
{
  $conexao = conectaBD();

  $dados = "INSERT INTO Turma(Nome, Turno) VALUES ('{$Nome}', '{$Turno}')";
  mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

  echo "Cadastrado com Sucesso!";

  desconectaBD($conexao);
}

function cadastraAluno($Nome, $Matricula, $Observacoes, $Escola)
{
  $conexao = conectaBD();

  $dados = "INSERT INTO Aluno(Nome, Matricula, Observacoes, Escola_ID) VALUES ('{$Nome}', {$Matricula}, '{$Observacoes}', {$Escola})";
  mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

  echo "Cadastrado com Sucesso!";

  desconectaBD($conexao);
}

function cadastraTurma_aluno($Aluno_ID, $Turma_ID)
{
  $conexao = conectaBD();

  $dados = "INSERT INTO Turma_aluno(Aluno_ID, Turma_ID) VALUES ({$Aluno_ID},'{$Turma_ID}')";
  mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

  echo "Cadastrado com Sucesso!";

  desconectaBD($conexao);
}

function cadastraFrequencia($Data, $Status, $Aluno, $Turma)
{
  $conexao = conectaBD();

  $dados = "INSERT INTO Chamada_frequencia(Data, Status, Aluno_ID, Turma_ID) VALUES ('{$Data}', '{$Status}', {$Aluno}, {$Turma})";
  mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

  echo "Cadastrado com Sucesso!";

  desconectaBD($conexao);
}

?>