@extends('layouts.master-admin')

@section('logout')
<a href="{{ route('admin.logout') }}"
  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
  Logout
</a>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>
@endsection

@section('content-header')
<section class="content-header">
    <h3>Pengguna</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Pengguna</li>
    </ol>
</section>
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
<section class="content">
        
    <div class="box">
        <div class="box-header custom">
            <h1>Pengguna</h1>
            <button type="button" class="btn btn-success custom btn-lg" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-plus-circle"></i>
                Tambah
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th width="280px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $key => $user)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->nip }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                    <a class="btn btn-primary"
                    href="{{ route('manageadmins.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' =>
                    ['manageadmins.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btndanger'])
                    !!}
                    {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>
</section>

<!-- Modal buat nambah user -->
{!! Form::open(array('route' => 'manageadmins.store','method'=>'POST')) !!}
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content add">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Pengguna</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">

          <label>Nama : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-font"></i>
            </div>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
          </div>

          <label>NIP : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            {!! Form::number('nip', null, array('placeholder' => 'NIP','class' => 'form-control')) !!}
          </div>

          <label>Phone : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-envelope-o"></i>
            </div>
            {!! Form::number('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
          </div>

          <label>Email : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
          </div>

          <label>Password:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
          </div>

          <label>Ulangi Password : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-edit"></i>
            </div>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
'form-control')) !!}
          </div>

      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>

<!-- Modal buat edit user -->
{!! Form::model($user, ['method' => 'PATCH','route' => ['manageadmins.update', $user->id]]) !!}
  <div class="modal fade" id="modal-default1">
    <div class="modal-dialog">
      <div class="modal-content add">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Pengguna</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">

          <label>Nama : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-font"></i>
            </div>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
          </div>

          <label>Email : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
          </div>

          <label>Password:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
          </div>

          <label>Ulangi Password : </label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-edit"></i>
            </div>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' =>
'form-control')) !!}
          </div>

      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>

@endsection

@section('content-header')
  {{-- Modal untuk delete --}}

   <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content add">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Mengapus User Ini?
                </h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-info" data-dismiss="modal">Yakin</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
@endsection
@section('Astatus2')
    active
@endsection