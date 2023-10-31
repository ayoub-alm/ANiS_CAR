<?php

namespace App\Http\Controllers\admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarCategory;
use App\Models\CarFullInfo;
use App\Models\Reservation;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Mail\MyEmail;
use App\Models\CarDriverInfo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations= Reservation::all();
        return view('admin.reservations.index' ,[
            'reservations' => $reservations 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cars = Car::all();
        return view('admin.reservations.create',[
            'cars' => $cars
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
            $car = Car::where('id', $request->car_id)->firstOrFail();
            
            $startDate = Carbon::parse($request->rental_start_date); // Replace with your start date
            $endDate = Carbon::parse($request->rental_end_date);   // Replace with your end date

            $daysDifference = $endDate->diffInDays($startDate);
            $total_cost = $car->price * $daysDifference;


            $rental = new Reservation();
            $rental->user_id = 1;
            $rental->car_id = $request->car_id;
            $rental->start_location = $request->start_location;
            $rental->end_location = $request->end_location;
            $rental->state = 0;
            $rental->rental_start_date = $request->rental_start_date;
            $rental->rental_end_date = $request->rental_end_date;
            $rental->rental_start_heure = $request->rental_start_heure;
            $rental->rental_end_heure = $request->rental_end_heure;
            $rental->total_cost = $total_cost;
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
            if(isset($request->driver2_cin) && isset($request->driver2_license ) && $request->driver2_license != null && $request->driver2_cin != null ){
                // Cin driver 2 path 
                $uploadedImageCIn = $request->file('driver2_cin') ?$request->file('driver2_cin') : null ;
                $originalName = $request->driver1_name . $request->driver1_last_name.$reservation_id.Carbon::now();
                $imagePathCin2 = $uploadedImageCIn->move('documents/cin', $originalName);
                // Licence driver 2  path 
                $uploadedImageLicence = $request->file('driver2_license') ? $request->file('driver2_license') :null ;
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
            $divresInfo->driver2_cin =  $imagePathCin2 ? $imagePathCin2 : null ;
            $divresInfo->driver2_license = $imagePathLicence2 ? $imagePathLicence2  : null;
            $divresInfo->save();

            DB::commit();

            return view('admin.reservations.created' , [
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show($reservation_uuid)
    {
        $reservation = Reservation::where('uuid' , $reservation_uuid)->firstOrFail();
        return view('admin.reservations.show',[
            'reservation' => $reservation
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


    public function confirm($reservation_uuid){
        $reservation = Reservation::where('uuid' , $reservation_uuid)->firstOrFail();
        $reservation->state = Reservation::$ACCPTED;
        $reservation->save();
        // Within a controller or a route closure
        Mail::to($reservation->user->email)->send(new MyEmail($reservation));
        return redirect()->back();

        
    }
}
