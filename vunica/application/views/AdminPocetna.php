<!-- Teodora Aleksic, 391/12-->

<!-- Pocetna strana za admina -->

    <a name = "Pocetak" class = "link"> </a>

    <!-- Dobrodoslica -->
    <div width = 100% align = "center">
        <font class = "naslovObican">
                Dobrodošli
        </font>
        <br/>
        <font class = "naslovIskosen">
                <?php echo $this->session->UserName; ?>
        </font> 
    </div>
    
    
    <br/> <br/> <br/> <br/>


    <!-- Dnevni red -->
    <table width = "60%" align = "center">
        <tr>
            <td width = "100%">
                <font class = "tekstObican">
                    Od kad ste bili poslednji put na sajtu desile su se nove aktivnosti. Danas za Vas na dnevnom redu imamo nove:
                </font>
                <br/> <br/> 
            </td>
        </tr>
        <tr>
            <td width = "100%">
                <font class = "tekstObican"> Prijave: </font>
                <a href = "#Prijave" class = "link">
                    <font class="tekstIskosen">
                        <?php echo count($Prijave); ?>
                    </font>
                </a>
                <br/>
                <font class = "tekstObican"> Korisnike: </font>
                <a href = "#Korisnici" class = "link">
                    <font class="tekstIskosen">
                        <?php echo count($Korisnici); ?>
                    </font>
                </a>
            </td>
        </tr>
    </table>       

    <br/> <br/> <br/> <br/> </br> <br/>
    

    <!-- Prijave -->

    <a name = "Prijave" class = "link"> </a>

    <table width = "60%" align = "center">
      <tr>
            <td colspan = "2" width = "100%">
            <font class = "naslovObican"> Nove prijave: </font>
            <br/>  
        </td>
      </tr>
      <tr>
            <td colspan = "2" width = "100%">
            <hr width = "100%" class = "linija"/>
            <br/> 
        </td>
      </tr>
      
      <?php 
        if($Prijave != NULL){       
          foreach($Prijave as $red){
              include 'PocetnaPrijave.php';
          }
        }
        else{
      ?>
      
      <tr>
            <td colspan = "2" width = "100%">
            <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
            <font class = "tekstObican"> pa vi ste zmaj!  Nema prijava koje treba da pogledate. </font>
            <br/> <br/> <br/>
        </td>
      </tr>
      
      <?php } ?>

      <tr>
        <td colspan = "2" width = "100%" align = "center">
            <?php 
                echo form_open("Pocetna/ucitajPrijave"); 
            ?>
            <input type = "hidden" class = "dugme" value = "Ucitaj starije"/>
            <?php echo form_close(); ?>
            <br/> <br/> <br/>
        </td>
      </tr>
      <tr>
            <td colspan = "2" width = "100%">
            <hr width = "100%" class = "linija"/> 
        </td>
      </tr>
    </table> 
    
    

    <br/> <br/> <br/> <br/> <br/> 
    

    <!-- Korisnici -->

    <a name = "Korisnici" class = "link"> </a>

    <table width = "60%" align = "center">
      <tr>
            <td colspan = "2" width = "100%">
            <font class = "naslovObican"> Novi i stari korisnici: </font>
            <br/>  
        </td>
      </tr>
      <tr>
            <td colspan = "2" width = "100%">
            <hr width = "100%" class = "linija"/>
            <br/> 
        </td>
      </tr>
      
      <?php 
        if($Korisnici != NULL){     
           include 'PocetnaKorisnici.php';
        }
        else{
      ?>
      
      <tr id = "markerKorisnici">
          <td> </td>
      </tr>
      
      <tr>
            <td colspan = "2" width = "100%">
            <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
            <font class = "tekstObican"> za sada nema novih drugara koje mozete da upozate. Strpite se, bice ih jos. :D </font>
            <br/> <br/> <br/>
        </td>
      </tr>
      
      <?php } ?>

      <tr>
            <td colspan = "2" width = "100%">
            <hr width = "100%" class = "linija"/> 
        </td>
      </tr>
    </table> 

    
    <br/> <br/> <br/> <br/> <br/> 
    

    <table width = "60%" align = "center">
        <tr>
            <td>
                <br/>
                <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
                <font class = "tekstObican"> , ne razumem, vec ste zavrsili? Vratite se opet na pocetak da to proverite. </font>
            </td>
        </tr>
        <tr>
            <td align = "center">
               <br/> <br/>
               <a href = "#Pocetak" class = "link">
                   <font class = "tekstIskosen"> Vratite se na pocetak? </font>
               </a>
            </td>
        </tr>
    </table> 