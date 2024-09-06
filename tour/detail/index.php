<?php
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";


$id = $_GET["id"];

$tour = Tour::with(["location", "images"])->find($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Detail</title>
</head>

<body>
    <? include $basepath . "/component/header.php" ?>
    <div class="absolute top-0 left-0 right-0 h-screen -z-10">
        <div class="absolute top-0 bottom-0 left-0 right-0 min-h-screen bg-detail"></div>
        <img class="w-full h-full" src="<?= $tour->images->first()->url ?>" alt="gili">
    </div>
    <main>
        <section class="flex text-neutral-200 h-screen mx-12">
            <div class="flex-1 flex flex-col pr-64">
                <h2 class="text-4xl font-bold uppercase text-puerto-rico-400"><?= $tour->title ?></h2>
                <p class="mt-4"><?= $tour->description ?></p>
                <a href="/tour/book.php?tour_id=<?= $tour->id ?>" class="flex gap-2 mt-4">
                    <button class="flex items-center gap-1 bg-jaffa-400 text-neutral-50 text-sm rounded-full px-6 py-2">Pesan
                        Sekarang <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg></button>
                </a>
            </div>
            <div class="flex-1 w-full flex flex-col text-end">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/IT0SMFf0LHE?si=mEezHhfbbgKKCsQZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        <section class="px-24 pb-8">
            <div class="flex flex-col flex-wrap content-evenly gap-2">
                <? foreach ($tour->images as $i) { ?>
                    <img class="w-1/4 rounded-md" src="<?= $i["url"] ?>" alt="">
                <? } ?>
            </div>
        </section>
    </main>
</body>

</html>