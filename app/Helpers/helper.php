<?php

use App\Models\Form;
use App\Models\Post;
use App\Models\Slug;
use App\Models\Section;
use App\Models\Directory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Config;

function settings($key = null, array $replace = [])
{
    if ($key == null) {
        return collect(config('settings'));
    }
    $settings = collect(config('settings'))->mapWithKeys(function ($a) {
        return $a;
    });
    $return = isset($settings[$key]) ? is_array($settings[$key]['value']) ? $settings[$key]['value'][app()->getLocale()] : $settings[$key]['value'] : null;

    if (count($replace)) {
        return replace($replace, $return);
    } else {
        return $return;
    }
}

function arrayToPhpArray($arr)
{
    return "<?php \n\nreturn " . arrayToString($arr) . ';';
}

function arrayToString($arr, $tabs = 0, $startTabs = true)
{
    return rtrim(arrayToStringWrapper($arr, $tabs, $startTabs), ",\n ");
}

function arrayToStringWrapper($arr, $tabs = 0, $startTabs = true)
{
    $result = ($startTabs ? str_repeat("\t", $tabs) : '') . '[' . "\n";
    if ($startTabs) {
        $tabs++;
    }
    foreach ($arr as $key => $value) {
        $result .= str_repeat("\t", $tabs) . json_encode($key, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . ' => ';
        if (is_array($value)) {
            $result .= arrayToStringWrapper($value, $tabs + 1, false);
        } else {
            $result .= json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . ",\n";
        }
    }
    $tabs--;
    $result .= str_repeat("\t", $tabs) . '],' . "\n";

    return $result;
}

/**
 * sectionTypes
 *  get all section types that are in config/sectionTypes folder.  keys are names
 *
 * @return void
 */
function sectionTypes()
{

    return collect(Config::get('sectionTypes'))->sortBy(function ($value, $key) {
        return $value['id'];
    });
}
function getStyleAttribute($id)
{
    if ($id < 10) {
        return collect(Config::get('sectionTypes'))->where('type', $id)->first()['style'];
    } else {
        return collect(Config::get('componentTypes'))->where('type', $id)->first()['style'];
    }
}

function getForm(){
    $form = Form::with('fields')->get();
  return view('admin.form-controllers.nonTrans.form', compact('form'));
  }

function getComponentFileUploadFields($componentTypeId)
{
    $types = collect(Config::get('componentTypes'))
        ->where('id', $componentTypeId)
        ->first()['fields']['trans'];
    $fileUploadFields = [];
    foreach ($types as $key => $type) {
        if ($type['type'] == 'files' || $type['type'] == 'file' || $type['type'] == 'image' || $type['type'] == 'images') {
            $fileUploadFields[] = $key;
        }
    }

    return $fileUploadFields;
}
function getComponent($componentTypeId)
{
    return collect(Config::get('componentTypes'))
        ->whereIn('id', $componentTypeId)
        ->first()['sectionTypes'];
}
function formTypes()
{
    return collect(Config::get('FormTypes'))->sortBy(function ($value, $key) {
        return $value['id'];
    });
}

function getContentTypeIds($key)
{
    $arrOfTypeIds = collect(config($key))->pluck('id')->toArray();

    return $arrOfTypeIds;
}
function getContentTypes($key)
{
    $rawTypes = config($key);
    $arrOfTypes = [];
    foreach ($rawTypes as $key => $rawType) {
        $arrOfTypes[] = [
            'id' => $rawType['id'],
            'title' => $key,
        ];
    }

    return $arrOfTypes;
}
function getContentType($key, $contentTypeId)
{
    $rawTypes = config($key);

    return array_filter($rawTypes, function ($rawType) use ($contentTypeId) {
        return isset($rawType['id']) ? $rawType['id'] == $contentTypeId : false;
    });
}
function componentsType()
{

    return collect(Config::get('componentTypes'))->sortBy(function ($value, $key) {
        return $value['id'];
    });
}
function getComponentAttribute($id)
{
    return collect(Config::get('componentTypes'))->where('id', $id)->first()['fields'];
}
function sections()
{
    $sections = Section::where('type_id', 2)->get();
    $data = [
        'sections' => $sections,
    ];

    return $data;
}

function getPostTitles()
{
    $sec = Section::where('type_id', 5)->pluck('id')->toArray();
    // return $sec;
    $posts = Post::whereIn('section_id', $sec)->with('translation')->get();

    return $posts;
}

function partners()
{
    $sections = Section::where('type_id', 6)->get();

    return $sections;
}
/**
 * bannerTypes
 *  get all section types that are in config/sectionTypes folder.  keys are names
 *
 * @return void
 */
function bannerTypes()
{
    return Config::get('bannerTypes');
}
function bannerTypesOrdered()
{
    return collect(Config::get('bannerTypes'))->sortBy(function ($value, $key) {
        return $value['id'];
    });
}

/**
 * bannerTypes
 *  get all section types that are in config/sectionTypes folder.  keys are names
 *
 * @return void
 */
function directoryTypes()
{
    return Config::get('directoryTypes');
}

/**
 * menuTypes
 *  get menu types frpm config/menuTypes.php
 *
 * @return void
 */
function menuTypes()
{
    return Config::get('menuTypes');
}
function CoverFilter()
{
    return Config::get('coverfilter');
}
function isMenuType($query, $type)
{
    return array_search(array_search($type, menuTypes()), $query->menuTypes->pluck('menu_type_id')->toArray()) !== false;
}

function menuTypeByKey($val)
{
    return array_keys(menuTypes(), $val)[0];
}

/**
 * locales
 *  gets locales from config/app.php locales array
 *
 * @return void
 */
function locales()
{
    return config('app.locales');
}

function getSectionsWithTypes($options)
{
    $secTypeIds = [];
    if (!empty($options)) {
        foreach ($options as $opt) {

            if (isset($opt)) {
                $secTypeIds[] = Config::get('sectionTypes')[$opt]['id'];
            }
        }
        $sections = Section::whereIn('type_id', array_values($secTypeIds))->with('translations')->get();

        return $sections;
    }
}



function getAdditional($arr, $additionalList)
{
    $additional = [];

    foreach ($additionalList as $key) {
        // Check if the key exists in the input data
        if (array_key_exists($key, $arr)) {
            $additional[$key] = $arr[$key];
        }
    }

    return $additional;
}

// function genFullSlug($item, $locale){
//   if ($item->parent_id) {
//     $parent = Section::find($item->parent_id);
//     $fullSlug = $parent->slugs()->where('locale', $locale)->first()->fullSlug.'/'.$item->slug;
//   }else{

//     $fullSlug = '/'.$locale.'/'.$item->slug;
//   }
//   return $fullSlug;
// }

function genFullSlug($item, $locale)
{
    if ($item->parent()->first() !== null) {
        $parent = $item->parent()->first();

        $fullSlug = Slug::where('slugable_type', get_class($parent))->where('slugable_id', $parent->id)->where('locale', $locale)->first()->fullSlug . '/' . $item->translate($locale)->slug;
    } else {

        $fullSlug = '/' . $locale . '/' . $item->slug;
    }

    return $fullSlug;
}

function genValidation($fields)
{
    $validate = [];

    foreach ($fields as $key => $field) {
        if (isset($field['validation'])) {
            $validate[$key] = $field['validation'];
        }
    }

    return $validate;
}
function getFields($id, $type, $key)
{

    return collect(Config::get($type))
        ->where('id', $id)
        ->first()['fields'][$key];
}
function str_limit($str, $char = 100)
{
    return \Illuminate\Support\Str::limit($str, $char);
}

function thumb($thumb)
{
    return '/' . config('config.image_path') . config('config.thumb_path') . $thumb;
}
function image($thumb)
{

    return '/' . config('config.image_path') . config('config.thumb_path') . $thumb;
}

function isArr($item)
{
    return is_array($item['value'] ?? null);
}

function settingTransAttrs($setting)
{
    return collect($setting)->filter(
        function ($item) {
            return is_array($item['value']);
        }
    );
}
function settingNonTransAttrs($setting)
{
    return collect($setting)->filter(
        function ($item) {
            return !is_array($item['value']);
        }
    );
}

function directories($type)
{
    $type = array_search($type, config('directoryTypes'));

    return \App\Models\Directory::where('type_id', $type)->doesntHave('children')->with('translations')->get();
}

function getVideoImage($url)
{
    if ($url !== null) {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);

        return 'https://img.youtube.com/vi/' . $match[1] . '/0.jpg';
    }
}

