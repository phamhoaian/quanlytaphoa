<div class="left-col pull-left">
    <div class="profile clearfix">
        <div class="img">
            <img src="<?php echo base_url().'public/images/common/profile-img.jpg'; ?>" alt="Profile" class="img-circle">
        </div>
        <div class="info">
            <span>Xin chào,</span>
            <h2>Phạm Ân</h2>
        </div>
    </div>
    <!-- /profile -->
    <div id="sidebar-menu">
        <ul class="nav side-menu">
            <li<?php if(isset($menu_active) && $menu_active == "home") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url(); ?>">
                    <i class="fa fa-home"></i>Tổng quan
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "invoice") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('invoice'); ?>">
                    <i class="fa fa-shopping-cart"></i>Đơn hàng
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "product") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('product'); ?>">
                    <i class="fa fa-barcode"></i>Hàng hóa
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "customer") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('customer'); ?>">
                    <i class="fa fa-users"></i>Khách hàng
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "supplier") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('supplier'); ?>">
                    <i class="fa fa-truck"></i>Nhà cung cấp
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "stock") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('stock'); ?>">
                    <i class="fa fa-list-alt"></i>Tồn kho
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "stock_receive") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('stock/receive'); ?>">
                    <i class="fa fa-share-square-o"></i>Nhập kho
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "turnover") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('turnover'); ?>">
                    <i class="fa fa-bar-chart"></i>Doanh số
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "payment") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('payment'); ?>">
                    <i class="fa fa-file-text"></i>Thu chi
                </a>
            </li>
            <li<?php if(isset($menu_active) && $menu_active == "profit") { echo " class='active'"; } ?>>
                <a href="<?php echo site_url('profit'); ?>">
                    <i class="fa fa-dollar"></i>Lợi nhuận
                </a>
            </li>
        </ul>
    </div>
    <!-- /sidebar-menu -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Thiếp lập">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a href="<?php echo site_url('sales'); ?>" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Bán hàng">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Đăng xuất">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /sidebar-footer -->
</div>
<!-- /left-col -->