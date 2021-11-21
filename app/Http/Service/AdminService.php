<?php


namespace App\Http\Service;


use Illuminate\Support\Facades\DB;

class AdminService
{
    public function isAdmin ($id) {
        $adminTable = DB::table('user_roles')
            ->where('user_id',$id)->exists();
        print_r($adminTable);
    }
}
