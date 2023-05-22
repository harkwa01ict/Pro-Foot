@php
    $tva = 0.14;
    $ttc = 1 + $tva;
@endphp

@extends('pagefeature');

@section('content')
   <section class="signup">
    @foreach ($cart as $item)
        
    @endforeach
    <article class="d-flex justify-content-between border mt-3 p-3">
        <p>articles  </p>
        <p><span>nom : {{$item->name}}</span><br>
            <span>taille : {{$item->attributes['size']}}</span><br>
            <span>couleur : {{$item->attributes['color']}}</span><br>
        </p>
    </article>
    <article  class="d-flex justify-content-between border mt-3 p-3">
        <p>Nombres d'articles</p>
        <p>{{$item->quantity}}</p>
    </article>
    <article class="d-flex justify-content-between border mt-3 p-3">
        <p>prix unitaire</p>
        <p>{{number_format($item->price,2)}} $</p>
    </article>
    <article class="mt-3 border p-3">
        <div class="d-flex justify-content-between">
            <p>prix hors Taxe</p>
            <p>{{number_format($item->price*$item->quantity,2)}} $</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>TVA(14%)</p>
            <p>{{number_format($item->price*$item->quantity*$tva,2)}} $</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>prix TTC</p>
            <p>{{number_format($item->price*$item->quantity*$ttc,2)}} $</p>
        </div>
    </article>
    <article class="mt-4 border text-center bg-light">
    <span> <a href="{{route('route_homepage')}}">payer</a> </span>
    </article>
   </section>
@endsection