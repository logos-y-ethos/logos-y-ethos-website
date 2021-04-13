<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return response()->view('admin.events.index', ['events' => $events ]);
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
        $event = new Event($request->all());
        $id = Event::max('id')+1;
        if ($request->hasFile('photo')) {
            $pathToMove = '';
            if (App::environment('local')) {
                $pathToMove = public_path('/images/events/');
            }else{
                $pathToMove = base_path() . '/public_html/images/events/';
            }
            $photo_name = 'event-' . $id . '.png';
            $request->photo->move($pathToMove, $photo_name);
            $event->photo = $photo_name;
        }
        $event->registerer = Auth::user()->id;
        $event->save();
        return redirect('admin/eventos');
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
        $event = Event::find($id);
        return view('admin.events.edit', ['event' => $event ]);
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
        $event = Event::find($id);
        $event->fill($request->all());
        $id = Event::max('id')+1;
        if ($request->hasFile('photo')) {
            $pathToMove = '';
            if (App::environment('local')) {
                $pathToMove = public_path('/images/events/');
            }else{
                $pathToMove = base_path() . '/public_html/images/events/';
            }
            $photo_name = 'event-' . $id . '.png';
            $request->photo->move($pathToMove, $photo_name);
            $event->photo = $photo_name;
        }
        $event->registerer = Auth::user()->id;
        $event->save();
        return redirect('admin/eventos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('admin/eventos');
    }
}
