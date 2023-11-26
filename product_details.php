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
  <title>Product Details</title>
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
  <section class="pt-4 pb-8 bg-blueGray-100 rounded-b-10xl overflow-hidden">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <ul class="flex flex-wrap items-center mb-20">
            <li class="mr-6">
              <a class="flex items-center text-sm font-medium text-gray-400 hover:text-gray-500" href="home.html">
                <span>Home</span>
                <svg class="ml-6" width="4" height="7" viewbox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.150291 0.898704C-0.0500975 0.692525 -0.0500975 0.359292 0.150291 0.154634C0.35068 -0.0507836 0.674443 -0.0523053 0.874831 0.154634L3.7386 3.12787C3.93899 3.33329 3.93899 3.66576 3.7386 3.8727L0.874832 6.84594C0.675191 7.05135 0.35068 7.05135 0.150292 6.84594C-0.0500972 6.63976 -0.0500972 6.30652 0.150292 6.10187L2.49888 3.49914L0.150291 0.898704Z" fill="currentColor"></path>
                </svg>
              </a>
            </li>
            <li class="mr-6">
              <a class="flex items-center text-sm font-medium text-gray-400 hover:text-gray-500" href="/product_listing.html">
                <span>product_listing</span>
                <svg class="ml-6" width="4" height="7" viewbox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.150291 0.898704C-0.0500975 0.692525 -0.0500975 0.359292 0.150291 0.154634C0.35068 -0.0507836 0.674443 -0.0523053 0.874831 0.154634L3.7386 3.12787C3.93899 3.33329 3.93899 3.66576 3.7386 3.8727L0.874832 6.84594C0.675191 7.05135 0.35068 7.05135 0.150292 6.84594C-0.0500972 6.63976 -0.0500972 6.30652 0.150292 6.10187L2.49888 3.49914L0.150291 0.898704Z" fill="currentColor"></path>
                </svg>
              </a>
            </li>
            <li>
              <a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="/product_details.html">product_details</a>
            </li>
          </ul>
        </div>
        <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
          <div class="flex -mx-4 flex-wrap items-center justify-between lg:justify-start lg:items-center xl:items-center">
            <div class="w-full sm:w-auto min-w-max px-4 text-center flex sm:flex-col items-center justify-start">
              <a class="inline-block sm:mb-12 mr-4 sm:mr-0 transform -rotate-90 sm:transform-none hover:text-darkBlueGray-400" href="#">
                <svg class="w-6 h-6" width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.54064 7.21015C1.18719 7.59662 0.615928 7.59662 0.265087 7.21015C-0.087058 6.82369 -0.0896663 6.19929 0.265087 5.81282L5.36206 0.289847C5.71421 -0.0966173 6.28416 -0.0966172 6.63892 0.289847L11.7359 5.81282C12.088 6.19785 12.088 6.82369 11.7359 7.21015C11.3824 7.59662 10.8112 7.59662 10.4603 7.21015L5.99853 2.68073L1.54064 7.21015Z" fill="currentColor"></path>
                </svg>
              </a>
              <a class="h-30 block mb-4 mr-2 sm:mr-0" href="#">
                <img class="h-10 w-10" src="./img/Lenovo.jpg" alt="" />
              </a>
              <a class="h-30 block mb-4 mr-2 sm:mr-0" href="#">
                <img class="h-10 w-10" src="./img/Lenovo.jpg" alt="" />
              </a>
              <a class="h-30 block mb-4 mr-2 sm:mr-0" href="#">
                <img class="h-10 w-10" src="./img/Lenovo.jpg" alt="" />
              </a>
              <a class="h-30 block mb-4 mr-2 sm:mr-0" href="#">
                <img class="h-10 w-10" src="./img/Lenovo.jpg" alt="" />
              </a>
              <a class="inline-block transform -rotate-90 sm:transform-none hover:text-darkBlueGray-400" href="#">
                <svg class="w-6 h-6 mt-8" width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.4594 0.289849C10.8128 -0.0966154 11.3841 -0.0966154 11.7349 0.289849C12.0871 0.676313 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880364 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.0966159 1.53966 0.289848L6.00147 4.81927L10.4594 0.289849Z" fill="currentColor"></path>
                </svg>
              </a>

            </div>
            <div class="w-full sm:w-9/12 px-4">
              <img class="mb-5" src="./img/Lenovo.jpg" alt="" />
              <p class="text-sm text-gray-300">Roll over image to zoom in</p>
            </div>
            <div class="w-40  px-2 mb-2 md:mb-0" style="margin-left:261px">
              <a class="block mx-16 py-4 px-2 leading-8 font-heading font-medium tracking-tighter text-xl text-white text-center bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 hover:bg-blue-600 rounded-xl" href="/campuscart/360/360.php">360 View</a>
            </div>
            <div class="w-40  px-2 mb-2 md:mb-0" style="margin-left:261px">
              <a class="block mx-16 py-4 px-2 leading-8 font-heading font-medium tracking-tighter text-xl text-white text-center bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 hover:bg-blue-600 rounded-xl" href="/campuscart/Chatbox/chatbox.php">Chat with Seller</a>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <div class="max-w-md mb-2">
            <span class="text-xs text-gray-400 tracking-wider">product #3299803</span>
            <h2 class="mt-2 mb-4 text-xl md:text-2xl lg:text-4xl font-heading font-medium">
              Lenovo IdeaPad Gaming 3 Intel Core i5 11th Gen - 8 GB/512 GB
              SSD/Windows 11 Home/4 GB Graphics/NVIDIA...
            </h2>
            <p class="flex items-center mb-6">
              <span class="mr-2 text-3xl text-blue-500 font-medium">₹</span>
              <span class="text-3xl text-blue-500 font-medium">25,000</span>
            </p>
            <ul class="list-disc ml-6">
              <li class="text-gray-500">Intel core-i5 10th gen</li>
              <li class="text-gray-500">8GB RAM</li>
              <li class="text-gray-500">512GB SSD STORAGE</li>
              <li class="text-gray-500">WINDOWS-11</li>
              <li class="text-gray-500">Posted on 12/12/2023</li>
            </ul>
          </div>
          <div class="flex mb-6 items-center">
            <div class="inline-flex mr-4">
              <button class="mr-1">3-Months older with bill</button>
            </div>
          </div>

          <div class="mb-10">
            <h4 class="mb-3 font-heading font-medium">Qty:</h4>
            <input class="w-24 px-3 py-2 text-center bg-white border-2 border-blue-500 outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" type="text" placeholder="1" />
          </div>
          <div class="flex flex-wrap -mx-2 mb-12">
            <div class="w-full md:w-2/3 px-2 mb-2 md:mb-0">
              <a class="block py-4 px-2 leading-8 font-heading font-medium tracking-tighter text-xl text-white text-center bg-blue-500 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 hover:bg-blue-600 rounded-xl" href="#">Buy Now</a>
            </div>


            <div class="w-full md:w-1/3 px-2 border-gray-300 border-2 rounded-xl">
              <a class="flex w-full py-4 px-2 items-center justify-center leading-8 font-heading font-medium tracking-tighter text-xl text-center bg-white focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50 hover:bg-opacity-60 rounded-xl" href="#">
                <span class="mr-2">Wishlist</span>
                <svg width="23" height="22" viewbox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M11.3235 20.1324L2.52488 10.8515C1.75232 10.0706 1.24237 9.06367 1.06728 7.97339C0.8922 6.88311 1.06086 5.76477 1.54936 4.7768V4.7768C1.91837 4.03089 2.45739 3.3843 3.12201 2.89033C3.78663 2.39635 4.55781 2.06911 5.37203 1.93558C6.18626 1.80205 7.0202 1.86605 7.80517 2.1223C8.59013 2.37855 9.30364 2.81972 9.88691 3.40946L11.3235 4.86204L12.7601 3.40946C13.3434 2.81972 14.0569 2.37855 14.8419 2.1223C15.6269 1.86605 16.4608 1.80205 17.275 1.93558C18.0892 2.06911 18.8604 2.39635 19.525 2.89033C20.1897 3.3843 20.7287 4.03089 21.0977 4.7768V4.7768C21.5862 5.76477 21.7549 6.88311 21.5798 7.97339C21.4047 9.06367 20.8947 10.0706 20.1222 10.8515L11.3235 20.1324Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </a>
            </div>
          </div>
          <div>
            <h4 class="mb-6 font-heading font-medium">More Purchase Option</h4>
            <button class="flex w-full pl-6 lg:pl-12 pr-6 py-4 mb-4 justify-between items-center leading-7 rounded-2xl border-2 border-blueGray-200 hover:border-blueGray-300">
              <h3 class="text-lg font-heading font-medium">
                Make An Offer
              </h3>
              <span>
                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.4594 0.289848C10.8128 -0.096616 11.3841 -0.096616 11.7349 0.289848C12.0871 0.676312 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880363 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.096616 1.53966 0.289848L6.00147 4.81927L10.4594 0.289848Z" fill="black"></path>
                </svg>
              </span>
            </button>
            <button class="flex w-full pl-6 lg:pl-12 pr-6 py-4 justify-between items-center leading-7 rounded-2xl border-2 border-blueGray-200 hover:border-blueGray-300">
              <h3 class="text-lg font-heading font-medium">
                Group Buy (3-5 Members)
              </h3>
              <span>
                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.4594 0.289848C10.8128 -0.096616 11.3841 -0.096616 11.7349 0.289848C12.0871 0.676312 12.0897 1.30071 11.7349 1.68718L6.63794 7.21015C6.28579 7.59662 5.71584 7.59662 5.36108 7.21015L0.264109 1.68718C-0.0880363 1.30215 -0.0880363 0.676312 0.264109 0.289848C0.617558 -0.096616 1.18882 -0.096616 1.53966 0.289848L6.00147 4.81927L10.4594 0.289848Z" fill="black"></path>
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>