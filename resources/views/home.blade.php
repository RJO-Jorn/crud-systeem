@extends('layouts.app')
@section('content')

@if(session('debugData'))
<script>
    console.log({{ json_encode(session('debugData')) }});
</script>
@endif

<button id="addCustomerBtn" class="green-button" onclick="openCreateOverlay()">+</button>
    <div class="tableContainer">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Toegevoegd</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($klanten as $klant)
                    <tr>
                        <td>{{ $klant->id }}</td>
                        <td>{{ $klant->firstname }} {{ $klant->lastname }}</td>
                        <td>{{ $klant->emailAdress }}</td>
                        <td>{{ $klant->created_at->format('Y-m-d') }}</td>
                        <td class="action-section">
                            <a href="javascript:void(0);" onclick="fetchEditData(this.getAttribute('data-id'))" data-id="{{ $klant->id }}">
                                @csrf
                                <img src="{{ asset('img/pencil-edit-button.png') }}" class="btn-small" width="20px" alt="Edit">
                            </a>
                            <form id="delete-form-{{ $klant->id }}" action="{{ route('delete', ['id' => $klant->id]) }}" method="POST">
                                <button type="submit" style="border: none; background: none; padding: 0;">
                                    <img src="{{ asset('img/remove.png') }}" class="btn-small" alt="Delete">
                                </button>
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection