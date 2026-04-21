@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<div class="header-flex">
    <h2>Customer List</h2>
    <a href="{{ route('customers.create') }}" class="btn-add">ADD CUSTOMER</a>
</div>

<table>
    <thead>
        <tr>
            <th>NAME</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th>ADDRESS</th>
            <th style="text-align: center;">ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ ucfirst($customer->gender) }}</td>
            <td>{{ $customer->dob }}</td>
            <td>{{ $customer->address }}</td>
            <td style="text-align: center;">
                <a href="{{ route('customers.show', $customer->id) }}" class="action-btn btn-view">VIEW</a>
                <a href="{{ route('customers.edit', $customer->id) }}" class="action-btn btn-edit">EDIT</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete?')">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@auth
<a href="{{ route('customers.edit', $customer->id) }}" class="btn-edit">Edit</a>
<form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endauth