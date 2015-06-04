<!--Milos Andric 206/12-->

<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">


<!--Prozor za povratak lozinke-->
   <div id="zaboravljenaLozinka">
      <div class="naslovZL"> Zaboravili ste lozinku? </div>
      <img src="http://vunica.azurewebsites.net/vunica/application/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <!-- InstanceBeginEditable name="ZLDiv" -->         
	  <?php 
            $attributes = array('style' => 'height: 100%;', 'id' => 'formaZL');
            echo form_open("PopUp/zl", $attributes); 
          ?>
        <table class="tabelaZL">
          <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td valign="bottom" colspan="2">Molimo vas da unesete svoju e-mail adresu</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                <input type="text" maxlength="40" name="zlEmail" id="zlEmail" placeholder="E-mail adresa" class="inputPopUp" value="<?php echo set_value('zlEmail');?>"/>
                <?php echo form_error('zlEmail', '<div class="error">', '</div>'); ?>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaZL'].submit()"> Posalji</div> </td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="prikazi_prijavu()"> Odustani</div></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
        </table>
      <?php echo form_close(); ?>
      <!-- InstanceEndEditable -->
    </div>
    
    