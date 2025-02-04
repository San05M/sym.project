<!DOCTYPE html>
<html lang="en">

<!--start:Intro -->
<?php require_once __DIR__ . '/intro.part.php'; ?>
<!--end:Intro -->

<body>
    <!--start: Navigation -->
    <?php require_once __DIR__ . '/navigation.part.php'; ?>
    <!--end:Navigation -->
    <main role="main">
        <section class="pt-4">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-start">
                    <div class="col-md-6">
                        <figure><img src="/public/assets/img/contacto/photo-1484755560615-a4c64e778a6c.jpg" alt="" class="img-fluid">
                        </figure>
                    </div>
                    <!-- end:col -->
                    <div class="col-md-6 pl-lg-5 pl-md-5">
                        <h2>
                            I double-majored in Illustration and Communication Arts at the Hugo Design Institute.
                        </h2>
                        <p class="lead mt-4">Add a description of your services. Aliquam at lorem tortor. Nulla eu sapien eu nibh dapibus ornare. Vestibulum posuere rhoncus elementum.</p>


                        <div class="contact-form mt-5">
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment" placeholder="Enter comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-light font-weight-bold">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- end:contact -->
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <p>
                                    <strong>New York</strong>
                                    <br>
                                Brooklyn
                                    <br>
                                    917-735-8844
                                    <br>
                               2800  Alfred Drive
                                </p>
                            </div>
                            <!-- end:col -->
                            <div class="col-md-6">
                                <p>
                                    <strong>California</strong>
                                    <br>
                                    San Diego
                                    <br>
                                    917-735-8844
                                    <br>
                                    1897  Holden Street
                                </p>
                            </div>
                            <!-- end:col -->
                        </div>
                    </div>
                    <!-- end:col -->
                </div>
                <hr class="mt-5">
            </div>
        </section>
    </main>
<!--start:footer-->
<?php require_once __DIR__ . '/footer.part.php'; ?>
<!--end:footer-->
</body>

</html>