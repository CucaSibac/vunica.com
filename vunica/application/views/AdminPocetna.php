<!-- Teodora Aleksic, 391/12-->

<!-- Pocetna strana za admina -->


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
    <?php if(1){ ?>
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
                            <?php echo count($Videi); ?>
                        </font>
                    </a>
                    <br/>
                    <font class = "tekstObican"> Proizvode: </font>
                    <a href = "#Proizvodi" class = "link">
                        <font class="tekstIskosen"> 
                            <?php echo count($Proizvodi); ?>
                        </font>
                    </a>
                </td>
            </tr>
        </table>
    
    <?php }else{ ?>
        <table width = "60%" align = "center">
            <tr>
                    <td width = "100%">
                    <font class = "tekstObican"> Svaka Vam cast </font>
                    <font class = "tekstIskosen"> Dragance </font>
                    <font class = "tekstObican"> ! Danas na dnevnom redu nemate nista. Uzmite svoje igle u ruke i bacite se na strikanje! Cekamo Vas do narednog puta. :*
                    </font>
                    <br/> <br/> 
                </td>
            </tr>
        </table>  
    <?php } ?>
        

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
            <font class = "tekstIskosen"> Dragance </font>
            <font class = "tekstObican"> pa vi ste zmaj!  Nema prijava koje treba da pogledate. </font>
            <br/> <br/> <br/>
        </td>
      </tr>
      
      <?php } ?>

      <tr>
        <td colspan = "2" width = "100%" align = "center">
            <br/> <br/>
            <?php 
                //$attributes = array('id' => 'formaProfilEditovanje');
                echo form_open("Pocetna/ucitajPrijave"); 
            ?>
            <input type = "submit" class = "dugme" value = "Ucitaj starije"/>
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
      
      <?php if(1){include 'PocetnaKorisnici.php';}
            else{
      ?>
      
      <tr>
            <td colspan = "2" width = "100%">
            <font class = "tekstIskosen"> Dragance </font>
            <font class = "tekstObican"> za sada nema novih drugara koje mozete da upozate. Strpite se, bice ih jos. :D </font>
            <br/> <br/> <br/>
        </td>
      </tr>
      
      <?php } ?>
      
      <tr>
            <td colspan = "2" width = "100%" align = "center">
            <br/> <br/>
            <a class = "dugme"> Ucitaj starije </a>
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
                <font class = "naslovObican"> Novi videi: </font>
                        <br/>
            </td>
        </tr>
        <tr>
                <td>
                        <hr width = "100%" class = "linija"/> 
                </td>
        </tr>
        
        <?php if(0){ ?>
        <tr>
                <td>
                <br/>
                <font class = "tekstIskosen"> Dragance </font>
                <font class = "tekstObican"> korisnici su se malo ulenjili. Vratice se na posao uskoro. </font>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br/> <br/>
    
    <?php if(1){ ?>
    <table width = "80%" align = "center">
        <?php include 'PocetnaVidei.php'; ?>
    </table>
    <?php } ?>

    <table width = "60%" align = "center">
        <tr>
                <td align = "center">
                <br/> <br/>
                <a class = "dugme"> Ucitaj starije </a>
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
                <font class = "naslovObican"> Novi proizvodi: </font>
                        <br/>
            </td>
        </tr>
        <tr>
                <td>
                        <hr width = "100%" class = "linija"/> 
                </td>
        </tr>
        
        <?php if(0){ ?>
        <tr>
                <td>
                <br/>
                <font class = "tekstIskosen"> Dragance </font>
                <font class = "tekstObican"> korisnicima su otekli prsti od strikanja. Nastavljaju cim se malo odmore. </font>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br/> <br/>

    <?php if(1){ ?>
    <table width = "80%" align = "center">
        <?php include 'PocetnaProizvodi.php'; ?>
    </table>
    <?php } ?>

    <table width = "60%" align = "center">
        <tr>
                <td align = "center">
                <br/> <br/>
                <a class = "dugme"> Ucitaj starije </a>
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
                <font class = "tekstIskosen"> Dragance </font>
                <font class = "tekstObican"> , ne razumem, vec ste zavrsili? Vratite se opet na pocetak da to proverite. </font>
            </td>
        </tr>
    </table> 