<?php

namespace App\Http\Controllers;

use App\Models\Phieu;
use App\Models\Benhnhan;
use Illuminate\Http\Request;

class PhieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $benhnhans = Benhnhan::where("MaBN", $id)->with('rPhieu')->first();
        return view('Phieu.manager',['benhnhans' => $benhnhans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        return view('Phieu.add',['benhnhans' => $benhnhans]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        $benhnhans->rPhieu()->create([
            'TenPhieu' =>$request->txtTenPhieu,
        ]);
        return redirect('manager/BN/'.$id.'/Phieu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phieu  $phieu
     * @return \Illuminate\Http\Response
     */
    public function show(Phieu $phieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phieu  $phieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$id2)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        $phieus = $benhnhans->rPhieu()->where("MaPhieu", $id2)->first();
        return view("Phieu.edit",['benhnhans'=>$benhnhans, 'phieus'=>$phieus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phieu  $phieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id2)
    {
        $benhnhans = Benhnhan::FindOrFail($id);
        $benhnhans->rPhieu()->where("MaPhieu", $id2)->update([
            'TenPhieu'=>$request->txtTenPhieu,
        ]);
        return redirect('manager/BN/'.$id.'/Phieu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phieu  $phieu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id2)
    {
        Phieu::FindOrFail($id2)->delete();
        return redirect('manager/BN/'.$id.'/Phieu');
    }
}
