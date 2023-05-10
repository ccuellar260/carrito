<div class=" flex justify-between items-center">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
   <div  class=" flex">
    <input class="border border-black p-1 rounded mx-12" type="text"  wire:model="search" >

    <div>
        <p class="text-blue-400">
            {{ $search}}
      </p>
          <p class="text-red-400">
                {{ $title}}
          </p>
    </div>
   </div>

    @livewire('crear-producto-live')
</div>
