<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tglmulai' => 'required|date',
            'tglselesai' => 'required|date',
            'mak' => 'required',
            'petugas' => 'required|integer',
            'target' => 'required|integer',
        ]);

        Activity::create([
            'nama' => $request->nama,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'mak' => $request->mak,
            'petugas' => $request->petugas,
            'target' => $request->target,
        ]);

        return redirect('admin/activity')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('admin.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'nama' => 'required',
            'tglmulai' => 'required|date',
            'tglselesai' => 'required|date',
            'mak' => 'required',
            'petugas' => 'required|integer',
            'target' => 'required|integer',
        ]);

        Activity::where('id', $activity->id)->update([
            'nama' => $request->nama,
            'tglmulai' => $request->tglmulai,
            'tglselesai' => $request->tglselesai,
            'mak' => $request->mak,
            'petugas' => $request->petugas,
            'target' => $request->target,
        ]);

        return redirect('admin/activity')->with('status', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        Activity::destroy($activity->id);

        return redirect('admin/activity')->with('status', 'Data berhasil dihapus!');
    }
}
