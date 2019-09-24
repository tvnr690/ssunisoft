<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\category;
use App\sub_category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories = sub_category::all();
        // echo  "<pre>";
        $categories = DB::table('categories')
                        ->join('sub_categories', 'categories.id', '=', 'sub_categories.cat_id')
                        ->select('sub_categories.*', 'categories.cat_name')
                        ->get();
        // dd($category);
        // print_r($sub_categories->cat_id);exit;
        // $categories = category::where('id', '=', $sub_categories['cat_id'])->get();
        return view('multiauth::sub_category.index', compact('categories', 'sub_categories' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();

        return view('multiauth::sub_category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['sub_cat_name' => 'required', 'sub_cat_slug' => 'required']);
        sub_category::create($request->all());
        return redirect(route('admin.sub_category'))->with('message', 'New Sub Category is stored successfully successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function edit(sub_category $sub_category)
    {
        $categories = category::all();
        return view('multiauth::sub_category.edit', compact('sub_category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sub_category $sub_category)
    {
        $request->validate(['sub_cat_name' => 'required', 'sub_cat_slug' => 'required']);
        $sub_category->update($request->all());
        return redirect(route('admin.sub_category'))->with('message', 'You have updated Sub Category successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sub_category  $sub_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(sub_category $sub_category)
    {
        $sub_category->delete();
        return redirect()->back()->with('message', 'You have deleted Sub Category successfully');
    }
}
