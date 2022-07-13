@if (session()->has('success'))

    <div x-data="{show:true}"
        x-init="setTimeout(() => show = false,1000)"  
        x-show="show" 

        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert" role="alert">
        
        <p>{{session('success')}}</p>
    </div>


@endif