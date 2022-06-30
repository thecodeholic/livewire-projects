<div class="flex flex-col gap-6 w-[400px] mx-auto py-16">
    <select wire:model="selectedContinent" wire:change="changeContinent">
        <option value="-1">Please select continent</option>
        @foreach($continents as $continent)
            <option value="{{$continent->id}}">{{$continent->name}}</option>
        @endforeach
    </select>
    <div class="flex relative">
        <p wire:loading class="absolute left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
            Loading...
        </p>
        <select wire:model="selectedCountry" class="flex-1">
            <option value="-1">Please select country</option>
            @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
    </div>
</div>
