<!-- Tijana Trifunovic 311/12 i Ivana Lisanin 531/12 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title><?php
            foreach ($podacip as $red) {
                ?>
                <?php
                echo $red->Naziv;
            }
            ?></title>
        <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />


        <style media="screen and (max-device-width: 1400px)">
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Pop up (1366x768).css'; ?>
<?php include '/../CSS/Tekst (1366x768).css'; ?>
<?php include '/../CSS/Dugme (1366x768).css'; ?>
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Paragraf (1366x768).css'; ?>
<?php include '/../CSS/Video (1366x768).css'; ?>
        </style>

        <style media="screen and (min-device-width: 1401px)">
<?php include '/../CSS/Paragraf (1920x1080).css'; ?>
<?php include '/../CSS/Template (1920x1080).css'; ?>
<?php include '/../CSS/Pop up (1920x1080).css'; ?>
<?php include '/../CSS/Tekst (1920x1080).css'; ?>
<?php include '/../CSS/Dugme (1920x1080).css'; ?>
<?php include '/../CSS/Video (1920x1080).css'; ?>
        </style>
        <script>
<?php include('/../JavaScript/PopUp.js'); ?>
<?php include('/../JavaScript/Footer.js'); ?>
<?php include('/../JavaScript/Checkbox.js'); ?>
<?php include('/../JavaScript/Video.js'); ?>
  <?php include('/../JavaScript/PrijavaSadrzaja.js'); ?>
