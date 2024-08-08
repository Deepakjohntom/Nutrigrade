<?php 
/*
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> -->
*/ 
?>


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
		input[type="password"],
		input[type="confpassword"] {
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
	</style>
    <title>Login</title>
</head>

<body>
	<div class="bg-img">
        <div class="about">
		<h1>NutriGrade</h1>

        <form method="POST"  class="container" action="{{ route('register') }}">
            @csrf
			

            <b>Username</b>
			<input type="text" placeholder="Username"
				name="username" value="{{old('username')}}" required>
         
            @error('username')
            <label for="error">{{$message}}</label>
@enderror
<br>
<b>Phone Number</b>
			<input type="text" placeholder="Phone Number"
				name="phone" value="{{old('phone')}}" required>
         
            @error('phone')
            <label for="error">{{$message}}</label>
@enderror


<br>
              

       

			<b>Password</b>
			<input type="password" placeholder="Password" name="password" id="password" required>
            @error('password')
            <label for="error">{{$message}}</label>
@enderror

			
<br>
			<b>Conform Password</b>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation" required>

			



       



			<button type="submit" class="button" >Register</button>
		</form>
		
        </div>
		
</body>

</html>
