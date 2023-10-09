<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-member.php');
}
//ambil id dri query string
$id = $_GET['id'];
//buat query ambil data dri db
$sql = "SELECT * FROM calon_member WHERE id=$id";
$query = mysqli_query($db, $sql);
$member = mysqli_fetch_assoc($query);
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
    <title>Edit Form Fanclub Member</title>
</head>

<body>
    
<div class="home">
    <article class="article">
        <h1>Fanclub Registration Edit Form</h1>
           <hr>
           <br>

    <form action="proses-edit.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $member['id'] ?>" />
        <div>
            <label>Name :</label> <br>
            <input type="text" name="name" value="<?php echo $member['name'] ?>">
        </div>
        <br>
        <div>
            <label>Age :</label> <br>
            <input type="text" name="age" value="<?php echo $member['age'] ?>">
        </div>
        <br>
        <div>
            <label>Phone Number :</label> <br>
            <input type="text" name="phone_number" value="<?php echo $member['phone_number'] ?>">
        </div>
        <br>
        <div>
            <label>Gender :</label> <br>  
            <?php $gender = $member['gender']; ?>
            <input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? "checked": "" ?>>Male
            <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? "checked": "" ?>>Female      
        </div>
        <br>
        <div>
            <label>Nationality :</label> <br>
            <input type="text" name="nationality" value="<?php echo $member['nationality'] ?>">
        </div>
        <br>
        <div>
            <label>Address :</label> <br>
            <textarea name="address" rows="5" cols="30" required><?php echo $member['address'] ?></textarea>
        </div>
        <div>
            <label for="membership_type">Membership type : </label>
            <?php $membership_type = $member['membership_type']; ?>
        <select name="membership_type">
            <option <?php echo ($membership_type == 'Exclusive Content') ? "selected": "" ?>>Exclusive Content</option>
            <option <?php echo ($membership_type == 'Event Discount') ? "selected": "" ?>>Event Discount</option>
            <option <?php echo ($membership_type == 'Merchandise Discount') ? "selected": "" ?>>Merchandise Discount</option>
        </select>
        </div>
        <br>
        <div>
            <label for="membership_period">Membership period : </label>
            <?php $membership_period = $member['membership_period']; ?>
        <select name="membership_period">
            <option <?php echo ($membership_period == '1 Year') ? "selected": "" ?>>1 Year</option>
            <option <?php echo ($membership_period == '6 Months') ? "selected": "" ?>>6 Months</option>
            <option <?php echo ($membership_period == '3 Months') ? "selected": "" ?>>3 Months</option>
            <option <?php echo ($membership_period == '1 Month') ? "selected": "" ?>>1 Month</option>
        </select>
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