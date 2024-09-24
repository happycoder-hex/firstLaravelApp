<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px; /* Adds vertical spacing between rows */
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #fff;
    }

    th {
        background-color: #f8f9fa;
    }

    td {
        position: relative; /* Allows for positioning the actions */
    }

    td form {
        margin: 0; /* Ensures no extra margin around forms */
    }

    .btn {
        margin-right: 5px; /* Adds spacing between buttons */
    }

    .btn-danger {
        background-color: white;
        border: none;
    }
    
    a:hover {
        color: blue;
        background-color: transparent;
        text-decoration: underline;
    }
    </style>
</head>
<body>
    
</body>
</html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 container-fluid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <section>
                    <header>
                        <p class="mt-1 text-sm text-blask-600">
                            Products Information
                        </p>
                        <p class="mt-1 text-sm text-red-600">
                            <a href="{{ route('product.create') }}">Create a Product</a>
                        </p>
                    </header>

                    <div>
                        @if(session()->has('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>

                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody id="productTable">
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}" style="display:inline;">
                                            @csrf 
                                            @method('delete')
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>