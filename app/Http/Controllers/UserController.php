<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Staff;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
     {

        return view('users.index');
    }

    public function store(Request $request)
    {
       /*
               'FullNames',
        'CurrentLocation',
        'HighestLevelOfEducation',
        'DutyStation',
        'AvailabilityForRemoteWork',
        'SoftwareExpertise',
        'SoftwareExpertise Level',
        'Language',
        'LevelofResponsibility',
       */
   
        $request->validate([
            'IndexNumber' => ['required', 'string', 'max:255'],
            'Emails' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'FullNames' => ['required'],
            'CurrentLocation' => ['required'],
            'HighestLevelOfEducation' => ['required'],
            'DutyStation' => ['required'],
            'AvailabilityForRemoteWork' => ['required'],
            'SoftwareExpertise' => ['required'],
            'SoftwareExpertiseLevel' => ['required'],
            'Language' => ['required'],
            'LevelofResponsibility' => ['required'],
           // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        /*
             "IndexNumber" => "32432"
      "password" => "qwewq"
      "Emails" => "test@gmail.com"
      "CurrentLocation" => "qwe"
      "HighestLevelOfEducation" => "0"
      "DutyStation" => "0"
      "AvailabilityForRemoteWork" => "0"
      "SoftwareExpertise" => "0"
      "SoftwareExpertiseLevel" => "0"
      "Language" => "qwe"
      "LevelofResponsibility" => "0"
        */
        $user = Staff::create([
            'IndexNumber' => $request->IndexNumber,
            'Email' => $request->Emails,
            'CurrentLocation' => $request->CurrentLocation,
            'HighestLevelOfEducation' => $request->HighestLevelOfEducation,
            'DutyStation' => $request->DutyStation,
            'AvailabilityForRemoteWork' => $request->AvailabilityForRemoteWork,
            'SoftwareExpertise' => $request->SoftwareExpertise,
            'SoftwareExpertiseLevel' => $request->SoftwareExpertiseLevel,
            'Language' => $request->Language,
            'LevelofResponsibility' => $request->LevelofResponsibility,
            //'password' => Hash::make($request->password),
        ]);

        return redirect(route('user.index', absolute: false));
    }

    public function staffdata() {
       // $blogs = Staff::get()->paginate();

        $users = DB::table('staff')->paginate(15);
        return $users;
        /*
        if(request()->ajax())
        {
            return Datatables::of($blogs)
                   ->addIndexColumn()
                   ->addColumn('action', function ($row) {
                    $btn = '';
                    $show = '';
                    $edit = "";

                    $edit = '<a href="' . $row->id . '" class="edit btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#userModal">edit</a>&nbsp;&nbsp;';
                    $btn .= $edit;

                    $show = '<a href="' . $row->id . '" class="edit btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#userdeleteModal">Delete</a>';
                    $btn .= $show;

                    return $btn;
                })

                   ->addColumn('user', function($row){

                        return $row->IndexNumber;
                   })
                  
                   ->rawColumns(['action'])
                   ->make(true);    
        }
*/
    }

}
