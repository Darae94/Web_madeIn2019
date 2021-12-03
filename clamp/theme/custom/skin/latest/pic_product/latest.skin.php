<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 380;
$thumb_height = 277; //세로값이 없으면 제대로 작동하지 않습니다.

// echo $options; // 카테고리

?>


    <ul>
    <?php
    for ($i=0; $i<count($list); $i++) {
   
		if($options && $list[$i]['ca_name'] != $options) continue;

	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        
		<li data-sb=fadeInUp>
			<a href="<?php echo $list[$i]['href'] ?>">
				<div class="pro_zoom plist">
					<?php echo $img_content; ?>
					<?php

						$sqlb = " select bf_file from {$g5['board_file_table']} where bo_table = '$bo_table' and wr_id = '".$list[$i]['wr_id']."'  ";		
						$rsb =sql_query($sqlb);
						while($rowb = sql_fetch_array($rsb)){
							$tfarray[] = $rowb['bf_file'];
						}
						 ?>						
						 <? if(trim($tfarray[1])){ 
						  $tfarray_file = thumbnail($tfarray[1], G5_DATA_PATH.'/file/'.$bo_table, G5_DATA_PATH.'/file/'.$bo_table, $thumb_width, $thumb_height, true, true);
						 ?>
						<div style="display:none; position:absolute; top:0; left:0; border:0px; border:0px solid #e5e5e5; width:100%; border-bottom:0px;" class="pi_u">
							<img src="<? echo G5_URL; ?>/data/file/<?=$bo_table.'/'.$tfarray_file?>" border=0  alt="<?=$trow['wr_subject']?>" style="width:100%;">	
						</div>
						<?}						
							unset($tfarray);
						?>
				</div>
				<p><?echo $list[$i]['subject'];?> <?php
            if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

            if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";

            if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";
            ?></p>
				<div class="text" ><?=strip_tags($list[$i]['wr_content'])?></div>
			</a>
		</li>


            
            
    <?php } 

	?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
