<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalogue;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Exception;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = catalogue::all();
        try {
            $responseData = response()->json([
                'status'   => 'success',
                'datas' => $data
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
        $catalogue = new Catalogue;
        $catalogue->catalogue_name = $request->catalogue_name;
        $catalogue->catalogue_desc = $request->catalogue_desc;
        $catalogue->catalogue_price = $request->catalogue_price;
        try {
            $responseData = response()->json([
                'status'   => 'successfully add data',
                'datas' => $catalogue->save()
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
        $catalogue = Catalogue::find($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully update data',
                'datas' => $catalogue->update($request->all())
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
        $item = Catalogue::findOrFail($id);
        try {
            $responseData = response()->json([
                'status'   => 'successfully delete data',
                'datas' => $item->delete()
            ]);
            return $responseData;
        }
        catch (Exception $error) {
            throw $error;
        }
    }

}
