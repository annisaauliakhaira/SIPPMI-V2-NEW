<div class="row">
    <div class="col-lg-10">
        <x-label for="status_usulan" value="Update Status Penelitian"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <select class="form-control" wire:model="status_usulan">
                <option value="">--Pilihan--</option>
                @foreach ( $status_penelitians as $index => $data_status ) 
                    <option value="{{ $index}}"> {{ $data_status}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>