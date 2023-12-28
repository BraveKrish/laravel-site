<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        $courses = DB::table('courses')->get();
        return view("Frontend.courses",['courses' => $courses]);
    }

    public function courses_details($slug){
        $course = DB::table('courses')->where('slug', $slug)->first();
        return view("Frontend.courses_details",['course' => $course]);
    }

    public function AddCourse(){
        return view('Dashboard.Course.Add');
    }

    private function generateSlug($text) {
        // Replace non-letter or non-digits with '-'
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    
        // Transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
        // Remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
    
        // Trim dashes from beginning and end
        $text = trim($text, '-');
    
        // Make lowercase
        $text = strtolower($text);
    
        if (empty($text)) {
            return 'n-a';
        }
    
        return $text;
    }
    

    public function InsertCourse(Request $req){

        $slug = $this->generateSlug($req->course_name);
        $file_name = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
        $course = DB::table('courses');
        $course->insert([
            'course_name' => $req->course_name,
            'slug' => $slug,
            'description' => $req->description,
            'course_category' => $req->course_category,
            'image_url' => $file_name,
            'price' => $req->price
        ]);
        if($course){
            return redirect()->route('ourCourse');
        }else{
            // echo '<div class="alert alert-danger" role="alert' . ($req-> course_category) . '">' . ($req->description) . '</div>';
            echo "data not inserted successfully";
        }
    }

    public function displayCourse(){
        $courses = DB::table('courses')->get();
        // return $course; // json response
        // dd($course);
        // dump($course);
        return view('Dashboard.Course.Course',['data'=>$courses]);
        // return redirect()->route('ourCourse',['data'=>$courses]);  
    }

    public function singleCourse($id){
        // $course = DB::table('courses')->where('id',$id)->get();
        $course = DB::table('courses')->where('id',$id)->first();
        return view('Dashboard.Course.View',['course'=>$course]);
    }

    public function update($id){
        $course = DB::table('courses')->find($id);
        return view('Dashboard.Course.Update',['course'=>$course]);
    }

    public function updateCourse(Request $req, $id){
        $file_name = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);
        $course = DB::table('courses');
        $course->where('id',$id)->update([
            'course_name' => $req->course_name,
            'description' => $req->description,
            'course_category' => $req->course_category,
            'image_url' => $file_name,
            'price' => $req->price
        ]);
        if($course){
            // echo "<h1>Data Updated successfully</h1>";
            return redirect()->route('ourCourse');
        }else{
            echo "<h1>Data not Updated</h1>";
        }
    }

    public function deleteCourse($id){
        $course = DB::table('courses')->where('id',$id)->delete();
        if($course){
            return redirect()->route('ourCourse');
        }else{
            echo "data not deleted";
        }

    }
}
