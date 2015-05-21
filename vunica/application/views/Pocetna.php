<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <!-- Teodora Aleksic, 391/12 -->
  
    <title>Početna</title>     
    
   <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
  <style media="screen and (max-device-width: 1400px)">
  <?php include '/../CSS/Template (1366x768).css'; ?>
  <?php include '/../CSS/Pop up (1366x768).css'; ?>
  <?php include '/../CSS/Tekst (1366x768).css'; ?>
  <?php include '/../CSS/Dugme (1366x768).css'; ?>
  <?php include '/../CSS/Pocetna (1366x768).css'; ?>
  <?php include '/../CSS/Paragraf (1366x768).css'; ?>
  </style>
  <style media="screen and (min-device-width: 1401px)">
    <?php include '/../CSS/Template (1920x1080).css'; ?>
    <?php include '/../CSS/Pop up (1920x1080).css'; ?>
    <?php include '/../CSS/Tekst (1920x1080).css'; ?>
    <?php include '/../CSS/Dugme (1920x1080).css'; ?>
    <?php include '/../CSS/Pocetna (1920x1080).css'; ?>
    <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
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
              <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
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
              
              <!-- Dobrodoslica -->
              <?php
              // Ucitava odgovarajuci deo strane prema statusu ulogovane osobe
                if($status != 0){
              ?>
              
              <div width = 100% align = "center">
              	<font class = "naslovObican">
                	Dobrodošli
                </font>
                <br/>
                <font class = "naslovIskosen">
                	<?php echo $this->session->UserName; ?>
                </font> 
               </div>
              
              <?php
                }
                else{  
              ?>
              
              <div width = 100% align = "center">
              	<font class = "naslovObican">
                    ŠTRIKANJE
                </font>
                <br/>
                <font class = "naslovIskosen">
                    je
                </font> 
                <br/>
                <font class = "naslovObican">
                    UMETNOST
                </font>
               </div>
              
              <?php
                }  
              ?>
              
              <br/> <br/> <br/>            
              
              <!-- Dnevni red -->
              <?php
              // Ucitava odgovarajuci deo strane prema statusu ulogovane osobe
                if($status == 1){
              ?>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td width = "100%">
                    	<font class = "tekstObican">
                        	Od kad ste bili poslednji put na sajtu desile su se nove aktivnosti. Danas za Vas na dnevnom redu imamo nove:
                        </font>
                        <br/> <br/> 
                    </td>
                </tr>
                <tr>
                    <td width = "100%">
                    	<font class = "tekstObican"> Prijave: </font>
                        <a href = "#Prijave" class = "link">
                        	<font class="tekstIskosen"> 3 </font>
                        </a>
                        <br/>
                        <font class = "tekstObican"> Korisnike: </font>
                        <a href = "#Korisnici" class = "link">
                        	<font class="tekstIskosen"> 2 </font>
                        </a>
                        <br/>
                        <font class = "tekstObican"> Videe: </font>
                        <a href = "#Videi" class = "link">
                        	<font class="tekstIskosen"> 5 </font>
                        </a>
                        <br/>
                        <font class = "tekstObican"> Proizvode: </font>
                        <a href = "#Proizvodi" class = "link">
                        	<font class="tekstIskosen"> 4</font>
                        </a>
                    </td>
                </tr>
              </table>
              
              <?php
                }  
                else{ if($status == 2 || $status == 3){
              ?>
              
                <table width = "60%" align = "center">
                    <tr>
                     <td width = "100%">
                        <font class = "tekstObican">
                            Neki tekst bla bla bla....
                        </font>
                        <br/> <br/> 
                    </td>
                    </tr>
                </table>
              
              <?php
                }  
                else{
              ?>
              
              <!-- Uokviren paragraf -->
              <br/> <br/>
              <div class = "paragraf">
                <!-- Gornja linija -->
              	<table width = "60%" align = "center">
                	<tr>
                    	<td width = "46%">
                        	<hr width = "100%" class = "linija"/>
                        </td>
                        <td width = "8%" align="center">
                        	<img src = "http://localhost/Slike/Linija/Ikonica.png" class = "ikonica">
                        </td>
                        <td width = "46%">
                        	<hr width = "100%" class = "linija"/>
                        </td>
                    </tr>
                </table>             
              	<br/> <br/>           
                <!-- Deo za tekst -->
                <table width = "60%" align = "center">
                	<tr>
                    	<td width = "100%" align = "left">
                          <!-- Ovde ide tekst -->
                          
                          <font class = "tekstObican">
                              I tako, jednog lepog dana, Teodora se prihvatila svojih igala i pocela da strika. Strikala je i strikala ceo dan i noc. Na kraju je napravila dva lepa dzempercica, jedan par carapa (sa jednorozima) i kapicu za hladne zimske dane. Oh, kako joj je samo taj dan bio ispunjen!
                          </font>
                          <br/> <br/> <br/>
                          <font class = "tekstIskosen">
                              Ovaj tekst je jako bitan, inace ne bi bio ovako napisan.
                          </font>
                          
                          <!-- Kraj teksta -->
                		</td>
                	</tr>
                </table>       
                <br/> <br/>   
                <!-- Donja linija -->
              	<hr width = "60%" class = "linija"/>
              </div>           
              
              <?php
                } }
              ?>
              
              <br/> <br/>
              
              <p align = "center"> ------- Ako na dnevnom redu nema nista: ------- </p>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td width = "100%">
                    	<font class = "tekstObican"> Svaka Vam cast </font>
                        <font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> ! Danas na dnevnom redu nemate nista. Uzmite svoje igle u ruke i bacite se na strikanje! Cekamo Vas do narednog puta. :*
                        </font>
                        <br/> <br/> 
                    </td>
                </tr>
              </table>
              
              <br/> <br/> <br/> <br/> </br> <br/>
                
              <!-- Prijave -->
              
              <a name = "Prijave" class = "link"> </a>
              
              <table width = "60%" align = "center">
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<font class = "naslovObican"> Nove prijave: </font>
              			<br/>  
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<hr width = "100%" class = "linija"/>
              			<br/> 
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                        <font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> pa vi ste zmaj!  Nema prijava koje treba da pogledate. </font>
                        <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                      <td width = "50%" valign = "top">
                         <br/>
                         <font class = "tekstObican"> Prijavljeni materijal: </font>
                         <font class = "tekstIskosen"> Komentar </font>
                         <br/> <br/>
                         <font class = "tekstObican"> Autor: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Siskica32 </font>
                         </a>
                         <br/>
                         <font class = "tekstObican"> Sadrzaj: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Roze dzemper </font>
                         </a>
                         <br/> <br/>
                         <font class = "tekstObican"> Osoba koja je prijavila: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Cuca200 </font>
                         </a>
                         <br/>
                         <font class = "tekstObican"> Datum prijave: </font>
                         <font class = "tekstIskosen"> 05.04.2015 </font>
                         <br/> <br/>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Pogledaj materijal </font>
                         </a>
                         <br/> <br/> <br/>
                      </td>
                      <td width = "50%" valign = "top">
                      	<br/>
						<font class = "tekstObican"> Komentar prijave: </font>
                        <div class = "poljeZaTekst" align = "left">
                        	<font class = "tekstObican">
                            	Mislim da je ovaj sadrzaj krajnje neprimenran! Ne razumem kako ga administratori nisu ranije uklonili. Potpuna bruka i sramota za ovaj sajt! Zahtevam da se ukloni momentalno!
                            </font>
                        </div>
                        <br/> <br/> <br/>
                      </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%" align = "center">
                    	<a class = "dugme"> Obrisi sadrzaj </a>
                        <a class = "dugme"> Obrisi prijavu </a>
                        <br/> <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                      <td width = "50%" align = "left">
                         <br/>
                         <font class = "tekstObican"> Prijavljeni materijal: </font>
                         <font class = "tekstIskosen"> Video </font>
                         <br/> <br/>                         
                         <font class = "tekstObican"> Autor: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Cuca200 </font>
                         </a>
                         <br/>
                         <font class = "tekstObican"> Sadrzaj: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Carli jednorog </font>
                         </a>
                         <br/> <br/>
                         <font class = "tekstObican"> Osoba koja je prijavila: </font>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Siskica32 </font>
                         </a>
                         <br/>
                         <font class = "tekstObican"> Datum prijave: </font>
                         <font class = "tekstIskosen"> 07.04.2015 </font>
                         <br/> <br/>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Pogledaj materijal </font>
                         </a>
                         <br/> <br/> <br/>
                      </td>
                      <td width = "50%">
                      	<br/>
						<font class = "tekstObican"> Komentar: </font>
                        <div class = "poljeZaTekst" align = "left">
                        	<font class = "tekstObican">
                            	Ja sam mislio da je ovo sajt za strikanje, a ne za gluposti. Zasto ovaj tutorijal postoji? Nema veze sa strikanje, ovo je samo bezobrazno spamovanje. Admini odmah da se jave! Ovo mora da se skloni!
                            </font>
                        </div>
                        <br/> <br/> <br/>
                      </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%" align = "center">
                    	<a class = "dugme"> Obrisi sadrzaj </a>
                        <a class = "dugme"> Obrisi prijavu </a>
                        <br/> <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%" align = "center">
                    	<br/> <br/>
                    	<a class = "dugme"> Ucitaj starije </a>
                        <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<hr width = "100%" class = "linija"/> 
                    </td>
                  </tr>
              </table> 
              
              <br/> <br/> <br/> <br/> <br/> 
              
              <!-- Korisnici -->
              
              <a name = "Korisnici" class = "link"> </a>
              
              <table width = "60%" align = "center">
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<font class = "naslovObican"> Novi korisnici: </font>
              			<br/>  
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<hr width = "100%" class = "linija"/>
              			<br/> 
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                        <font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> za sada nema novih drugara koje mozete da upozate. Strpite se, bice ih jos. :D </font>
                        <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                      <td width = "50%" valign = "top">
                        <br/>
                        <img class = "slikaKorisnika" src = "http://localhost/Slike/Profilna/Slika.png">
                        <br/> <br/> <br/>
                      </td>
                      <td width = "50%" valign = "top">
                         <br/>
                         <a class = "link">  
                         	<font class = "naslovObican"> Zika </font>
                         </a>
                         <br/>
                         <font class = "tekstIskosen"> Zivojin Heroj </font>
                         <br/> <br/>
                         <font class = "tekstObican"> Godine: </font>
                         <font class = "tekstIskosen"> 10 </font>
                         <br/>
                         <font class = "tekstObican"> Pol: </font>
                         <font class = "tekstIskosen"> Muski </font>
                         <br/>
                         <font class = "tekstObican"> Lokacija: </font>
                         <font class = "tekstIskosen"> Pored Marka Kraljevica </font>
                         <br/> <br/>
                         <font class = "tekstObican"> Opis korisnika: </font>
                         <br/>
                         <div class="poljeZaTekst">
                         	<font class = "tekstObican"> Zovem se Zivojin, ali me drugovi zovu Zika. Osecacu se srecno ako...
                         	</font>
                         </div>
                         <br/> <br/>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Pogledaj profil </font>
                         </a>
                         <br/> <br/> <br/>
                      </td>
                  </tr>
                  <tr>
                      <td width = "50%" valign = "top">
                        <br/>
                        <img class = "slikaKorisnika" src = "http://localhost/Slike/Profilna/Slika.png">
                        <br/> <br/> <br/>
                      </td>
                      <td width = "50%" valign = "top">
                         <br/>
                         <a class = "link"> 
                         	<font class = "naslovObican"> Zikina mama </font>
                         </a>
                         <br/>
                         <font class = "tekstIskosen"> Herojeva majka </font>
                         <br/> <br/>
                         <font class = "tekstObican"> Godine: </font>
                         <font class = "tekstIskosen"> 40 </font>
                         <br/>
                         <font class = "tekstObican"> Pol: </font>
                         <font class = "tekstIskosen"> Zenski </font>
                         <br/>
                         <font class = "tekstObican"> Lokacija: </font>
                         <font class = "tekstIskosen"> Pored Zike, UVEK </font>
                         <br/> <br/>
                         <div class="poljeZaTekst">
                             <font class = "tekstObican"> Kada se izgovori Zivojin, dobija se znacenje zivota, znaci svetlosi i...
                             </font>
                         </div>
                         <br/> <br/>
                         <a class = "link" target = "_blank">
                         	<font class = "tekstIskosen"> Pogledaj profil </font>
                         </a>
                         <br/> <br/> <br/>
                      </td>
                      </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%" align = "center">
                    	<br/> <br/>
                    	<a class = "dugme"> Ucitaj starije </a>
                        <br/> <br/> <br/>
                    </td>
                  </tr>
                  <tr>
                  	<td colspan = "2" width = "100%">
                    	<hr width = "100%" class = "linija"/> 
                    </td>
                  </tr>
              </table> 
              
              <br/> <br/> <br/> <br/> <br/> 
              
              <!-- Videi -->
              
              <a name = "Videi" class = "link"> </a>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td>
                    	<font class = "naslovObican"> Novi videi: </font>
              			<br/>
                    </td>
                </tr>
                <tr>
                	<td>
                		<hr width = "100%" class = "linija"/> 
                	</td>
                </tr>
                <tr>
                	<td>
                    	<br/>
                    	<font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> korisnici su se malo ulenjili. Vratice se na posao uskoro. </font>
                    </td>
                </tr>
              </table>
              
              <br/> <br/>
              
              <table width = "80%" align = "center">
              	<tr>
                	<td width = "1%">
                    	<!--Prazna celija-->
                    </td>
                	<td width = "22%">
                    	<img class = "videoThumb" src = "http://localhost/Slike/Strikarnica/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "2%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "22%">
                    	<img class = "videoThumb" src = "http://localhost/Slike/Strikarnica/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "2%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "22%">
                    	<img class = "videoThumb" src = "http://localhost/Slike/Strikarnica/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "2%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "22%">
                    	<img class = "videoThumb" src = "http://localhost/Slike/Strikarnica/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "1%">
                    	<!--Prazna celija-->
                    </td>
                </tr>
              </table>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td align = "center">
                    	<br/> <br/>
                    	<a class = "dugme"> Ucitaj starije </a>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<br/> <br/>
                		<hr width = "100%" class = "linija"/> 
                	</td>
                </tr>
              </table>
              
              
              
              <br/> <br/> <br/> <br/> <br/> 
              
              <!-- Proizvodi -->
              
              <a name = "Proizvodi" class = "link"> </a>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td>
                    	<font class = "naslovObican"> Novi proizvodi: </font>
              			<br/>
                    </td>
                </tr>
                <tr>
                	<td>
                		<hr width = "100%" class = "linija"/> 
                	</td>
                </tr>
                <tr>
                	<td>
                    	<br/>
                    	<font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> korisnicima su otekli prsti od strikanja. Nastavljaju cim se malo odmore. </font>
                    </td>
                </tr>
              </table>
              
              <br/> <br/>
              
              <table width = "80%" align = "center">
              	<tr>
                	<td width = "2%">
                    	<!--Prazna celija-->
                    </td>
                	<td width = "20%">
                    	<img class = "proizvodThumb" src="http://localhost/Slike/Pijaca/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "4%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "20%">
                    	<img class = "proizvodThumb" src="http://localhost/Slike/Pijaca/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "4%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "20%">
                    	<img class = "proizvodThumb" src="http://localhost/Slike/Pijaca/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "4%">
                    	<!--Prazna celija-->
                    </td>
                    <td width = "20%">
                    	<img class = "proizvodThumb" src="http://localhost/Slike/Pijaca/slika.jpg">
                        <br/> <br/>
                    </td>
                    <td width = "2%">
                    	<!--Prazna celija-->
                    </td>
                </tr>
              </table>
              
              <table width = "60%" align = "center">
              	<tr>
                	<td align = "center">
                    	<br/> <br/>
                    	<a class = "dugme"> Ucitaj starije </a>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<br/> <br/>
                		<hr width = "100%" class = "linija"/> 
                	</td>
                </tr>
              </table>
              
              <br/> <br/> <br/> <br/> 
              
              <table width = "60%" align = "center">
                <tr>
                	<td>
                    	<br/>
                    	<font class = "tekstIskosen"> Dragance </font>
                        <font class = "tekstObican"> , ne razumem, vec ste zavrsili? Vratite se opet na pocetak da to proverite. </font>
                    </td>
                </tr>
              </table> 
              
              <br/> <br/> <br/>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
     </div>

</body>
<!-- InstanceEnd -->
</html>
