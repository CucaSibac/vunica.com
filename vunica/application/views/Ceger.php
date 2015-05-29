<!--Ivana Lisanin-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>Ceger</title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
    <style media="screen and (max-device-width: 1400px)">
        <?php include '/../CSS/Template (1366x768).css'; ?>
        <?php include '/../CSS/Pop up (1366x768).css'; ?>
        <?php include '/../CSS/Tekst (1366x768).css'; ?>
        <?php include '/../CSS/Dugme (1366x768).css'; ?>
        <?php include '/../CSS/Paragraf (1366x768).css'; ?>
        <?php include '/../CSS/Dodavanje (1366x768).css'; ?>
        <?php include '/../CSS/Provil -Editovanje (1366x768).css'; ?>
    </style>
    
    <style media="screen and (min-device-width: 1401px)">
        <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
        <?php include '/../CSS/Template (1920x1080).css'; ?>
        <?php include '/../CSS/Pop up (1920x1080).css'; ?>
        <?php include '/../CSS/Tekst (1920x1080).css'; ?>
        <?php include '/../CSS/Dugme (1920x1080).css'; ?>
        <?php include '/../CSS/Dodavanje (1920x1080).css'; ?>
        <?php include '/../CSS/Provil -Editovanje (1920x1080).css'; ?>
    </style>
    
    <script>
        <?php include('/../JavaScript/PopUp.js'); ?>
        <?php include('/../JavaScript/PopUp2.js'); ?>
        <?php include('/../JavaScript/Footer.js'); ?>
        <?php include('/../JavaScript/Checkbox.js'); ?>
        <?php include('/../JavaScript/PlusMinus.js'); ?>
    </script>
</head>

