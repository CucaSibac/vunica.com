<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>Početna</title>     
    
   <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />
    
   <style>
   <?php include '/../CSS/Proba.css';?>
   </style>
   
  <style media="screen and (max-device-width: 1400px)">
  <?php include '/../CSS/Template (1366x768).css'; ?>
  <?php include '/../CSS/Pocetna (1366x768).css'; ?>
  <?php include '/../CSS/Pop up (1366x768).css'; ?>
  <?php include '/../CSS/Tekst (1366x768).css'; ?>
  <?php include '/../CSS/Dugme (1366x768).css'; ?>
  <?php include '/../CSS/Paragraf (1366x768).css'; ?>
  </style>
  <style media="screen and (min-device-width: 1401px)">
    <?php include '/../CSS/Template (1920x1080).css'; ?>
    <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
    <?php include '/../CSS/Pop up (1920x1080).css'; ?>
    <?php include '/../CSS/Tekst (1920x1080).css'; ?>
    <?php include '/../CSS/Dugme (1920x1080).css'; ?>
    <?php include '/../CSS/Pocetna (1920x1080).css'; ?>
  </style>
  <script>
    <?php include('/../JavaScript/PopUp.js');?>
    <?php include('/../JavaScript/Footer.js');?>
  </script>
   
   <script src="http://www.google.com/jsapi"></script>
   <script type="text/javascript"> google.load("jquery", "1.3.2"); </script>
   
  <!-- InstanceEndEditable -->
  
  <!-- InstanceBeginEditable name="Head" -->   
    
  <!-- InstanceEndEditable -->
</head>

<body onLoad="izracunaj();" onresize="izracunaj();" id="body">

     <?php
        include("Header.php");
        include("Obavestenje.php");
        include("Prijava.php");
        include("Registracija.php");
        include("Zaboravljena lozinka.php");
        include("Footer.php");
        include("Upozorenje.php");
        include("brisanjesesije.php");
    ?>
  
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
            <!-- InstanceBeginEditable name="Body" -->
              <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
            <!-- Odredjuje status korisnika -->
              <?php
                $status = 0;
                if(strcmp($this->session->Status, 'Admin') == 0){
                    $status = 1;
                } 
                else{
                    if(strcmp($this->session->Status, 'Pletilja') == 0){
                        $status = 2;
                    } 
                    else{
                        if(strcmp($this->session->Status, 'Klupko') == 0){
                            $status = 3;
                        } 
                    }
                } 
              ?>        
                
              <?php
              // Ucitava odgovarajuci deo strane prema statusu ulogovane osobe
                if($status == 1){
                    include("AdminPocetna.php");  
                }
                else{
                    if($status == 2 || $status == 3){
                        include("KorisnikPocetna.php"); 
                    }  
                    else{
                        include("GostPocetna.php");
                    } 
                }
              ?>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
    
    <?php 
    if($this->session->flashdata('reg') == 1){
        echo "<script language=\"javascript\">prikazi_registraciju();</script>";
        $this->session->set_flashdata('reg', 0);
    }
    ?>
    <?php 
        if($this->session->flashdata('pri') == 1){
            echo "<script language=\"javascript\">prikazi_prijavu();</script>";
            $this->session->set_flashdata('pri', 0);
        }
    ?>
    <?php 
        if($this->session->flashdata('zl') == 1){
            echo "<script language=\"javascript\">prikazi_zaboravljenu_lozinku();</script>";
            $this->session->set_flashdata('zl', 0);
        }
    ?>

</body>
<!-- InstanceEnd -->
</html>
