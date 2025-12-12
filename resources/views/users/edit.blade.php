@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <div class="bg-base-100 shadow-base-300/20 w-full space-y-6 rounded-xl p-6 shadow-md lg:p-8">
            <div>
                <h3 class="text-base-content mb-1.5 text-2xl font-semibold">Edit User</h3>
                <p class="text-base-content/80">Update user information</p>
            </div>

            <form action="{{ route('users.update', $user) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="label-text" for="userName">Name*</label>
                    <input type="text" name="name" placeholder="Enter name" class="input @error('name') input-error @enderror" id="userName" value="{{ old('name', $user->name) }}" required />
                    @error('name')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="label-text" for="userEmail">Email address*</label>
                    <input type="email" name="email" placeholder="Enter email address" class="input @error('email') input-error @enderror" id="userEmail" value="{{ old('email', $user->email) }}" required />
                    @error('email')
                    <span class="text-error text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center gap-3 pt-2">
                    <button type="submit" class="btn btn-lg btn-primary btn-gradient">
                        Update User
                    </button>

                    <a href="{{ route('users.index') }}" class="btn btn-lg btn-outline">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

