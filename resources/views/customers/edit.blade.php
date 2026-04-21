@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<div style="max-width: 500px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
    <h2 style="margin-top: 0; color: #2d3748; border-bottom: 2px solid #edf2f7; padding-bottom: 10px; margin-bottom: 20px;">
        Update Customer Details
    </h2>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT') <label style="display: block; font-size: 13px; font-weight: bold; color: #4a5568; margin-bottom: 5px;">Full Name</label>
        <input type="text" name="name" value="{{ $customer->name }}" required
            style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #e2e8f0; border-radius: 6px; box-sizing: border-box;">

        <label style="display: block; font-size: 13px; font-weight: bold; color: #4a5568; margin-bottom: 5px;">Address</label>
        <input type="text" name="address" value="{{ $customer->address }}" required
            style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #e2e8f0; border-radius: 6px; box-sizing: border-box;">

        <div style="display: flex; gap: 15px; margin-bottom: 20px;">
            <div style="flex: 1;">
                <label style="display: block; font-size: 13px; font-weight: bold; color: #4a5568; margin-bottom: 5px;">Gender</label>
                <select name="gender" style="width: 100%; padding: 10px; border: 1px solid #e2e8f0; border-radius: 6px; background: white;">
                    <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>
            <div style="flex: 1;">
                <label style="display: block; font-size: 13px; font-weight: bold; color: #4a5568; margin-bottom: 5px;">Date of Birth</label>
                <input type="date" name="dob" value="{{ $customer->dob }}" required
                    style="width: 100%; padding: 9px; border: 1px solid #e2e8f0; border-radius: 6px;">
            </div>
        </div>

        <div style="display: flex; align-items: center; justify-content: space-between;">
            <button type="submit" class="btn-add" style="border: none; cursor: pointer; width: auto; padding: 10px 25px;">
                UPDATE CHANGES
            </button>
            <a href="{{ route('customers.index') }}" style="text-decoration: none; font-size: 13px; color: #718096;">Cancel</a>
        </div>
    </form>
</div>
@endsection