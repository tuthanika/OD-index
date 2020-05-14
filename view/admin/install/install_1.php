<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>Cài đặt chương trình <small> ID ứng dụng và bí mật</small></h1>
	</div>

	<div class="mdui-typo">
      <h4 class="doc-article-title">
	    Điền vào<code>client_id</code>với<code>client_secret</code>,
      	<a href="<?php echo $app_url;?>" target="_blank" class="mdui-btn mdui-color-theme-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe89e;</i> Lấy ID ứng dụng và bí mật (hiển thị trong hai trang, vui lòng lưu lại)</a>
      </h4>
    </div>

	<form action="" method="post">
		<div class="mdui-textfield mdui-textfield-floating-label">
			<i class="mdui-icon material-icons">https</i>
			<label class="mdui-textfield-label">Client secret</label>
			<input type="text" type="text" class="mdui-textfield-input" name="client_secret" required value="<?php echo config('client_secret');?>"/>
			<div class="mdui-textfield-error">Client secret không thể để trống</div>
		</div>
		<br>
		<div class="mdui-textfield mdui-textfield-floating-label">
		  	<i class="mdui-icon material-icons">&#xe5c3;</i>
		  	<label class="mdui-textfield-label">Client_id</label>
		  	<input type="text" class="mdui-textfield-input" name="client_id" required value="<?php echo config('client_id');?>"/>
		  	<div class="mdui-textfield-error">Client Id không thể để trống</div>
		</div>
		<br>

		<div class="mdui-textfield mdui-textfield-floating-label">
		   <i class="mdui-icon material-icons">&#xe41a;</i>
		   <?php if($redirect_uri == 'https://ju.tn/'):?>
		   <label class="mdui-textfield-label">Vì trang web của bạn không<b>http://localhost/</b>. Sẽ được chuyển qua ju.tn</label>
		   <?php endif;?>
		   <label class="mdui-textfield-label"><?php echo $redirect_uri;?></label>
		   <input type="text" class="mdui-textfield-input" disabled  value="<?php echo $redirect_uri;?>"/>
		   <input type="hidden" class="mdui-textfield-input" name="redirect_uri" value="<?php echo $redirect_uri;?>"/>
		   <div class="mdui-textfield-error">URL chuyển hướng không thể để trống</div>
		</div>
		<br>
	 <a class="mdui-btn mdui-btn-raised mdui-float-left" href="?step=0">Trước</a>
	 <button class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" type="submit">Bước tiếp theo</button>
	</form>

	
</div>

<?php view::end('content');?>