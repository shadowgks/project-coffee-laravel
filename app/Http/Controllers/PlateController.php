<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Plate; //data from databases
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //join tables
        $plates = DB::table('plates')
        ->join('categories', 'plates.categorieID', '=', 'categories.id')
        ->select('plates.*', 'categories.name AS name_categorie')->get();
        //Statistic
        $statistic_plates = Plate::count();
        $statistic_categories = Categorie::count();
        $statistic_admins = User::where('role','1')->count();
        $statistic_users = User::where('role','0')->count();

        return view('dashboard',compact('plates','statistic_plates','statistic_categories','statistic_admins','statistic_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('crud.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30|min:2',
            'content' => 'required|max:250|min:2',
            'price' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100048',
            'categorieID' => 'required',
        ]);

        $plate = $request->all();
        //----------B Upload pictures--------------
        $picture = $request->file('picture');
        $fileName = time().$picture->getClientOriginalName();
        $path = $picture->storeAs('images', $fileName, 'public');
        $plate["picture"] = 'storage/'.$path;
        //----------E Upload pictures--------------
        Plate::create($plate);

        return redirect()->route('dashboard')
        ->with('success','Plate has been created successfully.');
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
    public function edit($id)
    {
        $plate = Plate::find($id);
        $categories = Categorie::all();
        return view('crud.edit',compact('plate','categories'));
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
        //Validation for required fields (and using some numeric value)
        $request->validate([
            'name' => 'required|max:30',
            'content' => 'required|max:250',
            'price' => 'required',
            'categorieID' => 'required',
        ]);

        $inputs = $request->all();
        //----------B Upload pictures--------------
        if($picture = $request->file('picture')){
            $fileName = time().$picture->getClientOriginalName();
            $path = $picture->storeAs('images', $fileName, 'public');
            $inputs["picture"] = 'storage/'.$path;
        }else{
            unset($inputs["picture"]);
        }
        //----------E Upload pictures--------------

        $plate = Plate::find($id);
        $plate->update($inputs);

        return redirect()->route('dashboard')
        ->with('success','Plate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plate = plate::find($id);
        $plate->delete();

        return redirect()->route('dashboard')
        ->with('success','Plate deleted successfully');
    }
}
