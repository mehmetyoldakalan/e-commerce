<section id="icon-tabs">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <h4 class="card-title">Yeni Ürün Ekle</h4>
                    <button type="button" style="float: right" class="btn btn-outline-success" data-toggle="modal" data-target="#inlineForm">
                        Kategori Ekle
                    </button>
                </div>

                <div class="card-content">

                    <div class="card-body">

                        <form action="{{route('products.store')}}" method="post" class="icons-tab-steps wizard-circle" enctype="multipart/form-data">
                            @csrf
                            <!-- Step 1 -->
                            <h6><i class="step-icon feather icon-home"></i> Ürün Bilgileri</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Ürün Adı</label>
                                            <input type="text" name="title" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Liste Fiyatı</label>
                                            <input type="number" step="any" name="list_price" class="form-control"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">İndirimli Fiyat</label>
                                            <input type="number" step="any" name="discounted_price" class="form-control"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Stok Sayısı</label>
                                            <input type="number" name="stock_quantity" class="form-control"
                                                   id="jobtitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Durum</label>
                                            <select name="is_active"
                                                    class="select2-theme form-control select2-hidden-accessible"
                                                    id="">
                                                <option value="1">Aktif</option>
                                                <option value="0">Deaktif</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Ürün Kategorisi</label>
                                            <select name="category_id"
                                                    required
                                                    class="select2-theme form-control select2-hidden-accessible"
                                                    id="">
                                                @forelse($productCategories as $productCategory)
                                                    <option value="{{$productCategory->id}}">{{$productCategory->title}}</option>
                                                @empty
                                                    <option value="">Aktif Kategori Bulunamadı</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="shortDescription11">Ürün Ön Yazı :</label>
                                            <textarea maxlength="200" name="cover_letter" id="shortDescription11" rows="5"
                                                      class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDescription11">Ürün Açıklaması :</label>
                                            <textarea name="description" id="shortDescription11" rows="5"
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon feather icon-briefcase"></i> Ürün Özellikleri</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Uzunluk</label>
                                            <input type="number" name="length" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Genişlik</label>
                                            <input type="number" name="width" class="form-control" id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Yükseklik</label>
                                            <input type="number" name="height" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Mesafe Birimi</label>
                                            <input type="text" name="distance_unit" class="form-control"
                                                   id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Ağırlık</label>
                                            <input type="number" name="weight" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobtitle11">Kütle Birimi</label>
                                            <input type="text" name="mass_unit" class="form-control"
                                                   id="jobtitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Renk</label>
                                            <input type="color" name="color" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon feather icon-image"></i> Ürün Resimleri</h6>
                            <fieldset>
                                <div class="row" id="image-area">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Resim</label>
                                            <input type="file" name="image[]" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="proposalTitle11">Sıra</label>
                                            <input type="number" name="arrangement[]" class="form-control"
                                                   id="proposalTitle11">
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <i class="feather icon-plus-circle" onclick="addImageArea()"
                                               style="font-size: 25px"></i>
                                        </div>
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

    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                            <input type="text" placeholder="Kategori Adı" id="category_name" required class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button  wire:click="addProductCategory($('#category_name').val())" type="submit" class="btn btn-primary"  data-dismiss="modal">Onayla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
