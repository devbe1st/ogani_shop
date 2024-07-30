@extends('layouts.admin')
@section('title', 'Admin Ogani')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow text-white border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Monthly Sales</p>
                                        <span class="h3 mb-0">${{ $totalPrice1Month }}</span>
                                        <span class="small text-success">+5.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Orders</p>
                                        <span class="h3 mb-0">{{ $totalOrders }}</span>
                                        <span class="small text-success">+16.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-users text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <p class="small text-muted mb-0">Users</p>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <span class="h3 mr-2 mb-0"> {{ $totalUsers }} </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-16 fe-database text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <p class="small text-muted mb-0">Products</p>
                                        <span class="h3 mb-0">{{ $totalProducts }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end section -->
                <div class="row align-items-center my-2">
                    <div class="col-auto ml-auto">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="reportrange" class="sr-only">Date Ranges</label>
                                <div id="reportrange" class="px-2 py-2 text-muted">
                                    <i class="fe fe-calendar fe-16 mx-2"></i>
                                    <span class="small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm"><span
                                        class="fe fe-refresh-ccw fe-12 text-muted"></span></button>
                                <button type="button" class="btn btn-sm"><span
                                        class="fe fe-filter fe-12 text-muted"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="chart-box">
                            <div id="columnChart"></div>
                        </div>
                    </div> <!-- .col -->
                </div> <!-- end section -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong>Goal</strong>
                            </div>
                            <div class="card-body px-4">
                                <div class="row border-bottom">
                                    <div class="col-4 text-center mb-3">
                                        <p class="mb-1 small text-muted">Completions</p>
                                        <span class="h3">26</span><br />
                                        <span class="small text-muted">+20%</span>
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mb-3">
                                        <p class="mb-1 small text-muted">Goal Value</p>
                                        <span class="h3">$260</span><br />
                                        <span class="small text-muted">+6%</span>
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mb-3">
                                        <p class="mb-1 small text-muted">Conversion</p>
                                        <span class="h3">6%</span><br />
                                        <span class="small text-muted">-2%</span>
                                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                                    </div>
                                </div>
                                <table class="table table-borderless mt-3 mb-1 mx-n1 table-sm">
                                    <thead>
                                        <tr>
                                            <th class="w-50">Goal</th>
                                            <th class="text-right">Conversion</th>
                                            <th class="text-right">Completions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Checkout</td>
                                            <td class="text-right">5%</td>
                                            <td class="text-right">260</td>
                                        </tr>
                                        <tr>
                                            <td>Add to Cart</td>
                                            <td class="text-right">55%</td>
                                            <td class="text-right">1260</td>
                                        </tr>
                                        <tr>
                                            <td>Contact</td>
                                            <td class="text-right">18%</td>
                                            <td class="text-right">460</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Top Selling</strong>
                                <a class="float-right small text-muted" href="#!">View all</a>
                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                    @foreach ($topSelling as $product)
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-3 col-md-2">
                                                    <img src="{{ asset('storage/' . $product->image) }}" alt="..."
                                                        class="thumbnail-sm rounded">
                                                </div>
                                                <div class="col">
                                                    <strong>{{ $product->product_name }}</strong>
                                                    <div class="my-0 text-muted small">{{ $product->category->category_name }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <strong class="">+85%</strong>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"
                                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div> <!-- / .list-group -->
                            </div> <!-- / .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                </div> <!-- .row -->
                <!-- info small box -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="chart-widget">
                                    <div id="gradientRadial"></div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <p class="text-muted mb-0">Yesterday</p>
                                        <h4 class="mb-1">126</h4>
                                        <p class="text-muted mb-2">+5.5%</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p class="text-muted mb-0">Today</p>
                                        <h4 class="mb-1">86</h4>
                                        <p class="text-muted mb-2">-5.5%</p>
                                    </div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Today</strong></p>
                                <h3 class="mb-0">$2,562.30</h3>
                                <p class="text-muted">+18.9% Last week</p>
                                <div class="chart-box mt-n5">
                                    <div id="lineChartWidget"></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 text-center mt-3">
                                        <p class="mb-1 text-muted">Completions</p>
                                        <h6 class="mb-0">26</h6>
                                        <span class="small text-muted">+20%</span>
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mt-3">
                                        <p class="mb-1 text-muted">Goal Value</p>
                                        <h6 class="mb-0">$260</h6>
                                        <span class="small text-muted">+6%</span>
                                        <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mt-3">
                                        <p class="mb-1 text-muted">Conversion</p>
                                        <h6 class="mb-0">6%</h6>
                                        <span class="small text-muted">-2%</span>
                                        <span class="fe fe-arrow-down text-danger fe-12"></span>
                                    </div>
                                </div>
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col-md -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    <strong>Products</strong>
                                    <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="chart-box">
                                            <div id="donutChartWidget"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row align-items-center my-3">
                                            <div class="col">
                                                <strong>Cloud Server</strong>
                                                <div class="my-0 text-muted small">Global, Services</div>
                                            </div>
                                            <div class="col-auto">
                                                <strong>+85%</strong>
                                            </div>
                                            <div class="col-3">
                                                <div class="progress" style="height: 4px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center my-3">
                                            <div class="col">
                                                <strong>CDN</strong>
                                                <div class="my-0 text-muted small">Global, Services</div>
                                            </div>
                                            <div class="col-auto">
                                                <strong>+75%</strong>
                                            </div>
                                            <div class="col-3">
                                                <div class="progress" style="height: 4px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 75%"
                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center my-3">
                                            <div class="col">
                                                <strong>Databases</strong>
                                                <div class="my-0 text-muted small">Local, DC</div>
                                            </div>
                                            <div class="col-auto">
                                                <strong>+62%</strong>
                                            </div>
                                            <div class="col-3">
                                                <div class="progress" style="height: 4px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- .col-md-12 -->
                                </div> <!-- .row -->
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div> <!-- .col-md -->
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="card-title">
                                    <strong>Region</strong>
                                    <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="map-box"
                                    style="position: relative; width: 350px; min-height: 130px; margin:0 auto;">
                                    <div id="dataMapUSA"></div>
                                </div>
                                <div class="row align-items-center h-100 my-2">
                                    <div class="col">
                                        <p class="mb-0">France</p>
                                        <span class="my-0 text-muted small">+10%</span>
                                    </div>
                                    <div class="col-auto text-right">
                                        <span>118</span><br />
                                        <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center my-2">
                                    <div class="col">
                                        <p class="mb-0">Netherlands</p>
                                        <span class="my-0 text-muted small">+0.6%</span>
                                    </div>
                                    <div class="col-auto text-right">
                                        <span>1008</span><br />
                                        <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center my-2">
                                    <div class="col">
                                        <p class="mb-0">Italy</p>
                                        <span class="my-0 text-muted small">+1.6%</span>
                                    </div>
                                    <div class="col-auto text-right">
                                        <span>67</span><br />
                                        <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center my-2">
                                    <div class="col">
                                        <p class="mb-0">Spain</p>
                                        <span class="my-0 text-muted small">+118%</span>
                                    </div>
                                    <div class="col-auto text-right">
                                        <span>186</span><br />
                                        <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .col -->
                </div> <!-- / .row -->
            </div>
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection

