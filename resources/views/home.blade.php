@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row">
                    @permission('building-read')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3></h3>

                                <p>Building Management</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-table"></i>
                            </div>
                            <a href="/building/list" class="small-box-footer">Click <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    {{-- @permission('building-create|building-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3></h3>

                                <p>Add Building List</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-calendar-alt"></i>
                            </div>
                            <a href="/building/create" class="small-box-footer">Click <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission --}}
                    @permission('constarution-read|constarution-create|constarution-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3></h3>

                                <p>Building List Table</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-poll"></i>
                            </div>
                            <a href="/building/list" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    @permission('payments-read|payments-create|payments-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3></h3>
                                <p>Status Opertor</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-calendar-check"></i>
                            </div>
                            <a href="/progress" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    @permission('status-operator-read|status-operator-create|status-operator-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3></h3>
                                <p>Resplice Opertor</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-poll-h"></i>
                            </div>
                            <a href="/resplice" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission

                </div>
            </div>

            @role('superadministrator','administrator')
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-2">
                      <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Project</span>
                          <span class="info-box-number">
                              100
                            {{-- <small>building.</small> --}}
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-2">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-building"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-number"></span>
                          <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    {{-- <div class="clearfix hidden-md-up"></div> --}}

                    <div class="col-12 col-sm-6 col-md-2">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-layer-group"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Floor</span>
                          <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-2">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fab fa-buromobelexperte"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Room</span>
                          <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-chart-pie"></i></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Price per sqm</span>
                            <span class="info-box-number">2,000</span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      <div class="col-12 col-sm-6 col-md-2">
                        <div class="info-box mb-3">
                          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-money-bill-alt"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text">Balance</span>
                            <span class="info-box-number">2,000</span>
                          </div>
                        </div>
                      </div>
                  </div>

            @endrole
        </div>
    </div>
</div>
@stop
@section('css')
<style lang="scss">
    .small-box:hover {
        cursor: pointer;
    }

</style>
@stop


