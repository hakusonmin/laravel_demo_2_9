<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $time_schedule_id = $request->query('time_schedule_id');

        $tickets = Ticket::where('time_schedule_id', $time_schedule_id)
            ->where('is_reserved', 0)
            ->whereHas('timeSchedule.dateSchedule.movie', function ($query) {
                $query->where('is_showing', 1);
            })
            ->with('sheet', 'sheet.hall')
            ->get();

        return view('web.admin.ticket.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::with('sheet', 'sheet.hall', 'timeSchedule', 'timeSchedule.dateSchedule', 'timeSchedule.dateSchedule.movie')
            ->findOrFail($id);

        return view('web.admin.ticket.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
