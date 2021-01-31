@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="container-fluid">
                <div class="row">
                    @permission('building-read|building-create|building-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3></h3>

                                <p>Add Building List</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-calendar-alt"></i>
                            </div>
                            <a href="/add_building" class="small-box-footer">Click <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                    @permission('constarution-read|constarution-create|constarution-update')
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3></h3>

                                <p>Constarution</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-fw fa-poll"></i>
                            </div>
                            <a href="#" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
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
                            <a href="#" class="small-box-footer">Click <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    @endpermission
                </div>
            </div>

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
