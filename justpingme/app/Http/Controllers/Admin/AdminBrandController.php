<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Validation\Rule;

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
       
        return view('admin.brand.create', compact('icons'));
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
        
        $obj->name = $request->name;
        $obj->slug = $request->slug;
        
        
        $obj->pincode = $request->pincode;
        $obj->address = $request->address;
        $obj->landmark = $request->landmark;
        $obj->city = $request->city;
        $obj->state = $request->state;
        $obj->contact_person = $request->contact_person;
        $obj->mobile_number = $request->mobile_number;
        $obj->whatsapp_number = $request->whatsapp_number;
        $obj->email = $request->email;
        $obj->facebook = $request->facebook;
        $obj->twitter = $request->twitter;
        $obj->instagram = $request->instagram;
        $obj->linkedin = $request->linkedin;
        $obj->category = $request->category;
        $obj->keywords = $request->keywords;
        $obj->seo_title = $request->seo_title;
        $obj->seo_meta_description = $request->seo_meta_description;
        $obj->save();

        return redirect()->route('admin_brand_index')->with('success', __('Data is added successfully'));
    }

    public function edit($id)
    {
        $brands = Brand::find($id);
        $icons = Category::orderBy('id','asc')->get();
        return view('admin.brand.edit', compact('brands', 'icons'));
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

        $obj->slug = $request->slug;
        $obj->name = $request->name;
        $obj->pincode = $request->pincode;
        $obj->address = $request->address;
        $obj->landmark = $request->landmark;
        $obj->city = $request->city;
        $obj->state = $request->state;
        $obj->contact_person = $request->contact_person;
        $obj->mobile_number = $request->mobile_number;
        $obj->whatsapp_number = $request->whatsapp_number;
        $obj->email = $request->email;
        $obj->facebook = $request->facebook;
        $obj->twitter = $request->twitter;
        $obj->instagram = $request->instagram;
        $obj->linkedin = $request->linkedin;
        $obj->category = $request->category;
        $obj->keywords = $request->keywords;
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
