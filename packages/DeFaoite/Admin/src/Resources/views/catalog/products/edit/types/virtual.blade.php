@include('admin::catalog.products.edit.customizable-options')

<div class="mt-4">
    <p class="mb-2 text-base font-semibold text-gray-800 dark:text-white">
        Downloadable Information        Downloadable Information
    </p>

    @include('admin::catalog.products.edit.types.downloadable', ['showDownloadableSamples' => false])    @include('admin::catalog.products.edit.types.downloadable', ['showDownloadableSamples' => false])
</div>