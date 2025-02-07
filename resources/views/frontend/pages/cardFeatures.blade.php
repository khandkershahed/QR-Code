<x-frontend-app-layout :title="'Card Features || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="text-center page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover"
        style="background-image: url({{ asset('images/feature-img.png') }});">
        <div class="container">
            <div class="text-black banner-inner pt-70 rpt-60">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardPlan->title }} Plans
                </h1>
                {{-- <p>{{ $cardProduct->short_description }}</p> --}}
            </div>
        </div>
    </section>
    {{-- Static Section --}}
    <section id="features" class="features-area item-full text-center cell-items default-padding ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center pt-50">
                        <h2><span>What’s Ahead & What You Get</span></h2>
                        <h4>Enhance Your Networking with NFC & Digital vCards</h4>
                    </div>
                </div>
            </div>
            <div class="row features-items">
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fa-solid fa-id-card"></i>
                        </div>
                        <div class="info">
                            <h4>Smart NFC Business Cards</h4>
                            <p>Instantly share your contact details with just a tap using our NFC-enabled smart cards.
                                No apps needed, just seamless and professional networking.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="info">
                            <h4>Digital vCard Profiles</h4>
                            <p>Create and manage digital vCards for your team. Customize profiles with links, contact
                                info, and branding for a professional online presence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="info">
                            <h4>Team Management Dashboard</h4>
                            <p>Effortlessly organize and update your team’s digital profiles. Manage access, branding,
                                and analytics in one centralized platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-qrcode"></i>
                        </div>
                        <div class="info">
                            <h4>Custom QR Code Integration</h4>
                            <p>Generate unique QR codes for each digital vCard, making it easy to share contact details
                                in multiple ways, including print and digital formats.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="info">
                            <h4>Analytics & Insights</h4>
                            <p>Track engagement with real-time analytics. See who views your vCard, how often, and
                                optimize your networking strategy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="info">
                            <h4>Secure Data & Privacy</h4>
                            <p>Ensure your team’s contact information stays safe with advanced security measures and
                                customizable privacy settings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Static Section End --}}
    <section class="plan-box-container pt-50 pb-50 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <h2 class="my-3 title text-center">For Your {{ ucfirst($cardPlan->card_type) }} <i
                                    class="fa-solid fa-users-cog"></i> Plans!</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Feature</th>
                                            <th class="text-center">Include</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($features as $feature)
                                            <tr>
                                                <td class="text-start"><strong>{{ $feature }}</strong></td>
                                                <td class="text-center">
                                                    <i class="fa-solid fa-check text-info"></i>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <img src="{{ asset('images/compare.jpg') }}" alt="">
        </div>
    </section>
    <section>
        <div class="container mt-50">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h2 class="mb-3 title text-center">Compare Our <br> <span class="text-success">Team &
                            Individual</span> Plans Features!</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Feature</th>
                                    <th class="text-center">Individual</th>
                                    <th class="text-center">Teams</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start">Branded Profile</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Lead Capture</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Social Media Integration</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Custom Links</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Photo Gallery</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Embed Videos</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Upload Files</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Company Profile</td>
                                    <td class="text-center"><i class="fa-solid fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Team Directory</td>
                                    <td class="text-center"><i class="fa-solid fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Number of Profiles</td>
                                    <td class="text-center">Up to 3</td>
                                    <td class="text-center">1 per User</td>
                                </tr>
                                <tr>
                                    <td class="text-start">Apple & Google Wallet Integration</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Smart NFC Card Included</td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fa-solid fa-check text-success"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="mt-3 text-center">
                        For a comprehensive comparison, please visit GoFlixza official <a
                            href="https://www.goflixza.com" target="_blank" class="text-info">Compare Plans</a> page.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-frontend-app-layout>
