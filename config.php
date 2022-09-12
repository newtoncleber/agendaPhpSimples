<?php
	session_start();
	include_once('conexao_.php');
	//$Id = $_POST['Id'];
	$Licenca = mysqli_real_escape_string($conexao,$_POST['Licenca'] ); 
	$Operacao = mysqli_real_escape_string($conexao, $_POST['Operacao'] );
	$Email = mysqli_real_escape_string($conexao, $_POST['Email'] );
	$Inicio = mysqli_real_escape_string($conexao, $_POST['Inicio']); 
	$Fim = mysqli_real_escape_string($conexao, $_POST['Fim']);
	
	//testa as três possibilidades de overlaping
	//1- ('{$Inicio}' >= Inicio AND '{$Inicio}' < Fim) - busca eventos cadastrados que começam antes e terminam depois do INICIO novo agendamento
	//2- ('{$Fim}' > Inicio AND '{$Fim}' <= Fim) - busca eventos cadastrados que começam antes e terminam depois do FIM novo agendamento
	//3- ('{$Inicio}' <= Inicio AND '{$Fim}' >= Fim) - busca eventos cadastrados que começam e terminam entre o INICIO e o FIM do novo agendamento
	$testaOverlaping = "select * from `agenda` where ('{$Inicio}' >= Inicio AND '{$Inicio}' < Fim) 
											OR ('{$Fim}' > Inicio AND '{$Fim}' <= Fim) 
											OR ('{$Inicio}' <= Inicio AND '{$Fim}' >= Fim)";
	$resposta = mysqli_query($conexao, $testaOverlaping); 
	//se retornar 0 é porque nenhum evento cadastrado tem overlap com o novo
	if (mysqli_num_rows($resposta)==0){//so insere o novo evento se não houver overlap
		$funciona_ai = "insert into AGENDA (Licenca, Operacao, Email, Inicio, Fim) values ('{$Licenca}', '{$Operacao}', '{$Email}', '{$Inicio}', '{$Fim}');";
		mysqli_query($conexao, $funciona_ai);
		$_SESSION['mensagem'] = "Evento Cadastrado.";
	}else{
		$_SESSION['mensagem'] = "Não foi possível cadastrar o novo evento. Existem outros eventos cadastrados para o intervalo.";
	}
	
	header("Location: index.php");
	
?>