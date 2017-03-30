<h1>Books!</h1>

<div class='books'>
	<?php foreach ($books as $key => $book) : ?> 
		<div class='book-item'>
			<div><?=$book['title']?></div>
			<hr>
			<?=$book['price']?>
			<br>
			<br>
			<a href="index.php?page=book_item&amp;id=<?=$book['id']?>">Details</a>
		</div>
	<?php endforeach ?>
</div>


