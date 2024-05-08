<div class="card mb-5 mb-xxl-8">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Admin Messages</h2>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="d-flex flex-column align-items-start mb-3">
            <div class="d-flex align-items-center mb-2">
                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-25.jpg"></div>
                <div class="ms-3">
                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Admin</a>
                    <span class="text-muted fs-7 mb-1">2 mins</span>
                </div>
            </div>
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold text-start w-100"
                data-kt-element="message-text">
                How likely are you to recommend our company to your friends and family ?
            </div>
        </div>
        <div class="mb-7">
            @if (count($notifications))
                @foreach ($notifications as $notification)
                    <div class="d-flex mb-5">

                        <div class="d-flex flex-column flex-row-fluid">
                            <div class="d-flex align-items-center flex-wrap mb-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">
                                    {{ App\Models\Admin::where('id', $notification->notificationMessage->id)->value('name') }}
                                </a>

                                <span
                                    class="text-gray-500 fw-semibold fs-7">{{ $notification->created_at->diffForHumans() }}</span>

                            </div>


                            <span class="text-gray-800 fs-7 fw-normal pt-1">

                                {!! $notification->notificationMessage->title !!}
                            </span>
                            <span class="text-gray-800 fs-7 fw-normal pt-1">
                                {!! $notification->notificationMessage->message !!}
                            </span>
                        </div>
                    </div>
                @endforeach
            @else
                <h5 class="text-gray-800 fs-4 fw-normal pt-1 text-center">
                    No Message available for you.
                </h5>
            @endif


        </div>




    </div>

</div>
