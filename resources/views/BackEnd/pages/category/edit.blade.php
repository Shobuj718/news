@extends('BackEnd.master')


@section('title','ক্যাটাগরি পরিবর্তন করুন')
@section('heading_title','ক্যাটাগরি পরিবর্তন করুন')

@section('category','active selected')

@section('main_content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel">
            <div class="panel-heading">
                <h2 class="text-center">ক্যাটাগরি পরিবর্তন করুন</h2>

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
                <form id="movieForm" action="{{ route('category.update', $category->id) }}" method="post">
                	@csrf
                    <div class="form-group">
                        <div class="row gutter">
                            <div class="col-md-4">
                                <label for="category_name" class="control-label">ক্যাটাগরি  নাম<span class="text-danger">*</span></label>
                                <input type="text" name="category_name" value="{{ $category->category_name }}" placeholder="Enter category name" class="form-control" >
                                @if($errors->has('category_name'))
                                    <span class="text-danger">{{ $errors->first('category_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">প্যারেন্ট ক্যাটাগরি </label>
                                <select class="form-control" name="parent_category_id" id="parent_category_id">
                                    <option value="">... সিলেক্ট প্যারেন্ট ক্যাটাগরি ...</option>
                                        @if(isset($categories))
                                            @foreach($categories as $data)
                                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                                            @endforeach
                                        @endif
                                </select>
                            </div>
                            <div class="col-md-4 selectContainer">
                                <label class="control-label">অবস্থা</label>
                                <select class="form-control" name="status" id="status">
                                  <option value="1">সক্রিয়</option>
                                    <option value="0">নিষ্ক্রিয়</option>
                                    <option value="delete">Delete</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-default">হালনাগাদ</button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script type="text/javascript">
   document.getElementById('parent_category_id').value = "{{$category->parent_category_id}}"
   document.getElementById('status').value = "{{ $category->status }}"

</script>
@endsection 

@endsection