<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
        $cruds = crud::all();  
    return view('show', compact('cruds'));  
    }
    public function store(Request $request){

        $password= Hash::make($request->password);
        $data = $request->only('name','email');
        $data['password'] = $password;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file->move(\public_path("/file"), $filename);
            $path = $file->storeAs('public/file', $filename);
            $data['images'] = $filename;
            
        }  
        $Product = Crud::create($data);
        return view('login');
         
    }
    // public function store(Request $request)
    // {
    //     // $request->validated();
    
    //     $data = $request->only('name', 'catagory', 'description');
        
    //     // Check if there are any files uploaded
    //     if ($request->hasFile('images')) {
    //         $images = [];
    //         foreach ($request->file('images') as $image) {
    //             $extension = $image->getClientOriginalExtension();
    //             $filename = time() . '_' . uniqid() . '.' . $extension;
    //             $path = $image->storeAs('public/files', $filename); // Store image in storage/app/public/files directory
    //             $images[] = $filename; // Store the filename in an array
    //         }
    //         $data['images'] = json_encode($images); // Save all image filenames as JSON string
    //     }
    
    //     $data['product_id'] = 123456;
    //     $data['creator'] = Auth::guard('web')->id();
        
    //     $product = Product::create($data);
    
    //     if ($product) {
    //         $response = [
    //             'status' => 'ok',
    //             'success' => true,
    //             'message' => 'Record created successfully!'
    //         ];
    //     } else {
    //         $response = [
    //             'status' => 'error',
    //             'success' => false,
    //             'message' => 'Record creation failed!'
    //         ];
    //     }
    
    //     return redirect()->back()->with($response);
    // }
    public function edit($id)  
{  
 $crud= crud::find($id);  
 return view('edit', compact('crud'));  
}
public function update(Request $request, $id)  
{  
    
    $request->validate([  
        'name'=>'required',  
        'email'=>'required',  
        // 'password'=>'required'
         
    ]);  

    $crud = crud::find($id);  
    $crud->name =  $request->get('name');  
    $crud->email = $request->get('email');  

    // $crud->password = $request->get('password');  
    
    $crud->save();  
    return redirect()->back();
}  
public function destroy($id){
    $crud= crud::find($id);
    $crud->delete();
    return redirect()->route('show');
}
}




