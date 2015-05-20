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
            })
        </script>







    </head>

    <body onresize="izracunaj();" onmouseover="izracunaj();" onload="izracunaj()" id="body">

        <!-- Header -->
        <div id = "headerOkvir">
            <table id = "header">
                <tr>
                    <td width = "6%">
                        <!-- Prazna celija -->
                    </td>
                    <td id = "logoPolje">
                        <img src="http://localhost/Slike/Vunica/vunica.png" id = "logo" onclick="window.open('Index.html', '_parent')">
                    </td>
                    <td width = "8%" class = "poljeMenija" onclick="window.open('Pocetna.html', '_parent')">
                        <font class = "opcijeMenija"> Početna </font>
                    </td>
                    <td width = "1%" class="poljeMenija">
                        <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
                    </td>
                    <td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica.com/vunica/index.php/strikarnica', '_parent')">
                        <font class = "opcijeMenija"> Štrikarnica </font>
                    </td>
                    <td width = "1%" class = "poljeMenija">
                        <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
                    </td>
                    <td width = "8%" class = "poljeMenija" onclick="window.open('Pijaca.html', '_parent')">
                        <font class = "opcijeMenija"> Pijaca </font>
                    </td>
                    <td>
                        <!-- Prazna celija bez zadate sirine -->
                    </td>
                    <td id = "poljePrijava">
                        <!-- InstanceBeginEditable name="Prijava" -->
                        <font class = "opcijeMenija" style="white-space: nowrap;"> 
                            <font onclick="prikazi_prijavu()">Prijava</font>
                            /
                            <font onclick="prikazi_registraciju()">Registracija</font>
                        </font> 
                        <!-- InstanceEndEditable -->
                    </td>
                    <td id = "cegerPolje">
                        <!-- InstanceBeginEditable name="Ceger" -->
                        <img src="http://localhost/Slike/Ceger/Ceger.png" id = "ceger" onclick="window.open("Ceger.html")">  
                             <!-- InstanceEndEditable -->
                </td>
            </tr>
        </table>
    </div>

    <!--Prozor koji potamni-->
    <div id = "prazan" onclick="sakrij_sve()">
    </div>

    <!--Prozor za prijavljivanje-->
    <div id = "prijava">
        <div class = "naslovPrijava"> Prijava </div>
        <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
        <!-- InstanceBeginEditable name="PrijavaDiv" -->    
        <form style="height:100%;" name="prijava" action="prijava.php" method = "post">
            <table class="tabelaPrijava">
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">Molimo vas da unesete sledece podatke:</td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="email1" id="email1" placeholder="E-mail adresa" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="password" name="password1" id="password1" placeholder="Lozinka" class="inputPopUp"/> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>                
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="prijavi_se()"> Prijavi se!</div> </td>
                    <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div></td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>               
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">
                        Zaboravili ste lozinku? 
                        <a href="javascript:prikazi_zaboravljenu_lozinku()" class="linkPopUp"> Prijavite problem </a>
                    </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">
                        Nemate profil?
                        <a href="javascript:prikazi_registraciju()" class="linkPopUp"> Registrujte se </a>
                    </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>    
            </table>
        </form>
        <!-- InstanceEndEditable -->
    </div>

    <!--Prozor za povratak lozinke-->
    <div id="zaboravljenaLozinka">
        <div class="naslovZL"> Zaboravili ste lozinku? </div>
        <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
        <!-- InstanceBeginEditable name="ZLDiv" -->    
        <form style="height:100%;" name="zaboravljenaLozinka" action="ZaboravljenaLozinka.php" method = "post">
            <table class="tabelaZL">
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">Molimo vas da unesete svoju e-mail adresu</td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="email2" id="email2" placeholder="E-mail adresa" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="povrati_lozinku()"> Posalji</div> </td>
                    <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="prikazi_prijavu()"> Odustani</div></td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr> 
            </table>
        </form>
        <!-- InstanceEndEditable -->
    </div>

    <!--Prozor za registriovanje-->
    <div id="registracija">
        <div class="naslovRegistracija"> Registracija </div>
        <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
        <!-- InstanceBeginEditable name="RegistracijaDiv" -->    
        <form style="height:100%;" name="Registracija" action="Registracija.php" method = "post">
            <table class="tabelaRegistracija">
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">Molimo vas da unesete sledece podatke:</td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="korIme" id="korIme" placeholder="Korisnicko ime" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="ime" id="ime" placeholder="Ime i prezime" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="email3" id="email3" placeholder="E-mail adresa" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="text" name="email4" id="email4" placeholder="Potvrda e-mail adrese" class="inputPopUp" /> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="password" name="password2" id="password2" placeholder="Lozinka" class="inputPopUp"/> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2"><input type="password" name="password3" id="password3" placeholder="Potvrda lozinke" class="inputPopUp"/> </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">
                        Otvaranjem naloga pristajete na 
                        <a href="#" class="linkPopUp"> uslove koriscenja</a>
                    </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr> 
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td class="celijaDugmePopUp"> <div class="dugmePopUp" onclick="registruj_se()"> Registruj se!</div> </td>
                    <td class="celijaDugmePopUp" align="right"><div class="dugmePopUp" onclick="sakrij_sve()"> Odustani</div></td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>
                <tr>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                    <td colspan="2">
                        Vec imate nalog? 
                        <a href="javascript:prikazi_prijavu()" class="linkPopUp"> Prijavite se</a>
                    </td>
                    <td class="praznaCelijaPopUp">&nbsp;</td>
                </tr>  
            </table>
        </form>
        <!-- InstanceEndEditable -->
    </div>

    <!--Prozor za obavestenja-->
    <div id="obavestenje">
        <div id="naslovObavestenje">Obavestenje</div>
        <img src="http://localhost/Slike/Pop-up/Putaca 3.png" class="slikaPopUp" onclick="sakrij_sve()"/>
        <table class="tabelaObavestenje">
            <tr>
                <td class="praznaCelijaPopUp">&nbsp;</td>
                <td><font id="tekstZaObavestenje">&nbsp; </font></td>
                <td class="praznaCelijaPopUp">&nbsp;</td>
            </tr>  
            <tr>
                <td class="praznaCelijaPopUp">&nbsp;</td>
                <td align="center"> <div class="dugmePopUp" onclick="ok()"> Ok</div> </td>
                <td class="praznaCelijaPopUp">&nbsp;</td>
            </tr>
        </table>    
    </div>

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
                    <table id="video" width="60%" align="center" border="0" cellspacing="10">
                        <tr>
                            <td width="50%"  align="left"><font class="tekstObican">Autor: <a href="#" class="linkovi"><?php
                                        foreach ($podaci as $red) {
                                            ?>
                                            <?php
                                            echo $red->UserName;
                                        }
                                        ?></a></font>
                            </td>
                            <td width="50%" align="right"><font class="tekstObican">Datum: <a href="#" class="linkovi"><?php
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
                                <br /><font class="tekstObican">Tezina: <a href="#" class="linkovi"><?php
                                        foreach ($podaci as $red) {
                                            ?>
                                            <?php
                                            echo $red->Tezina;
                                        }
                                        ?></a></font>

                            </td><td align="right">
                                <br /><font class="tekstObican">Kategorija: <a href="#" class="linkovi"><?php
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


                                        <a href="#" class="prijaviVideo" > Prijavi video </a>    

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
                                                                    <a href="#" class="prijaviKomentar">Prijavi komentar</a>
                                                                </div>  <br /><br />

    <?php } ?>


                                                         
                                                        </div>
                                                        <hr width = "100%" class = "linija"/>
                                                        <?php
                                            if(count($latest_messages)==3){
                                                                ?>
                                                    <div id="more_button" class="morebox" target="_blank" align="center" width="100%">
                                                        <a id="" class="btnUcitajJos" style="display:block; "  onClick="ucitajjos()" >
                                                            <i >
                                                                Ucitaj jos
                                                            </i>
                                                        </a>
                                                    </div>
                                            <?php } ?>
                                                    </td>
                                                </tr>

