<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarDriverInfo;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Guest;
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
            "total_cost"  => $request->total_cost ,
            "start_location" => $request->start_location,
            "end_location" => $request->end_location,
        ]);
    }



    public function confirm(Request $request){
       
       
        // $validatedData = $request->validate([
        //     'driver1_name' => 'required|string|max:255',
        //     'driver1_cin' => 'required|string|max:255',
        //     'driver1_license' => 'required|string|max:255',
        //     'reservation_id' => 'required|numeric|unsigned',
        //     'car_id' => 'required|numeric|unsigned',
        //     'driver2_name' => 'nullable|string|max:255',
        //     'driver2_cin' => 'nullable|string|max:255',
        //     'driver2_license' => 'nullable|string|max:255',
        // ]);

        try{
            DB::beginTransaction();
            $rental = new Reservation();

            if (Auth::check()) {
                // The user is authenticated.
                $user = Auth::user(); // Get the authenticated user instance.
                $userId = Auth::id(); 
                $rental->user_id = $userId; 
            // Get the authenticated user's ID.
            } else {
                $address = new \App\Models\Address;
                $address->street  = $request->     
                $address->city   = $request->
                $address->state  = $request->
                $address->postal_cod = $request->
                $user = new Guest;
                $user->name = $request->name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                // Assign values for other fields as needed
                $user->save();
            }
            
            $rental->car_id = $request->car_id;
            $rental->start_location = $request->start_location;
            $rental->end_location = $request->end_location;
            $rental->state = 0;
            $rental->rental_start_date = $request->rental_start_date;
            $rental->rental_end_date = $request->rental_end_date;
            $rental->rental_start_heure = $request->rental_start_heure;
            $rental->rental_end_heure = $request->rental_end_heure;
            $rental->total_cost = $request->total_cost;
            $rental->payment_status = 0;
            // 'payment_method' => $request->payment_method,
            $rental->pyment_method = 'COD';
            $rental->save();
            $reservation_id = $rental->id;

            // Cin driver 1 path 
            $uploadedImageCIn = $request->file('driver1_cin');
            $originalName = $request->driver1_name . $request->driver1_last_name.$reservation_id.Carbon::now();
            $imagePathCin = $uploadedImageCIn->move('documents/cin', $originalName);
             // Licence driver 1  path 
             $uploadedImageLicence = $request->file('driver1_license');
             $originalNameLicence = $request->driver1_name . $request->driver1_last_name.$reservation_id.Carbon::now();
             $imagePathLicence = $uploadedImageLicence->move('documents/license', $originalNameLicence);
             $imagePathCin2 = null ;
             $imagePathLicence2 = null ;
            if(isset($request->driver2_cin) && isset($request->driver2_license )){
                // Cin driver 2 path 
                $uploadedImageCIn = $request->file('driver2_cin');
                $originalName = $request->driver1_name . $request->driver1_last_name.$reservation_id.Carbon::now();
                $imagePathCin2 = $uploadedImageCIn->move('documents/cin', $originalName);
                // Licence driver 2  path 
                $uploadedImageLicence = $request->file('driver2_license');
                $originalNameLicence = $request->driver1_name . $request->driver1_last_name.$reservation_id.Carbon::now();
                $imagePathLicence2 = $uploadedImageLicence->move('documents/license', $originalNameLicence);    
            }
         // Create a new  instance
            $divresInfo = new CarDriverInfo();
            $divresInfo->driver1_name = $request->driver1_name;
            $divresInfo->driver1_last_name = $request->driver1_last_name;
            $divresInfo->driver1_cin = $imagePathCin;
            $divresInfo->driver1_license = $imagePathLicence;
            $divresInfo->reservation_id =  $rental->id;
            $divresInfo->car_id =  $request->car_id;
            $divresInfo->driver2_name =  $request->driver2_name;
            $divresInfo->driver2_last_name = $request->driver2_last_name;
            if($imagePathCin2 != null){
                $divresInfo->driver2_cin = $imagePathCin2 ;
            }
            else{
                $divresInfo->driver2_cin = null ;
            }
            if( $imagePathLicence2 != null){
                $divresInfo->driver2_license = $imagePathLicence2;
            }else{
              $divresInfo->driver2_license = $imagePathLicence2 ;
            }
            $divresInfo->save();

            DB::commit();

            return view('cars.fenished_with_succes' , [
                'reservation_id' => $reservation_id
            ]);
            // 'kilometrage_start' => $request->kilometrage_start,
        }      
        catch(\Exception $e){
            DB::rollBack();
            dd( $e->getMessage());
            return back()->withErrors(['error' => $e->getMessage()]);
        }
      

        

    }
}

