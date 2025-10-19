<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Simple Form</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white rounded p-6 shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Tambah Data</h2>

        <form action="{{ route('store.post') }}" method="post">
            @csrf

            <!-- Title Input -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <!-- Description Input -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                <textarea name="description" id="description" rows="3" class="mt-1 p-2 w-full border rounded-md" required></textarea>
            </div>

            <!-- Deadline Input -->
            <div class="mb-4">
                <label for="deadline" class="block text-sm font-medium text-gray-600">Deadline</label>
                <input type="date" name="deadline" id="deadline" class="mt-1 p-2 w-full border rounded-md" required>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>