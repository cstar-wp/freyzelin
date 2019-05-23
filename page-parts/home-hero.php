<section class="hero container-fluid">
    <div class="fz-wrapper">
        <div class="fz-bg">
            <div class="bg bg-main bg-ym"></div>
            <div class="bg bg-transp bg-tr"></div>
            <div class="bg bg-transp bg-tl"></div>
        </div>
        <div class="fz-content row">
            <div class="col-lg-7 col-md-12 video-section">
                <iframe id="video-resize" src="https://www.youtube.com/embed/6v2L2UGZJAM?autoplay=0&showinfo=0&controls=1&mute=1" frameborder="0"></iframe>
                <script>
                    const setVideoHeight = function() {
                        let video = document.getElementById('video-resize');
                        video.style.height = (video.offsetWidth / 1.7785).toString() + 'px'
                    }            
                    setVideoHeight();
                    window.addEventListener('resize', setVideoHeight);
                </script>
                <div class="video-text">Dipl. Ing. Jan Karlsson & Dipl. Ing Lucas Hammerer.</div>
            </div>

            <div class="col-lg-5 col-md-12 contact-form">
                <form action="" id="contact">
                    <img class="contact" src="<?= get_template_directory_uri() ?>/dist/images/icons/envelope.png" alt="envelope">
                    <label for="in-email">Subscribe to Our Newsletter.</label>
                    <input id="in-email" type="email" class="email" placeholder="EMAIL ADDRESS">
                    <button class="fz-primary-button">SUBSCRIBE</button>
                    <p class="check">
                        <label class="container">Wir informieren dich monatlich über unsere Entwicklung und allen Neuigkeiten.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>