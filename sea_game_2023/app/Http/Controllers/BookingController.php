<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return response()->json(['success' => true, 'data' => $bookings], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation 
        $rules = [
            'type_ticket' => 'required|max:1|string',
            'price' => 'required|string',
            'event_id' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        // ---- check if errors---
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }else {
            $event = Event::find($request['event_id']);
            if($event['number_standA'] <= 0 && strtoupper($request['type_ticket']) == "A"){
                return response()->json(["success"=>false, "message"=>"Tickets stand A are sold out!"], 201);
            }else if($event['number_standB'] <= 0 && strtoupper($request['type_ticket']) == "B"){
                return response()->json(["success"=>false, "message"=>"Tickets stand B are sold out!"], 201);
            }else if($event['number_standA'] > 0 && strtoupper($request['type_ticket']) == "A"){
                Booking::create($request->all());
                $event->update(['number_standA'=>$event['number_standA']-1]);
                return response()->json(["success"=>true, "message"=>"You are booking ticket stand A"],200);
            }else if($event['number_standB'] > 0 && strtoupper($request['type_ticket']) == "B"){
                Booking::create($request->all());
                $event->update(['number_standB'=>$event['number_standB']-1]);
                return response()->json(["success"=>true, "message"=>"You are booking ticket stand B"],200);
            }
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(['success' => true, 'data' => Booking::find($id)], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Event::find($id);
        $booking->delete();
        return response()->json(['success' => true, 'message' => 'delete success'], 200);    
    }
}
