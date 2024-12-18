<x-admin-app-layout :title="'Active Logs - Admin Panel'">
    <div class="py-5">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-3 border-bottom border-secondary">
                    <h1 class="h2 font-weight-bold mb-4">Activity Log Details</h1>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="causer_type">Causer Type</label>
                        <p id="causer_type" class="border p-2">{{ $activityLog->user_type }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="causer">Causer</label>
                        <p id="causer" class="border p-2">{{ $activityLog->user_id }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="event">Event</label>
                        <p id="event" class="border p-2">{{ $activityLog->description }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="subject_type">Subject Type</label>
                        <p id="subject_type" class="border p-2">{{ $activityLog->subject_type }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="subject">Subject</label>
                        <p id="subject" class="border p-2">{{ $activityLog->subject_id }}</p>
                    </div>

                    <div class="mb-4">
                        <label class="d-block text-dark fw-bold mb-2" for="date">Date</label>
                        <p id="date" class="border p-2">{{ $activityLog->created_at->format('F j, Y, g:i a') }}</p>
                    </div>

                    <a href="{{ route('admin.activity_logs.index') }}" class="text-primary hover:text-dark">Back to
                        Activity Logs</a>
                    <!-- text-blue-500 hover:text-blue-700 translates to text-primary and hover:text-dark -->
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
