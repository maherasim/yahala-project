    <style>
        .avatar-xxl {
            width: 7.875rem !important;
            height: 7.875rem !important;
        }

        .avatar-border-lg {
            border: 0.1875rem solid #fff;
        }

        .avatar-circle {
            border-radius: 50% !important;
        }

        .avatar {
            position: relative;
            display: inline-block;
            /*width: 7.625rem;*/
            /*height: 7.625rem;*/
            border-radius: 0.3125rem;
        }

        label {
            color: #334257;
            text-transform: capitalize;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }

        .avatar-circle .avatar-img,
        .avatar-circle .avatar-initials {
            border-radius: 50%;
        }

        .avatar-img {
            display: block;
            max-width: 100% !important;
            height: 100% !important;
            -o-object-fit: cover;
            object-fit: cover;
            pointer-events: none;
            border-radius: 0.3125rem;
        }
    </style>

    <label class="avatar avatar-xxl avatar-circle avatar-border-lg" for="">
        <img id="viewer" class="avatar-img" src="{{ Auth::user() && Auth::user()->image && Auth::user()->image != "NULL" ? asset('storage/'.Auth::user()->image) : asset('https://www.w3schools.com/howto/img_avatar.png') }}" alt="Image">
    </label>
