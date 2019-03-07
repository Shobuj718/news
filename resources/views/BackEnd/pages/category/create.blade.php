@extends('BackEnd.master')


@section('heading_title','Category')

@section('category','active selected')

@section('main_content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">Add Category</h2>

                @if (session('success'))
                   <div class="alert alert-success">
                       {{ session('success')}}
                   </div>
                @endif
                @if (session('error'))
                   <div class="alert alert-warning">
                       {{ session('error')}}
                   </div>
                @endif

            </div>
            <div class="panel-body">
                <form id="movieForm" action="{{ route('category.store') }}" method="post">
                	@csrf
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-4">
                                <label for="category_name" class="control-label">Category Name <span class="text-danger">*</span></label>
                                <input type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Enter category name" class="form-control" >
                                @if($errors->has('category_name'))
                                    <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">Parent Category</label>
                                <select class="form-control" name="parent_category_id">
                                    <option value="">... Select Parent Category ...</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">De-active</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <ul>
        @foreach($categories as $category)
        <li>{{$category->category_name}}
            <ul>
               @foreach($category->sub_categories as $sub_category) 
               <li>---->{{$sub_category->category_name}}</li>
               @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
</div>

@endsection