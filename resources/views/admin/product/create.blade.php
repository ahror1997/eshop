@extends("admin.layout")

@section("content")
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Продукт</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route("admin.products.index")}}">Продукт</a></li>
                            <li class="breadcrumb-item active">Добавить</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Создать новый</h3>
                            </div>
                            <form action="{{route("admin.products.store")}}" enctype="multipart/form-data" autocomplete="off" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Название">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Категория</label>
                                        <select class="custom-select" name="category_id" id="category_id">
                                            <option selected>Выберите категория</option>
                                            @foreach ($categories as $key => $value)
                                                <option value="{{$value->id}}">{{$value->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Стоимость</label>
                                        <input type="text" name="price" class="form-control" id="price" placeholder="Стоимость">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Описание</label>
                                        <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                                    </div>
                                    <div class="form-group">
                                        <label for="size">Размер</label>
                                        <input type="text" name="size" class="form-control" id="size" placeholder="Размер">
                                    </div>
                                    <div class="form-group custom-file mb-3">
                                        <input type="file" name="poster" class="custom-file-input" id="poster">
                                        <label class="custom-file-label" for="poster">Выберите постер</label>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
