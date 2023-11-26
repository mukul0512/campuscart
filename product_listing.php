<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    <?php include "assets/index-19559485.css" ?>.boxing {
      margin-left: 100px;
      display: flex;
    }
  </style>
  <title>Electronics</title>
</head>

<body>
  <div class="flex navbar pt-2 h-16 bg-purple-950 p-2">
    <div class="logo flex items-center justify-center mx-6">
      <img src="./assets/logo-1-f3c60bcb.png" height="50" width="50" alt="logo" />
      <h1 class="items-center font-semibold text-white text-lg">
        <a href="/campuscart/home.php">campusdeals.in</a>
      </h1>
    </div>
    <div class="search-box justify-center items-center my-1 mx-64" style="margin-left:350px">
      <form>
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
          <input type="search" id="default-search" class="block w-96 pb-2 p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for products - laptop, watch, notes..." required />
          <button type="submit" class="text-white -mx-4 mb-1 pb-2 absolute -right-16 -bottom-0.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Search
          </button>
        </div>
      </form>
    </div>
    <div class="boxing">
      <div class="add dropdown cursor-pointer  rounded-md focus:outline-none">
        <svg class="h-10 w-10 text-purple-300 hover:shadow-white shadow-md mt-1" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" />
          <rect x="4" y="4" width="16" height="16" rx="2" />
          <line x1="9" y1="12" x2="15" y2="12" />
          <line x1="12" y1="9" x2="12" y2="15" />
        </svg>
        <ul class="flex flex-col gap-4 hidden z-20 absolute top-14 p-6 left-3/43 bg-purple-100 bg-opacity-70 text-lg rounded-md">
          <li class="border-b-2 border-slate-400">Sell</li>
          <li class="border-b-2 border-slate-400">Rent</li>
          <li class="border-b-2 border-slate-400">Request</li>
        </ul>
      </div>
      <script>
        let element = document.querySelector(".hidden");
        let dropdown = document.querySelector(".dropdown");
        let timeoutId;

        dropdown.addEventListener("mouseover", () => {
          clearTimeout(timeoutId);
          timeoutId = setTimeout(() => {
            element.classList.remove("hidden");
          }, 100);
        });

        element.addEventListener("mouseout", () => {
          clearTimeout(timeoutId);
          timeoutId = setTimeout(() => {
            element.classList.add("hidden");
          }, 100);
        });
        dropdown.addEventListener("mouseout", () => {
          clearTimeout(timeoutId);
          timeoutId = setTimeout(() => {
            element.classList.add("hidden");
          }, 100);
        });
      </script>
     <div class="flex justify-end items-center text-white gap-2 ml-2">
        <h1 class="text-lg ml-2"></h1>
        <a class="text-lg ml-2" href="/campuscart/profile.php">Mukul</a>
        <img class="rounded-full border-2 border-sky-400" src="./img/FinalEdited.jpg" height="50" width="50" alt="" />
        <a class="text-lg ml-2 border-slate-400 font-bold" href="/campuscart/index.php">SignOut</a>

        <svg class="w-6 h-6 ml-2 text-gray-800 dark:text-gray-300 hover:text-white hover:translate-x-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
        </svg>
      </div>
    </div>
  </div>

  <div class="container h-full flex">
    <div class="left basis-1/4 h-full bg-slate-600">
      <div class="w-full h-screen shadow p-5 bg-white">
        <div class="flex gap-6 items-center justify-between mt-6">
          <p class="font-medium text-2xl">Filters</p>

          <button class="px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm font-medium rounded-md">
            Reset Filter
          </button>
        </div>

        <div>
          <div class="flex flex-col gap-4 mt-4">
            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">All Type</option>
              <option value="for-rent">For Rent</option>
              <option value="for-sale">For Sale</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Categories</option>
              <option value="fully-furnished">All</option>
              <option value="partially-furnished">Laptop</option>
              <option value="not-furnished">Accesseries</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Any Price</option>
              <option value="1000">Under 1000</option>
              <option value="2000">Under 2000</option>
              <option value="3000">Under 5000</option>
              <option value="4000">Under 10000</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Product Condition</option>
              <option value="200">New</option>
              <option value="400">1 Week Older</option>
              <option value="600">1 Month Older</option>
              <option value="800 sq.ft">3 Month Older</option>
              <option value="1000 sq.ft">6 Month Older</option>
              <option value="1200 sq.ft">1 Year Older</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Brand</option>
              <option value="1">Brand -1</option>
              <option value="2">Brand -1</option>
              <option value="3">Brand -1</option>
              <option value="4">Brand -1</option>
              <option value="5">Brand -1</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Gaming Accessories</option>
              <option value="1">1 bathroom</option>
              <option value="2">2 bathrooms</option>
              <option value="3">3 bathrooms</option>
              <option value="4">4 bathrooms</option>
              <option value="5">5 bathrooms</option>
            </select>

            <select class="px-4 py-3 w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 text-sm">
              <option value="">Projects</option>
              <option value="1">1 space</option>
              <option value="2">2 space</option>
              <option value="3">3 space</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="-ml-4 right basis-3/4 absolute left-1/4 w-3/4">
      <div class=" upper h-14 border-b-2 border-purple-600 flex justify-between  ">
        <h1 class="text-4xl mt-2 font-semibold">Electronics</h1>
        <select class="mr-4" name="sort-by" id="">
          <option value="">Sort By</option>
          <option value="">Price</option>
          <option value="">Date</option>
        </select>
      </div>
      <div class="card mt-4 h-auto shadow-md">
        <a href="#">
          <div class="card-body">
            <div class="flex gap-4">
              <div class="basis-1/3">
                <img src="https://cdn.discordapp.com/attachments/1120377338346090588/1122789747635519548/lenovo-ideapad-gaming-3-82k201uein-amd-ryzen-5-5600h-15-6-inches-gaming-laptop-8gb-512gb-ssd-windows-11-shadow-black-2-25-kg-.png" alt="" class="w-full mx-4 my-2 mb-4 rounded-sm h-64 object-cover">
              </div>
              <div class="mx-4 basis-2/3">
                <h1 class="text-2xl font-semibold">Lenovo IdeaPad Gaming 3 Intel Core i5 11th Gen - (8
                  GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA...</h1>
                <ul class="list-disc ml-6">
                  <li class="text-gray-500">Intel core-i5 10th gen</li>
                  <li class="text-gray-500">8GB RAM</li>
                  <li class="text-gray-500">512GB SSD STORAGE</li>
                  <li class="text-gray-500">WINDOWS-11</li>
                  <li class="text-gray-500">Posted on 12/12/2023</li>
                </ul>
                <button class="px-8 mt-4 mb-4 py-2 text-xl font-medium bg-purple-700 text-white rounded-md hover:bg-purple-600"><a href="/campuscart/product_details.php">View<span class="z-10 font-medium text-xl hover:translate-x-1">>></a></span> </button>
              </div>
              <div class="price font-bold text-5xl justify-self-center mt-4 mr-4">₹25,000</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card mt-8 h-auto shadow-md">
        <a href="#">
          <div class="card-body">
            <div class="flex gap-4">
              <div class="basis-1/3">
                <img src="https://cdn.discordapp.com/attachments/1120377338346090588/1122789872793571418/lenovo-ideapad-3-81wb01b0in-10th-gen-intel-core-i3-10110u-15-6-inches-notebook-laptop-8gb-512gb-ssd-windows-11-platinum-grey-1-7-kg-.png" alt="" class="w-full mx-4 my-2 mb-4  h-64 object-cover">
              </div>
              <div class="mx-4 basis-2/3">
                <h1 class="text-2xl font-semibold">Lenovo IdeaPad Gaming 3 Intel Core i5 11th Gen - (8
                  GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA...</h1>
                <ul class="list-disc ml-6">
                  <li class="text-gray-500">Intel core-i5 10th gen</li>
                  <li class="text-gray-500">8GB RAM</li>
                  <li class="text-gray-500">512GB SSD STORAGE</li>
                  <li class="text-gray-500">WINDOWS-11</li>
                  <li class="text-gray-500">Posted on 12/12/2023</li>
                </ul>
                <button class="px-8 mt-4 mb-4 py-2 text-xl font-medium bg-purple-700 text-white rounded-md hover:bg-purple-600"><a href="/product_details.html">View <span class="z-10 font-medium text-xl hover:translate-x-1">>></a></span> </button>
              </div>
              <div class="price font-bold text-5xl justify-self-center mt-4 mr-4">₹25,000</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card mt-8 h-auto shadow-md">
        <a href="#">
          <div class="card-body">
            <div class="flex gap-4">
              <div class="basis-1/3">
                <img src="https://picsum.photos/400/400" alt="" class="w-full mx-4 my-2 mb-4  h-64 object-cover">
              </div>
              <div class="mx-4 basis-2/3">
                <h1 class="text-2xl font-semibold">Lenovo IdeaPad Gaming 3 Intel Core i5 11th Gen - (8
                  GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA...</h1>
                <ul class="list-disc ml-6">
                  <li class="text-gray-500">Intel core-i5 10th gen</li>
                  <li class="text-gray-500">8GB RAM</li>
                  <li class="text-gray-500">512GB SSD STORAGE</li>
                  <li class="text-gray-500">WINDOWS-11</li>
                  <li class="text-gray-500">Posted on 12/12/2023</li>
                </ul>
                <button class="px-8 mt-4 mb-4 py-2 text-xl font-medium bg-purple-700 text-white rounded-md hover:bg-purple-600"><a href="#">View <span class="z-10 font-medium text-xl hover:translate-x-1">>></a></span> </button>
              </div>
              <div class="price font-bold text-5xl justify-self-center mt-4 mr-4">₹25,000</div>
            </div>
          </div>
        </a>
      </div>
      <div class="card mt-8 h-auto shadow-md">
        <a href="#">
          <div class="card-body">
            <div class="flex gap-4">
              <div class="basis-1/3">
                <img src="https://picsum.photos/400/400" alt="" class="w-full mx-4 my-2 mb-4  h-64 object-cover">
              </div>
              <div class="mx-4 basis-2/3">
                <h1 class="text-2xl font-semibold">Lenovo IdeaPad Gaming 3 Intel Core i5 11th Gen - (8
                  GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA...</h1>
                <ul class="list-disc ml-6">
                  <li class="text-gray-500">Intel core-i5 10th gen</li>
                  <li class="text-gray-500">8GB RAM</li>
                  <li class="text-gray-500">512GB SSD STORAGE</li>
                  <li class="text-gray-500">WINDOWS-11</li>
                  <li class="text-gray-500">Posted on 12/12/2023</li>
                </ul>
                <button class="px-8 mt-4 mb-4 py-2 text-xl font-medium bg-purple-700 text-white rounded-md hover:bg-purple-600"><a href="#">View <span class="z-10 font-medium text-xl hover:translate-x-1">>></a></span> </button>
              </div>
              <div class="price font-bold text-5xl justify-self-center mt-4 mr-4">₹25,000</div>
            </div>
          </div>
        </a>
      </div>
</body>

</html>