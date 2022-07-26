<?php
require_once('conexion.php');

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


//Reiniciar Tabla
if ((isset($_POST["reiniciar"])) && ($_POST["reiniciar"] == "reiniciar")) {
	
  $delete_tabla = sprintf("DELETE FROM tabla");

  mysql_select_db($database_conexion, $conexion);
  $Result_tabla = mysql_query($delete_tabla, $conexion) or die(mysql_error());
	
  $delete_historial = sprintf("DELETE FROM usuarios");
  mysql_select_db($database_conexion, $conexion);
  $Result_historial = mysql_query($delete_historial, $conexion) or die(mysql_error());	
	
	
	$reiniciar = sprintf("INSERT INTO tabla (id, fila, col, ficha, color) VALUES
	(1, '1', 1, 'a11', 'a'),
	(2, '1', 2, 'v12', 'v'),
	(3, '1', 3, 'a13', 'a'),
	(4, '1', 4, 'v14', 'v'),
	(5, '1', 5, 'a15', 'a'),
	(6, '1', 6, 'v16', 'v'),
	(7, '1', 7, 'a17', 'a'),
	(8, '1', 8, 'v18', 'v'),
	(9, '2', 1, 'v21', 'v'),
	(10, '2', 2, 'a22', 'a'),
	(11, '2', 3, 'v23', 'v'),
	(12, '2', 4, 'a24', 'a'),
	(13, '2', 5, 'v25', 'v'),
	(14, '2', 6, 'a26', 'a'),
	(15, '2', 7, 'v27', 'v'),
	(16, '2', 8, 'a28', 'a'),
	(17, '3', 1, 'a31', 'a'),
	(18, '3', 2, 'v32', 'v'),
	(19, '3', 3, 'a33', 'a'),
	(20, '3', 4, 'v34', 'v'),
	(21, '3', 5, 'a35', 'a'),
	(22, '3', 6, 'v36', 'v'),
	(23, '3', 7, 'a37', 'a'),
	(24, '3', 8, 'v38', 'v'),
	(25, '4', 1, 'v41', 'v'),
	(26, '4', 2, 'v42', 'v'),
	(27, '4', 3, 'v43', 'v'),
	(28, '4', 4, 'v44', 'v'),
	(29, '4', 5, 'v45', 'v'),
	(30, '4', 6, 'v46', 'v'),
	(31, '4', 7, 'v47', 'v'),
	(32, '4', 8, 'v48', 'v'),
	(33, '5', 1, 'v51', 'v'),
	(34, '5', 2, 'v52', 'v'),
	(35, '5', 3, 'v53', 'v'),
	(36, '5', 4, 'v54', 'v'),
	(37, '5', 5, 'v55', 'v'),
	(38, '5', 6, 'v56', 'v'),
	(39, '5', 7, 'v57', 'v'),
	(40, '5', 8, 'v58', 'v'),
	(41, '6', 1, 'v61', 'v'),
	(42, '6', 2, 'r62', 'r'),
	(43, '6', 3, 'v63', 'v'),
	(44, '6', 4, 'r64', 'r'),
	(45, '6', 5, 'v65', 'v'),
	(46, '6', 6, 'r66', 'r'),
	(47, '6', 7, 'v67', 'v'),
	(48, '6', 8, 'r68', 'r'),
	(49, '7', 1, 'r71', 'r'),
	(50, '7', 2, 'v72', 'v'),
	(51, '7', 3, 'r73', 'r'),
	(52, '7', 4, 'v74', 'v'),
	(53, '7', 5, 'r75', 'r'),
	(54, '7', 6, 'v76', 'v'),
	(55, '7', 7, 'r77', 'r'),
	(56, '7', 8, 'v78', 'v'),
	(57, '8', 1, 'v81', 'v'),
	(58, '8', 2, 'r82', 'r'),
	(59, '8', 3, 'v83', 'v'),
	(60, '8', 4, 'r84', 'r'),
	(61, '8', 5, 'v85', 'v'),
	(62, '8', 6, 'r86', 'r'),
	(63, '8', 7, 'v87', 'v'),
	(64, '8', 8, 'r88', 'r');");
	
	mysql_select_db($database_conexion, $conexion);
	$Result_reiniciar = mysql_query($reiniciar, $conexion) or die(mysql_error());	
  
}

//Actualizar Cambios
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "actualizar_i")) {
   
					   
  $updateSQL = sprintf("UPDATE tabla SET color=%s WHERE ficha=%s",
					    GetSQLValueString($_POST['color_f'], "text"),
                        GetSQLValueString($_POST['mov_i'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

}


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "actualizar_f")) {
 
  $updateSQL = sprintf("UPDATE tabla SET color=%s WHERE ficha=%s",
					   GetSQLValueString($_POST['color_i'], "text"),
                       GetSQLValueString($_POST['mov_f'], "text"));
   mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

}


//insertar cambios
if ((isset($_POST["insertar"])) && ($_POST["insertar"] == "insertar")) {
  $insert = sprintf("INSERT INTO usuarios (player, mov_i, mov_f) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['i_player_f'], "text"),
					   GetSQLValueString($_POST['i_mov_i'], "text"),
                       GetSQLValueString($_POST['i_mov_f'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insert, $conexion) or die(mysql_error());
}

  
  
$insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
header(sprintf("Location: %s", $insertGoTo));
  


