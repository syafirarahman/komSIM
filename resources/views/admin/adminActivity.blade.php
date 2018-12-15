@extends('layouts.master-admin')

@section('content-header')
<section class="content-header">
    <h3>Log Kegiatan</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Log Kegiatan</li>
    </ol>
</section>
@endsection

@section('content')

<section class="content">
        <div class="box">
            <div class="box-body">
                <div class="input-group margin pull-right col-md-3">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default search " data-toggle="dropdown"><i class="fa fa-search"></i>
                    </div>
                    <input type="text" name="q" class="form-control search" placeholder="Search...">
            </div>
    
            <div class="box-header custom">
                <h1>Kegiatan A</h1>
                 {{-- ambil nama kegiatan dari db--}}
                    <table class="table table-hover">
                        <tr>
                            <td>Nama Kegiatan</td>
                            <td>Kegiatan A</td>
                        </tr>
                        <tr>
                            <td>Tanggal kegiatan</td>
                            <td>Senin, 18 Oktober 2018</td>
                        </tr>
                        <tr>
                            <td>Pukul</td>
                            <td>16.00 WIB</td>
                        </tr>
                        <tr>
                            <td>Lokasi</td>
                            <td>HY T201</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>Lorem Ipsum sir dolor amet</td>
                        </tr>
                        <tr>
                            <td>File</td>
                            <td>
                                <li>.pdf</li>
                                <li>.pptx</li>
                            </td>
                        </tr>
                    </table>
                    <div class="box">
                        Tag
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('Astatus1')
    active
@endsection