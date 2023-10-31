<?php

namespace App\Http\Controllers\admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarCategory;
use App\Models\CarFullInfo;
use Exception;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.index' ,[
            'cars' => $cars 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CarCategory::all();
        return view('admin.cars.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        try{
            DB::beginTransaction();
                // dd($request->name);
            $requst = $request->validate([
                'name' => 'required|string',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif',
                'matricule' => 'required|string',
                'state' => 'required|integer',
                'categories_id' => 'required|exists:car_categories,id',
                'model' => 'required|string',
                'brand' => 'required|string',
                'year' => 'required|string',
                'price' => 'nullable|numeric',
                'Fuel' => 'string',
                'color' => 'nullable|string',
                // 'Power_steering' => 'boolean',
                // 'audio_input' => 'boolean',
                // 'Sleeping_bags' => 'boolean',
                'Transmission_type' => 'string',
                // 'clim' => 'boolean',
                'vitess_number' => 'integer',
                'dors_numbers' => 'integer',
                // 'description' => 'nullable|string',
            ]);
        
            $path = public_path('car_imgs/');
            $uploadedImage = $request->file('img');
            $originalName = $uploadedImage->getClientOriginalName();
            $imagePath = $uploadedImage->move('car_imgs', $originalName);

            // Create the Car record
            $car = Car::create([
                'name' => $request['name'],
                'img' => $imagePath,
                'matricule' => $request['matricule'],
                'state' => $request['state'],
                'categorie_id' => $request['categories_id'],
                'price_per_day' => $request['price_per_day'],
                'price_per_week' => $request['price_per_week'],
                'price_per_mounth' => $request['price_per_mounth']
            ]);

          
            // Create the CarFullInfo record
            $carFullInfo = CarFullInfo::create([
                'model' => $request['model'],
                'brand' => $request['brand'],
                'year' => $request['year'],
                'price' => $request['price'],
                'Fuel' => $request['Fuel'],
                'color' => $request['color']  ?$request['color']: 'Noir',
                'Power_steering' => $request['Power_steering'] ? true : false,
                'audio_input' => $request['audio_input']? true : false,
                'Sleeping_bags' => $request['Sleeping_bags']? true : false,
                'Transmission_type' => $request['Transmission_type'],
                'clim' => $request['clim']? true : false,
                'vitess_number' => $request['vitess_number'],
                'dors_numbers' => $request['dors_numbers'],
                'description' => $request['description']?$request['description'] : 'description',
                'car_id' => $car->id,
            ]);
          
            DB::commit();
            return  redirect()->route('admin.cars.index');
        }
        catch(Exception $e){
            DB::rollBack();
            dd($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cars = Car::all();
        return view('cars.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
