<div>
    <div>
        <button wire:click="decrement">-</button>
        <span>{{ $counter }}</span>
        <button wire:click="increment">+</button>
    </div>


        <input wire:model.live="username" type="text" placeholder="Enter your name"/>
    @error('username') <span class="text-red-500">{{ $message }}</span> @enderror
    <input wire:model.live="email" type="text" placeholder="Enter your name"/>
    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        <button wire:click="submit"
                wire:confirm="Are you sure you want to delete this post?"
                wire:loading.attr="disabled" >Submit</button>
        <p wire:loading>TKT BRO, ca charge !!</p>
    <div>
        <span wire:click="bidon">Hellow</span> {{ $username }} : {{ $email }} !!
    </div>
</div>
