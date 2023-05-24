@extends('pagefeature')

@section('content')

     
        <x-card class="p-10 max-w-lg mx-auto mt-24">
            <!--<header class="text-center"> 
                @foreach ($news as $item)
                    {{ $item->date_of_issuance }}
                @endforeach
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Edit News
                </h2>
                <p class="mb-4">Edit: {{$item->type}}</p>
            </header>-->
            
            <form method="POST" action="{{route('news.admin.destroy',$item->id)}}">
                @csrf
                @method('DELETE')
                    
                <div class="mb-6">
                    <input type="date" name="date_of_issuance"/>
                    <input type="submit" class="border border-gray-200 rounded p-2 w-full" name="delete" value="DELETE"/>
                </div>
            </form>
        </x-card>
  

@endsection