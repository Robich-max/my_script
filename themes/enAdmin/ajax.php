<?php
foreach ($info as $key ) { ?>

<?php $pcs = json_decode($key->products, TRUE); foreach($pcs as $p) { ?>
<tr>
	<td><img src="<?php echo base_url("uploads")."/".add_thumb(get_info("products", $p['id'], "images") ,'_s') ?>" class="mr-3 rounded-lg" alt="..."></td>
	<td><?php echo get_info("products", $p['id'], "title"); ?></td>
<td><?php echo $p['q']; ?>
	<br/>
	
	<?php
												if(isset($p['options']) && $p['options'] != null)
												{
													$op = json_decode($p['options'], TRUE);
													if(!is_null($op)){
														foreach ($op as $key1 => $value1) {
															echo base64_decode(hex2bin($key1)), " : ", $value1, "<br>";
														}
													}
												}
	?>
</td>
	
	
	<td>
		
		<a class="btn btn-danger btn-circle btn-sm float-right" onclick="deletePrd(<?=$p['id'];?>);"><i class="fas fa-trash"></i></a>
	</td>
	
</tr>
<?php } }
?>