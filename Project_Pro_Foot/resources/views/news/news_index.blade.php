@extends('pagefeature');

    {{--WE will put the content of this view of this news into the Hoome page part
        under the section of the content--}}
    @section('content')

        <div>
            @foreach ($news as $item)
                <div>
                    <h3>{{ $item->type }}</h3>
                    <p>Date: {{ $item->date_of_issuance }}</p>
                    <p>{{ $item->description }}</p>
                </div>
            @endforeach
        </div>

            <!--Here starts the News form -->

        <div>
            <h2>Add News</h2>

                <section class="d-flex justify-content-between flex-wrap pdancing p-5">
                    <form class="newsForm" action="" method="POST">
                        @csrf
            
                        <div class="mb-3">
                            <label for="type">Type:</label>
                            <input type="text" name="type" id="type" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="date_of_issuance">Date of Issuance:</label>
                            <input type="date" name="date_of_issuance" id="date_of_issuance" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" rows="3" required></textarea>
                        </div>
            
                       <!-- <div>
                            <button class="btn  btn-lg" name="submit" type="submit">Submit</button>
                        </div> -->
                    
                        <div class="mb-3">
                            <input type="submit" class="btn btn-lg" name="submit" value="SUBMIT">
                        </div>
            

                    </form>
                </section>
            
        </div>
  
    @endsection