<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Sociallink;
use App\Model\Language;

class sociallinks_cont extends Controller
{
    public function index(Request $request){
        $list = Sociallink::where('is_trash','=','0')->orderBy('created_at')->get();
        $name = $request->user()->name;
        $heading_title = "Social Links Manage";
        $heading_title_list = "Social Links";
        $subheading_title = "List";
        return view('admin.sociallink_list', compact('name','list' , 'heading_title_list','heading_title' , 'subheading_title'));
    }


    public function create(Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $mthoad = "1";
        $heading_title = "Social Links Manage";
        $subheading_title = "Create";
        $categories = Sociallink::all();
        return view('admin.sociallink_form', compact('name' , 'languages' ,'categories' , 'mthoad' , 'heading_title' , 'subheading_title'));
    }


    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'name' => 'required',
            'url' => 'required',
            'alias' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required'
        ]);

        $entity = new Sociallink();
        $entity->name = $request->input('name');
        $entity->url = $request->input('url');
        $entity->fa_icon_code = $request->input('fa_icon_code');
        $entity->alias =str_slug($request->input('alias'), '-');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->save();
        return redirect("/admin/social");
    }


    public function update(Request $request){
        $validate = $this->validate($request,[
            'name' => 'required',
            'url' => 'required',
            'alias' => 'required',
            'sort' => 'required',
            'status' => 'required',
            'language_id' => 'required'
        ]);

        $id = $request->input('id');
        $entity = Sociallink::find($id);
        $entity->name = $request->input('name');
        $entity->url = $request->input('url');
        $entity->fa_icon_code = $request->input('fa_icon_code');
        $entity->alias =str_slug($request->input('alias'), '-');
        $entity->sort = $request->input('sort');
        $entity->status = $request->input('status');
        $entity->language_id = $request->input('language_id');
        $entity->thumb = $request->input('thumb');
        $entity->save();

        return redirect()->back()->with('message', 'Success Updated!!');
    }


    public function edit($id , Request $request){
        $name = $request->user()->name;
        $languages = Language::all();
        $entity = Sociallink::find($id);
        $mthoad = "2";
        $heading_title = "Social Links Manage";
        $subheading_title = "Edit";

        return view('admin.sociallink_form', compact('name' , 'languages'  , 'mthoad' , 'entity'  , 'heading_title' , 'subheading_title'));
    }

    public function delete($id){
        $category = Sociallink::find($id);
        $category->is_trash = 1;
        $category->save();
        return redirect()->back()->with('message', 'Success Deleted!!');
    }
}
