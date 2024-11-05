<?php
  include_once("_conexao.php");

  $get1 = (string) filter_input(INPUT_GET, "tabela");
  $get2 = filter_input(INPUT_GET, "var_cod");

  if ($get1 == 'Escola') {
    excluirEscola($get2);
    header("Location: ./Escola/EscolaSelect.php");
  }

  if ($get1 == 'Turma') {
    excluirTurma($get2);
    header("Location: ./Turma/TurmaSelect.php");
  }

  if ($get1 == 'Aluno') {
    excluirAluno($get2);
    header("Location: ./Aluno/AlunoSelect.php");
  }

  $get3 = filter_input(INPUT_GET, "var_aluno");
  $get4 = filter_input(INPUT_GET, "var_turma");

  if ($get1 == 'Turma_aluno') {
    excluirTurma_Aluno($get3, $get4);
    header("Location: ./Turma_Aluno/Turma_AlunoSelect.php");
  }

  if ($get1 == 'Chamada_frequencia') {
    excluirFrequencia($get2);
    header("Location: ./Frequencia/FrequenciaSelect.php");
  }

  function excluirEscola($p1)
  {
    $conexao = conectaBD();

    $dados = "DELETE FROM Escola
            WHERE  ID = '{$p1}'";

    mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

    echo "Excluído com Sucesso!";

    desconectaBD($conexao);
  }

  function excluirTurma($p1)
  {
    $conexao = conectaBD();

    $dados = "DELETE FROM Turma
            WHERE  ID = '{$p1}'";

    mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

    echo "Excluído com Sucesso!";

    desconectaBD($conexao);
  }

  function excluirAluno($p1)
  {
    $conexao = conectaBD();

    $dados = "DELETE FROM Aluno
            WHERE  ID = '{$p1}'";

    mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

    echo "Excluído com Sucesso!";

    desconectaBD($conexao);
  }

  function excluirTurma_Aluno($p1, $p2)
  {
    $conexao = conectaBD();

    $dados = "DELETE FROM Turma_Aluno
              WHERE   Aluno_ID = '{$p1}' AND
                      Turma_ID = '{$p2}'";

    mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

    echo "Excluído com Sucesso!";

    desconectaBD($conexao);
  }

  function excluirFrequencia($p1)
  {
    $conexao = conectaBD();

    $dados = "DELETE FROM Chamada_frequencia
            WHERE  ID = '{$p1}'";

    mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

    echo "Excluído com Sucesso!";

    desconectaBD($conexao);
  }

?>