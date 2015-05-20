<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>
        <?php 
           foreach($korisnici as $red){
              echo $red->UserName;
           }
        ?>     
    </title>
    
    <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
     <style media="screen and (max-device-width: 1400px)">
          <?php include '/../CSS/Template (1366x768).css'; ?>
          <?php include '/../CSS/Pop up (1366x768).css'; ?>
          <?php include '/../CSS/Tekst (1366x768).css'; ?>
          <?php include '/../CSS/Dugme (1366x768).css'; ?>
          <?php include '/../CSS/Profil - Editovanje (1366x768).css'; ?>
      </style>
      <style media="screen and (min-device-width: 1401px)">
        <?php include '/../CSS/Template (1920x1080).css'; ?>
        <?php include '/../CSS/Pop up (1920x1080).css'; ?>
        <?php include '/../CSS/Tekst (1920x1080).css'; ?>
        <?php include '/../CSS/Dugme (1920x1080).css'; ?>
        <?php include '/../CSS/Profil - Editovanje (1920x1080).css'; ?>
      </style>
      <script>
        <?php include('/../JavaScript/PopUp.js');?>
        <?php include('/../JavaScript/Footer.js');?>
        <?php include('/../JavaScript/Video.js');?>
      </script>
   
  <!-- InstanceEndEditable -->
  
  <!-- InstanceBeginEditable name="Head" -->

 
  <!-- InstanceEndEditable -->
</head>

