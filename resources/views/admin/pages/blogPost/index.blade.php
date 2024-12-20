<x-admin-app-layout :title="'Blog Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Blogs!</h1>
                <p class="text-white mt-2 mb-0">View and manage all blogs information in this page.</p>
            </div>
            <div>
                <a href="{{ route('admin.blog-post.create') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New Blog">
                    <i class="fa-brands fa-blogger-b"></i> Add New Blog
                </a>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl</th>
                        <th width="35%">Title</th>
                        <th width="20%">Author</th>
                        <th width="20%">Create date</th>
                        <th width="10%">Status</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogPosts as $post)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->created_at->format('d-M-Y') }}</td>
                            <td>
                                <span class="badge {{ $post->status == 'publish' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $post->status == 'publish' ? 'Publish' : 'Unpublish' }}
                                </span>
                            </td>
                            <td class="">
                                <div class="d-flex justify-content-end me-4">
                                    <a href="{{ route('admin.blog-post.edit', $post->id) }}"
                                        class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-primary me-2 pe-2 ps-3"
                                        data-bs-toggle="modal" data-bs-target="#viewpost_{{ $post->id }}">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                    <!-- Modal trigger button -->
                                    <div class="modal fade" id="viewpost_{{ $post->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content rounded-0">
                                                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                                                    <h3 class="modal-title text-white">Viewing Blog</h3>
                                                    <button type="button"
                                                        class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fa-solid fa-xmark fs-1"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <p class="text-info">{{ $post->badge }}</p>
                                                        <h3 class="pb-3 fw-bold">{{ $post->title }}</h3>
                                                        <div>
                                                            <img src="{{ asset('storage/' . $post->banner_image) }}"
                                                                alt="">
                                                        </div>
                                                        <p class="fw-bolder">{{ $post->short_description }}</p>
                                                        <div>
                                                            <img src="{{ asset('storage/' . $post->banner_image) }}"
                                                                alt="">
                                                            <p>{{ $post->banner_image }}</p>
                                                        </div>
                                                        <p>{{ $post->long_description }}</p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('admin.blog-post.destroy', $post->id) }}"
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
</x-admin-app-layout>
