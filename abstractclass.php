
<?php

// las clases abstractas son clases base
// que no pueden ser instansiadas pero
// son las clases base para ser heredadas por otras clases
abstract class Media {
  private $title;
  function setTitle($title) {
      $this->title = $title;
  }
}
function setDescription($description) {}

  
  class Newspaper extends Media {
    function setDescription($description) {}
    
    function setDescribers($describers) {}
} 

/* 
  Modelo con objetos relacionados usar clase abstracta
  Funcionalidad con objetos sin relacion sar interfaces
  No puedes implementar comportamiento en las interfaces


*/
?>