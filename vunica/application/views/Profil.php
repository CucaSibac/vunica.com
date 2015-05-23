<!--Ivana Lisanin-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>Profil</title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
        <style media="screen and (max-device-width: 1400px)">
             <?php include '/../CSS/Template (1366x768).css'; ?>
             <?php include '/../CSS/Pop up (1366x768).css'; ?>
             <?php include '/../CSS/Tekst (1366x768).css'; ?>
             <?php include '/../CSS/Dugme (1366x768).css'; ?>
             <?php include '/../CSS/Paragraf (1366x768).css'; ?>
             <?php include '/../CSS/Video (1366x768).css'; ?>
             
        </style>

        <style media="screen and (min-device-width: 1401px)">
             <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
             <?php include '/../CSS/Template (1920x1080).css'; ?>
             <?php include '/../CSS/Pop up (1920x1080).css'; ?>
             <?php include '/../CSS/Tekst (1920x1080).css'; ?>
             <?php include '/../CSS/Dugme (1920x1080).css'; ?>
             <?php include '/../CSS/Video (1920x1080).css'; ?>
             <?php include '/../CSS/Dodavanje (1366x768).css'; ?>
        </style>
        <script>
             <?php include('/../JavaScript/PopUp.js'); ?>
             <?php include('/../JavaScript/Footer.js'); ?>
             <?php include('/../JavaScript/Checkbox.js'); ?>
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
    ?>

    
    <!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve()">
    </div>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->
              <br/> <br/> <br/> <br/> </br> 
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
              <?php if($status == 3 || $status == 2){?> 
              <table align="center" width="74%">
              <th bgcolor='#FF6C6C' align = "center" style="cursor: pointer;" onmouseover="this.bgColor='#3E9569'" onmouseout="bgColor='#FF6C6C'">
              <div class="mis">
              <br />
              <font class="tekstProfil">POSTANITE PREMIUM KORISNIK!!!</font>
              <br /><br />
              </div>
              </th>
              </table>
              <?php } ?>
              
              <?php if($status == 3){?> 
              <table align="center" width="74%">
                  <tr>
                      <td align="center">
                          <font class="tekstObican"> ILI </font>
                      </td>
                  </tr>
                  <tr>
                      <td bgcolor='#FF6C6C' align = "center" style="cursor: pointer;" onmouseover="this.bgColor='#3E9569'" onmouseout="bgColor='#FF6C6C'">
                         <div class="mis">
                            <br />
                            <font class="tekstProfil">POSTANITE ČLAN KLUBA PLETILJA!!!</font>
                            <br /><br />
                         </div>
                      </td>
                  </tr>
              </table>  
              <?php }?> 
              
              <table align="center" border="0" width="70%">
                
                <tr>
                  <td rowspan="3" width="35%" align="center">
                  <br /><br />
                    <img width="250px" src="<?php echo $this->session->Slika;?>" />
                  </td>
                  <td height="25%">
                  <br /><br />
                  <font class="naslovObican"><?php echo $this->session->UserName;?></font>
                  <br /> <br />
                  <font class="tekstObican"><?php echo $this->session->ImePrezime;?></font>
                  </td>
                </tr>
                <tr>
                  <td height="25%">
                  <br />
                  <font class="tekstBold">Godine: </font>
                  <font class="tekstObican"><?php echo $this->session->Godine;?></font>
                  <br /> <br />
                  <font class="tekstBold">Status: </font>
                  <font class="tekstObican"><?php echo $this->session->Status;?></font>
                  </td>
                </tr>
                <tr>
                  <td height="50%" valign="top">
                  <br />
                  <font class="tekstBold">O meni: </font>
                  <font class="tekstObican"><?php echo $this->session->Opis;?></font>
                  <br /><br />
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <br />
                  <a href="#" onclick="window.open('http://localhost/vunica.com/vunica/index.php/ProfilEditovanje', '_parent')" class="dugme">Izmeni profil</a>
                  <a href="#" onclick="obrisan()" class="dugme">Obriši profil</a>
                  <br /><br />
                  </td>
                </tr>

              </table>
              <br />
              <?php if($status == 2 || $status == 1){?> 
              <table align="center" border="0" width="50%">
                  <tr>
                      <td width="50%" align="center">
                          <div class="dodajvideo">
                              <br/><br/>
                              Dodaj
                              <br/>
                              video
                              <br/>
                          </div>
                      </td>
                      <td width="50%" align="center">
                          <div class="dodajproizvod">
                              <br/><br/>
                              Dodaj
                              <br/>
                              proizvod
                              <br/>
                          </div>
                      </td>
                  </tr>
              </table>
              <?php } ?>
                  
              <?php if($status == 3){?> 
              <table align="center" border="0" width="29%">
                <tr>
                  <td align="center">
                      <div class="dodajvideo">
                        <br/><br/>
                        Dodaj
                        <br/>
                        video
                        <br/>
                     </div>
                  </td>
                </tr>
              </table>
              <?php } ?>
              
              <br />
              <hr width = "74%" class = "linija"/>

              <br/> 
              
              <table align="center" border="0" width="70%">
                <tr>
                  <td align="center" width="50%">
                    <font class="tekstBold">Moji videi</font>
                  </td>
                  <td align="center" width="50%">
                    <font class="tekstBold">Moji proizvodi</font>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <br />
                     <video width="90%" controls> <source src="http://localhost/Video/Omca.mp4" type="video/mp4"></video>
                     <p align="left">
                     &nbsp; &nbsp; &nbsp;
                     <font class="tekstBold">Naziv videa</font>
                     <br />
                     &nbsp; &nbsp; &nbsp;
                     <a href="#"><font class="tekstObican">Detaljnije...</font></a>
                     <br /> <br />
                     &nbsp; &nbsp;
                     <a href="#"><font class="dugme">Obriši video</font></a>
                     </p>
                  </td>
                  <td align="center" valign="top">
                  <br />
                    <font class="tekstObican">Trenutno nemate svojih proizvoda.</font>
                  </td>
                </tr>
              </table>
              <p align="center">
              <a href="#" class="dugme">Učitajte još</a>
              </p>
              <br/> <br/> </br>
              
              <!-- Uokviren paragraf -->
                        
              
              <br/> <br/> <br/> <br/> </br> </br>
              
              <!-- Dugmici -->
                                      
           
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
              <br/> <br/> <br/> <br/> <br/> 
             
              
              
              
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
   
</body>
<!-- InstanceEnd -->


</html>

