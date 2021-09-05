@extends('layouts.admin_layout.admin_layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Catalogues</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admins/SubAdmins</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if($errors->any())
        <div class="alert alert-danger" style="margin-top: 10px;">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissable fade show" role="alert" style="margin-top:10px;">
                {{ Session::get('success_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            @endif
          <form name="adminForm" id="adminForm" method="POST" action="{{ url('admin/update-role/'.$adminDetails['id']) }}">
            @csrf
            <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>

                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    
                    <div class="form-group">
                        <label for="categories" class="col-md-3">Categories</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="categories[view]" value="1"> View Access &nbsp;&nbsp;
                            <input type="checkbox" name="categories[edit]" value="1"> View/Edit Access &nbsp;
                            <input type="checkbox" name="categories[full]" value="1"> Full Access &nbsp;&nbsp;
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="products" class="col-md-3">Products</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="products[view]" value="1"> View Access &nbsp;&nbsp;
                            <input type="checkbox" name="products[edit]" value="1"> View/Edit Access &nbsp;
                            <input type="checkbox" name="products[full]" value="1"> Full Access &nbsp;&nbsp;
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="coupons" class="col-md-3">Coupons</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="coupons[view]" value="1"> View Access &nbsp;&nbsp;
                            <input type="checkbox" name="coupons[edit]" value="1"> View/Edit Access &nbsp;
                            <input type="checkbox" name="coupons[full]" value="1"> Full Access &nbsp;&nbsp;
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="orders" class="col-md-3">Orders</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="orders[view]" value="1"> View Access &nbsp;&nbsp;
                            <input type="checkbox" name="orders[edit]" value="1"> View/Edit Access &nbsp;
                            <input type="checkbox" name="orders[full]" value="1"> Full Access &nbsp;&nbsp;
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </form>        
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection