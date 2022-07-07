<x-app-layout>

    <!-- component -->

    <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">


        <div class="px-6 pt-6 2xl:container">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                {{-- one item --}}
                <div class="md:col-span-2 lg:col-span-1">
                    <div class="h-full py-8 px-6 space-y-6 rounded-xl border border-gray-200 bg-blue-600">

                        <div>

                            <div class="mt-2 flex justify-center gap-4">
                                <h3 class="text-3xl font-bold text-gray-200 uppercase tracking-wider">Analysis</h3>
                            </div>

                        </div>
                        <table class="w-full text-gray-200">
                            <tbody>
                                <tr>
                                    <td class="py-2">Courses</td>
                                    <td class="text-gray-200">{{$course_count}}</td>

                                </tr>
                                <tr>
                                    <td class="py-2">Programmes</td>
                                    <td class="text-gray-200">{{$prog_count}}</td>

                                </tr>
                                <tr>
                                    <td class="py-2">Department</td>
                                    <td class="text-gray-200">{{$department_count}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                


              
            </div>
        </div>



        {{-- tables --}}

        <!-- component -->
        <div class="container">
            <table class="w-full flex flex-row flex-no-wrap sm:bg-white rounded-lg overflow-hidden sm:shadow-lg my-12">
                <thead class="text-white">
                    <tr
                        class="bg-blue-600 flex flex-col flex-no wrap sm:table-row rounded-l-lg sm:rounded-none mb-2 sm:mb-0">
                        <th class="p-3 text-left">Faculty</th>
                        <th class="p-3 text-left">Long Name</th>
                        <th class="p-3 text-left" width="110px">Actions</th>
                    </tr>
                </thead>
                <tbody class="flex-1 sm:flex-none">
                    @foreach($faculties as $faculty)
                    <tr class="flex flex-col flex-no wrap sm:table-row mb-2 sm:mb-0">
                        <td class="border-grey-light border hover:bg-gray-100 p-3">{{$faculty->short_name}}</td>
                        <td class="border-grey-light border hover:bg-gray-100 p-3 truncate">{{$faculty->long_name}}</td>
                        <td
                            class="border-grey-light border hover:bg-gray-100 p-3 text-orange-400 hover:text-indigo-600 hover:font-medium cursor-pointer">
                            <a href="/dashboard/{{$faculty->facultyid}}">View</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <style>
            html,
            body {
                height: 100%;
            }

            @media (min-width: 640px) {
                table {
                    display: inline-table !important;
                }

                thead tr:not(:first-child) {
                    display: none;
                }
            }

            td:not(:last-child) {
                border-bottom: 0;
            }

            th:not(:last-child) {
                border-bottom: 2px solid rgba(0, 0, 0, .1);
            }

        </style>
    </div>




</x-app-layout>
