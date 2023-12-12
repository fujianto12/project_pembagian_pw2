@extends('layout.main')
@section('title', 'Dashboard')

@section('content')

    <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-header">Weekly sales
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void();">Action</a>
                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container-2">
                    <div class="chartjs-size-monitor"
                        style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink"
                            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="chart2" width="1576" height="376"
                        style="display: block; height: 188px; width: 788px;" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                            <td>$5856</td>
                            <td>+55%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                            <td>$2602</td>
                            <td>+25%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                            <td>$1802</td>
                            <td>+15%</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                            <td>$1105</td>
                            <td>+5%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
