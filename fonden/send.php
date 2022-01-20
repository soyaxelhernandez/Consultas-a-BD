<?php
    require 'conexion.php';
    
    $where = "";

    if(!empty($_POST))
    {
        $valor = $_POST['campo'];
        if(!empty($valor)){
            $where = "WHERE Sector LIKE '%$valor'or Evento like '%$valor%' or Estado like '%$valor%' or Constancia_de_Acuerdo like '%$valor%' or Mes_de_ocurrencia like '%$valor' or Año_de_ocurrencia like '$valor' or Responsable_del_seguimiento like '%$valor%' or Status like '%$valor%'";
        }
    }

    $sql = "SELECT * FROM datos $where";
    $resultado = $mysqli->query($sql);
?>
<html lang="es">
	<head> 
        <script>
		$(document).ready( function () {
		var table = $('.AllDataTables').removeAttr('width').DataTable( {
        scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        "lengthMenu": [ 250, 350, 450, 500,],
        columnDefs: [
        	{ width: 250, targets: 4 },
        	{ width: 250, targets: 5 },
            { width: 300, targets: 10 },
        	{ width: 300, targets: 12 },
        	{ width: 400, targets: 66 },
        	{ width: 1500, targets: 67 },
            { width: 1500, targets: 69 },
        ],
        fixedColumns: true			
		} );	
		} );
		</script>	
	</head>
	<body>
		<div class="container">
				<table class="display AllDataTables table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Modificar</th>
							<th>Eliminar</th>
							<th>Responsable&nbsp;del&nbsp;seguimiento</th>
							<th>Tipo&nbsp;de&nbsp;Autorización</th>
							<th>Estado</th>
							<th>Evento</th>
							<th>Mes&nbsp;de&nbsp;ocurrencia</th>
							<th>Año&nbsp;de&nbsp;ocurrencia</th>
							<th>No&nbsp;Municipios</th>
							<th>Status</th>
							<th>Fechas&nbsp;de&nbsp;Procedimiento</th>
							<th>Status&nbsp;del&nbsp;evento</th>
							<th>Sesion</th>
							<th>Año&nbsp;de&nbsp;Autorización</th>
							<th>Sector</th>
							<th>Competencia</th>
							<th>Num&nbsp;Sol&nbsp;API</th>
							<th>Monto&nbsp;Sol&nbsp;API</th>
							<th>Autorización&nbsp;API</th>
							<th>API</th>
							<th>Gastos&nbsp;de&nbsp;evaluación</th>
							<th>No&nbsp;De&nbsp;Acciones&nbsp;de&nbsp;Restauración</th>
							<th>Acciones&nbsp;de&nbsp;Reconstrucción</th>
							<th>Mejoras</th>
							<th>Aportación&nbsp;FONDEN</th>
							<th>Aportación&nbsp;Estatal</th>
							<th>Aportación&nbsp;Dependencia</th>
							<th>Fondo&nbsp;Guerrero</th>
							<th>Aportación&nbsp;Total</th>
							<th>Gastos&nbsp;Modificados</th>
							<th>APIN&nbsp;Acta</th>
							<th>Estatal&nbsp;Acta</th>
							<th>Federal&nbsp;Acta</th>
							<th>Total&nbsp;Acta</th>
							<th>Oficio&nbsp;de&nbsp;Notificación&nbsp;SHCP</th>
							<th>Oficio&nbsp;de&nbsp;Notificación&nbsp;Federal</th>
							<th>Oficio&nbsp;de&nbsp;Notificación&nbsp;Estatal</th>
							<th>Constancia&nbsp;de&nbsp;Acuerdo</th>
							<th>Fecha&nbsp;de&nbsp;Ministración</th>
							<th>Ministrado</th>
							<th>Fecha&nbsp;limite&nbsp;para&nbsp;entrega&nbsp;de&nbsp;calendario</th>
							<th>Calendario</th>
							<th>Periodo</th>
							<th>Acciones&nbsp;que&nbsp;ejecuta&nbsp;el&nbsp;FONDEN</th>
							<th>Fecha&nbsp;Avances&nbsp;Federales</th>
							<th>Ejecutor&nbsp;Federal</th>
							<th>Avance&nbsp;Fisico&nbsp;Federal</th>
							<th>Avance&nbsp;Financiero&nbsp;Federal</th>
							<th>Observaciones&nbsp;Federales</th>
							<th>Fecha&nbsp;Avance&nbsp;Estatal</th>
							<th>Ejecutor&nbsp;Estatal</th>
							<th>Avance&nbsp;Fisico&nbsp;Estatal</th>
							<th>Avances&nbsp;Financiero&nbsp;Estatal</th>
							<th>Observaciones&nbsp;Estatales</th>
							<th>Observaciones&nbsp;generales</th>
							<th>Libro&nbsp;Blanco&nbsp;Federal</th>
							<th>FechaEntregaLBF</th>
							<th>Libro&nbsp;Blanco&nbsp;Estatal</th>
							<th>FechaEntregaLBE</th>
							<th>Presenta&nbsp;a&nbsp;la&nbsp;CIGF</th>
							<th>Tipo&nbsp;de&nbsp;Sesión</th>
							<th>No&nbsp;Sesión</th>
							<th>Carpeta</th>
							<th>CLAVEEVENTO</th>
							<th>ObsLBFed</th>
							<th>ObsLBEdo</th>
							<th>Notas</th>
							<th>Municipios</th>
							<th>Recalendarizacion</th>
							<th>Municipio</th>
							<th>Fechas&nbsp;de&nbsp;Procedimiento</th>
							<th>DGGRValidacion</th> 
							<th>DGRRFecha</th>
							<th>DGGRObservaciones</th>
							<th>RegInventario</th>
							<th>RegSerie</th>
							<th>RegSubserie</th>
							<th>RegObservaciones</th>
							<th>Tipoaccion</th>
							<th>NumInfraestructura</th>
							<th>PeriodoAnterior</th>
							<th>LibroFederal</th>
							<th>LibroEstado</th>
							<th>SecretarioTecnico</th>
						</tr>
					</thead>
						
					<tbody>
								<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {  ?>
						<tr>
							<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="btn btn-success">Modificar</a></span></td>
							<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#myModal"><span class="btn btn-danger">Eliminar</span></a></td>
							<td><?php echo $row['Responsable_del_seguimiento'];?></td>
							<td><?php echo $row['Tipo_de_Autorizacion'];?></td>
							<td><?php echo $row['Estado'];?></td>
							<td><?php echo $row['Evento'];?></td>
							<td><?php echo $row['Mes_de_ocurrencia'];?></td>
							<td><?php echo $row['Año_de_ocurrencia'];?></td>
							<td><?php echo $row['No_Municipios'];?></td>
							<td><?php echo $row['Status'];?></td>
							<td><?php echo $row['Fechas_de_Procedimiento'];?></td>
							<td><?php echo $row['Status_del_evento'];?></td>
							<td><?php echo $row['Sesion'];?></td>
							<td><?php echo $row['Año_de_Autorizacion'];?></td>
							<td><?php echo $row['Sector'];?></td>
							<td><?php echo $row['Competencia'];?></td>
							<td><?php echo $row['Num_Sol_API'];?></td>
							<td><?php echo $row['Monto_Sol_API'];?></td>
							<td><?php echo $row['Autorizacion_API'];?></td>
							<td><?php echo $row['API'];?></td>
							<td><?php echo $row['Gastos_de_evaluacion'];?></td>
							<td><?php echo $row['No_De_Acciones_de_Restauracion'];?></td>
							<td><?php echo $row['Acciones_de_Reconstruccion'];?></td>
							<td><?php echo $row['Mejoras'];?></td>
							<td><?php echo $row['Aportacion_FONDEN'];?></td>
							<td><?php echo $row['Aportacion_Estatal'];?></td>
							<td><?php echo $row['Aportacion_Dependencia'];?></td>
							<td><?php echo $row['Fondo_Guerrero'];?></td>
							<td><?php echo $row['Aportacion_Total'];?></td>
							<td><?php echo $row['Gastos_Modificados'];?></td>
							<td><?php echo $row['APIN_Acta'];?></td>
							<td><?php echo $row['Estatal_Acta'];?></td>
							<td><?php echo $row['Federal_Acta'];?></td>
							<td><?php echo $row['Total_Acta'];?></td>
							<td><?php echo $row['Oficio_de_Notificacion_SHCP'];?></td>
							<td><?php echo $row['Oficio_de_Notificacion_Federal'];?></td>
							<td><?php echo $row['Oficio_de_Notificacion_Estatal'];?></td>
							<td><?php echo $row['Constancia_de_Acuerdo'];?></td>
							<td><?php echo $row['Fecha_de_Ministracion'];?></td>
							<td><?php echo $row['Ministrado'];?></td>
							<td><?php echo $row['Fecha_limite_para_entrega_de_calendario'];?></td>
							<td><?php echo $row['Calendario'];?></td>
							<td><?php echo $row['Periodo'];?></td>
							<td><?php echo $row['Acciones_que_ejecuta_el_FONDEN'];?></td>
							<td><?php echo $row['Fecha_Avances_Federales'];?></td>
							<td><?php echo $row['Ejecutor_Federal'];?></td>
							<td><?php echo $row['Avance_Fisico_Federal'];?></td>
							<td><?php echo $row['Avance_Financiero_Federal'];?></td>
							<td><?php echo $row['Observaciones_Federales'];?></td>
							<td><?php echo $row['Fecha_Avance_Estatal'];?></td>
							<td><?php echo $row['Ejecutor_Estatal'];?></td>
							<td><?php echo $row['Avance_Fisico_Estatal'];?></td>
							<td><?php echo $row['Avances_Financiero_Estatal'];?></td>
							<td><?php echo $row['Observaciones_Estatales'];?></td>
							<td><?php echo $row['Observaciones_generales'];?></td>
							<td><?php echo $row['Libro_Blanco_Federal'];?></td>
							<td><?php echo $row['FechaEntregaLBF'];?></td>
							<td><?php echo $row['Libro_Blanco_Estatal'];?></td>
							<td><?php echo $row['FechaEntregaLBE'];?></td>
							<td><?php echo $row['Presenta_a_la_CIGF'];?></td>
							<td><?php echo $row['Tipo_de_Sesion'];?></td>
							<td><?php echo $row['No_Sesion'];?></td>
							<td><?php echo $row['Carpeta'];?></td>
							<td><?php echo $row['CLAVEEVENTO'];?></td>
							<td><?php echo $row['ObsLBFed'];?></td>
							<td><?php echo $row['ObsLBEdo'];?></td>
							<td><?php echo $row['Notas'];?></td>
							<td><?php echo $row['Municipios'];?></td>
							<td><?php echo $row['Recalendarizacion'];?></td>
							<td><?php echo $row['Municipio'];?></td>
							<td><?php echo $row['Fechas_del_Procedimiento'];?></td>
							<td><?php echo $row['DGGRValidacion'];?></td>
							<td><?php echo $row['DGRRFecha'];?></td>
							<td><?php echo $row['DGGRObservaciones'];?></td>
							<td><?php echo $row['RegInventario'];?></td>
							<td><?php echo $row['RegSerie'];?></td>
							<td><?php echo $row['RegSubserie'];?></td>
							<td><?php echo $row['RegObservaciones'];?></td>
							<td><?php echo $row['Tipoaccion'];?></td>
							<td><?php echo $row['NumInfraestructura'];?></td>
							<td><?php echo $row['PeriodoAnterior'];?></td>
							<td><?php echo $row['LibroFederal'];?></td>	
							<td><?php echo $row['LibroEstado'];?></td>
							<td><?php echo $row['SecretarioTecnico'];?></td>
						</tr>
						<?php } ?>

					</tbody>
				</table>		
			</div>		
		</div>
  </body>
</html>