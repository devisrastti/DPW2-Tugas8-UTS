<?php

namespace App\Http\Controllers;

use App\Models\Komen;

class KomenController extends Controller
{
    function index()
    {
        $data['list_komen'] = komen::all();
        return view('admin.komen.index', $data);
    }
}
