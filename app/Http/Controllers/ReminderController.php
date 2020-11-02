<?php

namespace App\Http\Controllers;

use App\Reminder;
use Illuminate\Http\Request;
use App\Http\Requests\ReminderStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class ReminderController extends Controller
{
    private $db;
    private $reminder;

    public function __construct(Reminder $reminder, DB $db)
    {
        $this->db = $db;
        $this->reminder = $reminder;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReminderStoreRequest $request)
    {
        $this->db->beginTransaction();

        $reminder = new $this->reminder;
        $reminder->first_name = $request->first_name;
        $reminder->email = $request->email;
        $reminder->mobile_number = $request->mobile_number;
        $reminder->est_contract_due_date = $request->est_contract_due_date;
        $reminder->last_name = $request->last_name;
        $reminder->company = $request->company;
        $reminder->current_spend = $request->current_spend;
        $reminder->no_of_phones = $request->no_of_phones;
        $reminder->current_network = $request->current_network;
        $reminder->phone_type = $request->phone_type;
        $reminder->save();

        $this->db->commit();

        return view('thank-you-reminder');
    }
}
