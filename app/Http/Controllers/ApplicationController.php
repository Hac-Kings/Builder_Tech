<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use App\Mail\JobRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{

    public function index(){
        $applications= Auth::user()->applications;
        return view('application.index', compact('applications'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'cv'=>'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'position'=>'required',
            'motivation'=>'required|min:10'
        ]);

        $pdf_file= $request->file('cv')->store('public/curriculums');

        Application::create([
            'name'=>$request->input('name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'cv'=>$pdf_file,
            'position_id'=>$request->input('position'),
            'motivation'=>$request->input('motivation'),
            'user_id'=>Auth::user()->id,
        ]);
        

        // Mail::to('amministrazione@buildertech.it')->send(new JobRequestMail());

        return redirect()->back()->with('message', 'La tua candidatura è stata inviata con successo. Ti risponderemo al più presto.');
    }

    public function show(Application $application){
        return view('application.show', compact('application'));
    }

    public function download(Application $application){
        $this->authorize('download', $application);

        $file_path= $application->cv;

        return Storage::download($file_path);
    }
}
