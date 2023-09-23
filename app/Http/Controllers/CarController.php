<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Http\Request;
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::where('uuid' , $id)->firstOrFail();
        return view('cars.show',[
            'car' => $car
        ]);
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


    public function validate_rent(Request $request ,$car_id)
    {
       

        return view('cars.validate',[
            'car_id' => $car_id,
            "rental_start_date" => $request->rental_start_date,
            "rental_start_heure" => $request->rental_start_heure,
            "rental_end_date" => $request->rental_end_date,
            "rental_end_heure" => $request->rental_end_heure,
            "total_cost"  => $request->total_cost
        ]);
    }



    public function confirm(Request $request){
       
        try{
            DB::beginTransaction();
            $resevation = new Reservation();
            $resevation->user_id = $request->user_id;
            $resevation->car_id = $request->car_id;
            // 'state' => $request->state,
            $resevation->state = 0;
            $resevation->rental_start_date = $request->rental_start_date;
            $resevation->rental_end_date = $request->rental_end_date;
            $resevation->rental_start_heure = $request->rental_start_heure;
            $resevation->rental_end_heure = $request->rental_end_heure;
            $resevation->total_cost = $request->total_cost;
            $resevation->payment_status = 0;
            // 'payment_method' => $request->payment_method,
            $resevation->pyment_method = 'cod';
            $resevation->save();
            DB::commit();

            $reservation_id = $resevation->id;

            return view('cars.fenished_with_succes' , [
                'reservation_id' => $reservation_id
            ]);
            // 'kilometrage_start' => $request->kilometrage_start,
        }      
        catch(\Exception $e){
            DB::rollBack();
            return back()->withErrors(['error' => $e]);
        }
      

        

    }
}

