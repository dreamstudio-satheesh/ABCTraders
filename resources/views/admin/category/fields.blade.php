<div class="col-sm-12">
    <div class="mb-3">
        <label>Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($cat->name) ? $cat->name : old('name') }}"
            placeholder="Enter Category Name" name="name">
        @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" placeholder="Enter Description"
            name="description">{{ isset($cat->description) ? $cat->description : old('description') }}</textarea>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Parent</label>
        <select class="form-select" name="parent_id">
            <option value="" selected disabled hidden>Select Parent</option>
            @foreach ($parent as $key => $category)
                @if($key != @$cat?->id)
                    <option @selected(old("parent_id", @$cat->parent_id) == $key)
                        value="{{$key}}">{{ $category }} </option>
                @endif
            @endforeach
        </select>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Meta Title<span> *</span></label>
        <input class="form-control" type="text"
            value="{{ isset($cat->meta_title) ? $cat->meta_title : old('meta_title') }}" placeholder="Enter Meta Title"
            name="meta_title">
        @error('meta_title')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Meta Description</label>
        <textarea class="form-control" name="meta_description"
            placeholder="Enter Meta Description">{{ isset($cat->meta_description) ? $cat->meta_description : old('meta_description') }}</textarea>
        @error('meta_description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <label>Image</label>
            <input class="form-control" type="file" name="image">
            @isset($cat)
                @php
                    $image = $cat->getFirstMedia('image');
                @endphp
                <div class="mt-3 comman-image">
                    @if ($image)
                        <img src="{{ $image->getUrl() }}" alt="Image" class="img-thumbnail img-fix" height="20%" width="20%">
                    @endif
                </div>
            @endisset

            @error('image')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-6">
            <label>Status</label>
            <select class="form-select" name="status">
                <option value="1" {{ !($cat->status ?? 1) == 0 ? 'selected' : '' }} @if(old('status')=='1' ) selected
                    @endif>{{ __('Active') }}</option>
                <option value="0" {{ ($cat->status ?? 1) == 0 ? 'selected' : '' }} @if(old('status')=='0' ) selected
                    @endif>{{ __('Deactive') }}</option>
            </select>
            @error('status')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="btn-showcase text-end">
        <button class="btn btn-primary" type="submit">{{ __('save') }}</button>
    </div>
</div>