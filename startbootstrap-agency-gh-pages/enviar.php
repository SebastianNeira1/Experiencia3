<?php
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$directorio = 'C:/wamp/www/Experiencia3/assets/';
$unidades = isset($_POST['unidades']) ? Filtro($_POST['unidades']) : '';
$error = '';

// Mostrar contenido
if($unidades > 2 || $unidades > 3) {
  $error = 'No hay tanto stock';
} 
?>