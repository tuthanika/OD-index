<?php view::layout('layout')?>

<?php view::begin('content');?>


<div class="mdui-container-fluid">
    <div class="nexmoe-item">
	
	<img class="mdui-img-fluid mdui-center" src="<?php e($item['downloadUrl']);?>"/>
	
	<div class="mdui-textfield">
	  <label class="mdui-textfield-label">Liên kết tải xuống</label>
	  <input class="mdui-textfield-input" type="text" value="<?php e($url);?>"/>
	</div>
	<div class="mdui-textfield">
	  <label class="mdui-textfield-label">Địa chỉ tham chiếu HTML</label>
	  <input class="mdui-textfield-input" type="text" value="<img src='<?php e($url);?>' />"/>
	</div>
        <div class="mdui-textfield">
	  <label class="mdui-textfield-label">Địa chỉ tham chiếu Markdown</label>
	  <input class="mdui-textfield-input" type="text" value="![](<?php e($url);?>)"/>
	</div>
       
    </div>
</div>

<a href="<?php e($url);?>" class="mdui-fab mdui-fab-fixed mdui-ripple mdui-color-theme-accent"><i class="mdui-icon material-icons">file_download</i></a>
<?php view::end('content');?>
