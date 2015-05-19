<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}
function no_more_jumping($post) {  
  return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Далее'.'</a>';  
}  
add_filter('the_content_more_link', 'no_more_jumping'); 
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// pagination
function bazz_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span> ". __('Страницы: ', 'existentia') ." </span>\n<ul>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<li><a href='' class='active'>".$i."</a></li>":
				 "<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }
         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</ul>\n</div>\n";
     }
}
function slide() {
	print <<<HERE
		<div class="slide"> <!--Слайдер-->
			<div class="call-back-label label">
				<strong>ЗАКАЗАТЬ<br>ЗВОНОК</strong>
			</div>
			<div class="slide-phones">
				<ul>
					<li>МОСКВА<br><a href="tel:+74953747186">8 (495) 374-71-86</a></li>
					<li>САНКТ-ПЕТЕРБУРГ<br><a href="tel:+78126432047">8 (812) 643-20-47</a></li>
					<li>РОССИЯ<br><a href="tel:+78005005186">8 (800) 500-51-86</a></li>
				</ul>
			</div>
		</div>
HERE;
}
function perks() {
	print <<<HERE
		<div class="perks"> <!--Бонусы-->
			<ul>
				<li>Корректирует<br>фигуру и подтягивает<br>кожу</li>
				<li>Улучшает<br>кровообращение,<br>особенно в ногах</li>
				<li>Устраняет спазмы<br>и хр. боли позвоночника<br>и суставов</li>
				<li>Оказывает общий<br>оздоравливающий<br>эффект</li>
				<li>Является душем<br>Шарко в домашних<br>условиях</li>
			</ul>
		</div>
HERE;
}
function action_of_week() {
	print <<<HERE
		<div class="action-of-week"> <!--Акция недели-->
			<div class="action-of-week-label label">
				<strong>АКЦИЯ НЕДЕЛИ!</strong>
			</div>
			<span>
				Успейте приобрести душ Алексеева до конца этой недели и получите любую насадку
				стоимостью 1100руб., пять книг* о здоровье, бесплатную доставку и наше фирменное
				дополнение к заказу в подарок! <a href="#">Подробнее...</a>
			</span>
		</div>
HERE;
}