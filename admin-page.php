<div class="wrap">
	<h2>Sample Ajax</h2>
	<p>WordPress ajax sum function on the admin page</p>
	<?php wp_nonce_field('nonce_action', 'nonce_field'); ?>

	<table class="form-table">
		<tr>
			<th>Num 1</th>
			<td><input type="text" name="num_1"></td>
		</tr>
		<tr>
			<th>Num 2</th>
			<td><input type="text" name="num_2"></td>
		</tr>
		<tr>
			<th>Num 1 + Num 2</th>
			<td><input type="text" name="sum_result" readonly></td>
		</tr>
		<tr>
			<th colspan="2">
				<a btn-ajax-sum href="javascript:;" class="button button-primary">Sum Number</a>
			</th>
		</tr>
	</table>
</div>