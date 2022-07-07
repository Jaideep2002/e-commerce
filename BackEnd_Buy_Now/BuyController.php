<?php

namespace App\Http\Controllers;

use App\Mens;
use App\Womens;
use App\Sneakers;
use App\Electronics;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    function showmens($ID)
    {
        $petani = Mens::select("*")
        ->where("page_path", "=", $ID)
        ->get();
        return view('front.frontpayment', ['petani' => $petani]);
    }

    function showelectronics($ID)
    {
        $petani = Electronics::select("*")
        ->where("page_path", "=", $ID)
        ->get();
        return view('front.frontpayment', ['petani' => $petani]);
    }

    function showsneakers($ID)
    {
        $petani = Sneakers::select("*")
        ->where("page_path", "=", $ID)
        ->get();
        return view('front.frontpayment', ['petani' => $petani]);
    }

    function showwomens($ID)
    {
        $petani = Womens::select("*")
        ->where("page_path", "=", $ID)
        ->get();
        return view('front.frontpayment', ['petani' => $petani]);
    }



}

    // function m2()
    // {
    //     $petani = Mens::select("*")
    //     ->where("page_path", "=", "/home/payment/m2")
    //     ->get();
    //     return view('front.frontpayment', ['petani' => $petani]);
    // }

    // function m3()
    // {
    //     $petani = Mens::select("*")
    //     ->where("page_path", "=", "/home/payment/m3")
    //     ->get();
    //     return view('front.frontpayment', ['petani' => $petani]);
    // }

    // function m4()
    // {
    //     $petani = Mens::select("*")
    //     ->where("page_path", "=", "/home/payment/m4")
    //     ->get();
    //     return view('front.frontpayment', ['petani' => $petani]);
    // }

