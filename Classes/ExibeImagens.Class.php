<?php

require './Classes/Select.Class.php';

class ExibeImagens extends Select{
    private $idAlbum;

    function getIdAlbum(){
        return $this->idAlbum;
    }

    function setIdAlbum($idAlbum){
        $this->idAlbum = $idAlbum;
    }

    public function ExecutarImagens($idAlbum){
        $this->MontaImagens(); 

    }

    private function MontaImagens(){
        $this->ExecutaSelect($this->setQuery("SELECT * FROM imagens WHERE id_album='".$this->getIdAlbum()."'"));
        echo '<div id="alinha-album">';
        foreach($this->getResultado() as $imagens){
            echo '<div class="colunas2">
            <img class="img" src="'.$imagens['imagem'].'"/>
    </div>';
        }
        echo "</div>";
    }
}
