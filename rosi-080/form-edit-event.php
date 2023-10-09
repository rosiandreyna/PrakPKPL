<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-event.php');
}
//ambil id dri query string
$id = $_GET['id'];
//buat query ambil data dri db
$sql = "SELECT * FROM events WHERE id=$id";
$query = mysqli_query($db, $sql);
$event = mysqli_fetch_assoc($query);
//klo yg mau diedit gada
if( mysqli_num_rows($query) < 1 ){
    die("Data not found");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="formstyle.css">
    <title>Edit Events</title>
</head>

<body>
    
<div class="home">
    <article class="article">
        <h1>Events Edit Form</h1>
           <hr>
           <br>

    <form action="proses-edit-event.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $event['id'] ?>" />
        <div>
            <label>Event Name :</label> <br>
            <input type="text" name="event_name" value="<?php echo $event['event_name'] ?>">
        </div>
        <br>
        <div>
            <label>Date :</label> <br>
            <input type="date" name="date" value="<?php echo $event['date'] ?>">
        </div>
        <br>
        <div>
            <label>Promoter :</label> <br>
            <input type="text" name="promoter" value="<?php echo $event['promoter'] ?>">
        </div>
        <br>
        <div>
            <input class="submitbutton" type="submit" name="save" value="Save">
        </div>
    </form>
</article>

<div class="rightside">
          <form class="searchbar">
            <input class="search" type="text" placeholder="search..." required> 
            <input class="button" type="button" value="Search">   
          </form>
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

    </body>
</html>