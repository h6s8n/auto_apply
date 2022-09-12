<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Professor - MDITech') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('professors.index') }}"
                   class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Go back
                </a>
                <form action="{{ route('professors.update', $professor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="textcontinent"
                               class="block mb-2 text-sm font-bold text-gray-700">Continent
                        </label>
                        <select name="continent_id"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                aria-label="Default select example">
                            <option selected>select</option>
                            @foreach($continents as $item)
                                <option {{($professor->continent_id == $item->id) ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('continent')
                        <span class="text-red-500">{{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="textprofessortitle"
                               class="block mb-2 text-sm font-bold text-gray-700">Professor Title
                        </label>
                        <select name="professor_title_id"
                                class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                aria-label="Default select example">
                            <option selected>select</option>
                            @foreach($professorTitles as $item)
                                <option {{($professor->professor_title_id == $item->id) ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('professortitle')
                        <span class="text-red-500">{{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="textname"
                               class="block mb-2 text-sm font-bold text-gray-700">Name</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="name"
                               value="{{$professor->name}}"
                               placeholder="Enter name">
                        @error('name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="last_name"
                               class="block mb-2 text-sm font-bold text-gray-700">Last Name</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="last_name"
                               value="{{$professor->last_name}}"
                               placeholder="Enter lastname">
                        @error('last_name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textemail"
                               class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="email"
                               value="{{$professor->email}}"
                               placeholder="Enter email">
                        @error('email') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textlink"
                               class="block mb-2 text-sm font-bold text-gray-700">Link</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="link"
                               value="{{$professor->link}}"
                               placeholder="Enter link">
                        @error('link') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textuniversity"
                               class="block mb-2 text-sm font-bold text-gray-700">University</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="university_name"
                               value="{{$professor->university_name}}"
                               placeholder="Enter university">
                        @error('university_name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textfeildofstudy"
                               class="block mb-2 text-sm font-bold text-gray-700">Feild Of Study</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="field_of_study"
                               value="{{$professor->field_of_study}}"
                               placeholder="Enter field of study">
                        @error('field_of_study') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textresearchinterest"
                               class="block mb-2 text-sm font-bold text-gray-700">Research Interest</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="research_interest"
                               value="{{$professor->research_interest}}"
                               placeholder="Enter research interest">
                        @error('research_interest') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textstate"
                               class="block mb-2 text-sm font-bold text-gray-700">State</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="state_name"
                               value="{{$professor->state_name}}"
                               placeholder="Enter state">
                        @error('state_name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textcity"
                               class="block mb-2 text-sm font-bold text-gray-700">City</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="city_name"
                               value="{{$professor->city_name}}"
                               placeholder="Enter city">
                        @error('city_name') <span class="text-red-500">{{ $message }}
                    </span>@enderror
                    </div>

                    <div class="mb-4">
                        <label for="textcountry"
                               class="block mb-2 text-sm font-bold text-gray-700">Country</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="country_name"
                               value="{{$professor->country_name}}"
                               placeholder="Enter country">
                        @error('country_name') <span class="text-red-500">{{ $message }}
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
