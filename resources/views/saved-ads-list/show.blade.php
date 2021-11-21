@extends('layouts.app')
@section('content')
    <div class="row text-center">
        <h4 class="col-4 offset-4 mt-5 mb-5">{{__('user.saved_messages_page_title')}}</h4>
        </div>
        <div class="col-12 row">
            <div class="col-8 offset-2 row">
                @foreach ($saved_ads as $saved_ad)
                    @include('saved-ads-list.list-item', [
                            'item' => $saved_ad,
                            'route' =>  route('work.show',$saved_ad->id)
                        ])
                @endforeach

            </div>
        </div>
    </div>

@endsection
