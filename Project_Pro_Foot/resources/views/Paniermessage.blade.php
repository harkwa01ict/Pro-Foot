@extends('pagefeature');

@section('content')
   <section class="bg-warning-subtle mx-auto p-2 align-self-center" style="width: 300px;">
        <div class="text-danger p-1">
            <p>Merci pour votre Achat.</p>
            <p>Thank your for your buying.</p>
        </div>
            <button class="btn btn-secondary"><a class="nav-link" href="{{route('route_toshop')}}">Back to shop</a></button>
   </section>
@endsection