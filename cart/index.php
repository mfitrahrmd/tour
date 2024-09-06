<?php
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";

$is_logged_in = isset($_SESSION["user_id"]);

$user;
$bookings;

if ($is_logged_in) {
    $user = User::find($_SESSION["user_id"]);
    $bookings = Booking::with(["tour.images", "services"])->where("user_id", $user["id"])->get();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Cart</title>
</head>

<body>
    <? include $basepath . "/component/header.php" ?>
    <main>
        <section class="mx-24 py-8">
            <table role="list" class="w-full">
                <thead>
                    <tr>
                        <th class="pb-8 text-start">Tour</th>
                        <th class="pb-8">Harga</th>
                        <th class="pb-8">Pelayanan Tambahan</th>
                        <th class="pb-8">Total Harga</th>
                        <th class="pb-8"></th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <? foreach ($bookings as $b) { ?>
                        <? $harga_pleayanan_tambahan = array_reduce($b->services->toArray(), function ($acc, $cur) {
                            return $acc + $cur["price"];
                        }, 0) ?>
                        <? $total_harga = ($b->tour->price + $harga_pleayanan_tambahan) * $b["number_of_visitor"] * $b["duration"] ?>
                        <tr class="text-center">
                            <th scope="row" class="py-4 text-start text-gray-900 whitespace-nowrap">
                                <div class="flex space-x-2">
                                    <img class="h-24 w-auto aspect-square object-cover flex-none rounded-md bg-gray-50" src="<?= $b->tour->images->first()->url ?>" alt="">
                                    <div class="py-2 flex flex-col">
                                        <h1 class="text-xs font-thin"><?= $b->tour->location->name ?></h1>
                                        <h1 class="text-sm"><?= $b->tour->title ?></h1>
                                        <div class="flex space-x-2 mt-auto">
                                            <p class="text-xs font-light">Pengunjung<br />Durasi</p>
                                            <p class="text-xs font-semibold">x<?= $b["number_of_visitor"] ?> Orang<br />x<?= $b["duration"] ?> Hari</p>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td class="px-2 py-4 ms-auto">
                                <?= "Rp " . number_format($b->tour["price"], 0, ",", ".") ?>
                            </td>
                            <td class="px-2 py-4 ms-auto">
                                <? if (count($b->services) > 0) { ?>
                                    <ul>
                                        <? foreach ($b->services as $s) { ?>
                                            <li>
                                                <h6 class="text-xs"><?= $s->name ?></h6>
                                            </li>
                                        <? } ?>
                                    </ul>
                                <? } else { ?>
                                    -
                                <? } ?>

                            </td>
                            <td class="px-2 py-4 ms-auto text-jaffa-400">
                                <?= "Rp " . number_format($total_harga, 0, ",", ".") ?>
                            </td>
                            <td class="px-2 py-4 ms-auto">
                                <div class="flex">
                                    <a href="/cart/edit?booking_id=<?= $b["id"] ?>">
                                        <svg class="size-6 px-2 py-1 rounded-tl-md rounded-bl-md box-content stroke-white bg-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>
                                    </a>
                                    <a href="/cart/delete?booking_id=<?= $b["id"] ?>">
                                        <svg class="size-6 px-2 py-1 rounded-tr-md rounded-br-md box-content stroke-white bg-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <? } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>

</html>