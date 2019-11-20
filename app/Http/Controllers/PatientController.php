<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index()
    {

        $filter = Request('name');
        /*        dd($filter);*/
        if ($filter=="") {
            $patients = Patient::sortable()->paginate(10);
        }else{
            $stmt = Patient::query();
            $stmt->select('*')->where("patients.firstname",'like', '%' . $filter.'%' );
            $patients = $stmt->sortable()->paginate(10);
        }

        return view('patients',compact('patients'));
    }

    public function show($id)
    {
        /*dd($id);*/
        $details = Patient::findOrFail($id);
        return view('view',compact('details'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'svnr' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'plz' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        /*dd($data);*/
        /*dd($id);*/

        DB::table('patients')
            ->where('id', $id)
            ->update([
                'svnr' => $data['svnr'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'address' => $data['address'],
                'plz' => $data['plz'],
                'city' => $data['city'],
                'country' => $data['country']
            ]);

        return redirect("/patients/{$id}");
    }

    public function create()
    {

        return view('create');
    }

    public function store()
    {
        $data = request()->validate([
            'svnr' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'plz' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        /*dd($data);*/
        DB::table('patients')
            ->insert([
                'svnr' => $data['svnr'],
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'address' => $data['address'],
                'plz' => $data['plz'],
                'city' => $data['city'],
                'country' => $data['country']
            ]);
        return redirect('/patients');
    }
}
