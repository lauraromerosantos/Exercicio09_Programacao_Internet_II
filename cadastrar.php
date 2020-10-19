<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    </head>
<body>

<?php
	function conecta_bd()
	{
	$link=mysqli_connect("localhost","root"," ","api_rest");

		mysqli_query($link, 'SET utf8');
		mysqli_query($link, 'SET character_set_connection=utf8');
		mysqli_query($link, 'SET character_set_client=utf8');
        mysqli_query($link, 'SET character_set_results=utf8');
        
	if ($link)
		return($link);
	return(FALSE);
	}

	$disciplina=$_POST["txtDisciplina"];
	$professor=$_POST["txtProfessor"];
	$semestre=$_POST["txtSemestre"];

	if ($disciplina=="" or $professor=="" or $semestre=="")
		print("Faltou preencher algum campo. Tente novamente!");
	else
	{
		print("Cadastrando a disciplina:<p>");
		$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
		mysqli_query($ok, "insert into tbl_disciplina (disciplina, professor, semestre) values ('$disciplina', '$professor', '$semestre')") or die ("Não é possível inserir disciplina");
		print("A disciplina foi cadastrada com sucesso: <b>$disciplina</b> <b>$professor</b> <b>$semestre</b>");
	}
?>
<p><a href="index.html">Voltar</a>
</body>
</html>