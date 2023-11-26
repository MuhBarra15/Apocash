@extends('layouts.master')

@section('title')
    Laporan Pendapatan
@endsection

@push('css')
    <link rel="stylesheet"
        href="{{ asset('/AdminLTE-2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endpush

@section('breadcrumb')
    @parent
    <li class="active">Laporan</li>
@endsection

@section('content')
    <div class="pagetitle">
        <h1></h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('laporan.harian') }}" class="btn btn-success col-lg-12"><i class="bi bi-printer-fill"></i> Cetak Laporan
                            Harian</a><br><br>
                        <a href="{{ route('laporan.bulanan') }}" class="btn btn-success col-lg-12"><i class="bi bi-printer-fill"></i> Cetak Laporan
                            1 Bulan Terakhir</a>
                        <br><br>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection
