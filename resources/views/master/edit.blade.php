@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 mb-1 text-center">
            <h4 class="font-weight-bold">
                {{ __('form.master_edit_title') }}
            </h4>
        </div>
        @include('master.master-form',[
                                'route'=> route('master.update', Auth::user()->id),
                                'method' =>'PUT',
                                ])
    </div>
@endsection
