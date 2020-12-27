@extends('layouts.master')

    @section('content')
        <div class="flex h-screen bg-gray ">
            <div class="m-auto">
                <div id="login-form" class="shadow-md rounded">
                    <div class="" id="login-title-container" style="background-image: url({{ asset('images/login-bg.jpg')}})">
                        <h1 class="text-white" id="login-title">Library Management System</h1>
                    </div>
                    <div class="bg-white px-8 pt-6 pb-8 flex flex-col">
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                                Username
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-6">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
                            <p class="text-red text-xs italic">Please enter the password.</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue hover:bg-blue-dark text-black font-bold py-2 px-4 rounded" type="button">
                                Sign In
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    @stop