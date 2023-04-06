<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Exception;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tickets')
                ->join('catalogues', 'catalogues.id', '=', 'tickets.catalogue_id')
                ->select('tickets.*', 'catalogues.catalogue_name', 'catalogues.catalogue_desc')
                ->get();
        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $data,
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }

    public function showAllTicket()
    {
        $data = Tickets::latest()->get();
        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $data,
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }
    
    public function showTicketDetail($id)
    {
        $data = Tickets::with(['catalogue'])->findOrfail($id);
        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $data,
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tickets = new Tickets;
        $tickets->ticket_name = $request->ticket_name;
        $tickets->ticket_desc = $request->ticket_desc;
        $tickets->ticket_image = $request->ticket_image;
        $tickets->ticket_schedule = $request->ticket_schedule;
        $tickets->ticket_location = $request->ticket_location;
        $tickets->ticket_organizer = $request->ticket_organizer;
        $tickets->ticket_startfrom = $request->ticket_startfrom;
        $tickets->catalogue_id = $request->catalogue_id;
        $tickets->ticket_status = $request->ticket_status;

        try {
            $responseData = response()->json([
                'status'   => 'successfully add ticket',
                'datas' => $tickets->save()
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
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
        $data = Tickets::find($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully update data',
                'datas' => $data->update($request->all())
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Tickets::findOrFail($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully delete data',
                'datas' => $item->delete(),
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }

}
