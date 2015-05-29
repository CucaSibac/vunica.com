<?php include("Upozorenje.php");

$usersession = $this->session->userdata('UserName');
?>

<!--Prozor za prijavu videa-->
<div id = "prijavaVideaKomentar">
    <div class = "naslovPrijavaVideaKomentar"> Prijava komentar </div>

    <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve_prijave()"/>
    <?php
    $attributes = array('style' => 'height: 100%;', 'id' => 'formaPrijavaVideoKomentar');
    echo form_open("PrijavaSadrzaja/prijaviKomentarVideo", $attributes);
    ?>
    <table class="tabelaPrijavaVideaKomentar">
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                Želite li da prijavite ovaj komentar?</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Navedite razlog prijave:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>    
        <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                <textarea  value="<?php echo set_value('Tekst'); ?>" name="Tekst" maxlength="400" style="width:100%; height:120px; resize:none;text-align: justify;" placeholder="Unesite razlog prijave" class="tekstPoljeKomentar" id="prikomvid" onKeyDown="preostaloPKV(400);" onKeyUp="preostaloPKV(400);"></textarea>
                
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2" align="center">
                <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatakprikomvid">400</font> </td>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaPrijavaVideoKomentar'].submit()"> Prijavi</div> <br /></td>

            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve_prijave()"> Odustani</div><br /></td>

            <td class="praznaCelijaPopUp">&nbsp;</td>
        <input type="hidden" name="UserName" id="UserName"  value="<?php echo $usersession ?>"/>
        <input type="hidden" name="IDVideo" id="IDKomentar"  value="<?php echo $idkomentar ?>"/>

        </tr> 

    </table>
</form>
</div>
