@extends('layouts.app')
@section('content')
   <div class="col-12 page_header">
       <div class="col-10 offset-2 mr-0 align-content-center overflow-hidden p-0 h-75">
           <img class=" w-auto h-50 rounded" src="https://upf-web.com/wp-content/uploads/2019/07/Social-Networking.png">
       </div>
   </div>
   <div class="container">
       <div class="container col-4 offset-4 mb-5 mt-5">
            <h1 class="p-1 font-weight-bolder">{{ __('footer.masters') }}
            </h1>
       </div>

       <table class="table">
           <thead>
           <tr>
               <th scope="col">#</th>
               <th scope="col">{{__('user.name')}}</th>
               <th scope="col">{{__('user.phone_number_1')}}</th>
               <th scope="col">{{__('user.experience')}}</th>
           </tr>
           </thead>
           <tbody>
               @foreach($masters as $master)
                   <tr>
                       <th scope="row" class="text-danger font-weight-bolder">***</th>
                       <td>{{$master['name']}}</td>
                       <td>{{$master['phone_number']}}</td>
                       <td>{{ $master['experience'] }}</td>
                   </tr>
               @endforeach

           </tbody>
       </table>
   </div>
@endsection
