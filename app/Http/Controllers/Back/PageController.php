<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::orderBy('created_at','ASC')->get();
        return view('back.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title'=>'min:5',
          'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);


        $page=new Page;
        $page->title=$request->title;
        $page->content=$request->content;
        $page->order=$request->sira;
        $page->slug=str_slug($request->title);

        if($request->hasFile('image')){
          $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
          $request->image->move(public_path('uploads'),$imageName);
            $page->image='uploads/'.$imageName;
        }
        $page->save();
        toastr()->success('Başarılı', 'Sayfa Başarıyla Oluşturuldu.');
        return redirect()->route('admin.sayfalar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article=Page::findOrFail($id);
      return view('back.pages.update',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'title'=>'min:5',
        'image'=>'image|mimes:jpeg,png,jpg|max:2048'
      ]);


      $page=Page::findOrFail($id);
        $page->title=$request->title;
        $page->content=$request->content;
        $page->slug=str_slug($request->title);

      if($request->hasFile('image')){
        $imageName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
          $page->image='uploads/'.$imageName;
      }
        $page->save();
      toastr()->success('Başarılı', 'Makale Başarıyla Güncellendi.');
      return redirect()->route('admin.sayfalar.index');
    }

    public function switch(Request $request){
      $page=Page::findOrFail($request->id);
        $page->status=$request->statu=="true" ? 1 : 0 ;
        $page->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function delete($id){
          Page::find($id)->delete();
          toastr()->success('Sayfa Silindi. ');
          return redirect()->route('admin.sayfalar.index');
     }



    public function destroy($id)
    {
        //
    }
}
