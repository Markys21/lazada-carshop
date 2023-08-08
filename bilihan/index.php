<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      body {
        font-family: 'Lato', sans-serif;
        background-image: url("./New folder/giphy (6).gif");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
      }

       .navbar {
            background-color: rgb(18,19,26);
        }
        .navbar .pos {
          display: flex;
          align-items: center;
          margin-right: auto;
        }
        .navbar .pos a {
            color: white;
            margin-right: 20px;
            border-bottom: 2px solid transparent;
            
            padding: 20px;
            font-size: 20px;
        }
        .navbar .pos a.active {
            border-bottom-color: rgb(236,176,1);
            color: rgb(236,176,1);
            
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            margin-right: -10px;
            margin-top: -40px;
            margin-bottom: -40px;
        }
        .navbar-nav {
            margin-right: auto;
        }
        .navbar-nav .nav-item {
            margin-left: 10px;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .login-btn {
            margin-left: 10px;
        }
        span {
            color:  rgb(236,176,1);
        }
        #btnborder {
            border-color: rgb(236,176,1);
        }
/* section img */
        section {
            background-color: rgb(19, 20, 24);
            display: flex;
            justify-content: center;
            
            height: 62vh;
        }

        section img {
            max-width: 100%;
            max-height: 100%;
        }
        .card{
          background-color: rgb(18,19,26);
          box-shadow: 0 0 5px rgb(19, 20, 24);
        }
        .card h2 {
            color: rgb(52,198,92);
        }
        .card.bg-grey {
         transition: box-shadow 0.3s ease;
        }

        .card.bg-grey:hover {
            box-shadow: 0 0px 5px 0px red;
        }
      
        .footer {
          padding: 40px 0;
        }

        .footer h5 {
          
          font-weight: bold;
        }
        .footer ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .footer ul li {
          display: inline-block;
          margin-right: 10px;
        }

        .footer ul li a {
          color: #a0a0a0;
          font-size: 20px;
        }

        .footer ul li a:hover {
          color: #fff;
        }
        footer{
          background-color: rgb(18,19,26);
        }
    </style>
    <title>Document</title>
</head>
<body class="bg-dark">

<nav class="navbar fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./New folder/lazadalogo.png" alt="Logo" width="140" height="50" class="d-inline-block align-text-top">
          
        </a>
        <div class="pos">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link text-secondary" href="#">Groups</a>
        </div>
        <button id="btnborder" class="btn me-5 bg-transparent fs-5 text-white login-btn">LOGIN</button>
        <button id="theme-toggle" class="btn me-5 bg-transparent fs-5 text-white">Toggle Theme</button>
    </div>
</nav>
<section class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <video class="mt-5 p-2 img-fluid video-back" src="Markysgaming.mp4" autoplay loop muted></video>
    </div>
    <div class="col-md-6">
      <video class="mt-5 p-2 img-fluid video-back" src="Markysgaming.mp4" autoplay loop muted></video>
    </div>
  </div>
</section>



<div class="mt-5 container mb-5">

<div class="card text-center bg-transparent">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link text-white" aria-current="true" href="#" onclick="showCategoryContent(1)">Mecanicus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" onclick="showCategoryContent(2)">Tesla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#" onclick="showCategoryContent(3)">Ferrari</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <div id="category1" class="category-content">
    <div class="row">

    
    <?php
$card1Image = "./New folder/giphy.gif";
$card1Title = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tenetur dignissimos a et. Reiciendis, veritatis.";
$card1Price = "13,252";
$card1Sold = "10.1K";
$card1Location = "Pasay City, Metro Manila";

$card2Image = "./New folder/giphy (1).gif";
$card2Title = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat asperiores laboriosam, adipisci aliquam debitis dolor.";
$card2Price = "11,070";
$card2Sold = "10.1K";
$card2Location = "Pasay City, Metro Manila";

$card3Image = "./New folder/giphy (2).gif";
$card3Title = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum non iste ut veniam omnis adipisci!";
$card3Price = "12,434";
$card3Sold = "10.1K";
$card3Location = "Pasay City, Metro Manila";
?>

