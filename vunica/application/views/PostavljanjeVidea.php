<!--Milos Andric 206/12-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>Postavljanje pokaznog video materijala</title>
    <link rel = "shortcut icon" type = "image/png" href = "http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/Ikona.png" />
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    
    

    
    <!-- NISTA!!!! -->
   
  <!-- InstanceEndEditable -->
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
<?php include '/../CSS/Postavljanje videa (1366x768).css'; ?>
        </style>
  <style media="screen and (min-device-width: 1401px)">
<?php include '/../CSS/Paragraf (1920x1080).css'; ?>
<?php include '/../CSS/Template (1920x1080).css'; ?>
<?php include '/../CSS/Pop up (1920x1080).css'; ?>                                                                       
<?php include '/../CSS/Tekst (1920x1080).css'; ?>
<?php include '/../CSS/Dugme (1920x1080).css'; ?>
<?php include '/../CSS/Video (1920x1080).css'; ?>
<?php include '/../CSS/Pretraga Strikarnica (1920x1080).css'; ?>
<?php include '/../CSS/Strikarnica (1920x1080).css'; ?>
<?php include '/../CSS/Postavljanje videa (1920x1080).css'; ?>
        </style>
  
  <script>
<?php include('/../JavaScript/PopUp.js'); ?>
<?php include('/../JavaScript/Footer.js'); ?>
<?php include('/../JavaScript/Checkbox.js'); ?>
<?php include('/../JavaScript/Postavljanje videa.js'); ?>
   </script>
  
  <!-- InstanceBeginEditable name="Head" -->
  
  	<!-- Ovde ubacivati svoje stilove i skripte -->
    
 
  <!-- InstanceEndEditable -->
</head>

<body onLoad="izracunaj();" onresize="izracunaj();" id="body">

    <?php
        include("Header.php");
        include("Obavestenje.php");
        include("Prijava.php");
        include("Registracija.php");
        include("Zaboravljena lozinka.php");
        include("Footer.php");
        include("Upozorenje.php");
        include("brisanjesesije.php");
        ?>
  
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->                                         
              
              <br/> <br/> <br/> <br/> </br>              
              <?php 
                $attributes = array('name' => 'PostavljanjeVidea', 'font' => ""); 
                echo form_open_multipart("PostavljanjeVidea/postavljanje_video", $attributes); 
              ?>
              <table id="postavkaVidea" border="0">
                <tr style="height:500px;">
                  <td colspan="2"> 
                    <video style="width:100%;"  src="<?php echo $video;?>" controls></video>                   
                      <video>
                  </td>
                </tr>
                 <tr>
                  <td colspan="2" align="center">
                    <br/> <br/><?php echo $video;?>
                    <label class="dugme">
                        <input type="file" class="dugme"  name="userfile" onchange="option('1');document.forms['PostavljanjeVidea'].submit();"/>
                        Postavite video
                    </label>
                    
                    <br/> <br/> <br/>
                  </td>
                </tr>
                 <tr>
                  <td align="center" width="50%">
                    <font class = "tekstObican"> Naziv videa </font>
                  </td>
                  <td align="center" width="50%">
                    <input type="text" maxlength="40" class="tekstPolje" name="vidNaziv" value="<?php echo set_value('vidNaziv'); ?>"/>
                    <?php echo form_error('vidNaziv', '<div class="error">', '</div>'); ?>                    
                  </td>
                </tr>
                </tr>
                 <tr>
                  <td align="center" width="50%">
				    <br/> 
                    <font class = "tekstObican"> Kategorija </font>
                  </td>
                  <td align="center" width="50%">
				    <br/> 
                    <select class="kategorije" name="vidKat">
                      <option value="Garderoba" <?php echo set_select('vidKat', 'Garderoba', TRUE); ?>>Garderoba</option>
                      <option value="Dodaci" <?php echo set_select('vidKat', 'Dodaci'); ?>>Dodaci</option>
                      <option value="Igracke" <?php echo set_select('vidKat', 'Igracke'); ?>>Igracke</option>
                      <option value="Ostalo" <?php echo set_select('vidKat', 'Ostalo'); ?>>Ostalo</option>
                    </select>
                  </td>
                </tr>
                <td align="center" width="50%">
				  <br/> 
                  <font class = "tekstObican"> Tezina </font>
                </td>
                <td align="center" width="50%">
				  <br/> 
                  <select class="kategorije" name="vidTez">
                    <option value="Laka" <?php echo set_select('vidTez', 'Laka', TRUE); ?>> Laka</option>
                    <option value="Srednja"  <?php echo set_select('vidTez', 'Srednja'); ?>> Srednja</option>
                    <option value="Teska" <?php echo set_select('vidTez', 'Teska'); ?>> Teska</option>
                  </select>
                </td>
              </tr>
              <tr>
                  <td colspan="2" align="center">                     
				   </br>
                   <textarea  maxlength="400" placeholder="Napisite opis" class="videoOpis" name="vidOpis" id="opisVidea" onKeyDown="preostalo(400);" onKeyUp="preostalo(400);"><?php echo set_value('vidOpis'); ?></textarea>
				  </td>
				</tr>
                <tr>
                  <td colspan="2" align="center">
         			<font class="preostalokaraktera">Preostalo karaktera: <font id="preostalo">400</font></font>
                    <br/> </br>
				  </td>
				</tr>
                </tr>
                 <tr>
                  <td align="center" width="50%">
                    <a class="dugme"  onclick="option('2');document.forms['PostavljanjeVidea'].submit();"> Postavi video</a>                   
                  </td>
                  <td align="center" width="50%">
                    <a class="dugme" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Strikarnica', '_parent')"> Odustani </a>
                  </td>
                </tr>
              </table>
            	<br/> <br/> <br/> <br/>
              <!-- InstanceEndEditable -->
     		</td>
          </tr>
     	</table>
        <input type="hidden" name="opt1" id="opt1" value="<?php echo set_value('opt1'); ?>" />
     </form>
     </div>
   
   

</body>
<!-- InstanceEnd -->
</html>

<?php 
    if($this->session->flashdata('videoGreska1') == 1){
        echo "<script language=\"javascript\">obavesti('Greska pri ucitavanju fajla');</script>";
        $this->session->set_flashdata('videoGreska1', 0);
    }
?>
<?php 
    if($this->session->flashdata('videoGreska2') == 1){
        echo "<script language=\"javascript\">obavesti('Niste postavili pokazni video');</script>";
        $this->session->set_flashdata('videoGreska2', 0);
    }
?>