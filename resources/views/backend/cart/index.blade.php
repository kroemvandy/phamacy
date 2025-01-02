@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')

    <div class="h-scree p-5">
        <main class="flex flex-1 bg-white p-5 rounded-lg shadow-md">
            <section class="flex-1 p-5 bg-white">
                <div class="flex mb-5">
                    {{-- <input type="text" placeholder="Search items here..." class="flex-1 p-2 border border-gray-300 rounded-l-md">
                    <button class="p-2 bg-gray-300 border border-gray-300 rounded-r-md">🔍</button> --}}
                    <form class="w-full mx-auto">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-onl">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form> 
                </div>
                <div class="grid lg:grid-cols-3 gap-4 overflow-auto h-[500px] no-scrollbar p-1">
                    @foreach ($medicineModel as $item)
            
                        {{-- <div class="">
                            <div class="border rounded-md p-4 text-center">
                                @if($item->Image == null)
                                    <img src="{{ asset('/images/no-img.png') }}" alt="image">
                                @endif
                                <img src="{{  asset('storage/' . $item->Image) }}" alt="Costa Coffee" class="w-full h-32 object-cover">
                                <p>{{ $item->MedicineName }}</p>
                                <p>{{ $item->Price }}</p>
                            </div>
                        </div> --}}
                        
                        <div class="rounded-md shadow-md hover:shadow-lg">
                            <div class="relative">
                                <img class="w-full" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product Image">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-medium mb-2">Product Title</h3>
                                <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                                    vel eros fermentum faucibus sit amet euismod lorem.</p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-lg">$19.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                              </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md shadow-md hover:shadow-lg">
                            <div class="relative">
                                <img class="w-full" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product Image">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-medium mb-2">Product Title</h3>
                                <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                                    vel eros fermentum faucibus sit amet euismod lorem.</p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-lg">$19.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                              </button>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-md shadow-md hover:shadow-lg">
                            <div class="relative">
                                <img class="w-full" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product Image">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-medium mb-2">Product Title</h3>
                                <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                                    vel eros fermentum faucibus sit amet euismod lorem.</p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-lg">$19.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                              </button>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-md shadow-md hover:shadow-lg">
                            <div class="relative">
                                <img class="w-full" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30" alt="Product Image">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-2 py-1 m-2 rounded-md text-sm font-medium">SALE
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-medium mb-2">Product Title</h3>
                                <p class="text-gray-600 text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae ante
                                    vel eros fermentum faucibus sit amet euismod lorem.</p>
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-lg">$19.99</span>
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Buy Now
                              </button>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </section>

            <aside class="w-1/3 p-5 bg-white border-l shadow-lg rounded-lg border">
                <h2 class="text-lg font-semibold mb-4">Checkout</h2>
                <div id="products" class="space-y-4">
                    <!-- Product Items -->
                </div>
            
                <div class="mt-6 space-y-3">
                    <div class="flex justify-between">
                        <span>Discount (%)</span>
                        <span id="discount">20</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sub Total</span>
                        <span id="subtotal">$84.00</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tax 1.5%</span>
                        <span id="tax">$1.50</span>
                    </div>
                    <div class="flex justify-between font-bold">
                        <span>Total</span>
                        <span id="total">$85.50</span>
                    </div>
                </div>
                <button id="payButton" class="w-full bg-green-500 rounded-lg text-white py-2 mt-4">Pay ($85.50)</button>
            </aside>
        </main>
    </div>
    

@endsection

@section('js')
@endsection
