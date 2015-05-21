<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<!--Prozor za prijavu proizvoda-->
 <div id = "prijavaProizvoda">
      <div class = "naslovPrijavaProizvoda"> Prijava proizvoda </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <form style="height:100%;" name="prijavaProizvoda" action="prijavaProizvoda.php" method = "post">
        <table class="tabelaPrijavaProizvoda">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Želite li da prijavite ovaj proizvod?</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">Navedite razlog prijave:</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>    
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2"><input type="text" name="tekst" id="email1" placeholder="Prijavljujem proizvod zbog..." class="inputPopUpPrijava" /> </td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="prijavi_proizvod()"> Da</div> <br /></td>
            <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Ne</div><br /></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
                            
        </table>
      </form>
      </div>
