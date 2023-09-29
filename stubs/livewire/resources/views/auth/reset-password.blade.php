@extends('layouts/fullLayoutMaster')

@section('title', 'Reset Password')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('frontend/css/base/pages/authentication.css')) }}">
@endsection

@section('content')
  <div class="auth-wrapper auth-basic px-2">
    <div class="auth-inner my-2">
      <!-- Reset Password basic -->
      <div class="card mb-0">
        <div class="card-body">
          <a href="javascript:void(0);" class="brand-logo">
            
<svg width="608" height="235" viewBox="0 0 608 235" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M113.925 152.961C112.956 151.217 111.572 150.343 109.774 150.34C108.793 150.36 107.817 150.496 106.867 150.746C104.598 151.324 102.407 151.84 100.295 152.295C94.8066 153.536 89.2333 154.366 83.6214 154.776C82.5119 144.416 78.7053 135.748 72.2017 128.773C65.8519 121.652 57.4116 118.091 46.8809 118.091C38.5578 118.014 30.3975 120.398 23.4249 124.943C16.3665 129.378 10.8305 135.626 6.81669 143.687C2.80627 151.618 0.801051 160.69 0.801051 170.903C0.739817 178.144 2.30026 185.308 5.36793 191.868C8.28142 198.172 12.8784 203.549 18.6525 207.408C24.6046 211.305 31.7315 213.253 40.0331 213.253C49.8586 213.253 58.6465 209.894 66.3966 203.177C74.1468 196.319 79.3353 187.247 81.9621 175.961C88.5278 175.727 95.056 174.866 101.458 173.389C104.172 172.748 106.807 171.992 109.363 171.124C113.374 169.917 115.379 166.087 115.379 159.634C115.379 156.933 114.894 154.709 113.925 152.961ZM53.097 186.624C49.9154 190.116 46.1105 191.864 41.6824 191.868C37.6719 191.868 34.1427 189.919 31.0948 186.022C28.1873 182.122 26.7335 176.477 26.7335 169.088C26.7335 159.68 28.5332 152.423 32.1325 147.317C35.8689 142.08 40.5043 139.46 46.0387 139.456H47.0814C46.6685 141.582 46.4604 143.742 46.4598 145.908C46.4433 150.936 47.5785 155.9 49.7784 160.421C52.0733 164.924 55.5097 168.746 59.7443 171.505C58.6548 178.092 56.4391 183.131 53.097 186.624Z" fill="#0065E7"/>
<path d="M261.288 152.761C260.185 151.424 258.595 150.756 256.516 150.756C255.818 150.725 255.12 150.793 254.44 150.956L248.836 151.959L246.525 152.41C238.875 153.884 232.657 154.741 227.871 154.982C231.19 147.185 232.851 140.265 232.854 134.223C232.854 128.979 231.608 125.014 229.115 122.327C226.621 119.503 223.37 118.092 219.359 118.096C214.946 118.041 210.639 119.451 207.112 122.106C203.461 124.854 200.535 128.453 198.59 132.588C196.547 136.732 195.478 141.288 195.467 145.908C195.467 151.282 196.505 155.917 198.58 159.814C194.443 166.936 188.225 176.483 179.927 188.454C177.985 163.723 177.016 143.632 177.019 128.182C177.019 124.422 176.259 121.802 174.738 120.321C173.355 118.844 170.795 118.106 167.058 118.106C164.265 118.033 161.515 118.805 159.168 120.321C157.092 121.658 155.294 124.345 153.774 128.382C145.88 149.207 137.229 169.23 127.821 188.454C125.883 163.723 124.914 143.632 124.914 128.182C124.914 124.552 124.015 121.999 122.217 120.522C120.546 118.911 117.915 118.106 114.326 118.106C109.624 118.106 106.096 118.978 103.744 120.723C101.391 122.467 100.144 125.558 100.004 129.997V137.055C100.004 141.868 100.101 146.952 100.295 152.31C100.532 158.917 100.918 165.935 101.453 173.364C101.753 177.579 102.101 181.923 102.495 186.398C103.328 195.672 105.333 202.458 108.511 206.756C111.83 211.057 116.326 213.208 122.001 213.208C126.566 213.208 130.512 212.065 133.837 209.779C137.296 207.5 140.686 203.403 144.008 197.487C147.467 191.572 151.341 182.971 155.629 171.685L156.671 186.448C157.363 195.99 159.093 202.841 161.86 207.002C164.767 211.166 168.988 213.248 174.523 213.248C179.293 213.317 183.955 211.832 187.807 209.017C191.818 206.196 196.592 200.954 202.129 193.291C206.979 186.574 211.407 180.057 215.414 173.74C221.009 175.378 226.814 176.192 232.644 176.157C237.153 176.171 241.652 175.746 246.079 174.888C248.413 174.437 250.72 173.851 252.987 173.134C256.309 172.061 258.8 170.382 260.461 168.096C262.132 165.673 262.968 162.381 262.968 158.22C262.958 155.924 262.398 154.104 261.288 152.761ZM214.752 144.003C213.853 144.004 212.973 143.738 212.225 143.239C211.476 142.74 210.893 142.03 210.548 141.2C210.203 140.369 210.112 139.455 210.287 138.572C210.462 137.69 210.895 136.879 211.53 136.243C212.166 135.607 212.976 135.173 213.858 134.997C214.741 134.821 215.655 134.911 216.486 135.255C217.317 135.599 218.028 136.182 218.527 136.93C219.027 137.677 219.294 138.557 219.294 139.456C219.294 140.661 218.816 141.817 217.964 142.67C217.113 143.522 215.957 144.002 214.752 144.003V144.003Z" fill="#0065E7"/>
<path d="M364.086 169.695C363.686 168.947 363.086 168.324 362.353 167.896C361.62 167.469 360.783 167.253 359.935 167.274C357.86 167.274 355.991 168.214 354.33 170.096C351.433 173.438 348.796 176.382 346.42 178.929C343.569 181.963 341.086 184.395 338.97 186.223C335.231 189.448 331.979 191.06 329.215 191.06C325.205 191.06 323.199 188.372 323.199 182.994C323.199 179.235 324.513 171.508 327.14 159.814C330.188 146.112 331.71 136.639 331.707 131.395C331.707 122.656 327.21 118.288 318.216 118.291C313.648 118.291 308.596 119.837 303.062 122.928C297.668 126.016 292.134 131.196 286.459 138.469C280.921 145.591 275.87 154.863 271.304 166.286C271.304 158.897 271.512 151.711 271.926 144.73C290.331 125.223 303.612 108.215 311.77 93.7073C319.934 79.0592 324.017 64.9491 324.017 51.3772C324.017 42.9085 322.011 36.0574 318.001 30.8237C314.124 25.4464 309.003 22.7578 302.636 22.7578C290.735 22.7578 280.495 30.4177 271.916 45.7375C263.477 60.9103 257.044 79.7192 252.616 102.164C249.399 118.746 247.364 135.535 246.525 152.405C246.298 157.274 246.184 162.097 246.184 166.873L246.079 174.893L245.974 183.015C245.84 185.571 245.771 188.998 245.768 193.296C245.768 200.819 246.391 206.061 247.638 209.022C249.022 211.843 251.789 213.253 255.94 213.253C266.316 213.253 272.82 207.877 275.45 197.126C277.462 189.111 280.171 181.288 283.546 173.745C286.865 166.353 290.187 160.439 293.512 156.004C296.831 151.436 299.391 149.151 301.192 149.151C302.709 149.151 303.47 150.228 303.473 152.38C303.473 155.602 302.574 161.45 300.776 169.925C298.838 179.601 297.869 186.32 297.869 190.083C297.869 197.606 299.668 203.384 303.268 207.418C306.864 211.315 312.191 213.263 319.249 213.263C327.828 213.263 335.44 210.979 342.084 206.41C346.106 203.678 349.917 200.647 353.483 197.342C356.294 194.755 359.066 191.933 361.8 188.875C364.433 185.917 365.748 181.751 365.745 176.377C365.745 173.537 365.192 171.309 364.086 169.695ZM281.055 81.1997C283.962 69.3723 286.938 60.033 289.983 53.1819C293.028 46.1937 295.795 42.6996 298.285 42.6996C300.086 42.6996 301.47 43.8426 302.435 46.1285C303.401 48.4145 303.886 51.7064 303.889 56.0042C303.889 65.4087 301.048 75.8909 295.367 87.451C289.804 99.0486 282.681 109.831 274.197 119.499C275.825 106.624 278.114 93.8404 281.055 81.1997V81.1997Z" fill="#0065E7"/>
<path d="M458.938 152.961C457.972 151.217 456.588 150.343 454.787 150.34C453.805 150.36 452.829 150.496 451.879 150.746C449.61 151.324 447.418 151.842 445.302 152.3C439.813 153.538 434.24 154.365 428.629 154.776C427.526 144.416 423.721 135.748 417.214 128.773C410.864 121.652 402.422 118.091 391.888 118.091C383.56 118.011 375.394 120.396 368.417 124.943C361.366 129.378 355.831 135.626 351.814 143.687C347.804 151.618 345.798 160.69 345.798 170.903C345.795 173.588 345.999 176.27 346.41 178.924C347.099 183.405 348.431 187.762 350.365 191.862C351.255 193.757 352.295 195.577 353.473 197.307C356.183 201.291 359.639 204.713 363.65 207.383C369.602 211.28 376.729 213.228 385.03 213.228C394.856 213.228 403.644 209.869 411.394 203.152C419.144 196.294 424.324 187.222 426.934 175.936C433.498 175.702 440.025 174.84 446.425 173.364C449.142 172.723 451.779 171.967 454.336 171.099C458.346 169.892 460.351 166.062 460.351 159.609C460.378 156.925 459.907 154.709 458.938 152.961ZM398.119 186.624C394.938 190.116 391.131 191.864 386.7 191.868C382.689 191.868 379.162 189.919 376.117 186.022C373.21 182.122 371.756 176.477 371.756 169.088C371.756 159.68 373.556 152.423 377.155 147.317C380.888 142.08 385.523 139.46 391.061 139.456H392.099C391.686 141.582 391.478 143.742 391.477 145.908C391.458 150.936 392.594 155.901 394.796 160.421C397.089 164.925 400.526 168.747 404.762 171.505C403.655 178.092 401.441 183.131 398.119 186.624Z" fill="#0065E7"/>
<path d="M606.301 152.761C605.191 151.424 603.6 150.756 601.528 150.756C600.831 150.724 600.132 150.792 599.453 150.956L593.848 151.959C585.129 153.71 578.141 154.713 572.884 154.967C576.202 147.17 577.862 140.25 577.862 134.208C577.862 128.964 576.617 124.999 574.127 122.312C571.637 119.488 568.386 118.077 564.372 118.081C559.958 118.026 555.651 119.436 552.125 122.091C548.472 124.838 545.546 128.437 543.603 132.573C541.565 136.713 540.5 141.264 540.49 145.878C540.49 151.252 541.527 155.887 543.603 159.784C539.452 166.906 533.226 176.447 524.924 188.409C522.982 163.678 522.013 143.587 522.017 128.137C522.017 124.377 521.255 121.757 519.731 120.276C518.347 118.799 515.787 118.061 512.051 118.061C509.259 117.988 506.511 118.761 504.165 120.276C502.09 121.613 500.29 124.3 498.766 128.337C490.879 149.171 482.23 169.195 472.819 188.409C470.884 163.678 469.916 143.587 469.916 128.137C469.916 124.507 469.017 121.954 467.219 120.477C465.548 118.866 462.918 118.061 459.329 118.061C454.626 118.061 451.097 118.933 448.741 120.677C446.385 122.422 445.14 125.513 445.006 129.952V137.01C445.006 141.822 445.102 146.909 445.292 152.27C445.539 158.877 445.925 165.895 446.45 173.324C446.751 177.539 447.1 181.883 447.498 186.358C448.327 195.632 450.332 202.418 453.513 206.716C456.832 211.017 461.329 213.168 467.004 213.168C471.569 213.168 475.512 212.025 478.834 209.739C482.293 207.46 485.684 203.362 489.006 197.447C492.465 191.532 496.34 182.931 500.631 171.645L501.669 186.358C502.361 195.9 504.09 202.751 506.857 206.912C509.765 211.076 513.986 213.158 519.52 213.158C524.295 213.258 528.972 211.801 532.845 209.007C536.855 206.186 541.629 200.944 547.167 193.281C552.01 186.564 556.438 180.047 560.452 173.73C566.047 175.368 571.851 176.182 577.681 176.147C584.577 176.196 591.438 175.182 598.024 173.139C601.343 172.066 603.833 170.387 605.494 168.101C607.165 165.678 608 162.386 608 158.225C607.973 155.926 607.407 154.104 606.301 152.761ZM560.336 146.073C559.437 146.073 558.558 145.807 557.81 145.307C557.062 144.808 556.48 144.097 556.136 143.267C555.791 142.436 555.701 141.522 555.877 140.64C556.052 139.758 556.485 138.947 557.121 138.312C557.757 137.676 558.567 137.243 559.449 137.067C560.331 136.892 561.245 136.982 562.076 137.326C562.907 137.67 563.617 138.253 564.117 139.001C564.616 139.748 564.883 140.627 564.883 141.527C564.883 142.733 564.404 143.889 563.551 144.742C562.699 145.594 561.542 146.073 560.336 146.073V146.073Z" fill="#0065E7"/>
</svg>

          </a>

          <h4 class="card-title mb-1">Reset Password 🔒</h4>
          <p class="card-text mb-2">Your new password must be different from previously used passwords</p>

          <form class="auth-reset-password-form mt-2" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="mb-1">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                placeholder="john@example.com" aria-describedby="email" tabindex="1" value="{{ old('email') }}" required
                autofocus />
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="mb-1">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-new">New Password</label>
              </div>
              <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror"
                  id="reset-password-new" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="reset-password-new" tabindex="2" autofocus required />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="mb-1">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="reset-password-confirm">Confirm Password</label>
              </div>
              <div class="input-group input-group-merge form-password-toggle">
                <input type="password" class="form-control form-control-merge" id="reset-password-confirm"
                  name="password_confirmation" autocomplete="new-password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="reset-password-confirm" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" tabindex="4">Set New Password</button>
          </form>

          <p class="text-center mt-2">
            @if (Route::has('login'))
              <a href="{{ route('login') }}">
                <i data-feather="chevron-left"></i> Back to login
              </a>
            @endif
          </p>
        </div>
      </div>
      <!-- /Reset Password basic -->
    </div>
  </div>
@endsection