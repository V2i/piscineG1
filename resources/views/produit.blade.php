@extends('layouts.app2')

@section('content')
<div class="container" style="padding-bottom: 20px">
	
		<div class="col-lg-9">

          <div class="card mt-4">
            <img class="card-img-top img-fluid" src="{{ $produit->LienPhotoProduit }}" style="width: 50%;" alt="">
            <div class="card-body">
              <u><h2 class="card-title">{{ $produit->NomProduit }}</h2></u>
              <h4>prix : {{ $produit->PrixProduit }}€</h4>
              <i><p class="card-text" style="padding-bottom: 10px">Description : {{ $produit->DescriProduit }}</p></i>
              <button type="button" class="btn btn-info">ajouter au panier</button>
            </div>
          </div>
          <!-- /.card -->
    </div>

</div>
<div style="padding-bottom: 20px"></div>
@endsection