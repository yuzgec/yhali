<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Form;
use App\Models\Page;
use App\Models\Service;
use App\Models\Video;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        SEOMeta::setCanonical(url()->full());
        return view('frontend.index');
    }

    public function reference(){
        SEOMeta::setCanonical(url()->full());
        return view('frontend.page.reference');
    }

    public function price(){
        SEOMeta::setTitle('Karşıyaka Koltuk Yıkama Fiyatları | Yıldırım Koltuk Yıkama');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.page.reference');
    }

    public function contact(){

        SEOMeta::setCanonical(url()->full());
        return view('frontend.contact');
    }

    public function servicedetail($url){
        $Detail = Service::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama | Koltuk Çekyat Yıkama Fiyatları ');
        SEOMeta::setDescription($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama | Koltuk Çekyat Yıkama Fiyatları');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.detail', compact('Detail'));
    }

    public function service(){
        SEOMeta::setTitle('Hizmetlerimiz | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setDescription("Karşıyaka Yıldırım Koltuk Yıkama ");
        SEOMeta::setCanonical(url()->full());

        return view('frontend.service.index');
    }

    public function blogdetail($url){
        $Detail = Blog::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setDescription($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setCanonical(url()->full());


        return view('frontend.blog.detail', compact('Detail'));
    }

    public function corporatedetail($url){
        $Detail = Page::where('slug', $url)->firstOrFail();

        SEOMeta::setTitle($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setDescription($Detail->title. ' | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.page.detail', compact('Detail'));
    }

    public function blog(){

        SEOMeta::setTitle('Makaleler | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setDescription('Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setCanonical(url()->full());

        return view('frontend.blog.index');
    }

    public function video(){

        SEOMeta::setTitle('Video Galeri | Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setDescription('Karşıyaka Yıldırım Koltuk Yıkama ');
        SEOMeta::setCanonical(url()->full());

        $Video = Video::all();
        return view('frontend.video.index', compact('Video'));
    }

    public function form(ContactRequest $request){

        $New = new Form;
        $New->name =  $request->name;
        $New->email =  $request->email;
        $New->phone =  $request->phone;
        $New->subject =  $request->subject;
        $New->message =  $request->message;
        $New->save();

        Mail::send("mail.form",compact('New'),function ($message) use($New) {
            $message->to('olcayy@gmail.com')->subject($New->name.' - Site Bilgi Formu');
        });

        return redirect()->route('home');
    }

}
