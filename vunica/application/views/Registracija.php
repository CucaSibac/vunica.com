
<!--Prozor za registriovanje -->
    <div id="registracija">
      <div class="naslovRegistracija"> Registracija </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="RegistracijaDiv" -->
      <?php echo validation_errors('<p class="error">'); ?>
	  <?php 
            $attributes = array('style' => 'height: 100%;', 'id' => 'formaRegistracija');
            echo form_open("PopUp/registration", $attributes); 
          ?>
        <table class="tabelaRegistracija">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Molimo vas da unesete sledece podatke:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
           <tr>
            <td class="praznaCelijaPopUp"></td>
            <td colspan="2"><input type="text" name="UserName" id="UserName" placeholder="Korisnicko ime" class="inputPopUp" value="<?php echo set_value('UserName'); ?>"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="ImePrezime" id="ImePrezime" placeholder="Ime i prezime" class="inputPopUp" value="<?php echo set_value('ImePrezime'); ?>"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp"></td>
            <td colspan="2"><input type="text" name="Email" id="Email" placeholder="E-mail adresa" class="inputPopUp" value="<?php echo set_value('Email'); ?>"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="EmailPotvrda" id="email4" placeholder="Potvrda e-mail adrese" class="inputPopUp" value="<?php echo set_value('EmailPotvrda'); ?>"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp"></td>
            <td colspan="2"><input type="password" name="Sifra" id="Sifra" placeholder="Lozinka" class="inputPopUp" value="<?php echo set_value('Sifra'); ?>"/> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp"></td>       
            <td colspan="2"><input type="password" name="con_password" id="con_password" placeholder="Potvrda lozinke" class="inputPopUp" value="<?php echo set_value('con_password'); ?>"/> </td>
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
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaRegistracija'].submit()"> Registruj se!</div> </td>
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
      <?php echo form_close(); ?>
      <!-- InstanceEndEditable -->
    </div> 