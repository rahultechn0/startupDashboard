<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">

                    @forelse ($images as $img)
                    <li><img class="light" src="{{ asset($img->multi_image) }}" alt="XD"></li>
                    @empty
                    <p>no recoed found</p>
                    @endforelse

                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - About me</span>
                        <h2 class="title">{!! $abouts->title !!}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ !empty($abouts) ? asset('upload/about/'.$abouts->image) : asset('upload/no_image.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{!! $abouts->short_des !!}</p>
                        </div>
                    </div>
                    <p class="desc">{!! $abouts->long_des !!}</p>
                    <a href="about.html" class="btn">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>
