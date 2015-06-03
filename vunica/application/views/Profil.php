<!-- Ivana Lisanin 531/12 -->
<!-- Teodora Aleksic, 391/12-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- InstanceBeginEditable name="doctitle" -->
  
    <title>
        <?php
            if($Korisnik['UserName'] != ''){
                echo $Korisnik['UserName'];
            }
            else{
                echo "Editovanje profila";
            }
        ?>
    </title>
    
    <!-- NE BRISATI NISTA U OVOM EDIT REGIONU!!!! -->
    
    <link rel = "shortcut icon" type = "image/png" href = "http://localhost/Slike/Vunica/Ikona.png" />
    
        <style media="screen and (max-device-width: 1400px)">
             <?php include '/../CSS/Template (1366x768).css'; ?>
             <?php include '/../CSS/Pop up (1366x768).css'; ?>
             <?php include '/../CSS/Tekst (1366x768).css'; ?>
             <?php include '/../CSS/Dugme (1366x768).css'; ?>
             <?php include '/../CSS/Paragraf (1366x768).css'; ?>
             <?php include '/../CSS/Video (1366x768).css'; ?>
             <?php include '/../CSS/Profil (1366x768).css'; ?>
        </style>

        <style media="screen and (min-device-width: 1401px)">
             <?php include '/../CSS/Paragraf (1920x1080).css'; ?>
             <?php include '/../CSS/Template (1920x1080).css'; ?>
             <?php include '/../CSS/Pop up (1920x1080).css'; ?>
             <?php include '/../CSS/Tekst (1920x1080).css'; ?>
             <?php include '/../CSS/Dugme (1920x1080).css'; ?>
             <?php include '/../CSS/Video (1920x1080).css'; ?>
             <?php include '/../CSS/Profil (1920x1080).css'; ?>
        </style>
        <script>
             <?php include('/../JavaScript/PopUp.js'); ?>
             <?php include('/../JavaScript/Footer.js'); ?>
             <?php include('/../JavaScript/Checkbox.js'); ?>
        </script>
    
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
              <br/> <br/> <br/> <br/>
              <!-- Odredjivanje statusa korisnika -->
              <?php
                $status = 0;
                if(strcmp($Korisnik['Status'], 'Admin') == 0){
                    $status = 1;
                } 
                else{
                    if(strcmp($Korisnik['Status'], 'Pletilja') == 0){
                        $status = 2;
                    } 
                    else{
                        if(strcmp($Korisnik['Status'], 'Klupko') == 0){
                            $status = 3;
                        } 
                    }
                } 
              ?>
              
              <!-- Baner -->
              
              <?php if($status == 3 && ($Korisnik['UserName'] == $this->session->UserName)){?>
                            
              <br/> <br/>
              
              <a class="link" href="http://localhost/vunica.com/vunica/index.php/Pocetna/premiumProfil">
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
                  
              <br/>
              
              <?php } ?>
              
              
              <table width = "90%" align = "center"> 
                <tr>
                  <td width = "50%" valign = "top"  align = "center">
                    <br/> <br/>
                    
                    <img id = "profilnaSlika" src="<?php echo $Korisnik['Slika'];?>" />
                    
                  </td>
                    <td width = "50%" align = "left" valign = "top" style = "padding-right:5%;">
                      <br/> <br/> <br/>
                      
                      <font class="naslovObican">
                          <?php echo $Korisnik['UserName'];?>
                      </font> 
                      <br/>   
                      <font class="tekstObican">
                          <?php echo $Korisnik['ImePrezime'];?>
                      </font>
                      
                      <br/> <br/>
                      
                      <font class="tekstObican">Status: </font>
                      <font class="tekstIskosen">
                          <?php 
                              if($status == 1){echo "Administrator";}
                              else{
                                  if($status == 2){echo "Klub pletilja";}
                                  else{echo "Klub 5 klupka";}
                              }  
                          ?>
                      </font>
                      
                      <br/> <br/>
                      
                      <font class="tekstObican"> Godine: </font>
                      <font class="tekstIskosen"><?php echo $Korisnik['Godine'];?></font>
                      
                      <br/>
                      
                      <font class="tekstObican"> Pol: </font>
                      <font class="tekstIskosen"><?php echo $Korisnik['Pol'];?></font>
                      
                      <br/>
                      
                      <font class="tekstObican"> Lokacija: </font>
                      <font class="tekstIskosen"><?php echo $Korisnik['Lokacija'];?></font>
                      
                      <br/> <br/>
                      
                      <font class="tekstObican"> O meni: </font>
                      <font class="tekstIskosen"><?php echo $Korisnik['Opis'];?></font>
                      
                      <br/> <br/>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                      <br />
                      <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                          <a class="dugme" target="_parent"
                             href="http://localhost/vunica.com/vunica/index.php/ProfilEditovanje">
                              Izmeni profil
                          </a>
                      <?php } ?>
                      <?php 
                        $id = $Korisnik['IDKorisnik'];
                        $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiKorisnika/$id"; 
                      ?>
                      <?php if((strcmp($this->session->Status, 'Admin') == 0) || ($Korisnik['UserName'] == $this->session->UserName)){ ?>
                          <a  id = "prijaviobrisi" class = "dugme"
                              href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete korisnika?','<?php echo $kontroler; ?>')"> 
                              Obrisi profil
                          </a>
                      <?php } ?>
                      <br/> <br/>
                  </td>
                </tr>
                  
                <br/> <br/> <br/> <br/>
                
                
                <table width = "60%" align = "center">
                    <?php if($Korisnik['UserName'] != $this->session->UserName){ ?>
                    <tr>
                        <td align = "center"> 
                            <font class = "tekstObican">
                                Korisnikov sadrzaj:
                            </font> 
                        </td> 
                    </tr>
                    <?php } ?>
                    <tr>
                        <td>
                            <hr width = "100%" class = "linija"/> 
                        </td>
                    </tr>
                </table> 
                
                <br/> <br/>
                  
                <table width = "80%" align = "center" valign = "top">
                    <tr>
                        <td width = "5%">
                            <!-- Prazna celija -->
                        </td>
                        <td width = "45%" valign = "top">       
                            <!-- Videi -->
                            <table width = "80%" align = "center">
                                <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                                <tr>
                                    <td>
                                        <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/PostavljanjeVidea'>
                                        <div class="dodajproizvod"  >  
                                            <p style="text-align: center">  Dodaj video </p>
                                        </div> 
                                        </a>
                                        <br/> <br/>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php 
                                    if($Videi != NULL){
                                        foreach ($Videi as $redVideo){ 
                                ?>
                                <tr>
                                    <td align = "center">
                                        <div class="produktKorisnika">
                                            <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/video/index/<?php
                                                                                echo $redVideo->IDVideo; ?>'>
                                                <font class="produktKorisnikaNaziv" style="left:
                                                      <?php echo ((250 - strlen($redVideo->Naziv) * 11) / 2); ?>px
                                                ">
                                                    <?php echo $redVideo->Naziv; ?>
                                                </font>
                                            </a>
                                            <font class="produktKorisnikaDatum" style="left:
                                                      <?php echo ((250 - strlen($redVideo->Datum) * 9) / 2); ?>px
                                            ">
                                                <?php echo $redVideo->Datum; ?>
                                            </font>
                                            <div class="produktKorisnikaZaglavlje">
                                            </div>
                                            <div class="produktKorisnikaPodnozje">
                                            </div>
                                            <div class="produktKorisnikaSenka"> 
                                            </div>

                                            <img class="produktKorisnikaSlika" src="<?php echo $redVideo->Slika; ?>">
                                        </div>   
                                        <br/>
                                    </td>
                                </tr>
                                <?php if((strcmp($this->session->Status, 'Admin') == 0) || ($Korisnik['UserName'] == $this->session->UserName)){ ?>
                                <tr>
                                    <td align = "center" valign = "top">
                                        <?php $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiVideo/$redVideo->IDVideo" ; ?>
                                        <a  id = "prijaviobrisi" class = "akcija"
                                            href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete video?','<?php echo $kontroler; ?>')"> 
                                            OBRISI VIDEO
                                        </a>
                                        <br/> <br/>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php 
                                        }
                                    }
                                    else{
                                ?>
                                <tr>
                                    <td height = "120px" align = "center" valign = "middle">
                                        <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                                            <font class = "tekstObican">
                                                Trenutno nemate svojih videa. Postanite aktivniji clan zajednice. Postavite proizvod!
                                            </font>
                                        <?php }else{ ?>
                                            <font class = "tekstObican">
                                                Korisnik nema svojih videa.
                                            </font>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </td>
                        <td width = "45%" valign = "top">
                            <!-- Proizvodi -->
                            <table width = "80%" align = "center">
                                <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                                <tr>
                                    <td>
                                        <?php if($status == 3){ ?>
                                            <a class="link" href="http://localhost/vunica.com/vunica/index.php/Pocetna/premiumProfil">
                                        <?php }else{ ?>
                                            <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/PostavljanjeProizvoda'>
                                        <?php }?>

                                            <div class="dodajproizvod">  
                                                <p style="text-align: center">  Dodaj proizvod </p>
                                            </div> 
                                            </a>

                                        <br/> <br/>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php 
                                    if($Proizvodi != NULL){
                                        foreach ($Proizvodi as $redProizvod){ 
                                ?>
                                <tr>
                                    <td align = "center">
                                        <div class="produktKorisnika">
                                            <a class = "link" target = "_blank" href = 'http://localhost/vunica.com/vunica/index.php/proizvod/index/<?php
                                                                                echo $redProizvod->IDProizvod; ?>'>
                                                <font class="produktKorisnikaNaziv" style="left:
                                                      <?php echo ((250 - strlen($redProizvod->Naziv) * 11) / 2); ?>px
                                                ">
                                                    <?php echo $redProizvod->Naziv; ?>
                                                </font>
                                            </a>
                                            <font class="produktKorisnikaDatum" style="left:
                                                      <?php echo ((250 - strlen($redProizvod->Datum) * 9) / 2); ?>px
                                            ">
                                                <?php echo $redProizvod->Datum; ?>
                                            </font>
                                            <div class="produktKorisnikaZaglavlje">
                                            </div>
                                            <div class="produktKorisnikaPodnozje">
                                            </div>
                                            <div class="produktKorisnikaSenka"> 
                                            </div>

                                            <img class="produktKorisnikaSlika" src="<?php echo $redProizvod->Slika; ?>">
                                        </div>     
                                        <br/>
                                    </td>
                                </tr>
                                <?php if((strcmp($this->session->Status, 'Admin') == 0) || ($Korisnik['UserName'] == $this->session->UserName)){ ?>
                                <tr>
                                    <td align = "center" valign = "top">
                                        <?php $kontroler = "http://localhost/vunica.com/vunica/index.php/Obrisi/obrisiProizvod/$redProizvod->IDProizvod" ; ?>
                                        <a  id = "prijaviobrisi" class = "akcija"
                                            href="javascript:upozorenje('Da li ste sigurni da zelite da obrisete proizvod?','<?php echo $kontroler; ?>')"> 
                                            OBRISI PROIZVOD
                                        </a>
                                        <br/> <br/>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                                <tr>
                                    <td align = "center" valign = "top">
                                        <a  id = "prijaviobrisi" class = "akcija"
                                            href="http://localhost/vunica.com/vunica/index.php/ProizvodEditovanje/index/<?php echo $redProizvod->IDProizvod;?>"> 
                                            IZMENI PROIZVOD
                                        </a>
                                        <br/> <br/>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php 
                                        }
                                    }
                                    else{
                                ?>
                                <tr>
                                    <td height = "120px" align = "center" valign = "middle">
                                        <?php if($Korisnik['UserName'] == $this->session->UserName){ ?>
                                            <font class = "tekstObican">
                                                Trenutno nemate svojih proizvoda. Postanite aktivniji clan zajednice. Postavite proizvod!
                                            </font>
                                        <?php }else{ ?>
                                            <font class = "tekstObican">
                                                Korisnik nema svojih proizvoda.
                                            </font>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </td>
                        <td width = "5%">
                            <!-- Prazna celija-->
                        </td>
                    </tr>
                </table>

              <br/> <br/> <br/> <br/> <br/>
              
              <!-- InstanceEndEditable -->
              </td>
          </tr>
     	</table>
     </div>
   
</body>
<!-- InstanceEnd -->

</html>

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

