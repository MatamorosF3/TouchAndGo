@extends('layout.layout')

@section('t', 'Page Title')

@section('content')







    <h1>Top 10 </h1>
<div id="owl-demo" class="owl-carousel">
    
     <div> <a href="details"> <img src="https://images.unsplash.com/45/aXpQLs4AQ5e1EtmeYkz3_20140524_124026.jpg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=e5f1c26cff07b0ae690e521c2ac2afa4"></img> </a></div>

     <div><a href="details"><img src="https://images.unsplash.com/uploads/1412198485051133af17f/5049dacb?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=c2904a92552e96048553a7fc23cc555d"></img></a></div>

     <div><a href="details"><img src="https://images.unsplash.com/photo-1421622548261-c45bfe178854?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=44c4af81b220a2c86aecbe96daf40064"></img></a></div>

     <div><a href="details"><img src="https://images.unsplash.com/reserve/oHPXcFZQ9SyeGD5F7T1g_ramenya.jpg?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=41918b98e76dda6f9a9e6c54d4a564b8"></img></a></div>

    <div><a href="details"><img src="https://images.unsplash.com/17/unsplash_527bf4b4ae00d_1.JPG?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=e7a2744d74d810057947f690d27e1c44"></img></a></div>
  
    <div><a href="details"><img src="https://images.unsplash.com/photo-1426259759666-68da5c54402d?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=1dc395c4829fa10ec4ad4f77627d83c7"></img></a></div>

     <div><a href="details"><img src="https://images.unsplash.com/photo-1417353783325-14cb8f9ba1dd?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=aeb8522c0ee11fb1c1ee526511418d18"></img></a></div>

     <div><a href="details"><img src="https://images.unsplash.com/photo-1432752641289-a25fc853fceb?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=6893cc1e5e5c178660d798eaba9af94a"></img></a></div>

     <div><a href="details"><img src="https://images.unsplash.com/photo-1416453072034-c8dbfa2856b5?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=ee750f3ac1d1dced90c374d9e943a925"></img></a></div>

    <div><a href="details"><img src="https://images.unsplash.com/photo-1428515613728-6b4607e44363?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=8a5b923d3abe1cb37a0ecacb878e8cce"></img></a></div>

</div>

<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
    var carousel = $(".owl-carousel");
  carousel.owlCarousel({
      loop:true,
    navigation: true,
    autoPlay: true,
    autoplaySpeed: 3000,
    nav: true,
    
    
  });

  
});
    
</script>

@stop