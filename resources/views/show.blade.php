@extends('layouts.master')

@section('content')

<div class="container  w-75 mt-5">
    <div class="card">

        <div class="card-header ">

          <div class="row">

          <div class="col-md-5">
              <p> <strong>Show Post</strong> </p>
          </div>

          <div class="col d-flex justify-content-end">
            <a class="btn btn-success mx-1" href="{{route('posts.create')}}">Create</a>
            <a class="btn btn-warning mx-1" href="">Trashed</a>
          </div>

          </div>

        </div>

        <div class="card-body">

            <table class="table table-striped" >

                <tbody>

                    {{-- <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>

                            <img src="{{asset($post->image)}}" alt="" width="80">
                        </td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->category_id}}</td>
                        <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                        <td>

                        <a class="btn btn-success btn-sm" href="{{route('posts.show',$post->id)}}">Show</a>
                        <a class="btn btn-primary btn-sm" href="{{route('posts.edit',$post->id)}}">Edit</a>
                        <a class="btn btn-danger btn-sm" href="{{route('posts.destroy',$post->id)}}">Delete</a>

                        </td>


                        </tr> --}}

                        <tr>

                            <td>#</td>
                            <td>{{$post->id}}</td>

                        </tr>

                        <tr>

                            <td>Image</td>
                            <td> <img style="width: 250px" src="{{asset($post->image)}}" alt=""></td>

                        </tr>

                        <tr>

                            <td>Title</td>
                            <td>{{$post->title}} </td>

                        </tr>

                        <tr>

                            <td>Description</td>
                            <td>{{$post->description}} </td>

                        </tr>

                        <tr>

                            <td>Category</td>
                            <td>{{$post->category_id}} </td>

                        </tr>

                        <tr>

                            <td>Publish Date</td>
                            <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>

                        </tr>








                </tbody>
                </table>


        </div>
    </div>
</div>

@endsection

