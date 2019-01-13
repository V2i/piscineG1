@extends('layouts.app')

@section('content')
<link href="{{ asset('css/stylepanier.css') }}" rel="stylesheet">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Mon panier</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produit</th>
                            <th scope="col">Disponibilité</th>
                            <th scope="col" class="text-center">Quantité</th>
                            <th scope="col" class="text-right">Prix</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach(Auth::user()->basket->products as $product)
                            <td><img src="{{ $product->LienPhotoProduit }}" style="width: 50px; height: 50px;" /> </td>
                            <td>{{ $product->NomProduit }}</td>
                            <td>En stock</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">{{ $product->PrixProduit }}€</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                            <tr>
                            @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{route('welcome')}}";><button type="button" class="btn btn-light">Continuer mes achats</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button style=class="btn btn-lg btn-block btn-success text-uppercase" onclick="validation()">Valider la commande</button>
                    <script>
                    function validation() {
                      alert("Commande validée !");}
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-bottom: 20px"></div>
@endsection
