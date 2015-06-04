<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- InstanceBeginEditable name="doctitle" -->

        <title>Izmena proizvoda</title>
        <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />
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
<?php include('/../JavaScript/Proizvod Editovanje.js'); ?>
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
                        <?php 
                            $attributes = array('name' => 'EditovanjeProizvoda', 'font' => ""); 
                            echo form_open_multipart("ProizvodEditovanje/do_upload", $attributes); 
                        ?>
                        <table id="postavkaproizvoda" border="0">
                            <tr>
                                <td align="center" class="mestoZaSliku">                               
                                <img class="ProSlika"  src="<?php echo $Slika;?>"/>                     
                                </td>
                                <td valign="bottom">
                                    <table style="margin-left:10%; width:90%;" border="0">
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Naziv </td>
                                            <td style="width:60%;"> 
                                                <input class="tekstPolje" type="text" name="ProNaziv" maxlength="40" value="<?php echo $Naziv; ?>"/> 
                                                <?php echo form_error('ProNaziv', '<div class="error">', '</div>'); ?>
                                            </td>
                                        </tr>
                                        <tr style="height:70px">
                                            <td style="width:40%;" class="tekstObican"> Cena </td>
                                            <td style="width:60%;"> 
                                                <input class="tekstPolje" type="text" name="ProCena" value="<?php echo $Cena; ?>"/> 
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
                                                    <option value="Vunica" <?php if($Kategorija == 'Vunica'){?> selected <?php }; ?>> Vunica</option>
                                                    <option value="Konac" <?php  if($Kategorija == 'Konac') {?> selected <?php }; ?>> Konac</option>
                                                    <option value="Igle" <?php if($Kategorija == 'Igle') {?> selected <?php }; ?>> Igle</option>
                                                    <option value="Ostalo" <?php if($Kategorija == 'Ostalo'){?> selected <?php }; ?>> Ostalo</option>
                                                </select>
                                                <?php
                                                    }
                                                ?>
                                                <?php
                                                    if($this->session->Status == 'Pletilja') {
                                                ?>
                                                <select class="kategorije" name="ProKat">
                                                    <option value="Garderoba" <?php if($Kategorija == 'Garderoba'){?> selected <?php }; ?>> Garderoba</option>
                                                    <option value="Igracke" <?php if($Kategorija == 'Igracke'){?> selected <?php }; ?>> Igracke</option>
                                                    <option value="Dodaci" <?php if($Kategorija == 'Dodaci'){?> selected <?php }; ?>> Dodaci</option>
                                                    <option value="Ostalo" <?php if($Kategorija == 'Ostalo'){?> selected <?php }; ?>> Ostalo</option>
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
                                                            <font class="tekstObican" id="kolicina" name="ProKol"><?php echo $BrojArtikala ?></font>
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
                                                <label class="dugme">
                                                  <input type="file" name="userfile" onchange="option('1');document.forms['EditovanjeProizvoda'].submit();" class="dugme" /> 
                                                  Promeni sliku
                                                </label>
                                            </td>
                                        </tr>  
                                    </table>         
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">                                   
                                    <br/><br/><br/>
                                    <input type="hidden" name="ProGreska" />                                  
                                    <br/><br/><br/>
                                    <textarea  maxlength="400" placeholder="Napisite opis" class="ProizvodOpis" id="opisVidea" name="ProOpis" onKeyDown="preostalo(400);" onKeyUp="preostalo(400);" ><?php echo $Opis; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                   <!-- <font class="preostalokaraktera">Preostalo karaktera: <font id="preostalo">400</font></font> -->
                                    <br/><br/><br/><br/>                       
                                </td>
                            </tr>               
                            <tr>
                                <td align="center">  
                                    <a class="dugme"  onclick="option('2');document.forms['EditovanjeProizvoda'].submit();"> Izmeni proizvod</a>
                                    <!--<input type="submit" onclick="option('2')" value="Postavi proizvod" class="dugme"/> -->
                                </td>
                                <td align="center">
                                    <a class="dugme" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Proizvod/index/<?php echo $IDProizvod; ?>', '_parent')"> odustani</a>
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
                        <input type="hidden" name="ProKol" id="ProKol" value="<?php echo $BrojArtikala ?>" />
                        <input type="hidden" name="opt2" id="opt2" value="<?php echo set_value('opt'); ?>" />
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
    if($this->session->flashdata('proGreska3') == 1){
        echo "<script language=\"javascript\">obavesti('Greska pri ucitavanju fajla');</script>";
        $this->session->set_flashdata('proGreska3', 0);
    }
?>