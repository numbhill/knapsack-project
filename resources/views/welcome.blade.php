<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knapsack Problem</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-indigo-100 via-purple-100 to-violet-100 min-h-screen flex items-center justify-center">
<div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-20">
    <div class="text-center">
        <div>
            <img class="mx-auto h-20 w-auto"
                 src="https://i.pinimg.com/originals/12/a9/42/12a942d1e0fcf7f4d52a13d87975aaab.png"
                 alt="0/1 Knapsack">
        </div>
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">0/1 Knapsack Problem</h1>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ route('knapsack.index') }}"
               class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Try the Knapsack
                Function</a>
            <a href="https://github.com/numbhill/knapsack-project"
               class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Github Repo</a>
        </div>
    </div>
    <div class="mt-10">
        <h3 class="mt-6 text-xl leading-8 text-gray-700">1. Abstrakti</h3>
        <p class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-max">
            Ky raport trajton zgjidhjen e problemit 0/1 Knapsack duke përdorur Dynamic Programming. Ai përfshin një
            përshkrim të mënyrës si operon Dynamic Programming, avantazhet dhe disavantazhet e tij, dhe
            implementimin e kësaj metode në PHP duke përdorur framework-un Laravel dhe Tailwind CSS për zgjidhjen e
            problemit 0/1 Knapsack.
        </p>
    </div>
    <div class="mt-8">
        <h3 class="mt-6 text-xl leading-8 text-gray-700">2. Hyrja</h3>
        <p class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-max">
            Problemi 0/1 Knapsack është një problem klasik i optimizimit ku duhet të maksimizohet vlera totale e
            objekteve të përzgjedhura, pa tejkaluar kapacitetin e çantës. Dynamic Programming është një metodë e
            fuqishme që zgjidh këtë problem në mënyrë efikase duke ndarë problemin në nënprobleme dhe duke ruajtur
            zgjidhjet e tyre për të shmangur llogaritjet e përsëritura. Ky raport përshkruan një implementim praktik
            të kësaj metode në PHP me Laravel dhe Tailwind CSS.
        </p>
    </div>
    <div class="mt-8">
        <h3 class="mt-6 text-xl leading-8 text-gray-700">3. Metodologjia e Përdorur</h3>
        <p class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-max">
            Dynamic Programming zgjidh problemet komplekse duke i ndarë ato në nënprobleme më të vogla dhe duke
            ruajtur zgjidhjet e këtyre nënproblemeve për të shmangur llogaritjet e përsëritura. Për problemin 0/1
            Knapsack, ne përdorim një tabelë për të ruajtur vlerat maksimale të mundshme për çdo kapacitet të
            mundshëm deri në kapacitetin maksimal të çantës.
        </p>
        <p class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-max">
            Laravel Framework dhe Tailwind CSS: Laravel është një framework PHP që lehtëson zhvillimin e
            aplikacioneve web duke ofruar një strukturë të pastër dhe kod të mirëorganizuar. Tailwind CSS është një
            framework i personalizueshëm për stilim që ndihmon në krijimin e ndërfaqeve të përdoruesit të bukura dhe
            të përgjegjshme.
        </p>
    </div>
</div>
<div
    class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
    aria-hidden="true">
    <div
        class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
</body>
</html>
