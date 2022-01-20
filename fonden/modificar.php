<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM datos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="Responsable_del_seguimiento" class="col-sm-2 control-label">Responsable del seguimineto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Responsable_del_seguimiento" name="Responsable_del_seguimiento" placeholder="Sin Responsable del seguimineto" value="<?php echo $row['Responsable_del_seguimiento']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="Tipo_de_Autorizacion" class="col-sm-2 control-label">Tipo de Autorización</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo_de_Autorizacion" name="Tipo_de_Autorizacion" placeholder="Sin Tipo de Autorización" value="<?php echo $row['Tipo_de_Autorizacion']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Sin Estado" value="<?php echo $row['Estado']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Evento" class="col-sm-2 control-label">Evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Evento" name="Evento" placeholder="Sin Evento" value="<?php echo $row['Evento']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Mes_de_ocurrencia" class="col-sm-2 control-label">Mes de ocurrencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Mes_de_ocurrencia" name="Mes_de_ocurrencia" placeholder="Sin Mes de ocurrencia" value="<?php echo $row['Mes_de_ocurrencia']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Año_de_ocurrencia" class="col-sm-2 control-label">Año de ocurrencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Año_de_ocurrencia" name="Año_de_ocurrencia" placeholder="Sin Año de ocurrencia" value="<?php echo $row['Año_de_ocurrencia']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="No_Municipios" class="col-sm-2 control-label">No Municipios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_Municipios" name="No_Municipios" placeholder="Sin No Municipios" value="<?php echo $row['No_Municipios']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Status" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Status" name="Status" placeholder="Sin Status" value="<?php echo $row['Status']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Fechas_de_Procedimiento" class="col-sm-2 control-label">Fechas de Procedimiento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fechas_de_Procedimiento" name="Fechas_de_Procedimiento" placeholder="Sin Fechas de Procedimiento" value="<?php echo $row['Fechas_de_Procedimiento']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Status_del_evento" class="col-sm-2 control-label">Status del evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Status_del_evento" name="Status_del_evento" placeholder="Sin Status del evento" value="<?php echo $row['Status_del_evento']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Sesion" class="col-sm-2 control-label">Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Sesion" name="Sesion" placeholder="Sin Sesión" value="<?php echo $row['Sesion']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Año_de_Autorizacion" class="col-sm-2 control-label">Año de Autorización</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Año_de_Autorizacion" name="Año_de_Autorizacion" placeholder="Sin Año de Autorización" value="<?php echo $row['Año_de_Autorizacion']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Sector" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Sector" name="Sector" placeholder="Sin Sector" value="<?php echo $row['Sector']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Competencia" class="col-sm-2 control-label">Competencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Competencia" name="Competencia" placeholder="Sin Competencia" value="<?php echo $row['Competencia']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Num_Sol_API" class="col-sm-2 control-label">Num Sol API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Num_Sol_API" name="Num_Sol_API" placeholder="Sin Num Sol API" value="<?php echo $row['Num_Sol_API']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Monto_Sol_API" class="col-sm-2 control-label">Monto Sol API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Monto_Sol_API" name="Monto_Sol_API" placeholder="Sin Monto Sol API" value="<?php echo $row['Monto_Sol_API']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Autorizacion_API" class="col-sm-2 control-label">Autorización API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Autorizacion_API" name="Autorizacion_API" placeholder="Sin Autorización API" value="<?php echo $row['Autorizacion_API']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="API" class="col-sm-2 control-label">API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="API" name="API" placeholder="Sin API" value="<?php echo $row['API']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Gastos_de_evaluacion" class="col-sm-2 control-label">Gastos de evaluación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Gastos_de_evaluacion" name="Gastos_de_evaluacion" placeholder="Sin Gastos de evaluación" value="<?php echo $row['Gastos_de_evaluacion']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="No_De_Acciones_de_Restauracion" class="col-sm-2 control-label">No De Acciones de Restauración</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_De_Acciones_de_Restauracion" name="No_De_Acciones_de_Restauracion" placeholder="Sin Estado" value="<?php echo $row['No_De_Acciones_de_Restauracion']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Acciones_de_Reconstruccion" class="col-sm-2 control-label">Acciones de Recontrucción</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Acciones_de_Reconstruccion" name="Acciones_de_Reconstruccion" placeholder="Sin Acciones de Recontrucción" value="<?php echo $row['Acciones_de_Reconstruccion']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Mejoras" class="col-sm-2 control-label">Mejoras</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Mejoras" name="Mejoras" placeholder="Sin Mejoras" value="<?php echo $row['Mejoras']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_FONDEN" class="col-sm-2 control-label">Aportación FONDEN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_FONDEN" name="Aportacion_FONDEN" placeholder="Sin Aportación FONDEN" value="<?php echo $row['Aportacion_FONDEN']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Estatal" class="col-sm-2 control-label">Aportación Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Estatal" name="Aportacion_Estatal" placeholder="Sin Aportación Estatal" value="<?php echo $row['Aportacion_Estatal']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Dependencia" class="col-sm-2 control-label">Aportación Dependencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Dependencia" name="Aportacion_Dependencia" placeholder="Sin Aportación Dependencia" value="<?php echo $row['Aportacion_Dependencia']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Fondo_Guerrero" class="col-sm-2 control-label">Fondo Guerrero</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fondo_Guerrero" name="Fondo_Guerrero" placeholder="Sin Fondo Guerrero" value="<?php echo $row['Fondo_Guerrero']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Total" class="col-sm-2 control-label">Aportación Total</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Total" name="Aportacion_Total" placeholder="Sin Aportación Total" value="<?php echo $row['Aportacion_Total']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Gastos_Modificados" class="col-sm-2 control-label">Gastos Modificados</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Gastos_Modificados" name="Gastos_Modificados" placeholder="Sin Gastos Modificados" value="<?php echo $row['Gastos_Modificados']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="APIN_Acta" class="col-sm-2 control-label">APIN Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="APIN_Acta" name="APIN_Acta" placeholder="Sin APIN Acta" value="<?php echo $row['APIN_Acta']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Estatal_Acta" class="col-sm-2 control-label">Estatal Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estatal_Acta" name="Estatal_Acta" placeholder="Sin Estatal Acta" value="<?php echo $row['Estatal_Acta']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Federal_Acta" class="col-sm-2 control-label">Federal Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Federal_Acta" name="Federal_Acta" placeholder="Sin Federal Acta" value="<?php echo $row['Federal_Acta']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Total_Acta" class="col-sm-2 control-label">Total Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Total_Acta" name="Total_Acta" placeholder="Sin Total Acta" value="<?php echo $row['Total_Acta']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Oficio_de_Notificacion_SHCP" class="col-sm-2 control-label">Oficio de Notificación SHCP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_SHCP" name="Oficio_de_Notificacion_SHCP" placeholder="Sin Oficio de Notificación SHCP" value="<?php echo $row['Oficio_de_Notificacion_SHCP']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Oficio_de_Notificacion_Federal" class="col-sm-2 control-label">Oficio de Notificación Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_Federal" name="Oficio_de_Notificacion_Federal" placeholder="Sin Oficio de Notificación Federal" value="<?php echo $row['Oficio_de_Notificacion_Federal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Oficio_de_Notificacion_Estatal" class="col-sm-2 control-label">Oficio de Notificación Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_Estatal" name="Oficio_de_Notificacion_Estatal" placeholder="Sin Oficio de Notificación Estatal" value="<?php echo $row['Oficio_de_Notificacion_Estatal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Constancia_de_Acuerdo" class="col-sm-2 control-label">Constancia de Acuerdo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Constancia_de_Acuerdo" name="Constancia_de_Acuerdo" placeholder="Sin Constancia de Acuerdo" value="<?php echo $row['Constancia_de_Acuerdo']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Fecha_de_Ministracion" class="col-sm-2 control-label">Fecha de Ministración</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_de_Ministracion" name="Fecha_de_Ministracion" placeholder="Sin Fecha de Ministración" value="<?php echo $row['Fecha_de_Ministracion']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="Ministrado" class="col-sm-2 control-label">Ministrado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ministrado" name="Ministrado" placeholder="Sin Ministrado" value="<?php echo $row['Ministrado']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Fecha_limite_para_entrega_de_calendario" class="col-sm-2 control-label">Fecha limite para entrega de calendario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_limite_para_entrega_de_calendario" name="Fecha_limite_para_entrega_de_calendario" placeholder="Sin Fecha limite para entrega de calendario" value="<?php echo $row['Fecha_limite_para_entrega_de_calendario']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Calendario" class="col-sm-2 control-label">Calendario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Calendario" name="Calendario" placeholder="Sin Calendario" value="<?php echo $row['Calendario']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Periodo" class="col-sm-2 control-label">Periodo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Periodo" name="Periodo" placeholder="Sin Periodo" value="<?php echo $row['Periodo']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Acciones_que_ejecuta_el_FONDEN" class="col-sm-2 control-label">Acciones  que ejecuta el FONDEN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Acciones_que_ejecuta_el_FONDEN" name="Acciones_que_ejecuta_el_FONDEN" placeholder="Sin Acciones  que ejecuta el FONDEN" value="<?php echo $row['Acciones_que_ejecuta_el_FONDEN']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Avances_Federales" class="col-sm-2 control-label">Fecha Avances Federales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_Avances_Federales" name="Fecha_Avances_Federales" placeholder="Sin Fecha Avances Federales" value="<?php echo $row['Fecha_Avances_Federales']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Ejecutor_Federal" class="col-sm-2 control-label">Ejecutor Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ejecutor_Federal" name="Ejecutor_Federal" placeholder="Sin Ejecutor Federal" value="<?php echo $row['Ejecutor_Federal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Fisico_Federal" class="col-sm-2 control-label">Avance Fisico Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Fisico_Federal" name="Avance_Fisico_Federal" placeholder="Sin Avance Fisico Federal" value="<?php echo $row['Avance_Fisico_Federal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Financiero_Federal" class="col-sm-2 control-label">Avance Financiero Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Financiero_Federal" name="Avance_Financiero_Federal" placeholder="Sin Avance Financiero Federal" value="<?php echo $row['Avance_Financiero_Federal']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Observaciones_Federales" class="col-sm-2 control-label">Observaciones Federales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_Federales" name="Observaciones_Federales" placeholder="Sin Observaciones Federales" value="<?php echo $row['Observaciones_Federales']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Avance_Estatal" class="col-sm-2 control-label">Fecha Avance Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_Avance_Estatal" name="Fecha_Avance_Estatal" placeholder="Sin Fecha Avance Estatal" value="<?php echo $row['Fecha_Avance_Estatal']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Ejecutor_Estatal" class="col-sm-2 control-label">Ejecutor Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ejecutor_Estatal" name="Ejecutor_Estatal" placeholder="Sin Ejecutor Estatal" value="<?php echo $row['Ejecutor_Estatal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Fisico_Estatal" class="col-sm-2 control-label">Avance Fisico Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Fisico_Estatal" name="Avance_Fisico_Estatal" placeholder="Sin Avance Fisico Estatal" value="<?php echo $row['Avance_Fisico_Estatal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Avances_Financiero_Estatal" class="col-sm-2 control-label">Avances Financiero Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avances_Financiero_Estatal" name="Avances_Financiero_Estatal" placeholder="Sin Avances Financiero Estatal" value="<?php echo $row['Avances_Financiero_Estatal']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Observaciones_Estatales" class="col-sm-2 control-label">Observaciones Estatales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_Estatales" name="Observaciones_Estatales" placeholder="Sin Observaciones Estatales" value="<?php echo $row['Observaciones_Estatales']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Observaciones_generales" class="col-sm-2 control-label">Observaciones generales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_generales" name="Observaciones_generales" placeholder="Sin Observaciones generales" value="<?php echo $row['Observaciones_generales']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Libro_Blanco_Federal" class="col-sm-2 control-label">Libro Blanco Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Libro_Blanco_Federal" name="Libro_Blanco_Federal" placeholder="Sin Libro Blanco Federal" value="<?php echo $row['Libro_Blanco_Federal']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="FechaEntregaLBF" class="col-sm-2 control-label">FechaEntregaLBF</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FechaEntregaLBF" name="FechaEntregaLBF" placeholder="Sin FechaEntregaLBF" value="<?php echo $row['FechaEntregaLBF']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Libro_Blanco_Estatal" class="col-sm-2 control-label">Libro Blanco Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Libro_Blanco_Estatal" name="Libro_Blanco_Estatal" placeholder="Sin Libro Blanco Estatal" value="<?php echo $row['Libro_Blanco_Estatal']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="FechaEntregaLBE" class="col-sm-2 control-label">FechaEntregaLBE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FechaEntregaLBE" name="FechaEntregaLBE" placeholder="Sin FechaEntregaLBE" value="<?php echo $row['FechaEntregaLBE']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="Presenta_a_la_CIGF" class="col-sm-2 control-label">Presenta a la CIGF</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Presenta_a_la_CIGF" name="Presenta_a_la_CIGF" placeholder="Sin Presenta a la CIGF" value="<?php echo $row['Presenta_a_la_CIGF']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Tipo_de_Sesion" class="col-sm-2 control-label">Tipo de Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo_de_Sesion" name="Tipo_de_Sesion" placeholder="Sin Tipo de Sesión" value="<?php echo $row['Tipo_de_Sesion']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="No_Sesion" class="col-sm-2 control-label">No Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_Sesion" name="No_Sesion" placeholder="Sin No Sesión" value="<?php echo $row['No_Sesion']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Carpeta" class="col-sm-2 control-label">Carpeta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Carpeta" name="Carpeta" placeholder="Sin Carpeta" value="<?php echo $row['Carpeta']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="CLAVEEVENTO" class="col-sm-2 control-label">Clave evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="CLAVEEVENTO" name="CLAVEEVENTO" placeholder="Sin Clave evento" value="<?php echo $row['CLAVEEVENTO']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="ObsLBFed" class="col-sm-2 control-label">ObsLBFed</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ObsLBFed" name="ObsLBFed" placeholder="Sin ObsLBFed" value="<?php echo $row['ObsLBFed']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="ObsLBEdo" class="col-sm-2 control-label">ObsLBEdo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ObsLBEdo" name="ObsLBEdo" placeholder="Sin ObsLBEdo" value="<?php echo $row['ObsLBEdo']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Notas" class="col-sm-2 control-label">Notas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Notas" name="Notas" placeholder="Sin Notas" value="<?php echo $row['Notas']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="Municipios" class="col-sm-2 control-label">Municipios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control"   id="Municipios" name="Municipios" placeholder="Sin Municipios" value="<?php echo $row['Municipios']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Recalendarizacion" class="col-sm-2 control-label">Recalendarizacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Recalendarizacion" name="Recalendarizacion" placeholder="Sin Recalendarizacion" value="<?php echo $row['Recalendarizacion']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="Municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Sin Municipio" value="<?php echo $row['Municipio']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Fechas_del_Procedimiento" class="col-sm-2 control-label">Fechas de Procedimiento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fechas_del_Procedimiento" name="Fechas_del_Procedimiento" placeholder="Sin Fechas de Procedimiento" value="<?php echo $row['Fechas_del_Procedimiento']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="DGGRValidacion" class="col-sm-2 control-label">DGGRValidacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGGRValidacion" name="DGGRValidacion" placeholder="Sin DGGRValidacion" value="<?php echo $row['DGGRValidacion']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="DGRRFecha" class="col-sm-2 control-label">DGRRFecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGRRFecha" name="DGRRFecha" placeholder="Sin DGRRFecha" value="<?php echo $row['DGRRFecha']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="DGGRObservaciones" class="col-sm-2 control-label">DGGRObservaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGGRObservaciones" name="DGGRObservaciones" placeholder="Sin DGGRObservaciones" value="<?php echo $row['DGGRObservaciones']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="RegInventario" class="col-sm-2 control-label">RegInventario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegInventario" name="RegInventario" placeholder="Sin RegInventario" value="<?php echo $row['RegInventario']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="RegSerie" class="col-sm-2 control-label">RegSerie</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegSerie" name="RegSerie" placeholder="Sin RegSerie" value="<?php echo $row['RegSerie']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="RegSubserie" class="col-sm-2 control-label">RegSubserie</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegSubserie" name="RegSubserie" placeholder="Sin RegSubserie" value="<?php echo $row['RegSubserie']; ?>">
					</div>
				</div>





				<div class="form-group">
					<label for="RegObservaciones" class="col-sm-2 control-label">RegObservaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegObservaciones" name="RegObservaciones" placeholder="Sin RegObservaciones" value="<?php echo $row['RegObservaciones']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="Tipoaccion" class="col-sm-2 control-label">Tipoaccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipoaccion" name="Tipoaccion" placeholder="Sin Tipoaccion" value="<?php echo $row['Tipoaccion']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="NumInfraestructura" class="col-sm-2 control-label">NumInfraestructura</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NumInfraestructura" name="NumInfraestructura" placeholder="Sin NumInfraestructura" value="<?php echo $row['NumInfraestructura']; ?>">
					</div>
				</div>




				<div class="form-group">
					<label for="PeriodoAnterior" class="col-sm-2 control-label">PeriodoAnterior</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="PeriodoAnterior" name="PeriodoAnterior" placeholder="Sin PeriodoAnterior" value="<?php echo $row['PeriodoAnterior']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="LibroFederal" class="col-sm-2 control-label">LibroFederal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="LibroFederal" name="LibroFederal" placeholder="Sin LibroFederal" value="<?php echo $row['LibroFederal']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="LibroEstado" class="col-sm-2 control-label">LibroEstado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="LibroEstado" name="LibroEstado" placeholder="Sin LibroEstado" value="<?php echo $row['LibroEstado']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="SecretarioTecnico" class="col-sm-2 control-label">SecretarioTecnico</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="SecretarioTecnico" name="SecretarioTecnico" placeholder="Sin SecretarioTecnico" value="<?php echo $row['SecretarioTecnico']; ?>">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
							<a href="javascript:history.go(-1)" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
						
					</div>
				</div>
			</form>
		</div>
	</body>
</html>