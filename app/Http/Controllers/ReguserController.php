<?php

namespace App\Http\Controllers;

use App\Models\reguser;
use Exception;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ReguserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo $request;
        // print_r($request->all());
        $data = request()->json($request->all());
        $registerUser = new reguser;
        $registerUser->name = $data['name'];
        $registerUser->email = $data['email'];
        $registerUser->mob = $data['mob'];
        $registerUser->pass = $data['pass'];
        try {
            $registerUser->save();
            return json_encode(['status' => '1', 'message' => 'Registered Successfully']);
        } catch (Exception $e) {
            return json_encode(['status' => '0', 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reguser  $reguser
     * @return \Illuminate\Http\Response
     */
    public function show(reguser $reguser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reguser  $reguser
     * @return \Illuminate\Http\Response
     */
    public function edit(reguser $reguser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reguser  $reguser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reguser $reguser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reguser  $reguser
     * @return \Illuminate\Http\Response
     */
    public function destroy(reguser $reguser)
    {
        //
    }
}
