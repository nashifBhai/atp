<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Worklist;
use App\User;
use App\Transection;
use App\Forgettable;
use App\Customer;
use App\Employee;
use App\Excel;

class HomeController extends Controller
{
  public function validSession($req){

  if($req->session()->has('user')){
    return true;
  }else{
    return false;
  }
}

    public function index(Request $req){

  if($this->validSession($req)){
    return view('home.index');
  }else{
    return redirect()->route('login.index');
  }
  }
  public function MyProfile(Request $req){
          $result =  User::where('username', $req->session()->get('user'))->get();
          return view('home.MyProfile')->with('result',$result);
          
        }

    public function showUser(Request $req,$id){
      $user =  User::where('username', $req->session()->get('user'))
        ->get();
      return view('home.editProfile')->with('user',$user);
        }


     public function updateUser(Request $req, $id){

          $validation = $req->validate([
    
            'name'    => 'required|min:2|max:50',
            'email' => 'required|email|unique:users',
            'phone'    => 'required|numeric',
            'gender' => 'required',
            'username' => 'required|min:2|max:50',
            'password' => 'required|min:3'
            
         ]);

        $user = User::find($id);

        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->gender = $req->gender;
        $user->type = $req->type;
        $user->username = $req->username;
        $user->password = $req->password;

        
        $user->save();

        return redirect()->route('home.MyProfile');
    }

    

    
  public function printview()
      {
            $std = Employee::all();
            return view('show_emp_list')->with('show_emp_list', $std);;
      }


  public function add(){

      return view('home.add');
    }

  public function addService(){

      $user = new Worklist();
      $user->workname = $req->workname;
      $user->save();

      $data = Worklist::where('workname', $req->workname)->get();
      return redirect()->route('home.worklist', $data[0]->userId);
    }


    public function getRegistered(Request $req){

      //$result = DB::table('worklist')->get();
      $result = Worklist::where('status','active')->get();
      return view('home.worklist')->with('std',$result);

     }

     public function RegWorklist(){

      return view('home.RegWorklist');
    }

    public function ShowRegWorklist(Request $req){

      $result = Worklist::where('status','pending')->get();
      return view('home.RegWorklist')->with('std',$result);

     }

    public function getReg(Request $req,$id){

      //$result = DB::table('worklist')->get();
      //$result = Worklist::where('status', 'pending')->first;
      //$result = Worklist::where('status','pending')->first();
      //return view('home.RegWorklist')->with('rstd',$result);
      $order = Worklist::find($id);

      $order->status = 'pending';
      $order->save();
      return redirect()->route('home.RegWorklist');

     }

     public function delelte($id){

      User::destroy($id);
      return redirect()->route('login.index');
    }

     public function empWork(){
      $result = Worklist::all();
      return view('home.empWork')->with('std',$result);

     }

     public function customerHire(Request $req){

      $result = Worklist::all();
      return view('home.customer_hire')->with('std',$result);

     }

     public function UpdateCompleteOrd(Request $req,$id){

      $order = Worklist::find($id);
      $order->status = 'completed';
      $order->save();
      return redirect()->route('home.completeOrder');

     }

     public function ShowForgetPassword(Request $req){

      $result = Forgettable::where('status','false')->get();
      return view('home.forgettable')->with('std',$result);

     }

     public function UpdateForgetPassword(Request $req,$id){

      $order = Forgettable::find($id);
      $order->status = 1;
      $order->save();
      return redirect()->route('home.forgettable');

     }

     public function showEmployeeSalary(Request $req){

      $result = Employee::where('salary_status','false')->get();
      return view('home.salary_status')->with('std',$result);

     }

     public function UpdateEmployeeSalary(Request $req,$id){

      $order = Employee::find($id);
      $order->salary_status = 1;
      $order->save();
      return redirect()->route('home.salary_status');

     }

      public function showReportEmp(Request $req){

      $result = Employee::where('report_status','')->get();
      return view('home.report_status_emp')->with('std',$result);

     }

      public function showReportCustomer(Request $req){

      $result = Customer::where('report_status','')->get();
      return view('home.report_status_customer')->with('std',$result);

     }

     public function showRatingsEmp(Request $req){

      $result = Employee::all();
      return view('home.show_ratings_emp')->with('std',$result);

     }

     public function showRatingsCustomer(Request $req){

      $result = Customer::all();
      return view('home.show_ratings_customer')->with('std',$result);

     }

     public function UpdateReportTempEmp(Request $req,$id){

      $order = Employee::find($id);
      $order->report_status = 'temproray_ban';
      $order->save();
      return redirect()->route('home.report_status_emp');

     }

     public function UpdateReportParEmp(Request $req,$id){

      $order = Employee::find($id);
      $order->report_status = 'parmanent_ban';
      $order->save();
      return redirect()->route('home.report_status_emp');

     }

     public function UpdateReportTempCustomer(Request $req,$id){

      $order = Customer::find($id);
      $order->report_status = 'temproray_ban';
      $order->save();
      return redirect()->route('home.report_status_customer');

     }

     public function UpdateReportParCustomer(Request $req,$id){

      $order = Customer::find($id);
      $order->report_status = 'parmanent_ban';
      $order->save();
      return redirect()->route('home.report_status_customer');

     }


     public function cancleOrd(){

      return view('home.cancleOrder');

     }

     public function ShowCancleOrd(Request $req){

      $result = Worklist::where('status','cancelled')->get();
      return view('home.cancleOrder')->with('std',$result);

     }

     public function UpdateCancleOrd(Request $req,$id){

      $order = Worklist::find($id);
      $order->status = 'cancelled';
      $order->save();
      return redirect()->route('home.cancleOrder');

     }

     public function editProfile(Request $req,$id){
      $user =  User::where('username', $req->session()->get('user'))
        ->get();
      return view('home.editProfile')->with('user',$user);
     }


     

    public function editEmployee($id){

    $std = Employee::find($id);
    return view('home.editEmployee', ['std'=>$std]);
    }

    public function updateEmployee(Request $req, $id){

      $user = Employee::find($id);

      $user->username = $req->username;
      $user->name = $req->name;
      $user->save();

    return redirect()->route('home.show_emp_list');
    }
  public function deleteEmployee($id){

    $std = Employee::find($id);
    return view('home.deleteEmployee', ['std'=>$std]);
    }

    public function destroyEmployee($id){

    User::destroy($id);
    return redirect()->route('home.show_emp_list');
  }


     public function showEarn(){

      return view('home.earning');

     }
     public function showEmployee(){

      return view('home.employeelist');

     }

      
     public function showEmp(Request $req){

      $result = Employee::all();
      return view('home.show_emp_list')->with('std',$result);

     }
     public function showCustomer(Request $req){

      $result = Customer::all();
      return view('home.show_customer_list')->with('std',$result);

     }

     



     
}