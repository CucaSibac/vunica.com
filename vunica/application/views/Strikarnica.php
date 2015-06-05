<!-- Tijana Trifunovic -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Strikarnica</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />


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
            
            
            <?php
 $this->session->unset_userdata('CenaOd');
        $this->session->unset_userdata('CenaDo');
        $this->session->unset_userdata('Vunica');
        $this->session->unset_userdata('Konci');
        $this->session->unset_userdata('Igle');
        $this->session->unset_userdata('MatOstalo');
        $this->session->unset_userdata('PGarderoba');
        $this->session->unset_userdata('PDodaci');
        $this->session->unset_userdata('PIgracke');
        $this->session->unset_userdata('POstalo');
        $this->session->unset_userdata('PDatum');
        $this->session->unset_userdata('PNaziv');
        $this->session->unset_userdata('PCena');
?>

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
                var num_videos = <?= $num_videos ?>;
                var loaded_videos = 0;
                $("#more_button").click(function () {
                    loaded_videos += 8;
                    $.get("http://vunica.azurewebsites.net/vunica/index.php/strikarnica/get_videos/" + loaded_videos, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_videos >= num_videos - 8)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });

            });





            //Ovo je kod za pretragu za prvu opciju (Laka tezina)
            $(document).ready(function () {
                $('#Opcija1').click(function () {
                    $src1 = $("#Opcija1").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Laka", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions1"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Laka", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions1"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Laka;
                if ($sId === "Cekirano") {
                    $('#Opcija1').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });



            //Ovo je kod za pretragu za drugu opciju (Srednja tezina)
            $(document).ready(function () {
                $('#Opcija2').click(function () {
                    $src1 = $("#Opcija2").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Srednja", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Srednja", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions2"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Srednja;
                if ($sId === "Cekirano") {
                    $('#Opcija2').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


//Ovo je kod za pretragu za trecu opciju (Teska tezina)
            $(document).ready(function () {
                $('#Opcija3').click(function () {
                    $src1 = $("#Opcija3").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Teska", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions3"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Teska", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions3"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Teska;
                if ($sId === "Cekirano") {
                    $('#Opcija3').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za cetvrtu opciju (Kategorija Garderoba)
            $(document).ready(function () {
                $('#Opcija4').click(function () {
                    $src1 = $("#Opcija4").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Garderoba", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions4"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Garderoba", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions4"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Garderoba;
                if ($sId === "Cekirano") {
                    $('#Opcija4').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za petu opciju (Kategorija Dodaci)
            $(document).ready(function () {
                $('#Opcija5').click(function () {
                    $src1 = $("#Opcija5").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Dodaci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions5"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Dodaci", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions5"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Dodaci;
                if ($sId === "Cekirano") {
                    $('#Opcija5').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });



            //Ovo je kod za pretragu za sestu opciju (Kategorija Igracke)
            $(document).ready(function () {
                $('#Opcija6').click(function () {
                    $src1 = $("#Opcija6").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Igracke", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions6"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Igracke", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions6"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Igracke;
                if ($sId === "Cekirano") {
                    $('#Opcija6').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za sedmu opciju (Kategorija Ostalo)
            $(document).ready(function () {
                $('#Opcija7').click(function () {
                    $src1 = $("#Opcija7").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Ostalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessions7"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Ostalo", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessions7"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Ostalo;
                if ($sId === "Cekirano") {
                    $('#Opcija7').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });



            //Ovo je za opciju sortiranja po datumu.
            $(document).ready(function () {
                $('#id1').click(function () {
                    $src1 = $("#i1").html();
                    
                    if ($src1 === "Datum") {
                        sessionStorage.setItem("Datum", "Najnovije");
                        sessionStorage.setItem("Naziv", "");
                        $('#id1').attr("class", "active");
                        $('#i1').html("Najnovije");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessionsD1"
                        }).done(function () {
                        });
                    } else if ($src1 === "Najnovije") {
                        sessionStorage.setItem("Datum", "Najstarije");
                        sessionStorage.setItem("Naziv", "");
                        $('#id1').attr("class", "dblclick");
                        $('#i1').html("Najstarije");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessionsD2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Datum", "");
                        sessionStorage.setItem("Naziv", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");

                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessionsD"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Datum;
                if ($sId === "Najnovije") {
                    $('#id1').attr("class", "active");
                    $('#i1').html("Najnovije");

                  
                } else if ($sId === "Najstarije") {
                    $('#id1').attr("class", "dblclick");
                    $('#i1').html("Najstarije");

                    
                } else {
                    $('#id1').attr("class", "btn");
                    $('#i1').html("Datum");

                    

                }
            });
            
            
            
            //Ovo je za opciju sortiranja po nazivu.
            $(document).ready(function () {
                $('#id2').click(function () {
                    $src1 = $("#i2").html();
                    
                    if ($src1 === "Naziv") {
                        sessionStorage.setItem("Datum", "");
                        sessionStorage.setItem("Naziv", "A-Z");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "active");
                        $('#i2').html("A-Z");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessionsN1"
                        }).done(function () {
                        });
                    } else if ($src1 === "A-Z") {
                        sessionStorage.setItem("Datum", "");
                        sessionStorage.setItem("Naziv", "Z-A");
                        $('#id1').attr("class", "");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "dblclick");
                        $('#i2').html("Z-A");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/sessionsN2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Datum", "");
                        sessionStorage.setItem("Naziv", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");

                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Strikarnica/unsessionsN"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Naziv;
                if ($sId === "A-Z") {
                    

                        $('#id2').attr("class", "active");
                        $('#i2').html("A-Z");
                } else if ($sId === "Z-A") {
                   

                        $('#id2').attr("class", "dblclick");
                        $('#i2').html("Z-A");
                } else {
                   

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");

                }
            });

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
        include("Upozorenje.php");
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
                                            <img id = "Opcija1" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija1')">
                                                <font class="tekstObican">
                                                    Laka
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija2" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija2')">
                                                <font class="tekstObican">
                                                    Srednja
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija3" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija3')">
                                                <font class="tekstObican">
                                                    Teska
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
                                            <img id = "Opcija4" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija4')">
                                                <font class="tekstObican">
                                                    Garderoba
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija5" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija5')">
                                                <font class="tekstObican">
                                                    Dodaci
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija6" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija6')">
                                                <font class="tekstObican">
                                                    Igracke
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija7" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija7')">
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
                                                <a href="http://vunica.azurewebsites.net/vunica/index.php/strikarnica" class="dugme1"> 
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
                                    <img id="arrow" class= "hide"onclick="toggle('box');" width="0px"  src="http://vunica.azurewebsites.net/vunica/application/Slike/Pretraga/KlupkoPretraga.png">
                                </li>
                            </ul>
                        </div> 

                    </td>
                </tr>
                <!-- Kraj pretrage -->


                <!-- Slogan -->                    
                <tr>
                    <td>
                        <br/> <br/> <br/> <br/><br/>


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
                                <a id="id1"class="btn" style="display:block;width:100px"  href="" >
                                    <i id="i1" class="" >
                                        Datum
                                    </i>
                                </a>
                            </li>
                            &ensp;&ensp;&ensp;
                            <li>
                                <a id="id2"class="btn" style="display:block;width:100px" href="">
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
                                        <img src = "http://vunica.azurewebsites.net/vunica/application/Slike/Linija/Ikonica.png" class ="ikonica">
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
                                    <script>
                                                    <?php
                                                    if ($this->session->UserName != '' ) { ?>//ako je korisnik prijavljen
                                                                </script>
                                                                <a href="http://vunica.azurewebsites.net/vunica/index.php/PostavljanjeVidea" style="text-decoration: none;  "> 
                                                                <script>
                                                                  
        <?php } else { ?> //ako gost pristupa sajtu
                                                                </script>
                                                                <a onclick="prikazi_registraciju()" style="text-decoration: none;  " > 
                                                                <script>
        <?php } ?> </script>                   
                                    <div class="dodajproizvod"  >  

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
                                         if($latest_videos == null){
                                                                                    ?><div align="center">
                                                                                        <br/><br/><br/><br/><br/><br/><br/><br/>
                                                                                        <font class="tekstObican" style="font-size: 25px; " align="center">Zao nam je. Nema video-a koji zadovoljavaju Vase kriterijume pretrage.</font>
                                                                                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                                                                    </div> <?php
                                                                                }
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


                                    </div>

                                    <!-- Donja linija  i ucitaj jos dugme-->

                                    <hr width = "100%" class = "linija"/>
                                    <?php
                                    if (count($latest_videos) >= 8) {
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

<?php 
    if($this->session->flashdata('reg') == 1){
        echo "<script language=\"javascript\">prikazi_registraciju();</script>";
        $this->session->set_flashdata('reg', 0);
    }
?>
<?php 
    if($this->session->flashdata('pri') == 1){
        echo "<script language=\"javascript\">prikazi_prijavu();</script>";
        $this->session->set_flashdata('pri', 0);
    }
?>
<?php 
    if($this->session->flashdata('zl') == 1){
        echo "<script language=\"javascript\">prikazi_zaboravljenu_lozinku();</script>";
        $this->session->set_flashdata('zl', 0);
    }
?>


    </body>
    <!-- InstanceEnd -->
</html>
