<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CustomerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id' => $this->id,
            'first_Name' =>$this->first_Name,
            'last_Name' =>$this->last_Name,
            'age' =>$this->age,
            'city' => $this->city,

        ];
    }

    public function with($request)
    {
        return [

                'site' => url('http://saeidrahmani.esy.es')
            ];

    }
}
