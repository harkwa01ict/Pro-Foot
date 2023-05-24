@extends('pagefeature');

@section('content')
   <section class="bg-warning-subtle mx-auto p-2 align-self-center" style="width: 300px;">
        <div class="text-danger p-1">
            <p>Thank you for your interresting about this activity.</p>
        </div>
            <button class="btn btn-secondary"><a class="nav-link" href="{{route('route_activities')}}">Back to Activities</a></button>
   </section>
@endsection