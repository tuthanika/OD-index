<?php view::layout('layout')?>

<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> Cài đặt hiển thị tập tin <small>Hiển thị theo các hậu tố khác nhau. Không có hậu tố cài đặt, tải trực tiếp</small></h1>
	</div>
	<form action="" method="post">
		<?php foreach($show as $n=>$ext):?>
			<div class="mdui-textfield">
			  <h4><?php echo $names[$n];?></h4>
			  <input class="mdui-textfield-input" type="text" name="<?php echo $n;?>" value="<?php echo join(' ', $ext);?>"/>
			</div>
		<?php endforeach;?>

	   <button type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right">
	   	<i class="mdui-icon material-icons">&#xe161;</i> Lưu
	   </button>
	</form>
</div>
<?php view::end('content');?>