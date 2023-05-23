@extends('pagefeature');

@section('content')
<div class="jobs-list-container">
    <h2>  6 jobs </h2>
   
        <div class="jobs">
            @foreach ($jobs as $job)
            <div class="job">
                <img src="{{asset($job->image)}}" alt="">
                <h3 class="job-title">{{$job->name}}</h3>
                <div class="details">
                    {{$job->description}}
                </div>
                <a href="#" class="details-btn">More Details</a>
                <span class="open-positions">{{$job->openpost}} open positions</span>
            </div>
        @endforeach
    </div>         
</div>

@endsection