@extends('layouts.app2')

@section('content')
<div class="container" style="padding-bottom: 20px">
		<div class="row  justify-content-center">
          <div class="card md-4">     
            
            <img class="img-fluid img-responsive card-img-top img-thumbnail mx-auto d-block" src="{{ $produit->LienPhotoProduit }}" alt="">
            
            <div class="card-body">
              <u><h2 class="card-title">{{ $produit->NomProduit }}</h2></u>
              <h4>Prix : {{ $produit->PrixProduit }}€</h4>
              <i><p class="card-text" style="padding-bottom: 10px">Description : {{ $produit->DescriProduit }}</p></i>
              <a href="{{ route('basket2',$produit->CodeProduit) }}"><button type="button" class="btn btn-info" onclick="ajoutPanier()">ajouter au panier</button></a>
              <script>
                    function ajoutPanier() {
                      alert("Produit ajouté au panier !");}
              </script>
            </div>
          </div>
          <!-- /.card -->
    </div>
</div>
<div style="padding-bottom: 20px"></div>
@endsection