<!--Ivana Lisanin-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>Proizvod</title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png"  href="http://localhost/Slike/Vunica/Ikona.png" />
    
   <!--Ucitavanje css za rezoluciju (1366x768)-->
        <style media="screen and (max-device-width: 1400px)">
            <?php include '/../CSS/Template (1366x768).css'; ?>
            <?php include '/../CSS/Pop up (1366x768).css'; ?>
            <?php include '/../CSS/Tekst (1366x768).css'; ?>
            <?php include '/../CSS/Dugme (1366x768).css'; ?>
            <?php include '/../CSS/Paragraf (1366x768).css'; ?>
        </style>
   <!--Kraj ucitavanja css za rezoluciju (1366x768)-->
   
   <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (min-device-width: 1401px)">
            <?php include '/../CSS/Template (1920x1080).css'; ?>
            <?php include '/../CSS/Pop up (1920x1080).css'; ?>
            <?php include '/../CSS/Tekst (1920x1080).css'; ?>
            <?php include '/../CSS/Dugme (1920x1080).css'; ?>
            <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
        </style>
   <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->
   
   <!--Ucitavanje javascript-->
        <script>
           <?php include('/../JavaScript/PopUp.js'); ?>
           <?php include('/../JavaScript/Footer.js'); ?>
           <?php include('/../JavaScript/Checkbox.js'); ?>
           <?php include ('/../JavaScript/PlusMinus.js'); ?>
        </script>
   <!--Krajucitavanja javascript-->

  <!-- InstanceEndEditable -->
</head>

<body onLoad="izracunaj();" onresize="izracunaj();" id="body">
    <?php 
       include ("Header.php"); 
       include ("Prijava.php");
       include ("Zaboravljena lozinka.php");
       include ("Registracija.php");
       include ("Obavestenje.php");
       include ("Footer.php");
    ?>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->
              <br/> <br/> <br/> <br/> <br/> <br/>           
                                  
                   
                   <table align="center" border="0" width="70%">
  <th colspan="2" align="left"> &nbsp; &nbsp;<font class = "naslovObican">
                	IME PROIZVODA
                </font> <br /> <br /> <br />
                </th>
  <tr>
    <td rowspan="3" align="left" width="40%">
    &nbsp; &nbsp;
    <img src="http://localhost/Slike/Pijaca/slika.jpg" width="350px"> 
    </td>
    <td height="80%">
    <br /> <br /> <br /> <br /> 
    <p><font class = "tekstObican">Trenutni broj artikala u vašem cegeru je:</font>
    <br />
    <img src="../Slike/Brojevi/broj0.jpg" width="80px" />
    </p>
    </td>
  </tr>  
  <tr>
    <td>
    <p><font class = "naslovObican">Količina:  
    <input type=test size=10 id='v' name='v' class="tekstObican" value='0'/>
    <input type=button value='-' class="dugme" style="cursor: pointer;" onclick='javascript:process(-1)'/>
    <input type=button value='+' class="dugme" 
   onmouseover="" style="cursor: pointer;" onclick='javascript:process(1)'/>
    </font></p>
    </td>
  </tr>
  <tr>
    <td>
    <br /> <br /> <br />
    <input type="button" style="cursor: pointer;" class="dugme" name="Stavi" onclick="prikazi_odluku()" value="Stavi u ceger"/>
    </td>
  </tr>
  <tr>
    <td colspan="2">
    
      <p> &nbsp; &nbsp; <font class="naslovObican"> Cena:</font>
         <font class="tekstObican"> 100 EUR </font>
      </p>
      <p> &nbsp; &nbsp; <font class="naslovObican">Status:</font>
         <font class="tekstObican">Još 100 komada u magacinu.</font>
      </p>
      <p> &nbsp; &nbsp; <font class="naslovObican">Opis proizvoda:</font>
         <font class="tekstObican">Kravata od najfinije vunice za bešanje. Cena povoljna. Odličan kvalitet. Ručno rađena.</font>
      </p>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input type="button" style="cursor: pointer;" onclick="prikazi_prijavu_proizvoda()" class="dugme" name="Prijavi" value="Prijavi proizvod"/>
    &nbsp; &nbsp;
    </td>
  </tr>
</table>
                <br/> <br/>  
                <br/> 
               
               <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>   
                      
              
              <br/> <br/> <br/> 
              
                                  
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
   

</body>
<!-- InstanceEnd -->
</html>


