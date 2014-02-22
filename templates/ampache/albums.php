<?php
print '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
?>
<root>
	<?php foreach ($_['albums'] as $album): ?>
		<album id='<?php p($album->getId())?>'>
			<name><?php p($album->getNameString($_['api']))?></name>
			<artist id='<?php p($_['artist']->getId())?>'><?php p($_['artist']->getName())?></artist>
			<tracks><?php p($album->getTrackCount())?></tracks>
			<rating>0</rating>
			<year><?php p($album->getYear())?></year>
			<disk>1</disk>
			<art></art>
			<preciserating>0</preciserating>
		</album>
	<?php endforeach;?>
</root>
