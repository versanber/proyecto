<?php
class CLASE_ESTADOS
{
//Seccion de atributos

private $DESC_INT=array();
private $DESC_EXT=array();
private $DESC_PERTENENCIAS=array();
private $SI_TIENE=array();
private $NO_TIENE=array();
private $NOTAS_INT=array();
private $NOTAS_EXT=array();
private $NOTAS_PERT=array();
private $DESC_LLANTAS=array();
private $NUEVO_EDO=array();
private $MEDIA_EDO=array();
private $BUENA=array();
private $REGULAR=array();
private $MALA=array();
private $CUARTOVIDA=array();
private $LISA=array();

//seccion de metodos  

public function __construct($a=array(),$b=array(),$c=array(),$d=array(),$e=array(),$f=array(),$g=array(),$h=array(),$i=array(),$j=array(),$k=array(),$l=array(),$m=array(),$n=array(),$o=array(),$p=array(), $q=array()) {
    
$this -> DESC_INT=$a;
$this -> DESC_EXT=$b;
$this -> DESC_PERTENENCIAS=$c;
$this -> SI_TIENE=$d;
$this -> NO_TIENE=$e;
$this -> NOTAS_INT=$f;
$this -> NOTAS_EXT=$g;
$this -> NOTAS_PERT=$q;
$this -> DESC_LLANTAS=$h;
$this -> NUEVO_EDO=$i;
$this -> MEDIA_EDO=$j;
$this -> BUENA=$l;
$this -> REGULAR=$m;
$this -> MALA=$n;
$this -> CUARTOVIDA=$o;
$this -> LISA=$p;
    }
public function set_desc_int($a=array()){
$this->DESC_INT = $a;
}
public function set_desc_ext($b=array()){
$this->DESC_EXT = $b;
}
public function set_pertenencia($a=array()){
$this->DESC_PERTENCIAS = $a;
}
public function set_si_tiene($b=array()){
$this->SI_TIENE = $b;
}
public function set_no_tiene($a=array()){
$this->NO_TIENE = $a;
}
public function set_notas_int($b=array()){
$this->NOTAS_INT = $b;
}
public function set_notas_ext($a=array()){
$this->NOTAS_EXT = $a;
}
public function set_notas_pert($a=array()){
$this->NOTAS_PERT = $a;
}
public function set_desc_llantas($b=array()){
$this->DESC_LLANTAS = $b;
}
public function set_nuevo_edo($a=array()){
$this->NUEVO_EDO = $a;
}
public function set_media_edo($b=array()){
$this->MEDIA_EDO = $b;
}

public function set_buena($b=array()){
$this->BUENA = $b;
}
public function set_regular($a=array()){
$this->REGULAR = $a;
}
public function set_mala($b=array()){
$this->MALA = $b;
}
public function set_cuartovida($a=array()){
$this->CUARTOVIDA = $a;
}
public function set_desc_lisa($b=array()){
$this->LISA = $b;
}


public function get_desc_int(){
return $this->DESC_INT;
}
public function get_desc_ext(){
return $this->DESC_EXT;
}
public function get_pertenencia(){
return $this->INTERMITENTES;
}
public function get_si_tiene(){
return $this->SI_TIENE;
}
public function get_no_tiene(){
return $this->NO_TIENE;
}
public function get_notas_int(){
return $this->NOTAS_INT;
}
public function get_notas_ext(){
return $this->NOTAS_EXT;
}
public function get_notas_pert(){
return $this->NOTAS_PERT;
}
public function get_desc_llantas(){
$this->DESC_LLANTAS;
}
public function get_nuevo_edo(){
return $this->NUEVO_EDO;
}
public function get_media_edo(){
return $this->MEDIA_EDO;
}
public function get_buena(){
return $this->BUENA;
}
public function get_regular(){
return $this->REGULAR ;
}
public function get_mala(){
return $this->MALA ;
}
public function get_cuartovida(){
return $this->CUARTOVIDA ;
}
public function get_desc_lisa(){
$this->LISA;
}

public function INSERTAR($fk_cliente) {

    var_dump($this->MALA);
 

$bd= mysqli_connect("127.0.0.1","root","","taller_mecanico");
  
//Insersión de Edo. Interior
$insertar = "INSERT INTO estado_interior(descripcion_interior,buena,mala,regular,tiene_si,tiene_no,notas) VALUES (?,?,?,?,?,?,?)";
$stmt=mysqli_prepare($bd,$insertar);


for ($i=0;$i<count($this->DESC_INT);++$i){


mysqli_stmt_bind_param($stmt, "sssssss", $this->DESC_INT[$i], $this->BUENA[$i], $this->MALA[$i],$this->REGULAR[$i], $this->SI_TIENE[$i], $this->NO_TIENE[$i], $this->NOTAS_INT[$i]);
mysqli_stmt_execute($stmt);



if (mysqli_stmt_errno($stmt)) {
    echo "Error al Agregar un nuevo Producto";

}else{
    echo "\n EDO. INTERIOR AGREGADO";

}

}
$fk_estado_inter=mysqli_insert_id($bd);
mysqli_stmt_close($stmt);


//Insersión de Edo. Exterior

$insertar = "INSERT INTO estado_exterior(descripcion_exterior,si,no,notas) VALUES (?,?,?,?)";
$stmt=mysqli_prepare($bd,$insertar);


for ($i=0;$i<count($this->DESC_EXT);++$i){

mysqli_stmt_bind_param($stmt, "ssss", $this->DESC_EXT[$i], $this->SI_TIENE[$i], $this->NO_TIENE[$i],$this->NOTAS_EXT[$i]);
mysqli_stmt_execute($stmt);


if (mysqli_stmt_errno($stmt)) {
    echo "Error al Agregar un nuevo Producto";

}else{
    echo "\n EDO. EXTERIOR AGREGADO";

}

}
$fk_estado_ext=mysqli_insert_id($bd);
mysqli_stmt_close($stmt);


//Insersión de llantas

$insertar = "INSERT INTO llanta(descripcion_llanta,nueva,media_vida,cuarto_vida,lisa) VALUES (?,?,?,?,?)";
$stmt=mysqli_prepare($bd,$insertar);


for ($i=0;$i<count($this->DESC_LLANTAS);++$i){


mysqli_stmt_bind_param($stmt, "sssss", $this->DESC_LLANTAS[$i], $this->NUEVO_EDO[$i], $this->MEDIA_EDO[$i],$this->CUARTOVIDA[$i], $this->LISA[$i]);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_errno($stmt)) {
    echo "Error al Agregar un nuevo Producto";

}else{
    echo "\n EDO. LLANTAS AGREGADO";

}

}
$fk_estado_llanta=mysqli_insert_id($bd);
mysqli_stmt_close($stmt);

//Insersión de pertenencias

$insertar = "INSERT INTO pertenencia(descripcion_pert,si,no,notas,fk_cliente) VALUES (?,?,?,?,?)";
$stmt=mysqli_prepare($bd,$insertar);



for ($i=0;$i<count($this->DESC_PERTENENCIAS);++$i){

mysqli_stmt_bind_param($stmt, "sssss", $this->DESC_PERTENENCIAS[$i], $this->SI_TIENE[$i], $this->NO_TIENE[$i],$this->NOTAS_PERT[$i], $this->FK_CLIENTE[$i]);
mysqli_stmt_execute($stmt);


if (mysqli_stmt_errno($stmt)) {
    echo "Error al Agregar un nuevo Producto";

}else{
    echo "\n EDO. PERTENENCIAS AGREGADO";

}

}
$fk_estado_inter=mysqli_insert_id($bd);
mysqli_stmt_close($stmt);


mysqli_close($bd);
$llaves=[fk_estado_inter,fk_estado_ext,fk_estado_llanta,fk_pertenencias];
return $llaves;

}

}


?>