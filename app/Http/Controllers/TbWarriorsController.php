<?php

namespace App\Http\Controllers;

use App\Tb_Warriors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TbWarriorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = 'SELECT * FROM tb_warriors';
        $warriors = DB::select($sql);
        foreach ($warriors as $warrior) {
            $warrior->team= json_decode( $warrior->team, true);
            $warrior->fecha = date('d-m-Y', strtotime($warrior->fecha));
            $warrior->hora = date('H:i:s', strtotime($warrior->hora));
        }
        return response()->json($warriors);
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
     * @param  \App\Tb_Warriors  $tb_Warriors
     * @return \Illuminate\Http\Response
     */
    public function show(Tb_Warriors $tb_Warriors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tb_Warriors  $tb_Warriors
     * @return \Illuminate\Http\Response
     */
    public function edit(Tb_Warriors $tb_Warriors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tb_Warriors  $tb_Warriors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tb_Warriors $tb_Warriors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tb_Warriors  $tb_Warriors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tb_Warriors $tb_Warriors)
    {
        //
    }
}
