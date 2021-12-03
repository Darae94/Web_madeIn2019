<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
  
 */
?>

<?
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF']) && $title_view != "no"){ // if문을 수정하지 마십시오.
?>

<!--서브페이지 컨텐츠 영역 닫음 -->
	</div>
</section>

<?}?>

	<!-- footer 영역시작-->
	
	<footer id="footer_wrap">
		<div id="footer_inner">
			<h2 id="f_logo"><a href="#">
				<img src="/clamp/images/logo.png" alt="하단 로고">
			</a></h2>
			
			<h3 class="hidden">카피라이터</h3>
			<p id="copyright">COPYRIGHT 2019. Shin Darae. ALL RIGHT RESERVED.</p>
			
			<h3 class="hidden">하단메뉴</h3>
			<div id="f_menu">
				<ul>
					<li><a href="#" title="해당 페이지로 이동">이용방침</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">개인정보처리방침</a></li>
				</ul>
			</div>
			
		</div>
	</footer>	

	<!-- footer 영역끝-->



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>