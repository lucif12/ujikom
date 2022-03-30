<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   {
        $data = [
            'title' => 'List Catatan Perjalanan',
            'trips' => Trip::all(),
        ];
        return view('admin.trip.index', $data);
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $data=[
                'title'=>'Tambah Catatan',
                // 'route' => route(''),
            ];
            return view('admin.trip.create', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trip = new Trip;
        $trip->waktu = $request->waktu;
        $trip->tanggal = $request->tanggal;
        $trip->suhu = $request->suhu;
        $trip->lokasi = $request->lokasi;

        $trip->save();
        return redirect()->route('list-trip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
