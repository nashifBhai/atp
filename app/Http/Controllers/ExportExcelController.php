<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use Customer;

class ExportExcelController extends Controller
{
    function index()
    {
     $customer_data = DB::table('customer')->get();
     return view('export_excel')->with('customer_data', $customer_data);
    }

    function excel()
    {
     $customer_data = DB::table('customer')->get()->toArray();
     $customer_array[] = array('id', 'name', 'contact', 'username', 'password');
     foreach($customer_data as $customer)
     {
      $customer_array[] = array(
       'id'  => $customer->id,
       'name'   => $customer->name,
       'contact'    => $customer->contact,
       'Postal Code'  => $customer->username,
       'password'   => $customer->password
      );
     }
     Excel::create('Customer Data', function($excel) use ($customer_array){
      $excel->setTitle('Customer Data');
      $excel->sheet('Customer Data', function($sheet) use ($customer_array){
       $sheet->fromArray($customer_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }
}

?>
