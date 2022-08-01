@extends('admin.layout.main')

@section('page_heading')
    Categories Manage
@endsection

@section('breadcrumb')

    <ol class="breadcrumb">

        <li class="active">Categories List</li>

        <li><a href="/admin">Dashboard</a></li>
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

                <div class="panel-heading">{{$heading_title}}
                    <a href="/admin/content/category/create" class="btn btn-default btn-sm pull-right">+ Add New</a>
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
                        @foreach($list as $list_item)
                            <tr>
                                <!--
                            <td class="text-center">{{$list_item->id}}</td> -->
                                <td class="text-left"><img src="{{$list_item->thumb}}"  style="max-width: 200px"/></td>
                                <td>{{$list_item->title}} <br/>
                                    <span style="      font-size: 12px;  font-style: italic;" class="text-muted">slug: {{$list_item->alias}}</span>
                                </td>

                                <td>{{$list_item->created_at}}
                                    <br/><span class="text-muted">{{$list_item->user->name}}</span></td>
                                <td>{{$list_item->updated_at}}
                                    <br/><span class="text-muted">{{$list_item->user2->name}}</span></td>

                                <td>
                                    <!--
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button> -->
                                    <a type="button" href="{{ URL('admin/content/category/delete/'.$list_item->id )}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></a>
                                    <a type="button"  href="{{ URL('admin/content/category/edit/'.$list_item->id )}}" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></a>
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