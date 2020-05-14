<?php view::layout('layout')?>

<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> Cài đặt cơ bản <small>Đặt tham số cơ bản One Index</small></h1>
	</div>
	<form action="" method="post">
		<div class="mdui-textfield">
		  <h4>Tên trang web</h4>
		  <input class="mdui-textfield-input" type="text" name="site_name" value="<?php echo $config['site_name'];?>"/>
		</div>

		<div class="mdui-textfield">
		  <h4Chủ đề trang web<small></small></h4>
		  <select name="style" class="mdui-select">
			  <?php 
				foreach(scandir(ROOT.'view') as $k=>$s){
				    $styles[$k] = trim($s, '/');
				}
				$styles = array_diff($styles, [".", "..", "admin"]);
				$style = config("style")?config("style"):'material';
				$cache_type  = config("cache_type")?config("cache_type"):'secache';
			 	foreach($styles as $style_name):
			  ?>
			  <option value ="<?php echo $style_name;?>" <?php echo ($style==$style_name)?'selected':'';?>><?php echo $style_name;?></option>
			  <?php endforeach;?>
		  </select>
		</div>

		<div class="mdui-textfield">
		  <h4>Thư mục bắt đầu OneDrive (trống như thư mục gốc)<small>Ví dụ: Chỉ chia sẻ thư mục chia sẻ /share</small></h4>
		  <input class="mdui-textfield-input" type="text" name="onedrive_root" value="<?php echo $config['onedrive_root'];?>"/>
		</div>


		<div class="mdui-textfield">
		  <h4>Cần ẩn thư mục<small> Không cần liệt kê các thư mục (một thư mục trên mỗi dòng) Có hiệu lực sau khi xóa bộ đệm</small></h4>
		  <textarea class="mdui-textfield-input" placeholder="Nhập và nhập nguồn sau khi nhập" name="onedrive_hide"><?=@$config['onedrive_hide'];?></textarea>
		  <small>Đây là nhận dạng ký tự đại diện, nghĩa là các thư mục ký tự ở trên sẽ bị ẩn</small>
		</div>

		<div class="mdui-textfield">
		  <h4>Chuỗi chống trộm (danh sách trắng)<small> Nếu nó không được điền vào, nó sẽ không được kích hoạt. <code>;</code> Tách</small></h4>
		  <input class="mdui-textfield-input" name="onedrive_hotlink" value="<?=@$config['onedrive_hotlink'];?>"/>
		  <small> Hỗ trợ ký tự đại diện: <code>*.domain.com</code></small>
		</div>

		<div class="mdui-textfield">
		  <h4>Loại bộ đệm<small></small></h4>
		  <select name="cache_type" class="mdui-select">
			  <?php 
			 	foreach(['secache', 'filecache', 'memcache', 'redis'] as $type):
			  ?>
			  <option value ="<?php echo $type;?>" <?php echo ($type==$cache_type)?'selected':'';?>><?php echo $type;?></option>
			  <?php endforeach;?>
		  </select>
		</div>

		<div class="mdui-textfield">
		  <h4>Thời gian hết hạn bộ nhớ cache (giây)</h4>
		  <input class="mdui-textfield-input" type="text" name="cache_expire_time" value="<?php echo $config['cache_expire_time'];?>"/>
		</div>

		<div class="mdui-textfield">
		  <h4>Xóa khỏi thanh địa chỉ<code style="color: #c7254e;background-color: #f7f7f9;font-size:16px;">/?/</code> (Cần hợp tác với việc sử dụng giả tĩnh !!)</h4>
		  <label class="mdui-textfield-label"></label>
		  <label class="mdui-switch">
			  <input type="checkbox" name="root_path" value="?" <?php echo empty($config['root_path'])?'checked':'';?>/>
			  <i class="mdui-switch-icon"></i>
		  </label>
		</div>
		

		

	   <button type="submit" class="mdui-btn mdui-color-theme-accent mdui-ripple mdui-float-right">
	   	<i class="mdui-icon material-icons">&#xe161;</i> Lưu
	   </button>
	</form>
</div>
<?php view::end('content');?>
