<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outbound_SG extends Model
{
    protected $table = 'Outbound_SG';

    public $incrementing = 'record_id';

    public $timestamps = false;

    protected $fillable = [
        'phone_type',
        'record_type',
        'record_status',
        'call_result',
        'attempt',
        'dial_sched_time',
        'call_time',
        'daily_from',
        'daily_till',
        'tz_dbid',
        'campaign_id',
        'agent_id',
        'chain_id',
        'chain_n',
        'app_id',
        'treatments',
        'contact_info',
        'contact_info_type',
        'switch_id',
        'Cancel_Reason',
        'Customer_Name',
        'Dzherelo',
        'Out_Date',
        'Region',
        'HotOutStatus',
    ];
}
