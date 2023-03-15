@extends('layouts.master')

@section('content')

<div class="container mt-5 w-75">

    @if ($errors->any())

            @foreach ($errors->all() as $error )
            <div class="alert alert-danger">
                {{$error}}
            </div>

            @endforeach

       @endif
    <div class="card">



        <div class="card-header ">
          <div class="row">

          <div class="col-md-6">
              <p> <strong>Edit Post</strong> </p>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success mx-1" href="">Back</a>

          </div>

          </div>

        </div>

        <div class="card-body">
        <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="form-group">
           <div>
            <img style=" width:100px" src="{{asset($post->image)}}" alt="">
           </div>
            <label for="" class="form-label">Image</label>
            <input name="image" type="file" class="form-control">
          </div>

          <div class="form-group">
            <label for="" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{$post->title}}">
          </div>

          <div class="form-group">
            <label for="" class="form-label">category</label>

            <select class="selectpicker show-tick mt-3 mx-2"  name="category_id" id="">

                <option value="">select</option>

                @foreach ($categories as $category )

                <option {{$category->id == $post->category_id ? 'selected': '' }} value="{{$category->id}}">{{$category->name}}</option>

                @endforeach

            </select>
          </div>

          <div class="form-group">
            <label for="" class="form-label">Description</label>
            <textarea value="" name="description" id="" cols="30" rows="10"  class="form-control">{{$post->description}}</textarea>
          </div>

          <div class="form-group">
           <button class="btn btn-primary mt-2"> Submit</button>
          </div>


        </form>
        </div>
    </div>
</div>

@endsection

