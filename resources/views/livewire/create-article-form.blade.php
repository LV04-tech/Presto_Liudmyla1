<form class="form-card-custom shadow rounded p-5 my-5" wire:submit="store">

    {{-- @if (session()->has('success'))
       <div class="alert alert-success">
           {{ session()->get('success') }}
       </div>
   @endif --}}
   
   <!-- TITOLO -->
   <div class="mb-4">
       <label for="title" class="form-label-custom">{{__("ui.title")}}</label>
       <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
       @error('title')
            <p class="fst-italic text-warning mt-2">{{ $message }}</p>
       @enderror
   </div>
  
   <!-- DESCRIZIONE -->
   <div class="mb-4">
       <label for="description" class="form-label-custom">{{__("ui.description")}}</label>
       <!-- Rimosse le colonne e righe fisse per lasciare spazio al layout fluido del CSS -->
       <textarea id="description" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
     @error('description')
          <p class="fst-italic text-warning mt-2">{{ $message }}</p>
     @enderror
   </div>

   <!-- PREZZO -->
   <div class="mb-4">
       <label for="price" class="form-label-custom">{{__("ui.price")}}</label>
       <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" wire:model.blur="price">
       @error('price')
          <p class="fst-italic text-warning mt-2">{{ $message }}</p>
       @enderror 
   </div>

   <!-- CARICAMENTO IMMAGINI -->
   <div class="mb-4">
       <label class="form-label-custom">Immagini dell'articolo</label>
       <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
       @error('temporary_images.*')
            <p class="fst-italic text-warning mt-2">{{ $message}}</p>
       @enderror
        @error('temporary_images')
            <p class="fst-italic text-warning mt-2">{{ $message}}</p>
       @enderror
   </div> 

   <!-- ANTEPRIMA FOTO (Effetto neon coerente) -->
   @if (!empty($images))
       <div class="row mb-4">
           <div class="col-12">
               <p class="text-center text-yl mb-3">Anteprima foto:</p>
               <!-- Cambiato il bordo in neon coordinato con var(--gee) -->
               <div class="row border border-2 rounded shadow py-4" style="border-color: var(--gee) !important; background: rgba(19, 21, 21, 0.3);">
                   @foreach ($images as $key => $image)
                       <div class="col-6 col-md-4 d-flex flex-column align-items-center my-3">
                           <div class="img-preview mx-auto shadow rounded" 
                               wire:key="{{ $key }}"
                               style="background-image: url({{ $image->temporaryUrl() }});">
                           </div>
                           <button type="button" class="btn btn-sm btn-danger mt-2" wire:click="removeImage({{ $key }})">Rimuovi</button>
                       </div>
                   @endforeach  
               </div>
           </div>
       </div>
   @endif 
   <!-- FINE CARICAMENTO IMMAGINI -->

   <!-- CATEGORIA -->
   <div class="mb-4">
       <label for="category" class="form-label-custom">Categoria</label>
       <select id="category" wire:model.blur="category" class="form-select @error('category') is-invalid @enderror">
           <option value="" selected disabled>Seleziona una categoria</option>   
           @foreach ($categories as $category)
               <option value="{{ $category->id }}">{{__("ui.$category->name")}}</option>
           @endforeach
       </select>   
       @error('category')
          <p class="fst-italic text-danger mt-2">{{ $message }}</p>
       @enderror
   </div>

   <!-- PULSANTE INVIA -->
   <div class="d-flex justify-content-center mt-5">
       <button type="submit" class="welcome-btn w-100">{{__("ui.create")}}</button>
   </div>

</form>
