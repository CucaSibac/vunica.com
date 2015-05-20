<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<div style="width:100%; height:50%;"> dsifhdiu</div>

<!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve()">
    </div>
    
    <!--Prozor za prijavljivanje-->
   <div id = "prijava">
      <div class = "naslovPrijava"> Prijava </div>
      <img src="../Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="PrijavaDiv" -->    
      <?php echo form_open("vunica/login"); ?>
        <table class="tabelaPrijava">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Molimo vas da unesete sledece podatke:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="email1" id="email1" placeholder="E-mail adresa" class="inputPopUp" value=""/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="password" name="password1" id="password1" placeholder="Lozinka" class="inputPopUp" value=""/> </td>
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
            <td class="praznaCelijaPopUp"><input type="submit" class="" value="Sign in" /></td>
          </tr>    
        </table>
      <?php echo form_close(); ?>
      <!-- InstanceEndEditable -->
    </div>