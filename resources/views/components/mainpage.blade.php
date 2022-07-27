@php
$buyElements = [
    [
        'text' => 'DIGITAL COMICS',
        'img' => 'buy-comics-digital-comics.png',
    ],
    [
        'text' => 'DC MERCHANDISE',
        'img' => 'buy-comics-merchandise.png',
    ],
    [
        'text' => 'SUBSCRIPTION',
        'img' => 'buy-comics-subscriptions.png',
    ],
    [
        'text' => 'COMIC SHOP LOCATOR',
        'img' => 'buy-comics-shop-locator.png',
    ],
    [
        'text' => 'DC POWER VISA',
        'img' => 'buy-dc-power-visa.svg',
    ],
];

@endphp


<div>
    <div class="jumbocontainer">
        <div class="jumboimg"><img src="{{ asset('images/jumbotron.jpg') }}" alt=""></div>
        <div class="floatingbtn container"><button type="button" class="btn btn-primary btn-lg">CURRENT SERIES</button>
        </div>
    </div>
</div>

<div>
    <div class="comicssection">
        <div class="container h-100 p-4 py-5">
            <div class="row h-100">
                @foreach ($comics as $comic)
                    <div class="col lg-2">
                        <div class="squareimg mb-3">
                            <a href="#">
                                <img src="{{ $comic['thumb'] }}" srcset="" /></a>
                        </div>
                        <div class="comicname">{{ strtoupper($comic['title']) }}</div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 mb-0 text-center">
                <button type="button" class="btn mybtn btn-lg px-5">LOAD MORE</button>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="bannerblue">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                @foreach ($buyElements as $element)
                    <div class="col d-flex align-items-center gap-3">
                        <img src="{{ asset('images') . '/' . $element['img'] }}" alt="" srcset=""
                            class="icon" />
                        <span>{{ $element['text'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
