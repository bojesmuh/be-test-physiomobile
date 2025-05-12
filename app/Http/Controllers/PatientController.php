<?php

namespace App\Http\Controllers;

//import Http request
use Illuminate\Http\Request;
//import model 
use App\Models\Patient;
use App\Models\User;
//import facade Validator
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->query('perPage', 10);
        $patients = Patient::with('user')->paginate($perPage);
        $data = [];
        if ( $patients->count() > 0) {
            foreach ($patients as $key => $value) {
                $data[] = [
                    'name' => $value->user->name,
                    'id_type' =>$value->user->id_type,
                    'id_no' =>$value->user->id_no,
                    'gender' =>$value->user->gender,
                    'dob' =>$value->user->dob,
                    'address' =>$value->user->address,
                    'medium_acquisition' =>$value->medium_acquisition,
                ];
            }
            return response()->json([
                'code'  => 200,
                'message' => 'success',
                'data'  => $data
            ], 200);
        }

        return response()->json([
            'code'  => 404,
            'message' => 'patients not found',
            'data'  => $data
        ], 404);        
    }
    
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'            => 'required',
            'id_type'            => 'required',
            'id_no'              => 'required',
            'gender'             => 'required',
            'dob'                => 'required',
            'address'            => 'required',
            'medium_acquisition' => 'required',
        ]);
        
        //check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'code'    => 422, 
                'message' => 'Validation errors', 
                'data'    => $validator->errors()
            ],422);
        }
        //create user
        $user = User::create([
            'name' => $request->name,
            'id_type' => $request->id_type,
            'id_no' => $request->id_no,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
        ]);
        
        if ($user) {
            $patient = Patient::create([
                'user_id' => $user->id,
                'medium_acquisition'         => $request->medium_acquisition,
            ]);
            
            if(!$patient) {
                return response()->json([
                    'code'    => 404, 
                    'message' => 'errors', 
                    'data'    => 'No patients found in database'
                ],404);
            }
            
            //success
            return response()->json([
                'code'    => 200, 
                'message' => 'success', 
                'data'    => $user
            ],200);
            
        } else {
            return response()->json([
                'code'    => 404, 
                'message' => 'errors', 
                'data'    => 'No patients found in database'
            ],404);
        }
        
    }
    public function show($id)
    {
        //find post by ID
        $patient = Patient::with('user')
            ->where('user_id', $id)
            ->first();
        if ($patient) {
            $data= [
                'name' => $patient->user->name,
                'id_type' =>$patient->user->id_type,
                'id_no' =>$patient->user->id_no,
                'gender' =>$patient->user->gender,
                'dob' =>$patient->user->dob,
                'address' =>$patient->user->address,
                'medium_acquisition' =>$patient->medium_acquisition,
            ];
            return response()->json([
                'code'    => 200, 
                'message' => 'success', 
                'data'    => $data
            ],200);
        }

         return response()->json([
            'code'  => 404,
            'message' => 'patients not found',
            'data'  => $patient
        ], 404);
    }

    public function update(Request $request, $id)
    {
         //define validation rules
        $validator = Validator::make($request->all(), [
            'name'            => 'required',
            'id_type'            => 'required',
            'id_no'              => 'required',
            'gender'             => 'required',
            'dob'                => 'required',
            'address'            => 'required',
            'medium_acquisition' => 'required',
        ]);
        
        //check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'code'    => 422, 
                'message' => 'Validation errors', 
                'data'    => $validator->errors()
            ],422);
        }

        $patients = Patient::with('user')
            ->where('user_id', $id)
            ->first();
        if($patients) {
            // Update User Data
             $user = User::find($id);
             $user->update([
                'name' => $request->name ?? $user->name,
                'email' => $request->email ?? $user->email,
                'id_type' => $request->id_type ?? $user->id_type,
                'id_no' => $request->id_no ?? $user->id_no,
                'gender' => $request->gender ?? $user->gender,
                'dob' => $request->dob ?? $user->dob,
                'address' => $request->address ?? $user->address,
            ]);

            // Update Patient Data
            $patients->update([
                'medium_acquisition' => $request->medium_acquisition ?? $patients->medium_acquisition,
            ]);

            return response()->json([
                'code'    => 200, 
                'message' => 'success', 
                'data'    => null
            ],200);

        }

        return response()->json([
            'code'  => 404,
            'message' => 'patients not found',
            'data'  => null
        ], 404);

    }

    public function destroy($id)
    {
        $users = User::find($id);
        if ($users) {
             $users->delete();
             return response()->json([
                'code'    => 200, 
                'message' => 'patients deleted success', 
                'data'    => null
            ],200);
        }
        
        return response()->json([
            'code'  => 404,
            'message' => 'patients not found',
            'data'  => $users
        ], 404);
        
    }
}
