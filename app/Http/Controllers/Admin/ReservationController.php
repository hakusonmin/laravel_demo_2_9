<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Models\Reservation;
use App\Models\Ticket;
use Auth;
use DB;
use Illuminate\Http\Request;
use Log;
use Throwable;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();

        $reservations = Reservation::where('user_id', $user_id)
            ->with(
                ['ticket.timeSchedule.dateSchedule.movie']
            )->get();

        return view('web.admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $ticket_id = $request->input(('ticket_id'));

                Reservation::create([
                    'user_id' => Auth::id(),
                    'ticket_id' => $ticket_id
                ]);

                Ticket::where('id', $ticket_id)->update(['is_reserved' => 1]);

            });
        } catch (Throwable $e) {
            Log::error($e);
            throw $e;
        }

        return redirect()
            ->route('admin.reservations.index')
            ->with([
                'message' => 'チケットを購入しました',
                'status' => 'info'
            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservation = Reservation::with(
            'ticket',
            'ticket.sheet',
            'ticket.sheet.hall',
            'ticket.timeSchedule',
            'ticket.timeSchedule.dateSchedule',
            'ticket.timeSchedule.dateSchedule.movie'
        )->findOrFail($id);

        return view('web.admin.reservation.show', compact('reservation'));
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
