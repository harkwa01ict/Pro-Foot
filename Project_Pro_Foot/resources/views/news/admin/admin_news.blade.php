@extends('pagefeature');

    {{--WE will put the content of this view of this news into the Hoome page part
        under the section of the content--}}
    @section('content')

        <div>

            
            <h1 class="titleAdmin">You Entered To Admin Page</h1>
                                   



             @foreach ($news as $item)
             <section class="newscard" >
                 <div class="card" style="width: 30rem;">
                     <div class="card-body">
                      
                     <h5 class="card-title"><strong>{{ $item->type }}</strong></h5>
                      
                       <p class="card-text">{{Str::limit($item->description,'17')  }}
                  
                       <p>Date: {{ $item->date_of_issuance }}</p>

                       
                             <a href="{{route('route_store4', ['id'=>$item->id])}}" class="btn btn-primary">Edit</a>
                           <!-- <a href="#" class="btn btn-primary">Update</a>-->

                            <a href="{{route('route_store5', ['id'=>$item->id])}}" class="btn btn-primary">Delete</a>                          
                     </div>
                 </div>
              </section>
              
           @endforeach

            <div class="newsFormParent" id="adminform">
                <section class="d-flex justify-content-between flex-wrap pdancing p-5">
                   
                    <form class="newsForm" action="" method="POST">
                        @csrf
                        <h2>Add News</h2>
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
                            <input value="{{old('date_of_issuance')}}" type="date" name="date_of_issuance" id="date_of_issuance" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="description">Description:</label>
                            <textarea  name="description" id="description" rows="3" required> {{old('description')}}</textarea>
                        
                        
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
           
                
            
        </div>
  
    @endsection