<body onLoad="izracunaj();" onresize="izracunaj();" id="body">
    
    <?php
        include("Header.php");
	include("Obavestenje.php");
	include("Prijava.php");
	include("Registracija.php");
	include("Zaboravljena lozinka.php");
	include("Footer.php");
        include("PrijavaProizvoda.php");
        include("brisanjesesije.php");
    ?>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->
                   <?php
                      $cenaUkupno0 = 0; $cenaUkupno1 = 0; $cenaUkupno2 = 0; $cenaUkupno3 = 0; $cenaUkupno4 = 0;
                      $cenaUkupno5 = 0; $cenaUkupno6 = 0; $cenaUkupno7 = 0; $cenaUkupno8 = 0; $cenaUkupno9 = 0; 
                      $cenaUkupno10 = 0; $cenaUkupno11 = 0; $cenaUkupno12 = 0; $cenaUkupno13 = 0; $cenaUkupno14 = 0; 
                      $cenaUkupno15 = 0; $cenaUkupno16 = 0; $cenaUkupno17 = 0; $cenaUkupno18 = 0; $cenaUkupno19 = 0;
                      
                      $kolicinaUkupno0 = 0; $kolicinaUkupno1 = 0; $kolicinaUkupno2 = 0; $kolicinaUkupno3 = 0;
                      $kolicinaUkupno4 = 0; $kolicinaUkupno5 = 0; $kolicinaUkupno6 = 0; $kolicinaUkupno7 = 0; 
                      $kolicinaUkupno8 = 0; $kolicinaUkupno9 = 0; $kolicinaUkupno10 = 0; $kolicinaUkupno11 = 0; 
                      $kolicinaUkupno12 = 0; $kolicinaUkupno13 = 0; $kolicinaUkupno14 = 0; $kolicinaUkupno15 = 0; 
                      $kolicinaUkupno16 = 0; $kolicinaUkupno17 = 0; $kolicinaUkupno18 = 0; $kolicinaUkupno19 = 0;
                      
                      $proizvodiucegeru = $this->session->Proizvodi;
                   ?>
                                  
                   
                     <br/> <br/> <br/> 
              <br/> </br> </br> </br>
                           
              <!-- Uokviren paragraf -->
              
              <?php 
                echo form_open("Ceger/provera"); 
              ?>
              
              <table align="center" border="0" width="70%">
              <th colspan="3">
                <font class="naslovObican">Ceger</font>
                <br /> <br /> <br />
              </th>
              <tr>
                <td width="60%">
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <font class="naslovObican">Proizvod:</font>
                </td>
                <td width="20%" align="center">
                  <font class="naslovObican">Količina:</font>
                </td>
                <td width="20%" align="center">
                  <font class="naslovObican">Cena:</font>
                </td>
              </tr>
              <tr>
                <td colspan="3">
                 <br /> 
                   <hr class = "linija"/>
                   <br />
                </td>
              </tr>
                  <?php               
                  if(strcmp($this->session->Proizvodi[0], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['0']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno0 = $this->session->Proizvodi['0']['kolicina'];
                    echo $kolicinaUkupno0; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno0 = $this->session->Proizvodi['0']['cena'] * $kolicinaUkupno0;
                     echo $cenaUkupno0 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
              <?php
                  if(strcmp($this->session->Proizvodi['1']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['1']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno1 = $this->session->Proizvodi['1']['kolicina'];
                    echo $kolicinaUkupno1; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno1 = $this->session->Proizvodi['1']['cena'] * $kolicinaUkupno1;
                     echo $cenaUkupno1 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
              <?php
                  if(strcmp($this->session->Proizvodi['2']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['2']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno2 = $this->session->Proizvodi['2']['kolicina'];
                    echo $kolicinaUkupno2; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno2 = $this->session->Proizvodi['2']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno2 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
              <?php
                  if(strcmp($this->session->Proizvodi['3']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['3']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno3 = $this->session->Proizvodi['3']['kolicina'];
                    echo $kolicinaUkupno3; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno3 = $this->session->Proizvodi['3']['cena'] * $kolicinaUkupno3;
                     echo $cenaUkupno3 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['4']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['4']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno4 = $this->session->Proizvodi['4']['kolicina'];
                    echo $kolicinaUkupno4; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno4 = $this->session->Proizvodi['4']['cena'] * $kolicinaUkupno4;
                     echo $cenaUkupno4 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['5']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['5']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno5 = $this->session->Proizvodi['5']['kolicina'];
                    echo $kolicinaUkupno5; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno5 = $this->session->Proizvodi['5']['cena'] * $kolicinaUkupno5;
                     echo $cenaUkupno5 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['6']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['6']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno6 = $this->session->Proizvodi['6']['kolicina'];
                    echo $kolicinaUkupno6; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno6 = $this->session->Proizvodi['6']['cena'] * $kolicinaUkupno6;
                     echo $cenaUkupno6 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['7']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['7']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno7 = $this->session->Proizvodi['7']['kolicina'];
                    echo $kolicinaUkupno7; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno7 = $this->session->Proizvodi['7']['cena'] * $kolicinaUkupno7;
                     echo $cenaUkupno7 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['8']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['8']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno8 = $this->session->Proizvodi['8']['kolicina'];
                    echo $kolicinaUkupno8; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno8 = $this->session->Proizvodi['8']['cena'] * $kolicinaUkupno8;
                     echo $cenaUkupno8 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['9']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['9']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno9 = $this->session->Proizvodi['9']['kolicina'];
                    echo $kolicinaUkupno9; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno9 = $this->session->Proizvodi['9']['cena'] * $kolicinaUkupno9;
                     echo $cenaUkupno9 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['10']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['10']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno10 = $this->session->Proizvodi['10']['kolicina'];
                    echo $kolicinaUkupno10; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno10 = $this->session->Proizvodi['10']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno10 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['11']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['11']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno11 = $this->session->Proizvodi['11']['kolicina'];
                    echo $kolicinaUkupno11; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno11 = $this->session->Proizvodi['11']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno11 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['12']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['12']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno12 = $this->session->Proizvodi['12']['kolicina'];
                    echo $kolicinaUkupno12; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno12 = $this->session->Proizvodi['12']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno12 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['13']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['13']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno13 = $this->session->Proizvodi['13']['kolicina'];
                    echo $kolicinaUkupno13; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno13 = $this->session->Proizvodi['13']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno13 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['14']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['14']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno14 = $this->session->Proizvodi['14']['kolicina'];
                    echo $kolicinaUkupno14; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno14 = $this->session->Proizvodi['14']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno14 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['15']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['15']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno15 = $this->session->Proizvodi['15']['kolicina'];
                    echo $kolicinaUkupno15; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno15 = $this->session->Proizvodi['15']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno15 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['16']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['16']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno16 = $this->session->Proizvodi['16']['kolicina'];
                    echo $kolicinaUkupno16; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno16 = $this->session->Proizvodi['16']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno16 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['17']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['17']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno17 = $this->session->Proizvodi['17']['kolicina'];
                    echo $kolicinaUkupno17; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno17 = $this->session->Proizvodi['17']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno17 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['18']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['18']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno18 = $this->session->Proizvodi['18']['kolicina'];
                    echo $kolicinaUkupno18; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno18 = $this->session->Proizvodi['18']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno18 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
                  <?php
                  if(strcmp($this->session->Proizvodi['19']['id'], '') == 0){
                  ?> 
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <font class="tekstObican">
                    <?php echo $this->session->Proizvodi['19']['ime']; ?>
                </font>
                </td>                
                <td align="center">
                  <font class="tekstObican">
                    <?php $kolicinaUkupno19 = $this->session->Proizvodi['19']['kolicina'];
                    echo $kolicinaUkupno19; ?>  
                  </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                    <?php $cenaUkupno19 = $this->session->Proizvodi['19']['cena'] * $kolicinaUkupno2;
                     echo $cenaUkupno19 ?> &nbsp; EUR
                  </font>
                </td>
              </tr>
                  <?php } ?>
              <tr>
                <td colspan="3">
                   <br />
                   <hr class = "linija"/>
                   <br />
                </td>
              </tr>
              <tr>
                <td>
                </td>                
                <td align="center">
                    <font class="tekstObican">
                        <?php echo $kolicinaUkupno = $kolicinaUkupno0 + $kolicinaUkupno1 + $kolicinaUkupno2 + $kolicinaUkupno3 + $kolicinaUkupno4 +
                                $kolicinaUkupno5 + $kolicinaUkupno6 + $kolicinaUkupno7 + $kolicinaUkupno8 + $kolicinaUkupno9 + $kolicinaUkupno10 +
                                $kolicinaUkupno11 + $kolicinaUkupno12 + $kolicinaUkupno13 + $kolicinaUkupno14 + $kolicinaUkupno15 + $kolicinaUkupno16 +
                                $kolicinaUkupno17 + $kolicinaUkupno18 + $kolicinaUkupno19;
                         ?>
                    </font>
                </td>
                <td align="center">
                  <font class="tekstObican">
                        <?php echo $cenaUkupno = $cenaUkupno0 + $cenaUkupno1 + $cenaUkupno2 + $cenaUkupno3 + $cenaUkupno4 + $cenaUkupno5 +
                                $cenaUkupno6 + $cenaUkupno7 + $cenaUkupno8 + $cenaUkupno9 + $cenaUkupno10 + $cenaUkupno11 + $cenaUkupno12 +
                                $cenaUkupno13 + $cenaUkupno14 + $cenaUkupno15 + $cenaUkupno16 + $cenaUkupno17 + $cenaUkupno18 + $cenaUkupno19;
                        ?> EUR
                  </font>
                </td>    
              </tr>
              </table>
              

              <br/> <br/> <br/> <br/> </br> </br>
              <table align="center" border="0" width="45%" >
              
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Broj kreditne kartice:</font>
                  </td>
                  <td align="center">
                    <input id = "karticabr" name = "karticabr" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->BrojKreditneKartice);?>"
                           placeholder = "<?php echo $this->session->BrojKreditneKartice; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Datum isteka:</font>
                  </td>
                  <td align="center">
                    <input id = "datumisteka" name = "datumisteka" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->DatumIsteka);?>"
                           placeholder = "<?php echo $this->session->DatumIsteka; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Sigurnosni broj:</font>
                  </td>
                  <td align="center">
                    <input id = "sigurnosni" name = "sigurnosni" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->SigurnosniBroj);?>"
                           placeholder = "<?php echo $this->session->SigurnosniBroj; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                  <br />
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Grad:</font>
                  </td>
                  <td align="center">
                    <input id = "grad" name = "grad" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->Grad);?>"
                           placeholder = "<?php echo $this->session->Grad; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Poštanski broj:</font>
                  </td>
                  <td align="center">
                    <input id = "postanski" name = "postanski" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->PostanskiBroj);?>"
                           placeholder = "<?php echo $this->session->PostanskiBroj; ?>"/>
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Ulica:</font>
                  </td>
                  <td align="center">
                    <input id = "ulica" name = "ulica" class = "formaPolje" type = "text" maxlength = "30"
                           size = "<?php echo strlen($this->session->Ulica);?>"
                           placeholder = "<?php echo $this->session->Ulica; ?>"/>
                  </td>
                </tr>
              </table>

              <br/> <br/> <br/> <br/> 
              <p align="center">
                  <input type=submit onclick="obavi_kupovinu()" style="cursor: pointer;" value='Obavi kupovinu' class="dugme" />
              &nbsp; &nbsp;
              <input type=button value='Vrati se na pijacu' style="cursor: pointer;" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca', '_parent')" class="dugme" />
              </p>
              
              <?php echo form_close(); ?>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>

                                  
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
    
</body>
<!-- InstanceEnd -->
</html>



