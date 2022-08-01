<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Photo;
use App\Model\Language;

class album_photo_cont extends Controller
{
    public function index(Request $request){
        $list = Photo::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Gallery/Photos Manage";
        $subheading_title = "List";
        return view('admin.gallary_photo_list', compact('name','list' , 'heading_title' , 'subheading_title'));
    }


    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $mthoad = "1";
        $heading_title = "Gallery/Photos";
        $subheading_title = "Create";
        $categories = Album::all()->orderBy('created_at')->get();
        return view('admin.category_form', compact('name' , 'languages' ,'categories' , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'title' => 'required',
            'alias' => 'required',
            'src' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required',
            'album_ids'
        ]);


        if($request->input('description')!= null) {
            $detail = $request->input('description');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = "/photos/" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }

            $detail = $dom->saveHTML();
        }else{
            $detail = "";
        }

        $entity = new Photo();
        $entity->title = $request->input('title');
        $entity->alias =str_slug($request->input('alias'), '-');

        if($request->input('link'))
            $entity->link = $request->input('link');

        $entity->src = $request->input('src');
        $entity->description = $detail;

        if($request->input('folder'))
            $entity->folder = $request->input('folder');

        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');

        if($request->input('waterMark_activation'))
            $entity->waterMark_activation = $request->input('waterMark_activation');


        if($request->input('open_new_tab'))
            $entity->open_new_tab = $request->input('open_new_tab');

        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        $albums = Album::find($request->input('album_ids'));
        $entity->Album->attach($albums);


        return redirect("/admin/album/photos");
    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'title' => 'required',
            'alias' => 'required',
            'src' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required',
            'album_ids'
        ]);

        if($request->input('description')!= null) {
            $detail = $request->input('description');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
            foreach ($images as $k => $img) {
                $data = $img->getAttribute('src');

                $result = explode(';', $data);
                if (count($result) == 1) {
                    list($data) = explode(';', $data);
                } else {
                    if (count($result) > 1)
                        list($type, $data) = explode(';', $data);
                }

                $result2 = explode(',', $data);
                if (count($result2) == 1) {
                    list($data) = explode(',', $data);
                } else {
                    list(, $data) = explode(',', $data);
                }
                $data = base64_decode($data);
                $image_name = "/photos/" . time() . $k . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }

            $detail = $dom->saveHTML();
        }else{
            $detail = "" ;
        }

        $id = $request->input('id');
        $entity = Photo::find($id);
        $entity->title = $request->input('title');
        $entity->alias =str_slug($request->input('alias'), '-');

        if($request->input('link'))
            $entity->link = $request->input('link');

        $entity->src = $request->input('src');
        $entity->description = $detail;

        if($request->input('folder'))
            $entity->folder = $request->input('folder');

        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');

        if($request->input('waterMark_activation'))
            $entity->waterMark_activation = $request->input('waterMark_activation');

        if($request->input('open_new_tab'))
            $entity->open_new_tab = $request->input('open_new_tab');

        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        $albums = Album::find($request->input('album_ids'));
        $entity->Album->sync($albums);


        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $entity = Category::find($id);
        $mthoad = "2";
        $heading_title = "Category Manage";
        $subheading_title = "Edit";
        $categories = Album::all()->orderBy('created_at')->get();
        return view('admin.category_form', compact('name' , 'languages'  , 'mthoad' , 'entity' ,'categories' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $category = Category::find($id);
        $category->is_trash = 1;
        $category->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }
}
