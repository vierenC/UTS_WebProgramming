@extends('template')

@section('title', "Home")

@section('content')
    <div class="">
        <div class="relative flex">
            <div class="star">
                {{$stars}}
            </div>
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#c6a961" viewBox="0 0 24 24" stroke-width="1.5" stroke="#c6a961" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
            </div>
        </div>

        <div class="">Star Balance</div>

        <button class="mt-2 rounded-2xl bg-black px-6 py-1.5 text-white">Redeem</button>

        <div class="py-4 rounded">
            <img src="https://www.starbucks.co.id/image/card/earnstar.png">
        </div>

        <div class="">
            <div class="font-bold pb-4 mb-4 border-b border-b-black">Promo Information</div>

            <div class="!PROMO pb-4 mb-4 border-b border-b-black/50">
                <div class="flex w-full gap-2">
                    <img class="rounded w-[10rem] object-contain" src="https://images.squarespace-cdn.com/content/v1/5fa1095912d2fc6dfc63ac9c/40c18329-1814-42b3-af3e-14064cd738ff/Tumbler-Day-Everyweekday-IGF.jpg">
                    <div class="">
                        <div class="title font-bold text-[0.9rem]">Tumbler Day Diskon 20%</div>
                        <div class="desc text-[0.8rem]">Khusus selama periode Maret 2023, Stellar Brews menghadirkan promo DISKON 20% yang bisa Anda dapatkan mulai hari ini, Yuk bawa tumblerMU dan dapatkan promo-promo menarik lainnya.</div>
                    </div>
                </div>
            </div>

            <div class="!PROMO pb-4 mb-4 border-b border-b-black/50">
                <div class="flex w-full gap-2">
                    <img class="rounded w-[10rem] object-contain" src="https://awsimages.detik.net.id/community/media/visual/2019/10/01/75822d5a-eebb-4eec-aa33-3f045ee05ab4.jpeg?w=700&q=90">
                    <div class="">
                        <div class="title font-bold text-[0.9rem]">It's Coffee Day! Buy 2 Free 1 Grande Drinks</div>
                        <div class="desc text-[0.8rem]">Spesial menyambut weekend edisi bulan Mei, Stellar Brews hadirkan penawaran menarik. Yuk Simak artikel yang berikut ini dan dapatkan minuman gratis favoritMu!</div>
                    </div>
                </div>
            </div>

            <div class="!PROMO pb-4 mb-4 border-b border-b-black/50">
                <div class="flex w-full gap-2">
                    <img class="rounded w-[10rem] object-contain" src="https://foto.kontan.co.id/Pp4SMt3epUYkxfAnsWqH8UoukFk=/smart/filters:format(webp)/2022/03/10/1575273018p.jpg">
                    <div class="">
                        <div class="title font-bold text-[0.9rem]">Sips of Weekend! TREAT A FRIEND</div>
                        <div class="desc text-[0.8rem]">Khusus tiap weekend, Stellar Brews menghadirkan berbagai promo menarik yang bisa Anda nikmati. Salah satunya promo Treat a Friend. Yuk langsung aja Simak artikel berikut ini!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="!HEADER max-w-[414px] fixed bottom-16 w-full drop-shadow-lg border-b min-h-[5rem] p-4 flex flex-col items-center z-[5]">
    <a href="{{route("coffee")}}" class="fixed right-8 bg-[#c6a961] px-4 py-2 rounded-lg text-white">Coffee</a>
    </div>
@endsection


