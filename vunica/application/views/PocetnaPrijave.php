<!-- Teodora Aleksic, 391/12-->

    <tr>
      <td width = "50%" valign = "top">
         <br/>
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
         <a class = "link" target = "_blank">
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
        <br/>
        <font class = "tekstObican"> Komentar prijave: </font>
        <div class = "poljeZaTekst" align = "left">
            <font class = "tekstObican">
                <?php
                    echo $red['Prijava']->Komentar;
                ?>
            </font>
        </div>
        <br/> <br/>
      </td>
    </tr>
    <tr>
        <td colspan = "2" width = "50%" align = "left">
            <a class = "akcija" 
               href='http://localhost/vunica.com/vunica/index.php/<?php
                    if($red['Vrsta'] == 0 || $red['Vrsta'] == 3){
                        echo 'video';
                    }
                    else{
                        echo 'proizvod';
                    }
               ?>/index/<?php echo $vlasnik['IDSadrzaj']; ?>'>
                POGLEDAJ MATERIJAL
            </a>
            
            <br/> <br/>
            
            <?php 
                //$attributes = array('id' => 'formaProfilEditovanje');
                echo form_open("Pocetna/obrisiPrijavu"); 
            ?>
            <input type = "submit" class = "akcija" value = "OBRISI PRIJAVU"/>
            <?php echo form_close(); ?>
            
            <br/> <br/> <br/>
        </td>
    </tr>
