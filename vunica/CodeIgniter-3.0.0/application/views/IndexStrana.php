<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
  
  <!-- Teodora Aleksic, 391/12 -->
  
  <title> vunica.com </title>
  
  <style media="screen and (max-device-width: 1400px)">
    <?php include '/../CSS/Index (1366x768).css'; ?>
    <?php include '/../CSS/Pop up (1366x768).css'; ?>
    <?php include '/../CSS/Index - Animacije.css'; ?>
  </style>
  <style media="screen and (min-device-width: 1401px)">
    <?php include '/../CSS/Index (1920x1080).css'; ?>
    <?php include '/../CSS/Pop up (1920x1080).css'; ?>
    <?php include '/../CSS/Index - Animacije.css'; ?>
  </style>
  <script>
    <?php include('/../JavaScript/Index.js');?>
    <?php include('/../JavaScript/PopUp.js');?>
  </script>

</head>

<body>

	<!-- Polja za prijavu i registraciju -->
    
    <!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve()">
    </div>
    
    <!--Prozor za prijavljivanje-->
     <div id = "prijava">
      <div class = "naslovPrijava"> Prijava </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>   
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
    </div>
    
    <!--Prozor za povratak lozinke-->
    <div id="zaboravljenaLozinka">
      <div class="naslovZL"> Zaboravili ste lozinku? </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
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
    </div>
    
    <!--Prozor za registriovanje-->
    <div id="registracija">
      <div class="naslovRegistracija"> Registracija </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>   
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
            <td colspan="2"><input type="text" name="email4" id="email4" placeholder="Potvrdu e-mail adrese" class="inputPopUp" /> </td>
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
    </div>
    
    
	<!-- Milje i glavni elementi -->
	<div id = "teloAnim">
    
    	<!-- Slogan -->
        <div id = "slogan" align = "center">
          <font face="Tahoma, Geneva, sans-serif" color="#605951">
              ŠTRIKANJE
          </font>
          <br/>
          <font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#61a6ab" style="font-style:italic;">
              je
          </font>
          <br/>
          <font face="Tahoma, Geneva, sans-serif" color="#605951">
              UMETNOST
          </font>
        </div>  
    
    	<img id = "milje" src="http://localhost/Slike/Index/Milje.png">
        <img id = "dugme1" src="http://localhost/Slike/Index/Dugme.png" onclick="dugme()">     
        
        <div id = "sakriveni">
        
            <!-- Senka -->
            <div id = "senkaStrana">
            </div>
            
            <!-- Senka -->
            <div id = "senkaMeniGornji" class = "senkaMeni" style = "top:0;">
            </div>
            
            <!-- Senka -->
            <div id = "senkaMeniDonji" class = "senkaMeni" style = "bottom:0;">
            </div>
        
            <!-- Meni --> 
            <div id = "meniGornji" class = "meni" style = "top:0;">
                <table class = "stavke" cellspacing = "0" cellpadding "0">                
                  <tr>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Pocetna/index', '_parent');">
                          <font> Početna </font>
                      </td>
                      <td align = "center" valign = "middle" style = "cursor:default;">
                          <font size = "+3"> vunica.com </font>
                      </td>
                      <td class = "stavka" align = "center" valign = "middle">
                        <font onclick = "prikazi_prijavu()"> Prijava </font>
                        <font> / </font>
                        <font onclick = "prikazi_registraciju()"> Registracija </font>
                      </td>
                  </tr>
                </table>     
            </div>
            
            <!-- Meni --> 
            <div id = "meniDonji" class = "meni" style = "bottom:0;">
                <table class = "stavke" cellspacing = "0" cellpadding "0">                
                  <tr>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Strikarnica/index', '_parent');">
                          <font> Štrikarnica </font>
                      </td>
                      <td align = "center" valign = "middle">
                        <img id = "dugme2" src="http://localhost/Slike/Index/Dugme.png" onclick="dugme()">
                      </td>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica/CodeIgniter-3.0.0/index.php/Pijaca/index', '_parent');">
                          <font> Pijaca </font>
                      </td>
                  </tr>
                </table>     
            </div>
        
        </div>
        
        
    </div>


</body>
</html>
