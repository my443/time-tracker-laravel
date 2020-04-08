<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Timesheet;					// This defines what database you are using.

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		$timesheets = Timesheet::all();
        return view('time.index',compact('timesheets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Timesheet::create($request->all());
   
        return redirect()->route('time.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheet $time)
    {
		return view('time.edit',compact('time'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheet $time)
    {
        $request->validate([
			'date' 		=> 'required', 
			'timestart' => 'required', 
			'timeend'   => 'required', 
			'project'	=> 'required', 
			'description'=> 'required',
            
        ]);
  
        $time->update($request->all());
  
        return redirect()->route('time.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timesheet $time)
    {
        $time->delete();
  
        return redirect()->route('time.index');
    }
}
