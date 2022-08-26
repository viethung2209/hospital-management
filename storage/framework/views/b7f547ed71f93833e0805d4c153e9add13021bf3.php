<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('FjVKVaO')) {
    $componentId = $_instance->getRenderedChildComponentId('FjVKVaO');
    $componentTag = $_instance->getRenderedChildComponentTagName('FjVKVaO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('FjVKVaO');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('FjVKVaO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH D:\laragon\www\hospital-management\vendor\livewire\livewire\src\Testing/../views/mount-component.blade.php ENDPATH**/ ?>