<!--Ivana Lisanin-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
  <title> Proizvod
  </title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png"  href="http://localhost/Slike/Vunica/Ikona.png" />
    
   <!--Ucitavanje css za rezoluciju (1366x768)-->
        <style media="screen and (max-device-width: 1400px)">
            <?php include '/../CSS/Template (1366x768).css'; ?>
            <?php include '/../CSS/Pop up (1366x768).css'; ?>
            <?php include '/../CSS/Tekst (1366x768).css'; ?>
            <?php include '/../CSS/Dugme (1366x768).css'; ?>
            <?php include '/../CSS/Paragraf (1366x768).css'; ?>
            <?php include '/../CSS/Video (1366x768).css'; ?>
        </style>
   <!--Kraj ucitavanja css za rezoluciju (1366x768)-->
   
   <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (min-device-width: 1401px)">
            <?php include '/../CSS/Template (1920x1080).css'; ?>
            <?php include '/../CSS/Pop up (1920x1080).css'; ?>
            <?php include '/../CSS/Tekst (1920x1080).css'; ?>
            <?php include '/../CSS/Dugme (1920x1080).css'; ?>
            <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
            <?php include '/../CSS/Video (1920x1080).css'; ?>
        </style>
   <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->
   
   <!--Ucitavanje javascript-->
        <script>
           <?php include('/../JavaScript/PopUp.js'); ?>
           <?php include('/../JavaScript/Footer.js'); ?>
           <?php include('/../JavaScript/Checkbox.js'); ?>
           <?php include ('/../JavaScript/PlusMinus.js'); ?>
           <?php include('/../JavaScript/Video.js'); ?>
        </script>
   <!--Krajucitavanja javascript-->

        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">google.load("jquery", "1.3.2");</script>
        
        <!-- OVO JE ZA DUGME UCITAJ JOS!!--> 
        <script type="text/javascript">
            $(document).ready(function () {
                var num_messages = <?= $num_messagesp ?>;
                var loaded_messages = 0;
                $("#more_button").click(function () {
                    loaded_messages += 3;
                    $.get("http://localhost/vunica.com/vunica/index.php/proizvod/get_messages/" + "
                        <?php
                        foreach ($podacip as $red) {
                        echo $red->IDProizvod;
                        }
                        ?>" + "/" + loaded_messages, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_messages >= num_messages - 3)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });
            })
        </script> 
        
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
                <?php
            foreach ($podacip as $red) {
                ?>
                <?php
                echo $red->Naziv;
            }
            ?>
                </font> <br /> <br /> <br />
                </th>
  <tr>
    <td rowspan="3" align="left" width="40%">
    &nbsp; &nbsp;
    <img src="<?php
                foreach ($podacip as $red) {
              ?>
              <?php
                echo $red->Slika;
                }
              ?>" 
    width="320px"/> 
    </td>
    <td height="80%">
    <br /> <br /> <br /> <br /> 
    <p><font class = "tekstObican">Trenutni broj artikala u vašem cegeru je:</font>
    <br />
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
    <font class="naslovObican">
    <?php
        foreach ($ucegeru as $red) {
    ?>
    <?php
           echo $red->Kolicina;
        }
    ?>
    </font>
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
         <font class="tekstObican"> 
            <?php
              foreach ($podacip as $red) {
            ?>
            <?php
                 echo $red->BrojArtikala;
              }
            ?> EUR 
         </font>
      </p>
      <p> &nbsp; &nbsp; <font class="naslovObican">Status:</font>
         <font class="tekstObican">Još 
             <?php
        foreach ($podacip as $red) {
    ?>
    <?php
           echo $red->BrojArtikala;
        }
    ?>
             komada u magacinu.</font>
      </p>
      <p> &nbsp; &nbsp; <font class="naslovObican">Opis proizvoda:</font>
          <font class="tekstObican">
              <?php
        foreach ($podacip as $red) {
    ?>
    <?php
           echo $red->Opis;
        }
    ?>
          </font>
      </p>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="right">
    <input type="button" style="cursor: pointer;" onclick="prikazi_prijavu_proizvoda()" class="dugme" name="Prijavi" value="Prijavi proizvod"/>
    &nbsp; &nbsp;
    </td>
  </tr>
  <tr>
      <td colspan="2" align="center">
          <br /><br /><textarea  maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify;" placeholder="Napisite komentar" class="tekstPoljeKomentar" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea><br>
                                            <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatak">400</font></font>
 
      </td>                       
  </tr>
  <tr>
    <td align="center">
        &nbsp; &nbsp;<a class="dugme" style="cursor: pointer;" onclick="postavi()" > Postavi </a> 
    </td>
    <td align="center"> 
        <a  class="dugme" style="cursor: pointer;" onclick="odustani()"> Odustani </a> 
    </td>
  </tr>
                       
  <?php
    if (empty($latest_messagesp)) {
                                                
    } else {
    ?>
                       
  <tr  >
    <td colspan="2"><br /> <br /> <br />
        <table width = "100%" align = "center">
            <tr >
               <td width = "46%">
                    <hr width = "100%" class = "linija"/>
               </td>
               <td width = "8%" align="center">
                   <img src = "http://localhost/Slike/Linija/Ikonica.png" class = "ikonica"></img>
               </td>
               <td width = "46%">
                    <hr width = "100%" class = "linija"/>
               </td>
            </tr>
        </table> 
     </td>
  </tr> 
                       
  <tr >
    
    <td colspan="2" align="center" >
        <div id="main_content"><br/>
            <?php
               foreach ($latest_messagesp as $message) {
            ?>
        
           <div class="view view-third" align="left" >  
              <a class="komentarDatum">
                  <?php echo $message->Vreme; ?>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php echo $message->Datum; ?>
              </a>
              <font class="tekstObicanAutorKomentar"><a class="linkovi" href="#"><?php echo $message->UserName; ?></a></font>
              <br /><br />
              <font class="tekstIskosenTekstKomentar"><?php echo $message->Tekst; ?></font>
              <br/> <br/>
              <a href="#" class="prijaviKomentar">Prijavi komentar</a>
           </div>  
           <br /><br />
        <?php } ?>
        </div>
        <hr width = "100%" class = "linija"/>
        <?php
            if(count($latest_messagesp)==3){
        ?>
            <div id="more_button" class="morebox" target="_blank" align="center" width="100%">
               <a id="" class="btnUcitajJos" style="display:block; "  onClick="ucitajjos()" >
               <i >Ucitaj jos</i>
               </a>
            </div>
        <?php } ?>
    </td>
  </tr>
  <?php } ?>
                       
</table>
                <br/> <br/>  
                <br/> 
               
               <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>   
                      
              
              <br/> <br/> 
              
                                  
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
   

</body>
<!-- InstanceEnd -->
</html>


