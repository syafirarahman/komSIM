@extends('layouts.master-admin') 
@section('content-header')
<section class="content-header">
  <h3>Kegiatan</h3>

  <ol class="breadcrumb">
    <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Kegiatan</li>
  </ol>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif @if(\Session::has('success'))
  <div class="alert alert-success">

    <p> {{\Session::get('success')}} </p>

  </div>
  @endif
</section>
@endsection
 
@section('content')
<section class="content">
  <div class="row">
    {{-- Kegiatan --}}
    <div class=" col-md-9">
      <div class=" box box-primary">
        <div class=" box-body no-padding">
          <div class="box">
            <div class=" box-header">
              <div class=" box-body">
                <div class="input-group margin pull-left col-md-2">
                  <button type="button" class="btn btn-success custom btn-lg" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-plus-circle"></i>Tambah</button>
                </div>
                <div class="input-group margin pull-right col-md-3">
                  <div class=" input-group-btn">
                    <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                      </div>
                      <input type="text" name="q" class="form-control search" placeholder="Search...">
                    </div>
                  </div>
                  <div class=" box box-primary" id="kegiatan">
                    <div class="col-md-3">
                      <div class="btn-group"style="width:100%">
                          <div class="btn-group"style="width:100%">
                              <a href="#" class="btn btn-default btn-lg" style="width:80%" id=""><i class="fa fa-fw fa-folder"></i></a>
                              <a class="btn btn-default dropdown-toggle btn-lg" style="width:20%" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                              </a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('admin/aktifitas')}}">Info&emsp;&emsp;<i class="fa fa-info"></i></a></li>
                                <li><a href="#">Delete&emsp;<i class="fa fa-trash-o"></i></a></li>
                              </ul>
                          </div>
                      </div>
                    </div>
                  </div>
                   {{-- Table --}}
          <table id="example2" class="table table-hover">
              <thead>
              <tr>
                <th>Nomor</th>
                <th>File</th>
                <th>Nama User</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>uas.docs</td>
                  <td>Devian</td>
                  <td>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#modal-default1">Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          {{-- /Table --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- /Kegiatan --}}

        {{-- Tag --}}
        <div class="col-md-3">
          <div class=" box box-solid">
            <div class=" box-header with-border">
                <h3 class="box-title">Tag</h3>
            </div>

            <div class="box-body">
              <div class=" btn-group" style="width: 100%; margin-bottom: 10px;">
                  <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                      <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                  </ul>
            </div>

            <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                <div class="input-group-btn">
                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Tambah Tag</button>
                  </div>
                </div>
              </div>
            </div>
            {{-- /tag --}}
          </div>
</section>

<!-- Modal buat nambah kegiatan -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content add">
      <form action="{{ action('ActivitiesController@store')}}" method="POST">
        {{ csrf_field() }}
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Kegiatan</h4>
        </div>

        <div class="modal-body">
          <div class="form-group">

            <label>Judul:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-font"></i>
              </div>
              <input type="text" class="form-control pull-right" name="name" required>
            </div>

            <label>Time:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
              </div>
              <input type="time" class="form-control pull-right" required name="time">
            </div>

            <label>Date:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="date" max="<?php echo date('Y-m-d') ?>" name="date" class="form-control pull-right" id="datepicker" required>
            </div>

            <label>Tempat:</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-bank"></i>
              </div>
              <input type="text" class="form-control pull-right" required name="location">
            </div>

            <label>Deskripsi</label>
            <div>
              <textarea class="form-control" rows="3" placeholder="Enter ..." required name="description"></textarea>
            </div>

            {{-- <label>Tambahkan File</label>
            <div>
              <input type="file" name="file">
            </div> --}}

          </div>

          <div class="box box-solid">

            {{-- <label>Tag</label>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <ul class="fc-color-picker" id="color-chooser1">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a> </li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
            </div>

          </div>

          <div class="box box-solid">

            <div class="input-group">
              <input id="new-event1" type="text" class="form-control" placeholder="Event Title">

              <div class="input-group-btn">
                <button id="add-new-event1" type="button" class="btn btn-primary btn-flat">Tambah</button>
              </div>
            </div>

            <div class="box-body">

              <div id="external-events1">
                <table id="example1" class="table table-hover">
                </table>
              </div>
            </div>

          </div>

        </div> --}}
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('Astatus1')
    active
@endsection