<?php
class index
{

private $interfaz;
// Atriburos Cliente/Auto

private $rfc; private $nom; private $email; private $domicilio; private $tel; private $placas; private $marca; private $modelo; private $version; private $color; private $tipo; private $year; 

// Atributos cajas de texto Edo. del auto Interno

private $vestiduras; private $tapetes;
private $estereo_pantalla; private $calefaccion; private $retrovisor; private $cinturon; private $ventanillas; private $tablero; private $manijasseguros;
private $luzservicio; private $puertadd; private $puertadi; private $puertatd;
private $puertati; private $Bvest; private $Rvest; private $Mvest; private $Svest;
private $Nvest; private $Notevest; private $Btap; private $Rtap; private $Mtap;
private $Stap; private $Ntap; private $Notetap; private $Bep; private $Rep;
private $Mep; private $Sep; private $Nep; private $Noteep; private $Bcal;
private $Rcal; private $Mcal; private $Scal; private $Ncal; private $Notecal;
private $Bret; private $Rret; private $Mret; private $Sret; private $Nret;
private $Noteret; private $Bcin; private $Rcin; private $Mcin; private $Scin;
private $Ncin; private $Notecin; private $Bven; private $Rven; private $Mven;
private $Sven; private $Nven; private $Noteven; private $Btab; private $Rtab;
private $Mtab; private $Stab; private $Ntab; private $Notetab; private $Bmanseg; private $Rmanseg; private $Mmanseg; private $Smanseg; private $Nmanseg;
private $Notemanseg; private $Bluz; private $Rluz; private $Mluz; private $Sluz;
private $Nluz; private $Noteluz; private $Bpdd; private $Rpdd; private $Mpdd;
private $Spdd; private $Npdd; private $Notepdd; private $Bpdi; private $Rpdi;
private $Mpdi; private $Spdi; private $Npdi; private $Notepdi; private $Bptd;private $Rptd; private $Mptd; private $Sptd; private $Nptd; private $Noteptd;
private $Bpti; private $Rpti; private $Mpti; private $Spti; private $Npti;
private $Notepti;

// Atributos cajas de texto Edo. del auto Externo

private $golpes; private $pintura; private $cofre; private $cajuela; private $tapong; private $techo; private $defensa; private $alarma; private $limpiaparabrisas; private $aspersores; private $parabrisas; private $medallon;
private $espejold; private $espejoli; private $farosdd; private $farosdi; private $indd; private $indi; private $inti; private $intd; private $rinesd; private $rinest; private $tapondd; private $tapondi; private $tapontd; private $taponti;



private $checkboxgolpeS; private $checkboxpinturaS; private $checkboxcofreS;
private $checkboxcajuelaS; private $checkboxtapongS; private $checkboxtechoS;
private $checkboxdefensaS; private $checkboxalarmaS;
private $checkboxlimpiapS; private $checkboxaspersoresS; private $checkboxparabrisasS; private $checkboxmedallonS; private $checkboxespejoldS;
private $checkboxespejoliS; private $checkboxfarosddS; private $checkboxfarosdiS; private $checkboxinddS; private $checkboxindiS; private $checkboxintdS;
private $checkboxintiS; private $checkboxrinesdS; private $checkboxrinestS;
private $checkboxtoponddS; private $checkboxtapondiS; private $checkboxtapontdS;
private $checkboxtapontiS; private $checkboxgolpeN; private $checkboxpinturaN;
private $checkboxcofreN; private $checkboxcajuelaN; private $checkboxtapongN;
private $checkboxtechoN; private $checkboxdefensaN; private $checkboxalarmaN;
private $checkboxlimpiapN; private $checkboxaspersoresN; private $checkboxparabrisasN; private $checkboxmedallonN; private $checkboxespejoldN;
private $checkboxespejoliN; private $checkboxfarosddN; private $checkboxfarosdiN;
private $checkboxinddN; private $checkboxindiN; private $checkboxintdN;
private $checkboxintiN; private $checkboxrinesdN; private $checkboxrinestN;
private $checkboxtoponddN; private $checkboxtapondiN; private $checkboxtapontdN;
private $checkboxtapontiN; 

private $notagolpe; private $notapintura; private $notacofre; private $notacajuela; private $notatapong; private $notatecho; private $notadefensa; private $notaalarma; private $notalimpiap; private $notaaspersores; private $notaparabrisas; private $notamedallon; private $notaespejold; private $notaespejoli; private $notafarosdd; private $notafarosdi; private $notaindd; private $notaindi; private $notainti; private $notaintd; private $notarinesd; private $notarinest; private $notatapondd; private $notatapondi; private $notatapontd; private $notataponti;

// Atributos pertenencias

private $gato; private $llantar; private $reflec; private $cajaH; private $extintor; private $docs; private $cables; private $maneral; private $llaveC; private $birlo; private $dados; private $chbgatoS; private $chbllantarS; private $chbreflecS; private $chbcajaHS; private $chbextintorS; private $chbdocsS; private $chbcablesS; private $chbmaneralS; private $chbllaveCS; private $chbbirloS; private $chbdadosS; private $chbgatoN; private $chbllantarN; private $chbreflecN; private $chbcajaHN; private $chbextintorN; private $chbdocsN; private $chbcablesN; private $chbmaneralN; private $chbllaveCN; private $chbbirloN; private $chbdadosN; private $notagato; private $notallantar; private $notareflec; private $notacajaH; private $notaextintor; private $notadocs; private $notacables; private $notamaneral; private $notallaveC; private $notabirlo; private $notadados;  

// Atributos Edo. Llantas

private $dd; private $di; private $td; private $ti; private $refraccion; private $ddN; private $diN; private $tdN; private $tiN; private $refraccionN; private $dd12; private $di12; private $td12; private $ti12; private $refraccion12; private $dd14; private $di14; private $td14; private $ti14; private $refraccion14; private $ddlisa; private $dilisa; private $tdlisa; private $tilisa; private $refraccionlisa;

  	
  public function mostrar()
  {
     $this->interfaz=file_get_contents('../RECEPCION DE AUTO/index.html');
	 echo $this->interfaz;
  }

 public function get_descripcion_interna(){
$arreglo_desc_interna = [$_POST['vestiduras'],$_POST['tapetes'],$_POST['estereo_pantalla'],$_POST['calefaccion'],$_POST['retrovisor'],$_POST['cinturon'],$_POST['ventanillas'],$_POST['tablero'],$_POST['manijasseguros'],$_POST['luzservicio'],$_POST['puertadd'],$_POST['puertadi'],$_POST['puertatd'],$_POST['puertati']];
    return $arreglo_desc_interna;
  } 

  public function get_descripcion_externa(){
 
$arreglo_desc_externa = [$_POST['golpes'],$_POST['pintura'],$_POST['cofre'],$_POST['cajuela'],$_POST['tapong'],$_POST['techo'],$_POST['defensa'],$_POST['alarma'],$_POST['limpiaparabrisas'],$_POST['aspersores'],$_POST['parabrisas'],$_POST['medallon'],$_POST['espejold'],$_POST['espejoli'],$_POST['farosdd'],$_POST['farosdi'],$_POST['indd'],$_POST['indi'],$_POST['inti'],$_POST['intd'],$_POST['rinesd'],$_POST['rinest'],$_POST['tapondd'],$_POST['tapondi'],$_POST['tapontd'],$_POST['taponti']];
    return $arreglo_desc_externa;
  }  

public function get_descripcion_pertenencias(){

$arreglo_desc_pertenencias = [$_POST['gato'],$_POST['llantar'],$_POST['reflec'],$_POST['cajaH'],$_POST['extintor'],$_POST['docs'],$_POST['cables'],$_POST['maneral'],$_POST['llaveC'],$_POST['birlo'],$_POST['dados']];
return $arreglo_desc_pertenencias;
  }    

  public function get_descripcion_llantas(){
    $arreglo_llantas = [$_POST['dd'],$_POST['di'],$_POST['td'],$_POST['ti'],$_POST['refraccion']];
    return $arreglo_llantas;
  }

    public function get_nuevo_estado(){
    $arreglo_nuevo_edo = [$_POST['ddN'],$_POST['diN'],$_POST['tdN'],$_POST['tiN'],$_POST['refraccionN']];
    return $arreglo_nuevo_edo;
  }

    public function get_mediavida_estado(){
    $arreglo_media_vida = [$_POST['dd12'],$_POST['di12'],$_POST['td12'],$_POST['tiN'],$_POST['refraccion12']];
    return $arreglo_media_vida;
  }

    public function get_cuartovida_estado(){
    $arreglo_cuarto_vida = [$_POST['dd14'],$_POST['di14'],$_POST['td14'],$_POST['tiN'],$_POST['refraccion14']];
    return $arreglo_cuarto_vida;
  }

    public function get_lisa_estado(){
    $arreglo_lisa_vida = [$_POST['ddlisa'],$_POST['dilisa'],$_POST['tdlisa'],$_POST['tilisa'],$_POST['refraccionlisa']];
    return $arreglo_lisa_vida;
  }

    public function get_bueno(){
    $arreglo_bueno = [$_POST['Bvest'],$_POST['Btap'],$_POST['Bep'],$_POST['Bcal'],$_POST['Bret'],$_POST['Bcin'],$_POST['Bven'],$_POST['Btab'],$_POST['Bmanseg'],$_POST['Bluz'],$_POST['Bpdd'],$_POST['Bpdi'],$_POST['Bptd'],$_POST['Bpti']];
    return $arreglo_bueno;
  }

    public function get_regular(){
    $arreglo_regular = [$_POST['Rvest'],$_POST['Rtap'],$_POST['Rep'],$_POST['Rcal'],$_POST['Rret'],$_POST['Rcin'],$_POST['Rven'],$_POST['Rtab'],$_POST['Rmanseg'],$_POST['Rluz'],$_POST['Rpdd'],$_POST['Rpdi'],$_POST['Rptd'],$_POST['Rpti']];
    return $arreglo_regular;
  }

    public function get_malo(){
    $arreglo_malo = [$_POST['Mvest'],$_POST['Mtap'],$_POST['Mep'],$_POST['Mcal'],$_POST['Mret'],$_POST['Mcin'],$_POST['Mven'],$_POST['Mtab'],$_POST['Mmanseg'],$_POST['Mluz'],$_POST['Mpdd'],$_POST['Mpdi'],$_POST['Mptd'],$_POST['Mpti']];
    return $arreglo_malo;
  }

  public function get_si_tiene(){
 
$arreglo_si_tiene = [$_POST['Svest'],$_POST['Stap'],$_POST['Sep'],$_POST['Scal'],$_POST['Sret'],$_POST['Scin'],$_POST['Sven'],$_POST['Stab'],$_POST['Smanseg'],$_POST['Sluz'],$_POST['Spdd'],$_POST['Spdi'],$_POST['Sptd'],$_POST['Spti'],$_POST['checkboxgolpeS'],$_POST['checkboxpinturaS'],$_POST['checkboxcofreS'],$_POST['checkboxcajuelaS'],$_POST['checkboxtapongS'],$_POST['checkboxtechoS'],$_POST['checkboxdefensaS'],$_POST['checkboxalarmaS'],$_POST['checkboxlimpiapS'],$_POST['checkboxaspersoresS'],$_POST['checkboxparabrisasS'],$_POST['checkboxmedallonS'],$_POST['checkboxespejoldS'],$_POST['checkboxespejoliS'],$_POST['checkboxfarosddS'],$_POST['checkboxfarosdiS'],$_POST['checkboxinddS'],$_POST['checkboxindiS'],$_POST['checkboxintdS'],$_POST['checkboxintiS'],$_POST['checkboxrinesdS'],$_POST['checkboxrinestS'],$_POST['checkboxtaponddS'],$_POST['checkboxtapondiS'],$_POST['checkboxtapontdS'],$_POST['checkboxtapontiS'],$_POST['chbgatoS'],$_POST['chbllantarS'],$_POST['chbreflecS'],$_POST['chbcajaHS'],$_POST['chbextintorS'],$_POST['chbdocsS'],$_POST['chbcablesS'],$_POST['chbmaneralS'],$_POST['chbllaveCS'],$_POST['chbbirloS'],$_POST['chbdadosS']];
    return $arreglo_si_tiene;
  }  

public function get_no_tiene(){

$arreglo_no_tiene = [$_POST['Nvest'],$_POST['Ntap'],$_POST['Nep'],$_POST['Ncal'],$_POST['Nret'],$_POST['Ncin'],$_POST['Nven'],$_POST['Ntab'],$_POST['Nmanseg'],$_POST['Nluz'],$_POST['Npdd'],$_POST['Npdi'],$_POST['Nptd'],$_POST['Npti'],$_POST['checkboxgolpeN'],$_POST['checkboxpinturaN'],$_POST['checkboxcofreN'],$_POST['checkboxcajuelaN'],$_POST['checkboxtapongN'],$_POST['checkboxtechoN'],$_POST['checkboxdefensaN'],$_POST['checkboxalarmaN'],$_POST['checkboxlimpiapN'],$_POST['checkboxaspersoresN'],$_POST['checkboxparabrisasN'],$_POST['checkboxmedallonN'],$_POST['checkboxespejoldN'],$_POST['checkboxespejoliN'],$_POST['checkboxfarosddN'],$_POST['checkboxfarosdiN'],$_POST['checkboxinddN'],$_POST['checkboxindiN'],$_POST['checkboxintdN'],$_POST['checkboxintiN'],$_POST['checkboxrinesdN'],$_POST['checkboxrinestN'],$_POST['checkboxtaponddN'],$_POST['checkboxtapondiN'],$_POST['checkboxtapontdN'],$_POST['checkboxtapontiN'],$_POST['chbgatoN'],$_POST['chbllantarN'],$_POST['chbreflecN'],$_POST['chbcajaHN'],$_POST['chbextintorN'],$_POST['chbdocsN'],$_POST['chbcablesN'],$_POST['chbmaneralN'],$_POST['chbllaveCN'],$_POST['chbbirloN'],$_POST['chbdadosN']];
    return $arreglo_no_tiene;
  } 

 public function get_notas_internas(){
 
$arreglo_notas_internas = [$_POST['Notevest'],$_POST['Notetap'],$_POST['Noteep'],$_POST['Notecal'],$_POST['Noteret'],$_POST['Notecin'],$_POST['Noteven'],$_POST['Notetab'],$_POST['Notemanseg'],$_POST['Noteluz'],$_POST['Notepdd'],$_POST['Notepdi'],$_POST['Noteptd'],$_POST['Notepti']];
    return $arreglo_notas_internas;
  }  

   public function get_notas_externas(){
    $arreglo_notas_ext = [$_POST['notagolpe'],$_POST['notapintura'],$_POST['notacofre'],$_POST['notacajuela'],$_POST['notatapong'],$_POST['notatecho'],$_POST['notadefensa'],$_POST['notaalarma'],$_POST['notalimpiap'],$_POST['notaaspersores'],$_POST['notaparabrisas'],$_POST['notamedallon'],$_POST['notaespejold'],$_POST['notaespejoli'],$_POST['notafarosdd'],$_POST['notafarosdi'],$_POST['notaindd'],$_POST['notaindi'],$_POST['notaintd'],$_POST['notainti'],$_POST['notarinesd'],$_POST['notarinest'],$_POST['notatapondd'],$_POST['notatapondi'],$_POST['notatapontd'],$_POST['notataponti']];
    return $arreglo_notas_ext;
  }

   public function get_notas_pertenencia(){
    $arreglo_pert = [$_POST['notagato'],$_POST['notallantar'],$_POST['notareflec'],$_POST['notacajaH'],$_POST['notaextintor'],$_POST['notadocs'],$_POST['notacables'],$_POST['notamaneral'],$_POST['notallaveC'],$_POST['notabirlo'],$_POST['notadados']];
    return $arreglo_pert;
  }
  
  public function set_rfc($x)
  {
	  $this->rfc=$x;
  }
  public function set_nom($x)
  {
	  $this->nom=$x;
  }
  public function set_email($x)
  {
	  $this->email=$x;
  }
  public function set_domicilio($x)
  {
	  $this->domicilio=$x;
  }
  public function set_tel($x)
  {
	  $this->tel=$x;
  }
  public function set_placas($x)
  {
	  $this->placas=$x;
  }
  public function set_marca($x)
  {
    $this->marca=$x;
  }
  public function set_modelo($x)
  {
    $this->modelo=$x;
  }
  public function set_version($x)
  {
    $this->version=$x;
  }
  public function set_color($x)
  {
    $this->color=$x;
  }
  public function set_tipo($x)
  {
    $this->tipo=$x;
  }
  public function set_year($x)
  {
    $this->year=$x;
  }

  public function get_rfc()
  {
	 $this->rfc=$_POST['rfc'];
	 return $this->rfc;
  }

  public function get_nom()
  {
	 $this->nom=$_POST['nom'];
	 return $this->nom;
  }

  public function get_email()
  {
	 $this->email=$_POST['email'];
	 return $this->email;
  }

  public function get_domicilio()
  {
	 $this->domicilio=$_POST['domicilio'];
	 return $this->domicilio;
  }

  public function get_tel()
  {
	 $this->tel=$_POST['tel'];
	 return $this->tel;
  }
  
  public function get_placas()
  {
	 $this->placas=$_POST['placas'];
	 return $this->placas;
  }

  public function get_marca()
  {
   $this->marca=$_POST['marca'];
   return $this->marca;
  }

  public function get_modelo()
  {
   $this->modelo=$_POST['modelo'];
   return $this->modelo;
  }

  public function get_version()
  {
   $this->version=$_POST['version'];
   return $this->version;
  }

  public function get_color()
  {
   $this->color=$_POST['color'];
   return $this->color;
  }

  public function get_tipo()
  {
   $this->tipo=$_POST['tipo'];
   return $this->tipo;
  }
  
  public function get_year()
  {
   $this->year=$_POST['year'];
   return $this->year;
  }

}
?>