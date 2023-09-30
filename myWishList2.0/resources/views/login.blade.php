@extends('layout')
@section('title', "Connexion")
@section('content')
<div class="flex flex-col justify-center items-center w-full h-[100vh]">
    <div class="w-1/2 flex justify-center items-center">
        @if($errors->any())
            <div class="w-full">
                @foreach ($errors->all() as $error)
                    <div class="form-container w-full h-[50px] mb-1 px-5 py-1 border-2 border-red-400 rounded-lg bg-red-300 flex items-center">{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="form-container w-full h-[50px] mb-1 px-5 py-1 border-2 border-red-400 rounded-lg bg-red-300 flex items-center">{{ session('error') }}</div>
        @endif

        @if(session()->has('success'))
        <div class="form-container w-full h-[50px] mb-1 px-5 py-1 border-2 border-green-400 rounded-lg bg-green-300 flex items-center">{{ session('success') }}</div>
        @endif
    </div>
    <div class="form-container bg-[#dac9bd] shadow-2xl rounded-3xl w-1/2 h-[75vh] flex flex-col items-center">
        <div class="w-full h-[15%] flex items-center ml-[50px]">
            <button onclick="window.history.back()" class="w-[75px] h-[75px] p-5 rounded-full border-2 border-black flex justify-center items-center"><img class="w-[50px]" src="../../img/icons/back_arrow.svg" alt="back arrow"></button>
        </div>
        <div class="w-full h-[75%] flex flex-col justify-center items-center">
            <h1 class="text-4xl mb-10">Connexion</h1>
            <form action="{{ route('login.post') }}" method="POST" class="w-full flex flex-col items-center justify-around">
                @csrf
                <div class="flex flex-col mb-5">
                    <label>Adresse email</label>
                    <input class="form-input rounded-lg px-2 py-1" type="email" name="email">
                </div>
                <div class="flex flex-col">
                    <label>Mot de passe</label>
                    <input class="form-input rounded-lg px-2 py-1" type="password" name="password">
                </div>
                <button class="text-xl text-white text-center bg-[#c1a793] hover:bg-[#b08e75] mt-10 px-3 py-1 rounded-xl" type="submit" >Se connecter</button>
            </form>
            <p class="">Si vous n'est pas encore inscrit <a href="{{ route('registration') }}" class="text-blue-900 hover:underline">Cliquez ici</a></p>
        </div>
    </div>
</div>        
@endsection