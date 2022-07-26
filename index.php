<?php 
require_once('conexion.php');

$maxRows_mostrar = 64;
$pageNum_mostrar = 0;
if (isset($_GET['pageNum_mostrar'])) {
  $pageNum_mostrar = $_GET['pageNum_mostrar'];
}
$startRow_mostrar = $pageNum_mostrar * $maxRows_mostrar;

mysql_select_db($database_conexion, $conexion);
$query_mostrar = "SELECT * FROM tabla ";
$query_limit_mostrar = sprintf("%s LIMIT %d, %d", $query_mostrar, $startRow_mostrar, $maxRows_mostrar);
$mostrar = mysql_query($query_limit_mostrar, $conexion) or die(mysql_error());
$row_mostrar = mysql_fetch_assoc($mostrar);

if (isset($_GET['totalRows_mostrar'])) {
  $totalRows_mostrar = $_GET['totalRows_mostrar'];
} else {
  $all_mostrar = mysql_query($query_mostrar);
  $totalRows_mostrar = mysql_num_rows($all_mostrar);
}
$totalPages_mostrar = ceil($totalRows_mostrar/$maxRows_mostrar)-1;



$maxRows_historial = 10;
$pageNum_historial = 0;
if (isset($_GET['pageNum_historial'])) {
  $pageNum_historial = $_GET['pageNum_historial'];
}
$startRow_historial = $pageNum_historial * $maxRows_historial;

mysql_select_db($database_conexion, $conexion);
$query_historial = "SELECT * FROM usuarios ORDER BY id DESC";
$query_limit_historial = sprintf("%s LIMIT %d, %d", $query_historial, $startRow_historial, $maxRows_historial);
$historial = mysql_query($query_limit_historial, $conexion) or die(mysql_error());
$row_historial = mysql_fetch_assoc($historial);

if (isset($_GET['totalRows_historial'])) {
  $totalRows_historial = $_GET['totalRows_historial'];
} else {
  $all_historial = mysql_query($query_historial);
  $totalRows_historial = mysql_num_rows($all_historial);
}
$totalPages_historial = ceil($totalRows_historial/$maxRows_historial)-1;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
<script src="jquery-1.10.2.min.js"></script>
<script src="app.js"></script>
</head>
<body>
<div class="col">
<?php do { 
$col = $row_mostrar['col'];
$fila = $row_mostrar['fila'];
$nombre = $row_mostrar['ficha'];
$color = $row_mostrar['color'];
?>
 
             <!--1-->
            <div class="area" id="<?php echo $col; ?>" data-id="<?php echo $color ?>">
             <?php if($fila == 1){?>
             <?php if (($col % 2) != 0) { ?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 
                 
                       <?php echo $fila.$col; ?>
                       
                    </div>
                <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                     <?php echo $fila.$col; ?>
                 </div>  
            <?php } ?>  
            <?php } ?> 
            
             <!--2-->
             <?php if($fila == 2){?>
             <?php if (($col % 2) == 0) { ?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 

                     <?php echo $fila.$col; ?>
                     
                    </div>
                 <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                     <?php echo $fila.$col; ?>
                 </div>  
            <?php } ?>  
            <?php } ?> 
            
			 <!--3-->
             <?php if($fila == 3){?>
             <?php if (($col % 2) != 0) { ?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 

                     <?php echo $fila.$col; ?>
                     
                    </div>
                 <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">

                     <?php echo $fila.$col; ?>

                 </div>  
            <?php } ?> 
            <?php } ?> 
            
			 <!--4-->
             <?php if($fila == 4){?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 
                 
                         <?php echo $fila.$col; ?>
                         
                    </div>
            <?php } ?> 
            
             <!--5-->
             <?php if($fila == 5){?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 
                 
                         <?php echo $fila.$col; ?>
                         
                    </div>
            <?php } ?> 
            
             <!--6-->
             <?php if($fila == 6){?>
             <?php if (($col % 2) == 0) { ?>
             <?php if (($color =="r")) { ?>
                <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
             <?php }else if (($color =="a")) { ?>
                <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
             <?php  }else { ?>
                <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
             <?php } ?> 
             
                     <?php echo $fila.$col; ?>
                     
                </div>
             <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                     <?php echo $fila.$col; ?>
                 </div>  
            <?php } ?>  
            <?php } ?> 
            
             <!--7-->
             <?php if($fila == 7){?>
             <?php if (($col % 2) != 0) { ?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 

                       <?php echo $fila.$col; ?>

                    </div>
                 <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                     <?php echo $fila.$col; ?>
                 </div>  
            <?php } ?> 
            <?php } ?> 
            
             <!--8-->
             <?php if($fila == 8){?>
             <?php if (($col % 2) == 0) { ?>
				 <?php if (($color =="r")) { ?>
                    <div class="ficha-r" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php }else if (($color =="a")) { ?>
                    <div class="ficha-a" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php  }else { ?>
                    <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                 <?php } ?> 
                 
                     <?php echo $fila.$col; ?>
                     
                    </div>
            <?php }else{ ?>
                 <div class="ficha-v" id="<?php echo $nombre ?>"  data-id="<?php echo $color ?>">
                     <?php echo $fila.$col; ?>
                 </div>
            <?php }?> 
            <?php }?>   
             <!---->
            </div>
<?php } while ($row_mostrar = mysql_fetch_assoc($mostrar)); ?>  
</div>


