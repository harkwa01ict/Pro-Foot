@extends('pagefeature');

    {{--WE will put the content of this view of this news into the Hoome page part
        under the section of the content--}}
    @section('content')

{{-- here we will make our news more beautiful --}}
{{--<a href="/home/news/news_index.blade.php"></a>--}}
        <div>
            
                <section class="newscard" >
                    <div class="card" style="width: 30rem;">
                        <div class="card-body">
                          <h5 class="card-title"><strong>{{ $news->type }}</strong></h5>
                         
                        <p class="card-text">{{$news->description}}</p>

                          <p>Date: {{ $news->date_of_issuance }}</p>

                          <!--<a href="#" class="card-link">Show more</a>-->
                       
                        </div>
                    </div>
                </section>
                
        </div>

        

    @endsection