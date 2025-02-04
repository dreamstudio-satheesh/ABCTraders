<div class="col-sm-12">
    <div class="mb-3">
        <label>Tag Name<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($tag->name) ? $tag->name : old('name') }}"
            placeholder="Enter Tag Name" name="name">
        @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Description</label>
        <textarea class="form-control" name="description" type="text" placeholder="Enter Description"
            name="title">{{ isset($tag->description) ? $tag->description : old('description') }}</textarea>
        @error('description')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label>Status</label>
        <select class="form-select" name="status">
            <option value="1" {{ !($tag->status ?? 1) == 0 ? 'selected' : '' }} @if(old('status')=='1' ) selected
                @endif>{{ __('Active') }}</option>
            <option value="0" {{ ($tag->status ?? 1) == 0 ? 'selected' : '' }} @if(old('status')=='0' ) selected @endif>
                {{ __('Deactive') }}</option>
        </select>
    </div>

    <div class="btn-showcase text-end">
        <button class="btn btn-primary" type="submit">{{ __('save') }}</button>
    </div>
</div>