<div class="col">
<p><strong id="u_turno"></strong><br/> Historial del Juego <hr/></p>
  <?php do { ?>
    <p>Player <strong><?php echo $row_historial['player']; ?></strong> mueve de: <?php echo $row_historial['mov_i']; ?> a: <?php echo $row_historial['mov_f']; ?></p>
    <input id="u_player" type="hidden" name="u_player" value="<?php echo $row_historial['player']; ?>">
  <?php } while ($row_historial = mysql_fetch_assoc($historial)); ?>
 
  <form action="consultas.php" method="post" name="reiniciar" id="reiniciar">
    <input id="reiniciar" type="hidden" name="reiniciar" value="reiniciar">
    <button id="btn_enviar" type="submit">Reiniciar Tabla</button>
  </form>
</div>

<form action="consultas.php" method="post" name="actualizar_i" id="actualizar_i">
<input id="in_player_i" type="text" name="player_i" value="rojo" placeholder="player">
<input id="in_mov_i" type="text" name="mov_i" value="" placeholder="mov_i">
<input id="in_color_f" type="text" name="color_f" value="" placeholder="color_f">
<input id="MM_update" type="hidden" name="MM_update" value="actualizar_i">
<button id="btn_enviar" type="submit">ok</button>
</form>

<form action="consultas.php" method="post" name="actualizar_f" id="actualizar_f">
<input id="in_player_f" type="text" name="in_player_f" value="" placeholder="player">
<input id="in_mov_f" type="text" name="mov_f" value="" placeholder="mov_f">
<input id="in_color_i" type="text" name="color_i" value="" placeholder="color_i">
<input id="MM_update" type="hidden" name="MM_update" value="actualizar_f">
<button id="btn_enviar" type="submit">ok</button>
</form>

<form action="consultas.php" method="post" name="insertar" id="insertar">
<input id="i_player_f" type="text" name="i_player_f" value="" placeholder="player">
<input id="i_mov_i" type="text" name="i_mov_i" value="" placeholder="mov_i">
<input id="i_mov_f" type="text" name="i_mov_f" value="" placeholder="mov_f">
<input id="insertar" type="hidden" name="insertar" value="insertar">
<button id="btn_enviar" type="submit">ok</button>
</form>

<input id="m_mov_a" type="text" name="i_mov_i" value="" placeholder="mov_disponibles">
<input id="m_mov_b" type="text" name="i_mov_f" value="" placeholder="mov_disponibles">

<script src="app.js"></script>
</body>
</html>




















