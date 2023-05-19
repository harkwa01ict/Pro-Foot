@extends('pagefeature');


@section('categories')
<nav class="navbar-expand-lg d-flex justify-content-center ">
    <ul class="navbar-nav fs-5 gap-5">
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 p-5">
        @foreach ($shopcategories as $produit) 
      <div class="col p-5">
        <div class="card shadow-sm p-5">
          <img class="bd-placeholder-img card-img-top" width="100%" height="425" src="{{asset($produit->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="card-body">
            <p class="card-text"><h3>{{$produit->name}}</h3></p>
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" ><a href="{{route('route_toshoparticle', ['id'=>$produit->id])}}">View</a></button>
              </div>
        </div>
        </div>
      </div>
      @endforeach
      {{$shopcategories->links()}}
    </div>
</section>
@endsection