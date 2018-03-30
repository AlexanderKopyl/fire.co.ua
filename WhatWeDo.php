<?php

$project = array(
    'p' => "оказываем услуги ",
    'p_1' =>"домов и квартир",
    'p2'=> "ремонтируем бассейны",
    'p2_1' => "и зоны отдыха",
    'colorFull'=> "ремонта",
    'colorFull2' => "пристани",
    'img'=>'housePic-min.png',
    'img2' => 'ремонт-min.png'
);
$build = array(
    'p' => "воплощаем ваши идеи ",
    'p_1' =>"на любой бютжет",
    'p2'=> "строим эксклюзивные",
    'p2_1' => "для жизни и бизнеса",
    'colorFull'=> "любой сложности",
    'colorFull2' => "обьекты",
    'img'=>'housePic-min.png',
    'img2' => 'ремонт-min.png'
);


$fixing = array(
    'p' => "Текст пока не указан ",
    'p_1' =>"Текст пока не указан ",
    'p2'=> "Текст пока не указан ",
    'p2_1' => "Текст пока не указан ",
    'colorFull'=> "Текст пока не указан ",
    'colorFull2' => "Текст пока не указан ",
    'img'=>'housePic-min.png',
    'img2' => 'ремонт-min.png'
);


if($_POST['id'] === 'project'){
    $CONTENT = $project;
}elseif($_POST['id'] === 'build'){
    $CONTENT = $build;
}else{
    $CONTENT = $fixing;
}
$per = $CONTENT['img'];
$p1 = $CONTENT['p1'];
$colorFul = $CONTENT['colorFull'];
$p1_1 = $CONTENT['p1_1'];
echo "
<div class=\"row \">
      <div class=\"col - xl - 6 col - sm - 12 position_for_block\">
<img id=\"leftPic\" src=\"img/".$CONTENT['img']."\"height=\"447\"  alt=\"\">
<span class=\"footer_block footerRight\">".$CONTENT['p']. "<span class=\"colorfull\">" .$CONTENT['colorFull']. "</span>" .$CONTENT['p_1']. "</span>
   </div>
  <div class=\"col-xl-6 col-sm-12 position_for_block\">
            <img id=\"leftPic\" src=\"img/".$CONTENT['img2']."\"height=\"447\"  alt=\"\">
            <span  class=\"special\"  data-toggle=\"modal\" data-target=\"#myModal\">специальное  предложение</span>
           <span class=\"footer_block footer2Right\">".$CONTENT['p2']. "<span class=\"colorfull\">".$CONTENT['colorFull2']. "</span>".$CONTENT['p2_1']."</span>

        </div>
   </div>

";




?>

<!--<div class="col-xl-6 col-sm-12 position_for_block">-->
<!--<img  src="img/--><?php //echo $$CONTENT['img'] ?><!--" height="447"  alt="">-->
<!--<span class="footer_block footerRight">--><?php //echo $$CONTENT['p1'];?><!--<span class="colorfull">--><?php //echo $$CONTENT['colorFull'];?><!--</span>--><?php //echo $$CONTENT['p1_1'];?><!--</span>-->
<!---->
<!--</div>-->
<!--<div class="col-xl-6 col-sm-12 position_for_block">-->
<!--    <img  src="img/--><?php //echo $$CONTENT['img2'] ?><!-- " height="447" alt="">-->
<!--    <span  class="special"  data-toggle="modal" data-target="#myModal">специальное  предложение</span>-->
<!--    <span class="footer_block ">--><?php //echo $$CONTENT['p2'];?><!--<span class="colorfull">--><?php //echo $$CONTENT['colorFull2'] ?><!--</span>--><?php //echo $$CONTENT['p2_1'] ?><!--</span>-->
<!---->
<!--</div>-->
