<?php view::layout('layout')?>
<?php 
function getPHPExecutableFromPath() {
  $paths = explode(PATH_SEPARATOR, getenv('PATH'));
  foreach ($paths as $path) {
    if (strstr($path, 'php.exe') && isset($_SERVER["WINDIR"]) && file_exists($path) && is_file($path)) {
        return $path;
    }
    else {
        $php_executable = $path . DIRECTORY_SEPARATOR . "php" . (isset($_SERVER["WINDIR"]) ? ".exe" : "");
        if (file_exists($php_executable) && is_file($php_executable)) {
           return $php_executable;
        }
    }
  }
  return 'php'; // not found
}
$php_path = getPHPExecutableFromPath();
$script_path = $_SERVER['DOCUMENT_ROOT'].'/one.php';
?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> Bộ đệm trang <small> Xóa tất cả bộ đệm trang</small></h1>
	</div>
	<br>
	<br>
	<br>
	<div class="mdui-row-xs-3">
	  <form action="" method="post">
		  <div class="mdui-col">
			    <button type="submit" name="clear" class="mdui-btn mdui-btn-block mdui-color-theme-accent mdui-ripple">
			    	<i class="mdui-icon material-icons">&#xe14c;</i>
					Xóa tất cả bộ nhớ cache
			    </button>
		  </div>

		  <div class="mdui-col">
		  </div>

		  <div class="mdui-col">
			  <button type="submit" name="refresh" class="mdui-btn mdui-btn-block mdui-color-green-600 mdui-ripple">
	      			<i class="mdui-icon material-icons">&#xe028;</i>
					Xây dựng lại tất cả bộ nhớ cache
			  </button>
		  </div>
	  </form>
	</div>

	<div class="mdui-typo">
      <h4 class="doc-article-title">crontab thường xuyên làm mới bộ đệm <small> có thể cải thiện đáng kể hiệu năng truy cập hệ thống</small></h4>
      <p>
        Thêm lệnh sau vào crontab<Br>
      	<code>*/10 * * * *  <?php echo "{$php_path} {$script_path} cache:refresh";?></code>
      </p>
    </div>
	
</div>
<script>
$('button[name=refresh]').on('click',function(){
	mdui.snackbar({
		position: 'right-top',
		message: 'Xây dựng lại bộ đệm, xin hãy kiên nhẫn ...'
	});
});
</script>
<?php view::end('content');?>