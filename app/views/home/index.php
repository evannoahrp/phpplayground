<body>
<div id="home">
    <div id="particles-js"></div>
    <!-- Start Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#home">Index Page</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="#home" style="margin-left: 20px">Home</a>
                    <a class="nav-link" href="#portfolio">Animations</a>
                    <a class="nav-link" href="#contact">Contact</a>
<!--                    <a class="nav-link" href="/v1/api/crud">Backend</a>-->
                    <!-- <form action="/v1/api/crud">
                      <button type="button submit" class="btn btn-secondary">Backend</button>
                    </form> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            <img src="../git/public/img/image.jpg" alt="evannoahrp" width="250" class="gambar img-thumbnail" />
            <h1 class="display-4">Evannoah Rolimarch Pratama</h1>
            <p class="display-7 lead" id="app"></p>
        </div>
    </section>
    <!-- End Jumbotron -->
</div>

<!-- Start Portfolio -->
<section id="portfolio">
    <div class="container">
        <div class="row text-center pt-4 mb-4">
            <div class="col">
                <h2>Animations</h2>
            </div>
        </div>
        <div class="row justify-content-center" id="kartuPortfolio"></div>
    </div>
</section>
<!-- End Portfolio -->

<!-- Start Contact -->
<section id="contact" class="pb-2">
    <div class="container">
        <div class="row text-center pt-4 mb-4">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>

        <div class="row justify-content-evenly mb-4">
            <!-- Info -->
            <div class="col-md-5 mb-4 xyz">
                <div class="front">
                    <!-- Loc -->
                    <div class="row">
                        <div class="col-1">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h5>Location:</h5>
                            </div>
                            <div class="row">
                                <p>Yogyakarta</p>
                            </div>
                        </div>
                    </div>
                    <!-- mail -->
                    <div class="row">
                        <div class="col-1">
                            <i class="bi bi-envelope-open-fill"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h5>Email:</h5>
                            </div>
                            <div class="row">
                                <p>evannoah11@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- phone -->
                    <div class="row">
                        <div class="col-1">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h5>Phone:</h5>
                            </div>
                            <div class="row">
                                <p>+62 822 5122 3070</p>
                            </div>
                        </div>
                    </div>
                    <!-- maps -->
                    <div class="row">
                        <iframe class="embed-responsive-item"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31622.988520204974!2d110.35733535911203!3d-7.803207571836323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Yogyakarta%20City%2C%20Special%20Region%20of%20Yogyakarta%2C%20Indonesia!5e0!3m2!1sen!2snl!4v1624873133624!5m2!1sen!2snl"
                                style="border: 0; width: 100%; height: 400px" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="back"></div>
            </div>

            <!-- Message -->
            <div class="col-md-5 mb-4 xy">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" aria-describedby="subject" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="myBtn">Submit</button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col mt-4">
                            <h4>Under develop</h4>
                        </div>
                    </div>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Your Message</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <h5 id="name1"></h5>
                                    </div>
                                    <div class="row mb-2">
                                        <p id="email1"></p>
                                    </div>
                                    <div class="row">
                                        <h6 id="subject1"></h6>
                                    </div>
                                    <div class="row">
                                        <p id="message1"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact -->