<!-- Tijana Trifunovic -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Pijaca</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />


        <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (max-device-width: 1400px)">
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Pop up (1366x768).css'; ?>
<?php include '/../CSS/Tekst (1366x768).css'; ?>
<?php include '/../CSS/Dugme (1366x768).css'; ?>
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Paragraf (1366x768).css'; ?>
<?php include '/../CSS/Pretraga (1366x768).css'; ?>
<?php include '/../CSS/Pijaca (1366x768).css'; ?>
<?php include '/../CSS/Profil - Editovanje (1366x768).css'; ?>
        </style>
        <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->


        <!--Ucitavanje css za rezoluciju (1920x1080)-->
        <style media="screen and (min-device-width: 1401px)">
<?php include '/../CSS/Paragraf (1920x1080).css'; ?>
<?php include '/../CSS/Template (1920x1080).css'; ?>
<?php include '/../CSS/Pop up (1920x1080).css'; ?>
<?php include '/../CSS/Tekst (1920x1080).css'; ?>
<?php include '/../CSS/Dugme (1920x1080).css'; ?>
<?php include '/../CSS/Pretraga (1920x1080).css'; ?>
<?php include '/../CSS/Pijaca (1920x1080).css'; ?>
<?php include '/../CSS/Profil - Editovanje (1920x1080).css'; ?>
        </style>
        <!--Kraj ucitavanja css za rezoluciju (1920x1080)-->

        <!--Ucitavanje js-->
        <script>
<?php include('/../JavaScript/PopUp.js'); ?>
<?php include('/../JavaScript/Footer.js'); ?>
<?php include('/../JavaScript/Checkbox.js'); ?>
<?php include('/../JavaScript/Pretraga.js'); ?>
<?php include('/../JavaScript/Pijaca.js'); ?>
        </script>
        <!--Kraj ucitavanja js-->

        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">google.load("jquery", "1.3.2");
        </script>
        <!-- OVO JE ZA DUGME UCITAJ JOS!!-->
        <script type="text/javascript">

