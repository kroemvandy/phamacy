@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <div class="bg-gray-100 p-5 h-full">
        <div class="bg-white shadow-md rounded-lg p-5">
            <h3 class="text-2xl font-medium text-gray-700 mb-2">Medicine Cart</h3>
            <hr>

            @if (Session::has('success'))
                <div id="success-alert"
                    class="p-3 mb-3 w-96 mt-1 mx-auto text-sm text-green-700 bg-green-100 border border-green-400 rounded-lg shadow-md flex items-center justify-between dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22"
                            viewBox="0 0 48 48">
                            <path fill="#c8e6c9"
                                d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z">
                            </path>
                            <path fill="#4caf50"
                                d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z">
                            </path>
                        </svg>
                        {{ Session::get('success') }}
                    </div>
                    <button onclick="document.getElementById('success-alert').remove();"
                        class="text-green-700 hover:text-green-800 focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').remove();
                    }, 5000);
                </script>
            @endif

            <div class="flex justify-end mt-5">
                <a href="{{ route('create.cart') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i
                        class='fas fa-plus-square'></i> Create Cart</a>
            </div>

            <div class="overflow-auto h-[440px] no-scrollbar">
                <div class="grid sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-6 mt-10 mb-5 p-1">

                    @if (count($cart) > 0)
                        @foreach ($cart as $cartItem)
                            <div
                                class="bg-white rounded-lg overflow-hidden shadow-lg ring-4 ring-green-500 ring-opacity-40 max-w-sm">
                                <div class="relative">
                                    @if ($cartItem->Image !== '')
                                        <img class="w-full h-full object-cover"
                                            src="{{ asset('storage/' . $cartItem['medicine']['Image']) }}" alt="img">
                                    @else
                                        <img src="{{ asset('/images/no-img.png') }}" alt="image">
                                    @endif
                                    <div
                                        class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">
                                        SALE
                                    </div>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-medium mb-2">{{ $cartItem['medicine']['MedicineName'] }}</h3>
                                </div>
                            </div>
                        @endforeach

                    @else
                        <p>No Data</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
