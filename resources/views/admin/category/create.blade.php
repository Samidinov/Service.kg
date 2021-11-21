@extends('admin.admin-layout')
@section('admin-content')
    <div class="row">
        <form action="{{route('category.store')}}" method="post" class="col-8 offset-2">
            @include('admin.category.form-category',[
                'title'=> __('admin.category.title'),
                'title_value' => isset($category->title)?$category->title:old('title'),
                'title_description' => __('admin.category.input_category_description'),
                'slug' => __('admin.category.slug'),
                'slug_value' =>isset($category->slug)?$category->slug:old('title'),
                'slug_description' => __('admin.category.input_slug_description'),
                'parent_id' =>isset($category->parent_id)?$category->parent_id:0,
            ])
            <button type="submit" class="btn btn-success">
                {{ __('form.btn_add') }}
            </button>
        </form>
    </div>
@endsection
