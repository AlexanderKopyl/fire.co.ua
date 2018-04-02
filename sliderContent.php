<?php

$Design = array(
    'img'=>'housePic-min.png',
    'img2'=>'housePic-min.png',
    'img3'=>'housePic-min.png',
    'img4'=>'housePic-min.png',
    'img5'=>'housePic-min.png',
    'img6'=>'housePic-min.png',
    'img7'=>'housePic-min.png',
    'img8' => 'ремонт-min.png'
);
$buildings = array(
    'img'=>'housePic-min.png',
    'img2'=>'housePic-min.png',
    'img3'=>'housePic-min.png',
    'img4'=>'housePic-min.png',
    'img5'=>'housePic-min.png',
    'img6'=>'housePic-min.png',
    'img7'=>'housePic-min.png',
    'img8' => 'ремонт-min.png'
);
$rapeir = array(
    'img'=>'housePic-min.png',
    'img2'=>'housePic-min.png',
    'img3'=>'housePic-min.png',
    'img4'=>'housePic-min.png',
    'img5'=>'housePic-min.png',
    'img6'=>'housePic-min.png',
    'img7'=>'housePic-min.png',
    'img8' => 'ремонт-min.png'
);
$landsCape = array(
    'img'=>'housePic-min.png',
    'img2'=>'housePic-min.png',
    'img3'=>'housePic-min.png',
    'img4'=>'housePic-min.png',
    'img5'=>'housePic-min.png',
    'img6'=>'housePic-min.png',
    'img7'=>'housePic-min.png',
    'img8' => 'ремонт-min.png'
);


if($_POST['id'] === 'Design'){
    $CONTENT = $Design;
}elseif($_POST['id'] === 'buildings'){
    $CONTENT = $buildings;
}elseif($_POST['id'] === 'rapeir'){
    $CONTENT = $rapeir;
}elseif($_POST['id'] === 'landsCape'){
    $CONTENT = $landsCape;
}else{
    $CONTENT = $Design;
}

//echo "
//<div class=\"row \">
//      <div class=\"col - xl - 6 col - sm - 12 position_for_block\">
//<img id=\"leftPic\" src=\"img/".$CONTENT['img']."\"height=\"447\"  alt=\"\">
//<span class=\"footer_block footerRight\">".$CONTENT['p']. "<span class=\"colorfull\">" .$CONTENT['colorFull']. "</span>" .$CONTENT['p_1']. "</span>
//   </div>
//  <div class=\"col-xl-6 col-sm-12 position_for_block\">
//            <img id=\"leftPic\" src=\"img/".$CONTENT['img2']."\"height=\"447\"  alt=\"\">
//            <span  class=\"special\"  data-toggle=\"modal\" data-target=\"#myModal\">специальное  предложение</span>
//           <span class=\"footer_block footer2Right\">".$CONTENT['p2']. "<span class=\"colorfull\">".$CONTENT['colorFull2']. "</span>".$CONTENT['p2_1']."</span>
//
//        </div>
//   </div>
//
//";

echo"
<div id=\"block-for-slider\" >
        <div id=\"viewport\">
<ul id=\"slidewrapper\">
    <li class=\"slide \" ><img src=\"img/".$CONTENT['img']."\"width=\"100%\" height=\"345\" alt=\"1\" class=\"slide-img\"></li>
    <li class=\"slide\" ><img src=\"img/".$CONTENT['img2']."\" width=\"100%\" height=\"345\" alt=\"2\" class=\"slide-img\"></li>
    <li class=\"slide\"><img src=\"img/".$CONTENT['img3']."\" width=\"100%\" height=\"345\" alt=\"3\" class=\"slide-img\"></li>
    <li class=\"slide \"><img src=\"img/".$CONTENT['img4']."\" width=\"100%\" height=\"345\" alt=\"4\" class=\"slide-img\"></li>
    <li class=\"slide \"><img src=\"img/".$CONTENT['img5']."\" alt=\"1\" width=\"100%\" height=\"345\" class=\"slide-img\"></li>
    <li class=\"slide \"><img src=\"img/".$CONTENT['img6']."\" alt=\"2\" width=\"100%\" height=\"345\" class=\"slide-img\"></li>
    <li class=\"slide \"><img src=\"img/".$CONTENT['img7']."\"alt=\"3\" width=\"100%\" height=\"345\" class=\"slide-img\"></li>
    <li class=\"slide \"><img src=\"img/".$CONTENT['img7']."\"  alt=\"4\" width=\"100%\" height=\"345\" class=\"slide-img\"></li>
</ul>
<div id=\"prev-next-btns\">
                <div id=\"prev-btn\">
                    <img src=\"img/prev-min.png\" alt=\"\">
                </div>
                <div id=\"next-btn\">
                    <img src=\"img/next-min.png\" alt=\"\">
                </div>
            </div>

   </div>
</div>
<script>$('#next-btn').click(function() {
    nextSlide();
});

$('#prev-btn').click(function() {
    prevSlide();
});</script>
";


?>

