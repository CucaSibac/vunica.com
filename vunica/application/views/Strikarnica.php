<!-- Tijana Trifunovic -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Strikarnica</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />

        <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! 
        
        <link rel = "shortcut icon" type = "image/png" href = "../Slike/Vunica/Ikona.png" />
        
        <link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Template (1366x768).css">
            <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Template (1920x1080).css">
        
        <link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Pop up (1366x768).css">
        <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pop up (1920x1080).css">
        
        <link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Tekst (1366x768).css">
        <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Tekst (1920x1080).css">
        
        <link rel="stylesheet" media="screen and (max-device-width: 1400px)" type="text/css" href="../CSS/Dugme (1366x768).css">
        <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Dugme (1920x1080).css">
      
            <script src="../JavaScript/PopUp.js"> </script>
            <script src="../JavaScript/Footer.js"> </script>
        
        <!-- NISTA!!!! -->

        <!-- InstanceEndEditable -->

        <!-- InstanceBeginEditable name="Head" -->

        <!-- Ovde ubacivati svoje stilove i skripte 
    
    <link rel="stylesheet" media="screen and (max-device-width: 1400px)"type="text/css" href="../CSS/Paragraf (1366x768).css">
    <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Paragraf (1920x1080).css">
    
    <link rel="stylesheet" media="screen and (max-device-width: 1400px)"type="text/css" href="../CSS/Pretraga Strikarnica (1366x768).css">
    <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Pretraga Strikarnica (1920x1080).css">
    
    <link rel="stylesheet" media="screen and (max-device-width: 1400px)"type="text/css" href="../CSS/Strikarnica (1366x768).css">
    <link rel="stylesheet" media="screen and (min-device-width: 1401px)" type="text/css" href="../CSS/Strikarnica (1920x1080).css">
    
    <script src="../JavaScript/Checkbox.js"> </script>
    <script src="../JavaScript/Pretraga.js"> </script>
    <script src="../JavaScript/Strikarnica.js"> </script>
 
        <!-- InstanceEndEditable -->

        <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (max-device-width: 1400px)">
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Pop up (1366x768).css'; ?>
<?php include '/../CSS/Tekst (1366x768).css'; ?>
<?php include '/../CSS/Dugme (1366x768).css'; ?>
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Paragraf (1366x768).css'; ?>
<?php include '/../CSS/Video (1366x768).css'; ?>
<?php include '/../CSS/Pretraga Strikarnica (1366x768).css'; ?>
<?php include '/../CSS/Strikarnica (1366x768).css'; ?>
        </style>
        <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->


        <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (min-device-width: 1401px)">
<?php include '/../CSS/Paragraf (1920x1080).css'; ?>
<?php include '/../CSS/Template (1920x1080).css'; ?>
<?php include '/../CSS/Pop up (1920x1080).css'; ?>
<?php include '/../CSS/Tekst (1920x1080).css'; ?>
<?php include '/../CSS/Dugme (1920x1080).css'; ?>
<?php include '/../CSS/Video (1920x1080).css'; ?>
<?php include '/../CSS/Pretraga Strikarnica (1920x1080).css'; ?>
<?php include '/../CSS/Strikarnica (1920x1080).css'; ?>
        </style>
        <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->

        <!--Ucitavanje js-->
        <script>
