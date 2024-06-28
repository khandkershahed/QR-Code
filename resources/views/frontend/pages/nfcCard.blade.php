<x-frontend-app-layout :title="'QR-Code || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="coming-soon-area py-100 bgs-cover"
        style="background-image: url({{ asset('frontend/assets/images/backgrounds/coming-soon.jpg') }})">
        <div class="container">
            <div class="row pt-10 rpt-65 gap-100 align-items-center">
                <div class="col-lg-6">
                    <div class="coming-soon-content rmb-55">
                        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            We Are Coming Very Soon
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            It looks like you've ventured into uncharted territory. The
                            page you were looking for may have been moved, deleted, or
                            never existed
                        </p>
                        <ul class="coming-soon-wrap mt-50" data-aos="fade-up" data-aos-delay="150"
                            data-aos-duration="1500" data-aos-offset="50">
                            <li><span id="days"></span>Days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Min</li>
                            <li><span id="seconds"></span>Sec</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="coming-soon-image" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <img src="{{ asset('frontend/assets/images/Others/coming-soon.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    <script>
        // ## Coming Soon CountDown //
		if($('.coming-soon-wrap').length !== 0){
                const second = 1000,
				  minute = second * 60,
				  hour = minute * 60,
				  day = hour * 24;
				let	countDown = new Date('Aug 15, 2024 00:00:00').getTime(),
			x = setInterval(function() {
			  let now = new Date().getTime(),
				  distance = countDown - now;
				document.getElementById('days').innerText = Math.floor(distance / (day)),
				document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
				document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
				document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
			  //do something later when date is reached
			  //if (distance < 0) {
			  //  clearInterval(x);
			  //  'IT'S MY BIRTHDAY!;
			  //}
			}, second)
        };
    </script>
    @endpush
</x-frontend-app-layout>
