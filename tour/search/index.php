<?php
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";

$tours;
if (array_key_exists("type", $_GET)) {
    $typeNames = $_GET["type"]; // Replace with the type names you want to filter by

    $tours = Tour::whereHas('types', function ($query) use ($typeNames) {
        $query->whereIn('name', $typeNames);
    })->with(['location', 'images'])->get();
} else {
    $tours = Tour::with(["location", "images"])->get();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Search</title>
</head>

<body>
    <? include $basepath . "/component/header.php" ?>
    <main>
        <section class="px-24 flex flex-col">
            <div class="flex relative">
                <i class="absolute w-fit h-fit top-0 bottom-0 ms-2 my-auto mx-0"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </i>
                <input id="search" class="w-full border rounded-full py-1 ps-10 pe-2" type="text">
            </div>
            <div class="mt-4 flex justify-center gap-8">
                <div class="rounded-full border py-1 px-4">Pantai</div>
                <div class="rounded-full border py-1 px-4">Danau</div>
                <div class="rounded-full border py-1 px-4">Gunung</div>
                <div class="rounded-full border py-1 px-4">Kota</div>
                <div class="rounded-full border py-1 px-4">Hutan</div>
            </div>
            <div id="tours-container" class="grid grid-cols-3 gap-6 py-8">
                <? foreach ($tours as $tour) { ?>
                    <div id="tours-item" class="p-4 col-span-1 shadow-md rounded-xl border border-gray-200 bg-white hover:bg-gray-100">
                        <a href="/tour/detail?id=<?= $tour->id ?>">
                            <img class="w-full h-72 object-cover rounded-xl" src="<?= $tour->images->first()->url ?>" alt="gili">
                        </a>
                        <div class="flex flex-col relative">
                            <h3 class="text-xl font-bold text-neutral-800 mt-2"><?= $tour->title ?></h3>
                            <p class="flex items-center text-xs text-neutral-400">
                                <svg class="size-4 fill-puerto-rico-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
                                </svg>
                                <span><?= $tour->location->name ?></span>
                            </p>
                            <h3 class="text-xl font-bold mt-4 text-jaffa-400"><?= "Rp " . number_format($tour->price, 0, ",", ".") ?></h3>
                            <div class="flex gap-2 mt-4 absolute bottom-0 right-0">
                                <a href="/tour/book?tour_id=<?= $tour->id ?>" class="flex items-center gap-1 bg-jaffa-400 text-neutral-50 text-sm rounded-full px-6 py-2">Pesan
                                    Sekarang <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </section>
    </main>
    <script>
        let action;

        const search = document.querySelector("#search");
        search.addEventListener("input", (e) => {
            clearTimeout(action);
            const text = e.target.value;
            action = setTimeout(() => {
                fetch(`/tour/search/search-tour-items.php?title=${text}`)
                    .then(res => {
                        return res.text()
                    })
                    .then(res => {
                        updateToursItem(res);
                    })
                    .catch(err => {
                        console.log(err);
                    })
            }, 250);
        });

        function updateToursItem(tours) {
            const toursContainer = document.querySelector("#tours-container");
            toursContainer.innerHTML = tours;
        }
    </script>
</body>

</html>