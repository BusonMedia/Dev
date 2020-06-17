<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Languages;

use Illuminate\Support\Facades\File;


class MultilanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang=Languages::orderBy('id','ASC')->get();
        return view('back.languages.index',compact('lang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $lang=new Languages();
        $lang->ContentTR=$request->TR;
        $lang->ContentUSA=$request->EN;
        $lang->idstring=$request->isstring;
        $lang->save();
        toastr()->success('Başarılı', 'Sayfa Başarıyla Oluşturuldu.');
        return redirect()->route('admin.language.index');
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
      $lang=Languages::findOrFail($id);
      return view('back.languages.update',compact('lang'));
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


        $lang=Languages::findOrFail($id);
        $lang->ContentTR=$request->TR;
        $lang->ContentUSA=$request->EN;
        $lang->idstring=$request->isstring;
        $lang->save();
      toastr()->success('Başarılı', 'Makale Başarıyla Güncellendi.');
      return redirect()->route('admin.language.index');
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
          return redirect()->route('admin.languages.index');
     }



    public function destroy($id)
    {
        //
    }
}
