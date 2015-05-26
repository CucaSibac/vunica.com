<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
  
  <!-- Teodora Aleksic, 391/12 -->
  
  <title> vunica.com </title>
  
  <style media="screen and (max-device-width: 1400px)">
    <?php include '/../CSS/Index (1366x768).css'; ?>
    <?php include '/../CSS/Pop up (1366x768).css'; ?>
    <?php include '/../CSS/Index - Animacije.css'; ?>
  </style>
  <style media="screen and (min-device-width: 1401px)">
    <?php include '/../CSS/Index (1920x1080).css'; ?>
    <?php include '/../CSS/Pop up (1920x1080).css'; ?>
    <?php include '/../CSS/Index - Animacije.css'; ?>
  </style>
  <script>
    <?php include('/../JavaScript/Index.js');?>
    <?php include('/../JavaScript/PopUp.js');?>
  </script>

</head>

<body>   
    
     <?php
        include("Obavestenje.php");
        include("Prijava.php");
        include("Registracija.php");
        include("Zaboravljena lozinka.php");
    ?>
    
    
	<!-- Milje i glavni elementi -->
	<div id = "teloAnim">
    
    	<!-- Slogan -->
        <div id = "slogan" align = "center">
          <font face="Tahoma, Geneva, sans-serif" color="#605951">
              ŠTRIKANJE
          </font>
          <br/>
          <font face="Palatino Linotype, Book Antiqua, Palatino, serif" color="#61a6ab" style="font-style:italic;">
              je
          </font>
          <br/>
          <font face="Tahoma, Geneva, sans-serif" color="#605951">
              UMETNOST
          </font>
        </div>  
    
    	<img id = "milje" src="http://localhost/Slike/Index/Milje.png">
        <img id = "dugme1" src="http://localhost/Slike/Index/Dugme.png" onclick="dugme()">     
        
        <div id = "sakriveni">
        
            <!-- Senka -->
            <div id = "senkaStrana">
            </div>
            
            <!-- Senka -->
            <div id = "senkaMeniGornji" class = "senkaMeni" style = "top:0;">
            </div>
            
            <!-- Senka -->
            <div id = "senkaMeniDonji" class = "senkaMeni" style = "bottom:0;">
            </div>
        
            <!-- Meni --> 
            <div id = "meniGornji" class = "meni" style = "top:0;">
                <table class = "stavke" cellspacing = "0" cellpadding "0">                
                  <tr>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pocetna/index', '_parent');">
                          <font> Početna </font>
                      </td>
                      <td align = "center" valign = "middle" style = "cursor:default;">
                          <font size = "+3"> vunica.com </font>
                      </td>
                      <td class = "stavka" align = "center" valign = "middle">
                        <?php if($this->session->UserName != ''){ ?>
                            <font onclick = "window.open('http://localhost/vunica.com/vunica/index.php/Profil', '_parent')">
                            <?php echo $this->session->UserName; ?>
                            </font>
                            /
                            <?php 
                            $attributes = array('id' => 'formaOdjava');
                            echo form_open("PopUp/logout", $attributes); 
                            ?>
                            <input id = "odjava" type = "submit" value = "Odjava"/>
                            <?php echo form_close();?>
                        <?php }else{ ?>
                            <font onclick = "prikazi_prijavu()"> Prijava </font>
                            <font> / </font>
                            <font onclick = "prikazi_registraciju()"> Registracija </font>
                        <?php } ?>
                      </td>
                  </tr>
                </table>     
            </div>
            
            <!-- Meni --> 
            <div id = "meniDonji" class = "meni" style = "bottom:0;">
                <table class = "stavke" cellspacing = "0" cellpadding "0">                
                  <tr>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Strikarnica/index', '_parent');">
                          <font> Štrikarnica </font>
                      </td>
                      <td align = "center" valign = "middle">
                        <img id = "dugme2" src="http://localhost/Slike/Index/Dugme.png" onclick="dugme()">
                      </td>
                      <td class = "stavka" align = "center" valign = "middle" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca/index', '_parent');">
                          <font> Pijaca </font>
                      </td>
                  </tr>
                </table>     
            </div>
        
        </div>
        
        
    </div>


</body>
</html>
