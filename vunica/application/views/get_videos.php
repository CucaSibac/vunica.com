<!-- Tijana Trifunovic 311/12-->
  <?php
                                        $brojac = 0;
                                  
                                        foreach ($latest_videos as $videos) {
                                            if ($brojac % 2 == 0) {
                                                ?>
                                                <!--levi video video u td-u-->




                                                <div class="view view-third" align="left" >  
                                                    <img src="<?php echo $videos->Slika; ?>"/> 
                                                    <h2><font size="1" style="text-transform:none"><?php echo $videos->UserName; ?></font>
                                                            <br/><font size="4"><?php echo $videos->Naziv; ?></font>
                                                            <br /><font size="2" style="text-transform:none">Kategorija: <?php echo $videos->Kategorija; ?></font>    
                                                            <br /><font size="2" style="text-transform:none">Tezina: <?php echo $videos->Tezina; ?></font></h2>  
                                                       
                                                    <div class="mask"> 
                                                         <p><?php echo $videos->Opis; ?></p> 
                                                        <a href='http://vunica.azurewebsites.net/vunica/index.php/video/index/<?php echo $videos->IDVideo; ?>' class="info">Detaljnije</a>  
                                                        <font   class="datumNaSlici">OBJAVLJENO <?php echo $videos->Datum; ?></font>
                                                    </div>  
                                                </div> 


                                                <!--Kraj levog video-a-->

                                                <?php
                                            } else {
                                                ?>

                                                <!--Desni video u td-u-->

                                                <div class="view view-third" align="right">  
                                                    <img src="<?php echo $videos->Slika; ?>" width="350" height="270" /> 
                                                    <h2><font size="1" style="text-transform:none"><?php echo $videos->UserName; ?></font>
                                                            <br/><font size="4"><?php echo $videos->Naziv; ?></font>
                                                            <br /><font size="2" style="text-transform:none">Kategorija: <?php echo $videos->Kategorija; ?></font>    
                                                            <br /><font size="2" style="text-transform:none">Tezina: <?php echo $videos->Tezina; ?></font></h2>  
                                                       <div class="mask"> 

                                                         <p><?php echo $videos->Opis; ?></p> 
                                                        <a href="http://vunica.azurewebsites.net/vunica/index.php/video/index/<?php echo $videos->IDVideo; ?>" class="info">Detaljnije</a>  
                                                        <font   class="datumNaSlici">OBJAVLJENO <?php echo $videos->Datum; ?></font>
                                                    </div>  
                                                </div>  

                                                <br/>
                                                <!-- Kraj desnog video-a-->

                                                <?php
                                            }
                                            $brojac = $brojac + 1;
                                        }
                                        ?>