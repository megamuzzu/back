		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="<?php echo base_url()?>assets/main/images/banner-main.jpg" alt="Main Banner">
			</div>
			<div class="container text-box" itemprop="description">
				<h1 class="banner-text">MY NEW HOME RECIPE</h1>
				<h2 class="banner-small-text">Your Own Home Food Recipe Website.</h2>
				<div class="banner-btn">
					<a href="#" class="banner-btn">Discover Now</a>
				</div>
			</div>
		</div>
	
		<div class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="img-about text-center">
							<img src="<?php echo base_url()?>assets/main/images/meat.jpg" alt="courses picture">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="heading-about text-center">
							<h1 class="description-head">About Us</h1>
						</div>
						<div class="description-about">
							<p class="about-p">When <strong>“MY NEW HOME RECIPE”</strong> re-propelled, we felt like nourishment media had turned out to be a lot of an exclusionary experience. It was constantly about watching other <strong>individuals — progressively capable individuals, honestly</strong> — make nourishment behind a counter. There was nothing about it that was welcoming … like a cool gourmet specialist gathering going on that standard individuals weren’t welcomed to.</p>
							<p class="about-p"><strong>We needed to make a space that was for everybody</strong> — individuals who jumped at the chance to eat more than they really preferred to cook. We made a spot that was as much about delectable, simple plans as it was about nourishment as a fun way of life and social marvel. We produce almost 200 plans every month, but at the same time we’re making recordings about our preferred brands, cafés, and stores, or famous people and their dietary patterns. In addition, we’re tied in with recounting to the insane sustenance stories you won’t discover anyplace else.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-about text-center">
							<h1 class="description-head">FRESH ARRIVAL</h1>
						</div>
					</div>
				</div>

				<div class="row recipe-row">


						<?php
								if (!empty($blog_dtl)) {
									foreach ($blog_dtl as $key => $value){
										$image = $value->image  != null ? $value->image: 'Recipe';


							?>


				
					<div class="col-sm-3 mt-5 mb-5">
						<a href="<?php echo base_url().'recipe-detail/'.$value->slug_url.'/'.$value->id;?>" style="text-decoration: none;">
							<div class="recipe-box">
								<div class="img-about text-center">
									<img src="<?php echo base_url()?>uploads/blogs/<?php echo $image?>" alt="courses picture" class="img-size">
								</div>
								<div class="heading-area">
									<a href="#">
										<h2 class="recipe-head"><?php echo $value->heading?></h2>
									</a>
								</div>
							</div>
						</a>
					</div>
				

				<?php
			}
			}
			else {?>

				
					<div class="col-sm-3">
						<a href="#" style="text-decoration: none;">
							<div class="recipe-box">
								<div class="img-about text-center">
									<img src="<?php echo base_url()?>assets/main/images/meat.jpg" alt="courses picture">
								</div>
								<div class="heading-area">
									<a href="#">
										<h2 class="recipe-head">Recipe name</h2>
									</a>
								</div>
							</div>
						</a>
					</div>
				 
					<?php
				}?>

				</div>
			</div>
		</div>






		<div class="about-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-about text-center">
							<h1 class="description-head">HIT RECIPES</h1>
						</div>
					</div>
				</div>

				<div class="row recipe-row">


						<?php
								if (!empty($blog_dtl_pkg)) {
									foreach ($blog_dtl_pkg as $key => $value){
										$image = $value->image  != null ? $value->image: 'Recipe';


							?>

				
					<div class="col-sm-3 mt-5 mb-5">
						<a href="<?php echo base_url().'recipe-detail/'.$value->slug_url.'/'.$value->id;?>" style="text-decoration: none;">
							<div class="recipe-box">
								<div class="img-about text-center">
									<img src="<?php echo base_url()?>uploads/blogs/<?php echo $image?>" alt="courses picture" class="img-size">
								</div>
								<div class="heading-area">
									<a href="#">
										<h2 class="recipe-head"><?php echo $value->heading?></h2>
									</a>
								</div>
							</div>
						</a>
					</div>
				

				<?php
			}
			}
			else {?>

				
					<div class="col-sm-3">
						<a href="#" style="text-decoration: none;">
							<div class="recipe-box">
								<div class="img-about text-center">
									<img src="<?php echo base_url()?>assets/main/images/meat.jpg" alt="courses picture">
								</div>
								<div class="heading-area">
									<a href="#">
										<h2 class="recipe-head">Recipe name</h2>
									</a>
								</div>
							</div>
						</a>
					</div>
				 
					<?php
				}?>

				</div>
			</div>
		</div>
	 
		 

		<div class="foot-area">
		</div>