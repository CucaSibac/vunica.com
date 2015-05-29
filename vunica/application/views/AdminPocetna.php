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
                <br/>
                <font class = "tekstObican"> Videe: </font>
                <a href = "#Videi" class = "link">
                    <font class="tekstIskosen"> 
                        <?php echo count($NoviVidei); ?>
                    </font>
                </a>
                <br/>
                <font class = "tekstObican"> Proizvode: </font>
                <a href = "#Proizvodi" class = "link">
                    <font class="tekstIskosen"> 
                        <?php echo count($NoviProizvodi); ?>
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
            <font class = "naslovObican"> Novi korisnici: </font>
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
            <td colspan = "2" width = "100%" align = "center">
            <br/> <br/>
            <?php
                echo form_open("Pocetna/ucitajKorisnike"); 
            ?>
            <input id = "dugmeKorisnici" type = "hidden" class = "dugme" value = "Ucitaj starije"/>
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
    

    <!-- Videi -->

    <a name = "Videi" class = "link"> </a>

    <table width = "60%" align = "center">
        <tr>
            <td>
                <font class = "naslovObican"> Najnoviji: </font>
                <br/>
            </td>
        </tr>
        <tr>
            <td>
                <hr width = "100%" class = "linija"/> 
            </td>
        </tr>
        
        <?php if($NoviVidei == NULL){ ?>
        <tr>
                <td>
                <br/>
                <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
                <font class = "tekstObican"> korisnici su se malo ulenjili. Vratice se na posao uskoro. </font>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br/> <br/>
    
    
    <table width = "80%" align = "center">
        <tr>
            <td width = "1%">
                <!--Prazna celija-->
            </td>
              <?php 
                if($NoviVidei != NULL){   
                  $i = 0;
                  foreach($NoviVidei as $red){
                      include 'PocetnaVidei.php';
                      $i++;
                      if($i != 4){
                      ?>
                        <td width = "2%">
                            <!--Prazna celija-->
                        </td>
                      <?php
                      }
                  }
                }
              ?>
            <td width = "1%">
                <!--Prazna celija-->
            </td>
        </tr>
    </table>

    <table width = "60%" align = "center">
        <tr>
                <td align = "center">
                <br/> <br/>
                <a href = "http://localhost/vunica.com/vunica/index.php/Strikarnica" class = "dugme" target = "_blank">
                    Ucitaj starije
                </a>
            </td>
        </tr>
        <tr>
                <td>
                <br/> <br/>
                        <hr width = "100%" class = "linija"/> 
                </td>
        </tr>
    </table>


    <br/> <br/> <br/> <br/> <br/> 
    
    

    <!-- Proizvodi -->

    <a name = "Proizvodi" class = "link"> </a>

    <table width = "60%" align = "center">
        <tr>
                <td>
                <font class = "naslovObican"> Najnoviji proizvodi: </font>
                        <br/>
            </td>
        </tr>
        <tr>
                <td>
                        <hr width = "100%" class = "linija"/> 
                </td>
        </tr>
        
        <?php if($NoviProizvodi == NULL){ ?>
        <tr>
                <td>
                <br/>
                <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
                <font class = "tekstObican"> korisnicima su otekli prsti od strikanja. Nastavljaju cim se malo odmore. </font>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br/> <br/>

    <table width = "80%" align = "center">
        <tr>
            <td width = "2%">
                <!--Prazna celija-->
            </td>
              <?php 
                if($NoviProizvodi != NULL){   
                  $i = 0;
                  foreach($NoviProizvodi as $red){
                      include 'PocetnaProizvodi.php';
                      $i++;
                      if($i != 4){
                      ?>
                        <td width = "4%">
                            <!--Prazna celija-->
                        </td>
                      <?php
                      }
                  }
                }
              ?>
            <td width = "2%">
                <!--Prazna celija-->
            </td>
        </tr>
    </table>

    <table width = "60%" align = "center">
        <tr>
                <td align = "center">
                <br/> <br/>
                <a href = "http://localhost/vunica.com/vunica/index.php/Pijaca" class = "dugme" target = "_blank">
                    Ucitaj starije
                </a>
            </td>
        </tr>
        <tr>
                <td>
                <br/> <br/>
                        <hr width = "100%" class = "linija"/> 
                </td>
        </tr>
    </table>

    <br/> <br/> <br/> <br/> 

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