<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
/*
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}
*/
include_once(G5_THEME_PATH.'/head.php');
?>
	<!-- 공지사항 팝업 -->
	<div id="popup_wrap">
		<div id="popup">
			<p id="popup_tit">포트폴리오 제작 중입니다.</p>
			<p id="popup_txt">
				사용된 이미지 및 콘텐츠의 저작권은 각 출처에 있습니다.<br/>
				상업적 목적으로 만들어지지 않았습니다.
			</p>
		</div>
	</div>


<div id="container"> <!-- #container 지우면 안됨 -->

		
	<!-- 메인비쥬얼 영역 시작-->		
		
	<div id="visual_wrap">
		<div id="visual_bg_wrap">
			<ul id="visual_bg">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		
		<div class="swiper-container">
		    <div class="swiper-wrapper">
			    <div class="swiper-slide"></div>
			    <div class="swiper-slide"></div>
			    <div class="swiper-slide"></div>
			    <div class="swiper-slide"></div>
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination"></div>
		</div>
		
		<div id="visual_inner">
			<h2 class="hidden">비주얼 문구</h2>
			<div id="visual_tbox">
				<p id="visual_tit">국내 최초 CLAMP 소개 홈페이지</p>
				<p id="visual_sub">함께 정보를 <span>공유</span>해봐요</p>
			</div>
			
			<h2 class="hidden">비주얼 리스트</h2>
			<div id="visual_li"><ul>
				<li>
					<p class="visual_img"><img src="/clamp/images/holic_icon01.png" alt="XXX홀릭 아이콘"></p>
					<p class="visual_tit">XXX홀릭</p>
					<div class="visual_btn">
						<span><a href="#" title="해당 메뉴로 이동">자세히<span> 보기</span></a></span>
					</div>
				</li>
				
				<li>
					<p class="visual_img"><img src="/clamp/images/sakura_icon01.png" alt="카드캡터 사쿠라 아이콘"></p>
					<p class="visual_tit">카드캡터 사쿠라</p>
					<div class="visual_btn">
						<span><a href="#" title="해당 메뉴로 이동">자세히<span> 보기</span></a></span>
					</div>
				</li>
				
				<li>
					<p class="visual_img"><img src="/clamp/images/tsubasa_icon01.png" alt="츠바사 크로니클 아이콘"></p>
					<p class="visual_tit">츠바사 크로니클</p>
					<div class="visual_btn">
						<span><a href="#" title="해당 메뉴로 이동">자세히<span> 보기</span></a></span>
					</div>
				</li>
			</ul></div>
		</div>
		
		<div id="visual_bgBtn">
			<div id="prev_btn">&lt;</div>
			<div id="next_btn">&gt;</div>
		</div>
		
	</div>
			
	<!-- 메인비쥬얼 영역 끝-->			
		
		
		
		
		
		
		
	<!-- 컨텐츠영역 시작  -->		
		
	<!--clamp-->
	<div id="clamp_wrap">
		<div id="clamp_inner">
			<h2 class="content_tit">CLAMP INTRODUCE</h2>
			<h3 class="content_sub">클램프 알아보기</h3>
			<div id="clamp_menu">
				<ul>
					<li><a class="selected">작가</a></li>
					<li><a>작품</a></li>
				</ul>
			</div>
			<div class="clamp_li">
				<h3 class="hidden">작가 목록</h3>
				<ul id="clamp_list01">
					<li><a href="#" title="해당 페이지로 이동">
						<p class="li_imgbox">
							<img class="li_img_100" src="/clamp/images/member01.png" alt="작가멤버01" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">이가라시 사츠키</p>
							<p class="li_cl_sub">2월 8일생</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="li_imgbox">
							<img class="li_img_100" src="/clamp/images/member02.png" alt="작가멤버02" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">오오카와 아게하</p>
							<p class="li_cl_sub">5월 2일생</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="li_imgbox">
							<img class="li_img_100" src="/clamp/images/member03.png" alt="작가멤버03" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">네코이 츠바키</p>
							<p class="li_cl_sub">1월 21일생</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="li_imgbox">
							<img class="li_img_100" src="/clamp/images/member04.png" alt="작가멤버04" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">모코나</p>
							<p class="li_cl_sub">6월 16일생</p>
						</div>
					</a></li>
				</ul>
				<h3 class="hidden">작픔 목록</h3>
				<ul id="clamp_list02">
					<li><a href="#" title="해당 페이지로 이동">
						<p class="c_li_imgbox">
							<img class="li_img_70" src="/clamp/images/book1.png" alt="작품01" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">성전</p>
							<p class="li_cl_sub">(1989~1996)</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="c_li_imgbox">
							<img class="li_img_70" src="/clamp/images/book2.png" alt="작품2" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">20면상에게 부탁해!</p>
							<p class="li_cl_sub">(1989~1991)</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="c_li_imgbox">
							<img class="li_img_70" src="/clamp/images/book3.png" alt="작품03" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">동경 바빌론</p>
							<p class="li_cl_sub">(1990~1993)</p>
						</div>
					</a></li>
					
					<li><a href="#" title="해당 페이지로 이동">
						<p class="c_li_imgbox">
							<img class="li_img_70" src="/clamp/images/book4.png" alt="작품04" />
						</p>
						<div class="clamp_li_tbox">
							<p class="li_cl_tit">특경 듀칼리온</p>
							<p class="li_cl_sub">(1991~1993)</p>
						</div>
					</a></li>
				</ul>
			</div>
			<div class="more_btn">
				<a href="#" title="해당 페이지로 이동">더보기</a>
			</div>
		</div>
	</div>
	
	<!--sakura-->
	<div id="sakura_wrap">
		<div id="sakura_inner">
			<h2 class="content_tit">카드캡터 사쿠라</h2>
			<h3 class="content_sub">등장인물</h3>
			<div id="sakura_li">
				<ul>
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_01.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">키노모토 사쿠라</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_02.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">케로베로스</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_03.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">리 샤오랑</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_04.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">츠키시로 유키토</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_05.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">다이도우지 토모요</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_06.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">키노모토 토우야</a>
						</p>
					</li>
					
					<li>
						<p class="sa_li_imgbox">
							<a href="#" title="해당 페이지로 이동">
								<img class="li_img_90" src="/clamp/images/sakura_toon_07.png" alt="작품04" />
							</a>
							<a href="#" title="해당 페이지로 이동">리 메이링</a>
						</p>
					</li>
				</ul>
			</div>
			<div class="more_btn">
				<a href="#" title="해당 페이지로 이동">더보기</a>
			</div>
		</div>
	</div>
	
	<!--tsubasa-->
	<div id="tsubasa_wrap">
		<div id="tsubasa_inner">
			<h2 class="content_tit">츠바사 크로니클</h2>
			<div class="content_sub">알아보기</div>
			<div id="tsubasa_box">
				<div id="tsubasa_gal">
					<h3 class="hidden">갤러리</h3>
					<ul class="tsubasa_img">
						<li><img src="/clamp/images/tsubasa_img_01.png" alt="츠바사 갤러리 01"></li>
						
						<li><img src="/clamp/images/tsubasa_img_02.png" alt="츠바사 갤러리 02"></li>
					
						<li><img src="/clamp/images/tsubasa_img_03.png" alt="츠바사 갤러리 03"></li>
					
						<li><img src="/clamp/images/tsubasa_img_04.png" alt="츠바사 갤러리 04"></li>
					</ul>
					
					<div id="slide_li">
						<ul>
							<li class="selectImg"></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</div>
					
					<div id="more_btn">
						<a href="" title="해당 페이지로 이동하기">갤러리 더보기</a>
					</div>
				</div>
				
				<div class="tsubasa_box">
					<h3 class="li_tsu_tit">등장인물</h3>
					
					<div class="tsu_more_btn">
						<a href="#" title="해당 페이지로 이동">더보기</a>
					</div>
					
					<div id="tsubasa_li">
						<ul>
							<li><a href="#" title="해당페이지로 이동하기">
								<img src="/clamp/images/tsubasa_toon_01.png" alt="등장인물01">
							</a></li>
							
							<li><a href="#" title="해당페이지로 이동하기">
								<img src="/clamp/images/tsubasa_toon_02.png" alt="등장인물02">
							</a></li>
							
							<li><a href="#" title="해당페이지로 이동하기">
								<img src="/clamp/images/tsubasa_toon_03.png" alt="등장인물03">
							</a></li>
							
							<li><a href="#" title="해당페이지로 이동하기">
								<img src="/clamp/images/tsubasa_toon_04.png" alt="등장인물04">
							</a></li>
								
							<li><a href="#" title="해당페이지로 이동하기">
								<img src="/clamp/images/tsubasa_toon_05.png" alt="등장인물05">
							</a></li>
						</ul>
					</div>
				</div>
					
				<div class="tsubasa_box" id="tsubasa_tbox">
					<h3 class="li_tsu_tit">줄거리</h3>
					
					<div class="tsu_more_btn">
						<a href="#" title="해당 페이지로 이동">더보기</a>
					</div>
					
					<p id="tsubasa_txt">
						&nbsp; 고고학자를 꿈꾸는 소년 샤오랑과 크로우 국의 공주 사쿠라는 소꿉 친구. 두 사람은 서로 끌리고 있지만,
						어느 쪽도 그 생각을 말하지 못하고 있다. 어느 날 밤 사쿠라는 그녀의 힘을 손에 넣으려고 하는 페이왕의
						음모에 의해 모든 기억을 잃고...
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<!--holic-->
	<div id="holic_wrap">
		<div id="holic_inner">
			<h2 class="content_tit" id="white">XXX홀릭</h2>
			<div class="content_sub">갤러리</div>
			
			<div class="more_btn">
				<a href="#" title="해당 페이지로 이동">더보기</a>
			</div>
		</div>
	</div>
	
	<!--community-->
	<div id="community_wrap">
		<div id="community_inner">
			<h2 class="content_tit">커뮤니티</h2>
			<div class="content_sub">최신 갤러리와 소통창</div>
			
			<div id="gallery">
				<h3 class="hidden">최신 갤러리</h3>
				
				<?
				
					echo latest("theme/pic_product", "gallery", 4, 8);
				
				?>
				
			</div>
		
			<div id="community_table">
				<h3 class="hidden">최신 소통창</h3>
				
				<?
				
					echo latest("basic", "free", 8, 25);
				
				?>
				

		</div>
	</div>
		
	<!-- 컨텐츠영역 끝  -->	
		

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>