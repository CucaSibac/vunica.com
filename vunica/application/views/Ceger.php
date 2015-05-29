<!-- Ivana Lisanin 531/12 -->


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
        <?php include '/../CSS/Ceger (1366x768).css'; ?>
    </style>
    
    <style media="screen and (min-device-width: 1401px)">
        <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
        <?php include '/../CSS/Template (1920x1080).css'; ?>
        <?php include '/../CSS/Pop up (1920x1080).css'; ?>
        <?php include '/../CSS/Tekst (1920x1080).css'; ?>
        <?php include '/../CSS/Dugme (1920x1080).css'; ?>
        <?php include '/../CSS/Ceger (1920x1080).css'; ?>
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
        include("PrijavaProizvoda.php");
        include("brisanjesesije.php");
        include("Upozorenje.php");
    ?>

    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
            <!-- InstanceBeginEditable name="Body" -->

              <br/> </br> </br> </br> </br>
              
              <?php 
                echo form_open("Ceger/kupi"); 
              ?>
           
               <p align="center">
                    <font class="naslovObican">
                        Ceger
                    </font>
               </p>
           
               </br> </br> </br>
              
                <!-- Pocetna linija-->
                <table align="center" width="60%">
                  <tr>
                    <td width="60%" align="left" style="padding-left:5%;">
                        <font class="tekstObican">
                            Proizvod:
                        </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          Količina:
                      </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          Cena:
                      </font>
                    </td>
                  </tr>
                </table>
           
           
                <table width = "60%" align = "center">
                    <tr>
                        <td>
                            <hr width = "100%" class = "linija"/> 
                        </td>
                    </tr>
                </table> 
           
           
                <!-- Lista proizvoda -->
                <?php
                    $niz = $this->session->Proizvodi;
                    $ukupnoKolicina = 0;
                    $ukupnoCena = 0;
                    if($niz != ''){
                        if(count($niz) > 0){
                            $i = 0;
                            $duzina = count($niz);
                            //for(;$i < $duzina;$i++){
                               // $red = $niz[$i];
                            foreach ($niz as $red){
                ?>
           
                 <table align="center" width="60%">
                  <tr>
                    <td width="60%" align="left" style="padding-left:5%;">
                        <font class="tekstObican" style="padding-left:5%;">
                            <?php echo $red->ime; ?>
                        </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          <?php 
                            $kolicina = (int)($red->kolicina);
                            $ukupnoKolicina += $kolicina;
                            echo $red->kolicina; 
                          ?>
                      </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          <?php 
                            $cena = (int)($red->cena);
                            $kolicina = (int)($red->kolicina);
                            $ukupnoKolicina += ($kolicina * $cena);
                            echo $kolicina * $cena;
                          ?>
                      </font>
                    </td>
                  </tr>
                </table>
                
                <?php }}} else{ ?>
                
                <table width = "60%" align = "center">
                    <tr>
                        <td align = "center">
                            <br/> </br>
                            <font class = "tekstObican">
                                Postovani korisnice, trenutno nemate prozivoda u svom cegeru.
                            </font>
                            <br/> <br/> <br/>
                        </td>
                    </tr>
                </table> 
           
                <?php } ?>
           
                <table width = "60%" align = "center">
                    <tr>
                        <td>
                            <hr width = "100%" class = "linija"/> 
                        </td>
                    </tr>
                </table> 
                
                
                <?php
                    if($niz != ''){
                        if(count($niz) > 0){
                ?>
                
                <!-- Pocetna linija-->
                <table align="center" width="60%">
                  <tr>
                    <td width="60%" align="left" style="padding-left:5%;">
                        <font class="tekstObican">
                            Ukupno:
                        </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          <?php echo $ukupnoKolicina; ?>
                      </font>
                    </td>
                    <td width="20%" align="left" style="padding-left:5%;">
                      <font class="tekstObican">
                          <?php echo $ukupnoCena; ?>
                      </font>
                    </td>
                  </tr>
                </table>
                
                <?php }} ?>
                
                
                
            <!-- Forma sa podacima -->

              <br/> <br/> <br/>
              <table align="center" width="45%" >
                <tr>
                    <td>
                        <font class="tekstObican">
                            Vrsta kreditne kartice:
                        </font>
                    </td>
                    <td align="center">
                        <select id = "vrstaKartice" name = "vrstaKartice" class = "tekstForme">
                             <option value = "Visa" name = "Visa"> 
                                  Visa
                              </option>
                              <option value = "MasterCard" name = "MasterCard"> 
                                  MasterCard
                              </option>
                              <option value = "American Express" name = "AmericanExpress"> 
                                  American Express
                              </option>
                        </select> 
                    </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Broj kreditne kartice:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "karticabr" name = "karticabr" type = "text"  class = "tekstForme" maxlength = "16"
                           placeholder ="378282246310005"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Datum isteka:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "datumisteka" name = "datumisteka" type = "text"  class = "tekstForme" maxlength = "7"
                           placeholder = "mm/gggg"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Sigurnosni broj:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "sigurnosni" name = "sigurnosni" type = "text" class = "tekstForme" maxlength = "4"
                           placeholder = "0000"
                    />
                    
                    <br/>
                    
                    <?php if($Kartica != 0){ ?>
                        <font class = "greska"> 
                            Molimo Vas, pravilno unesite podatke o svojoj kartici! 
                        </font>
                    <?php } ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <br/> <br/> 
                    <font class="tekstObican">
                        Grad:
                    </font>
                  </td>
                  <td align="center">
                    <br/> <br/> 
                    <input id = "grad" name = "grad" type = "text"  class = "tekstForme" maxlength = "30"
                           placeholder = "Sibac"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Poštanski broj:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "postanski" name = "postanski" type = "text"  class = "tekstForme" maxlength = "10"
                           placeholder = "15000"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Ulica:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "ulica" name = "ulica" type = "text"  class = "tekstForme" maxlength = "40"
                           placeholder = "Sibacka deponija"
                    />      
                  </td>
                </tr>
                <tr>
                  <td>
                    <font class="tekstObican">
                        Broj:
                    </font>
                  </td>
                  <td align="center">
                    <input id = "brojulice" name = "brojulice" type = "text"  class = "tekstForme" maxlength = "10"
                           placeholder = "6"
                    />
                    
                    <br/>
                    
                    <?php if($Adresa != 0){ ?>
                        <font class = "greska"> 
                            Molimo Vas, unesite podatke o svojoj adresi! 
                        </font>
                    <?php } ?>
                    
                  </td>
                </tr>
              </table>

              <br/> <br/> <br/> <br/> <br/>
              
              <p align="center">
                  
                <input type = "submit" class = "dugme" value = "Obavi kupovinu"/>
                
                <a class = "dugme" target="_parent" 
                     href="http://localhost/vunica.com/vunica/index.php/Pijaca">
                    Vrati se na pijacu
                </a>
              
              </p>
              
              <?php echo form_close(); ?>
              
              <br/> <br/> <br/> <br/> <br/> <br/>

                                  
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>
    
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
    
    </body>
<!-- InstanceEnd -->
</html>



