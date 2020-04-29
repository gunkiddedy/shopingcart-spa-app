<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Shoping Cart</div>
            <div class="card-body">
                <ul class="list-group">
                    @forelse ($cart['products'] as $product)
                        <li class="list-group-item">
                            <span>{{ $product->name }} | {{ $product->price }}</span>
                            <button wire:click="removeItem({{ $product->id }})" class="btn btn-danger float-right">Remove</button>
                        </li>
                    @empty
                        
                    @endforelse
                </ul>
            </div>
            @if ($cart['products'])
                <div class="card-footer">
                    <button wire:click="checkout" class="btn btn-success float-right">Checkout</button>
                </div>
            @endif
        </div>
    </div>
</div>
