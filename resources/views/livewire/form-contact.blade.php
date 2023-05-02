<form wire:submit.prevent="send" class="row g-1">
    @csrf
    <div class="col-12">
        <input type="text" placeholder="Nome*" class="form-control p-400 p-16" wire:model.defer="name" required>
    </div>
    <div class="col-lg-6">
        <input type="email" placeholder="Email*" class="form-control p-400 p-16" wire:model.defer="email" required>
    </div>
    <div class="col-lg-6">
        <input type="text" placeholder="Telefone*" class="form-control p-400 p-16 mask-telefone" wire:model.defer="phone" required>
    </div>
    <div class="col-12">
        <textarea id="" Placeholder="Mensagem*" class="form-control p-400 p-16" rows="5" wire:model.defer="message" required></textarea>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
            <label class="form-check-label" for="termosCheck">
                <x-accept-text />
            </label>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-warning text-dark">
            <span wire:loading.remove>
                Enviar contato
            </span>
            <span wire:loading.inline>
                Aguarde...
            </span>
        </button>
    </div>
    <div class="col-12">
        <x-flash-messages />
    </div>
</form>
