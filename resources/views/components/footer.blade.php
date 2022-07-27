@php
$footerElements = [
    [
        'title' => 'DC COMICS',
        'links' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News'],
    ],
    [
        'title' => 'SHOP',
        'links' => ['Shop DC', 'Shop DC Collectibles'],
    ],
    [
        'title' => 'DC',
        'links' => ['Terms Of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshps', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'],
    ],
    [
        'title' => 'SITES',
        'links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
    ],
];

$socialLogos = [
    [
        'name' => 'facebook',
        'icon' => 'footer-facebook.png',
    ],
    [
        'name' => 'twitter',
        'icon' => 'footer-twitter.png',
    ],
    [
        'name' => 'youtube',
        'icon' => 'footer-youtube.png',
    ],
    [
        'name' => 'pinterest',
        'icon' => 'footer-pinterest.png',
    ],
    [
        'name' => 'periscope',
        'icon' => 'footer-periscope.png',
    ],
];
@endphp


<div>
    <div class="footercontainer">
        <div class="container">
            <div class="d-flex justify-content-between h-100">
                <div class="d-flex flex-column flex-wrap gap-3 py-5 footerlinks">
                    @foreach ($footerElements as $footerElement)
                        <div>
                            <div class="title pb-2">{{ $footerElement['title'] }}</div>
                            @foreach ($footerElement['links'] as $link)
                                <div class="text">
                                    {{ $link }}
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="of-hidden">
                    <img src="{{ asset('images/dc-logo-bg.png') }}" alt="" srcset="" />
                </div>
            </div>
        </div>
    </div>
    <div>
     <div class="bannersignupcontainer">
       <div class="container h-100">
         <div class="row align-items-center justify-content-between h-100">
           <div class="col">
             <button type="button" class="btn btn-outline-primary signupbtn">
               SIGN-UP NOW!
             </button>
           </div>
           <div class="col socialslink d-flex justify-content-end gap-4 align-items-center">
             <span>FOLLOW US</span>
             @foreach ($socialLogos as $socialLogo)
             <img src="{{asset("images") . "/" . $socialLogo["icon"]}}">
             @endforeach
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
