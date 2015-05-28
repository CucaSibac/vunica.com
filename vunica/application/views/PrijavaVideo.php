<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_video()">
    </div>

<!--Prozor za prijavu videa-->
 <div id = "prijavaVidea">
      <div class = "naslovPrijavaVidea"> Prijava videa </div>

      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_video()"/>

      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_video()"/>

      <form style="height:100%;" name="prijavaVidea" action="prijavaVidea.php" method = "post">
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
            <td colspan="2"><input type="text" value="" name="tekst" id="vid" placeholder="Prijavljujem video zbog..." class="inputPopUpPrijava" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" id="obrisiprijavip" onclick="prijavi_video()"> Da</div> <br /></td>

            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_video()"> Ne</div><br /></td>

            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
                            
        </table>
      </form>
      </div>
