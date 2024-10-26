@extends('layouts.app') <!-- Adjust the layout name if necessary -->

@section('content')
<header class="mb-4">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Inventory Overview') }}
    </h2>
</header>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Inventory Management</h1>
        <!-- Add Inventory Button -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addInventoryModal">Add Inventory</button>
    </div>

    <!-- Inventory Table -->
    <div class="mt-4">
        @if($inventories->isEmpty())
            <p class="text-center">No inventories available.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Inventory Name</th>
                        <th>Arrival Date</th>
                        <th>Supplier Name</th>
                        <th>Description</th>
                        <th>Total Cost</th>
                        <th>Products</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventories as $inventory)
                        <tr>
                            <td>{{ $inventory->inventory_name }}</td>
                            <td>{{ $inventory->arrival_date }}</td>
                            <td>{{ $inventory->supplier_name }}</td>
                            <td>{{ $inventory->description_about_new_inventory }}</td>
                            <td>{{ $inventory->total_cost }}</td>
                            <td>
                                @foreach($inventory->products as $product)
                                    <div>
                                        {{ $product->product_name }} (Qty: {{ $product->stock_quantity }}, Price: {{ $product->product_price }})
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>

<!-- Add Inventory Modal -->
<div class="modal fade" id="addInventoryModal" tabindex="-1" aria-labelledby="addInventoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addInventoryModalLabel">Add New Inventory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addInventoryForm" method="POST" action="{{ route('inventories.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="inventory_name" class="form-label">Inventory Name</label>
                        <input type="text" class="form-control" id="inventory_name" name="inventory_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="arrival_date" class="form-label">Arrival Date</label>
                        <input type="date" class="form-control" id="arrival_date" name="arrival_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="supplier_name" class="form-label">Supplier Name</label>
                        <input type="text" class="form-control" id="supplier_name" name="supplier_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description_about_new_inventory" class="form-label">Description</label>
                        <textarea class="form-control" id="description_about_new_inventory" name="description_about_new_inventory" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="total_cost" class="form-label">Total Cost</label>
                        <input type="number" class="form-control" id="total_cost" name="total_cost" required>
                    </div>

                    <!-- Product Fields Section -->
                    <div id="productFields">
                        <div class="mb-3 product-group">
                            <label for="product_name_1" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name_1" name="product_name[]" required>
                            <label for="product_quantity_1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="product_quantity_1" name="product_quantity[]" required>
                            <label for="product_price_1" class="form-label">Price</label>
                            <input type="number" class="form-control" id="product_price_1" name="product_price[]" required>
                        </div>
                    </div>

                    <button type="button" class="btn btn-secondary" id="addProductButton">Add Another Product</button>
                    <button type="submit" class="btn btn-primary mt-3">Add Inventory</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for handling dynamic product fields -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let productCount = 1;
        const maxProducts = 10;

        document.getElementById('addProductButton').addEventListener('click', function () {
            if (productCount < maxProducts) {
                productCount++;
                const productFields = document.getElementById('productFields');
                const newProductGroup = document.createElement('div');
                newProductGroup.className = 'mb-3 product-group';
                newProductGroup.innerHTML = `
                    <label for="product_name_${productCount}" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name_${productCount}" name="product_name[]" required>
                    <label for="product_quantity_${productCount}" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="product_quantity_${productCount}" name="product_quantity[]" required>
                    <label for="product_price_${productCount}" class="form-label">Price</label>
                    <input type="number" class="form-control" id="product_price_${productCount}" name="product_price[]" required>
                `;
                productFields.appendChild(newProductGroup);
            } else {
                alert('You can only add up to 10 products.');
            }
        });
    });
</script>
@endsection
