<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event;
use App\Model\Language;

class event_cont extends Controller
{
    public function index(Request $request){
        $list = Event::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Event Manage";
        $subheading_title = "List";
        return view('admin.events_list', compact('name','list' , 'heading_title' , 'subheading_title'));
    }

    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $mthoad = "1";
        $heading_title = "Event Manage";
        $subheading_title = "Create";
        return view('admin.event_form', compact('name' , 'languages'  , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'event_name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'alias' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required',
            'thumb' => 'required'
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

        $entity = new Event();
        $entity->event_name = $request->input('event_name');
        $entity->description = $detail;
        $entity->short_description = $request->input('short_description');
        $entity->from_date = $request->input('from_date');
        $entity->to_date = $request->input('to_date');
        $entity->alias =str_slug($request->input('alias'), '-');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        return redirect("/admin/events");
    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'event_name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'alias' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required',
            'thumb' => 'required'
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
        $entity = Event::find($id);
        $entity->event_name = $request->input('event_name');
        $entity->description = $detail;
        $entity->short_description = $request->input('short_description');
        $entity->from_date = $request->input('from_date');
        $entity->to_date = $request->input('to_date');
        $entity->alias =str_slug($request->input('alias'), '-');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->user_id_modify = $request->user()->id;
        $entity->user_id_create = $request->user()->id;
        $entity->save();

        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $entity = Event::find($id);
        $mthoad = "2";
        $heading_title = "Event Manage";
        $subheading_title = "Edit";
        return view('admin.event_form', compact('name' , 'languages'  , 'mthoad' , 'entity' , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $category = Event::find($id);
        $category->is_trash = 1;
        $category->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }
}
