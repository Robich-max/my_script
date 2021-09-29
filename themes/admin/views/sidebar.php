
	</div><!-- /col-9 -->
	</div><!-- /padding -->
</div>
<!-- /main -->
<!-- sidebar -->
<div class="column col-md-2 col-xs-12" id="sidebar">
	<ul class="sideBar">
		<li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-home"></i><i class="fa fa-chevron-left pull-left sideDown"></i>الصفحة الرئيسية</a></li>

		<?php $adp = ad_perm(); ?>

		<?php

		foreach($adp as $k => $key)
		{

			if(isset($key['options']))
			{
				echo '<li class="menu"><i class="fa fa-user"></i><i class="fa fa-chevron-down pull-left sideDown"></i>';
				echo $key['title'];
				echo '<ul class="sideChild">';
				foreach($key['options'] as $k)
				{
					echo '<li><a href="'.base_url("admin/".$k['url']).'"><i class="fa fa-file"></i> '.$k['title'].'</a></li>';
				}
				echo "</ul></li>";
			}else {
				echo '<li><a href="'.base_url("admin/".$key['url']).'"><i class="fa fa-arrow-circle-left"></i><i class="fa fa-chevron-left pull-left sideDown"></i> '.$key['title'].' </a></li>';
			}
		}


		?>

<!--
		<li><a href="<?php echo base_url('admin/users'); ?>"><i class="fa fa-user"></i><i class="fa fa-chevron-left pull-left sideDown"></i> الأعضاء </a></li>

		<li class="menu"><i class="fa fa-user"></i><i class="fa fa-chevron-down pull-left sideDown"></i>
			المواد التعليمية 
			<ul class="sideChild">
				<li><a href="<?php echo base_url('admin/adv'); ?>"><i class="fa fa-file"></i> الكل</a></li>
				<li><a href="<?php echo base_url('admin/adv/0'); ?>"><i class="fa fa-file"></i> بإنتظار الموافقة</a></li>
				<li><a href="<?php echo base_url('admin/adv/2'); ?>"><i class="fa fa-file"></i> مرفوضة</a></li>
				<li><a href="<?php echo base_url('admin/adv/1'); ?>"><i class="fa fa-file"></i> مفعلة</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url('admin/mat'); ?>"><i class="fa fa-envelope"></i><i class="fa fa-chevron-left pull-left sideDown"></i> المواد </a></li>
		<li><a href="<?php echo base_url('admin/classrooms'); ?>"><i class="fa fa-envelope"></i><i class="fa fa-chevron-left pull-left sideDown"></i> الفصول </a></li>
		<li><a href="<?php echo base_url('admin/lessons'); ?>"><i class="fa fa-envelope"></i><i class="fa fa-chevron-left pull-left sideDown"></i> الدروس </a></li>
		
		<li><a href="<?php echo base_url('admin/withrow'); ?>"><i class="fa fa-envelope"></i><i class="fa fa-chevron-left pull-left sideDown"></i> طلبات السحب </a> </li>
		<li><a href="<?php echo base_url('admin/ads'); ?>"><i class="fa fa-envelope"></i><i class="fa fa-chevron-left pull-left sideDown"></i> المساحات الإعلانية</a> </li>

		<li><a href="<?php echo base_url('admin/setting'); ?>"><i class="fa fa-gear"></i><i class="fa fa-chevron-left pull-left sideDown"></i>الإعددات </a></li>-->
	</ul>
</div>
<!-- /sidebar -->