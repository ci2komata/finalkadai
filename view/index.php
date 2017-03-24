<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>HandCreamOnline</title>
    <link type="text/css" rel="stylesheet" href="./lib/style.css">
</head>


<body>
    <header>
        <div class="header-box">
            <a href="./">
                <img class="logo" src="./lib/logo.png" alt="CodeSHOP">
            </a>
            <?php if(check_login()) { ?>
            <a href="logout.php" class="menu">[ログアウト]</a>
            <a href="cart.php" class="menu">[カート]</a>
            <p class="menu"><?php print $_SESSION['LOGIN']['name']; ?>さん</p>
            <?php } else { ?>
            <a href="regist.php" class="menu">[会員登録]</a>
            <a href="login.php" class="menu">[ログイン]</a>
            <?php } ?>
        </div>
    </header>
<!--
    <div class="how">

      <div class="h1">
        <img src="./hu/u1.jpg">

      </div>

      <div class="h2">
        <img src="./hu/u2.jpg">
      </div>

      <div class="h3">
        <img src="./hu/u3.jpg">
      </div>

      <div class="h4">
        <img src="./hu/u4.jpg">
      </div>

      <div class="h5">
        <img src="./hu/u5.jpg">
      </div>

      <div class="h6">
        <img src="./hu/u6.jpg">
      </div>

      <div class="h7">
        <img src="./hu/u7.jpg">
      </div>

    </div>





    <!-おすすめスライドショー -->

    <div id="stage">
      <!-- 順送りボタン用ラジオボタン -->
        <input type="radio" id="back1" name="gal">
        <input type="radio" id="back2" name="gal">
        <input type="radio" id="back3" name="gal">
        <input type="radio" id="back4" name="gal">
        <input type="radio" id="back5" name="gal">
        <input type="radio" id="next1" name="gal">
        <input type="radio" id="next2" name="gal">
        <input type="radio" id="next3" name="gal">
        <input type="radio" id="next4" name="gal">
        <input type="radio" id="next5" name="gal">
      <!-- 表示ボタン用ラジオボタン -->
        <input type="radio" id="r1" name="gal">
        <input type="radio" id="r2" name="gal">
        <input type="radio" id="r3" name="gal">
        <input type="radio" id="r4" name="gal">
        <input type="radio" id="r5" name="gal">
      <!-- スライド（写真）を横に連ねた帯・各スライドに左右送りボタン -->
      <div id="photos">
          <div id="photo0" class="pic"><img src="./freeph/pic5.jpg"></div>
          <div id="photo1" class="pic"><img src="./freeph/pic1.jpg">
    	    <label for="back1"><div id="left1" class="b_left"></div></label>
    	    <label for="next1"><div id="right1" class="b_right"></div></label>
          </div>
          <div id="photo2" class="pic"><img src="./freeph/pic6.jpg">
    	    <label for="back2"><div id="left2" class="b_left"></div></label>
        	<label for="next2"><div id="right2" class="b_right"></div></label>
          </div>
          <div id="photo3" class="pic"><img src="./freeph/pic3.jpg">
    	    <label for="back3"><div id="left3" class="b_left"></div></label>
        	<label for="next3"><div id="right3" class="b_right"></div></label>
          </div>
          <div id="photo4" class="pic"><img src="./freeph/pic4.jpeg">
        	<label for="back4"><div id="left4" class="b_left"></div></label>
        	<label for="next4"><div id="right4" class="b_right"></div></label>
          </div>
          <div id="photo5" class="pic"><img src="./freeph/pic5.jpg">
        	<label for="back5"><div id="left5" class="b_left"></div></label>
        	<label for="next5"><div id="right5" class="b_right"></div></label>
          </div>
          <div id="photo6" class="pic"><img src="./freeph/pic1.jpg">
          </div>
      </div>
      <!-- スライド位置表示ボタン -->
      <div id="btn_band">
          	<div id="order1" class="order">
      			<label for="r1" class="circ"><img src="./images/trbtn_1.gif"></label>
            </div>
          	<div id="order2" class="order">
      			<label for="r2" class="circ"><img src="./images/trbtn_1.gif"></label>
            </div>
          	<div id="order3" class="order">
      			<label for="r3" class="circ"><img src="./images/trbtn_1.gif"></label>
            </div>
          	<div id="order4" class="order">
      			<label for="r4" class="circ"><img src="./images/trbtn_1.gif"></label>
            </div>
          	<div id="order5" class="order">
      			<label for="r5" class="circ"><img src="./images/trbtn_1.gif"></label>
            </div>
            <div id="slide_position"><img src="./images/trbtn_2.gif"></div>
      </div>
    </div>






    <div class="content">
		<?php if (!empty($result_msg)) { //結果メッセージ ?>
        <p class="msg"><?php print $result_msg; ?></p>
		<?php } ?>
		<?php foreach ($err_msg as $value) { //エラーメッセージ ?>
	    <p><?php print $value; ?></p>
		<?php } ?>
        <ul class="item-list">

			<?php foreach ($data as $value)  { ?>
            <li>
                <div class="item">
                    <form action="./" method="post">
                        <img class="item-img" src="<?php print IMG_DIR; ?>p<?php print $value['id']; ?>.png" >
                        <div class="item-info">
                            <span class="item-name"><?php print $value['name']; ?></span>
                            <span class="item-price">¥<?php print $value['price']; ?></span>
                        </div>
						<?php if ($value['stock'] > 0) { ?>
						    <input class="cart-btn" type="submit" value="カートに入れる">
						<?php } else { ?>
						    <p class="sold-out" >売り切れ</p>
						<?php } ?>
                        <input type="hidden" name="item_id" value="<?php print $value['id']; ?>">
                        <input type="hidden" name="mode" value="insert_cart">
                    </form>
                </div>
            </li>
			<?php } ?>

        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="./lib/ZoomPic.js"></script>
    <script>
       $(document).ready(function(){
        // $(".item").ZoomPic();
       });
     </script>
</body>

</html>
