<!-- Teodora Aleksic, 391/12-->

    <tr>
      <td width = "50%" valign = "top">
         <br/> <br/>
         <font class = "tekstObican"> Prijavljeni materijal: </font>
         <font class = "tekstIskosen">
            <?php
                if($red['Vrsta'] == 0){
                    echo 'Video';
                }
                else{
                    if($red['Vrsta'] == 1){
                        echo 'Proizvod';
                    }
                    else{
                        echo 'Komentar';
                    }
                }           
            ?>
         </font>
         <br/> <br/>
         <font class = "tekstObican"> Autor: </font>
         <a class = "link" target = "_blank">
            <font class = "tekstIskosen"> 
                <?php 
                    $vlasnik = $red['Vlasnistvo'];
                    echo $vlasnik['Vlasnik'];
                ?>
            </font>
         </a>
         <br/>
         <font class = "tekstObican"> Sadrzaj: </font>
         <a class = "link" target = "_blank" href = 'http://vunica.azurewebsites.net/vunica/index.php/<?php
                if($red['Vrsta'] == 0 || $red['Vrsta'] == 2){
                    echo 'video';
                }
                else{
                    echo 'proizvod';
                }
                ?>/index/<?php echo $vlasnik['IDSadrzaj']; ?>'>
            <font class = "tekstIskosen"> 
                <?php 
                    echo $vlasnik['Sadrzaj'];
                ?>
            </font>
         </a>
         <br/> <br/>
         <font class = "tekstObican"> Osoba koja je prijavila: </font>
         <a class = "link" target = "_blank">
             <font class = "tekstIskosen">
                <?php
                    echo $red['Prijava']->UserName;
                ?>
             </font>
         </a>
         <br/>
         <font class = "tekstObican"> Datum prijave: </font>
         <font class = "tekstIskosen"> 
            <?php
                echo $red['Prijava']->Datum;
            ?>
         </font>
         <br/> <br/>      
      </td>
      <td width = "50%" valign = "top">
        <br/> <br/>
        <font class = "tekstObican"> Komentar prijave: </font>
        <div class = "poljeZaTekst" align = "left">
            <font class = "tekstObican">
                <?php
                    echo $red['Prijava']->Komentar;
                ?>
            </font>
        </div>
        <br/>
        <?php if($red['Vrsta'] == 2 || $red['Vrsta'] == 3){ ?>
            <font class = "tekstObican"> Komentar: </font>
            <div class = "poljeZaTekst" align = "left">
                <font class = "tekstObican">
                    <?php
                        echo $vlasnik['Komentar'];
                    ?>
                </font>
            </div>  
        <?php } ?>
        <br/> <br/>
      </td>
    </tr>
    <tr valign = "top">
        <td width = "50%" align = "left" valign = "top">
            <?php
                if($red['Vrsta'] == 0){
                    $id = $vlasnik['IDSadrzaj'];
                    $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiVideo/$id";
                }
                else{
                    if($red['Vrsta'] == 1){
                        $id = $vlasnik['IDSadrzaj'];
                        $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiProizvod/$id";
                    }
                    else{
                        if($red['Vrsta'] == 2){
                            $id = $vlasnik['IDKomentar'];
                            $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiKomentarVideo/$id";
                        }
                        else{
                            $id = $vlasnik['IDKomentar'];
                            $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiKomentarProizvod/$id";
                        }
                    }
                }           
            ?>
            <a  id = "prijaviobrisi" class = "akcija"
                href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete materijal?','<?php echo $kontroler; ?>')"> 
                OBRISI MATERIJAL
            </a>
            
            <br/> <br/> <br/> <br/>
        </td>
        <td width = "50%" align = "left" valign = "top">
            <?php
                $id = $red['Prijava']->IDPrijava;
                if($red['Vrsta'] == 0){
                    $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiPrijavaVideo/$id";
                }
                else{
                    if($red['Vrsta'] == 1){
                        $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiPrijavaProizvod/$id";
                    }
                    else{
                        if($red['Vrsta'] == 2){
                            $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiPrijavaKomentarVideo/$id";
                        }
                        else{
                            $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiPrijavaKomentarProizvod/$id";
                        }
                    }
                }           
            ?>
            <a  id = "prijaviobrisi" class = "akcija"
                href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete prijavu?','<?php echo $kontroler; ?>')"> 
                OBRISI PRIJAVU
            </a>
            <br/> <br/> <br/> <br/>
        </td>
    </tr>
