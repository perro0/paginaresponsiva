<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {
  background-color: #a2eebb;
  color: #000000;
  padding: 15px;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #e1fdda;
  color: #c93333;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.menu li:hover {
  background-color: #6fb641;
}

.aside {
  background-color: #96f56a;
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

.footer {
  background-color: #a2eebb;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
</style>
</head>
<body>

<div class="header">
  <center><h1>Aprendamos a ser ecologicamente correctos</h1></center>
</div>

<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
      <li><a href="Verduras.html">Conoce mas sobre las verduras y como sembrarlas</a></li>
      <li><a href="Frutas.html">Conoce mas de las frutas y como aprovecharlas</a></li>
      <li><a href="Leguminosas.html">Conoce mas sobre las leguminosas</a></li>
      <li><a href="index.html">Pagina Principal</a></li>
    </ul>
  </div>

  <div class="col-6 col-s-9">
  <form name="suma" method="post">
        <fieldset>
            <center><legend></legend></center><br><br>  
            <label>Nombre:</label>
            <input type="text" name="nombre" id="nombre"  requiered><br><br>

            <label>Fecha de Nacimiento:</label>                                                                                                                  
            <input type="date" name="fecha" id="fecha" requiered> <label>-----</label> <label>Sexo: </label>                          
            <input type="text" name="sexo" id="sexo" requiered><br><br><br>

            <label>Fecha:</label>                                                                                                                  
            <input type="date" name="fecha" id="fecha" requiered> <label>----------</label> <label>Profesion: </label>                          
            <input type="text" name="profesion" id="profesion" requiered><br><br><br>
           
            <label>Ocupacion:</label>                                                                                                                  
            <input type="text" name="ocupacion" id="ocupacion" requiered> <label>-----</label> <label>Carrera: </label>                          
            <input type="text" name="carrera" id="carrera" requiered><br><br><br>
             
            <label>Correo electronico:</label>
            <input type="email" name="correo" id="correo"><br><br>

            <label>Instrucciones cada pregunta tiene varias opciones; elije la opción que mejor te represente; llena la encuesta con la mayor franqueza posible</label><br><br>
            <center><label><h3>TEST DE HUELLA ECOLOGICA</h3></label></center><br>

            <center><label><h4>SECCION A: ALIMENTOS</h4></label></center><br>

            <label>1) ¿Cuántas raciones de fruta consumes a la semana? Nota: considera una ración de fruta mixta de 200 g</label><br>
            <select name="seleccion1">
              <option value="opcion1"> a) menos de una ración a la semana    0--- puntos</option>
              <option value="opcion2"> b) 1 a 2 raciones a la semana-----    1--- punto </option>
              <option value="opcion3"> c) 2 a 4 raciones a la semana-----    2--- puntos</option>
              <option value="opcion4"> d) 4 a 6 raciones a la semana-----    4--- puntos</option>
              <option value="opcion5"> e) 6 a 8 raciones a la semana-----    6--- puntos</option>
              <option value="opcion6"> f) 8 a 10 raciones a la semana-----   9--- puntos</option>
            </select><br><br>  
            
            <label>2) ¿Cuántas raciones de verdura consumes a la semana? Nota: considera una ración de verdura mixta de 200 g</label><br>
            <select name="seleccion2">
              <option value="opcion12"> a) menos de una ración a la semana    0--- puntos</option>
              <option value="opcion22"> b) 1 a 2 raciones a la semana-----    1--- punto </option>
              <option value="opcion32"> c) 2 a 4 raciones a la semana-----    2--- puntos</option>
              <option value="opcion42"> d) 4 a 6 raciones a la semana-----    4--- puntos</option>
              <option value="opcion52"> e) 6 a 8 raciones a la semana-----    6--- puntos</option>
            </select><br><br>  

            <label>3) ¿Cuántas piezas de pan (dulce y/o salado) consumes a la semana?g</label><br>
            <select name="seleccion3">
              <option value="opcion13"> a) 1 a 2 raciones a la semana    27--- puntos</option>
              <option value="opcion23"> b) 2 a 4 raciones a la semana-----    55--- puntos </option>
              <option value="opcion33"> c) 4 a 6 raciones a la semana-----    93--- puntos</option>
              <option value="opcion43"> d) 6 a 8 raciones a la semana-----    131--- puntos</option>
              <option value="opcion53"> e) 8 a 10 raciones a la semana-----    170--- puntos</option>
            
            </select><br><br>  

            <label>4) ¿Qué cantidad de tortilla consumes en promedio al día (piezas)?</label><br>
            <select name="seleccion4">
              <option value="opcion14"> a) 1 a 2 raciones al dia-----    92--- puntos</option>
              <option value="opcion24"> b) 2 a 4 raciones al dia-----    182--- puntos </option>
              <option value="opcion34"> c) 4 a 6 raciones al dia-----    295--- puntos</option>
              <option value="opcion44"> d) 6 a 8 raciones al dia-----    422--- puntos</option>
              <option value="opcion54"> e) 8 a 10 raciones al dia-----    542--- puntos</option>
            </select><br><br>

            <label>5) ¿Cuántas veces a la semana consumes carne de res??</label><br>
            <select name="seleccion5">
              <option value="opcion15"> a) 1 a 2 raciones a la semana-----    57--- puntos</option>
              <option value="opcion25"> b) 2 a 4 raciones a la semana-----    121--- puntos </option>
              <option value="opcion35"> c) 4 a 6 raciones a la semana-----    190--- puntos</option>
              <option value="opcion45"> d) 6 a 8 raciones a la semana-----    267--- puntos</option>
              <option value="opcion55"> e) 8 a 10 raciones a la semana-----    343--- puntos</option>
            </select><br><br>

            <label>6) ¿Cuántas veces a la semana consumes carne de pollo?</label><br>
            <select name="seleccion6">
              <option value="opcion16"> a) 1 a 2 raciones a la semana-----    234--- puntos</option>
              <option value="opcion26"> b) 2 a 4 raciones a la semana-----    470--- puntos </option>
              <option value="opcion36"> c) 4 a 6 raciones a la semana-----    789--- puntos</option>
              <option value="opcion46"> d) 6 a 8 raciones a la semana-----    1107--- puntos</option>
            </select><br><br>

            <label>7) ¿Cuántas veces a la semana consumes carne de cerdo?</label><br>
            <select name="seleccion7">
              <option value="opcion17"> a) 1 a 2 raciones a la semana-----    12--- puntos</option>
              <option value="opcion27"> b) 2 a 4 raciones a la semana-----    25--- puntos </option>
              <option value="opcion37"> c) 4 a 6 raciones a la semana-----    41--- puntos</option>
              <option value="opcion47"> d) 6 a 8 raciones a la semana-----    140--- puntos</option>
              <option value="opcion57"> e) 8 a 10 raciones a la semana-----    155--- puntos</option>
            </select><br><br>

            <label>8) ¿Cuántas veces al mes consumes pescado y/o mariscos?</label><br>
            <select name="seleccion8">
              <option value="opcion18"> a) 1 a 2 raciones a la semana-----    217--- puntos</option>
              <option value="opcion28"> b) 2 a 4 raciones a la semana-----    425--- puntos </option>
              <option value="opcion38"> c) 4 a 6 raciones a la semana-----    711--- puntos</option>
              <option value="opcion48"> d) 6 a 8 raciones a la semana-----    998--- puntos</option>
              <option value="opcion58"> e) 8 a 10 raciones a la semana-----    1298--- puntos</option>
            </select><br><br>

            <label>9) ¿Cuántas veces a la semana consumes yoghurt? Considera una ración en presentación individual de vaso o para beber.</label><br>
            <select name="seleccion9">
              <option value="opcion19"> a) 1 a 2 raciones a la semana-----    104--- puntos</option>
              <option value="opcion29"> b) 3 a 4 raciones a la semana-----    243--- puntos </option>
              <option value="opcion39"> c) 5 a 6 raciones a la semana-----    382--- puntos</option>
              <option value="opcion49"> d) 7 a 8 raciones a la semana-----    521--- puntos</option>
              <option value="opcion59"> e) 9 a 10 raciones a la semana-----    825--- puntos</option>
            </select><br><br>

            <label>10) ¿Cuántas veces a la semana tomas leche? Considera una ración de 250 mL.</label><br>
            <select name="seleccion10">
              <option value="opcion10"> a) 1 a 2 veces a la semana-----    130--- puntos</option>
              <option value="opcion20"> b) 3 a 4 veces a la semana-----    304--- puntos </option>
              <option value="opcion30"> c) 5 a 6 veces a la semana-----    478--- puntos</option>
              <option value="opcion40"> d) 7 a 8 veces a la semana-----    651--- puntos</option>
              <option value="opcion50"> e) 9 a 10 veces a la semana-----    825--- puntos</option>
            </select><br><br>
            
            <label>12) ¿Cuántas veces a la semana tomas refresco? (Considera como base una lata de refresco de 355 mL)Si no consumes refresco, omite esta pregunta. </label><br>
            <select name="seleccion12">
              <option value="opcion65"> a) 1 a 2 veces a la semana-----    1--- puntos</option>
              <option value="opcion66"> b) 2 a 4 veces a la semana-----    2--- puntos </option>
              <option value="opcion67"> c) 4 a 6 veces a la semana-----    4--- puntos</option>
              <option value="opcion68"> d) 6 a 8 veces a la semana-----    5--- puntos</option>
              <option value="opcion69"> e) 8 a 10 veces a la semana-----    7--- puntos</option>
            </select><br><br>

            <label>13) ¿Cuántos cigarrillos fumas al día? Si no fumas, omite esta pregunta</label><br>
            <select name="seleccion13">
              <option value="opcion70"> a) 1 al dia-----    3--- puntos</option>
              <option value="opcion71"> b) entre 2 a 5 al dia-----    10--- puntos </option>
              <option value="opcion72"> c) 6 y 10 al dia-----    24--- puntos</option>
              <option value="opcion73"> d) 11 y 15 al dia-----    37--- puntos</option>
              <option value="opcion74"> e) 16 y 20 al dia-----    52--- puntos</option>
            </select><br><br>

            <label>14) ¿En cuánto estimas tu consumo a la semana de cerveza? (Toma como base una lata de cerveza de 355 mL) Si no consumes este tipo de bebida, pasa a la siguiente pregunta</label><br>
            <select name="seleccion14">
              <option value="opcion75"> a) 1 a 2 veces a la semana-----    40--- puntos</option>
              <option value="opcion76"> b) 2 a 4 veces a la semana-----    79--- puntos </option>
              <option value="opcion77"> c) 4 a 6 veces a la semana-----    131--- puntos</option>
              <option value="opcion78"> d) 6 a 8 veces a la semana-----    186--- puntos</option>
              <option value="opcion79"> e) 8 a 10 veces a la semana-----    239--- puntos</option>
            </select><br><br>

            <label>15) ¿Cuántos litros (L) de agua embotellada consumes aproximadamente a la semana</label><br>
            <select name="seleccion15">
              <option value="opcion80"> a) 1 a 2 litros a la semana-----    4-- puntos</option>
              <option value="opcion81"> b) 2 a 4 litros a la semana-----    10--- puntos </option>
              <option value="opcion82"> c) 5 a 6 litros a la semana-----    14--- puntos</option>
              <option value="opcion83"> d) 7 a 8 litros a la semana-----    20--- puntos</option>
              <option value="opcion84"> e) 9 a 10 litros a la semana-----    25--- puntos</option>
            </select><br><br>

            <center><label><h4>SECCIÓN B: TRANSPORTE</h4></label></center><br>
            <center><label><h5>(Considera un día hábil promedio)</h5></label></center><br>


            <label>16) ¿Cuántos kilómetros recorres diariamente en el Sistema Colectivo Metro? Nota: considera recorridos de ida y vuelta</label><br>
            <select name="seleccion16">
              <option value="opcion85"> a) 2 a 6 kilometros diariamente-----    68--- puntos</option>
              <option value="opcion86"> b) 7 a 12 kilometros diariamente-----    160--- puntos </option>
              <option value="opcion87"> c) 13 a 18 kilometros diariamente-----    260--- puntos</option>
              <option value="opcion88"> d) 19 a 24 kilometros diariamente-----    360--- puntos</option>
              <option value="opcion89"> e) 25 a 30 kilometros diariamente-----    470--- puntos</option>
            </select><br><br>

            <label>17) ¿Cuántos kilómetros recorres diariamente en transportecolectivo? (combi, microbús o autobús) Nota: considera recorridos de ida y vuelta</label><br>
            <select name="seleccion17">
              <option value="opcion90"> a) 5 a 7 kilometros diariamente-----    250--- puntos</option>
              <option value="opcion91"> b) 8 a 10 kilometros diariamente-----    380--- puntos </option>
              <option value="opcion92"> c) 11 a 13 kilometros diariamente-----    510--- puntos</option>
              <option value="opcion93"> d) 14 a 16 kilometros diariamente-----    630--- puntos</option>
              <option value="opcion94"> e) 17 a 20 kilometros diariamente-----    780--- puntos</option>
            </select><br><br>

            <label>18) ¿Cuántas horas, en promedio, viajas en avión al año? Nota: considera recorridos de ida y vuelta. Si no utilizas este trasporte pasa a la siguiente pregunta</label><br>
            <select name="seleccion18">
              <option value="opcion95"> a) menos de 2 horas al año-----    1100--- puntos</option>
              <option value="opcion96"> b) 2 y 7 horas al año-----    4400--- puntos </option>
              <option value="opcion97"> c) 7 y 15 horas al año-----    8800--- puntos</option>
              <option value="opcion98"> d) 15 y 25 horas al año-----    11000--- puntos</option>
              <option value="opcion99"> e) mas de 25 horas al año-----    22200--- puntos</option>
            </select><br><br>

            <label>19) ¿Cuentas con auto propio?</label><br>
            <select name="seleccion19">
              <option value="opcion100"> a) Si-----    12000--- puntos</option>
              <option value="opcion101"> b) No-----    0--- puntos </option>
            </select><br><br>

            <label>20) ¿Qué distancia recorres (km) en auto propio o taxi, diariamente? Nota: considera recorridos de ida y vuelta. Si no usas este transporte, omite la respuesta y pasa a la siguiente pregunta</label><br><br>
            <select name="seleccion20">
              <option value="opcion105"> a) 2 a 6 kilometros diarios-----    520--- puntos</option>
              <option value="opcion106"> b) 7 a 12 kilometros diarios-----    1200--- puntos </option>
              <option value="opcion107"> c) 13 a 18 kilometros diarios-----    2000--- puntos</option>
              <option value="opcion108"> d) 19 a 24 kilometros diarios-----    2800--- puntos</option>
              <option value="opcion109"> e) 25 a 30 kilometros diarios-----    3500--- puntos</option>
            </select><br><br>

            <center><label><h4>SECCIÓN C: ENERGÍA</h4></label></center><br><br>
           
            <label>22) ¿Cuántos focos convencionales hay en tu casa?</label><br>
            <select name="seleccion22">
              <option value="opcion115"> a) 1 a 3-----    190--- puntos</option>
              <option value="opcion116"> b) 4 a 6-----    480--- puntos </option>
              <option value="opcion117"> c) 7 a 9-----    780--- puntos</option>
              <option value="opcion118"> d) 10 a 12-----    1000--- puntos</option>
              <option value="opcion119"> e) 13 a 15-----    1300--- puntos</option>
            </select><br><br>

            <label>23) ¿Cuántos focos ahorradores hay en tu casa?</label><br>
            <select name="seleccion23">
              <option value="opcion177"> a) 1 a 3-----    78--- puntos</option>
              <option value="opcion178"> b) 4 a 6-----    190--- puntos </option>
              <option value="opcion179"> c) 7 a 9-----    310--- puntos</option>
              <option value="opcion180"> d) 10 a 12-----    430--- puntos</option>
              <option value="opcion181"> e) 13 a 15-----    540--- puntos</option>
            </select><br><br>
           
          
           
            <label>26) Tu calentador o “boiler” utiliza:</label><br>
            <select name="seleccion26">
              <option value="opcion135"> a) Gas LP-----    500--- puntos</option>
              <option value="opcion136"> b) Gas natural-----    400--- puntos </option>
              <option value="opcion137"> c) Electricidad-----    300--- puntos</option>
            </select><br><br>

            <label>27) ¿Cuánto tiempo tardo en bañarme?</label><br>
            <select name="seleccion27">
              <option value="opcion140"> a) Mas de 20 minutos-----    910--- puntos</option>
              <option value="opcion141"> b) Entre 10 y 20 minutos-----    450--- puntos </option>
              <option value="opcion142"> c) Entre 5 y 10 minutos-----    223--- puntos</option>
              <option value="opcion143"> d) solo 5 minutos-----    149--- puntos</option>
            </select><br><br>

            <label>28) Cuando me lavo los dientes…</label><br>
            <select name="seleccion28">
              <option value="opcion145"> a) Dejo correr el agua-----    6--- puntos</option>
              <option value="opcion146"> b) Utilizo un vaso con agua-----    1--- punto </option>
            </select><br><br>

            <label>29) ¿Cuántas veces por día vacío el escusado o WC?</label><br>
            <select name="seleccion29">
              <option value="opcion150"> a) 2 a 3 veces al dia-----    55--- puntos</option>
              <option value="opcion151"> b) 4 a 6 veces al dia-----    108--- puntos </option>
              <option value="opcion152"> c) 7 a 9 veces al dia-----    146--- puntos</option>
              <option value="opcion153"> d) 10 a 12 veces al dia-----    240--- puntos</option>
            </select><br><br>

            <center><label><h4>SECCIÓN D: FORESTAL</h4></label></center><br>

            <label>30) ¿Cuántas libretas profesionales de 100 hojas usas en un semestre? </label><br>
            <select name="seleccion30">
              <option value="opcion155"> a) 2 a 3 libretas por semestre-----    58--- puntos</option>
              <option value="opcion156"> b) 3 a 4 libretas por semestre-----    81--- puntos </option>
              <option value="opcion157"> c) 4 a 5 libretas por semestrena-----    105--- puntos</option>
              <option value="opcion159"> d) 5 a 6 libretas por semestre-----    128--- puntos</option>
              <option value="opcion175"> e) 6 a 7 libretas por semestre-----    151--- puntos</option>
            </select><br><br>

            <input type="submit" value="Calcular" name="Enviado">
        </fieldset>
    </form>
    </center>
    <center>
    <?php
    if(isset($_POST["Enviado"])){
        $seleccion1=$_POST["seleccion1"];
        $seleccion2=$_POST["seleccion2"];
        $seleccion3=$_POST["seleccion3"];
        $seleccion4=$_POST["seleccion4"];
        $seleccion5=$_POST["seleccion5"];
        $seleccion6=$_POST["seleccion6"];
        $seleccion7=$_POST["seleccion7"];
        $seleccion8=$_POST["seleccion8"];
        $seleccion9=$_POST["seleccion9"];
        $seleccion10=$_POST["seleccion10"];
        $seleccion12=$_POST["seleccion12"];
        $seleccion13=$_POST["seleccion13"];
        $seleccion14=$_POST["seleccion14"];
        $seleccion15=$_POST["seleccion15"];
        $seleccion16=$_POST["seleccion16"];
        $seleccion17=$_POST["seleccion17"];
        $seleccion18=$_POST["seleccion18"];
        $seleccion19=$_POST["seleccion19"];
        $seleccion20=$_POST["seleccion20"];
        $seleccion22=$_POST["seleccion22"];
        $seleccion23=$_POST["seleccion23"];
        $seleccion26=$_POST["seleccion26"];
        $seleccion27=$_POST["seleccion27"];
        $seleccion28=$_POST["seleccion28"];
        $seleccion29=$_POST["seleccion29"];
        $seleccion30=$_POST["seleccion30"];
        $contador;
        $contador1;
        $contador2;
        $contador3;
        $contador4;
        $contador5;
        $contador6;
        $contador7;
        $contador8;
        $contador9;
        $contador12;
        $contador13;
        $contador14;
        $contador15;
        $contador16;
        $contador17;
        $contador18;
        $contador19;
        $contador20;
        $contador21;
        $contador22;
        $contador23; 
        $contador26;
        $contador27;
        $contador28;
        $contador29;

        switch($seleccion1){
          case "opcion1":
            $contador=0;
          break;
          case "opcion2":
            $contador=1;
          break;
          case "opcion3":
            $contador=2;
          break;
          case "opcion4":
            $contador=4;
          break;
          case "opcion5":
            $contador=6;
          break;
          case "opcion6":
            $contador=9;
          break;
        }
        switch($seleccion2){
          case "opcion12":
            $contador1=0;
          break;
          case "opcion22":
            $contador1=1;
          break;
          case "opcion32":
            $contador1=2;
          break;
          case "opcion42":
            $contador1=4;
          break;
          case "opcion52":
            $contador1=6;
          break;
        }
        switch($seleccion3){
          case "opcion13":
            $contador2=27;
          break;
          case "opcion23":
            $contador2=55;
          break;
          case "opcion33":
            $contador2=93;
          break;
          case "opcion43":
            $contador2=131;
          break;
          case "opcion53":
            $contador2=170;
          break;
  
        }
        switch($seleccion4){
          case "opcion14":
            $contador3=92;
          break;
          case "opcion24":
            $contador3=182;
          break;
          case "opcion34":
            $contador3=295;
          break;
          case "opcion44":
            $contador3=422;
          break;
          case "opcion54":
            $contador3=542;
          break;
  
        }
        switch($seleccion5){
          case "opcion15":
            $contador4=57;
          break;
          case "opcion25":
            $contador4=121;
          break;
          case "opcion35":
            $contador4=190;
          break;
          case "opcion45":
            $contador4=267;
          break;
          case "opcion55":
            $contador4=343;
          break;
  
        }
        switch($seleccion6){
          case "opcion16":
            $contador5=234;
          break;
          case "opcion26":
            $contador5=470;
          break;
          case "opcion36":
            $contador5=789;
          break;
          case "opcion46":
            $contador5=1107;
          break;
         
  
        }
        switch($seleccion7){
          case "opcion17":
            $contador6=12;
          break;
          case "opcion27":
            $contador6=25;
          break;
          case "opcion37":
            $contador6=41;
          break;
          case "opcion47":
            $contador6=140;
          break;
          case "opcion57":
            $contador6=155;
          break;
  
        }
        switch($seleccion8){
          case "opcion18":
            $contador7=217;
          break;
          case "opcion28":
            $contador7=425;
          break;
          case "opcion38":
            $contador7=711;
          break;
          case "opcion48":
            $contador7=998;
          break;
          case "opcion58":
            $contador7=1298;
          break;
  
        }
        switch($seleccion9){
          case "opcion19":
            $contador8=104;
          break;
          case "opcion29":
            $contador8=243;
          break;
          case "opcion39":
            $contador8=382;
          break;
          case "opcion49":
            $contador8=521;
          break;
          case "opcion59":
            $contador8=660;
          break;
        
        }
        switch($seleccion10){
          case "opcion10":
            $contador9=130;
          break;
          case "opcion20":
            $contador9=304;
          break;
          case "opcion30":
            $contador9=478;
          break;
          case "opcion40":
            $contador9=651;
          break;
          case "opcion50":
            $contador9=825;
          break;
        }
        
        switch($seleccion12){
          case "opcion65":
            $contador12=1;
          break;
          case "opcion66":
            $contador12=2;
          break;
          case "opcion67":
            $contador12=4;
          break;
          case "opcion68":
            $contador12=5;
          break;
          case "opcion69":
            $contador12=7;
          break;
  
        }
        switch($seleccion13){
          case "opcion70":
            $contador13=3;
          break;
          case "opcion71":
            $contador13=10;
          break;
          case "opcion72":
            $contador13=24;
          break;
          case "opcion73":
            $contador13=37;
          break;
          case "opcion74":
            $contador13=52;
          break;
  
        }
        switch($seleccion14){
          case "opcion75":
            $contador14=40;
          break;
          case "opcion76":
            $contador14=79;
          break;
          case "opcion77":
            $contador14=131;
          break;
          case "opcion78":
            $contador14=186;
          break;
          case "opcion79":
            $contador14=239;
          break;
         
  
        }
        switch($seleccion15){
          case "opcion80":
            $contador15=4;
          break;
          case "opcion81":
            $contador15=10;
          break;
          case "opcion82":
            $contador15=14;
          break;
          case "opcion83":
            $contador15=20;
          break;
          case "opcion84":
            $contador15=25;
          break;
  
        }
        switch($seleccion16){
          case "opcion85":
            $contador16=68;
          break;
          case "opcion86":
            $contador16=160;
          break;
          case "opcion87":
            $contador16=260;
          break;
          case "opcion88":
            $contador16=360;
          break;
          case "opcion89":
            $contador16=470;
          break;
  
        }
        switch($seleccion17){
          case "opcion90":
            $contador17=250;
          break;
          case "opcion91":
            $contador17=380;
          break;
          case "opcion92":
            $contador17=510;
          break;
          case "opcion93":
            $contador17=630;
          break;
          case "opcion94":
            $contador17=780;
          break;
         
        }
        switch($seleccion18){
          case "opcion95":
            $contador18=1100;
          break;
          case "opcion96":
            $contador18=4400;
          break;
          case "opcion97":
            $contador18=8800;
          break;
          case "opcion98":
            $contador18=11000;
          break;
          case "opcion99":
            $contador18=22200;
          break;
        }
        switch($seleccion19){
          case "opcion100":
            $contador19=12000;
          break;
          case "opcion101":
            $contador19=0;
          break;
      
        }
        switch($seleccion20){
          case "opcion105":
            $contador20=520;
          break;
          case "opcion106":
            $contador20=1200;
          break;
          case "opcion107":
            $contador20=2000;
          break;
          case "opcion108":
            $contador20=2800;
          break;
          case "opcion109":
            $contador20=3500;
          break;
  
        }

      
        switch($seleccion22){
          case "opcion115":
            $contador22=190;
          break;
          case "opcion116":
            $contador22=480;
          break;
          case "opcion117":
            $contador22=780;
          break;
          case "opcion118":
            $contador22=1000;
          break;
          case "opcion119":
            $contador22=1300;
          break;
  
        }
        switch($seleccion23){
          case "opcion177":
            $contador23=78;
          break;
          case "opcion178":
            $contador23=190;
          break;
          case "opcion179":
            $contador23=310;
          break;
          case "opcion180":
            $contador23=430;
          break;
          case "opcion181":
            $contador23=540;
          break;
  
        }
       
        switch($seleccion26){
          case "opcion135":
            $contador26=500;
          break;
          case "opcion136":
            $contador26=400;
          break;
          case "opcion137":
            $contador26=300;
          break;
        }
        switch($seleccion27){
          case "opcion140":
            $contador27=910;
          break;
          case "opcion141":
            $contador27=450;
          break;
          case "opcion142":
            $contador27=223;
          break;
          case "opcion143":
            $contador27=149;
          break;
        }
        switch($seleccion28){
          case "opcion145":
            $contador28=6;
          break;
          case "opcion146":
            $contador28=1;
          break;
        }
        switch($seleccion29){
          case "opcion150":
            $contador29=55;
          break;
          case "opcion151":
            $contador29=108;
          break;
          case "opcion152":
            $contador29=176;
          break;
          case "opcion153":
            $contador29=240;
          break;
  
        }
        switch($seleccion30){
          case "opcion155":
            $contador30=58;
          break;
          case "opcion156":
            $contador30=81;
          break;
          case "opcion157":
            $contador30=105;
          break;
          case "opcion159":
            $contador30=128;
          break;
          case "opcion175":
            $contador30=151;
          break;
         
  
        }
        
        $suma=$contador+$contador1+$contador2+$contador3+$contador4+$contador5+$contador6+$contador7+$contador8+$contador9+$contador12+$contador13+$contador14+$contador15+$contador16+$contador17+$contador18+$contador19+$contador20+$contador22+$contador23+$contador26+$contador27+$contador28+$contador29+$contador30;
        echo "Tu puntuacion es de: ".$suma."  "."puntos"."<br>";
         
        
          if($suma<19500){
            echo "•	 obtuviste menos de 19,500 puntos, requieres
            menos de 1.9 hectáreas globales (hag) y vives
            dentro de los límites del Planeta: ¡¡Bien hecho!!
            Para satisfacer tu patrón de consumo requieres entre:
            0.13 hag ─ 1.9 hag
            Traducido a campos de fútbol: menos de dos campos
            de fútbol
            Traducido a Planetas requieres entre: 0.06 ─ 1 Planeta
            ";
          }
            
          
            if(($suma>19500) && ($suma<32000)){
              echo "•	 tu puntaje está entre 19,500 y 32,000 ¡¡cuidado!!
              Tu impacto ambiental individual está por arriba del
              umbral de sostenibilidad del Planeta. Para satisfacer
              tu patrón de consumo requieres entre:
              1.6 hag ─ 3.2 hag
              Traducido a campos de fútbol: entre dos y tres campos
              de fútbol
              Traducido a Planetas: >1 ─ 2 Planetas";
            }

            if($suma>32000){
              echo "•	 obtuviste un puntaje mayor a 32,000 significa que
              tu ritmo de vida es completamente insostenible, tu
              Huella Ecológica es muy superior a 1.6 hectáreas
              globales. Si todo el mundo consumiera los mismos
              recursos que consumes tú, sería necesario tener
              al menos otro Planeta Tierra que nos apoye para
              mantener a toda la población.
              Traducido a campos de fútbol: más de tres campos de
              fútbol
              Traducido a Planetas: más de 2 Planetas";
            }
        }
    
    ?>
  </div>

  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>Que es la huella ecologica</h2>
      <p>Huella ecológica

Déficit o superávit ecológico nacional, medido como la biocapacidad por persona de un país (en hectáreas globales) menos su huella ecológica por persona (también en hectáreas globales). Datos de 2013.1​

La huella ecológica (del inglés ecological footprint) es un concepto creado por William Rees y su entonces alumno Mathis Wackernagel2 en 1996, que analiza los patrones de consumo de recursos y la producción de desechos de una población determinada; los dos se expresan en áreas productivas necesarias para mantener tales servicios. La huella muestra el cálculo de recursos específicos.3​

Mide la superficie necesaria (calculada en hectáreas) para producir los recursos consumidos por un ciudadano, una actividad, país, ciudad o región, etc, así como la necesaria para absorber los residuos que genera, independientemente de donde estén localizadas estas áreas. 4​

Se trata de un indicador para conocer la sostenibilidad5​ de las actividades humanas. La ventaja que presenta es la posibilidad de realizar comparaciones.</p>
    </div>
  </div>
</div>

<div class="footer">
  <p>Elaboro: Vicente Alarcon Dominguez</p>
</div>

</body>
</html>


