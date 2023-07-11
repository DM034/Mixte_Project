<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-xl-6 stretch-card grid-margin" style="margin-left: 5cm;">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap">
                    <div>
                        <div class="card-title mb-0">Revenue</div>
                        <h3 class="font-weight-bold mb-0">$32,409</h3>
                    </div>
                    <div>
                        <div class="d-flex flex-wrap pt-2 justify-content-between sales-header-right">
                            <div class="d-flex mr-5">
                                <button type="button" class="btn btn-social-icon btn-outline-sales">
                                    <i class="mdi mdi-inbox-arrow-down"></i>
                                </button>
                                <div class="pl-2">
                                    <h4 class="mb-0 font-weight-semibold head-count"> $8,217 </h4>
                                    <span class="font-10 font-weight-semibold text-muted">TOTAL SALES</span>
                                </div>
                            </div>
                            <div class="d-flex mr-3 mt-2 mt-sm-0">
                                <button type="button" class="btn btn-social-icon btn-outline-sales profit">
                                    <i class="mdi mdi-cash text-info"></i>
                                </button>
                                <div class="pl-2">
                                    <h4 class="mb-0 font-weight-semibold head-count"> 2,804 </h4>
                                    <span class="font-10 font-weight-semibold text-muted">TOTAL PROFIT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flot-chart-wrapper">
                    <div id="flotChart" class="flot-chart" style="padding: 0px;">
                        <canvas class="flot-base" width="802" height="270" style="width: 642px; height: 216px;"></canvas>
                        <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                            <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 4px; text-align: center;">4</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 74px; text-align: center;">8</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 140px; text-align: center;">12</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 209px; text-align: center;">16</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 279px; text-align: center;">20</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 348px; text-align: center;">24</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 418px; text-align: center;">28</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 487px; text-align: center;">32</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 557px; text-align: center;">36</div>
                                <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 198px; left: 627px; text-align: center;">40</div>
                            </div>
                        </div>
                        <canvas class="flot-overlay" width="802" height="270" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 642px; height: 216px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 stretch-card" style="margin-left: 5cm;">
        <div class="card">
                <div class="col-md-10">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="card-title">Categories</div>
                            <div class="d-flex flex-wrap">
                                <div class="doughnut-wrapper w-50">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="doughnutChart1" width="203" height="203" style="display: block; height: 163px; width: 163px;" class="chartjs-render-monitor"></canvas>
                                </div>
                                <div id="doughnut-chart-legend" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                    <ul>
                                        <li><span class="legend-dots" style="background:#00cff4"></span>Refferral</li>
                                        <li><span class="legend-dots" style="background:#ff5730"></span>Social Media</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>