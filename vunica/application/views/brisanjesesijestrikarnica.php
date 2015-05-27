<?php

/* Tijana Trifunovic 311/12
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


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
<script>
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
</script>