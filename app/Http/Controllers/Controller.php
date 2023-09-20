<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    private $vatRate = 0.12;

    public function getGrossPrice(Request $request){
        $netPrice = $request->input("net_price");
        $vatAmount = $this->getVatAmount($netPrice);
        return view("gross-price")->with("grossPrice", $netPrice + $vatAmount)->with("vatAmount", $vatAmount)->with("netPrice", $netPrice);
    }

    private function getVatAmount($netPrice){
        return $netPrice * $this->vatRate;
    }
}
