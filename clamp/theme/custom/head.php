<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}
 */

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

	<!-- 상단 영역 시작-->
	<header id="header_wrap">
		<div id="header_inner">
			<h1 id="logo"><a href="/clamp" title="홈페이지로 이동"><img src="/clamp/images/logo.png" alt="로고"/></a></h1>
			
			<nav id="GNB">
				<h2 class="hidden">GNB메뉴</h2>
				<ul id="mainMenu">
					<li>
						<a href="/clamp/theme/custom/html/about/about01.php" title="해당 메뉴로 이동">클램프 소개</a>
					</li>
					
					<li>
						<a href="/clamp/theme/custom/html/sakura/sakura01.php" title="해당 메뉴로 이동">카드캡터 사쿠라</a>
					</li>
					
					<li>
						<a href="/clamp/theme/custom/html/tsubasa/tsubasa01.php" title="해당 메뉴로 이동">츠바사 크로니클</a>
					</li>
					
					<li>
						<a href="/clamp/theme/custom/html/holic/holic01.php" title="해당 메뉴로 이동">XXXHOLIC</a>
					</li>
					
					<li>
						<a href="/clamp/bbs/board.php?bo_table=free" title="해당 메뉴로 이동">커뮤니티</a>
					</li>
				</ul>
						
				<ul class="subMenu">
					<li>
						<p class="subMenu_tit"><span>클램프 소개</span>클램프에 대해 알아보세요</p>
						<p class="subMenu_01"><a href="/clamp/theme/custom/html/about/about01.php" title="해당 메뉴로 이동">작가</a></p>
						<p class="subMenu_02"><a href="/clamp/theme/custom/html/about/about02.php" title="해당 메뉴로 이동">작품</a></p>
					</li>
					
					<li>
						<p class="subMenu_tit"><span>카드캡터 사쿠라</span>만화를 알아보세요</p>
						<p class="subMenu_01"><a href="/clamp/theme/custom/html/sakura/sakura01.php" title="해당 메뉴로 이동">정보</a></p>
						<p class="subMenu_02"><a href="/clamp/theme/custom/html/sakura/sakura01.php" title="해당 메뉴로 이동">갤러리</a></p>
					</li>
	
					<li>
						<p class="subMenu_tit"><span>츠바사 크로니클</span>만화를 알아보세요</p>
						<p class="subMenu_01"><a href="/clamp/theme/custom/html/tsubasa/tsubasa01.php" title="해당 메뉴로 이동">정보</a></p>
						<p class="subMenu_02"><a href="/clamp/theme/custom/html/tsubasa/tsubasa01.php" title="해당 메뉴로 이동">갤러리</a></p>
					</li>
				
					<li>
						<p class="subMenu_tit"><span>XXXHOLIC</span>만화를 알아보세요</p>
						<p class="subMenu_01"><a href="/clamp/theme/custom/html/holic/holic01.php" title="해당 메뉴로 이동">정보</a></p>
						<p class="subMenu_02"><a href="/clamp/theme/custom/html/holic/holic01.php" title="해당 메뉴로 이동">갤러리</a></p>
					</li>
				
					<li>
						<p class="subMenu_tit"><span>커뮤니티</span>정보와 사진을 공유하세요</p>
						<p class="subMenu_01"><a href="/clamp/bbs/board.php?bo_table=free" title="해당 메뉴로 이동">소통창</a></p>
						<p class="subMenu_02"><a href="/clamp/bbs/board.php?bo_table=gallery" title="해당 메뉴로 이동">갤러리</a></p>
					</li>
				</ul>
			</nav>
			
			<nav id="menu_li">
				<h3 class="hidden">회원메뉴</h3>
				<ul>
					<?php if ($is_member) {  ?>
					
					<li><a href="<?php echo G5_BBS_URL ?>/logout.php"> 로그아웃</a></li>
					
					<?php if ($is_admin) {  ?>
					
					<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"> 관리자</a></li>
					
					<?php } else {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"> 마이페이지</a></li>
					<?php }  ?>
					<?php } else {  ?>
					<li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
					<li><a href="<?php echo G5_BBS_URL ?>/register.php"> 회원가입</a></li>
					
					<?php }  ?>
				
				</ul>
			</nav>
			
		</div>
		
		<div id="subMenu_wrap">
			
		</div>
		
		<div id="ham_menu">
			<h2 class="hidden">햄버거메뉴</h2>
			<button>
				<span>
					
				</span>
			</button>
		</div>
		
		<div id="ham_wrap">
			<div id="ham_open">
				<nav id="ham_list">
					<ul>
						<li>
							<p>클램프 소개</p>
							<ul class="ham_sub_list">
								<li><a href="/clamp/theme/custom/html/about/about01.php" title="해당 메뉴로 이동">작가</a></li>
								<li><a href="/clamp/theme/custom/html/about/about02.php" title="해당 메뉴로 이동">작품</a></li>
							</ul>
						</li>
						
						<li>
							<p>카드캡터 사쿠라</p>
							<ul class="ham_sub_list">
								<li><a href="/clamp/theme/custom/html/sakura/sakura01.php" title="해당 메뉴로 이동">정보</a></li>
								<li><a href="/clamp/theme/custom/html/sakura/sakura01.php" title="해당 메뉴로 이동">갤러리</a></li>
							</ul>
						</li>
						
						<li>
							<p>츠바사 크로니클</p>
							<ul class="ham_sub_list">
								<li><a href="/clamp/theme/custom/html/tsubasa/tsubasa01.php" title="해당 메뉴로 이동">정보</a></li>
								<li><a href="/clamp/theme/custom/html/tsubasa/tsubasa01.php" title="해당 메뉴로 이동">갤러리</a></li>
							</ul>
						</li>
						
						<li>
							<p>XXXHOLIC</p>
							<ul class="ham_sub_list">
								<li><a href="/clamp/theme/custom/html/holic/holic01.php" title="해당 메뉴로 이동">정보</a></li>
								<li><a href="/clamp/theme/custom/html/holic/holic01.php" title="해당 메뉴로 이동">갤러리</a></li>
							</ul>
						</li>
						
						<li>
							<p>커뮤니티</p>
							<ul class="ham_sub_list">
								<li><a href="/clamp/bbs/board.php?bo_table=free" title="해당 메뉴로 이동">소통창</a></li>
								<li><a href="/clamp/bbs/board.php?bo_table=gallery" title="해당 메뉴로 이동">갤러리</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				
				<div id="ham_util">
					<ul>
						<?php if ($is_member) {  ?>
					
						<li><a href="<?php echo G5_BBS_URL ?>/logout.php"> 로그아웃</a></li>
						
						<?php if ($is_admin) {  ?>
						
						<li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"> 관리자</a></li>
						
						<?php } else {  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"> 마이페이지</a></li>
						<?php }  ?>
						<?php } else {  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/register.php"> 회원가입</a></li>
						
						<?php }  ?>
					</ul>
				</div>
				
				<h2 id="ham_logo"><a href="/clamp/index.php">
					<img src="/clamp/images/logo.png" alt="하단 로고">
				</a></h2>
				
				<h3 class="hidden">카피라이터</h3>
				<p id="ham_copyright">COPYRIGHT 2019. Shin Darae. ALL RIGHT RESERVED.</p>
				
			</div>
		</div>
	</header>
	<!-- 상단 영역 끝-->




	<?

		/*
			서브 컨텐츠 페이지를 제외한  게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결
		    ( 각 서브 컨텐츠 페이지 상단은 해당카테고리폴더 header.php 에서 각각 설정)			

		*/

		if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			//faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}
			
			
	?>



		<section id="sub_visual">
			
					
		</section>



		<section id="sub_wrapper">			

			<div class="scontents">


	<?}?>