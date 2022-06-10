@extends('Backend.Layouts.app')
@section('app-content')
<div class="wrapper">

    <!-- Navbar -->
  @include('Backend.Partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
  @include('Backend.Partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
  @include('Backend.Partials.breadcrumb')
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">

            @yield('master-content')

          </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  @include('Backend.Partials.footer')
  <!-- ./wrapper -->
  </div>
@endsection
