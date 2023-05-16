@extends('pagefeature');

@section('content')
<section class="signup">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="{{old('firstname')}}">
            @error('firstname')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="{{old('lastname')}}">
            @error('lastname')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="{{old('email')}}">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmed</label>
            <input type="password" class="form-control" name="password_confirmation">
            @error('password_confirmation')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-lg" name="submit" value="REGISTER">
        </div>
    </form>
</section>
@endsection