@extends('layouts.master-admin')

@section('content-header')
<section class="content-header">
    <h3>Pengguna</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Pengguna</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
        <div class="callout callout-success">
                <h4>Reminder! Nanti bakal muncul ketika klik "simpan"</h4>
                Instructions for how to use modals are available on the
                <a href="http://getbootstrap.com/javascript/#modals">Bootstrap documentation</a>
        </div>
    <div class="box">
        <div class="box-header custom">
            <h1>Member</h1>
            <button type="button" class="btn btn-success custom btn-lg" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-plus-circle"></i>
                Tambah
            </button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NID</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>390284184</td>
                        <td>Sansa Stark</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284185</td>
                        <td>Jon Snow</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284186</td>
                        <td>Cersei Lannister</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284187</td>
                        <td>Daenerys Targaryen</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284188</td>
                        <td>Tyrion Lannister</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284189</td>
                        <td>Tommen Baratheon</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>390284190</td>
                        <td>Sandor Clegane</td>
                        <td>
                            <a href="{{url ('AeditMember')}}">
                            <button type="button" class="btn btn-default custom"><i class="fa fa-edit"></i></button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                    </tfoot>
            </table>
        </div>
</section>

<!-- Modal buat nambah kegiatan -->
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

          <label>Nama:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-font"></i>
            </div>
            <input type="text" class="form-control pull-right">
          </div>

          <label>Username:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control pull-right">
          </div>

          <label>Email:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-envelope-o"></i>
            </div>
            <input type="email" class="form-control pull-right">
          </div>

          <label>Password:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            <input type="password" class="form-control pull-right">
          </div>

          <label>Ulangi Password:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-fw fa-lock"></i>
            </div>
            <input type="password" class="form-control pull-right">
          </div>

          <label>NID:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-edit"></i>
            </div>
            <input type="password" class="form-control pull-right">
          </div>

          <label>No HP:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-phone"></i>
            </div>
            <input type="password" class="form-control pull-right">
          </div>
      </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Modal untuk delete --}}

   <div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content add">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Mengapus User Ini?
                </h4>//nama user nanti diambil dari api
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