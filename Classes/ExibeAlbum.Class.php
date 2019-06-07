<!-- retorna tudo que vem do selet -->
<?php
require './Classes/Select.Class.php';

class ExibeAlbum extends Select{

    public function ExecutaAlbum(){
        $this->MontaAlbum();
    }

    private function MontaAlbum(){
        $this->ExecutaSelect($this->setQuery("SELECT * FROM album"));
        echo '<div id="alinha-album">';
        foreach($this->getResultado() as $albuns){
                echo '<div class="colunas2">
                <a href="albuns.php?idAlbum='.$albuns['id_Album'].'"><img src="'.$albuns['capa'].'"/></a>
                </div>';
            
        }
        echo '</div>';
    }

}

