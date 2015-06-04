<!-- Ivana Lisanin 531/12 -->

<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_odluku()">
    </div>
                
                
<!--Prozor za odluku-->
<div id = "odluka">
      <div class = "naslovOdluka"> Ceger </div>
      <img src="http://vunica.azurewebsites.net/vunica/application/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_odluku()"/>
      
      
        <table class="tabelaOdluka">
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td colspan="2">
            Želite li da nastavite sa kupovinom ili da izvršite plaćanje?</td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr>   
          <tr>
            <td class="praznaCelijaPopUp">&nbsp;</td>
            <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Pijaca', '_parent')"> Nastavi</div> <br /></td>
            <td class="celijaDugmePopUp" align="right">            
            <div class="dugmePopUp" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Ceger', '_parent')"> Plati</div><br /></td>
            <td class="praznaCelijaPopUp">&nbsp;</td>
          </tr> 
                   
        </table>
     
      </div>

  
