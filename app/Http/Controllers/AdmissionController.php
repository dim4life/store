<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Admission;

class AdmissionController extends Controller
{
    /**
     * Create user
     *
     * @param  [string] name
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @return [string] message
     */
    public function register(Request $request)
    {
        
        $admission = new Admission();
        $admission->first_name = $request->first_name;
        $admission->last_name = $request->last_name;
        $admission->email = $request->email;
        $admission->password =  bcrypt($request->password);
        $admission->first_choice = $request->first_choice;
        $admission->second_choice = $request->second_choice;
        $admission->third_choice = $request->third_choice;
        $admission->session = $request->session;

        if($admission->save()) {
            return response()->json([
                'message' => 'Successfully created user!'
            ], 200);
        }

        
        
        return response()->json([
            'message' => 'Unable to register Applicant!'
        ], 500);
        
    }


   
}

