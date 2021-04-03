<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexCollaborators()
    {
        $collaborators = Person::where('type','colaborador')->get();
        return response()->view('admin.collaborators.index', ['collaborators' => $collaborators ]);
        // return response()->json(['collaborators' => $collaborators]);
    }

    public function indexActiveMembers()
    {
        $members = Person::where('type','miembro activo')->get();
        return response()->view('admin.active-members.index', ['members' => $members ]);
        // return response()->json(['collaborators' => $collaborators]);
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

    public function storeCollaborator(Request $request)
    {
        $collaborator = new Person($request->all());
        // $collaborator->fill($request->all());
        $collaborator->type = 'colaborador';
        $collaborator->save();
        // return response()->json(['collaborator' => $collaborator]);
        return redirect('admin/colaboradores');
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

    public function editCollaborator($id)
    {
        $collaborator = Person::find($id);
        return view('admin.collaborators.edit', ['collaborator' => $collaborator ]);
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

    public function updateCollaborator(Request $request, $id)
    {
        $collaborator = Person::find($id);
        $collaborator->fill($request->all());
        $collaborator->save();
        return redirect('admin/colaboradores');
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

    public function destroyCollaborator($id)
    {
        $collaborator = Person::find($id);
        $collaborator->delete();
        return redirect('admin/colaboradores');
        // return response()->json(['collaborator' => $collaborator]);
    }

}
