@extends('pagefeature');

    {{--WE will put the content of this view of this news into the Hoome page part
        under the section of the content--}}
    @section('content')

{{-- here we will make our news more beautiful --}}
<a href="/home/news/news_index.blade.php"></a>
        <div>
            @foreach ($news as $item)
                <section class="newscard" >
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $item->type }}</strong></h5>
                         
                         <p class="card-text">{{Str::limit($item->description,'17')  }}</p>                          

                          <p>Date: {{ $item->date_of_issuance }}</p>

                          <a href="{{route('route_store3', ['id'=>$item->id])}}" class="card-link">Show more</a>
                       
                        </div>
                    </div>
                </section>
                
            @endforeach
        </div>

        

    @endsection