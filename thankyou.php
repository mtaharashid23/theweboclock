<!-- Header -->
<?php $title = "Thank You | Westgreensolutionsllc";
include 'include/header.php'; ?>

<style>
    header,
    footer {
        display: none;
    }
    .thankyou-banner {
        text-align: center;
        background-color: #bd2031;
        display: -webkit-flex;
        display: inline-flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: center;
        align-items: center;
        -webkit-justify-content: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        font-size: 22px;
        color: #fff;
        line-height: 26px;
        background-size: cover;
        font-family: 'Manrope', sans-serif;
    }
    a.logo-thankyou {
        display: inline-block;
        margin-bottom: 10px;
    }
    .thankyou-banner h1 {
        font-size: 46px;
        font-weight: 600;
        margin-bottom: 22px;
        line-height: 58px;
        color: #fff;
    }
    a.live-chat-thank.chat {
        display: inline-block;
        border-radius: 50px;
        padding: 14px 70px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 40px 0;
        background-color: white;
        color: #bd2031;
        text-decoration: none;
    }
    a.back-home {
        display: block;
        width: 149px;
        margin: 0 auto;
    }
    .thankyou-banner p {
        color: white;
        font-size: 24px;
    }
    a.logo-thankyou img {
        width: 200px;
    }
</style>
<section class="thankyou-banner">
    <div class="container">
        <a href="index.php" class="logo-thankyou">
            <img data-src="images/Cube-images/headerlogo.png" alt="headerlogo" class="img-fluid lazy">
        </a>
        <h1>Thank You for showing <br><span>confidence in our ability to deliver.</span></h1>
        <p>Delivering robust digital solutions to businesses globally;<br>infusing bold ideas with utmost commitment.</p>
        <a href="javascript:;" class="live-chat-thank chat" onclick="setButtonURL();">Let’s Chat</a>
        <div class="clearfix"></div>
        <a href="index.php" class="back-home">
            <img data-src="images/back-home.png" alt="back-home" class="img-fluid lazy">
        </a>
    </div>
</section>

<!-- Footer -->
<?php include 'include/footer.php'; ?>