<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="card bg-grey">
    <div class="card_header">
      <a href="<?php echo $card1Image; ?>" target="_blank">
        <img src="<?php echo $card1Image; ?>" alt="Learn to Code" class="card-img-top">
      </a>
    </div>
    <div class="card-body text-start">
      <div class="text-white"><?php echo $card1Title; ?></div>
      <span class="bg-warning badge text-start">
        <i class="fa-solid fa-peso-sign"></i>
        2 off
      </span>
      <div class="row">
        <div class="col-9">
          <h5 class="mt-3 text-danger">
            <i class="fa-solid fa-peso-sign"></i> <?php echo $card1Price; ?> / month
          </h5>
        </div>
        <div class="col-3">
          <span class="bg-success badge text-end">Free</span>
        </div>
      </div>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span class="mb-3 text-white"><?php echo $card1Sold; ?> sold</span>
      <p class="mb-3 text-secondary"><?php echo $card1Location; ?></p>
    </div>
    <div class="card-content container mb-5"></div>
  </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="card bg-grey">
    <div class="card_header">
      <a href="<?php echo $card2Image; ?>" target="_blank">
        <img src="<?php echo $card2Image; ?>" alt="Learn to Code" class="card-img-top">
      </a>
    </div>
    <div class="card-body text-start">
      <div class="text-white"><?php echo $card2Title; ?></div>
      <span class="bg-warning badge text-start">
        <i class="fa-solid fa-peso-sign"></i>
        2 off
      </span>
      <div class="row">
        <div class="col-9">
          <h5 class="mt-3 text-danger">
            <i class="fa-solid fa-peso-sign"></i> <?php echo $card2Price; ?> / month
          </h5>
        </div>
        <div class="col-3">
          <span class="bg-success badge text-end">Free</span>
        </div>
      </div>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span class="mb-3 text-white"><?php echo $card2Sold; ?> sold</span>
      <p class="mb-3 text-secondary"><?php echo $card2Location; ?></p>
    </div>
    <div class="card-content container mb-5"></div>
  </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
  <div class="card bg-grey">
    <div class="card_header">
      <a href="<?php echo $card3Image; ?>" target="_blank">
        <img src="<?php echo $card3Image; ?>" alt="Learn to Code" class="card-img-top">
      </a>
    </div>
    <div class="card-body text-start">
      <div class="text-white"><?php echo $card3Title; ?></div>
      <span class="bg-warning badge text-start">
        <i class="fa-solid fa-peso-sign"></i>
        2 off
      </span>
      <div class="row">
        <div class="col-9">
          <h5 class="mt-3 text-danger">
            <i class="fa-solid fa-peso-sign"></i> <?php echo $card3Price; ?> / month
          </h5>
        </div>
        <div class="col-3 mb-5">
          <span class="bg-success badge text-end">Free</span>
        </div>
      </div>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
      <span class="mb-3 text-white"><?php echo $card3Sold; ?> sold</span>
      <p class="mb-3 text-secondary"><?php echo $card3Location; ?></p>
    </div>
    <div class="card-content container mb-5"></div>
  </div>
</div>


    </div>
    </div>
    <div id="category2" class="category-content text-start" style="display: none;">
    <div class="row">

    <?php
include 'data.php'
?>

<div class="row mt-3">
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="card mb-3 bg-grey">
      <div class="row g-0">
        <div class="col-3">
          <img src="<?php echo $card1Image; ?>" height="120" class="img-fluid rounded-start" alt="Card Image">
        </div>
        <div class="col-6">
          <div class="card-body text-white">
            <h5 class="card-title">
              <small class="fw-bolder"><?php echo $card1Title; ?></small> (<?php echo $card1Price; ?>)
              <small class="text-secondary">by <span><?php echo $card1Seller; ?></span>,<br>Chief Executive Officer of Tesla Motors</small>
            </h5>
            <p class="card-text text-secondary"><?php echo $card1Description; ?></p>
          </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center justify-content-center p-2">
          <div class="text-right">
            <span class="mb-3"><?php echo $card1Rating; ?></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star-half" style="color: #ffea00;"></i></span>
            <span>(<?php echo $card1Sold; ?> Sold)</span>
            <span><i class="fa-solid fa-user" style="color: White"></i></span>
          </div>
          <button style="background-color: rgb(236, 176, 1)" class="mt-4 fs-5 btn btn-block container-fluid btn-success fw-bolder">Buy now</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="card mb-3 bg-grey">
      <div class="row g-0">
        <div class="col-3">
          <img src="<?php echo $card2Image; ?>" height="120" class="img-fluid rounded-start" alt="Card Image">
        </div>
        <div class="col-6">
          <div class="card-body text-white">
            <h5 class="card-title">
              <small class="fw-bolder"><?php echo $card2Title; ?></small> (<?php echo $card2Discount; ?>)
              <small class="text-secondary"><br><span><i class="fa-solid fa-clock" style="color: #ffea00;"></i> <?php echo $card2Time; ?></span>, by <span><?php echo $card2Seller; ?></span>,<br>Chief Executive Officer of Tesla Motors</small>
            </h5>
            <p class="card-text text-secondary"><?php echo $card2Description; ?></p>
          </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center justify-content-center p-2">
          <div class="text-right">
            <span class="mb-3"><?php echo $card2Rating; ?></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span>(<?php echo $card2Sold; ?> Sold)</span>
            <span><i class="fa-solid fa-user" style="color: White"></i></span>
          </div>
          <button style="background-color: rgb(236, 176, 1);" class="mt-4 fs-5 btn btn-block container-fluid btn-success fw-bolder">Buy now</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="card mb-3 bg-grey">
      <div class="row g-0">
        <div class="col-3">
          <img src="<?php echo $card3Image; ?>" height="120" class="img-fluid rounded-start" alt="Card Image">
        </div>
        <div class="col-6">
          <div class="card-body text-white">
            <h5 class="card-title">
              <small class="fw-bolder"><?php echo $card3Title; ?></small> (<?php echo $card3Price; ?>)
              <small class="text-secondary">by <span><?php echo $card3Seller; ?></span>,<br>Chief Executive Officer of Tesla Motors</small>
            </h5>
            <p class="card-text text-secondary"><?php echo $card3Description; ?></p>
          </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center justify-content-center p-2">
          <div class="text-right">
            <span class="mb-3"><?php echo $card3Rating; ?></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
            <span><i class="fa-solid fa-star-half" style="color: #ffea00;"></i></span>
            <span>(<?php echo $card3Sold; ?> Sold)</span>
            <span><i class="fa-solid fa-user" style="color: White"></i></span>
          </div>
          <button style="background-color: rgb(236, 176, 1);" class="mt-4 fs-5 btn btn-block container-fluid btn-success fw-bolder">Buy now</button>
        </div>
      </div>
    </div>
  </div>
