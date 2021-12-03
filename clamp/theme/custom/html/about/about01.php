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
					<li class="selected">
						<a href="/clamp/theme/custom/html/about/about01.php">클램프</a>
					</li>
					
					<li class="notSelected" id="notSel_right">
						<a href="/clamp/theme/custom/html/about/about02.php">작품</a>
					</li>
				</ul>
			</div>
			
			<div class="sub_info">
				<div class="sub_info_box">
					<p class="sub_info_tit">CLAMP</p>
					<p class="sub_info_txt">
						&nbsp;1987년, 오사카에 근거를 둔 11명의 동인 작가의 모임이 클램프의 최초의 출발점이였고 철저한 아마추어 집단이었습니다.
						실질적인 시작점은 1989년. 창단 멤버 중 4명이 탈퇴, 남은 7명이 도쿄로 상경해 클램프라는 이름을 내걸고 사무소를 엽니다.
						이 후에 마지막으로 3명의 멤버가 더 탈퇴하여, 지금의 구성원이 남게 되어 현재 4명의 여성으로 구성된 창작 집단입니다.
						1989년 성전이라는 만화로 데뷔하여 동경바빌론, 마법기사 레이어스, 카드캡터 사쿠라, 쵸비츠 등 소녀잡지, 소년 잡지, 
						청소년 잡지와 폭 넓은 분야에서 수많은 히트 작품을 발표했습니다.<br/>
						&nbsp;해외에서 인기가 매우 높고, 미국, 프랑스, 중국, 대만 , 한국을 비롯한 세계 20개국에서 출판되고 있습니다.
					</p>
					<p class="sub_info_tit">MEMBER</p>
					<div id="clamp_sub_info">
						<ul>
							<li>
								<div class="sub_ibox"><img src="/clamp/images/member01.png" alt="이가라시 사츠키" /></div>
								
								<div class="sub_tbox">
									<p>
										<span>이가라시 사츠키<br/>(いがらし寒月)</span><br/>
										2월 8일생<br/>
										A형<br/>
										프로덕션 코디네이터<br/>
										작화, 디자인 보조<br/>
									</p>
								</div>
							</li>
							
							<li>
								<div class="sub_ibox"><img src="/clamp/images/member02.png" alt="오오카와 아게하" /></div>
								
								<div class="sub_tbox">
									<p>
										<span>오오카와 아게하<br/>(大川緋芭)</span><br/>
										5월 2일생<br/>
										A형<br/>
										동경대 출신<br/>
										팀의 총감독<br/>
										대본과 표지 디자인<br/>
										판매계획 담당<br/>
									</p>
								</div>
							</li>
							
							<li>
								<div class="sub_ibox"><img src="/clamp/images/member03.png" alt="네코이 츠바키" /></div>
								
								<div class="sub_tbox">
									<p>
										<span>네코이 츠바키<br/>(猫井椿)</span><br/>
										1월 21일생<br/>
										O형<br/>
										작화감독 겸 조감독<br/>
										톤 작업 담당<br/>
									</p>
								</div>
							</li>
							
							<li>
								<div class="sub_ibox"><img src="/clamp/images/member04.png" alt="모코나" /></div>
								
								<div class="sub_tbox">
									<p>
										<span>모코나<br/>(もこな)</span><br/>
										6월 16일생<br/>
										A형<br/>
										캐릭터와 배경<br/>
										페이지 레이아웃 담당<br/>
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
	
	
	
	
	
	
	
	

<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>