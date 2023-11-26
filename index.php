<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/index-9689174a.css">
    <style>
      .body {
        font-family: "Poppins", sans-serif;
      }
      .carousel {
        overflow: hidden;
        width: 100%;
        height: 300px;
        position: relative;
      }

      .carousel-inner {
        display: flex;
        transition: transform 0.3s ease-in-out;
      }

      .carousel-item {
        flex: 0 0 100%;
      }

      .carousel-controls {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
      }
      .donation{
        position: absolute;
        top: 75vh;
        left: 45vw;
      }
      .listing{
        position: absolute;
        top: 75vh;
        left: 63vw;
      }
      .sell{
        position: absolute;
        top: 55vh;
        left: 81vw;

      }
      .home{
        position:absolute;
        top: 20vh;
        left: 49vw;
      }
      .b{
        margin-top: -60px;
      }
      
    </style>
    <title>Emergency</title>
  </head>
  <body class="bg-gradient-to-r from-purple-950 to-purple-500">
    <header class="justify-center items-center">
      <div class="flex navbar pt-2 h-16 bg-transparent p-2" style="display: flex;
      justify-content: center;">
        <div class="logo flex items-center justify-center mx-6">
          <img src="assets/logo-1-f3c60bcb.png" height="50" width="50" alt="logo" />
          <h1 class="items-center font-semibold text-white text-lg">
            <a href="/campuscart/home.php">campusdeals.in</a>
          </h1>
        </div>
        <div class="search-box justify-center items-center my-1 mx-64">
          <form>
            <label
              for="default-search"
              class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
              >Search</label
            >
            <div class="relative">
              <div
                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
              >
                <svg
                  aria-hidden="true"
                  class="w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                  ></path>
                </svg>
              </div>
              <input
                type="search"
                id="default-search"
                class="block w-96 pb-2 p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search Mockups, Logos..."
                required
              />
              <button
                type="submit"
                class="text-white -mx-4 mb-1 pb-2 absolute -right-16 -bottom-0.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-purple-800 dark:hover:bg-purple-950 dark:focus:ring-blue-800"
              >
                Search
              </button>
            </div>
          </form>
        </div>
        <div class="flex justify-center items-center text-white gap-4 mx-8">
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/signup.php">Sign Up</a>
          </button>
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/login.php">Login</a>
          </button>
        </div>
      </div>
    </header>
    <div
      class="makeup flex bg-gradient-to-r from-purple-950 to-purple-500 h-screen w-full"
    >
      <div class="right flex flex-col gap-10 basis-1/2 justify-center items-center">
        <div class="flex items-center">
          <img class="w-32" src="https://cdn.discordapp.com/attachments/1120377338346090588/1122815201427857438/logo-3.png" alt="" />
          <h1 class="text-5xl font-bold text-white">campusdeals.in</h1>
        </div>
        <h1 class="text-2xl text-white ml-8">Igniting Campus Connections with <br> Empowered Commerce</h1>
        <div class="flex justify-center items-center text-white gap-4 mx-8">
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/signup.php">Sign Up</a>
          </button>
          <button
            class="bg-white text-purple-950 text-lg font-semibold pl-4 pr-4 py-1.5 rounded-md"
          >
            <a href="/campuscart/login.php">Login</a>
          </button>
        </div>
      </div>
      
      <div class="left">
        <div class="home absolute backdrop:blur-md h-1/3 w-2/4 shadow-xl shadow-purple-500 contrast-150">
          <img class="rounded-lg border-4  border-purple-950" src="./img/campusdeals.jpg" alt="">
        </div>
        <!-- <div class="color h-48 w-1/2 absolute top-1/2 left-1/2 z-10 mix-blend-multiply bg-gradient-to-t from-purple-500 to-purple-50"></div> -->
        <div class="b donation absolute top-3/4 h-48 z-20 w-56 drop-shadow-2xl shadow-purple-500">
          <img class="rounded-lg border-4  border-purple-950" src="https://cdn.discordapp.com/attachments/1118765599892455464/1122782172781219870/image.png" alt="">
        </div>
        
        <div class="b listing absolute  top-3/4 h-40 z-20 w-56 shadow-xl shadow-purple-500">
          <img class="rounded-lg border-4  border-purple-950" src="https://cdn.discordapp.com/attachments/1120377338346090588/1122791221044203581/Screenshot_2023-06-26_at_1.00.55_PM.png" alt="">
        </div>
        <div class="b sell absolute top-3/4 h-40 z-20 w-56 shadow-xl shadow-purple-700">
          <img class="rounded-lg border-4  border-purple-950" src="https://cdn.discordapp.com/attachments/1120377338346090588/1122797152477913139/image.png" alt="">
        </div>
      </div>
    </div>
    <footer>
      <div class="footer bg-purple-950 text-white">
        <div class="flex justify-evenly items-center gap-6 mx-12">
          <div class="footer-1">
            <h1 class="text-xl font-bold">About Us</h1>
            <ul>
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
            </ul>
          </div>
          <div class="footer-2">
            <h1 class="text-xl font-bold">Contact Us</h1>
            <ul>
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
            </ul>
          </div>
          <div class="footer-3">
            <h1 class="text-xl font-bold">Social Media</h1>
            <ul>
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
              <a href="#"
                ><li class="hover:translate-x-2">>Lorem, ipsum.</li></a
              >
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
