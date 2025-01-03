<x-admin-app-layout :title="'Card Products Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">Create Card Products!</h1>
                <p class="text-white mt-2 mb-0">All Information in this page for create a new card product..</p>
            </div>
            <div>
                <a href="{{ route('admin.card-product.index') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Card Products">
                    <i class="fa-solid fa-id-badge"></i>Card Products List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.card-product.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Title Input -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="name"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Name') }}</x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                                    placeholder="Enter the Card Product name" required />
                            </div>

                            <!-- Price Input -->
                            <div class="col-lg-2 mb-5">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Package Price') }}</x-metronic.label>
                                <x-metronic.input id="package_price" type="number" name="package_price" :value="old('package_price')"
                                    placeholder="Enter the package_Price" required />
                            </div>
                            <div class="col-lg-2 mb-5">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Singel NFC Card Price') }}</x-metronic.label>
                                <x-metronic.input id="price" type="number" name="price" :value="old('price')"
                                    placeholder="Enter the Price" required />
                            </div>
                            <!-- Currency Selector -->
                            <div class="col-lg-2 mb-5">
                                <x-metronic.label for="currency"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Currency') }}</x-metronic.label>
                                <x-metronic.select-option id="currency" name="currency" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="eur" @selected(old('currency') == 'eur')>Euro</option>
                                    <option value="gbp" @selected(old('currency') == 'gbp')>Pound</option>
                                    <option value="usd" @selected(old('currency') == 'usd')>US Dollar</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- Status Selector -->
                            <div class="col-lg-2 mb-5">
                                <x-metronic.label for="status"
                                    class="col-form-label required fw-bold fs-6 required">{{ __('Select a Status') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="active" @selected(old('status') == 'active')>Active</option>
                                    <option value="inactive" @selected(old('status') == 'inactive')>Inactive</option>
                                </x-metronic.select-option>
                            </div>

                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="image"
                                    class="col-form-label required fw-bold fs-6 required">{{ __('Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="image" type="file" name="image"
                                    required></x-metronic.file-input>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="thumbnail_image"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Thumbnail Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="thumbnail_image" type="file" name="thumbnail_image"
                                    ></x-metronic.file-input>
                            </div>

                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="short_description"
                                    class="col-form-label required fw-bold fs-6">{{ __('Short Description') }}</x-metronic.label>
                                <textarea class="form-control @error('short_description')is-invalid @enderror" id="short_description"
                                    name="short_description" placeholder="Select an option" required>
                                    {{ old('short_description') }}
                                </textarea>
                                @error('short_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="description"
                                    class="col-form-label fw-bold fs-6">{{ __('Description') }}</x-metronic.label>
                                <textarea class="form-control @error('description')is-invalid @enderror" id="description" name="description"
                                    placeholder="Select an option">
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="shipping_description"
                                    class="col-form-label fw-bold fs-6">{{ __('Shipping Description') }}</x-metronic.label>
                                <textarea class="form-control @error('shipping_description')is-invalid @enderror" id="shipping_description"
                                    name="shipping_description" placeholder="Select an option">
                                    {{ old('shipping_description') }}
                                </textarea>
                                @error('shipping_description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="note"
                                    class="col-form-label fw-bold fs-6">{{ __('Short Note') }}</x-metronic.label>
                                <textarea class="form-control @error('note')is-invalid @enderror" id="note" name="note"
                                    placeholder="Select an option">
                                    {{ old('note') }}
                                </textarea>
                                @error('note')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-sm p-0 mt-13">
                                    <div class="p-3 py-5">
                                        <h3 class="mb-0 fw-normal">Add Provided Services</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table product text-center table-striped "
                                                style="margin-bottom: 0;">
                                                <thead style="vertical-align: middle">
                                                    <tr class="bg-info">
                                                        <th width="5%" class="fw-bold text-white text-center">Sl
                                                        </th>
                                                        <th width="90%"class="fw-bold text-white text-center">Plan
                                                            Details
                                                        </th>
                                                        <th width="5%">
                                                            <div class="text-end">
                                                                <button type="button"
                                                                    class="btn btn-sm fw-bold btn-white pe-2 ps-3 py-1 addRow">
                                                                    <i class="fas fa-plus text-info"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="repeater" style="vertical-align: middle;">
                                                    <tr>
                                                        <td class="text-center">01</td>
                                                        <td>
                                                            <input type="text"
                                                                class="form-control form-control form-control-sm"
                                                                name="plan_descriptions[]"
                                                                placeholder="Enter Details" />
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button"
                                                                class="btn btn-sm fw-bold btn-danger pe-2 ps-3 removeRow">
                                                                <i class="fas fa-trash text-white"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="text-end pt-5">
                    <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function toggleInputs() {
                const type = document.getElementById('type').value;
                document.getElementById('qr-input').style.display = type === 'qr' ? 'block' : 'none';
                document.getElementById('nfc-input').style.display = type === 'nfc' ? 'block' : 'none';
            }

            $(document).ready(function() {
                function updateSerialNumbers() {
                    $(".repeater tr").each(function(index) {
                        $(this).find("td:first-child").text(index + 1);
                    });
                }

                $(".addRow").on("click", function() {
                    const newRow = `
                        <tr>
                            <td></td>
                            <td><input type="text" class="form-control form-control-sm" name="plan_descriptions[]" placeholder="Enter Details" required /></td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm fw-bold btn-danger pe-2 ps-3 removeRow">
                                    <i class="fas fa-trash text-white"></i>
                                </button>
                            </td>
                        </tr>`;
                    $(".repeater").append(newRow);
                    updateSerialNumbers();
                });

                $(document).on("click", ".removeRow", function() {
                    $(this).closest("tr").remove();
                    updateSerialNumbers();
                });
            });
        </script>
    @endpush
</x-admin-app-layout>
