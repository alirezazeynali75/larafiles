<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">مدیریت فروشگاه</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">کاربران</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{route('admin.users.create')}}">ثبت کاربر جدید</a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('admin.users.list') }}">لیست کاربران</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">فایل ها</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('admin.files.create') }}">ثبت فایل جدید</a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('admin.files.list') }}">لیست فایل ها</a>

                </div>
            </li><li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">طرح های اشتراکی</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('admin.plans.create') }}">ثبت طرح جدید</a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('admin.plans.list') }}">لیست طرح ها</a>

                </div>
            </li>
            </li><li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com/" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">پکیج ها</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('admin.packages.create') }}">ثبت پکیج جدید</a>
                    <hr>
                    <a class="dropdown-item" href="{{ route('admin.packages.list') }}">لیست پکیج ها</a>

                </div>
            </li>
        </ul>

    </div>
</nav>


