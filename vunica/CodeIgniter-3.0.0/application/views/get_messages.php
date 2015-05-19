<!-- Tijana Trifunovic 311/12-->
 <?php
                                                        foreach($latest_messages as $message) {
                                                        
                                                            ?>


                                                            <div class="view view-third" align="left" >  
                                                                <a class="komentarDatum"><?php echo $message->Vreme; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message->Datum; ?></a>
                                                                <font class="tekstObicanAutorKomentar"  ><a class="linkovi" href="#"><?php echo $message->UserName; ?></a></font>
                                                                <br /><br />
                                                                <font class="tekstIskosenTekstKomentar" ><?php echo $message->Tekst; ?><br /><br /></font>
                                                                <a href="#" class="prijaviKomentar">Prijavi komentar</a>
                                                            </div>  <br /><br />

                                                        <?php } ?>