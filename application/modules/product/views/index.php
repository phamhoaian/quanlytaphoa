<div class="page-title">
    <div class="row">
        <div class="col-md-6 title">
            <h3>Hàng hóa</h3>
        </div>
        <div class="col-md-6 text-right">
            <div class="btn-group">
                <button type="button" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    <span>Thêm mới</span>
                </button>
                <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#addProduct">
                            <i class="fa fa-plus"></i>
                            <span>Thêm hàng hóa</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#addProductCategory">
                            <i class="fa fa-plus"></i>
                            <span>Thêm nhóm hàng</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- page-title -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div style="display:none">
            <input type="hidden" name="boxChecked" value="">
        </div>
        <div class="row MT10 MB20">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="input-group">
                    <input type="text" placeholder="Nhập tên hoặc mã hàng hóa và enter" class="form-control">
                    <span class="input-group-btn">
                        <select name="filter" class="form-control" style="width:220px">
                            <option value="0" selected="selected">Hàng đang kinh doanh</option>
                            <option value="1">Hàng đã ngừng kinh doanh</option>
                            <option value="2">Hàng đã xóa</option>
                        </select>
                    </span>
                    <span class="input-group-btn">
                        <select name="filter" class="form-control" style="width:170px">
                            <option value="0" selected="selected">Tất cả nhóm hàng</option>
                            <option value="1">Gia dụng</option>
                            <option value="2">Mì</option>
                            <option value="3">Nước</option>
                            <option value="2">Sữa</option>
                        </select>
                    </span>
                    <span class="input-group-btn">
                        <select name="filter" class="form-control" style="width:180px">
                            <option value="0" selected="selected">Tất cả nhà cung cấp</option>
                            <option value="1">Kim Anh</option>
                        </select>
                    </span>
                    <span class="input-group-btn">
                        <button class="btn btn-primary">
                            <i class="fa fa-search"></i>
                            <span>Tìm kiếm</span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table jambo_table">
                        <colgroup>
                            <col width="3%">
                            <col width="10%">
                            <col width="15%">
                            <col width="10%">
                            <col width="10%">
                            <col width="10%">
                            <col width="7%">
                            <col width="10%">
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>
                                <th class="column-title">Mã hàng hóa</th>
                                <th class="column-title">Tên hàng hóa</th>
                                <th class="column-title">Đơn vị tính</th>
                                <th class="column-title">Nhóm hàng</th>
                                <th class="column-title">Nhà cung cấp</th>
                                <th class="column-title text-center">Tồn kho</th>
                                <th class="column-title text-right">Giá vốn</th>
                                <th class="column-title text-right">Giá bán</th>
                                <th class="column-title text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" class="flat" name="id[]" value="1">
                                </td>
                                <td>SP00003</td>                                                    
                                <td>Mì Hảo Hảo</td>
                                <td>Gói</td>
                                <td>Mì</td>
                                <td>Kim Anh</td>
                                <td class="text-center">20</td>
                                <td class="text-right">2,800</td>
                                <td class="text-right">3,500</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editProduct">
                                        <i class="fa fa-edit"></i>
                                        <span>Chỉnh sửa</span>
                                    </button>
                                    <a href="#" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i>
                                        <span>Xóa</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="flat" name="id[]" value="1">
                                </td>
                                <td>SP00002</td>
                                <td>Sting dâu</td>
                                <td>Chai</td>
                                <td>Nước</td>
                                <td>Kim Anh</td>
                                <td class="text-center">6</td>
                                <td class="text-right">7,500</td>
                                <td class="text-right">9000</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editProduct">
                                        <i class="fa fa-edit"></i>
                                        <span>Chỉnh sửa</span>
                                    </button>
                                    <a href="#" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i>
                                        <span>Xóa</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" class="flat" name="id[]" value="1">
                                </td>
                                <td>SP00001</td>
                                <td>Khăn giấy ướt</td>
                                <td>Gói</td>
                                <td>Gia dụng</td>
                                <td>Kim Anh</td>
                                <td class="text-center">4</td>
                                <td class="text-right">8,500</td>
                                <td class="text-right">10,000</td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editProduct">
                                        <i class="fa fa-edit"></i>
                                        <span>Chỉnh sửa</span>
                                    </button>
                                    <a href="#" class="btn btn-xs btn-danger">
                                        <i class="fa fa-trash"></i>
                                        <span>Xóa</span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <label>
                            <span>Hiển thị</span>
                            <select name="limit" id="limit" style="padding: 5px;">
                                <option value="10" selected="selected">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="0">Tất cả</option>
                            </select>
                        </label>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                        <div class="paging">
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">&gt;</a>
                        </div>
                    </div>
                </div>
                <div id="editProduct" class="modal animated fadeInDown" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Thông tin hàng hóa</h4>
                            </div>
                            <div class="modal-body">
                                <h3 class="MT0" style="color:#006fa9">Phở bò phố cổ</h3>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/product.jpg" alt="Product">
                                    </div>
                                    <div class="col-md-5">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <strong>Mã hàng hóa :</strong>
                                                        </td>
                                                        <td>
                                                            SP000001
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <strong>Đơn vị tính :</strong>
                                                        </td>
                                                        <td>
                                                            <input type="text" value="Gói" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <strong>Nhóm hàng :</strong>
                                                        </td>
                                                        <td>
                                                            <select name="filter" class="form-control">
                                                                <option value="1">Gia dụng</option>
                                                                <option value="2" selected="selected">Mì</option>
                                                                <option value="3">Nước</option>
                                                                <option value="2">Sữa</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <strong>Nhà cung cấp :</strong>
                                                        </td>
                                                        <td>
                                                            <select name="filter" class="form-control">
                                                                <option value="1" selected="selected">Kim Anh</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <strong>Tồn kho :</strong>
                                                        </td>
                                                        <td>20</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <strong>Giá vốn:</strong>
                                                        </td>
                                                        <td>
                                                            <input type="text" value="2,800" class="form-control">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="vertical-middle">
                                                            <strong>Giá bán :</strong>
                                                        </td>
                                                        <td>
                                                            <input type="text" value="3,500" class="form-control">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">
                                    <i class="fa fa-floppy-o"></i>
                                    <span>Cập nhật</span>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <i class="fa fa-lock"></i>
                                    <span>Ngừng kinh doanh</span>
                                </button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">
                                    <i class="fa fa-close"></i>
                                    <span>Đóng</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /list-product -->
