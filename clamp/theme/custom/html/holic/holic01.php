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
			<h2 class="hidden">XXXHOLIC</h2>
			<div id="no_content_icon">
				<p id="no_content">홈페이지 제작 중입니다.</p>
			</div>
		</div>


<?
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>