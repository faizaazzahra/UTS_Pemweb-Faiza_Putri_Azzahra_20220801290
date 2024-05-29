<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Footer;

class Frontend extends Controller
{
    //
    public function home(){
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        $modelabout = New About;
        $dataabout = $modelabout->get();

        return view ('frontend.index', compact('datafooter', 'dataabout'));
    }

    public function about(){
        $modelfooter = New Profile;
        $data = $modelfooter->get();
        return view ('frontend.about', compact('datafooter', 'dataabout'));
    }

    public function service(){
        $modelfooter = New Profile;
        $data = $modelfooter->get();

        $modelproduct = New Product;
        $data = $modelproduct->get();

        $modelservice = New Gallery;
        $data = $modelservice->get();
        return view ('frontend.service', compact('datafooter', 'dataservice', 'dataproduct'));
    }
}
