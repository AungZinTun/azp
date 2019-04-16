<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAlbumsRequest;
use App\Http\Requests\Admin\UpdateAlbumsRequest;

class AlbumsController extends Controller
{
    /**
     * Display a listing of Album.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('album_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('album_delete')) {
                return abort(401);
            }
            $albums = Album::onlyTrashed()->get();
        } else {
            $albums = Album::all();
        }

        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating new Album.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('album_create')) {
            return abort(401);
        }
        return view('admin.albums.create');
    }

    /**
     * Store a newly created Album in storage.
     *
     * @param  \App\Http\Requests\StoreAlbumsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumsRequest $request)
    {
        if (! Gate::allows('album_create')) {
            return abort(401);
        }
        $album = Album::create($request->all());

        foreach ($request->input('products', []) as $data) {
            $album->products()->create($data);
        }


        return redirect()->route('admin.albums.index');
    }


    /**
     * Show the form for editing Album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('album_edit')) {
            return abort(401);
        }
        $album = Album::findOrFail($id);

        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update Album in storage.
     *
     * @param  \App\Http\Requests\UpdateAlbumsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbumsRequest $request, $id)
    {
        if (! Gate::allows('album_edit')) {
            return abort(401);
        }
        $album = Album::findOrFail($id);
        $album->update($request->all());

        $products           = $album->products;
        $currentProductData = [];
        foreach ($request->input('products', []) as $index => $data) {
            if (is_integer($index)) {
                $album->products()->create($data);
            } else {
                $id                          = explode('-', $index)[1];
                $currentProductData[$id] = $data;
            }
        }
        foreach ($products as $item) {
            if (isset($currentProductData[$item->id])) {
                $item->update($currentProductData[$item->id]);
            } else {
                $item->delete();
            }
        }


        return redirect()->route('admin.albums.index');
    }


    /**
     * Display Album.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('album_view')) {
            return abort(401);
        }
        $products = \App\Product::where('album_id', $id)->get();

        $album = Album::findOrFail($id);

        return view('admin.albums.show', compact('album', 'products'));
    }


    /**
     * Remove Album from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('album_delete')) {
            return abort(401);
        }
        $album = Album::findOrFail($id);
        $album->delete();

        return redirect()->route('admin.albums.index');
    }

    /**
     * Delete all selected Album at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('album_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Album::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Album from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('album_delete')) {
            return abort(401);
        }
        $album = Album::onlyTrashed()->findOrFail($id);
        $album->restore();

        return redirect()->route('admin.albums.index');
    }

    /**
     * Permanently delete Album from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('album_delete')) {
            return abort(401);
        }
        $album = Album::onlyTrashed()->findOrFail($id);
        $album->forceDelete();

        return redirect()->route('admin.albums.index');
    }
}
