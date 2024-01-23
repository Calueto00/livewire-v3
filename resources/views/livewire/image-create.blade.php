<div>
   <div class="container mx-auto flex justify-center items-center">
        <div class="p-16 shadow-xl">
            <h2>creating image</h2>
            <form wire:submit="store">
                <input type="file" class="mt-2" wire:model="image" accept="image/pnj, image/jpeg">
                <button type="submit" class="text-white bg-blue-800 px-4 py-2 rounded">Save</button>
            </form>
        </div>
   </div>
   <div class="container mx-auto justify-center items-center p-16 shadow" wire:poll>
        <table>
           <thead>
                <tr  class="shadow">
                    <th class="pr-4">Id</th>
                    <th class="pr-4">Image</th>
                    <th class="pr-4">Path</th>
                </tr>
           </thead>
           <tbody>
                    @foreach ($take as $takes)
                        <tr>
                            <td  class="mr-4">{{$takes->id}}</td>
                            <td  class="mr-4">{{$takes->image}}</td>
                            <td  class="mr-4">
                                <img src="{{Storage::url($takes->image)}}" class="w-[128px] h-[120px]" object-cover>
                            </td>
                        </tr>
                    @endforeach
           </tbody>
        </table>

   </div>
</div>
