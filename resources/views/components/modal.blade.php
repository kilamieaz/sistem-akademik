<div class="modal fade" id="{{ $modal_id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $modal_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                @component('components.form')
                @slot('input')
                @foreach($inputs as $input)
                @if ($input['type'] == 'select')
                <div class="form-group">
                    <label for="{{ $input['name'] }}" id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                    <select class="form-control" id="{{ $input['name'] }}" name="{{ $input['name'] }}">
                        @foreach ($input['value'] as $item)
                            <option value="{{ $item->selectValue() }}">{{ $item->selectText() }}</option>
                        @endforeach
                    </select>
                </div>
                @else
                <div class="form-group">
                    <label for="{{ $input['name'] }}" class="col-form-label"
                        id="{{ $input['label_id'] }}">{{ $input['header'] }}</label>
                    <input type="{{ $input['type'] }}" class="form-control" id="{{ $input['name'] }}"
                        name="{{ $input['name'] }}">
                </div>
                @endif
                @endforeach
                @endslot
                @endcomponent
        </div>
    </div>
</div>