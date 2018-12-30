@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-9"> 

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> <!-- fin carousel -->

          <h1> Nouveaux produits </h1>
          <div class="row justify-content-center">

          	<div class="col-lg-4 col-md-3 mb-4">
          		<div class="card h-100">
          			<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          			<div class="card-body">
          				<h4 class="card-title">
          					<a href="#">Produit 1</a>
          				</h4>
          				<h5> prix €</h5>
          				<p class="card-text">description</p>
          			</div>
          		</div>
          	</div>

          	<div class="col-lg-4 col-md-3 mb-4">
          		<div class="card h-100">
          			<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
          			<div class="card-body">
          				<h4 class="card-title">
          					<a href="#">Produit 2</a>
          				</h4>
          				<h5>prix €</h5>
          				<p class="card-text">description</p>
          			</div>
          		</div>
          	</div>

          	<div class="col-lg-4 col-md-3 mb-4">
          		<div class="card h-100">
          			<a href="#"><img class="card-img-top" src="http://placehold.it/700x400"></a>
          			<div class="card-body">
          				<h4 class="card-title">
          					<a href="#">Produit 3</a>
          				</h4>
          				<h5>prix €</h5>
          				<p class="card-text">description</p>
          			</div>
          		</div>
          	</div>

          </div> <!-- fin row -->
      	</div>
        <!-- /.col-lg-10 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <div style="padding-bottom: 20px"></div>
@endsection

