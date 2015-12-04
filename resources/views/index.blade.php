@extends('layout.layout')

<link rel="stylesheet" href="assets/css/slider.css" type="text/css" />
<link rel="stylesheet" href="assets/css/spinner.css" type ="text/css"/>
<link rel="stylesheet" href="assets/css/circle.css?v=2" type ="text/css"/>


@section('t', 'Page Title')



@section('content')
<body>
        <div id="captioned-gallery">
	<figure class="slider">
		<figure>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/hobbiton-lake.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/wanaka-drowned-tree.jpg" alt>
			<figcaption>Wanaka, New Zealand</figcaption>
		</figure>
		<figure>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/utah-peak.jpg" alt>
			<figcaption>Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/bryce-canyon-utah.jpg" alt>
			<figcaption>Bryce Canyon, Utah, United States</figcaption>
		</figure>
		<figure>
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/hobbiton-lake.jpg" alt>
			<figcaption>Hobbiton, New Zealand</figcaption>
		</figure>
	</figure>
</div>

     <div id= "circles" >
        <div id="stage" style="background: rgba(142, 42, 48, 0.6);">
		<p id="spinner" style="background: rgba(0,1,1,0.5); text-align: center; color: #fff;">¿Qué Quieres Hacer?</p>
		</div>
            
                <img id="imag" class="img-circle" src="https://image.freepik.com/free-icon/man-sitting-in-front-of-a-table-eating-and-drinking-while-having-lunch_318-62566.png" />
                <img id="imag" class="img-circle" src="http://univers-maya.fr/wp-content/uploads/2013/09/boire.jpg" />
                <img id="imag" class="img-circle" src="https://despiertaiglesiaya.files.wordpress.com/2013/02/bailar.jpg" />
                <img id="imag" class="img-circle" src="http://www.buscorestaurantes.com/files/logo/Cafe-Sito-II-103683.jpg" />
                <img id="imag" class="img-circle" src="http://cdn5.dibujos.net/dibujos/pintar/cine.gif" />
                <img id="imag" class="img-circle" src="http://www.idibujos.com/wp-content/uploads/2012/04/Leer.jpg" /> 
                <img id="imag" class="img-circle" src="http://blogs.ceibal.edu.uy/formacion/wp-content/uploads/2014/12/turismo.jpg" /> 
              
            
           
             <div class="circle-image"></div>
             <div class="circle-image"></div>
             <div class="circle-image"></div>
             <div class="circle-image"></div>
             <div class="circle-image"></div>
        </div>
    </body>
@stop