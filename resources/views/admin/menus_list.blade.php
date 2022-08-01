@extends('admin.layout.main')

@section('page_heading')
    News Manage
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active"><a href="/admin/news">News List</a></li>
        <li>Home</li>
    </ol>

@endsection

@section('content')
    <div class="row">




        <div class="col-md-12">
            <div class="panel">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="panel-heading">MANAGE NEWS
                    <a href="/admin/news/create" class="btn btn-default btn-sm pull-right">+ Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                        <thead>
                        <tr>
                            <!--
                            <th width="70" class="text-center">#</th> -->
                            <th>Thumb</th>
                            <th>Title</th>
                            <th>ADDED</th>
                            <th width="300">MANAGE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $news_item)
                        <tr>
                            <!--
                            <td class="text-center">{{$news_item->id}}</td> -->
                            <td class="text-left"><img src="{{$news_item->thumb}}"  style="max-width: 200px"/></td>
                            <td>{{$news_item->title}}<br/>
                                <span style="      font-size: 12px;  font-style: italic;" class="text-muted">slug: {{$news_item->alias}}</span>
                                </td>

                            <td>{{$news_item->created_at}}
                                <br/><span class="text-muted">{{$news_item->user->name}}</span></td>
                            <td>{{$news_item->updated_at}}
                                <br/><span class="text-muted">{{$news_item->user2->name}}</span></td>

                            <td>
                                <!--
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button> -->
                                <a type="button" href="{{ URL('admin/news/delete/'.$news_item->id )}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></a>
                                <a type="button"  href="{{ URL('admin/news/edit/'.$news_item->id )}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection