<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Llenar select a partir de otro con php y mysql</title>
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>
	<h2>Llenar un select a partir de otro select con jquery y php</h2>

			<label> (Departamentos)</label>
			<select id="lista1" name="lista1">
				<option value="0">Selecciona una opción...</option>
				<option value="5">ANTIOQUIA</option>
				<option value="8">ATLÁNTICO</option>
				<option value="11">BOGOTÁ, D.C.</option>
				<option value="13">BOLÍVAR</option>
				<option value="15">BOYACÁ</option>
				<option value="17">CALDAS</option>
				<option value="18">CAQUETÁ</option>
				<option value="19">CAUCA</option>
				<option value="20">CESAR</option>
				<option value="23">CÓRDOBA</option>
				<option value="25">CUNDINAMARCA</option>
				<option value="27">CHOCÓ</option>
				<option value="41">HUILA</option>
				<option value="44">LA GUAJIRA</option>
				<option value="47">MAGDALENA</option>
				<option value="50">META</option>
				<option value="52">NARIÑO</option>
				<option value="54">NORTE DE SANTANDER</option>
				<option value="63">QUINDIO</option>
				<option value="66">RISARALDA</option>
				<option value="68">SANTANDER</option>
				<option value="70">SUCRE</option>
				<option value="73">TOLIMA</option>
				<option value="76">VALLE DEL CAUCA</option>
				<option value="81">ARAUCA</option>
				<option value="85">CASANARE</option>
				<option value="86">PUTUMAYO</option>
				<option value="88">ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA</option>
				<option value="91">AMAZONAS</option>
				<option value="94">GUAINÍA</option>
				<option value="95">GUAVIARE</option>
				<option value="97">VAUPÉS</option>
				<option value="99">VICHADA</option>


			</select>
			<br>
			<div id="select2lista"></div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos.php",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>
