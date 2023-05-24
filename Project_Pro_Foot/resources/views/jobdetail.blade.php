@extends('pagefeature');

@section('content')
<div class="jobs-list-container">
            <div class="job">
                <img src="{{asset($job->image)}}" alt="" width="300">
                <h3 class="job-title">{{$job->name}}</h3>
                <div class="details">
                    {{$job->content}}
                </div>
                <a href="{{route('route_login')}}" class="details-btn">apply now</a>
                <span class="open-positions">{{$job->openpost}} open positions</span>
            </div>
</div>

@endsection