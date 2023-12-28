<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use validator;

class BlogController extends Controller
{
    public function index(){
        return view("Frontend.blog");
    }

    public function BlogDetail(){
        return view("Frontend.blog_details");
    }

    public function Blog(){
        return view("Dashboard.Blog.Blogs");
        // $blogs = DB::table('blog')->get();
        // return view('Dashboard.Blog.Blogs',['data' => $blogs]);
    }


    public function storeBlog(Request $req){
        // print_r($_POST);
        // print_r($_FILES);

        $file = $req->file('image');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/images',$fileName);

        $blogData = [
            'title'=>$req->blog_title,
            'description'=>$req->description,
            'category'=>$req->blog_category,
            'image_url'=>$fileName
        ];

        $blog_title = $req->input('blog_title');

        $query = DB::table('blog')->insert($blogData);
        return response()->json([
            'status'=> 200,
            'title'=>$blog_title
        ]);

    }

    // fetch all blog
    // public function fetchBlogs(){
    //     $blogs = DB::table('blog')->get();
    //     // print_r($blogs); exit;
    //     $output = '';
    //     if($blogs->count() > 0){
    //         // return response([
    //         //     'blogs'=>$blogs
    //         // ]);
    //         $output.='<table class="table table-striped table-bordered table-responsive table-sm">
    //         <thead>
    //            <tr>
    //             <th>Id</th>
    //             <th>Title</th>
    //             <th>Description</th>
    //             <th>Image</th>
    //             <th>Action</th>
    //            </tr>
    //         </thead>
    //         <tbody>';
    //         foreach($blogs as $blog){
    //             $output .='<tr>
    //                <td>' . $blog->id . '</td>
    //                <td>' . $blog->title . '</td>
    //                <td>' . $blog->description . '</td>
    //                <td>image</td>
    //                <td> Edit delete</td>.' . "\n";
                   

    //         }

    //         $output .='</tbody></table>';
    //         echo $output;
    //         // return response()->json([
    //         //     'data' => $blogs
    //         // ]);
    //     }
    // }

    public function fetchBlogs(){
        $blogs = DB::table('blog')->get();
        // print_r($blogs); exit;
        $output = '';
        if($blogs->count() > 0){
            // return response([
            //     'blogs'=>$blogs
            // ]);
            $output.='<table class="table table-striped table-bordered table-responsive table-sm">
            <thead>
               <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Category</th>
                <th>Action</th>
               </tr>
            </thead>
            <tbody>';
            foreach($blogs as $blog){
                $output .='<tr>
                <th scope="row">' . $blog->id . '</th>
                <td>' . $blog->title . '</td>
                <td>' . $blog->description . '</td>
                <td>
                  <img height="50px" width="auto" src="storage/images/'.$blog->image_url.'" alt="image">
                </td>
                <td>' . $blog->category . '</td>
                <td>
                  <a href="" class="btn btn-info">View</a>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>';
                   

            }

            $output .='</tbody></table>';
            echo $output;
            // return response()->json([
            //     'data' => $blogs
            // ]);

//             <table class="table">
//   <thead>
//     <tr>
//       <th scope="col">#</th>
//       <th scope="col"> Title</th>
//       <th scope="col">Description</th>
//       <th scope="col">Image</th>
//       <th scope="col">Category</th>
//       <th scope="col">Action</th>
//     </tr>
//   </thead>
//   <tbody>
//    {{-- @foreach ($data as $id => $course) --}}
//     <tr>
//       <th scope="row">1</th>
//       <td>blog</td>
//       <td>descrip</td>
//       <td>
//         <img height="50px" width="auto" src="" alt="image">
//       </td>
//       <td>category</td>
//       <td>
//         <a href="" class="btn btn-info">View</a>
//         <a href="" class="btn btn-warning">Edit</a>
//         <a href="" class="btn btn-danger">Delete</a>
//       </td>
//     </tr>
//     {{-- @endforeach --}}
//   </tbody>
// </table>
        }
    } 
    

    // public function storeBlog(Request $req){
    //     $req->validate([
    //         'blog_title' => 'required',
    //         'description' => 'required',
    //         'blog_category' => 'required',
    //         'image' => 'required'
    //     ]);

        // if(!$val){
        //     return response()->json(['errors'=>$val]);

        // }
        // $blogs = $req->all();
       
        // return response()->json($blogs);

    // }

    // public function storeBlog(Request $req){
    //     // $val = $req->validate([
    //         // 'blog_title' => 'required',
    //         // 'description' => 'required',
    //         // 'blog_category' => 'required',
    //         // 'image' => 'required'
    //     // ]);

    //     $val = validator()->make($req->all(),[
    //         'blog_title' => 'required',
    //         'description' => 'required',
    //         'blog_category' => 'required',
    //         'image' => 'required'
    //     ]);

    //     if($val->fails()){
    //         // return response()->json(['status'=>0, 'error'=>$val]);
    //         $errors = $val->errors()->toArray();
    //         return response()->json([
    //             'status' => 0,
    //             'errors' => $errors,
    //             'message' => 'Validation failed. Please check the form for errors.'
    //         ], 422);
          
    //     }else{
    //         $values = [
    //             'title' => $req->blog_title,
    //             'description' => $req->description,
    //             'category' => $req->blog_category,
    //             'image_url' => $req->image
    //         ];

    //         $blog = DB::table('blog')->insert($values);
    //         if($blog){
    //             return response()->json(['status'=>1,'msg'=>"New Blog Added Successfully"]);
    //         }
    //     }

    // }




}



