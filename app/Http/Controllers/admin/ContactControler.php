<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactControler extends Controller
{
    public function index()
    {
    	$contacts = Contactus::get();
    	return View('admin.contactus' , compact('contacts'));
    }
}
