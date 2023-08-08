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
            
            height: 58vh;
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
</head>
<body class="bg-dark">
    <?php
    // PHP code to fetch dynamic card and pricing data from a database or other source
    $cardsData = [
        [
            'image' => './New folder/giphy.gif',
            'title' => 'Create a function that prints/logs all the integers from 1 to 20.',
            'discount' => '2 off',
            'price' => '13,252',
            'currency' => 'Peso',
            'sold' => '10.1K sold',
            'location' => 'Pasay City, Metro Manila',
            'isFree' => true,
            'rating' => 5,
        ],
        // Add more card data as needed
    ];

    // Function to display card content dynamically
    function displayCard($card)
    {
        $isFree = $card['isFree'];
        $price = $isFree ? 'Free' : $card['price'];
        $discountBadge = $card['discount'] ? '<span class="bg-warning badge text-start"><i class="fa-solid fa-peso-sign"></i>' . $card['discount'] . '</span>' : '';
        $ratingStars = '';
        for ($i = 0; $i < $card['rating']; $i++) {
            $ratingStars .= '<span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>';
        }
        $sold = $card['sold'] ? '<span class="mb-3 text-white">' . $card['sold'] . '</span>' : '';
        $location = $card['location'] ? '<p class="mb-3 text-secondary">' . $card['location'] . '</p>' : '';

        echo '
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card bg-grey">
                    <div class="card_header">
                        <a href="' . $card['image'] . '" target="_blank">
                            <img src="' . $card['image'] . '" alt="Learn to Code" class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body text-start">
                        <div class="text-white">' . $card['title'] . '</div>
                        ' . $discountBadge . '
                        <div class="row">
                            <div class="col-9">
                                <h5 class="mt-3 text-danger"><i class="fa-solid fa-peso-sign"></i> ' . $price . ' / month</h5>
                            </div>
                            <div class="col-3">
                                <span class="bg-success badge text-end">' . ($isFree ? 'Free' : '') . '</span>
                            </div>
                        </div>
                        ' . $ratingStars . '
                        ' . $sold . '
                        ' . $location . '
                    </div>
                    <div class="card-content container mb-5"></div>
                </div>
            </div>
        ';
    }
    ?>

    <nav class="navbar fixed-top">
        <!-- navbar content... -->
    </nav>

    <section class="container-fluid">
        <!-- section content... -->
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
                        foreach ($cardsData as $card) {
                            displayCard($card);
                        }
                        ?>
                    </div>
                </div>
                <div id="category2" class="category-content text-start" style="display: none;">
                <?php
                        foreach ($cardsData as $card) {
                            displayCard($card);
                        }
                        ?>
                </div>
                <div id="category3" class="category-content" style="display: none;">
                <?php
                        foreach ($cardsData as $card) {
                            displayCard($card);
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-secondary">
        <!-- footer content... -->
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
        // JavaScript code...
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
