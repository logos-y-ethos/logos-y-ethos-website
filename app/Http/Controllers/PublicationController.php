<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\App;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::get();

        return response()->view('admin.publications.index', ['publications' => $publications ]);
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
        $publication = new Publication($request->all());
        $id = Publication::max('id')+1;
        // $collaborator->fill($request->all());

        $publication->id = $id;
        $publication->date = Carbon::parse($request->date)->format('Y-m-d');

        if ($request->hasFile('cover')) {
            if (App::environment('local')) {
                $pathToMove = public_path('/files/publications/' . $id . '/cover/');
            }else{
                $pathToMove = base_path() . '/public_html/files/publications/'. $id . '/cover/';
            }
            $request->cover->move($pathToMove, $request->title . '.png');
            $publication->cover = '/publications/' . $id . '/cover/' . $request->title . '.png';
        }

        if ($request->hasFile('file')) {
            if (App::environment('local')) {
                $pathToMove = public_path('/files/publications/' . $id);
            }else{
                $pathToMove = base_path() . '/public_html/files/publications/' . $id;
            }
            $request->file->move($pathToMove, $request->title . '.pdf');
            $publication->file = '/publications/' . $id . '/' . $request->title . '.pdf';
        }

        $publication->save();
        // return response()->json(['id' => $id, 'publication' => $publication]);
        return redirect('admin/publicaciones');
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
        $publication = Publication::find($id);
        $publication->delete();
        return redirect('admin/publicaciones');
        // return response()->json(['publication' => $publication]);
    }
}
