@extends('BackEnd.master')


@section('title','ক্যাটাগরি যুক্ত করুন')
@section('heading_title','ক্যাটাগরি যুক্ত করুন')

@section('category','active selected')

@section('main_content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">ক্যাটাগরি যুক্ত করুন</h2>

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
                                <label for="category_name" class="control-label">ক্যাটাগরি  নাম<span class="text-danger">*</span></label>
                                <input type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Enter category name" class="form-control" >
                                @if($errors->has('category_name'))
                                    <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">প্যারেন্ট ক্যাটাগরি </label>
                                <select class="form-control" name="parent_category_id">
                                    <option value="">... সিলেক্ট প্যারেন্ট ক্যাটাগরি  ...</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">অবস্থা</label>
                                <select class="form-control" name="status">
                                    <option value="1">সক্রিয়</option>
                                    <option value="0">নিষ্ক্রিয়</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">সংরক্ষণ করুন</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel" style="padding-left:20px">
            <div class="panel-heading">
                @foreach($categories as $category)
                    <li style="font-size:23px">
                        @if($category->status == '0')
                            <a class="text-danger" href="{{ route('parentCategory.edit', $category->id) }}">{{$category->category_name}}
                        @else
                            <a class="text-default" href="{{ route('parentCategory.edit', $category->id) }}">{{$category->category_name}}

                        <ol style="padding-left:40px">
                            @foreach($category->sub_categories as $sub_category) 

                                @if($sub_category->status == '1')
                                    <li style="font-size:20px;"><a class="text-primary" href="{{asset('/categori/edit/'.$sub_category->id.'/'.$category->id)}}">{{$sub_category->category_name}}</a></li>
                                @else
                                    <li style="font-size:20px"><a class="text-danger" href="{{asset('/categori/edit/'.$sub_category->id.'/'.$category->id)}}">{{$sub_category->category_name}}</a></li>
                                @endif
                            @endforeach
                        </ol>
                        @endif
                    </li>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

 

@endsection