<style>
    .window {
        width: 400px;
        margin: auto;
        border: 7px solid #1d505d;
        border-radius: 5px;
        box-shadow: 0px 20px 46px 2px #bcc6ff;
        cursor: n-resize;
    }

    .window img {
        width: 100%;
        object-fit: cover;
        object-position: top;
        height: 500px;
        transition: 11s all ease;
    }

    .window img:hover {
        object-position: bottom;
    }

    .credit {
        font-weight: 300;
        text-align: center;
        margin-top: 6rem;
        color: #b6bee8;
        font-size: 14px;
    }

    .credit:hover span {
        color: #e91e63;
    }

    .credit:hover a {
        color: #e91e63;
        border-color: #e91e63;
    }

    .credit span {
        color: #b6bee8;
        transition: ease all 8s;
    }

    .credit a {
        color: #b6bee8;
        transition: ease-in all 700ms;
        -webkit-text-decoration: none;
        text-decoration: none;
        border-bottom: 2px solid #b6bee8;
    }

    .credit a:hover {
        color: #fff;
        box-shadow: inset 0 -5.5rem 0 #e91e63;
        border-bottom: 2px solid #e91e63;
    }

    .btn-check:active+.btn.custom-active,
    .btn-check:checked+.btn.custom-active,
    .btn.custom-active.active,
    .btn.custom-active.show,
    .btn.custom-active:active:not(.btn-active),
    .btn.custom-active:focus:not(.btn-active),
    .btn.custom-active:hover:not(.btn-active),
    .show>.btn.custom-active {
        opacity: 0.8;
    }
</style>

@props([
    'templates' => [],
    'selectedTemplate' => null, // Default to null if not provided
])


<div class="row mt-10">
{{-- slider here --}}
<div class="slider-container mt-10">
    @php
        $counter = 0;
    @endphp
    @foreach ($templates as $template)
        <div class="slick-slide">
            <div class="col-lg-3 position-relative">
                <div>
                    <input type="radio" class="btn-check template-btn-check" name="nfc_template"
                        value="{{ $template['value'] }}" id="{{ $template['value'] }}"
                        @if ($counter === 0) checked @endif @checked($template['value'] == $selectedTemplate) />
                    <label class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio"
                        for="{{ $template['value'] }} ">
                        <div class="window">
                            <img src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
                        </div>
                    </label>
                </div>
            </div>
        </div>
        @php
            $counter++;
        @endphp
    @endforeach
</div>
{{-- slider here End --}}






    @php
        $counter = 0;
    @endphp

    @foreach ($templates as $template)
        <div class="col-lg-3 position-relative">
            <div>
                <input type="radio" class="btn-check template-btn-check" name="nfc_template"
                    value="{{ $template['value'] }}" id="{{ $template['value'] }}"
                    @if ($counter === 0) checked @endif @checked($template['value'] == $selectedTemplate) />
                <label
                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio"
                    for="{{ $template['value'] }} ">
                    <div class="window">
                        <img src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
                    </div>
                </label>
            </div>
        </div>
        @php
            $counter++;
        @endphp
    @endforeach
</div>

@push('scripts')
    <!-- Slick Slider JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Initialize Slick Slider -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider-container').slick({
                slidesToShow: 4,  // Show 4 items per slide (you can adjust this number)
                slidesToScroll: 1,
                infinite: true,  // Infinite loop
                arrows: true,  // Show next/prev arrows
                dots: true,  // Show pagination dots
                responsive: [
                    {
                        breakpoint: 1024,  // Breakpoint for tablets
                        settings: {
                            slidesToShow: 3,  // Show 3 items per slide on tablet
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,  // Breakpoint for mobile
                        settings: {
                            slidesToShow: 1,  // Show 1 item per slide on mobile
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endpush
