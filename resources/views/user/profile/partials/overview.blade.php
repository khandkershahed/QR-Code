<div class="card rounded-0">
    <div class="card-header p-5 align-items-center rounded-0 bg-light-info m-0">
        <div>
            <h1 class="mb-0 mt-0 card-title fs-2 text-primary">All Admin Messages!</h1>
            <p class="text-primary mt-2 mb-0">View and manage all admin messages information in this page.</p>
        </div>
    </div>
    <div class="card-body pb-0">
        <div class="mb-7">
            @if (count($notifications))
                @foreach ($notifications as $notification)
                    <div class="d-flex flex-column align-items-start mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                    src="{{ asset('https://ui-avatars.com/api/?name=' . urlencode(App\Models\Admin::where('id', $notification->notificationMessage->id)->value('name'))) }}">
                            </div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">
                                    {{ App\Models\Admin::where('id', $notification->notificationMessage->id)->value('name') }}
                                </a>
                                <span
                                    class="text-muted fs-7 mb-1">{{ $notification->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-normal text-start w-100"
                            data-kt-element="message-text">
                            <h5>{!! $notification->notificationMessage->title !!}</h5>
                            <p class="m-0">{!! $notification->notificationMessage->message !!}</p>
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
