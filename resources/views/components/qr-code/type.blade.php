<style>
    /* Default: Small screens (below 768px) show 1 column */
    .qr_type_hover-type {
        width: 100%;
        /* Full width for small screens */
    }

    /* Medium screens (768px to 1919px) show 6 columns */
    @media (min-width: 768px) and (max-width: 1919px) {
        .qr_type_hover-type {
            flex: 0 0 50%;
            /* 6 columns per row, each taking up 25% */
            max-width: 50%;
        }
    }
    @media (min-width: 400px) and (max-width: 768px) {
        .qr_type_hover-type {
            flex: 0 0 100%;
            /* 6 columns per row, each taking up 25% */
            max-width: 100%;
        }
    }

    /* Large screens (1920px and above) show 4 columns */
    @media (min-width: 1920px) {
        .qr_type_hover-type {
            flex: 0 0 33.33%;
            /* 4 columns per row, each taking up 33% */
            max-width: 33.33%;
        }
    }
</style>
<div class="row fv-row">
    @foreach ($types as $type)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 qr_type_hover qr_type_hover-type">
            <input type="radio" class="btn-check qr_type_radio" name="qr_type" value="{{ $type['value'] }}"
                id="type-{{ $type['id'] }}" />
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex align-items-center mb-5 p-0 checkbbox-for-qr"
                for="type-{{ $type['id'] }}">
                <span class="svg-icon svg-icon-4x me-4 bg-light-primary py-10 px-5 text-white">
                    <img class="img-fluid" width="33px" src="{{ $type['image'] }}" alt="">
                </span>
                <span class="d-block fw-bold text-start">
                    <span class="fw-bolder d-block fs-3 check-maintext">{{ $type['title'] }}</span>
                    <span class="fw-bold fs-6 check-subtext">
                        {{ $type['text'] }}
                    </span>
                </span>
            </label>
        </div>
    @endforeach
</div>



@push('scripts')
    <script>
        document.querySelectorAll('.qr_type_radio').forEach(radio => {
            radio.addEventListener('change', event => {
                if (radio.checked) {
                    // Assuming `myStepperComponent` is your stepper component instance
                    // You might need to replace this with your actual stepper instance or its identifier
                    const stepper = document.querySelector('[data-kt-stepper]');
                    if (stepper) {
                        const stepperInstance = KTStepper.getInstance(stepper);
                        if (stepperInstance) {
                            stepperInstance.goNext();
                        } else {
                            console.error('Stepper instance not found.');
                        }
                    } else {
                        console.error('Stepper element not found.');
                    }
                }
            });
        });
    </script>
@endpush
