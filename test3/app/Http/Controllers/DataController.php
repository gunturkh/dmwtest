<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataController extends Controller {
    public function index() {
        $users = DB::select('select * from MOCK_DATA');
        return view('data', ['users'=>$users]);
    }
}
