function format_fecha($fecha){
  $date = new DateTime($fecha);
  return $date->format('d/m/Y');
}
