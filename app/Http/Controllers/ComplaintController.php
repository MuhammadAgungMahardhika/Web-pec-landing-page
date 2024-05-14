<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ComplaintController extends Controller
{

    private $model;
    public function __construct(Complaint $complaint)
    {
        $this->model = $complaint;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        try {
            $data = $this->model->get();
            return response()->json(['message' => 'successfull to get data', 'data' => $data], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_hospital' => 'required|integer',
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
                'is_respond' => 'boolean',
            ]);

            $this->model->id_hospital = $request->id_hospital;
            $this->model->name = $request->name;
            $this->model->email = $request->email;
            $this->model->phone_number = $request->phone_number;
            $this->model->subject = $request->subject;
            $this->model->message = $request->message;
            $this->model->is_respond = false;
            $store =  $this->model->save();

            if ($store) {
                return response()->json(['message' => 'Terimakasih, komplain anda sudah kami simpan', 'data' => $this->model], 201);
            } else {
                return response()->json(['message' => 'Mohon maaf, komplain anda gagal disimpan'], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
