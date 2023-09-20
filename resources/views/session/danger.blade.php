@if (session()->has('error'))
    <div role="alert" class="w-[70%] mx-auto my-2" id="button-danger">
        <div
            class="bg-[#FF0000] text-white font-bold rounded-t px-4 py-2 flex flex-row  justify-between items-start w-full">
            <h1>Danger</h1>
            <div class="cursor-pointer">X</div>
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>
                {{ session()->get('error') }}
            </p>
        </div>
    </div>
@endif
