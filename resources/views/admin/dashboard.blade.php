<x-admin-app-layout>
    <div class="row gap-5">

        <h1 class="text-center mb-0 text-success">{{ Auth::guard('admin')->user()->name }}</h1>
        <h1 class="text-center">Welcome To Your Dashboard</h1>
        <div class="col bg-warning p-10 rounded-2">
            <div class="d-flex justify-content-between align-items-center ">
                <div>
                    <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                            <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                fill="currentColor" />
                            <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                            <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                        </svg>
                    </span>
                    <a href="#" class="text-white fw-bold fs-6">Total Sale</a>
                </div>
                <a href="#" class="text-warning fw-bold fs-1 bg-white rounded-circle p-1 px-2">25</a>
            </div>
        </div>
        <div class="col bg-primary p-10 rounded-2">
            <div class="d-flex justify-content-between align-items-center ">
                <div>
                    <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path opacity="0.3"
                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                fill="currentColor" />
                            <path
                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <a href="#" class="text-white fw-bold fs-6">Total Seller</a>
                </div>
                <a href="#" class="text-primary fw-bold fs-1 bg-white rounded-circle p-1 px-2">25</a>
            </div>
        </div>
        <div class="col bg-danger p-10 rounded-2">
            <div class="d-flex justify-content-between  align-items-center ">
                <div>
                    <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path opacity="0.3"
                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                fill="currentColor" />
                            <path
                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <a href="#" class="text-white fw-bold fs-6 mt-2">Total User</a>
                </div>
                <a href="#" class="text-danger fw-bold fs-1 bg-white rounded-circle p-1 px-2">25</a>
            </div>
        </div>
        <div class="col bg-success p-10 rounded-2">
            <span class="svg-icon svg-icon-3x svg-icon-white d-block my-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path
                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                        fill="currentColor" />
                    <path opacity="0.3"
                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                        fill="currentColor" />
                </svg>
            </span>
            <a href="#" class="text-white fw-bold fs-6 mt-2">Bug Reports</a>
        </div>
    </div>
</x-admin-app-layout>
