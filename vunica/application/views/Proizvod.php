
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
           <?php include('/../JavaScript/PopUp2.js'); ?>
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
            $(document).ready(function ( ) {
                var num_messages = <?= $num_messagesp ?>;
                var loaded_messages = 0;
                $("#more_button").click(function () {
                    loaded_messages += 3;
                    
                    $.get("http://localhost/vunica.com/vunica/index.php/proizvod/get_messages/" + "
                        <?php
                        foreach ($podacip as $red) {
                        echo $red->IDProizvod;}
                        ?>
                        " + "/" + loaded_messages, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_messages >= num_messages - 3)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });
            });
            
     <?php
    foreach ($podacip as $red) {
    $user = $red->UserName;
    $idproizvod = $red->IDProizvod;
}
   $status = "Admin";
   $usersession = $this->session->userdata('UserName');
   ?>  
   
   $(document).ready(function () {
         

        <?php if ($this->session->UserName != '' && $this->session->UserName == $user) { ?>
                    $('#obrisiprijavip').html("Obrisi proizvod");
                    //$('#obrisiprijavip').click(obrisi); PREPRAVITI
        <?php }
              else if ($this->session->UserName != '' && $this->session->Status == $status) { ?>
                    $('#obrisiprijavip').html("Obrisi video");
        <?php }
              else if ($this->session->UserName != '' && $this->session->UserName !== $user) { ?>
                    //  $('#obrisiprijavip').click(prijavi_proizvod); PREPRAVITI
        <?php }       
              else { ?>
                    $('#prijaviobrisi').click(prikazi_registraciju);
        <?php } ?>
            
        <?php if($this->session->BrojArtikala == 0) {?>
           //BRISANJE IZ BAZE
        <?php } ?>
            });
            
            sessionStorage.setItem('Garderoba', "");
            sessionStorage.setItem('Dodaci', "");
            sessionStorage.setItem('Igracke', "");
            sessionStorage.setItem('Ostalo', "");
            sessionStorage.setItem('Datum', "");
            sessionStorage.setItem('Naziv', "");
            sessionStorage.setItem('CenaOd', "");
            sessionStorage.setItem('CenaDo', "");
            sessionStorage.setItem('Vunica', "");
            sessionStorage.setItem('Konci', "");
            sessionStorage.setItem('Igle', "");
            sessionStorage.setItem('MatOstalo', "");
            sessionStorage.setItem('PGarderoba', "");
            sessionStorage.setItem('PDodaci', "");
            sessionStorage.setItem('PIgracke', "");
            sessionStorage.setItem('POstalo', "");
            sessionStorage.setItem('PDatum', "");
            sessionStorage.setItem('PNaziv', "");
            sessionStorage.setItem('PCena', "");    
            
             $(document).ready(function () {
                $('#kategorija').click(function () {
                    $src = $.trim($('#kategorija').html());
                   

                    if ($src === 'PGarderoba') {
                        sessionStorage.setItem("PGarderoba", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall1p"
                        }).done(function () {
                        });
                    } else if ($src === 'PDodaci') {
                        sessionStorage.setItem("PDodaci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall2p"
                        }).done(function () {
                        });
                    } else if ($src === 'PIgracke') {
                        sessionStorage.setItem("PIgracke", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall3p"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Igle') {
                        sessionStorage.setItem("Igle", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall4p"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Konci') {
                        sessionStorage.setItem("Konci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall5p"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Vunica') {
                        sessionStorage.setItem("Vunica", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall6p"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'POstalo') {
                        sessionStorage.setItem("POstalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Proizvod/unsetall7p"
                        }).done(function () {
                        });
                    }
                });
            });
            
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
       include ("Odluka.php");
       include ("PrijavaProizvoda.php");
       include ("PrijavaKomentar.php");
       include ("brisanjesesijestrikarnica.php");
    ?>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
               <?php 
               $argumenti;
               foreach ($podacip as $red) {
                ?>
                <?php
                $argumenti = $red->IDProizvod;
            }
               ?>
               
			  <!-- InstanceBeginEditable name="Body" -->
              <br/> <br/> <br/> <br/> <br/> <br/>           
                   <?php 
                echo form_open("Proizvod/postavljanje"); 
                ?>   
              <input name="arg" value='<?php $argumenti;?>'/>
                   
                   <table align="center" border="0" width="70%">
  <th colspan="2" align="left"> &nbsp; &nbsp;<font class = "naslovObican" name="ime">
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
      <td height="80%" width="60%">
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
      <td width="60%">
    <p><font class = "naslovObican">Količina:  
    <input type=test size=10 id='v' name='v' class="tekstObican" value='0'/>
    <input type=button value='-' class="dugme" style="cursor: pointer;" onclick='javascript:process(-1)'/>
    <input type=button value='+' class="dugme" 
   onmouseover="" style="cursor: pointer;" onclick='javascript:process(1)'/>
    </font></p>
    </td>
  </tr>
  <tr>
      <td width="60%">
    <br /> <br /> <br />
       <script>
       <?php if($this->session->UserName != '') {?>
       </script>
    <a href="http://localhost/vunica.com/vunica/index.php/Proizvod/postavljanje/$argument" style="cursor: pointer;" class="dugme" name="Stavi" onclick="prikazi_odluku()">Stavi u ceger</a>
       <script>
       <?php } else { ?>
       </script>
            <?php 
               $argument;
               foreach ($podacip as $red) {
                ?>
                <?php
                $argument = $red->Naziv;
                }
            ?>
    <!--onclick="prikazi_registraciju()"-->
    <a href="http://localhost/vunica.com/vunica/index.php/Proizvod/postavljanje/$argument" style="cursor: pointer;" class="dugme" name="Stavi">Stavi u ceger</a>
       <script>
       <?php } ?>
       </script>
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
        <script>
        <?php if ($this->session->UserName != '') {?>
        </script>    
    <input type="button" style="cursor: pointer;" onclick="prikazi_prijavu_proizvoda()" class="dugme" name="Prijavi" value="Prijavi proizvod"/>
    &nbsp; &nbsp;
        <script>
        <?php } else { ?>
        </script>
    <input type="button" style="cursor: pointer;" onclick="prikazi_registraciju()" class = "dugme" value="Prijavi proizvod"/>
        <script>
        <?php } ?>
        </script>
    </td>
  </tr>
   <!--Ovaj deo koda mozda nije uredu zbog rasporeda tr i td -->
   <!-- PISANJE KOMENTARA-->
    <?php
    $attributes = array('id' => 'formaKomentarProizvod', 'UserName' => $user, 'IDProizvod' => $idproizvod);
    echo form_open("Proizvod/komentar", $attributes);
    ?>
    <tr>
      <td colspan="2" align="center">
        <br /><textarea  value="<?php echo set_value('Tekst'); ?>" name="Tekst" maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify;" placeholder="Napisite komentar" class="tekstPoljeKomentar" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea><br>
            <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatak">400</font></font>                                      
            <tr>
                <td align="center" width="40%">  
                  <script>
                    <?php
                    if ($this->session->UserName != '' ) { ?>//ako je korisnik prijavljen
                  </script>
                    <a  class = "dugme" onclick="document.forms['formaKomentarVideo'].submit()" > Postavi </a> 
                  <script>
                    <?php } else { ?> //ako gost pristupa sajtu
                  </script>
                    <a onclick="prikazi_registraciju()" class = "dugme" > Postavi </a>
                  <script>
                    <?php } ?> 
                  </script>                             
                </td>
                <td align="center" width="50%"> <a  class="dugme"  onclick="odustani()"> Odustani </a> 
                </td>
            </tr>
                <input type="hidden" name="UserName" id="UserName"  value="<?php echo $usersession ?>"/>
                <input type="hidden" name="IDVideo" id="IDProizvod"  value="<?php echo $idproizvod ?>"/>
      </td>
    </tr>
   <!--KRAJ POSTAVLJANJA KOMENTARA-->
                       
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
              <a href="#" onclick="prikazi_prijavu_komentara()" class="prijaviKomentar">Prijavi komentar</a>
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
           <?php echo form_close(); ?>   
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



