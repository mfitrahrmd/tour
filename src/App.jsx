import { useEffect, useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'

function App() {
  const [isLoading, setIsloading] = useState(false);
  const [totalPrice, setTotalPrice] = useState(0);
  const [tour, setTour] = useState(null)
  const [services, setServices] = useState(null)
  const [total, setTotal] = useState({
    ordersName: "",
    numberOfVisitor: 1,
    duration: 1,
    bookingDate: new Date().toJSON().slice(0, 10),
    services: []
  })
  useEffect(() => {
    fetchTour()
    fetchServices()
  }, [])
  useEffect(() => {
    if (tour) {
      setTotalPrice((tour.price + total.services.reduce((acc, cur) => acc + cur.price, 0)) * total.duration * total.numberOfVisitor)
    }
  }, [total, tour])

  const fetchTour = async () => {
    const searchParams = new URLSearchParams(window.location.search);
    try {
      const res = await fetch(`/api/tours.php?tour_id=${searchParams.get("tour_id")}`);
      setTour(await res.json());
    } catch (err) {
      console.log(err)
      setTour(null)
    }
  }

  const fetchServices = async () => {
    try {
      const res = await fetch(`/api/services.php`);
      setServices(await res.json());
    } catch (err) {
      console.log(err)
      setServices(null)
    }
  }

  const formHandler = async (e) => {
    e.preventDefault()
    try {
      setIsloading(true)
      const data = await fetch("/api/bookings.php", {
        method: "POST",
        body: JSON.stringify({
          tourId: tour.id,
          ...total
        })
      })
      console.log(await data.text())
      location.replace("/cart")
    } catch (err) {
      console.log(err)
    } finally {
      setIsloading(false)
    }
  }

  return (
    <>
      <section class="relative grid grid-cols-12 px-24">
        {isLoading && <div role="status" class="fixed z-50 bg-[rgba(24,24,24,.25)] top-0 right-0 left-0 bottom-0 flex justify-center items-center">
          <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" /><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" /></svg>
          <span class="sr-only">Loading...</span>
        </div>}
        <form onSubmit={formHandler} class="col-span-7 h-[1000px] me-24">
          <div class="space-y-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Pemesanan</h2>

            <div class="grid grid-cols-12 gap-y-8">
              <div class="col-span-full">
                <label for="book-date" class="block text-sm font-medium leading-6 text-gray-900">Nama Pemesan</label>
                <div class="mt-4">
                  <input onChange={(e) => {
                    setTotal(old => ({
                      ...old,
                      ordersName: e.target.value
                    }))
                  }} required type="text" name="book-date" id="book-date" autocomplete="book-date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value={total.ordersName} />
                </div>
              </div>
              <div class="col-span-full">
                <label for="number_of_people" class="block text-sm font-medium leading-6 text-gray-900">Jumlah Pengunjung</label>
                <div class="mt-4 flex w-fit">
                  <button onClick={() => {
                    setTotal(old => ({
                      ...old,
                      numberOfVisitor: old.numberOfVisitor <= 1 ? 1 : old.numberOfVisitor - 1
                    }))
                  }} id="btnKurangJumlahPengunjung" class="ps-2 pe-1" type="button">-</button>
                  <input size={2} id="number_of_people" name="number_of_people" class="px-2 text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" value={total.numberOfVisitor} />
                  <button onClick={() => {
                    setTotal(old => ({
                      ...old,
                      numberOfVisitor: old.numberOfVisitor + 1
                    }))
                  }} id="btnTambahJumlahPengunjung" class="ps-1 pe-2" type="button">+</button>
                </div>
              </div>
              <div class="col-span-full">
                <label for="book-date" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Pesan</label>
                <div class="mt-4">
                  <input onChange={(e) => {
                    setTotal(old => ({
                      ...old,
                      bookingDate: e.target.value
                    }))
                  }} type="date" name="book-date" id="book-date" autocomplete="book-date" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value={total.bookingDate} />
                </div>
              </div>
              <div class="col-span-full">
                <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Durasi (hari)</label>
                <div class="mt-4 flex w-fit">
                  <button onClick={() => {
                    setTotal(old => ({
                      ...old,
                      duration: old.duration <= 1 ? 1 : old.duration - 1
                    }))
                  }} id="btnKurangDurasi" class="ps-2 pe-1" type="button">-</button>
                  <input size={2} id="duration" name="duration" class="px-2 text-center block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" value={total.duration} />
                  <button onClick={() => {
                    setTotal(old => ({
                      ...old,
                      duration: old.duration + 1
                    }))
                  }} id="btnTambahDurasi" class="ps-1 pe-2" type="button">+</button>
                </div>
              </div>
              <div class="col-span-full">
                <fieldset>
                  <legend class="text-sm font-semibold leading-6 text-gray-900">Pelayanan Tambahan</legend>
                  <div class="mt-4 space-y-2">
                    {services && services.map(s => <div class="relative flex gap-x-3">
                      <div class="flex h-6 items-center">
                        <input onChange={(e) => {
                          setTotal(old => ({
                            ...old,
                            services: e.target.checked ? [...old.services, s] : old.services.filter(i => i != s)
                          }))
                        }} id={s.name} name={s.name} type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600" />
                      </div>
                      <div class="text-sm leading-6">
                        <label for={s.name} class="font-medium text-gray-900">{s.name}</label>
                        <p class="text-gray-500"></p>
                      </div>
                    </div>)}
                  </div>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="mt-6 flex items-center justify-start gap-x-6">
            <button type="submit" class="rounded-md bg-jaffa-400 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-jaffa-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-jaffa-400">Konfirmasi</button>
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Batal</button>
          </div>
        </form>
        {tour && <div class="sticky top-24 mt-24 w-full h-fit col-span-5 p-6 rounded-lg border mb-16">
          <div class="grid grid-cols-12 gap-y-8 divide-y">
            <div class="col-span-12 grid grid-cols-12 space-x-4">
              <img class="col-span-4 object-cover w-full rounded-lg aspect-square" src={tour.images[0].url} />
              <div class="col-span-8">
                <h5 class="text-sm">{tour.title} · {tour.location.name}</h5>
                <p class="text-base mt-4 overflow-hidden text line-clamp-3">{tour.description}</p>
              </div>
            </div>
            <div class="col-span-12 pt-4">
              <h3 class="text-xl font-medium">Detail Harga</h3>
              <div class="flex justify-between font-light text-sm">
                <h5>{Intl.NumberFormat("id-ID", {
                  style: "currency",
                  currency: "IDR",
                  maximumSignificantDigits: 3
                }).format(tour.price)} </h5>
                <h5><span id="detail_harga">{Intl.NumberFormat("id-ID", {
                  style: "currency",
                  currency: "IDR",
                  maximumSignificantDigits: 3
                }).format(tour.price)}</span></h5>
              </div>
            </div>
            {total.services.length > 0 && <div class="col-span-12 pt-4">
              <div class="flex flex-col text-sm font-light">
                {total.services.map(s => <div>
                  <div className='flex flex-row justify-between'>
                    <h5>{s.name}</h5>
                    <h5>{Intl.NumberFormat("id-ID", {
                      style: "currency",
                      currency: "IDR",
                      maximumSignificantDigits: 3
                    }).format(s.price)}</h5>
                  </div>
                </div>)}
              </div>
            </div>}
            <div class="col-span-12 pt-4">
              <div class="flex flex-col text-sm font-light">
                <div className='flex flex-row justify-between'>
                  <h5>Pengunjung</h5>
                  <h5>x {total.numberOfVisitor} Orang</h5>
                </div>
                <div className='flex flex-row justify-between'>
                  <h5>Durasi</h5>
                  <h5>x {total.duration} Hari</h5>
                </div>
              </div>
            </div>
            <div class="col-span-12 pt-4">
              <div class="flex justify-between text-lg font-medium">
                <h5>Total</h5>
                <h5>{Intl.NumberFormat("id-ID", {
                  style: "currency",
                  currency: "IDR",
                  maximumSignificantDigits: 3
                }).format(totalPrice)}</h5>
              </div>
            </div>
          </div>
        </div>}
      </section>
    </>
  )
}

export default App
