<?php

namespace App\Http\Controllers;

use App\Models\Benhnhan;
use Illuminate\Http\Request;

class BenhnhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benhnhans = Benhnhan::all();
        return view('BN.manager',['benhnhans' => $benhnhans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BN.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Benhnhan::create([
            'TenBN' =>$request->txtTenBN,
            'Address' =>$request->txtAddress,
        ]) ;
        return redirect('/manager/BN');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benhnhan  $benhnhan
     * @return \Illuminate\Http\Response
     */
    public function show(Benhnhan $benhnhan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benhnhan  $benhnhan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        return view('BN.edit',['benhnhans' => $benhnhans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Benhnhan  $benhnhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        $benhnhans->update([
            'TenBN' =>$request->txtTenBN,
            'Address' =>$request->txtAddress,
        ]);
        return redirect('/manager/BN');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benhnhan  $benhnhan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Benhnhan::FindOrFail($id)->delete();
        return redirect('/manager/BN');
    }
}
