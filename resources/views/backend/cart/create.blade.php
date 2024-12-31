@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <div class="p-5 h-full">
        <div class="bg-white p-5 rounded-lg h-[450px]">
            <h3 class="text-2xl font-medium text-gray-700 mb-2">Create Cart</h3>
            <hr>

            <form class="max-w-lg mx-auto mt-10" method="POST" action="{{ route('store.cart') }}">
                @csrf
                <div class="mb-5">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-800">
                        Category Type</label>
                    <select name="MedicineId" id="MedicineId"  class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <option value="">Choose Medicine</option>
                        @foreach ($medicine as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-5">
                    <label for="number" class="block mb-2 text-sm font-medium text-gray-800">
                        Quantity</label>
                    <input type="number" id="Quantity" name="Quantity"
                        class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>

                <div class="flex justify-end items-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
