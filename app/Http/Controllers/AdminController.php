<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () {
        return view('admin.index');
    }
    public function isAdmin ($id) {

    }
    public function review() {
        return view('admin.reviews.review');
    }

}
