<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Sitehits;
use App\Models\Userdemands;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use App\Plugins\changeLanguage;
use Validator;

// Models
use App\Models\Article;
use App\Plugins\Tracker;
use App\Models\Category;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Websettings;
use App\Models\Imagemanangment;

class Homepage extends Controller
{


    public function __construct(){


        $wSettings= Websettings::all();
      if($wSettings[0]->status==0) {echo'Site Kullanima Kapali'; die;}
      view()->share('settings',$wSettings[0]);
      view()->share('pages',Page::orderBy('order','ASC')->get());
      view()->share('widgetManangment', Imagemanangment::where('widget_name','widget_portfolio')->where('status',1)->get());
      view()->share('widgetManangment2', Imagemanangment::where('widget_name','widget_client')->where('status',1)->get());
      view()->share('categories',Category::inRandomOrder()->get());
      view()->share(app()->setLocale(Session::get('locale')));
    }

    public function index(){
        Tracker::hit();
        app()->setLocale(Session::get('locale'));
        return view('front.homepage');
    }

    public function article(){
        $data ['articles']=Article::orderBy('created_at','DESC')->paginate(2);
        $data ['articles']->withPath(url('sayfa'));
        return view('front.homepage2',$data);
    }

    public function single($category,$slug){
          $category=Category::whereSlug($category)->first() ?? abort(403,'Böyle Bir kategori Bulunamadı.');
          $article=Article::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(403,'Böyle Bir Yazı Bulunamadı.');
          $article->increment('hit');
          $data['article']=$article;
      return view ('front.single',$data);

    }
    public function category($slug){
      $category=Category::whereSlug($slug)->first() ?? abort(403,'Böyle Bir kategori Bulunamadı.');
      $data ['category']=$category;
      $data['articles']=Article::whereCategoryId($category->id)->orderBy('created_at','DESC')->paginate(1);
      return view ('front.category',$data);
    }
    public function page($slug){
      $page=Page::whereSlug($slug)->whereStatus(1)->first()  ?? abort(403,'Böyle Bir Sayfa Bulunamadı.');
      $data['page']=$page;
      return view('front.page',$data);
    }
    public function contact(){
      return view('front.contact');
    }
    public function contactpost (Request $request){

      $rules=[
        'name'=>'required|min:5',
        'email'=>'required|email',
        'topic'=>'required',
        'message'=>'required|min:10'
      ];
      $validate=Validator::make($request->post(),$rules);

      if($validate->fails()){
        return redirect()->route('contact')->withErrors($validate)->withInput();
      }
      $contact= new Contact;
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->topic=$request->topic;
      $contact->message=$request->message;
      $contact->save();
      return redirect()->route('contact')->with('success','Mesajınız İletildi');
      }
    public function demand (Request $request){


        $demand= new Userdemands;
        $demand->name=$request->name;
        $demand->email=$request->email;
        $demand->phone=$request->phone;
        $demand->product=$request->product;
        $demand->message=$request->message;
        $demand->status=0;
        $demand->save();
        return redirect()->route('homepage')->with('success','Mesajınız İletildi');
    }

    public function setLanguageSession($locate)
    {
        Session::put('locale', $locate);
        return view('front.homepage');
    }

    public function session()

    {
        echo Session::get('locale');
    }


}
