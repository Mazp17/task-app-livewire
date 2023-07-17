<div>
    @if($isOpen)
        <div class="fixed z-10  w-full bg-gray-900/40 overflow-y-scroll  h-full inline-flex items-center justify-center" aria-modal="true" id="exampleModal" >
            <div class="absolute right-50 top-0 lg:w-2/3 w-[100%] p-2" role="document">
                <div class=" bg-white rounded-lg">
                    <div class="inline-flex justify-between w-full p-4 border-b border-gray-300">
                        <h5 class="modal-title">
                            Create a new task
                        </h5>
                        <button wire:click="$emitSelf('closeModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="p-4 flex md:flex-row flex-col gap-4 w-full">
                        <div class="w-full">
                            <div class="mb-3">
                                <label class="form-label">
                                    Title
                                    <input class="form-control" type="text">
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Description
                                    <textarea class="form-control"></textarea>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Assign
                                </label>
                                <div class="row g-2">
                                    <div class="col-auto">
                                        <label class="form-imagecheck mb-2">
                                            <input type="checkbox" class="form-imagecheck-input">
                                            <span class="form-imagecheck-figure">
                                            <span class="form-imagecheck-image">
                                                <span class="avatar avatar-md">
                                                    MZ
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-imagecheck mb-2">
                                            <input type="checkbox" class="form-imagecheck-input">
                                            <span class="form-imagecheck-figure">
                                            <span class="form-imagecheck-image">
                                                <span class="avatar avatar-md">
                                                    MZ
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <label class="form-imagecheck mb-2">
                                            <input type="checkbox" class="form-imagecheck-input">
                                            <span class="form-imagecheck-figure">
                                            <span class="form-imagecheck-image">
                                                <span class="avatar avatar-md">
                                                    MZ
                                                </span>
                                            </span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Deadline
                                    <input class="form-control" type="date">
                                </label>
                            </div>
                        </div>

                        <form class="dropzone md:w-1/4 w-[100%]" id="dropzone-custom"  action="/saveImage" autocomplete="off" novalidate>
                            @csrf
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
                            <div class="dz-message">
                                <h3 class="dropzone-msg-title">Your text here</h3>
                                <span class="dropzone-msg-desc">Your custom description here</span>
                            </div>
                        </form>
                    </div>
                    <div class="p-4 inline-flex justify-between w-full">
                        <button wire:click="$emitSelf('closeModal')" type="button" class="btn btn-light" >Close</button>
                        <button type="button" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <script defer>
            document.addEventListener("livewire:load", () => {
                new Dropzone("#dropzone-custom")
            });
        </script>
    @endif


</div>