<?php include('/../JavaScript/PopUp.js'); ?>
<?php include('/../JavaScript/Footer.js'); ?>
<?php include('/../JavaScript/Checkbox.js'); ?>
<?php include('/../JavaScript/Pretraga.js'); ?>
<?php include('/../JavaScript/Strikarnica.js'); ?>
        </script>
        <!--Kraj ucitavanja js-->

        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">google.load("jquery", "1.3.2");
        </script>
        <!-- OVO JE ZA DUGME UCITAJ JOS!!-->
        <script type="text/javascript">
            $(document).ready(function () {
                var num_videos = <?= $num_videos ?>;
                var loaded_videos = 0;
                $("#more_button").click(function () {
                    loaded_videos += 8;
                    $.get("http://localhost/vunica/CodeIgniter-3.0.0/index.php/strikarnica/get_videos/" + loaded_videos, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_videos >= num_videos - 8)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });
            })
        </script>
        <!-- OVO JE KRAJ ZA DUGME UCITAJ JOS!!-->





    </head>

    <body onLoad="izracunaj();" onresize="izracunaj();" id="body" onmouseover="izracunaj();">

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
                    <td width = "8%" class = "poljeMenija" onclick="window.open('Strikarnica.html', '_parent')">
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
        <table id = "telo" border="0">
            <!-- pretraga -->
            <tr>
                <td>
                    <!-- InstanceBeginEditable name="Body" -->


                    <div id="box" class="hide" >
                        <div id = "pretraga"  >
                            <table width = "100%"  border="0"  >
                                <tr>
                                    <td width="100%" height="24px"colspan="3" id="naslovpretraga" align="center">
                                        Pretraga
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="3">
                                        <font class="tekstObican">
                                            Tezina:
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 1" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 1')">
                                            <font class="tekstObican">
                                                Pocetnicka
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 2" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 2')">
                                            <font class="tekstObican">
                                                Srednja
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 3" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 3')">
                                            <font class="tekstObican">
                                                Master
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="100%" colspan="3">
                                        <font class="tekstObican">
                                            Kategorija:
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 4" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 4')">
                                            <font class="tekstObican">
                                                Garderoba
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 5" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 5')">
                                            <font class="tekstObican">
                                                Dodaci
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 6" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 6')">
                                            <font class="tekstObican">
                                                Igracke
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10%">&nbsp;

                                    </td>
                                    <td  width="80%" style = "padding:4% 0 2% 4%;">
                                        <img id = "Opcija 7" src = "http://localhost/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija 7')">
                                            <font class="tekstObican">
                                                Ostalo
                                            </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        &nbsp;
                                    </td>
                                    <tr>
                                        <td  align="center" width="70%" colspan="3" style = "padding:3% 3% 3% 3%;">
                                            <a href="#" class="dugme1"> 
                                                Trazi 
                                            </a> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            &nbsp;
                                        </td>
                                    </tr>
                            </table>
                        </div>  
                        <!-- Kraj pretrage -->
                        <ul id="tab">
                            <li>
                                <img id="arrow" class= "hide"onclick="toggle('box');" width="0px"  src="http://localhost/Slike/Pretraga/KlupkoPretraga.png">
                            </li>
                        </ul>
                    </div> 

                </td>
            </tr>
            <!-- Kraj pretrage -->


            <!-- Slogan -->                    
            <tr>
                <td>
                    <br/> <br/> <br/> <br/><br/> <br/>


                    <div width = 100% align = "center">
                        <font class = "naslovObican">
                            DOBRODOSLI
                        </font>
                        <br/>
                        <font class = "naslovIskosen">
                            u
                        </font>
                        <br/>
                        <font class = "naslovObican">
                            STRIKARNICU
                        </font>
                    </div>         
                </td>
            </tr>
            <!-- Kraj slogana -->

            <!-- Sort -->
            <tr>
                <td>

                    <br/> <br/> 

                    <div class="button-group-navigation" target="_blank" align="center">
                        <li >
                            <a id="id1"class="btn" style="display:block;width:100px" href="#" onClick="f1()" >
                                <i id="i1" class="" >
                                    Datum
                                </i>
                            </a>
                        </li>
                        &ensp;&ensp;&ensp;
                        <li>
                            <a id="id2"class="btn" style="display:block;width:100px" href="#" onClick="f2()">
                                <i id="i2" class="">
                                    Naziv
                                </i>
                            </a>
                        </li>

                    </div>

                    <br />
                    <br />
                </td>
            </tr>
            <!-- Kraj sorta -->

            <!-- Uokviren paragraf -->
            <!-- Gornja linija -->
            <tr>
                <td>

                    <div class = "paragraf">

                        <table width = "60%" align = "center">
                            <tr>
                                <td width = "46%">
                                    <hr width = "100%" class = "linija"/>
                                </td>
                                <td width = "8%" align="center">
                                    <img src = "http://localhost/Slike/Linija/Ikonica.png" class ="ikonica">
                                </td>
                                <td width = "46%">
                                    <hr width = "100%" class = "linija"/>
                                </td>
                            </tr>
                        </table>             

                    </div>

                </td>
            </tr>
            <!-- Kraj gornje linije -->

            <!-- Video-i u strikarnici-->
            <tr>
                <td>


                    <table width = "77%" align = "center" border="0">

                        <!--Dodaj video-->
                        <tr>
                            
                            <td  align = "center" >
                                <br/>
                                <a href="#" style="text-decoration: none;  "><div class="dodajproizvod"  >  
                                        
                                        <p style="text-align: center">  Dodaj video</p>
                                    </div> </a><div class="mask"> </div>
                                    <br/>
                            </td>
                        </tr>
                        <!--Kraj dodaj video-->
                        <tr>
                            <td>
                                <div id="main_content">

                                    <?php
                                    $brojac = 0;
                                    foreach ($latest_videos as $videos) {
                                        if ($brojac % 2 == 0) {
                                            ?>
                                            <!--levi video video u td-u-->




                                            <div class="view view-third" align="left" >  
                                                <img src="<?php echo $videos->Slika; ?>"/> 
                                                <div class="mask"> 
                                                    <h2><font size="1" style="text-transform:none"><?php echo $videos->UserName; ?></font>
                                                        <br/><font size="4"><?php echo $videos->Naziv; ?></font>
                                                        <br /><font size="2" style="text-transform:none">Kategorija: <?php echo $videos->Kategorija; ?></font>    
                                                        <br /><font size="2" style="text-transform:none">Tezina: <?php echo $videos->Tezina; ?></font></h2>  
                                                    <p><?php echo $videos->Opis; ?></p> 
                                                    <a href='http://localhost/vunica/CodeIgniter-3.0.0/index.php/video/index/<?php echo $videos->IDVideo; ?>' class="info">Detaljnije</a>  
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
                                                <div class="mask"> 

                                                    <h2><font size="1" style="text-transform:none"><?php echo $videos->UserName; ?></font>
                                                        <br/><font size="4"><?php echo $videos->Naziv; ?></font>
                                                        <br /><font size="2" style="text-transform:none">Kategorija: <?php echo $videos->Kategorija; ?></font>    
                                                        <br /><font size="2" style="text-transform:none">Tezina: <?php echo $videos->Tezina; ?></font></h2>  
                                                    <p><?php echo $videos->Opis; ?></p> 
                                                    <a href="http://localhost/vunica/CodeIgniter-3.0.0/index.php/video/index/<?php echo $videos->IDVideo; ?>" class="info">Detaljnije</a>  
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


                                </div>
                                
                                 <!-- Donja linija  i ucitaj jos dugme-->
                                 
                                <hr width = "100%" class = "linija"/>
                                <?php
                                if (count($latest_videos) == 8) {
                                    ?>
                                    <div id="more_button" class="morebox" target="_blank" align="center" width="100%">
                                        <a id="" class="btnUcitajJos" style="display:block; "  onClick="ucitajjos()" >
                                            <i >
                                                Ucitaj jos
                                            </i>
                                        </a>
                                    </div>
                                <!-- Kraj donje linije i ucitaj jos dugmeta-->
                                <?php } ?>
                                
                            </td>
                        </tr>

                       
                        
                        

                    </table>
                </td>
            </tr>

            -//                 

            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
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
