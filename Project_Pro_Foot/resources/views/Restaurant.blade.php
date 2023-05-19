@extends('pagefeature');

@section('content')
<div class="container">
    <div class= "title">
       <h2>
           Food Ball Menu
       </h2>
       <p class="">
           Welcome to our Pro-Foot Restaurant.
           Enjoy !
       </p>
    </div>
    <div class = "list">
       <li data-filter=".All">All</li>
       <li data-filter=".Featured">Featured</li>
       <li data-filter=".Special">Today's Special</li>
       <li data-filter=".Arrivals">New arrivals</li>  
      </div>


      <div class="content">
        <div class="box All Featured">
           <div class="image">
               <img src="{{asset('imagesresto/fries.jpg')}}" alt="">
            </div>
            <div class="text">
               <h3>French Fries</h3>
               <hr>
               <section>$10</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Special</article>
            </div>
        </div>
        <div class="box All Featured">
           <div class="image">
               <img src="{{asset('imagesresto/burger.jpg')}}" alt="">
            </div>
            <div class="text">
               <h3>Foot Burger</h3>
               <hr>
               <section>$20</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Featured</article>
            </div>
        </div>
        <div class="box All Featured">
           <div class="image">
               <img src="{{asset('imagesresto/pizza.jpg')}}" alt="">
            </div>
            <div class="text">
               <h3>Pizza</h3>
               <hr>
               <section>$25</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Featured</article>
            </div>
        </div>
        <div class="box All Arrivals">
           <div class="image">
               <img src="{{asset('imagesresto/soup.jpg')}}" alt="">
            </div>
            <div class="text">
               <h3>Soup</h3>
               <hr>
               <section>$15</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Arrivals</article>
            </div>
        </div>
        <div class="box All Special">
           <div class="image">
               <img src="{{asset('imagesresto/breakfast.jpg')}}" alt="">
            </div>
            <div class="text">
               <h3>Breakfast</h3>
               <hr>
               <section>$14</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Special</article>
            </div>
        </div>
        <div class="box All Special">
           <div class="image">
               <img src="{{asset('imagesresto/dinner.jpg')}}"alt="">
            </div>
            <div class="text">
               <h3>Dinner</h3>
               <hr>
               <section>$25</section>
               <div class="stars">
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
               </div>
               <article> Category: Special</article>
            </div>
        </div>
      </div>

    </div>
@endsection