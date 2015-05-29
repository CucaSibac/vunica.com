<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="Pop up (1920x1080).css">

<!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve(); sakrij_sve_prijave();">
    </div>
    
    <!--Prozor za prijavljivanje-->
   <div id = "prijava">
      <div class = "naslovPrijava"> Prijava </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="PrijavaDiv" -->    
      <?php 
        $attributes = array('style' => 'height: 100%;', 'id' => 'formaPrijava');
        echo form_open("PopUp/login", $attributes); 
      ?>
        <table class="tabelaPrijava">
          <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td valign="bottom" colspan="2">Molimo vas da unesete sledece podatke:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                <input type="text" maxlength="40" name="email1" id="email1" placeholder="E-mail adresa" class="inputPopUp" value="<?php echo set_value('email1'); ?>"/> 
                <?php echo form_error('email1', '<div class="error">', '</div>'); ?>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                <input type="password" maxlength="40" name="password1" id="password1" placeholder="Lozinka" class="inputPopUp" value="<?php echo set_value('password1'); ?>"/>
                <?php echo form_error('password1', '<div class="error">', '</div>'); ?>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>                
          <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div  class="dugmePopUp" onclick="document.forms['formaPrijava'].submit()"> Prijavi se!</div></td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>               
          <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
              Zaboravili ste lozinku? 
              <a href="javascript:prikazi_zaboravljenu_lozinku()" class="linkPopUp"> Prijavite problem </a>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
              Nemate profil?
              <a href="javascript:prikazi_registraciju()" class="linkPopUp"> Registrujte se </a>
            </td>
            <td class="praznaCelijaPopUp"></td>
          </tr>    
        </table>
      <?php echo form_close(); ?>
      <!-- InstanceEndEditable -->
    </div>
    