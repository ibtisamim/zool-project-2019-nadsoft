@extends('admin.layout.main')

@section('page_heading')
    News Manage
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">

        <li class="active"><a href="/admin/news/create">Create</a></li>
        <li><a href="/admin/news">News</a></li>
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
        <form method="post" action="{{ route('news.store') }}" class="form-horizontal" >
            @elseif($mthoad==2)
                <form method="post" action="{{ route('news.update') }}" class="form-horizontal" >
                @endif
            @endif
        <div class="col-md-9">
    <div class="white-box">
        <h3 class="box-title m-b-0">{{$heading_title}}</h3>
        <p class="text-muted m-b-30 font-13"> {{$subheading_title}}</p>
        <!-- <form class="form-horizontal"> -->
            {{ csrf_field() }}
        @if(isset($news))
            <input type="hidden" name="id" value="{{$news->id}}" />
            @endif

            <div class="form-group">
                <label class="col-md-12">Title:</label>
                <div class="col-md-12">

                    <input type="text" autocomplete="off" class="form-control" value="@if(isset($news)) {{$news->title}} @endif" name="title" placeholder="Title"> </div>
            </div>


            <div class="form-group">
                <label class="col-md-12" for="example-email">Alias:</label>
                <div class="col-md-12">
                    <input type="text" autocomplete="off" id="alias" name="alias" value="@if(isset($news)) {{$news->alias}} @endif" class="form-control" placeholder="Alias"> </div>
            </div>

            <div class="form-group">
                <label class="col-md-12" for="example-email">Short Description:</label>
                <div class="col-md-12">
                    <textarea class="form-control" autocomplete="off" rows="5" name="short_description">@if(isset($news)) {{$news->short_description}} @endif</textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-12" for="example-email">Thumbnail: </label>
                @if(isset($news))
                    <img src="{{$news->thumb}}" style="max-width: 300px;"/>
                @endif
                <div class="input-group">

          <span class="input-group-btn">
            <a id="lfm" data-input="thumbnail" data-preview="holder2" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
            </a>
          </span>

                    <input id="thumbnail" autocomplete="off" class="form-control" type="text" name="thumb" value="@if(isset($news)) {{$news->thumb}}  @endif">


                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">

                    <input type="checkbox" autocomplete="off" value="@if(isset($news)) {{$news->thumb_display}} @else '1' @endif" checked   name="thumb_display">Show Thumbnail
                </div>
            </div>




            <div class="form-group">
                <label class="col-md-12">Full Description:</label>
                <div class="col-md-12">
                    <!--
                    <textarea name="tm" class="form-control"></textarea> -->
                    <textarea id="summernote" autocomplete="off" name="description" rows="10">@if(isset($news)) {{$news->description}} @endif</textarea>
                </div>
            </div>



    </div>
        </div>


        <div class="col-md-3">
            <div class="white-box">


                <div class="form-group">
                    <label class="col-md-12" for="example-email">Youtube URL:</label>
                    <div class="col-md-12">
                        <input type="text" autocomplete="off" name="youtube_url" value="@if(isset($news)) {{$news->youtube_url}} @endif" placeholder="Youtube URL" class="form-control"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12" for="example-email">Languages:</label>
                    <div class="col-md-12">
                        <select name="language_id" class="form-control">
                            <option>Select</option>
                        @foreach($languages as $lang)

                                @if(isset($news))
                                    @if($news->language_id == $lang->id)
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
                        @foreach($status as $state)

                                @if(isset($news))
                                    @if($news->status == $state->id)
                                        <option value="{{$state->id}}" selected="selected" >{{$state->title}}</option>
                                    @else
                                        <option value="{{$state->id}}">{{$state->title}}</option>
                                    @endif
                                @else
                                    <option value="{{$state->id}}">{{$state->title}}</option>
                                @endif

                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-12" for="example-email">Meta Title:</label>
                    <div class="col-md-12">
                        <input type="text"  autocomplete="off" name="meta_title" value="@if(isset($news)) {{$news->meta_title}}  @endif" placeholder="@if(isset($news)) {{$news->meta_title}}  @elseif(!isset($news)) 'Meta Title' @endif" class="form-control"/>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-12" for="example-email">Meta Description:</label>
                    <div class="col-md-12">
                        <textarea class="form-control" autocomplete="off" name="meta_description" rows="5" placeholder="Meta Description" class="form-control">@if(isset($news)) {{$news->meta_description}}  @endif</textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-12" for="example-email">Sort:</label>
                    <div class="col-md-12">
                        <input type="text" autocomplete="off" name="sort" value="@if(isset($news)) {{$news->sort}}  @endif" placeholder="Sort" class="form-control"/>
                    </div>
                </div>


                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
            </div>


        </div>
        </form>
    </div>

@endsection