
<!--Prozor za prijavu videa-->
<div id = "prijavaVideo">
    <div class = "naslovPrijavVideo"> Prijava videa </div>

    <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve_prijave()"/>
    <?php
    $attributes = array('style' => 'height: 100%;', 'id' => 'formaPrijavaVideo');
    echo form_open("PrijavaSadrzaja/prijaviVideo", $attributes);
    ?>
    <table class="tabelaPrijavaVideo">
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
                Želite li da prijavite ovaj proizvod?</td>
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
                <textarea  name="Tekst" maxlength="400" style="width:100%; height:120px; resize:none;text-align: justify;" placeholder="Unesite razlog prijave" class="tekstPoljeKomentar" id="privid" onKeyDown="preostaloPV(400);" onKeyUp="preostaloPV(400);"></textarea>
                
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2" align="center">
                <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatakprivid">400</font>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaPrijavaVideo'].submit()"> Prijavi</div> <br /></td>

            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve_prijave()"> Odustani</div><br /></td>

            <td class="praznaCelijaPopUp">&nbsp;</td>       
            

        </tr> 

    </table>
</form>
</div>