<?php
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";

$title = $_GET["title"];

$tours = Tour::with(["location", "images"])->whereRaw("LOWER(title) LIKE ?", ["%" . strtolower($title) . "%"])->get();

?>

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