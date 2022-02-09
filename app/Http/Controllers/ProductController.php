<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request; 


class ProductController extends Controller
{
    public function index()
    {

/* 
        $current = Carbon::now();
        $today = Carbon::today();
$yesterday = Carbon::yesterday();
$tomorrow = Carbon::tomorrow();


$todayData=0;
        $curWeekData=0;
        $curMonthData=0;
        $curYearData=0;

        $today=date('d-m-Y');

        $start_date = new \DateTime(date('Y-m-d'));
        $day_of_week = $start_date->format("w");
        $curWeek=date('Y-m-d', strtotime("-$day_of_week days", strtotime(date('Y-m-d'))));

        $curMonth=date('m-Y');

        $curYear=date('Y');

        $tday = '';
        $thisWeek = '';
        $mont = date('M Y');
        $year = '';


         */
        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
