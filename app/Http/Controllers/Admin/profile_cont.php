<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profile_cont extends Controller
{
    public function index(Request $request){
        $list = Category::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Content/Category Manage";
        $subheading_title = "Create";
        return view('admin.banners_category_list', compact('name','list' , 'heading_title' , 'subheading_title'));
    }


    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $mthoad = "1";
        $heading_title = "Content/Category Manage";
        $subheading_title = "Create";

        $categories = Category::all();

        return view('admin.category_form', compact('name' , 'languages' ,'categories' , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'title' => 'required',
            'alias' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'language_id' => 'required',
            // 'parent_id' => 'required',
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

        $category_entity = new Category();
        $category_entity->title = $request->input('title');
        $category_entity->description = $detail;
        $category_entity->language_id = $request->input('language_id');
        $category_entity->thumb = $request->input('thumb');
        $category_entity->alias =str_slug($request->input('alias'), '-');
        $category_entity->meta_title = $request->input('meta_title');
        $category_entity->meta_description = $request->input('meta_description');
        $category_entity->status = $request->input('status');
        $category_entity->sort = $request->input('sort');
        $category_entity->meta_keywords = $request->input('meta_keywords');
        $category_entity->home_display = (int)$request->input('home_display');

        if($request->input('parent_id')!=null)
            $category_entity->parent_id = (int)$request->input('parent_id');
        $category_entity->layout_id = 1;
        //   $category_entity->is_trash = 0;
        $category_entity->user_id_modify = $request->user()->id;
        $category_entity->user_id_create = $request->user()->id;
        $category_entity->save();
        return redirect("/admin/content/category");
    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required',
            'alias' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'language_id' => 'required',
            'parent_id' => 'required',
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
        $category_entity = Category::find($id);
        $category_entity->title = $request->input('title');
        $category_entity->description = $detail;
        $category_entity->language_id = $request->input('language_id');
        $category_entity->thumb = $request->input('thumb');
        $category_entity->alias = str_slug($request->input('alias'), '-');
        $category_entity->meta_title = $request->input('meta_title');
        $category_entity->meta_description = $request->input('meta_description');
        $category_entity->status = $request->input('status');
        $category_entity->sort = $request->input('sort');
        $category_entity->meta_keywords = $request->input('meta_keywords');

        $category_entity->home_display = (int)$request->input('home_display');
        if($request->input('parent_id')!=null)
            $category_entity->parent_id = (int)$request->input('parent_id');

        $category_entity->layout_id = 1;
        $category_entity->user_id_modify = $request->user()->id;
        $category_entity->user_id_create = $request->user()->id;
        $category_entity->save();

        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $entity = Category::find($id);
        $mthoad = "2";
        $heading_title = "Category Manage";
        $subheading_title = "Edit";
        $categories = Category::where('id','!=',$id)->orderBy('created_at')->get();
        return view('admin.category_form', compact('name' , 'languages'  , 'mthoad' , 'entity' ,'categories' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $category = Category::find($id);
        $category->is_trash = 1;
        $category->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }
}
