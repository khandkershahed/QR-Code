<div class="row fv-row">
    @foreach ($types as $type)
        <div class="col-lg-4 qr_type_hover">
            <input type="radio" class="btn-check qr_type_radio" name="qr_type" value="{{ $type['value'] }}"
                {{ $loop->first ? 'checked' : '' }} id="type-{{ $type['id'] }}" />
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default d-flex align-items-center mb-5 p-0 checkbbox-for-qr"
                for="type-{{ $type['id'] }}">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-4x me-4 bg-light-primary py-10 px-5 text-white">
                    <img class="img-fluid" width="33px" src="{{ $type['image'] }}" alt="">
                </span>
                <!--end::Svg Icon-->

                <span class="d-block fw-bold text-start">
                    <span class="fw-bolder d-block fs-3 check-maintext">{{ $type['title'] }}</span>
                    <span class="fw-bold fs-6 check-subtext">
                        {{ $type['text'] }}
                    </span>
                </span>
            </label>
            <!--end::Option-->
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
