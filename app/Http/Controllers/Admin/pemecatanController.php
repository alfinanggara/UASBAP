<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\pemecatan;
use Illuminate\Http\Request;

class pemecatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pemecatan = pemecatan::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('employees_id', 'LIKE', "%$keyword%")
                ->orWhere('prodi', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('alasan_pemecatan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $pemecatan = pemecatan::latest()->paginate($perPage);
        }

        return view('admin.pemecatan.index', compact('pemecatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pemecatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        pemecatan::create($requestData);

        return redirect('admin/pemecatan')->with('flash_message', 'pemecatan added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $pemecatan = pemecatan::findOrFail($id);

        return view('admin.pemecatan.show', compact('pemecatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pemecatan = pemecatan::findOrFail($id);

        return view('admin.pemecatan.edit', compact('pemecatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $pemecatan = pemecatan::findOrFail($id);
        $pemecatan->update($requestData);

        return redirect('admin/pemecatan')->with('flash_message', 'pemecatan updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        pemecatan::destroy($id);

        return redirect('admin/pemecatan')->with('flash_message', 'pemecatan deleted!');
    }
}
