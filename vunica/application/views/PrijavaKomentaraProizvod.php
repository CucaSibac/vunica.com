<!-- Ivana Lisanin 531/12 -->

<!--Prozor za prijavu komentara na proizvodu-->
<div id = "prijavaProizvodKomentar">
    <div class = "naslovPrijavProizvodKomentar"> Prijava komentar </div>

    <img src="http://vunica.azurewebsites.net/vunica/application/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve_prijave()"/>
    <?php
    $attributes = array('style' => 'height: 100%;', 'id' => 'formaPrijavaProizvodKomentar');
    echo form_open("PrijavaSadrzaja/prijaviKomentarProizvod", $attributes);
    ?>
    <table class="tabelaPrijavaProizvodKomentar">
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
                <textarea  name="Tekst" maxlength="400" style="width:100%; height:120px; resize:none;text-align: justify;" placeholder="Unesite razlog prijave" class="tekstPoljeKomentar" id="prikompro" onKeyDown="preostaloPKP(400);" onKeyUp="preostaloPKP(400);"></textarea>
                
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="textRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2" align="center">
                <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatakprikompro">400</font>
            </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
        </tr>
        <tr class="inputRed">
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="document.forms['formaPrijavaProizvodKomentar'].submit()"> Prijavi</div> <br /></td>

            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve_prijave()"> Odustani</div><br /></td>

            <td class="praznaCelijaPopUp">&nbsp; <input type="hidden" name="IDKomentar" id="ppvID" /></td>       
            

        </tr> 

    </table>
</form>
</div>