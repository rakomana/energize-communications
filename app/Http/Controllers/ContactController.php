<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Database\ConnectionInterface as DB;

class ContactController extends Controller
{
    private $contact;
    private $db;

    public function __construct(Contact $contact, DB $db)
    {
        $this->db = $db;
        $this->contact = $contact;       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $this->db->beginTransaction();

        $contact = new $this->contact();
        $contact->name = $request->name;
        $contact->message = $request->message;
        $contact->email = $request->email;
        $contact->save();

        $this->db->commit();

        return response()->json([
            'message' => 'User information submitted succesfully',
            'status' => 200
        ]);
    }
}
