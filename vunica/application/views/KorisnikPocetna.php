<!-- Teodora Aleksic, 391/12-->

<!-- Pocetna strana za korisnika -->

    <!-- Baner -->
    <?php 
        if($status == 3){
    ?>
      <a class="link" href="http://localhost/vunica.com/vunica/index.php/Pocetna/premiumProfil">
      <table id = "banerPolje" align = "center">
        <tr>
            <td width = "50%" align = "left" style = "padding-left:8%;">
                <font color = "#fffef4" size="6">
                        Postanite PREMIUM
                </font>
                <br/> <br/>
                <font class = "banerTekst">
                        Specijalna ponuda!
                </font>
            </td>
            <td width = "50%" align = "left" style = "padding-left:25%;">
                <font class = "banerTekst" style = "text-decoration:line-through;">
                    199€ 
                </font>
                <font class = "banerTekst" >
                    =>19€
                </font>
            </td>
        </tr>
       </table>
      </a>
      
       <br/> <br/> <br/> <br/>
    <?php } ?>

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
    
    
    <br/> <br/> <br/> 
    

    <!-- Dnevni red -->
    <table width = "60%" align = "center">
        <tr>
             <td width = "100%">
                <font class = "tekstObican">
                    Dobrodosli nazad! Cekali smo Vas povratak. Jedva cekamo da vidimo sta danas imate spremno za nas.
                </font>
                <br/> <br/> 
            </td>
        </tr>
    </table> 
    
    <br/> <br/> <br/> <br/> <br/> <br/>
    
    <!-- Videi i proizvodi -->
    
    <table width = "60%" align = "center">
        <tr>
            <td>
                <font class = "naslovObican"> Vase aktivnosti: </font>
                <br/>
            </td>
        </tr>
        <tr>
            <td>
                <hr width = "100%" class = "linija"/> 
            </td>
        </tr>
        <tr>
            <td>
                <br/>
                <font class = "tekstObican">
                    Ovo su svi videi i proizvodi kojima ste doprineli sajtu. Povecajte njihov broj!
                </font>
                <br/> <br/> <br/> <br/>
            </td>
        </tr>
    </table>
    
    
    <table width = "80%" align = "center" valign = "top">
        <tr>
            <td width = "5%">
                <!-- Prazna celija-->
            </td>
            <td width = "45%" valign = "top">       
                <!-- Videi -->
                <table width = "80%" align = "center">
                    <tr>
                        <td>
                            <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/PostavljanjeVidea'>
                            <div class="dodajproizvod"  >  
                                <p style="text-align: center">  Dodaj video </p>
                            </div> 
                            </a>
                            <br/> <br/>
                        </td>
                    </tr>
                    <?php 
                        if($Videi != NULL){
                            foreach ($Videi as $redVideo){ 
                    ?>
                    <tr>
                        <td align = "center">
                            <div class="produktKorisnika">
                                <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/video/index/<?php
                                                                    echo $redVideo->IDVideo; ?>'>
                                    <font class="produktKorisnikaNaziv" style="left:
                                          <?php echo ((250 - strlen($redVideo->Naziv) * 11) / 2); ?>px
                                    ">
                                        <?php echo $redVideo->Naziv; ?>
                                    </font>
                                </a>
                                <font class="produktKorisnikaDatum" style="left:
                                          <?php echo ((250 - strlen($redVideo->Datum) * 9) / 2); ?>px
                                ">
                                    <?php echo $redVideo->Datum; ?>
                                </font>
                                <div class="produktKorisnikaZaglavlje">
                                </div>
                                <div class="produktKorisnikaPodnozje">
                                </div>
                                <div class="produktKorisnikaSenka"> 
                                </div>

                                <img class="produktKorisnikaSlika" src="<?php echo $redVideo->Slika; ?>">
                            </div>   
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td align = "center" valign = "top">
                            <?php $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiVideo/$redVideo->IDVideo" ; ?>
                            <a  id = "prijaviobrisi" class = "akcija"
                                href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete video?','<?php echo $kontroler; ?>')"> 
                                OBRISI VIDEO
                            </a>
                            <br/> <br/>
                        </td>
                    </tr>
                    <?php 
                            }
                        }
                        else{
                    ?>
                    <tr>
                        <td height = "120px" align = "center" valign = "middle">
                            <font class = "tekstObican">
                                Trenutno nemate svojih videa. Postanite aktivniji clan zajednice. Postavite video!
                            </font>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </td>
            <td width = "45%" valign = "top">
                <!-- Proizvodi -->
                <table width = "80%" align = "center">
                    <tr>
                        <td>
                            <?php if($status == 3){ ?>
                                <a class="link" href="http://localhost/vunica.com/vunica/index.php/Pocetna/premiumProfil">
                            <?php }else{ ?>
                                <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/PostavljanjeProizvoda'>
                            <?php }?>
                                
                                <div class="dodajproizvod">  
                                    <p style="text-align: center">  Dodaj proizvod </p>
                                </div> 
                                </a>

                            <br/> <br/>
                        </td>
                    </tr>
                    <?php 
                        if($Proizvodi != NULL){
                            foreach ($Proizvodi as $redProizvod){ 
                    ?>
                    <tr>
                        <td align = "center">
                            <div class="produktKorisnika">
                                <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/proizvod/index/<?php
                                                                                echo $redProizvod->IDProizvod; ?>'>
                                    <font class="produktKorisnikaNaziv" style="left:
                                          <?php echo ((250 - strlen($redProizvod->Naziv) * 11) / 2); ?>px
                                    ">
                                        <?php echo $redProizvod->Naziv; ?>
                                    </font>
                                </a>
                                <font class="produktKorisnikaDatum" style="left:
                                          <?php echo ((250 - strlen($redProizvod->Datum) * 9) / 2); ?>px
                                ">
                                    <?php echo $redProizvod->Datum; ?>
                                </font>
                                <div class="produktKorisnikaZaglavlje">
                                </div>
                                <div class="produktKorisnikaPodnozje">
                                </div>
                                <div class="produktKorisnikaSenka"> 
                                </div>

                                <img class="produktKorisnikaSlika" src="<?php echo $redVideo->Slika; ?>">
                            </div>     
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td align = "center" valign = "top">
                            <?php $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiProizvod/$redProizvod->IDProizvod" ; ?>
                            <a  id = "prijaviobrisi" class = "akcija"
                                href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete video?','<?php echo $kontroler; ?>')"> 
                                OBRISI PROIZVOD
                            </a>
                            <br/> <br/>
                        </td>
                    </tr>
                    <?php 
                            }
                        }
                        else{
                    ?>
                    <tr>
                        <td height = "120px" align = "center" valign = "middle">
                            <font class = "tekstObican">
                                Trenutno nemate svojih proizvoda. Postanite aktivniji clan zajednice. Postavite proizvod!
                            </font>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </td>
            <td width = "5%">
                <!-- Prazna celija-->
            </td>
        </tr>
    </table>
    
    <table width = "60%" align = "center">
        <tr>
            <td>
                <br/> <br/>
                <hr width = "100%" class = "linija"/> 
            </td>
        </tr>
    </table>
    
    
    <br/> <br/> <br/> <br/> <br/> <br/> <br/>
    
    
    <!-- Najnoviji Videi -->
    <table width = "60%" align = "center">
        <tr>
            <td>
                <font class = "naslovObican"> Najnoviji videi: </font>
                <br/>
            </td>
        </tr>
        <tr>
            <td>
                <hr width = "100%" class = "linija"/> 
            </td>
        </tr>
        <tr>
            <td>
                <br/>
                <font class = "tekstObican">
                    Najnoviji videi koji su izasli u Strikarnici. Nemojte ih propustiti.
                </font>
                <br/> <br/>
            </td>
        </tr>
        
        <?php if($NoviVidei == NULL){ ?>
        <tr>
                <td>
                <br/>
                <font class = "tekstIskosen"> <?php echo $this->session->UserName; ?> </font>
                <font class = "tekstObican"> trenutno nema novih videa. Korisnici su se malo ulenjili. Vratice se uskoro na posao. </font>
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
                <br/> <br/> <br/>
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



   