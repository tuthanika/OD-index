<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>Cài đặt chương trình <small> Hoàn tất cài đặt</small></h1>
	</div>

<?php if($refresh_token):?>
	<h1 class='mdui-text-color-green'>Chương trình được cài đặt thành công.!</h1>
	<br><br>
	<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-left" href="?/admin/" ><i class="mdui-icon material-icons">&#xe8b8;</i> Nền tảng quản lý</a>(Mật khẩu ban đầu: oneindex)
	<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" href="./"><i class="mdui-icon material-icons">&#xe2c7;</i> Truy cập trang web</a>
<?php else:?>
	<h1  class='mdui-text-color-red'>Việc cài đặt chương trình thất bại!</h1>
	<br><br>
	<a class="mdui-btn mdui-btn-raised mdui-float-left" href="?step=2">Rebind</a>
<?php endif;?>


	
</div>

<?php view::end('content');?>