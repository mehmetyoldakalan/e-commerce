@extends('layouts.application')
@section('content-title', 'Anasayfa')
@section('content')

    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">92.6k</h2>
                        <p class="mb-0">Müşteri Sayısı</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-credit-card text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">97.5k</h2>
                        <p class="mb-0">Elde Edilen Gelir</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-danger p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">36%</h2>
                        <p class="mb-0">Çeyrek Yıl Satış Yüzdesi</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-package text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">97.5K</h2>
                        <p class="mb-0">Alınan Sipariş Toplamı</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-end">
                        <h4 class="card-title">Gelirler</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-start">
                                <div class="mr-2">
                                    <p class="mb-50 text-bold-600">Bu Ay</p>
                                    <h2 class="text-bold-400">
                                        <sup class="font-medium-1">₺</sup>
                                        <span class="text-success">86,589</span>
                                    </h2>
                                </div>
                                <div>
                                    <p class="mb-50 text-bold-600">Geçen Ay</p>
                                    <h2 class="text-bold-400">
                                        <sup class="font-medium-1">₺</sup>
                                        <span>73,683</span>
                                    </h2>
                                </div>

                            </div>
                            <div id="revenue-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-end">
                        <h4 class="mb-0">Hedefe Genel Bakış</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body px-0 pb-0">
                            <div id="goal-overview-chart" class="mt-75"></div>
                            <div class="row text-center mx-0">
                                <div class="col-6 border-top border-right d-flex align-items-between flex-column py-1">
                                    <p class="mb-50">Tamamlanan</p>
                                    <p class="font-large-1 text-bold-700">786,617</p>
                                </div>
                                <div class="col-6 border-top d-flex align-items-between flex-column py-1">
                                    <p class="mb-50">Devam Eden</p>
                                    <p class="font-large-1 text-bold-700">13,561</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tarayıcı İstatistikleri</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-25">
                                <div class="browser-info">
                                    <p class="mb-25">Google Chrome</p>
                                    <h4>73%</h4>
                                </div>
                                <div class="stastics-info text-right">
                                    <span>800 <i class="feather icon-arrow-up text-success"></i></span>
                                    <span class="text-muted d-block">13:16</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-primary mb-2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="73" aria-valuemin="73" aria-valuemax="100" style="width:73%"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-25">
                                <div class="browser-info">
                                    <p class="mb-25">Opera</p>
                                    <h4>8%</h4>
                                </div>
                                <div class="stastics-info text-right">
                                    <span>-200 <i class="feather icon-arrow-down text-danger"></i></span>
                                    <span class="text-muted d-block">13:16</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-primary mb-2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="8" aria-valuemin="8" aria-valuemax="100" style="width:8%"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-25">
                                <div class="browser-info">
                                    <p class="mb-25">Firefox</p>
                                    <h4>19%</h4>
                                </div>
                                <div class="stastics-info text-right">
                                    <span>100 <i class="feather icon-arrow-up text-success"></i></span>
                                    <span class="text-muted d-block">13:16</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-primary mb-2">
                                <div class="progress-bar" role="progressbar" aria-valuenow="19" aria-valuemin="19" aria-valuemax="100" style="width:19%"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-25">
                                <div class="browser-info">
                                    <p class="mb-25">Internet Explorer</p>
                                    <h4>27%</h4>
                                </div>
                                <div class="stastics-info text-right">
                                    <span>-450 <i class="feather icon-arrow-down text-danger"></i></span>
                                    <span class="text-muted d-block">13:16</span>
                                </div>
                            </div>
                            <div class="progress progress-bar-primary mb-50">
                                <div class="progress-bar" role="progressbar" aria-valuenow="27" aria-valuemin="27" aria-valuemax="100" style="width:27%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Yeni Müşteri/Mevcut Müşteri Oranları</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="client-retention-chart">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-end">
                        <h4>Cihaza Göre Oturumlar</h4>
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle px-0" type="button" id="dropdownItem1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Son 7 Gün
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                                <a class="dropdown-item" href="#">Son 28 Gün</a>
                                <a class="dropdown-item" href="#">Geçen Ay</a>
                                <a class="dropdown-item" href="#">Geçen Yıl</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body pt-0">
                            <div id="session-chart" class="mb-1"></div>
                            <div class="chart-info d-flex justify-content-between mb-1">
                                <div class="series-info d-flex align-items-center">
                                    <i class="feather icon-monitor font-medium-2 text-primary"></i>
                                    <span class="text-bold-600 mx-50">Desktop</span>
                                    <span> - 58.6%</span>
                                </div>
                                <div class="series-result">
                                    <span>2%</span>
                                    <i class="feather icon-arrow-up text-success"></i>
                                </div>
                            </div>
                            <div class="chart-info d-flex justify-content-between mb-1">
                                <div class="series-info d-flex align-items-center">
                                    <i class="feather icon-tablet font-medium-2 text-warning"></i>
                                    <span class="text-bold-600 mx-50">Mobile</span>
                                    <span> - 34.9%</span>
                                </div>
                                <div class="series-result">
                                    <span>8%</span>
                                    <i class="feather icon-arrow-up text-success"></i>
                                </div>
                            </div>
                            <div class="chart-info d-flex justify-content-between mb-50">
                                <div class="series-info d-flex align-items-center">
                                    <i class="feather icon-tablet font-medium-2 text-danger"></i>
                                    <span class="text-bold-600 mx-50">Tablet</span>
                                    <span> - 6.5%</span>
                                </div>
                                <div class="series-result">
                                    <span>-5%</span>
                                    <i class="feather icon-arrow-down text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between pb-0">
                        <h4 class="card-title">Müşteriler</h4>
                        <div class="dropdown chart-dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle px-0" type="button" id="dropdownItem3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Son 7 Gün
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem3">
                                <a class="dropdown-item" href="#">Son 28 Gün</a>
                                <a class="dropdown-item" href="#">Geçen Ay</a>
                                <a class="dropdown-item" href="#">Geçen Yıl</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body py-0">
                            <div id="customer-chart"></div>
                        </div>
                        <ul class="list-group list-group-flush customer-info">
                            <li class="list-group-item d-flex justify-content-between ">
                                <div class="series-info">
                                    <i class="fa fa-circle font-small-3 text-primary"></i>
                                    <span class="text-bold-600">Yeni</span>
                                </div>
                                <div class="product-result">
                                    <span>890</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between ">
                                <div class="series-info">
                                    <i class="fa fa-circle font-small-3 text-warning"></i>
                                    <span class="text-bold-600">Geri Gelen</span>
                                </div>
                                <div class="product-result">
                                    <span>258</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between ">
                                <div class="series-info">
                                    <i class="fa fa-circle font-small-3 text-danger"></i>
                                    <span class="text-bold-600">Yönlendirmeler</span>
                                </div>
                                <div class="product-result">
                                    <span>149</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
