

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/spinner.css" type ="text/css"/>
        <link rel="stylesheet" href="assets/css/circle.css?v=1" type ="text/css"/>
        <link rel="stylesheet" href="assets/css/slider.css" type="text/css" />
        <title>Touch&Go - @yield('title')</title>
      

    </head>
    <body>

        <div class="container">
            
            @yield('content')
        </div>
        <div id= "circles" >
            <div id="stage" style="background: rgba(142, 42, 48, 0.6);">
	        	<p id="spinner">¿Qué Quieres Hacer?</p>
		    </div>
				<div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
                	<img id="imag" class="img-circle" src="https://image.freepik.com/free-icon/man-sitting-in-front-of-a-table-eating-and-drinking-while-having-lunch_318-62566.png" />
                	<span class="img-title">Comer</span>
                </div>
                <div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
                	<img id="imag" class="img-circle" src="http://univers-maya.fr/wp-content/uploads/2013/09/boire.jpg" />
                	<span class="img-title">Beber</span>
                </div>
                <div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
               		<img id="imag" class="img-circle" src="https://despiertaiglesiaya.files.wordpress.com/2013/02/bailar.jpg" />
                	<span class="img-title">Bailar</span>
                </div>
                <div class="casilla"  style="width:120px; float:left; text-align:center; display: inline-block">
                	<img id="imag" class="img-circle" src="http://www.buscorestaurantes.com/files/logo/Cafe-Sito-II-103683.jpg" />
                	<span class="img-title">cafe</span>
                </div>
		        <div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
		        	<img id="imag" class="img-circle" src="http://cdn5.dibujos.net/dibujos/pintar/cine.gif" />
		        	<span class="img-title">Cine</span>
		        </div>
                <div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
                	<img id="imag" class="img-circle" src="http://www.idibujos.com/wp-content/uploads/2012/04/Leer.jpg" /> 
                	<span class="img-title">Leer</span>
                </div>
                <div class="casilla" style="width:120px; float:left; text-align:center; display: inline-block">
                	<img id="imag" class="img-circle" src="http://blogs.ceibal.edu.uy/formacion/wp-content/uploads/2014/12/turismo.jpg" /> 
                	<span class="img-title">Aventura</span>
                </div>
        </div>
    </body>
</html>