<body onLoad="izracunaj();" onresize="izracunaj();" id="body">

    <!-- Header -->
    <div id = "headerOkvir">
      <table id = "header">
          <tr>
          	<td width = "6%">
                  <!-- Prazna celija -->
            </td>
            <td id = "logoPolje">
                <img src="http://localhost/Slike/Vunica/vunica.png" id = "logo" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/IndexStrana/index', '_parent')">
            </td>
            <td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Pocetna/index', '_parent')">
                <font class = "opcijeMenija"> Početna </font>
            </td>
            <td width = "1%" class="poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Strikarnica/index', '_parent')">
                <font class = "opcijeMenija"> Štrikarnica </font>
            </td>
            <td width = "1%" class = "poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Pijaca/index', '_parent')">
                <font class = "opcijeMenija"> Pijaca </font>
            </td>
            <td>
                <!-- Prazna celija bez zadate sirine -->
            </td>
            <td id = "poljePrijava">
              <!-- InstanceBeginEditable name="Prijava" -->
              <font class = "opcijeMenija" style="white-space: nowrap;">
                <?php
                    if(strcmp($red->UserName, "") == 0){
                ?>
                    <font onclick="prikazi_prijavu()">Prijava</font>
                    /
                    <font onclick="prikazi_registraciju()">Registracija</font>
                <?php } else{ ?>
                    <font onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/ProfilEditovanje/index', '_parent')">
                        <?php
                            echo $red->UserName;
                        ?>
                    </font>
                    /
                    <font> Odjava </font>
                <?php } ?>
              </font> 
              <!-- InstanceEndEditable -->
            </td>
            <td id = "cegerPolje">
              <!-- InstanceBeginEditable name="Ceger" -->
              <?php
                    if(strcmp($red->UserName, "") != 0){
               ?>
              <img src="http://localhost/Slike/Ceger/Ceger.png" id = "ceger" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Ceger/index', '_parent')">  
              <?php }?>
              <!-- InstanceEndEditable -->
            </td>
          </tr>
      </table>
    </div>
    
    <!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve()">
    </div>
    
    <!--Prozor za prijavljivanje-->
   <div id = "prijava">
      <div class = "naslovPrijava"> Prijava </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="PrijavaDiv" -->    
      <form style="height:100%;" name="prijava" action="prijava.php" method = "post">
        <table class="tabelaPrijava">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Molimo vas da unesete sledece podatke:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="email1" id="email1" placeholder="E-mail adresa" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="password" name="password1" id="password1" placeholder="Lozinka" class="inputPopUp"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>                
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="prijavi_se()"> Prijavi se!</div> </td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>               
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
              Zaboravili ste lozinku? 
              <a href="javascript:prikazi_zaboravljenu_lozinku()" class="linkPopUp"> Prijavite problem </a>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
              Nemate profil?
              <a href="javascript:prikazi_registraciju()" class="linkPopUp"> Registrujte se </a>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>    
        </table>
      </form>
      <!-- InstanceEndEditable -->
    </div>
    
    <!--Prozor za povratak lozinke-->
   <div id="zaboravljenaLozinka">
      <div class="naslovZL"> Zaboravili ste lozinku? </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="ZLDiv" -->    
      <form style="height:100%;" name="zaboravljenaLozinka" action="ZaboravljenaLozinka.php" method = "post">
        <table class="tabelaZL">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Molimo vas da unesete svoju e-mail adresu</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="email2" id="email2" placeholder="E-mail adresa" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="povrati_lozinku()"> Posalji</div> </td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="prikazi_prijavu()"> Odustani</div></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
        </table>
      </form>
      <!-- InstanceEndEditable -->
    </div>
    
    <!--Prozor za registriovanje-->
    <div id="registracija">
      <div class="naslovRegistracija"> Registracija </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="RegistracijaDiv" -->    
      <form style="height:100%;" name="Registracija" action="Registracija.php" method = "post">
        <table class="tabelaRegistracija">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Molimo vas da unesete sledece podatke:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
           <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="korIme" id="korIme" placeholder="Korisnicko ime" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="ime" id="ime" placeholder="Ime i prezime" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="email3" id="email3" placeholder="E-mail adresa" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="email4" id="email4" placeholder="Potvrda e-mail adrese" class="inputPopUp" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="password" name="password2" id="password2" placeholder="Lozinka" class="inputPopUp"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="password" name="password3" id="password3" placeholder="Potvrda lozinke" class="inputPopUp"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
           <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Otvaranjem naloga pristajete na 
            <a href="#" class="linkPopUp"> uslove koriscenja</a>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="registruj_se()"> Registruj se!</div> </td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Vec imate nalog? 
            <a href="javascript:prikazi_prijavu()" class="linkPopUp"> Prijavite se</a>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>  
        </table>
      </form>
      <!-- InstanceEndEditable -->
    </div>
    
    <!--Prozor za obavestenja-->
    <div id="obavestenje">
      <div id="naslovObavestenje">Obavestenje</div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <table class="tabelaObavestenje">
        <tr>
          <td class="praznaCelijaPopUp">&nbsp;</td>
          <td><font id="tekstZaObavestenje">&nbsp; </font></td>
          <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>  
        <tr>
          <td class="praznaCelijaPopUp">&nbsp;</td>
          <td align="center"> <div class="dugmePopUp" onclick="ok()"> Ok</div> </td>
          <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
      </table>    
    </div>
  
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
            <!-- InstanceBeginEditable name="Body" -->  
              
              <br/> <br/> <br/> <br/> <br/>
              
              <?php
                foreach($korisnici as $red){
                    if(strcmp($red->Status, "Admin") == 0){
                        $status = 1;
                    } 
                    else{
                        if(strcmp($red->Pol, "Pletilja") == 0){
                            $status = 2;
                        } 
                        else{
                            $status = 3;
                        }
                    }
                }  
              ?>
              
              <?php if($status == 3){?>
                            
              <br/> <br/>
              
              <table id = "banerPolje" align = "center">
              	<tr>
                    <td width = "50%" align = "left" style = "padding-left:8%;">
                    	<font color = "#fffef4" size="6">
                        	Postanite PREMIUM
                        </font>
                        <br/> <br/>
                        <font class = "banerTekst">
                        	Specijalna ponuda!
                        </font>
                    </td>
                    <td width = "50%" align = "left" style = "padding-left:25%;">
                    	<font class = "banerTekst" style = "text-decoration:line-through;">
                            199€ 
                        </font>
                        <font class = "banerTekst" >
                            =>19€
                        </font>
                    </td>
                </tr>
               </table>
               
              <br/>
              
              <?php } ?>
              
              <form id = "profilEditovanje" action="ProfilEditovanje.php" method="post">
              
                  <table width = "90%" align = "center">                 	
                    <tr>
                        <td width = "50%" align = "center">
                        	</br> </br>
                            <img id = "profilnaSlika" 
                                src="<?php 
                                       foreach($korisnici as $red){
                                          echo $red->Slika;
                                       }  
                                      ?>
                            ">
                        </td>
                        <td width = "50%" align = "left" valign = "middle">
                            <font class = "naslovObican"> 
                                <?php 
                                   foreach($korisnici as $red){
                                      echo $red->UserName;
                                   }  
                                ?>
                            </font>
                        	</br> </br> <br/>
                            <font class = "tekstObican"> Status: </font>
                            <font class = "tekstIskosen">
                                <?php 
                                   foreach($korisnici as $red){
                                      if($status == 1){echo "Administrator";}
                                      else{
                                          if($status == 2){echo "Klub pletilja";}
                                          else{echo "Klub 5 klupka";}
                                      }
                                   }  
                                ?>
                            </font>
                            <br/> <br/>
                            <font class = "tekstObican"> Godine: </font>
                            <input id = "godine" class = "tekstForme" type = "text" size = "10" maxlength = "10"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Godine;
                                           }  
                                          ?>
                            "/>
                            <div id = "greskaGodine">
                                <br/>
                                <font class = "greska"> Molim Vas, ispravno unesite Vase godine! </font>
                            </div>
                            <br/> <br/>
                            <font class = "tekstObican" size = "30"> Pol: </font>
                            <select id = "pol" class = "tekstForme">
                              <?php
                                foreach($korisnici as $red){
                                    if(strcmp($red->Pol, "Musko") == 0){
                                        $opt = 1;
                                    } 
                                    else{
                                        if(strcmp($red->Pol, "Zensko") == 0){
                                            $opt = 2;
                                        } 
                                        else{
                                            $opt = 3;
                                        }
                                    }
                                }  
                              ?>
                              <option value = "musko"
                                <?php
                                    if($opt == 1){
                                ?>        
                                    selected    
                                <?php } ;?>
                              > Musko </option>
                              <option value = "zensko"
                                <?php
                                    if($opt == 2){
                                ?>        
                                    selected    
                                <?php } ;?>
                              > Zensko </option>
                              <option value = "nedefinisano"
                                 <?php
                                    if($opt == 3){
                                ?>        
                                    selected    
                                <?php } ;?>   
                              > Nedefinisano </option>
                            </select>
                            <br/> <br/>
                            <font class = "tekstObican"> Lokacija: </font>
                            <input id = "lokacija" class = "tekstForme" type = "text" size = "30" maxlength = "30"
                                   value="<?php 
                                             foreach($korisnici as $red){
                                                echo $red->Lokacija;
                                             }  
                                         ?>
                             "/>
                            <br/> <br/> <br/> <br/>
                            <a href = "#" class = "dugme"> Promeni sliku </a>
                            <div id = "greskaGodine">
                                <br/>
                                <font class = "greska"> Molim Vas, selektujte validan fajl! </font>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <br/> <br/>
                            <font class = "tekstObican"> Ime: </font>
                            <br/>
                        </td>
                        <td width = "50%" align = "left"  style = "padding:0 0 1% 0;">
                            <br/> <br/>
                            <input id = "ime" class = "tekstForme" type = "text" size = "20" maxlength = "20"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Ime;
                                           }  
                                          ?>
                            "/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Prezime: </font>
                            <br/> <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "prezime" class = "tekstForme" type = "text" size = "20" maxlength = "20"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Prezime;
                                           }  
                                          ?>
                            "/>
                            <br/> <br/>
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> E-mail adresa: </font>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "email" class = "tekstForme" type = "text" size = "40" maxlength = "40"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Email;
                                           }  
                                          ?>
                            "/>
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Potvrda adrese: </font>
                            <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "emailPotvrda" class = "tekstForme" type = "text" size = "40" maxlength = "40"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Email;
                                           }  
                                          ?>
                            "/>
                            <br/>
                        </td>
                    </tr>
                    <tr id = "greskaEmail">
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <font class = "greska"> Molim Vas, ispravno unesite novu e-mail adresu! </font>
                            <br/> <br/>   
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Lozinka: </font>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "lozinka" class = "tekstForme" type = "password" size = "40" maxlength = "40"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Sifra;
                                           }  
                                          ?>
                            "/>
                        </td>
                    </tr>
                    <tr>
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Potvrda lozinke: </font>
                            <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "lozinkaPotvrda" class = "tekstForme" type = "password" size = "40" maxlength = "40"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Sifra;
                                           }  
                                          ?>
                            "/>
                            <br/>
                        </td>
                    </tr>
                    <tr id = "greskaLozinka">
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <font class = "greska"> Molim Vas, ispravno unesite novu lozinku! </font>
                            <br/> <br/> <br/>   
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "2" width = "100%" align = "center">
                            <font class = "tekstObican"> O meni: </font>
                            <br/> <br/> 
                            <textarea id = "limitedtextarea" class = "tekstPolje" maxlength = "400" onKeyDown = "limitText(400);" onKeyUp = "limitText(400);"
                              placeholder = "<?php 
                                           foreach($korisnici as $red){
                                              echo $red->Opis;
                                           }  
                                          ?>      
                            "></textarea>
                            <br/>
                            <font class="tekstObican">
                            	Preostalo karaktera: 
                            </font>
                            <font id="ostatak" class="tekstIskosen">
                            	400
                            </font>
                            
                            <br/> <br/> <br/> <br/> <br/>
                            <a href = "http://localhost/vunica/CodeIgniter-3.0.0/index.php/ProfilEditovanje/promeni" target = "_parent" class = "dugme"> Sacuvaj </a>
                            <a href = "http://localhost/vunica/CodeIgniter-3.0.0/index.php/Profil/ibdex" target = "_parent" class = "dugme"> Odustani </a>
                        </td>
                    </tr>   
                  </table>
                  
                  <br/> <br/> <br/> <br/> <br/>  <br/> 
              </form>
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
   
    

	<!-- Footer -->
    <div id="footer" >
      
      <!-- Nevidljivi deo -->
      <table id = "footerGornji" onmouseover="show()" onmouseout="hide()" align="center">
      	<tr >
            <td width="10%" valign = "top" align = "right">
            	<!-- Prazna celija --> 
                &nbsp;
            </td>
        	<td class = "footerPolje" >
            	<font> Kontakt:</font>
                <br/>
                <font> Telefon: +38163/666-666</font>
                <br/>
                <font> E-mail: </font>
                <a href="mailto:vunica.com@opatija.com" target="_top" class="footerlink"> vunica.com@opatija.com </a>
                <br/>
                <font> Faks: +666-666-666</font>
            </td>
            <td id = "klupkoPolje" >
            	<img src = "http://localhost/Slike/Vunica/Klupko.png" id = "klupko"/>
                <br/>
                <font id = "klupkoTekst"> vunica.com </font>
                <br/> <br/> <br/>
            </td>           
            <td  class = "footerPolje" >
            	<font>Info:</font>
                <br/>
                <font>Kancelarija: Bogu iza nogu 2</font>
                <br/>
                <font>Pronađite nas na:</font>
                <br/>
                <a href = "https://www.facebook.com/" target = "_blank" style = "text-decoration:none">
                	<img src = "http://localhost/Slike/Footer/Facebook 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                </a>
                <a href = "https://twitter.com/" target = "_blank" style = "text-decoration:none">
                	<img src = "http://localhost/Slike/Footer/Twitter 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                </a>
				<a href = "https://www.youtube.com/" target = "_blank" style = "text-decoration:none">
                	<img src = "http://localhost/Slike/Footer/YouTube 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                </a>
            </td>
            <td width = "10%" valign = "top" align = "right">
            	<!-- Prazna celija --> 
                &nbsp;
            </td>
        </tr>
      </table>         
        
      <!-- Vidljivi deo -->
      <table id = "footerDonji" onmouseover="show()">
          <tr>
              <td width = "15%" align = "left">
                  <!-- Bivsa prazna celija -->                  
                  <img id = "levaStrelica" class = "strelica" src = "http://localhost/Slike/Footer/Strelica.png">
              </td>
              <td width = "15%">
              	<font> 2015 </font>
              </td>
              <td>
              	<font size = "3"> | </font>
              </td>
              <td width = "15%">
              	<font> All rights reserved </font>
              </td>
              <td>
              	<font size = "3"> | </font>
              </td>
              <td width = "15%">
              	<font> SI3PSI </font>
              </td>
              <td>
              	<font size = "3"> | </font>
              </td>
              <td width = "15%">
              	<font> ETF </font>
              </td>
              <td width = "15%" align = "right">
              	<!-- Bivsa prazna celija --> 
                <img id = "desnaStrelica" class = "strelica" src = "http://localhost/Slike/Footer/Strelica.png">
              </td>
          </tr>
      </table>
      
  </div>

</body>
<!-- InstanceEnd -->
</html>
