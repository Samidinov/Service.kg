@extends('layouts.app')
@section('content')
    <div class="col-12 overflow-hidden p-0 h-75">
        <img class="w-auto h-50" src="https://www.triconinfotech.com/wp-content/uploads/2019/03/DevOps-blog-1080x675.png">
    </div>
    @foreach($mastersList as $masterItem)
        <div class="alert alert-light">
            {{$masterItem['name']}}
        </div>
    @endforeach
@endsection
