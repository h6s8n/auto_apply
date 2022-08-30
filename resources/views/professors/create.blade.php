<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Professor - MDITech') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('professors.index') }}"
                   class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <form action="{{ route('professors.store') }}" method="POST" >
                    @csrf
                    <div class="mb-4">
                        <label for="textname"
                               class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="name"
                               placeholder="Enter name">
                        @error('name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="textemail"
                               class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="email"
                               placeholder="Enter email">
                        @error('email') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>


                    <div class="mb-4">
                        <label for="textuniversity"
                               class="block mb-2 text-sm font-bold text-gray-700">University</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="university"
                               placeholder="Enter university">
                        @error('university') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textfeildofstudy"
                               class="block mb-2 text-sm font-bold text-gray-700">Feild Of Study</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="feildofstudy"
                               placeholder="Enter feild of study">
                        @error('feildofstudy') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textstate"
                               class="block mb-2 text-sm font-bold text-gray-700">State</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="state"
                               placeholder="Enter state">
                        @error('state') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textcity"
                               class="block mb-2 text-sm font-bold text-gray-700">City</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="city"
                               placeholder="Enter city">
                        @error('city') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textcountry"
                               class="block mb-2 text-sm font-bold text-gray-700">Country</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="country"
                               placeholder="Enter country">
                        @error('country') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>


                    <div>
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
