<?php
include ('../RECEPCION DE AUTO/index.php');
$objeto_registrarAUTO = new index();
$objeto_registrarEDOS = new index();
$objeto_registrarCLIENTE = new index();
$objeto_registrarPERTENENCIAS = new index();
$objeto_registrarAUTO -> mostrar();

$RFC;$NOMBRE;$CORREO;$DOMICILIO;$TELEFONO;$PLACAS;$MARCA;$MODELO;$VERSION;$TIPO;$COLOR;$YEAR;
$VESTIDURAS;$TAPETES;$ESTEREOPANTALLA;$CALEFACCION;$RETROVISOR;$CINTURON;$VENTANILLAS;$TABLEROS;$MANIJAS;$LUZ;$TAPADD;$TAPADI;$TAPATD;$TAPATI;

$BUENAV;$BUENAT;$BUENAEP;$BUENACALEF;$BUENARETRO;$BUENACINT;$BUENAVENT;$BUENATABLERO;
$BUENAMANIJAS;$BUENALUZ;$BUENATDD;$BUENATDI;$BUENATTI;$BUENATTD;

$REGULARV;$REGULART;$REGULAREP;$REGULARCALEF;$REGULARRETRO;$REGULARCINT;$REGULARVENT;
$REGULARTABLERO;$REGULARMANIJAS;$REGULARLUZ;$REGULARTDD;$REGULARTDI;$REGULARTTI;$REGULARTTD;

$MALAV;$MALART;$MALAEP;$MALACALEF;$MALARETRO;$MALACINT;$MALAVENT;$MALATABLERO;$MALAMANIJAS;$MALALUZ;$MALATDD;$MALATDI;$MALATTI;$MALATTD;

$TsiV;$TsiRT;$TsiEP;$TsiCALEF;$TsiRETRO;$TsiCINT;$TsiVENT;$TsiTABLERO;$TsiMANIJAS;$TsiLUZ;$TsiTDD;$TsiTDI;$TsiTTI;$TsiTTD;

$TnoV;$TnoRT;$TnoEP;$TnoCALEF;$TnoRETRO;$TnoCINT;$TnoVENT;$TnoTABLERO;$TnoMANIJAS;$TnoLUZ;$TnoTDD;$TnoTDI;$TnoTTI;$TnoTTD;

$NotaV;$NotaRT;$NotaEP;$NotaCALEF;$NotaRETRO;$NotaCINT;$NotaVENT;$NotaTABLERO;$NotaMANIJAS;$NotaLUZ;$NotaTDD;$NotaTDI;$NotaTTI;$NotaTTD;

$GOLPES;$PINTURA;$COFRE;$CAJUELA;$TGASOLINA;$TECHO;$DEFENSA;$ALARMA;$LIMPIAPARABRISAS;$ASPERSORES;$PARABRISAS;$MEDALLON;$ESPEJOLD;$ESPEJOLI;$FAROSDD;$FAROSDI;$INTERMITENTESDD;$INTERMITENTESDI;$INTERMITENTESTD;$INTERMITENTESTI;$RINESDELANTEROS;$RINESTRASEROS;$TAPONDD;
$TAPONDI;$TAPONTD;$TAPONTI;

$siGOLPES;$siPINTURA;$siCOFRE;$siCAJUELA;$siTGASOLINA;$siTECHO;$siDEFENSA;$siALARMA;$siLIMPIAPARABRISAS;$siASPERSORES;$siPARABRISAS;$siMEDALLON;$siESPEJOLD;$siESPEJOLI;$siFAROSDD;$siFAROSDI;$siINTERMITENTESDD;$siINTERMITENTESDI;$siINTERMITENTESTD;$siINTERMITENTESTI;$siRINESDELANTEROS;$siRINESTRASEROS;$siTAPONDD;$siTAPONDI;$siTAPONTD;
$siTAPONTI;

$noGOLPES;$noPINTURA;$noCOFRE;$noCAJUELA;$noTGASOLINA;$noTECHO;$noDEFENSA;$noALARMA;
$noLIMPIAPARABRISAS;$noASPERSORES;$noPARABRISAS;$noMEDALLON;$noESPEJOLD;$noESPEJOLI;$noFAROSDD;$noFAROSDI;$noINTERMITENTESDD;$noINTERMITENTESDI;$noINTERMITENTESTD;$noINTERMITENTESTI;$noRINESDELANTEROS;$noRINESTRASEROS;$noTAPONDD;$noTAPONDI;$noTAPONTD;$noTAPONTI;

$notaGOLPES;$notaPINTURA;$notaCOFRE;$notaCAJUELA;$notaTGASOLINA;$notaTECHO;$notaDEFENSA;$notaALARMA;$notaLIMPIAPARABRISAS;$notaASPERSORES;$notaPARABRISAS;$notaMEDALLON;
$notaESPEJOLD;$notaESPEJOLI;$notaFAROSDD;$notaFAROSDI;$notaINTERMITENTESDD;$notaINTERMITENTESDI;$notaINTERMITENTESTD;$notaINTERMITENTESTI;$notaRINESDELANTEROS;$notaRINESTRASEROS;$notaTAPONDD;$notaTAPONDI;$notaTAPONTD;$notaTAPONTI;

$GATO;$LLANTAREF;$REFLECTANTES;$CAJAHERRMAIENTAS;$EXTINTOR;$DOCUMENTACION;$CABLES;$MANERAL;$LLAVECRUZ;$BRILO;$DADOS;

$siGATO;$siLLANTAREF;$siREFLECTANTES;$siCAJAHERRMAIENTAS;$siEXTINTOR;$siDOCUMENTACION;$siCABLES;$siMANERAL;$siLLAVECRUZ;$siBRILO;$siDADOS;

$noGATO;$noLLANTAREF;$noREFLECTANTES;$noCAJAHERRMAIENTAS;$noEXTINTOR;$noDOCUMENTACION;$noCABLES;$noMANERAL;$noLLAVECRUZ;$noBRILO;$noDADOS;

$notaGATO;$notaLLANTAREF;$notaREFLECTANTES;$notaCAJAHERRMAIENTAS;$notaEXTINTOR;$notaDOCUMENTACION;$notaCABLES;$notaMANERAL;$notaLLAVECRUZ;
$notaBRILO;$notaDADOS;

$LLANTADD;$LLANTADI;$LLANTATD;$LLANTATI;$REFRACCION;

$nLLANTADD;$nLLANTADI;$nLLANTATD;$nLLANTATI;
$nREFRACCION;

$mvLLANTADD;$mvLLANTADI;$mvLLANTATD;$mvLLANTATI;$mvREFRACCION;

$cvLLANTADD;$cvLLANTADI;$cvLLANTATD;$cvLLANTATI;$cvREFRACCION;

$lisaLLANTADD;
$lisaLLANTADI;
$lisaLLANTATD;
$lisaLLANTATI;
$lisaREFRACCION;


if (isset($_POST['buscar'])){
  include ('../CLASES MODELO/modelo.php');
  $Vnombre=$registrarCLIENTE->get_caja_nombreH();
  $Vtelefono=$objeto_iu11->get_caja_telefono();
  $Vmascota=$objeto_iu11->get_caja_mascotas();
  $Vllegada=$objeto_iu11->get_caja_fechaentrada();
  $Vsalida=$objeto_iu11->get_caja_fechasalida();
  $Vnumero=$objeto_iu11->get_caja_numeroHab();
  echo $Vnombre;
  echo $Vtelefono;
  echo $Vmascota;
  echo $Vllegada;
  echo $Vsalida;
  echo $Vnumero;


	
 $objeto_insertar = new CLASE_MODELO($Vnombre,$Vtelefono,$Vmascota,$Vllegada,$Vsalida,$Vnumero);

 $objeto_insertar->ejecucionI();

}


if (isset($_POST['guardar'])){
 include ('../RECEPCION DE AUTO/CLASE_ESTADOS.php');
 include ('../RECEPCION DE AUTO/CLASE_AUTOMOVIL.php');
   include ('../RECEPCION DE AUTO/CLASE_CLIENTE.php');

  $RFC=$objeto_registrarCLIENTE->get_rfc();
  $NOMBRE=$objeto_registrarCLIENTE->get_nom();
  $CORREO=$objeto_registrarCLIENTE->get_email();
  $DOMICILIO=$objeto_registrarCLIENTE->get_domicilio();
  $TELEFONO=$objeto_registrarCLIENTE->get_tel();

  $PLACAS=$objeto_registrarAUTO  ->get_placas();
  $MARCA=$objeto_registrarAUTO ->get_marca();
  $MODELO=$objeto_registrarAUTO  ->get_modelo();
  $VERSION=$objeto_registrarAUTO ->get_version();
  $TIPO=$objeto_registrarAUTO ->get_tipo();
  $COLOR=$objeto_registrarAUTO ->get_color();
  $YEAR=$objeto_registrarAUTO ->get_year();

  echo $RFC;
  echo $NOMBRE;
  echo $CORREO;
  echo $DOMICILIO;
  echo $TELEFONO;

  $arreglo_descr_llantas = array();
  $arreglo_desc_interna=array();
  $arreglo_desc_externa=array();
  $arreglo_pertenencias=array();
  $arreglo_si_tiene=array();
  $arreglo_no_tiene=array();
  $arreglo_notas_internas=array();
  $arreglo_notas_externas=array();
  $arreglo_notas_pertenencia=array();
  $arreglo_nuevo_edo=array();
  $arreglo_media_edo=array();
  $arreglo_buena=array();
  $arreglo_regular=array();
  $arreglo_mala=array();
  $arreglo_cuarto_vida=array();
  $arreglo_lisa=array();

  $arreglo_descr_llantas = $objeto_registrarEDOS->get_descripcion_llantas();
  $arreglo_desc_interna =  $objeto_registrarEDOS->get_descripcion_interna();
  $arreglo_desc_externa = $objeto_registrarEDOS->get_descripcion_externa();
  $arreglo_pertenencias = $objeto_registrarEDOS->get_descripcion_pertenencias();
  $arreglo_si_tiene = $objeto_registrarEDOS->get_si_tiene();
  $arreglo_no_tiene = $objeto_registrarEDOS->get_no_tiene();
  $arreglo_notas_internas = $objeto_registrarEDOS->get_notas_internas();
  $arreglo_notas_externas = $objeto_registrarEDOS->get_notas_externas();
  $arreglo_notas_pertenencia = $objeto_registrarEDOS->get_notas_pertenencia();
  $arreglo_nuevo_edo = $objeto_registrarEDOS->get_nuevo_estado();
  $arreglo_media_edo = $objeto_registrarEDOS->get_mediavida_estado();
  $arreglo_buena = $objeto_registrarEDOS->get_bueno();
  $arreglo_regular = $objeto_registrarEDOS->get_regular();
  $arreglo_mala = $objeto_registrarEDOS->get_malo();
  $arreglo_cuarto_vida = $objeto_registrarEDOS->get_cuartovida_estado();
  $arreglo_lisa = $objeto_registrarEDOS->get_lisa_estado();

 $objeto_insertarCliente = new CLASE_CLIENTE($RFC,$NOMBRE,$CORREO,$DOMICILIO,$TELEFONO);
 $fk_cliente=$objeto_insertarCliente->INSERTAR();

 $llaves=array();

 $objeto_insertar = new CLASE_ESTADOS($arreglo_desc_interna,$arreglo_desc_externa,$arreglo_pertenencias,$arreglo_si_tiene,$arreglo_no_tiene,$arreglo_notas_internas,$arreglo_notas_externas,$arreglo_descr_llantas,$arreglo_nuevo_edo,$arreglo_media_edo,$arreglo_buena,$arreglo_regular,$arreglo_mala,$arreglo_cuarto_vida,$arreglo_lisa,$arreglo_notas_pertenencia);
 $llaves=$objeto_insertar->INSERTAR($fk_cliente);

    $objeto_insertarAUTO = new CLASE_AUTOMOVIL($PLACAS,$MARCA,$MODELO,$VERSION,$TIPO,$YEAR,$COLOR);
 $objeto_insertarAUTO->INSERTAR($llaves,$fk_cliente);

}


?>