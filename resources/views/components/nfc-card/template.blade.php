<style>
    .custom-nfc-template {
        padding: 0px !important;
        display: flex;
        justify-content: center;
        height: 200px;
        width: 100%;
    }

    @media (max-width: 1366px) {
        .custom-nfc-template {
          height: 100px;
        }

        .nfc-type-mobile {}
    }

    @media (max-width: 768px) {
        .custom-nfc-template {
            height: auto;
        }
    }
</style>
<div class="row">
    @foreach ($templates as $template)
        <div class="col-lg-2">
            <input type="radio" class="btn-check nfc_template_radio" name="nfc_template" value="{{ $template['value'] }}"
                {{ $loop->first ? 'checked' : '' }} id="{{ $template['value'] }}">
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5 template-nfc"
                for="{{ $template['value'] }}">
                <img class="nfc-type-mobile" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
            </label>
        </div>
    @endforeach
</div>

@push('scripts')
    <script>
        document.querySelectorAll('.nfc_template_radio').forEach(radio => {
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
