<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
    public function index(){
    	$sliders = Slider::get();
    	return view('Admin.sliders.index',compact('sliders'));
    }
    public function store(SliderRequest $request){
    	Slider::create([
    		'text' => $request->text,
    		'image' => $request->file('image')->store('/','public'),
    	]);
    	return redirect('/admin/sliders');
    }
    public function destroy(Slider $slider){
        Storage::disk('public')->delete($slider->image);
    	$slider->delete();
    }
}