<div id="addProduct" class="modal animated fadeInDown" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm hàng hóa</h4>
            </div>
            <div class="modal-body">
                <h5 class="MT0" style="color:#006fa9"><strong>Thông tin chung</strong></h5>
                <div class="row">
                    <div class="form-horizontal col-md-9 col-md-offset-1">
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Tên hàng hóa</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Nhập tên hàng hóa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Nhóm hàng</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <select name="filter" class="form-control">
                                        <option value="1">Gia dụng</option>
                                        <option value="2" selected="selected">Mì</option>
                                        <option value="3">Nước</option>
                                        <option value="2">Sữa</option>
                                    </select>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProductGroup" title="Thêm mới nhóm hàng">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Nhà cung cấp</label>
                            <div class="col-md-8">
                                <select name="filter" class="form-control">
                                    <option value="1">Kim Anh</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Giá vốn</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control text-right" value="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Giá bán</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control text-right" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="MT0" style="color:#006fa9"><strong>Thông tin mở rộng</strong></h5>
                <div class="row">
                    <div class="form-horizontal col-md-9 col-md-offset-1">
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Đơn vị tính</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="Nhập đơn vị của hàng hóa: hộp, lốc...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-4">Hình ảnh</label>
                            <div class="col-md-8">
                                <input type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">
                    <i class="fa fa-floppy-o"></i>
                    <span>Lưu</span>
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    <span>Đóng</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /addProduct -->
<div id="addProductCategory" class="modal animated fadeInDown" role="dialog">
    <?php
        $attributes = array(
            "name" => "categoryForm",
            "id" => "categoryForm"
        );
        $name = array(
            "name" => "name",
            "id" => "name",
            "class" => "form-control",
            "value" => set_value('name'),
            "placeholder" => "Nhập tên nhóm hàng"
        );
    ?>
    <?php echo form_open(site_url('product/addProductCategory'), $attributes); ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thêm nhóm hàng</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-horizontal col-md-9 col-md-offset-1">
                        <div class="form-group">
                            <label for="<?php echo $name['id']; ?>" class="control-label col-md-4">Tên nhóm hàng</label>
                            <div class="col-md-8">
                                <?php echo form_input($name); ?>
                                <?php echo form_error($name["name"]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-floppy-o"></i>
                    <span>Lưu</span>
                </button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    <span>Đóng</span>
                </button>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<!-- /addProductCategory -->
<script type="text/javascript">
    $(document).ready(function () {
        $('input.flat').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    });

    $('table input').on('ifChecked', function () {
        $(this).parent().parent().parent().addClass('selected');
        $(this).attr("checked", true);
        $("input[name=boxChecked]").val($("input[name='id[]']:checked").length);
    });
    $('table input').on('ifUnchecked', function () {
        $(this).parent().parent().parent().removeClass('selected');
        $(this).attr("checked", false);
        $("input[name=boxChecked]").val($("input[name='id[]']:checked").length);
    });
    $('input#check-all').on('ifChecked', function () {
        $("input[name='id[]']").iCheck('check');
        $("input[name='id[]']").attr("checked", true);
        $("input[name=boxChecked]").val($("input[name='cat_id[]']:checked").length);
    });
    $('input#check-all').on('ifUnchecked', function () {
        $("input[name='id[]']").iCheck('uncheck');
        $("input[name='id[]']").attr("checked", false);
        $("input[name=boxChecked]").val(0);
    });
</script>