
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="prosesstyle.css">
    <title>Registration Fanclub Data</title>
</head>
<body>

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
      </ul>
      
    </div>
  </nav>
  <hr>

    <br>
    <div class="home">
    <article class="article" style="background-color: white; padding: 20px;">
          <h1>Merchandise Data</h1>
          <hr>
          <br>

    <table border="1" cellpadding="7">
    <thead>
        <tr>
            <th bgcolor="af8269" style="color:#f5f5f5;">No.</th>
      <th bgcolor="af8269" style="color:#f5f5f5;">Item</th>
      <th bgcolor="af8269" style="color:#f5f5f5;">Price (IDR)</th>
      <th bgcolor="af8269" style="color:#f5f5f5;">Edition</th>
      <th bgcolor="af8269" style="color:#f5f5f5;">Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $sql = "SELECT * FROM merch";
        $query = mysqli_query($db, $sql);

        while($merch = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$merch['id']."</td>";
            echo "<td>".$merch['item']."</td>";
            echo "<td>".$merch['price']."</td>";
            echo "<td>".$merch['edition']."</td>";

            echo "<td>";
            echo "<a href='form-edit-merch.php?id=".$merch['id']."'>Edit</a> | ";
            echo "<a href='hapus-merch.php?id=".$merch['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>


    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
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
              <img src="img/list1.jpg" alt="photo 1" style="width: 100px; height: 100px;">
              <p>Stray Kids(스트레이 키즈) 2nd World Tour "MANIAC" in Seoul Beyond LIVE Ticket Open</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list2.jpg" alt="photo 2" style="width: 100px; height: 100px;">
              <p>Today's 2 Kids Room is released at 7PM(KST), an hour earlier than usual, due to the general ticket sale of 'Stray Kids 2nd World Tour "MANIAC" in Seoul' scheduled for 8PM(KST).</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list3.jpg" alt="photo 3" style="width: 100px; height: 100px;">
              <p>[2 Kids Room(투키즈룸)] Ep.12 방찬 X 아이엔 English and Japanese subtitles are available!</p>
            </div>
            <hr>

            <div class="list">
              <img src="img/list4.png" alt="photo 4" style="width: 100px; height: 100px;">
              <p>Watch #StrayKids talk about their top 8 favorite videos from their catalogue here</p>
            </div>
            <hr>

             <div class="list">
              <img src="img/list5.jpg" alt="photo 4" style="width: 100px; height: 100px;">
              <p>Still can't get over our THUNDEROUS announcement yesterday? Now you can get your hands on the uber cool #BENCHEveryday pieces the @Stray_Kids are wearing. </p>
            </div>
            <hr>

          </div>
      </div>
    </div>
  
  <br>

    <hr>
    <footer>
        <p>Copyright &copy; JYP Entertainment all reserved.</p>
    </footer>
    </body>
</html>