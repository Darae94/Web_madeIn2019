<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가


if($bo_table == "online"){
    alert("온라인문의가 등록되었습니다.", G5_HTTP_BBS_URL.'/write.php?bo_table='.$bo_table);
}
?>