@extends('template')

@section('title', "Coffees")

@section('content')

    <?php use App\Models\Coffee ?>

    <form action="" method="POST">
        @csrf
        <div class="!CATEGORIES flex flex-wrap pb-4 mb-4 border-b border-b-black items-center gap-x-4 gap-y-2">
            @foreach($categories as $c)
                @if($c->id == $selected)
                    <a href="{{route("coffee", ["id"=>$c->id])}}" class="border text-white bg-black px-4 py-1 border-black">{{$c->name}}</a>
                @else
                    <a href="{{route("coffee", ["id"=>$c->id])}}" class="border px-4 py-1 border-black">{{$c->name}}</a>
                @endif
            @endforeach
        </div>

        <div class="grid grid-cols-2 gap-4">
            @foreach($categories[$selected - 1]->coffees as $c)
                <div id="{{$c->id}}" class="!COFFEE flex-col bg-[#d9d9d9] rounded buy">
                    <img class="w-full h-[15rem] object-cover rounded" src="{{$c->source}}" alt="">
                    <div class="pt-2 px-2">
                        {{$c->name}}
                    </div>

                    <div class="px-2 pb-2 text-white/90">
                        Price : {{$c->price}}
                    </div>
                </div>
            @endforeach

            <input type="hidden" name="coffee_id" value="">
        </div>

        <div id="modal" class="!MODAL px-4 w-full h-[100vh] bg-black/50 fixed inset-0 z-10 flex justify-center flex-col hidden">
            <div class="w-full flex justify-center">
                <div class="relative WHITE-CARD w-[30rem] bg-white rounded h-fit pb-8 opacity-100 py-4 px-8">
                    <svg id="close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute top-4 right-4 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                    <div class="mt-8  now flex flex-col gap-4">
                        <div class="text-[1.2rem] text-center">
                            Are you sure you want to buy this Coffee ?
                        </div>

                        <div class="flex gap-4">
                            <button type="submit" class="bg-[#017eb7] px-16 py-3 font-bold w-full text-white text-[1rem] flex items-center justify-center gap-2">
                                Yes
                            </button>

                            <div id="close-btn" class=" bg-gray-400 px-16 py-3 font-bold w-full text-white text-[1rem] flex items-center justify-center gap-2" >
                                No
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(function(){
            $(".buy").click(function() {
                var clickedElement = $(this);
                var coffeeId = clickedElement[0].id
                $("input[type='hidden'][name='coffee_id']").val(coffeeId);
                $("#modal").css("display", "flex").fadeIn(200);
            })

            $("#close").click(()=> {
                $("#modal").fadeOut(200)
            })

            $("#close-btn").click(()=> {
                $("#modal").fadeOut(200)
            })
        })
    </script>
@endsection


