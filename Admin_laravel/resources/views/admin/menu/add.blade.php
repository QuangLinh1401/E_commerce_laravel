@extends('admin.main')
@section('head')
    <script src="/template/admin/ckeditor/ckeditor.js"></script>
@endsection()
@section('content')
    <form action="" method="POST">
      <div class="card-body">

        <div class="form-group">
          <label for="menu">Tên Danh Mục</label>
          <input type="text" name="name" class="form-control" placeholder="Nhập Tên Danh Mục">
        </div>

        <div class="form-group">
            <label>Danh Mục</label>
            <select name="parent_id" class="form-control">
                <option value="0">Danh Mục Cha</option>
                @foreach ($menus as $menu)
                    <option value="{{$menu->id}}">{{$menu->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Mô Tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="menu">Ảnh sản phẩm</label>
            <input name="file" type="file" id="upload" class="form-control">
            <div id="image_show">

            </div>
            <input type="hidden" name="file" id="file">
        </div>

        <div class="form-group">
            <label>Mô Tả Chi Tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="active" name="active" value="1" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" type="radio" id="no_active" name="active" value="0">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
      </div>
      @csrf
    </form>
@endsection
@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
