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

                                <p>Table Building List</p>
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

                                <p>Progess Constarution</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-poll"></i>
                            </div>
                            <a href="" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    @permission('payments-read|payments-create|payments-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3></h3>

                                <p>Building Payment</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-calendar-check"></i>
                            </div>
                            <a href="#" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    @permission('status-operator-read|status-operator-create|status-operator-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3></h3>

                                <p>Status Opertor</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-poll-h"></i>
                            </div>
                            <a href="/progress" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                   
                </div>
            </div>
            
            @permission('constarution-read|constarution-create|constarution-update')
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
                      <span class="info-box-text">Number of buildings</span>
                      <span class="info-box-number">100</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
            
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
            
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
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
              </div>
            @endpermission
            @permission('constarution-read|constarution-create|constarution-update')
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Monthly Recap Report</h5>
      
                      <div class="card-tools">
                        <div class="btn-group">
                          <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">Something else here</a>
                            <a class="dropdown-divider"></a>
                            <a href="#" class="dropdown-item">Separated link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-8">
                          <p class="text-center">
                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                          </p>
      
                          <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" height="180" style="height: 180px; display: block; width: 531px;" width="531" class="chartjs-render-monitor"></canvas>
                          </div>
                          <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                          <p class="text-center">
                            <strong>Goal Completion</strong>
                          </p>
      
                          <div class="progress-group">
                            Add Products to Cart
                            <span class="float-right"><b>160</b>/200</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: 80%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
      
                          <div class="progress-group">
                            Complete Purchase
                            <span class="float-right"><b>310</b>/400</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-danger" style="width: 75%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            <span class="progress-text">Visit Premium Page</span>
                            <span class="float-right"><b>480</b>/800</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                          </div>
      
                          <!-- /.progress-group -->
                          <div class="progress-group">
                            Send Inquiries
                            <span class="float-right"><b>250</b>/500</span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-warning" style="width: 50%"></div>
                            </div>
                          </div>
                          <!-- /.progress-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- ./card-body -->
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                            <h5 class="description-header">$35,210.43</h5>
                            <span class="description-text">TOTAL REVENUE</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                            <h5 class="description-header">$10,390.90</h5>
                            <span class="description-text">TOTAL COST</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block border-right">
                            <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                            <h5 class="description-header">$24,813.53</h5>
                            <span class="description-text">TOTAL PROFIT</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-3 col-6">
                          <div class="description-block">
                            <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                            <h5 class="description-header">1200</h5>
                            <span class="description-text">GOAL COMPLETIONS</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
            @endpermission
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
