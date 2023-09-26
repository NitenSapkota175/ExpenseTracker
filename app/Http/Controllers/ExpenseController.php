<?php

namespace App\Http\Controllers;
use App\views\components;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    //

    public function index()
    {
        return view('expense_lists.index');
    }
}
