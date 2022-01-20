<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Enviar con ajax</title>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Base Fonden</title>
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
            <div class="row">
                <h2 style="text-align:center">Base De Datos Fonden</h2>
                <h5 style="text-align:center">Buscar por Estado, Año, responsable, sector, evento, status o constancias de acuerdo:</h5>
            </div>  
            
            <form style="text-align: center;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return getTimeAJAX();">
                <input type="text" id="campo" name="campo"/>
                <input type="submit" value="Buscar" class="btn btn-info">
             </form>
             <br>
             
     <div style="text-align: left;" class="row">
                <a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
        <br>
<script type="text/javascript">
    
    function getTimeAJAX() {
        var campo= document.getElementById('campo').value;
        var dataen= 'campo=' + campo;

         $.ajax({

            type: "POST",
            dataType: 'text',
            url: 'send.php', //indicamos la ruta donde se genera el archivo a actualizar
            data: dataen,
            beforeSend: function(){
            	document.getElementById("respa").style.display="none";
            	document.getElementById("cargando").style.display="block";
            	document.getElementById("cargando").innerHTML= "<img src= 'images/ajax-loader.gif' width = '250' heigth '250'>";
            },
            success: function(resp){
            	document.getElementById("cargando").style.display="none";
            	document.getElementById("respa").style.display="block";
                $("#respa").html(resp);
            }   
    });
         return false;
    }
    setInterval(getTimeAJAX,600000);
</script>

<div align="center" id="cargando" style="display: none;"></div>
<div id="respa"></div>

<!-- Modal Eliminar-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

 <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
                    </div>
                    
                    <div class="modal-body">
                        Si eliminas este registo sera imposible recuperarlo.
                    </div>
                    
                    <div class="modal-footer">
                        <a class="btn btn-danger btn-ok">Continuar</a>
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Esta parte captura el id con referencia al url-->
        <script>
            $('#myModal').on('show.bs.modal', function(e) {
                $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                
                $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
            });
        </script>   
</body>
</html>