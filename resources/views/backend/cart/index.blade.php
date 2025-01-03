@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <div class="h-scree p-5">
        <main class="flex flex-1 bg-white p-5 rounded-lg shadow-md">
            <section class="flex-1 p-5 bg-white">
                <div class="flex mb-5">

                    <form class="w-full mx-auto">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-onl">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search Mockups, Logos..." required />
                            <button type="submit"
                                class="text-white absolute end-2 flex items-center bottom-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </form>
                </div>
                <div class="grid lg:grid-cols-3 gap-4 overflow-auto h-[420px] no-scrollbar p-1">

                    @if (count($medicineModel) > 0)
                        @foreach ($medicineModel as $item)
                            <div
                                class="relative flex w-full max-w-xs flex-col rounded-lg border border-gray-100 bg-white shadow-md">
                                <a class="relative mx-3 mt-3 flex h-40 overflow-hidden rounded-xl" href="#">
                                    @if ($item->Image !== '')
                                        <img class="w-full h-full object-cover" src="{{ asset('storage/' . $item->Image) }}"
                                            alt="img">
                                    @else
                                        <img src="{{ asset('/images/no-img.png') }}" alt="image">
                                    @endif
                                </a>
                                <div class="mt-4 px-5 pb-5">
                                    <a href="#">
                                        <h5 class="text-xl tracking-tight text-slate-900">{{ $item->MedicineName }}</h5>
                                    </a>
                                    <div class="mt-2 mb-5 flex items-center justify-between">
                                        <span class="text-xl font-bold text-slate-900">{{ $item->Price }} រៀល</span>
                                    </div>
                                    <a href="#"
                                        class="flex add-to-cart items-center justify-center rounded-md bg-blue-800 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300
                                        data-id="{{ $item->id }}"
                                        data-name="{{ $item->MedicineName }}" data-price="{{ $item->Price }}"
                                        data-price="{{ number_format($item->Price, 2, '.', '') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        Add to cart</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <tr class="flex justify-center">
                            <span>No Data</span>
                        </tr>
                    @endif

                </div>
            </section>

            <aside class="w-1/3 p-5 bg-white border-l shadow-lg rounded-lg border overflow-auto h-[550px] no-scrollbar">
                <h2 class="text-lg font-semibold mb-4">Checkout</h2>
                <div id="medicine" class="space-y-4">
                    <!-- Product Items -->
                </div>

                <div class="mt-6 space-y-3">
                    {{-- <div class="flex justify-between">
                        <span>Discount (%)</span>
                        <span id="discount">0</span>
                    </div> --}}
                    <div class="flex justify-between">
                        <span>Sub Total</span>
                        <span id="subtotal">0</span>
                    </div>
                    <div class="flex justify-between font-bold">
                        <span>Total</span>
                        <span id="total">0</span>
                    </div>
                </div>
                <button id="payButton" class="w-full bg-green-500 rounded-lg text-white py-2 mt-4">Pay (0)</button>
            </aside>
        </main>
    </div>
@endsection

@section('js')
    <script>
        let cart = []; // Initialize cart array

        // Add to Cart Function
        function addToCart(id, name, price) {
            id = parseInt(id); 
            const existingMedicine = cart.find(item => item.id === id);

            if (existingMedicine) {
                existingMedicine.quantity += 1; // Increase quantity
            } else {
                cart.push({
                    id,
                    name,
                    price,
                    quantity: 1
                }); // Add new medicine
            }

            updateCart(); // Refresh cart UI
        }

        // Update Cart UI
        function updateCart() {
            const medicineContainer = document.getElementById('medicine');
            medicineContainer.innerHTML = ''; // Clear existing content

            let subtotal = 0;

            cart.forEach(item => {
                const medicineHTML = `
            <div class="flex justify-between items-center border-b pb-2 mb-2">
                <span>${item.name} (x${item.quantity})</span>
                <span>${(item.price * item.quantity).toFixed(2)} រៀល</span>
                <button class="text-red-500 ml-2" onclick="removeFromCart(${item.id})">X</button>
            </div>
        `;
                medicineContainer.insertAdjacentHTML('beforeend', medicineHTML);
                subtotal += item.price * item.quantity;
            });

            calculateTotal(subtotal); // Update totals
        }

        // Remove Item from Cart
        function removeFromCart(id) {
            cart = cart.filter(item => item.id !== id);
            updateCart(); // Refresh cart UI
        }

        // Calculate and Display Totals
        function calculateTotal(subtotal) {
            const discountRate = 20; // 20% discount
            const discount = (subtotal * discountRate) / 100;
            const total = subtotal - discount;

            document.getElementById('subtotal').innerText = `${subtotal.toFixed(2)} រៀល`;
            document.getElementById('total').innerText = `${total.toFixed(2)} រៀល`;

            document.getElementById('payButton').innerText = `Pay (${total.toFixed(2)}) រៀល`;
        }

        // Event Listener for "Add to Cart" buttons
        document.addEventListener('click', function(e) {
            const button = e.target.closest('.add-to-cart'); // Detect button click

            if (button) {
                e.preventDefault(); // Prevent default behavior

                const id = button.getAttribute('data-id');
                const name = button.getAttribute('data-name');
                const price = parseFloat(button.getAttribute('data-price'));

                addToCart(id, name, price); // Add item to cart
            }
        });

        // Pay Button Event
        document.getElementById('payButton').addEventListener('click', function() {
            if (cart.length === 0) {
                alert('Please add some medicine to cart');
                return;
            }

            alert('Payment successful');
            cart = []; // Clear cart after payment
            updateCart(); // Refresh cart UI
        });
    </script>
@endsection
