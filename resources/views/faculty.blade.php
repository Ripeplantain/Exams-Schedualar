<x-app-layout>

    <div class="uppercase flex justify-center text-6xl text-gray-400 my-12 font-bold tracking-wider">
        <h2>Deparmtents</h2>
    </div>

    <div class="flex justify-center flex-col mx-12 pb-8">
        {{-- <form action="">
            <input type="text" id="myInput" name="search"onkeyup="myFunction()" placeholder="Search for departments..">
        </form> --}}
        <table id="myTable">
        <tr class="header uppercase">
            <th style="width:40%;">short name</th>
            <th style="width:40%;">long name</th>
            <th style="width:10%;"></th>
        </tr>
        @foreach ($departments as $department)
            <tr class="uppercase">
                <td>{{$department->short_name}}</td>
                <td>{{$department->long_name}}</td>
                <td class="text-indigo-400"><a href="/course/{{$department->deptid}}">view</a></td>
            </tr>                
        @endforeach
        
        </table>

    </div>

</x-app-layout>
