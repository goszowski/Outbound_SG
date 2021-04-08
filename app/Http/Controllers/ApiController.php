<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outbound_SG;
use Carbon\Carbon;
use Log;

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
        
        $data['dateadd'] = Carbon::now()->format('d-m-Y H:i:s');
        
        Log::info(json_encode($data));

        Outbound_SG::create($data);

        return response('OK');
    }
}