<?php
$this->session->unset_userdata('Laka');
$this->session->unset_userdata('Srednja');
$this->session->unset_userdata('Teska');
$this->session->unset_userdata('Garderoba');
$this->session->unset_userdata('Dodaci');
$this->session->unset_userdata('Igracke');
$this->session->unset_userdata('Ostalo');
$this->session->unset_userdata('Datum');
$this->session->unset_userdata('Naziv');
?>
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
            $(document).ready(function () {
                var num_proizvod = <?= $num_proizvod ?>;
                var loaded_proizvod = 0;
                $("#more_button").click(function () {
                    loaded_proizvod += 8;
                    $.get("http://vunica.azurewebsites.net/vunica/index.php/pijaca/get_proizvod/" + loaded_proizvod, function (data) {
                        $("#main_content").append(data);

                    });

                    if (loaded_proizvod >= num_proizvod - 8)
                    {
                        $("#more_button").hide();
                        //alert('hide');
                    }
                });
            });

            //Ovo je kod za pretragu za cenu od
            $(document).ready(function () {
                $('#manji').change(function () {
                    $src1 = $("#manji").attr("value");

                    var value = $("#manji").val();
                    if ($src1 !== "") {
                        sessionStorage.setItem("CenaOd", $src1);
                        $.ajax({
                            type: "POST",
                            data: {'value': value},
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsCod"


                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("CenaOd", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessionsCod"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.CenaOd;

                if ($sId !== undefined && $sId !== "") {
                    $('#manji').attr("value", $sId);
                    $('#box').attr("class", "show");
                }

            });

            //Ovo je kod za pretragu za cenu do
            $(document).ready(function () {
                $('#veci').change(function () {
                    $src1 = $("#veci").attr("value");

                    var value = $("#veci").val();
                    if ($src1 !== "") {
                        sessionStorage.setItem("CenaDo", $src1);
                        $.ajax({
                            type: "POST",
                            data: {'value': value},
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsCdo"


                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("CenaDo", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessionsCdo"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.CenaDo;

                if ($sId !== undefined && $sId !== "") {
                    $('#veci').attr("value", $sId);
                    $('#box').attr("class", "show");
                }
            });






            //Ovo je kod za pretragu za materijal vunica
            $(document).ready(function () {
                $('#Opcija1').click(function () {
                    $src1 = $("#Opcija1").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Vunica", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions1"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Vunica", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions1"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Vunica;
                if ($sId === "Cekirano") {
                    $('#Opcija1').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });

            //Ovo je kod za pretragu za materijal konci
            $(document).ready(function () {
                $('#Opcija2').click(function () {
                    $src1 = $("#Opcija2").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Konci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Konci", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions2"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Konci;
                if ($sId === "Cekirano") {
                    $('#Opcija2').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za materijal igle
            $(document).ready(function () {
                $('#Opcija3').click(function () {
                    $src1 = $("#Opcija3").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("Igle", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions3"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("Igle", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions3"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.Igle;
                if ($sId === "Cekirano") {
                    $('#Opcija3').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });

            //Ovo je kod za pretragu za materijal ostalo iz materijala
            $(document).ready(function () {
                $('#Opcija4').click(function () {
                    $src1 = $("#Opcija4").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("MatOstalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions4"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("MatOstalo", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions4"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.MatOstalo;
                if ($sId === "Cekirano") {
                    $('#Opcija4').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za Garderobu 
            $(document).ready(function () {
                $('#Opcija5').click(function () {
                    $src1 = $("#Opcija5").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("PGarderoba", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions5"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PGarderoba", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions5"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PGarderoba;
                if ($sId === "Cekirano") {
                    $('#Opcija5').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za dodatke 
            $(document).ready(function () {
                $('#Opcija6').click(function () {
                    $src1 = $("#Opcija6").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("PDodaci", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions6"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PDodaci", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions6"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PDodaci;
                if ($sId === "Cekirano") {
                    $('#Opcija6').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });


            //Ovo je kod za pretragu za igracke 
            $(document).ready(function () {
                $('#Opcija7').click(function () {
                    $src1 = $("#Opcija7").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("PIgracke", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions7"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PIgracke", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions7"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PIgracke;
                if ($sId === "Cekirano") {
                    $('#Opcija7').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });



            //Ovo je kod za pretragu za ostalo iz gotovih proizvoda 
            $(document).ready(function () {
                $('#Opcija8').click(function () {
                    $src1 = $("#Opcija8").attr("src");
                    if ($src1 === "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png") {
                        sessionStorage.setItem("POstalo", "Cekirano");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessions8"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("POstalo", "");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessions8"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.POstalo;
                if ($sId === "Cekirano") {
                    $('#Opcija8').attr("src", "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 2.png");
                    $('#box').attr("class", "show");
                }
            });



            //Ovo je za opciju sortiranja po datumu.
            $(document).ready(function () {
                $('#id1').click(function () {
                    $src1 = $("#i1").html();

                    if ($src1 === "Datum") {
                        sessionStorage.setItem("PDatum", "Najnovije");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "active");
                        $('#i1').html("Najnovije");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsD1"
                        }).done(function () {
                        });
                    } else if ($src1 === "Najnovije") {
                        sessionStorage.setItem("PDatum", "Najstarije");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "dblclick");
                        $('#i1').html("Najstarije");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsD2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");

                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessionsD"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PDatum;
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
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "A-Z");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "active");
                        $('#i2').html("A-Z");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsN1"
                        }).done(function () {
                        });
                    } else if ($src1 === "A-Z") {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "Z-A");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "dblclick");
                        $('#i2').html("Z-A");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsN2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");

                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessionsN"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PNaziv;
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

            //Ovo je za opciju sortiranja po ceni.
            $(document).ready(function () {
                $('#id3').click(function () {
                    $src1 = $("#i3").html();

                    if ($src1 === "Cena") {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "Najvisa");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "active");
                        $('#i3').html("Najvisa");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsC1"
                        }).done(function () {
                        });
                    } else if ($src1 === "Najvisa") {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "Najniza");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("");
                        $('#id3').attr("class", "dblclick");
                        $('#i3').html("Najniza");
                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/sessionsC2"
                        }).done(function () {
                        });
                    } else {
                        sessionStorage.setItem("PDatum", "");
                        sessionStorage.setItem("PNaziv", "");
                        sessionStorage.setItem("PCena", "");
                        $('#id1').attr("class", "btn");
                        $('#i1').html("Datum");

                        $('#id2').attr("class", "btn");
                        $('#i2').html("Naziv");
                        $('#id3').attr("class", "btn");
                        $('#i3').html("Cena");

                        $.ajax({
                            type: "POST",
                            url: "http://vunica.azurewebsites.net/vunica/index.php/Pijaca/unsessionsC"
                        }).done(function () {
                        });
                    }
                });
            });
            $(document).ready(function () {
                $sId = sessionStorage.PCena;
                if ($sId === "Najvisa") {
                    $('#id3').attr("class", "active");
                    $('#i3').html("Najvisa");


                } else if ($sId === "Najniza") {
                    $('#id3').attr("class", "dblclick");
                    $('#i3').html("Najniza");


                } else {
                    $('#id3').attr("class", "btn");
                    $('#i3').html("Cena");
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
                                                Cena:
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td width="80%"colspan="2">
                                            <font class="tekstObican">
                                                Od:&nbsp;<input id="manji" type="text" size="4" min="0" onchange="uslovMin();" class="tekstPoljecena" />&nbsp;€
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td width="80%" colspan="2">
                                            <font class="tekstObican">
                                                Do:&nbsp;<input id="veci" type="text" size="4" min="0" onchange="uslovMax();" class="tekstPoljecena" />&nbsp;€
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="100%" colspan="3">
                                            <font class="tekstObican">
                                                Kategorija
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">&nbsp;

                                        </td>
                                        <td  width="80%" colspan="2">
                                            <font class="tekstObican">
                                                Materijali:
                                            </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija1" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class="checkbox" onclick="check('Opcija1')">
                                                <font class="tekstObican">
                                                    Vunica
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="70%"  style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija2" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija2')">
                                                <font class="tekstObican">
                                                    Konci
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%" style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija3" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija3')">
                                                <font class="tekstObican">
                                                    Igle
                                                </font>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%" style = "padding:4% 0% 2% 4%;">
                                            <img id = "Opcija4" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija4')">
                                                <font class="tekstObican">
                                                    Ostali materijali
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="80%" colspan="2">
                                            <font class="tekstObican">
                                                Gotovi proizvodi:
                                            </font>
                                        </td>    
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%" style = "padding:4% 0% 2% 4%;">
                                            <img id = "Opcija5" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija5')">
                                                <font class="tekstObican">
                                                    Garderoba
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%"  style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija6" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija6')">
                                                <font class="tekstObican">
                                                    Dodaci
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td  width="70%"  style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija7" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija7')">
                                                <font class="tekstObican">
                                                    Igracke
                                                </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="10%" >&nbsp;

                                        </td>
                                        <td width="70%"  style = "padding:4% 0 2% 4%;">
                                            <img id = "Opcija8" src = "http://vunica.azurewebsites.net/vunica/application/Slike/Checkbox/Checkbox 1.png" class = "checkbox" onclick="check('Opcija8')">
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
                                                <a href="http://vunica.azurewebsites.net/vunica/index.php/pijaca" class="dugme1"> 
                                                    Trazi 
                                                </a> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                &nbsp;
                                            </td>
                                            </table>
                                            </div> 
                                            <ul id="tab">
                                                <li>
                                                    <img id="arrow" class= "hide"onclick="toggle('box');" width="0px"  src="http://vunica.azurewebsites.net/vunica/application/Slike/Pretraga/KlupkoPretraga.png">
                                                </li>
                                            </ul>
                                            </div> 



                                            <ul id="tab">
                                                <li>
                                                    <img id="arrow" class= "hide"onclick="toggle('box');" width="0px"  src="http://vunica.azurewebsites.net/vunica/application/Slike/Pretraga/KlupkoPretraga.png">
                                                </li>
                                            </ul>
                                            </div> 

                                            </td>
                                        </tr>
                                        <!-- Kraj pretrage -->


                                        <tr>
                                            <td>
                                                <?php
                                                $status = 0;
                                                if (strcmp($this->session->Status, 'Admin') == 0) {
                                                    $status = 1;
                                                } else {
                                                    if (strcmp($this->session->Status, 'Pletilja') == 0) {
                                                        $status = 2;
                                                    } else {
                                                        if (strcmp($this->session->Status, 'Klupko') == 0) {
                                                            $status = 3;
                                                        }
                                                    }
                                                }
                                                ?>

                                                <!-- Baner -->

                                                <?php if ($status == 3) { ?>

                                                    <br/> <br/>
<a class="link" href="http://vunica.azurewebsites.net/vunica/index.php/Pocetna/premiumProfil">
                                                    <table id = "banerPolje" align = "center">
                                                        <tr>
                                                            <td width = "50%" align = "left" style = "padding-left:8%;">
                                                                <font color = "#fffef4" size="6">
                                                                    Postanite PREMIUM
                                                                </font>
                                                                <br/> <br/>
                                                                <font class = "banerTekst">
                                                                    Specijalna ponuda!
                                                                </font>
                                                            </td>
                                                            <td width = "50%" align = "left" style = "padding-left:25%;">
                                                                <font class = "banerTekst" style = "text-decoration:line-through;">
                                                                    199€ 
                                                                </font>
                                                                <font class = "banerTekst" >
                                                                    =>19€
                                                                </font>
                                                            </td>
                                                        </tr>
                                                    </table>
</a>
                                                    <br/> <br/>

                                                <?php } else { ?>
                                                    <br/> <br/> <br/> <?php
                                                }
                                                ?>

                                            </td>

                                        </tr>





                                        <!-- Slogan -->                    
                                        <tr>
                                            <td>



                                                <div width = 100% align = "center">
                                                    <font class = "naslovObican">
                                                        DOBRODOSLI
                                                    </font>
                                                    <br/>
                                                    <font class = "naslovIskosen">
                                                        na
                                                    </font>
                                                    <br/>
                                                    <font class = "naslovObican">
                                                        PIJACU
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
                                                        <a id="id1"class="btn" style="display:block;width:100px" href=""  >
                                                            <i id="i1" class="" >
                                                                Datum
                                                            </i>
                                                        </a>
                                                    </li>
                                                    &ensp;&ensp;&ensp;
                                                    <li>
                                                        <a id="id2"class="btn" style="display:block;width:100px" href="" >
                                                            <i id="i2" class="">
                                                                Naziv
                                                            </i>
                                                        </a>
                                                    </li>
                                                    &ensp;&ensp;&ensp;
                                                    <li>
                                                        <a id="id3"class="btn" style="display:block;width:100px" href="" >
                                                            <i id="i3" class="">
                                                                Cena
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

                                        <!-- Proizvod-i na pijaci-->
                                        <tr>
                                            <td>


                                                <table width = "77%" align = "center" border="0">

                                                    <!--Dodaj proizvod-->
                                                    <tr>

                                                        <td  align = "center" >
                                                            <br/>

                                                            <script>

<?php
$status = $this->session->userdata('Status');
if ($this->session->UserName != '' && $status !== "Klupko") {
    ?> //ako je ulogovan a nije klupko
                                                                </script>
                                                                <a href="http://vunica.azurewebsites.net/vunica/index.php/PostavljanjeProizvoda" style="text-decoration: none;  ">
                                                                    <script>

<?php } else if ($this->session->UserName != '' && $status === "Klupko") { ?> // ako je klupko
                                                                    </script>
                                                                    <a  style="text-decoration: none;"  onclick="obavesti('Da biste dodali proizvod, morate da postanete premijum korisnik!')" >
                                                                        <script>

<?php } else { ?> //ako gost pristupa sajtu
                                                                        </script>
                                                                        <a onclick="prikazi_registraciju()" style="text-decoration: none;  "> 
                                                                            <script>
<?php } ?>

                                                                            //< a  class = "prijaviKomentar" > Prijavi komentar < /a>

                                                                        </script>



                                                                        <div class="dodajproizvod"  >  

                                                                            <p style="text-align: center">  Dodaj proizvod</p>
                                                                        </div> </a><div class="mask"> </div>
                                                                    <br/>
                                                                    </td>
                                                                    </tr>
                                                                    <!--Kraj dodaj proizvod-->
                                                                    <tr>
                                                                        <td>
                                                                            <div id="main_content" >

                                                                                <?php
                                                                                $brojac = 0;
                                                                                if($latest_proizvod == null){
                                                                                    ?><div align="center">
                                                                                        <br/><br/><br/><br/><br/><br/>
                                                                                        <font class="tekstObican" style="font-size: 25px; " align="center">Zao nam je. Nema proizvoda koji zadovoljavaju Vase kriterijume pretrage.</font>
                                                                                    <br/><br/><br/><br/><br/><br/><br/><br/>
                                                                                    </div> <?php
                                                                                }
                                                                                    
                                                                                foreach ($latest_proizvod as $proizvod) {
                                                                                    if ($brojac % 2 == 0) {
                                                                                        ?>
                                                                                        <!--levi proizvod u td-u-->




                                                                                        <div class="view view-third" align="left" style="float: left">  
                                                                                            <img src="<?php echo $proizvod->Slika; ?>"/>
                                                                                            <h2><font size="2" style="text-transform:none"><?php echo $proizvod->UserName; ?></font>
                                                                                                    <br/><font size="5"><?php echo $proizvod->Naziv; ?></font>
                                                                                                    <br /><font size="3" style="text-transform:none">Kategorija: <?php echo $proizvod->Kategorija; ?></font>    
                                                                                                    <br /><font size="4" style="text-transform:none">CENA: <?php echo $proizvod->Cena; ?> &#8364;</font></h2>  
                                                                                                
                                                                                            <div class="mask"> 
                                                                                                <p><?php echo $proizvod->Opis; ?></p> 
                                                                                                <a href='http://vunica.azurewebsites.net/vunica/index.php/proizvod/index/<?php echo $proizvod->IDProizvod; ?>' class="info">Detaljnije</a>  
                                                                                                <font   class="datumNaSlici">OBJAVLJENO: <?php echo $proizvod->Datum; ?></font>
                                                                                            </div>  
                                                                                        </div> 


                                                                                        <!--Kraj levog proizvoda-a-->

                                                                                        <?php
                                                                                    } else {
                                                                                        ?>

                                                                                        <!--Desni proizovd u td-u-->

                                                                                        <div class="view view-third" align="right" style="float:right">  
                                                                                            <img src="<?php echo $proizvod->Slika; ?>"  /> 
                                                                                             <h2><font size="2" style="text-transform:none"><?php echo $proizvod->UserName; ?></font>
                                                                                                    <br/><font size="5"><?php echo $proizvod->Naziv; ?></font>
                                                                                                    <br /><font size="3" style="text-transform:none">Kategorija: <?php echo $proizvod->Kategorija; ?></font>    
                                                                                                    <br /><font size="4" style="text-transform:none">CENA: <?php echo $proizvod->Cena; ?> &#8364;</font></h2>  
                                                                                                <div class="mask"> 

                                                                                               <p><?php echo $proizvod->Opis; ?></p> 
                                                                                                <a href="http://vunica.azurewebsites.net/vunica/index.php/proizvod/index/<?php echo $proizvod->IDProizvod; ?>" class="info">Detaljnije</a>  
                                                                                                <font   class="datumNaSlici">OBJAVLJENO <?php echo $proizvod->Datum; ?></font>
                                                                                            </div>  
                                                                                        </div>  

                                                                                        <br/>
                                                                                        <!-- Kraj desnog proizvoda-a-->

                                                                                        <?php
                                                                                    }
                                                                                    $brojac = $brojac + 1;
                                                                                }
                                                                                ?>


                                                                            </div>

                                                                            <!-- Donja linija  i ucitaj jos dugme-->

                                                                            <hr width = "100%" class = "linija"/>
                                                                            <?php
                                                                            if (count($latest_proizvod) == 8) {
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
