@extends('layouts.application')
@section('content-title', 'Ürün Listesi')
@section('content')
    <style>
        .product-img {
            padding: -100px;
            transition: transform .2s;
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        .product-img:hover {
            transform: scale(1.5);
        }
    </style>
    <section id="data-thumb-view" class="data-thumb-view-header">
        @include('app.product.components.action-buttons')
        <!-- dataTable starts -->
        <div class="table-responsive">
            <table class="table data-thumb-view">
                <thead>
                <tr>
                    <th></th>
                    <th>Resim</th>
                    <th>Ürün Adı</th>
                    <th>Kategori</th>
                    <th>Stok Durumu</th>
                    <th>Sipariş Durumu</th>
                    <th>Liste Ücreti</th>
                    <th>İndirimli Ücret</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                    <td></td>
                    <td class="product-img">
                        <img src="{{ url('storage/product-images/'.$product->getFirstImage($product->id)->image ?? null) }}" style="max-width: 40%"
                             alt="Img placeholder">
                    </td>
                    <td class="product-name">{{$product->title}}</td>
                    <td class="product-category">{{$product->category->title}}</td>
                    <td>
                        <div class="progress progress-bar-success">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:50%"></div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">YAPIM AŞAMASINDA!</div>
                            </div>
                        </div>
                    </td>
                    <td class="product-list-price">{{$product->list_price}} ₺</td>
                    <td class="product-price">{{$product->discounted_price}} ₺</td>
                    <td class="product-action">
                        <span class="action-edit" data-edit-url="{{route('products.edit',['product' => $product->id])}}">
                            <i class="feather icon-edit"></i>
                        </span>
                        <span class="action-delete" data-destroy-url="{{route('products.destroy',['product' => $product->id])}}">
                            <i class="feather icon-trash"></i>
                        </span>
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- dataTable ends -->

        <!-- add new sidebar starts -->
        <div class="add-new-data-sidebar">
            <div class="overlay-bg"></div>
            <div class="add-new-data">
                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                    <div>
                        <h4 class="text-uppercase">Thumb View Data</h4>
                    </div>
                    <div class="hide-data-sidebar">
                        <i class="feather icon-x"></i>
                    </div>
                </div>
                <div class="data-items pb-3">
                    <div class="data-fields px-2 mt-3">
                        <div class="row">
                            <div class="col-sm-12 data-field-col">
                                <label for="data-name">Name</label>
                                <input type="text" class="form-control" id="data-name">
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-category"> Category </label>
                                <select class="form-control" id="data-category">
                                    <option>Audio</option>
                                    <option>Computers</option>
                                    <option>Fitness</option>
                                    <option>Appliance</option>
                                </select>
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-status">Order Status</label>
                                <select class="form-control" id="data-status">
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                    <option>Delivered</option>
                                    <option>On Hold</option>
                                </select>
                            </div>
                            <div class="col-sm-12 data-field-col">
                                <label for="data-price">Price</label>
                                <input type="text" class="form-control" id="data-price">
                            </div>
                            <div class="col-sm-12 data-field-col data-list-upload">
                                <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                    <div class="dz-message">Upload Image</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                    <div class="add-data-btn">
                        <button class="btn btn-primary">Add Data</button>
                    </div>
                    <div class="cancel-data-btn">
                        <button class="btn btn-outline-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- add new sidebar ends -->
    </section>
    <script>
        const createRoute = '{!! $routes['create'] ?? null !!}'
    </script>
@endsection
