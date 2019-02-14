<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use	Illuminate\Support\Facades\DB;

class BasicController extends Controller
{
    public function index()
    {
        
    }

    public function viewData()
    {
 
            $storeIt = DB::table('material') -> get();
            return $storeIt;
    }

    

}
