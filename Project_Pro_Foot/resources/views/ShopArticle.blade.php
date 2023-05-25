@extends('pagefeature');


@section('categories')
<nav class="navbar-expand-lg d-flex justify-content-center ">
    <ul class="navbar-nav fs-5 gap-5 text-white">
        @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link" href="{{route('route_toshopCategory', ['id'=>$category->id])}}">{{$category->category}}</a>
          </li>
        @endforeach
      </ul>
</nav>
@endsection

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
          <h1>Price : </h1>
          <h1>{{$produits->amount}}$</h1>
        </div>
        <div class="text-white">
            <p>{{$produits->description}}</p>
        </div>
      </div>
      <div class="mt-5 ms-3 p-3 d-flex row justify-content-between">
        <div class="p-3">
            <form action="{{route('route_toshopaddpanier', ['id'=>$produits->id])}}" method="POST" id="addpanier">
                @csrf
                <label for="nombre" class="text-white">Number of Article: </label>
                <input type="number" name="nombre" min="1">
                <br><br>
                <label for="taille" class="text-white">Size : </label>
                <select class="form-select" aria-label="Default select example" name="taille">
                    <option value="xx-l">xx-l</option>
                    <option value="xl">xl</option>
                    <option value="l">l</option>
                    <option value="m">m</option>
                    <option value="s">s</option>
                    <option value="xs">xs</option>
                    <option value="xx-s">xx-s</option>
                </select>
                <br>
                <label for="couleur" class="text-white">Color : </label>
                <select class="form-select" aria-label="Default select example" name="couleur">
                    <option value="blue">Blue</option>
                    <option value="red">red</option>
                    <option value="black">Black</option>
                    <option value="white">white</option>
                    <option value="green">green</option>
                    <option value="yellow">yellow</option>
                    <option value="orange">orange</option>
                    <option value="pink">pink</option>
                </select>
            </form>
        </div>
          <button class="" type="submit" form="addpanier"><i class="fa-solid fa-cart-shopping"></i> <br>Add To Cart</button>
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
