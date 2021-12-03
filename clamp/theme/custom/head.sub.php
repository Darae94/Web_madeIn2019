<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>

<!-- 타이틀은 관리자모드 에서 수정 -->
<title><?php echo $g5_head_title; ?></title>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/<?php echo G5_IS_MOBILE ? 'mobile' : 'default'; ?>.css?ver=<?php echo G5_CSS_VER; ?>">
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo G5_JS_URL ?>/jquery.menu.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/common.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/wrest.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/placeholders.min.js"></script>
<link rel="stylesheet" href="<?php echo G5_JS_URL ?>/font-awesome/css/font-awesome.min.css">
<meta name="format-detection" content="telephone=no"/>

<?php
if(G5_IS_MOBILE) {
    echo '<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>'.PHP_EOL; // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN')){
    echo $config['cf_add_script'];
}


if(!defined('G5_IS_ADMIN')){
?>
	<link href="<?php echo G5_THEME_URL;?>/html/css/common.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
		
	<?
		if($_OS_ != "mobile") {
	?>	
	
	<!-- 모바일 에서만 사용할 CSS, JS 파일 링크 추가-->	
	
	<link rel="stylesheet" href="/clamp/js/swiper-4.5.0/dist/css/swiper.min.css">
	<script src="/clamp/js/swiper-4.5.0/dist/js/swiper.min.js"></script>
	
	<style>
	    html, body {
	      position: relative;
	      height: 100%;
	    }
	    body {
	      font-size: 14px;
	      color:#000;
	      margin: 0;
	      padding: 0;
	    }
	    .swiper-container {
	      width: 100%;
	      height: 100%;
	      display:none;
	    }
	    .swiper-slide {
	      text-align: center;
	      font-size: 18px;
	      background: url("/clamp/images/visual_bg00.png") no-repeat center top;
	      /* Center slide text vertically */
	      display: -webkit-box;
	      display: -ms-flexbox;
	      display: -webkit-flex;
	      display: flex;
	      -webkit-box-pack: center;
	      -ms-flex-pack: center;
	      -webkit-justify-content: center;
	      justify-content: center;
	      -webkit-box-align: center;
	      -ms-flex-align: center;
	      -webkit-align-items: center;
	      align-items: center;
	    }
	</style>
	
	<!-- Initialize Swiper -->
	<script>
	    $(document).ready(function(){
	    	
	    	var swiper = new Swiper('.swiper-container', {
		      pagination: {
		        el: '.swiper-pagination',
		      },
		    });
	    	
	    })
	</script>
	
	<?}?>
	
	
	<!-- 모바일,pc 동시에 사용할 CSS, JS 파일 링크 추가  -->		
	<link rel="stylesheet" type="text/css" href="/clamp/css/common.css">
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Noto+Sans&display=swap" rel="stylesheet">
	
	<script>	//공지사항 없애기
		
		var $popupWrap;
		
		$(document).ready(function(){
			
			$popupWrap=$("#popup_wrap");
			
			$popupWrap.bind("click",onPopupHide);
			$popupWrap.children().bind("click",onPopupHide);
			
		})
		
		function onPopupHide(){
						
			$popupWrap.hide();
			
		}
		
	</script>
	
	<script>	//헤더 영역 애니메이션 설정
		
		//변수 선언
		var $headerWrap;		
		var $mainMenu;
		var $mainSub;
		var $subMenuWrap;
		var $subMenu;
		var $hamMenu;
		var $hamWrap;
		var $ham;
		var overNum;
		var openHeight=110;
		var closeHeight=50;
		var isHamOpen=false;
		
		var textUrl;
		var pageName;
		
		$(document).ready(function(){
		
			//변수 지정
			$headerWrap=$("#header_wrap");
			$mainMenu=$("#mainMenu a");
			$subMenuWrap=$("#subMenu_wrap");
			$subMenu=$(".subMenu");
			$hamMenuBtn=$("#ham_menu");
			$hamMenu=$("#ham_menu span");
			$hamWrap=$("#ham_wrap");
			$ham=$("#ham_list>ul>li");
			
			//each함수로 각각의 값 저장하도록 설정
			$ham.each(function(HamSub,data){
				
				$(this).data("HamSub",false);
				
			})
			
			
			//기본 설정
			$subMenuWrap.hide();
			$subMenu.hide();
			$hamMenuBtn.css({"z-index":11});
			$hamWrap.css({"z-index":10});
			
			
			//메인 및 서브 구분하여 헤더 적용 변경
			
			textUrl=window.location.pathname
			//alert(textUrl)
			
			pageName=textUrl.substring(7)
			
			if(pageName=="" || pageName=="index.php"){	//메인 적용 헤더 속성
				
				onHeaderOut();
					
				$headerWrap.bind("mouseenter",onHeaderOver);
				$headerWrap.bind("mouseleave",onHeaderOut);
				
			}else if(pageName!="" || pageName!="index.php"){	//서브 적용 속성
				
				$headerWrap.bind("mouseleave",onMenuOut);
				
			}
			
			//이벤트 지정
			$mainMenu.bind("mouseenter",onMenuOver);
			$hamMenuBtn.bind("click",onHamMenu);
			$ham.bind("click",onHamSub);
		
		})
		
		function onHeaderOver(){	//헤더 영역 올라오면 실행되는 함수
		
			if(isHamOpen==false){
				
				$headerWrap.css({"background":"#ffffff","border-bottom":"solid 3px #a87b4f"});
				$headerWrap.children().eq(0).css({"border-bottom":"none"});
				$mainMenu.css({"color":"#000000"});
				$hamMenu.css({"background":"#000"});
				$hamMenu.removeClass("main");
				
			}
		
		}
		
		function onHeaderOut(){		//헤더 영역 벗어나면 실행되는 함수
		
			if(isHamOpen==false){
				
				onMenuOut();
				
				$headerWrap.css({"background":"none","border-bottom":"none"});
				$headerWrap.children().eq(0).css({"border-bottom":"solid 1px #919191"});
				$mainMenu.css({"color":"#ffffff"});
				$hamMenu.css({"background":"#fff"});
				$hamMenu.addClass("main");
			
			}
			
		}
		
		function onHamMenu(){	//햄메뉴 클릭시 실행되는 함수
			
			if(isHamOpen==false){
				
				$hamMenu.css({"background":"#fff"});
				$hamMenu.addClass("ham_over");
				$hamWrap.show();
				
				isHamOpen=true;
				
			}else{
				
				$ham.data("HamSub",false);
				$ham.children("p").removeClass("ham_selected");
				$ham.css({"height":closeHeight})
				$hamWrap.hide();
				$hamMenu.removeClass("ham_over");
				$hamMenu.css({"background":"#000"});
				
				isHamOpen=false;
				
			}
			
		}
		
		function onHamSub(){	//햄메뉴 서브메뉴 클릭시 실행되는 함수
			
			if($(this).data("HamSub")==false){
				
				$(this).children("p").addClass("ham_selected");
				$(this).animate({"height":openHeight},300,"easeOutCubic");
				
				$(this).data("HamSub",true);
				
			}else{
				
				$(this).children("p").removeClass("ham_selected");
				$(this).animate({"height":closeHeight},300,"easeOutCubic");
				
				$(this).data("HamSub",false);
				
			}
			
		}
		
		function onMenuOver(){		//메인메뉴 오버된 값 구하는 함수
		
			overNum=$mainMenu.index($(this));
			
			//alert(overNum)			
			
			onSubMenuShow(overNum);
		
		}
		
		function onSubMenuShow(selectMenu){		//서브메뉴 보여지는 함수
		
			$mainMenu.css({"color":"#000000"});
			$mainMenu.eq(selectMenu).css({"color":"#a87b4f"});
			
			$subMenuWrap.hide();
			$subMenu.hide();
			$subMenu.children().hide();
			$subMenuWrap.css({"border-top":"solid 3px #a87b4f"});
			$subMenuWrap.stop();
			$subMenuWrap.slideDown(200,"easeOutCubic",function(){
				
				$subMenu.show();
				$subMenu.children().eq(selectMenu).show();
				
			});
			//alert(selectMenu);
		}
		
		function onMenuOut(){		//서브메뉴 사라지는 함수
			
			$mainMenu.css({"color":"#000000"});
			$subMenu.hide();
			$subMenu.children().hide();
			$subMenuWrap.stop();
			$subMenuWrap.slideUp(200,"easeOutCubic");
			
			//$mainMenu.css({"color":"#000"});
			
		}
		
	</script>
	
	<script>	//비주얼 배경 슬라이드 설정
		
		//변수 선언
		var $visualWrap;
		var $visual;
		var $visualBg;
		var bgNum;
		var imgWidth;
		var position;
		var timer;
		
		$(window).load(function(){
			
			//변수 지정
			$visualWrap=$("#visual_wrap")
			$visual=$("#visual_bg");
			$visualBg=$visual.children();
			bgNum=$visualBg.size();
			
			onResizeSet();
			$visual.children().last().prependTo($visual);
			//alert(bgNum);
			onSlideStart();
			
			$visualWrap.bind("mouseenter",onSlideStop);
			$visualWrap.bind("mouseleave",onSlideStart);
			$("#prev_btn").bind("click",onSlidePrev);
			$("#next_btn").bind("click",onSlideNext)
			
		})
		
		$(window).resize(function(){
			
			onResizeSet();
			
		})
		
		function onResizeSet(){
			
			imgWidth=$visualWrap.innerWidth();
			
			$visual.css({"width":imgWidth*bgNum});
			$visualBg.css({"width":imgWidth});
			$visual.css({"left":-imgWidth});
			
		}
		
		function onSlideStart(){
			
			timer=setInterval(onSlideNext,2000);
			
		}
		
		function onSlideNext(){
			
			position=$visual.position().left;
			
			$("#visual_bg:not(:animated)").animate({"left":position-imgWidth},500,"easeOutExpo",function(){
				
				$(this).children().first().appendTo($visual);
				$(this).css({"left":-imgWidth});
				
			});
			
		}
		
		function onSlidePrev(){
			
			position=$visual.position().left;
			
			$("#visual_bg:not(:animated)").animate({"left":position+imgWidth},500,"easeOutExpo",function(){
				
				$visual.children().last().prependTo($visual);
				$visual.css({"left":-imgWidth});
				
			});
			
		}
		
		function onSlideStop(){
			
			clearInterval(timer);
			
		}
		
	</script>
	
	<script>	//비주얼 영역 애니메이션 설정
		
		//변수 선언
		var $visulImg;
		var $img;
		var $imgBtn;
		var overNum;
		
		$(document).ready(function(){
			
			//변수 지정
			$visualImg=$("#visual_li li");
			$img=$(".visual_img").children();
			$imgBtn=$(".visual_btn");
			
			//이벤트 지정
			$visualImg.bind("mouseenter",onMouseOver);
			$visualImg.bind("mouseleave",onMouseOut);
			
		})
		
		function onMouseOver(){		//마우스 오버되었을때 애니메이션 실행 함수
			
			overNum=$visualImg.index($(this));
					
			$img.eq(overNum).animate({"top":-150,"opacity":0.8},200,"easeOutCubic");
			$imgBtn.eq(overNum).css({"background":"#a87b4f"});
			
		}
		
		function onMouseOut(){		//마우스 아웃되었을 때 실행 함수
			
			$img.animate({"top":0,"opacity":1},200,"easeOutCubic");
			$imgBtn.css({"background":"none"});
			
		}
		
	</script>
	
	<script>	//클램프 콘텐츠 변화 설정
		
		//변수 선언
		var $listMenu;
		var $list;
		var $li;
		var $liImg;
		var clickNum;
		var imgOverNum;
		
		$(document).ready(function(){
			
			//변수 지정
			$listMenu=$("#clamp_menu a");
			$list=$(".clamp_li ul");
			$li=$(".clamp_li li");
			$liImg=$(".clamp_li img");
			
			//이벤트 지정
			$listMenu.bind("click",onListChange);
			$li.bind("mouseenter",onMouseEnter);
			$li.bind("mouseleave",onMouseLeave);
			
		})
		
		function onListChange(){	//작가와 작품 내용 변경해주는 함수
			
			clickNum=$listMenu.index($(this));
			//alert(clickNum);
			$listMenu.removeClass("selected");
			$listMenu.eq(clickNum).addClass("selected");
			
			$list.hide();
			$list.eq(clickNum).show();
			
		}
		
		function onMouseEnter(){
			
			imgOverNum=$li.index($(this));
			//alert(imgOverNum);
			$liImg.removeClass("selectImg");
			$liImg.eq(imgOverNum).addClass("selectImg");
			
		}
		
		function onMouseLeave(){
			
			$liImg.removeClass("selectImg");
			
		}
		
	</script>
	
	<script>	//사쿠라 콘텐츠 변화 설정
		
		//변수 선언
		var $sakuraList;
		var $sakuraBox;
		var listNum;
		var scrollTop;
		
		$(document).scroll(function(){
			
			//변수 지정
			$sakuraList=$("#sakura_li ul").children();
			$sakuraBox=$sakuraList.children();
			listNum=$sakuraList.size();
						
			//이벤트 지정
			$(window).bind("scroll",onScroll);
			
		})
		
		function onScroll(){
			
			scrollTop=$(document).scrollTop();
			
			if(scrollTop>=900){
				//alert(listNum);
				for(var i=0; i<=listNum; i++){
					
					$sakuraBox.eq(i).animate({"top":0,"opacity":1},100*i,"swing");
					
				}
				
			}
			
		}
		
	</script>
	
	<script>
		
		var $tsuWrap;
		var $tsuList;
		var $tsuLi;
		var $longDot;
		var slideHieght;
		var slideNum;
		var dotNum;
		
		$(document).ready(function(){
			
			$tsuWrap=$("#tsubasa_gal");
			$tsuList=$(".tsubasa_img");
			$tsuLi=$tsuList.children();
			$longDot=$("#slide_li li");
			slideHeight=$tsuWrap.outerHeight();
			slideNum=$tsuLi.size();
			
			$tsuList.css({"height":slideHeight*slideNum});
			$tsuLi.css({"height":slideHeight});
			
			onAuto();
			
			$longDot.bind("mouseenter",onLongDotOver);
			
		})
		
		function onAuto(){
			
			dotNum=0;
			
			setInterval(onCount,3000);
			
		}
		
		
		function onCount(){
			
			dotNum=dotNum+1
			
			if(dotNum>=slideNum){
				
				dotNum=0
			}
			
			onSlide(dotNum);
			
			onShowDot(dotNum);
			
		}
		
		function onLongDotOver(){
			
			dotNum=$longDot.index($(this));
			
			onSlide(dotNum);
			
			onShowDot(dotNum);
			
		}
		
		function onSlide(selected){
			
			$tsuList.animate({"top":-slideHeight*selected});
			
		}
		
		function onShowDot(selected){
			
			$longDot.removeClass("selectImg");
			$longDot.eq(selected).addClass("selectImg");
			
		}
		
	</script>
	
<?}?>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>

	<!-- 스킵메뉴-->
	<ul id="skip">
		<li><a href="#header_inner" title="상단 바로가기">상단 바로가기</a></li>
		<li><a href="#visual_inner" title="본문 바로가기">본문 바로가기</a></li>
		<li><a href="#footer_inner" title="하단 바로가기">하단 바로가기</a></li>
	</ul>
