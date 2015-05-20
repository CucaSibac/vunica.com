<!--Tijana Trifunovic 311/12--> 
<?php
                                                                $brojac = 0;
                                                                foreach ($latest_proizvod as $proizvod) {
                                                                    if ($brojac % 2 == 0) {
                                                                        ?>
                                                                        <!--levi proizvod u td-u-->




                                                                        <div class="view view-third" align="left" style="float: left">  
                                                                            <img src="<?php echo $proizvod->Slika; ?>"/> 
                                                                            <div class="mask"> 
                                                                                <h2><font size="2" style="text-transform:none"><?php echo $proizvod->UserName; ?></font>
                                                                                    <br/><font size="5"><?php echo $proizvod->Naziv; ?></font>
                                                                                    <br /><font size="3" style="text-transform:none">Kategorija: <?php echo $proizvod->Kategorija; ?></font>    
                                                                                    <br /><font size="4" style="text-transform:none">CENA: <?php echo $proizvod->Cena; ?></font></h2>  
                                                                                <p><?php echo $proizvod->Opis; ?></p> 
                                                                                <a href='http://localhost/vunica.com/vunica/index.php/proizvod/index/<?php echo $proizvod->IDProizvod; ?>' class="info">Detaljnije</a>  
                                                                                <font   class="datumNaSlici">OBJAVLJENO <?php echo $proizvod->Datum; ?></font>
                                                                            </div>  
                                                                        </div> 


                                                                        <!--Kraj levog proizvoda-a-->
                                                                        
                                                                        <?php
                                                                    } else {
                                                                        ?>

                                                                        <!--Desni proizovd u td-u-->

                                                                        <div class="view view-third" align="right" style="float:right">  
                                                                            <img src="<?php echo $proizvod->Slika; ?>"  /> 
                                                                            <div class="mask"> 

                                                                                <h2><font size="2" style="text-transform:none"><?php echo $proizvod->UserName; ?></font>
                                                                                    <br/><font size="5"><?php echo $proizvod->Naziv; ?></font>
                                                                                    <br /><font size="3" style="text-transform:none">Kategorija: <?php echo $proizvod->Kategorija; ?></font>    
                                                                                    <br /><font size="4" style="text-transform:none">CENA: <?php echo $proizvod->Cena; ?></font></h2>  
                                                                                <p><?php echo $proizvod->Opis; ?></p> 
                                                                                <a href="http://localhost/vunica.com/vunica/index.php/proizvod/index/<?php echo $proizvod->IDProizvod; ?>" class="info">Detaljnije</a>  
                                                                                <font   class="datumNaSlici">OBJAVLJENO <?php echo $proizvod->Datum; ?></font>
                                                                            </div>  
                                                                        </div>  

                                                                        <br/>
                                                                        <!-- Kraj desnog proizvoda-a-->

                                                                        <?php
                                                                    }
                                                                    $brojac = $brojac + 1;
                                                                }
                                                                ?>