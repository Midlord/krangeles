<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Employees\Employee;
use App\Models\Restaurant;
class DashboardController extends Controller
{
    public function index ()
    {
    	$restaurantcount = Restaurant::count();
    	$employeecount = Employee::count();
    	$customercount =  User::count();
    	return view('admin.dashboard',compact('restaurantcount','employeecount','customercount'));
    }
}
