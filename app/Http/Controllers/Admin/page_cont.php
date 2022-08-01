<?php

namespace App\Http\Controllers\Admin;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Language;
use App\Model\State;
use App\Model\Category;
use App\Model\Author;

class page_cont extends Controller
{
    public function index(Request $request){
        $list = Article::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Content/Article Manage";
        $subheading_title = "Article List";
        return view('admin.pages_list', compact('name','list','heading_title','subheading_title'));
    }



    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $status = State::where('language_id','=','1')->get();
        $mthoad = "1";
        $heading_title = "Page Manage";
        $breadcrumb_1 = "Content / Page";
        $subheading_title = "Create";
        $categories = Category::all();
        $authors = Author::all();


        return view('admin.page_form', compact('name' ,'status' , 'categories' , 'authors' ,'breadcrumb_1' , 'languages'  , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'alias' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'publishing_date' => 'required',
            'language_id' => 'required',
            'author_id' => 'required',
            'thumb' => 'required',
            'meta_title' => 'required',
            'meta_description'=> 'required',
            'meta_keywords' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'activation' => 'required'
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

        $page = new Article();
        $page->title = $request->input('title');
        $page->sub_title = $request->input('sub_title');
        $page->sub_title = $request->input('sub_title');
        $page->alias = str_slug($request->input('alias'), '-');
        $page->short_description = $request->input('short_description');
        $page->description = $detail;
        $page->from_date = $request->input('from_date');
        $page->to_date = $request->input('to_date');
        $page->language_id = $request->input('language_id');
        $page->author_id = $request->input('author_id');
        $page->thumb = $request->input('thumb');
        $page->status = $request->input('status');
        $page->meta_title = $request->input('meta_title');
        $page->meta_description = $request->input('meta_description');
        $page->status = $request->input('status');
        $page->meta_keywords = $request->input('meta_keywords');
        $page->sort = $request->input('sort');
        //   $category_entity->is_trash = 0;
        $page->user_id_modify = $request->user()->id;
        $page->user_id_create = $request->user()->id;


        $page->publishing_date = $request->input('publishing_date');
        if($request->input('preview')!=null)
        $page->preview = $request->input('preview');
        if($request->input('main_image_first')!=null)
        $page->main_image_first = $request->input('main_image_first');
        if($request->input('main_image2')!=null)
        $page->main_image2 = $request->input('main_image2');
        if($request->input('main_image3')!=null)
        $page->main_image3 = $request->input('main_image3');
        if($request->input('uploadfile')!=null)
        $page->uploadfile = $request->input('uploadfile');
        $page->activation = $request->input('activation');
        if($request->input('waterMark_activation')!=null)
        $page->waterMark_activation = $request->input('waterMark_activation');

       // dd($request->input('category_ids'));
        $page->save();

        $category = Category::find($request->input('category_ids'));
        $page->Category()->attach($category);

        return redirect("/admin/content/page");
    }


    public function update(Request $request){

        $validate = $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'alias' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'publishing_date' => 'required',
            'language_id' => 'required',
            'author_id' => 'required',
            'thumb' => 'required',
            'meta_title' => 'required',
            'meta_description'=> 'required',
            'meta_keywords' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'activation' => 'required'
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
        $page = Article::find($id);
        $page->title = $request->input('title');
        $page->sub_title = $request->input('sub_title');
        $page->sub_title = $request->input('sub_title');
        $page->alias = str_slug($request->input('alias'), '-');
        $page->short_description = $request->input('short_description');
        $page->description = $detail;
        $page->from_date = $request->input('from_date');
        $page->to_date = $request->input('to_date');
        $page->language_id = $request->input('language_id');
        $page->author_id = $request->input('author_id');
        $page->thumb = $request->input('thumb');
        $page->status = $request->input('status');
        $page->meta_title = $request->input('meta_title');
        $page->meta_description = $request->input('meta_description');
        $page->status = $request->input('status');
        $page->meta_keywords = $request->input('meta_keywords');
        $page->sort = $request->input('sort');
        //   $category_entity->is_trash = 0;
        $page->user_id_modify = $request->user()->id;
        $page->user_id_create = $request->user()->id;

        $page->publishing_date = $request->input('publishing_date');
        if($request->input('preview')!=null)
            $page->preview = $request->input('preview');
        if($request->input('main_image_first')!=null)
            $page->main_image_first = $request->input('main_image_first');
        if($request->input('main_image2')!=null)
            $page->main_image2 = $request->input('main_image2');
        if($request->input('main_image3')!=null)
            $page->main_image3 = $request->input('main_image3');
        if($request->input('uploadfile')!=null)
            $page->uploadfile = $request->input('uploadfile');
        $page->activation = $request->input('activation');
        if($request->input('waterMark_activation')!=null)
            $page->waterMark_activation = $request->input('waterMark_activation');


        $page->save();

        $category = Category::find($request->input('category_ids'));
        $page->Category()->sync($category);


        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $status = State::where('language_id','=','1')->get();
        $entity = Article::find($id);
        $mthoad = "2";
        $heading_title = "Page Manage";
        $breadcrumb_1 = "Content / Page";
        $subheading_title = "Edit";
        $categories = Category::all();
        $authors = Author::all();
        return view('admin.page_form', compact('name' , 'breadcrumb_1' , 'languages'  ,'entity', 'authors' , 'categories', 'status' , 'mthoad' , 'page' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $page = Article::find($id);
        $page->is_trash = 1;
        $page->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }

}
