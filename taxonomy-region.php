
<?php get_header(); ?>
	<img src="<?php echo get_template_directory_uri(); ?>/img/header_Spain.png" style="width:100%">
		<div class='hot_tours'>Горящие туры </br><?php echo single_cat_title();?></div>
		<div class="container-fluid tours">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-4 tour_image">
					
					
						<?php $slides=get_field('slides');?>
						<div class="slideshow">	
						<?php 
						foreach ($slides as $gallery){ ?>
							<div class="item">
							 <?php echo '<img src= "'.$gallery['thumb'].'"> ';?>
							</div>
							<?php 
								};
						?>
					</div>
				<p class="hotel_name_image"> <?php echo get_post_meta($post->ID, 'hotel', true);?> </p>		
				<p class="hotel_stars"> <img src="<?php echo get_template_directory_uri(); ?> /img/<?php echo get_post_meta($post->ID, 'hotel_stars', true);?>hotel_stars.png"></p>
				</div>
				<div class="col-md-3">
					<p class="hotel_name"><?php the_title();?></p>
					<div class="tour_description">
					<p class="room_describe"><?php echo get_post_meta($post->ID, 'room_describe', true);?></p>
					<p class="room_occupancy"><?php echo get_post_meta($post->ID, 'room_occupancy', true);?></p>
					<p class="tour_food"> Питание: <?php echo get_post_meta($post->ID, 'tour_food', true);?></p>	
					<p class="duration_nights"><?php echo get_post_meta($post->ID, 'duration_nights', true);?> ночей</p>
					</div>
				</div>

		 		<div class="col-md-3 hotel_description">
		 				<p class="hotel_describe"><?php echo get_post_meta($post->ID, 'hotel_describe', true);?></p>
				</div>

		 		<div class="col-md-2 tour_details">
					<p class='tour_fly'><?php echo get_post_meta($post->ID, 'tour_fly', true);?></p>
					<p class='tour_date'><?php $date=date_create(get_post_meta($post->ID, 'tour_date', true));
												echo date_format($date, "d.m.Y");?></p>
					<p class='tour_price'><?php echo get_post_meta($post->ID, 'tour_price', true);?></p>
					<button class='to_order'><img src="<?php echo get_template_directory_uri(); ?>/img/to_order.png"></button>
		 		</div>
	 		</div>

		<?php endwhile; ?>
		<div class="row">
			<div class="col-md-4 tour">
				<p class="add_describe">В стоимость включено:</p>
				<p class="room_describe">Проживание в 1/2 DBL</p>
				<p class="room_describe">Питание согласно выбранного типа</p>
				<p class="room_describe">Трансфер</p>
				<p class="room_describe">Перелет</p>
				<p class="room_describe">Страховка</p>
			</div>
			<div class="col-md-8 tour">
				<p class="add_describe">Дополнительно оплачивается:</p>
				<p class="room_describe">Виза</p>
			</div>
		</div>	
	</div>
<script>
		jQuery(document).ready(function($){
			 $(".slideshow").owlCarousel({
			 	singleItem:true,
		     	navigation:true,
		     	navigationText : false,
		     	pagination: false,
		     	rewindNav: true,
		     	rewindSpeed: 100
		     });
		}); 
			
	</script>	
<?php get_footer(); ?>