<x-frontend-app-layout :title="'Test MAIL'">

    <section id="about" class="hero-area-nine pt-165 rpt-150 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row gap-70 align-items-center">
                {!! QrCode::size('300')->style('hexagonal')->generate('Make me into a QrCode!'); !!}
                <div class="row mb-100 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <form class="mt-40" action="{{ route('mailTest.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <label for="email-address"><i class="fas fa-envelope"></i></label>
                            <input id="email-address" type="email" name="email" placeholder="Email Address"
                                required />
                        </div>
                        <div class="row">
                            <label for="email-address"><i class="fas fa-envelope"></i></label>
                            <input id="email-address" type="text" name="email_subject" placeholder="Email Subject"
                                required />
                        </div>
                        <div class="row">
                            <label for="email-address"><i class="fas fa-envelope"></i></label>
                            <textarea class="form-control" name="email_body" id="email-address" rows="5"></textarea>
                        </div>
                        <button type="submit">
                            <b>Send <i class="fas fa-arrow-right"></i></b>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero area End -->

</x-frontend-app-layout>
