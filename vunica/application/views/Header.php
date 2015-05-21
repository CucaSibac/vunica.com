<!-- Header -->
    <div id = "headerOkvir">
      <table id = "header">
          <tr>
          	<td width = "6%">
                  <!-- Prazna celija-->
            </td>
            <td id = "logoPolje">
                <img src="http://localhost/Slike/Vunica/vunica.png" id = "logo" onclick="window.open('http://localhost/vunica.com/vunica/index.php/IndexStrana', '_parent')">
            </td>
            <td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pocetna', '_parent')">
                <font class = "opcijeMenija"> Početna </font>
            </td>
            <td width = "1%" class="poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Strikarnica', '_parent')">
                <font class = "opcijeMenija"> Štrikarnica </font>
            </td>
            <td width = "1%" class = "poljeMenija">
              <font color="#605951" face="Tahoma, Geneva, sans-serif" size="3"> | </font>
            </td>
			<td width = "8%" class = "poljeMenija" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Pijaca', '_parent')">
                <font class = "opcijeMenija"> Pijaca </font>
            </td>
            <td>
                <!-- Prazna celija bez zadate sirine -->
            </td>
            <td id = "poljePrijava">
              <font class = "opcijeMenija" style="white-space: nowrap;">
                  <?php if($this->session->UserName != ''){ ?>
                      <font onclick = "window.open('http://localhost/vunica.com/vunica/index.php/Profil', '_parent')">
                           <?php echo $this->session->UserName; ?>
                      </font>
                      /
                      <?php 
                        $attributes = array('id' => 'formaOdjava');
                        echo form_open("PopUp/logout", $attributes); 
                      ?>
                        <input class = "odjava" type = "submit" value = "Odjava"/>
                      <?php echo form_close();?>
                  <?php }else{ ?>
                    <font onclick="prikazi_prijavu()">Prijava</font>
                    /
                    <font onclick="prikazi_registraciju()">Registracija</font>
                  <?php } ?>
              </font> 
            </td>
            <td id = "cegerPolje">
              <?php if($this->session->UserName != ''){ ?>
                <img src="http://localhost/Slike/Ceger/Ceger.png" id = "ceger" onclick="window.open('http://localhost/vunica.com/vunica/index.php/Ceger', '_parent')"/>  
              <?php } ?>
            </td>
          </tr>
      </table>
    </div>