<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\studentrecord;

use Illuminate\Support\Facades\Input;

use DB;
use App\Quotation;
use Illuminate\View\View;
use Validator;



class WelcomeController extends BaseController
{
		//Index page Method
			function hello()
            {
				return view('hello');
			}
			
		//Sending student datas to the database 	
			public function  add(Request $request)
			{
//                $this->validate($request,[
//                    'stuName' => 'required',
//                    'stuIndex' => 'required',
//                    'stuAddress' => 'required'
//                ]);

				echo 'Add';

				$student = new studentrecord;
				
				$student ->stuName = Input::get("stuName");
				$student ->stuIndex = Input::get("stuIndex");
				$student ->stuAddress = Input::get("stuAddress");

                $v = Validator::make($request->all(), [
                    'stuName' => 'required',
                    'stuIndex' => 'required|unique:student|max:255',
                    'stuAddress' => 'required',
                ]);

                if ($v->fails())
                {
                    return redirect()->back()->withErrors($v->errors());
                }else {
                    $student ->save();
                    return redirect()->back()->with('data', 'Successfully Registered');
                }


				//$input = Request::all();
			}

			//public function
			
			public function show()
			{
				//Getting and displaying student details from database
				$data['data'] = DB::table('student') ->get();
				
				if(count($data) > 0)
				{
					return view('add', $data);
				}else{echo 'No data found!!!......';
				}
			}

			//get a entry using its Index
			public function editStu($index)
			{
				$data= (studentrecord::where('stuIndex', $index)->get());
				return View ('edit')->with(['data' => $data]);
			}
			
			//Search and get a single database entry
			public function editStud(Request $request)
			{
				$data= (studentrecord::where('stuIndex', $request->sIndex)->get());
				return View ('edit')->with(['data' => $data]);
			}
			
			public function updateStu(Request $request)
			{
				//return $request->all();
				/* $data= (studentrecord::where('stuIndex', $request->sIndex , 'stuName', $request-> $sName, 'stuAddress', $request->sAddress)->get());
				$data -> update(); */
				
				 studentrecord::where('stuIndex', $request->input("stu_index"))
									->update([
										'stuName' => $request->input("stu_name"),
										//'stuIndex' => $request->input("stu_index"),
										'stuAddress' => $request->input("stu_address")
									]);
				
				/*$student = new studentrecord::find("stu_index", $request->input("stu_index"));
				
				$student ->stuName = $request->input("stu_name");
				$student ->stuIndex = $request->input("stu_index");
				$student ->stuAddress = $request->input("stu_address");
				
				$student ->save();*/
				
				
				/*$sName= Input::get('stu_name');
				$sIndex1 = Input::get('stu_index');
				$sAddress = Input::get('stu_address');*/
				
				//$students -> save();
				
				/* $uData = $request -> all();
				
				studentrecord::find($sIndex) -> updateStu($uData); */
				
				/*DB::table('studentrecord')
				->where('stu_index',$sIndex1)
				->save(['stu_index' => $sIndex1,'stu_name' =>  $sName, 'stu_address' => $sAddress]); */

                $data['data'] = DB::table('student') ->get();
				
				return view('add' , $data);
				
			}
			
			public function delete(Request $request, $index)
			{
                studentrecord::where(['stuIndex' => $index])->get();
               studentrecord::where(['stuIndex'=> $index])->delete();


//                $delStu = studentrecord::where('stuIndex', $request->input("stu_index"));
//                            $delStu -> delete();


               // $student = studentrecord::where('stuIndex',$request->input("stu_index"));

//                $student ->stuName = Input::get("stuName");
//                $student ->stuIndex = Input::get("stuIndex");
//                $student ->stuAddress = Input::get("stuAddress");

             //   $student ->delete();


//                    ->delete([
//                       // 'stuName' => $request->input("stu_name"),
//                        'stuIndex' => $request->input("stu_index"),
//                       // 'stuAddress' => $request->input("stu_address")
//                    ]);

               //$data['data'] = DB::table('student') ->get();
                $data['data'] = DB::table('student') ->get();
                return view('add' , $data);
               // return $request -> all();
			}
			
			
			public function edit()
			{
				$data['data'] = DB::table('student') ->get();
				
				if(count($data) > 0)
				{
			
					return view('add', $data);
				}else{
					return View("Details not found!!!.......");
				}
				
			}
			
			
			public function listAll()
			{
				echo 'List';
				return view('details');
			}
			
			
			public function store()
			{
				$input = Request::all();
				
				return $input;
			}
}
