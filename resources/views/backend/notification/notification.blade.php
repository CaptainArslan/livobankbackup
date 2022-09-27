@extends('layouts.app')
@section('content')

<div class="d-flex" style="justify-content: space-between;">
    <h4>Notification</h4>
    <a href="{{ route('user.notifications') }}" target="_blank">Notification Settings</a>
</div>

<div data-v-29fcf9b9="" data-v-8d36c89c="" class="up-card py-0">
    <header data-v-29fcf9b9="" class="up-card-header">
        <h4 data-v-29fcf9b9="" class="mb-0">
            Today
        </h4>
    </header>
    <p data-v-29fcf9b9="" class="py-20">No new notifications.</p>
    <ul data-v-29fcf9b9="" class="notifications-list pl-0"></ul>
    <div data-v-29fcf9b9="" class="up-card-section text-center up-loader-container" style="display: none;"><button data-v-29fcf9b9="" class="up-btn up-btn-default up-loader-container m-0">
            View more
        </button>
        <div data-v-29fcf9b9="" role="status" aria-busy="false" aria-label="Section is loading" class="up-loader-overlay">
            <div data-v-29fcf9b9="" class="up-icon lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="25 25 50 50" aria-hidden="true" role="img" style="transform-origin: center center; animation: 2s linear 0s infinite normal none running spinnerIconRotate;">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-dasharray="1, 200" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" style="animation: 1.5s ease-in-out 0s infinite normal none running spinnerIconDash;"></circle>
                </svg></div>
        </div>
    </div>
</div>
<!-- Earlier -->
<div class="pt-3"></div>
<div pdata-v-29fcf9b9="" data-v-8d36c89c="" class="up-card py-0 pt-5">
    <header data-v-29fcf9b9="" class="up-card-header">
        <h4 data-v-29fcf9b9="" class="mb-0">
            Earlier
        </h4>
    </header>
    <p data-v-29fcf9b9="" class="py-20">No new notifications.</p>
    <ul data-v-29fcf9b9="" class="notifications-list pl-0"></ul>
    <div data-v-29fcf9b9="" class="up-card-section text-center up-loader-container" style="display: none;"><button data-v-29fcf9b9="" class="up-btn up-btn-default up-loader-container m-0">
            View more
        </button>
        <div data-v-29fcf9b9="" role="status" aria-busy="false" aria-label="Section is loading" class="up-loader-overlay">
            <div data-v-29fcf9b9="" class="up-icon lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="25 25 50 50" aria-hidden="true" role="img" style="transform-origin: center center; animation: 2s linear 0s infinite normal none running spinnerIconRotate;">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-dasharray="1, 200" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" style="animation: 1.5s ease-in-out 0s infinite normal none running spinnerIconDash;"></circle>
                </svg></div>
        </div>
    </div>
</div>
@endsection