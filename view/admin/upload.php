<?php view::layout('layout')?>
<?php view::begin('content');?>
<div class="mdui-container-fluid">

	<div class="mdui-typo">
	  <h1> Quản lý tải lên <small>Thêm và quản lý tải lên tập tin</small></h1>
	</div>

	<div class="mdui-row">
	  <form action="" method="post">
		  <div class="mdui-col-xs-7">
			<div class="mdui-textfield">
			  <label class="mdui-textfield-label">Tập tin / thư mục máy chủ</label>
			  <input name="local" class="mdui-textfield-input" type="text"/>
			</div>
		  </div>
		  <div class="mdui-col-xs-3">
			<div class="mdui-textfield">
			  <label class="mdui-textfield-label">Thư mục từ xa</label>
			  <input name="remote" class="mdui-textfield-input" type="text" value="/upload/"/>
			</div>
		  </div>
		  <div class="mdui-col-xs-2" style="padding-top: 34px;">
				<button type="submit" name="upload" value="1" class="mdui-btn mdui-btn-block mdui-color-green-600 mdui-ripple">
		      		<i class="mdui-icon material-icons">&#xe2c3;</i>
					Tải lên
				</button>
		  </div>
	  </form>
	</div>
	<br>
	<div class="mdui-typo">
	  <h5>Tiến trình tải lên <small></small></h5>
	</div>

	<div class="mdui-table-fluid">
	  <table class="mdui-table">
	    <thead>
	      <tr>
	        <th>Remote path</th>
	        <th>Tốc độ tải lên</th>
	        <th>Lịch trình</th>
	        <th>Trạng thái</th>
	        <th>Hoạt động</th>
	      </tr>
	    </thead>
	    <tbody>
		  <form action="" method="post">
		  <?php foreach( (array)$uploading as $i => $task ):?>
		      <tr>
		        <td><?php echo $task['remotepath'];?></td>
		        <td><?php echo onedrive::human_filesize($task['speed']).'/s';?></td>
		        <td><?php echo @floor($task['offset']/$task['filesize']*100).'%'; ?></td>
		        <?php if( $task['update_time'] == 0 ):?>
		        	<td>
			        	Đang chờ tải lên
		        	</td>
		        	<td>
			        	<button name="begin_task"  class="mdui-btn mdui-color-green-600 mdui-ripple" type="submit" name="remotepath" value="<?php echo $task['remotepath'];?>">Tải lên</button>
		        	</td>
		        <?php elseif(time() > ($task['update_time']+60)):?>
		        	<td>Tạm dừng</td>
		        	<td>
			        	<button name="begin_task"  class="mdui-btn mdui-color-green-600 mdui-ripple" type="submit" name="remotepath" value="<?php echo $task['remotepath'];?>">Tải lên</button>
		        	</td>
		        <?php else:?>
		        	<td>Đang tải lên</td>
		        	<td>
			        	<button name="delete_task" class="mdui-btn mdui-color-red mdui-ripple" type="submit" name="remotepath" value="<?php echo $task['remotepath'];?>">Xóa bỏ</button>
		        	</td>
		        <?php endif;?>
		      </tr>
		  <?php endforeach;?>
		  </form>
	    </tbody>
	  </table>
	</div>

	<br>
	<div class="mdui-typo">
	 <form action="" method="post">
	  <h5>Đã tải lên 
	  	<small>
		  	
		  	<button name="empty_uploaded" value="1" class="mdui-btn mdui-color-red mdui-ripple" type="submit" name="remotepath">Xóa hồ sơ đã tải lên</button>
		  	
	  	</small>
	  </h5>
	 </form>
	</div>

	<div class="mdui-table-fluid">
	  <table class="mdui-table">
	    <thead>
	      <tr>
	        <th>Remote path</th>
	        <th>Trạng thái</th>
	      </tr>
	    </thead>
	    <tbody>
		  <?php foreach( (array)$uploaded as $name => $status ):?>
		      <tr>
		        <td><?php echo $name;?></td>
		        <td><?php echo $status;?></td>
		  <?php endforeach;?>
	    </tbody>
	  </table>
	</div>
	
</div>
<script>
$('button[name=refresh]').on('click',function(){$('center').html('Xây dựng lại bộ đệm, xin hãy kiên nhẫn ...');});
</script>
<?php view::end('content');?>