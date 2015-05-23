<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>Primer</title>
    
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
        ?>
  
    <!-- Telo strane -->
    <div id = "teloOkvir">
      <table id = "telo">
      	<tr>
           <td>
			  <!-- InstanceBeginEditable name="Body" -->                                         
              
              <br/> <br/> <br/> <br/> </br>
              <?php echo validation_errors('<p class="error">'); ?>
              <?php 
                $attributes = array('name' => 'PostavljanjeVidea', 'font' => ""); 
                echo form_open_multipart("PostavljanjeVidea/postavljanje_video", $attributes); 
              ?>
              <table id="postavkaVidea" border="0">
                <tr>
                  <td colspan="2"> 
                    <video style="width:100%;"  src="<?php echo $video;?>" controls></video> 
                  </td>
                </tr>
                 <tr>
                  <td colspan="2" align="center">
                    <br/> <br/><?php echo $video;?>
                    <input type="file" class="dugme"  name="userfile" onchange="option('1');document.forms['PostavljanjeVidea'].submit();" value="Ucitaj video"/>                 
                    <br/> <br/> <br/>
                  </td>
                </tr>
                 <tr>
                  <td align="center" width="50%">
                    <font class = "tekstObican"> Naziv videa </font>
                  </td>
                  <td align="center" width="50%">
                    <input type="text" class="tekstPolje" name="vidNaziv" value="<?php echo set_value('vidNaziv'); ?>"/>
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
                      <option value="1" <?php echo set_select('vidKat', '1', TRUE); ?>>1</option>
                      <option value="2" <?php echo set_select('vidKat', '2'); ?>>2</option>
                      <option value="3" <?php echo set_select('vidKat', '3'); ?>>3</option>
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
                    <a class="dugme" href="#"> Odustani </a>
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
