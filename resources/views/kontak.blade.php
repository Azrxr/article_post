<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <ul>
        <img src="img/fotoku.png" alt="Gambar diri" width="150" class="rounded-circle">
        <li>
            <h1>halo saya {{ $nama }}</h1>
            <h3>hubungi saya melalui {{ $mail }}</h3>
        </li>
        <li>
            <a href="wa.me/6285852226976">{{ $nohp }}</a>
        </li>
    </ul>
</x-layout>
