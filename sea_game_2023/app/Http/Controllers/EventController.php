<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $events = Event::Where('event_name','like','%'.request('event_name').'%')->get();
        return response()->json(['success' => true, 'data' => $events], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation 
        $rules = [
            'event_name' => 'required|string',
            'date' => 'required',
            'time_start' => 'required',
            'number_standA'=>'required',
            'number_standB'=>'required',
            'sport_id' => 'required|integer',
            'hall_id' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);

        // ---- check if errors---
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        } else {
            Event::create($request->all());
            return response()->json(['success' => true, 'message' => 'create new event successfully'], 200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['success' => true, 'data' => Event::find($id)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validation 
        $rules = [
            'event_name' => 'required|string',
            'date' => 'required',
            'time_start' => 'required',
            'number_standA'=>'required',
            'number_standB'=>'required',
            'sport_id' => 'required|integer',
            'hall_id' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        // ---- check if errors---
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        } else {
            Event::find($id)->update($request->all());
            return response()->json(['success' => true, 'message' => 'Update success'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return response()->json(['success' => true, 'message' => 'delete success'], 200);
    }
}
