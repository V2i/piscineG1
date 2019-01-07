@extends('layouts.app2')

@section('content')
<div class="container" style="padding-bottom: 20px">
	<div class="card mt-4">
		<div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
            <div class="card-body">
              <h2 class="card-title">{{ $produit->NomProduit }}</h2>
              <h4>{{ $produit->PrixProduit }}</h4>
              <p class="card-text">{{ $produit->DescriProduit }}</p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->
    </div>
	</div>
</div>
@endsection