<x-app-layout>

    <div class="flex justify-center my-8 text-4xl tracking-wider uppercase font-semibold text-gray-400">
        <h2>Venues</h2>
    </div>

    <div class="mx-10 py-5">
        {{-- <form action="#" method="get">
            <input type="search" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search for venues..">
        </form> --}}

        <table id="myTable">
        <tr class="header">
            <th style="width:30%;">Venue Name</th>
            <th style="width:30%;">Location Capacity</th>
            <th style="width:30%;">Exam Capacity</th>
            <th style="width:10%;"></th>
        </tr>

        @foreach($venues as $venue)
            <tr>
                <td>{{$venue->venue_name}}</td>
                <td>{{$venue->location_capacity}}</td>
                <td>{{$venue->exam_capacity}}</td>
                <td class="text-blue-600"><a href="/venue/{{$venue->venue_id}}/edit">Edit</a></td>
            </tr>
        @endforeach
        </table>

        <div class="text-blue-600 font-lg p-8 underline">
            <a href="#">Back to the top</a>
        </div>
       
    </div>

</x-app-layout>
