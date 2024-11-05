<?php
include_once("_conexao.php");

if ($_POST["tabela"] == 'escola') {
        editaEscola($_POST["input_cod"], $_POST["input_nome"]);
        header("Location: ./Escola/EscolaSelect.php");
}

if ($_POST["tabela"] == 'turma') {
        editaTurma($_POST["input_cod"], $_POST["input_nome"], $_POST["input_turno"]);
        header("Location: ./Turma/TurmaSelect.php");
}

if ($_POST["tabela"] == 'aluno') {
        editaAluno($_POST["input_cod"], $_POST["input_nome"], $_POST["input_matricula"], $_POST["input_observacoes"], $_POST["input_escola"]);
        header("Location: ./Aluno/AlunoSelect.php");
}

if ($_POST["tabela"] == 'turma_aluno') {
        editaTurma_aluno($_POST["input_aluno"], $_POST["input_turma"], $_POST['teste']);
        header("Location: ./Turma_aluno/Turma_alunoSelect.php");
}

if ($_POST["tabela"] == 'chamada_frequencia') {
        editaFrequencia($_POST["input_cod"], $_POST["input_data"], $_POST["input_status"], $_POST["input_aluno"], $_POST["input_turma"]);
        header("Location: ./Frequencia/FrequenciaSelect.php");
}

# -------------------------------------------

function editaEscola($p1, $p2)
{
        $conexao = conectaBD();

        $dados = "UPDATE  Escola
                SET     Nome  = '{$p2}'
                WHERE  ID = '{$p1}'";

        echo "$dados";
        mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

        echo "Editado com Sucesso!";
        ?>
        <h3><a href="./Escola/EscolaSelect.php">LISTAR - ESCOLAS</a></h3>

        <?php
        desconectaBD($conexao);
}

function editaTurma($p1, $p2, $p3)
{
        $conexao = conectaBD();

        $dados = "UPDATE  Turma
                SET     Nome  = '{$p2}',
                        Turno = '{$p3}'
                WHERE  ID = '{$p1}'";

        echo "$dados";
        mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

        echo "Editado com Sucesso!";
        ?>
        <h3><a href="./Escola/EscolaSelect.php">LISTAR - TURMAS</a></h3>

        <?php
        desconectaBD($conexao);
}

function editaAluno($p1, $p2, $p3, $p4, $p5)
{
        $conexao = conectaBD();

        $dados = "UPDATE  Aluno
                SET     Nome  = '{$p2}',
                        Matricula = '{$p3}',
                        Observacoes = '{$p4}',
                        Escola_ID = '{$p5}'
                WHERE  ID = '{$p1}'";

        echo "$dados";
        mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

        echo "Editado com Sucesso!";
        ?>
        <h3><a href="./Aluno/AlunoSelect.php">LISTAR - ALUNOS</a></h3>

        <?php
        desconectaBD($conexao);
}

function editaTurma_aluno($p1, $p2, $p3)
{
        $conexao = conectaBD();

        $dados = "UPDATE  Turma_aluno
                SET     Turma_ID = '{$p2}'
                WHERE   Aluno_ID = '{$p1}' AND
                        Turma_ID = '{$p3}'";

        echo "$dados";
        mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

        echo "Editado com Sucesso!";
        ?>
        <h3><a href="./Turma_aluno/Turma_alunoSelect.php">LISTAR - Vínculo Turma_aluno</a></h3>

        <?php
        desconectaBD($conexao);
}

function editaFrequencia($p1, $p2, $p3, $p4, $p5)
{
        $conexao = conectaBD();

        $dados = "UPDATE  Chamada_frequencia
                SET     Data  = '{$p2}',
                        Status = '{$p3}',
                        Aluno_ID = '{$p4}',
                        Turma_ID = '{$p5}'
                WHERE  ID = '{$p1}'";

        echo "$dados";
        mysqli_query($conexao, $dados) or die(mysqli_error($conexao));

        echo "Editado com Sucesso!";
        ?>
        <h3><a href="./Frequencia/FrequenciaSelect.php">LISTAR - FREQUÊNCIAS</a></h3>

        <?php
        desconectaBD($conexao);
}

?>