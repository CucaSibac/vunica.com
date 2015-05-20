<!-- Tijana Trifunovic -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Strikarnica</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />


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
                    $.get("http://localhost/vunica.com/vunica/index.php/strikarnica/get_videos/" + loaded_videos, function (data) {
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
                                <a href="http://localhost/vunica.com/vunica/index.php/PostavljanjeVidea" style="text-decoration: none;  "><div class="dodajproizvod"  >  
                                        
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
                                                    <a href='http://localhost/vunica.com/vunica/index.php/video/index/<?php echo $videos->IDVideo; ?>' class="info">Detaljnije</a>  
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
                                                    <a href="http://localhost/vunica.com/vunica/index.php/video/index/<?php echo $videos->IDVideo; ?>" class="info">Detaljnije</a>  
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



  

</body>
<!-- InstanceEnd -->
</html>
