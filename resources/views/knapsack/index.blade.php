<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knapsack Problem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-indigo-100 via-purple-100 to-violet-100 min-h-screen flex items-center justify-center">
<div class="bg-white rounded-lg shadow-lg p-8 sm:w-full sm:max-w-sm">
    <div class="text-center">
        <a href="/">
            <img class="mx-auto h-20 w-auto"
                 src="https://i.pinimg.com/originals/12/a9/42/12a942d1e0fcf7f4d52a13d87975aaab.png"
                 alt="0/1 Knapsack">
        </a>
        <h2 class="mt-6 text-3xl font-bold leading-9 tracking-tight text-gray-900">0/1 Knapsack Problem</h2>
    </div>
    <div class="mt-8">
        <form action="{{ route('knapsack.solve') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="mb-6">
                <label for="capacity" class="block text-sm font-medium leading-6 text-gray-900">Capacity:</label>
                <div class="mt-2">
                    <input type="number" name="capacity" id="capacity" required
                           class="block w-full rounded-md border border-gray-300 py-2 px-3 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
            </div>
            <div>
                <button type="submit"
                        class="w-full flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Solve
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        var capacity = document.getElementById("capacity").value;
        if (capacity === "") {
            alert("Capacity must be filled out");
            return false;
        }
        return true;
    }
</script>
</body>
</html>
