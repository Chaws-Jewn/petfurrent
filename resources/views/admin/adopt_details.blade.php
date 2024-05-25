@extends('layouts.details_na')

@section('content')
<!------------------------ ADOPTION DETAILS PAGE (UPON CLICKING ADOPTION DETAILS BUTTON) -------------------------------->

<div class="container-fluid py-4" style="background-color: #f1f1f1">
    <div class="container">

        <div style="background-color: #f1f1f1; display: flex; justify-content: space-between; align-items: center; padding: 10px;">
            <!-- Back button to go back to the admin index (admin dashboard) -->
            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="header text-center" style=" align-items: center;">
            <!-- Title page (header) and details about the adoption (Adopt ID and Adopt Status)-->
            <h1>Adoption Details</h1>
            <h4>Adopt ID: {{ $adopt->id }}</h4>
            <p>Status: <span style="font-weight: bold; color: {{ getStatusColor($adopt->adopt_status) }}">{{ $adopt->adopt_status }}</span></p>
            <hr>
        </div>

        <!-- Account Information Part -->
        <div class="account-info container-fluid" style="background: white;margin: 20px; padding: 20px;">
            <h2>Fur Parent Information</h2>
            <h6>Information from the Adoption form.</h6>
            <hr>
            <div class="grid-container">
                <!-- Fur Parent Information -->
                <div class="grid-item bold">User ID:</div>
                <div class="grid-item">{{ $adopt->user->id }}</div>
                <div class="grid-item bold">Account Name:</div>
                <div class="grid-item">{{ $adopt->user->fname }} {{ $adopt->user->lname }}</div>
                <div class="grid-item bold">Email:</div>
                <div class="grid-item">{{ $adopt->user->email }}</div>
                <div class="grid-item bold">Phone Number:</div>
                <div class="grid-item">{{ $adopt->user->phone_number }}</div>
                <div class="grid-item bold">Birthdate:</div>
                <div class="grid-item">{{ $adopt->user->birthdate }}</div>
                <div class="grid-item bold">Address:</div>
                <div class="grid-item">{{ $adopt->user->address }}</div>
                <div class="grid-item bold">Postal Code:</div>
                <div class="grid-item">{{ $adopt->user->postal_code }}</div>
            </div>
        </div>

        <div class="account-info container-fluid" style="background: white; margin: 20px; padding: 20px;">
            <h3>Household information</h3>
            <hr>
            <div class="grid-item bold">Age of the youngest child in your house?</div>
            <div class="grid-item">{{ $adopt->phone_number }}</div>
            <div class="grid-item bold">Do you have a secure outdoor area?</div>
            <div class="grid-item">{{ $adopt->first_name }}</div>
            <div class="grid-item bold">Where will the animal sleep at night? </div>
            <div class="grid-item">{{ $adopt->last_name }}</div>
            <div class="grid-item bold">Are you willing to invest time and effort in training and socializing your new pet?</div>
            <div class="grid-item">{{ $adopt->house_number }}</div>
            <div class="grid-item bold">Does anyone in your household have allergies to animals?</div>
            <div class="grid-item">{{ $adopt->street }}</div>
            <div class="grid-item bold">Do you own or rent your home?</div>
            <div class="grid-item">{{ $adopt->city }}</div>
            <div class="grid-item bold">Will the animal be left alone for long periods of time?</div>
            <div class="grid-item">{{ $adopt->email_address }}</div>
        </div>

        <!-- Adopted Dog Information Part -->
        <div class="dog-info container-fluid" style="background: white; margin: 20px; padding: 20px;">
            <h2>Adopted Pet</h2>
            <hr>
            <div class="grid-container">
                @if ($adopt->dog)
                <div class="grid-item bold">Pet ID:</div>
                <div class="grid-item">{{ $adopt->dog->id }}</div>
                <div class="grid-item bold">Pet Name:</div>
                <div class="grid-item">{{ $adopt->dog->name }}</div>
                <div class="grid-item bold">Pet Age:</div>
                <div class="grid-item">{{ $adopt->dog->age }}</div>
                <div class="grid-item bold">Pet type/breed:</div>
                <div class="grid-item">{{ $adopt->dog->breed }}</div>
                <div class="grid-item bold">Pet Gender:</div>
                <div class="grid-item">{{ $adopt->dog->gender }}</div>
                <div class="grid-item bold">Pet Image:</div>
                <div class="grid-item">
                    <img src="{{ asset('dog/' . $adopt->dog->image) }}" alt="Dog Image" style="max-width: 70%; height: 70%;">
                </div>
                @else
                <div class="grid-item" colspan="2">No associated dog information</div>
                @endif
            </div>
            <hr>
        </div>

        <!-- Remarks input box and buttons -->
        <div class="remarks-container" style="margin: 20px; padding: 20px; display: flex; justify-content: space-between; align-items: center;">
            <form action="{{ route('adopts.addRemark', ['adopt' => $adopt->id]) }}" method="POST" style="width: 100%; display: flex;">
                @csrf
                <input type="text" class="remarks" placeholder="Add remarks for client" id="remarks" name="remarks" required="" style="width: 90%; margin-right: 10px; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                <button type="submit" class="btn btn-primary">Add Remark</button>
            </form>
        </div>
        
        <!-- Adoption Status Buttons -->
        <div class="adoption-status" style="margin: 20px; padding: 20px; display: flex; justify-content: space-between;">
            <!-- Mark as Ineligible Button Form -->
            @if ($adopt->adopt_status !== 'Completed')
            <form action="{{ route('admin.declineStatus', ['adopt' => $adopt, 'status' => 'Declined']) }}" method="post" onsubmit="return confirm('Are you sure you want to decline this adoption?');">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-danger">Mark as Ineligible</button>
            </form>
            @endif
        
            <!-- Complete Adoption Button Form -->
            @if ($adopt->adopt_status !== 'Completed')
            <form action="{{ route('adopts.updateStatus', ['adopt' => $adopt, 'status' => 'Completed']) }}" method="post" onsubmit="return confirm('Are you sure you want to mark this adoption as completed?');">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Complete Adoption</button>
            </form>
            @endif
        </div>
@endsection

<!-- CSS styles for the grid layout -->
<style>
    .grid-container {
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 10px;
    }

    .grid-item {
        padding: 5px;
        border: 1px solid #ddd;
    }

    .grid-item.bold {
        font-weight: bold;
    }
</style>