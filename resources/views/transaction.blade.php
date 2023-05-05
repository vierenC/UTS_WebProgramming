@extends('template')

@section('title', "Transactions")

@section('content')
    <div class="pb-4 mb-4 border-b border-b-black">
        <div class="">Transaction History</div>
    </div>

    <div class="flex flex-col gap-4">

    @foreach($transactions->reverse() as $t)
        <div class="transactions max-w-full relative">
            <div class="bg-blue-200 px-4 py-2">Transaction Date on {{date_format($t->created_at, "Y-m-d")}}</div>
            <div class="!COFFEE flex-col bg-[#d9d9d9] rounded buy">
                <img class="w-full h-[15rem] object-cover rounded" src="{{$t->coffee->source}}" alt="">
                <div class="pt-2 px-2">
                    {{$t->coffee->name}}
                </div>

                <div class="px-2 text-white">
                    Price : {{$t->coffee->price}}
                </div>

                <div class="px-2 pb-2 text-white">
                    Total Stars Obtained : {{floor($t->coffee->price / 10000)}} Stars
                </div>
            </div>
        </div>
    @endforeach

    </div>
@endsection


