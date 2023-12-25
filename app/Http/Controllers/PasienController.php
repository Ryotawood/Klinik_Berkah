<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {

        $pasien = pasien::all();
        if ($request->wantsJson()) {
            return response()->json($pasien);
        }
        
        return view('pasien', [
            'pasien' => $pasien
        ]);
        // return response()->json($pasien);
        // return view('pasien',[
        //     'pasien' => $pasien
        // ]);
        // $pasien = pasien::all();
        // return view('child', 
        //     compact('pasien')
        // );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $pasien = new pasien();
        // $pasien->pasien = $request->pasien;
        // $pasien->bpjs = $request->bpjs;
        // $pasien->poli = $request->poli;
        // $pasien->dokter = $request->dokter;
        // $pasien->save();
        // return redirect('/pasien');
        $pasien = Pasien::create($request->all());
        if ($request->wantsJson()) {
            return response()->json($pasien, 201);
        }

        return redirect('/pasien');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pasien $pasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'pasien' => 'required|max:255',
            'bpjs' => 'required|max:255',
            'poli' => 'required|max:255',
            'dokter' => 'required|max:255',
        ]);

        $pasien = Pasien::findOrFail($id);
        if ($request->wantsJson()) {
            $pasien->update($validated);
            return response()->json($pasien, 200);
        }

        $pasien->update([
            'pasien' => $request->input('pasien'),
            'bpjs' => $request->input('bpjs'),
            'poli' => $request->input('poli'),
            'dokter' => $request->input('dokter'),
        ]);
    
    return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request, $id)
    {
        $deleted = pasien::where('id', $id)->delete();
        if ($request->wantsJson()) {
            return response()->json(null, 204);
        }
        // return response()->json(null, 204);
        return redirect('/pasien');
        // $pasien = pasien::find($id);
        // $pasien->delete();
        // return redirect('/pasien')->with('status', 'Data berhasil dihapus');
    }
}
