@extends('layouts.master-user')

@section('content-header')
<section class="content-header">
    <h3>Ubah Password</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Ubah Password</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="box">
        <div class="box-header custom">

        <h2 class="custom">Ubah Password</h2>
        <hr class=" custom">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                  <div class="box-body">
                    <div class="form-group">

                <label>Password Lama:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-font"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Password Baru:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="text" class="form-control pull-right">
                </div>

                <label>Ulangi Password:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-edit"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-danger logon pull-left custom" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary logon custom">Ubah</button>
                </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection
@section('Ustatus3')
active
@endsection