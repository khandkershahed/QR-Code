<x-app-layout :title="'NFC Card Create'">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap mb-10 w-100 bg-light-success rounded-3">
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Build
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Customize
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Set Up
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Done
                                        </h3>

                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form class="form mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                            <div class="mb-5">
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <h3>Create Business Card</h3>
                                    <div class="row">
                                        <p>User Info</p>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Profile Image</label>
                                                <input type="file" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="Ashley James" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">First name</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="first_name" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Designation</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="designation" placeholder="CXO, Founding Designer"
                                                    value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Department</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="department" placeholder="CXO, Founding Designer"
                                                    value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Pronouns</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Company</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Summary</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Company logo</label>
                                                <input type="file" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Logo Size</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Location</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="fv-row mb-5">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="profile_image" placeholder="she/her" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <p class="fw-bold">CONTACT DETAILS
                                            <br>
                                            <small>Add contact information.</small>
                                        </p>
                                        {{-- Phone Repeater --}}
                                        <div class="col-lg-12 pt-4">
                                            <div id="kt_docs_repeater_basic">
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Phone</label>
                                                                    <input type="text"
                                                                        class="form-control mb-2 mb-md-0"
                                                                        placeholder="Enter full name" />
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id=""
                                                                        class="form-select">
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                        class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9 bt-sm">
                                                                        <i class="ki-duotone ki-trash fs-5"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <a href="javascript:;" data-repeater-create=""
                                                        class="btn btn-flex btn-light-primary btn-sm">
                                                        <i class="ki-duotone ki-plus fs-3"></i> Add
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Email Repeater --}}
                                        <div class="col-lg-12 pt-4">
                                            <div id="kt_docs_repeater_basic">
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email"
                                                                        class="form-control mb-2 mb-md-0"
                                                                        placeholder="Enter full name" />
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id=""
                                                                        class="form-select">
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                        class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9 bt-sm">
                                                                        <i class="ki-duotone ki-trash fs-5"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <a href="javascript:;" data-repeater-create=""
                                                        class="btn btn-flex btn-light-primary btn-sm">
                                                        <i class="ki-duotone ki-plus fs-3"></i> Add
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Website Repeater --}}
                                        <div class="col-lg-12 pt-4">
                                            <div id="kt_docs_repeater_basic">
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label class="form-label">Website</label>
                                                                    <input type="text"
                                                                        class="form-control mb-2 mb-md-0"
                                                                        placeholder="Enter full name" />
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id=""
                                                                        class="form-select">
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                        class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9 bt-sm">
                                                                        <i class="ki-duotone ki-trash fs-5"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <a href="javascript:;" data-repeater-create=""
                                                        class="btn btn-flex btn-light-primary btn-sm">
                                                        <i class="ki-duotone ki-plus fs-3"></i> Add
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- SOCIAL LINKS Repeater --}}
                                        <div class="col-lg-12 pt-4">
                                            <div id="kt_docs_repeater_basic">
                                                <div class="form-group">
                                                    <div data-repeater-list="kt_docs_repeater_basic">
                                                        <div data-repeater-item>
                                                            <div class="form-group row">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">Social Link Name</label>
                                                                    <input type="text"
                                                                        class="form-control mb-2 mb-md-0"
                                                                        placeholder="Enter full name" />
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label">Social Link</label>
                                                                    <input type="text"
                                                                        class="form-control mb-2 mb-md-0"
                                                                        placeholder="Enter full name" />
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label class="form-label">Type</label>
                                                                    <select name="" id=""
                                                                        class="form-select">
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                        <option value=""></option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <a href="javascript:;" data-repeater-delete=""
                                                                        class="btn btn-flex btn-sm btn-light-danger mt-3 mt-md-9 bt-sm">
                                                                        <i class="ki-duotone ki-trash fs-5"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span><span
                                                                                class="path3"></span><span
                                                                                class="path4"></span><span
                                                                                class="path5"></span>
                                                                        </i> Delete
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mt-5">
                                                    <a href="javascript:;" data-repeater-create=""
                                                        class="btn btn-flex btn-light-primary btn-sm">
                                                        <i class="ki-duotone ki-plus fs-3"></i> Add
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="fv-row mb-10">
                                    <div class="row">
                                        <p>Customize Business Card</p>
                                        <div class="col-lg-4">
                                            <label class="form-label">Primary color</label>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="color" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name"
                                                        style="width: 55px; height: 40px;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Profile text color</label>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="color" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name"
                                                        style="width: 55px; height: 40px;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Secondary color</label>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name" />
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="color" class="form-control mb-2 mb-md-0"
                                                        placeholder="Enter full name"
                                                        style="width: 55px; height: 40px;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Title font size</label>
                                            <input type="text" class="form-control mb-2 mb-md-0"
                                                placeholder="Enter full name" />
                                        </div>
                                        <div class="col-lg-8">
                                            <label class="form-label">Title font size</label>
                                            <select name="" id="" class="form-select mb-2 mb-md-0">
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column" data-kt-stepper-element="content">
                                <div>
                                    <h4>SELECT A TEMPLATE</h4>
                                </div>
                                <div>
                                    {{-- Templates --}}
                                    <div class="card ">
                                        <div class="card-body rounded-4 p-0  py-5">
                                            <x-qr-code.template :templates="[
                                                [
                                                    'id' => 31,
                                                    'value' => 'template_one',
                                                    'image_url' =>
                                                        'https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Default/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 32,
                                                    'value' => 'template_two',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Swirl/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 33,
                                                    'value' => 'template_three',
                                                    'image_url' =>
                                                        'https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Gradient/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 34,
                                                    'value' => 'template_four',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Blue%20Dream/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 35,
                                                    'value' => 'template_five',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Retro%20Funk/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 36,
                                                    'value' => 'template_six',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Nature%20Earth/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 37,
                                                    'value' => 'template_seven',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Sunny%20Day/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 38,
                                                    'value' => 'template_eight',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Dark%20Mode/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 39,
                                                    'value' => 'template_nine',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Frame/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 40,
                                                    'value' => 'template_ten',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Ocean%20Breeze/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                                [
                                                    'id' => 41,
                                                    'value' => 'template_eleven',
                                                    'image_url' =>
                                                        'https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Edgy%20Graffiti/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404',
                                                ],
                                            ]" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="row pb-5">
                                    <div class="col-lg-12">
                                        <div class="w-100">
                                            <div class="pb-8 pb-lg-10">
                                                <h2 class="fw-bold text-gray-900">Your Are Done!</h2>
                                                <div class="text-muted fw-semibold fs-6">
                                                    If you need more info, please
                                                    <a href="" type="button" class="btn btn-primary"
                                                        data-kt-stepper-action="submit">
                                                        <span class="indicator-label">
                                                            Submit Now
                                                        </span>
                                                        <span class="indicator-progress">
                                                            Please wait... <span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="mb-0">
                                                <div class="fs-6 text-gray-600 mb-5">
                                                    Writing headlines for blog posts is as much an art as it is a
                                                    science
                                                    and probably warrants its own post, but for all advise is with
                                                    what
                                                    works for your great &amp; amazing audience.
                                                </div>


                                                <div
                                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                                    <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i>

                                                    <div class="d-flex flex-stack flex-grow-1 ">
                                                        <div class=" fw-semibold">
                                                            <h4 class="text-gray-900 fw-bold">We need your
                                                                attention!</h4>

                                                            <div class="fs-6 text-gray-700 ">To start using great
                                                                tools, please, <a
                                                                    href="/metronic8/demo1/utilities/wizards/vertical.html"
                                                                    class="fw-bold">Create Team Platform</a></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="d-flex flex-stack">
                        <div class="me-2">
                            <button type="button" class="btn btn-light btn-active-light-primary"
                                data-kt-stepper-action="previous">
                                Back
                            </button>
                        </div>

                        <div>
                            <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                Continue
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h3>Preview</h3>
                        <img class="img-fluid" src="https://i.ibb.co/Xk793wv/Screenshot-1.png" alt="QR Code">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-around align-items-center">
                    <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
                    <a href="#" class="btn btn-light btn-primary w-100">Download</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        {{-- <script>
            // Stepper lement
            var element = document.querySelector("#kt_stepper_example_clickable");

            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Handle navigation click
            stepper.on("kt.stepper.click", function(stepper) {
                stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
            });

            // Handle next step
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });

            // Handle previous step
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script> --}}
        <script>
            $('#kt_docs_repeater_basic').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
    @endpush
</x-app-layout>
