<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;
use Illuminate\Support\Collection;

class DisplayReportController extends Controller
{
    public function index()
    {
        //$posts = DB::select('select * from post');
        $countA = 0;
        $countB = 0;
        $countTotalPriceA = 0.00;
        $countTotalPriceB = 0.00;
        //$i = 1;

        $readyCountA = 0;
        $readyCountB = 0;

        $onHoldCountA = 0;
        $onHoldCountB = 0;

        $delivCountA = 0;
        $delivCountB = 0;

        $packCountA = 0;
        $packCountB = 0;

        $sentCountA = 0;
        $sentCountB = 0;

        $dataProduct = DB::table('product_data')->get('barcode')->count();
        
        //Function To Know The Sum of Each Type and Count Total Price
        for($i=1; $i <= $dataProduct; $i++){

            $value = DB::table('product_data')->where('id','=',$i)->pluck('barcode');
            
            $parse = $value->implode('');

            //$priceValue = DB::table('product_data')->where('id','=',$i)->where('barcode','=','1111')->pluck('price');

            if($parse == '1111'){
                $countA ++;

                $barcodeValueA =  (DB::table('product_data')->where('id','=',$i)->pluck('barcode')) ->implode(''); 

                $priceValue = DB::table('product_data')->where('id','=',$i)->pluck('price');
                $convertPrice = $priceValue->implode('');
                $floatPrice = floatval($convertPrice);

                $countTotalPriceA += $floatPrice;

                $statusReport = DB::table('product_data')->where('id','=',$i)->pluck('status');
                $convertStatus = $statusReport->implode('');

                if($convertStatus == 'READY'){
                    $readyCountA ++;
                }
                else if($convertStatus == 'ONHOLD'){
                    $onHoldCountA++;
                }
                else if($convertStatus == 'DELIVERED'){
                    $delivCountA ++;
                }
                else if ($convertStatus == 'PACKING') {
                    $packCountA ++;
                }
                else if ($convertStatus == 'SENT'){
                    $sentCountA ++;
                }


            }
            else if($parse == '1122'){
                $countB ++;

                $barcodeValueB = (DB::table('product_data')->where('id','=',$i)->pluck('barcode')) ->implode('');

                $priceValue = DB::table('product_data')->where('id','=',$i)->pluck('price');
                $convertPrice = $priceValue->implode('');
                $floatPrice = floatval($convertPrice);

                $countTotalPriceB += $floatPrice;

                $statusReport = DB::table('product_data')->where('id','=',$i)->pluck('status');
                $convertStatus = $statusReport->implode('');

                if($convertStatus == 'READY'){
                    $readyCountB ++;
                }
                else if($convertStatus == 'ONHOLD'){
                    $onHoldCountB ++;
                }
                else if($convertStatus == 'DELIVERED'){
                    $delivCountB ++;
                }
                else if ($convertStatus == 'PACKING') {
                    $packCountB ++;
                }
                else if ($convertStatus == 'SENT'){
                    $sentCountB ++;
                }

            }

        }//For Loop


                  
        return view('data','dataProduct','countA','countB','value','countTotalPriceA','countTotalPriceB','readyCountA','onHoldCountA','delivCountA','packCountA','sentCountA',
        'readyCountB','onHoldCountB','delivCountB','packCountB','sentCountB','barcodeValueA','barcodeValueB');
        //dd($posts);
    }
}
