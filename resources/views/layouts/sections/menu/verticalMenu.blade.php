@php
    $configData = Helper::appClasses();
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme"
    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

    <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo ">
        <a   class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/svg/yahala.jpg') }}" alt="Yahala" style="width: 75%; height: 75%; padding-left: 26px;">

                
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow" style="display: none;"></div>

    <ul class="menu-inner py-1 ps ps--active-y">

        @can('dashboard.read')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Dashboard</span>
            </li>
            <li class="menu-item ">
                <a href="{{ url('/') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div>Dashboard</div>
                </a>
            </li>
        @endcan

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Assistent</span>
        </li>

        @can('avatars.read')
            <li
                class="menu-item {{ Request::is('avatars/*') ? 'active open' : '' }}  {{ Request::is('manage-avatars') ? 'active open' : '' }} {{ Request::is('avatars') ? 'active open' : '' }}{{ Request::is('manage-avatars/*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-bot"></i>
                    <div>Avatar </div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item ">
                        <a href="{{ url('/avatars') }}" class="menu-link">
                            <div>Add/Manage Avatars</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ url('/manage-avatars') }}" class="menu-link">
                            <div>Manage AI Posts</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan

        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div>Agents </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="javascript:void(0)" class="menu-link">
                        <div>Add/Manage Agents</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        @can('users.read')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Customers</span>
            </li>
            <li class="menu-item {{ Request::is('users/*') ? 'active open' : '' }}" style="">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-group"></i>
                    <div>Users</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item  {{ Request::is('users/standard') ? 'active' : '' }}">
                        <a href="{{ url('/users/standard') }}" class="menu-link">
                            <div>Educated Users</div>
                        </a>
                    </li>
                    <li class="menu-item  {{ Request::is('users/premium') ? 'active' : '' }}">
                        <a href="{{ url('/users/premium') }}" class="menu-link">
                            <div>Cultivated Users</div>
                        </a>
                    </li>
                    <li class="menu-item  {{ Request::is('users/vip') ? 'active' : '' }}">
                        <a href="{{ url('/users/vip') }}" class="menu-link">
                            <div>Academic Users</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('settings/*') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('settings/user-roles/standard') ? 'active' : '' }}">

                                <a href="{{ url('/profile-banner') }}" class="menu-link">
                                    <div>Profile Banner</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('settings/user-roles/educated') ? 'active' : '' }}">
                                <a href="{{ url('/settings/user-roles/educated') }}" class="menu-link">
                                    <div>User Roles</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('settings/reasons') ? 'active' : '' }}">
                                <a href="{{ url('/settings/reasons') }}" class="menu-link">
                                    <div>Reasons</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('settings/user/prefix') ? 'active' : '' }}">
                                <a href="{{ url('/settings/user/prefix') }}" class="menu-link">
                                    <div>User Prefix</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan
        @can('flaggedUser.read')
            <li class="menu-item {{ Request::is('reports/flagged-users') ? 'active ' : '' }}">
                <a href="{{ url('reports/flagged-users') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-flag"></i>
                    <div>Flagged User</div>
                </a>
            </li>
        @endcan

        @can('channels.read')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Channels</span>
            </li>
            <li
                class="menu-item {{ Request::is('Channels/') ? 'active open' : '' }} {{ Request::is('channelrequest') ? 'active open' : '' }} {{ Request::is('managechannel') ? 'active open' : '' }} {{ Request::is('settings/') ? 'active open' : '' }} {{ Request::is('channels/reason') ? 'active open' : '' }} {{ Request::is('channels/prefix') ? 'active open' : '' }} {{ Request::is('channels/policy_terms') ? 'active open' : '' }} {{ Request::is('channeladmin') ? 'active open' : '' }} {{ Request::is('addmanagechannel') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-file "></i>
                    <div>Channels</div>
                </a>
                <ul class="menu-sub">

                    <li class="menu-item {{ Request::is('managecategories') ? 'active ' : '' }}">
                        <a href="{{ url('managecategories') }}" class="menu-link">
                            <div>Manage Categories</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('channelrequest') ? 'active ' : '' }}">
                        <a href="{{ url('channelrequest?view=new_request') }}" class="menu-link">
                            <div>Channel Request</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('managechannel') ? 'active ' : '' }}">
                        <a href="{{ url('managechannel?view=new_request') }}" class="menu-link">
                            <div>Manage Channel</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('channeladmin') ? 'active ' : '' }}">
                        <a href="{{ url('channeladmin') }}" class="menu-link">
                            <div>Channel Admin</div>
                        </a>
                    </li>
                    <li
                        class="menu-item {{ Request::is('settings/*') ? 'active open' : '' }} {{ Request::is('channels/reason') ? 'active open' : '' }} {{ Request::is('channels/prefix') ? 'active open' : '' }} {{ Request::is('channels/policy_terms') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('channels/reason') ? 'active' : '' }}">
                                <a href="{{ url('channels/reason') }}" class="menu-link">
                                    <div>Reasons</div>
                                </a>
                            </li>
                            {{-- <li class="menu-item {{ Request::is('channels/prefix') ? 'active' : '' }}">
          <a href="{{url('channels/prefix')}}" class="menu-link">
            <div>Prefix</div>
          </a>
        </li> --}}
                            <li class="menu-item {{ Request::is('channels/policy_terms') ? 'active' : '' }}">
                                <a href="{{ url('channels/policy_terms') }}" class="menu-link">
                                    <div>Channels Policy </div>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>

            </li>
        @endcan
        @can('flaggedchannels.read')
            <li class="menu-item {{ Request::is('flaggedfanpage') ? 'active ' : '' }}">
                <a href="{{ url('/flaggedfanpage') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-flag"></i>
                    <div>Flagged Channels</div>
                </a>
            </li>
        @endcan

        @can('onlineshop.read')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">E-Commerce</span>
            </li>


            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-store"></i>
                    <div>Online Shop</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Add Online Shop</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>New Shop Request</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage Online Shops</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage Items</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Commission Setting</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Tax Settings</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Shipping</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Currency</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Payment Method</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Additional Services</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Reasons</div>
                                </a>


                            </li>

                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Policy and Terms</div>
                                </a>


                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan




        @can('bazar.read')
            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-store"></i>
                    <div>Bazar</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Category - Subcategory</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage for Sale Items</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage Search Items</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Pricing Plan</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Reasons</div>
                                </a>


                            </li>


                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Policy and Terms</div>
                                </a>


                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan





        @can('serviceportal.read')
            <li class="menu-item ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-intersect"></i>
                    <div>Service Portal</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Add/Manage Categories</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage Service Offers</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Manage Search Services</div>
                        </a>


                    </li>



                    <li class="menu-item ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Reasons</div>
                                </a>


                            </li>


                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link">
                                    <div>Policy and Terms</div>
                                </a>


                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan

        @can('advertisment.read')
            <li
                class="menu-item {{ Request::is('specialcards', 'businesscards', 'Servicecards', 'FoodDrinkcards', 'specialAds', 'businessAds', 'ServiceAds', 'FoodDrinkAds') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-intersect"></i>
                    <div>Advertisment</div>
                </a>

                <ul class="menu-sub">
                    <li
                        class="menu-item {{ Request::is('specialcards', 'businesscards', 'Servicecards', 'FoodDrinkcards') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Add / Manage Cards</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('specialcards') ? 'active' : '' }}">
                                <a href="{{ url('specialcards') }}" class="menu-link">
                                    <div>Manage Special Cards</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('businesscards') ? 'active' : '' }}">
                                <a href="{{ url('businesscards') }}" class="menu-link">
                                    <div>Manage Business Cards</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('Servicecards') ? 'active' : '' }}">
                                <a href="{{ url('Servicecards') }}" class="menu-link">
                                    <div>Manage Services Cards</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('FoodDrinkcards') ? 'active' : '' }}">
                                <a href="{{ url('FoodDrinkcards') }}" class="menu-link">
                                    <div>Manage Food & Drinks Cards</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="menu-item {{ Request::is('specialAds', 'businessAds', 'ServiceAds', 'FoodDrinkAds') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Add / Manage Ads</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('specialAds') ? 'active' : '' }}">
                                <a href="{{ url('specialAds') }}" class="menu-link">
                                    <div>Manage Special Ads</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('businessAds') ? 'active' : '' }}">
                                <a href="{{ url('businessAds') }}" class="menu-link">
                                    <div>Manage Business Ads</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('ServiceAds') ? 'active' : '' }}">
                                <a href="{{ url('ServiceAds') }}" class="menu-link">
                                    <div>Manage Services Ads</div>
                                </a>
                            </li>
                            <li class="menu-item {{ Request::is('FoodDrinkAds') ? 'active' : '' }}">
                                <a href="{{ url('FoodDrinkAds') }}" class="menu-link">
                                    <div>Manage Food & Drinks Ads</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class="menu-item {{ Request::is('adver-manage-song*', 'advertisement_time', 'adver-reason', 'advertisement-policy', 'advertisement/advert/pricing') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item {{ Request::is('adver-manage-song*') ? 'active' : '' }}">
                                <a href="{{ url('adver-manage-song') }}" class="menu-link">
                                    <div>Add Manage/Songs</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('advertisement_time') ? 'active' : '' }}">
                                <a href="{{ url('advertisement_time') }}" class="menu-link">
                                    <div>Ads Time</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('adver-reason') ? 'active' : '' }}">
                                <a href="{{ url('adver-reason') }}" class="menu-link">
                                    <div>Reasons</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('advertisement-policy') ? 'active' : '' }}">
                                <a href="{{ url('advertisement-policy') }}" class="menu-link">
                                    <div>Add Policy</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('advertisement/advert/pricing') ? 'active' : '' }}">
                                <a href="{{ url('advertisement/advert/pricing') }}" class="menu-link">
                                    <div>Pricing</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan


        @can('feeds.read')
            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">User adds</span>
            </li>









            <li
                class="menu-item {{ Request::is('Feeds/*') ? 'active open' : '' }} {{ Request::is('manage-user-feeds') ? 'active open' : '' }}  {{ Request::is('manage-fanpage-feeds') ? 'active open' : '' }}  {{ Request::is('feed-background') ? 'active open' : '' }}{{ Request::is('feed-emoji') ? 'active open' : '' }} {{ Request::is('feeds-reasons') ? 'active open' : '' }} {{ Request::is('feeds-policy_and_terms') ? 'active open' : '' }} {{ Request::is('feeds-prefix') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-book-content"></i>
                    <div>Feeds</div>
                </a>


                <ul class="menu-sub">

                    <li class="menu-item {{ Request::is('manage-user-feeds') ? 'active' : '' }}">
                        <a href="{{ url('/manage-user-feeds') }}" class="menu-link">
                            <div>Manage User Feeds</div>
                        </a>


                    </li>



                    <li class="menu-item {{ Request::is('manage-fanpage-feeds') ? 'active' : '' }}">
                        <a href="{{ url('/manage-fanpage-feeds') }}" class="menu-link">
                            <div>Manage Fanpage Feed</div>
                        </a>


                    </li>



                    <li
                        class="menu-item  {{ Request::is('feed-background') ? 'active open' : '' }} {{ Request::is('feed-emoji') ? 'active open' : '' }} {{ Request::is('feeds-reasons') ? 'active open' : '' }} {{ Request::is('feeds-policy_and_terms') ? 'active open' : '' }} {{ Request::is('feeds-prefix') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item ">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <div>Post Filter</div>
                                </a>


                                <ul class="menu-sub">



                                    <li class="menu-item ">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <div>Image Filter</div>
                                        </a>


                                    </li>



                                    <li class="menu-item ">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <div>Video Filter</div>
                                        </a>


                                    </li>



                                    <li class="menu-item ">
                                        <a href="javascript:void(0)" class="menu-link">
                                            <div>Keywords Filter</div>
                                        </a>


                                    </li>
                                </ul>
                            </li>



                            <li class="menu-item {{ Request::is('feed-background') ? 'active' : '' }}">
                                <a href="{{ url('/feed-background') }}" class="menu-link">
                                    <div>Feed Background</div>
                                </a>


                            </li>



                            <li class="menu-item {{ Request::is('feed-emoji') ? 'active' : '' }}">
                                <a href="{{ url('feed-emoji') }}" class="menu-link">
                                    <div>Add Emojis</div>
                                </a>


                            </li>



                            <li class="menu-item {{ Request::is('feeds-reasons') ? 'active' : '' }}">
                                <a href="{{ url('feeds-reasons') }}" class="menu-link">
                                    <div>Reasons</div>
                                </a>


                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
        @endcan



        @can('videos.read')
            <li
                class="menu-item {{ Request::is('videos/*') ? 'active open' : '' }} {{ Request::is('manage_video') ? 'active open' : '' }}  {{ Request::is('video_request') ? 'active open' : '' }} {{ Request::is('reason') ? 'active open' : '' }} {{ Request::is('prefix') ? 'active open' : '' }} {{ Request::is('policyterms') ? 'active open' : '' }}">

                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-video"></i>
                    <div>Videos</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item  {{ Request::is('manage_video') ? 'active' : '' }}">
                        <a href="{{ url('/manage_video') }}" class="menu-link">
                            <div>Manage Videos</div>
                        </a>


                    </li>





                    <li class="menu-item  {{ Request::is('video_request') ? 'active' : '' }}">
                        <a href="{{ url('/video_request') }}" class="menu-link">
                            <div>Reported Videos</div>
                        </a>


                    </li>



                    <li class="menu-item  ">
                        <a href="javascript:void(0)" class="menu-link">
                            <div>Max. Upload Page</div>
                        </a>


                    </li>





                    <li
                        class="menu-item {{ Request::is('reason') ? 'active open' : '' }} {{ Request::is('prefix') ? 'active open' : '' }} {{ Request::is('policyterms') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item {{ Request::is('reason') ? 'active' : '' }}">
                                <a href="{{ url('/reason') }}" class="menu-link">
                                    <div>Reasons</div>
                                </a>


                            </li>



                            <li class="menu-item  {{ Request::is('policyterms') ? 'active' : '' }} ">
                                <a href="{{ url('/policyterms') }}" class="menu-link">
                                    <div>Policy and Terms</div>
                                </a>


                            </li>



                        </ul>
                    </li>
                </ul>
            </li>
        @endcan



        @can('events.read')
            <li
                class="menu-item {{ Request::is('events/*') ? 'active open' : '' }} {{ Request::is('events') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-calendar-event"></i>
                    <div>Events</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item {{ Request::is('events') ? 'active' : '' }}">
                        <a href="{{ url('/events?view=new_request') }}" class="menu-link">

                            <div>Add a Event</div>
                        </a>


                    </li>





                    <li class="menu-item {{ Request::is('events/manage') ? 'active' : '' }}">
                        <a href=" {{ url('/events/manage?view=new_request') }}" class="menu-link">
                            <div>Manage Event</div>
                        </a>


                    </li>



                    <li class="menu-item {{ Request::is('events/tickets') ? 'active' : '' }}">
                        <a href="{{ url('/events/tickets') }}" class="menu-link">
                            <div>Event Tickets</div>
                        </a>


                    </li>



                    <li class="menu-item {{ Request::is('ticket-service') ? 'active' : '' }}">
                        <a href=" {{ url('/ticket-service') }}" class="menu-link">
                            <div>Event Services</div>
                        </a>


                    </li>




                    <li class="menu-item {{ Request::is('events/*') ? 'active' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Settings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item {{ Request::is('events/reasons') ? 'active' : '' }}">
                                <a href=" {{ url('/events/reasons') }}" class="menu-link">

                                    <div>Reasons</div>
                                </a>


                            </li>



                            <li class="menu-item {{ Request::is('events/policy_and_terms') ? 'active' : '' }}">
                                <a href="{{ url('/events/policy_and_terms') }}" class="menu-link">
                                    <div>Policy and Terms</div>
                                </a>


                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan





        @can('wishesthanks.read')
            <li class="menu-item {{ Request::is('wishes/*') ? 'active open' : '' }} ">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-credit-card"></i>
                    <div>Wishes &amp; Thanks</div>
                </a>


                <ul class="menu-sub">

                    <!--first add-->
                    <li class="menu-item {{ Request::is('wishes/*') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Greetings</div>
                        </a>


                        <ul class="menu-sub">



                            <li class="menu-item {{ Request::is('wishes/manage_greeting') ? 'active' : '' }}">

                                <a href="{{ url('wishes/manage_greeting?view=new_request') }} " class="menu-link">
                                    <div>Manage Greeting</div>
                                </a>


                            </li>


                            <li class="menu-item {{ Request::is('wishes/upload_cardtwo') ? 'active' : '' }}">

                                <a href="{{ url('wishes/upload_cardtwo?view=new_request') }} " class="menu-link">
                                    <div>Upload Cards</div>
                                </a>


                            </li>





                        </ul>
                    </li>






                    <li class="menu-item {{ Request::is('wishes/*') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Prays</div>
                        </a>


                        <ul class="menu-sub">


                            <li class="menu-item {{ Request::is('wishes/manage_pray') ? 'active' : '' }}">
                                <a href="{{ url('wishes/manage_pray?view=new_request') }}" class="menu-link">
                                    <div>Manage Prays</div>
                                </a>
                            </li>

                            <li class="menu-item {{ Request::is('wishes/upload_card') ? 'active' : '' }}">

                                <a href="{{ url('wishes/upload_card?view=new_request') }} " class="menu-link">
                                    <div>Upload Cards</div>
                                </a>


                            </li>


                            {{-- <li class="menu-item {{ Request::is('wishes/add_prays') ? 'active' : '' }}">

          <a href="{{url('wishes/add_prays?view=new_request')}} " class="menu-link">
                <div>Add Prays</div>
              </a>


            </li> --}}



                        </ul>
                    </li>

                    <!--sec add-->





                    <!--thi add-->
                    <li class="menu-item {{ Request::is('wishes/*') ? 'active open' : '' }}">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <div>Sympathy</div>
                        </a>


                        <ul class="menu-sub">


                            <li class="menu-item {{ Request::is('wishes/manage_sympathy') ? 'active' : '' }}">
                                <a href="{{ url('wishes/manage_sympathy?view=new_request') }}" class="menu-link">
                                    <div>Manage Sympathy</div>
                                </a>


                            </li>

                            <li class="menu-item {{ Request::is('wishes/upload_cardone') ? 'active' : '' }}">

                                <a href="{{ url('wishes/upload_cardone?view=new_request') }} " class="menu-link">
                                    <div>Upload Cards</div>
                                </a>


                            </li>


                            {{-- <li class="menu-item {{ Request::is('wishes/add_verses') ? 'active' : '' }}">

          <a href="{{url('wishes/add_verses?view=new_request')}} " class="menu-link">
                <div>Add verses</div>
              </a>


            </li> --}}



                        </ul>
                    </li>



            </li>





            <li class="menu-item {{ Request::is('wishes/setting/*') ? 'active open' : '' }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Setting</div>
                </a>


                <ul class="menu-sub">



                    <li class="menu-item {{ Request::is('wishes/setting/pricing') ? 'active open' : '' }}">
                        <a href="{{ url('wishes/setting/pricing') }}" class="menu-link">
                            <div>Pricing</div>
                        </a>


                    </li>

                    <li class="menu-item {{ Request::is('wishes/setting/reasons') ? 'active' : '' }} ">
                        <a href="{{ url('wishes/setting/reasons') }}" class="menu-link">
                            <div>Reasons</div>
                        </a>


                    </li>

                    <li class="menu-item {{ Request::is('wishes/setting/policy_terms') ? 'active' : '' }}">
                        <a href="{{ url('wishes/setting/policy_terms') }}" class="menu-link">
                            <div>Wishes Policy </div>
                        </a>


                    </li>


                </ul>
            </li>
        </ul>
        </li>
    @endcan



    {{-- @can('stories.read')
        <li
            class="menu-item {{ Request::is('story/*') || Request::is('list-cards*') || Request::is('settings/stories/reasons*') || Request::is('settings/stories*') || Request::is('stories_time') || Request::is('settings/storysong*') ? 'active open' : '' }}">


            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div>Stories</div>
            </a>

            <ul class="menu-sub">

                <li class="menu-item {{ Request::is('list-cards*') ? 'active' : '' }}">
                    <a href="{{ route('list.cards') }}" class="menu-link">
                        <div>Add / Manage Cards</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::is('story/ManageStories') ? 'active' : '' }}">
                    <a href="{{ url('story/ManageStories') }}" class="menu-link">
                        <div>Manage Stories</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::is('story/ReportedStories') ? 'active' : '' }}">
                    <a href="{{ url('story/ReportedStories') }}" class="menu-link">
                        <div>Reported Stories</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::is('settings/stories*') || Request::is('stories_time') || Request::is('settings/stories/reasons') || Request::is('settings/storysong*') ? 'active open' : '' }}">


                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <div>Settings</div>
                    </a>

                    <ul class="menu-sub">


                        <li class="menu-item {{ Request::is('settings/storysong*') ? 'active' : '' }}">

                            <a href="{{ route('settings.storysong.index') }}" class="menu-link">
                                <div>Add Manage/Songs</div>
                            </a>
                        </li>

                        <li class="menu-item {{ Request::is('stories_time') ? 'active' : '' }}">
                            <a href="{{ route('stories23.time') }}" class="menu-link">
                                <div>Stories Time</div>
                            </a>
                        </li>

                        <li class="menu-item {{ Request::is('settings/stories/reasons') ? 'active' : '' }}">
                            <a href="{{ url('/settings/stories/reasons') }}" class="menu-link">
                                <div>Reasons</div>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </li>
    @endcan --}}



    @can('reels.read')
        <li
            class="menu-item {{ Request::is('settings/reels/*') ||
            Request::is('reel/*') ||
            Request::is('list-reels-cards*') ||
            Request::is('reels/song*') ||
            Request::is('reels/stories_time*') ||
            Request::is('reels/reasons*')
                ? 'active open'
                : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div>Clips</div>
            </a>

            <ul class="menu-sub">
                {{-- <li class="menu-item {{ Request::is('list-reels-cards*') ? 'active' : '' }}">
                    <a href="{{ route('list.reels.cards') }}" class="menu-link">
                        <div>Add / Manage Cards</div>
                    </a>
                </li> --}}
                <li class="menu-item {{ Request::is('reel/ManageStories') ? 'active' : '' }}">
                    <a href="{{ url('reel/ManageStories') }}" class="menu-link">
                        <div>Manage Clips</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('reel/ReportedStories') ? 'active' : '' }}">
                    <a href="{{ url('reel/ReportedStories') }}" class="menu-link">
                        <div>Reported Clips</div>
                    </a>
                </li>
                <li
                    class="menu-item {{ Request::is('settings/stories/*') ||
                    Request::is('reels/song*') ||
                    Request::is('reels/stories_time*') ||
                    Request::is('reels/reasons*')
                        ? 'active open'
                        : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <div>Settings</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::is('reels/song*') ? 'active' : '' }}">
                            <a href="{{ route('reels.song') }}" class="menu-link">
                                <div>Add Manage/Songs</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('reels/stories_time*') ? 'active' : '' }}">
                            <a href="{{ url('reels/stories_time') }}" class="menu-link">
                                <div>Stories Time</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('reels/reasons*') ? 'active' : '' }}">
                            <a href="{{ route('reels.reasons') }}" class="menu-link">
                                <div>Reasons</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>




        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Content Adds</span>
        </li>
    @endcan





    @can('music.read')
        <li
            class="menu-item {{ Request::is('music/*') ? 'active open' : '' }} {{ Request::is('music-category') ? 'active open' : '' }} {{ Request::is('artist') ? 'active open' : '' }} {{ Request::is('album') ? 'active open' : '' }} {{ Request::is('video-clips') ? 'active open' : '' }} {{ Request::is('music') ? 'active open' : '' }} {{ Request::is('setting/music/*') ? 'active open' : '' }} {{ Request::is('musics/policy_and_terms') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-music"></i>
                <div>Music</div>
            </a>


            <ul class="menu-sub">


                <li class="menu-item {{ Request::is('music-category') ? 'active' : '' }}">
                    <a href="{{ url('/music-category') }}" class="menu-link">
                        <div>Add Music Category</div>
                    </a>
                </li>

                {{-- <li class="menu-item {{ Request::is('music') ? 'active' : '' }}">
                    <a href="{{ url('/music') }}" class="menu-link">
                        <div>Add Music</div>
                    </a>


                </li> --}}




                <li class="menu-item  {{ Request::is('artist') ? 'active' : '' }}">
                    <a href="{{ url('/artist') }}" class="menu-link">
                        <div>Add Artist</div>
                    </a>
                </li>

                <li
                    class="menu-item {{ Request::is('setting/music/*') ? 'active open' : '' }} {{ Request::is('musics/*') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <div>Settings</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::is('setting/music/pricing') ? 'active' : '' }}">
                            <a href="{{ url('/setting/music/pricing') }}" class="menu-link">
                                <div>Pricing</div>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('setting/music/pricing') ? 'active' : '' }}">
                            <a href="{{ url('/setting/music/pricing') }}" class="menu-link">
                                <div>Nationality</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    @endcan




    






    @can('donation.read')
        <li
            class="menu-item {{ Request::is('donations/*') ? 'active open' : '' }} {{ Request::is('donations') ? 'active open' : '' }}{{ Request::is('settings/donation/*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-donate-heart"></i>
                <div>Donation</div>
            </a>


            <ul class="menu-sub">



                <li class="menu-item {{ Request::is('donations') ? 'active' : '' }}">
                    <a href="{{ url('/donations') }}" class="menu-link">
                        <div>Add Manage Donation</div>
                    </a>


                </li>



                <li class="menu-item {{ Request::is('donations/organizations') ? 'active' : '' }}">
                    <a href="{{ url('/donations/organizations') }}" class="menu-link">
                        <div>Add Manage Organization</div>
                    </a>


                </li>
            </ul>
        </li>
    @endcan

    @can('admins.read')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Entertainment</span>
        </li>
    @endcan

    {{-- <li class="menu-item {{ Request::is('live/*') ? 'active open' : '' }} {{ Request::is('setting/live/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-video-recording"></i>
        <div>Live Stream</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item {{ Request::is('live/request_channel') ? 'active' : '' }}">
          <a href="{{ url('live/request_channel') }}?view=new_request" class="menu-link">
            <div>Manage Channel request</div>
          </a>


        </li>



        <li class="menu-item {{ Request::is('live/manage_channel') ? 'active' : '' }}">
          <a href="{{ url('live/manage_channel') }}?view=new_request" class="menu-link">
            <div>Manage Channels</div>
          </a>


        </li>



        <li class="menu-item {{ Request::is('live/manage_live_stream') ? 'active' : '' }} ">
          <a href="{{ url('live/manage_live_stream') }}" class="menu-link">
            <div>Manage Live Streams</div>
          </a>


        </li>



        <li class="menu-item {{ Request::is('live/report_live_stream') ? 'active' : '' }}">
          <a href="{{ url('live/report_live_stream') }}" class="menu-link">
            <div>Reported Live Streams</div>
          </a>


        </li>



        <li class="menu-item {{ Request::is('setting/live/*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item {{ Request::is('setting/live/streaming_duration') ? 'active' : '' }}">
              <a href="{{url('setting/live/streaming_duration')}}" class="menu-link">
                <div>Streaming Durations</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('setting/live/reasons') ? 'active' : '' }}">
              <a href="{{url('setting/live/reasons')}}" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('setting/live/prefix') ? 'active' : '' }}">
              <a href="{{url('setting/live/prefix')}}" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('setting/live/policy_and_terms') ? 'active' : '' }}">
              <a href="{{url ('setting/live/policy_and_terms')}}" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li> --}}








    {{-- <li class="menu-item {{ Request::is('settings/chats/*') ? 'active open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-message-dots"></i>
        <div>Chat System</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item {{ Request::is('settings/chats/manage-group') ? 'active' : '' }}">
          <a href="{{ url('/settings/chats/manage-group') }}" class="menu-link">
            <div>Add/Manage Groups</div>
          </a>


        </li>



        <li class="menu-item {{ Request::is('settings/chats/*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Upload Ringtone</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Text Settings</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Keywords</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('settings/chats/permission') ? 'active' : '' }}">
              <a href="{{ url('/settings/chats/permission') }}" class="menu-link">
                <div>Permission</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('settings/chats/reasons') ? 'active' : '' }}">
              <a href="{{ url('/settings/chats/reasons') }}" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('settings/chats/prefix') ? 'active' : '' }}">
              <a href="{{ url('/settings/chats/prefix') }}" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item {{ Request::is('settings/chats/policy_and_terms') ? 'active' : '' }}">
              <a href="{{ url('/settings/chats/policy_and_terms ') }}" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li> --}}




 
    {{-- <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-devices"></i>
        <div>Zarok App</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Add Category</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Add Manage Videos</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Prefix</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Policy and Terms</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li> --}}
    {{-- <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-tv"></i>
        <div>Yekbun Tv</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>View Users</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <div>Maintainance</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Kids Area</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item ">
                      <a href="javascript:void(0)" class="menu-link">
                        <div>Category</div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <div>Adult Area</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item ">
                      <a href="javascript:void(0)" class="menu-link">
                        <div>Category</div>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <div>Permission</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Comments</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Add to Playlist</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>View Later</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Report</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Move to Playlist</div>
                  </a>
                </li>
                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Create Playlist</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
         <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Policy and Terms</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Payment Method</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Languages</div>
          </a>
        </li>
      </ul>
    </li> --}}



    @can('admins.read')
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Bank &amp; Payments</span>
        </li>
        <li class="menu-item {{ Request::is('currency') ? 'active' : '' }}">
            <a href="{{ url('/currency') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-devices"></i>
                <div>Currency</div>
            </a>


        </li>
        {{-- <li class="menu-item {{ Request::is('app/*') ? (Request::is('app/ftp/2list') ? '' : 'active open') : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div>Income</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('app/user-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/user-income') }}" class="menu-link">
                        <div>User Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/online-shop-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/online-shop-income') }}" class="menu-link">
                        <div>Online Shop Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/service-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/service-income') }}" class="menu-link">
                        <div>Service Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/events-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/events-income') }}" class="menu-link">
                        <div>Events Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/music-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/music-income') }}" class="menu-link">
                        <div>Music Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/video-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/video-income') }}" class="menu-link">
                        <div>Videos Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/donation-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/donation-income') }}" class="menu-link">
                        <div>Donation Income</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/total-income') ? 'active' : '' }}">
                    <a href="{{ url('/app/total-income') }}" class="menu-link">
                        <div>Total Income</div>
                    </a>
                </li>
            </ul>
        </li> --}}
        <li class="menu-item {{ Request::is('app/invoice/list') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Invoice</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>User Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>FanPage Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>Bazar Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>OnlineShop Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>Ads Service Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/list') ? 'active' : '' }}">
                    <a href="{{ url('/app/invoice/list') }}" class="menu-link">
                        <div>Donation Invoice</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/invoice/edit') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <div>Setting</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ Request::is('app/invoice/edit') ? 'active' : '' }}">
                            <a href="{{ url('/app/invoice/edit') }}" class="menu-link">
                                <div>Edit Invoice</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ Request::is('settings/payment-offices') ? 'active open' : '' }}{{ Request::is('settings/bank-transfer') ? 'active open' : '' }}{{ Request::is('settings/paypal-stripe') ? 'active open' : '' }}{{ Request::is('settings/payment-methods') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-credit-card"></i>
                <div>Payments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('settings/payment-offices') ? 'active' : '' }}">
                    <a href="{{ url('/settings/payment-offices') }}" class="menu-link">
                        <div>Payment Office</div>
                    </a>
                </li>
                <li class="menu-item  {{ Request::is('settings/bank-transfer') ? 'active' : '' }}">
                    <a href="{{ url('/settings/bank-transfer') }}" class="menu-link">
                        <div>Add Manage Bank Transfer</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('settings/paypal-stripe') ? 'active' : '' }}">
                    <a href="{{ url('/settings/paypal-stripe') }}" class="menu-link">
                        <div>Add Manage Paypal Transfer</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('settings/payment-methods') ? 'active' : '' }}">
                    <a href="{{ url('/settings/payment-methods') }}" class="menu-link">
                        <div>Add Manage DebitCard</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">App Settings</span>
        </li>
        {{-- <li class="menu-item {{ Request::is('app/portal-notification') ? 'active' : '' }}">
            <a href="{{ url('/app/portal-notification') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-notification'></i>
                <div>Portal Notifications</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Request::is('portal/notification-setting') || Request::is('app/portal-notification*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-notification"></i>
                <div>Portal Notification</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('portal/notification-setting') ? 'active' : '' }}">
                    <a href="{{ url('/portal/notification-setting') }}" class="menu-link">
                        <div>Notification Setting</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('app/total-income2') ? 'active' : '' }}">
                    <a href=" " class="menu-link">
                        <div>Notification Report</div>
                    </a>
                </li>
            </ul>
        </li>
        
    @endcan
    @can('addpolicy.read')
        <li class="menu-item {{ Request::is('app-policy') ? 'active' : '' }}">
            <a href="{{ url('/app-policy') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div>App Policy</div>
            </a>
        </li>
    @endcan
  

    @can('admins.read')
        {{-- <li class="menu-item {{ Request::is('settings/countrieslist') ? 'active' : '' }}">
            <a href="{{ url('/settings/countrieslist') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-flag"></i>
                <div>Select Country</div>
            </a>
        </li> --}}
        <li class="menu-item {{ Request::is('nationality') ? 'active' : '' }}">
            <a href="{{ url('/nationality') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-flag"></i>
                <div>Add Nationality</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('app/popup') ? 'active' : '' }} ">
            <a href="{{ url('/app/popup') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-square-add"></i>
                <div>Add Popup</div>
            </a>
        </li>
    @endcan
    @can('manageorigin.read')
        <li class="menu-item {{ Request::is('settings/app-setting/app-info') ? 'active' : '' }}">
            <a href="{{ url('/settings/app-setting/app-info') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-info-square"></i>
                <div>App Info</div>
            </a>
        </li>
    @endcan
    @can('manageorigin.read')
    <li class="menu-item {{ Request::is('settings/app-setting/app-info') ? 'active' : '' }}">
        <a href="{{ route('yekbun_location.countries.index') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-info-square"></i>
            <div>Manage Country</div>
        </a>
    </li>
