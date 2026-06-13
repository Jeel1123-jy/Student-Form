<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\details;

class DetailController extends Controller
{
    public function store(Request $request)
    {
        $detail = new details();

        $detail->name = $request->name;
        $detail->email = $request->email;
        $detail->phone = $request->phone;
        $detail->address = $request->address;

       
        

        $detail->save();

        return back()->with('success', 'Successfully send');
    }
}