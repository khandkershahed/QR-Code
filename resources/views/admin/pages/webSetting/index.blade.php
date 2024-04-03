<x-admin-app-layout :title="'Site Setting Update'">

    <div class="card card-flash">

        <!--begin::Modal body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form class="form" action="{{ route('site.setting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <x-metronic.label for="website_name" class="col-form-label fw-bold fs-6">{{ __('Website Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="website_name" type="text" name="website_name" :value="old('website_name',$site->website_name)"
                            placeholder="Enter the permission Group name"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="site_motto" class="col-form-label fw-bold fs-6">{{ __('Site Motto') }}
                        </x-metronic.label>

                        <x-metronic.input id="site_motto" type="text" name="site_motto" :value="old('site_motto',$site->site_motto)"
                            placeholder="Enter the permission Group name"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="site_icon" class="col-form-label fw-bold fs-6">{{ __('Site Icon') }}
                        </x-metronic.label>

                        <x-metronic.input id="site_icon" type="file" name="site_icon" :value="old('site_icon',$site->site_icon)"
                            placeholder="Enter the permission Group name"></x-metronic.input>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
    </div>
</x-admin-app-layout>
