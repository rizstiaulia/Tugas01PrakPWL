@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                </div>

                <div class="card text-black mx-3" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <h3>Selamat Datang di Halaman Admin</h3>
                        </div>
                        <div class="row justify-content-center">
                            <p>Hanya Admin yang dapat mengakses halaman ini</p>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')