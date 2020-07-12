<?php


namespace App\Plugins;
use App\Models\Languages;
use Illuminate\Support\Facades\Session;

class GetLanguage
{
    public function languageEditor(String $text)
    {

        $text=trim($text);
        if(!empty($text)){
            $langText= Languages::where('ContentTR',$text)->first();
            if(!$langText==null) {
                if(app()->setLocale(Session::get('locale'))==null)
                {
                    return $langText->ContentTR;
                }
                else if(app()->setLocale(Session::get('locale'))=='en'){

                    return $langText->ContentUSA;
                }
            }
            else {
                $langText= Languages::where('ContentUSA',$text)->first();
                if(!$langText==null) {
                    if(app()->setLocale(Session::get('locale'))==null)
                {
                    return $langText->ContentTR;
                }
                else if(app()->setLocale(Session::get('locale'))=='en'){

                    return $langText->ContentUSA;
                }
                }
                else {
                    return $text;
                }

            }
        }
    }
}
