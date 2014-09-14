<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */

?>
<div class="wrap">
	<h1>Layouts</h1>
	
	<div class="metabox-holder">
		<div id="normal-sortables" class="meta-box-sortables ui-sortable rows" >
		<?php if (!empty($list)): ?>
			<?php foreach($list as $k => $v): ?>
				<div class="col-lg-4">
					<div id="item-<?php echo $k; ?>" class="postbox">
						<div class="handlediv" title="Click to toggle"><br></div><h3 class="hndle"><span><?php echo $v['name'] ?></span></h3>
						<div class="inside">
							<div class="main">
								123
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
</div>