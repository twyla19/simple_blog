@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Posisi</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>JACKSON POLLOCK</td>
            <td>nyancat</td>
            <td>Cristina@yow.com</td>
            <td>CONTENT WRITER</td>
            <td>
              <a href="/editprofile" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td>MATTHEW SANDERS</td>
            <td>nyancat</td>
            <td>Cristina@yow.com</td>
            <td>SUPERVISOR</td>
            <td>
            <a href="/editprofile" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
          <tr>
            <td>KONTORU</td>
            <td>nyancat</td>
            <td>Cristina@yow.com</td>
            <td>CONTENT WRITER</td>
            <td>
            <a href="/editprofile" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    

@endsection
