

<html>
    <head>
        <title>Touch&Go - @yield('title')</title>
    </head>
    <body>

        <div class="container">
            
            @yield('content')
        </div>
         <div id= "circles" >
        <div id="stage" style="background: rgba(142, 42, 48, 0.6);">
		<p id="spinner" style="background: rgba(0,1,1,0.5); text-align: center; color: #fff;">¿Qué Quieres Hacer?</p>
		</div>
				<div style="width:120px; float:left; text-align:center;">
                	<img id="imag" class="img-circle" src="https://image.freepik.com/free-icon/man-sitting-in-front-of-a-table-eating-and-drinking-while-having-lunch_318-62566.png" />
                	<span class="img-title">Comer</span>
                </div>
                <div style="width:120px; float:left; text-align:center;">
                	<img id="imag" class="img-circle" src="http://univers-maya.fr/wp-content/uploads/2013/09/boire.jpg" />
                	<span class="img-title">Beber</span>
                </div>
                <div style="width:120px; float:left; text-align:center;">
               		<img id="imag" class="img-circle" src="https://despiertaiglesiaya.files.wordpress.com/2013/02/bailar.jpg" />
                	<span class="img-title">Bailar</span>
                </div>
                <div style="width:120px; float:left; text-align:center;">
                	<img id="imag" class="img-circle" src="http://www.buscorestaurantes.com/files/logo/Cafe-Sito-II-103683.jpg" />
                	<span class="img-title">cafe</span>
                </div>
		        <div style="width:120px; float:left; text-align:center;">
		        	<img id="imag" class="img-circle" src="http://cdn5.dibujos.net/dibujos/pintar/cine.gif" />
		        	<span class="img-title">Cine</span>
		        </div>
                <div style="width:120px; float:left; text-align:center;">
                	<img id="imag" class="img-circle" src="http://www.idibujos.com/wp-content/uploads/2012/04/Leer.jpg" /> 
                	<span class="img-title">Leer</span>
                </div>
                <div style="width:120px; float:left; text-align:center;">
                	<img id="imag" class="img-circle" src="http://blogs.ceibal.edu.uy/formacion/wp-content/uploads/2014/12/turismo.jpg" /> 
                	<span class="img-title">Aventura</span>
                </div>
        </div>
    </body>
</html>