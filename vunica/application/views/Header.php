<!-- Milos Andric 206/12 -->
<!-- Teodora Aleksic 391/12 -->

<!-- Header -->
    <div id = "headerOkvir">
      <table id = "header">
          <tr>
          	<td width = "6%">
                  <!-- Prazna celija-->
            </td>
            <td id = "logoPolje">
                <img src="http://vunica.azurewebsites.net/vunica/application/Slike/Vunica/vunica.png" id = "logo" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/IndexStrana', '_parent')">
            </td>
            <td width = "8%" class = "poljeMenija" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Pocetna', '_parent')">
                <font class = "opcijeMenija"> Početna </font>
            </td>
            <td width = "1%" class="poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Strikarnica', '_parent')">
                <font class = "opcijeMenija"> Štrikarnica </font>
            </td>
            <td width = "1%" class = "poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Pijaca', '_parent')">
                <font class = "opcijeMenija"> Pijaca </font>
            </td>
            <td>
                <!-- Prazna celija bez zadate sirine -->
            </td>
            
            <?php if($this->session->UserName != ''){ ?>
            <td id = "poljePrijava" style="width: 7%; text-align: right;">
                <font class = "opcijeMenija">
                    <font onclick = "window.open('http://vunica.azurewebsites.net/vunica/index.php/Profil/index/<?php echo $this->session->IDKorisnik?>', '_parent')">
                        <?php echo $this->session->UserName; ?>
                    </font>
                    /
                </font>
            </td>
            <td id = "poljePrijava" style="width: 5%; text-align: left; padding-right: 3%;">
                <?php 
                //    $attributes = array('id' => 'formaOdjava');
                //    echo form_open("PopUp/logout", $attributes); 
                ?>
                    <!--<input class = "odjava" type = "submit" value = "Odjava"/>-->
                <font class = "opcijeMenija" onclick="http://vunica.azurewebsites.net/vunica/index.php/PopUp/logout/"> Odjava </font>
                
            </td>
            <?php }else{ ?>
            <td id = "poljePrijava" style="width: 12%; text-align: center; padding-right: 3%;">
              <font class = "opcijeMenija">
                    <font onclick="prikazi_prijavu()">Prijava</font>
                    /
                    <font onclick="prikazi_registraciju()">Registracija</font>
              </font> 
            </td>
            <?php } ?>
            
            <td id = "cegerPolje">
                <div class="cegerPoljeDiv">
                  <?php if($this->session->UserName != ''){ ?>
                    <img src="http://vunica.azurewebsites.net/vunica/application/Slike/Ceger/Ceger.png" id = "ceger" onclick="window.open('http://vunica.azurewebsites.net/vunica/index.php/Ceger', '_parent')"/>
                    <?php
                        $niz = $this->session->Proizvodi;
                        
                        if($niz != ''){   
                            if(count($niz) > 0){
                               
                    ?>
                        <font id = "cegerBroj"> <?php echo count($niz); ?> </font>
                  <?php }}} ?>
                </div>
            </td>
          </tr>
      </table>
    </div>