<?php } ?>
                                            
                                                    
                                           


                                            </table>
                                            <br/>




                                            </div>           
                                            <br/> <br/> <br/> <br/>  

                                            <!-- InstanceEndEditable -->
                                    </td>
                                </tr>
                                </table>
                                </div>



                                <!-- Footer -->
                                <div id="footer" >

                                    <!-- Nevidljivi deo -->
                                    <table id = "footerGornji" onmouseover="show()" onmouseout="hide()" align="center">
                                        <tr >
                                            <td width="10%" valign = "top" align = "right">
                                                <!-- Prazna celija --> 
                                                &nbsp;
                                            </td>
                                            <td class = "footerPolje" >
                                                <font> Kontakt:</font>
                                                <br/>
                                                <font> Telefon: +38163/666-666</font>
                                                <br/>
                                                <font> E-mail: </font>
                                                <a href="mailto:vunica.com@opatija.com" target="_top" class="footerlink"> vunica.com@opatija.com </a>
                                                <br/>
                                                <font> Faks: +666-666-666</font>
                                            </td>
                                            <td id = "klupkoPolje" >
                                                <img src = "http://localhost/Slike/Vunica/Klupko.png" id = "klupko"/>
                                                <br/>
                                                <font id = "klupkoTekst"> vunica.com </font>
                                                <br/> <br/> <br/>
                                            </td>           
                                            <td  class = "footerPolje" >
                                                <font>Info:</font>
                                                <br/>
                                                <font>Kancelarija: Bogu iza nogu 2</font>
                                                <br/>
                                                <font>Pronađite nas na:</font>
                                                <br/>
                                                <a href = "https://www.facebook.com/" target = "_blank" style = "text-decoration:none">
                                                    <img src = "http://localhost/Slike/Footer/Facebook 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                                                </a>
                                                <a href = "https://twitter.com/" target = "_blank" style = "text-decoration:none">
                                                    <img src = "http://localhost/Slike/Footer/Twitter 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                                                </a>
                                                <a href = "https://www.youtube.com/" target = "_blank" style = "text-decoration:none">
                                                    <img src = "http://localhost/Slike/Footer/YouTube 1.png" width = "42px" style = "padding:8px 5px 0 2px;"/>
                                                </a>
                                            </td>
                                            <td width = "10%" valign = "top" align = "right">
                                                <!-- Prazna celija --> 
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>         

                                    <!-- Vidljivi deo -->
                                    <table id = "footerDonji" onmouseover="show()">
                                        <tr>
                                            <td width = "15%" align = "left">
                                                <!-- Bivsa prazna celija -->                  
                                                <img id = "levaStrelica" class = "strelica" src = "http://localhost/Slike/Footer/Strelica.png">
                                            </td>
                                            <td width = "15%">
                                                <font> 2015 </font>
                                            </td>
                                            <td>
                                                <font size = "3"> | </font>
                                            </td>
                                            <td width = "15%">
                                                <font> All rights reserved </font>
                                            </td>
                                            <td>
                                                <font size = "3"> | </font>
                                            </td>
                                            <td width = "15%">
                                                <font> SI3PSI </font>
                                            </td>
                                            <td>
                                                <font size = "3"> | </font>
                                            </td>
                                            <td width = "15%">
                                                <font> ETF </font>
                                            </td>
                                            <td width = "15%" align = "right">
                                                <!-- Bivsa prazna celija --> 
                                                <img id = "desnaStrelica" class = "strelica" src = "http://localhost/Slike/Footer/Strelica.png">
                                            </td>
                                        </tr>
                                    </table>

                                </div>

                                </body>

                                <!-- InstanceEnd -->
                                </html>


