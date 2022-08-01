@extends('admin.layout.main')

@section('page_heading')
   {{$heading_title}} - {{$subheading_title}}
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
        <li class="active">{{$subheading_title}}</li>
        <li><a href="/admin/content/category">{{$heading_title}}</a></li>
        <li><a href="/admin">Dashboard</a></li>
    </ol>

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            @if ($errors->any())
                <div class="panel">

                    <div class="panel-heading">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

        </div>
    </div>

    <div class="row">
        @if(isset($mthoad))
            @if($mthoad==1)
                <form method="post" action="{{ route('category.store') }}" class="form-horizontal" >
                    @elseif($mthoad==2)
                        <form method="post" action="{{ route('category.update') }}" class="form-horizontal" >
                            @endif
                            @endif
                            <div class="col-md-9">
                                <div class="white-box">
                                    <h3 class="box-title m-b-0">{{$heading_title}}</h3>
                                    <p class="text-muted m-b-30 font-13"> {{$subheading_title}}</p>
                                    <!-- <form class="form-horizontal"> -->
                                    {{ csrf_field() }}
                                    @if(isset($entity))
                                        <input autocomplete="off" type="hidden" name="id" value="{{$entity->id}}" />
                                    @endif

                                    <div class="form-group">
                                        <label class="col-md-12">Title:</label>
                                        <div class="col-md-12">

                                            <input type="text" autocomplete="off" class="form-control" value="@if(isset($entity)) {{$entity->title}} @endif" name="title" placeholder="Title"> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Alias:</label>
                                        <div class="col-md-12">
                                            <input type="text" id="alias" autocomplete="off" name="alias" value="@if(isset($entity)) {{$entity->alias}} @endif" class="form-control" placeholder="Alias"> </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Thumbnail: </label>
                                        @if(isset($entity))
                                            <img src="{{$entity->thumb}}" style="max-width: 300px;"/>
                                        @endif
                                        <div class="input-group">

                                      <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder2" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                      </span>
                                            <input id="thumbnail" autocomplete="off" class="form-control" type="text" name="thumb" value="@if(isset($entity)) {{$entity->thumb}}  @endif">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-12">

                                            <input type="checkbox" autocomplete="off" value="@if(isset($entity)) {{$entity->home_display}} @else '1' @endif" checked   name="thumb_display">Display at Home:
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12"> Description:</label>
                                        <div class="col-md-12">
                                            <!--
                                            <textarea name="tm" class="form-control"></textarea> -->
                                            <textarea id="summernote" autocomplete="off" name="description" rows="10">@if(isset($entity)) {{$entity->description}} @endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="white-box">
                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Parent:</label>
                                        <div class="col-md-12">
                                            <select name="parent_id" class="form-control">
                                                <option value="">Self</option>
                                                @foreach($categories as $category)
                                                    @if(isset($entity))
                                                        @if($entity->parent_id == $category->id)
                                                            <option value="{{$category->id}}" selected="selected" >{{$category->title}}</option>
                                                        @else
                                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Languages:</label>
                                        <div class="col-md-12">
                                            <select name="language_id" class="form-control">
                                                <option>Select</option>
                                                @foreach($languages as $lang)
                                                    @if(isset($entity))
                                                        @if($entity->language_id == $lang->id)
                                                            <option value="{{$lang->id}}" selected="selected" >{{$lang->name}}</option>
                                                        @else
                                                            <option value="{{$lang->id}}">{{$lang->name}}</option>
                                                        @endif
                                                    @else
                                                        <option value="{{$lang->id}}">{{$lang->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Status:</label>
                                        <div class="col-md-12">
                                            <select name="status" class="form-control">
                                                <option>Select</option>
                                                @if(isset($entity))
                                                    @if(($entity->status==1))
                                                        <option value="1" selected="selected" >Enable</option>
                                                        <option value="0" >Disable</option>
                                                        @else
                                                        <option value="1">Enable</option>
                                                        <option value="0" selected="selected" >Disable</option>
                                                    @endif
                                                @else
                                                    <option value="1"  >Enable</option>
                                                    <option value="0" >Disable</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Meta Title:</label>
                                        <div class="col-md-12">
                                            <input type="text"  autocomplete="off" name="meta_title" value="@if(isset($entity)) {{$entity->meta_title}}  @endif" placeholder="@if(isset($entity)) {{$entity->meta_title}}  @elseif(!isset($entity)) Meta Title @endif" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Meta Description:</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" autocomplete="off" name="meta_description" rows="5" placeholder="Meta Description" class="form-control">@if(isset($entity)) {{$entity->meta_description}}  @endif</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Meta Keywords:</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" autocomplete="off" name="meta_keywords" rows="5" placeholder="Meta Keywords" class="form-control">@if(isset($entity)) {{$entity->meta_keywords}}  @endif</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Sort:</label>
                                        <div class="col-md-12">
                                            <input type="text" name="sort" autocomplete="off" value="@if(isset($entity)) {{$entity->sort}}  @endif" placeholder="Sort" class="form-control"/>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                </div>


                            </div>
                        </form>
    </div>

@endsection