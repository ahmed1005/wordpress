<?php
/*
	Template Name: Home Page
*/

// Custom Fields
$PT_Packages                    = get_post_meta( 15,'PT_Packages', true  );
$60_minutes_one_to_one_PT       = get_post_meta( 15,'60_minutes_one_to_one_PT', true  );
$30_minutes_one_to_one_PT       = get_post_meta( 15,'join_now' , true );
$join_now_url                   = get_post_meta( 15,'join_now_url' , true );
$button_text                    = get_post_meta( 15,'button_text' , true );
$optin_text                     = get_post_meta( 15,'optin_text' , true );
$optin_button_text              = get_post_meta( 15,'optin_button_text' , true );

// Advanced Custom Fields
$section-header_image                    = get_field('section-header_image');
$how_you_can_get_healthy_title           = get_field('how_you_can_get_healthy_title');
$how_you_can_get_healthy_description     =get-field('how_you_can_get_healthy_description');
$reason_1_title                          =get_field('reason_1_title');
$reason_2_title                          =get_field('reason_2_title');
$reason_1_description                    =get_field('reason_1_description');
$reason_2_description                    =get_field('reason_2_description');





get_header(); ?>

	<!-- HERO
	--------------------------------------------------------- -->

	<section id="hero" data-type="background" data-speed="5">
	    <article>
	        <div class="container clearfix">
	            <div class="row">
	                <dive class="col-sm-5">
	                     <img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/logo-badge.png" alt="fitness image" class="logo" width="300" height="150">
	       	                </dive><!-- col -->
	                       <div class="col-sm-7 hero-text">
                           <h1><?php bloginfo('name'); ?></h1>
                           <p class="lead"><?php bloginfo('description'); ?></p>

                           <div id="DD-PT">
                               <div class="price active">
                                <h4>PT Packages <smal>No joing fee</smal></h4>
                                   <span><?php echo $PT_Packages; ?></span>
                               </div>

                               <div class="price">
                                  <h4>60 minutes one to one PT  <smal>No joing fee</smal></h4>
                                   <span><?php echo $60_minutes_one_to_one_PT; ?></span>

                               </div>

                               <div class="price">
                                  <h4>30 minutes one to one PT  <smal>No joing fee</smal></h4>
                                   <span><?php echo $30_minutes_one_to_one_PT; ?></span>

                               </div>
                           </div>
	                           <p><a class="btn btn-lg btn-danger" href="<?php echo $join_now_url; ?>/" role="button"><?php echo $button_text; ?></a></p>
	                       </div><!-- col -->

	            </div><!--row-->
	        </div> <!--container -->
	    </article>


	</section><!-- hero-->

	<!-- OPT IN SECTION
	--------------------------------------------------------- -->

	<section id="optin">
    <div class="container">
       <div class="row">
           <div class="col-sm-8">
              <p class="lead"><?php echo $optin_text; ?></p>

           </div><!--col -->

           <div class="col-sm-4">
               <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myMoadl">
                <?php echo $optin_button_text; ?>

               </button>
           </div>
       </div><!-- row -->


    </div><!-- container -->


	</section><!-- optin -->

	<!-- Get fitter
	--------------------------------------------------------- -->

	<section>

	   	<div class="container">

			<div class="section-header">
			
			 <!-- if user uploaded an image -->
			<?php if( !empty($section-header_image) ) : ?>
            
			    <img scr="<?php echo $section-header_image ['url']; ?>" alt="<?php echo $section-header_image ['alt']; ?>">
			
			<?php endif; ?>					
				
				<h2>How You Can Get Healthy</h2>
			</div><!-- section-header -->

			<p class="lead">Drink filtered water. Water helps remove metabolic wastes (toxins) and will provide you with more energy for your activities. Aim for two to three litres per day.
Avoid sugar. Not only will sugar keep you fat, it can also set you up for sickness. Try the sweetness of stevia, a natural herb found in your local health food store. Stevia will keep your blood sugar stable while aiding in fat loss.
Eat every 2.5 to three hours. Eating revs up our metabolism to allow for quicker fat loss, keeps our minds sharp, and provides consistent energy throughout the day. Learn to eat till you are satisfied and not overfull so that you are hungry again for your next small meal.
Get your eight essential amino acids. Have protein at every meal or food-combine. Try a high-quality protein shake.
Eat “raw foods” every day. Raw foods are live foods and give us energy. Choose organic for their incredible taste and to avoid unwanted pesticides and herbicides (toxins).
There is nobody else like you, so your nutritional requirements are also unique. This is where a nutritional counsellor can help you create healthier habits and tasty alternatives that will fit your lifestyle. &mdash; Join us today and let me help you with your goles:</p>
			<div class="row">
				<div class="col-sm-6">
					<h3>Walk, Swim, Hike, Bike</h3>
					<p>See your health care provider before beginning any form of cardiovascular exercise. Obese people have a higher incidence of joint trauma when exercising; jarring motions should be altered during training.
