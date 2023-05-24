
@extends('pagefeature');

@section('content')
<section class="signup">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label><br>
        <input type="text" name="name" id="name">
        @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="country">Country</label>
            <select name="country" id="country">
                @foreach($countries as $country)
                    <option value="{{ $country['name']['common'] }}">{{ $country['name']['common'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 mt-3">
            <input type="submit" class="btn btn-lg" name="submit" value="ENTER">
        </div>
    </form>
</section>
@endsection

