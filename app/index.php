<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script language="JavaScript" type="text/javascript" src="MascaraValidacao.js"></script>
	<script language="JavaScript" type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>
<body>	
	<form action="add.php" method="POST" name="form1">
		Nome: <input type="text" name="name">
		<br><br>Telefone: 
		<input type="text" name="tel" onKeyPress="MascaraTelefone(form1.tel);" 
		maxlength="15"  onBlur="ValidaTelefone(form1.tel);">
		<br><br>Cidade: <input type="text" name="cidade">
		<br><br>Estado: <select name="estado">
			<option value="">Selecione eu Etado</option>
			<option value="Acre">Acre (AC)</option>
			<option value="Alagoas">Alagoas (AL)</option>
			<option value="Amapá">Amapá (AP)</option>
			<option value="Amazonas">Amazonas (AM)</option>
			<option value="Bahia">Bahia (BA)</option>
			<option value="Ceará">Ceará (CE)</option>
			<option value="DistritoFederal">Distrito Federal (DF)Distrito Federal</option>
			<option value="EspíritoSanto">Espírito Santo (ES)</option>
			<option value="Goiás">Goiás (GO)</option>
			<option value="Maranhão">Maranhão (MA)</option>
			<option value="Mato Grosso">Mato Grosso (MT)</option>
			<option value="Mato Grosso do Sul">Mato Grosso do Sul (MS)</option>
			<option value="Minas Gerais">Minas Gerais (MG)</option>
			<option value="Pará">Pará (PA) </option>
			<option value="Paraíba">Paraíba (PB)</option>
			<option value="Paraná">Paraná (PR)</option>
			<option value="Pernambuco">Pernambuco (PE)</option>
			<option value="Piauí">Piauí (PI)</option>
			<option value="RiodeJaneiro">Rio de Janeiro (RJ)</option>
			<option value="RioGrandedoNorte">Rio Grande do Norte (RN)</option>
			<option value="RioGrandedoSul">Rio Grande do Sul (RS)</option>
			<option value="Rondônia">Rondônia (RO)</option>
			<option value="Roraima">Roraima (RR)</option>
			<option value="SantaCatarina">Santa Catarina (SC)</option>
			<option value="SãoPaulo">São Paulo (SP)</option>
			<option value="Sergipe">Sergipe (SE)</option>
			<option value="Tocantins">Tocantins (TO)</option>
		</select>
		<br><br>E-mail: <input type="text" name="email">
		<br><br>Informações adicionais: <input type="text" name="info">
		<br><br>Tipo cliente:
		<input type="radio" name="tipo" value="op1"> Física
        <input type="radio" name="tipo" value="op2"> Jurídica 
		<br><br>CPF:
		<input type="text" id="op1" name="cpf" onBlur="ValidarCPF(form1.cpf);" 
		onKeyPress="MascaraCPF(form1.cpf);" maxlength="14">
		<br><br>CNPJ:
		<input type="text" id="op2" name="cnpj" onKeyPress="MascaraCNPJ(form1.cnpj);" 
		maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);">
		<input type="submit" value="Enviar">
	</form>
	<script type="text/javascript">
		$('input[type=radio]').on('click', function(event) {
/* Act on the event */
		if ($(this).val()=='op1') {
		$('#op2').attr('disabled', 'true');
		$('#op1').removeAttr('disabled');
}		else{
		$('#op1').attr('disabled', 'true');
		$('#op2').removeAttr('disabled');
}
});
	</script>
</body>
</html>