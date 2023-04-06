<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tickets;
use App\Models\Catalogue;
use App\Models\Transactions;
use Exception;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages/admin/dashboard', [
            'users_list' => User::count(),
            'ticket_list' => Tickets::count(),
            'catalogue_list' => Catalogue::count(),
            'transaction_list' => Transactions::count(),
            'transaction_pending_list' => Transactions::count(),
            'transaction_success_list' => Transactions::count(),
            'transaction_refund_list' => Transactions::count()
        ]);
    }

    public function counter(){
        $countData = [
            'user_count' => User::count(),
            'ticket_count' => Tickets::count(),
            'catalogue_count' => Catalogue::count(),
            'transaction_count' => Transactions::count(),
            'transaction_pending_count' => Transactions::where('transaction_status', 'PENDING')->count(),
            'transaction_success_count' => Transactions::where('transaction_status', 'SUCCESS')->count(),
            'transaction_refund_count' => Transactions::where('transaction_status', 'REFUND')->count(),
        ];

        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $countData,
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }
}
