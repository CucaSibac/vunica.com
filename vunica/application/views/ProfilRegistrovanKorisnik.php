<!--Ivana Lisanin-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>ProfilRegistrovanKorisnik</title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
        <style media="screen and (max-device-width: 1400px)">
             <?php include '/../CSS/Template (1366x768).css'; ?>
             <?php include '/../CSS/Pop up (1366x768).css'; ?>
             <?php include '/../CSS/Tekst (1366x768).css'; ?>
             <?php include '/../CSS/Dugme (1366x768).css'; ?>
             <?php include '/../CSS/Paragraf (1366x768).css'; ?>
             <?php include '/../CSS/Video (1366x768).css'; ?>
             <?php include '/../CSS/Dodavanje (1366x768).css'; ?>
        </style>

        <style media="screen and (min-device-width: 1401px)">
             <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
             <?php include '/../CSS/Template (1920x1080).css'; ?>
             <?php include '/../CSS/Pop up (1920x1080).css'; ?>
             <?php include '/../CSS/Tekst (1920x1080).css'; ?>
             <?php include '/../CSS/Dugme (1920x1080).css'; ?>
             <?php include '/../CSS/Video (1920x1080).css'; ?>
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
              <table align="center" width="74%">
              <th bgcolor='#FF6C6C' align = "center"  onmouseover="this.bgColor='#3E9569'" onmouseout="bgColor='#FF6C6C'">
              <div class="mis">
              <br />
              <font class="tekstProfil">POSTANITE PREMIUM KORISNIK!!!</font>
              <br /><br />
              </div>
              </th>
              </table>
              
              <table align="center" border="0" width="70%">
                
                <tr>
                  <td rowspan="3" width="35%" align="center">
                  <br /><br />
                    <img width="250px" src="http://localhost/Slike/Profilna/Slika.png" />
                  </td>
                  <td height="25%">
                  <br /><br />
                  <font class="naslovObican">Nadimak</font>
                  <br /> <br />
                  <font class="tekstObican">Ime Prezime</font>
                  </td>
                </tr>
                <tr>
                  <td height="25%">
                  <br />
                  <font class="tekstBold">Godine: </font>
                  <font class="tekstObican">15</font>
                  <br /> <br />
                  <font class="tekstBold">Status: </font>
                  <font class="tekstObican">Klub 5 klupka</font>
                  </td>
                </tr>
                <tr>
                  <td height="50%" valign="top">
                  <br />
                  <font class="tekstBold">O meni: </font>
                  <font class="tekstObican">Volim da štrikam. 
                  Štrikanje me opušsta. Imam svoju kolekciju štrikanih omči od najfinije vunice. Omče su moja strast!</font>
                  <br /><br />
                  </td>
                </tr>
                <tr>
                  <td align="center">
                  <br />
                  <a href="#" onclick="window.open('Profil - Editovanje.html', '_parent')" class="dugme">Izmeni profil</a>
                  <a href="#" onclick="obrisan()" class="dugme">Obriši profil</a>
                  <br /><br />
                  </td>
                </tr>

              </table>
              <br />
              <table align="center" border="0" width="50%">
                <tr>
                  <td width="50%" align="center">
                  <p align="center"
                    <a href="#"><div class="dodajvideo" align="center" >  
			        <br /> <br />
			        Dodaj<br />video
		            </div></a>
                  </p>
                  </td>
                  
                   <td width="50%" align="center">
                  <p align="center"
                    <a href="#"><div class="dodajproizvod" align="center" >  
			        <br /> <br />
			        Dodaj<br />proizvod
		            </div></a>
                  </p>
                  </td>
                </tr>
                
              </table>
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

