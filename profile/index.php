<? include_once $_SERVER["DOCUMENT_ROOT"]."/profile/inc/start.html" ?>
	
</head>

<body>

	<!-- 포트폴리오 공지 -->
	<div id="popup_wrap">
		<div id="popup">
			<p id="popup_tit">1200px 이상에 최적화 되어 있습니다</p>
			<p id="popup_txt">
				반응형 홈페이지는 별도로 제작되어 있습니다.<br/>
				상업적 목적이 아닌 포트폴리오 목적으로 만들어졌습니다.
			</p>
		</div>
	</div>
	
	<!-- 스킵메뉴-->
	<ul id="skip">
		<li><a href="#main_menu" title="상단 바로가기">상단 바로가기</a></li>
		<li><a href="#visual_tit" title="본문 바로가기">본문 바로가기</a></li>
		<li><a href="#footer_inner" title="하단 바로가기">하단 바로가기</a></li>
	</ul>
	
	<!-- 상단 영역 시작 -->
	<header id="header_wrap">
		<nav id="header_inner">
			<h2 class="hidden">메인메뉴</h2>
			<ul id="main_menu">
				<li class="select_menu"><a href="#" title="해당 위치로 이동하기">Home</a></li>
				<li><a href="#" title="해당 위치로 이동하기">About</a></li>
				<li><a href="#" title="해당 위치로 이동하기">ui/ux</a></li>
				<li><a href="#" title="해당 위치로 이동하기">Skill</a></li>
				<li><a href="#" title="해당 위치로 이동하기">Logo</a></li>
				<li><a href="#" title="해당 위치로 이동하기">Frame</a></li>
				<li><a href="#" title="해당 위치로 이동하기">Aptana</a></li>
				<li><a href="#" title="해당 위치로 이동하기">Site</a></li>
			</ul>
		</nav>
	</header>
	<!-- 상단 영역 끝 -->
	
	<!-- 비주얼 영역 시작 -->
	<div id="visual_wrap">
		<div id="visual_inner">
			<div id="visual_tbox">
				<h2 id="visual_tit">물음표 같은<br/><span>신다래</span> 입니다</h2>
				<h3 id="visual_sub_tit">저는 웹퍼블리셔입니다</h3>
				<p id="visual_txt">
					물음표 같이 제가 하는 업무와 새로운 것에 대한 궁금증을 끊임없이 가지고 배우는 사람입니다.
					어떤 일을 하게 되어도 주어진 일을 스스로 이해하고 모르는 부분에 대해 배우는 즐거움을 아는 사람입니다.
					언제나 할 수 있는 일을 먼저 찾아서 하고 할 수 없는일은 배워서 할 수 있게 하겠습니다. 
				</p>
				<p id="visual_btn"><a href="http://sdr9402.dothome.co.kr/clamp/" title="클램프 홈페이지로 이동하기" target="_blank">반응형 포트폴리오 바로가기</a></p>
			</div>
			
			<div id="visual_ibox">
				<div id="visual_bg01">
					<!-- 물음표 -->
				</div>
				<div id="visual_bg02">
					<!-- 느낌표 -->
				</div>
					
				<div id="visual_img">
					<ul>
						<li>
							<!-- 표로필 사진 01 -->
						</li>
						<li>
							<!-- 표로필 사진 02 -->
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- 비주얼 영역 끝 -->
	
	<!-- 자기 소개 영역 시작 -->
	<div id="about_wrap">
		<div id="about_inner">
			<section id="about_tbox">
				<h2 id="about_tit">ABOUT ME</h2>
				<h3 class="hidden">자기소개</h3>
				<table id="me_list">
					<!-- <tr>
						<th>나 &nbsp; &nbsp; &nbsp; 이 :</th>
						<td>만 26살 (94년생)</td>
						<th>모&nbsp;&nbsp; 바&nbsp;&nbsp; 일 :</th>
						<td>010-2932-9402</td>
					</tr> -->
					
					<tr>
						<!-- <th>거&nbsp; 주&nbsp; 지 :</th>
						<td>서울특별시 서대문구 연희동</td> -->
						<th>이&nbsp; 메&nbsp; 일 :</th>
						<td class="noto">dnfldnfqh12@naver.com</td>
					</tr>
					
					<tr>
						<th class="point_color">웹 사 이 트 :</th>
						<td class="point_color"><a href="/clamp" title="클램프 홈페이지 바로가기" class="noto">sdr9402.dothome.co.kr/clamp</a></td>
					</tr>
				</table>
				
				<h3 class="hidden">교육정보</h3>
				<table id="edu_list">
					<caption>My Education</caption>
					<tr>
						<td class="date">2010. 03 ~ 2013. 02</td>
						<td class="inst">은평 메디텍 고등학교</td>
						<td class="major">의료정보시스템과</td>
						<td class="state">졸업</td>
					</tr>
					
					<tr>
						<td class="date">2015. 03 ~ 2019. 02</td>
						<td class="inst">남서울 대학교</td>
						<td class="major">보건행정학과</td>
						<td class="state">졸업</td>
					</tr>
					
					<tr>
						<td class="date">2019. 01 ~ 2019. 07</td>
						<td class="inst">그린 컴퓨터 아카데미</td>
						<td class="major">웹디자인 웹퍼블리셔 전문가 과정</td>
						<td class="state">수료</td>
					</tr>
				</table>
				
				<h3 class="hidden">경력정보</h3>
				<table id="work_list">
					<caption>Work Experience</caption>
					<tr>
						<td class="date">2012. 08 ~ 2013. 11</td>
						<td class="company">바모스코리아</td>
						<td class="job">경리 및 단순 사무</td>
						<td class="grade">사원</td>
					</tr>
					
					<tr>
						<td class="date">2013. 12 ~ 2015. 01</td>
						<td class="company">제이앤피코프</td>
						<td class="job">임원비서 및 경리</td>
						<td class="grade">파견직원</td>
					</tr>
					
					<tr>
						<td class="date">2019. 07 ~ 2020. 07</td>
						<td class="company">(주)바른웹</td>
						<td class="job">홈페이지 및 모바일 제작(그누보드 사용)</td>
						<td class="grade">직원(디자인팀)</td>
					</tr>
				</table>
				
				<!--<div-- id="me_btn">
					<a href="#" title="해당 페이지로 이동하기">HEAR ME</a>
				</div-->
				
				<h3 class="hidden">소셜목록</h3>
				<div id="social_icon">
					<ul>
						<li>
							<a>
								<!-- 페이스북 -->
							</a>
						</li>
						
						<li>
							<a>
								<!-- 트위터 -->
							</a>
						</li>
						
						<li>
							<a>
								<!-- 구글+  -->
							</a>
						</li>
						
						<li>
							<a>
								<!-- insta -->
							</a>
						</li>
					</ul>
				</div>
			</section>
			
			<section id="about_ibox">
				<div id="about_img">
					<img src="/profile/images/profile_img02.jpg" alt="프로필 사진" />
				</div>
				
				<div id="about_btn">
					<a href="https://www.jobkorea.co.kr/User/Resume/View?rNo=16314135" title="해당 위치로 이동하기">이력서 다운로드</a>
				</div>
			</section>
		</div>
	</div>
	<!-- 자기 소개 영역 끝 -->
	
	<!-- uiux 영역 시작 -->
	<div id="think_wrap">
		<div id="think_inner">
			<h2 id="think_tit" class="content_tit">THINK OF UI/UX</h2>
			
			<p id="think_sub_tit" class="content_sub_tit">
				제가 이해한 <span class="noto">UI/UX</span> 개념과<br/>좋은 <span class="noto">UI/UX</span>가 무엇인지에 대한 생각을 확인할 수 있습니다.
			</p>
			
			<section id="think_box">
				<h3 class="hidden">ui 개념</h3>
				<div id="ui">
					<p class="uiux_tit">UI ( User Interface )</p>
					
					<p class="uiux_txt">
						사용자와 시스템의 의사소통을 목적으로<br/>가시화된 모든 매개체
					</p>
				</div>
				
				<h3 class="hidden">ux 개념</h3>
				<div id="ux">
					<p class="uiux_tit">UX ( User Experience )</p>
					
					<p class="uiux_txt">
						사용자가 시스템이나 제품, 서비스 등을 사용하며<br/> 기능, 이해, 편리성 등에 따른 사용자가 느끼는 총체적인 경험
					</p>
				</div>
				
				<h3 class="hidden">좋은 ui/ux에 대한 생각</h3>
				<div id="think">
					<p class="uiux_txt">
						&nbsp;모바일 중심인 요즘, UI/UX 는 사용자들의 사용성을 중점으로 하여 디자인하는 것이기 때문에 어느 분야에서도 중요하지 않을 수 없다고 생각합니다.
						사용하는 매체의 사이즈에 상관없이 시스템을 사용하는 데에 불편함이 없어야 하므로 심플하게 정확한 전달을 할 수 있도록 해야 한다.
						여러 방면에서 생각하여 UI를 제작해야 하므로 그에 따른 사용자들의 다양한 의견을 받아 문제를 개선해 가도록 노력해야 한다고 생각합니다.<br/>
						&nbsp;앞으로 제가 디자인한 UI/UX 제품은 사용하는데 불편함이 없고 다시 사용하게 될 때도 걱정없이 사용할 수 있게 하고 싶습니다.
					</p>
				</div>
			</section>
		</div>
	</div>
	<!-- uiux 영역 끝 -->
	
	<!-- 스킬 영역 시작 -->
	<div id="skill_wrap">
		<div id="skill_inner">
			<h2 id="skill_tit" class="content_tit">MY SKILLS</h2>
			
			<p id="skill_sub_tit" class="content_sub_tit">
				의사소통, 적응성 등의 개인적 기술과 HTML5, CSS3.0, jQuery 등의 업무적 기술을<br/>어떻게 얼마나 활용할 수 있는지 확인할 수 있습니다.
			</p>
			
			<section class="skill_li" id="personal_li">
				<h3 class="skill">개인적 기술</h3>
			
				<ul class="skill_list">
					<li>
						<p class="skill_name">의사소통</p>
						<p class="skill_percent">90%</p>
						<p class="skill_text">
							경청하는 자세로 원하는 니즈를 파악하기 위해 노력<br/>여러 상황에 따른 신속한 대처 가능
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">적응성</p>
						<p class="skill_percent">85%</p>
						<p class="skill_text">
							새로운 환경에 대한 호기심과 의욕을 갖고 접근<br>새로운 환경에 빠르게 적응하기 위해 노력
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">심플함</p>
						<p class="skill_percent">90%</p>
						<p class="skill_text">
							심플하고 깔끔한 디자인 추구<br>직설적이고 단순하게 표현
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">창의성</p>
						<p class="skill_percent">70%</p>
						<p class="skill_text">
							일반적이지 않은 방면으로 생각<br/>해결되지 않는 부분을 여러 방법으로 시도
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
				</ul>
			</section>
			
			<section class="skill_li" id="soft_li">
				<h3 class="skill">업무적 기술</h3>
			
				<ul class="skill_list">
					<li>
						<p class="skill_name">HTML5 / CSS3.0</p>
						<p class="skill_percent">90%</p>
						<p class="skill_text">
							한국형 웹접근성 지침(KWCAG 2.1)을 준수한 기본 마크업과 레이아웃 구성<br/>어떤 사용자가 사용하더라도 불편함이 없도록 구성
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">Java Script / jQuery</p>
						<p class="skill_percent">90%</p>
						<p class="skill_text">
							javascript 기본 문법(core) / jQuery Dom 하드코딩 제작<br/>(2Depth animation을 활용한 네비게이션, Button형, Dot형 반응형 비주얼 슬라이드)
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">JQuery_mobile / media query</p>
						<p class="skill_percent">80%</p>
						<p class="skill_text">
							jQuery Mobile Frame Work를 활용한 모바일 전용 웹앱 제작<br/>	media query 를 이용한 반응형 웹페이지 하드코딩 제작
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
					
					<li>
						<p class="skill_name">Photoshop CS6</p>
						<p class="skill_percent">70%</p>
						<p class="skill_text">
							사진 보정 및 합성 가능<br/>시안 제작 가능
						</p>
						<p class="skill_bar"> </p>
						<span class="skill_bar_real"> </span>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<!-- 스킬 영역 끝 -->
	
	<!-- 로고 영역 시작 -->
	<div id="logo_wrap">
		<div id="logo_inner">
			<h2 id="logo_tit" class="content_tit">LOGO DESIGN</h2>
			
			<p id="logo_sub_tit" class="content_sub_tit">
				작가의 세계관 안에서 여러 만화가 함께 있다는 것을 각 애니의 아이콘으로 상징해주면서<br/>커뮤니티가 원활할 수 있는 편안한 느낌의 색상을 사용하여 로고를 완성하였습니다.
			</p>
			
			<section id="logo_li">
				<ul>
					<li>
						<div class="logo_tbox">
							<p class="logo_li_tit">아이디어 스케치</p>
							
							<p class="logo_li_txt">
								<span>로고에서 </span>세계관이 겹치는 것을<br/><span>각각의 </span>애니메이션 상징으로 표현
							</p>
						</div>
						
						<div class="logo_ibox">
							<img src="/profile/images/idea.png" alt="아이디어 스케치" />
						</div>
					</li>
					
					<li>
						<div class="logo_tbox">
							<p class="logo_li_tit">로고 아이콘</p>
							
							<p class="logo_li_txt">
								각 애니메이션 아이콘에<br/>각자의 상징적 색상 표현
							</p>
						</div>
						
						<div class="logo_ibox">
							<img src="/profile/images/toon_icon.png" alt="각 만화의 아이콘" />
						</div>
					</li>
					
					<li>
						<div class="logo_tbox">
							<p class="logo_li_tit">로고 색</p>
							
							<p class="logo_li_txt">
								<span>소개 및 </span>커뮤니티 홈페이지라서<br/>편안한 느낌의 갈색 계열 색상
							</p>
						</div>
						
						<div class="logo_ibox">
							<img src="/profile/images/color.png" alt="#A87B4F, #E0D5C6 이미지" />
						</div>
					</li>
					
					<li>
						<div class="logo_tbox">
							<p class="logo_li_tit">완성된 로고 디자인</p>
							
							<p class="logo_li_txt">
								아이디어 스케치를 참고하여<br/>로고 아이콘과 색상을 결정
							</p>
						</div>
						
						<div class="logo_ibox">
							<img src="/profile/images/logo.png" alt="클램프 로고" />
						</div>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<!-- 로고 영역 끝 -->
	
	<!-- 프레임 영역 시작 -->
	<div id="frame_wrap">
		<div id="frame_inner">
			<h2 id="frame_tit" class="content_tit">WIRE FRAME</h2>
			
			<h3 id="frame_sub_tit" class="content_sub_tit">
				종이와 포토샵을 이용하여 사용자의 사용성을 고려하여<br/>와이어 프레임을 그려보고 그 위에 시안을 만들어 보았습니다.
			</h3>
			
			<section id="frame_li">
				<ul>
					<li>
						<div class="frame_img">
							<img src="/profile/images/wire_frame01.jpg" alt="종이에 그린 프레임" />
						</div>
						
						<div class="frame_hover">
							<p class="frame_li_tit">
								종이 와이어 프레임
							</p>
							
							<p class="frame_li_txt">
								상단과 비주얼, 콘텐츠, 하단 구조를 잡은 후 강조되어야 할 비주얼 높이를 크게 잡아주고 콘텐츠는 내용에 따라 비주얼보다는 작으면서 각 콘텐츠와의 높이와 다르게 정해주고 상단과 하단은 100픽셀보다 작게 지정
							</p>
						</div>
					</li>
					
					<li>
						<div class="frame_img">
							<img src="/profile/images/wire_frame.png" alt="포토샵으로 만든 프레임" />
						</div>
						
						<div class="frame_hover">
							<p class="frame_li_tit">
								포토샵 와이어 프레임
							</p>
							
							<p class="frame_li_txt">
								상단 좌측에 로고와 상단 우측에 메뉴를 위치시켜 사용자의 사용성 높이고 비주얼에 각 애니메이션의 로고를 노출시켜 홈페이지의 콘셉트 및 상징의 인지성을 높였으며 각 콘텐츠를 구분하기 위해 여백과 굵은 타이들을 지정
							</p>
						</div>
					</li>
					
					<li>
						<div class="frame_img">
							<img src="/profile/images/main_1200.jpg" alt="프레임 참고하여 만든 시안" />
						</div>
						
						<div class="frame_hover">
							<p class="frame_li_tit">
								시안 완성
							</p>
							
							<p class="frame_li_txt">
								로고의 경우 높이 50픽셀로 조정하고 메뉴나 콘텐츠의 글자는 사용자의 사용성을 고려하여 어두운 곳에서는 하얀 색상으로 밝은 곳에서는 어두운 색상으로 노툴시켰으며 글자 크기와 굵기로 인지성을 다르게 주도록 지정
							</p>
						</div>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<!-- 프레임 영역 끝 -->
	
	<!-- 압타나 영역 시작 -->
	<div id="aptana_wrap">
		<div id="aptana_inner">
			<h2 id="aptana_tit" class="content_tit">APTANA STUDIO3</h2>
			
			<h3 id="aptana_sub_tit" class="content_sub_tit">
				<span class="noto">Aptana Studio3</span>를 이용하여 <span class="noto">media query</span>를 이용한 반응형 웹페이지,<br/><span class="noto">jQuery</span>를 활용한 웹 콘텐츠 등을 하드코딩 제작 가능합니다.
			</h3>
			
			<section id="aptana_li">
				<ul>
					<li>
						<p class="aptana_li_tit">INCLUDE</p>
						
						<p class="aptana_li_txt">페이지마다 반복되는 부분을 인크루드로 연결하여 따로 관리 가능 </p>
						
						<div class="aptana_li_img">
							<img src="/profile/images/ap03.png" alt=""/>
							
							<div class="aptana_img_hover">
								<p class="view"><!-- search_icon --></p>
							</div>
						</div>
						
						<p class="aptana_img_click">
							<img src="/profile/images/ap03.png" alt=""/>
						</p>
					</li>
					
					<li>
						<p class="aptana_li_tit">JQUERY</p>
						
						<p class="aptana_li_txt">each 함수와 location, substring 함수를 이용하여 상황에 따라 다른 효과 지정</p>
						
						<div class="aptana_li_img">
							<img src="/profile/images/ap04.png" alt=""/>
							
							<div class="aptana_img_hover">
								<p class="view"><!-- search_icon --></p>
							</div>
						</div>
						
						<p class="aptana_img_click">
							<img src="/profile/images/ap04.png" alt=""/>
						</p>
					</li>
					
					<li>
						<p class="aptana_li_tit">@MEDIA</p>
						
						<p class="aptana_li_txt">1200px, 980px, 768px, 640px, 480px 에 따른 폰트 속성이나 크기를 조절하였고 컴퓨터가 아닌 경우 기존 메뉴 대신 햄버거 메뉴를 노출</p>
						
						<div class="aptana_li_img">
							<img src="/profile/images/ap01.png" alt=""/>
							
							<div class="aptana_img_hover">
								<p class="view"><!-- search_icon --></p>
							</div>
						</div>
						
						<p class="aptana_img_click">
							<img src="/profile/images/ap01.png" alt=""/>
						</p>
						
						<div class="aptana_li_img" id="media_img2">
							<img src="/profile/images/ap02.png" alt=""/>
							
							<div class="aptana_img_hover">
								<p class="view"><!-- search_icon --></p>
							</div>
						</div>
						
						<p class="aptana_img_click">
							<img src="/profile/images/ap02.png" alt=""/>
						</p>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<div id="aptana_view_wrap"></div>
	<!-- 압타나 영역 끝 -->
	
	<!-- 사이트 영역 시작 -->
	<div id="site_wrap">
		<div id="site_inner">
			<h2 id="site_tit" class="content_tit">WEBSITE</h2>
			
			<h3 id="site_sub_tit" class="content_sub_tit">
				여러 홈페이지의 레이아웃을 따라 연습하였고<br/>컨셉에 맞춰 웹사이트를 구성하였습니다.
			</h3>
		
			<section id="site_li">
				<ul>
					<li>
						<div class="site_img">
							<img src="/profile/images/next.png" alt="넥스트레벨 연습 홈페이지">
						</div>
						
						<div class="site_tbox">
							<p class="site_txt">
								넥센타이어렌탈(https://www.tirerental.co.kr/)를<br/>레퍼런스로 선정하여 비슷하게 레이아웃 구조화한<br/>레이아웃 연습용 홈페이지
							</p>
							
							<p class="site_btn">
								<a href="http://sdr9402.dothome.co.kr/nextlevel/" title="넥스트레벨 연습 홈페이지로 이동하기" target="_blank">홈페이지 바로가기</a>
							</p>
						</div>
					</li>
					
					<li>
						<div class="site_img">
							<img src="/profile/images/liivon.png" alt="리브온 연습 홈페이지 반응형 예시">
						</div>
						
						<div class="site_tbox">
							<p class="site_txt">
								국민은행의 부동산 홈페이지(https://onland.kbstar.com/)을<br/>레퍼런스로 선정하여 비슷하게 레이아웃 구조화한 후 <br/>미디어스크린 지정해본 연습용 홈페이지
							</p>
							
							<p class="site_btn">
								<a href="http://sdr9402.dothome.co.kr/liivon/" title="리브온 연습 홈페이지로 이동하기" target="_blank">홈페이지 바로가기</a>
							</p>
						</div>
					</li>
					
					<li>
						<div class="site_img">
							<img src="/profile/images/clamp.png" alt="클램프 홈페이지 반응형 예시">
						</div>
						
						<div class="site_tbox">
							<p class="site_txt">
								클램프 및 애니메이션 소개와 함께 커뮤니티의 활성화로<br/>클램프를 처음 접한 팬들이나 많은 정보를 가진 팬들의<br/>원활한 소통의 장소가 될 홈페이지(반응형)
							</p>
							
							<p class="site_btn">
								<a href="http://sdr9402.dothome.co.kr/clamp/" title="클램프 홈페이지로 이동하기" target="_blank">홈페이지 바로가기</a>
							</p>
						</div>
					</li>
				</ul>
			</section>
			
			<div id="site_li_btn">
				<button id="site_prev_btn">&lt;&lt;</button>
				<button id="site_next_btn">&gt;&gt;</button>
			</div>
		</div>
	</div>
	<!-- 사이트 영역 끝 -->
	
	<!-- 콘택트 영역 시작 -->
	<div id="contact_wrap">
		<div id="contact_inner">
			<h2 id="contact_tit" class="content_tit">CONTACT ME</h2>
			
			<h3 id="contact_sub_tit" class="content_sub_tit">
				연락이 필요하시다면 아래에 있는<br/>
				메일 주소나 핸드폰으로 연락하시길 바랍니다.
			</h3>
		
			<section id="contact">
				<div id="phon_box">
					<p id="phon">010-2932-9402</p>
				</div>
				<div id="mail_box">
					<p id="mail">dnfldnfqh12@naver.com</p>
				</div>
			</section>
		</div>
	</div>
	<!-- 콘택트 영역 끝 -->
	
	<!-- 하단 영역 시작 -->
	<footer id="footer_wrap">
		<div id="footer_inner">
			<p id="copyright">
				Copyright &copy; 2019.All Rights Reserved
			</p>
			
			<div id="footer_li">
				<ul>
					<li>
						<a href="#" title="해당 페이지로 이동">
							<!-- 페이스북 -->
						</a>
					</li>
					
					<li>
						<a href="#" title="해당 페이지로 이동">
							<!-- 트위터 -->
						</a href="#" title="해당 페이지로 이동">
					</li>
					
					<li>
						<a href="#" title="해당 페이지로 이동">
							<!-- 구글+  -->
						</a>
					</li>
					
					<li>
						<a href="#" title="해당 페이지로 이동">
							<!-- insta -->
						</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
	<!-- 하단 영역 끝 -->
</body>
</html>
