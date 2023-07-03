<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Module;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Carbon;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::latest()->get();
        return view('admin.module.module', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('category', 'ASC')->get();
        return view('admin.module.module_add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(430, 327)->save('upload/module/' . $name_gen);
        $save_url = 'upload/module/' . $name_gen;

        Module::insert([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Module Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.module')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modules = Module::findOrFail($id);
        $categories = Category::orderBy('category', 'ASC')->get();
        return view('admin.module.module_edit', compact('modules', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(430, 327)->save('upload/module/' . $name_gen);
            $save_url = 'upload/module/' . $name_gen;

            Module::findOrFail($blog_id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $save_url,

            ]);
            $notification = array(
                'message' => 'Module Updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.module')->with($notification);
        } else {

            Module::findOrFail($blog_id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,

            ]);

            $notification = array(
                'message' => 'Module Updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('all.module')->with($notification);
        } // end Else

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modules = Module::findOrFail($id);
        $img = $modules->image;
        unlink($img);

        Module::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Module Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);       

     } // End Method 



     public function BlogDetails($id){

        $allblogs = Module::latest()->limit(5)->get();
        $blogs = Module::findOrFail($id);
        $categories = Category::orderBy('category','ASC')->get();
        return view('frontend.blog_details',compact('blogs','allblogs','categories'));

     } // End Method 


     public function CategoryBlog($id){

        $blogpost = Module::where('category_id',$id)->orderBy('id','DESC')->get();
        $allblogs = Module::latest()->limit(5)->get();
        $categories = Category::orderBy('category','ASC')->get();
        $categoryname = Category::findOrFail($id);
        return view('frontend.cat_blog_details',compact('blogpost','allblogs','categories','categoryname'));

     } // End Method 

     public function HomeBlog(){

        $categories = Category::orderBy('category','ASC')->get();
        $allblogs = Module::latest()->paginate(3);
        return view('frontend.blog',compact('allblogs','categories'));

     } // End Method 

    }

