<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EventsController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('id', 'desc')
            ->paginate(8);
//        dd($events);
        return view('event.index')->with('events', $events);
    }

    public function show($id)
    {
//        dd('show');
        $id = (int)$id;
        $events = DB::table('events')
            ->selectRaw('events.*')
            ->whereRaw("(events.id = ?)",  $id)
            ->get();
//        dd($events);
        return view('event.show')->with('events', $events);
    }

    public function edit(Request $request, $id)
    {
        $id = (int)$id;
        if(!empty($id)) {
            $events = DB::table('events')
                ->selectRaw('events.id, events.title, events.body')
                ->whereRaw("(events.id = ?)", $id)
                ->get();
            }

        if(count($events)){
            foreach ($events as $el){
                $talent_id = $el->id;
                $talent_title = $el->title;
                $talent_body = $el->body;
            }
        }
        return view('event.edit',[
            'talent_id' => $talent_id,
            'talent_title' => $talent_title,
            'talent_body' => $talent_body,
        ]);
    }

    public function create()
    {
        return view('event.create');
    }

    public function store(Request $request)
    {
//        dd($request->id);
        $id = (int)$request->id;
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required|max:255',
        ]);

        Event::updateOrCreate(
            [
                'id' => $id,
            ],
            [
                'id' => $id,
                'title' => $request->title,
                'body' => $request->body,
            ]
        );
        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        if(!empty($_REQUEST['return'])) {
            return redirect($_REQUEST['return']);
        }else{
            return redirect()->route('events.index');
        }
    }
}
