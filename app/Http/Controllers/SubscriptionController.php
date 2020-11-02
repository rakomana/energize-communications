<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class SubscriptionController extends Controller
{
    private $email;
    private $db;

    /**
     * Inject models into the constructor
     * 
     * @param Subscription $subscribe
     * 
     */
    public function __construct(Subscription $subscribe, DB $db)
    {
        $this->subscribe = $subscribe;
        $this->db = $db;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionStoreRequest $request)
    {
        $this->db->beginTransaction();

        $subscribe = new $this->subscribe();
        $subscribe->email = $request->email;
        $subscribe->save();
        
        $this->db->commit();

        return view('thank-you-subscribe');
    }
}