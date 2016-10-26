<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BiodataDriver;
use App\BiodataMerchant;
use App\ExtDriver;
use App\ExtDriverIncome;
class DashboardController extends Controller
{

public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

//driver
	public function driver_ojek_detail($id)
    {   
    	$header = "Ojek";
        $driver = BiodataDriver::whereUserid($id)->firstOrFail();
        return view('dashboard.driver.detail',compact('driver','header'));
    }
    public function driver_ojek_active()
	{
	//	$no = 1;
		//$header = "Ojek";
		//$driver = BiodataDriver::whereStatus('1')->whereDriver('ojek')->orderBy('id','desc')->get();
		//return view('dashboard.driver.active', compact('driver','no','header'));
		$no = 1;
		$header = "Ojek";
		$driver = ExtDriver::orderBy('id','desc')->whereType('1')->get();
		return view('dashboard.driver.active', compact('driver','no','header','password'));
	}

	public function driver_ojek_pending()
	{
		$no = 1;
		$header = "Ojek";
		$driver = BiodataDriver::whereStatus('0')->whereDriver('ojek')->orderBy('id','desc')->get();
		return view('dashboard.driver.pending', compact('driver','no','header'));
	}

	public function driver_ojek_blokir()
	{
		$no = 1;
		$header = "Ojek";
		$driver = BiodataDriver::whereStatus('2')->whereDriver('ojek')->orderBy('id','desc')->get();
		return view('dashboard.driver.blokir', compact('driver','no','header'));
	}

	 public function driver_taxi_active()
	{
		$no = 1;
		$header = "Ojek";
		$driver = ExtDriver::orderBy('id','desc')->whereType('2')->get();
		return view('dashboard.driver.active', compact('driver','no','header'));
	}

	public function driver_taxi_pending()
	{
		$no = 1;
		$header = "Taxi";
		$driver = BiodataDriver::whereStatus('0')->whereDriver('taxi')->orderBy('id','desc')->get();
		return view('dashboard.driver.pending', compact('driver','no','header'));
	}

	public function driver_taxi_blokir()
	{
		$no = 1;
		$header = "Taxi";
		$driver = BiodataDriver::whereStatus('2')->whereDriver('taxi')->orderBy('id','desc')->get();
		return view('dashboard.driver.blokir', compact('driver','no','header'));
	}
	public function driver_taxi_detail($id)
    {   
    	$header = "Taxi";
        $driver = BiodataDriver::whereUserid($id)->firstOrFail();
        return view('dashboard.driver.detail',compact('driver','header'));
    }

	public function driver_aksi(Request $request, $id)
    {
     
        $driver = BiodataDriver::whereId($id)->firstOrFail();
        $input = $request->all();
        $status = $input['status'];
        $date_update = date('Y-m-d H:i:s');
        if($status==1){
        	
        	$extDriver = ExtDriver::orderBy('userid','desc')->firstOrFail();
        	$userid = $extDriver->userid;
        	$userid++;
        	$pengacak = "THISISSECURE";
  			$convert  = strtolower($userid);
 			$password = md5($pengacak . md5($convert) . $pengacak );
 			$export['picture'] = "null";
 			$export['password'] = $password;
        	$input['userid'] = $userid;
        	$export['userid'] = $userid;
        	$export['name'] = $driver->namapanggilan;
        	$export['email'] = $driver->email;
        	$export['phone'] = $driver->hp;
        	if($driver->jk=="Laki-laki"){
        		$export['gender'] = "m";
        	}else{
        		$export['gender'] = "f";
        	}
        	$export['collateral'] = $driver->jaminan;
        	if($driver->driver=="ojek"){
        	$export['type'] = 1;	
        	}else{
        		$export['type'] = 2;
        	}
        ExtDriver::create($export);
    		$export2['credit'] = 0;
    		$export2['userid'] = $userid;
    		$export2['date_update'] = $date_update;
        	// $extDriver = ExtDriver
        	// $input = $request->all();
       	ExtDriverIncome::create($export2);
    	
        }
        $driver->update($input);
     
        return redirect()->back();
    }
    public function driver_delete($id)
    {
        $driver = BiodataDriver::whereId($id)->firstOrFail();
        $driver->delete();
        return redirect()->back()->with('pesan', 'Driver telah dihapus, mampus koe');
    }


//merchant
    public function merchant_pending()
	{
		$no = 1;
		$merchant = BiodataMerchant::whereStatus('0')->orderBy('id','desc')->get();
		return view('dashboard.merchant.pending', compact('merchant','no'));
	}
	public function merchant_aktif()
	{
		$no = 1;
		$merchant = BiodataMerchant::whereStatus('1')->orderBy('id','desc')->get();
		return view('dashboard.merchant.aktif', compact('merchant','no'));
	}
	public function merchant_non_aktif()
	{
		$no = 1;
		$merchant = BiodataMerchant::whereStatus('2')->orderBy('id','desc')->get();
		return view('dashboard.merchant.non_aktif', compact('merchant','no'));
	}
	public function merchant_detail($id)
    {   
        $merchant = BiodataMerchant::whereId($id)->firstOrFail();
        return view('dashboard.merchant.detail',compact('merchant'));
    }
	public function merchant_aksi(Request $request, $id)
    {
     
        $merchant = BiodataMerchant::whereId($id)->firstOrFail();
        $input = $request->all();
        $merchant->update($input);
     
        return redirect()->back();
    }
	public function merchant_delete($id)
    {
        $merchant = BiodataMerchant::whereId($id)->firstOrFail();
        $merchant->delete();
        return redirect()->back()->with('pesan', 'Merchant telah dihapus, mampus koe');
    }
}
