<!-- Tijana Trifunovic 311/12-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title><?php
            foreach ($podaci as $red) {
                ?>
                <?php
                echo $red->Naziv;
            }
            ?></title>
        <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />


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
        </script>





        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">google.load("jquery", "1.3.2");
        </script>
        <!-- OVO JE ZA DUGME UCITAJ JOS!!-->
        <script type="text/javascript">
            $(document).ready(function () {
                var num_messages = <?= $num_messages ?>;
                var loaded_messages = 0;
                $("#more_button").click(function () {
                    loaded_messages += 3;
                    $.get("http://localhost/vunica.com/vunica/index.php/video/get_messages/" + "<?php
foreach ($podaci as $red) {
    echo $red->IDVideo;
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
foreach ($podaci as $red) {
    $user = $red->UserName;
}
$status = "Admin";
?>



            $(document).ready(function () {

                //ovaj deo je za prijavu odnosno brisanje vide-a
<?php if ($this->session->UserName != '' && $this->session->UserName == $user) { ?>
                    $('#prijaviobrisi').html("Obrisi video");
                    //$('#prijaviobrisi').click(obrisi); PREPRAVITI
<?php } else if ($this->session->UserName != '' && $this->session->Status == $status) { ?>
                    $('#prijaviobrisi').html("Obrisi video");
<?php } else if ($this->session->UserName != '' && $this->session->UserName !== $user) { ?>
                    //  $('#prijaviobrisi').click(prijavi_video); PREPRAVITI
<?php } else { ?>
                    $('#prijaviobrisi').click(prikazi_registraciju);
<?php } ?>
            });
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




            $(document).ready(function () {
                $('#tezina').click(function () {
                    $src = $.trim($('#tezina').html());


                    if ($src === 'Laka') {
                        sessionStorage.setItem("Laka", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall1"
                        }).done(function () {
                        });
                    } else if ($src === 'Srednja') {
                        sessionStorage.setItem("Srednja", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall2"
                        }).done(function () {
                        });
                    } else if ($src === 'Teska') {
                        sessionStorage.setItem("Teska", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall3"
                        }).done(function () {
                        });
                    }
                });
            });

            $(document).ready(function () {
                $('#kategorija').click(function () {
                    $src = $.trim($('#kategorija').html());
                    alert($src);

                    if ($src === 'Garderoba') {
                        sessionStorage.setItem("Garderoba", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall4"
                        }).done(function () {
                        });
                    } else if ($src === 'Dodaci') {
                        sessionStorage.setItem("Dodaci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall5"
                        }).done(function () {
                        });
                    } else if ($src === 'Igracke') {
                        sessionStorage.setItem("Igracke", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall6"
                        }).done(function () {
                        });
                    }
                    else if ($src === 'Ostalo') {
                        sessionStorage.setItem("Ostalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/vunica.com/vunica/index.php/Video/unsetall7"
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
                                foreach ($podaci as $red) {
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
                                <td width="50%"  align="left"><font class="tekstObican">Autor: <a href="" class="linkovi"><?php
                                            foreach ($podaci as $red) {
                                                ?>
                                                <?php
                                                echo $red->UserName;
                                            }
                                            ?></a></font>
                                </td>
                                <td width="50%" align="right"><font class="tekstObican">Datum: <a class="linkovi" style="cursor: default"><?php
                                            foreach ($podaci as $red) {
                                                ?>
                                                <?php
                                                echo $red->Datum;
                                            }
                                            ?></a></font>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2" align="center"> <video width="100%" controls> <source src="http://localhost/Video/Omca.mp4" type="video/mp4"></video></td>
                            </tr>  
                            <tr>
                                <td colspan="2" align="left"><font class="tekstObican" style="text-justify:auto">Kratak opis:</font></td>
                            </tr>   
                            <tr>
                                <td colspan="2" align="left" style="text-align: justify;"><font class="tekstIskosen" style="text-align: justify;"><?php
                                        foreach ($podaci as $red) {
                                            ?>
                                            <?php
                                            echo $red->Opis;
                                        }
                                        ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="1" align="left">
                                    <br /><font class="tekstObican">Tezina: <a href="http://localhost/vunica.com/vunica/index.php/Strikarnica" id="tezina" class="linkovi"><?php
                                            foreach ($podaci as $red) {
                                                ?>
                                                <?php
                                                echo $red->Tezina;
                                            }
                                            ?></a></font>

                                </td><td align="right">
                                    <br /><font class="tekstObican">Kategorija: <a href="http://localhost/vunica.com/vunica/index.php/Strikarnica"i id="kategorija" class="linkovi"><?php
                                            foreach ($podaci as $red) {
                                                ?>
                                                <?php
                                                echo $red->Kategorija;
                                            }
                                            ?></a></font>
                                </td>
                                <tr>     
                                    <tr>
                                        <td colspan="2" align="right">


                                            <a onclick="" id="prijaviobrisi" class="prijaviVideo" > Prijavi video </a>    

                                        </td>
                                    </tr>



                                    <tr>
                                        <td colspan="2" align="center">
                                            <br /><textarea  maxlength="400" style="width:80%; height:120px; resize:none;text-align: justify;" placeholder="Napisite komentar" class="tekstPoljeKomentar" id="limitedtextarea" onKeyDown="limitText(400);" onKeyUp="limitText(400);"></textarea><br>
                                                <font class="preostalokaraktera">Preostalo karaktera: <font id="ostatak">400</font></font>

                                                <tr>
                                                    <td align="center">  
                                                        <a class="dugme" onclick="postavi()" > Postavi </a> 
                                                    </td>
                                                    <td align="center"> <a  class="dugme"  onclick="odustani()"> Odustani </a> 
                                                    </td>
                                                </tr>

                                                <?php
                                                if (empty($latest_messages)) {
                                                    
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
                                                                        <img src = "http://localhost/Slike/Linija/Ikonica.png" class = "ikonica">
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
                                                                foreach ($latest_messages as $message) {
                                                                    ?>


                                                                    <div class="view view-third" align="left" >  
                                                                        <a class="komentarDatum"><?php echo $message->Vreme; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $message->Datum; ?></a>
                                                                        <font class="tekstObicanAutorKomentar"  ><a class="linkovi" href="#"><?php echo $message->UserName; ?></a></font>
                                                                        <br /><br />
                                                                        <font class="tekstIskosenTekstKomentar" ><?php echo $message->Tekst; ?><br /><br /></font>
                                                                        <?php $userkom = $message->UserName; ?>
                                                                        <script>

        <?php if ($this->session->UserName != '' && $this->session->UserName == $userkom) { ?> //ako je trenutno prijavljeni korisnik ostavio komentar
                                                                            </script>
                                                                            <a  class = "prijaviKomentar" > Obrisi komentar </a>
                                                                            <script>
                                                                                //$('#prijaviobrisi').click(obrisi); PREPRAVITI
        <?php } else if ($this->session->UserName != '' && $this->session->Status == $status) { ?> // ako je trenutno prijavljen admin
                                                                            </script>
                                                                            <a  class = "prijaviKomentar" > Obrisi komentar </a>
                                                                            <script>
        <?php } else if ($this->session->UserName != '' && $this->session->UserName !== $user) { ?>//ako prijavljeni korisnik nije ostavio dati komentar
                                                                            </script>
                                                                            <a  class = "prijaviKomentar" > Prijavi komentar </a>
                                                                            <script>
                                                                                //  $('#prijaviobrisi').click(prijavi_video); PREPRAVITI
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
                                                            if (count($latest_messages) == 3) {
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




                                    </body>
                                    <!-- InstanceEnd -->
                                    </html>


