<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sale;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        $sum = DB::table('products')->sum('quantity');
        $saleAmount = DB::table('sales')->sum('price');
        $startDate = '2023-12-12';
        $endDate = '2023-12-20';
        $record = DB::table('sales')->whereBetween('created_at', [$startDate,$endDate])->sum('price');
        //Display Today's Sales:
        $todaySales = DB::table('sales')->whereDate('created_at',Carbon::today())->sum('price');
        //Displaying yesterday sales:
        $yesterday = Carbon::yesterday();
        $yesterdaySales = DB::table('sales')->whereDate('created_at',$yesterday)->sum('price');
        $firstDayThisMonth = Carbon::now()->startOfMonth();
        $lastDayThisMonth = Carbon::now()->endOfMonth();
        $thisMonthSales = DB::table('sales')->whereBetween('created_at',[$firstDayThisMonth, $lastDayThisMonth])->sum('price');
        
        //Displayig Last Month's Sales Data:
        $firstDayLastMonth = Carbon::now()->subMonth()->startOfMonth();
        $lastDayLastMonth = Carbon::now()->subMonth()->lastOfMonth();
        $lastMonthSales = DB::table('sales')->whereBetween('created_at',[$firstDayLastMonth,$lastDayLastMonth])->sum('price');

        return view('products.home', compact('sum','saleAmount','record','todaySales','yesterdaySales','thisMonthSales','lastMonthSales'));
    }
    
}
