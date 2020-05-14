<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>Cài đặt chương trình <small> Ràng buộc tài khoản Microsoft</small></h1>
	</div>


	 <a class="mdui-btn mdui-btn-raised mdui-float-left" href="?step=1">Trước</a>
	 <a href="<?php echo onedrive::authorize_url();?>" class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right"><i class="mdui-icon material-icons">&#xeb3d;</i> Tài khoản ràng buộc</a>
      
	</form>

	
</div>

<?php view::end('content');?>