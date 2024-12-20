<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<style>
    .wrapperss {
        padding: 70px 0;
    }

    /* Default slide */
    .center-sliders .slick-slide {
        color: #FFF;
        height: 510px;
        margin: 0 15px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0.8);
        transition: all 0.4s ease-in-out;
    }

    .center-sliders .slick-slide,
    .center-sliders .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] {
        transform: scale(0.8, 0.8);
        transition: all 0.4s ease-in-out;
    }

    /* Active center slide (You can change anything here for cenetr slide)*/
    .center-sliders .slick-center,
    .center-sliders .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] {
        transform: scale(1.1);
    }

    .center-sliders .slick-current.slick-active {
        transform: scale(1.1);
    }

    .slick-next,
    .slick-prev {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        z-index: 5;
    }

    .slick-next {
        right: 15px;
    }

    .slick-prev {
        left: 15px;
    }

    .slick-next:before,
    .slick-prev:before {
        color: #000;
        font-size: 26px;
    }

    .window {
        width: 230px;
        margin: auto;
        border: 7px solid #1d505d;
        border-radius: 5px;
        box-shadow: 15px 5px 36px 2px #bcc6ff;
        cursor: n-resize;
    }

    .window img {
        width: 100%;
        object-fit: cover;
        object-position: top;
        height: 400px;
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
    <div class="center-sliders">
        @php
            $counter = 0;
        @endphp
        @foreach ($templates as $template)
            <div class="col-lg-3 position-relative pe-0">
                <div>
                    <input type="radio" class="btn-check template-btn-check" name="nfc_template"
                        value="{{ $template['value'] }}" id="{{ $template['value'] }}"
                        @if ($counter === 0) checked @endif @checked($template['value'] == $selectedTemplate) />
                    <label
                        class="btn template-btn btn-outline btn-outline-dashed btn-active-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio"
                        for="{{ $template['value'] }}">
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
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.center-sliders').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                arrows: true,
                dots: false,
                speed: 300,
                centerPadding: '20px',
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 1200, // Screens smaller than 1200px
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            centerMode: true
                        }
                    },
                    {
                        breakpoint: 992, // Screens smaller than 992px
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 768, // Screens smaller than 768px
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 576, // Screens smaller than 576px
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    }
                ]
            });
        });
    </script>
@endpush
