<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">
	<div class="mdui-col-md-6 mdui-col-offset-md-3">
	  <center><h1 class="mdui-typo-display-2-opacity">Ai là người đẹp trai nhất thế giới?</h1></center>
	  <form action="" method="post">
		  <div class="mdui-textfield mdui-textfield-floating-label">
		    <i class="mdui-icon material-icons">https</i>
		    <label class="mdui-textfield-label">Bạn chỉ có thể đọc nó nếu bạn hiểu đúng</label>
		    <input name="password" class="mdui-textfield-input" type="password"/>
		  </div>
		  <br>
		  <button type="submit" class="mdui-center mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme">
		  	<i class="mdui-icon material-icons">fingerprint</i>
		  	chính anh ta！
		  </button>
	  </form>
	</div>
</div>
<?php view::end('content');?>