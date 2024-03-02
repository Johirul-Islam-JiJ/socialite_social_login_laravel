@php
    $credentials = $general->socialite_credentials;
@endphp
@if ($credentials->google->status == Status::ENABLE || $credentials->facebook->status == Status::ENABLE || $credentials->linkedin->status == Status::ENABLE)
    <div class="registration-socails__content text-center">
        <p class="registration-socails__desc mb-0 mt-0">
            @lang('Or')
            @if (request()->route()->getName() == 'user.login')
                @lang('Login')
            @else
                @lang('Register')
            @endif
            @lang('With')
        </p>
    </div>

    <div class="d-flex flex-wrap gap-3">
        @if ($credentials->facebook->status == Status::ENABLE)
            <a class="btn btn-outline-facebook btn-sm flex-grow-1" href="{{ route('user.social.login', 'facebook') }}">
                <span class="me-1"><i class="fab fa-facebook-f"></i></span> @lang('FACEBOOK')
            </a>
        @endif
        @if ($credentials->google->status == Status::ENABLE)
            <a class="btn btn-outline-google btn-sm flex-grow-1" href="{{ route('user.social.login', 'google') }}">
                <span class="me-1"><i class="lab la-google-plus-g"></i></span> @lang('GOOGLE')
            </a>
        @endif
        @if ($credentials->linkedin->status == Status::ENABLE)
            <a class="btn btn-outline-linkedin btn-sm flex-grow-1" href="{{ route('user.social.login', 'linkedin') }}">
                <span class="me-1"><i class="lab la-linkedin-in"></i></span> @lang('LINKEDIN')
            </a>
        @endif
    </div>
@endif

@push('style')
    <style>
        .btn-outline-linkedin {
            background-color: #0077B5;
            color: #fff;
        }

        .btn-outline-linkedin:hover {
            color: #fff !important;
            background-color: #058fda;
        }

        .btn-outline-facebook {
            background-color: #395498;
            color: #fff;
        }

        .btn-outline-facebook:hover {
            color: #fff !important;
            background-color: #456ac8;
        }

        .btn-outline-google {
            background-color: #D64937;
            color: #fff;
        }

        .btn-outline-google:hover {
            color: #fff !important;
            background-color: #f55843;
        }
    </style>
@endpush