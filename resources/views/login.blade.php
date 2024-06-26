<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>LawLens | Login</title>
</head>
<body>
    <div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url('/assets/background/law.png')">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-2xl font-bold text-white sm:text-3xl">LawLens</h2>
    
                        <p class="max-w-xl mt-3 text-gray-300">
                            Dive in to LawLens to experience the feeling of comfort when it comes to law related. Sign in to continue your journey and solve all of your problems in one go!
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                    <div class="text-center">
                        <div class="flex justify-center mx-auto">
                            <img class="w-auto h-40 sm:h-40" src="/assets/logo.png" alt="">
                        </div>
    
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Sign in to access your account</p>
                    </div>
    
                    <div class="mt-8">
                        <form action="/home">
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email</label>
                                <input type="email" name="email" id="email" placeholder="example@email.com" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="password" class="text-sm text-gray-600 dark:text-gray-200">Password</label>
                                    <a href="#" class="text-sm text-gray-400 focus:text-yellow-500 hover:text-yellow-500 hover:underline">Forgot password?</a>
                                </div>
    
                                <input type="password" name="password" id="password" placeholder="••••••••" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>
    
                            <div class="mt-6">
                                <button class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-yellow-400 rounded-lg hover:bg-yellow-600 focus:outline-none focus:bg-yellow-400 focus:ring focus:ring-yellow-300 focus:ring-opacity-50">
                                    Sign in
                                </button>
                            </div>
    
                        </form>
    
                        <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="/register" class="text-yellow-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

