<div>
    @foreach($cart as $id => $item)
        <div style="display:flex;align-items:center;gap:20px;padding:20px;border-bottom:1px solid #eee">

            <img src="{{ $item['image'] }}" style="width:80px;height:80px;border-radius:10px;object-fit:cover">

            <div style="flex:1">
                <b>{{ $item['name'] }}</b><br>
                £{{ $item['price'] }}
            </div>

            <div style="display:flex;gap:10px;align-items:center">
                <button wire:click="decrease({{ $id }})">−</button>
                <b>{{ $item['qty'] }}</b>
                <button wire:click="increase({{ $id }})">+</button>
            </div>

            <button wire:click="remove({{ $id }})" style="color:red">Remove</button>
        </div>
    @endforeach

    <div style="padding:20px;text-align:right;font-size:20px">
        <b>Total: £{{ $this->total }}</b>
    </div>

    <a href="/checkout" style="display:block;text-align:right;padding:20px">
        <button style="padding:12px 30px;background:black;color:white;border-radius:8px">
            Checkout
        </button>
    </a>
</div>
