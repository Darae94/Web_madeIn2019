<?	
	include "../../../../common.php";
	
	$g5['title'] = "서브페이지제목"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //해당서브페이지 카테로그의 공통 상단을 연결합니다.

	echo '<link href="style.css" rel="stylesheet" type="text/css">'; //해당서브페이지 카테로그의 공통  css 를 연결합니다. 레이아웃은 한단계 위 css_js/common.css 에서 제어합니다.
?>
	
	<!-- 서브페이지 컨텐츠 내용 추가 -->

		<div id="contents_inner">
			<h2 id="sub_tit">클램프 소개</h2>
			
			<div id="clamp_about_li">
				<ul>
					<li class="notSelected" id="notSel_left">
						<a href="/clamp/theme/custom/html/about/about01.php">클램프</a>
					</li>
					
					<li class="selected">
						<a href="/clamp/theme/custom/html/about/about02.php">작품</a>
					</li>
				</ul>
			</div>
			
			<div class="sub_info">
				<div class="sub_info_box">
					<p class="sub_info_tit">BOOK</p>
					<div id="book_li">
						<ul>
							<li>
								<p class="book_img"><img src="/clamp/images/book1.png" alt="성전"></p>
								<p class="book_tit">성전</p>
								<p class="book_txt">(1989~1996)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book2.png" alt="20면상에게 부탁해!"></p>
								<p class="book_tit">20면상에게 부탁해!</p>
								<p class="book_txt">(1989~1991)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book3.png" alt="동경 바빌론"></p>
								<p class="book_tit">동경 바빌론</p>
								<p class="book_txt">(1990~1993)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book4.png" alt="학원특경 듀칼리온"></p>
								<p class="book_tit">학원특경 듀칼리온</p>
								<p class="book_txt">(1991~1993)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book5.png" alt="X"></p>
								<p class="book_tit">X</p>
								<p class="book_txt">(1992~)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book6.png" alt="CLAMP 학원탐정단"></p>
								<p class="book_tit">CLAMP 학원탐정단</p>
								<p class="book_txt">(1992~1993)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book7.png" alt="신 춘향전"></p>
								<p class="book_tit">신 춘향전</p>
								<p class="book_txt">(1992~1994)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book8.png" alt="백희초"></p>
								<p class="book_tit">백희초</p>
								<p class="book_txt">(1992~1992)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book9.png" alt="마법기사 레이어스1, 2"></p>
								<p class="book_tit">마법기사 레이어스1, 2</p>
								<p class="book_txt">(1993~1996)</p>
							</li>
							
							<li>
								<p class="book_img"><img src="/clamp/images/book10.png" alt="이상한 나라의 미유키"></p>
								<p class="book_tit">이상한 나라의 미유키</p>
								<p class="book_txt">(1993~1995)</p>
							</li>
						</ul>
					</div>
					
					<div id="book_more"><span><a href="#" title="작품 더보기">더보기</a></span></div>
				</div>
			</div>
		</div>
	
	
	

<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>