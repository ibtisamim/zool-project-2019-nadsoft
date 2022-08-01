<?php

namespace App\Http\Controllers\Admin;

use App\Model\News;
use App\Model\Language;
use App\Model\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class News_cont extends Controller
{
    public function index(Request $request){
        $news = News::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        return view('admin.newslist', compact('name','news'));
    }


    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $status = State::where('language_id','=','1')->get();
        $mthoad = "1";
        $heading_title = "News Manage";
        $subheading_title = "Create";
        return view('admin.news_form', compact('name' , 'languages' , 'status' , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'language_id' => 'required',
            'thumb' => 'required',
            'alias' => 'required',
            'meta_title' => 'required',
            'youtube_url' => 'required',
            'meta_description' => 'required',
            'status' => 'required',
            'sort' => 'required'
        ]);

        $detail=$request->input('description');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/photos/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detail = $dom->saveHTML();

        $news_entity = new News();
        $news_entity->title = $request->input('title');
        $news_entity->short_description = $request->input('short_description');
        $news_entity->description = $detail;
        $news_entity->language_id = $request->input('language_id');
        $news_entity->thumb = $request->input('thumb');
        $news_entity->alias = str_slug($request->input('alias'), '-');
        $news_entity->meta_title = $request->input('meta_title');
        $news_entity->youtube_url = $request->input('youtube_url');
        $news_entity->meta_description = $request->input('meta_description');
        $news_entity->status = $request->input('status');
        $news_entity->sort = $request->input('sort');
        $news_entity->is_trash = 0;

        $news_entity->thumb_display = (int)$request->input('thumb_display');
        $news_entity->user_id_modify = $request->user()->id;
        $news_entity->user_id_create = $request->user()->id;
        $news_entity->save();

       // $news ->create($request->all());
     //   $news = News::all();
    //    $name = $request->user()->name;
        //return view('admin.newslist', compact('name','news'));
        return redirect("/admin/news");
      //  return redirect()->back();
        /*
        $employee = new Employee;
        $employee->employee_name = $request->get('employee_name');
        $employee->amount = $request->get('employee_salary');

        $employee->save();

         */

    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'language_id' => 'required',
            'thumb' => 'required',
            'alias' => 'required',
            'meta_title' => 'required',
            'youtube_url' => 'required',
            'meta_description' => 'required',
            'status' => 'required',
            'sort' => 'required'
        ]);


        $detail=$request->input('description');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            $result = explode(';', $data);
            if(count($result)==1){
                list($data) = explode(';', $data);
            }else{
                if(count($result)>1)
                    list($type, $data) = explode(';', $data);
            }
            //if($result)

            $result2 = explode(',', $data);
            if(count($result2)==1){
                list($data) = explode(',', $data);
            }else {
                list(, $data) = explode(',', $data);
            }
            $data = base64_decode($data);
            $image_name= "/photos/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detail = $dom->saveHTML();

        $id = $request->input('id');
        $news_entity = News::find($id);
        $news_entity->title = $request->input('title');
        $news_entity->short_description = $request->input('short_description');
        $news_entity->description = $detail;
        $news_entity->language_id = $request->input('language_id');
        $news_entity->thumb = $request->input('thumb');
        $news_entity->alias = str_slug($request->input('alias'), '-');
        $news_entity->meta_title = $request->input('meta_title');
        $news_entity->youtube_url = $request->input('youtube_url');
        $news_entity->meta_description = $request->input('meta_description');
        $news_entity->status = $request->input('status');
        $news_entity->sort = $request->input('sort');
        $news_entity->is_trash = 0;
        $news_entity->thumb_display = $request->input('thumb_display');
        $news_entity->user_id_modify = $request->user()->id;
        $news_entity->user_id_create = $request->user()->id;

        $news_entity->save();
        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $status = State::where('language_id','=','1')->get();
        $news = News::find($id);
        $mthoad = "2";
        $heading_title = "News Manage";
        $subheading_title = "Edit";
        return view('admin.news_form', compact('name' , 'languages' , 'status' , 'mthoad' , 'news' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $news = News::find($id);
        $news->is_trash = 1;
        $news->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }



}
