<ul>
	<li class="enmse-facebook"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $enmse_sharelink; ?>" target="_blank"><span><?php echo $enmse_sharefb; ?></span></a></li>
	<li class="enmse-twitter"><a href="https://twitter.com/intent/tweet?text=%22<?php echo stripslashes($enmse_singlemessage->title); ?>%22%20on%20<?php echo urlencode(bloginfo('name')); ?>:&url=%20<?php echo $enmse_sharelink; ?>" target="_blank"><span><?php echo $enmse_sharetw; ?></span></a></li>
	<li class="enmse-share-link"><a href="<?php echo rawurldecode($enmse_sharelink); ?>"><span><?php echo $enmse_sharepop; ?></span></a><input type="hidden" class="enmsecopylink" value="<?php echo rawurldecode($enmse_sharelink); ?>" /></li>
	<li class="enmse-email"><?php if ( $enmse_language == 1 ) { ?><a href="mailto:TypeEmailHere@address.com?subject=Check%20out%20%22<?php echo htmlspecialchars(stripslashes($enmse_singlemessage->title)); ?>%22%20on%20<?php echo urlencode(bloginfo('name')); ?>&body=Check%20out%20%22<?php echo htmlspecialchars(stripslashes($enmse_singlemessage->title)); ?>%22%20on%20<?php echo urlencode(bloginfo('name')); ?>%20at%20the%20link%20below:%0A%0A<?php echo $enmse_sharelink; ?>"><span><?php echo $enmse_shareemail; ?></span></a><?php } else { ?><a href="mailto:TypeEmailHere@address.com?body=<?php echo $enmse_sharelink; ?>"><span><?php echo $enmse_shareemail; ?></span></a><?php } ?></li>