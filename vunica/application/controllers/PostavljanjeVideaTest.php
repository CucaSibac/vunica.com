<?php


class PostavljanjeVideaTest extends PostavljanjeVidea {
    
    public function adresa_Test(){
        $this->unit->run($this->adresa("C:\Users\IcySch\Pictures\Bzvz\auto.jpg"), 'http://localhost/vunica/index.php/Slike/auto.jpg', 'Testiranje putanje slike');
        echo $this->unit->report();
        
    }


}
