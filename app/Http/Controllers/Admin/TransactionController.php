<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Exception;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->select('transactions.*', 'users.user_fullname', 'tickets.ticket_name')
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
    

    public function showTransactionDetail($id)
    {
        $data = Transactions::with(['ticket',  'user'])->findOrfail($id);
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

    public function showPendingTransaction()
    {
        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->select('transactions.*', 'users.user_fullname', 'tickets.ticket_name')
            ->where('transaction_status', 'Pending')
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

    public function showSuccessTransaction()
    {
        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->select('transactions.*', 'users.user_fullname', 'tickets.ticket_name')
            ->where('transaction_status', 'Success')
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

    public function showRefundTransaction()
    {
        $data = DB::table('transactions')
            ->join('users', 'users.id', '=', 'transactions.user_id')
            ->join('tickets', 'tickets.id', '=', 'transactions.ticket_id')
            ->select('transactions.*', 'users.user_fullname', 'tickets.ticket_name')
            ->where('transaction_status', 'Refund')
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Transactions = new Transactions;
        $Transactions->ticket_id = $request->ticket_id;
        $Transactions->user_id = $request->user_id;
        $Transactions->total_price = $request->total_price;
        $Transactions->ticket_quantity = $request->ticket_quantity;
        $Transactions->transaction_status = $request->transaction_status;

        try {
            $responseData = response()->json([
                'status'   => 'successfully add data',
                'datas' => $Transactions->save()
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
        $data = Transactions::find($id);
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
        $item = Transactions::findOrFail($id);
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
