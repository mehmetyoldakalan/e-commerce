<section id="icon-tabs">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Ürün Güncelle</h4>
                    <button type="button" style="float: right" class="btn btn-outline-success" data-toggle="modal"
                            data-target="#inlineForm">
                        Kategori Ekle
                    </button>
                </div>

                <div class="card-content">

                    <div class="card-body">

                        <form action="{{route('products.update')}}" method="post" class="icons-tab-steps wizard-circle"
                              enctype="multipart/form-data">
                            @csrf
                            <h6><i class="step-icon feather icon-home"></i> Ürün Bilgileri</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="hidden" value="{{$product->id}}" name="id">
                                            <label for="proposalTitle11">Ürün Adı</label>
                                            <input type="text" name="title" class="form-control"
                                                   value="{{$product->title}}"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Liste Fiyatı</label>
                                            <input type="number" step="any" name="list_price" class="form-control"
                                                   value="{{$product->list_price}}"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">İndirimli Fiyat</label>
                                            <input type="number" step="any" name="discounted_price" class="form-control"
                                                   value="{{$product->discounted_price}}"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Stok Sayısı</label>
                                            <input type="number" name="stock_quantity" class="form-control"
                                                   value="{{$product->stock_quantity}}"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Durum</label>
                                            <select name="is_active"
                                                    class="select2-theme form-control select2-hidden-accessible"
                                                    id="">
                                                <option value="1" {{$product->is_active === '1' ? 'selected':''}}>
                                                    Aktif
                                                </option>
                                                <option value="0" {{$product->is_active === '0' ? 'selected':''}}>
                                                    Deaktif
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Ürün Kategorisi</label>
                                            <select name="category_id"
                                                    required
                                                    class="select2-theme form-control select2-hidden-accessible"
                                                    id="">
                                                @forelse($productCategories as $productCategory)
                                                    <option value="{{$productCategory->id}}" {{$product->category_id === $productCategory->id ? 'selected' : ''}}>
                                                        {{$productCategory->title}}
                                                    </option>
                                                @empty
                                                    <option value="">Aktif Kategori Bulunamadı</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="shortDescription11">Ürün Ön Yazı :</label>
                                            <textarea maxlength="200" name="cover_letter" id="shortDescription11"
                                                      rows="5"
                                                      class="form-control">{{$product->cover_letter}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription11">Ürün Açıklaması :</label>
                                            <textarea name="description" id="shortDescription11" rows="5"
                                                      class="form-control">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <h6><i class="step-icon feather icon-briefcase"></i> Ürün Özellikleri</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Uzunluk</label>
                                            <input type="number" name="length" class="form-control"
                                                   value="{{$product->attributes->length}}"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Genişlik</label>
                                            <input type="number" name="width" class="form-control"
                                                   value="{{$product->attributes->width}}" id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Yükseklik</label>
                                            <input type="number" name="height" class="form-control"
                                                   value="{{$product->attributes->height}}"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Mesafe Birimi</label>
                                            <input type="text" name="distance_unit" class="form-control"
                                                   value="{{$product->attributes->distance_unit}}"
                                                   id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Ağırlık</label>
                                            <input type="number" name="weight" class="form-control"
                                                   value="{{$product->attributes->weight}}"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Kütle Birimi</label>
                                            <input type="text" name="mass_unit" class="form-control"
                                                   value="{{$product->attributes->mass_unit}}"
                                                   id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Renk</label>
                                            <input type="color" name="color" class="form-control"
                                                   value="{{$product->attributes->color}}"
                                                   id="proposalTitle11">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h6><i class="step-icon feather icon-image"></i> Ürün Resimleri</h6>
                            <fieldset>
                                <div class="row" id="image-area">
                                    @foreach($product->images as $image)
                                        <div class="col-sm-2">
                                            <img src="{{ url('storage/product-images/'.$image->image) }}"
                                                 style="width: 150px;height: 150px"
                                                 alt="Img placeholder">
                                            <i onclick="removeImageConfirm({{$image->id}})" class="feather icon-x-circle"
                                               style="color: red"></i>
                                        </div>

                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="proposalTitle11">Resim</label>
                                                <input type="text" disabled class="form-control"
                                                       value="{{$image->image}}"
                                                       id="proposalTitle11">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label for="proposalTitle11">Sıra</label>
                                                <input type="number" disabled class="form-control"
                                                       value="{{$image->arrangement}}"
                                                       id="proposalTitle11">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group" style="float: right">
                                        <i class="feather icon-plus-circle" onclick="addImageArea()"
                                           style="font-size: 25px"></i>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-success">Onayla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Hızlı Kategori Ekle </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('products_category.store')}}" method="post">
                    <div class="modal-body">
                        <label>Kategori Adı</label>
                        <div class="form-group">
                            <input type="text" placeholder="Kategori Adı" id="category_name" required
                                   class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="addProductCategory($('#category_name').val())" type="submit"
                                class="btn btn-primary" data-dismiss="modal">Onayla
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade text-left" id="removeImageConfirm" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">İşlem Onayı </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="imageId" value="">
                    <h3>Silme işlemini onaylıyor musunuz?</h3>
                </div>
                <div class="modal-footer">
                    <div class="col-md-6">
                        <button wire:click="removeImage($('#imageId').val())" type="submit"
                                class="btn btn-danger col-md-12" data-dismiss="modal">Sil
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary col-md-12" data-dismiss="modal">İptal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function removeImageConfirm(imageId) {
            $("#imageId").val(imageId)
            $("#removeImageConfirm").modal('show')
        }
    </script>
</section>
