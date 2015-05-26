<!-- Tijana Trifunovic 311/12-->
 <?php
                                                                foreach ($latest_messages as $message) {
                                                                    ?>


                                                                    <div class="view view-third" align="left" >  
                                                                        <a class="komentarDatum"><?php echo $message->Vreme; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message->Datum; ?></a>
                                                                        <font class="tekstObicanAutorKomentar"  ><a class="linkovi" href="#"><?php echo $message->UserName; ?></a></font>
                                                                        <br /><br />
                                                                        <font class="tekstIskosenTekstKomentar" ><?php echo $message->Tekst; ?><br /><br /></font>
                                                                         <?php $userkom = $message->UserName;
                                                                         $status = "Admin";?>
                                                                        <script>
                                                                               
                                                                                <?php if ($this->session->UserName != '' && $this->session->UserName == $userkom) { ?> //ako je trenutno prijavljeni korisnik ostavio komentar
                                                                                   </script>
                                                                                            <a  class = "prijaviKomentar" > Obrisi komentar </a>
                                                                                   <script>
                                                                                            // PREPRAVITI ON CLICK FUNKCIJU
                                                                                <?php } else if ($this->session->UserName != '' && $this->session->Status == $status) { ?> // ako je trenutno prijavljen admin
                                                                                     </script>
                                                                                            <a  class = "prijaviKomentar" > Obrisi komentar </a>
                                                                                   <script>
                                                                                <?php } else if ($this->session->UserName != '' && $this->session->UserName !== $user) { ?>//ako prijavljeni korisnik nije ostavio dati komentar
                                                                                     </script>
                                                                                            <a  class = "prijaviKomentar" > Prijavi komentar </a>
                                                                                   <script>
                                                                                    // PREPRAVITI ON CLICK FUNKCIJU
                                                                                <?php } else { ?> //ako gost pristupa sajtu
                                                                                     </script>
                                                                                            <a onclick="prikazi_registraciju()" class = "prijaviKomentar" > Prijavi komentar </a>
                                                                                   <script>
                                                                                <?php } ?>

                                                                            

                                                                        </script>
                                                                    </div>  <br /><br />

                                                                <?php } ?>