Week one should involve a one-hour walk every day for that week.
After week one, aim for three to five days of cardio training for 20 to 60 minutes, as recommended by the American College of Sports Medicine.
Exercising too soon after a full meal can compromise oxygen and nutrient delivery to your working muscles (where you need it).
Always start with a warm-up and end with a cool-down for five to 10 minutes at a low intensity.
Stretch before, during, and after exercise. This will help improve your post workout recovery, keeping you pain-free with higher amounts of energy.
Maintain your heart rate at the “Healthy Heart Zone.” According to Chad Tackett, president of Global Fitness, this is 50 to 60 percent of your maximum heart rate. In this zone, 10 percent of the carbohydrates are burned (used as energy), five per cent of protein is burned and a whopping 85 percent of fat is burned.</p>
				</div><!-- end col -->

				<div class="col-sm-6">
					<h3>Pump It Up</h3>
					<p>This exercise component is referred to as strength training, resistance or weight training.

Recruit a personal trainer. This is highly recommended. Your trainer can save you time by tailoring a fitness program to get you results faster and safely.
Watch your speed. When performing your exercises, use slow, controlled movements. Count one to two seconds for each lifting movement and three to four seconds for each lowering movement.
Start with light weights. The tendency to use too much weight typically results in poor form and reduces your ability to get results while increasing the risk of injury.
Change your routine every six to eight weeks. By doing so, you are continuously challenging the body to keep progressing (avoiding any frustrating plateaus). This can be done either by revamping the entire workout or just by changing a few exercises.
Avoid overtraining. Never train the same muscle group two days in a row (abdominals are the exception). Signs of overtraining are feeling burnt out, weak, and/or sore.
After following these principles imagine how absolutely incredible you can feel. If others can do it, so can you. Go for it!</p>
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->

	</section>

	<!-- WHO BENEFTS
	--------------------------------------------------------- -->

	<section id="who-benefits">
		<div class="container">

			<div class="section-header">
				<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/why-pt.jpg" alt="Pad and pencil">
				<h2>Why Should you have a personal trainer?</h2>
			</div><!-- section-header -->

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">

					<h3>Reduce injury risk </h3>
					<p>Ignorance and poor execution are common catalysts for injury. A knowledgeable personal trainer will improve your exercise execution and skill so that you reduce your risk for injury and get the most out of each activity.</p>


					<h3> Long-term guidance and motivation</h3>
					<p>As we age, it gets harder to stay motivated towards exercise, so having a trainer guide and motivate you can keep you going. Certified personal trainers can provide structure and do the thinking for you so you can focus on the “doing” rather than the planning. Initially, you may need to see your trainer more often to get on the right track; however, once you have learned what to do and how to do it, you can spread your sessions out to every 3-4 weeks. Consider these sessions your “review, revise and revitalize” check-ups.</p>

					<h3> Variety and creativity</h3>
					<p>Trainers are professionals who are well versed in making exercise “fun” and more interesting by offering a wide variety of creative exercises. Too many of us get bored with our gym routines and start finding reasons not to go. Keep it interesting!</p>

					<h3>Lose stubborn fat</h3>
					<p>It can become increasingly challenging to lose fat as we age. Why? Four main reasons: loss of calorie burning muscle tissue, increase in caloric intake, decreased activity levels, and changes in hormone balance. A trainer can help you build and maintain muscle mass, increase caloric expenditure and refer you to the proper specialists to address any medical issues such as hormonal imbalances that may be impeding your success.</p>

					<h3>Set the stage for a healthier future</h3>
					<p>There is little any physician, personal trainer or pill can do for you, other than what you can do for yourself. Being willing to make real long-term changes in your life is an inside job. Hiring a qualified trainer, even temporarily, can set the stage for a healthier, happier and more functionally active future. We all want to be healthy and happy well into our senior years. Why not let a qualified and <strong>certified personal trainer</strong> get you started in the right direction and spark your internal drive to continue your health and fitness program on your own with “revitalizing” check-ups every 3 to 4 weeks. After all, while our top ten reasons to hire a trainer are important, the number-one reason will always be your health and vitality!</p>

				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->

	</section>

	<!-- what you get?
	--------------------------------------------------------- -->

	<section id="what-you-get">
		<div class="container">

			<div class="section-header">
				<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/fitness.png" alt="Rocket">
				<h2>What Do You gain?</h2>
			</div><!-- section-header -->

			<div class="row">

				<div class="col-sm-2">
					<i class="ci ci-limits"></i>
					<h4>Push your limits</h4>
				</div><!-- end col -->

				<div class="col-sm-2">
					<i class="ci ci-support"></i>
					<h4>Support you all the way!</h4>
				</div><!-- end col -->

				<div class="col-sm-2">
					<i class="ci ci-form"></i>
					<h4>Correct your form!</h4>
				</div><!-- end col -->

				<div class="col-sm-2">
					<i class="ci ci-better"></i>
					<h4>Be better at your sport, life and everything!</h4>
				</div><!-- end col -->

				<div class="col-sm-2">
					<i class="ci ci-time"></i>
					<h4>Do more in less time!</h4>
				</div><!-- end col -->

				<div class="col-sm-2">
					<i class="ci ci-results"></i>
					<h4>It’s All About Results!</h4>
				</div><!-- end col -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->

	<!-- our amis
	--------------------------------------------------------- -->

		<section id="pt-features">
		<div class="container">

                    <h2>Fit4Ever Aims</h2>
                    <p class="lead"><strong>Fit4Ever aims</strong>  to help busy men and women overhaul their health &amp; fitness using a combination of tailored exercise, nutrition, lifestyle and mindset systems that are holistic and sustainable forever  <strong>so they can be...</strong>.</p>

                    <div class="row">
                        <div class="col-sm-4">
                            <img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/confident.png" alt="Design">
                            <h3>Confident &amp; Attractive</h3>
                            <p>Feel confident and attractive around their friends, family, and out in public</p>
                        </div><!-- col -->
                        <div class="col-sm-4">
                        <br>
                            <br>
                            <img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/energy.png" alt="Code">
                            <br>
                            <br>
                            <h3>Energy</h3>
                            <p>Feel full of energy throughout the day</p>
                        </div><!-- col -->
                        <div class="col-sm-4">
                            <img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/active.png" alt="CMS">
                            <h3>Be Active</h3>
                            <p>Do day-to-day activities without getting out of breath and tired such as playing with their children</p>
				</div><!-- col -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- project-features -->

	<!-- VIDEO FEATURETTE
	--------------------------------------------------------- -->

	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Who said workout not fun?</h2>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Kg5r4mm19ks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <!-- I would like to center the video but not sure how
        =======================================================-->

					<p>One of the biggest obstacles to getting into a workout is fear. Fear of failure, fear of not being able to keep up, fear of judgment. </p>
					<p>It might sound silly, but fun is essential to breaking into fitness for the first time, setting up good habits, and staying healthy consistently.</p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- featurette -->


	<!-- INSTRUCTOR
	--------------------------------------------------------- -->

