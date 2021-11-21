@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="#">Администрация</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav d-flex justify-content-around">
                <li class="nav-item active p-2">
                    <a class="nav-link" href="#">Admins<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ml-auto p-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Masters
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Category 1</a>
                        <a class="dropdown-item" href="#">Category 2</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
                <li class="nav-item dropdown ml-auto p-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ads
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Category 1</a>
                        <a class="dropdown-item" href="#">Category 2</a>
                        <a class="dropdown-item" href="#">Category 3</a>
                    </div>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href={{route('admin.usersPage')}}>Колдонуучулар</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href={{route('category.index')}}>Категория</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href={{route('admin.review')}}>Сунуштар</a>
                </li>
                <li class="nav-item dropdown ml-auto p-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                        <a class="dropdown-item" href="#">Action 3</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    @yield('admin-content')

@endsection
