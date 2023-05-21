@extends('layouts.application')
@section('content-title', 'Ürün Ekle')
@section('content')
    <livewire:product.product-create />
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
                          <input type="number" name="arrangement[]" class="form-control"
                                 id="proposalTitle11">
                      </div>
                  </div>`)
        }
    </script>
@endsection
