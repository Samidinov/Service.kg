@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 mb-3 mt-4 text-center">
            <h4 class="font-weight-bold">
                {{ __('master.contracts_page_title') }}
            </h4>
        </div>
        <div class="container">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Work</th>
                        <th scope="col">Client name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contracts as $contract)
                        <tr>
                            <th scope="row">status</th>
                            <td>{{$contract->title}}</td>
                            <td>{{$contract->name}}</td>
                            <td>{{$contract->phone_number}}</td>
                            <td>{{$contract->price}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
