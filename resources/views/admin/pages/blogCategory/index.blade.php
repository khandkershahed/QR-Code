<x-admin-app-layout :title="'Blog Category Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Blog Category!</h1>
                <p class="text-white mt-2 mb-0">View and manage all blog category information in this page.</p>
            </div>
            <div>
                <button type="button" class="btn btn-white btn-active-light-warning text-hover-inverse-white"
                    data-bs-toggle="modal" data-bs-target="#AddBlogCategory" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New Category">
                    <i class="fa-solid fa-user-plus"></i> Add Category
                </button>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%">SL No.</th>
                        <th width="6%">Image</th>
                        <th width="19%">Name</th>
                        <th width="20%">Slug</th>
                        <th width="20%">Description</th>
                        <th width="16%" class="text-center">Meta Title</th>
                        <th width="7%">Status</th>
                        <th class="text-center" width="7%">Action</th>
                    </tr>
                </thead>
                <tbody style="vertical-align: middle;">
                    @foreach ($blogCategories as $blogcategory)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{ file_exists(public_path('storage/' . $blogcategory->image)) && !empty($blogcategory->image) ? asset('storage/' . $blogcategory->image) : (!empty($user->profile_image) && file_exists(public_path('storage/user/profile_image/' . $user->profile_image)) ? asset('storage/user/profile_image/' . $user->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(str_replace(' ', '+', $blogcategory->name)))) }}"
                                            alt="Blog Image" class="w-100">
                                    </div>
                                </div>
                            </td>
                            <td>{{ $blogcategory->name }}</td>
                            <td>{{ $blogcategory->slug }}</td>
                            <td>{{ \Illuminate\Support\Str::words($blogcategory->description, 20, '...') }}</td>
                            <td class="text-center">{{ $blogcategory->meta_title }}</td>
                            <td>
                                <span
                                    class="badge {{ $blogcategory->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $blogcategory->status == 'active' ? 'Active' : 'InActive' }}</span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-end me-4">
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#EditBlogCategory-{{ $blogcategory->id }}"
                                        class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm fw-bold btn-primary me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                    <a href="{{ route('admin.blog-category.destroy', $blogcategory->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Blog Category Create Modal --}}
    <div class="modal fade" id="AddBlogCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="AddBlogCategoryLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Create a New Blog Category</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="kt_docs_formvalidation_text" class="form"
                        action="{{ route('admin.blog-category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="fv-row mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Blog Category
                                Name</x-metronic.label>
                            <x-metronic.input type="text" name="name" class="form-control mb-3 mb-lg-0"
                                placeholder="Set Blog Category Name" :value="old('name')" />
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Blog Meta Title</x-metronic.label>
                            <x-metronic.input type="text" name="meta_title" class="form-control mb-3 mb-lg-0"
                                placeholder="Set Blog Meta Title" :value="old('meta_title')" />
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="fv-row mb-5">
                                    <x-metronic.label for="image"
                                        class="col-form-label fw-bold fs-6 ">{{ __('Blog Category Image/icon') }}
                                    </x-metronic.label>
                                    <x-metronic.file-input id="image" name="image"
                                        class="form-control mb-3 mb-lg-0" :value="old('image')"></x-metronic.file-input>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-5">
                                    <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                        {{ __('Select a Status ') }}</x-metronic.label>
                                    <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </x-metronic.select-option>
                                </div>
                            </div>
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Description</x-metronic.label>
                            <textarea class="form-control" placeholder="Set The Description" name="description" id="floatingTextarea2"
                                style="height: 100px" :value="old('description')"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="kt_docs_formvalidation_text_submit" class="btn btn-info">
                                Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Category Edit Modal --}}
    @foreach ($blogCategories as $category)
        <div class="modal fade" tabindex="-1" id="EditBlogCategory-{{ $category->id }}" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-labelledby="EditBlogCategory-{{ $category->id }}Label"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header py-3 bg-info rounded-0 pe-2">
                        <h3 class="modal-title text-white">Update This Blog Category</h3>
                        <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark fs-1"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="{{ route('admin.blog-category.update', $category->id) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="fv-row mb-5">
                                <x-metronic.label class="required fw-semibold fs-6 mb-2">Title</x-metronic.label>
                                <x-metronic.input type="text" name="name" class="form-control mb-3 mb-lg-0"
                                    placeholder="Set Title" :value="old('name', $category->name)" />
                            </div>
                            <div class="fv-row mb-5">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Meta Title</x-metronic.label>
                                <x-metronic.input type="text" name="meta_title" class="form-control mb-3 mb-lg-0"
                                    placeholder="Set Meta Title" :value="old('meta_title', $category->meta_title)" />
                            </div>
                            <div class="fv-row mb-5">
                                <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                    {{ __('Status') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status">
                                    <option value="active" {{ $category->status == 'active' ? 'selected' : '' }}>
                                        Active</option>
                                    <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>
                                        Inactive</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="fv-row mb-5">
                                <x-metronic.label for="description"
                                    class="fw-semibold fs-6 mb-2">Description</x-metronic.label>
                                <textarea class="form-control" placeholder="Set The Description" name="description" id="floatingTextarea2"
                                    style="height: 100px">{{ old('description', $category->description) }}</textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" id="kt_docs_formvalidation_text_submit" class="btn btn-info">
                                    Update Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-admin-app-layout>
