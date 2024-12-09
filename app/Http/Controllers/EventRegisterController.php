<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Register;
use Illuminate\Http\Request;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of all events for the public view.
     */
    public function index()
    {
        // Fetch all events
        $events = Event::all();

        // Render the public events page with the fetched events
        return view('eventsdetails', compact('events'));
    }

    /**
     * Handle participant registration for an event.
     */
    public function register(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255|unique:registers,email',
            'event_id' => 'required|exists:events,id',
        ]);

        // Check for duplicate registration
        $isAlreadyRegistered = Register::where('phone', $validated['phone'])
            ->where('event_id', $validated['event_id'])
            ->exists();

        if ($isAlreadyRegistered) {
            return response()->json([
                'success' => false,
                'message' => 'You are already registered for this event.',
            ], 409);
        }

        // Save the registration
        Register::create($validated);

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
        ], 201);
    }
}
