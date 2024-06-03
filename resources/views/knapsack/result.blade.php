<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knapsack Result</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-indigo-100 via-purple-100 to-violet-100 min-h-screen flex items-center justify-center">
<div class="bg-white rounded-lg shadow-lg p-8 sm:w-full sm:max-w-sm">
    <div class="text-center">
        <a href="{{ route('knapsack.index') }}">
            <img class="mx-auto h-20 w-auto"
                 src="https://i.pinimg.com/originals/12/a9/42/12a942d1e0fcf7f4d52a13d87975aaab.png"
                 alt="0/1 Knapsack">
        </a>
        <h2 class="mt-6 text-3xl font-bold leading-9 tracking-tight text-gray-900">Knapsack Result</h2>
    </div>
    <div class="mt-8 text-center">
        <p class="text-xl font-semibold leading-7 text-gray-900">Maximum Value: {{ $result }}</p>
        <div class="mt-6">
            <a href="{{ route('knapsack.index') }}"
               class="w-full inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back</a>
        </div>
    </div>
</div>
</body>
</html>
