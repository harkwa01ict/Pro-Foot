@extends('pagefeature');

    {{--WE will put the content of this view of this news into the Hoome page part
        under the section of the content--}}
    @section('content')

        <div>
            <h1>You Entered To Admin Page</h1>
            <h2>Add News</h2>
            <div class="newsFormParent">
                <section class="d-flex justify-content-between flex-wrap pdancing p-5">
                    
                    <form class="newsForm" action="" method="POST">
                        @csrf
            
                        <div class="mb-3">
                            <select  class="" >
                                <option selected>Make your Choice</option>
                                <option value="News1">Breaking News</option>
                                <option value="News2">Regular News</option>
                              
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