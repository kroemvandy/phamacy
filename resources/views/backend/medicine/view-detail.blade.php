@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <div class="bg-gray-100 h-full p-5">
        <div class="bg-white shadow-md rounded-lg p-5">
            <h3 class="text-2xl font-medium mb-2 text-gray-800">Medicine Detail</h3>
            <hr>

            <div class="py-8">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row -mx-4">
                        <div class="md:flex-1 px-4">
                            <div class="h-[420px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4 shadow-md">
                                @if ($medicine->Image !== '')
                                    <img class="w-full h-full object-cover" src="{{ asset('storage/' . $medicine->Image) }}" alt="img">
                                @else
                                    <img src="{{ asset('/images/no-img.png') }}" alt="image">
                                @endif
                            </div>
                        </div>
                        <div class="md:flex-1 px-4">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Medicine Name:</h2>
                            <p class="text-gray-600 text-base mb-4">
                                {{ $medicine->MedicineName }}
                                {{-- {{ $medicine['category']['CategoryName'] }} --}}
                            </p>
                            <div class="flex mb-4">
                                <div class="mr-4">
                                    <span class="font-bold text-gray-700">Price:</span>
                                    <span class="text-gray-600">{{ $medicine->Price }} រៀល</span>
                                </div>
                                <div>
                                    <span class="font-bold text-gray-700">Availability:</span>
                                    <span class="text-gray-600">In Stock</span>
                                </div>
                            </div>
                            <div>
                                <span class="font-bold text-gray-700">Medicine Description:</span>
                                <p class="text-gray-600 text-sm mt-2">
                                    {{ $medicine->MedicineDescription }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-end items-center flex">
                    <a href="{{ route('get-medicine') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
