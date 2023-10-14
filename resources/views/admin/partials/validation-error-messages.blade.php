@if ($errors->any())
<div class="alert bg-red-100 border-red-400 text-red-700 mb-10">
    <strong>Please fix the following validation errors</strong>
    <ul class="pt-4 pb-2 list-disc pl-10">
        @foreach($errors->all() as $error)
        <li class="mb-3">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif