
<?php

class ia{ //Definimos la clase ia

  public $tipo="n1";
  public $mapaCol=0;
  public $mapaFil=3;
  public $numNaves=3;

public $navesHumano=[];

public $navesIA=[];

  public function getColumna() 
  {
    return $this->mapaCol;
  }
  public function getFila() 
  {
    return $this->mapaFil;
  }
  public function getNave() 
  {
    return $this->numNaves;
  }
  public function getNaveshumano()
  {
    return $this->navesHumano;
  }
  public function getNavesIA()
  {
  	$this->navesIA[1]["fil"]=2;//DEFINIMOS LA POSICION DE LA NAVE Y LA FILA DONDE DICHA NAVE SE VA A MOVER.
    return $this->navesIA;
  }
  
//AÑADIMOS EL PARAMETRO id
  public function setNaveHumana($id,$tipo,$col,$fil)
  {
    $this->navesHumano[]=["id"=>$id,"tipo"=>$tipo,"col"=>$col,"fil"=>$fil];
  }
  //AÑADIMOS EL PARAMETRO id
  public function setNaveIA($id,$tipo,$col,$fil)
  {
    $this->navesIA[]=["id"=>$id,"tipo"=>$tipo,"col"=>$col,"fil"=>$fil];
  }
  //CAMBIO  RESPECTO AL P3 COL, POR MAPACOL .
    public function setMapaCol($mapaCol)
	{
      if($mapaCol>3 ){
         $this->mapaCol=3;
      }elseif ($mapaCol<0) {
        $this->mapaCol=0;
      }else{
        $this->mapaCol=$mapaCol;
      }
  }
   //CAMBIO  RESPECTO AL P3 COL, POR MAPAFIL .
  public function setMapaFil($mapaFil)
  {
      if($mapaFil>3){
         $this->mapaFil=3;
		}elseif ($mapaFil<0) {
        $this->mapaFil=0;
		}else{
        $this->mapaFil=$mapaFil;
		}
  }

  public function randompos() {
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
  }
}
?>
