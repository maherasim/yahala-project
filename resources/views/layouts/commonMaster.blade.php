<!DOCTYPE html>

<html lang="{{ session()->get('locale') ?? app()->getLocale() }}"
    class="{{ $configData['style'] }}-style {{ $navbarFixed ?? '' }} {{ $menuFixed ?? '' }} {{ $menuCollapsed ?? '' }} {{ $footerFixed ?? '' }} {{ $customizerHidden ?? '' }}"
    dir="{{ $configData['textDirection'] }}" data-theme="{{ $configData['theme'] }}"
    data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{ url('/') }}" data-framework="laravel"
    data-template="{{ $configData['layout'] . '-menu-' . $configData['theme'] . '-' . $configData['style'] }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')
        {{-- |{{ config('variables.templateName') ? config('variables.templateName') : 'TemplateName' }} -
    {{ config('variables.templateSuffix') ? config('variables.templateSuffix') : 'TemplateSuffix' }} --}}
    </title>
    <meta name="description"
        content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
    <meta name="keywords"
        content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/svg/Yb_01062023_final.svg') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    <!-- Include Styles -->
    @include('layouts/sections/styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('layouts/sections/scriptsIncludes')
</head>

<body>


    <!-- Layout Content -->
    @yield('layoutContent')
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    @include('layouts/sections/scripts')

    @if (env('LOGIN_TIMEOUT') == true)
        <script>
            // Inactivity Timer Script
            let inactivityTime = function() {
                let time;
                let maxInactivity = 60 * 1000; // 30 seconds for initial inactivity

                window.onload = resetTimer;
                document.onmousemove = resetTimer;
                document.onkeypress = resetTimer;

                function showLogoutModal() {
                    console.log("Inactivity detected. Showing modal.");
                    // Display the modal
                    $('#inactivityModal').modal('show');

                    // Start a secondary timer for 30 seconds until auto-logout
                    startAutoLogoutTimer();
                }

                function resetTimer() {
                    console.log("Activity detected. Resetting timer.");
                    clearTimeout(time);
                    time = setTimeout(showLogoutModal, maxInactivity);
                }
            };

            // Start the initial inactivity timer
            window.onload = function() {
                inactivityTime();
            };

            function stayLoggedIn() {
                console.log("Stay logged in clicked.");
                $('#inactivityModal').modal('hide');
                clearTimeout(autoLogoutTime); // Clear the secondary timer
                inactivityTime(); // Restart the main inactivity timer
                location.reload();
            }

            function submitLogoutForm() {
                console.log("Logout clicked.");
                document.getElementById('logout-form').submit();
            }

            // Secondary auto-logout timer function (30 seconds after modal shows)
            let autoLogoutTime;

            function startAutoLogoutTimer() {
                // Clear any existing secondary timer to avoid multiple timers
                clearTimeout(autoLogoutTime);

                // Set a new 30-second timer to auto-logout
                autoLogoutTime = setTimeout(() => {
                    console.log("Auto-logout due to no response on modal.");
                    submitLogoutForm();
                }, 30 * 1000); // 30 seconds
            }
        </script>

        <!-- Inactivity Modal -->
        <div class="modal fade" id="inactivityModal" tabindex="-1" role="dialog"
            aria-labelledby="inactivityModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="inactivityModalLabel">Your Session is Expired</h5>
                    </div>
                    <div class="modal-body text-center">
                        <p>Do you need more time?</p>
                        <p>You will be logged out soon due to inactivity.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary" onclick="stayLoggedIn()">Stay Online</button>
                        <a class="btn btn-secondary" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

</body>

</html>
