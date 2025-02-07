<x-frontend-app-layout :title="'Card Features || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="plan-box-container">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            {{ $cardPlan->title }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row text-center">
                                <h6 class="mb-0 title">For {{ ucfirst($cardPlan->card_type) }}</h6>
                                @foreach ($features as $feature)
                                    <p class="mb-0">{{ $feature }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
