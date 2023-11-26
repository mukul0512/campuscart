
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup Page</title>
    <style>
      <?php include "assets/index-19559485.css" ?>
    </style>
  </head>

  <body class="bg-gradient-to-r from-purple-500 to-purple-950">
    <div
      class="flex justify-center items-center h-screen z-10 before:backdrop-blur-sm"
    >
      <div class="flex container w-1/2 h-4/5 bg-white">
        <div class="bg-purple-950 w-5/12 h-full text-white">
          <h1 class="mx-8 my-4 mt-10 font-semibold text-5xl">Signup</h1>
          <p class="mx-8">
            Signup to get access to campusdeals.in
          </p>
          <img
            class="ml-10 mt-14"
            src="./assets/logo-1-f3c60bcb.png"
            height="200px"
            width="200"
            alt=""
          />
        </div>
        <div class="bg-white w-40 h-auto">
          <h1 class="mt-6 ml-10 text-3xl font-semibold">campusdeals.in</h1>
          <form action="" class="flex flex-col justify-start items-start ml-10">
            <input
              class="w-72 h-10 mt-10 pl-3 border-2 border-gray-300 rounded-md"
              type="text"
              placeholder="Enrollment No."
            />
            <input
              class="w-72 h-10 mt-5 pl-3 border-2 border-gray-300 rounded-md"
              type="password"
              placeholder="Enter your name"
            />
            <input
              class="w-72 h-10 mt-5 pl-3 border-2 border-gray-300 rounded-md"
              type="password"
              placeholder="Phone No."
            />
            <span
              ><p id="warn" class="text-xs text-gray-200">
                PIN will be sent to your University's email id
              </p></span
            >
            <input
              id="pin"
              class="w-72 hidden h-10 mt-5 pl-3 border-2 border-gray-300 rounded-md"
              type="password"
              placeholder="Enter Pin"
            />
            <div class="flex gap-2">
              <button
                id="otp"
                class="w-32 h-10 mt-5 bg-purple-950 text-white rounded-md"
              >
                Get OTP
              </button>
              <button
                id="submit"
                class="w-32 h-10 opacity-75 mt-5 bg-purple-950 text-white rounded-md"
              ><a href="/campuscart/signup2.php">
                Submit</a>
              </button>
            </div>
            <p class="mt-5">
              Already have an account?
              <a href="/campuscart/login.php" class="text-purple-950">Login</a>
            </p>
          </form>
          <script>
            let otp = document.getElementById("otp");
            let pin = document.getElementById("pin");
            let submit = document.getElementById("submit");
            let warn = document.getElementById("warn");
            
            if (sessionStorage.getItem("otpClicked") === "true") {
              pin.classList.remove("hidden");
              submit.classList.remove("opacity-75");
              submit.classList.add("opacity-100");
              warn.classList.add("hidden");
            }

            otp.addEventListener("click", () => {
              pin.classList.remove("hidden");
              submit.classList.remove("opacity-75");
              submit.classList.add("opacity-100");
              warn.classList.add("hidden");
              sessionStorage.setItem("otpClicked", "true");
            }); 
          </script>
        </div>
      </div>
    </div>
  </body>
</html>
