<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\SubscriptionStoreRequest;

class SubscriptionController extends Controller
{
    private $email;

    /**
     * Inject models into the constructor
     * 
     * @param Subscription $subscribe
     * 
     */
    public function __construct(Subscription $subscribe)
    {
        $this->subscribe = $subscribe;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(string $email)
    {
        $subscribe = new $this->subscribe();
        $subscribe->email = $email;
        $subscribe->save();    
    }
}
