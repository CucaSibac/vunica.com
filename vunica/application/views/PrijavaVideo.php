<?php include("Upozorenje.php");?>

<!--Prozor za prijavu videa-->
 <div id = "prijavaVidea">
      <div class = "naslovPrijavaVidea"> Prijava videa </div>

      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_video()"/>
      <?php 
            $attributes = array('style' => 'height: 100%;', 'id' => 'formaPrijavaVideo');
            echo form_open("Prijava/video", $attributes); 
          ?>
     <table class="tabelaPrijavaVidea">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Želite li da prijavite ovaj video?</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Navedite razlog prijave:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>    
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                 <textarea  value="<?php echo set_value('Tekst'); ?>" name="Tekst" maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify;" placeholder="Unesite razlog prijave" class="tekstPoljeKomentar" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea>
                 <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatak">400</font> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaPrijavaVideo'].submit()"> </div> <br /></td>

            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div><br /></td>

            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
                            
        </table>
      </form>
      </div>
