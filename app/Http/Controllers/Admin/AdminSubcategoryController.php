<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminSubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::orderBy('id','asc')->get();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    public function create()
    {
        
        $categories = Category::orderBy('id','asc')->get();
        return view('admin.subcategory.create',compact('categories'));
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            
            'category' => ['required'],
            'icon' => ['required','mimes:jpeg,png,gif'],
            'banner' => ['required','mimes:jpeg,png,gif'],
        ],[
            'icon.required' => __('Icon is required'),
            'icon.mimes' => __('Icon must be jpeg, png, jpg or gif'),
            'banner.required' => __('Banner is required'),
            'banner.mimes' => __('Banner must be jpeg, png, jpg or gif'),
        ]);

        $obj = new Subcategory();

        $icon_name = 'icon_'.time().'.'.$request->icon->extension();
        $request->icon->move(public_path('uploads'), $icon_name);
        $obj->icon = $icon_name;
        
        $banner_name = 'banner_'.time().'.'.$request->banner->extension();
        $request->banner->move(public_path('uploads'), $banner_name);
        $obj->banner = $banner_name;
         $obj->name = $request->name;
        $obj->cat_id = $request->category;
        $obj->slug = $request->slug;
        $obj->save();

        return redirect()->route('admin_subcategory_index')->with('success', __('Data is added successfully'));
    }

    public function edit($id)
    {
        
        $categories = Category::orderBy('id','asc')->get();
        $subcategories = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategories','categories'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Subcategory::find($id);
        if($request->icon != null) {
            $request->validate([
                'icon' => ['mimes:jpeg,png,gif'],
                'category' => ['required'],
            ],[
                'icon.mimes' => __('Photo must be jpeg, png, jpg or gif'),
            ]);
            if($obj->icon) {
                unlink(public_path('uploads/'.$obj->icon));
            }
            $icon_name = 'icon_'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('uploads'), $icon_name);
            $obj->icon = $icon_name;
        }
             if($request->banner != null) {
            $request->validate([
                'banner' => ['mimes:jpeg,png,gif'],
            ],[
                'banner.mimes' => __('banner must be jpeg, png, jpg or gif'),
            ]);
            if($obj->banner) {
                unlink(public_path('uploads/'.$obj->banner));
            }
            $banner_name = 'banner_'.time().'.'.$request->banner->extension();
            $request->banner->move(public_path('uploads'), $banner_name);
            $obj->banner = $banner_name;
        }

        $obj->cat_id = $request->category;
        $obj->slug = $request->slug;
        $obj->name = $request->name;
        $obj->update();

        return redirect()->route('admin_subcategory_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Subcategory::find($id);
        if($obj->icon) {
            unlink(public_path('uploads/'.$obj->icon));
        }
        if($obj->banner) {
            unlink(public_path('uploads/'.$obj->banner));
        }
        $obj->delete();

        return redirect()->route('admin_subcategory_index')->with('success', __('Data is deleted successfully'));
    }
}
