<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerResource;
 use Validator;
use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::paginate(10);
        return CustomerResource::collection($data);
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = $request->isMethod('put') ? Customer::findOrFail
//        ($request->customer_id) : new Customer;


        $this->validate($request, array(

            "first_Name"        => 'required|max:255',
            "last_Name"        => 'required|max:255',
            "age"  => 'required|integer',
            "city"         => 'required',


        ))  ;







        $data =  new Customer();
//         $data->id = $request->input('customer_id');
         $data->first_Name = $request->input('first_Name');
         $data->last_Name = $request->input('last_Name');
         $data->age = $request->input('age');
         $data->city = $request->input('city');

        if($data->save()) {
            return new CustomerResource($data);
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = Customer::findOrFail($id);

        return new CustomerResource($data);
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
        $data = Customer::findOrFail($id);
        $data->first_Name = $request->input('first_Name');
        $data->last_Name = $request->input('last_Name');
        $data->age = $request->input('age');
        $data->city = $request->input('city');



        if($data->save()) {
            return new CustomerResource($data);
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
        $data = Customer::findOrFail($id);

        if($data->delete()){
            return new CustomerResource($data);

        }

    }
}
