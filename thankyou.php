<!-- Header -->
<?php $title = "Thank You | The Web O’Clock";
include 'include/header.php'; ?>

<style>
    header,
    footer {
        display: none;
    }
    .thankyou-banner {
        text-align: center;
        background-color: var(--theme-color);
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
    }
    a.logo-thankyou {
        display: inline-block;
        margin-bottom: 2rem;
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
        color: var(--theme-color);
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
        filter: brightness(0) invert(1);
        width: 400px;
    }
</style>
<section class="thankyou-banner">
    <div class="container">
        <a href="/" class="logo-thankyou">
            <img src="images/Cube-images/headerlogo.png" alt="headerlogo" class="img-fluid">
        </a>
        <h1>Thank You for showing <br><span>confidence in our ability to deliver.</span></h1>
        <p>Delivering robust digital solutions to businesses globally;<br>infusing bold ideas with utmost commitment.</p>
        <a href="javascript:;" class="live-chat-thank chat" onclick="setButtonURL();">Let’s Chat</a>
        <div class="clearfix"></div>
        <a href="/" class="back-home">
            <img src="images/back-home.png" alt="back-home" class="img-fluid">
        </a>
    </div>
</section>

<!-- Footer -->
<?php include 'include/footer.php'; ?>