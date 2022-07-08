<x-app-layout>

    <div class="flex justify-around mt-12 p-12">
        <div class="bg-gray-400 p-12 rounded-md uppercase text-gray-700 tracking-wider">
            <h2 class="font-bold text-2xl">Registered Students</h2>
            <p class="mx-12 p-10 text-4xl">{{$students}}</p>
        </div>
        <div class="bg-gray-400 p-12 rounded-md uppercase text-gray-700 tracking-wider">
            <h2 class="font-bold text-2xl">Registered Courses</h2>
            <p class="mx-12 p-10 text-4xl">{{$courses}}</p>
        </div>
    </div>

</x-app-layout>
