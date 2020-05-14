<?php view::layout('install/layout')?>

<?php view::begin('content');?>
	
<div class="mdui-container-fluid">
	<div class="mdui-typo">
	  <h1>Cài đặt chương trình <small> Phát hiện môi trường</small></h1>
	</div>

	<div class="mdui-table-fluid">
	  <table class="mdui-table">
	    <thead>
	      <tr>
	        <th>#</th>
            <th>Yêu cầu về môi trường</th>
            <th>Môi trường hiện tại</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>1</td>
	        <td>PHP > 5.5</td>
	        <?php if($check['php']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>2</td>
	        <td>curl support</td>
	        <?php if($check['curl']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>3</td>
	        <td>config/ thư mục có thể đọc và ghi được</td>
	        <?php if($check['config']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	      <tr>
	        <td>4</td>
	        <td>cache/ thư mục có thể đọc và ghi được</td>
	        <?php if($check['cache']): ?>
	        <td><i class="mdui-icon material-icons" style="color:#4caf50;">&#xe5ca;</i></td>
	        <?php else:?>
	        <td><i class="mdui-icon material-icons" style="color:#f44336;">&#xe5cd;</i></td>
	        <?php endif;?>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<br><br>
	<!--<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-left" href="?step=1">上一步</a>-->
	<?php if(array_sum($check) == count($check)):?>
	<a class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right" href="?step=1">Bước tiếp theo</a>
	<?php else:?>
	<button class="mdui-btn mdui-btn-raised  mdui-float-right disabled" disabled>Bước tiếp theo</button>
	<?php endif;?>
</div>

<?php view::end('content');?>