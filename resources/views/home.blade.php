@extends('layouts.app')
@inject('client','App\Models\Client' )
@inject('donation','App\Models\DanationRequest' )

@section('content')








  <section class="content">


 <!-- wadgets -->








    <div class="row">


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-info">
                  <i class="fa fa-flag-o"></i>
                </span>

              <div class="info-box-content">

                <span class="info-box-number">donation</span>

                <span class="info-box-text">{{$donation->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </div>



        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Clients</span>
                <span class="info-box-number">{{$client->count()}}</span>
              </div>
            </div>
        </div>
      </div>




    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Title</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    you are login
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>









</div>
@endsection
