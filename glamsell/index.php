	<? include_once $_SERVER["DOCUMENT_ROOT"]."/glamsell/inc/start.html" ?>
	
	<!-- 상단 메뉴 -->
	<? include_once $_SERVER["DOCUMENT_ROOT"]."/glamsell/inc/header.html" ?>
	
	<!-- 비쥬얼 영역 -->
	<div id="visual_wrap">
		<div id="visual_inner">
			<h2 class="hidden">비쥬얼이미지</h2>
			<ul id="visual_list">
				<li><a href="#"><img src="/glamsell/images/visual_01.jpg" alt="이미지설명" /></a></li>
				<li><a href="#"><img src="/glamsell/images/visual_02.jpg" alt="이미지설명" /></a></li>
				<li><a href="#"><img src="/glamsell/images/visual_03.jpg" alt="이미지설명" /></a></li>
			</ul>
			<span id="prev_btn"><a href="#"><img src="/glamsell/images/left_btn.png" alt="이전보기"></a></span>
			<span id="next_btn"><a href="#"><img src="/glamsell/images/right_btn.png" alt="다음보기"></a></span>
		</div>
	</div>
	
	<!-- 콘텐츠 영역 -->
	<div id="contents_wrap">
		<div id="contents_inner">
			<div id="contents">
			<h2 class="hidden">콘텐츠</h2>
				<ul id="contents_list">
					<li>
						<p class="contents_title">
							<a href="#"><img src="/glamsell/images/content1.gif" alt="사용방법" /></a>
						</p>
						<a class="contents_img">
							<a href="#"><img src="/glamsell/images/image1.gif" alt="이미지설명" /></a>
						</p>
						<p class="contents_text">
							<a href="#"><img src="/glamsell/images/text01.gif" alt="제품 사용방법을 자세히 설명해 드립니다." /></a>
						</p>
					</li>
					<li>
						<p class="contents_title">
							<a href="#"><img src="/glamsell/images/content2.gif" alt="이벤트" /></a>
						</p>
						<a class="contents_img">
							<a href="#"><img src="/glamsell/images/image2.gif" alt="이미지설명" /></a>
						</p>
						<p class="contents_text">
							<a href="#"><img src="/glamsell/images/text2.gif" alt="그램쉘의 다양한 이벤트에 참여해 보세요." /></a>
						</p>
					</li>
					<li>
						<p class="contents_title">
							<a href="#"><img src="/glamsell/images/content3.gif" alt="사용후기" /></a>
						</p>
						<a class="contents_img">
							<a href="#"><img src="/glamsell/images/image3.gif" alt="이미지설명" /></a>
						</p>
						<p class="contents_text">
							<a href="#"><img src="/glamsell/images/text3.gif" alt="사용후기 등 고객님의 의견을 듣습니다." /></a>
						</p>
					</li>
					<li>
						<p class="contents_title">
							<a href="#"><img src="/glamsell/images/content4.gif" alt="나눔과 희망" /></a>
						</p>
						<a class="contents_img">
							<a href="#"><img src="/glamsell/images/image4.gif" alt="이미지설명" /></a>
						</p>
						<p class="contents_text">
							<a href="#"><img src="/glamsell/images/text4.gif" alt="현재 활동중인 '나눔과 희망' 활동입니다." /></a>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- 하단 영역 -->
	<? include_once $_SERVER["DOCUMENT_ROOT"]."/glamsell/inc/footer.html" ?>

</body>
</html>
