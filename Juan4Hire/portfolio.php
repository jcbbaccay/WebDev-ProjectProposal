
<div class="gallery-item" tabindex="0">
	<?php 
        if(file_exists($ROW['image']))
        {
            $post_image = $ROW['image'];
            $post_desc = $ROW['post'];
	    	}
    ?>
    <a href = "delete.php?id=<?php echo $ROW['postid']?> ">
    <span class="delete">&times;</span> </a>
	<img src= <?php echo $post_image ?> class="gallery-image" title="<?php echo $post_desc ?>" id = "myImg" onclick="openModal();currentSlide(n)"/>
</div>

