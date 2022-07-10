<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\FirstSurvey;
use App\Models\SecondSurvey;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $now = Carbon::now();
        $created = new Carbon($user->created_at);
        $difference = $created->diff($now)->days;
          
        $questions = Question::all()->where('id','<' , 42);
        return view('dashboard', compact('user' , 'questions' , 'difference'));
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
    public function store(Request $request , $id)
    {
        $user=User::findOrFail($id);
         
        for($i=1 ; $i<= count($request->input()) -1 ; $i++)
        {
            $data = new FirstSurvey;
            $data->user_id = $user->id;
            $data->question_id = $i;
            $data->answer  = $request["Q{$i}ans"];
            $data->doneAndo = $user->doneAndo;
            $data->save();
        }

        $user->seenFirst = 1;
        $user->save();
        
        return redirect()->to('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $questions =Question::all()->where('id','>' ,41);
        return view('done2' , compact('user' , 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doneAndo()
    {
        $user = Auth::user();
        $user->doneAndo = "yes";
        $user->save();
        $questions =Question::all()->where('id','<' ,42);
        return view('final' , compact('user' , 'questions'));
    }

    public function submitFirstForm(Request $request ,$id)
    {
        $user=User::findOrFail($id);
         
        for($i=1 ; $i<= count($request->input()) -1 ; $i++)
        {
            $data = new FirstSurvey;
            $data->user_id = $user->id;
            $data->question_id = $i;
            $data->answer  = $request["Q{$i}ans"];
            $data->doneAndo = $user->doneAndo;
            $data->save();
        }

        $user->seenSecond = 1;
        $user->save();
        
        return redirect()->to('/dashboard/showForm');
    }


    public function submitSecondForm(Request $request ,$id)
    {
        $user=User::findOrFail($id);
        
         
        for($i=42 ; $i<= count($request->input()) + 40 ; $i++)
        {
            $data = new SecondSurvey;
            $data->user_id = $user->id;
            $data->question_id = $i;
            $data->answer  = $request["Q{$i}ans"];
            $data->doneAndo = $user->doneAndo;
            $data->save();
        }
       
        
        return redirect()->to('/dashboard');
    }
}
