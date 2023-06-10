@extends('layouts.application')
@section('content-title', 'Ürün Arşivi')
@section('content')
    <section id="data-thumb-view" class="data-thumb-view-header">
        @include('app.product.components.action-buttons')
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
                    <th>Durum</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td></td>
                        <td class="product-img">
                            <img src="{{ url('storage/product-images/'.$product->getFirstTrashedImage($product->id)->image ?? null) }}" style="max-width: 40%"
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
                        <td class="product-price">
                            @if((int)$product->is_active === 0)
                                Arşivlenmiş
                            @elseif($product->deleted_at)
                                Silinmiş
                            @endif
                        </td>
                        <td>
                            <span class="action-edit" title="Aktif Et" data-edit-url="{{route('products.edit',['product' => $product->id])}}">
                            <i class="feather icon-repeat"></i>
                        </span>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


    </section>
    <script>
        const createRoute = '{!! $routes['create'] ?? null !!}'
    </script>
@endsection
