<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create()
    {
        return view('cruds/bookings/create');
    }

    public function store(StoreBookingRequest $request, Booking $booking)
    {
        $data = $request->only(['date']);

        $booking = $booking->create($data);

        return redirect()->route('booking.show');
    }

    public function show(Booking $booking)
    {
        $bookings = $booking->all();

        return view('cruds/bookings/show', compact('bookings'));
    }

    public function edit(string|int $id)
    {
        $booking = Booking::find($id);
        return view('cruds/bookings/edit', compact('booking'));
    }

    public function update(UpdateBookingRequest $request, $id)
    {
        $booking = Booking::find($id);
        $booking->date = $request->input('date');

        $booking->save();
        return redirect()->route('booking.show');
    }

    public function destroy(string|int $id)
    {
        if(!$booking = Booking::find($id))
        {
            abort(404);
        }

        $booking->delete();

        return back();
    }
}
