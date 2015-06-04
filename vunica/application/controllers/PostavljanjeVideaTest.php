<?php


class PostavljanjeVideaTest extends PostavljanjeVidea {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->adresa_Test();
    }
    
    public function adresa_Test(){
        $this->unit->run($this->adresa("C:\Users\IcySch\Pictures\Bzvz\auto.jpg"), 'http://localhost/vunica/index.php/Slike/auto.jpg', 'Testiranje putanje slike');
        echo $this->unit->report();
        
    }


}
