<nav class="topper navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container topper_contaoner">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="right_side navbar-nav me-auto">
               <li><i class="fas fa-phone"></i> ০১৭৭৬৯৬৩৯০৭</li>
                <li><i class="far fa-envelope"></i> info@example.com</li>
            </ul>
        
            <ul class="mid_side navbar-nav me-auto">
                <li class="mt-2">সকল প্রকার প্রোডাক্টের উপর ৩০% ছাড়! </li>
                 <li> <button class="btn btn-outline-light" type="button">বিস্তারিত</button></li>
             </ul>

            <!-- Right Side Of Navbar -->
            <ul class="log_reg navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class=" nav-link" href="{{ route('login') }}">লগ ইন</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">রেজিস্টার</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
               
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light logo_nav">
    <div class="container-fluid logo_container">
        <div class="content">
            <div class="logo">
                <svg class="logo_mark" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.7642 12.7705C28.7642 12.7705 28.8475 12.619 28.951 12.3704C28.8005 12.3181 28.7642 12.7705 28.7642 12.7705Z" fill="#3E084C"/>
                    <path d="M4.83974 11.1348C6.05181 10.3367 6.49247 9.57386 6.88084 8.89954C7.32683 8.12492 7.83257 7.24788 9.21109 7.00461C10.2002 6.82963 11.3493 6.65144 12.3789 6.65144C12.5336 6.65144 12.7726 6.65144 13.0522 6.67705C16.4867 4.43216 20.5913 3.1262 25 3.1262C29.4087 3.1262 33.5133 4.43216 36.9478 6.67705C37.2274 6.65144 37.4664 6.65144 37.6211 6.65144C38.6496 6.65144 39.7998 6.82963 40.7889 7.00461C42.1674 7.24788 42.6732 8.12492 43.1192 8.89954C43.5075 9.57279 43.9471 10.3357 45.1592 11.1348C45.7247 11.5072 46.2294 11.9916 46.6785 12.5432C42.3637 5.04673 34.2708 0 25 0C15.7292 0 7.63625 5.04673 3.31932 12.5432C3.76958 11.9916 4.27425 11.5072 4.83974 11.1348Z" fill="#3E084C"/>
                    <path d="M49.729 21.3179C49.4751 21.8546 49.0205 22.2174 48.8221 22.3763C48.3142 22.7829 47.626 23.1894 46.8301 23.6492C46.8567 24.0963 46.8727 24.5455 46.8727 24.9989C46.8727 37.0791 37.0801 46.8717 25 46.8717C12.9198 46.8717 3.12727 37.0791 3.12727 24.9989C3.12727 24.5455 3.14327 24.0963 3.16995 23.6492C2.37506 23.1894 1.6858 22.7829 1.17793 22.3763C0.978405 22.2174 0.523879 21.8535 0.271008 21.3179C0.0928257 22.5204 0 23.7485 0 25C0 38.8065 11.1924 50 25 50C38.8076 50 50 38.8076 50 25C50 23.7485 49.9061 22.5204 49.729 21.3179Z" fill="#3E084C"/>
                    <path d="M48.8274 20.3918C48.5788 19.1509 47.3742 13.8694 44.5734 12.0257C41.7727 10.182 42.4107 8.37459 40.6033 8.05557C38.7958 7.73655 36.137 7.3471 35.5693 8.44501C35.0017 9.54291 34.5771 11.6 34.8609 11.9542C35.1447 12.3085 36.8102 12.3437 37.874 11.9542C38.9377 11.5648 39.7529 11.2458 40.7452 12.0609C41.7374 12.8761 41.0642 18.0157 42.8364 19.4337C42.8364 19.4337 41.6307 19.0079 41.348 18.5118C41.0642 18.0157 38.3701 17.1653 36.8102 18.9012C35.2503 20.6383 34.1876 21.7724 34.1876 21.7724L36.0665 18.9012C36.0665 18.9012 35.2162 17.5547 33.0886 18.4755C30.9622 19.3974 30.4661 20.2125 29.4727 20.0002C29.4727 20.0002 29.4652 20.0055 29.4535 20.0152C28.6565 19.6012 28.044 18.7572 28.1123 17.9442C28.1828 17.0938 28.6437 15.9948 29.2113 15.3568C29.7789 14.7187 30.0617 13.1941 29.8493 12.7342C29.637 12.2733 29.318 12.5219 29.318 12.5219C30.0979 9.61547 28.7152 8.44501 28.7152 8.44501C29.3884 8.3031 29.6722 6.67278 29.6722 6.67278C28.7504 7.91366 24.745 6.63757 23.2566 6.9566C21.7682 7.27562 21.5911 8.44501 21.5911 8.44501C20.1314 9.61653 20.7065 11.5413 21.0501 12.3693C20.9904 12.3906 20.9125 12.4909 20.8111 12.7342C20.4569 13.5846 21.8034 15.7825 22.0872 17.3072C22.371 18.8319 21.5196 19.789 20.5273 20.0013C19.535 20.2136 19.0389 19.3984 16.9114 18.4766C14.7849 17.5547 13.9335 18.9023 13.9335 18.9023L15.8124 21.7735C15.8124 21.7735 14.7486 20.6393 13.1898 18.9023C11.6299 17.1653 8.93581 18.0157 8.65307 18.5129C8.36925 19.009 7.16465 19.4347 7.16465 19.4347C8.93688 18.0167 8.26362 12.8772 9.2559 12.062C10.2482 11.2469 11.0633 11.5659 12.1271 11.9553C13.1909 12.3448 14.8564 12.3095 15.1402 11.9553C15.424 11.6011 14.9983 9.54505 14.4317 8.44608C13.8641 7.3471 11.2063 7.73761 9.39781 8.05663C7.59037 8.37566 8.22842 10.1831 5.42764 12.0268C2.62686 13.8705 1.42226 19.152 1.17366 20.3929C0.925057 21.6337 4.04485 22.626 7.34177 25.0011C10.6387 27.3761 13.4736 26.9152 13.4736 26.9152V25.2123C13.4736 25.2123 14.0412 27.6578 14.962 30.1396C15.8839 32.6213 17.9047 34.6059 17.9047 34.6059C18.7199 33.5069 19.3579 30.9899 19.3579 30.9899C18.9685 34.1449 16.5934 40.2416 16.5934 40.2416C20.5252 40.6715 24.4569 42.9794 24.9723 43.2899V43.3251C24.9723 43.3251 24.9819 43.3187 25.0011 43.3069C25.0203 43.3187 25.0299 43.3251 25.0299 43.3251V43.2899C25.5452 42.9783 29.477 40.6705 33.4087 40.2416C33.4087 40.2416 31.0337 34.1449 30.6442 30.9899C30.6442 30.9899 31.2823 33.5069 32.0974 34.6059C32.0974 34.6059 34.1183 32.6213 35.039 30.1396C35.9609 27.6578 36.5275 25.2123 36.5275 25.2123V26.9141C36.5275 26.9141 39.3634 27.3751 42.6604 25C45.9562 22.6249 49.0749 21.6327 48.8274 20.3918Z" fill="#3E084C"/>
                </svg>
                <div class="logo_text_con">
                    <span class="navbar-brand logo_text">GYMASTER</span>
                    <span class="trade_mark">&#174;</span>
                </div>
            </div>
            
            <div class="input_dropdown">
                <div class="input_label">
                    <div class="input_box"></div>
                </div>
            </div>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <form class="d-flex">
                  <input class="form-control me-2 input_dropdown" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
        </div> --}}
           
      
    </div>
  </nav>