<!--Milos Andric 206/12-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Postavljanje proizvoda</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
        <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->



        <!-- NISTA!!!! -->

        <!-- InstanceEndEditable -->

        <!-- InstanceBeginEditable name="Head" -->

        <!-- Ovde ubacivati svoje stilove i skripte -->

        <style media="screen and (max-device-width: 1400px)">
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Pop up (1366x768).css'; ?>                                              
<?php include '/../CSS/Tekst (1366x768).css'; ?>
<?php include '/../CSS/Dugme (1366x768).css'; ?>
<?php include '/../CSS/Template (1366x768).css'; ?>
<?php include '/../CSS/Paragraf (1366x768).css'; ?>
<?php include '/../CSS/Video (1366x768).css'; ?>

<?php include '/../CSS/Postavljanje proizvoda (1366x768).css'; ?>
        </style>
        <style media="screen and (min-device-width: 1401px)">
<?php include '/../CSS/Paragraf (1920x1080).css'; ?>
<?php include '/../CSS/Template (1920x1080).css'; ?>
<?php include '/../CSS/Pop up (1920x1080).css'; ?>                                                                       
<?php include '/../CSS/Tekst (1920x1080).css'; ?>
<?php include '/../CSS/Dugme (1920x1080).css'; ?>
<?php include '/../CSS/Video (1920x1080).css'; ?>

<?php include '/../CSS/Postavljanje proizvoda (1920x1080).css'; ?>
        </style>
        <script>
