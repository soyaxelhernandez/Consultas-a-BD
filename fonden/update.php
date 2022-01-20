
<?php
	
	require 'conexion.php';
	
	$id = $_POST['id'];
	$Responsable_del_seguimiento = isset($_POST['Responsable_del_seguimiento']) ? $_POST['Responsable_del_seguimiento']: null;
	$Tipo_de_Autorizacion = $_POST['Tipo_de_Autorizacion'];
	$Estado = $_POST['Estado'];
	$Evento = $_POST['Evento'];
	$Mes_de_ocurrencia = $_POST['Mes_de_ocurrencia'];
	$Año_de_ocurrencia = isset($_POST['Año_de_ocurrencia']) ? $_POST['Año_de_ocurrencia'] : null;
	$No_Municipios = $_POST['No_Municipios'];
	$Status = $_POST['Status'];
	$Fechas_de_Procedimiento = $_POST['Fechas_de_Procedimiento'];
	$Status_del_evento = $_POST['Status_del_evento'];
	$Sesion = $_POST['Sesion'];
	$Año_de_Autorizacion = $_POST['Año_de_Autorizacion'];
	$Sector = $_POST['Sector'];
	$Competencia = $_POST['Competencia'];
	$Num_Sol_API = $_POST['Num_Sol_API'];
	$Monto_Sol_API = $_POST['Monto_Sol_API'];
	$Autorizacion_API = $_POST['Autorizacion_API'];
	$API = $_POST['API'];
	$Gastos_de_evaluacion = $_POST['Gastos_de_evaluacion'];
	$No_De_Acciones_de_Restauracion = $_POST['No_De_Acciones_de_Restauracion'];
	$Acciones_de_Reconstruccion = $_POST['Acciones_de_Reconstruccion'];
	$Mejoras = $_POST['Mejoras'];
	$Aportacion_FONDEN = $_POST['Aportacion_FONDEN'];
	$Aportacion_Estatal = $_POST['Aportacion_Estatal'];
	$Aportacion_Dependencia = $_POST['Aportacion_Dependencia'];
	$Fondo_Guerrero = $_POST['Fondo_Guerrero'];
	$Aportacion_Total = $_POST['Aportacion_Total'];
	$Gastos_Modificados = $_POST['Gastos_Modificados'];
	$APIN_Acta = $_POST['APIN_Acta'];
	$Estatal_Acta = $_POST['Estatal_Acta'];
	$Federal_Acta = $_POST['Federal_Acta'];
	$Total_Acta = $_POST['Total_Acta'];
	$Oficio_de_Notificacion_SHCP = $_POST['Oficio_de_Notificacion_SHCP'];
	$Oficio_de_Notificacion_Federal = $_POST['Oficio_de_Notificacion_Federal'];
	$Oficio_de_Notificacion_Estatal = $_POST['Oficio_de_Notificacion_Estatal'];
	$Constancia_de_Acuerdo = $_POST['Constancia_de_Acuerdo'];
	$Fecha_de_Ministracion = $_POST['Fecha_de_Ministracion'];
	$Ministrado = $_POST['Ministrado'];
	$Fecha_limite_para_entrega_de_calendario = $_POST['Fecha_limite_para_entrega_de_calendario'];
	$Calendario = $_POST['Calendario'];
	$Periodo = $_POST['Periodo'];
	$Acciones_que_ejecuta_el_FONDEN = $_POST['Acciones_que_ejecuta_el_FONDEN'];
	$Fecha_Avances_Federales = $_POST['Fecha_Avances_Federales'];
	$Ejecutor_Federal = $_POST['Ejecutor_Federal'];
	$Avance_Fisico_Federal = $_POST['Avance_Fisico_Federal'];
	$Avance_Financiero_Federal = $_POST['Avance_Financiero_Federal'];
	$Observaciones_Federales = $_POST['Observaciones_Federales'];
	$Fecha_Avance_Estatal = $_POST['Fecha_Avance_Estatal'];
	$Ejecutor_Estatal = $_POST['Ejecutor_Estatal'];
	$Avance_Fisico_Estatal = $_POST['Avance_Fisico_Estatal'];
	$Avances_Financiero_Estatal = $_POST['Avances_Financiero_Estatal'];
	$Observaciones_Estatales = $_POST['Observaciones_Estatales'];
	$Observaciones_generales = $_POST['Observaciones_generales'];
	$Libro_Blanco_Federal = $_POST['Libro_Blanco_Federal'];
	$FechaEntregaLBF = $_POST['FechaEntregaLBF'];
	$Libro_Blanco_Estatal = $_POST['Libro_Blanco_Estatal'];
	$FechaEntregaLBE = $_POST['FechaEntregaLBE'];
	$Presenta_a_la_CIGF = $_POST['Presenta_a_la_CIGF'];
	$Tipo_de_Sesion = $_POST['Tipo_de_Sesion'];
	$No_Sesion = $_POST['No_Sesion'];
	$Carpeta = $_POST['Carpeta'];
	$CLAVEEVENTO = $_POST['CLAVEEVENTO'];
	$ObsLBFed = $_POST['ObsLBFed'];
	$ObsLBEdo = $_POST['ObsLBEdo'];
	$Notas = $_POST['Notas'];
	$Municipios = $_POST['Municipios'];
	$Recalendarizacion = $_POST['Recalendarizacion'];
	$Municipio = $_POST['Municipio'];
	$Fechas_del_Procedimiento = $_POST['Fechas_del_Procedimiento'];
	$DGGRValidacion = $_POST['DGGRValidacion'];
	$DGRRFecha = $_POST['DGRRFecha'];
	$DGGRObservaciones = $_POST['DGGRObservaciones'];
	$RegInventario = $_POST['RegInventario'];
	$RegSerie = $_POST['RegSerie'];
	$RegSubserie = $_POST['RegSubserie'];
	$RegObservaciones = $_POST['RegObservaciones'];
	$Tipoaccion = $_POST['Tipoaccion'];
	$NumInfraestructura = $_POST['NumInfraestructura'];
	$PeriodoAnterior = $_POST['PeriodoAnterior'];
	$LibroFederal = $_POST['LibroFederal'];
	$LibroEstado = $_POST['LibroEstado'];
	$SecretarioTecnico = $_POST['SecretarioTecnico'];

	$sql = "UPDATE datos SET Responsable_del_seguimiento = '$Responsable_del_seguimiento',
	Tipo_de_Autorizacion = '$Tipo_de_Autorizacion',
	Estado= '$Estado',
	Evento = '$Evento',
	Mes_de_ocurrencia = '$Mes_de_ocurrencia',
	Año_de_ocurrencia = '$Año_de_ocurrencia' ,
	No_Municipios = '$No_Municipios',
	Status = '$Status',
	Fechas_de_Procedimiento = '$Fechas_de_Procedimiento',
	Status_del_evento = '$Status_del_evento',
	Sesion = '$Sesion',
	Año_de_Autorizacion = '$Año_de_Autorizacion',
	Sector = '$Sector',
	Competencia = '$Competencia',
	Num_Sol_API = '$Num_Sol_API',
	Monto_Sol_API = '$Monto_Sol_API',
	Autorizacion_API = '$Autorizacion_API',
	API = '$API',
	Gastos_de_evaluacion = '$Gastos_de_evaluacion',
	No_De_Acciones_de_Restauracion = '$No_De_Acciones_de_Restauracion',
	Acciones_de_Reconstruccion = '$Acciones_de_Reconstruccion',
	Mejoras = '$Mejoras',
	Aportacion_FONDEN = '$Aportacion_FONDEN',
	Aportacion_Estatal = '$Aportacion_Estatal',
	Aportacion_Dependencia = '$Aportacion_Dependencia',
	Fondo_Guerrero = '$Fondo_Guerrero',
	Aportacion_Total = '$Aportacion_Total',
	Gastos_Modificados = '$Gastos_Modificados',
	APIN_Acta = '$APIN_Acta',
	Estatal_Acta = '$Estatal_Acta',
	Federal_Acta = '$Federal_Acta',
	Total_Acta = '$Total_Acta',
	Oficio_de_Notificacion_SHCP = '$Oficio_de_Notificacion_SHCP',
	Oficio_de_Notificacion_Federal = '$Oficio_de_Notificacion_Federal',
	Oficio_de_Notificacion_Estatal = '$Oficio_de_Notificacion_Estatal',
	Constancia_de_Acuerdo = '$Constancia_de_Acuerdo',
	Fecha_de_Ministracion = '$Fecha_de_Ministracion',
	Ministrado = '$Ministrado',
	Fecha_limite_para_entrega_de_calendario = '$Fecha_limite_para_entrega_de_calendario',
	Calendario = '$Calendario',
	Periodo = '$Periodo',
	Acciones_que_ejecuta_el_FONDEN = '$Acciones_que_ejecuta_el_FONDEN',
	Fecha_Avances_Federales = '$Fecha_Avances_Federales',
	Ejecutor_Federal = '$Ejecutor_Federal',
	Avance_Fisico_Federal = '$Avance_Fisico_Federal',
	Avance_Financiero_Federal = '$Avance_Financiero_Federal',
	Observaciones_Federales = '$Observaciones_Federales',
	Fecha_Avance_Estatal = '$Fecha_Avance_Estatal',
	Ejecutor_Estatal = '$Ejecutor_Estatal',
	Avance_Fisico_Estatal = '$Avance_Fisico_Estatal',
	Avances_Financiero_Estatal = '$Avances_Financiero_Estatal',
	Observaciones_Estatales = '$Observaciones_Estatales',
	Observaciones_generales = '$Observaciones_generales',
	Libro_Blanco_Federal = '$Libro_Blanco_Federal',
	FechaEntregaLBF = '$FechaEntregaLBF',
	Libro_Blanco_Estatal = '$Libro_Blanco_Estatal',
	FechaEntregaLBE = '$FechaEntregaLBE',
	Presenta_a_la_CIGF = '$Presenta_a_la_CIGF',
	Tipo_de_Sesion = '$Tipo_de_Sesion',
	No_Sesion = '$No_Sesion',
	Carpeta = '$Carpeta',
	CLAVEEVENTO = '$CLAVEEVENTO',
	ObsLBFed = '$ObsLBFed',
	ObsLBEdo = '$ObsLBEdo',
	Notas = '$Notas',
	Municipios = '$Municipios',
	Recalendarizacion = '$Recalendarizacion',
	Municipio = '$Municipio',
	Fechas_del_Procedimiento = '$Fechas_del_Procedimiento',
	DGGRValidacion = '$DGGRValidacion',
	DGRRFecha = '$DGRRFecha',
	DGGRObservaciones = '$DGGRObservaciones',
	RegInventario = '$RegInventario',
	RegSerie = '$RegSerie',
	RegSubserie = '$RegSubserie',
	RegObservaciones = '$RegObservaciones',
	Tipoaccion = '$Tipoaccion',
	NumInfraestructura = '$NumInfraestructura',
	PeriodoAnterior = '$PeriodoAnterior',
	LibroFederal = '$LibroFederal',
	LibroEstado = '$LibroEstado',
	SecretarioTecnico = '$SecretarioTecnico' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="javascript:history.go(-2)" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
	</body>
</html>