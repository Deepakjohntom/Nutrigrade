<?php
/*
<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

    
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
*/ ?>



<!DOCTYPE html>
<html>

<head>
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<style>
		body {
			height: 100%;
			font-family: Arial, sans-serif;
			margin: 0;
		}

		.bg-img {
			background-image: url("{{asset('admin/nut.jpg')}}");
			min-height: 100vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}

        .about{
            position: relative;
			max-width: 300px;
			padding: 16px;
			background: rgb(255, 255, 255);
			border-radius: 10px;
			box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.864);
        }
		.container {
			position: relative;
			max-width: 300px;
			padding: 16px;
			background: rgba(255, 255, 255, 0.8);
			border-radius: 8px;

		}

		h1 {
			text-align: center;
			color: green;
			/* -webkit-text-stroke: 1px black; */
			margin-bottom: 20px;
		}

		b {
			color: green;
			font-size: 18px;
			/* -webkit-text-stroke: 1px black; */
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			border: 1px solid green;
			box-sizing: border-box;
            border-radius: 10px;
		}

		.button {
			background-color: rgba(78, 75, 65, 0.915);
			color: white;
			padding: 14px;
			border: none;
			cursor: pointer;
			width: 100%;
            border-radius: 10px;
		}

		.button:hover {
			background-color: darkgreen;
		}

		.btn{
			border: none;
  background-color: inherit;
  padding: 1px 19px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
		}
		.btn:hover{
			background: #eee;
		}
		.create{color: rgb(0, 166, 255);}

	</style>
    <title>Login</title>
</head>

<body>
	<div class="bg-img">
        <div class="about">
		<h1>NutriGrade</h1>

		<form class="container" method="POST" action="{{ route('login') }}">
        @csrf
			<b>Username</b>
			<input type="text" placeholder="Enter your username"
				name="username" value="{{old('username')}}" required>
                @error('username')
            <label for="error">{{$message}}</label>
                @enderror



			<b>Password</b>
			<input type="password" placeholder="Enter your password"
				name="password" id="password" required>
                @error('password')
            <label for="error">{{$message}}</label>
            @enderror



			<button type="submit" class="button" >Login</button>
		</form>
		<button class="btn create" button onclick="window.location.href = '{{route('register')}}';">Create</button>
        </div>
		
</body>

</html>
