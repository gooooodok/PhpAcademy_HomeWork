<h1>Books!</h1>

<form action="/index.php">
	<input type="hidden" name="page" value="book">
	Sort by:
	<select name='sort'>
		<option value="price">Price</option>
		<option value="title">Title</option>
	</select>

	Order:
	<select name="order">
		<option value="asc">ASC</option>
		<option value="desc">DESC</option>
	</select>

	<button>Go</button>
</form>

<br>

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