<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2>Your Instructor <small>Ahmed El-Atreby</small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
							<a href="https://twitter.com/ahmede663" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
							<a href="https://www.facebook.com/ahmedsport" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
							<a href="https://plus.google.com/ahmede663" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
						</div><!-- end col -->

					</div><!-- row -->

					<p class="lead">Being working in fitness industry since 2001 allowed me to crow and develop my fitness skills and experience. I completed my degree in physical Education in 2003. Working as PE teacher, instructor, personal training and teaching classes allowed me to expand my knowledge and allowed me to be willing to help people.<p>

					<p>Quantification</p>

					<p>After my degree my hanger to devolve and helping people to achieve their goals encouraged me to under taking various of courses, such as: faintness instructor level 2, personal trainer level 3, circuits instructor, kettle bell, medicine ball, spinning, Metafit, nutrition advisor and weight management.</p>

					<p>My aim is to help people to achieve their goals, to get fitter, live healthy life and to be active. Since graduate from university, I have been working with people. I have devolved this skill of understanding my client and help them to get the result that they desire. </p>

					<hr>



				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->



	<!-- TESTIMONIALS
	--------------------------------------------------------- -->


	<section id="kudos">
		<div class="container">
			<div class="row">

				<div class="col-sm-8 col-sm-offset-2">
					<h2>What People Are Saying About Ahmed</h2>

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/pauline.png" alt="Pauline">
						</div><!-- end col -->
						<div class="col-sm-8">
				<blockquote>Ahmed Always introduces himself asks if any injuries.
                   Warm up &amp; Cool down good
                    Exercises explained well always a alternative given.
                    Each metafit class different &amp; Ahmed checks you doing excercises correct.
                    And caters for all ages and fitness levels.
                    Always happy for any questions so enthusiastic and runs classes on time.
                    Have attended Ahmed's classes for the last 2 years and would recommend him to all.
                            <cite>&mdash; Pauline</cite>
              </blockquote>
						</div><!-- end col -->
					</div><!-- row -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/pauline.png" class="img-circle" alt="pauline" > <!-- I used Bootstrap to circle the photo but not working -->

						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Due to suffering with severe mental health and being excessively over weight, I joined the gym in 2011, where I met Ahmed who with his help and support with exercise and diet plans, I have managed to lose 8 1/2 stone. This would not have been possible without his encouragement and support. If you ever need a personal trainer, you could not find a more motivated man than Ahmed.
								<cite>&mdash; Micaela</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/pauline.png" alt="photo">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>I have had Ahmed training me since April last year, I  really enjoy the sessions.
 He pushes me to work hard, which I personally I like as it gets results. I feel more confident and a stronger lady.
He is always very friendly and happy, which is great and make me feel comfortable training.<cite>&mdash; Carolyn </cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->

					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img scr="<?php bloginf('stylesheet_directory');?>/B2W/assets/img/ernest.png" alt="photo">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>

								<cite>&mdash; </cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->

				</div><!-- end col -->

			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->


<?php get_footer(); ?>




