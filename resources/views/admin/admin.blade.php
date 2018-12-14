@extends('layouts.master-admin')

@section('content-header')
<section class="content-header">
    <h3>Kegiatan</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Kegiatan</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
  <div class="row">

    <!-- Field kontent untuk kegiatan -->
    <div class="col-md-9">
      <div class="box box-primary">
          <div class="box-body no-padding">
            <div class="box">
              <div class="box-header">

                <!-- Button tambah untuk menambahkan kegiatan dengan modal -->
                <div class="box-body">
                  <div class="input-group margin pull-left col-md-2">
                    <button type="button" class="btn btn-success custom btn-lg" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-plus-circle"></i>Tambah</button>
                  </div>
                  <div class="input-group margin pull-right col-md-3">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                    </div>
                    <input type="text" name="q" class="form-control search" placeholder="Search...">
                  </div>
                </div>

                <!-- Daftar kegiatan yang dibuat -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-primary">

                      <!-- Perulangan nanti terjadi disini -->
                      <div class="col-md-3">
                        <div class="box box-primary">
                          <div>
                              <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 1</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="box box-primary">
                            <div>
                                <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 1</button>
                            </div>
                          </div>
                        </div>  
                        <div class="col-md-3">
                            <div class="box box-primary">
                              <div>
                                  <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 1</button>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                              <div class="box box-primary">
                                <div>
                                    <button type="button" class="btn btn-block btn-default btn-lg"><i class="fa fa-fw fa-folder"></i> Kegiatan 1</button>
                                </div>
                              </div>
                            </div>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      </div>
    </div>
        
    <!-- Field kontent untuk menambahkan tag -->
    <div class="col-md-3">

      <div class="box box-solid">

        <div class="box-header with-border">
          <h3 class="box-title">Tag</h3>
        </div>

        <div class="box-body">
          <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
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

      <div class="box box-solid">
        <div class="box-body">
          <!-- the events -->
          <div id="external-events">
            <table id="example1" class="table table-hover">
            </table>
          </div>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- Modal buat nambah kegiatan -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">

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
            <input type="text" class="form-control pull-right">
          </div>

          <label>Time:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-clock-o"></i>
            </div>
            <input type="text" class="form-control pull-right">
          </div>

          <label>Date:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="datepicker">
          </div>

          <label>Tempat:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-bank"></i>
            </div>
            <input type="text" class="form-control pull-right">
          </div>

          <label>Deskripsi</label>
          <div>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
          </div>

          <label>Tambahkan File</label>
          <div>
            <input type="file">
          </div>

        </div>

        <div class="box box-solid">

        <label>Tag</label>
        <div class="box-body">
          <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
            <ul class="fc-color-picker" id="color-chooser1">
              <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
              <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
              <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a>  </li>
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

        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('Astatus1')
    active
@endsection