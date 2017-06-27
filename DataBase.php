<?php

class DataBase {
    
    
    
    
    
 public function stock() {
        $data = serialize($this);
        $newFile = fopen("user/" . $this->pseudo . ".txt", "w");
        fwrite($newFile, $data);
        fclose($newFile);
    }
}
