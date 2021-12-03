<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 385;
$thumb_height = '';

// echo $options; // 카테고리

?>


    <ul class="project-wrapper wow animated fadeInUp">
    <?php
    for ($i=0; $i<count($list); $i++) {
   
		if($options && $list[$i]['ca_name'] != $options) continue;

	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
		$thumb['alt'] = strip_tags($list[$i]['wr_content']);
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>
        
		<li class="portfolio-item">
			<?php echo $img_content; ?>
			<figcaption class="mask">
				<h3><?echo $list[$i]['subject'];?></h3>
				<p>

				 <table class="tba">	
				<?php for($k=1; $k<=5; $k++){ 

					if(trim($list[$i]["wr_".$k])){
				
					$opp = explode(":",$list[$i]["wr_".$k]);
				?>
				<tr>
					<th><?=$opp[0]?></th>
					<td><?=$opp[1]?></td>
				</tr>
				<?}
				}
				unset($opp);
				?>
				</table>
				</p>
			</figcaption>
			<ul class="external">
				<li><a href="<?php echo $list[$i]['href'] ?>"><i class="fa fa-link"></i></a></li> 
			</ul>
		</li>
            
            
    <?php } 

	?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
