@extends('admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh mục sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                $message = \Illuminate\Support\Facades\Session::get('message');
                if ($message) {
                    echo '<p class="text-danger" style="color: red">' . $message . '</p>';
                    \Illuminate\Support\Facades\Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên danh mục</th>
                        <th>Mổ tả</th>
                        <th>Hiển thị</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_category_product as $key=> $cate_pro)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td>{{ $cate_pro->category_name }}</td>
                            <td>{{ $cate_pro->category_desc }}</td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($cate_pro->category_status == 0) {
                                    ?>
                                    <a href="{{\Illuminate\Support\Facades\URL::to('/unactive-category-product/'.$cate_pro->category_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-up"></span>
                                    </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="{{\Illuminate\Support\Facades\URL::to('/active-category-product/'.$cate_pro->category_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                    }
                                    ?>
                            </span></td>
                            <td>
                                <a href="{{\Illuminate\Support\Facades\URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không???')" href="{{\Illuminate\Support\Facades\URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-delete" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
