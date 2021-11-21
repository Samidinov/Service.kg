@extends('admin.admin-layout')
@section('admin-content')
    <div class=" col-10 offset-1">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">{{__('user.name')}}</th>
                <th scope="col">{{__('user.surname_2')}}</th>
                <th scope="col">{{__('user.email_2')}}</th>
                <th scope="col">{{__('user.admin_page_role')}}</th>
                <th scope="col">
                    <i class="fa fa-cogs text-center"></i>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="text-danger">#</td>
                    <td>{{$user->name}}</td>
                    <td class="text-muted">{{$user->surname}}</td>
                    <td class="text-muted">{{$user->email}}</td>
                    <td class="text-muted">user</td>
                    <td>
                        <a href="{{ route('user.edit',$user->id) }}"
                           title="{{ __('user.admin_page_btn_icon_edit') }}"
                           class="fa fa-pencil text-info d-inline-block"></a>

                        <button type="button" class="btn text-danger ml-2 fa fa-trash" data-toggle="modal"
                                title="{{ __('form.btn_icon_destroy_hover',['attribute' => $user->name]) }}"
                                data-target="#exampleModalCenter{{$user->id}}">
                        </button>
                        @include('inc.modal-center', [
                                'modal_title' => __('user.admin_modal_title'),
                                'modal_description' => __('user.admin_modal_description',['user_name' => $user->name]),
                                'modal_btn_agree' => __('form.modal_btn_agree'),
                                'modal_btn_disagree' => __('form.modal_btn_disagree'),
                                'modal_category_question' => __('form.modal_category_question'),
                                'route' => route('user.destroy', $user->id),
                                'id' => $user->id,
                            ])
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