<?php include('/../JavaScript/Proizvod.js'); ?>
        </script>





        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">google.load("jquery", "1.3.2");
        </script>
        <!-- OVO JE ZA DUGME UCITAJ JOS!!-->
        <script type="text/javascript">
            $(document).ready(function () {
                var num_messages = <?= $num_messagesp ?>;
                var loaded_messages = 0;
                $("#more_button").click(function () {
                    loaded_messages += 3;
                    $.get("http://vunica.azurewebsites.net/vunica/index.php/proizvod/get_messages/" + "<?php
foreach ($podacip as $red) {
    echo $red->IDProizvod;
}
?>" + "/" + loaded_messages, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_messages >= num_messages - 3)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });
            });
<?php
foreach ($podacip as $red) {
    $user = $red->UserName;
    $idProizvod = $red->IDProizvod;
    $nazivProizvoda = $red->Naziv;
    $cena = $red->Cena;
    $this->session->set_flashdata('proizvodId', $idProizvod);
}
$status = "Admin";
$usersession = $this->session->userdata('UserName');
?>









            /*
             $(document).ready(function () {
             $('#tezina').click(function () {
             $src = $.trim($('#tezina').html());
             
             sessionStorage.setItem("Teska", "");
             sessionStorage.setItem('Laka', "");
             sessionStorage.setItem('Srednja', "");
             sessionStorage.setItem('Teska', "");
             sessionStorage.setItem('Garderoba', "");
             sessionStorage.setItem('Dodaci', "");
             sessionStorage.setItem('Igracke', "");
             sessionStorage.setItem('Ostalo', "");
             sessionStorage.setItem('Datum', "");
             sessionStorage.setItem('Naziv', "");
             if ($src === 'Laka') {
             sessionStorage.setItem("Laka", "Cekirano");
             $.ajax({
             type: "POST",
             url: "http://vunica.azurewebsites.net/vunica/index.php/Video/unsetall1"
             }).done(function () {
             });
             } else if ($src === 'Srednja') {
             sessionStorage.setItem("Srednja", "Cekirano");
             $.ajax({
             type: "POST",
             url: "http://vunica.azurewebsites.net/vunica/index.php/Video/unsetall2"
             }).done(function () {
             });
             } else if ($src === 'Teska') {
             sessionStorage.setItem("Teska", "Cekirano");
             $.ajax({
             type: "POST",
             url: "http://vunica.azurewebsites.net/vunica/index.php/Video/unsetall3"
             }).done(function () {
             });
             }
             });
             });
             */
            $(document).ready(function () {
                $('#kategorija').click(function () {
                    $src = $.trim($('#kategorija').html());

                    sessionStorage.setItem('CenaOd', "");
                    sessionStorage.setItem('CenaDo', "");
                    sessionStorage.setItem('Vunica', "");
                    sessionStorage.setItem('Konci', "");
                    sessionStorage.setItem('Igle', "");
                    sessionStorage.setItem('MatOstalo', "");
                    sessionStorage.setItem('PGarderoba', "");
                    sessionStorage.setItem('PDodaci', "");
                    sessionStorage.setItem('PIgracke', "");
                    sessionStorage.setItem('POstalo', "");
                    sessionStorage.setItem('PDatum', "");
                    sessionStorage.setItem('PNaziv', "");
                    sessionStorage.setItem('PCena', "");
                    if ($src === 'Vunica') {
                        sessionStorage.setItem("Vunica", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall1"
                        }).done(function () {
                        });
                    } else if ($src === 'Konci') {
                        sessionStorage.setItem("Konci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall2"
                        }).done(function () {
                        });
                    } else if ($src === 'Igle') {
                        sessionStorage.setItem("Igle", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall3"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Ostali materijali') {
                        sessionStorage.setItem("MatOstalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall4"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Garderoba') {
                        sessionStorage.setItem("PGarderoba", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall5"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Dodaci') {
                        sessionStorage.setItem("PDodaci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall6"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Igracke') {
                        sessionStorage.setItem("PIgracke", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall7"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Ostalo') {
                        sessionStorage.setItem("POstalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Proizvod/unsetall8"
                        }).done(function () {
                        });
                    }
                });
            });





        </script>







    </head>

    <body onresize="izracunaj();" onmouseover="izracunaj();" onload="izracunaj()" id="body">

        <?php
        include("Header.php");
        include("Obavestenje.php");
        include("Prijava.php");
        include("Registracija.php");
        include("Zaboravljena lozinka.php");
        include("Footer.php");
        include("Upozorenje.php");
        include("brisanjesesijestrikarnica.php");
        include("PrijavaKomentaraProizvod.php");
        include("PrijavaProizvoda.php");
        include("PrijavaKomentarVideo.php");
        include("PrijavaVideo.php");
        ?>	




        <!-- Telo strane -->
        <div id = "teloOkvir">
            <table id = "telo">
                <tr>
                    <td>
                        <!-- InstanceBeginEditable name="Body" -->
                        <br/> <br/> <br/> <br/> <br /><br />

                        <!-- Slogan -->
                        <div width = "60%" align = "center" height="30%">
                            <font class = "naslovObican" style ="text-transform: uppercase;">
                                <?php
                                foreach ($podacip as $red) {
                                    ?>
                                    <?php
                                    echo $red->Naziv;
                                }
                                ?>
                            </font>
                        </div>
                        <br />
                        <!-- Kraj slogana -->

                        <table id="video" width="60%" align="center" border="0" cellspacing="10">
                            <tr>
                                <?php
                                            foreach ($podacip as $red) {
                                               
                                                $idkorisnik = $red->IDKorisnik;
                                                
                                            }
                                            ?>
                                <td width="50%"  align="left"><font class="tekstObican">Autor: <a href="http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $idkorisnik?>" class="linkovi"><?php
                                            foreach ($podacip as $red) {
                                                ?>
                                                <?php
                                                echo $red->UserName;
                                            }
                                            ?></a></font>
                                </td>
                                <td width="50%" align="right"><font class="tekstObican">Datum: <a class="linkovi" style="cursor: default"><?php
                                            foreach ($podacip as $red) {
                                                ?>
                                                <?php
                                                echo $red->Datum;
                                            }
                                            ?></a></font>
                                </td>
                            </tr> 
                            <tr>
                                <td rowspan="3" align="left" width="40%">
                                    &nbsp; &nbsp;
                                    <img height="400px" width="300px" src="<?php
                                    foreach ($podacip as $red) {
                                        ?>
                                        <?php
                                        echo $red->Slika;
                                    }
                                    ?>" 
                                         width="320px"/> 
                                </td>
                                <td height="80%" width="60%">
                                    <br /> <br /> <br /> <br /> 

                                </td>
                            </tr>  
                            <tr >
                                <td align="center" class="tekstObican"> Kolicina:
                                    <?php
                                    foreach ($podacip as $red) {
                                        ?>
                                        <?php
                                        $broj = $red->BrojArtikala;
                                        
                                        
                                          $niz = $this->session->Proizvodi;
                    $ukupnoKolicina = 0;
                    if($niz != ''){
                        if(count($niz) > 0){
                            $i = 0;
                            $duzina = count($niz);
                            for(;$i < $duzina;$i++){
                                if (($niz[$i][0])=== $red->IDProizvod){
                                    $ukupnoKolicina = $ukupnoKolicina + (int)($niz[$i][3]);
                                }
                                
                            }
                            $broj = $red->BrojArtikala - $ukupnoKolicina;
                               
                
                    }}
                                   
                                        
                                        
                                    }
                                    ?>

                                    <input type="button" class="dugme" value="-" onclick="minus()"/>


                                    <font class="tekstObican" id="kolicina" name="Kolicina" >1</font>


                                    <input type="button" class="dugme" value="+" onclick="plus(<?php echo $broj; ?>)"/>
                                    
                                        
                                        
                                        
                                </td>

                            </tr>
                            <tr>
                                <td width="60%" align="center">
                                    <br /> <br /> <br />
                                   <!--Forma za ceger-->
                                        <?php
                                    $attributes = array('id' => 'formaStaviUCeger');
                                    echo form_open("Proizvod/StaviUCeger", $attributes);
                                    ?>

                                    <script>
                                    <?php if ($this->session->UserName != '') { ?>//ako je korisnik prijavljen
                                        </script>

                                   <a  class = "dugme" onclick="document.forms['formaStaviUCeger'].submit();" style="cursor: pointer" > Stavi u ceger </a> 

                                        <script>

                                          <?php } else { ?> //ako gost pristupa sajtu
                                        </script>
                                        <a onclick="prikazi_registraciju()" class = "dugme" > Stavi u ceger </a>
                                        <script>
                                        <?php } ?></script>                           
                                    <input type="hidden" name="IDProizvod" id="IDProizvod"  value="<?php echo $idProizvod ?>"/>
                                    <input type="hidden" name="Cena" id="Cena"  value="<?php echo $cena ?>"/>
                                    
                                    <?php if ($broj == 0) { ?>
                                    <input type="hidden" name="KolicinaForma" id="KolicinaForma"  value="0"/>
                                    <?php } else { ?>
                                        <input type="hidden" name="KolicinaForma" id="KolicinaForma"  value="1"/>
                                    <?php} ?>
                                    <input type="hidden" name="NazivProizvoda" id="NazivProizvoda"  value="<?php echo $nazivProizvoda?>"/>
                                        <?php echo form_close(); ?>
                                    <!--Kraj forme za ceger-->
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left"><font class="tekstObican" style="text-justify:auto">Kratak opis:</font></td>
                            </tr>   
                            <tr>
                                <td colspan="2" align="left" style="text-align: justify;"><font class="tekstIskosen" style="text-align: justify;"><?php
                                        foreach ($podacip as $red) {
                                            ?>
                                            <?php
                                            echo $red->Opis;
                                        }
                                        ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="1" align="left">
                                    <br /><font class="tekstObican">Cena: <a  id="tezina" class="linkovi"><?php
                                            foreach ($podacip as $red) {
                                                ?>
                                                <?php
                                                echo $red->Cena;
                                            }
                                            ?>&#8364;</a>
                                    </font>
                                    </br>
                                    <font class="tekstObican">Broj artikala: <a  id="tezina" class="linkovi"><?php
                                            foreach ($podacip as $red) {
                                                ?>
                                                <?php
                                                echo $broj;
                                            }
                                            ?></a>
                                    </font>


                                </td><td align="right">
                                    <br /><font class="tekstObican">Kategorija: <a href="http://vunica.azurewebsites.net/vunica/index.php/Pijaca"i id="kategorija" class="linkovi"><?php
                                            foreach ($podacip as $red) {
                                                ?>
                                                <?php
                                                echo $red->Kategorija;
                                            }
                                            ?></a></font>
                                </td>
                            </tr>     
                            <tr>
                                    <td align="left">
                               <?php if ($this->session->UserName != '' && $this->session->UserName == $user) {
                                        ?>
                                          
                                            <a    class="prijaviVideo" href="http://vunica.azurewebsites.net/vunica/index.php/ProizvodEditovanje/index/<?php echo $idProizvod?>" >Izmeni proizvod</a>
                                    <?php } ?>
                                </td>
                                <td  align="right">



                                    <?php
                                    $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiProizvod/$idProizvod";
                                    if ($this->session->UserName != '' && $this->session->UserName == $user) {
                                        ?>
                                        <a  id="prijaviobrisi" href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete proizvod?','<?php echo $kontroler; ?>')" class="prijaviVideo" >Obrisi proizvod</a>   
                                           
                                    <?php } else if ($this->session->UserName != '' && $this->session->Status == $status) { ?>
                                        <a onclick="" id="prijaviobrisi" href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete proizvod?','<?php echo $kontroler; ?>')" class="prijaviVideo" > Obrisi proizvod </a>   
                                    <?php } else if ($this->session->UserName != '' && $this->session->UserName !== $user) { ?>
                                        <a onclick="prikazi_prijavu_proizvod();" id="prijaviobrisi" class="prijaviVideo" > Prijavi proizvod </a>  
                                    <?php } else { ?>
                                        <a onclick="prikazi_registraciju()" id="prijaviobrisi" class="prijaviVideo" > Prijavi proizvod </a>  
                                    <?php } ?>



                                </td>
                            </tr>



                            <!-- PISANJE KOMENTARA-->
                            <?php
                            $attributes = array('id' => 'formaKomentarProizvod', 'UserName' => $user);
                            echo form_open("Proizvod/komentarp", $attributes);
                            ?>
                            <tr>
                                <td colspan="2" align="center">
                                    <br />
                                    <?php
                                    if ($this->session->userdata('tekstpGreska')) {
                                        ?>
                                        <textarea  value="<?php echo set_value('Tekst'); ?>" name="Tekst" maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify; " placeholder="Morate da unesete tekst komentara" class="tekstPoljeKomentarGreska" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea><br>
                                            <?php
                                        } else {
                                            ?>
                                            <textarea  value="<?php echo set_value('Tekst'); ?>" name="Tekst" maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify;" placeholder="Napisite komentar" class="tekstPoljeKomentar" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea><br>
                                            <?php } ?>
                                            <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatak">400</font></font>

                                            <tr>
                                                <td align="center">  


                                                    <script>
<?php if ($this->session->UserName != '') { ?>//ako je korisnik prijavljen
                                                        </script>

                                                        <a  class = "dugme" onclick="document.forms['formaKomentarProizvod'].submit();
                                                                        " > Postavi </a> 

                                                        <script>

<?php } else { ?> //ako gost pristupa sajtu
                                                        </script>
                                                        <a onclick="prikazi_registraciju()" class = "dugme" > Postavi </a>
                                                        <script>
                                                        <?php } ?></script>                             </td>
                                                <td align="center"> <a  class="dugme"  onclick="odustani()"> Odustani </a> 
                                                </td>
                                            </tr>
                                            <input type="hidden" name="UserName" id="UserName"  value="<?php echo $usersession ?>"/>
                                            <input type="hidden" name="IDProizvod" id="IDProizvod"  value="<?php echo $idProizvod ?>"/>
                                            </td>
                                            </tr>
                                            <?php echo form_close(); ?>
                                            <!-- KRAJ PISANJA KOEMNTARA-->



                                            <?php
                                            if (empty($latest_messagesp)) {
                                                
                                            } else {
                                                ?>
                                                <tr  >
                                                    <td colspan="2">
                                                        <br />
                                                        <br /><br />
                                                        <table width = "100%" align = "center">
                                                            <tr >
                                                                <td width = "46%">
                                                                    <hr width = "100%" class = "linija"/>
                                                                </td>
                                                                <td width = "8%" align="center">
                                                                    <img src = "http://vunica.azurewebsites.net/vunica/application/Slike/Linija/Ikonica.png" class = "ikonica">
                                                                </td>
                                                                <td width = "46%">
                                                                    <hr width = "100%" class = "linija"/>
                                                                </td>
                                                            </tr>
                                                        </table> 
                                                    </td>
                                                </tr> 
                                                <!--Komentari i ucitaj jos-->
                                                <tr >
                                                    <td colspan="2" align="center" >
                                                        <div id="main_content">
                                                            <br/>
                                                            <?php
                                                            foreach ($latest_messagesp as $message) {
                                                                $idkomentar = $message->IDKomentar;
                                                                $idkorisnikkomentar = $message->IDKorisnik;
                                                                ?>


                                                                <?php if ($message->Komentar !== null && $this->session->UserName != '' && $this->session->Status == $status) { ?>
                                                    <div class="view view-third" style="background-color: rgba(248, 154, 164, 0.1);" align="left" >  
                                                        <?php } else if ($message->Komentar === null && $this->session->UserName != '' && $this->session->Status == $status) { ?>
                                                        <div class="view view-third" style="background-color: rgba(172, 206, 192, 0.1);	" align="left" > 
                                                        <?php }else {?>
                                                            <div class="view view-third"  align="left" >
                                                        <?php }?>
                                                                    <a class="komentarDatum"><?php echo $message->Vreme; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message->Datum; ?></a>
                                                                    <font class="tekstObicanAutorKomentar"  ><a class="linkovi" href="http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $idkorisnikkomentar?>"><?php echo $message->UserName; ?></a></font>
                                                                    <br /><br />
                                                                    <font class="tekstIskosenTekstKomentar" ><?php echo $message->Tekst; ?><br /><br /></font>
                                                                    <?php $userkom = $message->UserName; ?>
                                                                    <script>

        <?php
        $kontroler = "http://vunica.azurewebsites.net/vunica/index.php/Obrisi/obrisiKomentarProizvod/$message->IDKomentar";
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


                                                            <!--Donja linija i ucitaj jos-->
                                                        </div>
                                                        <hr width = "100%" class = "linija"/>
                                                        <?php
                                                        if (count($latest_messagesp) == 3) {
                                                            ?>
                                                            <div id="more_button" class="morebox" target="_blank" align="center" width="100%">
                                                                <a id="" class="btnUcitajJos" style="display:block; "  onClick="ucitajjos()" >
                                                                    <i >
                                                                        Ucitaj jos
                                                                    </i>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                        <!--Kraj donje linije i ucitaj jos-->

                                                    </td>
                                                </tr>
                                                <!--Kraj komentara i ucitaj jos-->
                                            <?php } ?>




                                            </table>
                                            <br/><br/> <br/> <br/> <br/>        

                                            </td>
                                            </tr>
                                            </table>
                                            </div>

                                            <!--Kraj tela strane-->

                                            <?php
                                            if ($this->session->flashdata('reg') == 1) {
                                                echo "<script language=\"javascript\">prikazi_registraciju();</script>";
                                                $this->session->set_flashdata('reg', 0);
                                            }
                                            ?>
                                            <?php
                                            if ($this->session->flashdata('pri') == 1) {
                                                echo "<script language=\"javascript\">prikazi_prijavu();</script>";
                                                $this->session->set_flashdata('pri', 0);
                                            }
                                            ?>
                                            <?php
                                            if ($this->session->flashdata('zl') == 1) {
                                                echo "<script language=\"javascript\">prikazi_zaboravljenu_lozinku();</script>";
                                                $this->session->set_flashdata('zl', 0);
                                            }
                                            ?>

                                            </body>
                                            <!-- InstanceEnd -->
                                            </html>


