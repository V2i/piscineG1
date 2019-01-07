@extends('layouts.app2')

@section('content')
<style>
.whitetext {
        color: white;
}
</style>
<div class="container-fluid jumbotron" style="background-image:url('http://vps627012.ovh.net/~piscine/piscine/resources/image/bandeau-montpellier.jpg'); margin-top: -40px;">
    <div class="container text-center text">
        <h1 class="whitetext" style="background-color:hsla(0, 0%, 60%, 0.3)"> La CCI vous souhaite la bienvenue sur sa marketplace de l'Hérault </h1>
    </div>
</div>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-9"> 

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" data-interval="5000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="img-responsive d-block img-fluid" style="margin: 0 auto 0 auto;" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/timb.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="img-responsive d-block img-fluid" style="margin: 0 auto 0 auto;" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/PS4-icon.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="img-responsive d-block img-fluid" style="margin: 0 auto 0 auto;" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/pc.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" id="cc" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span id="cc" class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> <!-- fin carousel -->

        <div style="padding-top: 10px"></div>
        <h3 style="font-family: serif;">Les bons plans :</h3>
        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-3 mb-4">
          	<div class="card h-100">
          		<a href="#"><img class="card-img-top img-thumbnail" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/adidas.jpg" alt=""></a>
          		<div class="card-body">
          			<h4 class="card-title text-center">
          				<a href="{{route('produit',['CodeProduit'=>6])}}";>Sweat adidas</a>
          			</h4>
          		</div>
          	</div>
          </div>

          <div class="col-lg-4 col-md-3 mb-4">
          	<div class="card h-100">
          		<a href="#"><img class="card-img-top img-thumbnail" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/timb.jpg" alt=""></a>
          		<div class="card-body">
          			<h4 class="card-title text-center">
          				<a href="{{route('produit',['CodeProduit'=>5])}}";>Timberlands</a>
          			</h4>
          		</div>
          	</div>
          </div>

          <div class="col-lg-4 col-md-3 mb-4">
          	<div class="card h-100">
          		<a href="#"><img class="card-img-top img-thumbnail" src="http://vps627012.ovh.net/~piscine/piscine/resources/image/nikeair.jpg"></a>
          		<div class="card-body">
          			<h4 class="card-title text-center">
          				<a href="{{route('produit',['CodeProduit'=>4])}}";>Nike Air</a>
          			</h4>
          		</div>
          	</div>
          </div>

        </div> <!-- fin row -->
      </div>
      <!-- /.col-lg-9 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
<div style="padding-bottom: 20px"></div>
@endsection

