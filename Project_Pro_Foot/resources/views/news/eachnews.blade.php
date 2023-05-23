@extends('pagefeature');

@section('content')

{{-- here we will make our news more beautiful --}}

        <div>
            @foreach ($news as $item)
                <section class="newscard" >
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $item->type }}</strong></h5>
                         
                          <p class="card-text">{{ $item->description }}</p>
                          <p>Date: {{ $item->date_of_issuance }}</p>

                          
                       
                        </div>
                    </div>
                </section>
                
            @endforeach
        </div>

        

    @endsection