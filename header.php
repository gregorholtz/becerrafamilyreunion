<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Heisenberg
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700|Roboto:400,700,400italic' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<nav class="tab-bar show-for-small-only">
			<section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" ><span></span></a>
			</section>
		</nav>

		<!-- Off Canvas Menu -->
		<aside class="left-off-canvas-menu">
		<!-- whatever you want goes here -->
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_class' => '', 'menu_id' => '', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</aside>


<div id="page" class="hfeed site">

	<div class="medium-2 small-12 columns translation"><!-- .columns start -->

		<?php get_sidebar(); ?>

	</div><!-- .columns end -->


	<header id="masthead" class="site-header" role="banner">

		<div class="row"><!-- .row start -->

			<div class="medium-10 small-12 small-centered columns"><!-- .columns start -->

				<div class="site-branding">

					<div class="row"><!-- .row start -->

						<div class="medium-8 small-12 small-centered columns"><!-- .columns start -->

							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="792px" height="792px" viewBox="0 0 792 792" enable-background="new 0 0 792 792" xml:space="preserve">
							<g>
								<g>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M346.4765625,441.9238281
										c-8.7602539-2.7363281-8.7641602-2.7363281-8.7641602-12.2021484
										c-0.0024414-10.0439453,0.0864258-20.0820312-0.0405273-30.1220703c-0.0483398-3.8544922,1.4560547-6.8212891,5.2758789-6.6484375
										c24.0214844,1.0634766,46.3608398-8.9443359,70.0571289-10.2460938
										c22.1591797-1.2197266,43.7822266,1.0234375,65.3544922,5.9355469c9.5048828,2.1650391,19.3740234,2.9482422,29.1347656,3.7167969
										c8.5419922,0.671875,9.9179688,1.5947266,9.9267578,9.921875c0.0078125,9.2861328-0.0019531,18.5654297-0.0087891,27.8486328
										c0,8.9970703-0.3242188,9.4345703-8.7392578,11.6113281c0.9804688,5.9951172,3.7792969,7.8193359,11.2402344,8.1542969
										c15.1191406,0.6806641,30.3496094,0.6396484,45.3134766,2.6025391c25.09375,3.2988281,46.2324219,14.921875,63.109375,33.9707031
										c0.8789062,0.9931641,1.7089844,2.0283203,2.4824219,3.1025391c8.6054688,12.0097656,6.7695312,19.3388672-6.6591797,25.3447266
										c-18.0419922,8.0654297-36.8339844,11.1923828-56.4980469,7.9980469
										c-16.3154297-2.6435547-28.671875-12.1660156-40.2041016-23.1025391c-2.4667969-2.3427734-4.4804688-5.2060547-7.1074219-7.328125
										c-1.6699219-1.3515625-4.8623047-3.0322266-5.9921875-2.3320312c-1.7607422,1.0898438-3.3359375,4.1074219-3.2666016,6.25
										c0.2949219,9.0693359,1.0849609,18.1308594,1.9736328,27.1650391c1.5625,15.9121094-1.4550781,30.6162109-9.0488281,44.8623047
										c-9.3798828,17.59375-15.8652344,36.3847656-19.8828125,55.9990234
										c-2.0996094,10.2626953-6.6035156,12.9150391-17.0371094,11.0859375
										c-27.1357422-4.7539062-54.2490234-4.8740234-81.3154297,0.5498047
										c-7.871582,1.5771484-12.2636719-2.1630859-14.9257812-11.6357422
										c-3.5664062-12.7265625-7.4047852-25.390625-11.5629883-37.9316406
										c-1.8950195-5.7167969-4.2460938-11.4589844-7.4086914-16.5556641
										c-11.078125-17.8652344-11.2832031-37.2724609-9.128418-57.1650391
										c0.5922852-5.4462891,1.2910156-10.9277344,1.2348633-16.3876953c-0.0195312-2.2773438-1.3994141-5.1347656-3.1269531-6.5341797
										c-0.8027344-0.6503906-4.3012695,1.1132812-5.9086914,2.5332031c-5.796875,5.1376953-11.0727539,10.8808594-16.9760742,15.8857422
										c-20.5551758,17.4277344-44.3217773,18.8554688-69.1547852,12.7158203
										c-7.8178711-1.9316406-15.4550781-5.1083984-22.7041016-8.6708984
										c-7.4204102-3.6513672-9.2749023-10.0097656-5.0063477-17.1699219
										c3.3442383-5.6152344,7.5273438-10.9902344,12.2797852-15.4648438
										c18.1474609-17.1113281,39.956543-26.4707031,64.7763672-28.3671875
										c12.4438477-0.9501953,24.9594727-1.0253906,37.4453125-1.4453125
										C342.7207031,449.6269531,345.331543,447.765625,346.4765625,441.9238281z M496.2714844,460.9335938
										c-1.9423828-1.0322266-2.8349609-1.6972656-3.8320312-2.0019531c-11.3789062-3.515625-21.4716797-0.6875-30.0537109,7.0332031
										c-11.3212891,10.1855469-16.3896484,23.4736328-16.6181641,38.4345703
										c-0.3046875,19.8417969,1.1669922,39.5664062,6.6845703,59.4316406
										c-16.8222656-11.1767578-33.1015625-11.0166016-49.8320312-0.0478516c0.6064453-2.3417969,1.0849609-3.9492188,1.4375-5.5830078
										c4.546875-21.0234375,7.421875-42.2314453,3.8945312-63.6542969
										c-2.7773438-16.8681641-10.9736328-30.1816406-28.2436523-35.8232422
										c-6.7319336-2.2001953-13.4555664-1.7988281-21.2602539,2.0800781
										c13.7329102,2.2304688,20.9960938,9.8916016,26.0029297,20.6796875
										c4.1611328,8.9599609,7.515625,18.9208984,19.2285156,21.5283203
										c-2.2158203,23.1347656-4.3867188,45.7929688-6.6152344,69.0810547
										c20.5693359-11.5625,40.7773438-11.1894531,60.9707031-0.1796875
										c-2.2373047-23.5429688-4.4121094-46.4697266-6.4257812-67.6943359c4.8466797-3.5507812,8.9296875-5.6875,11.8037109-8.9023438
										c2.5517578-2.8564453,3.96875-6.8271484,5.5498047-10.4550781
										C474.1513672,472.9570312,481.0605469,463.0117188,496.2714844,460.9335938z M418.7939453,601.1044922
										c6.1679688,0,11.9238281,0,17.6279297,0c1.2001953,11.0537109,7.6572266,17.5996094,16.3632812,16.8789062
										c7.5117188-0.6259766,13.1796875-6.1982422,13.0859375-12.8759766c-4.6835938,6.6611328-9.6601562,8.90625-15.6689453,7.0673828
										c-5.1660156-1.5771484-9.0097656-6.4580078-8.9775391-11.8457031c0.0585938-9.5283203,6.4667969-12.7451172,14.9941406-13.7939453
										c-9.7255859-8.4941406-48.9042969-8.3574219-56.6738281-0.2255859c10.7285156,3.1210938,14.2001953,6.2919922,14.3876953,13.125
										c0.15625,5.7900391-3.2421875,10.7158203-8.7128906,12.6054688c-6.1054688,2.1171875-10.8222656-0.0263672-16.559082-7.53125
										c1.3066406,8.2998047,7.3745117,13.7529297,15.0356445,13.5
										C412.1054688,617.7363281,417.4404297,611.8144531,418.7939453,601.1044922z M363.3740234,505.984375
										c0.6484375,4.9140625,3.8251953,8.0947266,9.3964844,8.5107422c5.2900391,0.3955078,9.4301758-2.8447266,10.7563477-7.6005859
										C376.9155273,506.5947266,370.0532227,506.2871094,363.3740234,505.984375z M492.3408203,504.9902344
										c-4.0615234,0.8203125-7.5,1.9287109-10.9853516,2.1015625c-3.3554688,0.1601562-6.765625-0.6455078-10.4423828-1.0556641
										c2.0419922,5.9638672,5.9912109,8.7685547,11.6933594,8.3242188
										C488.0390625,513.9355469,491.4199219,510.7861328,492.3408203,504.9902344z M380.5458984,487.5400391
										c-4.3867188-3.3310547-7.6699219-6.3505859-11.4257812-8.5654297c-7.3549805-4.3359375-9.3256836-3.3388672-11.40625,4.3193359
										C364.6821289,484.5898438,371.706543,485.8935547,380.5458984,487.5400391z M477.0048828,486.9472656
										c6.7802734-1.203125,13.4570312-2.3818359,20.4550781-3.625c-0.8740234-2.3935547-1.6904297-4.6455078-2.5927734-7.1181641
										C487.2304688,477.4570312,480.9140625,480.1103516,477.0048828,486.9472656z M377.8056641,492.4160156
										c-0.5410156,0.1201172-1.0805664,0.2402344-1.6230469,0.3603516c-0.6508789,3.4501953-1.3056641,6.9013672-2.2412109,11.8632812
										c2.4003906-1.5146484,5.1318359-2.4072266,5.1870117-3.4326172
										C379.2758789,498.3046875,378.3217773,495.3496094,377.8056641,492.4160156z M481,504.203125
										c-0.8037109-4.4589844-1.3994141-7.7568359-1.9960938-11.0556641c-0.5136719-0.1201172-1.0263672-0.2421875-1.5400391-0.3554688
										c-0.6259766,2.953125-1.6064453,5.9072266-1.6376953,8.8681641C475.8222656,502.4052734,478.8320312,503.1826172,481,504.203125z"
										/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M330.8671875,397.0986328c0,12.4990234,0,24.3808594,0,37.1152344
										c-2.8569336,0-5.6313477,0.2685547-8.3378906-0.0400391c-14.8076172-1.6982422-29.9282227-2.1689453-44.3364258-5.5927734
										c-33.9414062-8.078125-50.5136719-29.1875-53.0839844-64.0126953
										c-1.4423828-19.5922852-3.4169922-39.1552734-5.5932617-58.6831055
										c-0.5795898-5.1816406-3.1435547-10.1176758-4.0683594-15.2954102c-0.4243164-2.3759766,0.0761719-6.2456055,1.6352539-7.3540039
										c2.9555664-2.0966797,5.5048828,0.4160156,7.3125,3.1767578c10.2822266,15.7021484,15.0263672,33.2973633,17.8461914,51.5834961
										c0.8637695,5.6015625,1.9799805,11.1674805,3.0097656,16.7421875c3.4121094,18.4750977,14.5283203,30.3603516,32.3920898,34.84375
										c13.3100586,3.3398438,27.0976562,4.8037109,40.7070312,6.8828125
										C322.234375,397.0585938,326.234375,396.8896484,330.8671875,397.0986328z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M524.2509766,434.28125c0-12.7001953,0-24.5791016,0-36.9130859
										c7.9931641-0.625,15.8974609-0.875,23.6962891-1.9423828c9.1552734-1.2519531,18.3544922-2.6845703,27.2949219-4.9697266
										c20.15625-5.1513672,31.7753906-18.0917969,35.5302734-38.8720703
										c2.9482422-16.3071289,7.0048828-32.4536133,11.4365234-48.4316406
										c1.6777344-6.0415039,5.4550781-11.6303711,8.9746094-16.9594727c1.2041016-1.8154297,4.5576172-2.2124023,6.9287109-3.2553711
										c0.6376953,2.34375,2.4150391,5.1025391,1.7324219,6.96875c-8.6494141,23.7861328-7.7412109,48.7871094-9.8955078,73.4086914
										c-0.5732422,6.5644531-1.5625,13.1694336-3.1572266,19.5571289
										c-4.9130859,19.7050781-17.0087891,33.4658203-35.7441406,41.2226562
										C569.8212891,432.8828125,547.4511719,434.2373047,524.2509766,434.28125z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M427.5664062,662.5605469
										c-12.7988281-1.5800781-24.3984375-6.4326172-35.2651367-13.0693359c-1.300293-0.7949219-2.1171875-3.6572266-1.8310547-5.3378906
										c0.2055664-1.2138672,2.512207-2.7431641,4.0449219-2.9599609c22.0043945-3.1083984,44.0385742-3.1347656,66.043457-0.0039062
										c1.5488281,0.2207031,3.8837891,1.7021484,4.0986328,2.9140625c0.3037109,1.6708984-0.4931641,4.5585938-1.7919922,5.3466797
										C452.0029297,656.0927734,440.4091797,660.9521484,427.5664062,662.5605469z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M496.2714844,460.9335938
										c-15.2109375,2.078125-22.1201172,12.0234375-27.3085938,23.9267578
										c-1.5810547,3.6279297-2.9980469,7.5986328-5.5498047,10.4550781c-2.8740234,3.2148438-6.9570312,5.3515625-11.8037109,8.9023438
										c2.0136719,21.2246094,4.1884766,44.1513672,6.4257812,67.6943359
										c-20.1933594-11.0097656-40.4013672-11.3828125-60.9707031,0.1796875
										c2.2285156-23.2880859,4.3994141-45.9462891,6.6152344-69.0810547
										c-11.7128906-2.6074219-15.0673828-12.5683594-19.2285156-21.5283203
										c-5.0068359-10.7880859-12.2700195-18.4492188-26.0029297-20.6796875
										c7.8046875-3.8789062,14.5283203-4.2802734,21.2602539-2.0800781
										c17.2700195,5.6416016,25.4663086,18.9550781,28.2436523,35.8232422
										c3.5273438,21.4228516,0.6523438,42.6308594-3.8945312,63.6542969c-0.3525391,1.6337891-0.8310547,3.2412109-1.4375,5.5830078
										c16.7304688-10.96875,33.0097656-11.1289062,49.8320312,0.0478516
										c-5.5175781-19.8652344-6.9892578-39.5898438-6.6845703-59.4316406
										c0.2285156-14.9609375,5.296875-28.2490234,16.6181641-38.4345703
										c8.5820312-7.7207031,18.6748047-10.5488281,30.0537109-7.0332031
										C493.4365234,459.2363281,494.3291016,459.9013672,496.2714844,460.9335938z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M418.7939453,601.1044922
										c-1.3535156,10.7099609-6.6884766,16.6318359-15.0976562,16.9042969c-7.6611328,0.2529297-13.7290039-5.2001953-15.0356445-13.5
										c5.7368164,7.5048828,10.4536133,9.6484375,16.559082,7.53125c5.4707031-1.8896484,8.8691406-6.8154297,8.7128906-12.6054688
										c-0.1875-6.8330078-3.6591797-10.0039062-14.3876953-13.125c7.7695312-8.1318359,46.9482422-8.2685547,56.6738281,0.2255859
										c-8.5273438,1.0488281-14.9355469,4.265625-14.9941406,13.7939453
										c-0.0322266,5.3876953,3.8115234,10.2685547,8.9775391,11.8457031c6.0087891,1.8388672,10.9853516-0.40625,15.6689453-7.0673828
										c0.09375,6.6777344-5.5742188,12.25-13.0859375,12.8759766c-8.7060547,0.7207031-15.1630859-5.8251953-16.3632812-16.8789062
										C430.7177734,601.1044922,424.9619141,601.1044922,418.7939453,601.1044922z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M363.3740234,505.984375
										c6.6791992,0.3027344,13.5415039,0.6103516,20.152832,0.9101562c-1.3261719,4.7558594-5.4663086,7.9960938-10.7563477,7.6005859
										C367.1992188,514.0791016,364.0224609,510.8984375,363.3740234,505.984375z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M492.3408203,504.9902344
										c-0.9208984,5.7958984-4.3017578,8.9453125-9.734375,9.3701172c-5.7021484,0.4443359-9.6513672-2.3603516-11.6933594-8.3242188
										c3.6767578,0.4101562,7.0869141,1.2158203,10.4423828,1.0556641
										C484.8408203,506.9189453,488.2792969,505.8105469,492.3408203,504.9902344z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M380.5458984,487.5400391
										c-8.8393555-1.6464844-15.8637695-2.9501953-22.8320312-4.2460938c2.0805664-7.6582031,4.0512695-8.6552734,11.40625-4.3193359
										C372.8759766,481.1894531,376.1591797,484.2089844,380.5458984,487.5400391z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M477.0048828,486.9472656
										c3.9091797-6.8369141,10.2255859-9.4902344,17.8623047-10.7431641c0.9023438,2.4726562,1.71875,4.7246094,2.5927734,7.1181641
										C490.4619141,484.5654297,483.7851562,485.7441406,477.0048828,486.9472656z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M377.8056641,492.4160156
										c0.5161133,2.9335938,1.4702148,5.8886719,1.3227539,8.7910156c-0.0551758,1.0253906-2.7866211,1.9179688-5.1870117,3.4326172
										c0.9355469-4.9619141,1.590332-8.4130859,2.2412109-11.8632812
										C376.7250977,492.65625,377.2646484,492.5361328,377.8056641,492.4160156z"/>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M481,504.203125
										c-2.1679688-1.0205078-5.1777344-1.7978516-5.1738281-2.5429688c0.03125-2.9609375,1.0117188-5.9150391,1.6376953-8.8681641
										c0.5136719,0.1132812,1.0263672,0.2353516,1.5400391,0.3554688C479.6005859,496.4462891,480.1962891,499.7441406,481,504.203125z"
										/>
								</g>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M107.1464844,558.3984375
									c-4.4750977-2.0253906-8.6435547-3.7539062-12.6708984-5.7705078c-8.6777344-4.3359375-11.5517578-10.2744141-9.8081055-19.8398438
									c0.2841797-1.5625,0.5654297-3.1318359,0.9736328-4.6660156c0.6699219-2.5068359-0.0493164-4.3457031-1.4150391-6.6865234
									c-5.1196289-8.7822266-6.3803711-19.0410156,0.1894531-28.3457031c2.6381836-3.7402344,5.9282227-7.1611328,9.4433594-10.1074219
									c4.7915039-4.0166016,7.3154297-8.7714844,6.9223633-14.9785156c-0.4770508-7.5605469-0.9306641-15.1269531-1.6577148-22.6640625
									c-0.8618164-8.9257812,1.9394531-16.3095703,6.597168-24.0644531
									c7.5058594-12.4970703,19.9970703-18.7158203,30.3984375-27.5664062c1.1977539-1.0195312,2.4199219-2.0078125,4.4716797-3.7089844
									c-5.8725586-4.4541016-11.0639648-9.0751953-16.9038086-12.6347656c-6.4130859-3.90625-9.9438477-9.0976562-10.831543-16.4291992
									c-0.159668-1.3168945-1.2641602-2.5244141-1.9521484-3.7685547c-1.4643555-2.6503906-3.9296875-5.1889648-4.2143555-7.956543
									c-0.6674805-6.465332-4.3930664-10.859375-8.715332-14.765625c-5.7080078-5.1567383-8.6450195-11.34375-9.0966797-18.8930664
									c-0.0717773-1.2163086-0.2612305-2.4379883-0.5317383-3.6254883c-2.097168-9.2270508-0.9584961-17.980957,3.9780273-26.0952148
									c3.7729492-6.1977539,4.1186523-12.7578125,2.0273438-19.4267578c-1.6743164-5.340332-3.7211914-10.5893555-5.9775391-15.7114258
									c-3.0068359-6.8354492-4.2387695-13.8022461-4.2348633-21.3227539c0.003418-7.7470703-1.5957031-15.4824219-2.1137695-23.2470703
									c-0.2636719-3.972168,0.4453125-7.9995117,0.4418945-12c-0.0029297-2.5991211-0.0986328-5.3208008-0.8608398-7.7651367
									c-1.0825195-3.4736328-3.0786133-6.6591797-4.2143555-10.1210938c-2.2875977-6.9672852-0.7602539-13.1171875,5.0693359-17.7749023
									c6.4008789-5.1108398,12.9560547-9.9926758,21.0371094-12.3300781c4.1474609-1.1992188,7.8017578-0.7719727,11.5673828,1.4511719
									c1.6376953,0.9692383,4.1318359,1.2880859,6.0219727,0.8891602c6.3862305-1.3535156,11.0756836,0.2695312,14.4702148,5.8105469
									c1.9677734,3.2128906,3.7045898,6.5683594,5.8725586,10.4462891c1.0600586-1.4453125,1.9360352-2.5039062,2.6577148-3.6625977
									c0.7729492-1.2387695,1.1054688-2.9140625,2.1435547-3.7973633c4.2441406-3.6142578,4.2094727-8.2978516,4.1904297-13.2880859
									c-0.1103516-30.0878906-0.0483398-60.1757812-0.0297852-90.2636719
									c0.0068359-9.6889648,3.2480469-12.8808594,13.0859375-12.8808594
									c176.1235352-0.0175781,352.2451172,0.0083008,528.3710938-0.1611328
									c7.5039062-0.0058594,12.6777344,4.5639648,12.6728516,12.8671875
									c-0.0976562,231.0375977-0.1210938,462.0800781,0.1201172,693.1201172
									c0.0078125,8.1796875-6.3330078,13.2402344-13.2998047,13.2333984
									c-69.5917969-0.0654297-139.1865234-0.0458984-208.78125,0.0214844c-9,0.0078125-17.1748047-3.2099609-25.4013672-6.109375
									c-44.0058594-15.5117188-87.9589844-31.1728516-131.9350586-46.7753906
									c-26.7041016-9.4736328-53.4086914-18.9443359-80.1220703-28.3925781
									c-43.1914062-15.2763672-86.3896484-30.5302734-129.5834961-45.796875
									c-12.0908203-4.2734375-24.1879883-8.5332031-36.2661133-12.8496094
									c-7.3569336-2.6298828-12.6860352-13.6796875-9.6899414-21.0039062c2.7104492-6.6230469,5.9970703-13.0273438,9.3217773-19.3789062
									c2.003418-3.8261719,5.6918945-5.4111328,9.8706055-6.2119141
									C97.4213867,571.7363281,103.4863281,566.7226562,107.1464844,558.3984375z M106.0205078,164.6347656
									c-2.4814453,1.7788086-4.4628906,3.2011719-6.4467773,4.6210938c-4.1245117,2.9506836-4.1489258,2.9628906-1.7866211,7.46875
									c2.9472656,5.6269531,5.4052734,11.5820312,3.6782227,17.8974609c-1.8583984,6.8032227-0.7587891,13.2456055,0.2412109,19.9086914
									c0.8256836,5.5068359,0.6298828,11.1630859,1.3022461,16.7041016c0.5043945,4.1733398,1.3144531,8.3842773,2.621582,12.3706055
									c1.8930664,5.7773438,4.9130859,11.2182617,6.4516602,17.0664062c2.4379883,9.2670898,4.4057617,19.0185547-0.5258789,27.9477539
									c-4.5668945,8.269043-6.1611328,16.512207-3.7749023,25.581543c0.0917969,0.3530273,0,0.7744141,0.1547852,1.0844727
									c0.9467773,1.8959961,1.5629883,4.1386719,2.984375,5.5786133c6.0449219,6.1293945,12.1743164,12.0722656,13.4331055,21.2646484
									c0.2124023,1.5493164,1.7885742,2.8686523,2.4833984,4.4086914c1.6298828,3.6142578,3.0913086,7.3051758,4.6533203,10.9506836
									c0.550293,1.2880859,0.8828125,2.8969727,1.855957,3.7260742c2.5942383,2.2143555,5.3203125,4.3681641,8.284668,6.0258789
									c6.609375,3.7001953,11.2666016,9.0898438,15.3393555,15.3701172c4.9384766,7.6132812,2.5712891,15.8994141-3.2700195,20.7294922
									c-6.7705078,5.5986328-13.6630859,11.1035156-20.9047852,16.0585938
									c-6.6357422,4.5429688-10.4936523,11.0917969-14.5161133,17.609375c-0.6396484,1.0371094-0.7270508,2.6005859-0.621582,3.8837891
									c0.5249023,6.3330078,1.3959961,12.6425781,1.7827148,18.9804688c0.7944336,13.0449219-0.6518555,25.4814453-10.9375,35.1025391
									c-2.0478516,1.9160156-4.2866211,3.6328125-6.2861328,5.5957031c-4.2866211,4.2070312-4.5576172,6.8662109-0.7973633,11.4121094
									c2.6806641,3.2402344,3.6914062,6.8525391,3.4174805,10.8828125c-0.2163086,3.1650391-0.3999023,6.3837891-1.1328125,9.4501953
									c-0.7299805,3.0605469,0.2954102,4.4775391,3.0473633,5.5556641c3.7490234,1.4658203,7.331543,3.3476562,11.0288086,4.9472656
									c8.9414062,3.875,9.7543945,11.7802734,7.980957,18.2226562c-3.8022461,13.7958984-12.0439453,23.8349609-25.8374023,28.1318359
									c-5.5947266,1.7431641-8.4853516,5.0126953-10.59375,9.8964844c-1.5791016,3.6611328-1.4526367,4.2460938,2.359375,5.59375
									c8.5214844,3.0146484,17.0571289,5.9921875,25.5795898,9.0068359
									c36.2817383,12.8291016,72.5668945,25.6474609,108.8378906,38.5048828
									c38.4541016,13.6337891,76.8837891,27.3349609,115.3432617,40.9560547
									c40.7568359,14.4384766,81.5664062,28.7333984,122.2802734,43.2929688
									c7.8164062,2.7958984,15.5771484,4.2382812,23.9384766,4.2167969
									c64.4570312-0.1757812,128.9130859-0.0605469,193.3720703-0.0380859c1.296875,0,2.5966797,0,3.9638672,0
									c0-227.2119141,0-453.9047852,0-680.7124023c-172.0058594,0-343.7807617,0-515.9370117,0c0,1.684082,0,3.1293945,0,4.5717773
									c-0.0087891,29.7241211-0.0371094,59.4443359-0.0053711,89.1650391c0.0039062,4.8813477-1.3549805,9.0693359-4.8901367,12.5908203
									c-1.5996094,1.5927734-2.9960938,3.5112305-4.0458984,5.5107422c-3.699707,7.0605469-16.8979492,13.2392578-24.5175781,11.0732422
									c-1.9189453-0.5449219-3.9033203-1.671875-5.2944336-3.0830078c-2.3779297-2.4179688-4.2651367-5.3120117-6.4614258-7.9189453
									c-0.6420898-0.7626953-1.7519531-1.8701172-2.4418945-1.7412109
									C115.2944336,171.2290039,110.3828125,168.9975586,106.0205078,164.6347656z"/>

									<rect x="171.7421875" y="96.8046875" fill-rule="evenodd" clip-rule="evenodd" fill="none" width="513.2626953" height="137.0634766"/>
								<text transform="matrix(1 0 0 1 194.8544922 160.6196289)"><tspan x="0" y="0" font-family="'Rockwell-Bold'" font-size="93.9859161">BECERRA  </tspan><tspan x="0.2280273" y="59.9160156" font-family="'Rockwell-Bold'" font-size="49.9300194">FAMILY REUNION</tspan></text>
							</g>
							</svg>

						</div><!-- .columns end -->

					</div><!-- .row end -->

				</div><!-- .site-branding -->

			</div><!-- .columns end -->

		</div><!-- .row end -->

	</header><!-- #masthead -->

	<div class="main-navigation">

		<div class="row"><!-- .row start -->

			<div class="medium-8 small-12 small-centered columns"><!-- .columns start -->

				<nav id="site-navigation" class="top-bar hide-for-small" data-topbar role="navigation">
					<section class="top-bar-section">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</section>
				</nav><!-- #site-navigation -->

			</div><!-- .columns end -->


		</div><!-- .row end -->

	</div><!-- .main-navigation -->

	<div id="content" class="site-content">