function getDates($date)
{
    $pieces = explode('/', $date);
    if ($pieces[1] == '01') {
        $month = trans('website.jan');
    }
    if ($pieces[1] == '02') {
        $month = trans('website.feb');
    }
    if ($pieces[1] == '03') {
        $month = trans('website.mar');
    }
    if ($pieces[1] == '04') {
        $month = trans('website.apr');
    }
    if ($pieces[1] == '5') {
        $month = trans('website.may');
    }
    if ($pieces[1] == '6') {
        $month = trans('website.jun');
    }
    if ($pieces[1] == '7') {
        $month = trans('website.jul');
    }
    if ($pieces[1] == '8') {
        $month = trans('website.aug');
    }
    if ($pieces[1] == '9') {
        $month = trans('website.sep');
    }
    if ($pieces[1] == '10') {
        $month = trans('website.oct');
    }
    if ($pieces[1] == '11') {
        $month = trans('website.nov');
    }
    if ($pieces[1] == '12') {
        $month = trans('website.dec');
    }
    if (count($pieces) > 2) {
        return $pieces[2] . ' ' . $month . ', ' . $pieces[0];
    }

    return '';
}
function selectDirectory()
{
    $section = Section::where('type_id', 5)->with('translations')->first();
    $post = Post::where('section_id', $section->id)->get();
    $directory = Directory::where('type_id', 0)->with('translation')->get();

    // dd($section);
    return view('admin.form-controllers.nontrans.selectDirectory', compact('section', 'directory', 'post'));
}
function urlll()
{
    $url = url()->current();
    // dd(urldecode($url));
    $flslug = str_ireplace(url(''), '', urldecode($url));
    // dd($flslug);
    $slugindb = Slug::where('fullSlug', $flslug)->first();
    if ($post !== null) {
        $slugable_type = 'App\Models\Post';
    } else {
        $slugable_type = 'App\Models\Section';
    }
    // dd($slugable_type);
    // dd($slugindb->slugable_id);
    $newslug = Slug::where('slugable_id', $slugindb->slugable_id)->where('slugable_type', $slugable_type)->where('locale', '!=', app()->getlocale())->first();

    // dd($flslug);
    return $newslug->fullSlug;
}

