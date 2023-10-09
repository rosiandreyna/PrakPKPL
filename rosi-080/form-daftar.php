<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="formstyle.css">
    <title>Form Fanclub Member</title>
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

  

    <div class="home">
    <article class="article">
        <h1>Fanclub Registration Form</h1>
        <hr>
        <br>

    <form action="proses-pendaftaran.php" method="POST">

        <div>
                <label>Name :</label> <br>
                <input type="text" name="name" required>
            </div>
            <br>
            <div>
                <label>Age :</label> <br>
                <input type="text" name="age" required>
            </div>
            <br>
            <div>
                <label>Phone Number :</label> <br>
                <input type="text" name="phone_number" required>
            </div>
            <br>
            <div>
                <label>Gender :</label> <br>  
                <input type="radio" name="gender" value="male" required>Male
                <input type="radio" name="gender" value="female">Female      
            </div>
            <br>
            <div>
                <label>Nationality :</label> <br>
                <input type="text" name="nationality" required>
            </div>
            <br>
            <div>
                <label>Address :</label> <br>
                <textarea name="address" rows="5" cols="30" required></textarea>
            </div>
            <br>
            <div>
                <label for="membership_type">Membership type : </label>
            <select name="membership_type">
                <option>Exclusive Content</option>
                <option>Event Discount</option>
                <option>Merchandise Discount</option>
            </select>
            </div>
            <br>
            <div>
                <label for="membership_period">Membership period : </label>
            <select name="membership_period">
                <option>1 Year</option>
                <option>6 Months</option>
                <option>3 Months</option>
                <option>1 Month</option>
            </select>
            </div>
            <br>
            <div>
                <input class="submitbutton" type="submit" name="send" value="Send">
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