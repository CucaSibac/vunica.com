<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>Greska!</title>     
    
   <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />
    
  <style media="screen and (max-device-width: 1400px)">
  <?php include '/../CSS/Template (1366x768).css'; ?>
  <?php include '/../CSS/Pop up (1366x768).css'; ?>
  <?php include '/../CSS/Tekst (1366x768).css'; ?>
  <?php include '/../CSS/Dugme (1366x768).css'; ?>
  <?php include '/../CSS/Paragraf (1366x768).css'; ?>
  <?php include '/../CSS/Pocetna (1366x768).css'; ?>
  </style>
  <style media="screen and (min-device-width: 1401px)">
    <?php include '/../CSS/Template (1920x1080).css'; ?>
    <?php include '/../CSS/Pop up (1920x1080).css'; ?>
    <?php include '/../CSS/Tekst (1920x1080).css'; ?>
    <?php include '/../CSS/Dugme (1920x1080).css'; ?>
    <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
    <?php include '/../CSS/Pocetna (1920x1080).css'; ?>
  </style>
  <script>
    <?php include('/../JavaScript/PopUp.js');?>
    <?php include('/../JavaScript/Footer.js');?>
  </script>
   
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
    ?>
    
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
            <!-- InstanceBeginEditable name="Body" -->
                <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
    
                <table width = "60%" align = "center">
                    <tr>
                        <td align = "center">
                            <font class="naslovObican">
                                Greska!
                            </font>
                            <br/> <br/>
                            <font class="tekstIskosen">
                                Strana kojoj pokusavate da pristupite je nedostupna!
                            </font>
                        </td>
                    </tr>
                </table>
              
                <br/> <br/> <br/> <br/>

                <!-- Greska -->
                <div class = "paragraf"> 

                    <table width = "60%" align = "center">
                            <tr>
                            <td width = "46%">
                                    <hr width = "100%" class = "linija"/>
                            </td>
                            <td width = "8%" align="center">
                                    <img src = "http://vunica.azurewebsites.net/vunica/application/Slike/Linija/Ikonica.png" class = "ikonica">
                            </td>
                            <td width = "46%">
                                    <hr width = "100%" class = "linija"/>
                            </td>
                        </tr>
                    </table> 

                    <br/> <br/>  

                    <table width = "60%" align = "center">
                        <tr>
                            <td width = "100%" align = "left">
                              <font class = "tekstObican">
                                  Postovani korisnici, 
                              </font>
                              <br/> <br/>
                              <font class="tekstObican">
                                Strana kojoj pokusavate da pristupite je nedostupna!
                                Molimo Vas da se ulogujete preko svog naloga i pokusate ponovo. 
                                Ako je do greske doslo sa nase strane, uveravamo Vas da ce problem biti uskoro resen.
                              </font>
                            </td>
                        </tr>
                    </table>  

                    <br/> <br/> 

                    <hr width = "60%" class = "linija"/>
                </div>
                
                <br/> <br/> <br/> <br/> <br/>
                
                <table width = "60%" align = "center">
                    <tr>
                        <td align = "center">
                            <a href = "http://localhost/vunica.com/vunica/index.php/Pocetna" target = "_parent" class="link">
                                <font class="tekstIskosen">
                                    Vratite se na pocetnu?
                                </font>
                            </a>
                        </td>
                    </tr>
                </table>
                
                <br/> <br/> <br/> <br/> <br/> <br/> <br/>
        <!-- InstanceEndEditable -->
        </td>
      </tr>
    </table>
 </div>
    
</body>
<!-- InstanceEnd -->
</html>
