<x-admin-app-layout :title="'Product Add'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Shipping Methods!</h1>
                <p class="text-white mt-2 mb-0">Create Shipping Method information in this page.</p>
            </div>
        </div>
        <form action="{{ route('admin.shipping-method.store') }}" method="POST">
            <div class="card-body">
                @csrf
                <div class="row">
                    <div class="mb-5 fv-row col-12">
                        <x-metronic.label class="form-label">Title</x-metronic.label>
                        <x-metronic.input type="text" name="title" class="form-control mb-2"
                            placeholder="Enter title" :value="old('title')">
                        </x-metronic.input>
                        <div class="text-muted fs-7">
                            A unique title for the shipping method.
                        </div>
                    </div>
                    <div class="mb-5 fv-row col-6">
                        <x-metronic.label class="form-label">Location</x-metronic.label>
                        <x-metronic.input type="text" name="location" class="form-control mb-2"
                            placeholder="Enter location" :value="old('location')">
                        </x-metronic.input>
                        <div class="text-muted">
                            Location shipping method.
                        </div>
                    </div>
                    <div class="mb-5 fv-row w-50 col-6">
                        <x-metronic.label class="form-label">Duration</x-metronic.label>
                        <x-metronic.input type="text" name="duration" class="form-control mb-2"
                            placeholder="Enter duration" :value="old('duration')">
                        </x-metronic.input>
                        <div class="text-muted fs-7">
                            Estimated delivery time.
                        </div>
                    </div>
                    {{-- <div class="mb-5 fv-row">
                            <x-metronic.label class="form-label">Description</x-metronic.label>
                            <textarea name="description" class="ckeditor form-control mb-2" placeholder="Add detailed description">{!! old('description') !!}</textarea>
                            <div class="text-muted fs-7">
                                Detailed description of the shipping method.
                            </div>
                        </div> --}}
                    <div class="mb-5 fv-row col-4">
                        <x-metronic.label class="form-label">Carrier</x-metronic.label>
                        <x-metronic.input type="text" name="carrier" class="form-control mb-2"
                            placeholder="Enter carrier name" :value="old('carrier')">
                        </x-metronic.input>
                        <div class="text-muted fs-7">
                            The carrier or service provider for the shipping method.
                        </div>
                    </div>


                    <div class="mb-5 fv-row col-6">
                        <x-metronic.label class="form-label">Price</x-metronic.label>
                        <x-metronic.input type="number" name="price" class="form-control mb-2"
                            placeholder="Enter price" :value="old('price')">
                        </x-metronic.input>
                        <div class="text-muted fs-7">
                            Cost associated with the shipping method.
                        </div>
                    </div>
                    <div class="mb-5 fv-row col-6">
                        <x-metronic.label class="form-label">Status</x-metronic.label>
                        <select class="form-select" name="status" data-control="select2" data-hide-search="true"
                            data-allow-clear="true" data-placeholder="Select status">
                            <option value="active" {{ old('status') === 'active' ? 'selected' : '' }}>
                                Active
                            </option>
                            <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>
                                Inactive</option>
                        </select>
                        <div class="text-muted fs-7">
                            Status of the shipping method (Active/Inactive).
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</x-admin-app-layout>
