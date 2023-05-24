@extends('pagefeature');

@section('content')
  <div class="container marketing text-white">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Collective Training for all. <span class="text-danger">It’ll blow your mind.</span></h2>
        <p class="lead"> The club organises collective training for all ages for which you can participate.</p>
      </div>
      <div class="col-md-5">
       <img src="{{asset('images\imageactivity\allage.jpg')}}" width="600" height="500" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Outdoor visit of the club. <span class="text-danger">See for yourself.</span></h2>
        <p class="lead"> The club promoted one big trip with the club members this year. The trip consisted on meeting other clubs and promote our core business consisting on showing what the club has realised: Restaurant, Shop....</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{asset('images\imageactivity\visit.jpg')}}" width="600" height="500" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-danger">Checkmate.</span></h2>
        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset('images\imageactivity\training.jpg')}}" width="600" height="500" alt="">
      </div>
    </div>

    <hr class="featurette-divider">


  </div><!-- /.container -->


@endsection