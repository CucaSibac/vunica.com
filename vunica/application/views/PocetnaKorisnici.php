<!-- Teodora Aleksic, 391/12-->

<?php foreach($Korisnici as $red){ ?>

    <tr>
      <td width = "50%" valign = "top">
        <br/>
        <a href = "http://localhost/vunica.com/vunica/index.php/Profil" target = "_parent" class = "link"> 
            <img class = "slikaKorisnika" src = "<?php echo $red->Slika; ?>">
        </a>
        <br/> <br/> <br/> <br/>
      </td>
      <td width = "50%" valign = "top">
         <br/>
         <a href = "http://localhost/vunica.com/vunica/index.php/Profil" target = "_parent" class = "link">  
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
         <a href = "http://localhost/vunica.com/vunica/index.php/Profil" target = "_blank" class = "akcija">
            POGLEDAJ PROFIL
         </a>
         <br/> <br/> <br/> <br/>
      </td>
    </tr>
    
<?php } ?>