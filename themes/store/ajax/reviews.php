				<?php foreach($votes as $vote) : ?>
					<div class="grid-item">

						<article class="card">
							<figure class="card__thumbnail">
								<?php if(!empty($vote->img)){ ?> <img src="<?php if (!filter_var($vote->img, FILTER_VALIDATE_URL)) { ?> reviews/<?php echo $vote->img; } else echo $vote->img; ?>"> <?php } ?>
							</figure>
							<header class="card__title">
								<h4><?php echo $vote->name; ?></h4>
							</header>
							<main class="card__description">

								<small><?php echo date("d/m/Y", $vote->date); ?></small>

								<fieldset class="rating">
									<input type="radio" id="star5<?=$vote->id;?>" disabled value="5" <?php if($vote->vote == 5) echo "checked"; ?> /><label class = "full" for="star5<?=$vote->id;?>"></label>
									<input type="radio" id="star4<?=$vote->id;?>" disabled value="4" <?php if($vote->vote == 4) echo "checked"; ?> /><label class = "full" for="star4<?=$vote->id;?>"></label>
									<input type="radio" id="star3<?=$vote->id;?>" disabled value="3" <?php if($vote->vote == 3) echo "checked"; ?> /><label class = "full" for="star3<?=$vote->id;?>"></label>
									<input type="radio" id="star2<?=$vote->id;?>" disabled value="2" <?php if($vote->vote == 2) echo "checked"; ?> /><label class = "full" for="star2<?=$vote->id;?>"></label>
									<input type="radio" id="star1<?=$vote->id;?>" disabled value="1" <?php if($vote->vote == 1) echo "checked"; ?> /><label class = "full" for="star1<?=$vote->id;?>"></label>
								</fieldset>

								<p><?php echo $vote->comment; ?></p>
							</main>
							<?php if(is_login("admin_login")){ ?>
							<footer class="container">
								<a class="btn red" onclick="delete_c(this, '<?=$vote->id;?>');"><i class="fa fa-remove"></i></a>
								<?php if($vote->ac == 0){ ?>
									<a class="btn green" onclick="approve_c(this, '<?=$vote->id;?>');"><i class="fa fa-check"></i></a>
								<?php } ?>

							</footer>
							<?php } ?>

						</article>

					</div>


				<?php endforeach; ?>