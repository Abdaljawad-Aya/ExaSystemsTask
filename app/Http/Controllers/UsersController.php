<?php

namespace App\Http\Controllers;

use App\Models\ExaUsers;
use App\Models\Merchants;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = ExaUsers::all();
        // $merchants = Merchants::all();
        // $product = Product::all();
        $users=DB::table('users')->get();
        $merchants=DB::table('merchants')->get();
        $product=DB::table('products')->get();
      
        return view('users.index', [
            'users' => $users,
            'merchants' => $merchants,
            'products' => $product
        ]);
        // $users = Carbon::now();
        // return $users->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = ExaUsers::find($id);
        $products = Product::find($id);
        $merchants = Merchants::find($id);
        //  print_r($merchants);

        // dd($users);

        return view('users.index')
                    ->with('users', $users)
                    ->with('merchants', $merchants)
                    ->with('products', $products);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
