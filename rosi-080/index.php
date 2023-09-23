<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>SKZ Fanpage</title>
</head>
<body bgcolor="#f5f5f5">
  <div class="container">
    <header>
      <img class="logo" src="img/skzlogo.png" alt="logo"> 
   
      <h1 class="subtitle">Stray Kids everywhere all around the world, You make Stray Kids STAY</h1>
      </header>
      <hr>

     <nav>
    <div>
      <ul> 
        <li><a href="index.php">Home</a></li>
        <li><a href="form-daftar.php">Fanclub Registration</a></li>
        <li><a href="form-event.php">Add New Event</a></li>
        <li><a href="form-merch.php">Add New Merchandise</a></li>
        <li><a href="list-member.php">Member</a></li>
        <li><a href="list-event.php">Events</a></li>
        <li><a href="list-merch.php">Merchandise</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
      
    </div>
  </nav>
  <hr>

    <div class="main">
      <div class="home">
        <div>
          <article class="article">
            
          <h2 class="title-post">
            Stray Kids will release the long-awaited JAPAN 2nd Mini Album on June 22, 2022 (Wednesday)!
            <img src="img/cb.jpg" class="home-img" alt="Paper photo">
          </h2>
          <h3 class="author-date"> Div1 - Sunday, March 20, 2022 - 00:00 PM </h3>
        <div class="content">
                    <p>Stray Kids has decided to release the long-awaited JAPAN 2nd Mini Album on June 22, 2022 (Wednesday)!</p>

                    <p>JAPAN 2nd Mini Album is [First Press Limited Edition A (CD + DVD)], [First Press Limited Edition B (CD + Special ZINE)], [Regular Edition First Press (CD only)], and [FAN CLUB Members Limited Edition (CD only) )] Will be released in all 4 forms!
                    </p>

                    <p>In addition, we have decided to hold an online event for purchasers in the FANCLUB members limited edition!</p>

                    <p>We will invite you to the (member individual online 2-shot photo session) by lottery from those who purchased the FANCLUB members limited edition during the target period! Please enjoy the online 2-shot photo session where you can connect with the members in real time.</p>

                    <p>Other titles, songs, and bonuses will be announced at a later date! Please check it out!</p>
                    <p>First Press Limited Edition A: CD + DVD ¥ 3,800 (tax included)</p>
                    <p>* 24P PHOTO BOOK (Type A)</p>
                    <p>* Original jacket / tall case size Digipak specification</p>
                    <p>* Photo Card A (1 randomly included from all 8 types by member)</p>

                    <p>First Press Limited Edition B: CD + Special ZINE ¥ 3,500 (tax included)</p>
                    <p>* 32P PHOTO BOOK (Type B)</p>
                    <p>* Original jacket / tall case size Digipak specification</p>
                    <p>* Photo card B included (1 randomly included from all 8 types by member)</p>
                    <p>* Special ZINE 20P (with member handwritten message)</p>

                    <p>Regular edition (Initial specification: CD Only) ¥ 2,500 (tax included)</p>
                    <p>* Photo card C included (1 randomly included from all 8 types by member)</p>

                    <p>FANCLUB Members Limited Edition: CD Only ￥ 2,500 (tax included)</p>　
                    <p>* Special double-sided photo card included (1 randomly included from all 8 types by member)</p>

                    <p>* Complete build-to-order manufacturing</p>
                    <p>* Stray Kids OFFICIAL FAN CLUB "STAY JAPAN" or "STAY JAPAN MOBILE" members only (Limited to make-to-order products)</p>
                    <p>And, the purchaser privilege of JAPAN 2nd Mini Album is also decided! !!</p>
                    <p>It will be a privilege for each store, so please make a reservation as soon as possible! !!</p>
                </div>

                <hr>

                <h2 class="title-post">
                    Music provided to Stray Kids and JO1!
                </h2>
                <h3 class="author-date"> Div1 - Wednesday, March 30, 2022 - 00:00 PM </h3>
                <div class="content">
                    <p>Stray Kids has provided music to the global boy group "JO1"!
                    </p>
                    <p>This song, which was produced as an anthem song that is the theme song of JO1 and a cheering song for fans, is titled "YOLO-konde" and is tracked by the producer unit 3RACHA by Stray Kids' Bang Chan, Changbin, and Han. , A collaboration song that produced and provided the top line and was written by JO1 members! "YOLO-konde" will be released at a later date! Please enjoy it!</p>
                </div>

                <hr>

                <h2 class="title-post">
                    The MV reaction video of the collaboration song "JUST BREATHE feat. 3RACHA of Stray Kids" with 3RACHA and SKY-HI has been released on YouTube!
                </h2>
                <h3 class="author-date"> Div1 - Tuesday, March 26, 2022 - 00:00 PM </h3>
                <div class="content">
                    <p>The music video reaction video of the collaboration song "JUST BREATHE feat. 3RACHA of Stray Kids" with 3RACHA and SKY-HI has been released on YouTube!
                    </p>
                    <p>This time, we released two videos, Stray Kids member ver. And SKY-HI & BE: FIRST member ver.! Please check it out!</p>
                </div>

                <hr>

                <h2 class="title-post">
                    Stray Kids "Scars" Special Performance Movie ("ABEMA" OA) released!
                </h2>
                <h3 class="author-date"> Div1 - Tuesday, March 26, 2022 - 00:00 PM </h3>
                <div class="content">
                    <p>To commemorate the 2nd anniversary of Japan's debut on March 18th and the 4th anniversary of Korea's debut on March 25th, Stray Kids "Scars" Special Performance Movie ("ABEMA" OA) has been released on YouTube! Please check it out!
                    </p>
                </div>

                <hr>

                <h2 class="title-post">
                    Stray Kids, New Mini Album "ODDINARY" release commemoration, Tower Records limited CD sale decision!
                </h2>
                <h3 class="author-date"> Div1 - Friday, March 18, 2022 - 00:00 PM </h3>
                <div class="content">
                    <p>Stray Kids, New Mini Album "ODDINARY" Tower Records limited benefits have been decided!
                    </p>
                    <p>■ Target products</p>
                    <p>Stray Kids "ODDINARY": Mini Album (random version) Imported (Korean version)</p>
                    <p>¥ 2,690 (tax included)</p>
                </div>


      </article>
        </div>
        <div>
          <form>
            <input class="search" type="text" placeholder="search..." required> 
            <input class="button" type="button" value="Search">   
          </form>

          <h3 class="list-title">
            <?php if(isset($_GET['status'])): ?>
            <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Data added!";
                } else {
                    echo "Data could not be added!";
                }
            ?>
            </p>
        <?php endif; ?>

          </h3>

        
          <h3 class="list-title">STAY GET UPDATED!</h3>
          <hr>
          <div class="lists">
            <div class="list">
              <img src="img/list1.jpg" alt="photo 1">
              <p>Stray Kids(스트레이 키즈) 2nd World Tour "MANIAC" in Seoul Beyond LIVE Ticket Open</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list2.jpg" alt="photo 2">
              <p>Today's 2 Kids Room is released at 7PM(KST), an hour earlier than usual, due to the general ticket sale of 'Stray Kids 2nd World Tour "MANIAC" in Seoul' scheduled for 8PM(KST).</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list3.jpg" alt="photo 3">
              <p>[2 Kids Room(투키즈룸)] Ep.12 방찬 X 아이엔 English and Japanese subtitles are available!</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list4.png" alt="photo 4">
              <p>Watch #StrayKids talk about their top 8 favorite videos from their catalogue here</p>
            </div>
            <hr>

             <div class="list">
              <img src="img/list5.jpg" alt="photo 4">
              <p>Still can't get over our THUNDEROUS announcement yesterday? Now you can get your hands on the uber cool #BENCHEveryday pieces the @Stray_Kids are wearing. </p>
            </div>
            <hr>

          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <footer>
        <p>Copyright &copy; JYP Entertainment all reserved.</p>
    </footer>

</body>
</html>