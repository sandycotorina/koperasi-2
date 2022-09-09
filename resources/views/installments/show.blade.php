@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
            <div class="lh-100">
                <h2 class="mb-0 text-white lh-100">{{ config('app.name', 'Laravel') }}</h2>
                <small class="text-white">Alamat koperasi :</small>
                <br>
            </div>
        </div>

        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Angsuran Ke</th>
                        <th>Jumlah Bayar</th>
                        <th>Tanggal Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($loan->installments as $angsuran)
                        <tr>
                            <td>{{$angsuran->angsuran_ke}}</td>
                            <td>Rp.{{number_format($angsuran->jumlah_bayar, 2)}}</td>
                            <td>{{$angsuran->tanggal_bayar}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Belum ada data angsuran.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
