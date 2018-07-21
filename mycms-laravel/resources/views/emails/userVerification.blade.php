@extends('emails.layouts.default')
@section('content')
    <td align="center" style="border-collapse: collapse; border-spacing: 0; padding: 50px;">
        @include('emails.includes.header')
        <!-- Body Content Start -->
        <p style="font-size: 22px; line-height: 22px; margin: 0; padding: 0;">
            Hello {{ $user->first_name }} {{ $user->last_name }},</p>
        <div style="text-align: left;" align="left">
            <p style="font-size: 20px; line-height: 28px; margin: 20px 0 0; padding: 0;">
                Thanks for signing up at {{ env('APP_NAME') }}. Please click on the below link to verify your email account.
            </p>
        </div>
        <p style="font-size: 20px; line-height: 22px; margin: 0; padding: 0;">
            <a href="{{url('user/verification', $user->userVerification->token)}}" class="action-button">
                Verify Email</a>
        </p>
        <div style="width: 100px; margin: 35px 0px; border: 1px solid #e9e9e9;"></div>
        <p style="font-size: 20px; line-height: 22px; margin: 0; padding: 0;">
            Sincerely,
        </p>
        <p style="font-size: 22px; font-weight: bold; line-height: 22px; margin: 10px 0 0; padding: 0;">
            The {{ env('APP_NAME') }} Team
        </p>
        <!-- Body Content Ends -->
    </td>
@endsection
