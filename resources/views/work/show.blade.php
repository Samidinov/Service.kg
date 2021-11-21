@extends('layouts.app')
@section('content')
    <div class="row pt-4 pb-4" style="background-color: #f0e0ff;">
        <div class="col-4 text-center">
            <p class="col-12 text-muted font-weight-bolder">{{ __('work.customer') }}</p>
            <img class="rounded-circle"
                 src="https://anglehit.com/wp-content/uploads/2016/02/i_n_c_o_g_n_i_t_o__xlicon__by_blackoptics8-d85c0em.jpg"
                 alt="user" width="200" height="200">
            <div class="col-12 font-weight-bold">
                {{$user->name}}  {{$user->surname}}
            </div>
            <div class="col-12">{{ __('work.phone') }}{{ $user->phone_number }}</div>
        </div>
        <div class="col-8 row ">
            <div class="col-12 row offset-1">
                <h4 class="col-10 font-weight-bold d-inline "> {{ $work->title}} </h4>
                <i class="add-to-saved-list text-info col-2 fa fa-bookmark-o fa-2x cursor-pointer w-25"></i>
                <script type="text/javascript">
                    document.addEventListener("DOMContentLoaded",function() {

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        const work_id = <?php echo json_encode($work->id) ?>;
                        const user_id = <?php echo json_encode(\Illuminate\Support\Facades\Auth::id()) ?>;
                        const toSave = document.querySelector(".add-to-saved-list");


                        const btnSuggest = document.querySelector('.btn-suggest');
                        let master_id = <?php echo json_encode(\Illuminate\Support\Facades\Auth::id())?>;
                        let client_id = <?php echo json_encode($user->id)?>;

                        $.ajax({
                                type:'POST',
                                url:"{{ route('isMyAd') }}",
                                data:{
                                    user_id : user_id,
                                    ad_id : work_id,
                                },
                                success : function(data) {
                                    if (data.result == true) {
                                        toSave.classList.remove('fa-bookmark-o');
                                        toSave.classList.add('fa-bookmark');
                                    }
                                },
                                error : function(req, err) {
                                    alert: ("Request:"+ JSON.stringify(req));
                                }});
                        $.ajax({
                            type:'POST',
                            url:"{{ route('work.isMasterSendSuggestToContract') }}",
                            data:{
                                master_id : master_id,
                                client_id : client_id,
                                ad_id : work_id,
                            },
                            success : function(data) {
                                if (data.result === true) {
                                    btnSuggest.classList.remove('btn-success');
                                    btnSuggest.classList.add('btn-danger');
                                    btnSuggest.innerHTML =
                                        "<?php echo __('work.btn_suggested_contract_title')?>
                                            <i class='ml-2 fa fa-hand-paper-o'></i>"
                                }
                                else if (data.result === false) {
                                    // btnSuggest.classList.remove('btn-danger');
                                    // btnSuggest.classList.add('btn-success');
                                }
                            },
                            error : function(req, err) {
                                alert: ("Request:"+ JSON.stringify(req));
                                console.log('error in ajax');
                            }});

                        const changeBookmarkStyle = (isMy = false) => {

                        let work_id = <?php echo json_encode($work->id) ?>;
                        let user_id = <?php echo json_encode(\Illuminate\Support\Facades\Auth::id()) ?>;
                        if (isMy) {
                            toSave.classList.remove('fa-bookmark');
                            toSave.classList.add('fa-bookmark-o');
                            $.ajax({
                                type:'POST',
                                url:"{{ route('userAds') }}",
                                data:{
                                    user_id : user_id,
                                    ad_id : work_id,
                                    action: 'remove'
                                },
                                success : function (data) {
                                    //success part
                                }
                            });

                        } else {

                            toSave.classList.remove('fa-bookmark-o');
                            toSave.classList.add('fa-bookmark');

                            $.ajax({
                                type:'POST',
                                url:"{{ route('userAds') }}",
                                data:{
                                    user_id : user_id,
                                    ad_id : work_id,
                                    action: 'add'
                                },
                                success : function (data) {
                                    //success part
                                }
                            });
                        }
                    }
                        toSave.addEventListener('click', (e) => {
                        e.preventDefault();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        if (toSave.classList.contains('fa-bookmark')) {
                            changeBookmarkStyle(true);
                        } else {
                            changeBookmarkStyle(false);
                        }
                    })

                        const changeSuggestBtnStyle = (suggestSended = false) => {

                            let master_id = <?php echo json_encode(\Illuminate\Support\Facades\Auth::id())?>;
                            let client_id = <?php echo json_encode($user->id)?>;
                            let work_id = <?php echo json_encode($work->id)?>;

                            if (suggestSended) {
                                btnSuggest.classList.remove('btn-danger');
                                btnSuggest.classList.add('btn-success');
                                btnSuggest.innerHTML =
                                    "<?php echo __('work.btn_suggest_contract_title')?>
                                        <i class='ml-2 fa fa-hand-o-right'></i>"


                                $.ajax({
                                    type:'POST',
                                    url:"{{ route('work.masterSuggestContractToClient') }}",
                                    data:{
                                        master_id : master_id,
                                        client_id : client_id,
                                        ad_id : work_id,
                                        action: 'remove',
                                    },
                                    success : function (data) {
                                        console.log('remove part');
                                    }
                                });

                            } else {

                                btnSuggest.classList.remove('btn-success');
                                btnSuggest.classList.add('btn-danger');
                                btnSuggest.innerHTML =
                                    "<?php echo __('work.btn_suggested_contract_title')?>
                                        <i class='ml-2 fa fa-hand-paper-o'></i>"
                                console.log('btn-danger');

                                $.ajax({
                                    type:'POST',
                                    url:"{{ route('work.masterSuggestContractToClient') }}",
                                    data:{
                                        master_id : master_id,
                                        client_id : client_id,
                                        ad_id : work_id,
                                        action: 'add',
                                    },
                                    success : function (data) {
                                        console.log('add part');
                                    }
                                });
                            }
                        }
                        btnSuggest.addEventListener('click', function (e) {
                            e.preventDefault();
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            if (btnSuggest.classList.contains('btn-danger')) {
                                changeSuggestBtnStyle(true);
                            } else {
                                changeSuggestBtnStyle(false);
                            }
                        })

                    })
                </script>
            </div>
            <h5 class="col-md-3"> {{__('work.description')}} </h5>
            <h5 class="col-9"> {{ $work->description }} </h5>
            <div class="col-4 text-danger"><i class="fa fa-dollar"></i> {{ $work->price }} </div>
            <div class="col-4"><i class="fa fa-phone"> </i> {{ $work->contacts }}</div>
            <div class="col-4"><i class="text-success fa fa-map-pin mr-2"></i> {{ $work->address }}</div>
            <div class="col-12 row">
                @if($user->id !== \Illuminate\Support\Facades\Auth::id())
                <div class="col-4 offset-8">
                    <a class="btn btn-success col-12 btn-suggest">
                        {{ __('work.btn_suggest_contract_title') }}
                        <i class="ml-2 fa fa-hand-o-right"></i>
                    </a>
                </div>
                    @endif
            </div>
        </div>
    </div>
    @if (sizeof($works)>0)
        <div class="row mt-4 mb-4">
            <div class="col-12  row ">
                <h5 class=" col-9 offset-3 font-weight-bold mb-4">{{ __('work.title_for_similar_ads') }}</h5>
                <div class="col-3 bg-info text-white h-100">
                    Для рекламы партнеров!
                </div>
                <div class="col-9 row">
                    @foreach($works as $work)
                        @include('inc.work-list', [
                                                     'work_price' => $work->price,
                                                     'route'=> route('work.show',$work),
                                                     'work_title'=> $work->title,
                                                     'work_description' => $work->description,
                                                     'work_created_at' => $work->created_at,
                                                     'work_exp_date' => isset($work->exp_date)?__('work.until_date').$work->exp_date :'' ,
                                                     ])
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection

