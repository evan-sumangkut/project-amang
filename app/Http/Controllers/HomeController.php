<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BiodataDriver;
use App\BiodataMerchant;
use App\Http\Requests\RequestBiodataDriver;
use App\Http\Requests\RequestBiodataMerchant;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }




    public function daftar_ojek(RequestBiodataDriver $request)
    {
        

        $input = $request->all();
    
        $input['status'] = "0";
        BiodataDriver::create($input);


        return redirect()->back()
                ->with('pesan', 'Biodata telah dikirim');
    }


    public function daftar_merchant(RequestBiodataMerchant $request)
    {
    $ni = 0;
      $merchant = BiodataMerchant::orderBy('id','desc')->latest()->get()->take(1);
 
      foreach($merchant as $me){
      $merch = $me->id;
      $ni++;
      }
      if($ni == 0){
      $id_merchant = 1;
      }else{
      $id_merchant = $merch+1;
      }
 
 
        $input = $request->all();
        if($request->hasFile('logo')){
            $logo = $input['logo'];
            $nama_file = $id_merchant."-".$logo->getClientOriginalName();
            $save_path = 'file/images/logo/';

            $kompres = Image::make($logo->getRealPath());
            $kompres->save($save_path.$nama_file);

            $input['logo']=$save_path.$nama_file;
        }else{
            $input['logo']="";
        }
        $input['status'] = "0";

        BiodataMerchant::create($input);



        return redirect()->back()
                ->with('pesan', 'Merchant telah didaftarkan');
    }

}
