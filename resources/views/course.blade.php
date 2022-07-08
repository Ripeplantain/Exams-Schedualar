<x-app-layout>

    <div class="uppercase flex justify-center text-6xl text-gray-400 my-12 font-bold tracking-wider">
        <h2>Courses</h2>
    </div>

    <div class="flex justify-center flex-col mx-12 pb-8">
        {{-- <form action="">
            <input type="text" id="myInput" name="search"onkeyup="myFunction()" placeholder="Search for departments..">
        </form> --}}
        <table id="myTable">
        <tr class="header uppercase">
            <th style="width:22%;">course code</th>
            <th style="width:22%;">title</th>
            <th style="width:22%;">level</th>
            <th style="width:22%;">Student Number</th>
            <th style="width:12%;"></th>
        </tr>
        @foreach ($courses as $course)
            <tr class="uppercase">
                <td>{{$course->code}}</td>
                <td>{{$course->title}}</td>
                <td>{{$course->level}}</td>
                <td></td>
                <td class="text-red-400"><a href="#">delete</a></td>
            </tr>                
        @endforeach
        
        </table>

    </div>

</x-app-layout>
