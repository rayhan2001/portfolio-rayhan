<div class="w-100 bgn1-color p-3 position-fixed z-3 bottom-0 d-block d-lg-none br-top-n5 box-shadow1">
    <div class="header-bottom-menu w-full">
        <ul class="d-flex gap-1 align-items-center justify-content-between">
            <li class="rounded-3 {{ request()->routeIs('home') ? 'bg1-color' : '' }}">
                <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                    <span class="fs-five d-flex align-items-center justify-content-center">
                        <i class="ph-fill ph-user"></i>
                    </span>
                    <span class="d-none d-md-block">About Me</span></a>
            </li>
            <li class="rounded-3 {{ request()->routeIs('portfolio') ? 'bg1-color' : '' }}">
                <a href="{{ route('portfolio') }}" class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                        <span class="fs-five d-flex align-items-center justify-content-center">
                            <i class="ph-fill ph-code-block"></i>
                        </span>
                        <span class="d-none d-md-block">Portfolio</span>
                    </div>
                    <span class="n5-color bg2-color fs-ten px-1 pt-1 rounded-2 me-3 d-none d-md-block">16</span>
                </a>
            </li>
            <li class="rounded-3 {{ request()->routeIs('services') ? 'bg1-color' : '' }}">
                <a href="{{ route('services') }}" class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                    <span class="fs-five d-flex align-items-center justify-content-center">
                        <i class="ph-fill ph-briefcase"></i>
                    </span>
                    <span class="d-none d-md-block">Pricing</span>
                </a>
            </li>
            <li class="rounded-3 {{ request()->routeIs('resume') ? 'bg1-color' : '' }}">
                <a href="{{ route('resume') }}" class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                    <span class="fs-five d-flex align-items-center justify-content-center"><i
                            class="ph-fill ph-notebook fs-six"></i></span>
                    <span class="d-none d-md-block">Resume</span>
                </a>
            </li>
            <li class="rounded-3 {{ request()->routeIs('blog') ? 'bg1-color' : '' }}">
                <a href="{{ route('blog') }}" class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                    <span class="fs-five d-flex align-items-center justify-content-center">
                        <i class="ph-fill ph-newspaper-clipping"></i>
                    </span>
                    <span class="d-none d-md-block">Blog</span>
                </a>
            </li>
            <li class="rounded-3 {{ request()->routeIs('contact') ? 'bg1-color' : '' }}">
                <a href="{{ route('contact') }}" class="d-flex align-items-center gap-2 n5-color fs-eight p-2">
                    <span class="fs-five d-flex align-items-center justify-content-center"><i
                            class="ph-fill ph-envelope"></i></span>
                    <span class="d-none d-md-block">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</div>
