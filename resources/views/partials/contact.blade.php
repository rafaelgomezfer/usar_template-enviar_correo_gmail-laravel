<section class="contact py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mr-lg-5 col-12">
                <div class="google-map w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.0322296154905!2d-77.07154228561912!3d-11.972270443777795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce39c9f9ffad%3A0xa9bf114c3ce4f7d0!2sCalle%20Rio%20Oxapampa%20557%2C%20Los%20Olivos%2015304!5e0!3m2!1ses!2spe!4v1597813739782!5m2!1ses!2spe" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                    <div class="contact-info-item">
                        <h3 class="mb-3 text-white">Say hello</h3>
                        <p class="footer-text mb-0">51+ 993 121 044</p>
                        <p><a href="mailto:hello@company.co">cesiamotta@gmail.com</a></p>
                    </div>

                    <ul class="social-links">
                        <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                        <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                        <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="contact-form">
                    <h2 class="mb-4">Interested to work together? Let's talk</h2>

                    <form action="{{route('messages')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" id="name" required>
                            </div>

                            <div class="col-lg-6 col-12">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                            </div>

                            <div class="col-12">
                                <input type="subject" class="form-control" name="subject" placeholder="Asunto" id="subject" required>
                            </div>

                            <div class="col-12">
                            <textarea name="body" rows="6" class="form-control" id="message" placeholder="Message" required></textarea>
                            </div>

                            <div class="ml-lg-auto col-lg-5 col-12">
                            <input type="submit" class="form-control submit-btn" value="Send Button">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
