<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<!--Prozor za odluku-->
<div id = "odluka">
      <div class = "naslovOdluka"> Ceger </div>
      <img src="../Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
      <form style="height:100%;" name="odluka" action="odluka.php" method = "post">
        <table class="tabelaOdluka">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Želite li da nastavite sa kupovinom ili da izvršite plaćanje?</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>   
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca', '_parent')"> Nastavi</div> <br /></td>
            <td class="celijaDugmePopUp" align="right">            
            <div class="dugmePopUp" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Ceger', '_parent')"> Plati</div><br /></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
                            
        </table>
      </form>
      </div>
