<div id="drawer-bottom-example"
    class="fixed bottom-0 left-0 right-0 z-40 hidden h-full w-full transform-none overflow-y-auto bg-white p-4 transition-transform"
    tabindex="-1" aria-labelledby="drawer-bottom-label">
    <form class="py-7 text-gray-700">
        <!-- Judul -->
        <div class="py-2 text-lg font-bold">
            <h2>Rencana Pengajuan</h2>
        </div>
        <!-- Administrasi -->
        <div class="mb-2 flex w-full flex-col gap-4 py-2">
            <!-- Date -->
            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                    <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                    </svg>
                </div>
                <input datepicker datepicker-autohide type="text"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-bluePrimary focus:ring-bluePrimary"
                    placeholder="Tanggal Masuk" />
            </div>
            <!-- Time -->
            <select id="duration"
                class="block rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500">
                <option selected disabled hidden>1 Bulan</option>
                <option value="1bln">1 Bulan</option>
                <option value="3bln">3 Bulan</option>
                <option value="5bln">5 Bulan</option>
                <option value="7bln">7 Bulan</option>
            </select>
        </div>
        <!-- Rincian -->
        <div class="rounded-lg border p-4 text-sm">
            <div class="mb-1 flex items-center justify-between font-semibold">
                <p>Total Pembayaran</p>
                <span>Rp <span class="text-lg">5.400.000</span></span>
            </div>
        </div>
    </form>
    <div class="flex w-full gap-2 py-2">
        <button
            class="hidden rounded-lg border-2 border-blueSecond bg-white p-3 text-bluePrimary transition-transform hover:border-blueSecond hover:text-blueSecond active:scale-95">
            <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.66699 9.16655C6.66699 8.94554 6.75479 8.73358 6.91107 8.5773C7.06735 8.42102 7.27931 8.33322 7.50033 8.33322H12.5003C12.7213 8.33322 12.9333 8.42102 13.0896 8.5773C13.2459 8.73358 13.3337 8.94554 13.3337 9.16655C13.3337 9.38757 13.2459 9.59953 13.0896 9.75581C12.9333 9.91209 12.7213 9.99989 12.5003 9.99989H7.50033C7.27931 9.99989 7.06735 9.91209 6.91107 9.75581C6.75479 9.59953 6.66699 9.38757 6.66699 9.16655ZM7.50033 11.6666C7.27931 11.6666 7.06735 11.7544 6.91107 11.9106C6.75479 12.0669 6.66699 12.2789 6.66699 12.4999C6.66699 12.7209 6.75479 12.9329 6.91107 13.0891C7.06735 13.2454 7.27931 13.3332 7.50033 13.3332H10.8337C11.0547 13.3332 11.2666 13.2454 11.4229 13.0891C11.5792 12.9329 11.667 12.7209 11.667 12.4999C11.667 12.2789 11.5792 12.0669 11.4229 11.9106C11.2666 11.7544 11.0547 11.6666 10.8337 11.6666H7.50033ZM1.66699 9.99989C1.66741 8.17289 2.26823 6.39665 3.37698 4.94455C4.48573 3.49244 6.04096 2.44495 7.80333 1.96328C9.56569 1.48161 11.4375 1.59246 13.1307 2.27877C14.8239 2.96507 16.2446 4.1888 17.1743 5.76161C18.1039 7.33442 18.4909 9.16915 18.2756 10.9834C18.0604 12.7977 17.2549 14.491 15.9832 15.8027C14.7114 17.1143 13.0438 17.9717 11.237 18.2429C9.43023 18.514 7.58442 18.1838 5.98366 17.3032L2.74366 18.2899C2.59914 18.3339 2.44538 18.3378 2.29881 18.3012C2.15225 18.2646 2.0184 18.1888 1.91157 18.082C1.80475 17.9751 1.72897 17.8413 1.69235 17.6947C1.65573 17.5482 1.65964 17.3944 1.70366 17.2499L2.69033 14.0049C2.01827 12.777 1.66633 11.3996 1.66699 9.99989ZM10.0003 3.33322C8.81689 3.33312 7.65476 3.64804 6.63329 4.24565C5.61182 4.84325 4.76785 5.70199 4.18804 6.73366C3.60823 7.76533 3.3135 8.93274 3.33411 10.116C3.35473 11.2993 3.68994 12.4557 4.30533 13.4666C4.36641 13.567 4.40557 13.6792 4.42022 13.7958C4.43487 13.9124 4.42468 14.0308 4.39033 14.1432L3.75199 16.2416L5.84699 15.6032C5.95976 15.5689 6.07853 15.5588 6.19546 15.5738C6.31239 15.5887 6.42482 15.6283 6.52533 15.6899C7.40396 16.2263 8.39488 16.552 9.42044 16.6414C10.446 16.7308 11.4783 16.5814 12.4365 16.2051C13.3947 15.8287 14.2527 15.2356 14.9433 14.4721C15.6339 13.7087 16.1383 12.7957 16.417 11.8047C16.6957 10.8137 16.7411 9.77162 16.5497 8.76013C16.3582 7.74864 15.9351 6.79523 15.3136 5.97462C14.692 5.154 13.8888 4.48848 12.967 4.03021C12.0452 3.57194 11.0298 3.33338 10.0003 3.33322Z"
                    fill="currentColor" />
            </svg>
        </button>
        <div class="absolute bottom-0 left-0 w-full p-4">
            <button
                class="left-0 w-full flex-1 rounded-lg bg-bluePrimary p-3 text-sm font-medium text-white shadow-sm transition-transform hover:bg-blueSecond active:scale-95"
                data-drawer-hide="drawer-bottom-example" aria-controls="drawer-bottom-example">
                Simpan
            </button>
        </div>
    </div>
    <button type="button" data-drawer-hide="drawer-bottom-example" aria-controls="drawer-bottom-example"
        class="absolute end-2.5 top-2.5 inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900">
        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
</div>