</div>



    </div>
</div>

    <div id="category3" class="category-content" style="display: none;">
    <div class="row">

    
    <?php
$items = [
    [
        'image' => './New folder/giphy (11).gif',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, inventore! Ab perferendis, officiis non quos numquam autem consequatur odio deleniti totam atque rem obcaecati, doloribus animi! Dolorem maiores accusamus modi.',
        'price' => '13,252',
        'rating' => '4.8',
        'sold' => '10.1K',
        'location' => 'Pasay City, Metro Manila'
    ],
    [
        'image' => './New folder/giphy (12).gif',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse alias aliquam repudiandae molestias facere deserunt nam voluptatibus ducimus in reprehenderit veritatis quibusdam aspernatur blanditiis rem vitae, officiis, debitis aperiam. Placeat.',
        'price' => '11,070',
        'rating' => '5',
        'sold' => '11.5K',
        'location' => 'Pasay City, Metro Manila'
    ],
    [
        'image' => './New folder/giphy (14).gif',
        'description' => 'Lorem ipsum dolor. Dolorem laborum voluptate, placeat pariatur aperiam eos doloremque sit eaque consequuntur omnis ea quibusdam quas amet.',
        'price' => '11,070',
        'rating' => '4.8',
        'sold' => '14.5K',
        'location' => 'Pasay City, Metro Manila'
    ]
];

foreach ($items as $item) {
    echo '<div class="col-lg-4 col-md-6 col-sm-12">';
    echo '<div class="card bg-grey">';
    echo '<div class="card_header">';
    echo '<a href="' . $item['image'] . '" target="_blank">';
    echo '<img src="' . $item['image'] . '" alt="Learn to Code" class="card-img-top">';
    echo '</a>';
    echo '</div>';
    echo '<div class="card-body text-start">';
    echo '<div class="text-white">' . $item['description'] . '</div>';
    echo '<span class="bg-warning badge text-start">';
    echo '<i class="fa-solid fa-peso-sign"></i> 2 off';
    echo '</span>';
    echo '<div class="row">';
    echo '<div class="col-9">';
    echo '<h5 class="mt-3 text-danger"><i class="fa-solid fa-peso-sign"></i> ' . $item['price'] . ' / month</h5>';
    echo '</div>';
    echo '<div class="col-3">';
    echo '<span class="bg-success badge text-end">Free</span>';
    echo '</div>';
    echo '</div>';
    echo '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
    echo '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
    echo '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
    echo '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
    echo '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
    echo '<span class="mb-3 text-white">' . $item['sold'] . ' sold</span>';
    echo '<p class="mb-3 text-secondary">' . $item['location'] . '</p>';
    echo '</div>';
    echo '<div class="card-content container mb-5"></div>';
    echo '</div>';
    echo '</div>';
}
?>



</div>




  </div>
  </div>
</div>
</div>
  <footer class="footer text-secondary" >
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Learn More</h5>
        <p>Blog <br>Facebook Page</p>
        
      </div>
      <div class="col-md-3">
        <h5>Legal</h5>
        <p>Privacy Policy<br>Terms & Condition</p>
      </div>
      <div style="background-image: url('./New folder/footer_logo_bg.png'); background-repeat: no-repeat;
            
            
            " class="col-md-3">
        <img style="margin-top: -10px;" class="img-fluid" src="./New folder/lazadalogo.png" height="100" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <p>&copy; 2023 Lazada. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<script>
    // JavaScript code to add active class and highlight the active navbar item
    const navbarItems = document.querySelectorAll('.navbar .pos a');

    navbarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all navbar items
            navbarItems.forEach(navItem => {
                navItem.classList.remove('active');
            });

            // Add active class to the clicked navbar item
            this.classList.add('active');
        });
    });

       // JavaScript code to toggle white mode and dark mode
       const themeToggle = document.getElementById('theme-toggle');
    const body = document.querySelector('body');

    themeToggle.addEventListener('click', function () {
      body.classList.toggle('bg-white');
    });

    function showCategoryContent(category) {
    // Hide all category contents
    const categoryContents = document.querySelectorAll('.category-content');
    categoryContents.forEach(content => {
      content.style.display = 'none';
    });
  
    // Show the selected category content
    const selectedContent = document.getElementById(`category${category}`);
    selectedContent.style.display = 'block';
  }
</script>

</body>
</html>
