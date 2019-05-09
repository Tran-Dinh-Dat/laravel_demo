<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RHPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listR = [
            'Tran Dinh A',
            'Tran Dinh B',
            'Tran Dinh C',
            'Tran Dinh D',
            'Tran Dinh E',
        ];
        // $listR = Model.getALl()
        return view('rhpcrud/rhpcrud', compact('listR'));
    }

    public function about($nameR) 
    {
        // truyền theo with
        // return view('rhpcrud/about')->with('name', $nameR);

        // truyền theo compact
        return view('rhpcrud/about' , compact('nameR'));
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
        return 'Đây là id của trang show: ' . $id;
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
        return 'Đây là trang destroy' . $id;
    }
}
