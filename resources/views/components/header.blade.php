@php
$navLinks = [
    [
        'title' => 'Characters',
        'link' => "#",
    ],
    [
        'title' => 'Comics',
        'link' => "#",
    ],
    [
        'title' => 'Movies',
        'link' => "#",
    ],
    [
        'title' => 'Tv',
        'link' => "#",
    ],
    [
        'title' => 'Games',
        'link' => "#",
    ],
    [
        'title' => 'Collectibles',
        'link' => "#",
    ],
    [
        'title' => 'Videos',
        'link' => "#",
    ],
    [
        'title' => 'Fans',
        'link' => "#",
    ],
    [
        'title' => 'News',
        'link' => "#",
    ],
    [
        'title' => 'Shop',
        'link' => "#",
    ],
];
@endphp

<div>
    <div class="container">
        <nav class="navbar navbar-light justify-content-between align-items-center"
            style="padding-bottom: 0px; padding-top: 0px">
            <div class="navbar-brand py-2">
                <a><img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" srcset="" /></a>
            </div>
            <div class="d-flex gap-4 navelements">
                @foreach ($navLinks as $navLink)
                <div class="dcnavelement">
                    <a href="{{$navLink["link"]}}">{{strtoupper($navLink["title"])}}</a>
                </div>
                @endforeach
            </div>
        </nav>
    </div>
</div>
