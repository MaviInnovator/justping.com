<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class AdminBrandController extends Controller
{
    public function index()
    {
        $brand = Brand::orderBy('id','asc')->get();
        return view('admin.brand.index',compact('brand'));
    }

    public function create()
    {
         $icons = Category::orderBy('id','asc')->get();
       
         $subcat = Subcategory::orderBy('id','asc')->get();
        return view('admin.brand.create', compact('icons','subcat'));
    }

    public function store(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $request->validate([
            'photo' => ['required','mimes:jpeg,png,gif'],
            'banner' => ['required','mimes:jpeg,png,gif'],
        ],[
            'photo.required' => __('Icon is required'),
            'photo.mimes' => __('Icon must be jpeg, png, jpg or gif'),
            'banner.required' => __('Banner is required'),
            'banner.mimes' => __('Banner must be jpeg, png, jpg or gif'),
        ]);

        $obj = new Brand();

        $photo_name = 'photo'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $photo_name);
        $obj->photo = $photo_name;
        
        $banner_name = 'banner_'.time().'.'.$request->banner->extension();
        $request->banner->move(public_path('uploads'), $banner_name);
        $obj->banner = $banner_name;
        
        $name = $request->input('name');
            // Generate slug
            $slug = Str::slug($name);
    
       $obj->name=$name;
        $obj->slug=$slug;
        $obj->pincode=$request->pincode;
        $obj->building_number=$request->building_number;
        $obj->street_number=$request->street_number;
        $obj->area_name=$request->area_name;
        $obj->landmark=$request->landmark;
        $obj->city=$request->city;
        $obj->state=$request->state;
        $obj->location=$request->location;
        $obj->presence_other_country=$request->presence_other_country;
        $obj->gst=$request->gst;
        $obj->pan_no=$request->pan_no;
        $obj->year_of_coperation=$request->year_of_coperation;
        $obj->tan_no=$request->tan_no;
        $obj->turn_over=$request->turn_over;
        $obj->no_of_emp=$request->no_of_emp;
        $obj->title=$request->title;
        $obj->contact_person=$request->contact_person;
        $obj->official_number=$request->official_number;
        $obj->whatsapp_number=$request->whatsapp_number;
        $obj->email=$request->email;
        $obj->facebook=$request->facebook;
        $obj->twitter=$request->twitter;
        $obj->instagram=$request->instagram;
        $obj->linkedin=$request->linkedin;
        $obj->days=json_encode($request->days);
        $obj->open_at=$request->open_at;
        $obj->close_at=$request->close_at;
        $obj->category=$request->category;
        $obj->subcategory=json_encode($request->subcategory);
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_brand_index')->with('success', __('Data is added successfully'));
    }

    public function edit($id)
    {
        $brands = Brand::find($id);
    $selectedDays = json_decode($brands->days, true) ?? []; 
    
    // Ensure it's an array
    $selectedSubcategories =  json_decode($brands->subcategory, true) ?? [];

        $icons = Category::orderBy('id','asc')->get();
         $subcat = Subcategory::orderBy('id','asc')->get();
     // echo "<pre>"; print_r($selectedSubcategories); die;
        return view('admin.brand.edit', compact('brands', 'icons','selectedDays','subcat','selectedSubcategories'));
    }

    public function update(Request $request, $id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $obj = Brand::find($id);
        if($request->photo != null) {
            $request->validate([
                'photo' => ['mimes:jpeg,png,gif'],
            ],[
                'photo.mimes' => __('Photo must be jpeg, png, jpg or gif'),
            ]);
            if($obj->photo) {
                unlink(public_path('uploads/'.$obj->photo));
            }
            $photo_name = 'photo_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $photo_name);
            $obj->photo = $photo_name;
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
$name = $request->input('name');
            // Generate slug
            $slug = Str::slug($name);
    
       $obj->name=$name;
        $obj->slug=$slug;
        $obj->pincode=$request->pincode;
        $obj->building_number=$request->building_number;
        $obj->street_number=$request->street_number;
        $obj->area_name=$request->area_name;
        $obj->landmark=$request->landmark;
        $obj->city=$request->city;
        $obj->state=$request->state;
        $obj->location=$request->location;
        $obj->presence_other_country=$request->presence_other_country;
        $obj->gst=$request->gst;
        $obj->pan_no=$request->pan_no;
        $obj->year_of_coperation=$request->year_of_coperation;
        $obj->tan_no=$request->tan_no;
        $obj->turn_over=$request->turn_over;
        $obj->no_of_emp=$request->no_of_emp;
        $obj->title=$request->title;
        $obj->contact_person=$request->contact_person;
        $obj->official_number=$request->official_number;
        $obj->whatsapp_number=$request->whatsapp_number;
        $obj->email=$request->email;
        $obj->facebook=$request->facebook;
        $obj->twitter=$request->twitter;
        $obj->instagram=$request->instagram;
        $obj->linkedin=$request->linkedin;
        $obj->days=json_encode($request->days);
        $obj->open_at=$request->open_at;
        $obj->close_at=$request->close_at;
        $obj->category=$request->category;
        $obj->subcategory=json_encode($request->subcategory);
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->update();

        return redirect()->route('admin_brand_index')->with('success', __('Data is updated successfully'));
    }

    public function destroy($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }
        
        $obj = Brand::find($id);
        if($obj->photo) {
            unlink(public_path('uploads/'.$obj->photo));
        }
        if($obj->banner) {
            unlink(public_path('uploads/'.$obj->banner));
        }
        $obj->delete();

        return redirect()->route('admin_brand_index')->with('success', __('Data is deleted successfully'));
    }
    
      public function destroy_banner($id)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('info', env('PROJECT_NOTIFICATION'));
        }

        $brand = Brand::find($id);
        unlink(public_path('uploads/'.$brand->banner));
        $brand->banner = null;
        $brand->update();

        return redirect()->back()->with('success', __('Data is deleted successfully'));
    }

}
