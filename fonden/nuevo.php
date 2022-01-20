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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">


				<div class="form-group">
					<label for="Responsable_del_seguimiento" class="col-sm-2 control-label">Responsable del seguimineto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Responsable_del_seguimiento" name="Responsable_del_seguimiento" placeholder="Sin Responsable del seguimineto">
					</div>
				</div>
				<div class="form-group">
					<label for="Tipo_de_Autorizacion" class="col-sm-2 control-label">Tipo de Autorización</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo_de_Autorizacion" name="Tipo_de_Autorizacion" placeholder="Sin Tipo de Autorización">
					</div>
				</div>

				<div class="form-group">
					<label for="Estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estado" name="Estado" placeholder="Sin Estado" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Evento" class="col-sm-2 control-label">Evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Evento" name="Evento" placeholder="Sin Evento" required>
					</div>
				</div>

				<div class="form-group">
					<label for="Mes_de_ocurrencia" class="col-sm-2 control-label">Mes de ocurrencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Mes_de_ocurrencia" name="Mes_de_ocurrencia" placeholder="Sin Mes de ocurrencia" required>
					</div>
				</div>


				<div class="form-group">
					<label for="Año_de_ocurrencia" class="col-sm-2 control-label">Año de ocurrencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Año_de_ocurrencia" name="Año_de_ocurrencia" placeholder="Sin Año de ocurrencia" required>
					</div>
				</div>



				<div class="form-group">
					<label for="No_Municipios" class="col-sm-2 control-label">No Municipios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_Municipios" name="No_Municipios" placeholder="Sin No Municipios">
					</div>
				</div>



				<div class="form-group">
					<label for="Status" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Status" name="Status" placeholder="Sin Status" required>
					</div>
				</div>



				<div class="form-group">
					<label for="Fechas_de_Procedimiento" class="col-sm-2 control-label">Fechas de Procedimiento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fechas_de_Procedimiento" name="Fechas_de_Procedimiento" placeholder="Sin Fechas de Procedimiento">
					</div>
				</div>



				<div class="form-group">
					<label for="Status_del_evento" class="col-sm-2 control-label">Status del evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Status_del_evento" name="Status_del_evento" placeholder="Sin Status del evento">
					</div>
				</div>

				<div class="form-group">
					<label for="Sesion" class="col-sm-2 control-label">Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Sesion" name="Sesion" placeholder="Sin Sesión">
					</div>
				</div>


				<div class="form-group">
					<label for="Año_de_Autorizacion" class="col-sm-2 control-label">Año de Autorización</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Año_de_Autorizacion" name="Año_de_Autorizacion" placeholder="Sin Año de Autorización">
					</div>
				</div>



				<div class="form-group">
					<label for="Sector" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Sector" name="Sector" placeholder="Sin Sector">
					</div>
				</div>


				<div class="form-group">
					<label for="Competencia" class="col-sm-2 control-label">Competencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Competencia" name="Competencia" placeholder="Sin Competencia">
					</div>
				</div>



				<div class="form-group">
					<label for="Num_Sol_API" class="col-sm-2 control-label">Num Sol API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Num_Sol_API" name="Num_Sol_API" placeholder="Sin Num Sol API">
					</div>
				</div>



				<div class="form-group">
					<label for="Monto_Sol_API" class="col-sm-2 control-label">Monto Sol API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Monto_Sol_API" name="Monto_Sol_API" placeholder="Sin Monto Sol API">
					</div>
				</div>


				<div class="form-group">
					<label for="Autorizacion_API" class="col-sm-2 control-label">Autorización API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Autorizacion_API" name="Autorizacion_API" placeholder="Sin Autorización API">
					</div>
				</div>



				<div class="form-group">
					<label for="API" class="col-sm-2 control-label">API</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="API" name="API" placeholder="Sin API">
					</div>
				</div>



				<div class="form-group">
					<label for="Gastos_de_evaluacion" class="col-sm-2 control-label">Gastos de evaluación</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Gastos_de_evaluacion" name="Gastos_de_evaluacion" placeholder="Sin Gastos de evaluación">
					</div>
				</div>



				<div class="form-group">
					<label for="No_De_Acciones_de_Restauracion" class="col-sm-2 control-label">No De Acciones de Restauración</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_De_Acciones_de_Restauracion" name="No_De_Acciones_de_Restauracion" placeholder="Sin Estado">
					</div>
				</div>


				<div class="form-group">
					<label for="Acciones_de_Reconstruccion" class="col-sm-2 control-label">Acciones de Recontrucción</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Acciones_de_Reconstruccion" name="Acciones_de_Reconstruccion" placeholder="Sin Acciones de Recontrucción">
					</div>
				</div>


				<div class="form-group">
					<label for="Mejoras" class="col-sm-2 control-label">Mejoras</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Mejoras" name="Mejoras" placeholder="Sin Mejoras">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_FONDEN" class="col-sm-2 control-label">Aportación FONDEN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_FONDEN" name="Aportacion_FONDEN" placeholder="Sin Aportación FONDEN">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Estatal" class="col-sm-2 control-label">Aportación Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Estatal" name="Aportacion_Estatal" placeholder="Sin Aportación Estatal">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Dependencia" class="col-sm-2 control-label">Aportación Dependencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Dependencia" name="Aportacion_Dependencia" placeholder="Sin Aportación Dependencia">
					</div>
				</div>


				<div class="form-group">
					<label for="Fondo_Guerrero" class="col-sm-2 control-label">Fondo Guerrero</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fondo_Guerrero" name="Fondo_Guerrero" placeholder="Sin Fondo Guerrero">
					</div>
				</div>


				<div class="form-group">
					<label for="Aportacion_Total" class="col-sm-2 control-label">Aportación Total</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Aportacion_Total" name="Aportacion_Total" placeholder="Sin Aportación Total">
					</div>
				</div>


				<div class="form-group">
					<label for="Gastos_Modificados" class="col-sm-2 control-label">Gastos Modificados</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Gastos_Modificados" name="Gastos_Modificados" placeholder="Sin Gastos Modificados">
					</div>
				</div>



				<div class="form-group">
					<label for="APIN_Acta" class="col-sm-2 control-label">APIN Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="APIN_Acta" name="APIN_Acta" placeholder="Sin APIN Acta">
					</div>
				</div>




				<div class="form-group">
					<label for="Estatal_Acta" class="col-sm-2 control-label">Estatal Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Estatal_Acta" name="Estatal_Acta" placeholder="Sin Estatal Acta">
					</div>
				</div>



				<div class="form-group">
					<label for="Federal_Acta" class="col-sm-2 control-label">Federal Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Federal_Acta" name="Federal_Acta" placeholder="Sin Federal Acta">
					</div>
				</div>


				<div class="form-group">
					<label for="Total_Acta" class="col-sm-2 control-label">Total Acta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Total_Acta" name="Total_Acta" placeholder="Sin Total Acta">
					</div>
				</div>


				<div class="form-group">
					<label for="Oficio_de_Notificacion_SHCP" class="col-sm-2 control-label">Oficio de Notificación SHCP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_SHCP" name="Oficio_de_Notificacion_SHCP" placeholder="Sin Oficio de Notificación SHCP">
					</div>
				</div>




				<div class="form-group">
					<label for="Oficio_de_Notificacion_Federal" class="col-sm-2 control-label">Oficio de Notificación Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_Federal" name="Oficio_de_Notificacion_Federal" placeholder="Sin Oficio de Notificación Federal">
					</div>
				</div>



				<div class="form-group">
					<label for="Oficio_de_Notificacion_Estatal" class="col-sm-2 control-label">Oficio de Notificación Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Oficio_de_Notificacion_Estatal" name="Oficio_de_Notificacion_Estatal" placeholder="Sin Oficio de Notificación Estatal">
					</div>
				</div>



				<div class="form-group">
					<label for="Constancia_de_Acuerdo" class="col-sm-2 control-label">Constancia de Acuerdo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Constancia_de_Acuerdo" name="Constancia_de_Acuerdo" placeholder="Sin Constancia de Acuerdo">
					</div>
				</div>




				<div class="form-group">
					<label for="Fecha_de_Ministracion" class="col-sm-2 control-label">Fecha de Ministración</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_de_Ministracion" name="Fecha_de_Ministracion" placeholder="Sin Fecha de Ministración">
					</div>
				</div>
				<div class="form-group">
					<label for="Ministrado" class="col-sm-2 control-label">Ministrado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ministrado" name="Ministrado" placeholder="Sin Ministrado">
					</div>
				</div>




				<div class="form-group">
					<label for="Fecha_limite_para_entrega_de_calendario" class="col-sm-2 control-label">Fecha limite para entrega de calendario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_limite_para_entrega_de_calendario" name="Fecha_limite_para_entrega_de_calendario" placeholder="Sin Fecha limite para entrega de calendario">
					</div>
				</div>



				<div class="form-group">
					<label for="Calendario" class="col-sm-2 control-label">Calendario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Calendario" name="Calendario" placeholder="Sin Calendario">
					</div>
				</div>



				<div class="form-group">
					<label for="Periodo" class="col-sm-2 control-label">Periodo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Periodo" name="Periodo" placeholder="Sin Periodo">
					</div>
				</div>


				<div class="form-group">
					<label for="Acciones_que_ejecuta_el_FONDEN" class="col-sm-2 control-label">Acciones  que ejecuta el FONDEN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Acciones_que_ejecuta_el_FONDEN" name="Acciones_que_ejecuta_el_FONDEN" placeholder="Sin Acciones  que ejecuta el FONDEN">
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Avances_Federales" class="col-sm-2 control-label">Fecha Avances Federales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_Avances_Federales" name="Fecha_Avances_Federales" placeholder="Sin Fecha Avances Federales">
					</div>
				</div>




				<div class="form-group">
					<label for="Ejecutor_Federal" class="col-sm-2 control-label">Ejecutor Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ejecutor_Federal" name="Ejecutor_Federal" placeholder="Sin Ejecutor Federal">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Fisico_Federal" class="col-sm-2 control-label">Avance Fisico Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Fisico_Federal" name="Avance_Fisico_Federal" placeholder="Sin Avance Fisico Federal">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Financiero_Federal" class="col-sm-2 control-label">Avance Financiero Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Financiero_Federal" name="Avance_Financiero_Federal" placeholder="Sin Avance Financiero Federal">
					</div>
				</div>




				<div class="form-group">
					<label for="Observaciones_Federales" class="col-sm-2 control-label">Observaciones Federales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_Federales" name="Observaciones_Federales" placeholder="Sin Observaciones Federales">
					</div>
				</div>

				<div class="form-group">
					<label for="Fecha_Avance_Estatal" class="col-sm-2 control-label">Fecha Avance Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fecha_Avance_Estatal" name="Fecha_Avance_Estatal" placeholder="Sin Fecha Avance Estatal">
					</div>
				</div>




				<div class="form-group">
					<label for="Ejecutor_Estatal" class="col-sm-2 control-label">Ejecutor Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Ejecutor_Estatal" name="Ejecutor_Estatal" placeholder="Sin Ejecutor Estatal">
					</div>
				</div>



				<div class="form-group">
					<label for="Avance_Fisico_Estatal" class="col-sm-2 control-label">Avance Fisico Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avance_Fisico_Estatal" name="Avance_Fisico_Estatal" placeholder="Sin Avance Fisico Estatal">
					</div>
				</div>



				<div class="form-group">
					<label for="Avances_Financiero_Estatal" class="col-sm-2 control-label">Avances Financiero Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Avances_Financiero_Estatal" name="Avances_Financiero_Estatal" placeholder="Sin Avances Financiero Estatal">
					</div>
				</div>




				<div class="form-group">
					<label for="Observaciones_Estatales" class="col-sm-2 control-label">Observaciones Estatales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_Estatales" name="Observaciones_Estatales" placeholder="Sin Observaciones Estatales">
					</div>
				</div>

				<div class="form-group">
					<label for="Observaciones_generales" class="col-sm-2 control-label">Observaciones generales</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Observaciones_generales" name="Observaciones_generales" placeholder="Sin Observaciones generales">
					</div>
				</div>




				<div class="form-group">
					<label for="Libro_Blanco_Federal" class="col-sm-2 control-label">Libro Blanco Federal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Libro_Blanco_Federal" name="Libro_Blanco_Federal" placeholder="Sin Libro Blanco Federal">
					</div>
				</div>



				<div class="form-group">
					<label for="FechaEntregaLBF" class="col-sm-2 control-label">FechaEntregaLBF</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FechaEntregaLBF" name="FechaEntregaLBF" placeholder="Sin FechaEntregaLBF">
					</div>
				</div>



				<div class="form-group">
					<label for="Libro_Blanco_Estatal" class="col-sm-2 control-label">Libro Blanco Estatal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Libro_Blanco_Estatal" name="Libro_Blanco_Estatal" placeholder="Sin Libro Blanco Estatal">
					</div>
				</div>




				<div class="form-group">
					<label for="FechaEntregaLBE" class="col-sm-2 control-label">FechaEntregaLBE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FechaEntregaLBE" name="FechaEntregaLBE" placeholder="Sin FechaEntregaLBE">
					</div>
				</div>

				<div class="form-group">
					<label for="Presenta_a_la_CIGF" class="col-sm-2 control-label">Presenta a la CIGF</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Presenta_a_la_CIGF" name="Presenta_a_la_CIGF" placeholder="Sin Presenta a la CIGF">
					</div>
				</div>




				<div class="form-group">
					<label for="Tipo_de_Sesion" class="col-sm-2 control-label">Tipo de Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipo_de_Sesion" name="Tipo_de_Sesion" placeholder="Sin Tipo de Sesión">
					</div>
				</div>




				<div class="form-group">
					<label for="No_Sesion" class="col-sm-2 control-label">No Sesión</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="No_Sesion" name="No_Sesion" placeholder="Sin No Sesión">
					</div>
				</div>




				<div class="form-group">
					<label for="Carpeta" class="col-sm-2 control-label">Carpeta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Carpeta" name="Carpeta" placeholder="Sin Carpeta">
					</div>
				</div>




				<div class="form-group">
					<label for="CLAVEEVENTO" class="col-sm-2 control-label">Clave evento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="CLAVEEVENTO" name="CLAVEEVENTO" placeholder="Sin Clave evento">
					</div>
				</div>




				<div class="form-group">
					<label for="ObsLBFed" class="col-sm-2 control-label">ObsLBFed</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ObsLBFed" name="ObsLBFed" placeholder="Sin ObsLBFed">
					</div>
				</div>


				<div class="form-group">
					<label for="ObsLBEdo" class="col-sm-2 control-label">ObsLBEdo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ObsLBEdo" name="ObsLBEdo" placeholder="Sin ObsLBEdo">
					</div>
				</div>




				<div class="form-group">
					<label for="Notas" class="col-sm-2 control-label">Notas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Notas" name="Notas" placeholder="Sin Notas">
					</div>
				</div>



				<div class="form-group">
					<label for="Municipios" class="col-sm-2 control-label">Municipios</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Municipios" name="Municipios" placeholder="Sin Municipios" required>
					</div>
				</div>




				<div class="form-group">
					<label for="Recalendarizacion" class="col-sm-2 control-label">Recalendarizacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Recalendarizacion" name="Recalendarizacion" placeholder="Sin Recalendarizacion">
					</div>
				</div>



				<div class="form-group">
					<label for="Municipio" class="col-sm-2 control-label">Municipio</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Municipio" name="Municipio" placeholder="Sin Municipio">
					</div>
				</div>




				<div class="form-group">
					<label for="Fechas_del_Procedimiento" class="col-sm-2 control-label">Fechas de Procedimiento</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Fechas_del_Procedimiento" name="Fechas_del_Procedimiento" placeholder="Sin Fechas de Procedimiento">
					</div>
				</div>


				<div class="form-group">
					<label for="DGGRValidacion" class="col-sm-2 control-label">DGGRValidacion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGGRValidacion" name="DGGRValidacion" placeholder="Sin DGGRValidacion">
					</div>
				</div>



				<div class="form-group">
					<label for="DGRRFecha" class="col-sm-2 control-label">DGRRFecha</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGRRFecha" name="DGRRFecha" placeholder="Sin DGRRFecha">
					</div>
				</div>



				<div class="form-group">
					<label for="DGGRObservaciones" class="col-sm-2 control-label">DGGRObservaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DGGRObservaciones" name="DGGRObservaciones" placeholder="Sin DGGRObservaciones">
					</div>
				</div>



				<div class="form-group">
					<label for="RegInventario" class="col-sm-2 control-label">RegInventario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegInventario" name="RegInventario" placeholder="Sin RegInventario">
					</div>
				</div>




				<div class="form-group">
					<label for="RegSerie" class="col-sm-2 control-label">RegSerie</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegSerie" name="RegSerie" placeholder="Sin RegSerie">
					</div>
				</div>




				<div class="form-group">
					<label for="RegSubserie" class="col-sm-2 control-label">RegSubserie</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegSubserie" name="RegSubserie" placeholder="Sin RegSubserie">
					</div>
				</div>





				<div class="form-group">
					<label for="RegObservaciones" class="col-sm-2 control-label">RegObservaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="RegObservaciones" name="RegObservaciones" placeholder="Sin RegObservaciones">
					</div>
				</div>




				<div class="form-group">
					<label for="Tipoaccion" class="col-sm-2 control-label">Tipoaccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Tipoaccion" name="Tipoaccion" placeholder="Sin Tipoaccion">
					</div>
				</div>


				<div class="form-group">
					<label for="NumInfraestructura" class="col-sm-2 control-label">NumInfraestructura</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NumInfraestructura" name="NumInfraestructura" placeholder="Sin NumInfraestructura">
					</div>
				</div>


				<div class="form-group">
					<label for="PeriodoAnterior" class="col-sm-2 control-label">PeriodoAnterior</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="PeriodoAnterior" name="PeriodoAnterior" placeholder="Sin PeriodoAnterior">
					</div>
				</div>

				<div class="form-group">
					<label for="LibroFederal" class="col-sm-2 control-label">LibroFederal</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="LibroFederal" name="LibroFederal" placeholder="Sin LibroFederal">
					</div>
				</div>

				<div class="form-group">
					<label for="LibroEstado" class="col-sm-2 control-label">LibroEstado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="LibroEstado" name="LibroEstado" placeholder="Sin LibroEstado">
					</div>
				</div>

				<div class="form-group">
					<label for="SecretarioTecnico" class="col-sm-2 control-label">SecretarioTecnico</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="SecretarioTecnico" name="SecretarioTecnico" placeholder="Sin SecretarioTecnico">
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