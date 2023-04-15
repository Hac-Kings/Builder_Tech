<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Position;
use App\Mail\JobRequestMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class JobController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs= Job::orderBy('created_at', 'desc')->get();
        return view('job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'=>'required|min:5',
            'experience'=>'required',
            'place'=>'required',
            'description'=>'required|min:10',
            'position'=>'required'
        ]);

        Job::create([
            'title'=>$request->title,
            'experience'=>$request->experience,
            'place'=>$request->place,
            'description'=>$request->description,
            'position_id'=>$request->position
        ]);

        return redirect(route('homepage'))->with('message', 'Offerta di lavoro creata correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('job.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job): RedirectResponse
    {
        //
    }

    public function byPosition(Position $position){
        $jobs= $position->jobs->sortByDesc('created_at');
        return view('job.byPosition', compact('position', 'jobs'));
    }

    // public function jobSubmit(Job $job, Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'last_name'=>'required',
    //         'email'=>'required|email',
    //         'number'=>'required',
    //         'cv'=>'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
    //         'position'=>'required',
    //         'motivation'=>'required|min:10'
    //     ]);

    //     $user= Auth::user();
    //     $name= $request->name;
    //     $last_name= $request->last_name;
    //     $email= $request->email;
    //     $number= $request->number;
    //     $cv= $request->cv;
    //     $position= $request->position;
    //     $motivation= $request->motivation;

    //     Mail::to('amministrazione@buildertech.it')->send(new JobRequestMail(compact('name', 'last_name', 'email', 'number', 'cv', 'position', 'motivation')));

    //     return redirect(route('job.show', compact('job')))->with('message', 'Abbiamo ricevuto la tua candidatura');
    // }
}
