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
                <font onclick="prikazi_prijavu()">Prijava</font>
                /
                <font onclick="prikazi_registraciju()">Registracija</font>
              </font> 
              <!-- InstanceEndEditable -->
            </td>
            <td id = "cegerPolje">
              <!-- InstanceBeginEditable name="Ceger" -->
              <img src="http://localhost/Slike/Ceger/Ceger.png" id = "ceger" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Ceger/index', '_parent')">  
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
              <br/> <br/> <br/> <br/>
              
              <p align = "center"> ------- Pocetna strana za admina ------- </p>
              
              <br/> <br/> <br/> 

              <!-- Dobrodoslica -->
              <div width = 100% align = "center">
              	<font class = "naslovObican">
                	Dobrodosli
                </font>
                <br/>
                <font class = "naslovIskosen">
                	Dragance!
                </font>
               </div>                              
              
              <br/> <br/> <br/>
              
              <p align = "center"> ------- Ako na dnevnom redu ima nesto: ------- </p>
              
              <br/> <br/>
              
              <!-- Dnevni red -->
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
              
              
              
              <br/> <br/> <br/> <br/>
              
              <p align = "center"> ------- Strana za korisnika: ------- </p>
              
              <br/> <br/> <br/>
  
              <!-- Dobrodoslica -->
              <div width = 100% align = "center">
                <font class = "naslovObican">
                    Dobrodosli
                </font>
                <br/>
                <font class = "naslovIskosen">
                    Cuca200!
                </font>
               </div> 
               
              <br/> <br/> <br/>        
              
              <table width = "60%" align = "center"> 
              	<tr>
                	<td>
                    	<font class = "tekstObican">
                        	Dobrodosli nazad! Cekali smo vas povratak. Sta danas imate planirano za nas?
                        </font>
                    </td>
                </tr>                    
              </table>
              
              <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
              
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