@endcan

    @can('addringtone.read')
        <li class="menu-item {{ Request::is('settings/app-setting/message-ringtone') ? 'active open' : (Request::is('settings/app-setting/call-ringtone') ? 'active open' : '') }}"
            style="">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-devices"></i>
                <div>Add Ringtone</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('settings/app-setting/message-ringtone') ? 'active' : '' }}">
                    <a href="{{ route('settings.appsetting.message.ringtone') }}" class="menu-link">
                        <div>Message Ringtone</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('settings/app-setting/call-ringtone') ? 'active' : '' }} ">
                    <a href="{{ route('settings.appsetting.call.ringtone') }}" class="menu-link">
                        <div>Calls Ringtone</div>
                    </a>
                </li>
            </ul>
        </li>
    @endcan

    @can('admins.read')
        <li class="menu-item {{ Request::is('settings/app-setting/maintainance') ? 'active' : '' }}">
            <a href="{{ url('/settings/app-setting/maintainance') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-wrench"></i>
                <div>Maintainance</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">System Settings</span>
        </li>
        <li class="menu-item {{ Request::is('logs') ? 'active' : '' }}">
            <a href="{{ url('/logs') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>System Log</div>
            </a>
        </li>
    @endcan
    @can('languages.read')
        <li class="menu-item {{ Request::is('language') ? 'active' : '' }}">
            <a href="{{ url('/language') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-transfer"></i>
                <div>Languages</div>
            </a>
        </li>
    @endcan
    @can('admins.read')
        <li class="menu-item {{ Request::is('app/ftp/list') ? 'active' : '' }}">
            <a href="{{ url('/app/ftp/list') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-network-chart"></i>
                <div>FTP Settings</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cloud-upload"></i>
                <div>Backup Section</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="javascript:void(0)" class="menu-link">
                        <div>Add/Manage Backup Plan</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="javascript:void(0)" class="menu-link">
                        <div>Backup Setting</div>
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-item {{ Request::is('settings/team/members') ? 'active open' : '' }}{{ Request::is('settings/team/roles') ? 'active open' : '' }}{{ Request::is('app/task/list') ? 'active open' : '' }}{{ Request::is('settings/team/members') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Team &amp; Role</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('settings/team/members') ? 'active' : '' }}">
                    <a href="{{ url('/settings/team/members') }}" class="menu-link">
                        <div>Add/Manage Team</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('settings/team/roles') ? 'active ' : '' }}">
                    <a href="{{ url('/settings/team/roles') }}" class="menu-link">
                        <div>Add/Manage Roles</div>
                    </a>
                </li>
                {{-- <li class="menu-item {{ Request::is('app/task/list') ? 'active' : '' }} ">
          <a href="{{url('/app/task/list')}}" class="menu-link">
            <div>Add Tasks</div>
          </a>
        </li> --}}
                {{-- <li class="menu-item {{ Request::is('team/policy_and_terms') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ Request::is('team/policy_and_terms') ? 'active' : '' }}">
              <a href="{{url('/team/policy_and_terms')}}" class="menu-link">
                <div>Policy and Terms</div>
              </a>
            </li>
          </ul>
        </li> --}}
            </ul>
        </li>
        <li class="menu-item {{ Request::is('app-setting/department') ? 'active open' : '' }}">
            <a href="{{ route('department.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-devices"></i>
                <div>Departments</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('storage_setting') ? 'active' : '' }}">
            <a href="{{ url('storage_setting') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-devices"></i>
                <div>Storage Setting</div>
            </a>
        </li>
    @endcan
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 298px; right: 4px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 37px;"></div>
    </div>
    </ul>

</aside>
