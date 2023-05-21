@extends('layouts.application')
@section('content-title', 'Todo')
@section('content')
    <section id="data-list-view" class="data-list-view-header">
        <div class="action-btns d-none">
            <div class="btn-dropdown mr-1 mb-1">
                <div class="btn-group dropdown actions-dropodown">
                    <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        İşlemler
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="multipleActions('destroy','{{$entity->routes['destroy']}}')" href="#"><i class="feather icon-trash"></i>Seçilenleri Sil</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTable starts -->
        <div class="table-responsive">
            <table class="table data-list-view">
                <thead>
                <tr>
                    <th></th>
                    <th>BAŞLIK</th>
                    <th>İÇERİK</th>
                    <th>İŞLEM</th>
                </tr>
                </thead>
                <tbody>
                @foreach($entity as $item)
                    <tr>
                        <td></td>
                        <td class="todo-name">{{$item->title}}</td>
                        <td class="todo-content">{{$item->content}}</td>
                        <td class="product-action">
                            <span class="action-edit"
                                  onclick="alert('test')"
                                  data-edit-url="{{$entity->routes['edit']}}"
                                  data-update-url="{{ $entity->routes['update'] }}"
                                  data-store-url="{{$entity->routes['store']}}"
                                  data-value="{{$item->id}}">
                                <i class="feather icon-edit"></i>
                            </span>
                            <span class="action-delete" data-url="{{ $entity->routes['destroy'] }}" data-value="{{$item->id}}">
                                <i class="feather icon-trash"></i>
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- DataTable ends -->

        <!-- add new sidebar starts -->
        <div class="add-new-data-sidebar">
            <div class="overlay-bg"></div>
            <div class="add-new-data">
                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                    <div>
                        <h4 class="text-uppercase">List View Data</h4>
                    </div>
                    <div class="hide-data-sidebar">
                        <i class="feather icon-x"></i>
                    </div>
                </div>
                <form id="listForm" action="{{route('app.todo.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="entity-id" value="">
                    <div class="data-items pb-3">
                        <div class="data-fields px-2 mt-3">
                            <div class="row">
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-name">Başlık</label>
                                    <input name="title" type="text" class="form-control" id="data-name">
                                </div>
                                <div class="col-sm-12 data-field-col">
                                    <label for="data-content">İçerik</label>
                                    <textarea name="content" class="form-control" id="data-content" cols="30"
                                              rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                        <div class="add-data-btn">
                            <button id="form-confirm-button" type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                        <div class="cancel-data-btn">
                            <button class="btn btn-outline-danger">İptal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- add new sidebar ends -->
    </section>
@endsection
