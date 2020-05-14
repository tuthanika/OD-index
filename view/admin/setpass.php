<?php view::layout('layout')?>

<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> Thay đổi mật khẩu <small> Thay đổi mật khẩu nền (không liên quan đến mật khẩu thư mục)</small></h1>
	</div>
	<form action="" method="post">
		<div class="mdui-textfield">
		  <h4> Mật khẩu cũ </h4>
		  <input class="mdui-textfield-input" type="password" name="old_pass" />
		</div>

		<div class="mdui-textfield">
		  <h4>Mật khẩu mới</h4>
		  <input class="mdui-textfield-input" type="password" name="password" />
		</div>

		<div class="mdui-textfield">
		  <h4>Lặp lại mật khẩu mới</h4>
		  <input class="mdui-textfield-input" type="password" name="password2" />
		</div>
		
	   <button type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right">
	   	<i class="mdui-icon material-icons">&#xe161;</i> Lưu
	   </button>
	</form>
</div>
<?php view::end('content');?>