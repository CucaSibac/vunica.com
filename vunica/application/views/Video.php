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



                                

                                </body>

                                <!-- InstanceEnd -->
                                </html>


