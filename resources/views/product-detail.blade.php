@extends('mainlayout.layout')

@section('content')

    @if($success)
        @php
            session()->flash('success', 'Product berhasil ditambahkan');
        @endphp
    @endif
    <div class="w-full h-[100px] bg-main flex justify-start items-center px-5">
        <div class="font-poppins font-[700] text-[#9F9F9F] text-[32px]">
            Product Detail
        </div>
    </div>
    @include('session.message')
    <div class="w-[70%] mx-auto  bg-[#FFFFFF] flex flex-row my-12 px-10 justify-between items-start">
        <div class="flex w-[423px] h-[500px] justify-center items-center bg-main">
            <img src="storage/images/{{  $image }}" class="w-full object-contain" />
        </div>

        <div class="w-[50%] ">
            <div class="flex flex-col w-full justify-center items-start">
                <h1 class="font-poppins font-[400] text-[#000000] text-[42px]">{{ $data['title'] }}</h1>
                <p class="font-poppins font-[500] text-[#9F9F9F] text-[24px]">
                    Harga Product
                </p>
                <div class="flex flex-row justify-center items-center mt-5">
                    <div class="grid grid-cols-5">
                        <img src="/images/star.png" alt="star" />
                        <img src="/images/star.png" alt="star" />
                        <img src="/images/star.png" alt="star" />
                        <img src="/images/star.png" alt="star" />
                        <img src="/images/star.png" alt="star" />
                    </div>
                    <div class="w-[1px] h-[30px] bg-[#9F9F9F] mx-4"></div>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[13px]">
                        5 Customer Review
                    </p>
                </div>
                <div class="w-[424px] my-5">
                    <p class="font-poppins font-[400] text-[#000000] text-[13px]">
                        {{ $data['description'] }}
                    </p>
                </div>
                <div
                    class="w-[215px] h-[64px] bg-[#FFFFFF] flex justify-center border rounded-2xl cursor-pointer hover:scale-95 items-center">
                    <p class="font-poppins font-[400] text-[#000000] text-[20px]  ">Add To Cart</p>
                </div>
                <div class="w-[605px] h-[1px] bg-[#D9D9D9] my-10">
                </div>
                <div class="grid grid-cols-3 grid-rows-4 gap-3">
                    {{--  --}}
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">Quantity</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">:</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">{{ $data['product-quantity'] }}</p>


                    {{--  --}}
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">Date</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">:</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">{{ $data['production-date'] }}</p>

                    {{--  --}}
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">Manufactur</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">:</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">{{ $data['manufacturer'] }}</p>

                    {{--  --}}
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">Category</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">:</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">{{ $data['production-category'] }}</p>

                    {{--  --}}
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">Warranty</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">:</p>
                    <p class="font-poppins font-[400] text-[#9F9F9F] text-[16px]">2</p>
                </div>
            </div>
        </div>
    </div>
@endsection
