
    <div wire:init="loadPosts">
         <?php $__env->slot('header', null, []); ?> 
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Fase de pruebas ')); ?>

            </h2>
         <?php $__env->endSlot(); ?>
        
        <table class="min-w-full divide-y divide-gray-200">
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <div class="px-6 py-4 flex items-center">
    
              <div class="flex items-center">
                <span>Mostrar</span>
                <select wire:model="cant" class="form-control px-4 mx-2">
                  <option class="flex items-center" value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option class="d-flex justify-content-start" value="100">100</option>
                </select>
    
                <span class="">Entradas</span>
              </div>
    
              <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['class' => 'flex-1 mx-3','type' => 'text','wire:model' => 'search','placeholder' => 'Buscar']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-1 mx-3','type' => 'text','wire:model' => 'search','placeholder' => 'Buscar']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-unit')->html();
} elseif ($_instance->childHasBeenRendered('l1374276764-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1374276764-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1374276764-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1374276764-0');
} else {
    $response = \Livewire\Livewire::mount('create-unit');
    $html = $response->html();
    $_instance->logRenderedChild('l1374276764-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
    
            <?php if(count($posts)): ?>
                
            
            <table class="w-full border-collapse  bg-white text-left text-base text-gray-500">
                
                <thead class=" bg-gray-50">
              
                <tr>
                  <th scope="col" class="w-20 cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('id')">ID 
                  
                <?php if($sort == 'id'): ?>
                  <?php if($direction == 'desc'): ?>
                    
                  <i class="fas fa-sort-alpha-up-alt float-right"></i> 
                <?php else: ?>
                <i class="fas fa-sort-alpha-down-alt float-right"></i> 
                <?php endif; ?>
    
                <?php else: ?>
                <i class="fas fa-sort float-right"></i> 
                <?php endif; ?>
    
               </th> 
                <th scope="col" class="w-25 cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('title')">Unidad &nbsp
              
                  
                <?php if($sort == 'title'): ?>
                  <?php if($direction == 'desc'): ?>
                    
                  <i class="fas fa-sort-alpha-up-alt float-right"></i> 
                <?php else: ?>
                <i class="fas fa-sort-alpha-down-alt float-right"></i> 
                <?php endif; ?>
    
                <?php else: ?>
                <i class="fas fa-sort float-right"></i> 
                <?php endif; ?>
    
                  <th scope="col" class="cursor-pointer px-6 py-4 font-medium text-gray-900"
                  wire:click="order('content')">Solicitud&nbsp
                  
                  
                <?php if($sort == 'content'): ?>
                <?php if($direction == 'desc'): ?>
                  
                <i class="fas fa-sort-alpha-up-alt float-right"></i> 
              <?php else: ?>
              <i class="fas fa-sort-alpha-down-alt float-right"></i> 
              <?php endif; ?>
    
              <?php else: ?>
              <i class="fas fa-sort float-right"></i> 
              <?php endif; ?>
    
                
                </th>
           
                  <th scope="col" class="w-10 px-6 py-4 font-medium text-gray-900"
                  >Editar</th>
                </tr>
               
              </thead>
        
              <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                
                <tr class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-10 w-10">
                      <img src="<?php echo e(Storage::url($item->image)); ?>">
                      <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                    </div>
                    <div class="">
                      <div class="text-base text-gray"><?php echo e($item->id); ?></div>
                    </div>
                  </th>
                  <td class="px-6 py-4">
                    <span
                      class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-base font-semibold text-green-600"
                    >
                      <span class="h-1.5 w-1.5 rounded-full bg-green-600 "></span>
                      <?php echo e($item->econ); ?>

                    </span>
                  </td>
                  <td class="px-6 py-4 text-base"><?php echo $item->operador; ?></td>
                  
                  <td class="inline-flex items-center gap-3 px-6 py-4">
                 
                    
                 <a class="btn btn-blue" wire:click="view(<?php echo e($item); ?>)">
                  <i class="fa-solid fa-eye"></i>
              </a>
    
                    <a class="btn btn-green" wire:click="edit(<?php echo e($item); ?>)">
                      <i class="fas fa-edit"> </i>
                  </a>
    
                  <a class="btn btn-red" wire:click="$emit('deletePost', <?php echo e($item->id); ?>)">
                    <i class="fas fa-trash"></i>
                  </a>
    
                  </td>
    
                </tr>
                
                  </td>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dialog-modal','data' => ['wire:model' => 'openedit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'openedit']); ?>
        
                     <?php $__env->slot('title', null, []); ?> 
                        Editar el post 
                     <?php $__env->endSlot(); ?>
                
                     <?php $__env->slot('content', null, []); ?> 
                
                        <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">¡Imagen cargando!</strong>
                            <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
                            
                          </div>
                
                        <?php if($image): ?>
                        <img src ="<?php echo e($image->temporaryUrl()); ?>">
                            <?php else: ?>
                            <img src="<?php echo e(Storage::url($post->image)); ?>">
                        <?php endif; ?>
                
                        <div class="mb-4">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['value' => 'Titulo del Post']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'Titulo del Post']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['wire:model' => 'post.title','type' => 'text','class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'post.title','type' => 'text','class' => 'w-full']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                
                        <div class="mb-4">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['value' => 'Contenido del Post']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => 'Contenido del Post']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <textarea wire:model="post.content" rows="6" class="form-control w-full"></textarea>
                        </div>
                
                        <div>
                            <input type="file" wire:model="image" id="<?php echo e($identificador); ?>">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['for' => 'image']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'image']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
                     <?php $__env->endSlot(); ?> 
                    
                     <?php $__env->slot('footer', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => ['wire:click' => '$set(\'openedit\', false)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'openedit\', false)']); ?>
                            Cancelar
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => ['wire:click' => 'update','wire:loading.attr' => 'disabled','class' => 'disabled:opacity-25']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'update','wire:loading.attr' => 'disabled','class' => 'disabled:opacity-25']); ?>
                            Actualizar
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
    
                
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dialog-modal','data' => ['wire:model' => 'openview']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'openview']); ?>
        
                   <?php $__env->slot('title', null, []); ?> 
                      Mirar Post
                   <?php $__env->endSlot(); ?>
              
                   <?php $__env->slot('content', null, []); ?> 
              
                      <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                          <strong class="font-bold">¡Imagen cargando!</strong>
                          <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado.</span>
                          
                        </div>
              
                      <?php if($image): ?>
                      <img class="" height="" src ="<?php echo e($image->temporaryUrl()); ?>">
                          <?php else: ?>
                          <img class="" height="" width="" src="<?php echo e(Storage::url($post->image)); ?>">
                      <?php endif; ?>
              
                      <div class="mt-4 mb-4">
                          <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'text-xl','value' => 'Titulo del Post']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xl','value' => 'Titulo del Post']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                          
                          <div class="text-base text-gray text-bolder"><?php echo e($post->title); ?></div>
                      </div>
              
                      <div class="mt-4 mb-4">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'text-xl','value' => 'Contenido']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-xl','value' => 'Contenido']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        
                        <div class="text-base text-gray text-bolder"><?php echo $post->content; ?></div>
                    </div>
            
                      
                   <?php $__env->endSlot(); ?> 
                  
                   <?php $__env->slot('footer', null, []); ?> 
                      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.secondary-button','data' => ['wire:click' => '$set(\'openview\', false)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'openview\', false)']); ?>
                          Cancelar
                       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
              
                     
                   <?php $__env->endSlot(); ?>
              
               <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
              </tbody>
            </table>
    
            <?php if($posts->hasPages()): ?>
            <div class="px-6 py-3">
              <?php echo e($posts->links()); ?>

            </div>
            <?php endif; ?>
    
            <?php else: ?>
            <div  class="px-6 py-4">
                <p wire:loading.remove>No existe ningún registro coincidente</p>
            </div>
            <div class="flex justify-center">
              <img wire:loading src="<?php echo e(asset('https://s11.gifyu.com/images/Sg9fn.gif')); ?>" class="w-60 p-10">
       </div>
            <?php endif; ?>
    
          </div>
     
            </table>
    
            <?php $__env->startPush('js'); ?>
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"> </script>
              <script>  
              
              Livewire.on('deletePost', postId =>{
                Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
    
        Livewire.emitTo('show-unidades', 'delete', postId);
    
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
              }
    
            
      })
    });
             </script>
            <?php $__env->stopPush(); ?>
        
         
    
          </div>
    
<?php /**PATH C:\xampp\htdocs\lara1\example-app\resources\views/livewire/unidades.blade.php ENDPATH**/ ?>