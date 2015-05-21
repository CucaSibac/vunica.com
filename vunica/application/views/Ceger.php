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
    </style>
    
    <style media="screen and (min-device-width: 1401px)">
        <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
        <?php include '/../CSS/Template (1920x1080).css'; ?>
        <?php include '/../CSS/Pop up (1920x1080).css'; ?>
        <?php include '/../CSS/Tekst (1920x1080).css'; ?>
        <?php include '/../CSS/Dugme (1920x1080).css'; ?>
    </style>
    
    <script>
        <?php include('/../JavaScript/PopUp.js'); ?>
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
        include("Odluka.php");
        include("PrijavaProizvoda.php");
    ?>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->
                   
                                  
                   
                     <br/> <br/> <br/> 
              <br/> </br> </br> </br>

              
              
              <!-- Uokviren paragraf -->
              
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
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <font class="tekstObican">Naziv proizvoda 1</font>
                </td>                
                <td align="center">
                  <font class="tekstObican">1</font>
                </td>
                <td align="center">
                  <font class="tekstObican">10 EUR</font>
                </td>
              </tr>
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <font class="tekstObican">Naziv proizvoda 2</font>
                </td>                
                <td align="center">
                  <font class="tekstObican">3</font>
                </td>
                <td align="center">
                  <font class="tekstObican">50 EUR</font>
                </td>
              </tr>
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <font class="tekstObican">Naziv proizvoda 3</font>
                </td>                
                <td align="center">
                  <font class="tekstObican">7</font>
                </td>
                <td align="center">
                  <font class="tekstObican">5 EUR</font>
                </td>
              </tr>
              <tr>
                <td>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                  <font class="tekstObican">Naziv proizvoda 4</font>
                </td>                
                <td align="center">
                  <font class="tekstObican">2</font>
                </td>
                <td align="center">
                  <font class="tekstObican">65 EUR</font>
                </td>
              </tr>
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
                  Ukupna kolicina
                </td>
                <td align="center">
                  Ukupna cena
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
                    <input type="text" class="tekstObican"/>
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Datum isteka:</font>
                  </td>
                  <td align="center">
                    <input type="text" class="tekstObican" />
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Sigurnosni broj:</font>
                  </td>
                  <td align="center">
                    <input type="text" class="tekstObican" />
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
                    <input type="text" class="tekstObican" />
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Poštanski broj:</font>
                  </td>
                  <td align="center">
                    <input type="text" class="tekstObican" />
                  </td>
                </tr>
                <tr>
                  <td>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <font class="tekstObican">Ulica:</font>
                  </td>
                  <td align="center">
                    <input type="text" class="tekstObican" />
                  </td>
                </tr>
              </table>

              <br/> <br/> <br/> <br/> 
              <p align="center">
              <input type=button onclick="obavi_kupovinu()" style="cursor: pointer;" value='Obavi kupovinu' class="dugme" />
              &nbsp; &nbsp;
              <input type=button value='Vrati se na pijacu' style="cursor: pointer;" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca', '_parent')" class="dugme" />
              </p>
              
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



