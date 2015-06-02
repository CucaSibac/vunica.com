  <?php
                                                            foreach ($latest_messagesp as $message) {
                                                                $idkomentar = $message->IDKomentar;
                                                                $status = "Admin";
                                                                ?>


                                                                <?php if ($message->Komentar !== null && $this->session->UserName != '' && $this->session->Status == $status) { ?>
                                                    <div class="view view-third" style="background-color: rgba(248, 154, 164, 0.1);" align="left" >  
                                                        <?php } else if ($message->Komentar === null && $this->session->UserName != '' && $this->session->Status == $status) { ?>
                                                        <div class="view view-third" style="background-color: rgba(172, 206, 192, 0.1);	" align="left" > 
                                                        <?php }else {?>
                                                            <div class="view view-third"  align="left" >
                                                        <?php }?>
                                                                    <a class="komentarDatum"><?php echo $message->Vreme; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message->Datum; ?></a>
                                                                    <font class="tekstObicanAutorKomentar"  ><a class="linkovi" href="#"><?php echo $message->UserName; ?></a></font>
                                                                    <br /><br />
                                                                    <font class="tekstIskosenTekstKomentar" ><?php echo $message->Tekst; ?><br /><br /></font>
                                                                    <?php $userkom = $message->UserName; ?>
                                                                    <script>

        <?php
        $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiKomentarProizvod/$message->IDKomentar";
        if ($this->session->UserName != '' && $this->session->UserName == $userkom) {
            ?> //ako je trenutno prijavljeni korisnik ostavio komentar
                                                                        </script>
                                                                        <a href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete komentar?','<?php echo $kontroler; ?>')" class = "prijaviKomentar" > Obrisi komentar </a>
                                                                        <script>

        <?php } else if ($this->session->UserName != '' && $this->session->Status == $status) { ?> // ako je trenutno prijavljen admin
                                                                        </script>
                                                                        <a href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete komentar?','<?php echo $kontroler; ?>')" class = "prijaviKomentar" > Obrisi komentar </a>
                                                                        <script>
        <?php } else if ($this->session->UserName != '' && $this->session->UserName !== $userkom) { ?>//ako prijavljeni korisnik nije ostavio dati komentar
            <?php include("PrijavaKomentarVideo.php"); ?>
                                                                        </script>

                                                                        <a onclick="prikazi_prijavu_komentara_proizvod('<?php echo $idkomentar; ?>')" class = "prijaviKomentar" > Prijavi komentar </a>
                                                                        <script>
                                                                            
        <?php } else { ?> //ako gost pristupa sajtu
                                                                        </script>
                                                                        <a onclick="prikazi_registraciju()" class = "prijaviKomentar" > Prijavi komentar </a>
                                                                        <script>
        <?php } ?>

                                                                        //< a  class = "prijaviKomentar" > Prijavi komentar < /a>

                                                                    </script>
                                                                </div>  <br /><br />

                                                            <?php } ?>