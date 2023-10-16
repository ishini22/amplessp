<x-app-layout>
<section class="max-w-4xl p-6 mx-auto bg-grey-300 rounded-md shadow-md mt-20">
    <h1 class="text-xl font-bold text-black capitalize ">Add Users</h1><br>
<form method='post' action="{{url('saveuser')}}">
@csrf
<div class="mb-6" >
<label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name of the User</label>
<input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required>
</div>

<div class="mb-6">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
</div>

<div class="mb-6">
<label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
<input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
</div>


<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
<a href="{{url('/redirect')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Back</button></a>
</form>
<div>
</div>
</section>
</x-app-layout>