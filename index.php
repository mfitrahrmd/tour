<?
session_start();

$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Home</title>
</head>

<body>
    <? include $basepath . "/component/header.php"; ?>
    <main>
        <section class="w-full px-24 h-[calc(100vh-80px)]">
            <div class="h-full flex relative">
                <div class="rounded-2xl px-8 flex flex-col py-4 w-full h-3/4 my-auto bg-[#04bfab]">
                    <img class="absolute top-0 right-0 bottom-0 h-full" src="/assets/images/travel.svg" alt="travel">
                    <div class="mt-auto w-1/2">
                        <h1 class="text-4xl">Temukan Liburan Ideal, <span class="font-extrabold">Sesuai Keinginan</span>
                            Anda!</h1>
                        <h2 class="text-xl mt-2">Platform lengkap yang membantu Anda menemukan apa yang Anda butuhkan.</h2>
                    </div>
                    <div class="mt-auto z-10">
                        <h1 class="bg-white px-6 py-2 w-fit text-[#ef8b52] rounded-tl-xl rounded-tr-xl font-bold">Mulai
                            Mencari</h1>
                        <form action="/tour/search" method="get" class="bg-white h-fit w-fit p-6 rounded-bl-xl rounded-tr-xl rounded-br-xl flex gap-4">
                            <div class="relative p-2 rounded-xl border">
                                <p class="text-xs relative z-10 pointer-events-none">Tipe</p>
                                <h4 class="text-lg font-bold relative z-10 pointer-events-none">Pilih Tipe Liburan</h4>
                                <select name="type[]" class="absolute top-0 right-0 bottom-0 left-0 bg-transparent px-2 pt-10 text-sm appearance-none">
                                    <option value="Pantai">Pantai</option>
                                    <option value="Pegunungan">Pegunungan</option>
                                    <option value="Kota">Kota</option>
                                </select>
                            </div>
                            <div class="p-2 rounded-xl border">
                                <p class="text-xs">Pengunjung</p>
                                <h4 class="text-lg font-bold">Tambah Pengunjung</h4>
                                <div class="text-sm flex">
                                    <button id="btnKurang" class="ps-2 pe-1" type="button">-</button>
                                    <input id="jumlahPengunjung" name="numberOfPeople" class="text-center" type="text" value="1">
                                    <button id="btnTambah" class="ps-1 pe-2" type="button">+</button>
                                </div>
                            </div>
                            <button class="flex flex-col justify-center p-2 rounded-xl text-neutral-200 bg-blue-600" type="submit">
                                <h4 class="text-lg font-bold">Cari Liburan</h4>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 mx-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-24 my-16 flex flex-col items-center text-neutral-900">
            <div class="text-center">
                <h1 class="text-2xl font-bold">Cari Berdasarkan Kategori</h1>
                <h5 class="text-base text-neutral-400">Membantu menemukan yang kamu butuhkan</h5>
            </div>
            <div class="mt-8 flex w-full justify-evenly">
                <div class="flex flex-col items-center">
                    <svg class="stroke-white size-8 p-4 bg-blue-600 rounded-2xl box-content" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                    <h5 class="mt-4 font-bold">Rest room</h5>
                </div>
                <div class="flex flex-col items-center">
                    <svg class="stroke-white size-8 p-4 bg-blue-600 rounded-2xl box-content" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                    <h5 class="mt-4 font-bold">Rest room</h5>
                </div>
                <div class="flex flex-col items-center">
                    <svg class="stroke-white size-8 p-4 bg-blue-600 rounded-2xl box-content" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
                    <h5 class="mt-4 font-bold">Rest room</h5>
                </div>
            </div>
        </section>
        <section class="px-24 my-16 grid grid-cols-2">
            <div>
                <h1 class="text-2xl font-bold">Destinasi Favorit</h1>
                <h5 class="text-base text-neutral-400">Jelajahi tempat yang terbukti sempurna</h5>
            </div>
            <div class="flex items-center justify-end">
                <svg class="size-6 stroke-neutral-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                <svg class="size-6 stroke-neutral-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
            <div class="w-full h-64 mt-4 col-span-2 flex flex-wrap gap-4">
                <div class="w-full h-full p-4 relative flex flex-1 rounded-2xl text-neutral-200">
                    <img class="absolute object-cover rounded-2xl top-0 left-0 right-0 bottom-0 w-full h-full" src="/assets/images/gili.jpg" alt="gili">
                    <div class="absolute top-0 rounded-2xl bottom-0 left-0 right-0 card-destination"></div>
                    <h3 class="text-2xl relative mt-auto">Gili</h3>
                </div>
                <div class="w-full h-full p-4 relative flex flex-1 rounded-2xl text-neutral-200">
                    <img class="absolute object-cover rounded-2xl top-0 left-0 right-0 bottom-0 w-full h-full" src="/assets/images/gili.jpg" alt="gili">
                    <div class="absolute top-0 rounded-2xl bottom-0 left-0 right-0 card-destination"></div>
                    <h3 class="text-2xl relative mt-auto">Gili</h3>
                </div>
                <div class="w-full h-full p-4 relative flex flex-1 rounded-2xl text-neutral-200">
                    <img class="absolute object-cover rounded-2xl top-0 left-0 right-0 bottom-0 w-full h-full" src="/assets/images/gili.jpg" alt="gili">
                    <div class="absolute top-0 rounded-2xl bottom-0 left-0 right-0 card-destination"></div>
                    <h3 class="text-2xl relative mt-auto">Gili</h3>
                </div>
                <div class="w-full h-full p-4 relative flex flex-1 rounded-2xl text-neutral-200">
                    <img class="absolute object-cover rounded-2xl top-0 left-0 right-0 bottom-0 w-full h-full" src="/assets/images/gili.jpg" alt="gili">
                    <div class="absolute top-0 rounded-2xl bottom-0 left-0 right-0 card-destination"></div>
                    <h3 class="text-2xl relative mt-auto">Gili</h3>
                </div>
            </div>
        </section>
        <section class="px-24 my-16">

        </section>
    </main>
    <script>
        const btnKurang = document.querySelector("#btnKurang");
        const btnTambah = document.querySelector("#btnTambah");
        const inputJumlahPengunjung = document.querySelector("#jumlahPengunjung")

        function modify(amount) {
            return (e) => {
                const newValue = parseInt(inputJumlahPengunjung.value) + amount
                if (newValue < 1) return
                inputJumlahPengunjung.value = newValue;
            }
        }

        btnKurang.addEventListener("click", modify(-1))
        btnTambah.addEventListener("click", modify(1))

        inputJumlahPengunjung.setAttribute("size", inputJumlahPengunjung.value.length)
        inputJumlahPengunjung.addEventListener("input", function(e) {
            e.target.setAttribute("size", e.target.value.length)
        })
    </script>
</body>

</html>