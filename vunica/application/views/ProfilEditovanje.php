<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>
        <?php
            if($this->session->UserName != ''){
                echo $this->session->UserName;
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
        <?php include('/../JavaScript/Postavljanje Proizvoda.js'); ?>
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
        include("Upozorenje.php");
        include("brisanjesesije.php");
    ?>
  
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
            <!-- InstanceBeginEditable name="Body" -->  
              
              <br/> <br/> <br/> <br/> <br/>
              
              <!-- Odredjivanje statusa korisnika -->
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
              
              <!-- Baner -->
              
              <?php if($status == 3){?>
                            
              <br/> <br/>
              
              <a class="link" href="http://localhost/vunica.com/vunica/index.php/Pocetna/premiumProfil">
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
              </a>
                  
              <br/>
              
              <?php } ?>
              
              
              <!-- Forma sa podacima -->
              
              <?php 
                $attributes = array('id' => 'formaProfilEditovanje');
                echo form_open("ProfilEditovanje/opcija", $attributes); 
              ?>
              
              <input type="hidden" name="opt" id="opt" value="1" />
              
                  <table width = "90%" align = "center">                 	
                    <tr>
                        <td width = "50%" align = "center">
                            </br> </br>
                        
                            <!-- Profilna slika -->   
                            <img id = "profilnaSlika" name = "profilnaSlika" src="<?php echo $Profilna;?>"/>
                        
                        </td>
                        <td width = "50%" align = "left" valign = "middle">
                            
                            <!-- UserName -->
                            <font class = "naslovObican"> 
                                <?php echo $this->session->UserName; ?>
                            </font>
                            
                            </br> </br> <br/>
                            
                            <!-- Status -->
                            <font class = "tekstObican"> Status: </font>
                            <font class = "tekstIskosen">
                                <?php 
                                      if($status == 1){echo "Administrator";}
                                      else{
                                          if($status == 2){echo "Klub pletilja";}
                                          else{echo "Klub 5 klupka";}
                                      }  
                                ?>
                            </font>
                            
                            <br/> <br/>
                            
                            <!-- Godine -->
                            <font class = "tekstObican"> Godine: </font>
                            <input id = "godine" name = "godine" class = "tekstForme" type = "text" maxlength = "10"
                                   size = "<?php echo strlen($this->session->Godine);?>"
                                   placeholder="<?php echo $this->session->Godine; ?>"/>
                            
                            <?php if($Godine != 0){ ?>
                            <div id = "greskaGodine">
                                <br/>
                                <font class = "greska"> Molim Vas, ispravno unesite Vase godine! </font>
                            </div>
                            <?php } ?>
                            
                            <br/> <br/>
                            
                            <!-- Pol -->
                            <font class = "tekstObican" size = "30"> Pol: </font>
  
                            <select id = "pol" name = "pol" class = "tekstForme">
                              <?php
                                    $opt = 0;
                                    if(strcmp($this->session->Pol, "Musko") == 0){
                                        $opt = 1;
                                    } 
                                    else{
                                        if(strcmp($this->session->Pol, "Zensko") == 0){
                                            $opt = 2;
                                        } 
                                        else{
                                            if(strcmp($this->session->Pol, "Nedefinisano") == 0){
                                                $opt = 3;
                                            } 
                                        }
                                    }  
                              ?>
                              <option value = "Musko" name = "musko"
                                <?php
                                    if($opt == 1){
                                ?>        
                                    selected    
                                <?php } ;?>
                              > Musko </option>
                              <option value = "Zensko" name = "zensko"
                                <?php
                                    if($opt == 2){
                                ?>        
                                    selected    
                                <?php } ;?>
                              > Zensko </option>
                              <option value = "Nedefinisano" name = "nedefinisano"
                                 <?php
                                    if($opt == 3){
                                ?>        
                                    selected    
                                <?php } ;?>   
                              > Nedefinisano </option>
                            </select>
                            
                            <br/> <br/>
                            
                            <!-- Lokacija -->
                            <font class = "tekstObican"> Lokacija: </font>
                            <input id = "lokacija" name = "lokacija" class = "tekstForme" type = "text" maxlength = "30"
                                   size = "<?php echo strlen($this->session->Lokacija);?>"
                                   placeholder = "<?php echo $this->session->Lokacija; ?>"/>
                            
                            <br/> <br/> <br/>
                            
                            <!-- Menjanje slike -->
                            <input type = "file" name = "userfile" class = "dugme"
                                   onchange="option(1);document.forms['formaProfilEditovanje'].submit();"                           
                            />  
                            
                            <br/> <br/>
                            
                            <a class="dugme"  onclick="option(3);document.forms['formaProfilEditovanje'].submit();">
                                Obrisi sliku
                            </a>
                            
                            <?php if($Slika != 0){ ?>
                            <div id = "greskaGodine">
                                <br/>
                                <font class = "greska"> Molim Vas, selektujte validan fajl! </font>
                            </div>
                            <?php } ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <!-- Ime i prezime -->
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <br/> <br/>
                            <font class = "tekstObican"> Ime i prezime: </font>
                            <br/> <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <br/> <br/>
                            <input id = "imeprezime" name = "imeprezime" class = "tekstForme" type = "text" maxlength = "20"
                                   size = "<?php echo strlen($this->session->ImePrezime);?>"
                                   placeholder="<?php echo $this->session->ImePrezime; ?>"/>
                            <br/> <br/>
                        </td>
                    </tr>
                    <tr>
                        <!-- E-mail adresa -->
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> E-mail adresa: </font>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "email" name = "email" class = "tekstForme" type = "text" maxlength = "40"
                                   size = "<?php echo strlen($this->session->Email);?>"
                                   placeholder="<?php echo $this->session->Email; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <!-- Potvrda E-mail adrese -->
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Potvrda adrese: </font>
                            <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "emailPotvrda" name = "emailPotvrda" class = "tekstForme" type = "text" maxlength = "40"
                                   size = "<?php echo strlen($this->session->Email);?>"
                                   placeholder="<?php echo $this->session->Email; ?>"/>
                            <br/>
                        </td>
                    </tr>
                      
                    <tr id = "greskaEmail">
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <?php if($Email == 1){ ?>
                            <font class = "greska"> Molim Vas, ispravno unesite novu e-mail adresu! </font>
                            <br/> <br/>  
                            <?php } ?>
                            <?php if($Email == 2){ ?>
                            <font class = "greska"> Uneli ste vec postojecu e-mail adresu! </font>
                            <br/> <br/>  
                            <?php } ?>
                        </td>
                    </tr>
                      
                    <tr>
                        <!-- Lozinka -->
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Lozinka: </font>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "lozinka" name = "lozinka" class = "tekstForme" type = "password" size = "25" maxlength = "40"
                                   placeholder="<?php echo $this->session->Lozinka; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <!-- Potvrda lozinke -->
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                            <font class = "tekstObican"> Potvrda lozinke: </font>
                            <br/>
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <input id = "lozinkaPotvrda" name = "lozinkaPotvrda" class = "tekstForme" type = "password" size = "25" maxlength = "40"
                                   placeholder="<?php echo $this->session->Lozinka; ?>"/>
                            <br/>
                        </td>
                    </tr>
                      
                    <tr id = "greskaLozinka">
                        <td width = "50%" align = "right" style = "padding:0 3% 1% 0;">
                        </td>
                        <td width = "50%" align = "left" style = "padding:0 0 1% 0;">
                            <?php if($Lozinka != 0){ ?>
                            <font class = "greska"> Molim Vas, ispravno unesite novu lozinku (minimalno 4 karaktera)! </font>
                            <br/> <br/> <br/>   
                            <?php } ?>
                        </td>
                    </tr>
                      
                    <tr>
                        <!-- Opis -->
                        <td colspan = "2" width = "100%" align = "center">
                            <font class = "tekstObican"> O meni: </font>
                            <br/> <br/> 
                            <textarea id = "limitedtextarea" name = "opis" class = "tekstPolje" maxlength = "400" onKeyDown = "limitText(400);" onKeyUp = "limitText(400);"
                                      placeholder = "<?php echo $this->session->Opis; ?>"></textarea>
                            <br/>
                            <font class="tekstObican">
                            	Preostalo karaktera: 
                            </font>
                            <font id="ostatak" class="tekstIskosen">
                            	400
                            </font>
                            
                            <br/> <br/> <br/> <br/> <br/>
                            <a class="dugme" 
                               onclick="option(2);
                                        document.forms['formaProfilEditovanje'].submit();"
                            > 
                                Sacuvaj
                            </a>
                            <a class = "dugme" href="http://localhost/vunica.com/vunica/index.php/Profil"> 
                                Odustani
                            </a>
                        </td>
                    </tr>   
                  </table>
                  
                  <?php echo form_close(); ?>
                  
                  <br/> <br/> <br/> <br/> <br/>  <br/> 
              
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
    
</body>
<!-- InstanceEnd -->
</html>

<?php 
if($this->session->flashdata('reg') == 1){
    echo "<script language=\"javascript\">prikazi_registraciju();</script>";
    $this->session->set_flashdata('reg', 0);
}
?>
<?php 
    if($this->session->flashdata('pri') == 1){
        echo "<script language=\"javascript\">prikazi_prijavu();</script>";
        $this->session->set_flashdata('pri', 0);
    }
?>
<?php 
    if($this->session->flashdata('zl') == 1){
        echo "<script language=\"javascript\">prikazi_zaboravljenu_lozinku();</script>";
        $this->session->set_flashdata('zl', 0);
    }
?>
