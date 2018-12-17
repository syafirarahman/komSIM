@extends('layouts.master-admin')

@section('content-header')
<section class="content-header">
    <h3>Informasi Admin</h3>

    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Info Admin</li>
    </ol>
</section>
@endsection

@section('content')

<section class="content">
        <div class="box">
            <div class="box-body">
    
            <div class="box-header custom">
                 {{-- ambil nama kegiatan dari db--}}
                    <table class="table table-hover">
                        <tr>
                            <td>Nama</td>
                            <td>Syafira Febriya R.</td>
                        </tr>
                        <tr>
                            <td>NID</td>
                            <td>123456789</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>syafirarahman01@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>089766442345</td>
                        </tr>
                    </table>
                    <div class="box">
                        <div class="input-group-btn">
                            <button  type="button" class="btn btn-default pull-right btn-flat">Ubah Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('Astatus1')
    active
@endsection