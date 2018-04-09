<div>
	Hello, <?= htmlspecialchars($this->name) ?>!
</div>
<ul>
	<?php
		foreach (
			$this->user as $users
		){
	?>		
	<li>
		<?= htmlspecialchars($users['name']) ?>
	</li>
	<?php
		}
	?>
</ul>