function getdatess($date)
{
    $newDate['day'] = Carbon\Carbon::parse($date)->format('d');
    $newDate['month'] = Carbon\Carbon::parse($date)->format('F');
    $newDate['year'] = Carbon\Carbon::parse($date)->format('Y');
    if (app()->getlocale() == 'en') {
        if ($newDate['month'] == 'January') {
            $newDate['month'] = 'Jan';
        }
        if ($newDate['month'] == 'February') {
            $newDate['month'] = 'Feb';
        }
        if ($newDate['month'] == 'March') {
            $newDate['month'] = 'Mar';
        }
        if ($newDate['month'] == 'April') {
            $newDate['month'] = 'Apr';
        }
        if ($newDate['month'] == 'May') {
            $newDate['month'] = 'May';
        }
        if ($newDate['month'] == 'June') {
            $newDate['month'] = 'Jun';
        }
        if ($newDate['month'] == 'July') {
            $newDate['month'] = 'Jul';
        }
        if ($newDate['month'] == 'August') {
            $newDate['month'] = 'Aug';
        }
        if ($newDate['month'] == 'September') {
            $newDate['month'] = 'Sep';
        }
        if ($newDate['month'] == 'October') {
            $newDate['month'] = 'Oct';
        }
        if ($newDate['month'] == 'November') {
            $newDate['month'] = 'Nov';
        }
        if ($newDate['month'] == 'December') {
            $newDate['month'] = 'Dec';
        }
    } else {
        if ($newDate['month'] == 'January') {
            $newDate['month'] = 'იან';
        }
        if ($newDate['month'] == 'February') {
            $newDate['month'] = 'თებ';
        }
        if ($newDate['month'] == 'March') {
            $newDate['month'] = 'მარ';
        }
        if ($newDate['month'] == 'April') {
            $newDate['month'] = 'აპრ';
        }
        if ($newDate['month'] == 'May') {
            $newDate['month'] = 'მაი';
        }
        if ($newDate['month'] == 'June') {
            $newDate['month'] = 'ივნ';
        }
        if ($newDate['month'] == 'July') {
            $newDate['month'] = 'ივლ';
        }
        if ($newDate['month'] == 'August') {
            $newDate['month'] = 'აგვ';
        }
        if ($newDate['month'] == 'September') {
            $newDate['month'] = 'სექ';
        }
        if ($newDate['month'] == 'October') {
            $newDate['month'] = 'ოქტ';
        }
        if ($newDate['month'] == 'November') {
            $newDate['month'] = 'ნოე';
        }
        if ($newDate['month'] == 'December') {
            $newDate['month'] = 'დეკ';
        }
    }

    return $newDate;
}
