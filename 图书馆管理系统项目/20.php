<?
    session_start();
    $code = '';  // 存储验证码
    $img = imagecreate(100, 30);   
    $background = imagecolorallocate($img, 200, 200, 200);
    // 分别设置四个数字的颜色
    $c1 = imagecolorallocate($img, 123, 124, 244);
    $c2 = imagecolorallocate($img, 23, 24, 44);
    $c3 = imagecolorallocate($img, 193, 154, 104);
    $c4 = imagecolorallocate($img, 103, 24, 244);
    // 颜色存入数组
    $color = array($c1, $c2, $c3, $c4);  
    // 把大小写字母和 0 ~ 9 的数字加入数组 length = 62
    $number = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c',
     'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
      't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
       'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'Y', 'V', 'W', 'X', 'Y', 'Z');

    for($i = 0; $i < 4; $i++) {
        $x = $number[rand(0, 62)];
        $code.=strtolower($x);  // 存储验证码
        imagechar($img, rand(1, 5), $i * 20 + 10, 5, $x, $color[rand(0, 3)]);
    }

    $_SESSION['yzmCode'] = $code;

    for($i=0;$i<120;$i++)  //干扰点
    {
          $color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
          imagesetpixel($img,rand(0,100),rand(0,50),$color);
    } 
    for($i=0;$i<5;$i++)  //干扰线
    {
        $color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
        imagearc($img,rand(0,100),rand(0,50),rand(0,100),rand(0,50),30,100,$color);
    }

    header('Content-type: image/png');
    imagepng($img);
    imagedestroy($img);
?>
