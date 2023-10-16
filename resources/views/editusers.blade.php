<x-app-layout>

<section class="max-w-4xl p-6 mx-auto bg-grey-300 rounded-md shadow-md mt-20">
    <h1 class="text-xl font-bold text-black capitalize ">Edit Users</h1><br>
<form method='post' action="{{url('updateuser')}}">
@csrf
<input type="hidden" name="id" value="{{$user->id}}"> 
<div class="mb-6">
<label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your name</label>
<input type="text" name="name" value="{{$user->name}}" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required>
</div>

<div class="mb-6">
<label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
<input type="email" name="email" value="{{$user->email}}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
</div>

<div class="mb-6">
<label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
<input type="password" name="password" value="{{$user->email}}"  id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
</div>


<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
<a href="{{url('/redirect')}}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Back</button></a>
</form>
</section>
</x-app-layout>
