@extends('pagefeature');

@section('content')
<section class="signup">
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-lg" name="submit" value="LOGIN">
        </div>
    </form>
</section>
@endsection