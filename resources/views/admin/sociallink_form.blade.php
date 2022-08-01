@extends('admin.layout.main')

@section('page_heading')
    {{$heading_title}}
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
        <li class="active">Create</li>
        <li><a href="/admin/social">Social Media</a></li>
        <li>Dashboard</li>
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
                <form method="post" action="{{ route('social.store') }}" class="form-horizontal" >
                    @elseif($mthoad==2)
                        <form method="post" action="{{ route('social.update') }}" class="form-horizontal" >
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
                                        <label class="col-md-12">Name:</label>
                                        <div class="col-md-12">

                                            <input type="text" autocomplete="off" class="form-control" value="@if(isset($entity)) {{$entity->name}} @endif" name="name" placeholder="Social Type"> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Alias:</label>
                                        <div class="col-md-12">
                                            <input type="text" id="alias" autocomplete="off" name="alias" value="@if(isset($entity)) {{$entity->alias}} @endif" class="form-control" placeholder="Alias"> </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">fa icon code:</label>
                                        <div class="col-md-12">
                                            <input type="text" id="fa_icon_code" autocomplete="off" name="fa_icon_code" value="@if(isset($entity)) {{$entity->fa_icon_code}} @endif" class="form-control" placeholder="fa_icon_code"> </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12" for="example-email">Url:</label>
                                        <div class="col-md-12">
                                            <input type="text" id="url" autocomplete="off" name="url" value="@if(isset($entity)) {{$entity->url}} @endif" class="form-control" placeholder="URL"> </div>
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


                            </div>
                            </div>

                            <div class="col-md-3">
                                <div class="white-box">

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