<?php

namespace App\Http\Controllers;
use App\Models\project;
use App\Models\categorie;
use App\Models\post_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class projectController extends Controller
{
    public function index()
    {
        $projects = project::join('post_categories','projects.id','post_id')->join('categories','categories.categori_id','post_categories.categori_id')->orderBy('projects.created_at','ASC')->get();
        
        return view('backend.project.index',compact('projects'));
    }

    public function create()
    {
        $categories = categorie::get();
        return view('backend.project.create',compact('categories'));
    } 

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required|unique:projects'
        ]);
        
        if ($request->hasFile('file')) {
            $imageName = 'thumb-'.time().uniqid().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path('images'), $thumbName);
        
        }else{
            $thumbName = NULL;
        }


        project::create([
            'title'  =>$request->title,
            'short_description' => $request->short_description,
            'details'  => $request->details,
            'thumb'    => $thumbName,
            'location' => $request->location,
            'year'     => $request->year,
            'slug'     => str_slug($request->title),
            'latlong'  => $request->latlong,
            'scale'    => $request->scale
        ]);

        $project = project::where('slug',str_slug($request->title))->first();

        post_categorie::create([
            'categori_id' => $request->categori,
            'post_id'     => $project->id,
        ]);



        return redirect()->route('projects.index');
    }

    public function uploadFile(Request $request){

        // $input = Input::all();
		// $rules = array(
		//     'file' => 'image|max:3000',
		// );

		// $validation = Validator::make($input, $rules);

		// if ($validation->fails())
		// {
		// 	return Response::make($validation->errors->first(), 400);
		// }

		// $file = Input::file('file');

        // $extension = File::extension($file['name']);
        // $directory = path('public').'uploads/'.sha1(time());
        // $filename = sha1(time().time()).".{$extension}";

        // $upload_success = Input::upload('file', $directory, $filename);

        // if( $upload_success ) {
        // 	return Response::json('success', 200);
        // } else {
        // 	return Response::json('error', 400);
        // }
        // $path = public_path('images');

        // !file_exists($path) && mkdir($path, 0777, true);

        // $file = $request->file('file');
        // $name = uniqid() . '_' . trim($file->getClientOriginalName());
        // $file->move($path, $name);

        // return response()->json([
        //     'name'          => $name,
        //     'original_name' => $file->getClientOriginalName(),
        // ]);

        $data = array();

          $validator = Validator::make($request->all(), [
               'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
          ]);

          if ($validator->fails()) {
 
              $data['success'] = 0;
              $data['error'] = $validator->errors()->first('file');// Error response

          }else{
               if($request->file('file')) {

                   $file = $request->file('file');
                   $filename = time().'_'.$file->getClientOriginalName();

                    // File upload location
                    $location = public_path('images');

                    // Upload file
                    $file->move($location,$filename);

                    // Response
                    $data['success'] = 1;
                    $data['message'] = 'Uploaded Successfully!';

               }else{
                     // Response
                     $data['success'] = 0;
                     $data['message'] = 'File not uploaded.'; 
               }
          }

           return response()->json($data);
     
   }


    public function edit(project $project)
    {
        $categories = categorie::get();
        $project= project::findOrFail($project->id);
        return view('backend.project.edit',compact('project','categories'));
    }

    public function update(Request $request, project $project)
    {
        $projects =  project::findOrFail($project->id);
        $projects->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'details'           => $request->details,
            'thumb'             => $request->thumb,
            'location'          => $request->location,
            'year'              => $request->year,
            'slug'              => str_slug($request->title),
            'latlong'           => $request->latlong,
            'scale'             => $request->scale,

        ]);

        return redirect()->route('projects.index');
    }

    public function show()
    {

    }

    public function destroy(project $project)
    {
        $projects = project::findOrFail($project->id);

        // if(file_exists(public_path('images/') . $projects->thumb)){
        //     unlink(public_path('images/') . $projects->thumb);
        // }

        $projects->delete();

        return back()->with(['message' => 'Post deleted successfully!']);
    } 

    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = str_slug($fileName).'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);

            $CKeditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKeditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset-utf-8');
            echo $response;
        }
    }
}
