<form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
    <x-vcard.template :templates="[
    [
        'value' => 'template-one',
        'image' => 'frontend/images/nfc_template/template_one.jpg',
    ],
    [
        'value' => 'template-two',
        'image' => 'frontend/images/nfc_template/template_two.jpg',
    ],
    // [
    //     'value' => 'template-three',
    //     'image' => 'frontend/assets/images/nfc-templates/template_three.jpg',
    // ],
    // [
    //     'value' => 'template-four',
    //     'image' => 'frontend/assets/images/nfc-templates/template_four.jpg',
    // ],
    // [
    //     'value' => 'template-five',
    //     'image' => 'frontend/assets/images/nfc-templates/template_five.jpg',
    // ],
    // [
    //     'value' => 'template-six',
    //     'image' => 'frontend/assets/images/nfc-templates/template_six.jpg',
    // ],
]" />

    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary mt-6">
            <span class="indicator-label">
                Save Template
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>
