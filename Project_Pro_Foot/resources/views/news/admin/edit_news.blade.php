@extends('pagefeature');



@section('content')

<div class="signup" id="">
    <section class="d-flex justify-content-between flex-wrap pdancing p-5">
       
        <form class="newsForm" action="{{route('route_store')}}" method="POST">
            @csrf
            <h2>Edit News</h2>
            <div class="mb-3">
                <select  class=""  name="type">
                    <option selected>Make your Choice</option>
                    <option value="Breaking News">Breaking News</option>
                    <option value="Regular News">Regular News</option>
                  
                  </select>
                   
                                            
               <!-- <label for="type">Type:</label>
                <input type="text" name="type" id="type" required>-->
            </div>

            <div  class="mb-3">
                <label for="date_of_issuance">Date of Issuance:</label>
                <input value="{{$edit_news->date_of_issuance}}" type="date" name="date_of_issuance" id="date_of_issuance" required>
            </div>

            <div class="mb-3">
                <label for="description">Description:</label>
                <textarea   name="description" id="description" rows="3" required>{{$edit_news->description}} </textarea>
            
            
            </div>

           <!-- <div>
                <button class="btn  btn-lg" name="submit" type="submit">Submit</button>
            </div> -->
        
            <div class="mb-3">
                <input type="submit" class="btn btn-lg" name="submit" value="UPDATE">
            </div>


        </form>
    </section>
</div>



@endsection