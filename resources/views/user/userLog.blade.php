@extends('layouts.master-user')

@section('content-header')
<section class="content-header">
    <h3>Log Kegiatan</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Log Kegiatan</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
            <div class="col-md-12">
                <div class="box">
                  <div class="box-body">
                    <table id="example1" class="table table-hover">
                      <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Nama User</th>
                        <th>Action</th>
                        <th>Hasil Perubahan</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>22 Nov 2018</td>
                        <td>16.00 AM</td>
                        <td>Devian</td>
                        <td>Edit</td>
                        <td>Folder</td>
                      </tr>
                      <tr>
                        <td>22 Nov 2018</td>
                        <td>16.00 AM</td>
                        <td>Clara</td>
                        <td>Edit</td>
                        <td>Folder</td>
                      </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        
</section>
@endsection

@section('Ustatus2')
active
@endsection