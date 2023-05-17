@extends('pagefeature');

@section('content')
<section class="p-5">
    <div class="d-flex offset-md-3 mt-5 gap-5">
        <div class="card shadow-sm p-5">
          <img class="bd-placeholder-img card-img-top" width="100%" height="325" src="{{asset($produits->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="card-body">
            <p class="card-text"><h3>{{$produits->name}}</h3></p>
          </div>
        </div>
      <div class="d-flex row p-3 col-md-3">
        <div class="text-white">
          <h1>prix : </h1>
          <h1>{{$produits->amount}}$</h1>
        </div>
        <div class="text-white">
            <p>{{$produits->description}}</p>
            <label for="nombre">Nombre d'article : </label>
            <input type="number" name="nombre">
        </div>
      </div>
      <div class="mt-5 ms-3 p-3 d-flex row justify-content-between">
        <div>
          <button>ajouter au panier</button>
        </div>
        <div>
          <button class="bg-primary">valider la commande</button>
        </div>
      </div>
    </div>
      <div class="d-flex gap-3 mt-5 p-5">
          @foreach ($articleexpo as $produit) 
          <div class="col p-5">
            <div class="card shadow-sm p-5">
              <img class="bd-placeholder-img card-img-top" width="100%" height="325" src="{{asset($produit->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
              <div class="card-body">
                <p class="card-text"><h3>{{$produit->name}}</h3></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary" ><a href="{{route('route_toshoparticle', ['id'=>$produit->id])}}">View</a></button>
                  </div>
              </div>
            </div>
            </div>
          </div>
          @endforeach
        </div>
</section>
@endsection