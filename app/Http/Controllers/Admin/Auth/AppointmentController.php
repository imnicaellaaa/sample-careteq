<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Gate;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Service;


class AppointmentController extends Controller
{
    //
    public function index()
    {
        // if (! Gate::allows('appointment_access')) {
        //     return abort(401);
        // }

        $appointments = Appointment::all();

        $relations = [
            'clients' => Client::get(),
            'employees' => Employee::get(),
			'services' => Service::get(),
        ];

        return view('admin.appointments.index', compact('appointments'), $relations);
    }
}
