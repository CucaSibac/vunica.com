<link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
<link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">

<!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_odluku()">
    </div>
<?php
$moze = TRUE;
$uspeh = FALSE;
foreach ($podacip as $red) {
    //ovo bi trebalo da cita vrednost iz textualnog bolja
    
    if($_POST['v'] >= $red->BrojArtikala){
        $moze = FALSE;
    }
else{
    $pojedinacni = array (
        'proizvodid' => ($red->IDProizvod),
        'proizvodime' => ($red->Naziv),
        //ovo bi trebalo da cita vrednost iz textualnog bolja
        'kolicinap' => ($_POST['v']),
        'cenap' => ($red->Cena)
    );
    for($i = 0; $i < 20; $i+=1) {
       if($this->session->Proizvodi[$i]['id'] == $pojedinacni['proizvodid']){
           $this->session->Proizvodi[$i]['kolicina'] += $pojedinacni['kolicinap'];
           $uspeh = TRUE;
           $i=30;
       }
   }
   if($uspeh == FALSE){
       for($i = 0; $i < 20; $i+=1) {
          if ($this->session->Proizvodi[$i]['id'] == '') {
              $this->session->Proizvodi[$i]['id'] = $pojedinacni['proizvodid'];
              $this->session->Proizvodi[$i]['ime'] = $pojedinacni['proizvodime'];
              $this->session->Proizvodi[$i]['kolicina'] = $pojedinacni['kolicinap'];
              $this->session->Proizvodi[$i]['cena'] = $pojedinacni['cenap'];
              $uspeh = TRUE;
              $i = 30;
          }
       }
   }
   }
}
?>
<!--Prozor za odluku-->
<div id = "odluka">
      <div class = "naslovOdluka"> Ceger </div>
      <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_odluku()"/>
      <?php if ($moze == TRUE && $uspeh == TRUE) {?>
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
      <?php } else if($uspeh == FALSE) { ?> alert("Nemate dovoljno mesta u cegeru da biste dodali i ovaj proizvod!"+<br/>+
                                                  "Prvo kupite ono što Vam je u cegeru.");
      <?php } else { ?>
          alert("Ne mođete kupiti više od " +
                                   <?php  foreach ($podacip as $red) { ?>
                                   <?php echo $red->BrojArtikala; }?> 
                                          + " proizvoda.");
      <?php } ?>
      </form>
      </div>
