<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>
        <?php
            if($UserName != ''){
                echo $UserName;
            }
            else{
                echo "Editovanje profila";
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
                            <font class = "tekstObican"> Ime i prezime: </font>
                            <br/> <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <br/> <br/>
                            <input id = "prezime" class = "tekstForme" type = "text" size = "20" maxlength = "20"
                                   value="<?php 
                                           foreach($korisnici as $red){
                                              echo $red->ImePrezime;
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
                            <a href = "http://localhost/vunica.com/vunica/index.php//ProfilEditovanje/promeni" target = "_parent" class = "dugme"> Sacuvaj </a>
                            <a href = "http://localhost/vunica.com/vunica/index.php//Profil/ibdex" target = "_parent" class = "dugme"> Odustani </a>
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
    
</body>
<!-- InstanceEnd -->
</html>
