@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="card">

        <div class="card-header ">
          <div class="row">

          <div class="col-md-6">
              <p> <strong>Trashed Post</strong> </p>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
            <a class="btn btn-success mx-1" href="">Back</a>

          </div>

          </div>

        </div>

        <div class="card-body">

            <table class="table table-striped" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 10%">Image</th>
                    <th scope="col" style="width: 20%">Title</th>
                    <th scope="col" style="width: 30%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <th scope="row">1</th>
                    <td>

                        <img src="https://loremflickr.com/320/240"" alt="" width="80">
                    </td>
                    <td> Lorem ipsum dolor sit amet consectetur </td>
                    <td>  fuga veniam sit nam, nulla, omnis esse quos, nostrum consequuntur.
                        Consequuntur sunt iure reiciendis tenetur.</td>
                    <td>Sport</td>
                    <td>3/14/2023</td>
                    <td>

                    <a class="btn-sm btn-primary" href="">Edit</a>
                    <a class="btn-sm btn-danger" href="">Delete</a>

                    </td>


                  </tr>

                </tbody>
              </table>


        </div>
    </div>
</div>

@endsection

