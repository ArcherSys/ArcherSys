<?php
if (!is_user_logged_in())
{
	return;
}
else
{
	switch($gmb_role)
	{
		case "administrator":
			$user_role_permission = "manage_options";
		break;
		case "editor":
			$user_role_permission = "publish_pages";
		break;
		case "author":
			$user_role_permission = "publish_posts";
		break;
	}
	if (!current_user_can($user_role_permission))
	{
		return;
	}
	else
	{
		?>
	<div id="ux_img_culture" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Aboriginal",map_bank) ;?>">
			<img onclick="marker_img_select(1)" class="selected_marker" id="img_1" src="<?php echo MAP_BK_MARKER_ICON."/aboriginal.png";?>" />
		</span> 
		<span class="hovertip" data-original-title ="<?php _e("Anthropo",map_bank) ;?>">
			<img onclick="marker_img_select(2)" class="selected_marker" id="img_2" src="<?php echo MAP_BK_MARKER_ICON."/anthropo.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Art-Museum",map_bank) ;?>"> 
			<img onclick="marker_img_select(3)" class="selected_marker" id="img_3" src="<?php echo MAP_BK_MARKER_ICON."/art-museum-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cinema",map_bank) ;?>">
			<img onclick="marker_img_select(4)" class="selected_marker" id="img_4" src="<?php echo MAP_BK_MARKER_ICON."/cinema.png" ;?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Coins",map_bank) ;?>"> 
			<img onclick="marker_img_select(5)" class="selected_marker" id="img_5" src="<?php echo MAP_BK_MARKER_ICON."/coins.png" ;?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Comedy Club",map_bank) ;?>"> 
			<img onclick="marker_img_select(6)" class="selected_marker" id="img_6" src="<?php echo MAP_BK_MARKER_ICON."/comedyclub.png" ;?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dancing Hall",map_bank) ;?>"> 
		    <img onclick="marker_img_select(7)" class="selected_marker" id="img_7" src="<?php echo MAP_BK_MARKER_ICON."/dancinghall.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Historical Museum",map_bank) ;?>"> 
			<img onclick="marker_img_select(8)" class="selected_marker" id="img_8" src="<?php echo MAP_BK_MARKER_ICON."/historical_museum.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jazz Club",map_bank) ;?>"> 
			<img onclick="marker_img_select(9)" class="selected_marker" id="img_9" src="<?php echo MAP_BK_MARKER_ICON."/jazzclub.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Library",map_bank) ;?>"> 
			<img onclick="marker_img_select(10)" class="selected_marker" id="img_10" src="<?php echo MAP_BK_MARKER_ICON."/library.png";?>" />
		</span>	
		<span class="hovertip" data-original-title ="<?php _e("Museum Archeological",map_bank) ;?>"> 
			<img onclick="marker_img_select(11)" class="selected_marker" id="img_11" src="<?php echo MAP_BK_MARKER_ICON."/museum_archeological.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Art",map_bank) ;?>"> 
			<img onclick="marker_img_select(12)" class="selected_marker" id="img_12" src="<?php echo MAP_BK_MARKER_ICON."/museum_art.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Crafts",map_bank) ;?>"> 
			<img onclick="marker_img_select(13)" class="selected_marker" id="img_13" src="<?php echo MAP_BK_MARKER_ICON."/museum_crafts.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Industry",map_bank) ;?>"> 
			<img onclick="marker_img_select(14)" class="selected_marker" id="img_14" src="<?php echo MAP_BK_MARKER_ICON."/museum_industry.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Naval",map_bank) ;?>"> 
			<img onclick="marker_img_select(15)" class="selected_marker" id="img_15" src="<?php echo MAP_BK_MARKER_ICON."/museum_naval.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Openair",map_bank) ;?>"> 
			<img onclick="marker_img_select(16)" class="selected_marker" id="img_16" src="<?php echo MAP_BK_MARKER_ICON."/museum_openair.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Science",map_bank) ;?>"> 
			<img onclick="marker_img_select(17)" class="selected_marker" id="img_17" src="<?php echo MAP_BK_MARKER_ICON."/museum_science.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum War",map_bank) ;?>">
			<img onclick="marker_img_select(18)" class="selected_marker" id="img_18" src="<?php echo MAP_BK_MARKER_ICON."/museum_war.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Museum Choral",map_bank) ;?>">
			<img onclick="marker_img_select(19)" class="selected_marker" id="img_19" src="<?php echo MAP_BK_MARKER_ICON."/music_choral.png";?>" />
		</span>	
		<span class="hovertip" data-original-title ="<?php _e("Music Classical",map_bank) ;?>">
			<img onclick="marker_img_select(20)" class="selected_marker" id="img_20" src="<?php echo MAP_BK_MARKER_ICON."/music_classical.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Music Hiphop",map_bank) ;?>">
			<img onclick="marker_img_select(21)" class="selected_marker" id="img_21" src="<?php echo MAP_BK_MARKER_ICON."/music_hiphop.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Music Live",map_bank) ;?>">
			<img onclick="marker_img_select(22)" class="selected_marker" id="img_22" src="<?php echo MAP_BK_MARKER_ICON."/music_live.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Music Rock",map_bank) ;?>">
			<img onclick="marker_img_select(23)" class="selected_marker" id="img_23" src="<?php echo MAP_BK_MARKER_ICON."/music_rock.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Planetarium",map_bank) ;?>">
			<img onclick="marker_img_select(24)" class="selected_marker" id="img_24" src="<?php echo MAP_BK_MARKER_ICON."/planetarium-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Regroup",map_bank) ;?>">
			<img onclick="marker_img_select(25)" class="selected_marker" id="img_25" src="<?php echo MAP_BK_MARKER_ICON."/regroup.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Theater",map_bank) ;?>">
			<img onclick="marker_img_select(26)" class="selected_marker" id="img_26" src="<?php echo MAP_BK_MARKER_ICON."/theater.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Triskelion",map_bank) ;?>">
			<img onclick="marker_img_select(27)" class="selected_marker" id="img_27" src="<?php echo MAP_BK_MARKER_ICON."/triskelion.png";?>" />
		</span>
	</div>
	<div id="ux_img_entertainment" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Airshow",map_bank) ;?>">
			<img onclick="marker_img_select(28)" class="selected_marker" id="img_28" src="<?php echo MAP_BK_MARKER_ICON."/airshow-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Anniversary",map_bank) ;?>">
			<img onclick="marker_img_select(29)" class="selected_marker" id="img_29" src="<?php echo MAP_BK_MARKER_ICON."/anniversary.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Aquarium",map_bank) ;?>">
			<img onclick="marker_img_select(30)" class="selected_marker" id="img_30" src="<?php echo MAP_BK_MARKER_ICON."/aquarium.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Billiard",map_bank) ;?>">
			<img onclick="marker_img_select(31)" class="selected_marker" id="img_31" src="<?php echo MAP_BK_MARKER_ICON."/billiard-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bowling",map_bank) ;?>">
			<img onclick="marker_img_select(32)" class="selected_marker" id="img_32" src="<?php echo MAP_BK_MARKER_ICON."/bowling.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bull  Fight",map_bank) ;?>">
			<img onclick="marker_img_select(33)" class="selected_marker" id="img_33" src="<?php echo MAP_BK_MARKER_ICON."/bullfight.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bustour",map_bank) ;?>">
			<img onclick="marker_img_select(34)" class="selected_marker" id="img_34" src="<?php echo MAP_BK_MARKER_ICON."/bustour.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Casino",map_bank) ;?>">
			<img onclick="marker_img_select(35)" class="selected_marker" id="img_35" src="<?php echo MAP_BK_MARKER_ICON."/casino-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Circus",map_bank) ;?>">
			<img onclick="marker_img_select(36)" class="selected_marker" id="img_36" src="<?php echo MAP_BK_MARKER_ICON."/circus.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dance Class",map_bank) ;?>">
			<img onclick="marker_img_select(37)" class="selected_marker" id="img_37" src="<?php echo MAP_BK_MARKER_ICON."/dance_class.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dinopark",map_bank) ;?>">
			<img onclick="marker_img_select(38)" class="selected_marker" id="img_38" src="<?php echo MAP_BK_MARKER_ICON."/dinopark.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ferris Wheel",map_bank) ;?>">
			<img onclick="marker_img_select(39)" class="selected_marker" id="img_39" src="<?php echo MAP_BK_MARKER_ICON."/ferriswheel.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Festival",map_bank) ;?>">
			<img onclick="marker_img_select(40)" class="selected_marker" id="img_40" src="<?php echo MAP_BK_MARKER_ICON."/festival.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fireworks",map_bank) ;?>">
			<img onclick="marker_img_select(41)" class="selected_marker" id="img_41" src="<?php echo MAP_BK_MARKER_ICON."/fireworks.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fishing",map_bank) ;?>">
			<img onclick="marker_img_select(42)" class="selected_marker" id="img_42" src="<?php echo MAP_BK_MARKER_ICON."/fishing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Geocaching",map_bank) ;?>">
			<img onclick="marker_img_select(43)" class="selected_marker" id="img_43" src="<?php echo MAP_BK_MARKER_ICON."/geocaching-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hookah Final",map_bank) ;?>">
			<img onclick="marker_img_select(44)" class="selected_marker" id="img_44" src="<?php echo MAP_BK_MARKER_ICON."/hookah_final.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Laterne",map_bank) ;?>">
			<img onclick="marker_img_select(45)" class="selected_marker" id="img_45" src="<?php echo MAP_BK_MARKER_ICON."/laterne.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Magic Show",map_bank) ;?>">
			<img onclick="marker_img_select(46)" class="selected_marker" id="img_46" src="<?php echo MAP_BK_MARKER_ICON."/magicshow.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mural",map_bank) ;?>">
			<img onclick="marker_img_select(47)" class="selected_marker" id="img_47" src="<?php echo MAP_BK_MARKER_ICON."/mural.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Paint Ball",map_bank) ;?>">
			<img onclick="marker_img_select(48)" class="selected_marker" id="img_48" src="<?php echo MAP_BK_MARKER_ICON."/paintball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Party",map_bank) ;?>">
			<img onclick="marker_img_select(49)" class="selected_marker" id="img_49" src="<?php echo MAP_BK_MARKER_ICON."/party-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Poker",map_bank) ;?>">
			<img onclick="marker_img_select(50)" class="selected_marker" id="img_50" src="<?php echo MAP_BK_MARKER_ICON."/poker.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Publicart",map_bank) ;?>">
			<img onclick="marker_img_select(51)" class="selected_marker" id="img_51" src="<?php echo MAP_BK_MARKER_ICON."/publicart.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ropes Course",map_bank) ;?>">
			<img onclick="marker_img_select(52)" class="selected_marker" id="img_52" src="<?php echo MAP_BK_MARKER_ICON."/ropescourse.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Segway",map_bank) ;?>">
			<img onclick="marker_img_select(53)" class="selected_marker" id="img_53" src="<?php echo MAP_BK_MARKER_ICON."/segway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("sledge Summer",map_bank) ;?>">
			<img onclick="marker_img_select(54)" class="selected_marker" id="img_54" src="<?php echo MAP_BK_MARKER_ICON."/sledge_summer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Strip Club",map_bank) ;?>">
			<img onclick="marker_img_select(55)" class="selected_marker" id="img_55" src="<?php echo MAP_BK_MARKER_ICON."/stripclub2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Targ",map_bank) ;?>">
			<img onclick="marker_img_select(56)" class="selected_marker" id="img_56" src="<?php echo MAP_BK_MARKER_ICON."/targ.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Theme Park",map_bank) ;?>">
			<img onclick="marker_img_select(57)" class="selected_marker" id="img_57" src="<?php echo MAP_BK_MARKER_ICON."/themepark.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Treasure Mark",map_bank) ;?>">
			<img onclick="marker_img_select(58)" class="selected_marker" id="img_58" src="<?php echo MAP_BK_MARKER_ICON."/treasure-mark.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Video Games",map_bank) ;?>">
			<img onclick="marker_img_select(59)" class="selected_marker" id="img_59" src="<?php echo MAP_BK_MARKER_ICON."/videogames.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Walking Tour",map_bank) ;?>">
			<img onclick="marker_img_select(60)" class="selected_marker" id="img_60" src="<?php echo MAP_BK_MARKER_ICON."/walkingtour.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Park",map_bank) ;?>">
			<img onclick="marker_img_select(61)" class="selected_marker" id="img_61" src="<?php echo MAP_BK_MARKER_ICON."/waterpark.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Zoo",map_bank) ;?>">
			<img onclick="marker_img_select(62)" class="selected_marker" id="img_62" src="<?php echo MAP_BK_MARKER_ICON."/zoo.png";?>" />
		</span>
	</div>
	<div id="ux_img_crime" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Abduction",map_bank) ;?>">
			<img onclick="marker_img_select(63)" class="selected_marker" id="img_63" src="<?php echo MAP_BK_MARKER_ICON."/abduction.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Blast",map_bank) ;?>">
			<img onclick="marker_img_select(64)" class="selected_marker" id="img_64" src="<?php echo MAP_BK_MARKER_ICON."/blast.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bomb",map_bank) ;?>">
			<img onclick="marker_img_select(65)" class="selected_marker" id="img_65" src="<?php echo MAP_BK_MARKER_ICON."/bomb.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Crime Scene",map_bank) ;?>">
			<img onclick="marker_img_select(66)" class="selected_marker" id="img_66" src="<?php echo MAP_BK_MARKER_ICON."/crimescene.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fire",map_bank) ;?>">
			<img onclick="marker_img_select(67)" class="selected_marker" id="img_67" src="<?php echo MAP_BK_MARKER_ICON."/fire.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pirates",map_bank) ;?>">
			<img onclick="marker_img_select(68)" class="selected_marker" id="img_68" src="<?php echo MAP_BK_MARKER_ICON."/pirates.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rape",map_bank) ;?>">
			<img onclick="marker_img_select(69)" class="selected_marker" id="img_69" src="<?php echo MAP_BK_MARKER_ICON."/rape.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Robbery",map_bank) ;?>">
			<img onclick="marker_img_select(70)" class="selected_marker" id="img_70" src="<?php echo MAP_BK_MARKER_ICON."/robbery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shooting",map_bank) ;?>">
			<img onclick="marker_img_select(71)" class="selected_marker" id="img_71" src="<?php echo MAP_BK_MARKER_ICON."/shooting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Theft",map_bank) ;?>">
			<img onclick="marker_img_select(72)" class="selected_marker" id="img_72" src="<?php echo MAP_BK_MARKER_ICON."/theft.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Torture",map_bank) ;?>">
			<img onclick="marker_img_select(73)" class="selected_marker" id="img_73" src="<?php echo MAP_BK_MARKER_ICON."/torture.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("War",map_bank) ;?>">
			<img onclick="marker_img_select(74)" class="selected_marker" id="img_74" src="<?php echo MAP_BK_MARKER_ICON."/war.png";?>" />
		</span>
	</div>
	<div id="ux_img_natural_disaster" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Avalanche",map_bank) ;?>">
			<img onclick="marker_img_select(75)" class="selected_marker" id="img_75" src="<?php echo MAP_BK_MARKER_ICON."/avalanche1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Earthquake",map_bank) ;?>">
			<img onclick="marker_img_select(76)" class="selected_marker" id="img_76" src="<?php echo MAP_BK_MARKER_ICON."/earthquake-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fire",map_bank) ;?>">
			<img onclick="marker_img_select(77)" class="selected_marker" id="img_77" src="<?php echo MAP_BK_MARKER_ICON."/fire.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Flood",map_bank) ;?>">
			<img onclick="marker_img_select(78)" class="selected_marker" id="img_78" src="<?php echo MAP_BK_MARKER_ICON."/flood.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shark",map_bank) ;?>">
			<img onclick="marker_img_select(79)" class="selected_marker" id="img_79" src="<?php echo MAP_BK_MARKER_ICON."/shark-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Skull",map_bank) ;?>">
			<img onclick="marker_img_select(80)" class="selected_marker" id="img_80" src="<?php echo MAP_BK_MARKER_ICON."/skull.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tornado",map_bank) ;?>">
			<img onclick="marker_img_select(81)" class="selected_marker" id="img_81" src="<?php echo MAP_BK_MARKER_ICON."/tornado-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tree Down",map_bank) ;?>">
			<img onclick="marker_img_select(82)" class="selected_marker" id="img_82" src="<?php echo MAP_BK_MARKER_ICON."/treedown.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tsunami",map_bank) ;?>">
			<img onclick="marker_img_select(83)" class="selected_marker" id="img_83" src="<?php echo MAP_BK_MARKER_ICON."/tsunami.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Zombie-Outbreak",map_bank) ;?>">
			<img onclick="marker_img_select(84)" class="selected_marker" id="img_84" src="<?php echo MAP_BK_MARKER_ICON."/zombie-outbreak1.png";?>" />
		</span>
	</div>
	<div id="ux_img_education" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Cram School",map_bank) ;?>">
			<img onclick="marker_img_select(85)" class="selected_marker" id="img_85" src="<?php echo MAP_BK_MARKER_ICON."/cramschool.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dance Class",map_bank) ;?>">
			<img onclick="marker_img_select(86)" class="selected_marker" id="img_86" src="<?php echo MAP_BK_MARKER_ICON."/dance_class.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Day Care",map_bank) ;?>">
			<img onclick="marker_img_select(87)" class="selected_marker" id="img_87" src="<?php echo MAP_BK_MARKER_ICON."/daycare.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fsb Marker",map_bank) ;?>">
			<img onclick="marker_img_select(88)" class="selected_marker" id="img_88" src="<?php echo MAP_BK_MARKER_ICON."/fsb_marker.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("High School",map_bank) ;?>">
			<img onclick="marker_img_select(89)" class="selected_marker" id="img_89" src="<?php echo MAP_BK_MARKER_ICON."/highschool.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nanny",map_bank) ;?>">
			<img onclick="marker_img_select(90)" class="selected_marker" id="img_90" src="<?php echo MAP_BK_MARKER_ICON."/nanny.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nursery",map_bank) ;?>">
			<img onclick="marker_img_select(91)" class="selected_marker" id="img_91" src="<?php echo MAP_BK_MARKER_ICON."/nursery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("School",map_bank) ;?>">
			<img onclick="marker_img_select(92)" class="selected_marker" id="img_92" src="<?php echo MAP_BK_MARKER_ICON."/school.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Summer Camp",map_bank) ;?>">
			<img onclick="marker_img_select(93)" class="selected_marker" id="img_93" src="<?php echo MAP_BK_MARKER_ICON."/summercamp.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("University",map_bank) ;?>">
			<img onclick="marker_img_select(94)" class="selected_marker" id="img_94" src="<?php echo MAP_BK_MARKER_ICON."/university.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Workshop",map_bank) ;?>">
			<img onclick="marker_img_select(95)" class="selected_marker" id="img_95" src="<?php echo MAP_BK_MARKER_ICON."/workshop.png";?>" />
		</span>
	</div>
	<div id="ux_img_health" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Acupuncture",map_bank) ;?>">
			<img onclick="marker_img_select(96)" class="selected_marker" id="img_96" src="<?php echo MAP_BK_MARKER_ICON."/acupuncture.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Aed",map_bank) ;?>">
			<img onclick="marker_img_select(97)" class="selected_marker" id="img_97" src="<?php echo MAP_BK_MARKER_ICON."/aed-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ambulance",map_bank) ;?>">
			<img onclick="marker_img_select(98)" class="selected_marker" id="img_98" src="<?php echo MAP_BK_MARKER_ICON."/ambulance.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ambulance Boat",map_bank) ;?>">
			<img onclick="marker_img_select(99)" class="selected_marker" id="img_99" src="<?php echo MAP_BK_MARKER_ICON."/ambulanceboat.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Barber",map_bank) ;?>">
			<img onclick="marker_img_select(100)" class="selected_marker" id="img_100" src="<?php echo MAP_BK_MARKER_ICON."/barber.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Beauty Salon",map_bank) ;?>">
			<img onclick="marker_img_select(101)" class="selected_marker" id="img_101" src="<?php echo MAP_BK_MARKER_ICON."/beautysalon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Breast Feeding",map_bank) ;?>">
			<img onclick="marker_img_select(102)" class="selected_marker" id="img_102" src="<?php echo MAP_BK_MARKER_ICON."/breastfeeding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Chiropractor",map_bank) ;?>">
			<img onclick="marker_img_select(103)" class="selected_marker" id="img_103" src="<?php echo MAP_BK_MARKER_ICON."/chiropractor.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dentist",map_bank) ;?>">
			<img onclick="marker_img_select(104)" class="selected_marker" id="img_104" src="<?php echo MAP_BK_MARKER_ICON."/dentist.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Disability",map_bank) ;?>">
			<img onclick="marker_img_select(105)" class="selected_marker" id="img_105" src="<?php echo MAP_BK_MARKER_ICON."/disability.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Drugstore",map_bank) ;?>">
			<img onclick="marker_img_select(106)" class="selected_marker" id="img_106" src="<?php echo MAP_BK_MARKER_ICON."/drugstore.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Emergency Phone",map_bank) ;?>">
			<img onclick="marker_img_select(107)" class="selected_marker" id="img_107" src="<?php echo MAP_BK_MARKER_ICON."/emergencyphone.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fetal Alcohol Syndrom",map_bank) ;?>">
			<img onclick="marker_img_select(108)" class="selected_marker" id="img_108" src="<?php echo MAP_BK_MARKER_ICON."/fetalalcoholsyndrom.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("First Aid",map_bank) ;?>">
			<img onclick="marker_img_select(109)" class="selected_marker" id="img_109" src="<?php echo MAP_BK_MARKER_ICON."/firstaid.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Foot Print",map_bank) ;?>">
			<img onclick="marker_img_select(110)" class="selected_marker" id="img_110" src="<?php echo MAP_BK_MARKER_ICON."/footprint.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hearing-Aid-Acoustician",map_bank) ;?>">
			<img onclick="marker_img_select(111)" class="selected_marker" id="img_111" src="<?php echo MAP_BK_MARKER_ICON."/hoergeraeteakustiker_22px.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hospital Building",map_bank) ;?>">
			<img onclick="marker_img_select(112)" class="selected_marker" id="img_112" src="<?php echo MAP_BK_MARKER_ICON."/hospital-building.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Icon Nailsalon",map_bank) ;?>">
			<img onclick="marker_img_select(113)" class="selected_marker" id="img_113" src="<?php echo MAP_BK_MARKER_ICON."/icon-nailsalon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jacuzzi",map_bank) ;?>">
			<img onclick="marker_img_select(114)" class="selected_marker" id="img_114" src="<?php echo MAP_BK_MARKER_ICON."/jacuzzi.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Latrine",map_bank) ;?>">
			<img onclick="marker_img_select(115)" class="selected_marker" id="img_115" src="<?php echo MAP_BK_MARKER_ICON."/latrine.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Marijuana",map_bank) ;?>">
			<img onclick="marker_img_select(116)" class="selected_marker" id="img_116" src="<?php echo MAP_BK_MARKER_ICON."/marijuana.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Massage",map_bank) ;?>">
			<img onclick="marker_img_select(117)" class="selected_marker" id="img_117" src="<?php echo MAP_BK_MARKER_ICON."/massage.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Medical Store",map_bank) ;?>">
			<img onclick="marker_img_select(118)" class="selected_marker" id="img_118" src="<?php echo MAP_BK_MARKER_ICON."/medicalstore.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Medicine",map_bank) ;?>">
			<img onclick="marker_img_select(119)" class="selected_marker" id="img_119" src="<?php echo MAP_BK_MARKER_ICON."/medicine.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nursing Home Icon",map_bank) ;?>">
			<img onclick="marker_img_select(120)" class="selected_marker" id="img_120" src="<?php echo MAP_BK_MARKER_ICON."/nursing_home_icon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ophthalmologist",map_bank) ;?>">
			<img onclick="marker_img_select(121)" class="selected_marker" id="img_121" src="<?php echo MAP_BK_MARKER_ICON."/ophthalmologist.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pleasure Pier",map_bank) ;?>">
			<img onclick="marker_img_select(122)" class="selected_marker" id="img_122" src="<?php echo MAP_BK_MARKER_ICON."/pleasurepier.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sauna",map_bank) ;?>">
			<img onclick="marker_img_select(123)" class="selected_marker" id="img_123" src="<?php echo MAP_BK_MARKER_ICON."/sauna.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Social Services Provider",map_bank) ;?>">
			<img onclick="marker_img_select(124)" class="selected_marker" id="img_124" src="<?php echo MAP_BK_MARKER_ICON."/sozialeeinrichtung.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Spa",map_bank) ;?>">
			<img onclick="marker_img_select(125)" class="selected_marker" id="img_125" src="<?php echo MAP_BK_MARKER_ICON."/spa.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Therapy",map_bank) ;?>">
			<img onclick="marker_img_select(126)" class="selected_marker" id="img_126" src="<?php echo MAP_BK_MARKER_ICON."/therapy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Toilets",map_bank) ;?>">
			<img onclick="marker_img_select(127)" class="selected_marker" id="img_127" src="<?php echo MAP_BK_MARKER_ICON."/toilets.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Veterinary",map_bank) ;?>">
			<img onclick="marker_img_select(128)" class="selected_marker" id="img_128" src="<?php echo MAP_BK_MARKER_ICON."/veterinary.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("X Ray",map_bank) ;?>">
			<img onclick="marker_img_select(129)" class="selected_marker" id="img_129" src="<?php echo MAP_BK_MARKER_ICON."/x-ray.png";?>" />
		</span>
	</div>
	<div id="ux_img_electric_power" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Electric Power",map_bank) ;?>">
			<img onclick="marker_img_select(130)" class="selected_marker" id="img_130" src="<?php echo MAP_BK_MARKER_ICON."/dam.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Geothermal Site",map_bank) ;?>">
			<img onclick="marker_img_select(131)" class="selected_marker" id="img_131" src="<?php echo MAP_BK_MARKER_ICON."/geothermal-site.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Line Down",map_bank) ;?>">
			<img onclick="marker_img_select(132)" class="selected_marker" id="img_132" src="<?php echo MAP_BK_MARKER_ICON."/linedown.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("No Nuke Export",map_bank) ;?>">
			<img onclick="marker_img_select(133)" class="selected_marker" id="img_133" src="<?php echo MAP_BK_MARKER_ICON."/no-nuke-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Out Let",map_bank) ;?>">
			<img onclick="marker_img_select(134)" class="selected_marker" id="img_134" src="<?php echo MAP_BK_MARKER_ICON."/outlet2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pond",map_bank) ;?>">
			<img onclick="marker_img_select(135)" class="selected_marker" id="img_135" src="<?php echo MAP_BK_MARKER_ICON."/pond.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Power Line Pole",map_bank) ;?>">
			<img onclick="marker_img_select(136)" class="selected_marker" id="img_136" src="<?php echo MAP_BK_MARKER_ICON."/powerlinepole.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Power Out Age",map_bank) ;?>">
			<img onclick="marker_img_select(137)" class="selected_marker" id="img_137" src="<?php echo MAP_BK_MARKER_ICON."/poweroutage.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Power Plant",map_bank) ;?>">
			<img onclick="marker_img_select(138)" class="selected_marker" id="img_138" src="<?php echo MAP_BK_MARKER_ICON."/powerplant.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Power Substation",map_bank) ;?>">
			<img onclick="marker_img_select(139)" class="selected_marker" id="img_139" src="<?php echo MAP_BK_MARKER_ICON."/powersubstation.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Solar Energy",map_bank) ;?>">
			<img onclick="marker_img_select(140)" class="selected_marker" id="img_140" src="<?php echo MAP_BK_MARKER_ICON."/solarenergy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Splice",map_bank) ;?>">
			<img onclick="marker_img_select(141)" class="selected_marker" id="img_141" src="<?php echo MAP_BK_MARKER_ICON."/splice.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wind Turbine",map_bank) ;?>">
			<img onclick="marker_img_select(142)" class="selected_marker" id="img_142" src="<?php echo MAP_BK_MARKER_ICON."/windturbine.png";?>" />
		</span>
	</div>
	<div id="ux_img_military" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Air Fixwing",map_bank) ;?>">
			<img onclick="marker_img_select(143)" class="selected_marker" id="img_143" src="<?php echo MAP_BK_MARKER_ICON."/air_fixwing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Air Craft Carrier",map_bank) ;?>">
			<img onclick="marker_img_select(144)" class="selected_marker" id="img_144" src="<?php echo MAP_BK_MARKER_ICON."/aircraftcarrier.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Army",map_bank) ;?>">
			<img onclick="marker_img_select(145)" class="selected_marker" id="img_145" src="<?php echo MAP_BK_MARKER_ICON."/army.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Battle Ship",map_bank) ;?>">
			<img onclick="marker_img_select(146)" class="selected_marker" id="img_146" src="<?php echo MAP_BK_MARKER_ICON."/battleship-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bomber",map_bank) ;?>">
			<img onclick="marker_img_select(147)" class="selected_marker" id="img_147" src="<?php echo MAP_BK_MARKER_ICON."/bomber-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bunker",map_bank) ;?>">
			<img onclick="marker_img_select(148)" class="selected_marker" id="img_148" src="<?php echo MAP_BK_MARKER_ICON."/bunker.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bunker",map_bank) ;?>">
			<img onclick="marker_img_select(149)" class="selected_marker" id="img_149" src="<?php echo MAP_BK_MARKER_ICON."/bunker-2-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Channel Change",map_bank) ;?>">
			<img onclick="marker_img_select(150)" class="selected_marker" id="img_150" src="<?php echo MAP_BK_MARKER_ICON."/channelchange.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Frequency Change",map_bank) ;?>">
			<img onclick="marker_img_select(151)" class="selected_marker" id="img_151" src="<?php echo MAP_BK_MARKER_ICON."/freqchg.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jeep",map_bank) ;?>">
			<img onclick="marker_img_select(152)" class="selected_marker" id="img_152" src="<?php echo MAP_BK_MARKER_ICON."/jeep.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fighter Jet",map_bank) ;?>">
			<img onclick="marker_img_select(153)" class="selected_marker" id="img_153" src="<?php echo MAP_BK_MARKER_ICON."/jetfighter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Missile",map_bank) ;?>">
			<img onclick="marker_img_select(154)" class="selected_marker" id="img_154" src="<?php echo MAP_BK_MARKER_ICON."/missile-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Radar",map_bank) ;?>">
			<img onclick="marker_img_select(155)" class="selected_marker" id="img_156" src="<?php echo MAP_BK_MARKER_ICON."/radar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sub Marine",map_bank) ;?>">
			<img onclick="marker_img_select(157)" class="selected_marker" id="img_157" src="<?php echo MAP_BK_MARKER_ICON."/submarine-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Waco",map_bank) ;?>">
			<img onclick="marker_img_select(158)" class="selected_marker" id="img_158" src="<?php echo MAP_BK_MARKER_ICON."/waco.png";?>" />
		</span>
	</div>
	<div id="ux_img_agriculture" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Algae",map_bank) ;?>">
			<img onclick="marker_img_select(159)" class="selected_marker" id="img_159" src="<?php echo MAP_BK_MARKER_ICON."/algae.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Apple",map_bank) ;?>">
			<img onclick="marker_img_select(160)" class="selected_marker" id="img_160" src="<?php echo MAP_BK_MARKER_ICON."/apple.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cheese",map_bank) ;?>">
			<img onclick="marker_img_select(161)" class="selected_marker" id="img_161" src="<?php echo MAP_BK_MARKER_ICON."/cheese.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Corral",map_bank) ;?>">
			<img onclick="marker_img_select(162)" class="selected_marker" id="img_162" src="<?php echo MAP_BK_MARKER_ICON."/corral.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Crop Circles",map_bank) ;?>">
			<img onclick="marker_img_select(163)" class="selected_marker" id="img_163" src="<?php echo MAP_BK_MARKER_ICON."/cropcircles.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Farm",map_bank) ;?>">
			<img onclick="marker_img_select(164)" class="selected_marker" id="img_164" src="<?php echo MAP_BK_MARKER_ICON."/farm-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Farmstand",map_bank) ;?>">
			<img onclick="marker_img_select(165)" class="selected_marker" id="img_165" src="<?php echo MAP_BK_MARKER_ICON."/farmstand.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Field",map_bank) ;?>">
			<img onclick="marker_img_select(166)" class="selected_marker" id="img_166" src="<?php echo MAP_BK_MARKER_ICON."/field.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fruits",map_bank) ;?>">
			<img onclick="marker_img_select(167)" class="selected_marker" id="img_167" src="<?php echo MAP_BK_MARKER_ICON."/fruits.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hay Bale",map_bank) ;?>">
			<img onclick="marker_img_select(168)" class="selected_marker" id="img_168" src="<?php echo MAP_BK_MARKER_ICON."/haybale.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Honey Comb",map_bank) ;?>">
			<img onclick="marker_img_select(169)" class="selected_marker" id="img_169" src="<?php echo MAP_BK_MARKER_ICON."/honeycomb.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lawan Mower",map_bank) ;?>">
			<img onclick="marker_img_select(170)" class="selected_marker" id="img_170" src="<?php echo MAP_BK_MARKER_ICON."/lawncareicon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Four Leaf Clover",map_bank) ;?>">
			<img onclick="marker_img_select(171)" class="selected_marker" id="img_171" src="<?php echo MAP_BK_MARKER_ICON."/quadrifoglio.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rice",map_bank) ;?>">
			<img onclick="marker_img_select(172)" class="selected_marker" id="img_172" src="<?php echo MAP_BK_MARKER_ICON."/rice.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sugar Shack",map_bank) ;?>">
			<img onclick="marker_img_select(173)" class="selected_marker" id="img_173" src="<?php echo MAP_BK_MARKER_ICON."/sugar-shack.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("U Pick Stand",map_bank) ;?>">
			<img onclick="marker_img_select(174)" class="selected_marker" id="img_174" src="<?php echo MAP_BK_MARKER_ICON."/u-pick_stand.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Vineyard",map_bank) ;?>">
			<img onclick="marker_img_select(175)" class="selected_marker" id="img_175" src="<?php echo MAP_BK_MARKER_ICON."/vineyard-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water",map_bank) ;?>">
			<img onclick="marker_img_select(176)" class="selected_marker" id="img_176" src="<?php echo MAP_BK_MARKER_ICON."/water.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Mill",map_bank) ;?>">
			<img onclick="marker_img_select(177)" class="selected_marker" id="img_177" src="<?php echo MAP_BK_MARKER_ICON."/watermill-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Well Pump",map_bank) ;?>">
			<img onclick="marker_img_select(178)" class="selected_marker" id="img_178" src="<?php echo MAP_BK_MARKER_ICON."/waterwellpump.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wind Mill",map_bank) ;?>">
			<img onclick="marker_img_select(179)" class="selected_marker" id="img_179" src="<?php echo MAP_BK_MARKER_ICON."/windmill-2.png";?>" />
		</span> 	
	</div>
	<div id="ux_img_animals" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Alligator",map_bank) ;?>">
			<img onclick="marker_img_select(180)" class="selected_marker" id="img_180" src="<?php echo MAP_BK_MARKER_ICON."/alligator.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Animal Shelter Export",map_bank) ;?>">
			<img onclick="marker_img_select(181)" class="selected_marker" id="img_181" src="<?php echo MAP_BK_MARKER_ICON."/animal-shelter-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ant Export",map_bank) ;?>">
			<img onclick="marker_img_select(182)" class="selected_marker" id="img_182" src="<?php echo MAP_BK_MARKER_ICON."/ant-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bats",map_bank) ;?>">
			<img onclick="marker_img_select(183)" class="selected_marker" id="img_183" src="<?php echo MAP_BK_MARKER_ICON."/bats.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bear",map_bank) ;?>">
			<img onclick="marker_img_select(184)" class="selected_marker" id="img_184" src="<?php echo MAP_BK_MARKER_ICON."/bear.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bee",map_bank) ;?>">
			<img onclick="marker_img_select(185)" class="selected_marker" id="img_185" src="<?php echo MAP_BK_MARKER_ICON."/bee.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Birds",map_bank) ;?>">
			<img onclick="marker_img_select(186)" class="selected_marker" id="img_186" src="<?php echo MAP_BK_MARKER_ICON."/birds-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Black Cock",map_bank) ;?>">
			<img onclick="marker_img_select(187)" class="selected_marker" id="img_187" src="<?php echo MAP_BK_MARKER_ICON."/blackcock1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Butterfly",map_bank) ;?>">
			<img onclick="marker_img_select(188)" class="selected_marker" id="img_188" src="<?php echo MAP_BK_MARKER_ICON."/butterfly-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cat",map_bank) ;?>">
			<img onclick="marker_img_select(189)" class="selected_marker" id="img_189" src="<?php echo MAP_BK_MARKER_ICON."/cat-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Chicken",map_bank) ;?>">
			<img onclick="marker_img_select(190)" class="selected_marker" id="img_190" src="<?php echo MAP_BK_MARKER_ICON."/chicken-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cow Export",map_bank) ;?>">
			<img onclick="marker_img_select(191)" class="selected_marker" id="img_191" src="<?php echo MAP_BK_MARKER_ICON."/cow-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Deer",map_bank) ;?>">
			<img onclick="marker_img_select(192)" class="selected_marker" id="img_192" src="<?php echo MAP_BK_MARKER_ICON."/deer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dolphins",map_bank) ;?>">
			<img onclick="marker_img_select(193)" class="selected_marker" id="img_193" src="<?php echo MAP_BK_MARKER_ICON."/dolphins.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dragon",map_bank) ;?>">
			<img onclick="marker_img_select(194)" class="selected_marker" id="img_194" src="<?php echo MAP_BK_MARKER_ICON."/dragon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Duck Export",map_bank) ;?>">
			<img onclick="marker_img_select(195)" class="selected_marker" id="img_195" src="<?php echo MAP_BK_MARKER_ICON."/duck-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Eggs",map_bank) ;?>">
			<img onclick="marker_img_select(196)" class="selected_marker" id="img_196" src="<?php echo MAP_BK_MARKER_ICON."/eggs.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Elephants",map_bank) ;?>">
			<img onclick="marker_img_select(197)" class="selected_marker" id="img_197" src="<?php echo MAP_BK_MARKER_ICON."/elephants.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Emu",map_bank) ;?>">
			<img onclick="marker_img_select(198)" class="selected_marker" id="img_198" src="<?php echo MAP_BK_MARKER_ICON."/emu.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fox",map_bank) ;?>">
			<img onclick="marker_img_select(199)" class="selected_marker" id="img_199" src="<?php echo MAP_BK_MARKER_ICON."/fox1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Frog",map_bank) ;?>">
			<img onclick="marker_img_select(200)" class="selected_marker" id="img_200" src="<?php echo MAP_BK_MARKER_ICON."/frog-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Giraffe",map_bank) ;?>">
			<img onclick="marker_img_select(201)" class="selected_marker" id="img_201" src="<?php echo MAP_BK_MARKER_ICON."/giraffe.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hare",map_bank) ;?>">
			<img onclick="marker_img_select(202)" class="selected_marker" id="img_202" src="<?php echo MAP_BK_MARKER_ICON."/hare1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kangaroo",map_bank) ;?>">
			<img onclick="marker_img_select(203)" class="selected_marker" id="img_203" src="<?php echo MAP_BK_MARKER_ICON."/kangaroo2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Leopard Snow",map_bank) ;?>">
			<img onclick="marker_img_select(204)" class="selected_marker" id="img_204" src="<?php echo MAP_BK_MARKER_ICON."/leopard_snow.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lobster Export",map_bank) ;?>">
			<img onclick="marker_img_select(205)" class="selected_marker" id="img_205" src="<?php echo MAP_BK_MARKER_ICON."/lobster-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Manatee",map_bank) ;?>">
			<img onclick="marker_img_select(206)" class="selected_marker" id="img_206" src="<?php echo MAP_BK_MARKER_ICON."/manatee.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Monkey Export",map_bank) ;?>">
			<img onclick="marker_img_select(207)" class="selected_marker" id="img_207" src="<?php echo MAP_BK_MARKER_ICON."/monkey-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mosquito",map_bank) ;?>">
			<img onclick="marker_img_select(208)" class="selected_marker" id="img_208" src="<?php echo MAP_BK_MARKER_ICON."/mosquito-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Oyster",map_bank) ;?>">
			<img onclick="marker_img_select(209)" class="selected_marker" id="img_209" src="<?php echo MAP_BK_MARKER_ICON."/oyster-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Penguin",map_bank) ;?>">
			<img onclick="marker_img_select(210)" class="selected_marker" id="img_210" src="<?php echo MAP_BK_MARKER_ICON."/penguin-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pets",map_bank) ;?>">
			<img onclick="marker_img_select(211)" class="selected_marker" id="img_211" src="<?php echo MAP_BK_MARKER_ICON."/pets.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pig",map_bank) ;?>">
			<img onclick="marker_img_select(212)" class="selected_marker" id="img_212" src="<?php echo MAP_BK_MARKER_ICON."/pig.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rodent",map_bank) ;?>">
			<img onclick="marker_img_select(213)" class="selected_marker" id="img_213" src="<?php echo MAP_BK_MARKER_ICON."/rodent.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Seals",map_bank) ;?>">
			<img onclick="marker_img_select(214)" class="selected_marker" id="img_214" src="<?php echo MAP_BK_MARKER_ICON."/seals.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shark Export",map_bank) ;?>">
			<img onclick="marker_img_select(215)" class="selected_marker" id="img_215" src="<?php echo MAP_BK_MARKER_ICON."/shark-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snail",map_bank) ;?>">
			<img onclick="marker_img_select(216)" class="selected_marker" id="img_216" src="<?php echo MAP_BK_MARKER_ICON."/snail.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snakes",map_bank) ;?>">
			<img onclick="marker_img_select(217)" class="selected_marker" id="img_217" src="<?php echo MAP_BK_MARKER_ICON."/snakes.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Spider",map_bank) ;?>">
			<img onclick="marker_img_select(218)" class="selected_marker" id="img_218" src="<?php echo MAP_BK_MARKER_ICON."/spider.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tiger",map_bank) ;?>">
			<img onclick="marker_img_select(219)" class="selected_marker" id="img_219" src="<?php echo MAP_BK_MARKER_ICON."/tiger-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Turtle",map_bank) ;?>">
			<img onclick="marker_img_select(220)" class="selected_marker" id="img_220" src="<?php echo MAP_BK_MARKER_ICON."/turtle-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Veterinary",map_bank) ;?>">
			<img onclick="marker_img_select(221)" class="selected_marker" id="img_221" src="<?php echo MAP_BK_MARKER_ICON."/veterinary.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wahle",map_bank) ;?>">
			<img onclick="marker_img_select(222)" class="selected_marker" id="img_222" src="<?php echo MAP_BK_MARKER_ICON."/whale-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wild Life Crossing",map_bank) ;?>">
			<img onclick="marker_img_select(223)" class="selected_marker" id="img_223" src="<?php echo MAP_BK_MARKER_ICON."/wildlifecrossing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Zoo",map_bank) ;?>">
			<img onclick="marker_img_select(224)" class="selected_marker" id="img_224" src="<?php echo MAP_BK_MARKER_ICON."/zoo.png";?>" />
		</span>
	</div>
	<div id="ux_img_natural_marvels" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Anchorpier",map_bank) ;?>">
			<img onclick="marker_img_select(225)" class="selected_marker" id="img_225" src="<?php echo MAP_BK_MARKER_ICON."/anchorpier.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Beach",map_bank) ;?>">
			<img onclick="marker_img_select(226)" class="selected_marker" id="img_226" src="<?php echo MAP_BK_MARKER_ICON."/beach.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Beautiful View",map_bank) ;?>">
			<img onclick="marker_img_select(227)" class="selected_marker" id="img_227" src="<?php echo MAP_BK_MARKER_ICON."/beautifulview.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Canyon",map_bank) ;?>">
			<img onclick="marker_img_select(228)" class="selected_marker" id="img_228" src="<?php echo MAP_BK_MARKER_ICON."/canyon-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Desert",map_bank) ;?>">
			<img onclick="marker_img_select(229)" class="selected_marker" id="img_229" src="<?php echo MAP_BK_MARKER_ICON."/desert-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Drinking Water",map_bank) ;?>">
			<img onclick="marker_img_select(230)" class="selected_marker" id="img_230" src="<?php echo MAP_BK_MARKER_ICON."/drinkingwater.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fjord",map_bank) ;?>">
			<img onclick="marker_img_select(231)" class="selected_marker" id="img_231" src="<?php echo MAP_BK_MARKER_ICON."/fjord-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Flowers",map_bank) ;?>">
			<img onclick="marker_img_select(232)" class="selected_marker" id="img_232" src="<?php echo MAP_BK_MARKER_ICON."/flowers.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Forest",map_bank) ;?>">
			<img onclick="marker_img_select(233)" class="selected_marker" id="img_233" src="<?php echo MAP_BK_MARKER_ICON."/forest2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fossils",map_bank) ;?>">
			<img onclick="marker_img_select(234)" class="selected_marker" id="img_234" src="<?php echo MAP_BK_MARKER_ICON."/fossils.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gyser",map_bank) ;?>">
			<img onclick="marker_img_select(235)" class="selected_marker" id="img_235" src="<?php echo MAP_BK_MARKER_ICON."/geyser-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Glacier",map_bank) ;?>">
			<img onclick="marker_img_select(236)" class="selected_marker" id="img_236" src="<?php echo MAP_BK_MARKER_ICON."/glacier-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Grass",map_bank) ;?>">
			<img onclick="marker_img_select(237)" class="selected_marker" id="img_237" src="<?php echo MAP_BK_MARKER_ICON."/grass.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hot Spring",map_bank) ;?>">
			<img onclick="marker_img_select(238)" class="selected_marker" id="img_238" src="<?php echo MAP_BK_MARKER_ICON."/hotspring.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lake",map_bank) ;?>">
			<img onclick="marker_img_select(239)" class="selected_marker" id="img_239" src="<?php echo MAP_BK_MARKER_ICON."/lake.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mountain",map_bank) ;?>">
			<img onclick="marker_img_select(240)" class="selected_marker" id="img_240" src="<?php echo MAP_BK_MARKER_ICON."/mountain-pass-locator-diagonal-reverse-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mountains",map_bank) ;?>">
			<img onclick="marker_img_select(241)" class="selected_marker" id="img_241" src="<?php echo MAP_BK_MARKER_ICON."/mountains.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mushroom",map_bank) ;?>">
			<img onclick="marker_img_select(242)" class="selected_marker" id="img_242" src="<?php echo MAP_BK_MARKER_ICON."/mushroom.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Riparian Habitat",map_bank) ;?>">
			<img onclick="marker_img_select(243)" class="selected_marker" id="img_243" src="<?php echo MAP_BK_MARKER_ICON."/riparianhabitat.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("River",map_bank) ;?>">
			<img onclick="marker_img_select(244)" class="selected_marker" id="img_244" src="<?php echo MAP_BK_MARKER_ICON."/river-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shore",map_bank) ;?>">
			<img onclick="marker_img_select(245)" class="selected_marker" id="img_245" src="<?php echo MAP_BK_MARKER_ICON."/shore-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sunset Land",map_bank) ;?>">
			<img onclick="marker_img_select(246)" class="selected_marker" id="img_246" src="<?php echo MAP_BK_MARKER_ICON."/sunsetland.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Volcano",map_bank) ;?>">
			<img onclick="marker_img_select(247)" class="selected_marker" id="img_247" src="<?php echo MAP_BK_MARKER_ICON."/volcano-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Drop",map_bank) ;?>">
			<img onclick="marker_img_select(248)" class="selected_marker" id="img_248" src="<?php echo MAP_BK_MARKER_ICON."/waterdrop.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Fall",map_bank) ;?>">
			<img onclick="marker_img_select(249)" class="selected_marker" id="img_249" src="<?php echo MAP_BK_MARKER_ICON."/waterfall-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Well",map_bank) ;?>">
			<img onclick="marker_img_select(250)" class="selected_marker" id="img_250" src="<?php echo MAP_BK_MARKER_ICON."/waterwell.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wet Lands",map_bank) ;?>">
			<img onclick="marker_img_select(251)" class="selected_marker" id="img_251" src="<?php echo MAP_BK_MARKER_ICON."/wetlands.png";?>" />
		</span>
	</div>
	<div id="ux_img_weather" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Anemometer Mono",map_bank) ;?>">
			<img onclick="marker_img_select(252)" class="selected_marker" id="img_252" src="<?php echo MAP_BK_MARKER_ICON."/anemometer_mono.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cloudy",map_bank) ;?>">
			<img onclick="marker_img_select(253)" class="selected_marker" id="img_253" src="<?php echo MAP_BK_MARKER_ICON."/cloudy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cloudy Sunny",map_bank) ;?>">
			<img onclick="marker_img_select(254)" class="selected_marker" id="img_254" src="<?php echo MAP_BK_MARKER_ICON."/cloudysunny.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Moon Star Sunny",map_bank) ;?>">
			<img onclick="marker_img_select(255)" class="selected_marker" id="img_255" src="<?php echo MAP_BK_MARKER_ICON."/moonstar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rainy",map_bank) ;?>">
			<img onclick="marker_img_select(256)" class="selected_marker" id="img_256" src="<?php echo MAP_BK_MARKER_ICON."/rainy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snowy",map_bank) ;?>">
			<img onclick="marker_img_select(257)" class="selected_marker" id="img_257" src="<?php echo MAP_BK_MARKER_ICON."/snowy-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sunny",map_bank) ;?>">
			<img onclick="marker_img_select(258)" class="selected_marker" id="img_258" src="<?php echo MAP_BK_MARKER_ICON."/sunny.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Thunder Storm",map_bank) ;?>">
			<img onclick="marker_img_select(259)" class="selected_marker" id="img_259" src="<?php echo MAP_BK_MARKER_ICON."/thunderstorm.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tornado",map_bank) ;?>">
			<img onclick="marker_img_select(260)" class="selected_marker" id="img_260" src="<?php echo MAP_BK_MARKER_ICON."/tornado-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Umbrella",map_bank) ;?>">
			<img onclick="marker_img_select(261)" class="selected_marker" id="img_261" src="<?php echo MAP_BK_MARKER_ICON."/umbrella-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wind",map_bank) ;?>">
			<img onclick="marker_img_select(262)" class="selected_marker" id="img_262" src="<?php echo MAP_BK_MARKER_ICON."/wind-2.png";?>" />
		</span>
	</div>
	<div id="ux_img_city_services" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Administration",map_bank) ;?>">
			<img onclick="marker_img_select(263)" class="selected_marker" id="img_263" src="<?php echo MAP_BK_MARKER_ICON."/administration.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Community Centre",map_bank) ;?>">
			<img onclick="marker_img_select(264)" class="selected_marker" id="img_264" src="<?php echo MAP_BK_MARKER_ICON."/communitycentre.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Congress",map_bank) ;?>">
			<img onclick="marker_img_select(265)" class="selected_marker" id="img_265" src="<?php echo MAP_BK_MARKER_ICON."/congress.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Exchequer",map_bank) ;?>">
			<img onclick="marker_img_select(266)" class="selected_marker" id="img_266" src="<?php echo MAP_BK_MARKER_ICON."/exchequer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fireman",map_bank) ;?>">
			<img onclick="marker_img_select(267)" class="selected_marker" id="img_267" src="<?php echo MAP_BK_MARKER_ICON."/firemen.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Auction Gavel",map_bank) ;?>">
			<img onclick="marker_img_select(268)" class="selected_marker" id="img_268" src="<?php echo MAP_BK_MARKER_ICON."/gavel-auction-fw.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Library",map_bank) ;?>">
			<img onclick="marker_img_select(269)" class="selected_marker" id="img_269" src="<?php echo MAP_BK_MARKER_ICON."/library.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Police",map_bank) ;?>">
			<img onclick="marker_img_select(270)" class="selected_marker" id="img_270" src="<?php echo MAP_BK_MARKER_ICON."/police.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Postal",map_bank) ;?>">
			<img onclick="marker_img_select(271)" class="selected_marker" id="img_271" src="<?php echo MAP_BK_MARKER_ICON."/postal.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Seniorsite",map_bank) ;?>">
			<img onclick="marker_img_select(272)" class="selected_marker" id="img_272" src="<?php echo MAP_BK_MARKER_ICON."/seniorsite.png";?>" />
		</span>
	</div>
	<div id="ux_img_interior" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Cold Storage",map_bank) ;?>">
			<img onclick="marker_img_select(273)" class="selected_marker" id="img_273" src="<?php echo MAP_BK_MARKER_ICON."/coldstorage.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Disablity",map_bank) ;?>">
			<img onclick="marker_img_select(274)" class="selected_marker" id="img_274" src="<?php echo MAP_BK_MARKER_ICON."/disability.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Dressing Room",map_bank) ;?>">
			<img onclick="marker_img_select(275)" class="selected_marker" id="img_275" src="<?php echo MAP_BK_MARKER_ICON."/dressingroom.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Drinking Fountain",map_bank) ;?>">
			<img onclick="marker_img_select(276)" class="selected_marker" id="img_276" src="<?php echo MAP_BK_MARKER_ICON."/drinkingfountain.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Elevator",map_bank) ;?>">
			<img onclick="marker_img_select(277)" class="selected_marker" id="img_277" src="<?php echo MAP_BK_MARKER_ICON."/elevator.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Elevator Down",map_bank) ;?>">
			<img onclick="marker_img_select(278)" class="selected_marker" id="img_278" src="<?php echo MAP_BK_MARKER_ICON."/elevator_down.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Elevator Up",map_bank) ;?>">
			<img onclick="marker_img_select(279)" class="selected_marker" id="img_279" src="<?php echo MAP_BK_MARKER_ICON."/elevator_up.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Entrance",map_bank) ;?>">
			<img onclick="marker_img_select(280)" class="selected_marker" id="img_280" src="<?php echo MAP_BK_MARKER_ICON."/entrance.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Exit",map_bank) ;?>">
			<img onclick="marker_img_select(281)" class="selected_marker" id="img_281" src="<?php echo MAP_BK_MARKER_ICON."/exit.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fire Exstinguisher",map_bank) ;?>">
			<img onclick="marker_img_select(282)" class="selected_marker" id="img_282" src="<?php echo MAP_BK_MARKER_ICON."/fireexstinguisher.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("First Aid",map_bank) ;?>">
			<img onclick="marker_img_select(283)" class="selected_marker" id="img_283" src="<?php echo MAP_BK_MARKER_ICON."/firstaid.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Heating and Aircon",map_bank) ;?>">
			<img onclick="marker_img_select(284)" class="selected_marker" id="img_284" src="<?php echo MAP_BK_MARKER_ICON."/heating-and-aircon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Information",map_bank) ;?>">
			<img onclick="marker_img_select(285)" class="selected_marker" id="img_285" src="<?php echo MAP_BK_MARKER_ICON."/information.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Moving Walkway Enter Export",map_bank) ;?>">
			<img onclick="marker_img_select(286)" class="selected_marker" id="img_286" src="<?php echo MAP_BK_MARKER_ICON."/moving-walkway-enter-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shower",map_bank) ;?>">
			<img onclick="marker_img_select(287)" class="selected_marker" id="img_287" src="<?php echo MAP_BK_MARKER_ICON."/shower.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Smoking",map_bank) ;?>">
			<img onclick="marker_img_select(288)" class="selected_marker" id="img_288" src="<?php echo MAP_BK_MARKER_ICON."/smoking.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Staris",map_bank) ;?>">
			<img onclick="marker_img_select(289)" class="selected_marker" id="img_289" src="<?php echo MAP_BK_MARKER_ICON."/stairs.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Telephone",map_bank) ;?>">
			<img onclick="marker_img_select(290)" class="selected_marker" id="img_290" src="<?php echo MAP_BK_MARKER_ICON."/telephone.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Toilets",map_bank) ;?>">
			<img onclick="marker_img_select(291)" class="selected_marker" id="img_291" src="<?php echo MAP_BK_MARKER_ICON."/toilets.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Trash",map_bank) ;?>">
			<img onclick="marker_img_select(292)" class="selected_marker" id="img_292" src="<?php echo MAP_BK_MARKER_ICON."/trash.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Waiting",map_bank) ;?>">
			<img onclick="marker_img_select(293)" class="selected_marker" id="img_293" src="<?php echo MAP_BK_MARKER_ICON."/waiting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wi Fi",map_bank) ;?>">
			<img onclick="marker_img_select(294)" class="selected_marker" id="img_294" src="<?php echo MAP_BK_MARKER_ICON."/wifi.png";?>" />
		</span>
	</div>
	<div id="ux_img_real_estate" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Apartment",map_bank) ;?>">
			<img onclick="marker_img_select(295)" class="selected_marker" id="img_295" src="<?php echo MAP_BK_MARKER_ICON."/apartment-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Condominium",map_bank) ;?>">
			<img onclick="marker_img_select(296)" class="selected_marker" id="img_296" src="<?php echo MAP_BK_MARKER_ICON."/condominium.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("House",map_bank) ;?>">
			<img onclick="marker_img_select(297)" class="selected_marker" id="img_297" src="<?php echo MAP_BK_MARKER_ICON."/house.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Office Building",map_bank) ;?>">
			<img onclick="marker_img_select(298)" class="selected_marker" id="img_298" src="<?php echo MAP_BK_MARKER_ICON."/office-building.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Town House",map_bank) ;?>">
			<img onclick="marker_img_select(299)" class="selected_marker" id="img_299" src="<?php echo MAP_BK_MARKER_ICON."/townhouse.png";?>" />
		</span>
			</div>
	<div id="ux_img_kids" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Child Museum",map_bank) ;?>">
			<img onclick="marker_img_select(300)" class="selected_marker" id="img_300" src="<?php echo MAP_BK_MARKER_ICON."/childmuseum01.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Day Care",map_bank) ;?>">
			<img onclick="marker_img_select(301)" class="selected_marker" id="img_301" src="<?php echo MAP_BK_MARKER_ICON."/daycare.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nanny",map_bank) ;?>">
			<img onclick="marker_img_select(302)" class="selected_marker" id="img_302" src="<?php echo MAP_BK_MARKER_ICON."/nanny.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nursery",map_bank) ;?>">
			<img onclick="marker_img_select(303)" class="selected_marker" id="img_303" src="<?php echo MAP_BK_MARKER_ICON."/nursery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Play Ground",map_bank) ;?>">
			<img onclick="marker_img_select(304)" class="selected_marker" id="img_304" src="<?php echo MAP_BK_MARKER_ICON."/playground.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Scout Group",map_bank) ;?>">
			<img onclick="marker_img_select(305)" class="selected_marker" id="img_305" src="<?php echo MAP_BK_MARKER_ICON."/scoutgroup.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Toys",map_bank) ;?>">
			<img onclick="marker_img_select(306)" class="selected_marker" id="img_306" src="<?php echo MAP_BK_MARKER_ICON."/toys.png";?>" />
		</span>
	</div>
	<div id="ux_img_bars" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Bar",map_bank) ;?>">
			<img onclick="marker_img_select(307)" class="selected_marker" id="img_307" src="<?php echo MAP_BK_MARKER_ICON."/bar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bar Coktail",map_bank) ;?>">
			<img onclick="marker_img_select(308)" class="selected_marker" id="img_308" src="<?php echo MAP_BK_MARKER_ICON."/bar_coktail.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bar Juice",map_bank) ;?>">
			<img onclick="marker_img_select(309)" class="selected_marker" id="img_309" src="<?php echo MAP_BK_MARKER_ICON."/bar_juice.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Beer Gardenm",map_bank) ;?>">
			<img onclick="marker_img_select(310)" class="selected_marker" id="img_310" src="<?php echo MAP_BK_MARKER_ICON."/beergarden.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Coffee",map_bank) ;?>">
			<img onclick="marker_img_select(311)" class="selected_marker" id="img_311" src="<?php echo MAP_BK_MARKER_ICON."/coffee.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gay Female",map_bank) ;?>">
			<img onclick="marker_img_select(312)" class="selected_marker" id="img_312" src="<?php echo MAP_BK_MARKER_ICON."/gay-female.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gay Female",map_bank) ;?>">
			<img onclick="marker_img_select(313)" class="selected_marker" id="img_313" src="<?php echo MAP_BK_MARKER_ICON."/gay-male.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Japanese Sake",map_bank) ;?>">
			<img onclick="marker_img_select(314)" class="selected_marker" id="img_314" src="<?php echo MAP_BK_MARKER_ICON."/japanese-sake.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tea House",map_bank) ;?>">
			<img onclick="marker_img_select(315)" class="selected_marker" id="img_315" src="<?php echo MAP_BK_MARKER_ICON."/teahouse.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Terrace",map_bank) ;?>">
			<img onclick="marker_img_select(316)" class="selected_marker" id="img_316" src="<?php echo MAP_BK_MARKER_ICON."/terrace.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Whisky Barrel",map_bank) ;?>">
			<img onclick="marker_img_select(317)" class="selected_marker" id="img_317" src="<?php echo MAP_BK_MARKER_ICON."/whiskey_barrel.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wine Bar",map_bank) ;?>">
			<img onclick="marker_img_select(318)" class="selected_marker" id="img_318" src="<?php echo MAP_BK_MARKER_ICON."/winebar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wine Tasting",map_bank) ;?>">
			<img onclick="marker_img_select(319)" class="selected_marker" id="img_319" src="<?php echo MAP_BK_MARKER_ICON."/winetasting.png";?>" />
		</span>
	</div>
	<div id="ux_img_hotels" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Bed Breakfast",map_bank) ;?>">
			<img onclick="marker_img_select(320)" class="selected_marker" id="img_320" src="<?php echo MAP_BK_MARKER_ICON."/bed_breakfast1-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cruise Ship",map_bank) ;?>">
			<img onclick="marker_img_select(321)" class="selected_marker" id="img_321" src="<?php echo MAP_BK_MARKER_ICON."/cruiseship.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hostel Star",map_bank) ;?>">
			<img onclick="marker_img_select(322)" class="selected_marker" id="img_322" src="<?php echo MAP_BK_MARKER_ICON."/hostel_0star.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hotel Star",map_bank) ;?>">
			<img onclick="marker_img_select(323)" class="selected_marker" id="img_323" src="<?php echo MAP_BK_MARKER_ICON."/hotel_0star.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lodging Star",map_bank) ;?>">
			<img onclick="marker_img_select(324)" class="selected_marker" id="img_324" src="<?php echo MAP_BK_MARKER_ICON."/lodging_0star.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lodging Horse Riding",map_bank) ;?>">
			<img onclick="marker_img_select(325)" class="selected_marker" id="img_325" src="<?php echo MAP_BK_MARKER_ICON."/lodging_horseriding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Motel",map_bank) ;?>">
			<img onclick="marker_img_select(326)" class="selected_marker" id="img_326" src="<?php echo MAP_BK_MARKER_ICON."/motel-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Resort",map_bank) ;?>">
			<img onclick="marker_img_select(327)" class="selected_marker" id="img_327" src="<?php echo MAP_BK_MARKER_ICON."/resort.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tv",map_bank) ;?>">
			<img onclick="marker_img_select(328)" class="selected_marker" id="img_328" src="<?php echo MAP_BK_MARKER_ICON."/tv.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Villa",map_bank) ;?>">
			<img onclick="marker_img_select(329)" class="selected_marker" id="img_329" src="<?php echo MAP_BK_MARKER_ICON."/villa.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wi Fi Female",map_bank) ;?>">
			<img onclick="marker_img_select(330)" class="selected_marker" id="img_330" src="<?php echo MAP_BK_MARKER_ICON."/wifi.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Youth Hostel",map_bank) ;?>">
			<img onclick="marker_img_select(331)" class="selected_marker" id="img_331" src="<?php echo MAP_BK_MARKER_ICON."/youthhostel.png";?>" />
		</span>
	</div>
	<div id="ux_img_restaurant" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Barbecue",map_bank) ;?>">
			<img onclick="marker_img_select(332)" class="selected_marker" id="img_332" src="<?php echo MAP_BK_MARKER_ICON."/barbecue.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cafetaria",map_bank) ;?>">
			<img onclick="marker_img_select(333)" class="selected_marker" id="img_333" src="<?php echo MAP_BK_MARKER_ICON."/cafetaria.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fast Food",map_bank) ;?>">
			<img onclick="marker_img_select(334)" class="selected_marker" id="img_334" src="<?php echo MAP_BK_MARKER_ICON."/fastfood.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fish Chips",map_bank) ;?>">
			<img onclick="marker_img_select(335)" class="selected_marker" id="img_335" src="<?php echo MAP_BK_MARKER_ICON."/fishchips.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gluten Free",map_bank) ;?>">
			<img onclick="marker_img_select(336)" class="selected_marker" id="img_336" src="<?php echo MAP_BK_MARKER_ICON."/gluten_free.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gourmet star",map_bank) ;?>">
			<img onclick="marker_img_select(337)" class="selected_marker" id="img_337" src="<?php echo MAP_BK_MARKER_ICON."/gourmet_0star.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Japanese Food",map_bank) ;?>">
			<img onclick="marker_img_select(338)" class="selected_marker" id="img_338" src="<?php echo MAP_BK_MARKER_ICON."/japanese-food.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kebab",map_bank) ;?>">
			<img onclick="marker_img_select(339)" class="selected_marker" id="img_339" src="<?php echo MAP_BK_MARKER_ICON."/kebab.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pizzaria",map_bank) ;?>">
			<img onclick="marker_img_select(340)" class="selected_marker" id="img_340" src="<?php echo MAP_BK_MARKER_ICON."/pizzaria.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant",map_bank) ;?>">
			<img onclick="marker_img_select(341)" class="selected_marker" id="img_341" src="<?php echo MAP_BK_MARKER_ICON."/restaurant.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant African",map_bank) ;?>">
			<img onclick="marker_img_select(342)" class="selected_marker" id="img_342" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_african.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Breakfast",map_bank) ;?>">
			<img onclick="marker_img_select(343)" class="selected_marker" id="img_343" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_breakfast.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Buffet",map_bank) ;?>">
			<img onclick="marker_img_select(344)" class="selected_marker" id="img_344" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_buffet.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Chinese",map_bank) ;?>">
			<img onclick="marker_img_select(345)" class="selected_marker" id="img_345" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_chinese.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Fish",map_bank) ;?>">
			<img onclick="marker_img_select(346)" class="selected_marker" id="img_346" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_fish.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Green",map_bank) ;?>">
			<img onclick="marker_img_select(347)" class="selected_marker" id="img_347" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_greek.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Indian",map_bank) ;?>">
			<img onclick="marker_img_select(348)" class="selected_marker" id="img_348" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_indian.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Italian",map_bank) ;?>">
			<img onclick="marker_img_select(349)" class="selected_marker" id="img_349" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_italian.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Korean",map_bank) ;?>">
			<img onclick="marker_img_select(350)" class="selected_marker" id="img_350" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_korean.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Mediterranean",map_bank) ;?>">
			<img onclick="marker_img_select(351)" class="selected_marker" id="img_351" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_mediterranean.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Mexican",map_bank) ;?>">
			<img onclick="marker_img_select(352)" class="selected_marker" id="img_352" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_mexican.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Romantic",map_bank) ;?>">
			<img onclick="marker_img_select(353)" class="selected_marker" id="img_353" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_romantic.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Steakhouse",map_bank) ;?>">
			<img onclick="marker_img_select(354)" class="selected_marker" id="img_354" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_steakhouse.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Tapas",map_bank) ;?>">
			<img onclick="marker_img_select(355)" class="selected_marker" id="img_355" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_tapas.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Thai",map_bank) ;?>">
			<img onclick="marker_img_select(356)" class="selected_marker" id="img_356" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_thai.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Turkish",map_bank) ;?>">
			<img onclick="marker_img_select(357)" class="selected_marker" id="img_357" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_turkish.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Restaurant Vegetarian",map_bank) ;?>">
			<img onclick="marker_img_select(358)" class="selected_marker" id="img_358" src="<?php echo MAP_BK_MARKER_ICON."/restaurant_vegetarian.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tajine",map_bank) ;?>">
			<img onclick="marker_img_select(359)" class="selected_marker" id="img_359" src="<?php echo MAP_BK_MARKER_ICON."/tajine-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Terrace",map_bank) ;?>">
			<img onclick="marker_img_select(360)" class="selected_marker" id="img_360" src="<?php echo MAP_BK_MARKER_ICON."/terrace.png";?>" />
		</span>
	</div>
	<div id="ux_img_takeaway" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Food Delivery Service",map_bank) ;?>">
			<img onclick="marker_img_select(361)" class="selected_marker" id="img_361" src="<?php echo MAP_BK_MARKER_ICON."/fooddeliveryservice.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Food Truck",map_bank) ;?>">
			<img onclick="marker_img_select(362)" class="selected_marker" id="img_362" src="<?php echo MAP_BK_MARKER_ICON."/foodtruck.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ice Cream",map_bank) ;?>">
			<img onclick="marker_img_select(363)" class="selected_marker" id="img_363" src="<?php echo MAP_BK_MARKER_ICON."/icecream.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sandwich",map_bank) ;?>">
			<img onclick="marker_img_select(364)" class="selected_marker" id="img_364" src="<?php echo MAP_BK_MARKER_ICON."/sandwich-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Take away",map_bank) ;?>">
			<img onclick="marker_img_select(365)" class="selected_marker" id="img_365" src="<?php echo MAP_BK_MARKER_ICON."/takeaway.png";?>" />
		</span>
	</div>
	<div id="ux_img_sports" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Archery",map_bank) ;?>">
			<img onclick="marker_img_select(366)" class="selected_marker" id="img_366" src="<?php echo MAP_BK_MARKER_ICON."/archery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Atv",map_bank) ;?>">
			<img onclick="marker_img_select(367)" class="selected_marker" id="img_367" src="<?php echo MAP_BK_MARKER_ICON."/atv.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Australian Football",map_bank) ;?>">
			<img onclick="marker_img_select(368)" class="selected_marker" id="img_368" src="<?php echo MAP_BK_MARKER_ICON."/australianfootball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Avalanche",map_bank) ;?>">
			<img onclick="marker_img_select(369)" class="selected_marker" id="img_369" src="<?php echo MAP_BK_MARKER_ICON."/avalanche1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Baseball",map_bank) ;?>">
			<img onclick="marker_img_select(370)" class="selected_marker" id="img_370" src="<?php echo MAP_BK_MARKER_ICON."/baseball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Basketball",map_bank) ;?>">
			<img onclick="marker_img_select(371)" class="selected_marker" id="img_371" src="<?php echo MAP_BK_MARKER_ICON."/basketball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Beach Vollyball",map_bank) ;?>">
			<img onclick="marker_img_select(372)" class="selected_marker" id="img_372" src="<?php echo MAP_BK_MARKER_ICON."/beachvolleyball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bike Downhill",map_bank) ;?>">
			<img onclick="marker_img_select(373)" class="selected_marker" id="img_373" src="<?php echo MAP_BK_MARKER_ICON."/bike_downhill.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bike Rising",map_bank) ;?>">
			<img onclick="marker_img_select(374)" class="selected_marker" id="img_374" src="<?php echo MAP_BK_MARKER_ICON."/bike_rising.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Billiard",map_bank) ;?>">
			<img onclick="marker_img_select(375)" class="selected_marker" id="img_375" src="<?php echo MAP_BK_MARKER_ICON."/billiard-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Boarder Cross",map_bank) ;?>">
			<img onclick="marker_img_select(376)" class="selected_marker" id="img_376" src="<?php echo MAP_BK_MARKER_ICON."/boardercross.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bobsliegh",map_bank) ;?>">
			<img onclick="marker_img_select(377)" class="selected_marker" id="img_377" src="<?php echo MAP_BK_MARKER_ICON."/bobsleigh.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bollie",map_bank) ;?>">
			<img onclick="marker_img_select(378)" class="selected_marker" id="img_378" src="<?php echo MAP_BK_MARKER_ICON."/bollie.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Boxing",map_bank) ;?>">
			<img onclick="marker_img_select(379)" class="selected_marker" id="img_379" src="<?php echo MAP_BK_MARKER_ICON."/boxing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Climbing",map_bank) ;?>">
			<img onclick="marker_img_select(380)" class="selected_marker" id="img_380" src="<?php echo MAP_BK_MARKER_ICON."/climbing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Criket",map_bank) ;?>">
			<img onclick="marker_img_select(381)" class="selected_marker" id="img_381" src="<?php echo MAP_BK_MARKER_ICON."/cricket.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Curling",map_bank) ;?>">
			<img onclick="marker_img_select(382)" class="selected_marker" id="img_382" src="<?php echo MAP_BK_MARKER_ICON."/curling-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cycling",map_bank) ;?>">
			<img onclick="marker_img_select(383)" class="selected_marker" id="img_383" src="<?php echo MAP_BK_MARKER_ICON."/cycling.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cycling Feed",map_bank) ;?>">	
			<img onclick="marker_img_select(384)" class="selected_marker" id="img_384" src="<?php echo MAP_BK_MARKER_ICON."/cycling_feed.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cycling sprint",map_bank) ;?>">
			<img onclick="marker_img_select(385)" class="selected_marker" id="img_385" src="<?php echo MAP_BK_MARKER_ICON."/cycling_sprint.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Deep Sea Fisshing",map_bank) ;?>">
			<img onclick="marker_img_select(386)" class="selected_marker" id="img_386" src="<?php echo MAP_BK_MARKER_ICON."/deepseafishing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Diving",map_bank) ;?>">
			<img onclick="marker_img_select(387)" class="selected_marker" id="img_387" src="<?php echo MAP_BK_MARKER_ICON."/diving.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Finish",map_bank) ;?>">
			<img onclick="marker_img_select(388)" class="selected_marker" id="img_388" src="<?php echo MAP_BK_MARKER_ICON."/finish.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fishing",map_bank) ;?>">
			<img onclick="marker_img_select(389)" class="selected_marker" id="img_389" src="<?php echo MAP_BK_MARKER_ICON."/fishing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fitness",map_bank) ;?>">
			<img onclick="marker_img_select(390)" class="selected_marker" id="img_390" src="<?php echo MAP_BK_MARKER_ICON."/fitness.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Four by Four",map_bank) ;?>">
			<img onclick="marker_img_select(391)" class="selected_marker" id="img_391" src="<?php echo MAP_BK_MARKER_ICON."/fourbyfour.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Field Target",map_bank) ;?>">
			<img onclick="marker_img_select(392)" class="selected_marker" id="img_392" src="<?php echo MAP_BK_MARKER_ICON."/ft.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Golfing",map_bank) ;?>">
			<img onclick="marker_img_select(393)" class="selected_marker" id="img_393" src="<?php echo MAP_BK_MARKER_ICON."/golfing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Handball",map_bank) ;?>">
			<img onclick="marker_img_select(394)" class="selected_marker" id="img_394" src="<?php echo MAP_BK_MARKER_ICON."/handball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hang Gliding",map_bank) ;?>">
			<img onclick="marker_img_select(395)" class="selected_marker" id="img_395" src="<?php echo MAP_BK_MARKER_ICON."/hanggliding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hiking",map_bank) ;?>">
			<img onclick="marker_img_select(396)" class="selected_marker" id="img_396" src="<?php echo MAP_BK_MARKER_ICON."/hiking.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Horse Riding",map_bank) ;?>">
			<img onclick="marker_img_select(397)" class="selected_marker" id="img_397" src="<?php echo MAP_BK_MARKER_ICON."/horseriding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hunting",map_bank) ;?>">
			<img onclick="marker_img_select(398)" class="selected_marker" id="img_398" src="<?php echo MAP_BK_MARKER_ICON."/hunting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ice Hockey",map_bank) ;?>">
			<img onclick="marker_img_select(399)" class="selected_marker" id="img_399" src="<?php echo MAP_BK_MARKER_ICON."/icehockey.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ice Skating",map_bank) ;?>">
			<img onclick="marker_img_select(400)" class="selected_marker" id="img_400" src="<?php echo MAP_BK_MARKER_ICON."/iceskating.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jogging",map_bank) ;?>">
			<img onclick="marker_img_select(401)" class="selected_marker" id="img_401" src="<?php echo MAP_BK_MARKER_ICON."/jogging.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Judo",map_bank) ;?>">
			<img onclick="marker_img_select(402)" class="selected_marker" id="img_402" src="<?php echo MAP_BK_MARKER_ICON."/judo.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Karate",map_bank) ;?>">
			<img onclick="marker_img_select(403)" class="selected_marker" id="img_403" src="<?php echo MAP_BK_MARKER_ICON."/karate.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Karting",map_bank) ;?>">
			<img onclick="marker_img_select(404)" class="selected_marker" id="img_404" src="<?php echo MAP_BK_MARKER_ICON."/karting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kayaking",map_bank) ;?>">
			<img onclick="marker_img_select(405)" class="selected_marker" id="img_405" src="<?php echo MAP_BK_MARKER_ICON."/kayaking.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kite Surfing",map_bank) ;?>">
			<img onclick="marker_img_select(406)" class="selected_marker" id="img_406" src="<?php echo MAP_BK_MARKER_ICON."/kitesurfing (2).png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kite Surfing",map_bank) ;?>">
			<img onclick="marker_img_select(407)" class="selected_marker" id="img_407" src="<?php echo MAP_BK_MARKER_ICON."/kitesurfing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Motar Bike",map_bank) ;?>">
			<img onclick="marker_img_select(408)" class="selected_marker" id="img_408" src="<?php echo MAP_BK_MARKER_ICON."/motorbike.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mountain Biking",map_bank) ;?>">
			<img onclick="marker_img_select(409)" class="selected_marker" id="img_409" src="<?php echo MAP_BK_MARKER_ICON."/mountainbiking-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mountain Cathc",map_bank) ;?>">
			<img onclick="marker_img_select(410)" class="selected_marker" id="img_410" src="<?php echo MAP_BK_MARKER_ICON."/mountains_cathc.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nordicski",map_bank) ;?>">
			<img onclick="marker_img_select(411)" class="selected_marker" id="img_411" src="<?php echo MAP_BK_MARKER_ICON."/nordicski.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Orienteering",map_bank) ;?>">
			<img onclick="marker_img_select(412)" class="selected_marker" id="img_412" src="<?php echo MAP_BK_MARKER_ICON."/orienteering.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Para Glading",map_bank) ;?>">
			<img onclick="marker_img_select(413)" class="selected_marker" id="img_413" src="<?php echo MAP_BK_MARKER_ICON."/paragliding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Para Sailing",map_bank) ;?>">
			<img onclick="marker_img_select(414)" class="selected_marker" id="img_414" src="<?php echo MAP_BK_MARKER_ICON."/parasailing (2).png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Yooner",map_bank) ;?>">
			<img onclick="marker_img_select(415)" class="selected_marker" id="img_415" src="<?php echo MAP_BK_MARKER_ICON."/yooner.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Para Sailing",map_bank) ;?>">
			<img onclick="marker_img_select(416)" class="selected_marker" id="img_416" src="<?php echo MAP_BK_MARKER_ICON."/parasailing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Petanque",map_bank) ;?>">
			<img onclick="marker_img_select(417)" class="selected_marker" id="img_417" src="<?php echo MAP_BK_MARKER_ICON."/petanque.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Radio Control Model Car",map_bank) ;?>">
			<img onclick="marker_img_select(418)" class="selected_marker" id="img_418" src="<?php echo MAP_BK_MARKER_ICON."/radio-control-model-car.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Roller Blade",map_bank) ;?>">
			<img onclick="marker_img_select(419)" class="selected_marker" id="img_419" src="<?php echo MAP_BK_MARKER_ICON."/rollerblade.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Roller Skate",map_bank) ;?>">
			<img onclick="marker_img_select(420)" class="selected_marker" id="img_420" src="<?php echo MAP_BK_MARKER_ICON."/rollerskate.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ropes Course",map_bank) ;?>">
			<img onclick="marker_img_select(421)" class="selected_marker" id="img_421" src="<?php echo MAP_BK_MARKER_ICON."/ropescourse.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Row Boat",map_bank) ;?>">
			<img onclick="marker_img_select(422)" class="selected_marker" id="img_422" src="<?php echo MAP_BK_MARKER_ICON."/rowboat.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rugby Field",map_bank) ;?>">
			<img onclick="marker_img_select(423)" class="selected_marker" id="img_423" src="<?php echo MAP_BK_MARKER_ICON."/rugbyfield.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sailing",map_bank) ;?>">
			<img onclick="marker_img_select(424)" class="selected_marker" id="img_424" src="<?php echo MAP_BK_MARKER_ICON."/sailing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Scuva Diving",map_bank) ;?>">
			<img onclick="marker_img_select(425)" class="selected_marker" id="img_425" src="<?php echo MAP_BK_MARKER_ICON."/scubadiving.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shooting",map_bank) ;?>">
			<img onclick="marker_img_select(426)" class="selected_marker" id="img_426" src="<?php echo MAP_BK_MARKER_ICON."/shooting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shooting Range",map_bank) ;?>">
			<img onclick="marker_img_select(427)" class="selected_marker" id="img_427" src="<?php echo MAP_BK_MARKER_ICON."/shootingrange.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Skiing",map_bank) ;?>">
			<img onclick="marker_img_select(428)" class="selected_marker" id="img_428" src="<?php echo MAP_BK_MARKER_ICON."/skiing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ski Jump",map_bank) ;?>">
			<img onclick="marker_img_select(429)" class="selected_marker" id="img_429" src="<?php echo MAP_BK_MARKER_ICON."/skijump.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ski Lifting",map_bank) ;?>">
			<img onclick="marker_img_select(430)" class="selected_marker" id="img_430" src="<?php echo MAP_BK_MARKER_ICON."/skilifting.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sle Dog",map_bank) ;?>">
			<img onclick="marker_img_select(431)" class="selected_marker" id="img_431" src="<?php echo MAP_BK_MARKER_ICON."/sleddog.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sledge",map_bank) ;?>">
			<img onclick="marker_img_select(432)" class="selected_marker" id="img_432" src="<?php echo MAP_BK_MARKER_ICON."/sledge.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sledge Summmer",map_bank) ;?>">
			<img onclick="marker_img_select(433)" class="selected_marker" id="img_433" src="<?php echo MAP_BK_MARKER_ICON."/sledge_summer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snorkling",map_bank) ;?>">
			<img onclick="marker_img_select(434)" class="selected_marker" id="img_434" src="<?php echo MAP_BK_MARKER_ICON."/snorkeling.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snow Boarding",map_bank) ;?>">
			<img onclick="marker_img_select(435)" class="selected_marker" id="img_435" src="<?php echo MAP_BK_MARKER_ICON."/snowboarding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snow Biling",map_bank) ;?>">
			<img onclick="marker_img_select(436)" class="selected_marker" id="img_436" src="<?php echo MAP_BK_MARKER_ICON."/snowmobiling (2).png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snow Mobiling",map_bank) ;?>">
			<img onclick="marker_img_select(437)" class="selected_marker" id="img_437" src="<?php echo MAP_BK_MARKER_ICON."/snowmobiling.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snow Park",map_bank) ;?>">
			<img onclick="marker_img_select(438)" class="selected_marker" id="img_438" src="<?php echo MAP_BK_MARKER_ICON."/snowpark_arc.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Snow Shoeing",map_bank) ;?>">
			<img onclick="marker_img_select(439)" class="selected_marker" id="img_439" src="<?php echo MAP_BK_MARKER_ICON."/snowshoeing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Soccer",map_bank) ;?>">
			<img onclick="marker_img_select(440)" class="selected_marker" id="img_440" src="<?php echo MAP_BK_MARKER_ICON."/soccer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Speed Riding",map_bank) ;?>">
			<img onclick="marker_img_select(441)" class="selected_marker" id="img_441" src="<?php echo MAP_BK_MARKER_ICON."/speedriding.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Spelunking",map_bank) ;?>">
			<img onclick="marker_img_select(442)" class="selected_marker" id="img_442" src="<?php echo MAP_BK_MARKER_ICON."/spelunking.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sports Car",map_bank) ;?>">
			<img onclick="marker_img_select(443)" class="selected_marker" id="img_443" src="<?php echo MAP_BK_MARKER_ICON."/sportscar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sport Utility Vehicle",map_bank) ;?>">
			<img onclick="marker_img_select(444)" class="selected_marker" id="img_444" src="<?php echo MAP_BK_MARKER_ICON."/sportutilityvehicle.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Squash",map_bank) ;?>">
			<img onclick="marker_img_select(445)" class="selected_marker" id="img_445" src="<?php echo MAP_BK_MARKER_ICON."/squash-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sumo",map_bank) ;?>">
			<img onclick="marker_img_select(446)" class="selected_marker" id="img_446" src="<?php echo MAP_BK_MARKER_ICON."/sumo-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Surface Lift",map_bank) ;?>">
			<img onclick="marker_img_select(447)" class="selected_marker" id="img_447" src="<?php echo MAP_BK_MARKER_ICON."/surfacelift.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Surfing",map_bank) ;?>">
			<img onclick="marker_img_select(448)" class="selected_marker" id="img_448" src="<?php echo MAP_BK_MARKER_ICON."/surfing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Surf Paddle",map_bank) ;?>">
			<img onclick="marker_img_select(449)" class="selected_marker" id="img_449" src="<?php echo MAP_BK_MARKER_ICON."/surfpaddle.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Swimming",map_bank) ;?>">
			<img onclick="marker_img_select(450)" class="selected_marker" id="img_450" src="<?php echo MAP_BK_MARKER_ICON."/swimming.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Taekwondo",map_bank) ;?>">
			<img onclick="marker_img_select(451)" class="selected_marker" id="img_451" src="<?php echo MAP_BK_MARKER_ICON."/taekwondo-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Table Tennis",map_bank) ;?>">
			<img onclick="marker_img_select(452)" class="selected_marker" id="img_452" src="<?php echo MAP_BK_MARKER_ICON."/tebletennis.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tennis",map_bank) ;?>">
			<img onclick="marker_img_select(453)" class="selected_marker" id="img_453" src="<?php echo MAP_BK_MARKER_ICON."/tennis.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Us Football",map_bank) ;?>">
			<img onclick="marker_img_select(454)" class="selected_marker" id="img_454" src="<?php echo MAP_BK_MARKER_ICON."/usfootball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Volleyball",map_bank) ;?>">
			<img onclick="marker_img_select(455)" class="selected_marker" id="img_455" src="<?php echo MAP_BK_MARKER_ICON."/volleyball.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Craft",map_bank) ;?>">
			<img onclick="marker_img_select(456)" class="selected_marker" id="img_456" src="<?php echo MAP_BK_MARKER_ICON."/watercraft.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Skiing",map_bank) ;?>">
			<img onclick="marker_img_select(457)" class="selected_marker" id="img_457" src="<?php echo MAP_BK_MARKER_ICON."/waterskiing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Weights",map_bank) ;?>">	
			<img onclick="marker_img_select(458)" class="selected_marker" id="img_458" src="<?php echo MAP_BK_MARKER_ICON."/weights.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wind Surfing",map_bank) ;?>">
			<img onclick="marker_img_select(459)" class="selected_marker" id="img_459" src="<?php echo MAP_BK_MARKER_ICON."/windsurfing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wrestling",map_bank) ;?>">
			<img onclick="marker_img_select(460)" class="selected_marker" id="img_460" src="<?php echo MAP_BK_MARKER_ICON."/wrestling-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Yoga",map_bank) ;?>">
			<img onclick="marker_img_select(461)" class="selected_marker" id="img_461" src="<?php echo MAP_BK_MARKER_ICON."/yoga.png";?>" />
		</span>
	</div>
	<div id="ux_img_apparels" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Bags",map_bank) ;?>">
			<img onclick="marker_img_select(462)" class="selected_marker" id="img_462" src="<?php echo MAP_BK_MARKER_ICON."/bags.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Clothers Female",map_bank) ;?>">
			<img onclick="marker_img_select(463)" class="selected_marker" id="img_463" src="<?php echo MAP_BK_MARKER_ICON."/clothers_female.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Clothers Male",map_bank) ;?>">
			<img onclick="marker_img_select(464)" class="selected_marker" id="img_464" src="<?php echo MAP_BK_MARKER_ICON."/clothers_male.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hats",map_bank) ;?>">
			<img onclick="marker_img_select(465)" class="selected_marker" id="img_465" src="<?php echo MAP_BK_MARKER_ICON."/hats.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jewellry Female",map_bank) ;?>">
			<img onclick="marker_img_select(466)" class="selected_marker" id="img_466" src="<?php echo MAP_BK_MARKER_ICON."/jewelry.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Lingerie",map_bank) ;?>">
			<img onclick="marker_img_select(467)" class="selected_marker" id="img_467" src="<?php echo MAP_BK_MARKER_ICON."/lingerie.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Permurey",map_bank) ;?>">
			<img onclick="marker_img_select(468)" class="selected_marker" id="img_468" src="<?php echo MAP_BK_MARKER_ICON."/perfumery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Schreibwaren",map_bank) ;?>">
			<img onclick="marker_img_select(469)" class="selected_marker" id="img_469" src="<?php echo MAP_BK_MARKER_ICON."/schreibwaren_web.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shoes",map_bank) ;?>">
			<img onclick="marker_img_select(470)" class="selected_marker" id="img_470" src="<?php echo MAP_BK_MARKER_ICON."/shoes.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sneakers",map_bank) ;?>">
			<img onclick="marker_img_select(471)" class="selected_marker" id="img_471" src="<?php echo MAP_BK_MARKER_ICON."/sneakers.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tailor",map_bank) ;?>">
			<img onclick="marker_img_select(472)" class="selected_marker" id="img_472" src="<?php echo MAP_BK_MARKER_ICON."/tailor.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Textiles",map_bank) ;?>">
			<img onclick="marker_img_select(473)" class="selected_marker" id="img_473" src="<?php echo MAP_BK_MARKER_ICON."/textiles.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Umbrella",map_bank) ;?>">
			<img onclick="marker_img_select(474)" class="selected_marker" id="img_474" src="<?php echo MAP_BK_MARKER_ICON."/umbrella-2.png";?>" />
		</span>
	</div>
	<div id="ux_img_brands_chains" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("B Emblem",map_bank) ;?>">
			<img onclick="marker_img_select(475)" class="selected_marker" id="img_475" src="<?php echo MAP_BK_MARKER_ICON."/b_emblem.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("The Capture Lab Mapmarker",map_bank) ;?>">
			<img onclick="marker_img_select(476)" class="selected_marker" id="img_476" src="<?php echo MAP_BK_MARKER_ICON."/thecapturelab_mapmarker-2.png";?>" />
		</span>
	</div>
	<div id="ux_img_computer_electronics" class="marker_icons" style="display:none;">
		<span class="hovertip" data-original-title ="<?php _e("Computers",map_bank) ;?>">
			<img onclick="marker_img_select(477)" class="selected_marker" id="img_477" src="<?php echo MAP_BK_MARKER_ICON."/computers.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Movierental",map_bank) ;?>">
			<img onclick="marker_img_select(478)" class="selected_marker" id="img_478" src="<?php echo MAP_BK_MARKER_ICON."/movierental.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Music",map_bank) ;?>">
			<img onclick="marker_img_select(479)" class="selected_marker" id="img_479" src="<?php echo MAP_BK_MARKER_ICON."/music.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Phones",map_bank) ;?>">
			<img onclick="marker_img_select(480)" class="selected_marker" id="img_480" src="<?php echo MAP_BK_MARKER_ICON."/phones.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Photography",map_bank) ;?>">
			<img onclick="marker_img_select(481)" class="selected_marker" id="img_481" src="<?php echo MAP_BK_MARKER_ICON."/photography.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Video Games",map_bank) ;?>">
			<img onclick="marker_img_select(482)" class="selected_marker" id="img_482" src="<?php echo MAP_BK_MARKER_ICON."/videogames.png";?>" />
		</span>
	</div>
	<div id="ux_img_food_drinks" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Bread",map_bank) ;?>">
			<img onclick="marker_img_select(483)" class="selected_marker" id="img_483" src="<?php echo MAP_BK_MARKER_ICON."/bread.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Butcher",map_bank) ;?>">	
			<img onclick="marker_img_select(484)" class="selected_marker" id="img_484" src="<?php echo MAP_BK_MARKER_ICON."/butcher-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Candy",map_bank) ;?>">
			<img onclick="marker_img_select(485)" class="selected_marker" id="img_485" src="<?php echo MAP_BK_MARKER_ICON."/candy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Chesse",map_bank) ;?>">
			<img onclick="marker_img_select(486)" class="selected_marker" id="img_486" src="<?php echo MAP_BK_MARKER_ICON."/cheese.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Eggs",map_bank) ;?>">
			<img onclick="marker_img_select(487)" class="selected_marker" id="img_487" src="<?php echo MAP_BK_MARKER_ICON."/eggs.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Farm Stand",map_bank) ;?>">
			<img onclick="marker_img_select(488)" class="selected_marker" id="img_488" src="<?php echo MAP_BK_MARKER_ICON."/farmstand.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fruits",map_bank) ;?>">
			<img onclick="marker_img_select(489)" class="selected_marker" id="img_489" src="<?php echo MAP_BK_MARKER_ICON."/fruits.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Grocery",map_bank) ;?>">
			<img onclick="marker_img_select(490)" class="selected_marker" id="img_490" src="<?php echo MAP_BK_MARKER_ICON."/grocery.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Gumball Machine",map_bank) ;?>">
			<img onclick="marker_img_select(491)" class="selected_marker" id="img_491" src="<?php echo MAP_BK_MARKER_ICON."/gumball_machine.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Japanese Sweet",map_bank) ;?>">	
			<img onclick="marker_img_select(492)" class="selected_marker" id="img_492" src="<?php echo MAP_BK_MARKER_ICON."/japanese-sweet-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Liquor",map_bank) ;?>">
			<img onclick="marker_img_select(493)" class="selected_marker" id="img_493" src="<?php echo MAP_BK_MARKER_ICON."/liquor.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Muffin Bagle",map_bank) ;?>">
			<img onclick="marker_img_select(494)" class="selected_marker" id="img_494" src="<?php echo MAP_BK_MARKER_ICON."/muffin_bagle.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Patisserie",map_bank) ;?>">
			<img onclick="marker_img_select(495)" class="selected_marker" id="img_495" src="<?php echo MAP_BK_MARKER_ICON."/patisserie.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sandwich",map_bank) ;?>">
			<img onclick="marker_img_select(496)" class="selected_marker" id="img_496" src="<?php echo MAP_BK_MARKER_ICON."/sandwich-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tajine",map_bank) ;?>">
			<img onclick="marker_img_select(497)" class="selected_marker" id="img_497" src="<?php echo MAP_BK_MARKER_ICON."/tajine-2.png";?>" />
		</span>
	</div>
	<div id="ux_img_general_merchandise" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Convenience Store",map_bank) ;?>">
			<img onclick="marker_img_select(498)" class="selected_marker" id="img_498" src="<?php echo MAP_BK_MARKER_ICON."/conveniencestore.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Department Store",map_bank) ;?>">
			<img onclick="marker_img_select(499)" class="selected_marker" id="img_499" src="<?php echo MAP_BK_MARKER_ICON."/departmentstore.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Glasses",map_bank) ;?>">
			<img onclick="marker_img_select(500)" class="selected_marker" id="img_500" src="<?php echo MAP_BK_MARKER_ICON."/glasses.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Kayak",map_bank) ;?>">
			<img onclick="marker_img_select(501)" class="selected_marker" id="img_501" src="<?php echo MAP_BK_MARKER_ICON."/kayak1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mall",map_bank) ;?>">
			<img onclick="marker_img_select(502)" class="selected_marker" id="img_502" src="<?php echo MAP_BK_MARKER_ICON."/mall.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Market",map_bank) ;?>">
			<img onclick="marker_img_select(503)" class="selected_marker" id="img_503" src="<?php echo MAP_BK_MARKER_ICON."/market.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ski Shoe",map_bank) ;?>">
			<img onclick="marker_img_select(504)" class="selected_marker" id="img_504" src="<?php echo MAP_BK_MARKER_ICON."/ski_shoe1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Skis",map_bank) ;?>">
			<img onclick="marker_img_select(505)" class="selected_marker" id="img_505" src="<?php echo MAP_BK_MARKER_ICON."/skis.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Super Market",map_bank) ;?>">
			<img onclick="marker_img_select(506)" class="selected_marker" id="img_506" src="<?php echo MAP_BK_MARKER_ICON."/supermarket.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Travle Agency",map_bank) ;?>">
			<img onclick="marker_img_select(507)" class="selected_marker" id="img_507" src="<?php echo MAP_BK_MARKER_ICON."/travel_agency.png";?>" />
		</span>
	</div>
	<div id="ux_img_religion" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Bouddha",map_bank) ;?>">
			<img onclick="marker_img_select(508)" class="selected_marker" id="img_508" src="<?php echo MAP_BK_MARKER_ICON."/bouddha.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cathedral",map_bank) ;?>">
			<img onclick="marker_img_select(509)" class="selected_marker" id="img_509" src="<?php echo MAP_BK_MARKER_ICON."/cathedral.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Catholic Grave",map_bank) ;?>">
			<img onclick="marker_img_select(510)" class="selected_marker" id="img_510" src="<?php echo MAP_BK_MARKER_ICON."/catholicgrave.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cemetary",map_bank) ;?>">
			<img onclick="marker_img_select(511)" class="selected_marker" id="img_511" src="<?php echo MAP_BK_MARKER_ICON."/cemetary.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Chapel",map_bank) ;?>">
			<img onclick="marker_img_select(512)" class="selected_marker" id="img_512" src="<?php echo MAP_BK_MARKER_ICON."/chapel-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Church",map_bank) ;?>">
			<img onclick="marker_img_select(513)" class="selected_marker" id="img_513" src="<?php echo MAP_BK_MARKER_ICON."/church-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Convent",map_bank) ;?>">
			<img onclick="marker_img_select(514)" class="selected_marker" id="img_514" src="<?php echo MAP_BK_MARKER_ICON."/convent-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cross",map_bank) ;?>">
			<img onclick="marker_img_select(515)" class="selected_marker" id="img_515" src="<?php echo MAP_BK_MARKER_ICON."/cross-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Head Stone",map_bank) ;?>">
			<img onclick="marker_img_select(516)" class="selected_marker" id="img_516" src="<?php echo MAP_BK_MARKER_ICON."/headstone-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Japanese Temple",map_bank) ;?>">
			<img onclick="marker_img_select(517)" class="selected_marker" id="img_517" src="<?php echo MAP_BK_MARKER_ICON."/japanese-temple.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jewish Grave",map_bank) ;?>">
			<img onclick="marker_img_select(518)" class="selected_marker" id="img_518" src="<?php echo MAP_BK_MARKER_ICON."/jewishgrave.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mapicon",map_bank) ;?>">
			<img onclick="marker_img_select(519)" class="selected_marker" id="img_519" src="<?php echo MAP_BK_MARKER_ICON."/mapicon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Mosquee",map_bank) ;?>">
			<img onclick="marker_img_select(520)" class="selected_marker" id="img_520" src="<?php echo MAP_BK_MARKER_ICON."/mosquee.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Prayer",map_bank) ;?>">
			<img onclick="marker_img_select(521)" class="selected_marker" id="img_521" src="<?php echo MAP_BK_MARKER_ICON."/prayer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Shinto Shrine",map_bank) ;?>">
			<img onclick="marker_img_select(522)" class="selected_marker" id="img_522" src="<?php echo MAP_BK_MARKER_ICON."/shintoshrine.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sikh",map_bank) ;?>">
			<img onclick="marker_img_select(523)" class="selected_marker" id="img_523" src="<?php echo MAP_BK_MARKER_ICON."/sikh.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jerusalem Cross ",map_bank) ;?>">
			<img onclick="marker_img_select(524)" class="selected_marker" id="img_524" src="<?php echo MAP_BK_MARKER_ICON."/st-margarets-cross.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Synagogue",map_bank) ;?>">
			<img onclick="marker_img_select(525)" class="selected_marker" id="img_525" src="<?php echo MAP_BK_MARKER_ICON."/synagogue-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Temple Hindu",map_bank) ;?>">
			<img onclick="marker_img_select(526)" class="selected_marker" id="img_526" src="<?php echo MAP_BK_MARKER_ICON."/templehindu.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Theravada Buddhist Temple ",map_bank) ;?>">
			<img onclick="marker_img_select(527)" class="selected_marker" id="img_527" src="<?php echo MAP_BK_MARKER_ICON."/theravadatemple.png";?>" />
		</span>
	</div>
	<div id="ux_img_tourism" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Amphi Theater",map_bank) ;?>">
			<img onclick="marker_img_select(528)" class="selected_marker" id="img_528" src="<?php echo MAP_BK_MARKER_ICON."/amphitheater-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Arch",map_bank) ;?>">
			<img onclick="marker_img_select(529)" class="selected_marker" id="img_529" src="<?php echo MAP_BK_MARKER_ICON."/arch.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Big City",map_bank) ;?>">
			<img onclick="marker_img_select(530)" class="selected_marker" id="img_530" src="<?php echo MAP_BK_MARKER_ICON."/bigcity.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bridge Modern",map_bank) ;?>">
			<img onclick="marker_img_select(531)" class="selected_marker" id="img_531" src="<?php echo MAP_BK_MARKER_ICON."/bridge_modern.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bridge Old",map_bank) ;?>">
			<img onclick="marker_img_select(532)" class="selected_marker" id="img_532" src="<?php echo MAP_BK_MARKER_ICON."/bridge_old.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Castle",map_bank) ;?>">
			<img onclick="marker_img_select(533)" class="selected_marker" id="img_533" src="<?php echo MAP_BK_MARKER_ICON."/castle-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("City Square",map_bank) ;?>">
			<img onclick="marker_img_select(534)" class="selected_marker" id="img_534" src="<?php echo MAP_BK_MARKER_ICON."/citysquare.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("City Walls",map_bank) ;?>">
			<img onclick="marker_img_select(535)" class="selected_marker" id="img_535" src="<?php echo MAP_BK_MARKER_ICON."/citywalls.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Clock",map_bank) ;?>">
			<img onclick="marker_img_select(536)" class="selected_marker" id="img_536" src="<?php echo MAP_BK_MARKER_ICON."/clock.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Country",map_bank) ;?>">
			<img onclick="marker_img_select(537)" class="selected_marker" id="img_537" src="<?php echo MAP_BK_MARKER_ICON."/country.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Crematoruim",map_bank) ;?>">
			<img onclick="marker_img_select(538)" class="selected_marker" id="img_538" src="<?php echo MAP_BK_MARKER_ICON."/crematorium.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cromlech",map_bank) ;?>">
			<img onclick="marker_img_select(539)" class="selected_marker" id="img_539" src="<?php echo MAP_BK_MARKER_ICON."/cromlech.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Foot Print",map_bank) ;?>">
			<img onclick="marker_img_select(540)" class="selected_marker" id="img_540" src="<?php echo MAP_BK_MARKER_ICON."/footprint.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Fountain",map_bank) ;?>">
			<img onclick="marker_img_select(541)" class="selected_marker" id="img_541" src="<?php echo MAP_BK_MARKER_ICON."/fountain-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Historical Quarter",map_bank) ;?>">
			<img onclick="marker_img_select(542)" class="selected_marker" id="img_542" src="<?php echo MAP_BK_MARKER_ICON."/historicalquarter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Icon Sevilla",map_bank) ;?>">
			<img onclick="marker_img_select(543)" class="selected_marker" id="img_543" src="<?php echo MAP_BK_MARKER_ICON."/icon-sevilla.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Japanese Lantern",map_bank) ;?>">
			<img onclick="marker_img_select(544)" class="selected_marker" id="img_544" src="<?php echo MAP_BK_MARKER_ICON."/japanese-lantern.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jewish Quarter",map_bank) ;?>">
			<img onclick="marker_img_select(545)" class="selected_marker" id="img_545" src="<?php echo MAP_BK_MARKER_ICON."/jewishquarter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Light House",map_bank) ;?>">
			<img onclick="marker_img_select(546)" class="selected_marker" id="img_546" src="<?php echo MAP_BK_MARKER_ICON."/lighthouse-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Map",map_bank) ;?>">
			<img onclick="marker_img_select(547)" class="selected_marker" id="img_547" src="<?php echo MAP_BK_MARKER_ICON."/map.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Megalith",map_bank) ;?>">
			<img onclick="marker_img_select(548)" class="selected_marker" id="img_548" src="<?php echo MAP_BK_MARKER_ICON."/megalith.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Memorial",map_bank) ;?>">
			<img onclick="marker_img_select(549)" class="selected_marker" id="img_549" src="<?php echo MAP_BK_MARKER_ICON."/memorial.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Modern Monument",map_bank) ;?>">
			<img onclick="marker_img_select(550)" class="selected_marker" id="img_550" src="<?php echo MAP_BK_MARKER_ICON."/modernmonument.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Modern Tower",map_bank) ;?>">
			<img onclick="marker_img_select(551)" class="selected_marker" id="img_551" src="<?php echo MAP_BK_MARKER_ICON."/moderntower.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Monument",map_bank) ;?>">
			<img onclick="marker_img_select(552)" class="selected_marker" id="img_552" src="<?php echo MAP_BK_MARKER_ICON."/monument.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Monument Historique",map_bank) ;?>">
			<img onclick="marker_img_select(553)" class="selected_marker" id="img_553" src="<?php echo MAP_BK_MARKER_ICON."/monument-historique.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("New England Barn",map_bank) ;?>">
			<img onclick="marker_img_select(554)" class="selected_marker" id="img_554" src="<?php echo MAP_BK_MARKER_ICON."/ne_barn-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Not Visited",map_bank) ;?>">
			<img onclick="marker_img_select(555)" class="selected_marker" id="img_555" src="<?php echo MAP_BK_MARKER_ICON."/notvisited.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Olympic Site",map_bank) ;?>">
			<img onclick="marker_img_select(556)" class="selected_marker" id="img_556" src="<?php echo MAP_BK_MARKER_ICON."/olympicsite.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pagoda",map_bank) ;?>">
			<img onclick="marker_img_select(557)" class="selected_marker" id="img_557" src="<?php echo MAP_BK_MARKER_ICON."/pagoda-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Palace",map_bank) ;?>">
			<img onclick="marker_img_select(558)" class="selected_marker" id="img_558" src="<?php echo MAP_BK_MARKER_ICON."/palace-2 (2).png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Palace",map_bank) ;?>">
			<img onclick="marker_img_select(559)" class="selected_marker" id="img_559" src="<?php echo MAP_BK_MARKER_ICON."/palace-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Panoramic View",map_bank) ;?>">
			<img onclick="marker_img_select(560)" class="selected_marker" id="img_560" src="<?php echo MAP_BK_MARKER_ICON."/panoramicview.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Petroglyphs",map_bank) ;?>">
			<img onclick="marker_img_select(561)" class="selected_marker" id="img_561" src="<?php echo MAP_BK_MARKER_ICON."/petroglyphs-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pyramid",map_bank) ;?>">
			<img onclick="marker_img_select(562)" class="selected_marker" id="img_562" src="<?php echo MAP_BK_MARKER_ICON."/pyramid.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Rock House",map_bank) ;?>">
			<img onclick="marker_img_select(563)" class="selected_marker" id="img_563" src="<?php echo MAP_BK_MARKER_ICON."/rockhouse.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ruins",map_bank) ;?>">
			<img onclick="marker_img_select(564)" class="selected_marker" id="img_564" src="<?php echo MAP_BK_MARKER_ICON."/ruins-2 (2).png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ruins",map_bank) ;?>">
			<img onclick="marker_img_select(565)" class="selected_marker" id="img_565" src="<?php echo MAP_BK_MARKER_ICON."/ruins-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sight",map_bank) ;?>">
			<img onclick="marker_img_select(566)" class="selected_marker" id="img_566" src="<?php echo MAP_BK_MARKER_ICON."/sight-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Small City",map_bank) ;?>">
			<img onclick="marker_img_select(567)" class="selected_marker" id="img_567" src="<?php echo MAP_BK_MARKER_ICON."/smallcity.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Star",map_bank) ;?>">
			<img onclick="marker_img_select(568)" class="selected_marker" id="img_568" src="<?php echo MAP_BK_MARKER_ICON."/star-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Statue",map_bank) ;?>">
			<img onclick="marker_img_select(569)" class="selected_marker" id="img_569" src="<?php echo MAP_BK_MARKER_ICON."/statue-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Temple",map_bank) ;?>">
			<img onclick="marker_img_select(570)" class="selected_marker" id="img_570" src="<?php echo MAP_BK_MARKER_ICON."/temple-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Temple Hindu",map_bank) ;?>">
			<img onclick="marker_img_select(571)" class="selected_marker" id="img_571" src="<?php echo MAP_BK_MARKER_ICON."/templehindu.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tower",map_bank) ;?>">
			<img onclick="marker_img_select(572)" class="selected_marker" id="img_572" src="<?php echo MAP_BK_MARKER_ICON."/tower.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Theravada Pagoda",map_bank) ;?>">
			<img onclick="marker_img_select(573)" class="selected_marker" id="img_573" src="<?php echo MAP_BK_MARKER_ICON."/theravadapagoda.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("World",map_bank) ;?>">
			<img onclick="marker_img_select(574)" class="selected_marker" id="img_574" src="<?php echo MAP_BK_MARKER_ICON."/world.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("World Heritagesite",map_bank) ;?>">
			<img onclick="marker_img_select(575)" class="selected_marker" id="img_575" src="<?php echo MAP_BK_MARKER_ICON."/worldheritagesite.png";?>" />
		</span>
	</div>
	<div id="ux_img_arial_transportation" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Aircraft Small",map_bank) ;?>">
			<img onclick="marker_img_select(576)" class="selected_marker" id="img_576" src="<?php echo MAP_BK_MARKER_ICON."/aircraftsmall.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Airport",map_bank) ;?>">
			<img onclick="marker_img_select(577)" class="selected_marker" id="img_577" src="<?php echo MAP_BK_MARKER_ICON."/airport.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Airport Apron",map_bank) ;?>">
			<img onclick="marker_img_select(578)" class="selected_marker" id="img_578" src="<?php echo MAP_BK_MARKER_ICON."/airport_apron.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Airport Runway",map_bank) ;?>">
			<img onclick="marker_img_select(579)" class="selected_marker" id="img_579" src="<?php echo MAP_BK_MARKER_ICON."/airport_runway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Airport Terminal",map_bank) ;?>">
			<img onclick="marker_img_select(580)" class="selected_marker" id="img_580" src="<?php echo MAP_BK_MARKER_ICON."/airport_terminal.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Helicopter",map_bank) ;?>">
			<img onclick="marker_img_select(581)" class="selected_marker" id="img_581" src="<?php echo MAP_BK_MARKER_ICON."/helicopter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Helipad",map_bank) ;?>">
			<img onclick="marker_img_select(582)" class="selected_marker" id="img_582" src="<?php echo MAP_BK_MARKER_ICON."/helipad.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Hot Air Baloon",map_bank) ;?>">
			<img onclick="marker_img_select(583)" class="selected_marker" id="img_583" src="<?php echo MAP_BK_MARKER_ICON."/hotairbaloon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("King Air",map_bank) ;?>">
			<img onclick="marker_img_select(584)" class="selected_marker" id="img_584" src="<?php echo MAP_BK_MARKER_ICON."/kingair.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Taxi Way",map_bank) ;?>">
			<img onclick="marker_img_select(585)" class="selected_marker" id="img_585" src="<?php echo MAP_BK_MARKER_ICON."/taxiway.png";?>" />
		</span>
	</div>
	<div id="ux_img_directions" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Direction  Down",map_bank) ;?>">
			<img onclick="marker_img_select(586)" class="selected_marker" id="img_586" src="<?php echo MAP_BK_MARKER_ICON."/direction_down.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Direction U Turn",map_bank) ;?>">
			<img onclick="marker_img_select(587)" class="selected_marker" id="img_587" src="<?php echo MAP_BK_MARKER_ICON."/direction_uturn.png";?>" />
		</span>
	</div>
	<div id="ux_img_other_transportation" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Boat",map_bank) ;?>">
			<img onclick="marker_img_select(588)" class="selected_marker" id="img_588" src="<?php echo MAP_BK_MARKER_ICON."/boat.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cable Car",map_bank) ;?>">
			<img onclick="marker_img_select(589)" class="selected_marker" id="img_589" src="<?php echo MAP_BK_MARKER_ICON."/cablecar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Car Share",map_bank) ;?>">
			<img onclick="marker_img_select(590)" class="selected_marker" id="img_590" src="<?php echo MAP_BK_MARKER_ICON."/car_share.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Crossing Gaurd",map_bank) ;?>">
			<img onclick="marker_img_select(591)" class="selected_marker" id="img_591" src="<?php echo MAP_BK_MARKER_ICON."/crossingguard.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ferry",map_bank) ;?>">
			<img onclick="marker_img_select(592)" class="selected_marker" id="img_592" src="<?php echo MAP_BK_MARKER_ICON."/ferry.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Foot Print",map_bank) ;?>">
			<img onclick="marker_img_select(593)" class="selected_marker" id="img_593" src="<?php echo MAP_BK_MARKER_ICON."/footprint.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Funi Colar",map_bank) ;?>">
			<img onclick="marker_img_select(594)" class="selected_marker" id="img_594" src="<?php echo MAP_BK_MARKER_ICON."/funicolar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Harbor",map_bank) ;?>">
			<img onclick="marker_img_select(595)" class="selected_marker" id="img_595" src="<?php echo MAP_BK_MARKER_ICON."/harbor.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Level Crossing",map_bank) ;?>">
			<img onclick="marker_img_select(596)" class="selected_marker" id="img_596" src="<?php echo MAP_BK_MARKER_ICON."/levelcrossing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Oil",map_bank) ;?>">
			<img onclick="marker_img_select(597)" class="selected_marker" id="img_597" src="<?php echo MAP_BK_MARKER_ICON."/oil-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Parking Bicycle",map_bank) ;?>">
			<img onclick="marker_img_select(598)" class="selected_marker" id="img_598" src="<?php echo MAP_BK_MARKER_ICON."/parking_bicycle-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pedestrian Crossing",map_bank) ;?>">
			<img onclick="marker_img_select(599)" class="selected_marker" id="img_599" src="<?php echo MAP_BK_MARKER_ICON."/pedestriancrossing.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Slip Way",map_bank) ;?>">
			<img onclick="marker_img_select(600)" class="selected_marker" id="img_600" src="<?php echo MAP_BK_MARKER_ICON."/slipway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Solar Cruise",map_bank) ;?>">
			<img onclick="marker_img_select(601)" class="selected_marker" id="img_601" src="<?php echo MAP_BK_MARKER_ICON."/solar-cruise.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Steam Train",map_bank) ;?>">
			<img onclick="marker_img_select(602)" class="selected_marker" id="img_602" src="<?php echo MAP_BK_MARKER_ICON."/steamtrain.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Taxi Boat",map_bank) ;?>">
			<img onclick="marker_img_select(603)" class="selected_marker" id="img_603" src="<?php echo MAP_BK_MARKER_ICON."/taxiboat.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tidal Daimond",map_bank) ;?>">
			<img onclick="marker_img_select(604)" class="selected_marker" id="img_604" src="<?php echo MAP_BK_MARKER_ICON."/tidaldiamond.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Train",map_bank) ;?>">
			<img onclick="marker_img_select(605)" class="selected_marker" id="img_605" src="<?php echo MAP_BK_MARKER_ICON."/train.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tram Way",map_bank) ;?>">
			<img onclick="marker_img_select(606)" class="selected_marker" id="img_606" src="<?php echo MAP_BK_MARKER_ICON."/tramway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Under Ground",map_bank) ;?>">
			<img onclick="marker_img_select(607)" class="selected_marker" id="img_607" src="<?php echo MAP_BK_MARKER_ICON."/underground.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Water Craft",map_bank) ;?>">
			<img onclick="marker_img_select(608)" class="selected_marker" id="img_608" src="<?php echo MAP_BK_MARKER_ICON."/watercraft.png";?>" />
		</span>
	</div>
	<div id="ux_img_road_signs" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Acces Denied",map_bank) ;?>">
			<img onclick="marker_img_select(609)" class="selected_marker" id="img_609" src="<?php echo MAP_BK_MARKER_ICON."/accesdenied.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Caution",map_bank) ;?>">
			<img onclick="marker_img_select(610)" class="selected_marker" id="img_610" src="<?php echo MAP_BK_MARKER_ICON."/caution.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Close Road",map_bank) ;?>">
			<img onclick="marker_img_select(611)" class="selected_marker" id="img_611" src="<?php echo MAP_BK_MARKER_ICON."/closedroad.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Construction",map_bank) ;?>">
			<img onclick="marker_img_select(612)" class="selected_marker" id="img_612" src="<?php echo MAP_BK_MARKER_ICON."/construction.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Crossing Guard",map_bank) ;?>">
			<img onclick="marker_img_select(613)" class="selected_marker" id="img_613" src="<?php echo MAP_BK_MARKER_ICON."/crossingguard.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Curve Left",map_bank) ;?>">
			<img onclick="marker_img_select(614)" class="selected_marker" id="img_614" src="<?php echo MAP_BK_MARKER_ICON."/curveleft.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Descent",map_bank) ;?>">
			<img onclick="marker_img_select(615)" class="selected_marker" id="img_615" src="<?php echo MAP_BK_MARKER_ICON."/descent.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Falling Rocks",map_bank) ;?>">
			<img onclick="marker_img_select(616)" class="selected_marker" id="img_616" src="<?php echo MAP_BK_MARKER_ICON."/fallingrocks.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Highway",map_bank) ;?>">
			<img onclick="marker_img_select(617)" class="selected_marker" id="img_617" src="<?php echo MAP_BK_MARKER_ICON."/highway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Icy Road",map_bank) ;?>">
			<img onclick="marker_img_select(618)" class="selected_marker" id="img_618" src="<?php echo MAP_BK_MARKER_ICON."/icy_road.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Main Road",map_bank) ;?>">
			<img onclick="marker_img_select(619)" class="selected_marker" id="img_619" src="<?php echo MAP_BK_MARKER_ICON."/mainroad.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Max Height",map_bank) ;?>">
			<img onclick="marker_img_select(620)" class="selected_marker" id="img_620" src="<?php echo MAP_BK_MARKER_ICON."/maxheight.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Max Weight",map_bank) ;?>">
			<img onclick="marker_img_select(621)" class="selected_marker" id="img_621" src="<?php echo MAP_BK_MARKER_ICON."/maxweight.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Max Width",map_bank) ;?>">
			<img onclick="marker_img_select(622)" class="selected_marker" id="img_622" src="<?php echo MAP_BK_MARKER_ICON."/maxwidth.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Speed",map_bank) ;?>">
			<img onclick="marker_img_select(623)" class="selected_marker" id="img_623" src="<?php echo MAP_BK_MARKER_ICON."/speed_50.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Speed Hump",map_bank) ;?>">
			<img onclick="marker_img_select(624)" class="selected_marker" id="img_624" src="<?php echo MAP_BK_MARKER_ICON."/speedhump.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Stop",map_bank) ;?>">
			<img onclick="marker_img_select(625)" class="selected_marker" id="img_625" src="<?php echo MAP_BK_MARKER_ICON."/stop.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tires",map_bank) ;?>">
			<img onclick="marker_img_select(626)" class="selected_marker" id="img_626" src="<?php echo MAP_BK_MARKER_ICON."/tires.png";?>" />
		</span>
	</div>
	<div id="ux_img_road_transportation" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Ambulance",map_bank) ;?>">
			<img onclick="marker_img_select(627)" class="selected_marker" id="img_627" src="<?php echo MAP_BK_MARKER_ICON."/ambulance.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bull Dozer",map_bank) ;?>">
			<img onclick="marker_img_select(628)" class="selected_marker" id="img_628" src="<?php echo MAP_BK_MARKER_ICON."/bulldozer.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bus",map_bank) ;?>">
			<img onclick="marker_img_select(629)" class="selected_marker" id="img_629" src="<?php echo MAP_BK_MARKER_ICON."/bus.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Bus Stop",map_bank) ;?>">
			<img onclick="marker_img_select(630)" class="selected_marker" id="img_630" src="<?php echo MAP_BK_MARKER_ICON."/busstop.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Car",map_bank) ;?>">
			<img onclick="marker_img_select(631)" class="selected_marker" id="img_631" src="<?php echo MAP_BK_MARKER_ICON."/car.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Car Accident",map_bank) ;?>">
			<img onclick="marker_img_select(632)" class="selected_marker" id="img_632" src="<?php echo MAP_BK_MARKER_ICON."/caraccident.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Carrental",map_bank) ;?>">
			<img onclick="marker_img_select(633)" class="selected_marker" id="img_633" src="<?php echo MAP_BK_MARKER_ICON."/carrental.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Car Wash",map_bank) ;?>">
			<img onclick="marker_img_select(634)" class="selected_marker" id="img_634" src="<?php echo MAP_BK_MARKER_ICON."/carwash.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Canvertible",map_bank) ;?>">
			<img onclick="marker_img_select(635)" class="selected_marker" id="img_635" src="<?php echo MAP_BK_MARKER_ICON."/convertible.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Cycling",map_bank) ;?>">
			<img onclick="marker_img_select(636)" class="selected_marker" id="img_636" src="<?php echo MAP_BK_MARKER_ICON."/cycling.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Ducati Daivel",map_bank) ;?>">
			<img onclick="marker_img_select(637)" class="selected_marker" id="img_637" src="<?php echo MAP_BK_MARKER_ICON."/ducati-diavel.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Filling Station",map_bank) ;?>">
			<img onclick="marker_img_select(638)" class="selected_marker" id="img_638" src="<?php echo MAP_BK_MARKER_ICON."/fillingstation.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Four by Four",map_bank) ;?>">
			<img onclick="marker_img_select(639)" class="selected_marker" id="img_639" src="<?php echo MAP_BK_MARKER_ICON."/fourbyfour.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Highway",map_bank) ;?>">
			<img onclick="marker_img_select(640)" class="selected_marker" id="img_640" src="<?php echo MAP_BK_MARKER_ICON."/highway.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Jeep",map_bank) ;?>">
			<img onclick="marker_img_select(641)" class="selected_marker" id="img_641" src="<?php echo MAP_BK_MARKER_ICON."/jeep.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Junction",map_bank) ;?>">
			<img onclick="marker_img_select(642)" class="selected_marker" id="img_642" src="<?php echo MAP_BK_MARKER_ICON."/junction.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Motar Cycle",map_bank) ;?>">
			<img onclick="marker_img_select(643)" class="selected_marker" id="img_643" src="<?php echo MAP_BK_MARKER_ICON."/motorcycle.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Park and Ride",map_bank) ;?>">
			<img onclick="marker_img_select(644)" class="selected_marker" id="img_644" src="<?php echo MAP_BK_MARKER_ICON."/parkandride.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Parking Garage",map_bank) ;?>">
			<img onclick="marker_img_select(645)" class="selected_marker" id="img_645" src="<?php echo MAP_BK_MARKER_ICON."/parkinggarage.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Parking Meter Export",map_bank) ;?>">
			<img onclick="marker_img_select(646)" class="selected_marker" id="img_646" src="<?php echo MAP_BK_MARKER_ICON."/parking-meter-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pick Up",map_bank) ;?>">
			<img onclick="marker_img_select(647)" class="selected_marker" id="img_647" src="<?php echo MAP_BK_MARKER_ICON."/pickup.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Pick Up Camper",map_bank) ;?>">
			<img onclick="marker_img_select(648)" class="selected_marker" id="img_648" src="<?php echo MAP_BK_MARKER_ICON."/pickup_camper.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Plow Truck",map_bank) ;?>">
			<img onclick="marker_img_select(649)" class="selected_marker" id="img_649" src="<?php echo MAP_BK_MARKER_ICON."/plowtruck.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Repair",map_bank) ;?>">
			<img onclick="marker_img_select(650)" class="selected_marker" id="img_650" src="<?php echo MAP_BK_MARKER_ICON."/repair.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Road",map_bank) ;?>">
			<img onclick="marker_img_select(651)" class="selected_marker" id="img_651" src="<?php echo MAP_BK_MARKER_ICON."/road.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Road Type Gravel",map_bank) ;?>">
			<img onclick="marker_img_select(652)" class="selected_marker" id="img_652" src="<?php echo MAP_BK_MARKER_ICON."/roadtype_gravel.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sports Car",map_bank) ;?>">
			<img onclick="marker_img_select(653)" class="selected_marker" id="img_653" src="<?php echo MAP_BK_MARKER_ICON."/sportscar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sport Utility Vehicle",map_bank) ;?>">
			<img onclick="marker_img_select(654)" class="selected_marker" id="img_654" src="<?php echo MAP_BK_MARKER_ICON."/sportutilityvehicle.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Taxi",map_bank) ;?>">
			<img onclick="marker_img_select(655)" class="selected_marker" id="img_655" src="<?php echo MAP_BK_MARKER_ICON."/taxi.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Toll Station",map_bank) ;?>">
			<img onclick="marker_img_select(656)" class="selected_marker" id="img_656" src="<?php echo MAP_BK_MARKER_ICON."/tollstation.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Traffic Camera",map_bank) ;?>">
			<img onclick="marker_img_select(657)" class="selected_marker" id="img_657" src="<?php echo MAP_BK_MARKER_ICON."/trafficcamera.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Traffic Light",map_bank) ;?>">
			<img onclick="marker_img_select(658)" class="selected_marker" id="img_658" src="<?php echo MAP_BK_MARKER_ICON."/trafficlight.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Truck",map_bank) ;?>">
			<img onclick="marker_img_select(659)" class="selected_marker" id="img_659" src="<?php echo MAP_BK_MARKER_ICON."/truck3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tunnel",map_bank) ;?>">
			<img onclick="marker_img_select(660)" class="selected_marker" id="img_660" src="<?php echo MAP_BK_MARKER_ICON."/tunnel.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Van",map_bank) ;?>">
			<img onclick="marker_img_select(661)" class="selected_marker" id="img_661" src="<?php echo MAP_BK_MARKER_ICON."/van.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Vespa",map_bank) ;?>">
			<img onclick="marker_img_select(662)" class="selected_marker" id="img_662" src="<?php echo MAP_BK_MARKER_ICON."/vespa.png";?>" />
		</span>
	</div>
	<div id="ux_img_home" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Apartment",map_bank) ;?>">
			<img onclick="marker_img_select(663)" class="selected_marker" id="img_663" src="<?php echo MAP_BK_MARKER_ICON."/apartment_1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Apartment",map_bank) ;?>">
			<img onclick="marker_img_select(664)" class="selected_marker" id="img_664" src="<?php echo MAP_BK_MARKER_ICON."/apartment_2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Big House",map_bank) ;?>">
			<img onclick="marker_img_select(665)" class="selected_marker" id="img_665" src="<?php echo MAP_BK_MARKER_ICON."/bighouse_1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Big House",map_bank) ;?>">
			<img onclick="marker_img_select(666)" class="selected_marker" id="img_666" src="<?php echo MAP_BK_MARKER_ICON."/bighouse_2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Home",map_bank) ;?>">
			<img onclick="marker_img_select(667)" class="selected_marker" id="img_667" src="<?php echo MAP_BK_MARKER_ICON."/home.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Home Center",map_bank) ;?>">
			<img onclick="marker_img_select(668)" class="selected_marker" id="img_668" src="<?php echo MAP_BK_MARKER_ICON."/homecenter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Town House",map_bank) ;?>">
			<img onclick="marker_img_select(669)" class="selected_marker" id="img_669" src="<?php echo MAP_BK_MARKER_ICON."/townhouse.png";?>" />
		</span>
	</div>
	<div id="ux_img_days" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Monday",map_bank) ;?>">
			<img onclick="marker_img_select(670)" class="selected_marker" id="img_670" src="<?php echo MAP_BK_MARKER_ICON."/monday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tuesday",map_bank) ;?>">
			<img onclick="marker_img_select(671)" class="selected_marker" id="img_671" src="<?php echo MAP_BK_MARKER_ICON."/tuesday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wednesday",map_bank) ;?>">
			<img onclick="marker_img_select(672)" class="selected_marker" id="img_672" src="<?php echo MAP_BK_MARKER_ICON."/wednesday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Thursday",map_bank) ;?>">
			<img onclick="marker_img_select(673)" class="selected_marker" id="img_673" src="<?php echo MAP_BK_MARKER_ICON."/thursday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Friday",map_bank) ;?>">
			<img onclick="marker_img_select(674)" class="selected_marker" id="img_674" src="<?php echo MAP_BK_MARKER_ICON."/friday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Saturday",map_bank) ;?>">
			<img onclick="marker_img_select(675)" class="selected_marker" id="img_675" src="<?php echo MAP_BK_MARKER_ICON."/saturday.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Sunday",map_bank) ;?>">
			<img onclick="marker_img_select(676)" class="selected_marker" id="img_676" src="<?php echo MAP_BK_MARKER_ICON."/sunday.png";?>" />
		</span>
	</div>
	<div id="ux_img_letters" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("A",map_bank) ;?>">
			<img onclick="marker_img_select(677)" class="selected_marker" id="img_677" src="<?php echo MAP_BK_MARKER_ICON."/letter_a.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("B",map_bank) ;?>">
			<img onclick="marker_img_select(678)" class="selected_marker" id="img_678" src="<?php echo MAP_BK_MARKER_ICON."/letter_b.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("C",map_bank) ;?>">
			<img onclick="marker_img_select(679)" class="selected_marker" id="img_679" src="<?php echo MAP_BK_MARKER_ICON."/letter_c.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("D",map_bank) ;?>">
			<img onclick="marker_img_select(680)" class="selected_marker" id="img_680" src="<?php echo MAP_BK_MARKER_ICON."/letter_d.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("E",map_bank) ;?>">
			<img onclick="marker_img_select(681)" class="selected_marker" id="img_681" src="<?php echo MAP_BK_MARKER_ICON."/letter_e.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("F",map_bank) ;?>">
			<img onclick="marker_img_select(682)" class="selected_marker" id="img_682" src="<?php echo MAP_BK_MARKER_ICON."/letter_f.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("G",map_bank) ;?>">
			<img onclick="marker_img_select(683)" class="selected_marker" id="img_683" src="<?php echo MAP_BK_MARKER_ICON."/letter_g.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("H",map_bank) ;?>">	
			<img onclick="marker_img_select(684)" class="selected_marker" id="img_684" src="<?php echo MAP_BK_MARKER_ICON."/letter_h.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("I",map_bank) ;?>">
			<img onclick="marker_img_select(685)" class="selected_marker" id="img_685" src="<?php echo MAP_BK_MARKER_ICON."/letter_i.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("J",map_bank) ;?>">
			<img onclick="marker_img_select(686)" class="selected_marker" id="img_686" src="<?php echo MAP_BK_MARKER_ICON."/letter_j.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("K",map_bank) ;?>">
			<img onclick="marker_img_select(687)" class="selected_marker" id="img_687" src="<?php echo MAP_BK_MARKER_ICON."/letter_k.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("L",map_bank) ;?>">
			<img onclick="marker_img_select(688)" class="selected_marker" id="img_688" src="<?php echo MAP_BK_MARKER_ICON."/letter_l.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("M",map_bank) ;?>">
			<img onclick="marker_img_select(689)" class="selected_marker" id="img_689" src="<?php echo MAP_BK_MARKER_ICON."/letter_m.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("N",map_bank) ;?>">	
			<img onclick="marker_img_select(690)" class="selected_marker" id="img_690" src="<?php echo MAP_BK_MARKER_ICON."/letter_n.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("O",map_bank) ;?>">
			<img onclick="marker_img_select(691)" class="selected_marker" id="img_691" src="<?php echo MAP_BK_MARKER_ICON."/letter_o.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("P",map_bank) ;?>">
			<img onclick="marker_img_select(692)" class="selected_marker" id="img_692" src="<?php echo MAP_BK_MARKER_ICON."/letter_p.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Q",map_bank) ;?>">
			<img onclick="marker_img_select(693)" class="selected_marker" id="img_693" src="<?php echo MAP_BK_MARKER_ICON."/letter_q.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("R",map_bank) ;?>">
			<img onclick="marker_img_select(694)" class="selected_marker" id="img_694" src="<?php echo MAP_BK_MARKER_ICON."/letter_r.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("S",map_bank) ;?>">
			<img onclick="marker_img_select(695)" class="selected_marker" id="img_695" src="<?php echo MAP_BK_MARKER_ICON."/letter_s.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("T",map_bank) ;?>">
			<img onclick="marker_img_select(696)" class="selected_marker" id="img_696" src="<?php echo MAP_BK_MARKER_ICON."/letter_t.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("U",map_bank) ;?>">
			<img onclick="marker_img_select(697)" class="selected_marker" id="img_697" src="<?php echo MAP_BK_MARKER_ICON."/letter_u.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("V",map_bank) ;?>">
			<img onclick="marker_img_select(698)" class="selected_marker" id="img_698" src="<?php echo MAP_BK_MARKER_ICON."/letter_v.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("W",map_bank) ;?>">
			<img onclick="marker_img_select(699)" class="selected_marker" id="img_699" src="<?php echo MAP_BK_MARKER_ICON."/letter_w.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("X",map_bank) ;?>">
			<img onclick="marker_img_select(700)" class="selected_marker" id="img_700" src="<?php echo MAP_BK_MARKER_ICON."/letter_x.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Y",map_bank) ;?>">
			<img onclick="marker_img_select(701)" class="selected_marker" id="img_701" src="<?php echo MAP_BK_MARKER_ICON."/letter_y.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Z",map_bank) ;?>">
			<img onclick="marker_img_select(702)" class="selected_marker" id="img_702" src="<?php echo MAP_BK_MARKER_ICON."/letter_z.png";?>" />
		</span>
	</div>
	<div id="ux_img_media" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("3D",map_bank) ;?>">
			<img onclick="marker_img_select(703)" class="selected_marker" id="img_703" src="<?php echo MAP_BK_MARKER_ICON."/3d.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("360 Degrees",map_bank) ;?>">
			<img onclick="marker_img_select(704)" class="selected_marker" id="img_704" src="<?php echo MAP_BK_MARKER_ICON."/360degrees.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Audio",map_bank) ;?>">
			<img onclick="marker_img_select(705)" class="selected_marker" id="img_705" src="<?php echo MAP_BK_MARKER_ICON."/audio.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Award",map_bank) ;?>">
			<img onclick="marker_img_select(706)" class="selected_marker" id="img_706" src="<?php echo MAP_BK_MARKER_ICON."/award.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Calender",map_bank) ;?>">
			<img onclick="marker_img_select(707)" class="selected_marker" id="img_707" src="<?php echo MAP_BK_MARKER_ICON."/calendar-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Chart",map_bank) ;?>">
			<img onclick="marker_img_select(708)" class="selected_marker" id="img_708" src="<?php echo MAP_BK_MARKER_ICON."/chart-2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Comment Map",map_bank) ;?>">
			<img onclick="marker_img_select(709)" class="selected_marker" id="img_709" src="<?php echo MAP_BK_MARKER_ICON."/comment-map.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Conversation Map",map_bank) ;?>">
			<img onclick="marker_img_select(710)" class="selected_marker" id="img_710" src="<?php echo MAP_BK_MARKER_ICON."/conversation-map.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Download Adicon",map_bank) ;?>">
			<img onclick="marker_img_select(711)" class="selected_marker" id="img_711" src="<?php echo MAP_BK_MARKER_ICON."/downloadicon.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Folder",map_bank) ;?>">
			<img onclick="marker_img_select(712)" class="selected_marker" id="img_712" src="<?php echo MAP_BK_MARKER_ICON."/folder.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Information",map_bank) ;?>">
			<img onclick="marker_img_select(713)" class="selected_marker" id="img_713" src="<?php echo MAP_BK_MARKER_ICON."/information.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Photo",map_bank) ;?>">
			<img onclick="marker_img_select(714)" class="selected_marker" id="img_714" src="<?php echo MAP_BK_MARKER_ICON."/photo.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Price Tag Export",map_bank) ;?>">
			<img onclick="marker_img_select(715)" class="selected_marker" id="img_715" src="<?php echo MAP_BK_MARKER_ICON."/price-tag-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Share",map_bank) ;?>">
			<img onclick="marker_img_select(716)" class="selected_marker" id="img_716" src="<?php echo MAP_BK_MARKER_ICON."/share.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Star",map_bank) ;?>">	
			<img onclick="marker_img_select(717)" class="selected_marker" id="img_717" src="<?php echo MAP_BK_MARKER_ICON."/star-3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Test",map_bank) ;?>">
			<img onclick="marker_img_select(718)" class="selected_marker" id="img_718" src="<?php echo MAP_BK_MARKER_ICON."/test.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Text",map_bank) ;?>">
			<img onclick="marker_img_select(719)" class="selected_marker" id="img_719" src="<?php echo MAP_BK_MARKER_ICON."/text.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("TV",map_bank) ;?>">
			<img onclick="marker_img_select(720)" class="selected_marker" id="img_720" src="<?php echo MAP_BK_MARKER_ICON."/tv.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Tweet",map_bank) ;?>">
			<img onclick="marker_img_select(721)" class="selected_marker" id="img_721" src="<?php echo MAP_BK_MARKER_ICON."/tweet.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Video",map_bank) ;?>">
			<img onclick="marker_img_select(722)" class="selected_marker" id="img_722" src="<?php echo MAP_BK_MARKER_ICON."/video.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Webcam",map_bank) ;?>">
			<img onclick="marker_img_select(723)" class="selected_marker" id="img_723" src="<?php echo MAP_BK_MARKER_ICON."/webcam.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wiki Export",map_bank) ;?>">
			<img onclick="marker_img_select(724)" class="selected_marker" id="img_724" src="<?php echo MAP_BK_MARKER_ICON."/wiki-export.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Zoom",map_bank) ;?>">
		<img onclick="marker_img_select(725)" class="selected_marker" id="img_725" src="<?php echo MAP_BK_MARKER_ICON."/zoom.png";?>" />
		</span>
	</div>
	<div id="ux_img_miscellaneous" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Crematorium",map_bank) ;?>">
			<img onclick="marker_img_select(726)" class="selected_marker" id="img_726" src="<?php echo MAP_BK_MARKER_ICON."/crematorium.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Smile Happy",map_bank) ;?>">
			<img onclick="marker_img_select(727)" class="selected_marker" id="img_727" src="<?php echo MAP_BK_MARKER_ICON."/smiley_happy.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Smile Neutral",map_bank) ;?>">
			<img onclick="marker_img_select(728)" class="selected_marker" id="img_728" src="<?php echo MAP_BK_MARKER_ICON."/smiley_neutral.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Smile Sad",map_bank) ;?>">
			<img onclick="marker_img_select(729)" class="selected_marker" id="img_729" src="<?php echo MAP_BK_MARKER_ICON."/smiley_sad.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Wedding",map_bank) ;?>">
			<img onclick="marker_img_select(730)" class="selected_marker" id="img_730" src="<?php echo MAP_BK_MARKER_ICON."/wedding.png";?>" />
		</span>
	</div>
	<div id="ux_img_numbers" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("0",map_bank) ;?>">
			<img onclick="marker_img_select(731)" class="selected_marker" id="img_731" src="<?php echo MAP_BK_MARKER_ICON."/number_0.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("1",map_bank) ;?>">
			<img onclick="marker_img_select(732)" class="selected_marker" id="img_732" src="<?php echo MAP_BK_MARKER_ICON."/number_1.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("2",map_bank) ;?>">
			<img onclick="marker_img_select(733)" class="selected_marker" id="img_733" src="<?php echo MAP_BK_MARKER_ICON."/number_2.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("3",map_bank) ;?>">
			<img onclick="marker_img_select(734)" class="selected_marker" id="img_734" src="<?php echo MAP_BK_MARKER_ICON."/number_3.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("4",map_bank) ;?>">
			<img onclick="marker_img_select(735)" class="selected_marker" id="img_735" src="<?php echo MAP_BK_MARKER_ICON."/number_4.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("5",map_bank) ;?>">
			<img onclick="marker_img_select(736)" class="selected_marker" id="img_736" src="<?php echo MAP_BK_MARKER_ICON."/number_5.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("6",map_bank) ;?>">
			<img onclick="marker_img_select(737)" class="selected_marker" id="img_737" src="<?php echo MAP_BK_MARKER_ICON."/number_6.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("7",map_bank) ;?>">
			<img onclick="marker_img_select(738)" class="selected_marker" id="img_738" src="<?php echo MAP_BK_MARKER_ICON."/number_7.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("8",map_bank) ;?>">
			<img onclick="marker_img_select(739)" class="selected_marker" id="img_739" src="<?php echo MAP_BK_MARKER_ICON."/number_8.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("9",map_bank) ;?>">
			<img onclick="marker_img_select(740)" class="selected_marker" id="img_740" src="<?php echo MAP_BK_MARKER_ICON."/number_9.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("10",map_bank) ;?>">
			<img onclick="marker_img_select(741)" class="selected_marker" id="img_741" src="<?php echo MAP_BK_MARKER_ICON."/number_10.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("11",map_bank) ;?>">
			<img onclick="marker_img_select(742)" class="selected_marker" id="img_742" src="<?php echo MAP_BK_MARKER_ICON."/number_11.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("12",map_bank) ;?>">
			<img onclick="marker_img_select(743)" class="selected_marker" id="img_743" src="<?php echo MAP_BK_MARKER_ICON."/number_12.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("13",map_bank) ;?>">
			<img onclick="marker_img_select(744)" class="selected_marker" id="img_744" src="<?php echo MAP_BK_MARKER_ICON."/number_13.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("14",map_bank) ;?>">
			<img onclick="marker_img_select(745)" class="selected_marker" id="img_745" src="<?php echo MAP_BK_MARKER_ICON."/number_14.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("15",map_bank) ;?>">
			<img onclick="marker_img_select(746)" class="selected_marker" id="img_746" src="<?php echo MAP_BK_MARKER_ICON."/number_15.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("16",map_bank) ;?>">
			<img onclick="marker_img_select(747)" class="selected_marker" id="img_747" src="<?php echo MAP_BK_MARKER_ICON."/number_16.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("17",map_bank) ;?>">
			<img onclick="marker_img_select(748)" class="selected_marker" id="img_748" src="<?php echo MAP_BK_MARKER_ICON."/number_17.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("18",map_bank) ;?>">
			<img onclick="marker_img_select(749)" class="selected_marker" id="img_749" src="<?php echo MAP_BK_MARKER_ICON."/number_18.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("19",map_bank) ;?>">
			<img onclick="marker_img_select(750)" class="selected_marker" id="img_750" src="<?php echo MAP_BK_MARKER_ICON."/number_19.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("20",map_bank) ;?>">
			<img onclick="marker_img_select(751)" class="selected_marker" id="img_751" src="<?php echo MAP_BK_MARKER_ICON."/number_20.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("21",map_bank) ;?>">
			<img onclick="marker_img_select(752)" class="selected_marker" id="img_752" src="<?php echo MAP_BK_MARKER_ICON."/number_21.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("22",map_bank) ;?>">
			<img onclick="marker_img_select(753)" class="selected_marker" id="img_753" src="<?php echo MAP_BK_MARKER_ICON."/number_22.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("23",map_bank) ;?>">
			<img onclick="marker_img_select(754)" class="selected_marker" id="img_754" src="<?php echo MAP_BK_MARKER_ICON."/number_23.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("24",map_bank) ;?>">
			<img onclick="marker_img_select(755)" class="selected_marker" id="img_755" src="<?php echo MAP_BK_MARKER_ICON."/number_24.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("25",map_bank) ;?>">
			<img onclick="marker_img_select(756)" class="selected_marker" id="img_756" src="<?php echo MAP_BK_MARKER_ICON."/number_25.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("26",map_bank) ;?>">
			<img onclick="marker_img_select(757)" class="selected_marker" id="img_757" src="<?php echo MAP_BK_MARKER_ICON."/number_26.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("27",map_bank) ;?>">
			<img onclick="marker_img_select(758)" class="selected_marker" id="img_758" src="<?php echo MAP_BK_MARKER_ICON."/number_27.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("28",map_bank) ;?>">
			<img onclick="marker_img_select(759)" class="selected_marker" id="img_759" src="<?php echo MAP_BK_MARKER_ICON."/number_28.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("29",map_bank) ;?>">
			<img onclick="marker_img_select(760)" class="selected_marker" id="img_760" src="<?php echo MAP_BK_MARKER_ICON."/number_29.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("30",map_bank) ;?>">
			<img onclick="marker_img_select(761)" class="selected_marker" id="img_761" src="<?php echo MAP_BK_MARKER_ICON."/number_30.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("31",map_bank) ;?>">
			<img onclick="marker_img_select(762)" class="selected_marker" id="img_762" src="<?php echo MAP_BK_MARKER_ICON."/number_31.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("32",map_bank) ;?>">
			<img onclick="marker_img_select(763)" class="selected_marker" id="img_763" src="<?php echo MAP_BK_MARKER_ICON."/number_32.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("33",map_bank) ;?>">
			<img onclick="marker_img_select(765)" class="selected_marker" id="img_765" src="<?php echo MAP_BK_MARKER_ICON."/number_33.png";?>"/>
		</span>
		<span class="hovertip" data-original-title ="<?php _e("34",map_bank) ;?>">
			<img onclick="marker_img_select(766)" class="selected_marker" id="img_766" src="<?php echo MAP_BK_MARKER_ICON."/number_34.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("35",map_bank) ;?>">
			<img onclick="marker_img_select(767)" class="selected_marker" id="img_767" src="<?php echo MAP_BK_MARKER_ICON."/number_35.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("36",map_bank) ;?>">
			<img onclick="marker_img_select(768)" class="selected_marker" id="img_768" src="<?php echo MAP_BK_MARKER_ICON."/number_36.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("37",map_bank) ;?>">
			<img onclick="marker_img_select(769)" class="selected_marker" id="img_769" src="<?php echo MAP_BK_MARKER_ICON."/number_37.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("38",map_bank) ;?>">
			<img onclick="marker_img_select(770)" class="selected_marker" id="img_770" src="<?php echo MAP_BK_MARKER_ICON."/number_38.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("39",map_bank) ;?>">
			<img onclick="marker_img_select(771)" class="selected_marker" id="img_771" src="<?php echo MAP_BK_MARKER_ICON."/number_39.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("40",map_bank) ;?>">
			<img onclick="marker_img_select(772)" class="selected_marker" id="img_772" src="<?php echo MAP_BK_MARKER_ICON."/number_40.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("41",map_bank) ;?>">
			<img onclick="marker_img_select(773)" class="selected_marker" id="img_773" src="<?php echo MAP_BK_MARKER_ICON."/number_41.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("42",map_bank) ;?>">
			<img onclick="marker_img_select(774)" class="selected_marker" id="img_774" src="<?php echo MAP_BK_MARKER_ICON."/number_42.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("43",map_bank) ;?>">
			<img onclick="marker_img_select(775)" class="selected_marker" id="img_775" src="<?php echo MAP_BK_MARKER_ICON."/number_43.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("44",map_bank) ;?>">
			<img onclick="marker_img_select(776)" class="selected_marker" id="img_776" src="<?php echo MAP_BK_MARKER_ICON."/number_44.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("45",map_bank) ;?>">
			<img onclick="marker_img_select(777)" class="selected_marker" id="img_777" src="<?php echo MAP_BK_MARKER_ICON."/number_45.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("46",map_bank) ;?>">
			<img onclick="marker_img_select(778)" class="selected_marker" id="img_778" src="<?php echo MAP_BK_MARKER_ICON."/number_46.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("47",map_bank) ;?>">
			<img onclick="marker_img_select(779)" class="selected_marker" id="img_779" src="<?php echo MAP_BK_MARKER_ICON."/number_47.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("48",map_bank) ;?>">
			<img onclick="marker_img_select(780)" class="selected_marker" id="img_780" src="<?php echo MAP_BK_MARKER_ICON."/number_48.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("49",map_bank) ;?>">
			<img onclick="marker_img_select(781)" class="selected_marker" id="img_781" src="<?php echo MAP_BK_MARKER_ICON."/number_49.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("50",map_bank) ;?>">
			<img onclick="marker_img_select(782)" class="selected_marker" id="img_782" src="<?php echo MAP_BK_MARKER_ICON."/number_50.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("51",map_bank) ;?>">
			<img onclick="marker_img_select(783)" class="selected_marker" id="img_783" src="<?php echo MAP_BK_MARKER_ICON."/number_51.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("52",map_bank) ;?>">
			<img onclick="marker_img_select(784)" class="selected_marker" id="img_784" src="<?php echo MAP_BK_MARKER_ICON."/number_52.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("53",map_bank) ;?>">
			<img onclick="marker_img_select(785)" class="selected_marker" id="img_785" src="<?php echo MAP_BK_MARKER_ICON."/number_53.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("54",map_bank) ;?>">
			<img onclick="marker_img_select(786)" class="selected_marker" id="img_786" src="<?php echo MAP_BK_MARKER_ICON."/number_54.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("55",map_bank) ;?>">
			<img onclick="marker_img_select(787)" class="selected_marker" id="img_787" src="<?php echo MAP_BK_MARKER_ICON."/number_55.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("56",map_bank) ;?>">
			<img onclick="marker_img_select(788)" class="selected_marker" id="img_788" src="<?php echo MAP_BK_MARKER_ICON."/number_56.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("57",map_bank) ;?>">
			<img onclick="marker_img_select(789)" class="selected_marker" id="img_789" src="<?php echo MAP_BK_MARKER_ICON."/number_57.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("58",map_bank) ;?>">
			<img onclick="marker_img_select(790)" class="selected_marker" id="img_790" src="<?php echo MAP_BK_MARKER_ICON."/number_58.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("59",map_bank) ;?>">
			<img onclick="marker_img_select(791)" class="selected_marker" id="img_791" src="<?php echo MAP_BK_MARKER_ICON."/number_59.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("60",map_bank) ;?>">
			<img onclick="marker_img_select(792)" class="selected_marker" id="img_792" src="<?php echo MAP_BK_MARKER_ICON."/number_60.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("61",map_bank) ;?>">
			<img onclick="marker_img_select(793)" class="selected_marker" id="img_793" src="<?php echo MAP_BK_MARKER_ICON."/number_61.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("62",map_bank) ;?>">
			<img onclick="marker_img_select(794)" class="selected_marker" id="img_794" src="<?php echo MAP_BK_MARKER_ICON."/number_62.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("63",map_bank) ;?>">
			<img onclick="marker_img_select(795)" class="selected_marker" id="img_795" src="<?php echo MAP_BK_MARKER_ICON."/number_63.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("64",map_bank) ;?>">
			<img onclick="marker_img_select(796)" class="selected_marker" id="img_796" src="<?php echo MAP_BK_MARKER_ICON."/number_64.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("65",map_bank) ;?>">
			<img onclick="marker_img_select(797)" class="selected_marker" id="img_797" src="<?php echo MAP_BK_MARKER_ICON."/number_65.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("66",map_bank) ;?>">
			<img onclick="marker_img_select(798)" class="selected_marker" id="img_798" src="<?php echo MAP_BK_MARKER_ICON."/number_66.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("67",map_bank) ;?>">
			<img onclick="marker_img_select(799)" class="selected_marker" id="img_799" src="<?php echo MAP_BK_MARKER_ICON."/number_67.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("68",map_bank) ;?>">
			<img onclick="marker_img_select(800)" class="selected_marker" id="img_800" src="<?php echo MAP_BK_MARKER_ICON."/number_68.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("69",map_bank) ;?>">
			<img onclick="marker_img_select(801)" class="selected_marker" id="img_801" src="<?php echo MAP_BK_MARKER_ICON."/number_69.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("70",map_bank) ;?>">
			<img onclick="marker_img_select(802)" class="selected_marker" id="img_802" src="<?php echo MAP_BK_MARKER_ICON."/number_70.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("71",map_bank) ;?>">
			<img onclick="marker_img_select(803)" class="selected_marker" id="img_803" src="<?php echo MAP_BK_MARKER_ICON."/number_71.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("72",map_bank) ;?>">
			<img onclick="marker_img_select(804)" class="selected_marker" id="img_804" src="<?php echo MAP_BK_MARKER_ICON."/number_72.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("73",map_bank) ;?>">
			<img onclick="marker_img_select(805)" class="selected_marker" id="img_805" src="<?php echo MAP_BK_MARKER_ICON."/number_73.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("74",map_bank) ;?>">
			<img onclick="marker_img_select(806)" class="selected_marker" id="img_806" src="<?php echo MAP_BK_MARKER_ICON."/number_74.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("75",map_bank) ;?>">
			<img onclick="marker_img_select(807)" class="selected_marker" id="img_807" src="<?php echo MAP_BK_MARKER_ICON."/number_75.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("76",map_bank) ;?>">
			<img onclick="marker_img_select(808)" class="selected_marker" id="img_808" src="<?php echo MAP_BK_MARKER_ICON."/number_76.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("77",map_bank) ;?>">
			<img onclick="marker_img_select(809)" class="selected_marker" id="img_809" src="<?php echo MAP_BK_MARKER_ICON."/number_77.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("78",map_bank) ;?>">
			<img onclick="marker_img_select(810)" class="selected_marker" id="img_810" src="<?php echo MAP_BK_MARKER_ICON."/number_78.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("79",map_bank) ;?>">
			<img onclick="marker_img_select(811)" class="selected_marker" id="img_811" src="<?php echo MAP_BK_MARKER_ICON."/number_79.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("80",map_bank) ;?>">
			<img onclick="marker_img_select(812)" class="selected_marker" id="img_812" src="<?php echo MAP_BK_MARKER_ICON."/number_80.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("81",map_bank) ;?>">
			<img onclick="marker_img_select(813)" class="selected_marker" id="img_813" src="<?php echo MAP_BK_MARKER_ICON."/number_81.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("82",map_bank) ;?>">
			<img onclick="marker_img_select(814)" class="selected_marker" id="img_814" src="<?php echo MAP_BK_MARKER_ICON."/number_82.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("83",map_bank) ;?>">
			<img onclick="marker_img_select(815)" class="selected_marker" id="img_815" src="<?php echo MAP_BK_MARKER_ICON."/number_83.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("84",map_bank) ;?>">
			<img onclick="marker_img_select(816)" class="selected_marker" id="img_816" src="<?php echo MAP_BK_MARKER_ICON."/number_84.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("85",map_bank) ;?>">
			<img onclick="marker_img_select(817)" class="selected_marker" id="img_817" src="<?php echo MAP_BK_MARKER_ICON."/number_85.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("86",map_bank) ;?>">
			<img onclick="marker_img_select(818)" class="selected_marker" id="img_818" src="<?php echo MAP_BK_MARKER_ICON."/number_86.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("87",map_bank) ;?>">
			<img onclick="marker_img_select(819)" class="selected_marker" id="img_819" src="<?php echo MAP_BK_MARKER_ICON."/number_87.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("88",map_bank) ;?>">
			<img onclick="marker_img_select(820)" class="selected_marker" id="img_820" src="<?php echo MAP_BK_MARKER_ICON."/number_88.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("89",map_bank) ;?>">
			<img onclick="marker_img_select(821)" class="selected_marker" id="img_821" src="<?php echo MAP_BK_MARKER_ICON."/number_89.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("90",map_bank) ;?>">
			<img onclick="marker_img_select(822)" class="selected_marker" id="img_822" src="<?php echo MAP_BK_MARKER_ICON."/number_90.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("91",map_bank) ;?>">
			<img onclick="marker_img_select(823)" class="selected_marker" id="img_823" src="<?php echo MAP_BK_MARKER_ICON."/number_91.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("92",map_bank) ;?>">
			<img onclick="marker_img_select(824)" class="selected_marker" id="img_824" src="<?php echo MAP_BK_MARKER_ICON."/number_92.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("93",map_bank) ;?>">
			<img onclick="marker_img_select(825)" class="selected_marker" id="img_825" src="<?php echo MAP_BK_MARKER_ICON."/number_93.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("94",map_bank) ;?>">
			<img onclick="marker_img_select(826)" class="selected_marker" id="img_826" src="<?php echo MAP_BK_MARKER_ICON."/number_94.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("95",map_bank) ;?>">
			<img onclick="marker_img_select(827)" class="selected_marker" id="img_827" src="<?php echo MAP_BK_MARKER_ICON."/number_95.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("96",map_bank) ;?>">
			<img onclick="marker_img_select(828)" class="selected_marker" id="img_828" src="<?php echo MAP_BK_MARKER_ICON."/number_96.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("97",map_bank) ;?>">
			<img onclick="marker_img_select(829)" class="selected_marker" id="img_829" src="<?php echo MAP_BK_MARKER_ICON."/number_97.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("98",map_bank) ;?>">
			<img onclick="marker_img_select(830)" class="selected_marker" id="img_830" src="<?php echo MAP_BK_MARKER_ICON."/number_98.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("99",map_bank) ;?>">
			<img onclick="marker_img_select(831)" class="selected_marker" id="img_831" src="<?php echo MAP_BK_MARKER_ICON."/number_99.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("100",map_bank) ;?>">
			<img onclick="marker_img_select(832)" class="selected_marker" id="img_832" src="<?php echo MAP_BK_MARKER_ICON."/number_100.png";?>" />
		</span>
	</div>
	<div id="ux_img_people" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Family",map_bank) ;?>">
			<img onclick="marker_img_select(833)" class="selected_marker" id="img_833" src="<?php echo MAP_BK_MARKER_ICON."/family.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Female",map_bank) ;?>">
			<img onclick="marker_img_select(834)" class="selected_marker" id="img_834" src="<?php echo MAP_BK_MARKER_ICON."/female.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Male",map_bank) ;?>">
			<img onclick="marker_img_select(835)" class="selected_marker" id="img_835" src="<?php echo MAP_BK_MARKER_ICON."/male.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Group",map_bank) ;?>">
			<img onclick="marker_img_select(836)" class="selected_marker" id="img_836" src="<?php echo MAP_BK_MARKER_ICON."/group.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Nursing Home",map_bank) ;?>">
			<img onclick="marker_img_select(837)" class="selected_marker" id="img_837" src="<?php echo MAP_BK_MARKER_ICON."/nursing_home.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Retirement Home",map_bank) ;?>">
			<img onclick="marker_img_select(838)" class="selected_marker" id="img_838" src="<?php echo MAP_BK_MARKER_ICON."/retirement_home.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Senior Site",map_bank) ;?>">
			<img onclick="marker_img_select(839)" class="selected_marker" id="img_839" src="<?php echo MAP_BK_MARKER_ICON."/seniorsite.png";?>" />
		</span>
	</div>
	<div id="ux_img_special_characters" class="marker_icons" style="display: none;">
		<span class="hovertip" data-original-title ="<?php _e("Symbol Dollar",map_bank) ;?>">
			<img onclick="marker_img_select(840)" class="selected_marker" id="img_840" src="<?php echo MAP_BK_MARKER_ICON."/symbol_dollar.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Symbol Yen",map_bank) ;?>">
			<img onclick="marker_img_select(841)" class="selected_marker" id="img_841" src="<?php echo MAP_BK_MARKER_ICON."/symbol_yen.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Symbol Excla",map_bank) ;?>">
			<img onclick="marker_img_select(842)" class="selected_marker" id="img_842" src="<?php echo MAP_BK_MARKER_ICON."/symbol_excla.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Symbol Inter",map_bank) ;?>">
			<img onclick="marker_img_select(843)" class="selected_marker" id="img_843" src="<?php echo MAP_BK_MARKER_ICON."/symbol_inter.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Symbol Euro",map_bank) ;?>">
			<img onclick="marker_img_select(844)" class="selected_marker" id="img_844" src="<?php echo MAP_BK_MARKER_ICON."/symbol_euro.png";?>" />
		</span>
		<span class="hovertip" data-original-title ="<?php _e("Symbol Pound",map_bank) ;?>">
			<img onclick="marker_img_select(845)" class="selected_marker" id="img_845" src="<?php echo MAP_BK_MARKER_ICON."/symbol_pound.png";?>" />
		</span>
	</div>
	<script type="text/javascript">
		jQuery(".hovertip").tooltip({placement: "bottom"});
	</script>
	<?php 
	}
}
?>