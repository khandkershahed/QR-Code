<x-admin-app-layout :title="'Card Products Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">Edit Card Products</h1>
                <p class="text-white mt-2 mb-0">Update the details of the existing Card Products in this page.</p>
            </div>
            <div>
                <a href="{{ route('admin.card-product.index') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Card Products">
                    <i class="fa-solid fa-user-plus"></i>Card Products List
                </a>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.card-product.update', $card_product->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Title Input -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="name"
                                    class="col-form-label fw-bold fs-6">{{ __('Name') }}</x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name" :value="old('name', $card_product->name)"
                                    placeholder="Enter the Card Product name" required />
                            </div>
                            <div class="col-lg-2 mb-5">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Package Price') }}</x-metronic.label>
                                <x-metronic.input id="package_price" type="number" name="package_price" :value="old('package_price', $card_product->package_price)"
                                    placeholder="Enter the package_Price" required />
                            </div>
                            <!-- Price Input -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6">{{ __('Price') }}</x-metronic.label>
                                <x-metronic.input id="price" type="number" name="price" :value="old('price', $card_product->price)"
                                    placeholder="Enter the Price" required />
                            </div>

                            <!-- Currency Selector -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="currency"
                                    class="col-form-label fw-bold fs-6">{{ __('Currency') }}</x-metronic.label>
                                <x-metronic.select-option id="currency" name="currency" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="eur" @selected(old('currency', $card_product->currency) == 'eur')>Euro</option>
                                    <option value="gbp" @selected(old('currency', $card_product->currency) == 'gbp')>Pound</option>
                                    <option value="usd" @selected(old('currency', $card_product->currency) == 'usd')>US Dollar</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- Status Selector -->
                            <div class="col-lg-5 mb-5">
                                <x-metronic.label for="status"
                                    class="col-form-label required fw-bold fs-6">{{ __('Select a Status') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="active" @selected(old('status', $card_product->status) == 'active')>Active</option>
                                    <option value="inactive" @selected(old('status', $card_product->status) == 'inactive')>Inactive</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-lg-7 mb-7">
                                <x-metronic.label for="image"
                                    class="col-form-label required fw-bold fs-6">{{ __('Image') }}</x-metronic.label>
                                <x-metronic.file-input id="image" type="file" :source="asset('storage/'.$card_product->image)"
                                    name="image"></x-metronic.file-input>
                                {{-- @if ($card_product->image)
                                    <img src="{{ asset($card_product->image) }}" alt="Card Product Image" class="mt-3"
                                        style="max-height: 100px;">
                                @endif --}}
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="thumbnail_image"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Thumbnail Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="thumbnail_image" type="file" name="thumbnail_image" :source="asset('storage/'.$card_product->thumbnail_image)"
                                    ></x-metronic.file-input>
                            </div>

                            <!-- Short Description -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="short_description"
                                    class="col-form-label required fw-bold fs-6">{{ __('Short Description') }}</x-metronic.label>
                                <textarea class="form-control @error('short_description') is-invalid @enderror" id="short_description"
                                    name="short_description" placeholder="Enter short description" required>{{ old('short_description', $card_product->short_description) }}</textarea>
                                @error('short_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="description"
                                    class="col-form-label fw-bold fs-6">{{ __('Description') }}</x-metronic.label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    placeholder="Enter full description">{{ old('description', $card_product->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Shipping Description -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="shipping_description"
                                    class="col-form-label fw-bold fs-6">{{ __('Shipping Description') }}</x-metronic.label>
                                <textarea class="form-control @error('shipping_description') is-invalid @enderror" id="shipping_description"
                                    name="shipping_description" placeholder="Enter shipping description">{{ old('shipping_description', $card_product->shipping_description) }}</textarea>
                                @error('shipping_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Note -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="note"
                                    class="col-form-label fw-bold fs-6">{{ __('Short Note') }}</x-metronic.label>
                                <textarea class="form-control @error('note') is-invalid @enderror" id="note" name="note"
                                    placeholder="Enter short note">{{ old('note', $card_product->note) }}</textarea>
                                @error('note')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Additional Plan Descriptions -->
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-sm p-0 mt-13">
                                    <div class="p-3 py-5">
                                        <h3 class="mb-0 fw-normal">Add Provided Services</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table product text-center table-striped"
                                                style="margin-bottom: 0;">
                                                <thead style="vertical-align: middle">
                                                    <tr class="bg-info">
                                                        <th width="5%" class="fw-bold text-white text-center">Sl
                                                        </th>
                                                        <th width="90%" class="fw-bold text-white text-center">Plan
                                                            Details</th>
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
                                                    @foreach (json_decode($card_product->plan_descriptions ?? '[]') as $description)
                                                        <tr>
                                                            <td colspan="2">
                                                                <input type="text"
                                                                    class="form-control form-control-sm w-100"
                                                                    name="plan_descriptions[]"
                                                                    value="{{ $description }}" required>
                                                                </td>
                                                            <td width="5%" class="text-center" style="vertical-align: middle;">
                                                                <a href="javascript:void(0)"
                                                                    class="bg-danger removeRow p-1 px-2"><i
                                                                        class="fas fa-minus icons_design text-white"></i></a>
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
                </div>

                <!-- Submit Button -->
                <div class="text-end pt-5">
                    <button type="submit" class="btn btn-info">{{ __('Save Changes') }}</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Add Row
                $(".addRow").on("click", function() {
                    var newRow =
                        '<tr><td colspan="2"><input type="text" class="form-control form-control-sm" name="plan_descriptions[]" required></td>' +
                        '<td class="text-center" style="vertical-align: middle;"><a href="javascript:void(0)" class="bg-danger removeRow p-1 px-2">' +
                        '<i class="fas fa-minus icons_design text-white"></i></a></td></tr>';

                    $(".repeater").append(newRow);
                });

                // Remove Row
                $(".repeater").on("click", ".removeRow", function() {
                    $(this).closest("tr").remove();
                });
            });
        </script>
    @endpush
</x-admin-app-layout>
