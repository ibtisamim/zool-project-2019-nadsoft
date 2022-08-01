<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Language;
use App\Model\Album;

class album_cont extends Controller
{
    public function index(Request $request){
        $list = Album::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Albums Manage";
        $subheading_title = "Album List";
        return view('admin.gallery_category_list', compact('name','list' , 'heading_title' , 'subheading_title'));
    }


    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $mthoad = "1";
        $heading_title = "Album Information";
        $subheading_title = "Create";
        $categories = Album::all();

        return view('admin.gallery_category_form', compact('name' , 'languages' ,'categories' , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'alias' => 'required',
            'language_id' => 'required',
            'thumb' => 'required',
            'sort' => 'required',
            'status' => 'required'
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
        // store object
        $entity = new Album();
        $entity->title = $request->input('title');
        $entity->description = $detail;
        $entity->alias = str_slug($request->input('alias'), '-');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        if($request->input('parent_id')!=null)
            $entity->parent_id = (int)$request->input('parent_id');
        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        return redirect("/admin/album");
    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'alias' => 'required',
            'language_id' => 'required',
            'thumb' => 'required',
            'sort' => 'required',
            'status' => 'required'
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
        $entity = Album::find($id);
        $entity->title = $request->input('title');
        $entity->description = $detail;
        $entity->alias = str_slug($request->input('alias'), '-');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        if($request->input('parent_id')!=null)
            $entity->parent_id = (int)$request->input('parent_id');
        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $entity = Album::find($id);
        $mthoad = "2";
        $heading_title = "Album Manage";
        $subheading_title = "Edit";
        $categories = Album::where('id','!=',$id)->orderBy('created_at')->get();
        return view('admin.gallery_category_form', compact('name' , 'languages'  , 'mthoad' , 'entity' ,'categories' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $Album = Album::find($id);
        $Album->is_trash = 1;
        $Album->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }

}
