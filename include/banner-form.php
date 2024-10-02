<form action="#" class="form_submission" method="POST">
    <div class="BannerForm">
        <div class="Salestextimage">
            <img data-src="images/Cube-images/salevector.png" class="img-fluid lazy" alt="banner-form">
        </div>
        <input type="hidden" id="location" name="locationURL" value="https://theweboclock.com/">
        <script type="text/javascript">
            document.getElementById('location').value = window.location.href;
        </script>                    
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                </div>
            </div>
        </div>
        <input type="hidden" name="msg" value="no message">
    </div>
    <button type="submit" class="btn btnStarted">Get Started</button>
    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
    <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
    </div>
    <div class="loader" style="display: none">
        <img alt="loader" src="images/loader.gif">
    </div>
</form>