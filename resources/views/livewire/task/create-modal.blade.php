<div>
    @if($isOpen)
        <div class="fixed z-10 top-0 left-0 w-full bg-gray-900/40  h-full inline-flex items-center justify-center" aria-modal="true" id="exampleModal" >
            <div class="relative z-20 max-w-3xl" role="document">
                <div class=" bg-white rounded-lg">
                    <div class="inline-flex justify-between w-full p-4 border-b border-gray-300">
                        <h5 class="modal-title">Modal title</h5>
                        <button wire:click="$emitSelf('closeModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="p-4 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.
                    </div>
                    <div class="p-4 inline-flex justify-between w-full">
                        <button wire:click="$emitSelf('closeModal')" type="button" class="btn btn-light" >Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endif


</div>