<?php include('/../JavaScript/PopUp.js'); ?>
<?php include('/../JavaScript/Footer.js'); ?>
<?php include('/../JavaScript/Checkbox.js'); ?>
<?php include('/../JavaScript/PrijavaSadrzaja.js'); ?>
<?php include('/../JavaScript/Postavljanje Proizvoda.js'); ?>
        </script>

        <!-- InstanceEndEditable -->
    </head>

    <body onLoad="izracunaj();" onresize="izracunaj();" id="body">

        <?php
        include("Header.php");
        include("Obavestenje.php");
        include("Prijava.php");
        include("Registracija.php");
        include("Zaboravljena lozinka.php");
        include("Upozorenje.php");
        include("Footer.php");
        include("PrijavaKomentarVideo.php");
        include("brisanjesesije.php");
        ?>	
        
        

        <!-- Telo strane -->
        <div id = "teloOkvir">
            
            <table id = "telo">
                <tr>
                    <td>
                        <!-- InstanceBeginEditable name="Body" -->    

                        <!-- Slogan -->
                        <div width = 100% align = "center">

                        </div>                              
                        
                        <br/> <br/> <br/> <br/> </br>  
                        <input type="button" onclick="prikazi_prijavu_komentara();" value="cao" />
                        <?php 
                            $attributes = array('name' => 'PostavljanjeProizvoda', 'font' => ""); 
                            echo form_open_multipart("PostavljanjeProizvoda/do_upload", $attributes); 
                        ?>
                        <table id="postavkaproizvoda" border="0">
                            <tr>
                                <td align="center" class="mestoZaSliku">                               
                                    <img class="ProSlika"  src="<?php echo $slika;?>"/>                             
                                </td>
                                <td valign="bottom">
                                    <table style="margin-left:10%; width:90%;" border="0">
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Naziv </td>
                                            <td style="width:60%;"> 
                                                <input class="tekstPolje" type="text" name="ProNaziv" maxlength="40" value="<?php echo set_value('ProNaziv'); ?>"/> 
                                                <?php echo form_error('ProNaziv', '<div class="error">', '</div>'); ?>
                                            </td>
                                        </tr>
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Cena </td>
                                            <td style="width:60%;"> 
                                                <input class="tekstPolje" type="text" name="ProCena" value="<?php echo set_value('ProCena'); ?>"/> 
                                                <?php echo form_error('ProCena', '<div class="error">', '</div>'); ?>
                                            </td>
                                        </tr>
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Kategorija </td>
                                            <td style="width:60%;"> 
                                                <?php
                                                    if($this->session->Status == 'Admin') {
                                                ?>
                                                <select class="kategorije" name="ProKat">
                                                    <option value="Vunica" <?php echo set_select('ProKat', 'Vunica', TRUE); ?>> Vunica</option>
                                                    <option value="Konci" <?php echo set_select('ProKat', 'Konci'); ?>> Konci</option>
                                                    <option value="Igle" <?php echo set_select('ProKat', 'Igle'); ?>> Igle</option>
                                                    <option value="Ostali materijali" <?php echo set_select('ProKat', 'Ostali materijali'); ?>> Ostali materijali</option>
                                                </select>
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($this->session->Status == 'Pletilja') {
                                                ?>
                                                <select class="kategorije" name="ProKat">
                                                    <option value="Garderoba" <?php echo set_select('ProKat', 'Garderoba', TRUE); ?>> Garderoba</option>
                                                    <option value="Igracke" <?php echo set_select('ProKat', 'Igracke'); ?>> Igracke</option>
                                                    <option value="Dodaci" <?php echo set_select('ProKat', 'Dodaci'); ?>> Dodaci</option>
                                                    <option value="Ostalo" <?php echo set_select('ProKat', 'Ostalo'); ?>> Ostalo</option>
                                                </select>
                                                <?php
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Kolicina </td>
                                            <td style="width:60%;">
                                                <table style="margin-left:6%;">
                                                    <tr>
                                                        <td>
                                                            <input type="button" class="dugme" value="-" onmousedown="mousedown('-')" onmouseup="mouseup()"/>
                                                        </td>
                                                        <td width="30px" align="center">
                                                            <font class="tekstObican" id="kolicina" name="ProKol"><?php echo set_value('ProKol',1); ?></font>
                                                        </td>
                                                        <td>
                                                            <input type="button" class="dugme" value="+" onmousedown="mousedown('+')" onmouseup="mouseup()"/>
                                                        </td> 
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        
                                        <tr style="height:100px">
                                            <td colspan="2" valign="bottom">                                               
                                                <input type="file" name="userfile" onchange="option('1');document.forms['PostavljanjeProizvoda'].submit();" class="dugme" />  
                                                <a class="dugme"  onclick="option('3');document.forms['PostavljanjeProizvoda'].submit();">Izbrisi sliku</a>
                                            </td>
                                        </tr>  
                                    </table>         
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">                                   
                                    <br/><br/><br/>
                                    
                                    <br/><br/><br/>
                                    <textarea  maxlength="400" placeholder="Napisite opis" class="ProizvodOpis" id="opisVidea" name="ProOpis" onKeyDown="preostalo(400);" onKeyUp="preostalo(400);" ><?php echo set_value('ProOpis'); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <font class="preostalokaraktera">Preostalo karaktera: <font id="preostalo">400</font></font> 
                                    <br/><br/><br/><br/>                       
                                </td>
                            </tr>               
                            <tr>
                                <td align="center">  
                                    <a class="dugme"  onclick="option('2');document.forms['PostavljanjeProizvoda'].submit();"> Postavi proizvod</a>
                                    <!--<input type="submit" onclick="option('2')" value="Postavi proizvod" class="dugme"/> -->
                                </td>
                                <td align="center">
                                    <a class="dugme" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca', '_parent')"> odustani</a>
                                </td>
                            </tr> 
                            <tr>               
                                <td colspan="2" class="tekstObican" >
                                    <br/><br/><br/><br/>
                                    <font style="margin-left:10%;">                   
                                        Nas odnos prema autorskim pravima procitajte ovde: <a href="#" class="linkPopUp"> Autorska prava </a> 
                                    </font>  
                                    <br/><br/>
                                    <font style="margin-left:10%;"> 
                                        Postavljanjem ovog proizvoda pristajete na: <a href="#" class="linkPopUp"> Ugovor </a> 
                                    </font> 
                                    <br/><br/><br/><br/>   
                                    
                                </td>
                            </tr>                                                                       
                        </table>  
                        <input type="hidden" name="ProKol" id="ProKol" value="<?php echo set_value('ProKol',1); ?>" />
                        <input type="hidden" name="opt" id="opt" value="<?php echo set_value('opt'); ?>" />
                        </form>
                        <!-- InstanceEndEditable -->
                    </td>
                </tr>
            </table>
        </div>
        
        
        
        
    </body>
    <!-- InstanceEnd -->
</html>

<?php 
    if($this->session->flashdata('proGreska1') == 1){
        echo "<script language=\"javascript\">obavesti('Greska pri ucitavanju fajla');</script>";
        $this->session->set_flashdata('proGreska1', 0);
    }
?>
<?php 
    if($this->session->flashdata('proGreska2') == 1){
        echo "<script language=\"javascript\">obavesti('Niste postavili sliku');</script>";
        $this->session->set_flashdata('proGreska2', 0);
    }
?>
