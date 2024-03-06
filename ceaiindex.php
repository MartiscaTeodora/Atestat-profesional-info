<DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<title> CEAI</title>


<style>

  h5{
  font-family:verdana;
  font-size:15px;
  color:#ffd1f8;
  background:#ffd1f8;
  }

  h6{font-size: 50px;}

  #box1{
  height: 100vh;
  width: 100%;
  background-image: url('ceai 3.jpg');
  background-size: cover;
  display:table;
  background-attachment: fixed;
  }

  #box2{
  height: 100vh;
  width: 100%;
  background-image: url('ceai 2.jpg');
  background-size: cover;
  display:table;
  background-attachment: fixed;
  }

  #box3{
  height: 100vh;
  width: 100%;
  background-image: url('ceai 1.jpg');
  background-size: cover;
  display:table;
  background-attachment: fixed;
  }



  h1 {
  font-family:arial black;
  font-size:50px;
  color:white;
  margin: 0px;
  text-align:center;
  display:table-cell;
  vertical-align:middle;
  }

  body{
    background-image: url('untitled-9228.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: Arial;
    color: white;
    margin: 0;
  padding: 0;
  }


  * {
    box-sizing: border-box;
  }
  table{
   <!-- margin-top: 100px;-->

    margin-bottom: 100px;
    margin-right: auto;
    margin-left: auto;
    background: rgba(255, 208, 138, .5);
    <!-- opacity: .8;-->
    color: #120501;
     border-radius: 10px;
   
  }
  .column {
    float: left;
    width: 50%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
</style>

</head>

<body >

<!-- muniul de sus-->
<a id="sus">
<ul>
  <li> <a href="ceaiindex.html"> Pagina Principala</a></li>
  <li> <a href="jurullumii.html"> Ceaiul in jurul lumii</a>
    <ul>
      
       <li><a href="jleu.html"> Europa</a></li>
      <li><a href="jlas.html"> Asia </a></li>
      <li><a href="jlaf.html"> Africa </a></li>
      <li><a href="jlam.html"> America</a></li>
    </ul>
  </li>

  <li><a href="istorie.html"> Istoria ceaiului</a>
    
  </li>


  <li><a href="util.html"> Utilizari</a>
    <ul>
      
      <li><a href="exprcult.html"> Experienta culturala</a></li>
      <li><a href="exprelig.html"> Experienta religioasa </a></li>
      <li><a href="utmed.html"> Utilizare medicala </a></li>
      
    </ul>
  </li>

</ul>
</a>
<br>
<br><br>
<br>
<br>

<!-- de aici incep incercarile mele reletiv patetice de php-->
<table width="1110"><tr width="1110"><td width="1110">
    <FORM METHOD="post" ACTION="scorequiz.php">
    <h2>Chestionar:</h2>
    <br>

          <FORM METHOD="post" ACTION="scorequiz.php">
          Acest chestionar cuprinde cateva intrebari despre preferintele si consumul de ceai, dupa finalizare formularului veti primi o recomandare personalizata.
          <br><br><br>
      <b>Ce tip de ceai preferati?<BR></B>
      <INPUT TYPE="radio" NAME="a" VALUE="0">De plante<BR>
      <INPUT TYPE="radio" NAME="a" VALUE="1">De fructe<BR>
      <br>
      <b>Alegeti varianta preferata:<BR></B>
      <INPUT TYPE="radio" NAME="a" VALUE="0">Ceai negru<BR>
      <INPUT TYPE="radio" NAME="a" VALUE="1">Ceai verde<BR>
      <br>

      <b>Cand preferati sa beti ceai?<BR></B>
      <INPUT TYPE="radio" NAME="a" VALUE="0">Dimineata<BR>
      <INPUT TYPE="radio" NAME="a" VALUE="1">seara<BR>

      <br>

        <B>Cate cani de cai consumati pe saptamana?<BR></B>
        <INPUT TYPE="radio" NAME="b" VALUE="1">Zero<BR>
        <INPUT TYPE="radio" NAME="b" VALUE="3">1-3 cani<BR>
        <INPUT TYPE="radio" NAME="b" VALUE="6">4-7 cani<BR>
        <INPUT TYPE="radio" NAME="b" VALUE="9">mai mult de o cana pe zi<BR><BR>


              <label for="fname">Nume:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Prenume</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>


        <label for="phone">Numarul de telefon:</label>
      <input type="tel" id="phone" name="phone">
  
      <BR>
    <INPUT TYPE="submit" VALUE="Score Quiz!" >
    <BR><BR>
    </FORM>
  </td></tr></table>
  <br>
<!--
si aici se termina-->



<!--  tabel inf generale:-->

<table width="1110">
  <tr width="1110">
   <td rowspan="2" width="400px" margin="5px"> <img src="p2.jpg" width="400px"></td>
    <th height="20px"><h6>Ceaiul planta si prezentare generala</h6></th>
    
  </tr>
  <tr>
    <td>
      <hr color="#120501">
      <p>Ceaiul este o băutură obținută prin infuzarea frunzelor uscate ale plantei Camellia sinensis (L.). În funcție de gradul de oxidare a frunzelor, cele patru tipuri principale de ceai sunt: ceaiul alb, ceaiul verde, ceaiul oolong și ceaiul negru. Compoziția chimică a ceaiului variază în funcție de recoltă, condiții pedoclimatice și metoda de prelucrare; dintre componenți amintim: teina (alcaloid asemănător cu cel care se găsește în cafea, maté și nucile de cola), tanin și uleiuri volatile.
      </p>
      <p>Termenul de „ceai” desemnează și infuziile din alte plante decât Camellia sinensis, cum ar fi maté (Ilex paraguarensis), lapacho (Tecoma curialis), rooibos (Aspalathus linearis), condimente, mentă, mușețel, fructe uscate etc.

      </p> 

    </td>
    
  </tr>
  
</table>
<br>

<br>


<div class="b">

<br>
<div id="box1">
<h1>APA</h1>
</div>

<div id="box2">
<h1>PLANTE</h1>
</div>

<div id="box3">
<h1>CEAI</h1>
</div>



</body>
</html>