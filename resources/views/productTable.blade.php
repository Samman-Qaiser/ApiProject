<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-5">
        <h1 class="text-4xl font-bold text-center mb-5 text-uppercase">Product List Built with API</h1>
        <form method="GET" action="{{ route('product.index') }}" class="mb-4">
    <input 
        type="text" 
        name="search" 
        value="{{ request('search') }}" 
        placeholder="Search by name or category" 
        class="p-2 border border-gray-300 rounded-lg"
    >
    <button type="submit" class="p-2 bg-blue-500 text-white rounded-lg">Search</button>
    </form>
        <!-- Product Table -->
    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">Name</th>
                    <th class="p-3 text-left">Price</th>
                    <th class="p-3 text-left">Category</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
        <tr class="border-b hover:bg-gray-50">
            <td class="p-3">{{ $product->name }}</td>
            <td class="p-3">{{ $product->price }}</td>
            <td class="p-3">{{ $product->category }}</td>
        </tr>
           @endforeach
           </tbody>

        </table>
    </div>

</body>
</html>
