<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Tables;
use App\Models\Customers;

class CalendarController extends Controller
{
    public function display()
    {
        $tables = Tables::all();
        $customers = Customers::all();
        return view('calendar.display', compact('tables', 'customers'));
    }

    public function json()
    {
        $content = Event::all()->toJson();
        return response($content)->withHeaders([
            'Content-Type' => 'application/json',
            'charset' => 'UTF-8'
        ]);
    }

    public function modalReservation()
    {
        $tables = Tables::all();
        $customers = Customers::all();
        return view('calendar.modalreservation', compact('tables', 'customers'));
    }
}