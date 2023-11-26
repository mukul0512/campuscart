<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <style>
      <?php include "assets/index-19559485.css" ?>
    </style>
  </head>

  <body class="bg-gradient-to-r from-purple-500 to-purple-950 ">
    <div class="flex justify-center items-center h-screen z-10 before:backdrop-blur-sm">
      <div class="flex container w-1/2 h-3/4 bg-white">
        <div class="bg-purple-950 w-5/12 h-full text-white">
            <h1 class="mx-8 my-4 mt-10 font-semibold text-5xl">Login</h1>
            <p class="mx-8"> Login to get access to campusdeals.in</p>
            <img class="ml-10 mt-14" src="./assets/logo-1-f3c60bcb.png" height="200px" width="200" alt="">
        </div>
        <div class="bg-white w-40 h-96" >
            <h1 class="mt-10 ml-10 text-3xl font-semibold">Enrollment Number</h1>
            <form action="" class="flex flex-col justify-start items-start ml-10">
                <input class="w-72 h-10 mt-10 pl-3 border-2 border-gray-300 rounded-md" type="text" placeholder="Enrollment No.">
                <input class="w-72 h-10 mt-5 pl-3 border-2 border-gray-300 rounded-md" type="password" placeholder="Enter OTP Here">
                <button class="w-40 h-10 mt-5 bg-purple-950 text-white rounded-md">Get OTP</button>
                <p class="mt-5">Don't have an account? <a href="/campuscart/signup.php" class="text-purple-950">Register</a></p>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
