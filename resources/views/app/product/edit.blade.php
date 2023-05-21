@extends('layouts.application')
@section('content-title', 'Ürün Düzenle')
@section('content')
    <livewire:product.product-edit :productId="$productId" />
    <script>
        function addImageArea() {
            $("#image-area").append(`
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
                          <input type="number" name="arrangement[]" required class="form-control"
                                 id="proposalTitle11">
                      </div>
                  </div>`)
        }
    </script>
@endsection
