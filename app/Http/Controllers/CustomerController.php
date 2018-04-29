<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return response()
            ->json([
                'collection' => Customer::advancedFilter()
            ]);
    }
}
