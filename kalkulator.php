<?xml version="1.0" encoding="utf-8"?>
</DECOTYPE html PUBLIC "~//W3C//DTD XHTML 1.0 Stict//EN" "http://www.w3.org/TR/xhtml/DTD/xhtml1-stict.dtd">

<html xmlns ="http://www.w3.org/1999/xhtml">
     <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	   <title>prio</title>
	   <link href="style.css" type="text/css" rel="stylesheet"></link>
	   <link href="menu.css" type="text/css" rel="stylesheet"></link>
	 </head>
	 <body>
	 <div class="frame_halaman">
	 <div class="header">
	 </div>
	 <div id="menu">
	 <ul>
	 <li><a href="index.html">HOME</a></li>
	 <li><a href="profil.html">PROFIL</a></li>
	 <li><a href="contak.html">CONTAK</a></li></ul></div>
	 <table class="halaman" border="0">
	 <tr>
	 <td class="kiri">
	 <h1>Kalkulator sederhana</h1>
<form action="" method="POST">
 <table cellpadding="4">
  <tr>
   <td>Nilai 1 : <input type="text" name="nil1" size="5"></td>
  </tr>
  <tr>
   <td align="center" colspan="2"><select name="operasi">
    <option value="+">Ditambah</option>
    <option value="-">Dikurangi</option>
    <option value="/">Dibagi</option>
    <option value="*">Dikali</option>
   </select></td>
  </tr>
  <tr>
   <td>Nilai 2 : <input type="text" name="nil2" size="5"></td>
  </tr>
 </table>Hasilnya adalah :
  
<?php
if ($_POST['nil1'] && $_POST['nil2']) {
     if ($_POST['operasi'] == '+') {
          echo $_POST['nil1']*$_POST['nil2'];
     } elseif ($_POST['operasi'] == '-') {
          echo $_POST['nil1']/$_POST['nil2'];
     } elseif ($_POST['operasi'] == '/') {
          echo $_POST['nil1']+$_POST['nil2'];
     } elseif ($_POST['operasi'] == '*') {
          echo $_POST['nil1']-$_POST['nil2'];
     }
}
?>
	 <h3>HTML Prio hadi winoto</h3>
	 <h3> <img src ="logo.png" width="100" align ="left"border="1">
	 <td class="kanan">
	 <div id="menu_titel">
	 <div id="set_menu_titel">
	 Last Posting
	 </div>
	 -  <br>
	 -  <br>
	 -  <br>
	 </div>
	 <div id="menu_titel">
	 <div id="set_menu_titel">
	 Artikel
	 </div>
	 -  <br>
	 -  <br>
	 -  <br>
	 </div>
	 <div id="menu_titel">
	 <div id="set_menu_titel">
	 Berita
	 </div>
	 -  <br>
	 -  <br>
	 -  <br>
	 </div>
	 </td>
	 </tr>
	 </table>
	 <div class="footer">
	 11/03/2016<br>
	 prio hadi winoto Brebes
	 </div>
	 </div>
	 
	 </body>
	 </html>
	 
	 