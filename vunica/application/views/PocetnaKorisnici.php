<!-- Teodora Aleksic, 391/12-->

<?php foreach($Korisnici as $red){ ?>

    <tr>
      <td width = "50%" valign = "top">
        <br/>
        <a href = "http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $red->IDKorisnik;?>" target = "_parent" class = "link"> 
            <img class = "slikaKorisnika" src = "<?php echo $red->Slika; ?>">
        </a>
        <br/> <br/> <br/> <br/>
      </td>
      <td width = "50%" valign = "top">
         <br/>
         <a href = "http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $red->IDKorisnik;?>" target = "_parent" class = "link">  
                <font class = "naslovObican"> <?php echo $red->UserName; ?> </font>
         </a>
         <br/>
         <font class = "tekstIskosen"> 
            <?php echo $red->ImePrezime; ?>
         </font>
         <br/> <br/>
         <font class = "tekstObican"> Godine: </font>
         <font class = "tekstIskosen"> <?php echo $red->Godine; ?> </font>
         <br/>
         <font class = "tekstObican"> Pol: </font>
         <font class = "tekstIskosen"> <?php echo $red->Pol; ?> </font>
         <br/>
         <font class = "tekstObican"> Lokacija: </font>
         <font class = "tekstIskosen"> <?php echo $red->Lokacija; ?> </font>
         <br/> <br/>
         <font class = "tekstObican"> Opis korisnika: </font>
         <br/>
         <div class="poljeZaTekst">
            <font class = "tekstObican">
                <?php echo $red->Opis; ?>.
            </font>
         </div>
         <br/> <br/>
      </td>
    </tr>    
    <tr valign = "top">
        <td width = "50%" align = "left" valign = "top">
            <a href = "http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $red->IDKorisnik;?>" target = "_blank" class = "akcija">
                POGLEDAJ PROFIL
            </a>
            
            <br/> <br/> <br/>
        </td>
        <td width = "50%" align = "left" valign = "top">
            <?php $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiKorisnika/$red->IDKorisnik" ; ?>
            <a  id = "prijaviobrisi" class = "akcija"
                href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete korisnika?','<?php echo $kontroler; ?>')"> 
                OBRISI PROFIL
            </a>
            <br/> <br/> <br/>
        </td>
    </tr>
    
<?php } ?>