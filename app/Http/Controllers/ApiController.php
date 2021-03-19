<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outbound_SG;

class ApiController extends Controller
{
    public function handle(Request $request)
    {
        $data = [];

        foreach(config('default_values') as $key=>$value)
        {
            if($request->{$key})
            {
                $data[$key] = $request->{$key};
            }
            else
            {
                $data[$key] = $value;
            }
        }

        Outbound_SG::create($data);

        return response('OK');
    }
}
