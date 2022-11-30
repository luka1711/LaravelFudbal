<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FudbalskaLiga;
use Illuminate\Http\Request;
use App\Http\Resources\FudbalskaLigaResource;
use Illuminate\Support\Facades\Validator;

class FudbalskaLigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lige = FudbalskaLiga::all();
        return FudbalskaLigaResource::collection($lige); 
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
     * @param  \App\Models\FudbalskaLiga  $fudbalskaLiga
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $liga = FudbalskaLiga::find($id);
        return new FudbalskaLigaResource($liga);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FudbalskaLiga  $fudbalskaLiga
     * @return \Illuminate\Http\Response
     */
    public function edit(FudbalskaLiga $fudbalskaLiga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FudbalskaLiga  $fudbalskaLiga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'website' => 'required|string',
            'nivo' => 'required|string',
            'drzava' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $liga = FudbalskaLiga::find($id);

        if ($liga) {
            $liga->naziv = $request->naziv;
            $liga->website = $request->website;
            $liga->nivo = $request->nivo;
            $liga->drzava = $request->drzava;

            $liga->save();

            return response()->json(['Liga je izmenjena!', new FudbalskaLigaResource($liga)]);
        } else {
            return response()->json('Liga sa traženim id-em ne postoji u bazi podataka!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FudbalskaLiga  $fudbalskaLiga
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $liga = FudbalskaLiga::find($id);
        if ($liga) {
            $liga->delete();
            return response()->json(['Liga je obrisana!', new FudbalskaLigaResource($liga)]);
        } else {
            return response()->json('Liga pod ovim ID brojem ne postoji u bazi podataka!');
        }
    }

}
