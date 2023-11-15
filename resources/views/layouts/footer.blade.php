<!-- Footer -->
<footer class="flex m-auto gap-x-10 py-3 pt-5 bg-red-500">
    <!-- Facebook -->
    <a href="#" class="">
        <x-si-facebook class="text-grey-300 hover:text-white mr-4 w-12 transition hover:scale-125" />
    </a>

    <!-- Twitter -->
    <a href="#" class="">
        {{-- <x-fab-x-twitter /> --}}
        <x-si-x class="mr-4 w-12 transition hover:scale-125" />
    </a>

    <!-- Instagram -->
    <a href="#" class="text-pink-600 hover:text-pink-500">
        <x-si-instagram class="hover:scale-125 mr-4 w-12 transition" />
    </a>

    <p>{{ date('Y') }} &copy; Your Company</p>
</footer>
